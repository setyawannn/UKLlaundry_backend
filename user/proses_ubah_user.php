<?php
if ($_POST) {
  $id_user = $_POST['id_user'];
  $nama = $_POST['nama'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $role = $_POST['role'];

  if (empty($nama)) {
    echo "<script>alert('nama user tidak boleh kosong');location.href='tambah_user.php';</script>";
  } elseif (empty($username)) {
    echo "<script>alert('username tidak boleh kosong');location.href='tambah_user.php';</script>";
  } else {
    include "../connect.php";
    if (empty($password)) {
      $update = mysqli_query($conn, "update user set nama='" . $nama . "', username='" . $username . "', role='" . $role . "' where id_user = '" . $id_user . "'") or die(mysqli_error($conn));
      if ($update) {
        echo "<script>alert('Sukses update user'); location.href='tampil_user.php'</script>";
      } else {
        echo "<script>alert('Gagal update user');location.href='ubah_user.php?id_user=" . $id_user . "';</script>";
      }
    } else {
      $update = mysqli_query($conn, "update user set nama='" . $nama . "', username='" . $username . "', role='" . $role . "' where id_user = '" . $id_user . "'") or die(mysqli_error($conn));
      if ($update) {
        echo "<script>alert('Sukses update user')</script>";
      } else {
        echo "<script>alert('Gagal update user');location.href='ubah_user.php?id_user=" . $id_user . "';</script>";
      }
    }
  }
}
