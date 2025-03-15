<?php 
if (isset($_SESSION['cid'])) { ?>
    <div id="wrapper">
        <ul class="sidebar navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Home</span>
                </a>
            </li>
        
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa"></i>
                    CATOGORIES
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index1.php">
                    
                    Love & Affection
                    <i class="fas fa-fw fa-heart"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index2.php">
                    
                     Birthday Flowers
                     <i class="fa fa-birthday-cake"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index3.php">
                    
                    Luxury Flowers
                    <i class="fas fa-fw fa-gem"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index4.php">
                    
                    Mixed Flowers
                    <i class="fas fa-fw fa-seedling"></i>
                </a>
            </li>
            <li class="nav-item">
                <a title="List of Orders" class="nav-link" href="order.php">
                    <i class="fas fa-fw fa-th-list"></i>
                    <span>   SEE ORDERS</span>
                </a>
            </li>
            
        </ul>
        <div id="content-wrapper">
            <div class="container-fluid">
                <?php  }else{ ?>
                    <div id="wrapper">
                        <ul class="sidebar navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">
                                    <i class="fas fa-fw fa-home"></i>
                                    <span>Home</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a title="Order" class="nav-link" href="cart.php">
                                    <i class="fas fa-fw fa-shopping-cart"></i>
                                    <span>Cart</span>
                                </a>
                            </li>
                        </ul>
                        <div id="content-wrapper">
                            <div class="container-fluid">
                                <?php }
                                ?>
                                <!-- Sidebar -->
