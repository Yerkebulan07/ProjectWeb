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
        <h2 class="home-section-heading">Chairs</h2> 
        <div class="container"> 
                <div class="home-categories-container"> 
                    <span class="category-home-list clearfix"> 
                        <card class="boxes"> 
                            <a href=""> 
                                <figure> 
                                    <img src="https://productimages.mybobs.com/fit-in/480x0/sp/20058771001/20058771001_hero_wide.webp"> 
                                </figure> 
                                <h3 class="category-name">Plaza Side Chair</h3>
                                <h3> Price: $79 </h3> 
                            </a> 
                        </card> 
                        <card> 
                            <a href=""> 
                                <figure> <img src="https://productimages.mybobs.com/fit-in/480x0/sp/20050825003/20050825003_hero_wide.webp"> </figure> 
                                <h3 class="category-name">Scarlett Splat Back Side Chair</h3>
                                <h3> Price: $119 </h3> 
                            </a> 
                        </card> 
                        <card > 
                                <a href=""> 
                                    <figure> 
                                        <img src="https://productimages.mybobs.com/fit-in/480x0/sp/20054619009/20054619009_hero_wide.webp"> 
                                    </figure> 
                                    <h3 class="category-name">Lennox Upholstered Dining Chair</h3> 
                                    <h3> Price: $159 </h3>
                                </a> 
                            </card> 
                            <card> 
                                <a href=""> 
                                    <figure> <img src="https://productimages.mybobs.com/fit-in/480x0/sp/20058856004/20058856004_hero_wide.webp"> </figure> 
                                    <h3 class="category-name">Montana Dining Chair</h3> 
                                    <h3> Price: $89</h3>
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