<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cari Kode Pos</title>
    @vite(['resources/sass/app.scss','resources/js/app.js'])
</head>
<body>
    <div class="d-flex flex-column">
        <nav class="navbar bg-dark mb-3">
            <div class="container">
              <a class="navbar-brand text-light fw-bold">Cari Kode Pos</a>
              <div class="d-flex flex-row align-items-center" role="search">
                <box-icon type='logo' name='github' color="white"></box-icon>
                <a href="https://github.com/justnaf" class="navbar-brand text-light"> Snafcat</a>
                {{-- <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2e/BRI_2020.svg/2560px-BRI_2020.svg.png" alt="" height="30px"> --}}
              </div>
            </div>
          </nav>
          <div class="d-flex flex-row mb-3 container">
            <a href="{{url('/')}}" class="btn btn-warning d-flex flex-row justify-content-center me-3"><box-icon name='chevron-left' color="black"></box-icon><span class="text-sm fw-bold ms-1">Balik Kedepan</span></a>
        </div>
        <div class="card container px-3 py-3 d-flex flex-column align-items-center mb-3 shadow">
            <h3 class="fw-bold">Upload Kode Pos</h3>
            <p class="text-danger">*Upload Disini Untuk Cek Alamat Kode Pos</p>
            <a href="{{url('Format.xls')}}" download class="btn btn-primary mb-3">Unduh Format</a>
            <form action="{{route('ImportKodepos')}}" method="POST" enctype="multipart/form-data" class="d-flex flex-column align-items-center">
                @csrf
                <input type="file" name="file" class="text-center mb-3" required>
                <button type="submit" class="btn btn-success w-25">Import</button>
            </form>
        </div>

        <div class="card container px-3 py-3 d-flex flex-column align-items-center shadow mb-3">
            <h3 class="fw-bold">Update DataBase Kode POS</h3>
            <p class="text-danger">*Delete Database Lalu Import Untuk Mengupdate Database</p>
            <form action="{{route('ImportBase')}}" method="POST" enctype="multipart/form-data" class="d-flex flex-column align-items-center">
                @csrf
                <input type="file" name="base" class="text-center mb-3" required>
                <button type="submit" class="btn btn-success w-25">Import</button>
            </form>
                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Delete Database</button>
        </div>
    </div>
    <!-- Modal Delete Database -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5 text-danger fw-bold" id="staticBackdropLabel">PERINGATAN!!!!!</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <span class="fw-bold">Apakah Anda Yakin Ingin Menghapus Database Kode Pos? Harap Sediakan Pengganti Database Jika Ingin Menghapus</span>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Gak Jadi</button>
            <form action="{{route('destroyBase')}}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger fw-bold">Hapus, Saya Punya DB Terbaru</button>
            </form>
            </div>
          </div>
        </div>
    </div>
</body>
</html>
