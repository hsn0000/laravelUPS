<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Form tambah Siswa</title>
</head>
<body>
    
   <div class="container">
      <div class="row">
         <div class="col-8">
             <hr>
            <h1 class="mt-3">FORM TAMBAH DATA SISWA </h1>
            <hr>

            <form method="post" action="/students">
            @csrf
              <div class="form-group">
                <label for="nama">Nama</label>
                  <input type="text" class="form-control @error('nama') is-invalid @enderror " id="nama" placeholder="Masukan Nama" name="nama">
                  @error('nama') <div class="invalid-feedback">{{ $message }}</div>@enderror
               </div>
              <div class="form-group">
                <label for="nama">NRP</label>
                  <input type="text" class="form-control  @error('nrp') is-invalid @enderror " id="nrp" placeholder="Masukan Nrp" name="nrp">
                  @error('nrp') <div class="invalid-feedback">{{ $message }}</div>@enderror
               </div>       
              <div class="form-group">
                <label for="nama">Email</label>
                  <input type="text" class="form-control  @error('email') is-invalid @enderror " id="email" placeholder="Masukan Email" name="email">
                  @error('email') <div class="invalid-feedback">{{ $message }}</div>@enderror
               </div>
              <div class="form-group">
                <label for="nama">Jurusan</label>
                  <input type="text" class="form-control  @error('jurusan') is-invalid @enderror " id="jurusan" placeholder="Masukan Jurusan" name="jurusan">
                  @error('jurusan') <div class="invalid-feedback">{{ $message }}</div>@enderror
               </div>
               <button type="submit" class="btn btn-primary">Tambah Data!</button>
            </form>          
         </div>
      </div>
   </div>
   
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
