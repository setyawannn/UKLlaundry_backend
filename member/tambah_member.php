<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Member</title>
  <link rel="stylesheet" href="style.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
  <div class="container">
    <h1>Tambah Member</h1>
    <form action="proses_tambah_member.php" method="post">
      <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control" required>
      </div>
      <div class="mb-3">
        <label for="alamat" class="form-label">alamat</label>
        <input type="text" name="alamat" class="form-control" required>
      </div>
      <div class="mb-3">
        <label for="jenis_kelamin" class="form-label">Jenis Kelamin </label>
        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
          <option value="laki-laki">Laki-laki</option>
          <option value="perempuan">Perempuan</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="tlp" class="form-label">Telepon</label>
        <input type="text" name="tlp" class="form-control" required>
      </div>
      <input type="submit" class="btn btn-primary mt-4 w-100" value="Tambah">
    </form>
  </div>
</body>

</html>