<?php

include 'functions.php';
/*if(empty($_SESSION['user']))
    header("location:login.php");*/
?>
<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>    
    <meta name="description" content="Source Code Sistem Informasi Geografis / Geographic Information System (GIS) berbasis web dengan PHP dan MySQL. Studi kasus: lokasi pura di Bali."/>
    <meta name="keywords" content="Sistem, Informasi, geografis, gis, Tugas Akhir, Skripsi, Jurnal, Source Code, PHP, MySQL, CSS, JavaScript, Bootstrap, jQuery"/>
    <meta name="author" content="sarjanakomedi.com"/>
    <!-- <link rel="icon" href="img/tower.jpg"/> -->
    <link rel="canonical" href="#" />

    <title>Pemetaan Potensi Kecamatan Sabbang Selatan</title>
    <link href="assets/css/solar-bootstrap.min.css" rel="stylesheet"/>
    <link href="assets/css/general.css" rel="stylesheet"/>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>  
    <script src="assets/tinymce/tinymce.min.js"></script> 


    
    <script>
        tinymce.init({
        selector: "textarea.mce",
            plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste"
            ],
            menubar : false,
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
        });
    </script>   
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1UhV7s_4c-E3p33HyK_P-N7uEs8qqfpg&language=id&region=ID"></script>
    <script>
        var default_lat = <?=get_option('default_lat')?>; 
        var default_lng = <?=get_option('default_lng')?>;
        var default_zoom = <?=get_option('default_zoom')?>;
    </script>
    <script src="assets/js/script.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-default navbar-static-top" style="background-color: black;">
      <div><img src="headersabbangselatan.PNG" width="100%" height="134px"></div>
      <div class="container">
        <div class="navbar-header ">
     
          
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <?php if($_SESSION['login']):?>
            <li><a href="?" style="color: white;"><span class="glyphicon glyphicon-home"></span> Beranda </a></li>
            <li><a href="?m=Potensi" style="color: white;"><span class="glyphicon glyphicon-map-marker"></span>Potensi</a></li>
            <li><a href="?m=Penduduk" style="color: white;"><span class="glyphicon glyphicon-map-marker"></span>Sebaran Penduduk</a></li>
            <li><a href="aksi.php?act=logout" style="color: white;"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
            <?php else:?>            
            <li><a href="?m=login" style="color: white;"><span class="glyphicon glyphicon-open"></span> Login</a></li>
            <?php endif?>                   
          </ul>          
        </div>
      </div>
    </nav>

    <div class="container">
    <?php
        if(file_exists($mod.'.php'))
            include $mod.'.php';
        else
            include 'home.php';
    ?>
    </div>
    
    
    <footer class="footer bg-success">
        <marquee>
          <div class="container">
            <p>Copyright &copy; <?=date('Y')?> Pemetaan Potensi Kecamatan Sabbang Selatan</p></marquee>
        </div>
    </footer>

</body>
</html>