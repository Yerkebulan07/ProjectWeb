<!DOCTYPE html>
<html lang="en">
<head>
<title>Furniture Store</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
</head>
<body>
<?php
  include('navigation.php');
?>

<section class="shop-by-category-home"> 
        <h2 class="home-section-heading">Sofas</h2> 
        <div class="container"> 
                <div class="home-categories-container"> 
                    <span class="category-home-list clearfix"> 
                        <card class="boxes"> 
                            <a href=""> 
                                <figure> 
                                    <img src="https://www.nabru.co.uk/images_new/products/medium-trans/43_1.jpg"> 
                                </figure> 
                                <h3 class="category-name">Ato 2 Seat</h3>
                                <h3> Price: $319 </h3> 
                            </a> 
                        </card> 
                        <card> 
                            <a href=""> 
                                <figure> <img src="https://www.nabru.co.uk/images_new/products/by-fabric/medium/67_conway_coffee.jpg"> </figure> 
                                <h3 class="category-name">Lear 2 Seat</h3>
                                <h3> Price: $270 </h3> 
                            </a> 
                        </card> 
                        <card > 
                                <a href=""> 
                                    <figure> 
                                        <img src="https://www.nabru.co.uk/images_new/products/medium-trans/189_1.jpg"> 
                                    </figure> 
                                    <h3 class="category-name">Orb 2 Seat</h3> 
                                    <h3> Price: $293 </h3>
                                </a> 
                            </card> 
                            <card> 
                                <a href=""> 
                                    <figure> <img src="https://www.nabru.co.uk/images_new/products/medium-trans/1434_1.jpg"> </figure> 
                                    <h3 class="category-name">Holl 2 Seat</h3> 
                                    <h3> Price: $347 </h3>
                                </a> 
                            </card> 
                    </span> 
                </div> 
        </div> 
        
    </section>


    <?php
      include('footer.php');
    ?>

</body>
</html>