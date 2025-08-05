# Government Dental College & Hospital Website - Developer Manual

## Project Overview

This is the official website for Government Dental College & Hospital Chhatrapati Sambhajinagar. The website is built using PHP and follows a modular structure for easy maintenance and updates.

## Technology Stack

- Backend: PHP
- Web Server: Apache
- Version Control: Git
- Hosting: Government Cloud Service VM (ERNET)

## Project Structure

```
/
├── about-us/           # About us section
├── admission/          # Admission related pages
├── alumni-association/ # Alumni association section
├── assets/            # Static assets like images
├── css/               # CSS stylesheets
├── departments/       # Department specific pages
├── includes/          # Common components and initialization
│   ├── _init.php     # Global initialization and config
│   ├── _navbar.php   # Navigation bar component
│   └── _footer.php   # Footer component
├── js/               # JavaScript files
├── naac/             # NAAC related content
├── public/           # Public assets
├── recruitment-cell/ # Recruitment related pages
├── research/         # Research section
├── student-portal/   # Student portal section
└── index.php         # Main entry point
```

## Key Components

### 1. Initialization (\_init.php)

- Located in `includes/_init.php`
- Contains global configuration
- Defines root URL and other global variables
- Must be configured according to the environment

### 2. Common Components

- Navigation Bar: `includes/_navbar.php`
- Footer: `includes/_footer.php`
- These are included in most pages for consistent layout

### 3. Assets and Resources

- Public assets are stored in `public/` directory
- Department-specific assets go in respective department folders
- CSS and JavaScript are organized in their respective directories

## How to Make Changes

### Adding a New Page

1. Create a new PHP file in the appropriate directory
2. Include the initialization file:
   ```php
   <?php
   $ROOT = "../";  // Adjust based on directory depth
   include($ROOT . "includes/_init.php");
   ```
3. Use the standard HTML structure with navbar and footer includes
4. Add necessary CSS/JS files from public directory

### Modifying Existing Pages

1. Locate the page in its respective directory
2. Make necessary changes while maintaining the existing structure
3. Test locally before deployment
4. Commit changes to Git

### Adding New Assets

1. Place images/documents in the appropriate asset directory
2. Use relative paths with `$ROOTURL` for linking:
   ```php
   <?php echo $ROOTURL ?>public/assets/your-file.pdf
   ```

## Deployment Procedure

### SSH Access

1. Open terminal or SSH client
2. Connect to the VM using:
   ```bash
   ssh [USERNAME]@[SERVER_IP]
   ```
   (Replace [USERNAME] and [SERVER_IP] with actual credentials)

### Updating the Website

1. SSH into the server
2. Navigate to the web root:
   ```bash
   cd /var/www/html
   ```
3. Pull the latest changes:
   ```bash
   sudo git pull
   ```
4. The changes will be immediately live (no build process needed)

### Common Issues and Solutions

1. Permission Issues
   ```bash
   sudo chown -R www-data:www-data /var/www/html
   sudo chmod -R 755 /var/www/html
   ```
2. Git Pull Conflicts
   ```bash
   sudo git stash
   sudo git pull
   ```

## Local Development Setup

1. Install XAMPP or similar PHP development environment
2. Clone the repository to your htdocs directory
3. Configure `includes/_init.php` with local settings
4. Access via localhost in your browser

## Best Practices

1. Always test changes locally before deployment
2. Maintain consistent coding style
3. Use meaningful commit messages
4. Keep documentation updated
5. Regular backups of critical data

