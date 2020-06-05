
<?php
if (isset($_FILES['image']['tmp_name'])) {
// echo $_FILES['image']['tmp_name'];
    header('Content-Type: application/json');
// $url = 'https://api.nakoda.daxy.in/user/login
$url = 'https://api.nakoda.daxy.in/product/upload/image';
 
//Create a cURL handle.
$ch = curl_init($url);
 
//Create an array of custom headers.
$customHeaders = array(
    
    'Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJfaWQiOiI1ZWMyM2Q0NDM1MTRjYzBmMTZkNTZkYjMiLCJudW1iZXIiOjEyMzQ1NiwidmVyaWZpZWQiOmZhbHNlLCJwcmljZWQiOmZhbHNlLCJyb2xlIjoiQURNSU4iLCJpYXQiOjE1OTEzNjE2MTEsImV4cCI6MTU5MTM2NTIxMX0.HB1MDbz7f5rEB0h9q8u1oqlQbPpRQL9wj9qjGDFMq4M',
);
$cfile = new CURLFile($_FILES['image']['tmp_name'],$_FILES['image']['type'],$_FILES['image']['name']);
$post = [
    
    'image'=>$cfile
];
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $customHeaders);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//Execute the request. multipart/form-data
$result = curl_exec($ch); 
echo $result;


}else{
    echo '<form action="test.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="image"/>
    <input type="submit" value="POST" />  
    </form>
    ';
}

?>
