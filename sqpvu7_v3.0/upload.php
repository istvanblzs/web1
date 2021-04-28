<?php
// Include the database configuration file
include 'config.php';
$statusMsg = '';
$backlink = ' <a href="./">Vissza</a>';
// File upload path
$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if (!file_exists($targetFilePath)) {
        if(in_array($fileType, $allowTypes)){
                // Upload file to server
            if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
                // Insert image file name into database
                $insert = $db->query("INSERT into images (file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
                if($insert){
                    $statusMsg = "A fájl: <b>".$fileName. "</b> feltöltése sikeres." . $backlink;
                }else{
                    $statusMsg = "A fájl feltöltése sikertelen, kérem próbálja újra." . $backlink;
                } 
            }else{
                $statusMsg = "Elnézést, hiba történt a feltöltés közben." . $backlink;
            }
        }else{
            $statusMsg = "Csak JPG, JPEG, PNG, GIF, & PDF fájlok esetén engedélyezett a feltöltés." . $backlink;
        }
    }else{
            $statusMsg = "A fájl <b>".$fileName. "</b> már létezik." . $backlink;
        }
}else{
    $statusMsg = 'Kérem válasszon feltöltendő fájlt.' . $backlink;
}
// Display status message
echo $statusMsg;
?>