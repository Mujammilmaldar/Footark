"""
Automated Image Generation Script for Footark Conditions & Treatments
Uses Gemini AI to generate medical images for all conditions and treatments
"""

import time
import webbrowser
from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
from selenium.webdriver.chrome.options import Options
import os
import subprocess
import sys

# Configuration
GEMINI_URL = "https://gemini.google.com/app"  # Updated to /app version
REFERENCE_IMAGE_PATH = r"C:\xampp\htdocs\Footark\assets\images\services\inner-pages\AnkleSprain.webp"  # Updated to existing image
WAIT_TIME = 5  # seconds to wait between actions
GENERATION_WAIT = 30  # seconds to wait for image generation

# All Conditions (21 items)
CONDITIONS = [
    "Achilles Tendon Pain",
    "Ankle Arthritis", 
    "Ankle Impingement",
    "Ankle Osteochondral Lesion",
    "Ankle Synovitis",
    "Ankle Sprain / Instability",
    "Arthritis - Midfoot",
    "Arthritis - Subtalar",
    "Bunion",
    "Cavus Foot",
    "Flat Foot",
    "Foot & Ankle",
    "Freiberg's Disease",
    "Great Toe",
    "Heel Pain",
    "Neuroma",
    "Peroneal Tendon Issues",
    "Sesamoiditis",
    "Tendon Rupture",
    "Toe Deformity"
]

# All Treatments (12 items)
TREATMENTS = [
    "Ankle Arthroscopy",
    "Ankle Fusion",
    "Ankle Ligament Reconstruction",
    "Big Toe Surgery",
    "Bunion Surgery",
    "Flat Foot Treatment",
    "Foot Fusion",
    "Hindfoot Endoscopy",
    "Neuroma Excision",
    "Tendon Enthesophyte",
    "Tendon Rupture Repair",
    "Toe Deformity Correction"
]

def create_prompt(name, is_treatment=False):
    """Create a detailed prompt for Gemini AI"""
    if is_treatment:
        prompt = f"""Create a professional medical illustration for "{name}" treatment/procedure.

Requirements:
- Medical and professional style similar to the reference image
- Clear anatomical visualization of the {name.lower()}
- Clean, clinical presentation
- High quality, detailed illustration
- Professional medical diagram style
- Use medical blue/grey tones
- Show the affected area clearly
- Educational and informative

Style: Medical textbook illustration, professional, anatomically accurate
Purpose: Patient education for foot and ankle specialist clinic
Quality: High-resolution, publication-ready"""
    else:
        prompt = f"""Create a professional medical illustration for "{name}" condition.

Requirements:
- Medical and professional style similar to the reference image
- Clear anatomical visualization of {name.lower()} condition
- Show the affected area with proper medical detail
- Clean, clinical presentation
- High quality, detailed illustration
- Professional medical diagram style
- Use medical blue/grey tones
- Educational and informative

Style: Medical textbook illustration, professional, anatomically accurate
Purpose: Patient education for foot and ankle specialist clinic
Quality: High-resolution, publication-ready"""
    
    return prompt

def kill_chrome_processes():
    """Kill all Chrome processes"""
    try:
        print("Closing all Chrome processes...")
        # For Windows
        if sys.platform == 'win32':
            subprocess.run(['taskkill', '/F', '/IM', 'chrome.exe', '/T'], 
                         capture_output=True, 
                         timeout=10)
            time.sleep(2)
            print("✓ Chrome processes closed")
        else:
            # For Linux/Mac
            subprocess.run(['pkill', '-9', 'chrome'], capture_output=True)
            time.sleep(2)
    except Exception as e:
        print(f"⚠ Could not auto-close Chrome: {str(e)}")
        print("Please close Chrome manually")

def setup_driver(use_profile=True):
    """Setup Chrome WebDriver with options"""
    chrome_options = Options()
    chrome_options.add_argument("--start-maximized")
    chrome_options.add_argument("--disable-blink-features=AutomationControlled")
    chrome_options.add_argument("--no-sandbox")
    chrome_options.add_argument("--disable-dev-shm-usage")
    chrome_options.add_argument("--disable-gpu")
    chrome_options.add_experimental_option("excludeSwitches", ["enable-automation"])
    chrome_options.add_experimental_option('useAutomationExtension', False)
    
    # DON'T use profile - causes conflicts
    # Always use fresh browser for Selenium
    print("Starting fresh Chrome browser for automation...")
    print("You'll need to login to Gemini manually (just once)")
    
    print("\nStarting Chrome WebDriver...")
    try:
        driver = webdriver.Chrome(options=chrome_options)
        return driver
    except Exception as e:
        print(f"\n✗ Error starting Chrome: {str(e)}")
        print("\nTroubleshooting:")
        print("1. Make sure Chrome is fully closed")
        print("2. Run: python kill_chrome.py")
        print("3. Try running automate.py again")
        raise

def send_to_gemini(driver, name, is_treatment=False, tab_number=1):
    """Send prompt and image to Gemini AI"""
    try:
        print(f"\n{'='*60}")
        print(f"Processing: {name} ({'Treatment' if is_treatment else 'Condition'})")
        print(f"Tab #{tab_number}")
        print(f"{'='*60}")
        
        # Create prompt
        prompt = create_prompt(name, is_treatment)
        
        # Wait for page to load
        print("Waiting for page to fully load...")
        time.sleep(WAIT_TIME + 3)  # Extra time for Gemini to load
        
        # Check if we need to login
        print("Checking login status...")
        try:
            # Look for sign-in button or login page
            if "sign" in driver.page_source.lower() or "login" in driver.page_source.lower():
                print("\n⚠ NOT LOGGED IN - Please login manually!")
                print("Current URL:", driver.current_url)
                input("Press ENTER after logging in...")
        except:
            pass
        
        # Find the chat input textarea with multiple methods
        print("Looking for chat input...")
        chat_input = None
        
        # Method 1: Try the EXACT Gemini selectors from your HTML
        selectors = [
            ".ql-editor",  # The actual contenteditable div you shared
            "div[contenteditable='true'][aria-label*='prompt']",
            "div[contenteditable='true'][aria-label*='Ask']",
            "div.ql-editor.textarea",
            "rich-textarea .ql-editor",
            "textarea",
            "div[contenteditable='true']"
        ]
        
        for selector in selectors:
            try:
                chat_input = WebDriverWait(driver, 10).until(
                    EC.presence_of_element_located((By.CSS_SELECTOR, selector))
                )
                if chat_input.is_displayed():
                    print(f"✓ Chat input found using: {selector}")
                    break
                else:
                    chat_input = None
            except:
                continue
        
        if not chat_input:
            print("✗ Chat input not found with CSS selectors. Trying XPath...")
            try:
                chat_input = driver.find_element(By.XPATH, "//textarea | //div[@contenteditable='true']")
                print("✓ Chat input found using XPath!")
            except:
                print("✗ Could not find chat input!")
                print("Current URL:", driver.current_url)
                print("\nPlease check:")
                print("1. Are you logged into Gemini?")
                print("2. Is the page fully loaded?")
                input("\nPress ENTER to retry or Ctrl+C to exit...")
                return False
        
        # Click on the input to focus
        print("Focusing on chat input...")
        try:
            driver.execute_script("arguments[0].scrollIntoView(true);", chat_input)
            time.sleep(1)
            driver.execute_script("arguments[0].focus();", chat_input)
            chat_input.click()
            time.sleep(2)
        except:
            print("⚠ Could not focus on input, continuing...")
        
        # Type the prompt
        print("Typing prompt...")
        try:
            # For contenteditable divs, use different method
            if chat_input.get_attribute("contenteditable") == "true":
                # Use JavaScript for contenteditable elements
                driver.execute_script("arguments[0].innerText = arguments[1];", chat_input, prompt)
                print("✓ Prompt typed successfully (using JavaScript)!")
            else:
                # Regular input/textarea
                chat_input.clear()
                chat_input.send_keys(prompt)
                print("✓ Prompt typed successfully!")
            time.sleep(2)
        except Exception as e:
            print(f"⚠ Error typing: {str(e)}")
            # Fallback method
            print("Using alternative typing method...")
            driver.execute_script("arguments[0].textContent = arguments[1];", chat_input, prompt)
            time.sleep(2)
        
        # Try to upload reference image if exists
        if os.path.exists(REFERENCE_IMAGE_PATH):
            print("Looking for image upload button...")
            try:
                # Multiple methods to find upload button
                upload_input = None
                
                # Method 1: Direct file input
                try:
                    upload_input = driver.find_element(By.CSS_SELECTOR, "input[type='file']")
                except:
                    pass
                
                # Method 2: Look for upload button then find file input
                if not upload_input:
                    try:
                        upload_buttons = driver.find_elements(By.CSS_SELECTOR, "button[aria-label*='upload'], button[aria-label*='attach'], button[title*='upload']")
                        for btn in upload_buttons:
                            btn.click()
                            time.sleep(1)
                            upload_input = driver.find_element(By.CSS_SELECTOR, "input[type='file']")
                            break
                    except:
                        pass
                
                if upload_input:
                    upload_input.send_keys(REFERENCE_IMAGE_PATH)
                    print(f"✓ Reference image uploaded: {os.path.basename(REFERENCE_IMAGE_PATH)}")
                    time.sleep(3)
                else:
                    print("⚠ Could not find upload button. Continuing without reference image...")
            except Exception as e:
                print(f"⚠ Image upload failed: {str(e)}")
        else:
            print(f"⚠ Reference image not found at: {REFERENCE_IMAGE_PATH}")
        
        # Send the message (press Enter or click send button)
        print("Sending message...")
        sent = False
        
        # Method 1: Click the send button (from your HTML: button.send-button)
        try:
            send_button = driver.find_element(By.CSS_SELECTOR, "button.send-button")
            if send_button.is_displayed() and send_button.is_enabled():
                send_button.click()
                print("✓ Message sent using send button!")
                sent = True
        except:
            pass
        
        # Method 2: Try other send button selectors
        if not sent:
            try:
                send_selectors = [
                    "button[aria-label*='Send message']",
                    "button[aria-label*='Send']",
                    "button.submit",
                    "button mat-icon[fonticon='send']",
                    "button[jslog*='Send']"
                ]
                
                for selector in send_selectors:
                    try:
                        send_button = driver.find_element(By.CSS_SELECTOR, selector)
                        if send_button.is_displayed():
                            send_button.click()
                            print(f"✓ Message sent using: {selector}")
                            sent = True
                            break
                    except:
                        continue
            except:
                pass
        
        if not sent:
            print("⚠ Could not send message automatically")
            print("Please send the message manually by pressing Enter")
            input("Press ENTER after sending...")
            sent = True
        
        # Wait for generation
        print(f"Waiting {GENERATION_WAIT} seconds for image generation...")
        time.sleep(GENERATION_WAIT)
        
        print(f"✓ Completed: {name}")
        return True
        
    except Exception as e:
        print(f"✗ Error processing {name}: {str(e)}")
        return False

def main():
    """Main automation function"""
    print("="*60)
    print("FOOTARK - GEMINI AI IMAGE GENERATOR")
    print("="*60)
    print(f"\nTotal Conditions: {len(CONDITIONS)}")
    print(f"Total Treatments: {len(TREATMENTS)}")
    print(f"Total Images to Generate: {len(CONDITIONS) + len(TREATMENTS)}")
    print(f"\nReference Image: {REFERENCE_IMAGE_PATH}")
    
    if not os.path.exists(REFERENCE_IMAGE_PATH):
        print(f"\n⚠ WARNING: Reference image not found!")
        print(f"Please update REFERENCE_IMAGE_PATH in the script.")
        response = input("\nContinue anyway? (y/n): ")
        if response.lower() != 'y':
            return
    
    print("\n" + "="*60)
    input("Press ENTER to start automation...")
    print("="*60)
    
    # Setup driver (always fresh browser - no profile conflicts)
    print("\nSetting up Chrome WebDriver...")
    driver = setup_driver(use_profile=False)
    
    try:
        # Open first tab with Gemini
        print(f"\nOpening Gemini AI: {GEMINI_URL}")
        driver.get(GEMINI_URL)
        
        print("\n" + "="*60)
        print("⚠ IMPORTANT SETUP STEPS:")
        print("="*60)
        print("1. Check if you are logged into Google/Gemini")
        print("2. If not logged in, please login now")
        print("3. Wait for Gemini chat interface to load completely")
        print("4. You should see the chat input box")
        print("="*60)
        print("\nCurrent URL:", driver.current_url)
        
        response = input("\nAre you logged in and ready? (y/n): ")
        if response.lower() != 'y':
            print("\nPlease login and then run the script again.")
            return
        
        # Test if we can find the chat input
        print("\nTesting chat interface...")
        try:
            # Try to find the contenteditable div (Gemini's input)
            test_input = driver.find_element(By.CSS_SELECTOR, ".ql-editor, div[contenteditable='true']")
            print("✓ Chat interface detected!")
        except:
            print("✗ Chat interface not found!")
            print("\nPlease ensure:")
            print("- You are on gemini.google.com/app chat page")
            print("- You are logged in with your Google account") 
            print("- The page has fully loaded (wait for input box to appear)")
            response = input("\nTry anyway? (y/n): ")
            if response.lower() != 'y':
                return
        
        tab_counter = 1
        
        # Process all CONDITIONS
        print("\n" + "="*60)
        print("STARTING CONDITIONS")
        print("="*60)
        
        for i, condition in enumerate(CONDITIONS, 1):
            print(f"\n[{i}/{len(CONDITIONS)}] Processing Condition...")
            
            if i > 1:  # Open new tab for each condition after first
                driver.execute_script("window.open('');")
                driver.switch_to.window(driver.window_handles[-1])
                driver.get(GEMINI_URL)
                tab_counter += 1
                time.sleep(WAIT_TIME)
            
            success = send_to_gemini(driver, condition, is_treatment=False, tab_number=tab_counter)
            
            if not success:
                print(f"⚠ Failed to process: {condition}")
                response = input("Continue? (y/n): ")
                if response.lower() != 'y':
                    break
        
        # Process all TREATMENTS
        print("\n" + "="*60)
        print("STARTING TREATMENTS")
        print("="*60)
        
        for i, treatment in enumerate(TREATMENTS, 1):
            print(f"\n[{i}/{len(TREATMENTS)}] Processing Treatment...")
            
            # Open new tab for each treatment
            driver.execute_script("window.open('');")
            driver.switch_to.window(driver.window_handles[-1])
            driver.get(GEMINI_URL)
            tab_counter += 1
            time.sleep(WAIT_TIME)
            
            success = send_to_gemini(driver, treatment, is_treatment=True, tab_number=tab_counter)
            
            if not success:
                print(f"⚠ Failed to process: {treatment}")
                response = input("Continue? (y/n): ")
                if response.lower() != 'y':
                    break
        
        print("\n" + "="*60)
        print("✓ AUTOMATION COMPLETED!")
        print("="*60)
        print(f"\nTotal Tabs Opened: {tab_counter}")
        print("Please review and download the generated images from each tab.")
        
        input("\nPress ENTER to close browser...")
        
    except Exception as e:
        print(f"\n✗ Fatal Error: {str(e)}")
    
    finally:
        driver.quit()
        print("\n✓ Browser closed. Automation finished.")

if __name__ == "__main__":
    main()
