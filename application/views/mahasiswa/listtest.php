<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Title Page</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <h1 align="center">Form Peminjangan Ruangan</h1>
        <br>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

            <?php foreach ($mahasiswa as $key) 
            {
                $foto       = $key->foto;
                $nim        = $key->nim;
                $nama       = $key->nama;
            } ?>

            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <br>
            <br>
            <img style="max-height: 600px; display: block; margin: auto; width: 100%; overflow: hidden; padding: 0; max-width: 400px;" src="<?php echo base_url()?>/assets/image/fotoktm/<?php echo $foto?>" class="img-responsive center" width="100%"> 
            <br>
            <br>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <?php echo form_open('kunci/pinjam'); ?>
                <div class="form-group">
                <br>
                <br>
                <h4>NIM    :  <input type="text" class="form-control" name="nim" value="<?php echo $nim?>" readonly></h4>
                <br>
                <h4>Nama    : <?php echo $nama?></h4>
                <br>
                <h4>Meminjam Ruangan :</h4>
                <select class="form-control" id="ruang" name="ruang">
                <?php foreach ($ruang as $key) 
                { ?>
                <option value="<?php echo $key->namaruang; ?>" name="<?php echo $key->namaruang; ?>"><?php echo $key->namaruang; ?></option>
                <?php } ?>
                </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
               <?php echo form_close(); ?>
            </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
         <script src="Hello World"></script>
    </body>
</html>