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

<body class="bg-secondary">   

    <div class="container">
        <div class="row justify-content-center my-3 ">
            <div class="col-md-6 m-auto shadow bg-white p-3 border border-primary mt-3">

                <form action="login1.php" method="POST">
                    <p class="text-center fw-bold fs-3 text-warning">Login</p>

                    <div class="mb-3">
                        <label>Name:</label>
                        <input type="text" name="username" class="form-control" placeholder=" Enter username ">

                    </div>
                    <div class="mb-3">
                        <label>Password:</label>
                        <input type="password" name="Password" class="form-control" placeholder="Enter password">
                    </div>
 
                    <button name="submit" class="bg-danger fs-4 fw-blod my-3 form-control text-white">Login</button>
                </form>
                <div></div>
            </div>
   
</body>  
</html>
