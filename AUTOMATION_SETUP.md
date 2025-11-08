# Footark - Gemini AI Image Generator Setup Guide

## 📋 Requirements

1. **Python 3.7+** installed on your system
2. **Google Chrome Browser** (latest version)
3. **ChromeDriver** (will be installed automatically)
4. **Internet connection**
5. **Google Account** (for Gemini access)

## 🚀 Installation Steps

### Step 1: Install Required Python Packages

Open PowerShell or Command Prompt and run:

```bash
pip install selenium webdriver-manager
```

Or if you have multiple Python versions:

```bash
python -m pip install selenium webdriver-manager
```

### Step 2: Update Reference Image Path

1. Find a good reference image (like your anklesprain image)
2. Save it in: `C:\xampp\htdocs\Footark\assets\images\`
3. Open `automate.py` and update line 15:

```python
REFERENCE_IMAGE_PATH = r"C:\xampp\htdocs\Footark\assets\images\your-reference-image.jpg"
```

### Step 3: Run the Script

```bash
cd C:\xampp\htdocs\Footark
python automate.py
```

## 📝 How It Works

1. **Opens Chrome** and navigates to gemini.google.com
2. **Waits for you** to login manually (if needed)
3. **Loops through all conditions** (21 items):
   - Opens new tab for each condition
   - Sends professional medical illustration prompt
   - Uploads reference image
   - Waits for image generation
   
4. **Loops through all treatments** (12 items):
   - Same process as conditions
   
5. **Total**: Opens 33 tabs with generated images

## ⚙️ Configuration Options

Edit these variables in `automate.py`:

```python
WAIT_TIME = 5              # Seconds between actions (increase if slow internet)
GENERATION_WAIT = 30       # Seconds to wait for image generation
```

## 📥 What You Get

Professional medical illustrations for:

### Conditions (21):
- Achilles Tendon Pain
- Ankle Arthritis
- Ankle Impingement
- Ankle Osteochondral Lesion
- Ankle Synovitis
- Ankle Sprain / Instability
- Arthritis - Midfoot
- Arthritis - Subtalar
- Bunion
- Cavus Foot
- Flat Foot
- Foot & Ankle
- Freiberg's Disease
- Great Toe
- Heel Pain
- Neuroma
- Peroneal Tendon Issues
- Sesamoiditis
- Tendon Rupture
- Toe Deformity

### Treatments (12):
- Ankle Arthroscopy
- Ankle Fusion
- Ankle Ligament Reconstruction
- Big Toe Surgery
- Bunion Surgery
- Flat Foot Treatment
- Foot Fusion
- Hindfoot Endoscopy
- Neuroma Excision
- Tendon Enthesophyte
- Tendon Rupture Repair
- Toe Deformity Correction

## 💡 Tips

1. **Run during free time** - Takes about 30-40 minutes total
2. **Download images manually** from each tab after generation
3. **Name files properly**: Save as condition-name.jpg or treatment-name.jpg
4. **Check quality** before closing tabs
5. **Save to**: `C:\xampp\htdocs\Footark\assets\images\conditions\` and `\treatments\`

## ⚠️ Troubleshooting

**If Chrome doesn't open:**
```bash
pip install --upgrade selenium webdriver-manager
```

**If it can't find chat input:**
- Wait longer for page load
- Increase `WAIT_TIME` variable
- Login to Gemini manually first

**If images don't generate:**
- Increase `GENERATION_WAIT` to 45-60 seconds
- Check your internet connection
- Verify Gemini AI access

## 🎯 After Running

1. Go through each browser tab
2. Download the generated images
3. Rename them properly
4. Save in appropriate folders
5. Update your PHP files to use new images

## 📧 Support

If you encounter issues, check:
- Python version: `python --version`
- Selenium installed: `pip show selenium`
- Chrome installed and updated

---

**Created for Footark Clinic - Dr. Abhishek Kini**
*Automated Medical Image Generation System*
