<?php
include_once "./function.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Marriage Age Checker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>


    <div class="form-bg">
        <div class="container">
            <div class="row">
                <div class="col-6 m-auto mt-3">
                    <div class="form-container">
                        <div class="form-icon"><i class="fa fa-user"></i></div>
                        <h3 class="title">MArriage Age Checker</h3>
                        <form action="" method="POST" class="form-horizontal">
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control mt-3" type="text" name="name" placeholder="Enter Your name">
                            </div>
                            <div class="form-group">
                                <label>Birth Year</label>
                                <input class="form-control mt-3" type="number" name="birthYear" placeholder="Enter Birth Year">
                            </div>
                            <div class="form-group">
                                <label>Gender</label>
                                <input name="gender" type="radio" value="male" id="male"><label for="male">MALE</label>
                                <input name="gender" type="radio" value="female" id="female"><label for="female">FEMALE</label>
                            </div>
                            <button type="submit" name="submit" class="btn btn-default">Check</button>
                            <div class="mt-5 text-center">
                                <?php

                                if (isset($_POST['submit'])) {
                                    $name = $_POST['name'];
                                    $gender = $_POST['gender'] ?? '';
                                    $birthYear = $_POST['birthYear'];

                                    if (empty($name) || empty($gender) || empty($birthYear)) {
                                        echo "<p class=\"alert alert-danger d-flex justify-content-between\">All Fields Are Required ! <button data-bs-dismiss=\"alert\" class=\"btn-close\"></button></p>";
                                    } else if($gender=='male' && $birthYear>2001 || $gender=='female' && $birthYear>2004){
                                        $check=marriageAgeCheck($name, $birthYear, $gender);
                                        echo "<p class=\"alert alert-warning d-flex justify-content-between\">$check<button data-bs-dismiss=\"alert\" class=\"btn-close\"></button></p>";
                                    }
                                    
                                    else {
                                        $check=marriageAgeCheck($name, $birthYear, $gender);
                                        echo "<p class=\"alert alert-success d-flex justify-content-between\">$check<button data-bs-dismiss=\"alert\" class=\"btn-close\"></button></p>";
                                        
                                    }
                                }

                                ?>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>