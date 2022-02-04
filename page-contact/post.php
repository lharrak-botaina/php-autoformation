<?php
    if($_POST['name'] || $_POST['email']|| $_POST['tel'] || $_POST['message'] ){
        
        echo "Welcome " . $_POST['name'] . "<br />";
        echo "You are " . $_POST['email'] . " years old." . "<br />";
        echo "Welcome " . $_POST['tel'] . "<br />";
        echo "Welcome " . $_POST['message'] . "<br />";
    }

?>