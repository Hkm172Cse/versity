<?= $header; ?>
  <body>
      <div class="container">
        <div class="row">
           <div class="card col-12">
               <div class="card-title text-center bg-info text-white m-0 p-0">
                    <h1>Member of <?= $profile_data->group_name?></h1>
               </div>

               <div class="card-body">
                <div class="row bg-success text-white">
                    <div class="right col-8">
                       <div class="form-group row mt-4">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-8">
                            <input type="text" name="name" class="form-control" id="inputPassword" value="">
                            </div>
                        </div>  
                        
                        <div class="form-group row mt-4">
                            <label for="inputPassword" class="col-sm-2 col-form-label">User Id</label>
                            <div class="col-sm-8">
                            <input type="text" name="name" class="form-control" id="inputPassword" value="<?= $profile_data->user_id;?>">
                            </div>
                        </div>

                        <div class="form-group row mt-4">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-8">
                            <input type="text" name="name" class="form-control" id="inputPassword" value="<?= $profile_data->password;?>">
                            </div>
                        </div>
                        
                        <div class="form-group row mt-4">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Batch</label>
                            <div class="col-sm-8">
                            <input type="text" name="batch" class="form-control" id="inputPassword" value="">
                            </div>
                        </div>

                        <div class="form-group row mt-4">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Section</label>
                            <div class="col-sm-8">
                            <input type="text" name="name" class="form-control" id="inputPassword" value="">
                            </div>
                        </div>

                        <div class="form-group row mt-4">
                            <label for="inputPassword" class="col-sm-2 col-form-label">E-Mail</label>
                            <div class="col-sm-8">
                            <input type="text" name="name" class="form-control" id="inputPassword" value="<?= $profile_data->email;?>">
                            </div>
                        </div>

                        <div class="form-group row mt-4">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Mobile No</label>
                            <div class="col-sm-8">
                            <input type="text" name="name" class="form-control" id="inputPassword" value="">
                            </div>
                        </div>
                    
                        </div>
                        <div class="left col-4">
                            <h1>Lorem ipsum, dolor sit amet consectetur adipisicing elit. In, explicabo?</h1>
                        </div>

                   </div>
                    
               </div>
           </div>
        </div>
      </div>
    

    
    <?= $footer;?>
  </body>
</html>
