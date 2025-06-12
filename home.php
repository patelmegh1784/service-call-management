<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/wishlist_cart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   
      <script>
// Get the button
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}


</script>

</head>
<body>
   
<?php include 'components/user_header.php'; ?>




<div class="home-bg">

<section class="home">

   <div class="swiper home-slider">
   
   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/new/l2.jpg" alt="">
         </div>
         <div class="content">
         <h3>We deliver Home Services At your Doorstep</h3>
         <br>
         <span> We are here to help you with Consulting , Residential Cleaning , Hotel cleaning , Household , Commererical cleaning </span>

         <br><br>
            
            <a href="shop.php" class="btn">Book A Services</a>
         </div>
      </div>

      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/new/l5.jpg" alt="">
         </div>
         <div class="content">
           
            <h3>Cleaning with Passion , Shining with Pride</h3>
            <br>

            <span>We offer Dusting all surfaces , window cleaning , carpet cleaning , restroom sanitation , trash removal , vaccumming , custom services</span>
            <br><br>
            <a href="shop.php" class="btn">Book a Services</a>
         </div>
      </div>

      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/new/l6.jpg" alt="">
         </div>
         <div class="content">
           
            <h3>Quality work at affortable prices </h3>
            <br>

            <span>We provide Eco friendly cleaning for your home or office</span>
            <br><br>
            <a href="shop.php" class="btn">Book a Services</a>
         </div>
      </div>

   </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

</div>



      

      



<section class="category">

   <h1 class="heading">Book your services</h1>

   <div class="swiper category-slider">

   <div class="swiper-wrapper">

   

   

   <a href="category.php?category=Full Home Cleaning" class="swiper-slide slide">
      <img src="images/Full Home Cleaning.jpg" alt="">
      <h3>Full Home Cleaning</h3>
   </a>

   <a href="category.php?category=Sofa & Carpet Cleaning" class="swiper-slide slide">
      <img src="images/Sofa & Carpet Cleaning.jpg" alt="">
      <h3>Sofa & Carpet Cleaning</h3>
   </a>

   <a href="category.php?category=Bathroom cleaning" class="swiper-slide slide">
      <img src="images/Bathroom cleaning.jpg" alt="" >
      <h3>Bathroom cleaning</h3>
      
   </a>

  

   <a href="category.php?category=Refrigerator Repair" class="swiper-slide slide">
      <img src="images/Refrigerator Repair.jpg" alt="">
      <h3>Refrigerator Repair</h3>
   </a>

   <a href="category.php?category=Washing machine Repair" class="swiper-slide slide">
      <img src="images/Washing machine repair.jpg" alt="">
      <h3>Washing machine repair</h3>
   </a>


   <a href="category.php?category=AC Repair" class="swiper-slide slide">
      <img src="images/Ac Repair.jpg" alt="">
      <h3>Ac Repair</h3>

   </a>

   <a href="category.php?category=Television Repair" class="swiper-slide slide">
      <img src="images/Television Repair.jpg" alt="">
      <h3>Television Repair</h3>
   </a>

   
   

   <a href="category.php?category=Kitchen cleaning" class="swiper-slide slide">
      <img src="images/Kitchen cleaning.jpg" alt="">
      <h3>Kitchen cleaning</h3>
   </a>


   <a href="category.php?category=Plumber" class="swiper-slide slide">
      <img src="images/Plumber.jpg" alt="">
      <h3>Plumber</h3>
   </a>

   <a href="category.php?category=Carpenter" class="swiper-slide slide">
      <img src="images/Carpenter.jpg" alt="">
      <h3>Carpenter</h3>
   </a>

  
   <a href="category.php?category=Full home painting" class="swiper-slide slide">
      <img src="images/Full home painting.jpg" alt="">
      <h3>Full home painting</h3>
   </a>

   <a href="category.php?category=Salon for women" class="swiper-slide slide">
      <img src="images/Salon for women.jpg" alt="">
      <h3>Salon for women</h3>
   </a>

   <a href="category.php?category=Spa for women" class="swiper-slide slide">
      <img src="images/Spa for women.jpg" alt="">
      <h3>Spa for women</h3>
   </a>

   <a href="category.php?category=Hairstudio for women" class="swiper-slide slide">
      <img src="images/Hairstudio for women.jpg" alt="">
      <h3>Hairstudio for women</h3>
   </a>

   <a href="category.php?category=Salon for men" class="swiper-slide slide">
      <img src="images/Salon for men.jpg" alt="">
      <h3>Salon for men</h3>
   </a>

   <a href="category.php?category=Spa for men" class="swiper-slide slide">
      <img src="images/Spa for men.jpg" alt="">
      <h3>Spa for men</h3>
   </a>

  

   <a href="category.php?category=Pestcontrol" class="swiper-slide slide">
      <img src="images/Pestcontrol.jpg" alt="">
      <h3>Pestcontrol</h3>
   </a>

   <a href="category.php?category=Car cleaning" class="swiper-slide slide">
      <img src="images/Car cleaning.jpg" alt="">
      <h3>Car cleaning</h3>
   </a>

   <a href="category.php?category=Pool cleaning" class="swiper-slide slide">
      <img src="images/Pool cleaning.jpg" alt="">
      <h3>Pool cleaning</h3>
   </a>


  

</div>

   <div class="swiper-pagination"></div>

</div>

</section>

<section class="home-products">

   <h1 class="heading">latest services</h1>

   <div class="swiper products-slider">

   <div class="swiper-wrapper">

   <?php
     $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 6"); 
     $select_products->execute();
     if($select_products->rowCount() > 0){
      while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
   ?>
   <form action="" method="post" class="swiper-slide slide">
      <input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
      <input type="hidden" name="name" value="<?= $fetch_product['name']; ?>">
      <input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
      <input type="hidden" name="image" value="<?= $fetch_product['image_01']; ?>">
      <button class="fas fa-heart" type="submit" name="add_to_wishlist"></button>
      <a href="quick_view.php?pid=<?= $fetch_product['id']; ?>" class="fas fa-eye"></a>
      <img src="uploaded_img/<?= $fetch_product['image_01']; ?>" alt="">
      <div class="name"><?= $fetch_product['name']; ?></div>
      <div class="flex">
         <div class="price"><span>Rs. </span><?= $fetch_product['price']; ?><span>/-</span></div>
         <input type="number" name="qty" class="qty" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="1">
      </div>
      <input type="submit" value="add to cart" class="btn" name="add_to_cart">
   </form>
   <?php
      }
   }else{
      echo '<p class="empty">no products added yet!</p>';
   }
   ?>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".home-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
    },
});

 var swiper = new Swiper(".category-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
         slidesPerView: 2,
       },
      650: {
        slidesPerView: 3,
      },
      768: {
        slidesPerView: 4,
      },
      1024: {
        slidesPerView: 5,
      },
   },
});

var swiper = new Swiper(".products-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      550: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
   },
});

</script>


<button onclick="topFunction()" id="myBtn" title="Go to top" class="btn">Top</button>



</body>
</html>