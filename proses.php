
<!-- aksi untuk menampilkan home pada halaman edit dan tambah untuk kembali ke halaman utama -->


<?php
	include 'koneksi.php';
	include 'kelola.php';

	if(isset($_POST['aksi'])){
		if($_POST['aksi'] == "tambah"){

	$pertemuan = $_POST['pertemuan'];
	$kelas = $_POST['kelas'];
	$matakuliah = $_POST['matakuliah'];
	$materi = $_POST['materi'];
	$date = $_POST['date'];
	$kegiatan_pembelajaran = $_POST['kegiatan_pembelajaran'];
    $dokumentasi = $_POST['dokumentasi'];
    $file = $_POST['file'];

	$query ="INSERT INTO jadwal VALUES(null,'$pertemuan','$kelas','$matakuliah','$materi','$date','$kegiatan_pembelajaran','$dokumentasi','file')";
	$sql = mysqli_query($conn , $query);

			
			if($sql){
				header("location: index.php");
				//echo "Data Berhasil Ditambahkan <a href='index.php'>[Home]</a>";
			} else{
				echo $query;
			}

			//echo $nim." | ".$nama." | ".$email." | ".$jenis_kelamin." | ".$alamat;

		echo "<br>Tambah Data <a href='index.php'>[Home]</a>";
		} else if($_POST['aksi'] == "edit"){
			echo "Edit Data <a href='index.php'>[Home]</a>";
			
			//var_dump($_POST);
			$direktori ="file1/";
			$file_name=$_FILES['NamaFile']['name'];
			move_uploaded_file($_FILES['NamaFile'],['tmp_name'],$direktori.$file_name);

			mysqli_query($koneksi,"insert into dokumen set file ='file_name'");

	$pertemuan = $_POST['pertemuan'];
	$kelas = $_POST['kelas'];
	$matakuliah = $_POST['matakuliah'];
	$materi = $_POST['materi'];
	$date = $_POST['date'];
	$kegiatan_pembelajaran = $_POST['kegiatan_pembelajaran'];
	$dokumentasi = $_POST['dokumentasi'];
    $file= $_POST['file'];
	
	 

	$query ="INSERT INTO jadwal VALUES(null,'$pertemuan','$kelas','$matakuliah','$materi','$date','$kegiatan_pembelajaran','$dokumentasi','file')";
	$sql = mysqli_query($conn , $query);
		}
	}

	if(isset($_GET['hapus'])){
		$urutan = $_GET['hapus'];

		$query = "DELETE FROM jadwal WHERE urutan = '$urutan';";
		$sql = mysqli_query($conn, $query);

		if($sql){
			header("location: index.php");
			//echo "Data Berhasil Ditambahkan <a href='index.php'>[Home]</a>";
			} else{
				echo $query;
			}
		//echo"Hapus Editan <a href='index.php'>[Home]</a>;
	}
?> 