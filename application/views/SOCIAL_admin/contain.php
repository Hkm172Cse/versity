<?php echo $header_src;?>
<body>
        <?= $main_menu;?>

        <!-- Admin Page Wrapper -->
        <div class="admin-wrapper">

            <!-- Left Sidebar -->
            <?= $sidebar;?>
            <!-- // Left Sidebar -->


            <!-- Admin Content -->
            <div class="admin-content">
                

                <div class="content">

                    <h2 class="page-title">Leading University Social Club Manage Users</h2>

                    <table>
                        <thead>
                            <th>SN</th>
                            <th>User_Email</th>
                            <th>Password</th>
                            <th>Member of</th>
                            <th>title<th>
                            <th>Profile</th>
                            <th colspan="2">Action</th>
                        </thead>
                        <tbody>
                            <?php
                                foreach($super_admin_info as $value){
                            ?>
                            <tr>
                                <td>1</td>
                                <td><?php echo $value->email;?></td>
                                <td>********</td>
                                <td><?php echo $value->group_name;?></td>
                                <td id="admin"><?php echo $value->title;?></td>
                                <td><i class="fas fa-eye"></i></td>
                                <td><a href="#" class="edit">edit</a></td>
                                <td><a href="#" class="delete">delete</a></td>    
                            </tr>
                            <?php }?>
                            <?php 
                                $count = 1;
                                foreach($ludc_members as $value){?>
                            <tr>
                                <td><?php echo ++$count;?></td>
                                <td><?php echo $value->email;?></td>
                                <td><?php echo $value->password;?></td>
                                <td><?php echo $value->group_name;?></td>
                                <td id="admin"><?php echo $value->title;?></td>
                                <td><a href="<?php echo base_url()?>profive_view_superAdmin/<?= $value->id?>"><i class="fas fa-eye"></i></a></td>
                                <td><a href="<?= base_url()?>social_admin_edit/<?= $value->id;?>" class="edit">edit</a></td>
                                <td><a onclick="delfunction()" href="<?php echo base_url()?>deleteBy_socialAdmin/<?= $value->id?>" class="delete">delete</a></td>
                            </tr>
                          <?php }?>  
                           
                    </table>

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
        <script>
            function delfunction(){
                alert("Are you Sure To Delete this Record");
            }
        </script>

    </body>

</html>