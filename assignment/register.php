<?php
if(isset($_GET['submit'])){
    $name= $_GET['name'];
    $email= $_GET['email'];

    if(empty($name)&& empty($email)){
        echo"Go back and Fill Form";
    }else{
        echo $name;
        echo "<br>";
        echo $email;
    }
}
else{
    echo "NOt Authorized";
}
?>