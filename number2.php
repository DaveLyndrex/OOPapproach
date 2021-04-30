<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <title>Number 2</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Adding input in select option.</a>
        </div>
    </nav>
    <br>
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-12">
            </div>
            <form action="" method="post">
                <label for="" class="form-label">Enter something</label>
                <input type="text" class="form-control" name="userInput">
                <br> <br>
                <button type="submit" class="btn btn-outline-dark" name="submit">Submit</button>
            </form>
        </div>
    </div>
<br>
    <?php session_start();
    class userInput
    {
        public $userInput;
        public function __construct($userInput)
        {
            $this->userInput = $userInput;
        }
        public function addInput()
        {
            if (!isset($_SESSION['option'])) {
                $_SESSION['option'] = [];
            }
            array_push($_SESSION['option'], $this->userInput);
            echo ' <center>Select: <select name="dropdown"></center>';
            foreach ($_SESSION['option'] as $value) {
                echo '<option style="width: 40%;" value=' . $value . '>' . $value . '</option>';
            }
            echo '</select>';
        }
    }
    if (isset($_POST['submit'])) {
        $userInput = $_POST['userInput'];
        $input = new userInput($userInput);
        $input->addInput();
    }
    ?>
</body>

</html>