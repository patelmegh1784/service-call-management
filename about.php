<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">



         <img src="images/new/l4.jpg" alt="">



      </div>

      <div class="content">
         <h3>why choose us?</h3>

         <p>

         Capiclean is a technology platform offering a variety of services at home.

                 Customers use our platform to book services such as beauty treatments, haircuts, massage therapy, cleaning, plumbing, carpentry, appliance repair, painting etc.
         
         These services are delivered in the comfort of their home and at a time of their choosing.
          We promise our customers a high quality, standardised and reliable service experience.
           To fulfill this promise, we work closely with our hand-picked service partners, enabling them with technology, training, products, tools, financing, insurance and brand, helping them succeed and deliver on this promise.
</p>

<p>         Our Vision: Empower millions of professionals worldwide to deliver services at home like never experienced before
</p>

       
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">
   
   <h1 class="heading">Our Leadership Team</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images/pic-1.png" alt="">

         <h3>Abhiraj Bhal</h3>


         <p>
         CEO & Co-founder, Capiclean Company
</p>
<p>
Abhiraj is responsible for marketing and product growth at Urban Company. When not busy at Urban Company, Abhiraj enjoys immersing himself in interesting experiences be it running marathons, skydiving in Spain, scuba diving in the Andamans or cooking his wife Urvi's favourite dishes.
</p>


        

       
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-3.png" alt="">
      <h3> Raghav Chandra
</h3>
      
         <p>
        
CPTO & Co-founder, Capiclean Company
</p>

<p>
Raghav leads technology and product development at Urban Company. In his free time, Raghav loves to venture outdoors and try his balance while slacklining and bouldering. Raghav is a dance enthusiast who does not miss any opportunity to groove to Westcoast Swing and Rock-n-Roll.
</p>
         
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-5.png" alt="">
      

         <h3> Varun Khaitan</h3>

         <p>
COO & Co-founder, Capiclean Company


</p>

<br><br>

<p>
Varun is responsible for operations and service provider on-boarding at Urban Company. When not building Urban Company, Varun likes to check out new coffee shops, explore Delhi with his Polaroid and go for a run at Lodhi Gardens - his favourite spot in the city.
</p>

         
      </div>

     

      

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>



<section class="reviews">
   
   <h1 class="heading">Our Client Reviews</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images/pic-2.png" alt="">

         <h3>Jessica R.</h3>


<P>"I recently hired XYZ Cleaning Services to deep clean my apartment, and I am thoroughly impressed with the results. The team arrived promptly and got straight to work, demonstrating professionalism and efficiency throughout the cleaning process.</p>



       
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-4.png" alt="">
      <h3> Emily S.</h3>
      
      
<p>"I've tried many cleaning services before, but this one stands out. The quality of work is exceptional, and the team is friendly and professional. I couldn't be happier with the results." 
Furthermore, the pricing was fair and transparent, with no hidden fees or surprises. </p>
         
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-6.png" alt="">
      

         <h3>Sarah T.</h3>

      


<p>"I can't say enough good things about the cleaning service I received from XYZ Cleaners. From the moment I contacted them for a quote to the completion of the job. The team arrived on time and was incredibly courteous and respectful throughout the entire process. </p>
         
      </div>

      

     

      

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>




</body>
</html>