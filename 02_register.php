<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
                <h5 class="img-header mt-3 mb-0 fw-bold">Register Here</h5>
                <div class="img-container ">
                    <img class="w-100" src="./img/register.png">
                </div>
                </div>
            </div>
            <div class="box-2 col-4 bg-dark" style="width:250px; height:250px; border-radius:15px;">
            <div class="row px-4 py-3">
                <form method="POST">
                <div class="input-icons mb-3">
                        <i class="fa-solid fa-user text-dark icon"></i>
                        <input type="text" name="name"class="form-controlS input-field" style="font-size:12px;padding:4px 28px;" required placeholder="name">
                    </div>
                    <div class="input-icons mb-3">
                        <i class="fa-solid fa-envelope text-dark icon"></i>
                        <input type="email" name="email" class="form-controlS input-field" style="font-size:12px;padding:4px 28px;" required placeholder="email">
                    </div>
                    <div class="input-icons mb-3">
                        <i class="fa-solid fa-lock text-dark icon"></i>
                        <input type="password" name="password"class="form-controlS input-field" style="font-size:12px;padding:4px 28px;" required placeholder="password">
                    </div>
                    <div class="input-icons mb-3">
                        <i class="fa-solid fa-lock text-dark icon"></i>
                        <input type="password" name="confirmPassword" class="form-controlS input-field" style="font-size:12px;padding:4px 28px;" required placeholder="confirm password">
                    </div>
                    <button type="submit" name="register" class="btn btn-light fw-bold" style="border-radius:10px;width:100%;">Register</button>
                </form>
                </div>
            </div>
        </div>
    </div>

   
    <!--PHP codes-->
    <?php
    //Start the session
    session_start();

    //check strong password
    function checkStrongPassword($password) {
        $checkUpper = false;
        $checkLower = false;
        $checkNumber = false;
        $checkSpecial = false;

        if (preg_match('/[A-Z]/',$password)) {
            $checkUpper = true;
        }
        if (preg_match('/[a-z]/',$password)) {
            $checkLower = true;
        }
        if (preg_match('/[0-9]/',$password)) {
            $checkNumber = true;
        }
        if (preg_match('/[!@#$%^&*]/',$password)) {
            $checkSpecial = true;
        }

        if ($checkUpper && $checkLower && $checkNumber && $checkSpecial) {
            return true;
        }else {
            return false;
        }
    }
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    if(isset($_POST['register'])) {
        
        if(strlen($password) >= 8 && strlen($confirmPassword) >= 8 ) {
            if($password == $confirmPassword) {
                $pwStatus = checkStrongPassword($password);
                if ($pwStatus) {
                    $_SESSION['email'] = $email;
                    $_SESSION['password'] = password_hash($password,PASSWORD_BCRYPT);
                    echo "<h3 class='text-success text-center'>Data added to session successfully...</h3>";
                    echo " <button class='btn btn-secondary m-5'><a href='./01_login.php' class='text-decoration-none text-light'>Go to login page</a></button>";
                // echo $_SESSION['password'] . "<br>" . $_SESSION['email'];
                    // echo "Strong Password";
                }else {
                    echo "Weak Password Enter again";
                }
            }else {
                echo "<h2>Type same Password Again</h2>";
            }
        }else {
            echo "<h2>Password must be greater than or equal to 6</h2>";
        }

    }
    
    ?>
</body>
</html>