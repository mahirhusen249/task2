<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>viewcart</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

</head>

<body>
    
    <?php
    include 'header.php';
    session_start();
if (isset($_POST['addCart'])) {

    $product_name = $_POST['PName'];
    $product_price = $_POST['PPrice'];
    $product_quantity = $_POST['PQuantity'];

if(isset($_POST['addCart'])){

    $check_product=array_column($_SESSION['cart'],'PName');
    if(in_array($product_name,$check_product)){
        echo "<script>alert('Product Already Added')
            header('location:index.php');
        </script>";
    }

else{
    $_SESSION['cart'][] = array(
        'PName' => $product_name,
        'PPrice' => $product_price,
        'PQuantity' => $product_quantity
    );}
}
}
?>
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-md-12 text-center bg-light mb-5 rounded">
                <h1 class="text-warning">My cart</h1>
            </div>
        </div>
    </div>
    <div class="conatiner-fluid">
        <div class="row"> 
            <div class="col-sm-12 col-md-6  col-lg-9">
                <table class="table table-bordered text-center">
                    <thead class="bg-danger text-white fs-5">
             <th>index no.</th>
             <th>ProductName</th>
             <th>productPrice</th>
             <th>productQuantity</th>
             <th>total price</th>
             <th>Update</th>
             <th>Delete</th>
                    </thead> 
                    <tbody>  
                         <?php   
                       
                        // if(isset($_SESSION['cart'])){   
                        //     foreach($_SESSION['cart'] as $key=> $value) {   
                                
                        //         echo"<form action='viewcart.php' method='post'>
                        //         <tr> 
                        //         <td>$key</td>   
                        //         <td>$value[PName]</td>  
                        //         </tr>   </form> ";
                        //     }
                        // }  
                        if (isset($_SESSION['cart'])) {
                            foreach ($_SESSION['cart'] as $key => $value) {

                                $total= $value['PPrice']  *  $value['PQuantity'];
                                echo "<form action='viewcart.php' method='po
                                 <tr>
                                    <td>$key</td>
                                    <td><input type='hidden' name='PName' value='$value[PName]'>$value[PName]</td>
                                    <td><input type='hidden' name='PPrice' value='$value[PPrice]'>$value[PPrice]</td>
                                    <td><input type='hidden' name='PQuantity' value='$value[PQuantity]'>$value[PQuantity]</td>
                                    <td>$total</td>
                                    <td><button class='btn btn-warning' name='update'>UPDATE</button></td>
                                    <td><button class='btn btn-danger' name='remove'>DELETE</button></td>
                                    <td><input type='hidden' name='item' value='$value[PName]'></td>
                                </tr> </form>";
                            }
                        }     

                        ?> 
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>