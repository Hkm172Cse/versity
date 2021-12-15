<?= $header; ?>
  <body>
      <div class="container">
        <div class="row">
            <?php $i = 1; foreach($all_notice as $value){ ?>
                <div class="container">
                    <div class="card">
                        <div class="card-header">
                            <div class="float-left">
                                <h3><?= $value->topic;?></h3>
                            </div>
                            <div class="float-right">
                                <a href="<?= base_url()?>delPost/<?= $value->id;?>"><button class="btn btn-sm btn-danger">delete</button></a>
                            </div>
                            
                        </div>
                        <div class="card-body notice_box">
                            <div class="text-center">
                                <img class="notic_img" src="<?= $value->image?>"  alt="">
                            </div>
                            <div class="describtion">
                            <?= $value->describtion;?>
                            </div>

                           <div class="text-center notice_by">
                               <p class="perosn_highlight">Notice by</p>
                               <p class="post_man"><?= $value->post_person;?></p>
                               <p class="post_man">Emai: <?= $value->person_email; ?> </p>
                               <p class="post_man">Title: <?= $value->person_title; ?></p>
                           </div> 
                            
                        </div>
                    
                    </div>
                    <div>
                        <hr>
                    </div>
                </div>
        
            <?php }?>
        </div>
      </div>
    

    
    <?= $footer;?>
  </body>
</html>
