# VV Agency WordPress Theme

A custom WordPress theme for VV Agency, featuring modern design with TailwindCSS, comprehensive service pages, and WordPress Customizer integration.

## Features

- **Modern Design**: Built with TailwindCSS for responsive, mobile-first design
- **Service Pages**: Dedicated pages for various marketing services (SEO, Social Media, Web Design, etc.)
- **Solution Pages**: Industry-specific solution pages for different business sectors
- **WordPress Integration**: Full WordPress theme with custom widgets, menus, and Customizer options
- **Performance Optimized**: Minified CSS builds for production

## Project Structure

```
agency/
├── template/           # Original HTML templates
├── services/           # Service-specific page templates
├── giai-phap/          # Industry solution page templates
├── src/css/            # Source CSS files
├── js/                 # JavaScript files
├── memory-bank/        # Project documentation
├── template-parts/     # Reusable template components
└── tests/              # Test files
```

## Development Setup

### Prerequisites

- WordPress installation
- Node.js and npm
- PHP 7.4 or higher

### Installation

1. Clone or download this theme into your WordPress themes directory:
   ```bash
   wp-content/themes/agency/
   ```

2. Activate the theme in WordPress admin under Appearance > Themes

3. Install dependencies:
   ```bash
   npm install
   ```

### Development Workflow

#### CSS Development
- Run development mode with live reloading:
  ```bash
  npm run watch:css
  ```

- Build production CSS:
  ```bash
  npm run build:css
  ```

#### WordPress Setup
- The theme includes automated page setup via `setup-pages.php`
- Configure theme options through WordPress Customizer
- Widget areas are available for homepage sections

## Available Scripts

- `npm run watch:css` - Watch CSS files and rebuild on changes
- `npm run build:css` - Build minified CSS for production

## Testing

Install BeautifulSoup for HTML parsing tests:

```bash
pip install beautifulsoup4
```

Run the tests:

```bash
python -m unittest
```

## Documentation

Comprehensive project documentation is available in the `memory-bank/` directory:
- `projectbrief.md` - Project overview and requirements
- `techContext.md` - Technical implementation details
- `systemPatterns.md` - Development patterns and conventions
- `progress.md` - Development progress and milestones
- `activeContext.md` - Current development context
- `productContext.md` - Product and business context

## WordPress Features

- **Custom Navigation Walker**: Enhanced menu system with icon support
- **Service Widgets**: Configurable service card displays
- **Customizer Integration**: Theme options through WordPress Customizer
- **Responsive Design**: Mobile-optimized layouts
- **SEO Optimized**: Clean markup and semantic HTML

## Contributing

1. Follow WordPress coding standards
2. Test changes across multiple devices and browsers
3. Update documentation in `memory-bank/` as needed
4. Ensure responsive design works on all screen sizes
