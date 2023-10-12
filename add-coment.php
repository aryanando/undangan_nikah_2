<?php
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['nama']) && isset($_POST['content'])) {
        $nama = $_POST['nama'];
        $content = $_POST['content'];
        
        // include database connection file
        include_once("./config-database.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO coments(nama,content) VALUES('$nama','$content')");
        
        // Show message when user added
        echo "Comment added successfully.";
    }
?>