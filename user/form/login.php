<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>   
<?php  
$name=  $_POST['name'];   
$password=$_POST['password'];   
$con=mysqli_connect('localhost','root','','ecommerce');    
$sql="SELECT * FROM `tbluser` WHERE (username='$name' OR email='$name')AND password='$password'"; 
$result=mysqli_query($con,$sql); 
if(mysqli_num_rows($result)){  

echo '<div class="alert alert-successfully login alert-dismissible fade show" role="alert">
<strong> successfully!</strong> login successfull. 
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>   

</button>
</div> ';  
}
 

?>
<body>  
<div class="conatiner">
        <div class="row">
            <div class="col-md-6 mt-5 m-auto bg-white shadow font-monospace border border-info">
                <p class="text-danger fs-3 fw-bold text-center">User login</p>
                <form action="insert.php" method="POST">
                    <div class="mb-3">
                        <label for="">UserName:</label>
                        <input type="text" name="name"id="username"placeholder="Enter  username" class="form-control">
                    </div>
                    <div class="mb-3">
                 
                    <div class="mb-3">
                        <label for="">userNumber:</label>
                        <input type="number" name="number" value="" id="MobileNo" placeholder="Enter user mobilenumber" class="form-control">
                    </div>
                    
                    <div class="mb-3"> 
                    <button type="submit" name="submit" class="btn btn-danger mb-4 w-100 fs-4 text-white">Login</button>  
                    </div> 
                    <div class="mb-3">
                    <button type="submit" name="submit" class="btn btn-warning mb-4 w-100 fs-4 text-white "><a href="register.php" class="text-decoration-none">Register</a></button> 
                    </div> 
            </div>

        </div>

    </div>

    
    </form>  
    
</body>
</html>