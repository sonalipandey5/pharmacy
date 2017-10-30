<?php
require_once "connect.php";
    $projectID=$_POST["pid"];
    function GetImageExtension($imagetype)
   	 {
       if(empty($imagetype)) return false;
       switch($imagetype)
       {
           case 'image/jpeg': return '.jpg';
           case 'image/png': return '.png';
           default: return false;
       }
     }
if (!empty($_FILES["uploadedImage"]["name"])) {
	$main_project=$_POST["mid"];
	$size=$_FILES['uploadedImage']['size'];
	$file_name=$_FILES["uploadedImage"]["name"];
	$temp_name=$_FILES["uploadedImage"]["tmp_name"];
	$imgtype=$_FILES["uploadedImage"]["type"];
	$ext= GetImageExtension($imgtype);
	if($ext=='.jpg'||$ext=='.png'){
		if($size<500*1024){
			$ext='.jpg';
			$imagename=$projectID.$ext;
			$target_path = "uploads/fixture/".$imagename;
			if(move_uploaded_file($temp_name, $target_path)) {
				$result=$auditor->saveImage($target_path,$projectID);
				// echo $result;
				if($result){
					echo '<script>alert("File uploaded successfully");</script>';
					echo 'Wait you are being redirected in 5 seconds....';
					header("refresh:5;url=audittedView.php?project=".$main_project);
				}
			}
			}else{
				echo "<script>alert(\"Please Select a file less than 500kB.\");</script>";
			    header("refresh:0.2;url=audittedView.php?project=".$main_project);
			}
	}else{
		echo "<script>alert('The file must be in jpg/jpeg/png format.');</script>";
	    header("refresh:0.2;url=audittedView.php?project=".$main_project);
	}
}else{
	echo '<script>alert("You should select a file to upload !!");</script>';
	header("refresh:0.2;url=audittedView.php?project=".$main_project);
}
?>

