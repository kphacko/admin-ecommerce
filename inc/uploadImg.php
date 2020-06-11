<?php
session_start();
if (isset($_FILES['image']['tmp_name'])) {
    // echo $_FILES['image']['tmp_name'];
    // for ($i = 0; $i < count($_FILES['image']['name']); $i++) {
    // echo $_FILES['image']['name'][$i];
    // }
        header('Content-Type: application/json');
    // $url = 'https://api.nakoda.daxy.in/user/login
    $url = 'https://api.nakoda.daxy.in/product/upload/image';
     
    //Create a cURL handle.
    $ch = curl_init($url);
     
    //Create an array of custom headers.
    $customHeaders = array(
        
        'Authorization: Bearer '.$_SESSION['u_token'].'',
    
         

    );
    $images=array();
    for ($i = 0; $i < count($_FILES['image']['name']); $i++) {
        
    $cfile = new CURLFile($_FILES['image']['tmp_name'][$i],$_FILES['image']['type'][$i],$_FILES['image']['name'][$i]);
 
$post=[
    'image'=>$cfile,
  
];

curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $customHeaders);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//Execute the request. multipart/form-data
$result = json_decode(curl_exec($ch),true);
array_push($images,$result['images']);
    }
var_dump($images);
    header("Location: ../uploadImage.php?status=uploaded&img=".urlencode(serialize($images)));
    exit();
    
    }else{
        header("Location: ../uploadImage.php?status=submit");
    exit();  
    }
    
?>