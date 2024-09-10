<?php
include 'insert.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product-page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <div class="container">
        <div class="row justify-content-center  ">
            <div class="col-md-6 m-auto border border-primary mt-3">

                <form action="" method="POST" enctype="multipart/form-data">
                    <p class="text-center fw-bold fs-3 text-warning">Product Detail:</p>

                    <div class="mb-3">
                        <label>Product Name:</label>
                        <input type="text" name="Pname" class="form-control" placeholder=" Enter product name">

                    </div>
                    <div class="mb-3">
                        <label>Product Price:</label>
                        <input type="text" name="Pprice" class="form-control" placeholder="Enter product price">
                    </div>

                    <div class="mb-3">
                        <label>Add Product Image:</label>
                        <input type="file" name="Pimage" class="form-control"> 
                    </div>  
                    <div class="mb-3">
                        <label>Select category:</label>
                        <select class="form-select" name="Pages">
                            <option value="Home">Home</option>
                            <option value="Leptop">Leptop</option>
                            <option value="Bag">Bag</option>
                            <option value="Mobile">Mobile</option>
                        </select>
                    </div>
                    <button type="submit" name="submit" class="bg-danger fs-4 fw-blod my-3 form-control text-white">Upload</button>
                </form>
                <div></div>
            </div>
            <!-- fetch data -->
            <div class="container">
                <div class="row">
                    <div class="col-md-6 m-auto">

                        <table class="table border border-warning table-hover border my-5">
                            <thead class="bg-dark text-white fs-5 font-monospace text-center">
                                <th>id</th>
                                <th>Name</th>
                                <th>price</th>
                                <th>Image</th>
                                <th>category</th>
                                <!-- <th>Update</th> -->
                                <th>Delate</th>
                            </thead>


                            <tbody class="text-center">
                                <?php
                                include '../config.php';
                                $sql = "SELECT * FROM `tblproduct`";
                                $record = mysqli_query($con, $sql);

                                while ($row = mysqli_fetch_array($record)) {
                                    echo "      
                  <tr>
                    <td>$row[id]</td>       
                    <td>$row[PName]</td>
                    <td>$row[PPrice]</td>
                    <td><img src='$row[Pimage]' height='90px'></td>
                     <td>$row[PCategory]</td>       
                     <td><a href=''class='btn btn-danger'>Home</a></td>
                       <script>  
                         
                       </script>
                    <td></td>   
                    
                </tr> ";
                                }
                                ?>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
</body>

</html>