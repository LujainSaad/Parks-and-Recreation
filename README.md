# Parks and Recreation :3 

This is yet another project for college. This website provides a comprehensive guide to parks and recreational facilities in the Asir region. It includes interactive elements, detailed descriptions, and user reviews.
  
  ![ezgif com-gif-maker-9](https://user-images.githubusercontent.com/79986157/181393737-b287bdcd-e49c-4720-9553-5697866282f0.gif)


      
I didn't get the full mark but we are keeping it cool. 🌛

  ![wxA7iBL](https://user-images.githubusercontent.com/79986157/181393479-2857ebdb-96d9-4552-936f-7468a304cb2e.gif)


## Technologies Used

- **HTML**: For structuring the web content.
- **CSS**: For styling the web pages.
- **JavaScript**: For interactive features and dynamic content.
- **PHP**: For backend interactions with the database.
- **MySQL**: For storing park data and user reviews.

### Prerequisites

- A web server with PHP support (e.g., Apache, Nginx)
- MySQL database server
- A web browser (e.g., Chrome, Firefox, Safari)

### Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/LujainSaad/Parks-and-Recreation.git
   ```

2. Navigate to the project directory:
   ```bash
   cd Parks-and-Recreation
   ```

3. Set up the MySQL database:
   - Import the `ArticleDB.php` and `connectDB.php` files into your MySQL database to create the necessary tables and connect to the database.

4. Update database connection details in `connectDB.php`:
   ```php
   <?php
   $servername = "your_server_name";
   $username = "your_username";
   $password = "your_password";
   $dbname = "your_database_name";

   // Create connection
   $conn = new mysqli($servername, $username, $password, $dbname);

   // Check connection
   if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
   }
   ?>
   ```

5. Open the `home.html` file in your web browser to view the project.

