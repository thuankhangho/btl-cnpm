<?php $this->view('includes/header') ?>
<?php $this->view('includes/nav') ?>
  
<!-- <?php show($data['collectors']) ?>
<?php show($data['janitors']) ?> -->

<head>
  <title>Employee Management</title>
</head>


<h3 class="h-100 d-flex align-items-center justify-content-center">Employee Management</h3>
<div class="container-fluid p-4 shadow mx-auto">
<h4>Collectors</h4>
  <a href="<?=ROOT?>/signup">
    <button class="btn btn-sm btn-primary" style="background-color: green"><i class="fa fa-plus"></i> Add New</button>
  </a>
  <div class="card-group justify-content-center">
    <?php if(isset($data['collectors'])):?>
      <?php foreach ($data['collectors'] as $col):?>
        <div class="card m-2 shadow-sm" style="max-width: 12rem;min-width: 12rem;">
            <img src="<?=ROOT?>/assets/img/logo.png" class="card-img-top " alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><?=$col->fullname?></h5>
            <p class="card-text">Employee ID: <?=$col->id?></p>
            <a href="<?=ROOT?>/profile/<?=$col->id?>" class="btn btn-primary">Profile</a>
          </div>
        </div>    
      <?php endforeach;?>
    <?php else:?>
      <h4>No collector were registered</h4>
    <?php endif;?>                  
  </div>
  
  <h4>Janitors</h4>
  <a href="<?=ROOT?>/signup">            
    <button class="btn btn-sm btn-primary" style="background-color: green"><i class="fa fa-plus"></i> Add New</button>
  </a>
  <div class="card-group justify-content-center">
    
    <?php if(isset($data['janitors'])):?>
      <?php foreach ($data['janitors'] as $col):?>
        <div class="card m-2 shadow-sm" style="max-width: 12rem;min-width: 12rem;">
            <img src="<?=ROOT?>/assets/img/logo.png" class="card-img-top " alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><?=$col->fullname?></h5>
            <p class="card-text">Employee ID: <?=$col->id?></p>
            <a href="<?=ROOT?>/profile/<?=$col->id?>" class="btn btn-primary">Profile</a>
          </div>
        </div>    
      <?php endforeach;?>
    <?php else:?>
      <h4>No collector were registered</h4>
    <?php endif;?>
  </div>
</div>

<?php $this->view('includes/footer'); ?>