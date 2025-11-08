# TROUBLESHOOTING GUIDE - Gemini Automation Issues

## Issue: Chrome opens but not logged in

### Solution 1: Login Manually
1. When script opens Chrome, **manually login** to your Google account
2. Navigate to gemini.google.com
3. Complete login process
4. Return to terminal and press ENTER

### Solution 2: Use Your Default Chrome Profile (RECOMMENDED)
This keeps you logged in automatically!

Edit `automate.py` around line 105:

**UNCOMMENT these lines:**
```python
user_data_dir = os.path.expanduser(r"~\AppData\Local\Google\Chrome\User Data")
chrome_options.add_argument(f"--user-data-dir={user_data_dir}")
chrome_options.add_argument("--profile-directory=Default")
```

**⚠ Important:** Close ALL Chrome windows before running script with this option!

---

## Issue: "Chat input not found" error

### Diagnosis Steps:
1. Run the test script first:
   ```powershell
   python test_gemini.py
   ```

2. This will tell you:
   - If you're logged in ✓
   - Which selector works ✓
   - If Gemini is accessible ✓

### Solutions:

**A) Wait Longer for Page Load**
Edit `automate.py` line 16-17:
```python
WAIT_TIME = 10  # Increase from 5 to 10
GENERATION_WAIT = 45  # Increase from 30 to 45
```

**B) Use Different Gemini URL**
Try these alternative URLs in `automate.py` line 16:
```python
GEMINI_URL = "https://gemini.google.com/app"
# or
GEMINI_URL = "https://aistudio.google.com/app/prompts/new_chat"
```

**C) Manual Intervention Mode**
The script now has built-in manual fallback:
- If automation fails, it will ask you to send manually
- Just type/click Send in the browser
- Press ENTER in terminal to continue

---

## Issue: Images not uploading

### Check Reference Image Path:
```python
# Line 17 in automate.py - Update this:
REFERENCE_IMAGE_PATH = r"C:\xampp\htdocs\Footark\assets\images\your-image.jpg"
```

### Verify Image Exists:
```powershell
Test-Path "C:\xampp\htdocs\Footark\assets\images\your-image.jpg"
```
Should return: `True`

### Supported Formats:
- `.jpg` / `.jpeg` ✓
- `.png` ✓
- `.webp` ✓
- `.avif` ⚠ (may not work)

---

## Issue: Script stops/crashes

### Error Messages:

**1. "Module not found: selenium"**
```powershell
pip install selenium webdriver-manager
```

**2. "ChromeDriver version mismatch"**
```powershell
pip install --upgrade selenium webdriver-manager
```

**3. "Chrome not found"**
Install Google Chrome browser from google.com/chrome

**4. "Deprecated endpoint" (Bluetooth error)**
This is harmless - ignore it! Just a Chrome warning.

---

## Issue: Too many tabs opened

### Current Behavior:
Opens 33+ tabs (21 conditions + 12 treatments)

### Solutions:

**A) Process in Batches**
Edit `automate.py` around line 220:

```python
# Process only first 5 conditions
for i, condition in enumerate(CONDITIONS[:5], 1):
```

**B) Process Only Conditions OR Treatments**
Comment out one section:

```python
# Skip treatments for now
# for i, treatment in enumerate(TREATMENTS, 1):
#     # ... treatment code
```

---

## Issue: Gemini not generating images

### Possible Causes:

1. **Prompt too long** - Script generates detailed prompts
2. **Gemini rate limiting** - Too many requests too fast
3. **Account restrictions** - Free tier limits

### Solutions:

**Increase wait time between requests:**
```python
WAIT_TIME = 10  # Line 18
GENERATION_WAIT = 60  # Wait 1 minute per image
```

**Add delay between conditions:**
Edit around line 230:
```python
success = send_to_gemini(driver, condition, is_treatment=False, tab_number=tab_counter)
time.sleep(10)  # ADD THIS - Wait 10 seconds before next
```

---

## Best Practices

### Before Running:
✅ Install selenium: `pip install selenium webdriver-manager`
✅ Update reference image path
✅ Run test script: `python test_gemini.py`
✅ Close all Chrome windows
✅ Have stable internet connection

### During Running:
✅ Don't touch the browser
✅ Watch terminal for errors
✅ Keep browser visible (don't minimize)
✅ Be patient - takes 30-60 minutes total

### After Running:
✅ Check each tab for quality
✅ Download images manually
✅ Rename files properly
✅ Save to correct folders

---

## Quick Fixes Reference

| Problem | Quick Fix |
|---------|-----------|
| Not logged in | Edit line 105-107, uncomment profile settings |
| Can't find input | Run `test_gemini.py` first |
| Selenium error | `pip install selenium webdriver-manager` |
| Too slow | Increase WAIT_TIME (line 18) |
| Too fast/rate limited | Add time.sleep(10) between requests |
| Images not uploading | Check REFERENCE_IMAGE_PATH (line 17) |
| Chrome crashes | Close all Chrome first, rerun script |

---

## Still Not Working?

### Manual Alternative:
1. Open gemini.google.com manually
2. Copy prompts from terminal output
3. Paste into Gemini
4. Upload reference image manually
5. Download generated images

### Get Help:
1. Run test script: `python test_gemini.py`
2. Check output for specific errors
3. Review this troubleshooting guide
4. Check Selenium version: `pip show selenium`

---

**Last Updated:** November 8, 2025
**Script Version:** automate.py v2.0 (Enhanced)
