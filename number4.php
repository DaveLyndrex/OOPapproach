<?php

$name = '';
$address = '';
$age = '';
$contactNumber = '';

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Number 4</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Verifying form</a>
        </div>
    </nav>
    <br>
    <div class="container w-50">
        <form action="" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="..." value="<?php echo $name; ?>">

                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" name="address" class="form-control" id="address" value="<?php echo $address; ?>">
                </div>

                <div class="mb-3">
                    <label for="age" class="form-label">Age</label>
                    <input type="text" name="age" class="form-control" id="age" value="<?php echo $age; ?>">
                </div>

                <div class="mb-3">
                    <label for="number" class="form-label">Contact Number</label>
                    <input type="text" name="contactNumber" class="form-control" id="contactNumber" value="<?php echo $contactNumber; ?>">
                </div>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
   
    </div>
    <br><br>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    
    <?php
    trait formEntry
    {
        public function fields()
        {
            if (isset($_POST['submit'])) {
                $name = $_POST['name'];
                $address = $_POST['address'];
                $age = $_POST['age'];
                $contactNumber = $_POST['contactNumber'];

                if (isset($name) && isset($address) && isset($age) && isset($contactNumber)) {
                    echo "<br>";
                    echo "<div class='container'>";
                    echo "name: $name";
                    echo "<br>";
                    echo "address: $address";
                    echo "<br>";
                    echo "age: $age";
                    echo "<br>";
                    echo "Contact Number : $contactNumber";
                    echo "</div>";
                } else {
                    echo "not set!";
                }
            }
        }
    }
    class Contains
    {
        use formEntry;
    }
    $validate = new Contains();
    $validate->fields();
    ?>
</body>
</html>