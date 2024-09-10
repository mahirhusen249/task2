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


    // session_start();  
    // session_destroy();



    if (isset($_POST['addCart'])) {

        $product_name = $_POST['PName'];
        $product_price = $_POST['PPrice'];
        $product_quantity = $_POST['PQuantity'];

        $sub_total = $product_price * $product_quantity;







        if (isset($_POST['addCart'])) {


            $_SESSION['cart'][] = array(
                'PName' => $product_name,
                'PPrice' => $product_price,
                'PQuantity' => $product_quantity,
                'Subtotal' => $sub_total
            );
        }
    }
    //  
    //remove product

    if (isset($_POST['remove'])) {
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($value['PName'] === $_POST['item']) {
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart'] = array_values($_SESSION['cart']);
                header('location:viewcart.php');
            }
        }
    }



    // update product

    if (isset($_POST['update'])) {

        // print_r($_POST);  
        // // exit; 
        // print_r($_SESSION['cart']);  
        // exit;
        foreach ($_SESSION['cart'] as $key => $value) {

            if ($value['PName'] == $_POST['item']) {
                $_SESSION['cart'][$key] = array(
                    'PName' => $_POST['PName'],
                    'PPrice' => $_POST['PPrice'],
                    'PQuantity' => $_POST['PQuantity'],
                    'Subtotal' => $_POST['PPrice'] * $_POST['PQuantity']
                );
                //  header('location:viewcart.php');
            }
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
                        <th>serial No.</th>
                        <th>ProductName</th>
                        <th>productPrice</th>
                        <th>productQuantity</th>
                        <th>total price</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                        <?php
                        $i = 0;
                        if (isset($_SESSION['cart'])) {
                            // print_r($_SESSION['cart']); 
                            foreach ($_SESSION['cart'] as $key => $value) {
                                $i = $key + 1;

                                // $sub_total = $product_price * $product_quantity;  
                                //  $sub_total = $product_price * $product_quantity;  


                                echo "<form action='viewcart.php' method='post'>
                                <tr> 
                                    <td>
                                       $i
                                    </td>   
                                    <td>
                                        <input type='hidden' name='PName' value='$value[PName]'> $value[PName]
                                       
                                    </td>  
                                    <td>
                                        <input type='hidden' name='PPrice' value='$value[PPrice]'>$value[PPrice]
                                    </td>  
                                    <td>
                                        <input type='' name='PQuantity' value='$value[PQuantity]'>
                                    </td>   
                                    <td>
                                        $value[Subtotal]   
                                    </td>   
                            
                                    <td> 
                                 
                                        <button class='btn btn-warning' name='update'>UPDATE</button>  
                                  
                                    </td> 
                                  
                                       <td> 
                                  
                                     <button class='btn btn-danger' name='remove' onclick='return checkdelete()'>DELETE</button>
                                        <p id='demo'></p>
                                    </td>  
                                    <td>
                                        <input type='hidden' name='item' value='$value[PName]' >
                                    </td>
                                </tr>   </form> ";  
                                
                            }
                        } 
                                 

                        // session_destroy();
                        ?>   
                    </tbody>
                </table>
                <!-- <div class="col-lg-3 text-center"> 
                    <h3>total</h3>  
                    <h1 class="bg-danger text-white">
                </div> -->
            </div>
        </div>
    </div> 
   
    <a href="index.php" class='btn btn-danger fs-5' name='home'>back to Home</button>
  
</body>

</html>

<script>   
function checkdelete(){    
    return confirm('Are you sure you want to delete this record ?');
}
// function myFunction() {
//   let text = "Press a button DELETE!\nEither OK or Cancel.";
//   if (confirm(text) == true) {
//     text = "You pressed OK!";
//   } else {
//     text = "You canceled!";
//   }       <button class='btn btn-danger' name='remove'>DELETE </button>

//   document.getElementById("demo").innerHTML = text;
// }<button class='btn btn-danger' name='remove' onclick='myFunction()'>Delete</button>
// </script>