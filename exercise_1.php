<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise 1</title>
</head>
<body>
    <h4>Print the value and data type of the variables (All data types)</h4>
    <h5>Demo data</h5>
    <p>
        class car{function car(){$this->model = "ford";}}<br />
        $age = 500; <br>
        $interest = 3050.75;<br>
        $name = "vinay";<br>
        $hobbies = array("cycling", "swimming", "watching movies");<br>
        $result = true;<br />
        $herbie = new car();
    </p>
    <hr />
    <?php
        /*declaring and initializing variables*/
        class car{
            function car(){
                $this->model = "ford";
            }
        }
        $age = 20;
        $interest = 3050.75;
        $name = "vinay";
        $hobbies = array("cycling", "swimming", "watching movies");
        $result = true;
        $herbie = new car();
    
        
        /*printing required output*/
        echo("<b>printing data type and value of int</b> <Br>");
        var_dump($age);
        echo("<br><b>printing data type and value of float</b> <Br>");
        var_dump($interest);
        echo("<br><b>printing data type and value of string</b> <Br>");
        var_dump($name);
        echo("<br><b>printing data type and value of array</b> <Br>");
        var_dump($hobbies);
        echo("<br><b>printing data type and value of boolean</b> <Br>");
        var_dump($result);
        echo("<br><b>printing data type and value of object</b> <Br>");
        var_dump($herbie);
    ?>
</body>
</html>
