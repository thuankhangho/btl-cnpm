<?php $this->view('includes/header') ?>
<?php $this->view('includes/nav') ?>
<head>
  <title>Home</title>
</head>
<div class="container-fluid">
  <i class="fa-sharp fa-solid fa-house fa-2x"></i>
  <h1>This is home page</h1>
  <?=show($data['rows'])?>
</div>

<?php $this->view('includes/footer') ?>