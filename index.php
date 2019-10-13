<!DOCTYPE html>
    <html>
        <head>
            <title>first php code</title>
            <meta charset="UTF-8">
        </head>
        <body>
        <form method ="GET">
        <input type="text" name="num1" placeholder="Number1">
        <br>
        <select name="operation">
        <option value="none">None</option>
        <option value="add">Add</option>
        <option value="sub">Subtract</option>
        <option value="mul">Multiply</option>
        <option value="div">Divide</option>
        </select>
        <br>
        <input type="text" name="num2" placeholder="Number2">
        <br>
        <button type="submit" value="submit" name="submit">Calculate</button>
        </form>
            <?php
            if($_GET['submit']=="submit")
            {
              $n1=$_GET['num1'];
              $n2=$_GET['num2'];
              $op=$_GET['operation'];
              switch($op)
              {
                  case "add":echo $n1+$n2;
                                break;
                case "sub":echo $n1-$n2;
                            break;
                case "mul":echo $n1*$n2;
                            break;
                case "div":echo $n1/$n2;
                            break;
                default: echo "You choosed NONE!!!";
              }
              unset($_GET['operation']);
            }
            ?>
        </body>
    </html>