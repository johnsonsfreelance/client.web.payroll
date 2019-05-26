<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    
    <?php 
        echo "<style>";
        include_once("../css/style.css");
        echo "</style>";
    ?>
    
</head>
<body>
    <?php 
        $nav_arr = array(
            "Employee"
            ,"Loan"
            ,"Bunos"
            ,"Holiday"
            ,"Report"
            ,"Void"
        );
    ?>
    <div id = "ci-full-width-container">
    <?php
        //include header
        include_once("/header.php");
        //check if requested pages is exist then respopnd
        include_once("/page.php");
        //include footer
    ?>
    </div>
</body>
</html>