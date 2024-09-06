<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin home-page</title> 

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head> 
<?php  
session_start();   
if(!$_SESSION['admin']){   
header("location:form/login.php");
}

?>
<body> 
<nav class="navbar navbar-light bg-dark"> 
    <div class="container-fluid text-white" >
  <a class="navbar-brand"><h1 class="text-white">My store</h1></a>  
  <span> 
  <i class="fa-sharp fa-solid fa-user-shield"></i>
  hello,<?php echo $_SESSION['admin'];?>  
  <i class="fa-solid fa-right-from-bracket"></i> 
  <a href="form/login.php" class="text-decoration-none text-white">Logout</a> | 
  <a href=""class="text-decoration-none text-white">Userpenal</a> |

 
  </span> 
  </div>
</nav>   
   
            <div> 
                <h2 class="text-center">Dashboard</h2>
            </div>

             <div class="col-md-6 bg-danger text-center m-auto">  
                <a href="product/index.php"class="text-white text-decoration-none fs-4 fw-bold px-5">Add post</a>   
                <a href=""class="text-white text-decoration-none fs-4 fw-bold px-5">Users</a>
             </div>
</body>
</html>