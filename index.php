<!-- untuk mengkoneksikan data yg ada di table jadwal ke sublime -->
<?php
  include 'koneksi.php';

$query = "SELECT* FROM jadwal;";
$sql = mysqli_query($conn, $query);

$no = 0;
?>

<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <!--frame work bootsrap 5 untuk mempermudah membuat interface -->
  <link href="css/bootstrap.min.css" rel="stylesheet" >
<script src="js/bootstrap.bundle.min.js" ></script>
<!-- font awesome -->
<link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- judul halaman -->
  <title
  >pembelajaran siswa</title>
</head>
<body>
  <!-- navbar -->
  <nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <h1 class="navbar-brand" style="text-align: center;">
      DATA PEMBELAJARAN
    </h1>
  </div>
</nav>
<!-- judul WEB-->
<div class ="container">
<h3 class="mt-2 , mb-3">(guru)</h3>
<figure>
 
<!--table yg menampilkan data -->

<a href="kelola.php" type="button" class="btn btn-primary mb-3"><!-- button/ tombol untuk menambahkan data --> 
  <!-- fa plus merupakan tampilan simbol dari fontwesome -->
<i class="fa fa-plus"></i>
tambah data
</a>
<!-- table untuk menampilkan data yg ada di database yg akan di tampilkan -->
<div class="table">
  <table class="table align-middle table-bordered table-hover">
    <thead >
      <tr>
        <th>NO.</th>
        <th><center>pertemuan</center></th>
        <th>kelas</th>
        <th>matakuliah</th>
        <th>materi</th>
        <th>date</th>
        <th>kegiatan_pembelajaran</th>
        <th>dokumentasi</th>
        <th>file</th>


      </tr>
    </thead>
    
    <tbody>
      <!-- untuk menampilkan data-data apa saja yg ada pada tabel manga di data base -->
      <?php
        while($result = mysqli_fetch_assoc($sql)){
      ?>
      <tr>
        <td><center>
          <?php echo ++$no; ?>
      </td></center>

     <td><?php echo $result['pertemuan']; ?></td>
     <td><?php echo $result['kelas']; ?> </td>
        <td><?php echo $result['matakuliah']; ?></td>
        <td><?php echo $result['materi']; ?></td>
        <td><?php echo $result['date']; ?></td>
        <td><?php echo $result['kegiatan_pembelajaran']; ?></td>
          
        <td>
        <img src="foto/<?php echo $result['dokumentasi']; ?>" style="width: 120px;">
         </td>

           <td><form href src="file1 <?php echo $result['file']; ?>"></form> </td>
        <td>

            <a href="kelola.php?ubah=<?php echo $result['urutan']; ?>" type="button" class="btn btn-success btn-sm">
            <i class="fa fa-pencil"></i>edit</a>
      
          <a href="proses.php?hapus=<?php echo $result['urutan']; ?>"type="button" class="btn btn-danger btn-sm" onClick="return confirm('apakah anda yakin ingin menghapus data tsb')"> 
            <i class="fa fa-trash">hapus</i>
          </a>
        </td>
      </tr>


<?php
    }
?>
  </tbody>
  
</table>
</div>
</div>
</div>
</body>
</html>