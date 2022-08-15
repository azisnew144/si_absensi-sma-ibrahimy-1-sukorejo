
<?php

include "../config/__config_url.php";
include "../config/__config_database.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Halaman Guru</title>
    <link  href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link  href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">
    <link  href="font/css/all.min.css" rel="stylesheet">
    <link  href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css" rel="stylesheet" >

    <link  href="C:\xampp\htdocs\New folder\file\bahan\jquery.dataTables.min.css" rel="stylesheet">
    <link  href="C:\xampp\htdocs\New folder\file\bahan\buttons.dataTables.min.css" rel="stylesheet">
    <link  href="C:\xampp\htdocs\New folder\file\bahan\bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
     <div class="container">
        <a class="navbar-brand" href="#">
            <h4><i class="fa-solid fa-circle-user"></i>
            Halaman Data Guru
            </h4> 
            </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupporttedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link <?php echo !isset($_GET['target']) || empty($_GET['target']) ? "active" : ""; ?>" href="<?php echo base_url(); ?>">
                <i class="fa-solid fa-house"></i> Home</a>
            </li>

           
                                                       
            <li class="nav-item">
                <a class="nav-link <?php echo isset($_GET['target']) && $_GET['target'] == 'guru' ? "active" : ""; ?>" href="<?php echo base_url(); ?>admin.php?target=guru"><i class="fa-solid fa-book"></i> Data Guru</a>
            </li>
                      
           </ul> 
        </div>

        <div class="d-flex">
            <a href="<?php echo base_url(); ?>logout.php" class="btn btn-sm btn-danger">
            <i class="fa-solid fa-right-from-bracket"></i> Logout
        </a>
        </div>
     </div>
    </nav>
   <div class="clearfix">&nbsp;</div>
   <div class="container">
    <?php include_once "content.php"; ?>
   </div>

   <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"></script>
   <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
   <script src="https://kit.fontawesome.com/4af1d56044.js" crossorigin="anonymous"></script>
   <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
   <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
   <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>

   <script src="C:\xampp\htdocs\New folder\file\bahan\jquery-3.6.0.js"></script>
   <script src="C:\xampp\htdocs\New folder\file\bahan\popper.min.js"></script>
   <script src="C:\xampp\htdocs\New folder\file\bahan\bootstrap.min.js"></script>
   <script src="C:\xampp\htdocs\New folder\file\bahan\dataTables.buttons.min.js"></script>
   <script src="C:\xampp\htdocs\New folder\file\bahan\awesome.js"></script>
   <script src="C:\xampp\htdocs\New folder\file\bahan\jquery.dataTables.min.js"></script>
   <script src="C:\xampp\htdocs\New folder\file\bahan\jszip.min.js"></script>
   <script src="C:\xampp\htdocs\New folder\file\bahan\pdfmake.min.js"></script>
   <script src="C:\xampp\htdocs\New folder\file\bahan\vfs_fonts.js"></script>
   <script src="C:\xampp\htdocs\New folder\file\bahan\buttons.html5.min.js"></script>
   <script src="C:\xampp\htdocs\New folder\file\bahan\buttons.print.min.js"></script>

   <script>
    $(document).ready(function() {
        $('.table').DataTable({ 
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]});
    });
   </script>

   </body>
 
 </html>