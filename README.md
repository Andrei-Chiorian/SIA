# SIA - Sports Club Management Application

This project is a template designed for the development of an application to manage sports clubs efficiently. The application allows you to register and manage all aspects of a sports club, including students, employees, exams, seasons, and more.

## Project Background

This application was developed as part of my internship project, where I aimed to create a comprehensive and user-friendly platform for sports club management. It represents the culmination of my practical learning and experience in web development.

## Features

- **Student and Employee Management:** Register and manage all students and employees within the club.
- **Exams and Seasons Tracking:** Organize and keep track of exams, seasons, and other important events.
- **Comprehensive Dashboard:** View and manage all club activities from a single, user-friendly interface.
- **Responsive Design:** Ensures a seamless user experience across devices, including desktops, tablets, and mobile phones.

## Technologies Used

- **PHP 8:** Backend logic and server-side processing.
- **Laravel 10:** A robust MVC framework used for structuring the application, handling routing, middleware, and more.
- **MySQL:** Relational database management system used for storing all club-related data, including user information, exam schedules, and season details.
- **HTML5:** Markup language used for structuring the content on the web pages.
- **CSS3:** Styling the application to ensure a modern, clean interface. Tailwind CSS is utilized to streamline the styling process with utility-first CSS.
- **Tailwind CSS:** A modern CSS framework that provides utility-first CSS classes to build responsive and mobile-first designs quickly.
- **JavaScript:** Adds interactivity and dynamic features to the frontend.
- **Blade Templating Engine:** Laravel's templating system for dynamically generating HTML views.
- **AJAX:** For asynchronous requests, enhancing user experience by updating parts of the web page without reloading.
- **Composer:** Dependency management for PHP, used to install Laravel and other PHP packages.
- **NPM:** Node package manager for managing frontend dependencies like Tailwind CSS and JavaScript libraries.
- **Vite:** A fast and modern development build tool that improves the frontend development workflow.

## Installation

To get started with the project, follow these steps:

1. **Clone the repository:**
   
   git clone https://github.com/Andrei-Chiorian/SIA.git

2. **Navigate to the project directory:**
   
   cd SIA

3. **Install dependencies:**
   
   composer install
   npm install

4. **Set up the environment:**
   
   Duplicate .env.example and rename it to .env.
   Configure your database and other environment variables in the .env file.
  
5. **Generate an application key:**
  
   php artisan key:generate
   
6. **Run database migrations:**
    
   php artisan migrate
   
7. **Start the development server:**
    
    php artisan serve
    npm run dev

8. **Open your browser and visit:**
 
    http://localhost:8000

## Customization
You can customize various aspects of the project:

**UI Styling:** Modify the Tailwind CSS configurations in tailwind.config.js and styles in the resources/css directory.
**Database Structure:** Adjust the migrations or models in the database/migrations and app/Models directories.
**Routes and Controllers:** Customize the logic in routes/web.php and the corresponding controllers in app/Http/Controllers.
    
## Contributions
Contributions are welcome! If you have suggestions or improvements, feel free to fork the repository and submit a pull request. Feedback and enhancements are highly appreciated.

## License
This project is licensed under the MIT License.

## Contact
Name: Andrei Chiorian
Email: contacto@andreiwebdevelopment.es
LinkedIn: https://www.linkedin.com/in/andrei-chiorian-web-development
GitHub: https://github.com/Andrei-Chiorian
