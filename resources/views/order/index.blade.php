<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Global Aero Dinmika</title>
  </head>
  <body>

<!-- Image and text -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand disabled" href="#">
    <img src="/docs/4.5/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
    Marketing
  </a>
</nav>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand disabled" href="/">Logo Perusahaan</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link disabled" href="/marketing">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Order</a>
            </li>         
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle disabled" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Laporan
                </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Hari ini</a>
                    <a class="dropdown-item" href="#">Pelanggan</a>
                    <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Belum dikirim</a>
                </div>
            </li>
            
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        </div>
        <div class="d-flex justify-content-end">
                    <li class="nav-item dropdown disabled">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Keluar
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="3">Keluar</a>
                            </div>
                        <li class="nav-item">
                    </div>
</nav>
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3">Global Aero Dinamika</h1>
                <div class="alert alert-primary alert-dismissible" role="alert">
                <form class="text-primary"> 
                    <div class="form-group row">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm"><a style="font-family: soleil;"><h5>Nama</h5></a></label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Perusahaan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label"><a style="font-family: soleil;"><h5>Penerima</h5></a></label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="Penerima">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label"><a style="font-family: soleil;"><h5>Alamat</h5></a></label>
                        <div class="col-sm-10">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg"><a style="font-family: soleil;"><h5>No. Telp</h5></a></label>
                        <div class="col-sm-10">
                        <input type="email" class="form-control form-control-lg" id="colFormLabelLg" placeholder="08123456789">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputCity"><a style="font-family: soleil;"><h5>Nama Barang</h5></a></label>
                            <input type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="form-group col-md-1">
                            <label for="inputCity"><a style="font-family: soleil;"><h5>Jumlah</h5></a></label>
                            <input type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="form-group col-md-7">
                            <label for="inputCity"><a style="font-family: soleil;"><h5>Keterangan</h5></a></label>
                            <input type="text" class="form-control" id="inputCity">
                        </div>
                    </div>
                    <div class="d-flex justify-content-end my-2 my-lg-0">
                        <button type="submit" class="btn btn-primary">Order</button>
                        
                        <button type="submit" class="btn btn-warning">Batal</button>
                    </div>
                </form>
                </div>
                
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>

