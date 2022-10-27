<!DOCTYPE html>
<html>
<head>
    <title>Halaman Mahasiswa</title>
</head>
<body>
	<a href="{{ url('mahasiswa') }}">
	    <button type="button" style="padding: 5px; border-radius: 5px; border: 1px solid black; background-color: blue; color: white;"> PENDAFTARAN</button>
	</a>
	<a href="{{ url('mahasiswa') }}">
	    <button type="button" style="padding: 5px; border-radius: 5px; border: 1px solid black; background-color: red; color: white;"> UJIAN</button>
	</a>
	<a href="{{ url('mahasiswa') }}">
	    <button type="button" style="padding: 5px; border-radius: 5px; border: 1px solid black; background-color: green; color: white;"> NILAI</button>
	</a>
</body>
</html>