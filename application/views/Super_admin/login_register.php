<?php echo $header_src;?>
<body>
    <div class="hero">
        <div class="form-box">
        <div class="button-box">
        <div id="btn"></div>
             <button type="button" class="toggle-btn" onclick="login()">Log In</button>
             
         </div>
         <div class="social-icons">
            <img src="<?php echo base_url('assets/SignUP_Login/fb.png')?>">
            <img src="<?php echo base_url('assets/SignUP_Login/tw.png')?>">
            <img src="<?php echo base_url('assets/SignUP_Login/gp.png')?>">
        </div> 

        
        
        <?php if ($this->session->flashdata('log_err')) { ?>

        <div class="alert alert-success">
        <a class="close" ></a>
            <strong><?= $this->session->flashdata('log_err'); ?></strong>
        </div>

        <?php } ?>


        <form id="login" action="<?= base_url()?>super_admin_login" method="post" class="input-group">
            <input type="email" name="email" class="input-field" id="email" placeholder="Email" required>   
            <input type="password" name="password" class="input-field" id="pasword" placeholder="Enter Password" required>
            <input type="hidden" name="super_admin" value="super_admin"> 
            <input type="checkbox" class="check-box"> <span>Remember Password</span>
            <button type="submit" class="submit-btn">Log In</button>
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