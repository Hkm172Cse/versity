<header>
            <div class="logo">
                <h1 class="logo-text"><span>LU</span>CM</h1>
            </div>
            <i class="fa fa-bars menu-toggle"></i>
            <ul class="nav">
                <li>
                    <a href="#">
                        <i class="fa fa-user"></i>
                      <?= $this->session->userdata('social_admin');?>
                        <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
                    </a>
                    <ul>
                        <li><a href="<?php echo base_url()?>logout_lucc_admin" class="logout">Logout</a></li>
                        <li><a href="<?php echo base_url()?>homepage" class="logout">home</a></li>
                        
                    </ul>
                </li>
            </ul>
</header>