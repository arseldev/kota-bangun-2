<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/frontend/css/navbar.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <nav>
        <div id="logo">
            <img src="https://upload.wikimedia.org/wikipedia/commons/7/7d/Lambang_Kab._Kutai_Kertanegara.png"
                alt="" width="48px">
            <div>
                <h1>Desa Kota Bangun 2</h1>
                <h2>Kab. Kutai Kertanegara</h2>
            </div>
        </div>
        <div id="menu">
            <div class="dropdown">
                <span>Profil Desa</span>
                <i class='bx bx-chevron-right dropdown-icon'></i>
                <ul class="dropdown-content">
                    <li><a href="#">Tentang Desa</a></li>
                    <li><a href="#">Sejarah Desa</a></li>
                    <li><a href="#">Visi Misi</a></li>
                    <li><a href="#">Struktur Organisasi</a></li>
                </ul>
            </div>
            <div class="dropdown">
                <span>Tes</span>
                <i class='bx bx-chevron-right dropdown-icon'></i>
                <ul class="dropdown-content">
                    <li><a href="#">Tentang Desa</a></li>
                    <li><a href="#">Sejarah Desa</a></li>
                    <li><a href="#">Visi Misi</a></li>
                    <li><a href="#">Struktur Organisasi</a></li>
                </ul>
            </div>
            <!-- <ul>
                <li><a href="">Agenda & Kegiatan</a></li>
                <li><a href="">Peta & Demografi</a></li>
                <li><a href="">Produk Unggulan</a></li>
                <li><a href="">Kontak</a></li>
                <i class='bx bx-user'></i>
                <i class='bx bxs-user'></i>
                <i class='bx bxl-facebook-square'></i>
            </ul> -->
        </div>
    </nav>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const dropdown = document.querySelector('.dropdown');
            const dropdownContent = document.querySelector('.dropdown-content');

            dropdown.addEventListener('click', function() {
                dropdownContent.style.display = dropdownContent.style.display === 'block' ? 'none' :
                    'block';

                dropdownContent.style.visibility = dropdownContent.style.visibility === 'visible' ?
                    'hidden' :
                    'visible';
            });

            // Menutup dropdown jika mengklik di luar dropdown
            document.addEventListener('click', function(event) {
                if (!dropdown.contains(event.target)) {
                    dropdownContent.style.display = 'none';
                }
            });
        });
    </script>
</body>

</html>
