<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, intial-scale=1.0">
         <link rel="stylesheet" href="style.css">
         <link rel="preconnect" href="https://fonts.googleapis.com">
         <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
         <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@1,400;1,600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">    
        </head>
    <body>
        <section class="sub-header4">
        <nav> 
            
            <a href="home.html"><img src="images/logo.jpg" ></a>
            <div class="nav-links" id="navlinks">
            <i class="fa fa-times" onclick="hideMenu()" ></i>
            <ul>
                
                <li><a href="home.php">HOME</a></li>
                <li><a href="about.html">ABOUT</a></li>
                <li><a href="events.html">EVENTS</a></li>
                <li><a href="#">OFFERINGS</a></li>
                <li><a href="contact.html">CONTACT</a></li>

            </ul>

            </div>

            <i class="fa fa-bars" onclick="showmenu()" ></i>  
        </nav>
        <div class="front-text2">
            <h1>Services and Packages</h1>
        </div>
        </section>  
        


        <div class="outplants">
            <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <img src="images/birthday.jpeg" alt="birthday" height="200px">
                    <h4>Birthday events</h4>
                </div>
                <div class="col-3">
                   <img src="images/wedding.jpeg" alt="wedding" height="200px">
                   <h4>Wedding Decoration</h4>
                </div>
                <div class="col-3">
                   <img src="images/wedding2.png" alt="wedding" height="200px">
                   <h4>Wedding Planning</h4>
                   </div>
           </div>
             </div>
       
             <div class="small-container">
               <div class="row">
                   <div class="col-3">
                       <img src="images/theme.png" alt="theme" height="200px">
                       <h4>Theme Parties</h4>
                   </div>
                   <div class="col-3">
                      <img src="images/corporate.webp" alt="corporate" height="200px">
                      <h4>corporate Events</h4>
                   </div>
                   <div class="col-3">
                      <img src="images/commercial.webp" alt="commercial" height="200px">
                   <h4>Commercial Shoots</h4>
                      </div>
              </div>
                </div>

                <div class="small-container">
                    <div class="row">
                        <div class="col-3">
                            <img src="images/graduation.jpeg" alt="peacelily" height="200px">
                            <h4>Graduation parties</h4>
                        </div>
                        <div class="col-3">
                           <img src="images/charity.jpeg" alt="rubber" height="200px">
                           <h4>Community and Charity Events</h4>
                        </div>
                        <div class="col-3">
                           <img src="images/customize.webp" alt="stick" height="200px">
                        <h4>Custom Event Packages</h4>
                           </div>
                   </div>
                     </div>

                    <!-- <div id="form">
                     <iframe  src="https://docs.google.com/forms/d/e/1FAIpQLSeSXAfGFWVG6Yk8qhcmefDWXZxr0WW9lMnHRbsPvOWZwZyXyg/viewform?embedded=true" width="640" height="1911" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
                    </div> -->

                    <div class="comment-box">

                        <h3>Consultation Request Form</h3>
                        
            
                        <form class="comment-form " action="submit_form.php" method="POST">
                            <input type="text" class="textbar" placeholder="Enter Name" value="<?php echo $_SESSION["username"]; ?>" ><br>
                            <input type="email" class="textbar" placeholder="Enter email"><br>
                            <input type="tel" class="textbar" placeholder="Phone Number"><br>
                            <label >Event Type:</label><br>
                            <select id="event_type" name="event_type" placeholder="Select Event type" required>
                                <option value="wedding">Wedding</option>
                                <option value="corporate">Corporate Event</option>
                                <option value="social">Social Gathering</option>
                                <option value="">Birthday events</option>
                                <option value="">Theme Parties</option>
                                <option value="">Commercial Shoots</option>
                                <option value="">Graduation parties</option>
                                <option value="">Community and Charity Events</option>
                                <option value="">Customized Events</option>
                            </select><br>

                            <label for="event_date">Event Date:</label><br>
                            <input class="textbar" type="date" id="event_date" name="event_date" required><br>
    
                            <input class="textbar" type="text" id="event_venue" placeholder="Event Venue" name="event_venue"><br>
    
                            <input class="textbar" type="number" id="guest_count" placeholder="Estimated Guests" name="guest_count" min="1"><br>
                            
                            <textarea class="textbar" id="message" name="message" placeholder="Message or Comments" rows="10"></textarea><br>
                            
                            Preferred Contact Method:<br>
                            <input type="radio" id="contact_email" name="contact_preference" value="email" checked>
                            <label for="contact_email">Email</label><br>
                            <input type="radio" id="contact_phone" name="contact_preference" value="phone">
                            <label for="contact_phone">Phone</label>

                            <br>
                            <button type="submit" class="vist-us">Submit</button>
                        </form>
                    </div>
                       </div>


        <!---footer--> 
        <section class="footer">
            <h4>Connect With Us</h4>
            <div class="icons">
               <i class="fa fa-facebook" ></i>
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