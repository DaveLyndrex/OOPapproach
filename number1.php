<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Calculating the difference between two dates.</a>
        </div>
    </nav>
    <br>
<center>

<?php class SubDate
{ 
    public $date1;
    public $date2; 

    function __construct($date1,$date2)
    { 
        $this->date1 = $date1; 
        $this->date2 = $date2; 
        } 
        function get_date1()
        { 
            return "firstdate- " . $this->date1;
             } 
             function get_date2()
             { 
                 return "seconddate- " . $this->date2;
                  } 
                  function get_diff()
                  { 
                      $difference = (new DateTime($this->date1))->diff (new DateTime($this->date2)); 
                      return "Difference : " . $difference->y . " years, " . $difference->m." months, ".$difference->d." days ";
                       } 
                       } $dateTime = new SubDate("1981-11-03","2013-09-04"); 
                       echo $dateTime->get_date1(); 
                       echo "<br>"; 
                       echo $dateTime->get_date2(); 
                       echo "<br>"; 
                       echo $dateTime->get_diff();

                       ?>
</center>
</body>
</html>