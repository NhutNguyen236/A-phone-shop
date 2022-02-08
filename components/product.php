<div class="col-6 col-md-4 col-lg-4">
    <div class="product product-7 text-center">
        <figure class="product-media">
            <span class="product-label label-new">New</span>
            <a href="product.html">
                <img src="assets/images/products/product-4.png" alt="Product image" class="product-image">
            </a>

            <div class="product-action">
                <a href="category.php?action=add&item_id=<?php echo $row['item_id']; ?>&cost=<?php echo $row['cost']; ?>" class="btn-product btn-cart" name="addtocart"><span>add to cart</span></a>
            </div><!-- End .product-action -->
        </figure><!-- End .product-media -->

        <div class="product-body">

            <h3 class="product-title"><a href="product.html"><?php echo $row["item_name"]; ?></a></h3><!-- End .product-title -->
            <div class="product-price">
                $<?php echo $row['cost']; ?>
            </div><!-- End .product-price -->
            <div class="ratings-container">
                <div class="ratings">
                    <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                </div><!-- End .ratings -->
                <span class="ratings-text">( 2 Reviews )</span>
            </div><!-- End .rating-container -->

            <div class="product-nav product-nav-thumbs">
                <a href="#" class="active">
                    <img src="assets/images/products/product-4.png" alt="product desc">
                </a>
                <a href="#">
                    <img src="assets/images/products/product-4.png" alt="product desc">
                </a>

                <a href="#">
                    <img src="assets/images/products/product-4.png" alt="product desc">
                </a>
            </div><!-- End .product-nav -->
        </div><!-- End .product-body -->
    </div><!-- End .product -->
</div><!-- End .col-sm-6 col-lg-4 -->