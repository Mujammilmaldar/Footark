"""
Quick Chrome Process Killer
Run this if you get "Chrome instance exited" error
"""

import subprocess
import sys
import time

def kill_chrome():
    print("="*60)
    print("CHROME PROCESS KILLER")
    print("="*60)
    
    try:
        if sys.platform == 'win32':
            print("\nChecking for Chrome processes...")
            
            # Check if Chrome is running
            result = subprocess.run(['tasklist', '/FI', 'IMAGENAME eq chrome.exe'], 
                                  capture_output=True, 
                                  text=True)
            
            if 'chrome.exe' in result.stdout:
                print("✓ Found Chrome processes running")
                print("\nKilling all Chrome processes...")
                
                subprocess.run(['taskkill', '/F', '/IM', 'chrome.exe', '/T'], 
                             capture_output=True)
                
                time.sleep(2)
                
                # Verify
                result2 = subprocess.run(['tasklist', '/FI', 'IMAGENAME eq chrome.exe'], 
                                       capture_output=True, 
                                       text=True)
                
                if 'chrome.exe' not in result2.stdout:
                    print("✓✓✓ All Chrome processes closed successfully!")
                else:
                    print("⚠ Some Chrome processes may still be running")
                    print("Please close them manually via Task Manager")
            else:
                print("✓ No Chrome processes found - all clear!")
        else:
            # Linux/Mac
            print("\nKilling Chrome...")
            subprocess.run(['pkill', '-9', 'chrome'], capture_output=True)
            print("✓ Done!")
    
    except Exception as e:
        print(f"\n✗ Error: {str(e)}")
        print("\nManual steps:")
        print("1. Open Task Manager (Ctrl+Shift+Esc)")
        print("2. Find all 'Google Chrome' processes")
        print("3. Right-click → End Task for each")
    
    print("\n" + "="*60)
    print("You can now run automate.py")
    print("="*60)

if __name__ == "__main__":
    kill_chrome()
    input("\nPress ENTER to exit...")
