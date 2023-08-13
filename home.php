<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, intial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="preload" href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@1,400;1,600&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@1,400;1,600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">    
    </head>
    <body>
        <section class="header">
        <nav> 
            <a href="index.html" class="image-container"><img src="images/logo.jpg" ></a>
            <div class="nav-links" id="navlinks">
            <i class="fa fa-times" onclick="hideMenu()" ></i>
            <ul>
                <li><a href="#">HOME</a></li>
                <li><a href="about.html">ABOUT</a></li>
                <li><a href="events.html">EVENTS</a></li>
                <li><a href="offerings.php">OFFERINGS</a></li>
                <li><a href="contact.html">CONTACT</a></li>
            </ul>
            </div>                   
            <i class="fa fa-bars" onclick="showmenu()" ></i>  
        </nav>
        <div class="front-text">
        <p id="name" ><?php  if (isset($_SESSION["username"])) {  echo"Welcome,". $_SESSION["username"]; }?></p>
            <h1>Unforgettable Events, Expertly Organized</h1>
            <p style="color: white;" id="sub-text">You party - we work</p>
            <?php
             if (isset($_SESSION["username"])) {

                echo '<a class="vist-us" href="logout.php">Logout</a>';
             } else {
                echo '<a class="vist-us" href="register.php">Register</a>';
                echo '<a class="vist-us" href="login.php">Login</a>';
            }

?>
</div>


    </section>

<!--- events-->
<section class="events">
    <h1>Experience Extraordinary Events with Memorable Events</h1>
    <p >We mainly offer three type of events</p>
<div class="row">
    <div class="events-col">
        <h3>Weddings: Love in Every Detail</h3>
        <p>A wedding is a celebration of love, and we are committed to making it a cherished memory for a lifetime. With a keen eye for detail and a passion for perfection, we design weddings that reflect your unique style and personality. From intimate ceremonies to grand affairs, our team ensures that every moment of your special day is filled with joy, romance, and enchantment.</p>
    </div>
    <div class="events-col">
        <h3>Themed Events: Unleashing Creativity</h3>
        <p>Let your imagination run wild, and we'll transform your vision into reality. Whether it's a fairytale-themed gala, a retro-inspired party, or a futuristic corporate event, we specialize in bringing themed ideas to life. Our team meticulously plans every detail to ensure an immersive and captivating experience that will transport your guests to a world of wonder.</p>
    </div>
    <div class="events-col">
        <h3>Social Gatherings: Celebrate Life's Moments</h3>
        <p>Life is full of special moments worth celebrating, and we're here to make each one remarkable. Whether it's a birthday bash, a momentous jubilee, or a themed party, our event organizers infuse creativity and innovation to create magical experiences. Let us handle the planning and execution, so you can relax and enjoy the festivities with your loved ones.</p>
    </div>
</div>
</section>



<!-- services-->
<section class="services">
    <h1>Our Services</h1>
<div class="row">
        <div class="services-col">
            <img src="images/wedding.jpeg" alt="">
            <h3>Weddings</h3>
            <p>Bring your dream wedding to life with our expert wedding planning services. From intimate ceremonies to grand celebrations, we handle every detail, ensuring an unforgettable journey of love and joy. Choose full-service planning for stress-free arrangements or day-of coordination for a seamless experience. Destination wedding? Let us create magic in the location of your choice.</p>
        </div>
   
        <div class="services-col">
            <img src="images/birthday.jpeg" alt="">
            <h3>Birthday</h3>
            <p>Celebrate with style! Our birthday event planning caters to all ages. For kids' parties, we create magical experiences with themed fun and games. Commemorate milestones with elegance and surprise loved ones with our heartfelt, memorable celebrations.</p>
        </div>
   
        <div class="services-col">
            <img src="images/special.avif" alt="">
            <h3>Special Events</h3>
            <p>Let us elevate your events. From corporate functions to community gatherings, we ensure flawless execution and unforgettable experiences. Impress clients with impactful corporate events. Strengthen community bonds with engaging gatherings. Immerse guests in enchanting themed parties.</p>
        </div>
</div>
</section>



<!--- testimonials-->
<section class="testimonial">
    <h1>Testimonials and Reviews</h1>
    <div class="row">
        <div class="testimonial-col">
            <img src="images/person1.jpg" alt="">
        <div>
            <p>I searched for best event management company in Rajahmundry and I got Memorable events in the first and I opted the wedding services.Their team as it's best. Overall completely recommending.</p>
            <h3>Yaswanth Yash</h3>
            <i class="fa fa-star" ></i>
            <i class="fa fa-star" ></i>
            <i class="fa fa-star" ></i>
            <i class="fa fa-star" ></i>
            <i class="fa fa-star-o" ></i>
        </div>  
        </div>

        <div class="testimonial-col">
            <img src="images/person2.jpg" alt="">
        <div>
            <p>They have organised my daughter's saree function. Best creativity in presentation. Team work, creativity, presentation, execution is wonderful! Great work! Thank you to the entire team!!</p>
            <h3>Cristy</h3>
            <i class="fa fa-star" ></i>
            <i class="fa fa-star" ></i>
            <i class="fa fa-star" ></i>
            <i class="fa fa-star" ></i>
            <i class="fa fa-star-half-o" ></i>
        </div>
        </div>
    </div>  
</section>

<!---call to action-->


<section class="cta">
    <h1>we create exceptional events that leave a lasting impression.<br> Contact us today to make your vision a reality!</h1>
    <a href="contact.html" class="vist-us">CONTACT US</a>
    </section>


 <!---footer-->   
 <section class="footer">
     <h4>Connect With Us</h4>
     <div class="icons">
        <a href="https://www.facebook.com/memorableeventsrjy/" target="_blank"><i class="fa fa-facebook" ></i></a>
        <i class="fa fa-twitter" ></i>
        <i class="fa fa-instagram" ></i>
        <i class="fa fa-linkedin" ></i>
     </div>

 </section>

    <script> 
     var navlinks=document.getElementById("navlinks");
     function showmenu(){
          navlinks.style.right="0";
     }
     function hideMenu(){
          navlinks.style.right="-200px";
     }
     </script>

    </body>
</html>




