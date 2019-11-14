<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise 2</title>
</head>
<body>
    <h4>How to use a variable in a variable name.</h4>
    <p>
        $name = "rasmus";<br />
        ${"hello" . "$name"} = "lerdorf";<br />
        echo $hellorasmus;<br />
    </p>
    <hr />
    
    <?php
        /*declaring and initializing variable named 'name'*/
        $name = "rasmus";    

        /*using variable name inside variable name*/
        ${"hello" . "$name"} = "lerdorf";           //now the variable name becomes 'hellorasmus'

        /*echo using 'hellorasmus'*/
        echo $hellorasmus;
    ?>
</body>
</html>