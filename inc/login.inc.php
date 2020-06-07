<?php
if (isset($_POST['submit'])) {
     $username = $_POST['username'];
     $password = $_POST['password'];

     $url = 'https://api.nakoda.daxy.in/user/login';
     $ch = curl_init($url);
     
     $post = [
         'number'=>$username,
         'password'=>$password
     ];
     curl_setopt($ch, CURLOPT_POST, 1);
     curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
     //Execute the request. multipart/form-data
     $result =json_decode( curl_exec($ch),true);
    //  var_dump($result); 
    if($result['error']==false){
        session_start();
        $_SESSION['u_role']=$result['user']['role'];
        $_SESSION['u_verified']=$result['user']['verified'];
        $_SESSION['u_fullName']=$result['user']['fullName'];
        $_SESSION['u_priced']=$result['user']['priced'];
        $_SESSION['u_token']=$result['token'];
        // var_dump($_SESSION['u_role']);
        header("Location: ../index.php?login=success");
        exit();
    }else{
        header("Location: ../login.php?login=false1");
        exit();  
    }




}else{
    header("Location: ../login.php?login=error");
    exit();
    // echo "<script>window.open('admin.php','_self')</script>";
}



?>