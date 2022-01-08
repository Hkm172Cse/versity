<?= $header; ?>
  <body>
      <div class="container">
        <div class="row">
           <div class="card col-12">
               <div class="card-title text-center bg-info text-white m-0 p-0">
                    <h1>Member of <?= $profile_data->group_name?></h1>
               </div>

               <div class="card-body">
            <form method="post" enctype="multipart/form-data">
                <div class="row bg-success text-white">
                    <input type="hidden" name="profile_id" value="<?= $profile_data->id?>" readonly>
                        <div class="right col-8">
                            <div class="form-group row mt-4">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-8">
                                <input type="text" name="name" class="form-control" id="inputPassword" value="<?= $profile_data->name?>" readonly >
                                </div>
                            </div>  
                        
                            <div class="form-group row mt-4">
                                <label for="inputPassword" class="col-sm-2 col-form-label">User Id</label>
                                <div class="col-sm-8">
                                <input type="text" name="user" class="form-control" id="inputPassword" value="<?= $profile_data->user_id;?>"readonly>
                                </div>
                            </div>

                            <div class="form-group row mt-4">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-8">
                                <input type="text" name="password" class="form-control" id="inputPassword" value="<?= $profile_data->password;?>" readonly>
                                </div>
                            </div>
                        
                            <div class="form-group row mt-4">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Batch</label>
                                <div class="col-sm-8">
                                <input type="text" name="batch" class="form-control" id="inputPassword" value="<?= $profile_data->batch?>" readonly>
                                </div>
                            </div>

                            <div class="form-group row mt-4">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Section</label>
                                <div class="col-sm-8">
                                <input type="text" name="section" class="form-control" id="inputPassword" value="<?= $profile_data->section?>" readonly>
                                </div>
                            </div>

                            <div class="form-group row mt-4">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Department</label>
                                <div class="col-sm-8">
                                <input type="text" name="department" class="form-control" id="inputPassword" value="<?= $profile_data->department?>" readonly>
                                </div>
                            </div>

                            <div class="form-group row mt-4">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-8">
                                <input type="text" name="address" class="form-control" id="inputPassword" value="<?= $profile_data->address?>" readonly>
                                </div>
                            </div>

                            <div class="form-group row mt-4">
                                <label for="inputPassword" class="col-sm-2 col-form-label">E-Mail</label>
                                <div class="col-sm-8">
                                <input type="text" name="email" class="form-control" id="inputPassword" value="<?= $profile_data->email;?>" readonly>
                                </div>
                            </div>

                            <div class="form-group row mt-4">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Mobile No</label>
                                <div class="col-sm-8">
                                <input type="text" name="mobile" class="form-control" id="inputPassword" value="<?= $profile_data->contact?>" readonly>
                                </div>
                            </div>

                            <div class="form-group row mt-4">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Profile Image</label>
                                <div class="col-sm-8">
                                <input type="file" name="image" class="form-control" id="inputPassword" readonly>
                                </div>
                            </div>
                    
                        </div>

                        <div class="left col-4">
                            <h3 class="mt-4 mb-4">Profile Picture</h3>
                            <div class="mt-4 mr-5 text-center">
                            <img width="100%" height="400px" src="<?= base_url($profile_data->image)?>" alt="">
                            </div>
                            
                        </div>

                </div>
                        <!--div class="mt-5 row col-12">
                            <button class="btn btn-primary btn-block" type="submit">Change Profile</button>
                        </div-->
                    
               </div>
            </form>
                
           </div>
        </div>
      </div>
    

    
    <?= $footer;?>
  </body>
</html>
