<?php    
   
   $con=mysqli_connect('localhost','root','','Ecommerce');     
//    if(isset($_POST['Login'])){       

 $A_name=$_POST['username'];    
 $A_password=$_POST['Password'];   
     
 $sql="SELECT * FROM `admin`WHERE username='$A_name'AND password='$A_password'";     
     
 $result=mysqli_query($con,$sql);   
 session_start();  
if(mysqli_num_rows($result)){   

    $_SESSION['admin']=$A_name; 
    
    header('location:../mystore.php'); 
} 
else{    
    echo" 
     <script>
     alert('Invalid username/password');     
      window.location.href='login.php';
     </script>    
      
    
    ";
   
}    
//    }

?>