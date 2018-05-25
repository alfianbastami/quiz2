<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagination & Filtering</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/css/bootstrap.css" ?>">
    
    <style type="text/css">
    .bg-border {
        border: 1px solid #ddd;
        border-radius: 4px 4px;
        padding: 15px 15px;
    }
    </style>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url(). "index.php/pagination/index"; ?>">Ahmad Alfian Bastami</a>
    </div>

    
</nav>
<div class="container">
<h1>Tambah Data Buku</h1>
<?php echo validation_errors(); ?>
<form class="form-horizontal" method="post" action="<?php echo base_url('index.php/pagination/update/'.$tbl_books['id']) ?>">
  <div class="form-group">
    <label for="name" class="col-sm-2 control-label">Nama Buku</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="name" name="name" value="<?php echo $tbl_books['name'] ?>" placeholder="Nama Buku">
    </div>
  </div>
  <div class="form-group">
    <label for="author" class="col-sm-2 control-label">Penulis</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="author" name="author" value="<?php echo $tbl_books['author'] ?>" placeholder="Penulis">
    </div>
  </div>
  <div class="form-group">
    <label for="isbn" class="col-sm-2 control-label">ISBN</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="isbn" name="isbn" value="<?php echo $tbl_books['isbn'] ?>" placeholder="ISBN-13: 978-1491918xxx">
    </div>
  </div>
  <div class="form-group">
    <label for="id_penerbit" class="col-sm-2 control-label">Penerbit</label>
    <div class="col-sm-10">
        <select name="id_penerbit" id="id_penerbit" class="form-control">
            <?php foreach ($penerbit as $key => $value): ?>
                <option value="<?php echo $value['id_penerbit'] ?>"><?php echo $value['penerbit'] ?></option>
            <?php endforeach ?>
        </select>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-info">Update</button>
      <a href="<?php echo base_url() ?>" class="btn btn-default">Kembali</a>
    </div>
  </div>
</form>
</div>
</body>
</html>