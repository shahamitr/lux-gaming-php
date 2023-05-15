<?php
    $filename = basename($_SERVER['PHP_SELF']);    
?>
<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.php" class="logo">
                        <img src="assets/images/logo.png" alt="" style="width: 158px;">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="index.php" class="<?php echo ($filename=='index.php')?'active':''; ?>">Home</a></li>
                        <li><a href="shop.php" class="<?php echo ($filename=='shop.php')?'active':''; ?>">Our Shop</a></li>
                        <li><a href="product-details.php" class="<?php echo ($filename=='product-details.php')?'active':''; ?>">Product Details</a></li>
                        <li><a href="contact.php" class="<?php echo ($filename=='contact.php')?'active':''; ?>">Contact Us</a></li>
                        <li><a href="#">Sign In</a></li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->