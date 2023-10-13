<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ms-auto" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Dropdown link </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container mt-4">
      <form class="row">
        <div class="col-md-6">
          <label for="kelas" class="form-label">Kelas</label>
          <select class="form-select" name="kelas">
            <option selected>- PILIH KELAS-</option>
            <option value="XI RPL">XI RPL</option>
          </select>
        </div>
        <div class="col-md-6 mb-4">
          <label for="nama" class="form-label">Nama Siswa</label>
          <select class="form-select" name="nama">
            <option selected>- NAMA SISWA -</option>
            <option value="ANDI NAUVAL ZACKY">ANDI NAUVAL ZACKY</option>
            <option value="RENDY">RENDY</option>
          </select>
        </div>

        <div class="col-md-4 mb-4">
          <label for="tgl" class="form-label mb-3">Tanggal</label>
          <input type="date" id="tgl" class="form-control" name="tanggal" />
        </div>

        <!-- form radio button untuk pilih keterangan tidak masuk -->
        <label for="keterangan" class="form-label mb-3">Keterangan Ijin</label>
        <div class="btn-group mb-4" role="group" aria-label="Basic radio toggle button group">
          <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" value="KEPERLUAN KELUARGA" checked />
          <label class="btn btn-outline-primary" for="btnradio1">KEPERLUAN KELUARGA</label>

          <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off" value="SAKIT" />
          <label class="btn btn-outline-primary" for="btnradio2">SAKIT</label>

          <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off" value="TERLAMBAT" />
          <label class="btn btn-outline-primary" for="btnradio3">TERLAMBAT</label>
        </div>

        <div class="col-8 mt-6">
          <label for="alasan" class="form-label-lg mb-3">Alasan tidak masuk/ijin/terlambat</label>
          <input type="text" class="form-control" id="alasan" name="alasan" />
        </div>
        <div class="col-12 mt-4">
          <button type="submit" class="btn btn-outline-primary">Kirim Data</button>
        </div>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
