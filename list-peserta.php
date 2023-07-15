<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
require 'db.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <title>E-Certifikat IHBS</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
  </head>
  <body background="bg1.jpg">
    <div class="container">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-light">
          <!-- <div class="panel-heading"><h2>E-Sertifikat IHBS</h2></div> -->
          <div class="panel-heading"> <div class="col-md-2">
              <img src="ihbs-logo.png" alt="Logo" width="50" height="50"></div>
            <div class="col-md-10">
              <h2>List Peserta Kurban</h2>
            </div>
            <class="panel-body">
              <br />
              <div class="form-group">
                <input type="text" class="form-control" id="search"
                  placeholder="Cari Nama Peserta">
              </div>
              <a href="index.php" disabled="yes">Kembali</a>
              <br />
              <table class="table">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                  </tr>
                </thead>
                <tbody id="list-peserta"></tbody>
              </table>
              <br />
              <a href="index.php" disabled="yes">Kembali</a>

              <nav id="pagination-container" aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous"
                      id="prev-page">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next"
                      id="next-page">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>

      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <script src="script.js"></script>
      <script>
      $(document).ready(function() {
        // Fungsi untuk melakukan pencarian nama peserta
        function searchPeserta() {
          var keyword = $('#search').val().toLowerCase(); // Mengambil nilai keyword pencarian

          $('#list-peserta tr').filter(function() {
            // Menyembunyikan baris peserta yang tidak sesuai dengan keyword pencarian
            $(this).toggle($(this).text().toLowerCase().indexOf(keyword) > -1);
          });
        }

        // Event listener saat nilai input pencarian berubah
        $('#search').on('input', function() {
          searchPeserta();
        });
      });
    </script>
    </body>
  </html>
