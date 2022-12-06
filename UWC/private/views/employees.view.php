<?php $this->view('includes/header') ?>
<?php $this->view('includes/nav') ?>
  
<!-- <?php print_r($data['collectors']) ?>
<?php print_r($data['janitors']) ?> -->

<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1300px;">

  <a href="signup">            
    <button class="btn btn-sm btn-primary"><i class="fa fa-plus"></i>Add New</button>
  </a>          
  <h4>Collector</h4><br>
  <div class="card-group justify-content-center">
                    
    <?php if(isset($data['collectors'])):?>
      <?php foreach ($data['collectors'] as $col):?>
        <div class="card m-2 shadow-sm" style="max-width: 12rem;min-width: 12rem;">
            <img src="<?=ROOT?>/assets/img/logo.png" class="card-img-top " alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><?=$col['fullname']?></h5>
            <p class="card-text">Employee ID: <?=$col['id']?></p>
            <a href="<?=ROOT?>/employees/<?=$col['id']?>" class="btn btn-primary">Profile</a>
          </div>
        </div>    
      <?php endforeach;?>
    <?php elseif(isset($data['employee'])):?>
      <div class="card m-2 shadow-sm" style="max-width: 12rem;min-width: 12rem;">
          <img src="<?=ROOT?>/assets/img/logo.png" class="card-img-top " alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title"><?=$data['employee'][0]['fullname']?></h5>
          <p class="card-text">Employee ID: <?=$data['employee'][0]['id']?></p>
          <a href="<?=ROOT?>/employees" class="btn btn-primary">Go back</a>
        </div>
      </div>
    <?php else:?>
      <h4>No collector were registered</h4>
    <?php endif;?>
                          
  </div>
  <h4>Janitor</h4><br>
  <div class="card-group justify-content-center">
    
    <?php if(isset($data['janitors'])):?>
      <?php foreach ($data['janitors'] as $col):?>
        <div class="card m-2 shadow-sm" style="max-width: 12rem;min-width: 12rem;">
            <img src="<?=ROOT?>/assets/img/logo.png" class="card-img-top " alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><?=$col['fullname']?></h5>
            <p class="card-text">Employee ID: <?=$col['id']?></p>
            <a href="<?=ROOT?>/employees/<?=$col['id']?>" class="btn btn-primary">Profile</a>
          </div>
        </div>    
      <?php endforeach;?>
    <?php elseif(isset($data['employee'])):?>
      <div class="card m-2 shadow-sm" style="max-width: 12rem;min-width: 12rem;">
          <img src="<?=ROOT?>/assets/img/logo.png" class="card-img-top " alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title"><?=$data['employee'][0]['fullname']?></h5>
          <p class="card-text">Employee ID: <?=$data['employee'][0]['id']?></p>
          <a href="<?=ROOT?>/employees" class="btn btn-primary">Go back</a>
        </div>
      </div>
    <?php else:?>
      <h4>No collector were registered</h4>
    <?php endif;?>
  </div>
</div>
      
<?php $this->view('includes/footer'); ?>





