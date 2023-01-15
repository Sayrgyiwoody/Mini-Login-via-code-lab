<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!--Font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!--google-fonts--->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--css link-->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="container-fluid d-flex justify-content-center align-items-center" style="height:100vh; background-color:#ECF2FF;">
        <div class="row align-items-center" >
            <div class="box-1 col-6 bg-light d-flex justify-content-center d-none d-lg-block" style="border-radius:15px; width:300px; height:300px;">
                <div class="img-div">
                <h5 class="img-header mt-3 mb-0 fw-bold">Code Lab Login Form</h5>
                <div class="img-container ">
                    <img class="w-100" src="./img/login.png">
                </div>
                </div>
            </div>
            <div class="box-2 col-4 bg-dark" style="width:250px; height:250px; border-radius:15px;">
                <div class="row">
                    <div class="user mx-auto my-3">
                        <i class="fa-regular fa-user fs-1"></i>
                    </div>
                </div>
                <form method="POST">
                <div class="row px-4 pb-3">
                    <div class="input-icons">
                        <i class="fa-solid fa-envelope text-dark icon"></i>
                        <input type="email" name="userEmail"class="form-controlS input-field" style="font-size:12px;padding:4px 28px;" placeholder="email">
                    </div>
                </div>
                <div class="row px-4 pb-3">
                    <div class="input-icons">
                        <i class="fa-solid fa-lock text-dark icon"></i>
                        <input type="password" name="userPassword" class="form-controlS input-field" style="font-size:12px;padding:4px 28px;" placeholder="password">
                    </div>
                </div>
                <div class="row px-4 pb-3">
                    <div class="col-5">
                        <button type="submit" name="login" class="btn btn-light fw-bold" style="border-radius:10px;">Login</button>
                    </div>
                    <div class="col-7">
                        <button type="submit" class="btn btn-light fw-bold" style="border-radius:10px;"><a class="text-decoration-none" href="./02_register.php" target="_blank">Register</a></button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>

    <?php
    

    session_start();

    if(isset($_POST['login'])) {
         $userEmail = $_POST['userEmail'];
         $userPassword = $_POST['userPassword'];
        
         if ($userEmail==$_SESSION['email'] && password_verify($userPassword,$_SESSION['password'])) {
            header("Location:03_logout.php");
         }else {
            echo "login fail";
         }

    }
        
    ?>
</body>
</html>