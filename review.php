<?php
if (isset($_POST['submit'])) {
    $rname = $_POST['name'];
    $rscore = $_POST['score'];
    $rcomment = $_POST['comment'];
    $servername = "192.168.0.105";
    $username = "root";
    $password = "password";
    $dbname = "project_db";

    if (!empty($rname) || !empty($rscore) || !empty($rcomment)) {
        $conn = new mysqli($servername, $username, $password, $dbname);
        $sql = "INSERT INTO project_review (name, score, comment) VALUES ('$rname', '$rscore', '$rcomment')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Thank you, for reviewing!');location.href='index.html'</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            echo "<script>alert('ERROR!');location.href='feedback.html'</script>";
            
        }

        $conn->close();
    }
    else{
        echo "<script>alert('All fields are mandatory!');location.href='feedback.html'</script>";
    }
}
else{
    echo "<script>location.href='index.html'</script>";
}
