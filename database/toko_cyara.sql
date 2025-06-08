-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jun 2025 pada 21.30
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_cyara`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `foto`, `nama`, `email`) VALUES
(1, 'cyara', 'D04pOFhGeOHM', '11567ChatGPT Image 14 Apr 2025, 07.58.29.png', 'Cyara Afnan', 'cyaraafnan@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `email`
--

CREATE TABLE `email` (
  `id` int(11) NOT NULL,
  `hostmail` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `domain` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `email`
--

INSERT INTO `email` (`id`, `hostmail`, `email`, `password`, `domain`) VALUES
(1, 'mail.djazuli.com', 'ahmaddjazuli@djazuli.com', 'LAMania28', 'Djazuli.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `halaman`
--

CREATE TABLE `halaman` (
  `id` int(11) NOT NULL,
  `halaman` varchar(255) NOT NULL,
  `isi` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `halaman`
--

INSERT INTO `halaman` (`id`, `halaman`, `isi`) VALUES
(1, 'Tentang Kami', '<p>Lakukan tugas Anda dengan senang hati dan gunakan humor Anda di waktu kerja terutama saat sulit dan tegang-tegang, itulah salah satu budaya (fun) kami.</p><p>Religious, Passionate, Tough, Knowledgeable, Fun & Customer Service adalah budaya-budaya yang ada di <a href=\"https://kincaimedia.net\">Kincaimedia.net</a>, dan kami sangat menjunjung tinggi budaya kami dengan cara memberikan yang terbaik bagi pelanggan, diri kita, keluarga, dan masyarakat.</p><p> </p><h2>Visi dan Misi</h2><h3>Visi</h3><p>\"Menjadi sebuah perusahaan kelas dunia dengan semangat pemanfaatan informasi teknologi, dan menjadi kebanggaan bangsa.\"</p><h3>Misi</h3><p>\"Menjadi webstore nomor satu di Indonesia yang menyediakan kelengkapan dan kemudahan belanja, serta memperhatikan dan memberikan pengalaman belanja yang berkesan kepada pelanggan, melalui nilai-nilai delapan dimensi pengalaman.\"</p><p> </p><h2>Sekapur Sirih</h2><p>Sejak awal <a href=\"https://kincaimedia.net\">Kincaimedia.net</a> berdiri, kami bertekad membangun bisnis yang berdaya tahan panjang. Mengutamakan citra merk dengan pelayanan dan menjadikannya bagian dari budaya kerja. Fokus pada pelayanan berarti memberi nilai tambah dalam setiap layanan. Sebab itulah mengapa pelanggan kami menekan tombol\'beli\' dan tetap kembali lagi di kemudian hari.</p><p>Menengok sejenak ke belakang, kami bersyukur fokus pada pelayanan dan \'human touch\' dalam membangun <a href=\"https://kincaimedia.net\">Kincaimedia.net</a>, yang dirumuskan dengan sebuah kalimat sederhana \'Pelayanan Dari Hati\'. Dan sekarang, kalimat ini telah menjadi esensi dalam setiap langkah yang kami lakukan, mudah dicerna tanpa perlu segala embel-embel dan frase-frase yang sulit untuk dipahami dalam melayani pelanggan kami.</p><p>Standar pelayanan kami pun semakin tinggi setiap tahun. Berinovasi dan menyajikan pengalamanan berbelanja yang berkesan, mulai dari produk yang lengkap, harga yang kompetitif, mudah dalam bertransaksi, jaminan purna jual, hingga kejutan-kejutan mengasyikkan untuk setiap pelanggan kami, yang menjadikan belanja di<a href=\"https://kincaimedia.net\">Kincaimedia.net</a> semakin nyaman, baik online maupun offline.</p><p>Untuk teman-teman komunitas <a href=\"https://kincaimedia.net\">Kincaimedia.net</a> yang bersama dengan kami sejak awal perkembangan internet dimulai di Indonesia, kami akan terus perhatikan dan senantiasa mengembangkan banyak fitur yang akan semakin asyik untuk saling bertemu, berbagi, berbincang, belajar, atau sekedar melakukan jual-beli produk. Offline store <a href=\"https://kincaimedia.net\">Kincaimedia.net</a> juga menjadi tempat untuk workshop, tempat berkumpul, dan ngobrol antar komunitas.</p><p>Akhirnya, saya sangat berbahagia <a href=\"https://kincaimedia.net\">Kincaimedia.net</a> dapat berkontribusi untuk negeri ini dan membawa nilai lebih untuk masyarakat Indonesia. Kami akan selalu berusaha dan mendorong diri kami sendiri untuk menjadi salah satu perusahaan berbasis teknologi yang menjadi kebanggaan bangsa Indonesia.</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `ikon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `ikon`) VALUES
(17, 'Pakaian', '1455554374_line-24_icon-icons.com_53306.png'),
(19, 'Komputer dan Gadget', '1458264592_laptop_computer_pc_device_notebook_netbook_internet_icon-icons.com_55334.png'),
(20, 'Alat Musik', 'xylophone_118105.png'),
(21, 'Buku', '1486503771-book-books-education-library-reading-open-book-study_81275.png'),
(22, 'TV dan Elektronik', '1496676738-rounded-high-ultra-colour05-television_84626.png'),
(23, 'Peralatan Dapur', '1486505264-food-fork-kitchen-knife-meanns-restaurant_81404.png'),
(24, 'Peralatan Rumah', 'Home3_37171.png'),
(25, 'Peralatan Mandi', 'bathroom_bathtub_water_bubble_icon_147400.png'),
(26, 'Kecantikan', '002belezaq_120743.png'),
(27, 'Peralatan Tukang', 'postman_94739.png'),
(28, 'Kesehatan', 'pill_medicine_medicines_medical_icon_131306.png'),
(29, 'Olahraga', 'olimpycs_41_icon-icons.com_68599.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjang`
--

CREATE TABLE `keranjang` (
  `id` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `varian` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `extra` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `keranjang`
--

INSERT INTO `keranjang` (`id`, `id_produk`, `jumlah`, `varian`, `id_pelanggan`, `extra`) VALUES
(4, 12, '1', 5, 0, 'Es Jus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `komentar` text NOT NULL,
  `tgl_komentar` datetime NOT NULL,
  `nama` varchar(255) NOT NULL,
  `userip` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'belum dibaca'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_produk`, `komentar`, `tgl_komentar`, `nama`, `userip`, `status`) VALUES
(2, 20, 'baru', '2021-09-23 15:29:46', 'agus', '127.0.0.1', 'belum dibaca'),
(3, 20, 'Alhamdulillah', '2021-09-23 16:15:34', 'agus', '127.0.0.1', 'belum dibaca'),
(4, 20, 'Iya itu aja', '2021-09-30 17:39:45', 'Aris ', '112.215.242.162', 'belum dibaca'),
(5, 20, '@agus ao\r\n', '2021-12-10 14:43:00', 'Admin', '0', 'belum dibaca'),
(6, 44, 'Boleh lihat detail nya', '2022-09-28 22:16:46', 'Agus', '182.1.89.196', 'belum dibaca'),
(7, 38, 'detailnya?', '2022-09-29 14:02:12', 'ahmad', '140.213.218.249', 'belum dibaca'),
(8, 38, '@ahmad silahkan cek ', '2022-09-29 14:09:19', 'Admin', '0', 'belum dibaca');

-- --------------------------------------------------------

--
-- Struktur dari tabel `notif`
--

CREATE TABLE `notif` (
  `id` int(11) NOT NULL,
  `appid` varchar(222) NOT NULL,
  `appkey` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `notif`
--

INSERT INTO `notif` (`id`, `appid`, `appkey`) VALUES
(1, '3c769611-7794-4d0b-9477-412866b32938', 'MTE1Mzg2ZTgtOGFmMS00OGI1LTgyMDgtM2YxNjUzODMzMzI3\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(255) NOT NULL,
  `email_pelanggan` varchar(255) NOT NULL,
  `password_pelanggan` varchar(255) NOT NULL,
  `telepon_pelanggan` varchar(13) NOT NULL,
  `alamat` text NOT NULL,
  `fotoprofil` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'belum'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `email_pelanggan`, `password_pelanggan`, `telepon_pelanggan`, `alamat`, `fotoprofil`, `status`) VALUES
(20, 'agus', 'coba@gmail.com', 'Ck8gNF0=', '0865555665', 'Barat', '', 'aktif'),
(21, 'bako', 'genseindo@gmail.com', 'Wxp9bAFHfOM=', '081212553636', '', '', 'belum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_subkategori` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `harga_produk` varchar(255) NOT NULL,
  `berat_produk` varchar(11) NOT NULL,
  `stok_produk` varchar(255) NOT NULL,
  `deskripsi_produk` longtext NOT NULL,
  `tanggal` datetime NOT NULL,
  `diskon` varchar(255) NOT NULL DEFAULT '0',
  `brand` varchar(255) NOT NULL,
  `terjual` varchar(255) NOT NULL DEFAULT '0',
  `views` varchar(100) NOT NULL DEFAULT '0',
  `url` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `id_kategori`, `id_subkategori`, `nama_produk`, `harga_produk`, `berat_produk`, `stok_produk`, `deskripsi_produk`, `tanggal`, `diskon`, `brand`, `terjual`, `views`, `url`, `slug`) VALUES
(29, 17, 0, 'Ms Daisy Bianca Puff Sleeve Top Blouse Baju Kasual Atasan Wanita Korea - S, cream', '129000', '150', '355', '<p>Ms Daisy Bianca Puff Sleeve Top Blouse Baju Kasual Atasan Wanita Korea<br />\r\n<br />\r\n-Material: Japanese Cotton (dijamin super adem &amp; nyaman, makin di cuci makin lembut)<br />\r\n-Model korean look kekinian ya so cute!<br />\r\n-Ada karet di lengan, dan sleting jepang di belakang<br />\r\n<br />\r\nAvailable in 6 colors:<br />\r\n-pistachio<br />\r\n-soft yellow<br />\r\n-soft pink<br />\r\n-baby blue<br />\r\n-maroon<br />\r\n-cream<br />\r\n-lilac<br />\r\n<br />\r\nSize XS<br />\r\nLingkar dada 92 cm<br />\r\nLingkar Lengan 51<br />\r\nPanjang Tangan 31 cm<br />\r\nPanjang Blouse 57 cm<br />\r\n<br />\r\nSize S<br />\r\nLingkar dada 96 cm<br />\r\nLingkar Lengan 52<br />\r\nPanjang Tangan 31 cm<br />\r\nPanjang Blouse 57 cm<br />\r\n<br />\r\nSize M<br />\r\nLingkar dada 100 cm<br />\r\nLingkar Lengan 53<br />\r\nPanjang Tangan 31 cm<br />\r\nPanjang Blouse 58 cm<br />\r\n<br />\r\nSize L<br />\r\nLingkar dada 104 cm<br />\r\nLingkar Lengan 55<br />\r\nPanjang Tangan 31 cm<br />\r\nPanjang Blouse 58 cm<br />\r\n<br />\r\nSize XL<br />\r\nLingkar dada 108 cm<br />\r\nLingkar Lengan 57<br />\r\nPanjang Tangan 31 cm<br />\r\nPanjang Blouse 59 cm<br />\r\n<br />\r\nSize XXL<br />\r\nLingkar dada 112 cm<br />\r\nLingkar Lengan 58<br />\r\nPanjang Tangan 31 cm<br />\r\nPanjang Blouse 59 cm<br />\r\n<br />\r\nTinggi Model : 170 cm<br />\r\nBB Model : 52 kg<br />\r\nSize Pakaian Model: S<br />\r\n<br />\r\nProduk sudah melalui QC untuk kepuasan kamu dear<br />\r\n<br />\r\nDISCLAIMER!!<br />\r\nMembeli berarti setuju dengan S&amp;K toko.<br />\r\n<br />\r\nTidak terima retur kecuali salah kirim atau ada kesalahan dari seller<br />\r\nBoleh tukar size jika produk yg kalian terima kebesaran/kekecilan selama persediaan masih ada<br />\r\n<br />\r\nSyarat &amp; Ketentuan:<br />\r\n- pengembalian produk maksimal H+3 dr barang diterima<br />\r\n- Harus ada video unboxing yg tidak terputus<br />\r\n-; Barang masih dalam kondisi baru dan belum pernah dicuci (akan dicek oleh team kami terlebih dahulu)<br />\r\n- Ongkir penukaran ditanggung pembeli (bolak-balik) untuk penukaran size<br />\r\n- Belum memberikan rating atas transaksi tersebut<br />\r\n<br />\r\nNotes:<br />\r\n- Foto kami 100% real picture (Foto menggunakan kamera profesional), harap memaklumi perbedaan warna 10-15% karena lighting yang berbeda<br />\r\n- Mohon toleransi 2-3 cm di perbedaan sizing.<br />\r\n<br />\r\nHappy Shopping Daisies â¤ï¸</p>\r\n', '2022-09-26 22:22:05', '0', '', '0', '5', 'https://tokopedia.link/6e57YghDGtb', 'ms-daisy-bianca-puff-sleeve-top-blouse-baju-kasual-atasan-wanita-korea---s-cream'),
(30, 17, 0, 'kemeja batik pria lengan panjang - Mantap, Jumbo', '98.000', '200', '24', '<p>READY BATIK MOTIF TERBARU<br />\r\n-100% Real Pic<br />\r\nBahan Katun halus dan adem<br />\r\nJahitan Rapih<br />\r\nBuat Melengkapi acara Mu<br />\r\nUndangan<br />\r\nBuat Kerja<br />\r\nBuat Seragaman keluarga / Mantu<br />\r\ndll<br />\r\n<br />\r\n&bull;Silakan Di order<br />\r\n<br />\r\nHarga<br />\r\nLaki Lengan panjang135.000<br />\r\nSetara Dengan Hargana.<br />\r\n<br />\r\n(Bukan Kualitas Yg Harga 200ribu)<br />\r\n<br />\r\n<br />\r\nAda Diakon Harga jadi di sistem<br />\r\n.<br />\r\nSize kualifikasi akurat<br />\r\n.<br />\r\nM ld : 98-100cm / Bb45-50kg<br />\r\nL ld : 100-112 cm / Bb50-60kg<br />\r\nXL ld : 112-116cm / Bb60-75kg<br />\r\nXXL Ld : 116-120cm /Bb75-80kg<br />\r\nAda jumbo nya XXXL - L5<br />\r\n<br />\r\nðŸ‘‰TRIMA PESANAN SERAGAMAN<br />\r\n<br />\r\nTANPA furing.</p>\r\n', '2022-09-27 12:30:40', '0', '', '0', '7', 'https://tokopedia.link/ec8eCOIvItb', 'kemeja-batik-pria-lengan-panjang---mantap-jumbo'),
(31, 17, 0, 'Atasan Tenun Kombinasi Wp 132 Putih Blush Blouse Baju kerja Wanita - Abu-Abu muda V1, S', '240000', '250', '222', '<p>Bahan : Tenun + Katun premium<br />\r\n<br />\r\nUkuran S<br />\r\n- Lingkar Dada : 92 cm<br />\r\n- Lingkar Lengan : 34 cm<br />\r\n- Lebar Bahu : 10 cm<br />\r\n- Panjang Tangan : 53 cm<br />\r\n- Panjang Baju : 64 cm<br />\r\n<br />\r\nUkuran : M<br />\r\n-Lingkar dada : 98 cm<br />\r\n-Lingkar lengan : 36 cm<br />\r\n-Lebar Bahu : 11 cm<br />\r\n-Panjang depan: 65 cm<br />\r\n-Panjang Lengan : 53 cm<br />\r\n<br />\r\nUKURAN: L<br />\r\n-Lingkar dada: 106 cm<br />\r\n-Lingkar lengan: 40 cm<br />\r\n-Lebar bahu : 11 cm<br />\r\n-Panjang depan: 66 cm<br />\r\n-Panjang Lengan : 53 cm<br />\r\n<br />\r\nUkuran : XL<br />\r\n- Lingkar dada : 110 cm<br />\r\n- Lingkar Lengan : 44 cm<br />\r\n- Lebar Bahu : 12 cm<br />\r\n- Panjang Lengan : 53 cm<br />\r\n- Panjang Baju : 65 cm<br />\r\n<br />\r\nUkuran : XXL<br />\r\nLingkar dada : 120 cm<br />\r\nLingkar lengan : 48 cm<br />\r\nLebar Bahu : 13 cm<br />\r\nPanjang Lengan : 54 Cm<br />\r\nPanjang baju belakang : 75 cm<br />\r\nPanjang Baju depan : 67 cm<br />\r\n<br />\r\nCATATAN : Tidak menerima perubahan pesanan melalui chat. kami hanya mengirim barang sesui dengan yang di masukan ke keranjang belanja.<br />\r\njika ingin komplain barang WAJIB ada video Unboxing.<br />\r\nmembeli berarti menyetujui.TERIMAKASIH<br />\r\n<br />\r\nNOTES :<br />\r\n- Kemiripan 99% selebih nya efek cahaya<br />\r\n- Toleransi ukuran 1 cm +-<br />\r\n<br />\r\n<br />\r\n<br />\r\nOpen Hour:<br />\r\n<br />\r\nMon-Fri: 09:00 - 17:30<br />\r\nSat: 09:00 - 15:00<br />\r\nSunday/Public Holiday: OFF<br />\r\nChat will be reply during our working hours.<br />\r\nStock produkt real-time (ready stock), yang bisa di klik bisa di beli<br />\r\n<br />\r\nPengiriman setiap hari Mon-Sat<br />\r\nOrder made after 15:00 will be processed on the next working day.<br />\r\n<br />\r\nStock produkt real-time (ready stock), yang bisa di klik bisa di beli<br />\r\n<br />\r\nDisclaimer:<br />\r\n<br />\r\n&gt;&gt; No Return, No Exchange. Produk Sudah melalui QC. Be a smart customer, lebih baik<br />\r\nmembaca deskripsi daripada salah membeli :-)<br />\r\n<br />\r\n&gt;&gt;BATAL 3X BERTURUT akan diblokir<br />\r\n<br />\r\n&gt;&gt;KASIH RATING 3 STAR KE BAWAH AKAN DI BLOKIR, kalo ada keluhan mohon didiskusikan<br />\r\ndahlulu sama admin via chat</p>\r\n', '2022-09-28 16:03:06', '0', '', '0', '4', 'https://tokopedia.link/eyHxqIIuItb', 'atasan-tenun-kombinasi-wp-132-putih-blush-blouse-baju-kerja-wanita---abu-abu-muda-v1-s'),
(32, 17, 0, 'baju tidur wanita, piyama wanita, baju tidur murah MOTIF FLAMBOYAN', '89.900', '300', '2222', '<p>TULIS NAMA MOTIF DI NOTES (CATATAN UNTUK PENJUAL)<br />\r\n<br />\r\nTULIS MOTIF SESUAI YANG ADA PADA GAMBAR, ADA NAMA MOTIF NYA DI GAMBAR<br />\r\n<br />\r\ngeser ke kiri untuk lihat semua foto nya<br />\r\n<br />\r\nREADY SEMUA MOTIF, lngsung order aja<br />\r\n<br />\r\nREADY SEMUA<br />\r\nREADY SEMUA<br />\r\n<br />\r\nTulis nama motif nya.<br />\r\n<br />\r\nKLIK TOKO KAMI UNTUK LIHAT MOTIF BAJU TIDUR LENGKAPNYA<br />\r\n<br />\r\nREADY SEMUA, LANGSUNG ORDER AJA<br />\r\n<br />\r\nModel: lengan pendek + celana panjang<br />\r\nBahan: soft cotton bukan yg kaku2<br />\r\n<br />\r\nBahan super lembut bangeet, serap keringat adem dipakai diruang AC/non AC<br />\r\n-<br />\r\n<br />\r\nAda harga ada kualitas.<br />\r\nBeda bahan beda harga, jangan samakan dengan yang biasa ðŸ˜‰<br />\r\n-<br />\r\n<br />\r\nPiyama Katun:<br />\r\nALL SIZE FIT TO L besar<br />\r\nLD 105 CM mengikuti lekuk tubuh<br />\r\nPjg celana 93cm<br />\r\nLingkar pinggang stretch smpe 102cm<br />\r\n<br />\r\nToko kami menjual:<br />\r\n1. Piyama celana panjang<br />\r\n2. Piyama celana pendek<br />\r\n3. Daster<br />\r\n&nbsp;</p>\r\n', '2022-09-28 16:05:35', '0', '', '0', '2', 'https://tokopedia.link/7rxPty1uItb', 'baju-tidur-wanita-piyama-wanita-baju-tidur-murah-motif-flamboyan'),
(33, 19, 0, 'Lenovo Slim D330 Flex TOUCH N4020 8GB 128GB W10Pro 10.1 GREY - NON UPGRADE', '3549000', '3000', '2222', '<p>SELAMAT DATANG DI LEGION OFFICIAL STORE<br />\r\n<br />\r\nDeskripsi Lenovo Slim D330 Flex 0MID TOUCH N4020 8GB 128GB W10Pro 10.1 GREY<br />\r\nNo. MTM : 82H0000MID<br />\r\n<br />\r\nSpesifikasi unit :<br />\r\n<br />\r\nâ˜‘ Processor : Intel Celeron N4020 (2C / 2T, 1.1 / 2.8GHz, 4MB)<br />\r\nâ˜‘ RAM : 8GB Soldered LPDDR4-2133<br />\r\nâ˜‘ Storage : 128GB eMMC 5.1<br />\r\nâ˜‘ VGA : Intel UHD Graphics 600<br />\r\nâ˜‘ Display : 10.1&quot; HD (1280x800) IPS 300nits Glossy Touch<br />\r\nâ˜‘ Sistem Operasi : Windows 10 Pro 64bit<br />\r\nâ˜‘ Warna : Mineral Grey<br />\r\nâ˜‘ Kamera : Front 2.0MP / Rear 5.0MP<br />\r\nâ˜‘ Audio : Stereo speakers, 1W x2, Dolby Audio Premium<br />\r\n<br />\r\nAntarmuka :<br />\r\n- 1x power connector<br />\r\n- 1x USB-C 3.2 Gen 1<br />\r\n- 1x headphone / microphone combo jack (3.5mm)<br />\r\n- 1x Pogo pin dock connector<br />\r\n- 2x USB 2.0 (on keyboard dock)<br />\r\n<br />\r\nâ˜‘ Keyboard : Detachable, Non backlit<br />\r\nâ˜‘ Bluetooth 4.2<br />\r\nâ˜‘ WLAN: 802.11ac (1x1) Wi-Fi<br />\r\nâ˜‘ Battery : Integrated 39Wh<br />\r\nâ˜‘ Adapter : 45W Round Tip Wall-mount<br />\r\n<br />\r\nâ˜‘ Dimensi : 249 x 178 x 9.5 mm<br />\r\nâ˜‘ Berat : 1.1 KG<br />\r\n<br />\r\nKelengkapan Unit :<br />\r\n- Unit Laptop<br />\r\n- Charger<br />\r\n- Kartu Garansi<br />\r\n- Box / Dus Laptop<br />\r\n<br />\r\nGARANSI RESMI 1 TAHUN LENOVO INDONESIA<br />\r\n<br />\r\nKeterangan :<br />\r\nNON UPGRADE :<br />\r\nUnit dikirim dalam keadaan segel. Pengiriman akan dilayani oleh Tokopedia (DT)<br />\r\nBenefit DT :<br />\r\n- Pengiriman lebih cepat dan terjamin<br />\r\n- Bebas Ongkir<br />\r\n- Claim asuransi full 100% ke Tokopedia<br />\r\n<br />\r\nPLUS PROTECTION:<br />\r\nUnit akan dipasang antigores layar, laminating body dan bisa diupgrade (RAM/SSD/PACKING KAYU) dari toko<br />\r\n<br />\r\nUPGRADE 128+128 :<br />\r\nPenyimpanan akan diupgrade menjadi 256GB (128 GB+128 eMMC)</p>\r\n', '2022-09-28 16:08:27', '0', '', '0', '2', 'https://tokopedia.link/j3pINw2DGtb', 'lenovo-slim-d330-flex-touch-n4020-8gb-128gb-w10pro-101-grey---non-upgrade'),
(34, 19, 0, 'ASUS A416FA-FHD323 i3-10110U 4GB SSD 256GB+ Housing Win11+OHS 14', '5.399.000', '3,500', '222', '<p>Selamat datang di Lapak Terminal Laptop<br />\r\n<br />\r\nKami menyediakan produk Laptop yang sangat cocok menemani aktivitas harian dan kebutuhan anda Kami hadirkan produk :<br />\r\n<br />\r\nLaptop ASUS A416FA-FHD323<br />\r\nDengan spesifikasi sebagai berikut :<br />\r\n- Procc intel Core i3-10110u<br />\r\n- Memory 4GB DDR4<br />\r\n- SSD 256GB PCI-E<br />\r\n- VGA intel Graphic<br />\r\n- NoN DVD<br />\r\n- BLACKLIGHT KEYBOARD<br />\r\n- Wifi + BT 4.0 + HDMI + WebCam HD IR<br />\r\n- Audio jack, USB Type-C, USB Type-A, USB 3.1, USB 2.0, Card Reader Micro SD<br />\r\n- MS Office HOME STUDENT 2021<br />\r\n- Windows 11 Home 64bit Original<br />\r\n- Layar 14 inc FULL HD<br />\r\n- Free Backpack ASUS<br />\r\n- Garansi Resmi 2 tahun ASUS<br />\r\n- Color : SILVER, SLATE GREY<br />\r\n<br />\r\nAYOooo SEGARA KLIK &ldquo;BELI&rdquo; dan miliki produk berkualitas ini Segera&hellip; Persediaan terbatas&hellip;<br />\r\nBelanja di TERMINAL LAPTOP mempunyai banyak kelebihan.<br />\r\n- Melayani dan Menerima eceran dan Grosir<br />\r\n- Fast respon,Pelayanan Cepat,Pengiriman Tepat<br />\r\n- Harga dan Product kami 100% BARU dan BERGARANSI<br />\r\n- selalu mengutamakan quality control sebelum pengiriman<br />\r\n- Dapatkan Harga KHUSUS untuk pengambilan qty Grosir<br />\r\n- Pengiriman 100% AMAN</p>\r\n', '2022-09-28 16:11:17', '0', '', '0', '4', 'https://tokopedia.link/bY90lxDuItb', 'asus-a416fa-fhd323-i3-10110u-4gb-ssd-256gb-housing-win11ohs-14'),
(35, 19, 0, 'Lenovo IdeaPad 3 14ADA05 AMD 3020e 4GB 256GB SSD Win+OHS - Platinum Grey', '4.099.000', '4000', '2222', '<p>Laptop Lenovo Ideapad Slim 3 AMD 3020e 4GB 256GB SSD 14 inch WIN10+OHS ORI<br />\r\n<br />\r\nGARANSI RESMI LENOVO INDONESIA 2 TAHUN<br />\r\n<br />\r\n81W000UQID - Platinum Grey<br />\r\n<br />\r\nAMD 3020e (2C / 2T, 1.2 / 2.6GHz, 1MB L2 / 4MB L3)<br />\r\n4GB SO-DIMM DDR4-2400<br />\r\n256GB SSD M.2 2242 PCIe NVMe 3.0x2<br />\r\n14&quot; HD TN 220nits Anti-glare<br />\r\nIntegrated AMD Radeon Graphics<br />\r\nWindows 10 Home<br />\r\n11ac, 2x2 + BT5.0<br />\r\nCamera 0.3 MP w 2 Array Mic<br />\r\n4-in-1 Card Reader<br />\r\n327.1 x 241 x 19.9 mm<br />\r\n1.6 kg<br />\r\n<br />\r\nStandard Ports:<br />\r\n<br />\r\n1x HDMI 1.4b<br />\r\n1x headphone / microphone combo jack (3.5mm)<br />\r\n1x power connector<br />\r\n1x card reader<br />\r\n1x USB 2.0<br />\r\n2x USB 3.2 Gen 1<br />\r\n<br />\r\n2CELL 35WH<br />\r\n2 Years Warranty Carry in<br />\r\nOperating System<br />\r\nWindows 11 Home 64, English<br />\r\n<br />\r\nBonus: Tas + Office Home and student 2021</p>\r\n', '2022-09-28 16:13:18', '0', '', '0', '1', 'https://tokopedia.link/Uh48kIQvItb', 'lenovo-ideapad-3-14ada05-amd-3020e-4gb-256gb-ssd-winohs---platinum-grey'),
(36, 17, 0, 'Oppo A16 4,64GB 3,32GB Garansi Resmi 3 GB 32 GB Hitam Putih Biru - 3,32 White, Non Bundle', '1.658.000', '500', '222', '<p>Untuk Produk Xiaomi, Vivo, Realme, Oppo kami repack semua yaa, hanya untuk aktivasi, selebihnya dijamin tidak ada yang ditukar/ganti<br />\r\n<br />\r\nTersedia juga aksesoris kompatible dengan produk ini:<br />\r\nAnti Gores: <a href=\"https://www.tokopedia.com/distriponsel/anti-gores-jelly-tempered-glass-hydrogel-xiaomi-samsung-vivo-oppo-real\" rel=\"noopener noreferrer\" target=\"_blank\">https://www.tokopedia.com/distriponsel/anti-gores-jelly-tempered-glass-hydrogel-xiaomi-samsung-vivo-oppo-real</a><br />\r\nTWS: <a href=\"https://www.tokopedia.com/distriponsel/realme-buds-air-pro-garansi-resmi-realme-original-realme-tws\" rel=\"noopener noreferrer\" target=\"_blank\">https://www.tokopedia.com/distriponsel/realme-buds-air-pro-garansi-resmi-realme-original-realme-tws</a><br />\r\nPowerbank: <a href=\"https://www.tokopedia.com/distriponsel/realme-powerbank-power-bank-2i-10000mah-quick-charge-dual-output\" rel=\"noopener noreferrer\" target=\"_blank\">https://www.tokopedia.com/distriponsel/realme-powerbank-power-bank-2i-10000mah-quick-charge-dual-output</a><br />\r\n<br />\r\nPacking yang lebih aman (Opsional, untuk standar packing kami sudah memakai bubble wrap) :<br />\r\nEkstra Bubble: <a href=\"https://www.tokopedia.com/distriponsel/ekstra-bubble-wrap-untuk-packing\" rel=\"noopener noreferrer\" target=\"_blank\">https://www.tokopedia.com/distriponsel/ekstra-bubble-wrap-untuk-packing</a><br />\r\nPacking Kayu: <a href=\"https://www.tokopedia.com/distriponsel/packing-kayu-untuk-handphone\" rel=\"noopener noreferrer\" target=\"_blank\">https://www.tokopedia.com/distriponsel/packing-kayu-untuk-handphone</a><br />\r\n<br />\r\n<br />\r\nMengenai varian:<br />\r\nNon Bundle = Tidak dapat bonus yang seperti digambar<br />\r\nBundle Headset = Dapat bonus headset Pioneer<br />\r\nBundle Powerbank = Dapat bonus Realme Powerbank 2i<br />\r\nBundle Hydrogel = Dapat bonus Anti Gores Hydrogel<br />\r\nBundle Lengkap = Dapat semua bonus yang disebutkan diatas<br />\r\n<br />\r\nTersedia warna:<br />\r\nHitam, Putih, Biru<br />\r\n<br />\r\n<br />\r\nProcessor<br />\r\nMediatek Helio G35<br />\r\nDsiplay<br />\r\n6.52 inci TFT-LCDscreen, HD+ 1600 x 720 resolution, 60Hz Refresh Rate<br />\r\nRAM / ROM<br />\r\n3GB LPDDR4X / 32 GB UFS 2.1 (Expandable up to 256GB)<br />\r\nMain Camera<br />\r\n13MP F/2.2 (main camera) + 2MP F/2.4 (portrait) + 2MP F/2.4 (macro)<br />\r\nFront Camera<br />\r\n8MP F/2.0 (front camera)<br />\r\nUnlock<br />\r\nFace Recognition + Side Fingerprint Unlock<br />\r\nBattery &amp; Charging<br />\r\n5000mAh Battery &amp; 5V2A Charging<br />\r\nColorOS 11.1 based Android 11</p>\r\n', '2022-09-28 16:16:07', '0', '', '0', '4', 'https://tokopedia.link/osSRGZBEGtb', 'oppo-a16-464gb-332gb-garansi-resmi-3-gb-32-gb-hitam-putih-biru---332-white-non-bundle'),
(37, 17, 0, 'Baju kaos distro / Fashion pria / Atasan pria /Fashion terbaru - Hitam, L', '32.500', '200', '222', '<p>Bahan cotton combat 30s<br />\r\nAdem dan nyaman dipakai<br />\r\nUkuran fit to L<br />\r\nPanjang 70cm<br />\r\nLebar 50cm<br />\r\nMotif dan warna sesuai pitc<br />\r\nMotif terbaru dan menarik</p>\r\n', '2022-09-28 17:44:41', '0', '', '0', '7', 'https://tokopedia.link/0ii4oUWuItb', 'baju-kaos-distro--fashion-pria--atasan-pria-fashion-terbaru---hitam-l'),
(38, 19, 0, 'HP Galaxy S22 Ultra Ponsel smartphone 7,5 Inci HD ROM 512GB Android - Hitam, 128GB', '1.080.000', '400', '222', '<p>Spesifikasi:<br />\r\nModel: S22 UItra<br />\r\nPlatform: Android 10.0 3G/4G/5G LTE<br />\r\nSiaga: ekspansi kartu TF dual-standby ganda<br />\r\nWarna: hitam merah putih<br />\r\nMemori: 12GB + 512GB<br />\r\nLayar: Layar definisi tinggi 7.5 inci<br />\r\nKamera: Kamera depan 24MP + 58juta kamera belakang definisi tinggi<br />\r\nFrekuensi: GSM: 800/900/1800/1900, WCDMA: 850/2100<br />\r\nMultifungsi: pengenalan wajah, Wifi SIM Tunggal, GPS, sensor gravitasi, jam alarm, kalender, kalkulator, perekam, perekam video, WAP/MMS/GPRS/, penampil gambar, e-book, jam dunia, flash di bagian belakang kartu tugas , IML di sampul belakang<br />\r\nBahasa: Dukungan multi-bahasa<br />\r\nBaterai: baterai lithium ion 5800Mah<br />\r\n<br />\r\n<br />\r\nQ: What is a stock?<br />\r\nAnswer: Yes. It is available.<br />\r\n<br />\r\nQ: When can I get the goods?<br />\r\nA: We will ship the order within 24 hours after receiving the order. It may arrive in about 3-5 days.<br />\r\n<br />\r\nQ: Does it support COD?<br />\r\nA: Yes, we support cash transfer.<br />\r\n<br />\r\nQ: Is this the real price?<br />\r\nA: Yes, this is the final price. You can also request replacement credentials<br />\r\n<br />\r\ngift<br />\r\n1 x charging adapter<br />\r\n1 x charging cable<br />\r\n1 headset<br />\r\n1 x User Manual<br />\r\n1 x phone case<br />\r\n1 x protective film</p>\r\n', '2022-09-28 20:00:50', '0', '', '0', '17', 'https://tokopedia.link/lJ4rTgqvItb', 'hp-galaxy-s22-ultra-ponsel-smartphone-75-inci-hd-rom-512gb-android---hitam-128gb'),
(39, 19, 0, 'vivo Y22 4/64GB Garansi Resmi 12 Bulan - Starlit Blue', '1.987.990', '300', '2222', '<p>vivo Y22 4/64GB Garansi Resmi 12 Bulan :<br />\r\n<br />\r\nâœ… Mengapa beli di kami :<br />\r\n<br />\r\n1. Produk dijamin 100% ORIGINAL dan BARU<br />\r\n2. Jaminan HARGA TERMURAH dari toko lain<br />\r\n3. Gratis Ongkir hingga 50.000 keseluruh Indonesia<br />\r\n4. Cashback hingga 400.000, chat kami untuk cara klaim<br />\r\n5. Jaminan produk bergaransi RESMI 1 tahun &amp; IMEI terdaftar di KEMENPERIN<br />\r\n7. Garansi uang kembali jika produk hilang di ekspedisi<br />\r\n8. Garansi tukar unit jika produk yang diterima rusak/cacat (wajib video unboxing saat pertama kali produk diterima)<br />\r\n<br />\r\n<br />\r\nðŸ“Tentang Produk :<br />\r\n<br />\r\nProcessor: Helio G85 Gaming Processor<br />\r\nRAM: 4GB+1GB Extended RAM<br />\r\nROM: 64GB (Memori Eksternal 1TB)<br />\r\nBattery: 5000mAh (TYP)<br />\r\nColors: Starlit Blue and Metaverse Green<br />\r\nOperating System: Funtouch OS 12<br />\r\nCharging Power: 18W<br />\r\nMaterial: Glass Look with Crystalline Matte<br />\r\nScreen: 6.55-inch<br />\r\nResolution: 1612x720 (HD+)<br />\r\nType: LCD<br />\r\nTouch Screen: Capacitive multi-touch<br />\r\nBand: 2G GSM, 3G WCDMA, 4G FDD-LTE, 4G TDD-LTE<br />\r\nCard slot: 2 nano SIMS + 1 micro SD<br />\r\nStandby Mode: Dual SIM Dual Standby (DSDS)<br />\r\nCamera: Front 8MP / Rear 50MP + 2MP<br />\r\nAperture<br />\r\nFront f/2.0 (8MP),<br />\r\nRear f/1.8 (50MP) + f/2.4 (2MP)<br />\r\nFlash: Rear flash<br />\r\n<br />\r\nIn the Box:<br />\r\n<br />\r\nDocumentation<br />\r\n<br />\r\nUSB Cable<br />\r\n<br />\r\nUSB Adapter<br />\r\n<br />\r\nSIM Ejector<br />\r\n<br />\r\nPhone Case<br />\r\n<br />\r\nProtective Film<br />\r\n<br />\r\n<br />\r\nHappy Shopping ðŸ˜</p>\r\n', '2022-09-28 20:05:51', '0', '', '0', '1', 'https://tokopedia.link/6faeTTZvItb', 'vivo-y22-464gb-garansi-resmi-12-bulan---starlit-blue'),
(40, 19, 0, 'HP VIVO Y21 RAM 5 ROM 64 GB', '1.905.000', '400', '2222', '<p>HP VIVO Y21A<br />\r\nRAM 4 + 1 GB EXTENDED ROM 64 GB<br />\r\nBATREI 5000 MAH<br />\r\nAL TRIPLE MODE CAMERA<br />\r\n13 MP KAMERA UTAMA<br />\r\nKAMERA DEPAN 8 MP<br />\r\nULTRA FAST SLIDE FINGERPRINT<br />\r\nGARANSI RESMI VIVO</p>\r\n', '2022-09-28 20:08:03', '0', '', '0', '2', 'https://tokopedia.link/4F62TbwvItb', 'hp-vivo-y21-ram-5-rom-64-gb'),
(41, 17, 0, 'sweater hoodie pria original koozo strip jaket cowok cewek terkini - Putih, M', '89.900', '600', '555', '<p>Sweater Hoodie Pria Original Koozo<br />\r\nselamat datang di toko kami produk yang kami jual Sweater Hoodie Pria Original Koozo pria /Wanita terbaru.<br />\r\n&quot;pakaian yang sangat cocok buat Sist/tuan yang selalu ingin terlihat FASHIONABLE dan mengikuti trend kekinian jika mengenakan Sweater Hoodie Pria Original Koozo&quot;<br />\r\nbisa tanyakan dulu ketersediaan stock barang kami sebelum check&quot;out<br />\r\n<br />\r\nBelanja di TOKO Kami Memiliki Banyak Keuntungan<br />\r\n- Bahan cotton fleece tebal<br />\r\n- Fast respon<br />\r\n- Jahitan rapih<br />\r\n- Sablon Rubber<br />\r\n- Free gantungan kunci (selama masih tersedia)<br />\r\n- Kualitas Terjamin 100% Original KOOZO<br />\r\n<br />\r\n&quot;KETERANGAN&quot; Sweater Hoodie Pria Original Koozo bahan lembut tidak Kasar sehingga nyaman di pakai nya,warna aman tidak akan luntur saat di cuci, tidak mudah berbulu,cocok untuk di pakai sehari-hari.<br />\r\n<br />\r\nKETERANGAN ukuran/Size - Lebar dada di &times;2<br />\r\n- M = lebar dada 54cm x panjang 68cm<br />\r\n- L = lebar dada 56cm x panjang 70cm<br />\r\n- XL = lebar dada 58cm x panjang 72cm<br />\r\n-XXL = lebar dada 60cm x panjang 74cm<br />\r\nWARNA = Hitam,Navy,Putih,Maroon dan Hijau Botol<br />\r\n<br />\r\nLebih Hemat 1 Kilo bisa muat untuk 2 Pics<br />\r\n<br />\r\nTOKO buka setiap hari<br />\r\nuntuk pengiriman kami usahakan di lakukan pada hari yang sama dan paling telat H+1 setelah transfer (mohon pengertiannya)<br />\r\nCatatan:<br />\r\n1. Mohon untuk bisa melakukan Video Unboxing (Pembukaan Paket), Foto Penerimaan Produk, Foto Resi dan Label Pembeli saat paket sudah berhasil diterima sehingga jika ada Kerusakan, Kekurangan Produk atau Ketidaksesuaian Produk yang diterima bisa dilakukan validasi melalui kelengkapan tersebut.<br />\r\n<br />\r\n2. Jika tidak ada atau hanya memiliki salah satu dari kelengkapan yang disebutkan, maka segala bentuk komplain yang masuk tidak bisa ditindak lanjuti atau dianggap tidak sah. *kecuali: memang ada kesalahan dari sisi Penjual.<br />\r\n<br />\r\nkami mohon kerja sama nya ya Sist/Tuan.<br />\r\nharap klik terima pesanan apa bila barang sudah sampai.<br />\r\ndan jangan lupa kasih ulasan yang baikðŸ‘Œ ya Sist/Tuan Terimakasih.<br />\r\n&quot;&quot;&quot;&quot;Happy Shoping&quot;&quot;&quot;&quot;&quot;</p>\r\n', '2022-09-28 20:10:11', '0', '', '0', '1', 'https://tokopedia.link/VZyqAIVvItb', 'sweater-hoodie-pria-original-koozo-strip-jaket-cowok-cewek-terkini---putih-m'),
(42, 17, 0, 'FortKlass Switter Pria Lengan Panjang Unisex Kasual Sweater FERDY HITA - Abu-abu', '44.000', '400', '200', '<p>RAEDY STOK !!<br />\r\nBAHAN : BABY TERRY<br />\r\nUKURAN : ALL SIZE FIT TO L<br />\r\nLD TO UP : 102 CM<br />\r\nPANJANG 70 CM<br />\r\nADA KANTONG KANAN KIRI<br />\r\nBISA PAKAI UNTUK SIZE S,M,L<br />\r\n<br />\r\nNOTE :<br />\r\n- PERBANDING FOTO DAN BARANG 95% WARNA BISA LEBIH TERANG ATAU LEBIH GELAP DARO FOTO KARNA BAHAN YG MASUK TIDAK SELALU SAMA PERSIS DARI PERTAMA KALI FOTO<br />\r\n- KLIK WARNA DAN SIZE SESUAI VARIASI YG SUDAH TERSEDIA<br />\r\n- TIDAK DI KENANKAN UNTUK REQUEST WARNA DAN SIZE DI CHAT<br />\r\n- BARANG AKAN KAMI KIRIM SESUAI VARIASI YG DI PILIH PEMBELI BUKAN MELALUI CHAT ATAU CATETAN PEMBELI<br />\r\n- JIKA INGIN ORDER LEBIH DARI 1 PSC SILAKAN MASUKKAN KERANJANG SATU PERSATU TERLEBIH DAHULU<br />\r\n- BARANG YG DI BELI TIDAK BISA DI TUKAR / DI KEMBALIAN DENGAN ALASANA APAPUN KECUALI :<br />\r\n~ KESALAHAN KAMI SAAT KIRIM BARANG<br />\r\n~ BARANG CACAT ATAU REJECT<br />\r\n- HARAP SESUAIKAN DENGAN CHAT YG SUDAH ADA, BILA BARANG KEKECILAN TIDAK BISA DI TUKAR<br />\r\n- MODEL BAJU SLIM FIT COCOK UNTUK PRIA YG MEMILIKI BADAN SLIM ATAU KURUS<br />\r\n- TIDAK COCOK UNTUK PRIA YG BERBADAN GEMUK ATAU PERUT BUNCIT<br />\r\n- PENGIRIMAN SENIEN - SABTU JAM 18.00 WIB LEWAT DARI ITU DI KIRIM BESOK NYA<br />\r\n- PENGIRIMAN MINGGU JAM 13.00 LEWAT DARI ITU DI KIRIM SENIN MALAM</p>\r\n', '2022-09-28 20:14:01', '0', '', '0', '0', 'https://tokopedia.link/edRHbxkvItb', 'fortklass-switter-pria-lengan-panjang-unisex-kasual-sweater-ferdy-hita---abu-abu'),
(43, 17, 0, 'F2 Sweater - Basic Polos Oversize XXL Sweater Big Size Wanita Pria - Mint, M', '39.900', '400', '200', '<p>*Material : Fleece<br />\r\n*Size : M, L, XL, XXL<br />\r\nDetail M : ld ,110 cm ,pj 61 cm, pt 57 cm<br />\r\nL : ld ,113 cm ,pj 68 cm , pt 59 cm<br />\r\nXL : ld 116 cm ,pj 70 cm,pt 60 cm<br />\r\nXXL : Ld 130 cm , Pj 70 cm<br />\r\nToleransi ukuran 1-2cm<br />\r\n*Model : Sweater Basic Polos Unisex (bisa cwo &amp; Cwe)<br />\r\n<br />\r\nKenapa harus belanja di F2_Sweater ??<br />\r\n<br />\r\nKarena Kami menjual produk trend Kekinian dan uptodate dgn harga sngat terjangkau dan sngat cocok digunakan untuk berbagai kegiatan, baik kuliah, kerja, travelling maupun untuk Hangout. Penampilanmu akan menjadi lebih trends fashionable ðŸ˜‰<br />\r\n<br />\r\nINFORMASI TOKO<br />\r\n<br />\r\nâœ”ï¸ Fast Respond And Akurat<br />\r\nâœ”ï¸ Ready stock bukan Po Po an<br />\r\nâœ”ï¸ Barang 100% REALPICT<br />\r\nâœ”ï¸mohon pilih Variasi warna jika barang yang dipesan memiliki lebih dari satu warna<br />\r\nâœ”ï¸ Silahkan kirim pesan jika ada hal lain yang ingin di tanyakan<br />\r\nâœ”ï¸ Pengiriman setiap hari Senin - Sabtu<br />\r\nâœ”ï¸ Hari Minggu dan libur nasional tidak ada pengiriman tapi msih tetap bisa order seperti biasa<br />\r\nâœ”ï¸Jam Kerja 09.00-18.00 WIB<br />\r\nâœ”ï¸ Pesanan masuk lebih dari jam 17.00 akan diproses hari berikutnya<br />\r\nâœ”ï¸Jgn lupa mampir ke Etalase kita ya karena disitu bnyak sweater kece dan hrga murah dgn bahan berkualitas ðŸ¤—<br />\r\nâœ”ï¸ Jika Pesanan sudah sampai segera klik TERIMA ya Kak dan jangan lupa tinggalkan jejak di toko kami dgn cara beri Bintang 5 nya ðŸ¥°ðŸ¤—<br />\r\nâœ”ï¸ Droopship Aman ( Bisa Resi Otomatis )<br />\r\n<br />\r\nNOTE :<br />\r\nReturn / complain bisa chat baik2 tanpa perlu memberi bintang 1, 2 &amp; 3 / Riview jelek ( krna kita bertanggung jwb)&nbsp;<br />\r\n<br />\r\nTerima kasih</p>\r\n', '2022-09-28 20:16:06', '0', '', '0', '0', 'https://tokopedia.link/mGawXB7uItb', 'f2-sweater---basic-polos-oversize-xxl-sweater-big-size-wanita-pria---mint-m'),
(44, 17, 0, 'Kaos OverSize Wanita Basic Top Kaos Polos Lengan 3/4 /Baju OverSized - Hitam', '64.300', '400', '200', '<p>T-SHIRT Basic Oversized Top<br />\r\nHijab Friendly<br />\r\n<br />\r\nDengan 14 varian warna yang sangat cocok untuk dimiliki sekarang juga !! kapan lagi dapat kualitas sebagus ini dengan harga yg sangat terjangkau.<br />\r\nyuk cek out sekarang kk , jangan cuman 1 cek out nya kk ya, nanti nyesel lho kk, 1 kg muat 4 pcs ya kk happy shoping ðŸ˜˜<br />\r\n<br />\r\nMaterial: Cotton Combed<br />\r\n<br />\r\nDetail Size:<br />\r\nPanjang Baju 80cm<br />\r\nLingkar Dada 125cm<br />\r\nPanjang Slit 20cm<br />\r\n<br />\r\n- Bahan PREMIUM QUALITY<br />\r\n- Tidak tipis/menerawang<br />\r\n- Bahan adem tidak gerah<br />\r\n- Menyerap Keringat<br />\r\n<br />\r\n100% REAL PICT<br />\r\n<br />\r\nTersedia Warna:<br />\r\n- Dusty<br />\r\n- Beige<br />\r\n- Steel Blue<br />\r\n- Plump<br />\r\n- Navy<br />\r\n- Army<br />\r\n- Hitam<br />\r\n- Cinamon<br />\r\n- Grey<br />\r\n- Olive<br />\r\n- Mineral Green<br />\r\n- Mustard<br />\r\n- Almond<br />\r\n- Dusty Lilac (NEW)<br />\r\n<br />\r\nWAJIB DIBACA SEBELUM MEMBELI<br />\r\n- Baca detail Size dan Bahan<br />\r\n- Toleransi 1-2cm dari size tertera karena proses cutting<br />\r\n- Warna tidak bisa 100% sama karena adanya faktor pencahayaan, efek serta layar hp/device masing-masing<br />\r\n- KOMPLAIN WAJIB ADA VIDEO UNBOXING (Komplain barang maksimal 24 jam setelah barang diterima)<br />\r\n- Kesalahan pembelian karena tidak membaca deskripsi produk BUKAN TANGGUNG JAWAB SELLER, mohon bijak sebelum membeli ðŸ¤—<br />\r\n<br />\r\nHappy Shopping âœ¨</p>\r\n', '2022-09-28 20:19:22', '0', '', '0', '3', 'https://tokopedia.link/fxFCmlCvItb', 'kaos-oversize-wanita-basic-top-kaos-polos-lengan-34-baju-oversized---hitam'),
(45, 17, 0, 'FortKlass Switter Pria Lengan Panjang Unisex Kasual Sweater Cowok MANN - Navy', '31.000', '380', '2222', '<p>RAEDY STOK !!<br />\r\nBAHAN : BABY TERRY<br />\r\nUKURAN : ALL SIZE FIT TO L<br />\r\nLD TO UP : 102CM<br />\r\nPANJANG 70CM<br />\r\nBISA PAKAI UNTUK SIZE S,M,L<br />\r\n<br />\r\n- NOTE :<br />\r\n~ PERBANDINGAN FOTO DENGAN BARANG 95% KARNA KAMI MENGGUNAKAN BAHAN BABY TERRY,<br />\r\n~ MOHON UNTUK TIDAK REQUEST WARNA MELALUI CHAT<br />\r\n~ SILAKAN PILIH WARNA SESUAI DI VARIASI<br />\r\n~ BARANG YG DI BELI TIDAK BISA DI RETUR DENGAN ALASAN APAPUN KECUALI :<br />\r\n~ BARANG CACAT ( SOBEK )<br />\r\n~ KESALAHAN DARI KAMI BILA SALAH KIRIM BARANG ( KERTAS ALAMAT JANGAN DI BUNGA )<br />\r\n~ UNTUK UKURAN HARAP SESUAIKAN DENGAN SIZE CHAT YG SUDAH ADA, BILA BARANG KEKECILAN TIDAK BISA DI TUKAR<br />\r\n~ MODEL BAJU SLIM FIT COCOK UNTUK PRIA YANG MEMILIKI BADAN SLIM ATAU KURUS<br />\r\n~ TIDAK COCOK UNTUK PRIA YG BERBADAN GEMUK ATAU PERUT BUNCIT<br />\r\n~ PENGIRIMAN SENIN-SABTU JAM 18.00 LEWAT DARI ITU DI KIRIM BESOK<br />\r\n~ PENGIRIMAN MINGGU JAM 13.00 LEWAT DARI ITU DI KIRIM SENIN</p>\r\n', '2022-09-29 14:08:12', '0', '', '0', '5', 'https://tokopedia.link/JvVBEhdvItb', 'fortklass-switter-pria-lengan-panjang-unisex-kasual-sweater-cowok-mann---navy'),
(46, 17, 0, 'Baju renang muslimah dewasa - Z14, M', '45.500', '300', '2222', '<p>SIZE:<br />\r\n*M ----untuk berat bada 40 -48 kg<br />\r\n*L ---- untuk berat badan 49-54 kg<br />\r\n*XL ---untuk berat badan 55-63 kg<br />\r\n*XXL -- untuk berat badan 64 - 72 kg<br />\r\n<br />\r\nKeterangan (CM) M L XL XXL<br />\r\nLingkar Dada 76 78 80 82<br />\r\nLingkar Pinggang 64 68 70 72<br />\r\nLingkar Pinggul 72 78 80 82<br />\r\nPanjang Tangan 50 51 52 53<br />\r\nPanjang Celana<br />\r\ndetail sebelum melar ( estimasi melar 10-15 cm)<br />\r\nISI:<br />\r\nJILBAB + BAJU(Didalam baju sudah tersedia Celana Dalam)+Celana panjang<br />\r\n-Bahan spandex licra<br />\r\n-Memakai Zip Jepang<br />\r\n-Elastis/flexible<br />\r\n-Jahitan kuat dan Rapi<br />\r\n-good produk, good Quality<br />\r\nDalam paket isi: kerudung+baju(sudah ada celana segitiganya.)+ celana panjang,happy shopping</p>\r\n', '2022-09-29 14:30:18', '0', '', '0', '2', 'https://tokopedia.link/bPpZT5MqItb', 'baju-renang-muslimah-dewasa---z14-m'),
(47, 24, 0, 'Wallpaper Foam 3D Stiker Dinding Batik Kristal Dekorasi Rumah Kamar - BATIK 35X35', '3.030', '60', '22222', '<p>*NEW UPDATE REAL STOK JUNI 2022*<br />\r\n~ ~ BIG SALE FINAL COLLECTION ~ ~<br />\r\n<br />\r\n<br />\r\nSpesifikasi :<br />\r\n- Size : 70 x 70 cm / lembar<br />\r\n- Bahan foam dengan tekstur &amp; berbahan foam<br />\r\n- Ketebalan: +/- 3mm<br />\r\n<br />\r\n- Tekstur 3D yang nyata dan jelas, busa lembut, aman untuk mencegah anak-anak dari benturan<br />\r\n- Sudah ada lemnya, jadi tinggal tempel dan bebas di kreasikan<br />\r\n- Lentur dan mudah di potong<br />\r\n- Permukaan emboss/timbul, efek bata alami dan modern<br />\r\n- Tahan lama<br />\r\n- Bahan kedap suara<br />\r\n- Waterproof / anti air<br />\r\n- Mudah dibersihkan bila kotor dengan menggunakan kain basah<br />\r\n<br />\r\nCara pemasangan :<br />\r\n1. Ukur area pemasangan<br />\r\n2. Potong foam wallpaper sesuai dengan ukuran<br />\r\n3. Buka lapisan pembungkus<br />\r\n4. Pasangkan foam wallpaper ke area yang ingin di pasang, tempel perlahan, sambil diusap</p>\r\n', '2022-09-30 23:52:21', '0', '', '0', '2', 'https://tokopedia.link/rnP02TSqKtb', 'wallpaper-foam-3d-stiker-dinding-batik-kristal-dekorasi-rumah-kamar---batik-35x35'),
(48, 17, 0, 'Kaos Vneck Polos Aadeem / Kaos Polos Wanita Vneck Cotton Bamboo - Putih, XS', '69.000', '250', '22222', '<p>Basic Tshirt Vneck Lengan Pendek Aadeem<br />\r\n<br />\r\nTshirt Aadeem memiliki desain sederhana yang menampilkan kesan elegan dan nyaman saat dipakai.<br />\r\nBerbahan dasar material cotton bamboo premium yang memiliki banyak keunggulan dibandingkan kaos lain pada umumnya, yaitu :<br />\r\nâœ“ Material bahan yang ramah lingkungan, juga mengandung zat &ldquo;Penny Quinone&rdquo; yang berfungsi sebagai Antibacterial alami yang dapat mengahalau bakteri dan bau.<br />\r\nâœ“ Terdapat pori-pori guna untuk mensirkulasi udara dengan baik.<br />\r\nâœ“ Serat bambu diyakini mampu memberikan perlindungan dari sinar UV hingga 97,5%. Sehingga akan tetap terasa adem meskipun cuaca panas sekalipun.<br />\r\nâœ“ Serat bambu juga dapat menstabilkan dan menyesuaikan suhu badan ketika berada di cuaca tertentu.<br />\r\nâœ“ Memiliki serat yang lembut dan ringan, aman untuk semua jenis kulit dan tidak akan menyebabkan alergi pada kulit.<br />\r\nâœ“ Mampu menyerap keringat dengan baik dan menguapkannya lebih cepat sehingga lebih cepat kering.<br />\r\n<br />\r\n~ Pola : Reguler Fit<br />\r\n~ Packaging : Pouch Eksklusif Aadeem<br />\r\n~ Free 1pcs masker kain untuk setiap pembelian produk aadeem.<br />\r\n~ Tersedia 23 Pilihan Warna<br />\r\n~ Size (XS &ndash; XL)<br />\r\n<br />\r\n(UNTUK BIG SIZE XXL - 5XL TERSEDIA DI ETALASE LAIN)<br />\r\n(SIZE CHART &amp; WARNA DAPAT KAMU LIHAT DI GAMBAR SLIDE KE BERIKUTNYA)<br />\r\n<br />\r\n- Jam operasional : Senin-Jumat jam 09.00-16.30 &amp; Sabtu jam 09.00-14.30. (Order akan dikirim pada hari yang sama jika masuk pada jam operasional.) - Minggu &amp; tanggal merah libur. (Order yg masuk Sabtu setelah jam 14.00 dikirim Senin.)<br />\r\n(*) PRODUK BERGARANSI : Silahkan ajukan return barang dan akan kami GANTI BARU atau 100% UANG KEMBALI dan ongkos kirim pengembalian barang kami yang tanggung. Jika murni terdapat kesalahan teknis pada toko seperti salah kirim dan cacat produksi.<br />\r\n(*) Siapkan VIDEO UNBOXING (Rekaman saat membuka paket), sebagai tanda antisipasi jika hendak mengajukkan komplain/return barang.<br />\r\n(*) Syarat dan ketentuan berlaku.<br />\r\n<br />\r\nKAMI MENJAMIN KUALITAS PRODUK TERBAIK UNTUK KAMU YANG ISTIMEWA DENGAN HARGA YANG TERJANGKAU.</p>\r\n', '2022-09-30 23:54:37', '0', '', '0', '1', 'https://tokopedia.link/IfVBrRAuKtb', 'kaos-vneck-polos-aadeem--kaos-polos-wanita-vneck-cotton-bamboo---putih-xs'),
(49, 17, 0, 'Home dress Wanita Katun Bambu / Dress Wanita - Hitam, XL', '139.000', '300', '2222', '<p>Salah satu Koleksi terbaik dari Aadeem yang menyeimbangkan antara fungsi dan desain untuk kenyamanan aktivitas keseharian kamu.<br />\r\n<br />\r\nHomdress Aadeem basic yang simple dengan bahan yang lembut dan dingin bikin kamu betah dan nyaman saat aktivitas dirumah. Dengan model kerah Vneck dan dilengkapi saku di pinggang kanan dan kiri.<br />\r\nNyaman digunakan serta cocok dipakai sehari-hari untuk beragam aktivitas.<br />\r\n<br />\r\nBerbahan katun bambu premium yang memiliki banyak keunggulan dibandingkan bahan katun lainnya, diantaranya :<br />\r\nâœ“ lembut dan dingin membuatmu tidak akan khawatir gerah.<br />\r\nâœ“ Memiliki antibacterial alami menjadikannya anti bau sehingga kamu tetap merasa fresh.<br />\r\nâœ“ serat bambu diyakini mampu memberikan perlindungan dari sinar UV hingga 97,5%.<br />\r\nâœ“ Aman untuk semua jenis kulit, tidak menyebabkan alergi pada kulit sensitif.<br />\r\nâœ“ Serat dengan banyak pori-pori sehingga menjadi breathable yang mensirkulasi udara dengan baik.<br />\r\nâœ“ Mampu menyerap keringat dengan baik dan menguapkannya lebih cepat (cepat kering).<br />\r\n<br />\r\nMaterial : Bamboo Cotton Premium<br />\r\nPola : Relax Fit<br />\r\nPackaging : Pouch Eksklusif Aadeem<br />\r\n)* Free 1pcs masker kain untuk setiap pembelian produk aadeem.<br />\r\n<br />\r\n*Tersedia 7 Pilihan Warna<br />\r\n- Hitam<br />\r\n- Mustard<br />\r\n- Dongker<br />\r\n- Army<br />\r\n- Abu Tua<br />\r\n- Merah Ati<br />\r\n- Cokelat<br />\r\n<br />\r\n<br />\r\n*Tersedia size M &ndash; 2XL<br />\r\nSize Chart [Panjang x Lebar] &gt;&gt;&gt; bisa kamu cek di foto yah ðŸ˜Š<br />\r\n<br />\r\n- Jam operasional : Senin-Jumat jam 09.00-16.30 &amp; Sabtu jam 09.00-14.30. (Order akan dikirim pada hari yang sama jika masuk pada jam operasional.) - Minggu &amp; tanggal merah libur. (Order yg masuk Sabtu setelah jam 14.00 dikirim Senin.)<br />\r\n(*) PRODUK BERGARANSI : Silahkan ajukan return barang dan akan kami GANTI BARU atau 100% UANG KEMBALI dan ongkos kirim pengembalian barang kami yang tanggung. Jika murni terdapat kesalahan teknis pada toko seperti salah kirim dan cacat produksi.<br />\r\n(*) Siapkan VIDEO UNBOXING (Rekaman saat membuka paket), sebagai tanda antisipasi jika hendak mengajukkan komplain/return barang.</p>\r\n', '2022-09-30 23:56:42', '0', '', '0', '1', 'https://tokopedia.link/ysU2lTDuKtb', 'home-dress-wanita-katun-bambu--dress-wanita---hitam-xl'),
(50, 29, 0, 'Sepatu bola specs original VIENTO 19 FG Silver red new 2021 - Silver sol Gold, 42', '60.000', '982 ', '22222', '<p>-barang baru dengan desain modern dan di jamin kualitas serta keaslian nya sesuai gambar yang di harapkan konsumen<br />\r\n<br />\r\n- Barang boleh sama tapi kualitas kami usahakan berbeda. Karena salah satu tujuan kami memberikan kepuasan dan kenyaman kepada customer agar di antar kita penuh dengan keberkahan.<br />\r\n<br />\r\n- melayani para buyer 24 jam, dengan respon yang cepat dan kejelasan dalam menjelaskan apa yang di tanyakan konsumen.<br />\r\n<br />\r\n- lewat dari jam 17.00 transaksi, pengiriman di alihkan besok nya sehingga untuk para konsumen kesediaan nya untuk bersabar.<br />\r\n<br />\r\n<br />\r\n- Barang kami kirim hari itu juga setelah masuk nya transaksi para buyer dan tidak usah takut jikalau barang belum di kirim ketika malam hari, karena JNE tempat kami mengirimkan barang, karena buka 24 jam setiap hari nya<br />\r\n<br />\r\n- Tanggal merah dan hari minggu tidak ada pengiriman. karena menyesuaikan dengan kebijakan dari pemerintah.<br />\r\n<br />\r\n- kami pun sangat mengharapkan kritikan dan saran dari para buyer untuk meningkatkan kualitas kinerja dan quality kontrol yang baik. agar kita selalu bisa memuaskan dan menjaga kualitas barang untuk para buyer.<br />\r\n<br />\r\n<br />\r\n1. Retur tanpa video unboxing tidak akan kami terima<br />\r\n2. Sertakan alternatif model/warna untu antisipasi barang kosong<br />\r\n3. Jika tidak ada respon akan kami kirim stok yang ada<br />\r\n4.Cacat minor tidak kami terima<br />\r\n5.jika kebesaran/kekecilan boleh di tukar (tidak melalui pengembalian) dan ongkir ditanggung oleh pembeli<br />\r\n6. Tidak Termasuk Box<br />\r\n7. Membeli=setuju<br />\r\n<br />\r\nhappy shopping^,^<br />\r\namanah, jujur dan terpercaya adalah moto kami.<br />\r\n<br />\r\nterima kasih...</p>\r\n', '2022-09-30 23:58:52', '0', '', '0', '0', 'https://tokopedia.link/rXrEFlHuKtb', 'sepatu-bola-specs-original-viento-19-fg-silver-red-new-2021---silver-sol-gold-42'),
(51, 29, 0, '(paket komplit) Sepatu Bola Nike Mercurial CR7 boots warna hijau GO - 43, Sepatu Saja', '90.000', '300', '2222', '<p>Sepatu Bola Nike Mercurial Boots<br />\r\nSize 39-43<br />\r\n<br />\r\nPaket: Sepatu, Tas, Kaoskaki, Deker, Jersey<br />\r\n<br />\r\nBarang bagus berkualitas<br />\r\n100% real picture<br />\r\nNyaman dipakai dikaki<br />\r\n<br />\r\nTanyakan stok dan ukuran sebelum beli</p>\r\n', '2022-10-01 00:00:59', '0', '', '0', '0', 'https://tokopedia.link/ibJU0RKuKtb', 'paket-komplit-sepatu-bola-nike-mercurial-cr7-boots-warna-hijau-go---43-sepatu-saja'),
(52, 29, 0, 'Sepatu Bola Nike Mercurial X Kualitas Grad Ori Awet dan Nyaman - Tosca, 43', '149.000', '400', '2222', '<p>Type : Sepatu Bola Nike Mercurial Terbaru<br />\r\n<br />\r\nUKURAN SEPATU 38-43<br />\r\n<br />\r\nSepatu 100% baru<br />\r\nSepatu 100% sesuai dengan gambar<br />\r\nMade In Vietnam<br />\r\n<br />\r\nKualitas bahan Piyu Full Hembos, Sol Bening, Sol mangkok, kuat, lentur, menggunakan lapisan dalam yg empuk, Bahan Lembut, mudah dimasukkan, lem juga rapi, dan Nyaman pada saat di pakai. Tingkat kepuasan pembeli di bintang lima dan sangat puas.<br />\r\n<br />\r\nHarga sudah sama Box<br />\r\nWarna dan Ukuran Ditulis di kolom catatan untuk Penjual atau Chat Kami terlebih dahulu.<br />\r\n<br />\r\nUntuk Harga Grosir atau Team Lebih Murah. Informasi Grosir Silakan Chat Kami.</p>\r\n', '2022-10-01 00:03:25', '0', '', '0', '2', 'https://tokopedia.link/3NAMw5MuKtb', 'sepatu-bola-nike-mercurial-x-kualitas-grad-ori-awet-dan-nyaman---tosca-43'),
(53, 19, 0, 'Akun FF', '7000', '0', '1', '<p>testing</p>\r\n', '2025-06-08 07:41:33', '0', '', '0', '1', 'https://harlequintopup.com/', 'akun-ff');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk_foto`
--

CREATE TABLE `produk_foto` (
  `id_produk_foto` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `nama_produk_foto` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `produk_foto`
--

INSERT INTO `produk_foto` (`id_produk_foto`, `id_produk`, `nama_produk_foto`, `url`) VALUES
(51, 30, '6462', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/10/16/0f2ee12f-2c61-458d-b18d-cd5d9550b194.jpg'),
(52, 30, '73963', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/10/16/7e290eff-6cce-4502-a21d-2b3b65c27453.jpg'),
(53, 30, '65439', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/9/13/89ce759a-06d3-4539-b94f-2ee7308968fa.jpg'),
(54, 29, '60997', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/10/21/4f8a8b1f-5d01-4f9e-9af7-bf757ba1d6a8.jpg'),
(55, 29, '82008', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/2/13/61f200b6-6386-449a-ae0a-cd26d23b609c.jpg'),
(56, 29, '31221', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/2/13/0e60d1f9-3cf5-498d-817b-617f8fddcb19.jpg'),
(57, 31, '6388', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/8/21/98bd51b2-dece-4f2b-9d24-a8a643ce31da.jpg'),
(58, 31, '33838', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/8/21/1af26766-fcd8-43c3-a079-4cf6cf78463b.jpg'),
(59, 31, '80677', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/8/21/b42d0020-adb8-4024-8f5c-6a7e1d9e251e.jpg'),
(60, 31, '7510', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/1/8/7b6ba0d4-1796-407f-bc69-1f8e91137cf7.jpg'),
(61, 32, '41800', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/8/10/22d0bb24-80c2-47ed-b4ff-ee8057dedf66.jpg'),
(62, 32, '53359', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/7/25/6475961b-37a6-47ec-bd18-0c5525134bab.jpg'),
(63, 32, '51233', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/7/21/4db23a36-ca5c-4de0-b0f0-919bfabf5b8f.jpg'),
(64, 33, '73430', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/7/9/3a31c35f-f8b6-435c-b7ec-669382f4b5a5.jpg'),
(65, 33, '62217', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/7/9/d62df744-f03c-4644-b986-160eacba6112.jpg'),
(66, 33, '53469', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/7/9/449747b7-4ffe-4f52-a7df-3691df41fd23.jpg'),
(67, 33, '5481', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/7/9/40a7a8e6-1a51-4a41-b928-eef3b674f1f1.jpg'),
(68, 34, '40872', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/7/15/2b2291d0-2b04-4a5d-86b8-e0a94e0da42c.jpg'),
(69, 34, '48122', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/3/6/602af692-97f2-4f57-92b6-3ca8c4989d5e.jpg'),
(70, 34, '15798', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/3/6/ed6b6d29-6847-4317-9bef-515c7b5bc60f.jpg'),
(71, 34, '5968', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/3/6/458bc9f1-2767-4687-ada8-b1b44244be1e.jpg'),
(72, 35, '58472', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/12/17/1d19e662-55f1-4e91-a929-a6ae8ee78ab3.jpg'),
(73, 35, '5484', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/12/17/cd3d6f36-7843-4c36-a06e-c2dab6e2d408.jpg'),
(74, 35, '37028', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/12/17/c09e8fb9-7857-4f28-8904-537795d56e9d.jpg'),
(75, 35, '36596', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/12/17/c680ce98-0043-41f2-9c3a-18daff8536aa.jpg'),
(76, 36, '394', 'https://images.tokopedia.net/img/cache/900/hDjmkQ/2021/12/9/fa8674ae-3ef0-4446-b0a6-1ed8034808f2.jpg'),
(79, 37, '18001', 'https://images.tokopedia.net/img/cache/900/product-1/2020/6/26/8933503/8933503_d45c5434-317b-4762-bc84-af8de634eec9_1249_1249.jpg'),
(80, 38, '28906', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/7/14/4d396bd3-0327-4325-a438-e86ec1854821.jpg'),
(81, 38, '73400', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/7/14/c641e278-5908-40ee-a0e8-34cc91a9109f.jpg'),
(82, 38, '46128', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/7/14/a0836a6f-3a85-4309-9381-b3d43565cf44.jpg'),
(83, 39, '67786', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/9/24/637c9233-10e9-42ef-b4ac-0e3bb8232d5d.jpg'),
(84, 39, '75543', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/9/3/f791e128-2081-4554-be90-4007a242f505.jpg'),
(85, 39, '23865', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/9/3/4141a188-a074-44d8-b15b-86094bd13eaf.jpg'),
(86, 40, '52692', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/5/7/ed99a3ed-5a41-4f12-90ca-c9eaa27c0e8e.jpg'),
(87, 40, '72434', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/9/22/f9705f8f-f60d-4579-8113-be0ca7b2e85f.jpg'),
(88, 40, '82018', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/9/22/007cdab8-aef8-4aa3-8e8d-d5c1881f8c1d.jpg'),
(89, 41, '13219', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/10/25/fa948076-dabb-4d49-b1d6-82de2a8e9655.png'),
(90, 41, '12857', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/4/30/efdd0003-dc34-4060-88fc-4b8aeef7bfb8.jpg'),
(91, 41, '23231', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/4/30/d280f0a3-3fcd-49c7-982a-696209fbff6a.jpg'),
(92, 42, '52916', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/9/6/7f673459-4e45-4b64-94a3-8006a9f77dcf.jpg'),
(93, 42, '67924', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/12/25/11ac1241-b060-4f46-9a93-1f5e2ada2c7a.jpg'),
(94, 42, '10904', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/12/25/25fa458f-fd45-43ee-87aa-9acc2224ea10.jpg'),
(95, 43, '31268', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/11/5/024dfe68-250d-47cc-bc19-d20f496372a4.jpg'),
(96, 43, '52469', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/11/5/2a3d3c6f-e541-4bd2-89df-267efccbe38d.jpg'),
(97, 43, '22768', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/11/5/104f5e4c-dd5c-4187-9c00-1fc190172ba6.jpg'),
(98, 44, '22044', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/2/19/5ea02146-6c66-43cb-a779-68851cf516d7.jpg'),
(99, 44, '99867', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/2/19/a79399ac-7f00-4815-be3f-21d4fe6f1431.jpg'),
(100, 44, '47030', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/2/19/b65ca3c0-866e-451e-a996-c38dffebb5bf.jpg'),
(101, 45, '73803', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/9/13/0284c012-a1f5-4a26-8b79-14fae6692d52.jpg'),
(102, 45, '76601', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/3/10/b0c7dc09-a8c4-402c-b131-9fbfe04f3a1b.jpg'),
(103, 45, '57963', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/3/10/edc8cd9f-0127-4059-89b7-1234aaac3dff.jpg'),
(104, 46, '58861', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/10/10/5a5e6156-54dc-4c77-953e-b20310969306.jpg'),
(105, 46, '42997', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/4/16/6cf61a08-4411-4d2d-b11f-0d2efceb51c2.jpg'),
(106, 46, '51246', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/4/16/5436a104-cf91-4983-83c9-e31f68556023.jpg'),
(107, 47, '79571', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/3/12/17095c47-5bc9-4a6a-ac3a-4509c345da61.png'),
(108, 47, '78735', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/3/5/78e457f3-cf8d-40b6-87ad-dc0c3a7cae56.jpg'),
(109, 47, '20703', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/3/5/9a154b81-85bf-4b19-b91f-5537466f9b83.jpg'),
(110, 48, '50713', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/11/3/55703a50-9247-49a2-a3ea-e86d1c59db47.jpg'),
(111, 48, '29571', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/9/23/7e160fd6-cfc2-4e70-b70b-a39639a0f9b3.jpg'),
(112, 48, '5561', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/11/3/3e7c1b06-bd62-4eb4-8d3c-4b0cfb95fdcb.jpg'),
(113, 49, '93929', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/10/2/d4f1de1a-39ab-4e2b-a36c-6e97c9659531.jpg'),
(114, 49, '18676', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/8/27/561326d5-bafc-4ec8-a593-8bacd16ab123.jpg'),
(115, 49, '48151', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/9/23/0323feac-929e-4ba0-b7bf-904ce82f3f7c.png'),
(116, 50, '20941', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/3/25/6ad41483-7cff-41ee-9645-90b1c0f7d2dc.jpg'),
(117, 50, '96901', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/3/25/3c2fc4dc-9027-4721-811e-b3f3090514c8.jpg'),
(118, 50, '33629', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/3/25/2d282765-ee1e-4bb1-a9a9-3d3b3ef5c001.jpg'),
(119, 51, '35591', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2020/11/22/607e0fb4-e295-4718-a50c-8bbe623a4391.jpg'),
(120, 51, '67290', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2020/11/22/8eb05d25-92d7-4d88-a36d-9d4723718da1.jpg'),
(121, 51, '96993', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2020/11/22/5ed65bf0-691e-426a-8435-bbe9548ddef8.jpg'),
(122, 52, '87021', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/3/25/2b6b06ca-800a-46c0-b9b2-86bc0a0d1eb5.jpg'),
(123, 52, '82808', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2020/7/27/a8cdd693-3f86-4131-9072-05bad1011d07.jpg'),
(124, 52, '94369', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2020/9/25/d0564f99-42ce-4741-a1d9-16c72f56d028.jpg'),
(125, 53, '13517ChatGPT Image 2 Jun 2025, 10.46.15.png', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinces`
--

CREATE TABLE `provinces` (
  `id` char(2) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `provinces`
--

INSERT INTO `provinces` (`id`, `name`) VALUES
('11', 'ACEH'),
('12', 'SUMATERA UTARA'),
('13', 'SUMATERA BARAT'),
('14', 'RIAU'),
('15', 'JAMBI'),
('16', 'SUMATERA SELATAN'),
('17', 'BENGKULU'),
('18', 'LAMPUNG'),
('19', 'KEPULAUAN BANGKA BELITUNG'),
('21', 'KEPULAUAN RIAU'),
('31', 'DKI JAKARTA'),
('32', 'JAWA BARAT'),
('33', 'JAWA TENGAH'),
('34', 'DI YOGYAKARTA'),
('35', 'JAWA TIMUR'),
('36', 'BANTEN'),
('51', 'BALI'),
('52', 'NUSA TENGGARA BARAT'),
('53', 'NUSA TENGGARA TIMUR'),
('61', 'KALIMANTAN BARAT'),
('62', 'KALIMANTAN TENGAH'),
('63', 'KALIMANTAN SELATAN'),
('64', 'KALIMANTAN TIMUR'),
('65', 'KALIMANTAN UTARA'),
('71', 'SULAWESI UTARA'),
('72', 'SULAWESI TENGAH'),
('73', 'SULAWESI SELATAN'),
('74', 'SULAWESI TENGGARA'),
('75', 'GORONTALO'),
('76', 'SULAWESI BARAT'),
('81', 'MALUKU'),
('82', 'MALUKU UTARA'),
('91', 'PAPUA BARAT'),
('94', 'PAPUA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `rating` tinyint(1) NOT NULL,
  `ulasan` varchar(255) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `id_pembelian` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `tgl` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `rating`
--

INSERT INTO `rating` (`id`, `rating`, `ulasan`, `id_produk`, `id_pembelian`, `id_pelanggan`, `tgl`) VALUES
(4, 3, 'bagus', 20, 27, 1, '2021-09-16 04:36:00'),
(5, 3, 'bagus', 15, 27, 1, '2021-09-16 04:36:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `subkategori`
--

CREATE TABLE `subkategori` (
  `id_subkategori` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `subkategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tema`
--

CREATE TABLE `tema` (
  `id_tema` int(11) NOT NULL,
  `tema` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tema`
--

INSERT INTO `tema` (`id_tema`, `tema`, `url`) VALUES
(12, 'https://images.tokopedia.net/img/cache/1208/NsjrJu/2022/9/24/103a0831-eb37-45de-9c00-f5d45394ec6e.jpg.webp?ect=3g', 'https://tokopedia.link/AGbbamAaItb'),
(13, 'https://images.tokopedia.net/img/cache/1208/NsjrJu/2022/9/28/d8ec411a-a72f-41bc-a0e4-c224f7e0cc6b.jpg', 'https://tokopedia.link/uLrXUm9bItb'),
(14, 'https://images.tokopedia.net/img/cache/1208/NsjrJu/2022/9/28/5a434312-bb03-4346-9d52-ca720498fff0.jpg', 'https://tokopedia.link/QH5ancdcItb');

-- --------------------------------------------------------

--
-- Struktur dari tabel `toko`
--

CREATE TABLE `toko` (
  `id_toko` int(11) NOT NULL,
  `namatoko` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telepon` varchar(14) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `distrik` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `fotoprofil` varchar(255) NOT NULL,
  `diskripsi` text NOT NULL,
  `kodepos` varchar(255) NOT NULL,
  `favicon` varchar(255) NOT NULL,
  `motto` varchar(255) NOT NULL,
  `ig` varchar(255) NOT NULL,
  `fb` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `domain` varchar(255) NOT NULL,
  `titik` varchar(255) NOT NULL,
  `tampilan` varchar(1) NOT NULL,
  `warnaheader` varchar(255) NOT NULL,
  `warnafooter` varchar(255) NOT NULL,
  `warnaikon` varchar(255) NOT NULL,
  `warnaikonaktif` varchar(255) NOT NULL,
  `backgroundaktif` varchar(255) NOT NULL,
  `warnamenu` varchar(255) NOT NULL,
  `kanan` int(11) NOT NULL,
  `setprov` varchar(11) NOT NULL,
  `jambuka` varchar(255) NOT NULL,
  `jamtutup` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `toko`
--

INSERT INTO `toko` (`id_toko`, `namatoko`, `email`, `telepon`, `provinsi`, `tipe`, `distrik`, `alamat`, `fotoprofil`, `diskripsi`, `kodepos`, `favicon`, `motto`, `ig`, `fb`, `youtube`, `twitter`, `domain`, `titik`, `tampilan`, `warnaheader`, `warnafooter`, `warnaikon`, `warnaikonaktif`, `backgroundaktif`, `warnamenu`, `kanan`, `setprov`, `jambuka`, `jamtutup`) VALUES
(1, 'Cyara Afnan', 'cyaraafnan@gmail.com', '6282213639984', 'Jambi', 'Kabupaten', 'Muaro Jambi', 'Simpang Sungai Duren', 'CYARA AFNAN.png', 'Cyara Afnan Merupakan Sebuah Situs Tempat Jualan Online Yang Terpecaya Dan Berkualitas. Silahkan Belanja Dengan Mudah Tanpa Perlu Keluar Rumah', '64125', 'Desain tanpa judul (4).png', 'Berbelanja Disini', 'https://www.instagram.com/#', 'https://www.facebook.com/#', 'https://www.youtube.com/channel/#', '', 'https://www.cyaraafnan.my.id/', '-1.599337, 103.500302', '1', '#f22389', '#fffafa', '#2065e5', '#000000', '#fcfcfc', '#ffffff', 2, '11', '10:30', '21:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `view`
--

CREATE TABLE `view` (
  `id` int(11) NOT NULL,
  `userip` varchar(255) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `tgl` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `view`
--

INSERT INTO `view` (`id`, `userip`, `id_produk`, `tgl`) VALUES
(1, '127.0.0.1', 20, '2021-09-24 18:39:52'),
(2, '127.0.0.1', 22, '2021-09-24 18:40:22'),
(3, '127.0.0.1', 19, '2021-09-24 18:40:28'),
(4, '127.0.0.1', 11, '2021-09-24 18:40:34'),
(5, '127.0.0.1', 15, '2021-09-26 16:41:06'),
(6, '::1', 15, '2021-09-26 16:59:20'),
(7, '112.215.244.21', 14, '2021-09-28 12:11:15'),
(8, '115.178.246.254', 16, '2021-09-28 12:35:16'),
(9, '112.215.244.21', 15, '2021-09-28 12:37:15'),
(10, '209.95.56.51', 25, '2021-09-28 12:40:37'),
(11, '36.72.217.181', 11, '2021-09-28 12:42:48'),
(12, '112.215.244.21', 11, '2021-09-28 13:00:16'),
(13, '112.215.244.21', 16, '2021-09-28 13:01:07'),
(14, '209.95.56.53', 20, '2021-09-28 13:07:46'),
(15, '112.215.244.21', 20, '2021-09-28 13:19:19'),
(16, '112.215.244.21', 26, '2021-09-28 15:19:16'),
(17, '36.72.219.180', 20, '2021-09-28 18:11:11'),
(18, '36.72.219.180', 15, '2021-09-28 20:14:43'),
(19, '112.215.244.21', 22, '2021-09-28 23:00:40'),
(20, '140.213.57.24', 24, '2021-09-29 19:59:44'),
(21, '140.213.57.24', 17, '2021-09-29 20:42:57'),
(22, '112.215.242.162', 19, '2021-09-30 17:37:26'),
(23, '112.215.242.162', 20, '2021-09-30 17:39:06'),
(24, '140.213.57.11', 14, '2021-09-30 21:22:21'),
(25, '114.5.147.12', 18, '2021-10-01 16:26:12'),
(26, '114.125.127.85', 11, '2021-10-07 13:24:22'),
(27, '114.125.126.123', 11, '2021-10-07 17:14:28'),
(28, '140.213.218.73', 19, '2021-10-07 18:40:30'),
(29, '140.213.218.73', 24, '2021-10-07 18:40:43'),
(30, '103.111.96.238', 14, '2021-10-10 21:40:21'),
(31, '36.81.11.17', 16, '2021-10-13 20:01:52'),
(32, '36.81.11.17', 24, '2021-10-13 20:02:51'),
(33, '112.215.172.176', 25, '2021-10-14 14:04:00'),
(34, '112.215.172.176', 15, '2021-10-14 14:04:38'),
(35, '112.215.172.176', 19, '2021-10-15 19:15:14'),
(36, '114.10.8.158', 20, '2021-10-23 18:26:06'),
(37, '140.213.218.90', 17, '2021-10-23 19:22:48'),
(38, '114.122.169.170', 19, '2021-10-23 19:46:25'),
(39, '140.213.153.220', 19, '2021-10-23 19:51:19'),
(40, '140.213.153.220', 14, '2021-10-23 19:51:43'),
(41, '180.251.182.164', 14, '2021-10-23 23:54:48'),
(42, '180.251.182.164', 13, '2021-10-23 23:55:32'),
(43, '182.0.151.184', 13, '2021-10-24 06:19:27'),
(44, '182.1.80.163', 19, '2021-10-24 10:21:15'),
(45, '182.0.151.160', 14, '2021-10-24 10:39:57'),
(46, '182.0.151.160', 15, '2021-10-24 10:40:40'),
(47, '36.70.212.98', 19, '2021-10-24 11:10:42'),
(48, '36.70.212.98', 14, '2021-10-24 11:11:23'),
(49, '116.206.15.16', 25, '2021-10-24 12:09:06'),
(50, '182.1.181.49', 21, '2021-10-24 21:35:01'),
(51, '182.1.181.49', 22, '2021-10-24 21:35:46'),
(52, '182.0.176.157', 16, '2021-10-24 22:06:26'),
(53, '114.5.144.92', 21, '2021-10-24 22:10:42'),
(54, '114.122.71.2', 16, '2021-10-24 22:23:09'),
(55, '114.122.106.41', 18, '2021-10-25 05:29:20'),
(56, '117.102.82.66', 11, '2021-10-25 10:29:23'),
(57, '203.78.118.147', 22, '2021-10-25 11:16:04'),
(58, '103.111.102.10', 26, '2021-10-25 15:38:42'),
(59, '103.111.102.10', 22, '2021-10-25 15:43:09'),
(60, '127.0.0.1', 12, '2021-10-27 11:00:47'),
(61, '127.0.0.1', 28, '2021-10-27 11:09:15'),
(62, '127.0.0.1', 16, '2021-10-27 11:13:37'),
(63, '127.0.0.1', 14, '2021-10-28 14:46:40'),
(64, '127.0.0.1', 23, '2021-10-30 12:32:33'),
(65, '127.0.0.1', 18, '2021-11-02 22:52:02'),
(66, '127.0.0.1', 26, '2021-11-14 10:37:19'),
(67, '127.0.0.1', 13, '2021-11-17 17:56:07'),
(68, '127.0.0.1', 21, '2021-11-21 20:18:14'),
(69, '::1', 12, '2021-11-24 10:18:54'),
(70, '::1', 22, '2021-11-24 10:20:04'),
(71, '', 0, '2021-11-28 14:47:03'),
(72, '', 14, '2021-11-28 14:53:48'),
(73, '127.0.0.1', 25, '2021-11-30 15:36:57'),
(74, '127.0.0.1', 0, '2022-09-26 23:49:40'),
(75, '127.0.0.1', 29, '2022-09-26 23:56:40'),
(76, '127.0.0.1', 30, '2022-09-27 12:30:55'),
(77, '112.215.172.155', 29, '2022-09-27 18:06:01'),
(78, '112.215.172.155', 30, '2022-09-27 22:25:40'),
(79, '112.215.172.166', 30, '2022-09-27 22:44:18'),
(80, '112.215.172.102', 30, '2022-09-28 15:57:22'),
(81, '112.215.172.102', 29, '2022-09-28 15:57:33'),
(82, '112.215.172.102', 35, '2022-09-28 16:17:17'),
(83, '103.180.119.30', 30, '2022-09-28 16:38:42'),
(84, '182.2.38.164', 30, '2022-09-28 16:57:04'),
(85, '103.166.11.160', 30, '2022-09-28 17:11:17'),
(86, '112.215.172.102', 36, '2022-09-28 17:14:10'),
(87, '112.215.172.102', 32, '2022-09-28 17:15:28'),
(88, '112.215.172.102', 33, '2022-09-28 17:16:58'),
(89, '112.215.172.102', 0, '2022-09-28 17:24:29'),
(90, '112.215.172.102', 31, '2022-09-28 17:40:07'),
(91, '112.215.172.102', 37, '2022-09-28 17:44:56'),
(92, '103.175.80.14', 37, '2022-09-28 18:08:08'),
(93, '140.213.165.59', 37, '2022-09-28 18:16:55'),
(94, '36.79.95.1', 37, '2022-09-28 19:13:28'),
(95, '112.215.172.102', 38, '2022-09-28 21:03:09'),
(96, '182.1.89.196', 44, '2022-09-28 22:15:44'),
(97, '182.1.89.238', 40, '2022-09-28 22:55:57'),
(98, '140.213.218.249', 39, '2022-09-29 01:05:10'),
(99, '140.213.218.249', 34, '2022-09-29 01:19:08'),
(100, '173.252.111.15', 34, '2022-09-29 01:19:13'),
(101, '173.252.111.9', 34, '2022-09-29 01:19:15'),
(102, '173.252.111.24', 34, '2022-09-29 01:20:40'),
(103, '140.213.218.249', 31, '2022-09-29 01:54:43'),
(104, '140.213.218.249', 36, '2022-09-29 01:55:35'),
(105, '140.213.218.249', 37, '2022-09-29 01:55:43'),
(106, '140.213.218.249', 32, '2022-09-29 01:55:52'),
(107, '140.213.218.249', 38, '2022-09-29 14:01:25'),
(108, '140.213.218.249', 45, '2022-09-29 14:14:57'),
(109, '103.160.68.11', 38, '2022-09-29 14:20:28'),
(110, '112.215.172.166', 41, '2022-09-29 14:34:01'),
(111, '112.215.172.166', 29, '2022-09-29 14:34:33'),
(112, '182.1.88.136', 44, '2022-09-29 16:46:58'),
(113, '112.215.172.166', 45, '2022-09-29 17:01:28'),
(114, '27.115.124.109', 38, '2022-09-29 17:48:20'),
(115, '112.215.237.92', 45, '2022-09-29 18:00:28'),
(116, '112.215.237.92', 46, '2022-09-29 18:00:38'),
(117, '157.55.39.49', 0, '2022-09-29 19:24:21'),
(118, '112.215.154.26', 38, '2022-09-30 03:21:13'),
(119, '140.213.48.33', 45, '2022-09-30 11:09:08'),
(120, '124.107.226.250', 38, '2022-09-30 11:10:28'),
(121, '140.213.48.33', 44, '2022-09-30 23:40:11'),
(122, '140.213.48.33', 36, '2022-10-01 13:32:24'),
(123, '140.213.48.33', 47, '2022-10-01 13:32:56'),
(124, '140.213.48.33', 38, '2022-10-01 13:35:28'),
(125, '43.252.106.27', 38, '2022-10-01 14:00:31'),
(126, '180.247.23.228', 38, '2022-10-01 14:02:07'),
(127, '36.79.82.197', 38, '2022-10-01 14:19:52'),
(128, '180.253.163.89', 38, '2022-10-01 14:54:42'),
(129, '36.79.68.155', 38, '2022-10-01 16:53:03'),
(130, '140.213.0.128', 38, '2022-10-01 18:35:53'),
(131, '114.10.7.246', 38, '2022-10-01 20:55:39'),
(132, '103.175.80.14', 38, '2022-10-02 00:46:37'),
(133, '103.163.13.5', 38, '2022-10-02 06:14:40'),
(134, '114.122.182.219', 31, '2022-10-02 19:06:03'),
(135, '114.122.182.219', 46, '2022-10-02 19:06:12'),
(136, '112.215.241.42', 36, '2022-10-03 13:59:26'),
(137, '112.215.241.42', 37, '2022-10-03 21:11:23'),
(138, '54.36.149.31', 0, '2022-10-04 05:40:07'),
(139, '216.244.66.201', 49, '2022-10-04 15:09:12'),
(140, '216.244.66.201', 47, '2022-10-04 21:57:24'),
(141, '216.244.66.201', 33, '2022-10-05 00:26:01'),
(142, '216.244.66.201', 45, '2022-10-05 06:56:46'),
(143, '216.244.66.201', 40, '2022-10-05 07:47:28'),
(144, '114.5.245.209', 38, '2022-10-05 10:01:45'),
(145, '216.244.66.201', 37, '2022-10-05 15:45:52'),
(146, '216.244.66.201', 52, '2022-10-05 19:24:06'),
(147, '216.244.66.201', 48, '2022-10-06 00:28:53'),
(148, '216.244.66.201', 29, '2022-10-06 03:09:53'),
(149, '114.10.69.205', 52, '2022-10-06 13:22:48'),
(150, '114.10.69.205', 0, '2022-10-06 13:28:47'),
(151, '51.222.253.18', 0, '2022-10-06 14:22:20'),
(152, '114.10.69.205', 31, '2022-10-06 15:17:47'),
(153, '::1', 0, '2025-06-08 07:38:12'),
(154, '::1', 53, '2025-06-08 07:42:38');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `halaman`
--
ALTER TABLE `halaman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indeks untuk tabel `notif`
--
ALTER TABLE `notif`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `produk_foto`
--
ALTER TABLE `produk_foto`
  ADD PRIMARY KEY (`id_produk_foto`);

--
-- Indeks untuk tabel `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `subkategori`
--
ALTER TABLE `subkategori`
  ADD PRIMARY KEY (`id_subkategori`);

--
-- Indeks untuk tabel `tema`
--
ALTER TABLE `tema`
  ADD PRIMARY KEY (`id_tema`);

--
-- Indeks untuk tabel `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`id_toko`);

--
-- Indeks untuk tabel `view`
--
ALTER TABLE `view`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `email`
--
ALTER TABLE `email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `halaman`
--
ALTER TABLE `halaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `notif`
--
ALTER TABLE `notif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT untuk tabel `produk_foto`
--
ALTER TABLE `produk_foto`
  MODIFY `id_produk_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT untuk tabel `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `subkategori`
--
ALTER TABLE `subkategori`
  MODIFY `id_subkategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tema`
--
ALTER TABLE `tema`
  MODIFY `id_tema` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `toko`
--
ALTER TABLE `toko`
  MODIFY `id_toko` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `view`
--
ALTER TABLE `view`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
