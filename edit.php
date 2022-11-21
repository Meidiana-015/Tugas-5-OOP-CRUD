<?php
include 'connection.php';

$id = $_GET['Id'];
$query = "SELECT * FROM mahasiswa WHERE Id = '$id';";
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
    <nav class="navbar navbar-expand-lg bg-light mb-3">
        <div class="container-md">
          <a class="navbar-brand" href="#">    CRUD PBO   </a>
        </div>
      </nav>
      <div class="container">
        <form method="POST" action="pros_edit.php">
            <?php
            $i = 1;
            while($data = mysqli_fetch_assoc($sql))
            {
         ?> 
         <input type="hidden" value="<?php echo $data['Id']; ?>" name="Id">      
        <div class="mb-3 row">
            <label for="NIM" class="col-sm-2 col-form-label">
              NIM
            </label>
              <div class="col-sm-10">
              <input type="number" value="<?php echo $data['NIM']?>" class="form-control" name="NIM" placeholder="contoh: 21051214001">
              </div>
        </div>
        <div class="mb-3 row">
          <label for="NAMA" class="col-sm-2 col-form-label">
            NAMA
          </label>
            <div class="col-sm-10">
            <input type="text" value="<?php echo $data['Nama']?>" class="form-control" name="Nama" placeholder="Nama Lengkap">
            </div>
      </div>
      <div class="mb-3 row">
        <label for="GENDER" class="col-sm-2 col-form-label">
          GENDER
        </label>
          <div class="col-sm-10">
            <select name="Gender"  class="form-select">
              <option selected>Gender</option>
              <option value="L">L</option>
              <option value="P">P</option>
            </select>
          </div>
        </div>
        <div class="mb-3 row">
          <label for="ALAMAT" class="col-sm-2 col-form-label">
           ALAMAT
          </label>
            <div class="col-sm-10">
              <textarea class="form-control" name="Alamat" placeholder="Jalan,RT/RW,Kode Pos,Kel/Desa,Kec.,Kab.,Prov" rows="3"><?php echo $data['Alamat']?></textarea>
            </div>
        </div>
        <div class="mb-3 row">
          <label for="PRODI" class="col-sm-2 col-form-label">
            PRODI
          </label>
            <div class="col-sm-10">
            <input type="text"  value="<?php echo $data['Prodi']?> "class="form-control" name="Prodi" placeholder="Program Studi">
            </div>
      </div>
      <div class="mb-3 row">
        <label for="EMAIL" class="col-sm-2 col-form-label">
          EMAIL
        </label>
          <div class="col-sm-10">
          <input type="text" value="<?php echo $data['Email']?>" class="form-control" name="Email" placeholder="email@contoh.com">
          </div>
    </div>
    <div class="mb-3 row">
      <label for="foto" class="col-sm-2 col-form-label">
        FOTO DIRI
      </label>
        <div class="col-sm-10">
          <input class="form-control" type="file" name="Foto">
        </div>
      </div>
      <div class="mb-3 row mt-4">
        <div class="col">
          
          <button type="submit" class="btn btn-primary btn-sm">
                Tambah
                </button>
          <a href="index.php" type="button" class="btn btn-danger btn-sm">
            Batal
          </a>
        </div>
      </div>
      <?php
       }
       ?>
    </form>
    </div>
</body>
</html>
