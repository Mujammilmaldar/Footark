# RUN THIS - Easy Start Script

## Quick Steps:

### 1. First Time Setup
```powershell
# Install Selenium (only needed once)
pip install selenium webdriver-manager
```

### 2. Every Time You Run

**STEP A: Close Chrome (if needed)**
```powershell
python kill_chrome.py
```

**STEP B: Run Automation**
```powershell
python automate.py
```

**STEP C: When Asked:**
- "Continue anyway?" → Type `y` and ENTER
- "Use your profile?" → Type `y` and ENTER  
- Wait for "Press ENTER to continue..." → Press ENTER
- "Are you logged in and ready?" → Type `y` and ENTER

---

## What Happens:

1. ✅ Script auto-closes Chrome
2. ✅ Opens Chrome with YOUR profile (already logged in!)
3. ✅ Goes to Gemini
4. ✅ Opens 33 tabs (21 conditions + 12 treatments)
5. ✅ Generates medical images in each tab
6. ✅ You download images manually

---

## Current Settings:

- ✅ Reference Image: `AnkleSprain.webp` (found and set!)
- ✅ Total Images: 33 (21 conditions + 12 treatments)
- ✅ Wait Time: 5 seconds per action
- ✅ Generation Wait: 30 seconds per image

---

## If It Fails:

**Error: "Chrome instance exited"**
```powershell
python kill_chrome.py
```
Then run `python automate.py` again

**Error: "Chat input not found"**
- You're not logged in
- Choose `y` when asked "Use your profile?"
- Make sure you see Gemini chat interface

**Too slow?**
Edit `automate.py` line 19-20:
```python
WAIT_TIME = 10  # Increase from 5
GENERATION_WAIT = 45  # Increase from 30
```

---

## Test Mode (Recommended First Time)

Want to test with just 1 image first?

Edit `automate.py` line 371:
```python
for i, condition in enumerate(CONDITIONS[:1], 1):  # Only first condition
```

Comment out treatments (line 386):
```python
# Process all TREATMENTS
# for i, treatment in enumerate(TREATMENTS, 1):
#     ... all treatment code
```

This will only generate 1 image for "Achilles Tendon Pain" - perfect for testing!

---

## Ready to Go!

```powershell
python kill_chrome.py
python automate.py
```

**Total Time:** ~30-45 minutes for all 33 images

Good luck! 🚀
