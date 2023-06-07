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
        <nav class="navbar bg-dark">
            <div class="container">
              <a class="navbar-brand text-light fw-bold">Cari Kode Pos</a>
              <div class="d-flex flex-row align-items-center" role="search">
                <box-icon type='logo' name='github' color="white"></box-icon>
                <a href="https://github.com/justnaf" class="navbar-brand text-light"> Snafcat</a>
                {{-- <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2e/BRI_2020.svg/2560px-BRI_2020.svg.png" alt="" height="30px"> --}}
              </div>
            </div>
          </nav>
        <div class=" container d-flex flex-row-reverse px-3 py-2 mb-3 justify-content-between">
            <div class="d-flex flex-row">
                <a href="{{url('/uploadkode')}}" class="btn btn-success d-flex flex-row justify-content-center me-3"><box-icon name='upload' color="white"></box-icon><span class="text-sm fw-bold ms-1">Kode Pos</span></a>
                <button type="button" class="btn btn-danger d-flex flex-row justify-content-center"  data-bs-toggle="modal" data-bs-target="#staticBackdrop"><box-icon name='trash' color="white"></box-icon><span class="text-sm text-light fw-bold ms-1">Hapus</span></button>
            </div>
            <div>
                <span class="text-danger">Total Kode Pos di Database :</span>
                <span class="fw-bold">{{$base->count()}}</span>
            </div>
        </div>
        <div class="card container py-4 shadow-sm px-4 mb-5">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>Kelurahan</th>
                        <th>Kecamatan</th>
                        <th>Kode POS</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        use App\Models\base;
                    @endphp
                    @foreach ($excel as $xcl)
                    <tr>
                        <td>{{base::where('kodepos',$xcl->kodepos)->value('kelurahan')}}</td>
                        <td>{{base::where('kodepos',$xcl->kodepos)->value('kecamatan')}}</td>
                        <td>{{$xcl->kodepos}}</td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Kelurahan</th>
                        <th>Kecamatan</th>
                        <th>Kode POS</th>
                    </tr>
                </tfoot>
            </table>
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
                  <span class="fw-bold">Apakah Anda Yakin Ingin Menghapus Kode Pos Yang Anda Masukan?</span>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Gak Jadi</button>
                <form action="{{route('destroyExcel')}}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger fw-bold">Saya Yakin Ingin Menghapus</button>
                </form>
                </div>
              </div>
            </div>
        </div>

    <!-- Data Table -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.colVis.min.js" defer></script>

    <script>
    $(document).ready(function() {
        var table = $('#example').DataTable( {
            lengthChange: true,
            lengthMenu : [[10, 25, 50, -1],
            [10, 25, 50, 'All']],
            ordering : false,
            buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
        } );

        table.buttons().container()
            .appendTo( '#example_wrapper .col-md-6:eq(0)' );
    } );
    </script>
</body>
</html>
