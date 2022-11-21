<?php
include 'connection.php';

$query = "SELECT * FROM mahasiswa";
$sql = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!--Bootstrap --> 
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <script src="js/bootstrap.bundle.min.js" ></script>

    <!--Font Awesome-->
    <link rel="stylesheet" href="font awesome/css/font-awesome.min.css">
    <title>Data Mahasiswa</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-md">
          <a class="navbar-brand" href="#">    CRUD PBO   </a>
        </div>
      </nav>

      <!--Judul-->
      <figure class="text-center">
        <blockquote class="blockquote">
          <p>Data Mahasiswa yang Telah Disimpan dalam Database </p>
        </blockquote>
        <figcaption class="blockquote-footer">
          CRUD <cite title="Source Title">(Creat, Read, Update, Delete)</cite>
        </figcaption>
        <a href="kelola.php" type="button" class="btn btn-primary mb-3 mt-1">
            <i class="fa fa-plus"></i>
            Tambah Data
        </a>
      </figure>
      <div class="table-responsive">
        <table class="table align-middle container table-bordered table table-hover">
          <thead>
            <tr>
              
              <th><center>No.</center></th>
              <th><center>NIM</center></th>
              <th><center>NAMA</center></th>
              <th><center>GENDER</center></th>
              <th><center>ALAMAT</center></th>
              <th><center>PRODI</center></th>
              <th><center>EMAIL</center></th>
              <th><center>FOTO DIRI</center></th>
              <th><center>AKSI</center></th>
            </tr>
          </thead>
          <tbody>
            <?php
            $i = 1;
            while($data = mysqli_fetch_assoc($sql)){

            ?>
            <tr>
              <td><?php echo $i++ ?></td>
              <td><?php echo $data['NIM'] ?></td>
              <td><?php echo $data['Nama'] ?></td>
              <td><?php echo $data['Gender'] ?></td>
              <td><?php echo $data['Alamat'] ?></td>
              <td><?php echo $data['Prodi'] ?></td>
              <td><?php echo $data['Email'] ?></td>
              <td>
                <center>
                <img src="img/img1.jpg" alt="" style="width: 150px;">
            </td>
              <td>
                <a href="edit.php?Id=<?php echo $data['Id'] ?>" type="button" class="btn btn-success btn-sm"> 
                  <i class="fa fa-pencil"></i>
                </a>
                <a href="hapus_mhs.php?Id=<?php echo $data['Id'] ?>" type="button" class="btn btn-danger btn-sm">
                  <i class="fa fa-trash"></i>
                </button>
              </center>
              </td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
     </div>   
</body>
</html>
