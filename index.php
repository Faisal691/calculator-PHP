<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator App Using PHP 😋⚡⚡</title>
    <style>
        *{
            font-family:sans-serif;
        }
        .container{
            display:flex;
            height:550px;
            width:100%;
            flex-direction:row;
            justify-content:center;
            align-items:center;
        }
        form input[type="text"]{
            height:20px;
            border:none;
            display:block;
            border-bottom:2px solid crimson;
            font-size:20px;
            outline:none;
        }
        form input[type="text"]:hover{

            border-bottom:2px solid green;
        }
        select{
            width:250px;
            height:40px;
            font-size:20px;
        }
        button{
            width:250px;
            height:50px;
            font-size:20px;
            background-color:crimson;
            border:none;
            outline:none;
            cursor:pointer;
        }

        .hero{
            position:absolute;
            top:10px;
            left:35%;
        }
        .answer{
            color:green;
            font-size:30px;
        }
        .footer{
            position:relative;
            left:550px;
        }
    </style>
</head>
<body>
    <h1 class="hero">PHP Calculator 🚀🚀🔥🔥</h1>
    <div class="container">
        <form action="index.php" method="get">
            <div class="answer">
                <!-- PHP Code Here.......... -->
                <?php
                    if(isset($_GET["sbmt"]))
                    {
                        $val1 = $_GET["num1"];
                        $val2 = $_GET["num2"];
                        $method = $_GET["operator"];

                        switch($method)
                        {
                            case "None":
                                echo "You need to select an Operator !!❌";
                                break;
                            case "Add":
                                echo $val1 + $val2;
                                break;
                            case "Subtract":
                                echo $val1 - $val2;
                                break;
                            case "Multiply":
                                echo $val1 * $val2;
                                break;
                            case "Divide":
                                echo $val1 / $val2;
                                break;
                            case "Power":
                                echo pow($val1,$val2);
                                break;
                        }
                    }
                ?>
            </div>
            <br><br>
            <input type="text" name="num1" id="num1" placeholder = "Enter First Number"><br><br>
            <input type="text" name="num2" id="num2" placeholder = "Enter Second Number">
            <br><br>
            <select name="operator" id="">
                <option>None</option>
                <option>Add</option>
                <option>Subtract</option>
                <option>Multiply</option>
                <option>Divide</option>
                <option>Power</option>
            </select>
            <br><br><br>
            <button type = "sbmt" value = "sbmt" name = "sbmt">Calculate</button>

        </form>
    </div>
    <h4 class="footer">Made with <span>❤️‍🔥</span> by Faisal</h4>
</body>
</html>