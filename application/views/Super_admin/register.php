<?php echo $header_src;?>
<body>
    <div class="hero">
        <div class="form-box">
        <div class="button-box">
       
         <div class="social-icons">
            <img src="<?php echo base_url('assets/SignUP_Login/fb.png')?>">
            <img src="<?php echo base_url('assets/SignUP_Login/tw.png')?>">
            <img src="<?php echo base_url('assets/SignUP_Login/gp.png')?>">
        </div> 

        
        <?php echo $this->session->flashdata('reg_err');?>
        <?php echo $this->session->flashdata('reg_suc');?> 
        <?php echo $this->session->flashdata('email_valid')?>
        
        <form action="<?php echo base_url()?>super_admin_register" method="post" id="" class="input-group">
            <input type="hidden" name="group" value="All_Group_Member">
            <input type="hidden" name="title" value="Super_admin">
            <input type="text" name="userId" id="userId" class="input-field"  placeholder="User Id" required>   
            <input type="email" name="email" id="eemail"  class="input-field" placeholder="Email Id" required> 
            <input type="password" name="password" id="password"class="input-field"  placeholder="Enter Password" required> 
            <input type="checkbox" class="check-box"> <span>I agree to the terms & conditions</span>
            <button type="submit" class="submit-btn">Register</button>
        </form>   
        </div>    
    </div>

      <script>
               
     </script>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/7.14.1-0/firebase.js"></script>

</body>
</html>