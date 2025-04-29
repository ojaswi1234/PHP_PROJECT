# PHP_PROJECT

## Table of Contents
- [About the Project](#about-the-project)
- [Features](#features)
- [Technologies Used](#technologies-used)
- [Getting Started](#getting-started)
  - [Prerequisites](#prerequisites)
  - [Installation](#installation)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)
- [Contact](#contact)

---

## About the Project

**PHP_PROJECT** is a lightweight web application designed to provide users with a simple and effective overview of their weekly sleep data. The website is intended for one-time use, ensuring privacy and minimal data retention. User data is automatically deleted after one week, or users can manually delete their data by logging out. Additionally, users can download their sleep data in CSV format. 

To make the data more intuitive, **Chart.js** is used to visualize sleep patterns in dynamic and interactive charts.

---

## Features

- Overview of user sleep data for a week.
- Interactive data visualization using **Chart.js**.
- Automatic session and data deletion after one week.
- Manual data deletion via the logout button.
- Option to download sleep data as a CSV file.
- Simple authentication using MySQL username and password (optional).

---

## Technologies Used

This project is built with the following technologies:

- **PHP** (45.8%): Backend logic and server-side rendering.
- **Hack** (43.2%): Improved performance and type safety.
- **CSS** (11%): Styling and responsive design.
- **Chart.js**: For visualizing sleep data in charts.
- **MySQL**: Used for storing and managing user sleep data.

---

## Getting Started

### Prerequisites

Before you begin, make sure you have the following installed:

- **XAMPP** (Recommended): Includes Apache, MariaDB, and PHP.

### Installation

1. Download and install [XAMPP](https://www.apachefriends.org/index.html) on your system.
2. Clone the repository:
   ```bash
   git clone https://github.com/ojaswi1234/PHP_PROJECT.git
   ```
3. Move the project directory to your XAMPP `htdocs` folder:
   ```bash
   mv PHP_PROJECT /path/to/xampp/htdocs/
   ```
   Replace `/path/to/xampp/htdocs/` with the actual path to your XAMPP `htdocs` directory.
4. Start the Apache and MySQL services in the XAMPP control panel.
5. Configure the database:
   - Open **phpMyAdmin** (usually at `http://localhost/phpmyadmin`).
   - Create a new database for the project (e.g., `sleep_data`).
   - Import any database schema or `.sql` file provided within the project (if available).
6. Update the database credentials:
   - Locate the PHP configuration file where database credentials are defined (e.g., `config.php` or similar).
   - Set your database host, username, password, and database name directly in the file.

Example of configuration in `config.php`:
```php
<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'sleep_data';

// Database connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
```

7. Open a browser and navigate to `http://localhost/PHP_PROJECT`.

---

## Usage

1. **Data Input**: Users can manually input their sleep data for the week.
2. **Data Overview**: The application provides a summary of the user's sleep data.
3. **Interactive Charts**: Sleep patterns are visualized using **Chart.js** for better insights.
4. **Download Data**: Users can download their sleep data in CSV format for offline usage.
5. **Session and Data Deletion**: 
   - Data is automatically deleted after one week.
   - Users can manually delete their data by clicking the logout button.

---

## Contributing

Contributions are welcome! If you'd like to contribute to this project, please follow these steps:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature/my-feature`).
3. Commit your changes (`git commit -m 'Add some feature'`).
4. Push to the branch (`git push origin feature/my-feature`).
5. Open a pull request.

---

## License

This project is licensed under the [MIT License](./LICENSE).

---

## Contact

If you have any questions or feedback, feel free to reach out:

- GitHub: [ojaswi1234](https://github.com/ojaswi1234)
