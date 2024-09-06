<?php
if (isset($_POST['submit'])) {
    include '../config.php';

    $product_name = $_POST['Pname'];
    $product_price = $_POST['Pprice'];
    $product_image = $_FILES['Pimage'];
    $image_loc = $_FILES['Pimage']['tmp_name'];
    $image_name = $_FILES['Pimage']['name'];
    $img_des = "Upload_image/" . $image_name;
    $product_category = $_POST['Pages'];

    move_uploaded_file($image_loc, "Upload_image/" . $image_name); 

 
    // insert product
//     mysqli_query($con, "INSERT INTO `tblproduct`(`PName`, `PPrice`, `Pimage`, `PCategory`) VALUES  
// '$product_name','$product_price','$img_des','$product_category' ");

$sql ="INSERT INTO `tblproduct` (`PName` ,`PPrice`, `Pimage`,`PCategory`) VALUES ('$product_name','$product_price','$img_des','$product_category') ";  



$result=mysqli_query($con,$sql);
if(!$result){ 
    
    die(mysqli_errno($con));
}
} 
?>             
                     

    
   