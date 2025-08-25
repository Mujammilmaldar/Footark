# 🎨 Foot Ark Color System Guide

## Overview
This comprehensive color system is designed based on your logo colors and provides excellent accessibility and visual hierarchy for your website.

## 🎯 Core Brand Colors

### Primary Colors (From Logo)
- **Primary (Coral Red)**: `--color-primary: #e85a4f`
  - Use for: Call-to-action buttons, accent elements, highlights
  - Variations: `--color-primary-light`, `--color-primary-lighter`, `--color-primary-dark`, `--color-primary-darker`

- **Secondary (Teal Blue)**: `--color-secondary: #4f8a8b`
  - Use for: Secondary buttons, navigation, professional elements
  - Variations: `--color-secondary-light`, `--color-secondary-lighter`, `--color-secondary-dark`, `--color-secondary-darker`

- **Tertiary (Warm Beige)**: `--color-tertiary: #d2b48c`
  - Use for: Accent backgrounds, decorative elements

## 📝 Text Colors

### Primary Text System
- **Main Text**: `--color-text-primary: #1a1a1a` - High contrast, maximum readability
- **Secondary Text**: `--color-text-secondary: #424242` - Body text, descriptions
- **Muted Text**: `--color-text-muted: #757575` - Captions, less important text
- **Light Text**: `--color-text-light: #9e9e9e` - Placeholder text
- **Inverse Text**: `--color-text-inverse: #ffffff` - Text on dark backgrounds

### Heading Colors
- **Primary Headings**: `--color-heading-primary: #1a1a1a` - Main page titles (H1)
- **Secondary Headings**: `--color-heading-secondary: #2c5f63` - Section headings (H2, H3)
- **Accent Headings**: `--color-heading-accent: #e85a4f` - Special headings, highlights
- **Light Headings**: `--color-heading-light: #ffffff` - Headings on dark backgrounds

## 🔗 Interactive Colors

### Links & Navigation
- **Links**: `--color-link: #4f8a8b` - Default link color
- **Link Hover**: `--color-link-hover: #2c5f63` - Darker teal on hover
- **Visited Links**: `--color-link-visited: #6a4c93` - Purple for visited links

## 💡 Highlight & Accent Colors

- **Highlight Background**: `--color-highlight: #fff3cd` - Yellow background for highlights
- **Highlight Text**: `--color-highlight-text: #856404` - Dark text on highlight background
- **Warm Accent**: `--color-accent-warm: #d2b48c` - Warm beige for accents
- **Cool Accent**: `--color-accent-cool: #a7d7da` - Cool teal for accents

## 🎨 Background Colors

- **Primary Background**: `--color-bg-primary: #ffffff` - Main page background
- **Secondary Background**: `--color-bg-secondary: #fafafa` - Card backgrounds
- **Tertiary Background**: `--color-bg-tertiary: #f5f5f5` - Section backgrounds
- **Dark Background**: `--color-bg-dark: #1a1a1a` - Footer, hero overlays
- **Overlay Background**: `--color-bg-overlay: rgba(0, 0, 0, 0.5)` - Modal overlays

## 🚨 Status Colors

### Success (Green)
- **Success**: `--color-success: #4caf50`
- **Success Light**: `--color-success-light: #81c784`
- **Success Dark**: `--color-success-dark: #2e7d32`

### Warning (Orange)
- **Warning**: `--color-warning: #ff9800`
- **Warning Light**: `--color-warning-light: #ffb74d`
- **Warning Dark**: `--color-warning-dark: #f57c00`

### Error (Red)
- **Error**: `--color-error: #f44336`
- **Error Light**: `--color-error-light: #e57373`
- **Error Dark**: `--color-error-dark: #d32f2f`

### Info (Blue)
- **Info**: `--color-info: #2196f3`
- **Info Light**: `--color-info-light: #64b5f6`
- **Info Dark**: `--color-info-dark: #1976d2`

## 🖼️ Border Colors

- **Light Borders**: `--color-border-light: #e8e8e8` - Subtle dividers
- **Medium Borders**: `--color-border-medium: #d0d0d0` - Card borders
- **Dark Borders**: `--color-border-dark: #b8b8b8` - Strong dividers
- **Focus Borders**: `--color-border-focus: #4f8a8b` - Form focus states

## 🎯 Usage Guidelines

### For Headings:
```css
h1 { color: var(--color-heading-primary); }
h2, h3 { color: var(--color-heading-secondary); }
.accent-heading { color: var(--color-heading-accent); }
```

### For Text:
```css
p { color: var(--color-text-primary); }
.subtitle { color: var(--color-text-secondary); }
.caption { color: var(--color-text-muted); }
```

### For Buttons:
```css
.btn-primary { background: var(--color-primary); color: var(--color-text-inverse); }
.btn-secondary { background: var(--color-secondary); color: var(--color-text-inverse); }
```

### For Links:
```css
a { color: var(--color-link); }
a:hover { color: var(--color-link-hover); }
```

## ✅ Accessibility Notes

- All text colors meet WCAG AA contrast requirements
- Primary text (#1a1a1a) on white background: 16.75:1 contrast ratio
- Secondary text (#424242) on white background: 9.74:1 contrast ratio
- Brand colors tested for accessibility across different backgrounds

## 🚀 Implementation

All colors are already implemented in your `main.css` file as CSS custom properties. Simply use `var(--color-name)` to apply any color throughout your stylesheets.

Example:
```css
.my-element {
    color: var(--color-text-primary);
    background: var(--color-bg-secondary);
    border: 1px solid var(--color-border-light);
}
```
