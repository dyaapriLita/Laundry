<!DOCTYPE html>
<html>
<head>
<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
crossorigin="anonymous">
<title></title>
</head>
<body>
<h3>Tambah paket</h3>
<form action="proses_tambah_paket.php" method="post">

Jenis Cucian :
<select name="jenis" class="form-control">
<option></option>
<option value="kiloan">Kiloan</option>
<option value="selimut">Selimut</option>
<option value="bed_cover">Bed Cover</option>
<option value="kaos">Kaos</option>
</select>

Harga :

<input type="text" name="harga" value="" class="form-control">
<input type="submit" name="simpan" value="Tambah Paket" class="btn btn-primary">
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