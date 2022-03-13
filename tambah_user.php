<!DOCTYPE html>
<html>
<head>
<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
crossorigin="anonymous">
<title></title>
</head>
<body>
<h3>Tambah User</h3>
<form action="proses_tambah_user.php" method="post">
Nama User :

<input type="text" name="nama_user" value="" class="form-control">

Username :

<input type="text" name="username" value="" class="form-control">

Password :
<input type="password" name="password" class="form-control">

Role :
<select name="role" class="form-control">
<option></option>
<option value="admin">Admin</option>
<option value="kasir">Kasir</option>
<option value="owner">Owner</option>
</select>

<br>
<input type="submit" name="simpan" value="Tambah User" class="btn btn-primary">
</form>
<script
src="https://code.jquery.com/jquery-3.6.0.js"
integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
crossorigin="anonymous"></script>

<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
crossorigin="anonymous"></script>
</body>
</html>