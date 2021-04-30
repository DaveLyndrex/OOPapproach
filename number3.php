<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Number 3</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Email Validation</a>
        </div>
    </nav>
    <br>
    <div class="container text-center">
        <div class="row">
            <div class="col-md">
                <form method="post" action="number3.php">
                    <input type="text" name="email" class="area" placeholder="Enter Email">
                    <input type="submit" value="Add" class="btn btn-outline-dark" name="submit">
            </div>
        </div>
        </form>

    </div>
    <?php
    trait emailValidate
    {
        public function emailval()
        {
            if (isset($_POST['submit'])) {
                $input = $_POST['email'];

                if (empty($_POST["email"])) {
                    echo "<script>alert('Email is Required!')</script>";
                } elseif (!filter_var($input, FILTER_VALIDATE_EMAIL)) {
                    echo "<script>alert('Invalid Email Address!')</script>";
                } else {
                    echo "<script>alert('Your Email is Valid!')</script>";
                }

                echo "<br>";
            }
        }
    }
    class Validation
    {
        use emailValidate;
    }
    $validate = new Validation();
    $validate->emailval();
    ?>
</body>
</html>