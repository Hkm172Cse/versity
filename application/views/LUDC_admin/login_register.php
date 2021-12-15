<?php echo $header_src;?>
<body>
    <div class="hero">
        <div class="form-box">
        <div class="button-box">
        <div id="btn"></div>
             <button type="button" class="toggle-btn" onclick="login()">Log In</button>
            <button type="button" class="toggle-btn" onclick="register()">Register</button>
         </div>
         <div class="social-icons">
            <img src="<?php echo base_url('assets/SignUP_Login/fb.png')?>">
            <img src="<?php echo base_url('assets/SignUP_Login/tw.png')?>">
            <img src="<?php echo base_url('assets/SignUP_Login/gp.png')?>">
        </div> 

        <?= $this->session->flashdata('lucc_valid_email');?>

        <form id="login" action="<?= base_url()?>login_ludc_admin" method="post" class="input-group">
            <input type="email" name="email" class="input-field"  placeholder="Email" required>   
            <input type="password" name="password" class="input-field"  placeholder="Enter Password" required> 
            <input type="checkbox" class="check-box"> <span>Remember Password</span>
            <button type="submit" class="submit-btn">Log In</button>
        </form>
        
        <form action="<?php echo base_url()?>registation_ludc" method="post" id="register" class="input-group">
            
            <input type="hidden" name="group_name" value="LUDC" class="input-field">
            <input type="hidden" name="title" value="group_member" class="input-field">
            <input type="text" name="userId"  class="input-field"  placeholder="User Id" required>   
            <input type="email" name="email"   class="input-field" placeholder="Email Id" required> 
            <input type="password" name="password" class="input-field"  placeholder="Enter Password" required> 
            <input type="checkbox" class="check-box"> <span>I agree to the terms & conditions</span>
            <button type="submit" class="submit-btn">Register</button>
        </form>   
        </div>    
    </div>

      <script>
                 var x=document.getElementById("login");
                 var y=document.getElementById("register");
                 var z=document.getElementById("btn");

                 function register(){
                     x.style.left="-400px";
                     y.style.left="50px";
                     z.style.left="110px";
                 }
                 function login(){
                     x.style.left="50px";
                     y.style.left="450px";
                     z.style.left="0";
                 }
                 
     </script>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/7.14.1-0/firebase.js"></script>

</body>
</html>