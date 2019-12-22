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
        <h2 class="home-section-heading">Tables</h2> 
        <div class="container"> 
                <div class="home-categories-container"> 
                    <span class="category-home-list clearfix"> 
                        <card class="boxes"> 
                            <a href=""> 
                                <figure> 
                                    <img src="https://productimages.mybobs.com/fit-in/506x0/s/20058316/20058316_gallery_03_large.webp"> 
                                </figure> 
                                <h3 class="category-name">Cosmopolitan Dining Table</h3>
                                <h3> Price: $399 </h3> 
                            </a> 
                        </card> 
                        <card> 
                            <a href=""> 
                                <figure> <img src="https://productimages.mybobs.com/fit-in/506x0/s/20060998/20060998_gallery_02_large.webp"> </figure> 
                                <h3 class="category-name"> Montana Dining Table </h3>
                                <h3> Price: $399 </h3> 
                            </a> 
                        </card> 
                        <card > 
                                <a href=""> 
                                    <figure> 
                                        <img src="https://productimages.mybobs.com/fit-in/506x0/s/20055768007/20055768007_gallery_03_large.webp"> 
                                    </figure> 
                                    <h3 class="category-name">Coco Dining Table</h3> 
                                    <h3> Price: $299</h3>
                                </a> 
                            </card> 
                            <card> 
                                <a href=""> 
                                    <figure> <img src="https://productimages.mybobs.com/fit-in/480x0/sp/20051429/20051429_hero_wide.webp"> </figure> 
                                    <h3 class="category-name">Sonoma Natural Complete Counter Table</h3> 
                                    <h3> Price: $499 </h3>
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