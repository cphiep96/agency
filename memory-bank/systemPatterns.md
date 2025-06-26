# System Patterns

## System Architecture
The Agency theme follows standard WordPress theme architecture with enhancements:

1. **Template Hierarchy**:
   - WordPress standard templates (header.php, footer.php, index.php)
   - Custom page templates for specific sections (page-*.php files)
   - Corresponding HTML templates in the template/ directory for reference

2. **Component Structure**:
   - Header with custom navigation
   - Footer with standardized content
   - Custom widgets for service presentation
   - Reusable content blocks for consistent design

## Key Technical Decisions

### TailwindCSS Implementation
The theme uses TailwindCSS for styling, providing:
- Utility-first CSS approach
- Responsive design without custom media queries
- Consistent design system
- PostCSS processing for optimized output

### Navigation System
- Custom navigation walker (Agency_Nav_Walker) for enhanced menu functionality
- Support for dropdown menus
- Icon integration in menu items using syntax: "icon_class | Menu Item Name"

### Custom Widget Implementation
- VV_Agency_Services_Widget for displaying service cards in grid layout
- Service cards with image, icon, title, and description
- Hover effects for interactive user experience

### Template Structure
- Base HTML templates stored in template/ directory
- PHP templates that integrate WordPress functionality
- Separation of concerns between presentation and functionality

## Design Patterns

### Service Presentation Pattern
Services are displayed using a consistent card-based design with:
- Featured image
- Service icon
- Title
- Description
- Hover effects for interaction

### Page Structure Pattern
Each page follows a consistent structure:
1. Header with navigation
2. Page-specific hero/banner section
3. Content sections specific to page purpose
4. Call-to-action elements
5. Footer with contact information and navigation

## Component Relationships
- Templates inherit from header.php and footer.php
- Page templates implement specific content between header and footer
- Custom widgets are registered and used within templates
- Navigation walker enhances standard WordPress menu system

## Development Workflow
- HTML templates created first in template/ directory
- PHP templates developed to implement WordPress functionality
- TailwindCSS used for styling throughout the templates
- JavaScript for interactive elements added through wp_enqueue_script 