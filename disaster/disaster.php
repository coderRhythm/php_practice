<!DOCTYPE html>
<html>
<head>
    <title>Disaster Reporting Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 50%;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            margin-top: 0;
            text-align: center;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .message {
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>

<body>
    <h2>Report a Disaster</h2>
    <div class="container">
        <form action="disaster.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>
            
            <label for="location">Location:</label>
            <input type="text" id="location" name="location" required><br><br>
            
            <label for="disaster_type">Type of Disaster:</label>
            <input type="text" id="disaster_type" name="disaster_type" required><br><br>
            
            <label for="details">Details:</label><br>
            <textarea id="details" name="details" rows="4" cols="50" required></textarea><br><br>
            
            <input type="submit" value="Submit">
        </form>

        <?php
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Fetch form data
            $name = htmlspecialchars($_POST['name']);
            $location = htmlspecialchars($_POST['location']);
            $disaster_type = htmlspecialchars($_POST['disaster_type']);
            $details = htmlspecialchars($_POST['details']);
        
            // Database connection details
            $servername = "localhost";
            $username = "root";
            $password = "root"; // Replace with your database password
            $dbname = "disaster_management";
        
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
        
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
        
            // Create the table if it doesn't exist
            $createTableSQL = "
                CREATE TABLE IF NOT EXISTS emergency_services (
                    id INT AUTO_INCREMENT PRIMARY KEY,
                    name VARCHAR(255) NOT NULL,
                    location VARCHAR(255) NOT NULL,
                    disaster_type VARCHAR(255) NOT NULL,
                    details TEXT NOT NULL,
                    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
                )
            ";
        
            if ($conn->query($createTableSQL) === FALSE) {
                die("Error creating table: " . $conn->error);
            }
        
            // Insert data into the table
            $insertSQL = "INSERT INTO emergency_services (name, location, disaster_type, details) VALUES ('$name', '$location', '$disaster_type', '$details')";
        
            if ($conn->query($insertSQL) === TRUE) {
                echo "Report submitted successfully.";
            } else {
                echo "Error: " . $insertSQL . "<br>" . $conn->error;
            }
        
            // Send email using Gmail SMTP
            $to = "sethiyarhythm494@gmail.com";
            $subject = "Disaster Report: $disaster_type";
            $message = "Name: $name\nLocation: $location\nDisaster Type: $disaster_type\nDetails: $details";
        
            $headers = "From: 1032212447@mitwpu.edu.in"; // Replace with your sender email address
        
            if (mail($to, $subject, $message, $headers)) {
                echo "<br>Email sent successfully.";
            } else {
                echo "<br>Failed to send email.";
            }
        
            $conn->close();
        }
        ?>
        
    </div>
</body>
</html>
