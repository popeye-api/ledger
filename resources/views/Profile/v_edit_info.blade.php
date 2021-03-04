<?php
/*
* v_edit_info.blade.php
* Display edit profile detail
* @input name, email, password
* @output change data of user in database
* @author Phitchaphatch Yutthavithee
* @Create Date 27/02/2021
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
        </style>
    </head>
    <body>
    <h2> Profile </h2><br>
        <div class="container">
            <div class="card">
                <ul class= "nav nav-tabs">
                    <li class="nav-item active"><a class="nav-link" href="#"> Edit information </a></li>
                    <li class="nav-item"><a class="nav-link" href="#"> Password </a></li>
                </ul>
                <div class="card-body">
                    <form action="#">
                        <div class="form-group">
                            <label for="name" class="col-sm-2"> Name<text style="color:red;">*</text>: </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" required>
                            </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-2"> Email<text style="color:red;">*</text>: </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" required>
                            </div>
                        <p align="right">
                            <button type="button" class="btn btn-secondary"> Cancel </button>
                            <button type="button" class="btn btn-success"> Save </button>
                        </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>