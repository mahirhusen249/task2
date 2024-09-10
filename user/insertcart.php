<!-- 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<button onclick="myFunction()">Try it</button>             

<p id="demo"></p>

<script>
function myFunction() {
  let text = "Press a button!\nEither OK or Cancel.";
  if (confirm(text) == true) {
    text = "You pressed OK!";
  } else {
    text = "You canceled!";
  }
  document.getElementById("demo").innerHTML = text;
}
</script>
</body>
</html>


















<!--  <?php
// session_start();   
// session_destroy();
 
// if(isset($_POST['addCart'])){   
//     $product_name=$_POST['PName']; 
//     $product_price=$_POST['PPrice']; 
//     $product_Pquantity=$_POST['PQuantity'];  
//     $_SESSION['cart']=array('productName'=>$product_name, 
//                         'productPrice'=> $product_price, 
//                        'productQuantity'=> $product_Pquantity);   
                       

  

// }
//   -->    

// include 'head.php';  

// session_start();
// if (isset($_POST['addCart'])) {

//     $product_name = $_POST['PName'];
//     $product_price = $_POST['pprice'];
//     $product_quantity = $_POST['PQuantity'];

// if(isset($_POST['addCart'])){

    
//     $check_product=array_column($_SESSION['cart'],'PName');
//     if(in_array($product_name,$check_product)){
//         echo "<script>alert('Product Already Added')
//             header('location:index.php');
//         </script>";
//     }

// else{
//     $_SESSION['cart'][] = array(
//         'PName' => $product_name,
//         'PPrice' => $product_price,
//         'PQuantity' => $product_quantity
//     );}
// }
// }
// ?> -->