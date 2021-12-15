<?php echo $header_src; ?>
<body>
    <section class="header">
       <nav>
           <a href="index.html"><img src="<?php echo base_url('assets/homepage/images/logo.png')?>"></a>
           <div class="nav-links" id="navLinks">
            <i class="fa fa-times" onclick="hideMenu()"></i>
               <ul>
                   <li><a href="">HOME</a></li>
                   <li><a href="<?php echo base_url()?>super_admin">ABOUT</a></li>
                   <li><a href="">CONTACT</a></li>
                   <li><a href="<?php echo base_url()?>login_register">admin login</a></li>
               </ul>
           </div>
           <i class="fa fa-bars" onclick="showMenu()"></i>
       </nav>
       <div class="text-box">
           <h1>LUCM</h1>
           <p>Leading University Club Management</p>
           <a href="" class="hero-btn">Join With us</a>
       </div>
    </section>

 <!------  Club List------>
    <section class="course">
        <h1>Clubs we offer</h1>
        <p>LU provides activities designed by its own particular clubs, such as the Leading University Computer Club, IEEE Leading University<br>
         Student Branch, Debating Club, Leading University Model United Nations Association, Sports Club, Cultural Activities Club, Social<br>
         Services Club, Electronics Club, Creative Club, Leading University Photographic Society and Bangladesh National Cadet Corps.<br>
         You can join those club easily by LUCM. Check out bellow links. We will add more clubs in future.<br>
         1.Social Service Club <br>2.Debating Club <br>3.Computer Club </p>
        <div class="row">
            <div class="course-col">
                <h3> 
                <a href ="<?php echo base_url()?>Social">Social Service Club</a></h3>
                <p>২০০৯ সালের ৩০ শে মার্চ কয়েকজন স্বপ্নবাজ তরুণ শিক্ষার্থীদের হাত ধরে যাত্রা শুরু করে লিডিং ইউনিভার্সিটি সোস্যাল সার্ভিসেস ক্লাব। এবছর ক্লাবটি পা দিয়েছে 
                প্রতিষ্ঠার ১২ বছরে। প্রতিষ্ঠালগ্ন থেকে লিডিং ইউনিভার্সিটি সোস্যাল সার্ভিসেস ক্লাব কাজ করেছে সমাজের সুবিধাবঞ্চিত সেই সকল মানুষকে নিয়ে যারা এই সমাজের একটা
                বড় অংশ। “The sole meaning of life is to serve humanity” এই স্লোগানকে ধারণ করে বিগত দশ বছর লিডিং ইউনিভার্সিটি সোস্যাল সার্ভিসেস ক্লাব কাজ করে 
                এসেছে মানতার সেবার।</p>
            </div>
            <div class="course-col">
                <h3><a href="<?php echo base_url()?>LUDC">Debating Club</a></h3>
                <p>Leading University Debating Club started its journey from 2002. Within these 12 years LUDC tried to create some talented debaters<br>
                 by arranging many events and workshops. LUDC also provided chances to the students of Leading University to participate in local, <br>
                 national and international events arranged  by<br> different educational institutions. We hope students will take the opportunities given by LUDC and will try to develop their personal skills. </p>
            </div>
            <div class="course-col">
                <h3>
                <a href="<?php echo base_url()?>LUCC">Computer Club</a></h3>
                <p>Advisor: Arafat Habib Quraishi
                    Co-Advisor: Adil Ahmed Chowdhury, Pritwiraj Bhattacharjee Rizu
                    Honorary Members: Arafat Mamun, Saidul Islam Shakil, Shuvasish Paul Shuvo, Keshob Chakrabortty, Sahmsia Sharmin Smriti, <br>
                    Fatema Tuz Zohra, Kanthi Lal Baidya, Gautam Chakraborty Tusher, Akhyar Ahmed, Keya Chakrabartty, Sadul Hasan Tarek.         
             </p>
            </div>
        </div>
    </section>

 <!---- campus -->
     <section class="campus">
         <h1>LU CAMPUS</h1>
         <p>Take a look at the LU campus</p>
        <div class="row">
         <div class="campus-col">
              <img src="<?php echo base_url('assets/homepage/images/fullview.jpg')?>">
              <div class="layer">
                <h3>FULL VIEW</h3>
            </div>
         </div>
         <div class="campus-col">
                <img src="<?php echo base_url('assets/homepage/images/ground.jpg')?>">
               <div class="layer">
                   <h3>GROUND</h3>
               </div>
         </div>
         <div class="campus-col">
             <img src="<?php echo base_url('assets/homepage/images/sohidminar.jpg')?>">
             <div class="layer">
                   <h3>SOHID MINAR</h3>
             </div>
         </div>
        </div>
    </section> 

    
  <!------ Testimonials ----->

    <section class="testimonials">
        <h1>What everybody says about the LUCM</h1>
        <p>Student and teachers reaction about Lucm</p>
        <div class="row">
            <div class="testimonials-col">
                <img src="images/user1.jpg">
                <div>
                <p>Review of user1 <br>about lucm </p>
                <h3>SRUTI</h3>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>

            </div>
            </div>
            <div class="testimonials-col">
                <img src="images/user2.jpg">
                <div>
                <p>Review of user2<br>about lucm</p>
                <h3>Nafi</h3>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            </div>
            
        </div>

    </section>

 <!------Call To Action-->
 <section class="cta">
    <h1>FEEL FREE TO ASK ANYTHING ABOUT LUCM</h1>
     <a href="" class="hero-btn"> CONTACT US></a>

</section>

<!----- Footer ------->
<section class="footer">
      <h4>About Us</h4>
      <p>Check out our profile if you wanna know us.<br>Feel free to ask anything.</p>
    <div class="icons">
        <i class="fab fa-facebook"></i>
        <i class="fab fa-instagram"></i>
        <i class="fab fa-linkedin"></i>
        <i class="fab fa-whatsapp"></i>

    </div>
    <p>Made with <i class="far fa-heart"></i> by LUCM Team</p>
</section>
 
    <!------javascript for toogle menu--------> 
    <script> 
        var navLinks =document.getElementById("navLinks");
        function showMenu(){
            navLinks.style.right="0";
        }
        function hideMenu(){
            navLinks.style.right="-200px";
        }


    </script>
</body>
</html>