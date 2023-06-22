<!DOCTYPE html>
<html>
<head>
<title>Pendaftaran Acara</title>
</head>
<body>
<h1>Pendaftaran Acara</h1>

@if(session('success'))
    <div>{{ session('success') }}</div>
@endif

<form action="{{ route('pendaftaran.store') }}" method="POST">
    @csrf
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama"><br><br>

    <label for="konsentrasi">Konsentrasi:</label>
    <input type="text" id="konsentrasi" name="konsentrasi"><br><br>

    <label for="nim">NIM:</label>
    <input type="text" id="nim" name="nim"><br><br>

    <label for="judul">Judul:</label>
    <input type="text" id="judul" name="judul"><br><br>
    
    <label for="jenis_acara">Jenis Acara:</label>
    <input type="text" id="jenis_acara" name="jenis_acara"><br><br>
    
    <input type="submit" value="Daftar">
</form>
</body>
</html>