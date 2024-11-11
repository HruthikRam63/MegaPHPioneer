

MegaPHPioneer: Online Examination Portal
========================================

Welcome to the **MegaPHPioneer** project. This repository contains the code and setup for a basic **Online Examination Portal** built on top of **Moodle**. It includes features such as course creation, user management, and online assessments using Moodle's core features, with some customizations.

* * *

Prerequisites
-------------

Before you can run the project, make sure you have the following installed on your local machine:

1.  **XAMPP (or similar web server stack)**:
    *   Download XAMPP: XAMPP download page
    *   XAMPP includes:
        *   **Apache** (for serving the web pages)
        *   **MySQL** (for database management)
        *   **PHP** (server-side scripting)
2.  **Web Browser** (e.g., Chrome, Firefox, etc.)

* * *

Installation Instructions
-------------------------

### Step 1: Install XAMPP

1.  Download and install XAMPP from here.
2.  After installation, open the **XAMPP Control Panel** and start both **Apache** and **MySQL** services.

### Step 2: Download or Clone the Repository

1.  Download the repository as a ZIP file and extract it, or
    
2.  Clone it using Git:
    
    bash
    
    Copy code
    
    `git clone https://github.com/your-username/MegaPHPioneer.git`
    
3.  Move the project folder to your **XAMPP `htdocs` directory**. This is typically found at:
    
    *   **Windows**: `C:\xampp\htdocs`
    *   **macOS**: `/Applications/XAMPP/htdocs`
    
    After this, your project directory should look like this:
    
    makefile
    
    Copy code
    
    `C:\xampp\htdocs\MegaPHPioneer\`
    

### Step 3: Create the Database

1.  Open your browser and go to `http://localhost/phpmyadmin` to access phpMyAdmin.
2.  Log in with the default credentials (`username: root`, `password: empty`).
3.  In phpMyAdmin, click on **New** to create a new database.
    *   Name the database `megaphpioneer_moodle`.
    *   Set the collation to `utf8mb4_unicode_ci` and click **Create**.

### Step 4: Configure the Project

1.  Navigate to the `moodle` directory within your project folder (`MegaPHPioneer/moodle`).
2.  Edit the `config.php` file with your database and directory details:
    *   Set `$CFG->dirroot` to the path of the `moodle` directory on your local machine.
        *   Example for Windows: `C:\xampp\htdocs\MegaPHPioneer\moodle`
    *   Set `$CFG->wwwroot` to the URL of your Moodle site, typically `http://localhost/MegaPHPioneer/moodle`.
    *   Set `$CFG->dataroot` to a path outside of the web directory, like `C:\xampp\htdocs\MegaPHPioneer\moodledata`.
    *   Set database settings:
        
        php
        
        Copy code
        
        `$CFG->dbname = 'megaphpioneer_moodle'; $CFG->dbuser = 'root'; $CFG->dbpass = ''; $CFG->dbhost = 'localhost';`
        

### Step 5: Run Moodle Installation

1.  Open a browser and navigate to `http://localhost/MegaPHPioneer/moodle`.
    
2.  Follow the on-screen prompts for Moodle installation:
    
    *   Select language (default is English).
    *   Confirm server settings and database details.
    *   Complete the setup process to install Moodle.
3.  After installation, Moodle will ask you to create an admin user. Fill in the details (username, password, email, etc.) for the administrator account.
    

* * *

Customizations
--------------

This project contains basic customizations on top of the default Moodle installation:

1.  **Landing Page**:
    
    *   The landing page (`index.php`) is the entry point for the site.
    *   You can access it at `http://localhost/MegaPHPioneer/`.
2.  **Custom Assets**:
    
    *   The `assets` folder contains custom CSS, JavaScript, and images that are linked to the landing page (`index.php`).
    *   You can modify `assets/css/style.css` and `assets/js/main.js` to apply your custom styles or functionality.
3.  **Moodle Admin Customizations**:
    
    *   The `config.php` file links to Moodle's default theme (`boost`) but can be customized for a more personalized look.

* * *

Usage
-----

Once everything is set up:

1.  **Accessing Moodle**:
    
    *   Go to `http://localhost/MegaPHPioneer/moodle` in your browser.
    *   Log in with the admin credentials you created during installation.
2.  **Creating Courses**:
    
    *   Log in as the admin.
    *   Navigate to **Site administration** > **Courses** > **Manage courses and categories** to create new courses for your online exams.
3.  **Creating Online Exams**:
    
    *   After creating a course, you can add quizzes or assignments as part of the online examination process.
    *   Go to the course, click **Turn editing on**, and add a **Quiz** or **Assignment** module.
    *   Configure the quiz settings to allow online exam taking.

* * *

Additional Information
----------------------

*   **Database**: The project uses MySQL with the default `root` user and no password (for local development).
*   **PHP Version**: Ensure you are using PHP 7.2 or higher.
*   **Themes and Plugins**: The default Moodle theme is `boost`, but other themes can be added by downloading them and placing them in the `moodle/theme` directory.

* * *

Troubleshooting
---------------

*   **Apache or MySQL Not Starting**: If the XAMPP services (Apache or MySQL) are not starting, check if other programs (like Skype) are using the same ports (80 for Apache, 3306 for MySQL). You can change these ports from the XAMPP control panel.
*   **Database Connection Errors**: Make sure your `config.php` has the correct database credentials and that the database `megaphpioneer_moodle` exists in phpMyAdmin.
*   **File Permissions**: Ensure the Moodle directories have the correct file permissions for writing (especially `moodledata`).

* * *
