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
  if(isset($_REQUEST['category'])){
    if($_REQUEST['category'] == 'home'){
    ?>
<div class="header">

<div id="slider">
<figure>
  <img src="https://avatars.mds.yandex.net/get-pdb/1691218/5cf8bb4a-1b3a-49ce-8364-79a4dcbac7f1/s1200"/>
  <img src="https://centralbugandauniversity.info/wp-content/uploads/2018/11/Kitchens-in-Todays-Open-Concept-Home-1.jpg"/>
  <img src="https://www.zastavki.com/pictures/originals/2019_Sofa__two_leather_armchairs_and_a_table_in_the_living_room_with_a_large_window_131277_.jpg"/>
  <img src="https://res-5.cloudinary.com/brosa-design/image/fetch/f_auto,q_auto:good/https://s3-ap-southeast-2.amazonaws.com/brosa.com.au/qLpVRB8J4LxeuaJU4gL1ysrT"/>
  <img src="https://www.postspics.com/wp-content/uploads/2015/12/inexpensive-contemporary-furniture-bedroom.jpg"/>
</figure>
</div>
</div>
<?php include('navigation.php'); ?>


<div class="row">

<div class="main">
  <h1>Welcome to Our Furniture Store</h1>
  <section class="book-appointment-home"> 
      <div class="container "> 
          <div> 
                  <p class="visitus"> Visit us in person and get to know us better. Experience our furniture pieces first hand in a setting designed to feel like home. </p>                        
          </div> 
      </div> 
  </section>
  <hr>
<section class="shop-by-category-home"> 
  <h2 class="home-section-heading">Shop Furniture by Category</h2> 
  <div class="container"> 
          <div class="home-categories-container"> 
              <span class="category-home-list clearfix"> 
                  <card class="boxes"> 
                      <a href="sofas.php"> 
                          <figure> 
                              <img src="https://res-1.cloudinary.com/brosa-design/image/fetch/c_scale,f_auto,q_auto:good,w_304/https://s3-ap-southeast-2.amazonaws.com/brosa.com.au/RfFMvVyKPtQGeatLHt7CuRML"> 
                          </figure> 
                          <h3 class="category-name">Sofas</h3> 
                      </a> 
                  </card> 
                  <card> 
                      <a href="chair.php"> 
                          <figure> <img src="https://res-5.cloudinary.com/brosa-design/image/fetch/c_scale,f_auto,q_auto:good,w_304/https://s3-ap-southeast-2.amazonaws.com/brosa.com.au/zikd5s96dT3tSsH7d5uinvV9"> </figure> 
                          <h3 class="category-name">Dining Chairs</h3> 
                      </a> 
                  </card> 
                  <card> 
                      <a href="tables.php"> 
                          <figure> <img src="https://res-5.cloudinary.com/brosa-design/image/fetch/c_scale,f_auto,q_auto:good,w_304/https://s3-ap-southeast-2.amazonaws.com/brosa.com.au/YuyUTBknhGXQirQ8d5Qm46Va"> </figure> 
                          <h3 class="category-name">Dining Tables</h3> 
                      </a> 
                  </card> 
                  <card> 
                      <a href="armchair.php"> <figure> 
                          <img src="https://res-2.cloudinary.com/brosa-design/image/fetch/c_scale,f_auto,q_auto:good,w_304/https://s3-ap-southeast-2.amazonaws.com/brosa.com.au/W7waNcMd56MVygquWiVZnDw9"> </figure> 
                          <h3 class="category-name">Armchairs</h3> 
                      </a> 
                  </card> 
                  
              </span> 
          </div> 
  </div> 
  
</section>
<div class="moreProd">
<p class="more">
  . . .

  </p>
<p class="click-btn-products"> If you want to see more furniture ,just click button PRODUCTS :3</p>
</div>
</div>
</div>
<?php
    }
    if($_REQUEST['category'] == 'products'){
      include('navigation.php');
      ?>
      <div class="row">
  
  <div class="main">
    <section class="shop-by-category-home"> 
        <h2 class="home-section-heading">Products</h2> 
        <div class="container"> 
                <div class="home-categories-container"> 
                    <span class="category-home-list clearfix"> 
                        <card class="boxes"> 
                            <a href="sofas.php"> 
                                <figure> 
                                    <img src="https://res-1.cloudinary.com/brosa-design/image/fetch/c_scale,f_auto,q_auto:good,w_304/https://s3-ap-southeast-2.amazonaws.com/brosa.com.au/RfFMvVyKPtQGeatLHt7CuRML"> 
                                </figure> 
                                <h3 class="category-name">Sofas</h3> 
                            </a> 
                        </card> 
                        <card> 
                            <a href="chair.php"> 
                                <figure> <img src="https://res-5.cloudinary.com/brosa-design/image/fetch/c_scale,f_auto,q_auto:good,w_304/https://s3-ap-southeast-2.amazonaws.com/brosa.com.au/zikd5s96dT3tSsH7d5uinvV9"> </figure> 
                                <h3 class="category-name">Dining Chairs</h3> 
                            </a> 
                        </card> 
                        <card> 
                            <a href="tables.php"> 
                                <figure> <img src="https://res-5.cloudinary.com/brosa-design/image/fetch/c_scale,f_auto,q_auto:good,w_304/https://s3-ap-southeast-2.amazonaws.com/brosa.com.au/YuyUTBknhGXQirQ8d5Qm46Va"> </figure> 
                                <h3 class="category-name">Dining Tables</h3> 
                            </a> 
                        </card> 
                        <card> 
                            <a href="armchair.php"> <figure> 
                                <img src="https://res-2.cloudinary.com/brosa-design/image/fetch/c_scale,f_auto,q_auto:good,w_304/https://s3-ap-southeast-2.amazonaws.com/brosa.com.au/W7waNcMd56MVygquWiVZnDw9"> </figure> 
                                <h3 class="category-name">Armchairs</h3> 
                            </a> 
                        </card> 
                        <card> 
                            <a href="bedframes.php"> <figure> 
                                <img src="https://res-1.cloudinary.com/brosa-design/image/fetch/c_scale,f_auto,q_auto:good,w_304/https://s3-ap-southeast-2.amazonaws.com/brosa.com.au/xySKtr3iV2UWJaMXbFSVyGLD"> </figure> 
                                <h3 class="category-name">Bed Frames</h3> 
                            </a> 
                        </card> 
                        <card> 
                            <a href="#"> <figure> 
                                <img src="https://res-3.cloudinary.com/brosa-design/image/fetch/c_scale,f_auto,q_auto:good,w_304/https://s3-ap-southeast-2.amazonaws.com/brosa.com.au/2aeVQDvAZLGyjASXV9Ak1hqP"> </figure> 
                                <h3 class="category-name">Ottomans</h3> 
                            </a> 
                        </card> 
                        <card> 
                            <a href="barstools.php"> <figure> 
                                <img src="https://res-5.cloudinary.com/brosa-design/image/fetch/c_scale,f_auto,q_auto:good,w_304/https://s3-ap-southeast-2.amazonaws.com/brosa.com.au/p6JZYvrRcZgGRy5Nr2YaKbVo"> </figure> 
                                <h3 class="category-name">Bar Stools</h3> 
                            </a> 
                        </card> 
                        <card> 
                            <a href="#"> <figure> 
                                <img src="https://res-4.cloudinary.com/brosa-design/image/fetch/c_scale,f_auto,q_auto:good,w_304/https://s3-ap-southeast-2.amazonaws.com/brosa.com.au/e26kFXqcCBHrUi7Frj5MT6ux"> </figure> 
                                <h3 class="category-name">Sofa Beds</h3> 
                            </a> 
                        </card> 
                    </span> 
                </div> 
            </div> 
    </section>
  </div>
      </div>
    <?php
    }
    if($_REQUEST['category'] == 'aboutus'){
      include('navigation.php');
      ?>
    <div class="row">
      
    <div class="main">
      <div>
          <span>
            <div class="slice-content slice-content-1">
                    <h1 class="slice-content__heading slice-content-1__heading">
                    Modern &amp; Classic Design Furniture  	  </h1>
                    <div class="slice-content__text slice-content__text--1">
                    <img class="inspiration" src="https://www1.cultfurniture.com/downloads/1554453304Inspiration-Guide_Brown">
                    <p class="main-text-about">If you are looking for great designer chairs and beautiful furniture for your home or trade, then you have come to the right place. At Furniture Store you can choose from a wide range of modern &amp; contemporary furniture, lighting, and artwork to create the perfect mood and ambience in your home, restaurant, hotel or office. Browse through our&nbsp; Designer Furniture &nbsp;catalogue and you will easily find the right tables and chairs inspired by mid-century &amp; classic designs.&nbsp;One of the most popular categories for our customers is the Moda Collection with a great range of chairs,&nbsp;stools, sofas and eye-catching accessories.&nbsp;From home&nbsp;furniture purchases to bulk contract &amp;&nbsp;commercial furniture orders, we furnish all kinds of spaces: home, kitchen and dining rooms, hotels, shops, residential schemes, bars and restaurants and more... Please feel free to visit our sister company Boutique Camping to find your high-quality family bell tent.</p>  	  </div>
            </div>
          </span>
        </div>
      
      <hr>
      <div>
              <span class="first">
                  <p>Furniture Store is a furniture design + gift shop founded by Helena Barquet and Fabiana Faria in 2013 right at the intersection of New York’s Lower East Side and Chinatown. 'A neighborhood we love and felt captured our approach to design: creative, emerging and authentic.</p>
                  <img src="https://avatars.mds.yandex.net/get-pdb/49816/60774154-a98e-4308-b122-3805dbb5a8c7/s1200"/>
              </span>
          </div>
          <hr>
          <div>
          <span class="second">
              
              <img src="https://sc01.alicdn.com/kf/HTB18iAfKXOWBuNjy0Fiq6xFxVXa8/Axcellent-Furniture-Acrylic-finish-kitchen-cabinet-with.jpg"/>
              <p>
                      Our background working in fine art and high end design means we’re used to working directly with artists. Many of our relationships with designers started with studio visits, which allowed us to create ongoing conversations and establish a collaborative sense instead of following a tradition vendor-buyer model.
                  This collaborative approach allows us to source, fine-tune and experiment in a way traditional retail stores cannot, and lends itself to a warmer, more welcoming experience.
                  </p>
          </span>
      </div>
      
      
    </div>
    </div>
    <?php }
}
  if(!isset($_REQUEST['category'])){
      ?>
<div class="header">

<div id="slider">
<figure>
    <img src="https://avatars.mds.yandex.net/get-pdb/1691218/5cf8bb4a-1b3a-49ce-8364-79a4dcbac7f1/s1200"/>
    <img src="https://centralbugandauniversity.info/wp-content/uploads/2018/11/Kitchens-in-Todays-Open-Concept-Home-1.jpg"/>
    <img src="https://www.zastavki.com/pictures/originals/2019_Sofa__two_leather_armchairs_and_a_table_in_the_living_room_with_a_large_window_131277_.jpg"/>
    <img src="https://res-5.cloudinary.com/brosa-design/image/fetch/f_auto,q_auto:good/https://s3-ap-southeast-2.amazonaws.com/brosa.com.au/qLpVRB8J4LxeuaJU4gL1ysrT"/>
    <img src="https://www.postspics.com/wp-content/uploads/2015/12/inexpensive-contemporary-furniture-bedroom.jpg"/>
</figure>
</div>
</div>
  <?php  include('navigation.php'); ?>


<div class="row">

<div class="main">
    <h1>Welcome to Our Furniture Store</h1>
    <section class="book-appointment-home"> 
        <div class="container "> 
            <div> 
                    <p class="visitus"> Visit us in person and get to know us better. Experience our furniture pieces first hand in a setting designed to feel like home. </p>                        
            </div> 
        </div> 
    </section>
    <hr>
<section class="shop-by-category-home"> 
    <h2 class="home-section-heading">Shop Furniture by Category</h2> 
    <div class="container"> 
            <div class="home-categories-container"> 
                <span class="category-home-list clearfix"> 
                    <card class="boxes"> 
                        <a href=""> 
                            <figure> 
                                <img src="https://res-1.cloudinary.com/brosa-design/image/fetch/c_scale,f_auto,q_auto:good,w_304/https://s3-ap-southeast-2.amazonaws.com/brosa.com.au/RfFMvVyKPtQGeatLHt7CuRML"> 
                            </figure> 
                            <h3 class="category-name">Sofas</h3> 
                        </a> 
                    </card> 
                    <card> 
                        <a href=""> 
                            <figure> <img src="https://res-5.cloudinary.com/brosa-design/image/fetch/c_scale,f_auto,q_auto:good,w_304/https://s3-ap-southeast-2.amazonaws.com/brosa.com.au/zikd5s96dT3tSsH7d5uinvV9"> </figure> 
                            <h3 class="category-name">Dining Chairs</h3> 
                        </a> 
                    </card> 
                    <card> 
                        <a href=""> 
                            <figure> <img src="https://res-5.cloudinary.com/brosa-design/image/fetch/c_scale,f_auto,q_auto:good,w_304/https://s3-ap-southeast-2.amazonaws.com/brosa.com.au/YuyUTBknhGXQirQ8d5Qm46Va"> </figure> 
                            <h3 class="category-name">Dining Tables</h3> 
                        </a> 
                    </card> 
                    <card> 
                        <a href=""> <figure> 
                            <img src="https://res-2.cloudinary.com/brosa-design/image/fetch/c_scale,f_auto,q_auto:good,w_304/https://s3-ap-southeast-2.amazonaws.com/brosa.com.au/W7waNcMd56MVygquWiVZnDw9"> </figure> 
                            <h3 class="category-name">Armchairs</h3> 
                        </a> 
                    </card> 
                    
                </span> 
            </div> 
    </div> 
    
</section>
<div class="moreProd">
<p class="more">
    . . .

    </p>
 <p class="click-btn-products"> If you want to see more furniture ,just click button PRODUCTS :3</p>
  </div>
</div>
</div>
    <?php
  }include('footer.php');

?>
</body>
</html>