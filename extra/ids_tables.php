I’ll guide you through the basic SQL queries for creating a table, inserting data, searching (selecting), and deleting data in a MySQL database using PHP.

1. Creating a Table
To create a table in your MySQL database using PHP, use the CREATE TABLE SQL statement.

Example:
php
Copy code
// Create a connection to the database
$conn = mysqli_connect("localhost", "root", "", "your_database_name");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// SQL to create a table
$sql = "CREATE TABLE adminlogin (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Admin_name VARCHAR(50) NOT NULL,
    Admin_pass VARCHAR(50) NOT NULL
)";

// Execute the query
if (mysqli_query($conn, $sql)) {
    echo "Table 'adminlogin' created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);
2. Inserting Data into a Table
To insert data into the table, use the INSERT INTO statement.

Example:
php
Copy code
// Create a connection to the database
$conn = mysqli_connect("localhost", "root", "", "your_database_name");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Prepare the SQL insert statement
$sql = "INSERT INTO adminlogin (Admin_name, Admin_pass) VALUES ('adminuser', 'password123')";

// Execute the query
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);
3. Searching for Data (Selecting Data)
To search or retrieve data from the table, use the SELECT statement.

Example:
php
Copy code
// Create a connection to the database
$conn = mysqli_connect("localhost", "root", "", "your_database_name");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Prepare the SQL select statement
$sql = "SELECT id, Admin_name FROM adminlogin WHERE Admin_name = 'adminuser'";
$result = mysqli_query($conn, $sql);

// Check if any rows are returned
if (mysqli_num_rows($result) > 0) {
    // Output the data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["Admin_name"]. "<br>";
    }
} else {
    echo "0 results";
}

// Close the connection
mysqli_close($conn);
4. Deleting Data from the Table
To delete a record from the table, use the DELETE statement.

Example:
php
Copy code
// Create a connection to the database
$conn = mysqli_connect("localhost", "root", "", "your_database_name");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Prepare the SQL delete statement
$sql = "DELETE FROM adminlogin WHERE Admin_name = 'adminuser'";

// Execute the query
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);
Summary of Queries:
Create Table: CREATE TABLE to define your table structure.
Insert Data: INSERT INTO to add new records.
Select Data: SELECT to retrieve records.
Delete Data: DELETE FROM to remove records.
These basic queries should give you a good starting point for managing your MySQL database using PHP. Would you like me to help you with more complex operations, such as updating records or using joins?











ChatGPT can make mistakes. Check important info.
?
