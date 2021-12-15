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
                   
                    <table>
                        <thead>
                            <th>P.Id</th>
                            <th>Post Man</th>
                            <th>Description</th>
                            <th>Post file</th>
                            <th colspan="2">Action</th>
                        </thead>
                        <tbody>
                            <?php 
                                $count = 0;
                                foreach($post_info as $value){
                            ?>
                            <tr>
                                <td><?php echo $value->id;?></td>
                                <td><?php echo $value->post_person;?></td>
                                <td><?php echo $value->describtion;?></td>
                                <td><img src="<?= base_url($value->image)?>" height="80px" width="80px" alt=""></td>
                                <td><a onclick="delfunction()" href="<?php echo base_url()?>delPost/<?= $value->id?>" ><button class="del_btn">delete</button></a></td>
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