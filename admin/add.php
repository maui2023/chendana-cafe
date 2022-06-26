<html>
<head>
  <title>Add Menu Food</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php
$tarikh = date("d-m-Y");
?>
<div class="container">
    <h2>Add Food</h3>
<form action="insert.php" method="post">
    <div class="form-group">
        Food Name: <input type="text" class="form-control" name="FoodName"><br>
        Food Picture: <input type="text" class="form-control" name="FoodPicture" value="-<?=$tarikh?>.jpg"><br>
        Food Price RM (0.00): <input type="number" class="form-control" name="FoodPrice"><br>
        Food Discount: <input type="text" class="form-control" name="FoodDiscount" value="0"><br>
        Food YN: <input type="text" class="form-control" name="FoodYN" value="Y"><br>
        <input type="submit">
    </div>
</form>
</div>
</body>
</html>
