

<?php 
if (isset($_POST["add_to_cart"])) 
{
  $av = $_POST['av'];
$qq = $_POST["quant"];
if ($av > 0) {

  if ($av > $qq || $av == $qq)  {

  if (isset($_SESSION["cart"])) 
{
  $itemarrayid = array_column($_SESSION["cart"], "ids");
  if (!in_array($_GET["id"], $itemarrayid)) {
   
    $count=count($_SESSION["cart"]);
    $itemarray = array(
     'ids' => $_GET["id"],
     'name' => $_POST["hiddenname"],
     'price' => $_POST["hiddenprice"],
     'quantity' => $_POST["quant"]);
     $_SESSION["cart"][$count] = $itemarray;
    echo "<script>alert('Product is added to your cart!')</script>";
    echo "<script>window.location = 'cart.php'</script>";
  }else{
    echo "<script>alert('Item Already Added')</script>";
    echo "<script>window.location = 'cart.php'</script>";
  }
}
else
{
  $itemarray = array(
  'ids' => $_GET["id"], 
  'name' => $_POST["hiddenname"],
  'price' => $_POST["hiddenprice"],
  'quantity' => $_POST["quant"]);
  $_SESSION['cart'][0] = $itemarray;
}
}else{
        echo '<script>alert("Invalid Quantity")</script>';
      echo '<script>window.location="index.php"</script>';

}
}else{
  echo '<script>alert("Out of Stocks")</script>';
      echo '<script>window.location="index.php"</script>';
}
}


 ?>

<!DOCTYPE html>
<html>
<head>
  <title>Cart</title> 

</head>
<body>
 
<div class="row">

  <?php 
  $query = "SELECT * FROM tblproducts WHERE quantity != 0 GROUP BY product_code";
$result = mysqli_query($db,$query);
if (mysqli_num_rows($result)>0) 
{
 while ($row=mysqli_fetch_array($result)) 
{
    $_SESSION['zero'] = $row["quantity"];
    $_SESSION['one'] = $row["product_code"];
if ($_SESSION['zero']==1) {
   $sqls = "UPDATE tblproducts SET status = 'Unavailable' WHERE product_code='".$_SESSION['one']."'";
     mysqli_query($db,$sqls)or die(mysqli_error($db));
}
   ?>
<div class="col-lg-3">
  <div class="card mb-3">
    <div class="card-body">
      <form method="post" action="index.php?action=add&id=<?php echo $row["product_code"]; ?>">
         <center><img src="images/<?php echo $row['imageUrl']; ?>" style="width: 150px; height: 150px;">
         <h4 class="text-info"><?php echo $row["product_name"]; ?></h4>
         <h5 class="text-info">Available Qty [in KG]:(<?php echo $row["quantity"]; ?>)</h5>
         <h4 class="text-danger">&#8377 <?php echo $row["price"]; ?>.00</h4>
       <input class="form-control" type="number" min="0" placeholder="Quantity" name="quant" value="1">
       <input class="form-control" type="hidden" name="av" value="<?php echo $row["quantity"]; ?>">
       <input class="form-control" type="hidden" name="hiddenname" value="<?php echo $row["product_name"]; ?>">
       <input class="form-control" type="hidden" name="hiddenprice" value="<?php echo $row["price"]; ?>">
       <input class="btn btn-success" type="submit" name="add_to_cart" value="Add to Cart" style="margin-top: 10px"></center>
     </form>
    </div>
  </div>
</div>
<?php
}
}
?>
</div>
</body>
</html>