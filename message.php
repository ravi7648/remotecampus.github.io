<?php
if (isset($_POST['submit'])) {
    $remail = $_POST['email'];
    $rmessage = $_POST['message'];
    $servername = "192.168.0.105";
    $username = "root";
    $password = "password";
    $dbname = "project_db";

    if (!empty($remail) || !empty($rmessage)) {
        $conn = new mysqli($servername, $username, $password, $dbname);
        $sql = "INSERT INTO project_message (email, message) VALUES ('$remail', '$rmessage')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Thank you for reaching to us!');location.href='index.html'</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            echo "<script>alert('ERROR!');location.href='contact.html'</script>";
        }

        $conn->close();
    } else {
        echo "<script>alert('All fields are mandatory!');location.href='contact.html'</script>";
    }
} else {
    echo "<script>location.href='index.html'</script>";
}
