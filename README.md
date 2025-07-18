# Login-tab-project
📝 Description
This is a simple and elegant user authentication system built using PHP. It allows users to register with their name, email, password, and role (user/admin), and log in securely. Error messages are handled using PHP sessions, and users can switch between login and registration forms without reloading the page.

Frontend: HTML, CSS, JavaScript

Backend: PHP (Core PHP)

Database: MySQL (assumed from context)

Video Background: Vid.mp4 for UI aesthetics

📁 File Structure
index.php – Main page with login/register UI

login-register.php – Handles login and registration logic (not yet shown)

style.css – Styles the form and video background

script.js – Handles toggling between login and registration forms

Vid.mp4 – Background video

config.php (assumed) – Database connection setup

🚀 Setup Instructions
1, Clone/download the repository.

Set up a local server with XAMPP/LAMP.

Create a MySQL database and user table:
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  email VARCHAR(100) UNIQUE,
  password VARCHAR(255),
  role ENUM('user', 'admin') NOT NULL
);
Configure DB connection in login-register.php (you'll need to share that file if you'd like me to help write it).

Open index.php in your browser via localhost.

👤 Author
Eric Musembi – GitHub: Eric254-gif


