<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap CDN link-->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- include Jquery CDN -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- include JS file -->

    <script src="script.js"></script>

    <title>PHP Ajax tutorial</title>
</head>

<body>
    <h1 class='ms-5 text-center text-warning'><u>Welcome in php Ajax</u></h1>
    <button name='data-load-btn' id='data-load-btn' class='float-end mx-5  btn btn-outline-dark'>View Users</button>
    <section class='container mt-5'>
        <div class='row'>
            <div class='col mb-5 h2 text-info'>Add User Information</div>
        </div>

        <form id="add_form">

            <div class="row">
                <div class="col">
                    <label for="user_name">Name</label>
                    <input type="text" id="user_name" name="user_name" placeholder="Enter User Name" required
                        maxlength="50" minlength="2" class="form-control" autofocus>
                </div>

                <div class='col'>

                    <label for="user_Age">Age</label>
                    <input type="text" id="user_age" name="user_age" placeholder="Enter User Age" required maxlength="3"
                        minlength="1" class="form-control">
                </div>

                <div class='col'>

                    <label for="user_email">Email</label>
                    <input type="text" id="user_email" name="user_email" placeholder="Enter User Email" required
                        maxlength="100" minlength="10" class="form-control">
                </div>

                <div class='col'>

                    <label for="user_password">Password</label>
                    <input type="text" id="user_password" name="user_ppassword"
                        placeholder="Enter password max 16 and min 8 character " required maxlength="16" minlength="8"
                        class="form-control">
                </div>

            </div>

            <div class='row'>
                <div class='col'>
                    <button class='btn btn-success mt-5' type='submit' style='width:180px;font-size:large' id="insert-data-btn" name="insert-data-btn">Add
                        User</button>

                </div>
            </div>

            </div>
            </div>
        </form>
    </section>

    <section class="container">
        
    </section>
    <section class="container mt-5">
        <div class="row">
            <div class="col">
                <span  class="float-end m-2">Search
                    <input type="search" name="search" id="search" style="outline:none">
                </span>
            </div>
        </div>
        <div class="row">
            <div class="col" id="space2"></div>
        </div>

    </section>

</body>
</html>