<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Dashboard</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet" />
  </head>
  <body>
    <div class="container mt-5">
      <!-- Title -->
      <h1 class="mb-4">User Dashboard</h1>

      <!-- Data Table -->
      <div class="card mb-4">
        <div class="card-header">
          <h3>Data</h3>
        </div>
        <div class="card-body">
          <table class="table table-striped" id="dataTable">
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
              <!-- Contoh data untuk diisi dengan PHP nanti -->
              <tr>
                <td>1</td>
                <td>Anggrek</td>
                <td>5</td>
                <td>100,000</td>
                <td>Hias</td>
                <td>
                  <button
                    class="btn btn-primary btn-sm"
                    onclick="checkoutData(this)">
                    Checkout
                  </button>
                </td>
              </tr>
              <!-- Tambahkan baris data lainnya sesuai data admin -->
            </tbody>
          </table>
        </div>
      </div>

      <!-- Checkout Table -->
      <div class="card mb-4">
        <div class="card-header">
          <h3>Checkout</h3>
        </div>
        <div class="card-body">
          <table class="table table-striped" id="checkoutTable">
            <thead>
              <tr>
                <th>Nomor</th>
                <th>Nama Bunga</th>
                <th>Pcs</th>
                <th>Harga</th>
                <th>Jenis</th>
              </tr>
            </thead>
            <tbody>
              <!-- Data yang dicheckout akan muncul di sini -->
            </tbody>
          </table>
        </div>
      </div>

      <!-- Print Invoice Button -->
      <div class="text-end">
        <button class="btn btn-success" onclick="printInvoice()">
          Print Invoice
        </button>
      </div>
    </div>

    <script>
      // Fungsi untuk print invoice
      function printInvoice() {
        alert("Fitur Print Invoice belum diimplementasikan.");
      }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
