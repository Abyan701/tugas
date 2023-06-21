
<?php
  include 'koneksi.php';

    $urutan = '';
    $pertemuan = '';
    $kelas = '';
    $matakuliah = '';
    $materi = '';
    $date = '';
    $kegiatan_pembelajaran = '';
    $dokumentasi = '';
    $file = '';

  if(isset($_GET['ubah'])){
    $urutan = $_GET['ubah'];
    
    $query = "SELECT * FROM jadwal WHERE urutan = '$urutan';";
    $sql = mysqli_query($conn, $query);
    $result = mysqli_fetch_assoc($sql);

    $pertemuan = $result['pertemuan'];
     $kelas = $result['kelas'];
    $matakuliah = $result['matakuliah'];
    $materi = $result['materi'];
    $date = $result['date'];
    $kegiatan_pembelajaran = $result['kegiatan_pembelajaran'];
    $dokumentasi = $result['dokumentasi'];
    $file = $result['file'];
    

    //var_dump($result);
    //die();
  } 

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <!-- bootsrap  -->
  <link href="css/bootstrap.min.css" rel="stylesheet" >
<script src="js/bootstrap.bundle.min.js" ></script>
<!-- font awesome -->
<link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>pembelajaran siswa</title>

</head>
<body>
  <nav class="navbar navbar-light bg-light mb-4">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      EDIT/TAMBAH DATA
    </a>
  </div>
</nav>
<div class="container"> 

  <!--  untuk tampilan form pada halaman edit dan ubah    -->
  <form method="POST" action="proses.php" enctype=" multipart/from-data" >
  <input type="hidden" value="<?php echo $urutan; ?>" nama="urutan"> 
  <div class="mb-3 row">
    <label for="pertemuan"  class="col-sm-2 col-form-label">pertemuan</label>
    <div class="col-sm-10">
      <input required type="text" name="pertemuan" class="form-control" id="pertemuan" placeholder="contoh : pertemuan 1"value="<?php echo $pertemuan; ?>">
    </div>
  </div>

<div class="container"> 
  <div class="mb-3 row">
    <label for="matakuliah"  class="col-sm-2 col-form-label">kelas</label>
    <div class="col-sm-10">
  <input required type="text" name="kelas" class="form-control" id="kelas" placeholder="contoh : algoritma bresenham "value="<?php echo $kelas; ?>">
    </div>
  </div>

<div class="container"> 
  <div class="mb-3 row">
    <label for="matakuliah"  class="col-sm-2 col-form-label">matakuliah</label>
    <div class="col-sm-10">
  <input required type="text" name="matakuliah" class="form-control" id="matakuliah" placeholder="contoh : algoritma bresenham "value="<?php echo $matakuliah; ?>">
    </div>
  </div>

  
      <div class="container"> 
  <div class="mb-3 row">
    <label for="materi"  class="col-sm-2 col-form-label">materi</label>
    <div class="col-sm-10">
  <input required type="text" name="materi" class="form-control" id="materi" placeholder="contoh : materi"value="<?php echo $materi; ?>">
    </div>
  </div>


   




<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="for -label">date</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" name="date" rows="3"><?php echo $date; ?></textarea>
</div>

<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">kegiatan_pembelajaran</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" name="kegiatan_pembelajaran" rows="3"><?php echo $kegiatan_pembelajaran; ?></textarea>
</div>

<div class="mb-3 row">
 <label for="judul" class="col-sm-2 col-form-label">foto</label>
 <div class="col-sm-10">
 <input class = "form-control" required type="file" name="dokumentasi" id="dokumentasi" value="<?php echo $dokumentasi; ?>">
</div>

<div class="mb-3 row ">
<label for="file" class="col-sm-2 col-form-label">file</label>
<form action="proses.php" method="POST" enctype="multipart/form-data">
  <input class = "form-control" type="file" name="NamaFile" value="<?php echo $file; ?>">
</div>
</form> 



<div class="mb-3 row mt-4">
        <div class="col">
          <?php
            if(isset($_GET['ubah'])){
          ?>
            <button type="submit" name="aksi" value= "edit" class="btn btn-primary">
              <i class="fa fa-floppy-o" aria-hidden="true"></i>
                Simpan Perubahan
             </button>
            <?php
              } else {
            ?>
              <button type="submit" name="aksi" value="tambah" class="btn btn-primary">
                <i class="fa fa-floppy-o" aria-hidden="true"></i>
                Tambahkan
              </button>
             <?php
              } 
            ?>

            <a href="index.php " type="button" class="btn btn-danger">
              <i class="fa fa-reply" aria-hidden="true"></i>
              Batal
    </a>
  </div> 
    </form>
</div>
</body>
</html>