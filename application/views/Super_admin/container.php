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
                <div class="button-group">
                    <a href="<?php echo base_url()?>admin_regi" class="btn btn-big">Add User</a>
                    <a href="<?= base_url()?>super_admin_post" class="btn btn-big">Add Post</a>
                </div>


                <div class="content">

                    <h2 class="page-title">Manage Users</h2>
                    <?= $this->session->flashdata('update_suc');?>
                    <table>
                        <thead>
                            <th>SN</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Group</th>
                            <th>Title</th>
                            <th>profile<th>
                                
                            <th colspan="2">Action</th>
                        </thead>
                        <tbody>
                            <?php 
                                $count = 0;
                                foreach($select_all_user as $value){
                            ?>
                            <tr>
                                <td><?php echo ++$count;?></td>
                                <td><?php echo $value->email;?></td>
                                <td><?php echo $value->password;?></td>
                                <td><?php echo $value->group_name;?></td>
                                <td><?php echo $value->title;?></td>
                                <td><a href="<?php echo base_url()?>profive_view_superAdmin/<?= $value->id?>"><i class="fas fa-eye"></i></a></td>
                                <td><a href="<?php echo base_url()?>editBy_SuperAdmin/<?= $value->id?>" class="edit">edit</a></td>
                                <td><a onclick="delfunction()" href="<?php echo base_url()?>deleteBy_SuperAdmin/<?= $value->id?>" class="delete">delete</a></td>
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