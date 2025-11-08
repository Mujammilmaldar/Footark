"""
Quick test script to verify Gemini access and find the correct selectors
Run this first before running the full automation
"""

import time
from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.chrome.options import Options
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC

def test_gemini():
    print("="*60)
    print("GEMINI ACCESSIBILITY TEST")
    print("="*60)
    
    # Setup Chrome
    chrome_options = Options()
    chrome_options.add_argument("--start-maximized")
    
    print("\n1. Starting Chrome...")
    driver = webdriver.Chrome(options=chrome_options)
    
    try:
        print("2. Opening Gemini...")
        driver.get("https://gemini.google.com")
        
        print("\n3. Please login manually if needed...")
        input("Press ENTER when you see the chat interface...")
        
        print("\n4. Current URL:", driver.current_url)
        
        # Test finding chat input
        print("\n5. Testing chat input detection...")
        
        selectors = [
            ("textarea", By.TAG_NAME),
            ("textarea[placeholder*='Enter']", By.CSS_SELECTOR),
            ("div[contenteditable='true']", By.CSS_SELECTOR),
            ("rich-textarea textarea", By.CSS_SELECTOR),
            (".ql-editor", By.CSS_SELECTOR),
        ]
        
        found = []
        for selector, by_type in selectors:
            try:
                elements = driver.find_elements(by_type, selector)
                if elements:
                    visible = [e for e in elements if e.is_displayed()]
                    if visible:
                        print(f"✓ FOUND: {selector} ({len(visible)} visible)")
                        found.append((selector, by_type, visible[0]))
                    else:
                        print(f"⚠ Found but hidden: {selector}")
                else:
                    print(f"✗ Not found: {selector}")
            except Exception as e:
                print(f"✗ Error with {selector}: {str(e)[:50]}")
        
        if found:
            print(f"\n6. Testing with best selector: {found[0][0]}")
            test_element = found[0][2]
            
            try:
                test_element.click()
                test_element.send_keys("Test message - please ignore")
                print("✓ Successfully typed in chat input!")
                print("\n✓✓✓ GEMINI IS ACCESSIBLE! You can run automate.py ✓✓✓")
                
                input("\nPress ENTER to clear test and close...")
                test_element.clear()
                
            except Exception as e:
                print(f"✗ Could not interact: {str(e)}")
        else:
            print("\n✗ NO CHAT INPUT FOUND!")
            print("\nPossible issues:")
            print("- Not logged into Gemini")
            print("- Page not fully loaded")
            print("- Different Gemini version/interface")
            
            print("\nPage source preview:")
            print(driver.page_source[:500])
        
    except Exception as e:
        print(f"\n✗ Error: {str(e)}")
    
    finally:
        input("\nPress ENTER to close browser...")
        driver.quit()
        print("✓ Test complete!")

if __name__ == "__main__":
    test_gemini()
