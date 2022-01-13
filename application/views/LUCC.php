<?php echo $header_src; ?>
<body>
    <section class="header">
        <nav>
            <a href="#"><img src="<?php echo base_url('assets/LUCC/photos/LUCC2.png')?>" alt="" ></a>
            
            <div class="nav-links" id="navLinks">
                <i class="fas fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="<?php echo base_url()?>homepage">HOME</a></li>
                    <li><a href="<?php echo base_url()?>lucc_login_register">SIGNUP & LOGIN</a></li>
                    <li><a href="<?= base_url()?>notice_board">NOTICE</a></li>
                    <li><a href="<?= base_url()?>lucc_profile">Profile</a></li>
                </ul>
            </div>
            <i class="fas fa-bars" onclick="showMenu()"></i>
        </nav>

        <div class="text-box">
<h1>LEADING UNIVERSITY COMPUTER CLUB</h1>
    <P> <b> Hello everyone, Welcome to Leading University Computer Club's official  site.<br>Please enjoy your stay with us & get updated.</b></P> 
<a href="" class="hero-btn">SCROLL DOWN TO KNOW MORE</a>
        </div>
    </section>
<!-- -------------Course------------ -->

<section class="Course">

    <h1>Our Event</h1>
    <p>“The sole meaning of life is to serve humanity” </p>
  
      <div class="row">
        <div class="course-col">
            <h3>Workshop For Begginers</h3>
            <img src="photoslucc/p1.jpg" alt="" height="20px">
            <P>লিডিং ইউনিভার্সিটি কম্পিউটার ক্লাব (এলইউসিসি) সদস্যরা প্রত্যেক সেমিস্টার এর শুরতে বিগেনার প্রোগ্রামারদের প্রশিক্ষণ দিয়ে থাকে।</P>
         </div>
          
          <div class="course-col">
              <h3>National ICT Fest</h3>
              <P>গত ২০১৮ সালে লিডিং ইউনিভার্সিটি কম্পিউটার ক্লাব (এলইউসিসি) লিডিং ইউনিভার্সিটিতে প্রথম জাতীয় আইসিটি ফেস্টের আয়োজন করেছিল। নেটিভ ক্যাম্পাসে<br>
                 দুই দিনব্যাপী অনুষ্ঠান ছিল। ইভেন্টে সারা দেশের প্রোগ্রামার, গেমার এবং ছাত্রছাত্রীরা উপস্থিত ছিল। এই ইভেন্টটি বাংলাদেশের ৩০০০ এরও বেশি প্রোগ্রামার, গেমার <br>
                 এবং শিক্ষার্থীদের আকৃষ্ট করেছিল।</P>
             </div>

          <div class="course-col">
              <h3>Yearly Event</h3>
              <P>প্রতিবারের মতো এবারও হয়ে গেলো Techstorm 3  ইভেন্ট। যেখানে ছিল Project Showcasing,Online Tressure hunt, Tyohing Typhoon. বাদ যায়নি<br>
                কোনো মেধাবি। অংশগ্রহণ করেছিল সব শ্রেণির শিক্ষার্থীরা ।</P>
             </div>   
                     
      </div>

</section>

<!------------------ campas------------- -->

<section class="campus">
<h1>
    Our campus
</h1>
<p>LU campus is all about peace and happiness. Where we work to bring happiness to every single person.</p>

<div class="row">
    <div class="campus-col">
        <img src="<?php echo base_url('assets/LUCC/photos/c1.jpg')?>" alt="">
        <div class="layer">
            <h3>
                LU CC CLUB 
            </h3>
        </div>
    </div>
    <div class="campus-col">
        <img src="<?php echo base_url('assets/LUCC/photos/c2.jpg')?>" alt="">
        <div class="layer">
            <h3>
               LU CC CONTEST
            </h3>
        </div>
    </div>
</div>
</section>

<section class="campus">
    
    
    
 <div class="row">
        <div class="campus-col">
            <img src="<?php echo base_url('assets/LUCC/photos/LU p.jpg')?>" alt="">
            <div class="layer">
                <h3>
                    LU CC CLUB Program
                </h3>
            </div>
        </div>
        <div class="campus-col">
            <img src="<?php echo base_url('assets/LUCC/photos/prize.jpg')?>" alt="">
            <div class="layer">
                <h3>
                    LU CC PRIZE GIVING
                </h3>       
            </div>
        </div>
   </div>
  </section>
    

<!-- -----call to action------ -->

<section class="cta">

   <h1>WELCOME TO LEADING UNIVERSITY COMPUTER CLUB</h1>
<a target="_blank" href="https://www.facebook.com/Leading.University.Computer.Club/about/?ref=page_internal" class="hero-btn">JOIN US</a>


</section>
   


<!-- -----FOOTER------ --> 

<section class="footer">
    <h4>About Us</h4>
    <p>IF YOU ARE INTERESTED TO KNOW ANYTHING ELSE YOU CAN CONTACT WITH US.</p>


<div class="icons">
    <a target="_blank" href="https://www.facebook.com/LUSSCsylhet" class="fab fa-facebook"></a>
    <a target="_blank" href="https://instagram.com/leadinguniversity?utm_medium=copy_link" class="fab fa-instagram"></a>

</div>
<p>Made with <i class="far fa-heart"></i> by LUCM TEAM</p>
</section>

<!-- ------------Javascript for Toggle Menu------------- -->
<script>
    var navLinks = document.getElementById("navLinks");
    function showMenu(){
        navLinks.style.right ="0";

    }
    function hideMenu(){
        navLinks.style.right ="-200px";
    }
   
</script>

</body>
</html>