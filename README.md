# Tech Products Review Website

## Overview

The Tech Products Review Website is a platform designed to provide detailed reviews and information about various technology products. Users can explore products across different categories such as Mobiles, Laptops, Smart TVs, Bluetooth Headsets, and Smartwatches. The website includes features for user registration, login, and viewing product details.

## Features

- **User Authentication**: Users can register, log in, and log out.
- **Product Categories**: View products organized into categories like Mobiles, Laptops, Smart TVs, and more.
- **Product Details**: Each product page provides detailed information and links to purchase the product.
- **Responsive Design**: The website is responsive and provides a seamless experience on various devices.

## Technologies Used

- **Front-end**: HTML, CSS, Bootstrap
- **Back-end**: PHP
- **Database**: MySQL
- **Server**: XAMPP (for local development)

## Installation

### Prerequisites

1. [XAMPP](https://www.apachefriends.org/index.html) or another local server environment.
2. [MySQL](https://www.mysql.com/) for database management.

### Setup

## 1. Clone the Repository

   ```bash
   git clone https://github.com/Raghavk17/tech-products-review-website.git
2. **Configure the Database**

- **Open XAMPP and start Apache and MySQL.**
- **Create a new database named tech_reviews in phpMyAdmin.**
- **Import the database.sql file provided in the project folder to set up the tables.**
- **Update Database Credentials**

- **pen the db.php file in the includes directory**

**Update the database credentials with your local MySQL settings:**
<?php
$servername = "localhost";
$username = "root"; // Default username for XAMPP
$password = ""; // Default password for XAMPP
$dbname = "tech_reviews";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
## 3. Add Background Images 

- **Place your background images in the images folder.**
- **Run the Website**

Open your web browser and navigate to http://localhost/tech-products-review-website/.
## 4.Usage
- **Homepage: Browse the latest tech products.**
- **Category Pages: View products categorized into Mobiles, Laptops, Smart TVs, etc.**
- **Product Pages: See detailed reviews and information about each product.**
- **User Login: Register, log in, and log out from the site.**
## 5.Contributing
- **Fork the repository.**
- **Create a new branch (git checkout -b feature/YourFeature).**
- **Commit your changes (git commit -am 'Add new feature').**
- **Push to the branch (git push origin feature/YourFeature).**
- **Open a pull request.**
## 6.Contact
For any questions or issues, please contact raghavkush2015@gmailcom
