<?php
/*
* v_pwd_profile.blade.php
* Display profile detail
* @input name, email, password
* @output change data of user in database
* @author Phitchaphatch Yutthavithee
* @Create Date 23/02/2021
* @Update Date 4/03/2021
*/
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></script>
        <title> Profile </title>
        <style>
            .container {
                width: 50%;
                height: 100%;
                overflow: hidden;
            }
            body {
                padding: 4rem 4rem;
            }
            .nav {
                margin-bottom: 2rem;
            }
            button.btn {
                border: 0.5px solid orange;
                background-color: orange;
            }
        </style>
    </head>
    <body>
    <h2> Profile </h2><br>
        <div class="container">
            <div class="card">
                <ul class= "nav nav-tabs">
                    <li class="nav-item active"><a class="nav-link" href="#"> Information </a></li>
                    <li class="nav-item"><a class="nav-link" href="#"> Password </a></li>
                </ul>
                <div class="card-body" class="form-group">
                    <button class="btn float-right"><i class="fa fa-pencil"></i></button><br>
                    <p class="card-text">
                        <label for="email" class="col-sm-2 col-form-label"> Email: </label>
                    </p>
                    <p calss="card-text">
                        <label for="name" class="col-sm-2 col-form-label"> Password: </label>
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>