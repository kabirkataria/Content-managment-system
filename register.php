<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .h-100-c{
            height: 90vh;
        }
        body{
            background-color: rgba(0,0,0,0.1) !important;
        }
        .backimg{
            height: 500px;
        }
        
    </style>
</head>

<body>
    <?php include "./navbar.php" ?>

    <div class="d-flex flex-column align-items-center w-100 h-100-c bg-grey ">
        <div class="mt-5">
            <h1>Register Now</h1>
        </div>
        <div class="d-flex flex-wrap mx-5 mt-md-3 w-75 border bg-white p-md-5 p-4 rounded">
            <div class=" w-50 backimg" style="background-image: url(https://thumbs.dreamstime.com/b/male-avatar-icon-flat-style-male-user-icon-cartoon-man-avatar-hipster-vector-stock-91462914.jpg); background-size: cover;
            background-position: center;">
            </div>
            <div class=" w-50 w-md-50 px-md-3 my-md-5">
                <form class="my-3">
                    <div class="my-3">
                        <label for="exampleInputEmail1" class="form-label">Name</label>
                        <input placeholder="Please enter your name" type="text" class="form-control"
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="my-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input placeholder="Please enter your email id" type="email" class="form-control"
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="my-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input placeholder="Please enter your password" type="password" class="form-control"
                            id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary my-3">Register</button>
                </form>
            </div>
        </div>
    </div>

  
</body>

</html>