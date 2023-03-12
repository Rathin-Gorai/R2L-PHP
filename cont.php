
<?php
// $connection = mysqli_connect('localhost', 'root');
$connection = mysqli_connect('sql208.epizy.com', 'epiz_33747737','eF3DruyK1iP');
if ($connection){
    echo "OK";
}
else{
    // echo "Error! Not Connect";
}

mysqli_select_db($connection, 'epiz_33747737_r2l');

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$massage = $_POST['message'];


$data = "INSERT INTO contact (name,email,subject,massage) VALUES('$name','$email','$subject','$massage')";
mysqli_query ($connection, $data);

// echo ("<script LANGUAGE='JavaScript'>
//     window.alert('Succesfully sent your message! 😊');
//     </script>");
// $contact="";
// echo $contact->send();
//     window.location.href='index.php';
//    <script> history.back() </script>
if ($connection) {
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully sent your message! 😊');
    window.location.href='index.php';
    </script>");
}
?>
