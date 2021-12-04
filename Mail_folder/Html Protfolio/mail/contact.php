<?php

// if(isset($_POST["submit"])){
// $name = $_POST['name'];
// $email = $_POST['email']));
// $m_subject = $_POST['subject'];
// $message = $_POST['message'];

// echo $name;

//databse connect

// $conn = new mysqli('localhost','root','','protfoliodata');
// if($conn->connect_error){
//   die('connection failed : ' .$conn->connect_error);
// }else{
//   $data_store = $conn->prepare("insert into protfolio_data(name, email, subject, textarea) value(?,?,?,?)");
//   $data_store->bind_param("ssss",$name,$email,$m_subject,$message);
//   $data_store->execute();
//   echo "your from successfully submit";
//   $data_store->close();
//   $conn->close();
// }


// if(empty($_POST['name']) || empty($_POST['subject']) || empty($_POST['message']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
//   // http_response_code(500);
//   exit();
// }

// $name = strip_tags(htmlspecialchars($_POST['name']));
// $email = strip_tags(htmlspecialchars($_POST['email']));
// $m_subject = strip_tags(htmlspecialchars($_POST['subject']));
// $message = strip_tags(htmlspecialchars($_POST['message']));

// $to = "jindalg2000@gmail.com"; // Change this email to your //
// $subject = "$m_subject:  $name";
// $body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\n\nEmail: $email\n\nSubject: $m_subject\n\nMessage: $message";
// $header = "From: $email";
// $header .= "Reply-To: $email";	

// if(!mail($to, $subject, $body, $header))
//   // http_response_code(500);
?>
