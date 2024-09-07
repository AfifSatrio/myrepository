<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laman Pengaduan</title>
    <link rel="stylesheet" href="styles.css"> 
</head>
<body>
    <div class="container">
        <h1>Form Pengaduan</h1>
        <?php if (isset($_GET['success']) && $_GET['success'] === 'true'): ?>
            <div id="pesan-berhasil">
                <span class="icon">✔️</span> Pengaduan berhasil dikirim!
            </div>
            <script>
                setTimeout(() => {
                    const pesanBerhasil = document.getElementById('pesan-berhasil');
                    pesanBerhasil.style.opacity = '0'; 
                    setTimeout(() => {
                        pesanBerhasil.style.display = 'none'; 
                        window.location.href = 'index.php';
                    }, 1000); 
                }, 5000); 
            </script>
        <?php endif; ?>

        <form action="pengaduan.php" method="post">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="nim">NIM:</label>
            <input type="text" id="nim" name="nim" required>

            <label for="jurusan">Jurusan:</label>
            <select id="jurusan" name="jurusan">
                <option value="Administrasi Bisnis">Administrasi Bisnis</option>
                <option value="Keuangan dan Perbankan">Keuangan dan Perbankan</option>
                <option value="Teknologi Informasi">Teknologi Informasi</option>
                <option value="Desain Grafis">Desain Grafis</option>
                <option value="Manajemen Perhotelan">Manajemen Perhotelan</option>
            </select>

            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <select id="jenis_kelamin" name="jenis_kelamin" required>
                <option value="">Pilih Jenis Kelamin</option>
                <option value="L">Laki-Laki</option>
                <option value="P">Perempuan</option>
            </select>

            <label for="pengaduan">Pengaduan:</label>
            <textarea id="pengaduan" name="pengaduan" rows="5" required></textarea>

            <input type="submit" value="Kirim Pengaduan">
        </form>
    </div>
</body>
</html>
