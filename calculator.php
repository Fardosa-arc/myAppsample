
<html>
<body>
  <head>
    <title>Calculator</title>
    <form action ="calc_process.php" method ="POST">
      <label>select operation: </label>
      <select name ="dropdown">
        <option></option>
        <option value ="Addition">Addition</option>
          <option value ="Subtraction">Subtraction</option>
          <option value ="Multiplication">\Multiplication</option>
          <option value ="Division">Division</option>
        </section><br></br>
        Enter the First number:<input type="text" name="FirstNum" required><br></br>
        Enter the Second number:<input type="text" name="SecondtNum" required><br></br>

        <input type ="submit" value ="Enter"/>
      </form>
      </body>
      </html>
