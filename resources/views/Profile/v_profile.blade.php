<?php
/*
* v_info_profile.blade.php
* Display profile detail
* @input name, email, password
* @output change data of user in database
* @author Phitchaphatch Yutthavithee
* @Create Date 27/02/2021
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
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
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
            <nav class="nav nav-tabs">
                    <a class="nav-item nav-link active" style="color:black;" id="nav-info-tab" data-toggle="tab" href="#nav-info" role="tab" aria-controls="nav-information" aria-selected="true"> Information </a>
                    <a class="nav-item nav-link" style="color:black;" id="nav-pwd-tab" data-toggle="tab" href="#nav-pwd" role="tab" aria-controls="nav-password" aria-selected="false"> Password </a>
            </nav>
            
            <div class="tab-content" id="nav-tabContent">
                <!-- tab information -->
                <div class="tab-pane fade show active" id="nav-info" role="tabpanel" aria-labelledby="nav-infor-tab">
                    <form action ='infomation'>
                    <div class="form-group"></div>
                        <button class="btn float-right"><i class="fa fa-pencil"></i></button><br>
                        <p class="card-text">
                            <label for="name" class="col-sm-2"> Name: </label>
                        </p>
                        <p class="card-text">
                            <label for="email" class="col-sm-2"> Email: </label>
                        </p>
                    </div>
                    </form>
                </div>    
            
                <!-- tab password -->
                <div class="tab-pane fade" id="nav-pwd" role="tabpanel" aria-labelledby="nav-password-tab">
                    <form action='password'>
                    <div class="form-group">
                        <button class="btn float-right"><i class="fa fa-pencil"></i></button><br>
                        <p class="card-text">
                            <label for="email" class="col-sm-2"> Email: </label>
                        </p>
                        <p class="card-text">
                            <label for="name" class="col-sm-2"> Password: </label>
                        </p>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>