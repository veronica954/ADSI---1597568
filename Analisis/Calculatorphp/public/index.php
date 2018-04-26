<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="veronica quintero" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>Calculator</title>
        <link rel="stylesheet" href="css/css.css">
        <link rel="stylesheet"  type="text/css" href="css/flex.css" />

    </head>
    <body>
        <div class="one">
        <form action="calc.php" method="GET" >
            
            <input type="number" name="n1">
            <br>
            <select name="operation" >
                <option value="">Select a operation</option>
                <option value="1">sum</option>
                <option value="2">rest</option>
                <option value="3">mult</option>
                <option value="4">div</option>
                <option value="5">mod</option>
                 <option value="6">x^2</option>
                 <option value="7">x^y</option>
                  <option value="8">log</option>
                  <option value="9">sqrt/2</option>
                  <option value="10">sqrt/y</option>
            </select>
            <br>
            <input type="number" name="n2">
            <br>
            <button type="submit">Operate</button>
        </form>
            </div>
        <p>Veronica Quintero.</p>
        
      
    <footer>
      <p>All rights reserved &copy; Calculator 1.0| <a href="index.php">www.calculator.com.co</a></p>
    </footer>
  
    </body>
</html>
