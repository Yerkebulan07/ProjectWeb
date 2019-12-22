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
        <h2 class="home-section-heading">Arm Chairs</h2> 
        <div class="container"> 
                <div class="home-categories-container"> 
                    <span class="category-home-list clearfix"> 
                        <card class="boxes"> 
                            <a href=""> 
                                <figure> 
                                    <img src="https://www.nabru.co.uk/images_new/products/medium-trans/66_1.jpg"> 
                                </figure> 
                                <h3 class="category-name">Lear 1 Seat Chair</h3>
                                <h3> Price: $239 </h3> 
                            </a> 
                        </card> 
                        <card> 
                            <a href=""> 
                                <figure> <img src="https://www.nabru.co.uk/images_new/products/medium-trans/42_1.jpg"> </figure> 
                                <h3 class="category-name">Ato 1 Seat Chair</h3>
                                <h3> Price: $249 </h3> 
                            </a> 
                        </card> 
                        <card > 
                                <a href=""> 
                                    <figure> 
                                        <img src="https://www.nabru.co.uk/images_new/products/medium-trans/184_1.jpg"> 
                                    </figure> 
                                    <h3 class="category-name">Orb 1 Seat Chair</h3> 
                                    <h3> Price: $263 </h3>
                                </a> 
                            </card> 
                            <card> 
                                <a href=""> 
                                    <figure> <img src="https://www.nabru.co.uk/images_new/products/medium-trans/188_1.jpg"> </figure> 
                                    <h3 class="category-name">Tor Armchair</h3> 
                                    <h3> Price: $239 </h3>
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