<?php
if ( 0 < $_FILES['file']['error'] ) {
        echo 'Error: ' . $_FILES['file']['error'] . '<br>';
    }
    else {
    	echo 'Error: ' . $_FILES['file'] . '<br>';
        move_uploaded_file($_FILES['file']['tmp_name'], $_GET['type'] . $_FILES['file']['name']);
    }
?>