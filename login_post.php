<?php 
include('./config/db.php');

session_start();

$email = $_POST['email'];
$password = $_POST['password'];


if ($email && $password){
    $encrypt = md5($password);
    
    $select_users = "SELECT COUNT(*) as validity FROM users where email='$email' AND password='$encrypt'";
    
    $select_connect = mysqli_query($db_connect,$select_users);

if(mysqli_fetch_assoc($select_connect)['validity'] == 1){
    $select_info = "SELECT * FROM users WHERE email='$email'";
   $connect = mysqli_query($db_connect,$select_info);
   
   $user = mysqli_fetch_assoc($connect);
   
   $_SESSION['admin_id'] = $user['id'];
   $_SESSION['admin_name'] = $user['name'];
   $_SESSION['admin_email'] = $user['email'];
   $_SESSION['admin_image'] = $user['image'];

 
   $_SESSION['login_success'] = "WELCOME, Login sucrssfuly complate";

   header("location: ./dashboard/home.php");

}else{
 
    $_SESSION['login_success'] = "Your give information can't match";
    header("location: login.php");
   
}
 
}

?>