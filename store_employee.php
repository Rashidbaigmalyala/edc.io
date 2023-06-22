 <?php
// Establish a connection to the MySQL database
$servername = "employee.czswuscwurqq.ap-south-1.rds.amazonaws.com";
$username = "admin";
$password = "9110307750";
$dbname = "employee";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
// Get the form input values
$name = $_POST['name'];
$employeeId = $_POST['employee-id'];
$email = $_POST['email'];
$role = $_POST['role'];
$experience = $_POST['experience'];
$tools = $_POST['tools'];

// Prepare and execute the SQL query to insert data into the database
//CREATE TABLE data (name VARCHAR(20), employeeid VARCHAR(20),email VARCHAR(20), role VARCHAR(20), experience VARCHAR(20), tools VARCHAR(20));
$sql = "INSERT INTO data(name, employeeid, email, role, experience, tools) VALUES ('$name','$employeeId', '$email', '$role', '$experience','$tools')";

session_start();
$_SESSION['name'] = $_POST['name'];
$_SESSION['employeeId'] = $_POST['employee-id'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['role'] = $_POST['role'];
$_SESSION['experience'] = $_POST['experience'];
$_SESSION['tools'] = $_POST['tools'];
if ($conn->query($sql) === TRUE) {
    // Redirect to a new page
    // header("Location: successpage.html");
    header("Location: success.php");
    exit();

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

// Close the database connection
$conn->close();
?>