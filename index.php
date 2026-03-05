<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Form Pelanggan</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
height:100vh;
background: linear-gradient(135deg,#7F00FF,#E100FF);
display:flex;
justify-content:center;
align-items:center;
font-family: 'Segoe UI';
}

.container-box{
width:900px;
background:white;
border-radius:20px;
overflow:hidden;
box-shadow:0 20px 40px rgba(0,0,0,0.2);
display:flex;
}

.left{
background: url('image.jpg');
background-repeat: no-repeat;      /* agar tidak berulang */
background-size: cover;            /* agar memenuhi area */
background-position: center;   
color:white;
width:40%;
padding:40px;
display:flex;
flex-direction:column;
justify-content:center;
}

.right{
width:60%;
padding:40px;
}

.form-control{
border-radius:25px;
padding:10px 15px;
}

.btn-purple{
background: linear-gradient(135deg,#7F00FF,#E100FF);
color:white;
border:none;
border-radius:25px;
padding:10px;
}

.btn-purple:hover{
opacity:0.9;
}

</style>

</head>

<body>

<div class="container-box">

<div class="left">
<h3>Tazkiamour</h3>
<p>Form Tambah Data Pelanggan</p>
</div>

<div class="right">

<h4 class="mb-4">Tambah Pelanggan</h4>

<form>

<div class="mb-3">
<input type="text" class="form-control" placeholder="No ID">
</div>

<div class="mb-3">
<input type="text" class="form-control" placeholder="Nama Pelanggan">
</div>

<div class="mb-3">
<input type="email" class="form-control" placeholder="Email">
</div>

<div class="mb-3">
<input type="date" class="form-control">
</div>

<div class="mb-3">
<textarea class="form-control" placeholder="Alamat"></textarea>
</div>

<button class="btn btn-purple w-100">Simpan</button>

</form>

</div>

</div>

</body>
</html>