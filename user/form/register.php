<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register-page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>  
<?php     
 $con=mysqli_connect('localhost','root','','ecommerce');
 if(isset($_POST['submit'])){    
     
    $name=$_POST['name'];   
    $email=$_POST['email'];   
    $password=$_POST['password']; 
    $number=$_POST['number'];  



    
 $sql="SELECT email, number FROM tbluser WHERE email ='$email' OR number ='$number'"; 
 $result=mysqli_query($con,$sql);

 if(mysqli_num_rows($result) <= 0){
    $sql="INSERT INTO tbluser (username, email, password, number) VALUES ('$name', '$email', '$password', '$number')"; 
    $result=mysqli_query($con,$sql);
    
    if($result){
        echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong> successfully!</strong> register successfull.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>'; 
   
    }else{
       die(mysqli_error($con));
    } 
 }
 else{
   echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong> error!</strong> already exist check the email and number.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
 }

}     

// echo "already exist";

 ?>
    <div class="conatiner">
        <div class="row">
            <div class="col-md-6 mt-5 m-auto bg-white shadow font-monospace border border-info">
                <p class="text-danger fs-3 fw-bold text-center">User register</p>
                <form action=" " method="POST">
                    <div class="mb-3">
                        <label for="">UserName:</label>
                        <input type="text" name="name"id="username"placeholder="Enter  username" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">useremail:</label>
                        <input type="email" name="email" id="email"value="" placeholder="Enter useremail" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">password:</label>
                        <input type="password" name="password" id="password"value="" placeholder="Enter userpassword" class="form-control">
                    </div>
                    <!-- <div class="mb-3">
                        <label for="">confirm password:</label>
                        <input type="text" name="cpassword" id="cpassword" value="" placeholder="Enter your confirm password" class="form-control">
                    </div> -->

                    <div class="mb-3">
                        <label for="">userNumber:</label>
                        <input type="number" name="number" value="" id="MobileNo" placeholder="Enter user mobilenumber" class="form-control">
                    </div>
                    <div class="mb-3">
                    <button type="submit" name="submit" class="btn btn-primary mb-4 w-100 fs-4 text-white">Register</button>  
                    </div>  
                    <div class="mb-3">
                    <button type="submit" name="submit" class="btn btn-danger mb-4 w-100 fs-4 text-white"><a href="login.php"class="text-decoration-none text-white">Already account</a></button>  
                    </div>
            </div>

        </div>

    </div>

    
    </form>  
    <script>  
        
        $(document).ready(function() {
            $("#registrationForm").validate({
                rules: {
                    username: {
                        required: true,
                        minlength: 2
                    },
                    email: {
                        required: true,
                        email: true,

                    },
                    MobileNo: {
                        required: true,
                        digits: true,
                        minlength: 10,
                        maxlength: 10
                    },
                    password: {
                        required: true,
                        minlength: 6 
                    },
                    cpassword: {
                        required: true,
                        minlength: 6,
                        equalTo: "#password"
                    }
                },
                messages: {
                    username: {
                        required: "Please enter your name",
                        minlength: "Your name must consist of at least 2 characters"
                    },
                    email: {
                        required: "Please enter your email address", 
                        email: "Please enter a valid email address"
                    },
                    MobileNO: {
                        required: "Please enter your phone number",
                        digits: "Please enter a valid phone number",
                        minlength: "Phone number must be 10 digits",
                        maxlength: "Phone number must be 10 digits"
                    },
                    password: {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 6 characters long"
                    },
                    cpassword: {
                        required: "Please confirm your password",
                        minlength: "Your confirmation password must be at least 6 characters long",
                        equalTo: "Passwords do not match"
                    }
                }
            });
        });    
    
    </script>
</body>

</html>