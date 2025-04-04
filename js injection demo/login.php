<?php
// Only handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = mysqli_connect("localhost", "root", "", "demo_login");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $username = $_POST['username'];
    $password = $_POST['password'];

    // 🚨 Vulnerable query
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    
    echo "<p><b>Debug SQL:</b> $sql</p>"; // show the raw query

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<h3>✅ Login successful! SQL Injection might have worked.</h3>";
    } else {
        echo "<h3>❌ Login failed</h3>";
    }

    mysqli_close($conn);
}
?>