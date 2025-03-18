# Project Tracker

A simple web-based project tracking application that allows you to manage and track the progress of your projects.

## Features

- View all projects with their descriptions and progress
- Filter projects by category (Games/Apps) or completion status
- Add new projects (password protected)
- Edit existing projects (password protected)
- Mark projects as complete or incomplete (password protected)
- Support for HTML formatting in project descriptions

## Files

- `index.html` - The main application interface
- `save-project.php` - Handles saving project data to the server
- `load-projects.php` - Handles loading project data from the server
- `projects.json` - Stores the project data

## Deployment Instructions

### Requirements

- Web server with PHP support (Apache, Nginx, etc.)
- PHP 7.0 or higher
- Write permissions for the web server user on the directory containing the files

### Steps to Deploy

1. Upload all files to your web server:
   - index.html
   - save-project.php
   - load-projects.php
   - projects.json

2. Make sure the web server has write permissions for the directory:
   ```bash
   chmod 755 /path/to/your/directory
   chmod 664 /path/to/your/directory/projects.json
   ```

3. Access the application by navigating to the URL where you uploaded the files:
   ```
   https://your-domain.com/path/to/index.html
   ```

### Security Considerations

- The default password is set to "pass" - you should change this in both the PHP file and the JavaScript code for production use
- For better security, consider implementing proper user authentication
- The application allows HTML in descriptions, which could potentially be used for XSS attacks if misused

## Usage

1. Enter the password "pass" in the password field to enable editing functionality
2. Use the "Add New Project" button to create new projects
3. Use the filter buttons to view different categories of projects
4. Click "Edit" on any project to modify its details
5. Use "Mark Complete" or "Mark Incomplete" to update project status

## Customization

You can customize the application by:
- Changing the CSS styles in the `<style>` section of index.html
- Modifying the password in both save-project.php and index.html
- Adding additional fields to the project structure as needed 