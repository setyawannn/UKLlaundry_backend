<?php
if ($_POST) {
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $jenis_kelamin = $_POST['jenis_kelamin'];
  $tlp = $_POST['tlp'];

  if (empty($nama)) {
    echo "<script>alert('nama member tidak boleh kosong');location.href='tambah_member.php';</script>";
  } elseif (empty($alamat)) {
    echo "<script>alert('alamat tidak boleh kosong');location.href='tambah_member.php';</script>";
  } elseif (empty($tlp)) {
    echo "<script>alert('nomor telepon tidak boleh kosong');location.href='tambah_member.php';</script>";
  } else {
    include "../connect.php";
    $insert = mysqli_query($conn, "insert into member (nama, alamat, jenis_kelamin, tlp ) value ('" . $nama . "','" . $alamat . "','" . $jenis_kelamin . "', '" . $tlp . "')") or die(mysqli_error($conn));
    if ($insert) {
      echo "<script>alert('Sukses menambahkan member');location.href='tambah_member.php';</script>";
    } else {
      echo "<script>alert('Gagal menambahkan member');location.href='tambah_member.php';</script>";
    }
  }
}
