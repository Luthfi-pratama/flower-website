<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    .daftar-data {
      display: flex;
      align-items: center;
      /* Vertikal tengah */
      justify-content: center;
      /* Horizontal tengah */
      background-color: transparent;
      /* Sesuaikan jika perlu */
      border: none;
      padding: 10px;
      /* Sesuaikan padding sesuai kebutuhan */
      font-size: 2em;
    }
  </style>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar -->
      <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="position-sticky">
          <h4 class="sidebar-heading p-3">Admin Dashboard</h4>
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#">
                <span data-feather="home"></span>
                Home
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <!-- Main Content -->
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div
          class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Dashboard</h1>
          <div class="d-flex justify-content-end pt-3">
            <a href="app/logout.php" class="btn btn-danger">Logout</a>
          </div>
        </div>

        <!-- Dashboard Content -->
        <div class="row">
          <div class="col-lg-4">
            <div class="card mb-4">
              <div class="card-body">
                <h5 class="card-title">Total Produk</h5>
                <p class="card-text">250</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card mb-4">
              <div class="card-body">
                <h5 class="card-title">Total Pesanan</h5>
                <p class="card-text">100</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card mb-4">
              <div class="card-body">
                <h5 class="card-title">Total Pengguna</h5>
                <p class="card-text">500</p>
              </div>
            </div>
          </div>
        </div>
        <!-- Create Table-->
        <div class="col-md-8 col-md-offset-10">
          <br /><br />
          <div class="panel panel-primary">
            <div class="panel-heading">
              <div>
                <h1>Tambahkan Data</h1>
              </div>
            </div>
            <br />
            <div class="panel-body">
              <form method="post" action="data_add_s.php" enctype="multipart/form-data">
                <div class="form-group">
                  <label>Nama Bunga</label>
                  <input class="form-control" name="nama" required />
                </div>
                <div class="form-group">
                  <label>Pcs</label>
                  <input class="form-control" name="pcs" type="number" required />
                </div>
                <div class="form-group">
                  <label>harga</label>
                  <input class="form-control" name="harga" required />
                </div>
                <div class="form-group">
                  <label>Jenis</label>
                  <input class="form-control" name="jenis" required />
                </div>
                <button type="submit" class="btn btn-primary">
                  <i class="fa fa-save"></i> Simpan
                </button>
                <button type="reset" class="btn btn-default">
                  <i class="fa fa-file-text"></i> Bersih
                </button>
              </form>
            </div>
          </div>
        </div>
        <!-- Bagian Table -->
        <div class="col-md-15 col-md-offset-10">
          <br /><br />
          <div class="panel panel-primary">
            <div class="panel-heading">
              <div class="alert alert-dark">
                <h1 class="daftar-data">List Data</h1>
              </div>
            </div>
            <div class="panel-body">
              <div class="table">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                  <thead>
                    <tr>
                      <th>Nomor</th>
                      <th>Nama Bunga</th>
                      <th>Pcs</th>
                      <th>Harga</th>
                      <th>Jenis</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php

                    $no = 0; // Inisialisasi variabel $no
                    $result = mysqli_query($koneksi, "SELECT * FROM m_siswa ORDER BY nama ASC"); // Mengambil data siswa dari tabel m_siswa
                    while ($row = mysqli_fetch_assoc($result)) { // Mengambil data per baris
                      $no++;
                    ?>
                      <tr class="">
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['angkatan']; ?></td>
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['nim']; ?></td>
                        <td><?php echo $row['jurusan']; ?></td>
                        <td>
                          <!-- Tombol Edit -->
                          <a href="data_edit.php?id=<?php echo $row['id']; ?>"
                            class="btn btn-info btn-sm">
                            <i class="glyphicon glyphicon-check"></i> Edit</a>
                          <!-- Tombol Hapus -->
                          <a href="javascript:;" data-id="<?php echo $row['id']; ?>"
                            data-toggle="modal" data-target="#modal-konfirmasi"
                            class="btn btn-danger btn-sm">
                            <i class="glyphicon glyphicon-trash"></i> Hapus</a>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>