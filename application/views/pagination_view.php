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
    <div class="row">
        <div class="col-md-8 col-md-offset-2 well">
        <?php 
        $attr = array("class" => "form-horizontal", "role" => "form", "id" => "form1", "name" => "form1");
        echo form_open("pagination/search", $attr);?>
            <div class="form-group">
                <div class="col-md-6">
                    <input class="form-control" id="book_name" name="book_name" placeholder="Search..." type="text" value="<?php echo set_value('book_name'); ?>" />
                </div>
                <div class="col-md-6">
                    <input id="btn_search" name="btn_search" type="submit" class="btn btn-default" value="Search" />
                    <a href="<?php echo base_url(). "index.php/pagination/index"; ?>" class="btn btn-primary">Show All</a>
                    <a href="<?php echo base_url("index.php/pagination/insert") ?>" class="btn btn-warning">Tambah</a>
                </div>
            </div>
        <?php echo form_close(); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2 bg-border">
        
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                    <th>#</th>
                    <th>Nama Buku</th>
                    <th>Penulis</th>
                    <th>ISBN</th>
                    <th>Penerbit</th>
                    <th width=150>Aksi</th>
                    
                    </tr>
                </thead>
                <tbody>
                <?php for ($i = 0; $i < count($booklist); ++$i) { ?>
                <tr>
                    <td><?php echo ($page+$i+1); ?></td>
                    <td><?php echo $booklist[$i]->name; ?></td>
                    <td><?php echo $booklist[$i]->author; ?></td>
                    <td><?php echo $booklist[$i]->isbn; ?></td>
                    <td><?php echo $booklist[$i]->penerbit; ?></td>
                    <td>
                        <div>
                        <a href="<?php echo base_url('index.php/pagination/update/'.$booklist[$i]->id) ?>" class="btn btn-sm btn-info">Edit</a>
                        <a href="<?php echo base_url('index.php/pagination/delete/'.$booklist[$i]->id) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus ?')">Hapus</a>
                        </div>
                    </td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <?php echo $pagination; ?>
        </div>
    </div>
</div>
</body>
</html>