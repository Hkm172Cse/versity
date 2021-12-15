<?php echo $header_src;?>
<body>
        <?= $main_menu; ?>

        <!-- Admin Page Wrapper -->
        <div class="admin-wrapper">

            <!-- Left Sidebar -->
            <?= $sidebar;?>
            <!-- // Left Sidebar -->


            <!-- Admin Content -->
            <div class="admin-content">
                
                <div class="content">

                    <h2 class="page-title">Edit User</h2>
                    <form action="<?php echo base_url()?>social_admin_edit" method="post">
                        <?php foreach($user_record as $value){?>
                        <div>
                            <label>Username</label>
                            <input type="hidden" name="update_id" value="<?= $value->id;?>">
                            <input type="text" name="username"
                                class="text-input" value="<?=$value->user_id;?>">
                        </div>
                        <div>
                            <label>Email</label>
                            <input type="email" name="email" class="text-input" value="<?= $value->email?>">
                        </div>
                        <div>
                            <label>Password</label>
                            <input type="text" name="password"
                                class="text-input" value="<?= $value->password;?>">
                        </div>
                        <div>
                            <label>Group</label>
                            <input type="text" name="group_name"
                                class="text-input" value="<?= $value->group_name;?>">
                        </div>
                        <div>
                            <label>Title</label>
                            <select name="title" class="text-input">
                                <option value="<?= $value->title;?>"><?= $value->title;?></option>
                                <option value="SOCIAL_admin">SOCIAL_admin</option>
                                <option value="group_member">group_member</option>
                            </select>
                        </div>
                        <?php }?>

                        <div>
                            <button type="submit" class="btn btn-big">submit</button>
                        </div>
                    </form>
                   

                </div>

            </div>
            <!-- // Admin Content -->

        </div>
        <!-- // Page Wrapper -->



        <!-- JQuery -->
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Custom Script -->
        <script src="../../js/scripts.js"></script>

    </body>

</html>