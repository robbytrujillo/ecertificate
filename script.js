$(document).ready(function () {
  // Mengambil data peserta saat halaman dimuat
  getDataPeserta();

  // Mengirim data peserta ke server saat form disubmit
  $("#form-peserta").submit(function (event) {
    event.preventDefault();
    var nama = $("#nama").val();
    tambahPeserta(nama);
    $("#form-peserta")[0].reset();
  });

  // Menangani klik tombol "Edit"
  $(document).on("click", ".edit-btn", function () {
    var no_registrasi = $(this).data("no-registrasi");
    var nama = $(this).data("nama");
    openUpdateForm(no_registrasi, nama);
  });

  // Mengirim data update peserta ke server saat form update disubmit
  $("#form-update-peserta").submit(function (event) {
    event.preventDefault();
    var no_registrasi = $("#update-no-registrasi").val();
    var nama = $("#update-nama").val();
    updatePeserta(no_registrasi, nama);
  });
});

// Mendapatkan data peserta dari server
function getDataPeserta() {
  // $.ajax({
  //   url: "read.php",
  //   type: "GET",
  //   success: function (response) {
  //     $("#data-peserta").html(response);
  //   },
  // });
  $.ajax({
    url: "list.php",
    type: "GET",
    success: function (response) {
      $("#list-peserta").html(response);
    },
  });
}

// // Mendapatkan data peserta dari server
// function getListPeserta() {
//   $.ajax({
//     url: "list.php",
//     type: "GET",
//     success: function (response) {
//       $("#list-peserta").html(response);
//     },
//   });
// }

// Menambahkan peserta ke database
function tambahPeserta(nama) {
  $.ajax({
    url: "create.php",
    type: "POST",
    data: {
      nama: nama,
    },
    success: function (response) {
      getDataPeserta();
    },
  });
}

// Menghapus peserta dari database
function hapusPeserta(no_registrasi) {
  if (confirm("Apakah Anda yakin ingin menghapus peserta ini?")) {
    $.ajax({
      url: "delete.php",
      type: "POST",
      data: {
        no_registrasi: no_registrasi,
      },
      success: function (response) {
        getDataPeserta();
      },
    });
  }
}
// Membuka form update peserta dengan data yang akan diperbarui
function openUpdateForm(no_registrasi, nama) {
  $("#update-no-registrasi").val(no_registrasi);
  $("#update-nama").val(nama);
  $("#form-update").show();
}

// Menutup form update peserta
function cancelUpdate() {
  $("#form-update").hide();
}

// Mengirim data update peserta ke server
function updatePeserta(no_registrasi, nama) {
  $.ajax({
    url: "update.php",
    type: "POST",
    data: {
      no_registrasi: no_registrasi,
      nama: nama,
    },
    success: function (response) {
      getDataPeserta();
      cancelUpdate();
      alert("Data peserta berhasil diperbarui");
    },
  });
}
