<?php include('includes/connection.php');?>  

<!--header area-->
<?php include 'includes/header.php'; ?>

<!--sidebar area-->
<?php include 'includes/sidebar.php'; ?>

<?php 
if (isset($_GET["action"])) {
    if ($_GET["action"]=='delete') {
        foreach ($_SESSION["cart"] as $keys => $values) {
            if ($values['ids']==$_GET["id"]) {
                unset($_SESSION["cart"][$keys]);
                echo '<script>alert("Product is Removed")</script>';
                echo '<script>window.location="cart.php"</script>';
            }
        }
    }
} 
if (isset($_POST['action']) && $_POST['action']=="change"){
    foreach($_SESSION["cart"] as &$value){
        if($value['ids'] === $_POST["code"]){
            $value['quantity'] = $_POST["quantity"];
            break; // Stop the loop after found the product
        }
    }
}
?>

<div class="card mb-3">
    <div class="card-header">
        <center><h2 class="fas fa-shopping-cart">Cart(s)</h2></center>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Logo</th>
                        <th>Product</th>
                        <th width="150">Quantity[in KG]</th>
                        <th width="150">Price</th>
                        <th>Total</th> 
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    if (!empty($_SESSION["cart"])) {
                        $_SESSION['mm']=0;
                        foreach($_SESSION["cart"] as $keys => $values){
                            ?>
                            <tr>
                                <td><img src="images/logo.jpg" style="width: 100px"></td>
                                <td><?php echo $values["name"]; ?></td>
                                <td>
                                    <form method="post" action="cart.php">
                                        <input type="hidden" name="code" value="<?php echo $values['ids']; ?>">
                                        <input type="hidden" name="action" value="change">
                                        <button type="submit" name="quantity" value="<?php echo max(1, $values['quantity'] - 1); ?>" class="btn btn-sm btn-secondary">-</button>
                                        <?php echo $values["quantity"]; ?>
                                        <button type="submit" name="quantity" value="<?php echo $values['quantity'] + 1; ?>" class="btn btn-sm btn-secondary">+</button>
                                    </form>
                                </td>
                                <td>&#8377 <?php echo $values["price"]; ?></td>
                                <td>&#8377 <?php echo $values["quantity"] * $values["price"]; ?></td>
                                <td><a class="btn btn-danger" type="button" onclick="return confirm('Are you sure?')" href="cart.php?action=delete&id=<?php echo $values["ids"]; ?>">Remove</a></td>
                            </tr>
                            <?php 
                            $name= $values["name"];
                            $_SESSION['mm'] = $_SESSION['mm'] + ($values["quantity"] * $values["price"]);
                        }
                        ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="4">
                                <div class="float-left">
                                    <a href="index.php" class="btn btn-primary">Continue Shopping</a>
                                </div>
                            </td>
                            <td align="right">Total Price</td>
                            <td align="left">&#8377 <?php echo $_SESSION['mm']; ?></td>
                            <td>
                                <div class="float-right">
                                    <a type="button" class="btn btn-success" href="addprod.php" >Proceed and Checkout</a>
                                </div>
                            </td>
                        </tr>
                    </tfoot>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include 'includes/footer.php'; ?>
