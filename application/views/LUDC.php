<?php echo $header_src; ?>
<body>
    <section class="header">
        <nav>
            <a href="index.html"><img src="<?php echo base_url('assets/LUDC/photos/LUDC2.png')?>" alt="" ></a>
            
            <div class="nav-links" id="navLinks">
                <i class="fas fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="<?php echo base_url()?>homepage">HOME</a></li>
                    <li><a href="<?= base_url()?>ludc_login_register">SIGNUP & LOGIN</a></li>
                    <li><a href="<?= base_url()?>notice_board">NOTICE</a></li>
                </ul>
            </div>
            <i class="fas fa-bars" onclick="showMenu()"></i>
        </nav>

        <div class="text-box">
    <h1>LEADING UNIVERSITY DEBATING CLUB</h1>
    <P> Hello everyone, Welcome to Leading University Debating Club's  site. Please enjoy your stay with us & get updated.</P> 

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
            <P>লিডিং ইউনিভার্সিটি ডিবেটিং ক্লাব (এলইউডিসি) সদস্যরা প্রত্যেক সেমিস্টার এর শুরতে বিগেনার প্রোগ্রামারদের প্রশিক্ষণ দিয়ে থাকে।</P>
            
         </div>
          
          <div class="course-col">
              <h3>Intra Debating Championship</h3>
              <P>গত ২০১৮ সালে লিডিং ইউনিভার্সিটি ডিবেটিং ক্লাব (এলইউডিসি) লিডিং ইউনিভার্সিটিতে প্রথম ইন্ট্রা ডিবেট চ্যাম্পিয়নশীপ আয়োজন করেছিল। নেটিভ ক্যাম্পাসে দুই দিনব্যাপী অনুষ্ঠান ছিল।</P>
             </div>

          <div class="course-col">
              <h3>Yearly Event</h3>
              <P>প্রতিবারের মতো এবারও হয়ে গেলো Fresher's Debate League ইভেন্ট।</P>


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
        <img src="<?php echo base_url('assets/LUDC/photos/c1.jpg')?>" alt="">
        <div class="layer">
            <h3>
                LU DC CLUB 
            </h3>
        </div>
    </div>
    <div class="campus-col">
        <img src="<?php echo base_url('assets/LUDC/photos/c2.jpg')?>" alt="">
        <div class="layer">
            <h3>
               LU DC CONTEST
            </h3>
        </div>
    </div>
</div>
</section>


<section class="campus">
 
    <div class="row">
        <div class="campus-col">
            <img src="<?php echo base_url('assets/LUDC/photos/LU p.jpg')?>" alt="">
            <div class="layer">
                <h3>
                    LU DC CLUB Program
                </h3>
            </div>
        </div>
        <div class="campus-col">
            <img src="<?php echo base_url('assets/LUDC/photos/prize.jpg')?>" alt="">
            <div class="layer">
                <h3>
                    LU DC PRIZE GIVING 
                </h3>
            </div>
        </div>
    </div>
    </section>
    

<!-- -----call to action------ -->

<section class="cta">

   <h1>WELCOME TO LEADING UNIVERSITY DEBATING CLUB</h1>
<a target="_blank" href="https://www.facebook.com/LeadingUniversityDebatingClub" class="hero-btn">JOIN US</a>

</section>

<!-- -----FOOTER------ --> 

<section class="footer">
    <h4>About Us</h4>
    <p>IF YOU ARE INTERESTED TO KNOW ANYTHING ELSE YOU CAN CONTACT WITH US.</p>


<div class="icons">
    <a target="_blank" href="https://www.facebook.com/groups/ludc.champs/" class="fab fa-facebook"></a>

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