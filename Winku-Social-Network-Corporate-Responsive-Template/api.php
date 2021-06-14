<?php

/* $mesaj = array('Mesaj');                                                                    
$data_string = json_encode($mesaj);                                                                                   
                                                                                                                     
$ch = curl_init('https://api-pay-sys.herokuapp.com/?user_id=33&text_content='.$data_string.'&visual_content_url=-');                                                                      
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json',                                                                                
    'Content-Length: ' . strlen($data_string))                                                                       
);                                                                                                                   
                                                                                                                     
$result = curl_exec($ch);

echo $result; */
if(isset($_POST['Mesaj'])){
    $mesaj = $_POST['Mesaj'];
    //$data_string = json_encode($mesaj);
echo $mesaj;
/* if(isset($_POST["mesaj"])){
	$mesaj = htmlentities($_POST["mesaj"], ENT_QUOTES, 'UTF-8'); */
//$response=file_get_contents('https://api-pay-sys.herokuapp.com/?user_id=33&text_content='.$mesaj.'&visual_content_url=-');	
//$url="(https://api-pay-sys.herokuapp.com/?user_id=33&text_content='.$mesaj;'&visual_content_url=-)";
//$url='https://api-pay-sys.herokuapp.com/?text_content='.$post;
//$ch=curl_init($url);
$ch=curl_init();
curl_setopt($ch, CURLOPT_URL,'https://api-pay-sys.herokuapp.com/?user_id=33&text_content='.$mesaj.'&visual_content_url=-');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 2);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERAGENT, 'Your application name');
curl_setopt($ch, CURLOPT_POSTFIELDS, $mesaj);
//curl_setopt($ch, CURLOPT_HTTPHEADER,  'Content-Type: application/json');                                                             
                                                                                    
    //'Content-Length: ' . strlen($data_string))                                                                       
                                             
$query = curl_exec($ch); 
//curl_close($ch); 
/* $jsonData=array(
    'mesaj'=>$mesaj
);

$jsonDataEncoded = json_encode($jsonData);

curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

$result=curl_exec($ch); 
echo $response;  */
}
?>

<form action="api.php" method="post">
<!---->
    <textarea rows="2" type="text" name="Mesaj" placeholder="write something"></textarea>												
    <div class="attachments">
        <ul>
            <li>
                <i class="fa fa-music"></i>
                <label class="fileContainer">
                    <input type="file">
                </label>
            </li>
            <li>
                <i class="fa fa-image"></i>
                <label class="fileContainer">
                    <input type="file">
                </label>
            </li>
            <li>
                <i class="fa fa-video-camera"></i>
                <label class="fileContainer">
                    <input type="file">
                </label>
            </li>
            <li>
                <i class="fa fa-camera"></i>
                <label class="fileContainer">
                    <input type="file">
                </label>
            </li>
            <li>
                <button type="submit">Post</button>
            </li>
        </ul>
    </div>
</form>