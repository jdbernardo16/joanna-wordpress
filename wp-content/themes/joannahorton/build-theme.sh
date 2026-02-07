#!/bin/bash

# Build script for creating a distributable WordPress theme ZIP package
# This script compiles assets and creates a production-ready theme package

set -e  # Exit on any error

THEME_NAME="joannahorton"
OUTPUT_DIR="dist-package"
ZIP_FILE="${THEME_NAME}-theme.zip"

echo "==================================="
echo "WordPress Theme Build Script"
echo "==================================="
echo ""

# Clean up previous builds
echo "🧹 Cleaning up previous builds..."
rm -rf "${OUTPUT_DIR}"
rm -f "${ZIP_FILE}"
rm -rf tailpress_build_*
echo "✓ Cleanup complete"
echo ""

# Step 1: Build assets with Vite
echo "🏗️  Building assets with Vite..."
npm run build
echo "✓ Assets built successfully"
echo ""

# Step 2: Install production Composer dependencies
echo "📦 Installing production Composer dependencies..."
composer install --no-dev --optimize-autoloader --no-interaction
echo "✓ Composer dependencies installed"
echo ""

# Step 3: Create distribution directory
echo "📁 Creating distribution directory..."
mkdir -p "${OUTPUT_DIR}"
echo "✓ Distribution directory created"
echo ""

# Step 4: Copy theme files excluding development files
echo "📋 Copying theme files..."

# Files/directories to include
INCLUDE_FILES=(
    "404.php"
    "assets"
    "CHANGELOG.md"
    "comments.php"
    "composer.json"
    "composer.lock"
    "dist"
    "favico.ico"
    "footer.php"
    "front-page.php"
    "functions.php"
    "header.php"
    "IMAGE_GUIDE.md"
    "index.php"
    "LICENSE"
    "README.MD"
    "resources"
    "safelist.txt"
    "screenshot.png"
    "searchform.php"
    "single.php"
    "src"
    "style.css"
    "template-parts"
    "theme.json"
    "vendor"
)

# Copy each file/directory
for item in "${INCLUDE_FILES[@]}"; do
    if [ -e "$item" ]; then
        echo "  Copying: $item"
        cp -r "$item" "${OUTPUT_DIR}/"
    else
        echo "  ⚠️  Warning: $item not found, skipping"
    fi
done

echo "✓ Theme files copied"
echo ""

# Step 5: Create ZIP archive
echo "🗜️  Creating ZIP archive..."
cd "${OUTPUT_DIR}"
zip -r "../${ZIP_FILE}" . -x "*.DS_Store" "*.git*"
cd ..
echo "✓ ZIP archive created: ${ZIP_FILE}"
echo ""

# Display summary
echo "==================================="
echo "Build Complete!"
echo "==================================="
echo "📦 Package: ${ZIP_FILE}"
echo "📊 Size: $(du -h "${ZIP_FILE}" | cut -f1)"
echo ""
echo "The theme package is ready for distribution."
echo "You can install it in WordPress by uploading ${ZIP_FILE}"
echo "via Appearance > Themes > Add New > Upload Theme"
echo ""
