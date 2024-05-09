// tombol fullscreen
// const fullscreenBtn = document.getElementById('fullscreen-btn');
// const content = document.getElementById('content');

// fullscreenBtn.addEventListener('click', toggleFullScreen);

// function toggleFullScreen() {
//     if (!document.fullscreenElement) {
//         if (content.requestFullscreen) {
//             content.requestFullscreen();
//         } else if (content.webkitRequestFullscreen) { /* Safari */
//             content.webkitRequestFullscreen();
//         } else if (content.msRequestFullscreen) { /* IE11 */
//             content.msRequestFullscreen();
//         }
//     } else {
//         if (document.exitFullscreen) {
//             document.exitFullscreen();
//         } else if (document.webkitExitFullscreen) { /* Safari */
//             document.webkitExitFullscreen();
//         } else if (document.msExitFullscreen) { /* IE11 */
//             document.msExitFullscreen();
//         }
//     }
// }

// jam dan tanggal digital
function updateTime() {
    // Buat objek tanggal dan waktu
    var now = new Date();
    var hari = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
    var bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

    // Ambil hari, tanggal, bulan, dan tahun
    var namaHari = hari[now.getDay()];
    var tanggal = now.getDate();
    var namaBulan = bulan[now.getMonth()];
    var tahun = now.getFullYear();

    // Format tanggal menjadi "Hari, DD Bulan YYYY"
    var dateString = namaHari + ", " + tanggal + " " + namaBulan + " " + tahun;

    // Ambil jam, menit, dan detik
    var hours = now.getHours();
    var minutes = now.getMinutes();
    var seconds = now.getSeconds();

    // Tambahkan nol di depan jika angka kurang dari 10
    hours = (hours < 10 ? "0" : "") + hours;
    minutes = (minutes < 10 ? "0" : "") + minutes;
    seconds = (seconds < 10 ? "0" : "") + seconds;

    // Format waktu menjadi HH:MM:SS
    var timeString = hours + ":" + minutes + ":" + seconds;

    // Tampilkan waktu dan tanggal pada elemen dengan id
    document.getElementById("clock").innerText = timeString;
    document.getElementById("date").innerText = dateString;
}

// Panggil fungsi updateTime setiap detik
setInterval(updateTime, 1000);