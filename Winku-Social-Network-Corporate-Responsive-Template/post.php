<?php

include("baglanti.php");



if (isset($_POST['share'])) {



    $text_content = $_POST['text_content'];

    $target_dir = "upload/";

    $target_file = $target_dir . basename($_FILES["file"]["name"]);



    // Select file type

    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));



    // Valid file extensions

    $extensions_arr = array("jpg", "jpeg", "png", "gif");



    // Check extension

    if (in_array($imageFileType, $extensions_arr)) {



        // Convert to base64 

        $image_base64 = base64_encode(file_get_contents($_FILES['file']['tmp_name']));

        $image = 'data:image/' . $imageFileType . ';base64,' . $image_base64;



        // İnput Data Sample 

        $user_id = "123";



        // Api Base Url

        //$base_url = "https://api-pay-sys.herokuapp.com/";



        // Run Api

        /*$request_link = $base_url . "?user_id=" . $user_id . "&text_content=" . $text_content . "&image=" . $image;

        $callurl = curl_init();

        curl_setopt($callurl, CURLOPT_URL, $request_link);

        curl_setopt($callurl, CURLOPT_HEADER, 0);

        curl_exec($callurl);

        curl_close($callurl); */



         // Insert record

         $sql = "INSERT INTO posts VALUES (0," . $user_id . ",now(),0,0,0,0,'" . $text_content . "',0,'" . $image . "')";

         mysqli_query($conn, $sql);

    }

}

?>



<form method="post" action="" enctype='multipart/form-data'>

    <div>

        Message:

        <input type='text' name="text_content" />

    </div>

    <div>

        Upload Image:

        <input type='file' name='file' />

    </div>

    <input type='submit' value='Paylaş' name='share'>

</form>

