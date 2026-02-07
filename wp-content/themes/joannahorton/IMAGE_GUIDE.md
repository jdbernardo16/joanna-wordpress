# Image Guide

This document lists all images used in the Joanna Horton WordPress theme and their purposes.

## Images Location

All theme images are located in `assets/images/` directory.

## Image List

### Joanna Photos

| Filename           | Format | Purpose                              | Location         |
| ------------------ | ------ | ------------------------------------ | ---------------- |
| `joanna-hero.webp` | WebP   | Hero section photo of Joanna Horton  | `assets/images/` |
| `joanna2.webp`     | WebP   | About section photo of Joanna Horton | `assets/images/` |

### Testimonial Author Photos

| Filename    | Format | Purpose                    | Location         |
| ----------- | ------ | -------------------------- | ---------------- |
| `img.webp`  | WebP   | Testimonial author photo 1 | `assets/images/` |
| `img2.webp` | WebP   | Testimonial author photo 2 | `assets/images/` |

### Client/Partner Logos

| Filename        | Format | Purpose        | Location         |
| --------------- | ------ | -------------- | ---------------- |
| `mtv.png`       | PNG    | MTV logo       | `assets/images/` |
| `harvard.svg`   | SVG    | Harvard logo   | `assets/images/` |
| `bioneers.png`  | PNG    | Bioneers logo  | `assets/images/` |
| `usa-today.svg` | SVG    | USA Today logo | `assets/images/` |
| `flagler.png`   | PNG    | Flagler logo   | `assets/images/` |

### Favicon

| Filename     | Format | Purpose         | Location             |
| ------------ | ------ | --------------- | -------------------- |
| `favico.ico` | ICO    | Website favicon | Theme root directory |

## Usage Notes

- **WebP Format**: Joanna photos and testimonial images use WebP format for optimal performance and compression
- **SVG Format**: Harvard and USA Today logos use SVG format for scalability
- **PNG Format**: MTV, Bioneers, and Flagler logos use PNG format
- **ICO Format**: Favicon uses ICO format for browser compatibility

## Image Count Summary

- Joanna Photos: 2
- Testimonial Photos: 2
- Client/Partner Logos: 5
- Favicon: 1
- **Total: 10 images**

## WordPress Integration

To use these images in WordPress templates or content:

```php
// Example: Get image URL
$hero_image_url = get_template_directory_uri() . '/assets/images/joanna-hero.webp';

// Example: Display image
echo '<img src="' . esc_url($hero_image_url) . '" alt="Joanna Horton">';
```

For the favicon, ensure it's referenced in the theme's `header.php` or via WordPress hooks.
