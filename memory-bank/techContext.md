# Technical Context

## Technologies Used

### Core Technologies
- **WordPress**: Core CMS platform
- **PHP**: Server-side scripting language
- **TailwindCSS**: Utility-first CSS framework
- **JavaScript**: Client-side interactivity
- **HTML/CSS**: Base markup and styling

### Build Tools
- **Node.js**: JavaScript runtime for development tools
- **PostCSS**: Tool for transforming CSS with JavaScript
- **npm/yarn**: Package management

### WordPress Specific
- Custom template files
- WordPress template hierarchy
- WordPress hooks and filters
- Custom widgets
- Custom navigation walker

## Development Setup

### Prerequisites
- WordPress installation
- Node.js and npm/yarn
- Local development environment (XAMPP, Local by Flywheel, etc.)

### Installation
1. Clone the repository into the WordPress themes directory
2. Install npm dependencies:
   ```
   npm install
   ```
3. Build the CSS:
   ```
   npm run build
   ```
4. Activate the theme in WordPress admin

### Development Workflow
1. Run TailwindCSS in watch mode:
   ```
   npm run dev
   ```
2. Edit PHP, HTML, JS, and CSS files
3. WordPress templates will automatically update
4. TailwindCSS will rebuild on file changes

## Technical Constraints

### WordPress Compatibility
- Must work with WordPress 5.9+
- Follows WordPress coding standards
- Compatible with common WordPress plugins

### Browser Support
- Modern browsers (Chrome, Firefox, Safari, Edge)
- IE11 not fully supported

### Performance Requirements
- Google PageSpeed score of 90+ on mobile
- Optimized image loading
- Minimal render-blocking resources
- Efficient CSS (purged unused styles)

### Accessibility
- WCAG 2.1 AA compliance target
- Semantic HTML structure
- Keyboard navigation support
- Screen reader compatibility

## Dependencies

### External Libraries
- **TailwindCSS**: Styling framework
- **PostCSS**: CSS processing
  
### WordPress Plugins (Recommended)
- Advanced Custom Fields
- Elementor (optional)
- Yoast SEO
- Contact Form 7

### Third-Party Services
- Google Fonts
- FontAwesome or other icon libraries 