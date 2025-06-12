



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
   <title>orders</title>
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>filterable responsive lightbox gallery tutorial</title>

    <!-- magnific-popup css cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

    <!-- custom css file link  -->


<style>

*{
    margin: 0; padding: 0;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
    text-transform: capitalize;
    transition:all .2s cubic-bezier(.34,1.12,.68,1.31);
}

.gallery{
    min-height: 100vh;
    background: #f5deb3;
    padding-bottom: 100px;
}

.gallery .controls{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    padding:20px 0;
    list-style: none;
}

.gallery .controls .buttons{
    height:40px;
    width: 140px;
    background:#864827;
    color:#f5deb3;
    font-size: 20px;
    line-height: 40px;
    cursor: pointer;
    margin:20px;
    box-shadow: 0 3px 5px rgba(0,0,0,.3);
    text-align: center;
}

.gallery .controls .buttons.active{
    background:#803c17;
    color:#f5deb3;
}

.gallery .image-container{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
}

.gallery .image-container .image{
    height:250px;
    width: 350px;
    overflow: hidden;
    border:15px solid #f5deb3;;
    box-shadow: 0 3px 5px rgba(0,0,0,.3);
    margin: 20px;
}

.gallery .image-container .image img{
    height: 100%;
    width:100%;
    object-fit: cover;
}

.gallery .image-container .image:hover img{
    transform: scale(1.4);
}
    </style>

</head>


<body>


<div class="gallery">

    <ul class="controls">
        <li class="buttons active" data-filter="all">all</li>
        <li class="buttons" data-filter="ice-cream">Home </li>
        <li class="buttons" data-filter="chocolate">Salon </li>       
        <li class="buttons" data-filter="cake">Electrian </li>
        <li class="buttons" data-filter="sandwich">PestControl</li>
        <li class="buttons" data-filter="juice">Vehical</li>
    </ul>

    <div class="image-container">

        <a href="images/new/1.jpg" class="image ice-cream">
            <img src="images/new/1.jpg" alt="">
        </a>
        <a href="images/new/2.jpg" class="image ice-cream">
            <img src="images/new/2.jpg" alt="">
        </a>
        <a href="images/new/3.jpg" class="image ice-cream">
            <img src="images/new/3.jpg" alt="">
        </a>
        <a href="images/new/4.jpg" class="image ice-cream">
            <img src="images/new/4.jpg" alt="">
        </a>
        <a href="images/new/10.jpg" class="image ice-cream">
            <img src="images/new/10.jpg" alt="">
        </a>
        <a href="images/new/6.jpg" class="image ice-cream">
            <img src="images/new/6.jpg" alt="">
        </a>
        <a href="images/new/7.jpg" class="image ice-cream">
            <img src="images/new/7.jpg" alt="">
        </a>
        <a href="images/new/8.jpg" class="image ice-cream">
            <img src="images/new/8.jpg" alt="">
        </a>
        <a href="images/new/9.jpg" class="image ice-cream">
            <img src="images/new/9.jpg" alt="">
        </a>
        
       

        <a href="images/new/11.jpg" class="image chocolate">
            <img src="images/new/11.jpg" alt="">
        </a>
        <a href="images/new/12.jpg" class="image chocolate">
            <img src="images/new/12.jpg" alt="">
        </a>
        <a href="images/new/13.jpg" class="image chocolate">
            <img src="images/new/13.jpg" alt="">
        </a>
        <a href="images/new/20.jpg" class="image chocolate">
            <img src="images/new/20.jpg" alt="">
        </a>
        <a href="images/new/15.jpg" class="image chocolate">
            <img src="images/new/15.jpg" alt="">
        </a>
        <a href="images/new/16.jpg" class="image chocolate">
            <img src="images/new/16.jpg" alt="">
        </a>
        <a href="images/new/17.jpg" class="image chocolate">
            <img src="images/new/17.jpg" alt="">
        </a>
        <a href="images/new/18.jpg" class="image chocolate">
            <img src="images/new/18.jpg" alt="">
        </a>
        <a href="images/new/19.jpg" class="image chocolate">
            <img src="images/new/19.jpg" alt="">
        </a>

        

        <a href="images/new/21.jpg" class="image cake">
            <img src="images/new/21.jpg" alt="">
        </a>
        <a href="images/new/22.jpg" class="image cake">
            <img src="images/new/22.jpg" alt="">
        </a>
        <a href="images/new/23.jpg" class="image cake">
            <img src="images/new/23.jpg" alt="">
        </a>
        <a href="images/new/24.jpg" class="image cake">
            <img src="images/new/24.jpg" alt="">
        </a>
        <a href="images/new/25.jpg" class="image cake">
            <img src="images/new/25.jpg" alt="">
        </a>
        <a href="images/new/26.jpg" class="image cake">
            <img src="images/new/26.jpg" alt="">
        </a>
        <a href="images/new/27.jpg" class="image cake">
            <img src="images/new/27.jpg" alt="">
        </a>
        <a href="images/new/28.jpg" class="image cake">
            <img src="images/new/28.jpg" alt="">
        </a>
        <a href="images/new/29.jpg" class="image cake">
            <img src="images/new/29.jpg" alt="">
        </a>


        <a href="images/new/31.jpg" class="image sandwich">
            <img src="images/new/31.jpg" alt="">
        </a>
        <a href="images/new/32.jpg" class="image sandwich">
            <img src="images/new/32.jpg" alt="">
        </a>
        <a href="images/new/33.jpg" class="image sandwich">
            <img src="images/new/33.jpg" alt="">
        </a>
        <a href="images/new/34.jpg" class="image sandwich">
            <img src="images/new/34.jpg" alt="">
        </a>
        <a href="images/new/35.jpg" class="image sandwich">
            <img src="images/new/35.jpg" alt="">
        </a>
        <a href="images/new/36.jpg" class="image sandwich">
            <img src="images/new/36.jpg" alt="">
        </a>
        <a href="images/new/37.jpg" class="image sandwich">
            <img src="images/new/37.jpg" alt="">
        </a>
        <a href="images/new/38.jpg" class="image sandwich">
            <img src="images/new/38.jpg" alt="">
        </a>
        <a href="images/new/39.jpg" class="image sandwich">
            <img src="images/new/39.jpg" alt="">
        </a>




       


        <a href="images/new/41.jpg" class="image juice">
            <img src="images/new/41.jpg" alt="">
        </a>
        <a href="images/new/42.jpg" class="image juice">
            <img src="images/new/42.jpg" alt="">
        </a>
        <a href="images/new/43.jpg" class="image juice">
            <img src="images/new/43.jpg" alt="">
        </a>
        <a href="images/new/44.jpg" class="image juice">
            <img src="images/new/44.jpg" alt="">
        </a>
        <a href="images/new/45.jpg" class="image juice">
            <img src="images/new/45.jpg" alt="">
        </a>
        <a href="images/new/46.jpg" class="image juice">
            <img src="images/new/46.jpg" alt="">
        </a>
        <a href="images/new/47.jpg" class="image juice">
            <img src="images/new/41.jpg" alt="">
        </a>
        <a href="images/new/48.jpg" class="image juice">
            <img src="images/new/42.jpg" alt="">
        </a>
        <a href="images/new/50.jpg" class="image juice">
            <img src="images/new/50.jpg" alt="">
        </a>
        
        
        

        

    </div>

</div>


<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- magnific popup js cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

<script>

$(document).ready(function(){

    $('.buttons').click(function(){

        $(this).addClass('active').siblings().removeClass('active');

        var filter = $(this).attr('data-filter')

        if(filter == 'all'){
            $('.image').show(400);
        }else{
            $('.image').not('.'+filter).hide(200);
            $('.image').filter('.'+filter).show(400);
        }

    });

    $('.gallery').magnificPopup({

        delegate:'a',
        type:'image',
        gallery:{
            enabled:true
        }

    });

});

</script>

<?php include 'components/footer.php'; ?>

<script src="js/script.js"></script>


    
</body>
</html>

