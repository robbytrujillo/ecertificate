$(document).ready(function () {
  // Fungsi untuk melakukan pencarian nama peserta
  function searchPeserta() {
    var keyword = $("#search").val().toLowerCase(); // Mengambil nilai keyword pencarian

    $("#list-peserta tr").filter(function () {
      // Menyembunyikan baris peserta yang tidak sesuai dengan keyword pencarian
      $(this).toggle($(this).text().toLowerCase().indexOf(keyword) > -1);
    });
  }

  // Event listener saat nilai input pencarian berubah
  $("#search").on("input", function () {
    searchPeserta();
  });

  // Inisialisasi Clipboard.js
  var clipboard = new ClipboardJS(".btn-copy");

  // Event listener saat tombol copy di klik
  clipboard.on("success", function (e) {
    alert("Nama berhasil disalin: " + e.text);
  });

  // Event listener saat terjadi error pada proses penyalinan
  clipboard.on("error", function (e) {
    alert("Gagal menyalin nama. Silakan coba lagi.");
  });
});
