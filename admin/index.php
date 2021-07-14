<!DOCTYPE html>
<html>
<head><title>Dashboard</title></head>
<style>
    body {
  padding: 25px;
  background-color: white;
  color: black;
  font-size: 25px;
}

.dark-mode {
  background-color: black;
  color: white;
}
</style>
<body>
<center><h1>Dashboard</h1></center>
<center>Selamat datang ke halaman Dashboard.<br />
Mohon maaf di sini belum ada apa-apa.<br />
Mungkin Anda bisa langsung <a style="color:info;" href="logout.php">logout</a> saja.<br />
Terima Kasih atas kunjungannya.<br><br>
<script>
    function myFunction() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}
</script>
<button onclick="myFunction()">MODE GELAP</button>
</center>
</body>
</html>

