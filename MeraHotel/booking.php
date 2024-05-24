<?php
// Form submission handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $customer_name = $_POST['customer-name'];
    $check_in_date = $_POST['check-in-date'];
    $check_out_date = $_POST['check-out-date'];
    $num_people = $_POST['num-people'];
    $contact_number = $_POST['contact-number'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    // Database connection
    $servername = "localhost";
    $username = "amira";
    $password = "12345";
    $dbname = "booking";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to insert form data into the database
    $sql = "INSERT INTO your_table_name (customer_name, check_in_date, check_out_date, num_people, contact_number, email, comment)
            VALUES ('$customer_name', '$check_in_date', '$check_out_date', '$num_people', '$contact_number', '$email', '$comment')";

    if ($conn->query($sql) === TRUE) {
        echo "<h2>Form Submission Details:</h2>";
        echo "<p>Name: $customer_name</p>";
        echo "<p>Check-in Date: $check_in_date</p>";
        echo "<p>Check-out Date: $check_out_date</p>";
        echo "<p>Number of People: $num_people</p>";
        echo "<p>Contact Number: $contact_number</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Comment: $comment</p>";
        echo "<p>Data inserted successfully into database.</p>";
    } else {
        echo "<p>Error: " . $sql . "<br>" . $conn->error . "</p>";
    }

    // Close connection
    $conn->close();
}
?>
