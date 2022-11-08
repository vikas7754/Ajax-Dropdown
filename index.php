<?php 
    require "config.php";
    $sql = "SELECT DISTINCT * FROM car ORDER BY year ASC";
    $result = $conn->query($sql);
    $years = []; $makes = []; $models = []; $styles = [];
    $i = 0;
    while($rows = $result->fetch_assoc()){
        $years[$i] = $rows['year'];
        $makes[$i] = $rows['make'];
        $models[$i] = $rows['model'];
        $styles[$i] = $rows['style'];
        $i++;
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <title>Dropdown</title>
  </head>
  <body>
  <div class="container">
    <h3 class="text-center">AJAX Dropdown</h3>
  <form id="form">
  <div class="form-group">
    <select id="year" class="form-control mt-3">
        <option value="">Select Year</option>
        <?php
            foreach($years as $value){
                echo "<option value=\"$value\">$value</option>";
            }
         ?>
    </select>
    <select id="make" class="form-control mt-3">
        <option value="">Select Make</option>
        <?php
            foreach($makes as $value){
                echo "<option value=\"$value\">$value</option>";
            }
         ?>
    </select>
    <select id="model" class="form-control mt-3">
        <option value="">Selct Model</option>
        <?php
            foreach($models as $value){
                echo "<option value=\"$value\">$value</option>";
            }
         ?>
    </select>
    <select id="style" class="form-control mt-3">
        <option value="">Select Style</option>
        <?php
            foreach($styles as $value){
                echo "<option value=\"$value\">$value</option>";
            }
         ?>
    </select>
  </div>
  <button type="submit" class="btn btn-primary btn-block">Submit</button>
</form>
  </div>
  <div class="container mt-5 text-light">
    <div class="text-center">
    <span id="error" class="h3 text-danger"></span>
    </div>
    <ol id="content"></ol>
  </div>
    

  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
  </body>
</html>