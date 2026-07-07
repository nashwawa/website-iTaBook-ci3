-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2026 at 06:03 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `keterangan` text NOT NULL,
  `foto` varchar(50) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `id_kategori` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `username` varchar(50) NOT NULL,
  `tengah` text NOT NULL,
  `akhir` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `keterangan`, `foto`, `slug`, `id_kategori`, `tanggal`, `username`, `tengah`, `akhir`) VALUES
(8, 'iTabooks : Temukan Buku, Bangun Kebiasaan Membaca', 'Membaca buku adalah salah satu kegiatan yang dapat memperluas wawasan dan meningkatkan kualitas hidup. Dengan membaca, kita bisa menggali pengetahuan baru, mengasah daya pikir, serta menambah kreativitas. Membaca juga bermanfaat untuk mengurangi stres dan membantu meningkatkan fokus serta konsentrasi. Baik buku fiksi maupun non-fiksi, keduanya sama-sama memberikan manfaat yang berharga dalam kehidupan sehari-hari.', '202412022119.jpg', 'itabooks-temukan-buku-bangun-kebiasaan-membaca', '', '2024-12-18', 'bayu', 'Untuk mendapatkan buku yang berkualitas, Anda bisa mengunjungi toko buku iTabooks. iTabooks menyediakan berbagai macam buku, mulai dari novel populer, buku pelajaran, hingga referensi akademik yang lengkap. Toko ini dikenal karena koleksinya yang luas, harga yang terjangkau, serta pelayanan yang ramah dan profesional. Tidak hanya itu, iTabooks juga sering mengadakan promo menarik yang sayang untuk dilewatkan.', 'Membaca buku tidak hanya bermanfaat bagi individu, tetapi juga dapat menciptakan kebiasaan positif dalam keluarga dan lingkungan. Dengan membeli buku di iTabooks, Anda mendukung budaya literasi dan turut membangun generasi yang cerdas serta berpengetahuan luas. Ayo, mulai perjalanan membaca Anda sekarang dan temukan buku favorit hanya di iTabooks!'),
(9, 'Terbang Bersama Impian : Layang-Layang Cita', 'Buku Layang-Layang Cita karya F. Leony & Galleria menawarkan cerita yang penuh kehangatan dan makna mendalam. Melalui metafora layang-layang yang menjadi simbol penghubung antara kenangan, rasa cinta, dan harapan, pembaca diajak menyelami kisah yang menggugah emosi. Latar senja dan nuansa keemasan yang terlihat di sampul mencerminkan harmoni antara mimpi dan realita, menjadikan buku ini bacaan yang sarat dengan inspirasi.', '202412023048.jpg', 'Terbang-Bersama-Impian-:-Layang-Layang-Cita', '', '2024-12-18', 'bayu', 'Dalam setiap halamannya, pembaca akan menemukan ungkapan rasa yang abadi, meskipun raga telah tiada. Buku ini mampu menyentuh jiwa, mengingatkan kita pada pentingnya menghargai setiap momen bersama orang-orang tercinta. Apakah mungkin kita bisa mengungkapkan rasa hanya melalui layang-layang? Jawabannya akan terungkap saat Anda membaca kisah mendalam yang penuh pesan ini.', 'Bagi Anda yang mencari bacaan bermakna dan penuh keindahan, Layang-Layang Cita wajib masuk daftar koleksi Anda. Dapatkan segera di toko buku iTabooks, dan terbangkan imajinasi Anda bersama layang-layang cinta ini! Jangan sampai kehabisan, pesan sekarang juga dan nikmati perjalanan emosional yang tak terlupakan.'),
(10, 'Petualangan Fantasi Tiada Akhir : Alice Adventures in Wonderland', 'Buku klasik karya Lewis Carroll, Alice\'s Adventures in Wonderland, adalah salah satu mahakarya yang membawa pembaca ke dunia penuh imajinasi dan keajaiban. Kisah dimulai saat Alice terjatuh ke dalam lubang kelinci dan menemukan dunia yang dihuni oleh makhluk-makhluk aneh seperti Kelinci Putih yang tergesa-gesa, Ulat yang bijak, dan Ratu Hati yang penuh teka-teki. Dengan alur yang memadukan logika dan absurditas, buku ini menjadi favorit di kalangan anak-anak maupun orang dewasa.', '202412023941.jpg', 'petualangan-fantasi-tiada-akhir-alice-adventures-in-wonderland', '', '2024-12-18', 'bayu', 'Sebagai salah satu karya paling berpengaruh dalam genre fantasi, cerita Alice memberikan kebebasan kepada pembaca untuk mengeksplorasi dunia yang tidak terikat oleh aturan dunia nyata. Penggambaran karakter unik, percakapan penuh teka-teki, dan suasana magis menjadikan buku ini tidak hanya menyenangkan, tetapi juga reflektif. Karya ini telah menjadi inspirasi dalam berbagai budaya populer, termasuk film, seni, dan sastra, menjadikannya bacaan yang abadi sepanjang zaman.', 'Bagi pecinta kisah fantasi yang menantang imajinasi, Alice\'s Adventures in Wonderland adalah pilihan sempurna. Buku ini tersedia di iTabooks, toko buku terpercaya yang menyediakan berbagai bacaan klasik dan modern. Jangan lewatkan kesempatan untuk memiliki salah satu karya terbaik sepanjang masa ini. Segera kunjungi iTabooks dan mulailah petualangan Anda bersama Alice ke dunia penuh keajaiban!');

-- --------------------------------------------------------

--
-- Table structure for table `caraousel`
--

CREATE TABLE `caraousel` (
  `id_caraousel` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `caraousel`
--

INSERT INTO `caraousel` (`id_caraousel`, `judul`, `foto`, `keterangan`) VALUES
(28, 'Bumi', '202412233759.jpg', '“Namaku Raib, usiaku 15 tahun, kelas sepuluh. Aku anak perempuan seperti kalian, adik-adik kalian, tetangga kalian. Aku punya dua kucing, namanya si Putih dan si Hitam. Mama dan papaku menyenangkan. Guru-guru di sekolahku seru. Teman-temanku baik dan kompak.”\r\n\r\n'),
(29, 'Bintang ', '202412233943.jpg', 'Bintang adalah buku keempat dari serial Bumi yang ditulis oleh Tere Liye. Tere Liye ialah nama pena dari seorang penulis novel tersohor di Indonesia. Novel Bintang menceritakan tentang Raib, Seli, dan Ali, mereka adalah murid SMA kelas 11 dan berteman baik. Penampilan mereka sama seperti para murid SMA lainnya, tetapi siapa sangka bahwa mereka memiliki dan menyimpan banyak rahasia besar.\r\n'),
(31, 'Matahari', '202412234230.jpg', 'Namanya Ali, 15 tahun, kelas X. Jika saja orangtuanya mengizinkan, seharusnya dia sudah duduk di tingkat akhir ilmu fisika program doktor di universitas ternama. Ali tidak menyukai sekolahnya, guru-gurunya, teman-teman sekelasnya. Semua membosankan baginya. Tapi sejak dia mengetahui ada yang aneh pada diriku dan Seli, teman sekelasnya, hidupnya yang membosankan berubah seru. ');

-- --------------------------------------------------------

--
-- Table structure for table `detail_buku`
--

CREATE TABLE `detail_buku` (
  `id_detail` int(11) NOT NULL,
  `penerbit` varchar(200) NOT NULL,
  `isbn` int(40) NOT NULL,
  `bahasa` varchar(200) NOT NULL,
  `lebar` varchar(40) NOT NULL,
  `tanggal` date NOT NULL,
  `halaman` int(11) NOT NULL,
  `panjang` varchar(20) NOT NULL,
  `berat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_buku`
--

INSERT INTO `detail_buku` (`id_detail`, `penerbit`, `isbn`, `bahasa`, `lebar`, `tanggal`, `halaman`, `panjang`, `berat`) VALUES
(2, 'tes', 12312, 'tes', '12', '2024-12-17', 12, '22', '21'),
(5, 'Penerbit Sabak Grip', 2147483647, 'Indonesia', '15.0 cm', '2024-12-17', 320, ' 23.0 cm', '0.26 kg'),
(6, ' Sabak Grip Nusantara', 2147483647, '-', '13.0 cm', '2024-12-17', 417, '-', '0.42 kg'),
(7, 'Penerbit Sabak Grip', 2147483647, 'Indonesia', '13.0 cm', '2024-12-17', 375, '20.0 cm', ' 0.305 kg'),
(8, 'Penerbit Sabak Grip', 2147483647, '-', '13.0 cm', '2024-12-17', 361, '-', ' 0.3 kg'),
(9, 'Penerbit Sabak Grip', 2147483647, 'Indonesia', '13.5 cm', '2024-12-17', 373, '0.0 cm', '0.305 kg '),
(10, 'PENERBIT SABAK GRIP', 2147483647, 'Indonesia', '14.0 cm', '2024-12-17', 400, '20.0 cm', '0.325 kg'),
(11, 'Penerbit Sabak Grip', 2147483647, 'Indonesia', '13.5 cm', '2024-12-17', 359, ' 0.0 cm', '0.295 kg'),
(12, 'Penerbit Sabak Grip', 2147483647, 'Indonesia', '14.0 cm', '2024-12-17', 374, '20.0 cm', ' 0.305 kg'),
(13, 'Coconut Books ', 2147483647, 'Indonesia', '14.0 cm', '2024-12-17', 376, '20.0 cm', '0.305 kg'),
(14, 'Bumi Semesta Media', 208069751, 'Indonesia', '15.0 cm', '2024-12-17', 436, '21.0 cm', '0.3 kg'),
(15, 'Mizan Publishing', 2147483647, 'Indonesia', '20.5 cm', '2024-12-17', 348, '17.5 cm', '0.3 kg'),
(16, 'Mizan Publishing', 2147483647, 'Indonesia', '14.0 cm', '2024-12-17', 354, ' 20.0 cm', ' 0.35 kg'),
(17, 'Gramedia Pustaka Utama', 2147483647, 'Indonesia', '13.5 cm', '2024-12-17', 288, '20.0 cm', '0.16 kg'),
(18, 'Anak Hebat Indonesia', 2147483647, '-', '13.0 cm', '2024-12-17', 256, '-', '0.195 kg'),
(19, 'Penerbit Buku Kompas', 2147483647, 'Indonesia', '15.0 cm', '2024-12-17', 304, '23.0 cm', ' 0.5 kg'),
(20, 'Kepustakaan Populer Gramedia', 2147483647, 'Indonesia', '14.0 cm', '2024-12-17', 226, '21.0 cm', '0.28 kg'),
(21, 'Anak Hebat Indonesia', 2147483647, 'Indonesia', '14.0 cm', '2024-12-17', 160, '20.0 cm', ' 0.13 kg'),
(22, 'Anak Hebat Indonesia', 2147483647, 'Indonesia', '14.0 cm', '2024-12-17', 322, '20.0 cm', '0.265 kg'),
(23, 'Elex Media Komputindo', 2147483647, 'Indonesia', '18.0 cm', '2024-12-17', 160, '24.0 cm', ' 0.15 kg'),
(24, 'Start Up', 2147483647, 'Indonesia', '14.0 cm', '2024-12-17', 223, ' 20.0 cm', ' 0.18 kg'),
(25, 'Elex Media Komputindo', 2147483647, 'Indonesia', '12.0 cm', '2024-12-17', 392, ' 18.0 cm', '0.22 kg'),
(26, 'Elex Media Komputindo', 2147483647, 'Indonesia', '12.0 cm', '2024-12-17', 392, ' 18.0 cm', ' 0.22 kg'),
(27, 'Elex Media Komputindo', 2147483647, 'Indonesia', '12.0 cm', '2024-12-17', 384, '18.0 cm', ' 0.255 kg'),
(28, 'Elex Media Komputindo', 2147483647, 'Indonesia', '12.0 cm', '2024-12-17', 400, '18.0 cm', '0.25 kg'),
(29, 'Kawah Media', 2147483647, 'Indonesia', '13.0 cm', '2024-12-18', 368, '19.0 cm', '0.3 kg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(5, 'Pendidikan '),
(7, 'sejarah'),
(8, 'petualangan'),
(9, 'fantasy'),
(10, 'romance');

-- --------------------------------------------------------

--
-- Table structure for table `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id_konfigurasi` int(11) NOT NULL,
  `judul_website` varchar(200) NOT NULL,
  `profil_website` text NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `no_wa` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `konfigurasi`
--

INSERT INTO `konfigurasi` (`id_konfigurasi`, `judul_website`, `profil_website`, `instagram`, `facebook`, `email`, `alamat`, `no_wa`) VALUES
(1, 'nashwa', 'iTabooks adalah toko buku online yang menyediakan koleksi lengkap dari berbagai genre dengan harga terjangkau. Nikmati pengalaman belanja buku yang mudah, cepat, dan nyaman bersama kami. Temukan buku favorit Anda di iTabooks!!\"', 'https://instagram.com/woonswa', '-', 'nashwasarita@gmail.com', 'pokoh baru', '6281233758482');

-- --------------------------------------------------------

--
-- Table structure for table `konten`
--

CREATE TABLE `konten` (
  `id_konten` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `keterangan` text NOT NULL,
  `foto` varchar(50) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `id_kategori` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `username` varchar(50) NOT NULL,
  `harga` decimal(10,2) NOT NULL,
  `detail` int(11) NOT NULL,
  `karya` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `konten`
--

INSERT INTO `konten` (`id_konten`, `judul`, `keterangan`, `foto`, `slug`, `id_kategori`, `tanggal`, `username`, `harga`, `detail`, `karya`) VALUES
(28, 'Sendiri', 'Tidak ada yang abadi di dunia ini. Lautan bisa mengering. Gunung bisa rata. Benua terpisah, bersatu, dan terpisah lagi. Apalagi cinta pasangan manusia. Sehebat apapun cinta tersebut, pasti akan berakhir. Waktu akan menelannya.\r\n\r\nInilah kisah tentang seorang laki-laki usia 70 tahun, yang ditinggal istrinya meninggal setelah begitu lama menikah, menghabiskan waktu bersama-sama. Saat hari itu tiba, apa yang harus dia lakukan? Bagaimana dia akan melewati sisa hidupnya? Menjalani hari demi hari?\r\n\r\nApakah hidupnya masih seru? Apakah masih ada petualangan spesial baginya.\r\n\r\nAtau hanya tersisa. Sendiri.', '202412132530.jpg', 'sendiri', '8', '2024-12-17', 'bayu', '94500.00', 5, 'Tere Liye'),
(33, 'Pulang - Pergi', 'Disclaimer\r\nBuku novel Pulang - Pergi ini merupakan karya dari penulis terkenal, yaitu Tere Liye. Buku ini bercerita tentang Bujang yang kembali harus berpetualang setelah pergi dan pulang. Saat Bujang sedang berada di pusara mamak dan bapaknya, Bujang mendapatkan sebuah pesan dari Krestiny Otets, pemimpin brotherhood Bratva.\r\n\r\nIsi pesan tersebut adalah perintah untuk Bujang dalam dua hari kedepan untuk bertunangan dengan Maria, putri Otets. ', '202412145316.jpg', 'Pulang---Pergi', '8', '2024-12-17', 'bayu', '94475.00', 6, 'Tere Liye'),
(34, 'Nebula', 'Libur panjang berjalan seru dan menyenangkan. Setiba di rumah Paman Raf, aku menyaksikan bangunan lima lantai itu terlihat bersolek, dengan lampu hias warna warni. Itu persiapan acara pernikahan Am. Pernikahannya sendiri akan diadakan empat minggu lagi. Bibi Leh menyiapkan makan malam spesial, yang berjalan meriah. Am, Em, Im, Om, dan Um banyak bertanya tentang Akademi Bayangan Tingkat Tinggi-sambil sesekali bergurau, membuat meja ramai. Hanya Paman Raf yang menyebalkan.', '202412145917.jpg', 'Nebula', '8', '2024-12-17', 'bayu', '94482.00', 7, 'Tere Liye'),
(35, 'Lumpu', 'Lumpu ini adalah buku ke-11 dari serial Bumi petualangan dunia paralel karya Tere Liye. Sebenarnya, novel ini merupakan kelanjutan kisah dari novel Selena dan Nebula maka bagi yang belum membaca novel Selena dan Nebula, alangkah baiknya baca terlebih dahulu kedua novel tersebut agar paham akan alur cerita dalam Lumpu. Pada novel setebal 368 halaman ini, kembali mengisahkan petualangan serta penjelajahan Raib, Ali, dan Seli ke dunia paralel. Seperti judulnya, pada seri kali ini pun mereka melakukan perjalanan dalam menghadapi Lumpu sebagai misi penyelamatan Miss Selena, guru Matematika mereka.', '202412150225.jpg', 'Lumpu', '8', '2024-12-17', 'bayu', '94500.00', 8, 'Tere Liye'),
(36, 'Si Putih', 'Si Putih adalah spin-off buku kesembilan dari serial Bumi petualangan dunia paralel karya Tere Liye. Namun, apabila kalian berharap akan berpetualang dan berjelajah bersama tiga sekawan–Raib, Ali, dan Seli–di dalam novel ini, jelas tidak ada karena kehadirannya hanya sebagai cameo. Melalui buku setebal 376 halaman ini pembaca akan diajak berpetualang ke klan baru yang belum pernah ditemukan pada novel-novel sebelumnya dari serial Bumi ini.', '202412150522.jpg', 'Si-Putih', '8', '2024-12-17', 'bayu', '94500.00', 9, 'Tere Liye'),
(37, 'Bulan', 'Petualangan Raib, Seli, dan Ali berlanjut.Beberapa bulan setelah peristiwa klan bulan, Miss Selena akhirnya muncul di sekolah. Ia membawa kabar menggembirakan untuk anak-anak yang berjiwa petualang seperti Raib, Seli, dan Ali. Miss Selena bersama dengan Av akan mengajak mereka untuk mengunjungi klan matahari selama dua minggu. Av berencana akan bertemu dengan ketua konsil klan matahari, yang menguasai klan matahari sepenuhnya untuk mencari sekutu dalam menghadapi Tamus yang diperkirakan akan bebas dan juga membebaskan raja tanpa mahkota.\r\n\r\n', '202412150825.jpg', 'Bulan', '8', '2024-12-17', 'bayu', '94500.00', 10, 'Tere Liye'),
(38, 'Ceros & Batozar', 'Awalnya kami hanya mengikuti karyawisata biasa seperti murid-murid sekolah lain. Hingga Ali, dengan kejeniusan dan keisengannya, memutuskan menyelidiki sebuah ruangan kuno. Kami tiba di bagian dunia paralel lainnya, menemui petarung kuat, mendapat kekuatan baru serta teknik-teknik menakjubkan. Dunia paralel ternyata sangat luas, dengan begitu banyak orang hebat di dalamnya.\r\n\r\nKisah ini tentang petualangan tiga sahabat. Raib bisa menghilang. Seli bisa mengeluarkan petir. Dan Ali bisa melakukan apa saja.\r\n', '202412151118.jpg', 'Ceros-&-Batozar', '8', '2024-12-17', 'bayu', '94499.00', 11, 'Tere Liye'),
(39, 'Komet Minor', 'Komet Minor sebagai novel keenam dari serial Bumi terbit pada tahun 2019, tak lama setelah Komet–novel sebelum ini–diterbitkan. Seperti yang sudah dijelaskan bahwa Komet Minor merupakan lanjutan dari novel sebelumnya, yakni Komet, tetapi dalam novel ini petualangan Raib, Ali, dan Seli ditemani oleh Batozar.\r\n\r\n', '202412151356.jpg', 'Komet-Minor', '8', '2024-12-17', 'bayu', '94500.00', 12, 'Tere Liye'),
(40, 'Galaksi', 'Kenapa lo jadi hidupin Ravispa lagi tanpa seizin gue?!\"\r\n\r\nSeorang murid lelaki dengan dasi sekolah diikat di dahi dan tongkat pemukul di pundak kanannya bertanya dengan raut wajah marah. Galaksi Aldebaran sedang berhadapan dengan Jordan, teman baiknya di sebuah ruangan paling gelap milik SMA Ganesha.\r\n\r\n\"Lo Wakil Ketua Ravispa, Dan! Lo wakil gue! Kenapa lo nggak ngomong sama gue dulu?!\" Galaksi merasa dibohongi.', '202412152406.jpg', 'Galaksi', '10', '2024-12-17', 'bayu', '89100.00', 13, 'Poppi Pertiwi'),
(41, 'Septihan', 'Septihan bercerita tentang kisah remaja yang dibalut dengan asmara dan persahabatan. Di sini ada dua tokoh utama, yaitu Septian Aidan Nugroho dan Jihan Halana. Septian adalah salah satu murid paling pintar di SMA Ganesha. Septian sendiri merupakan pribadi yang pendiam dan dingin. Namun, di balik sosoknya yang pendiam, Septian kerap menjadi murid kebanggaan dan kesayangan para guru di SMA Ganesha. Septian juga menjadi bendahara di geng Ravispa, kelompok yang berisikan murid-murid nakal dan pemberani di SMA Ganesha. Septian juga kerap mewakili SMA Ganesha di berbagai perlombaan dan menghasilkan prestasi yang patut untuk dibanggakan.', '202412153649.jpg', 'septihan', '10', '2024-12-17', 'bayu', '89100.00', 13, 'Poppi Pertiwi'),
(42, 'Dia adalah Dilanku Tahun 1990', 'Novel “Dilan: Dia adalah Dilanku Tahun 1990” menceritakan kilas balik Milea pada tahun 1990. Pada tahun tersebut, Milea hanyalah remaja SMA pindahan dari Jakarta ke Bandung. Milea memiliki kehidupan layaknya anak SMA. Semuanya berubah ketika seorang remaja pria bernama Dilan mengajaknya berkenalan di suatu siang pada saat jam pulang sekolah. Kisah pun bergulir. Milea mulai menemukan keseruan berkenalan dengan Dilan yang penuh kejutan dan memiliki segala cara untuk membahagiakan dirinya.\r\n\r\n', '202412154021.jpg', 'dia-adalah-dilanku-tahun-1990', '10', '2024-12-17', 'bayu', '89100.00', 15, 'Pidi Baiq'),
(43, 'Milea Suara Dari Dilan', 'Dilan memberi penggambaran lain dari sebuah penaklukan cinta & bagaimana indahnya cinta sederhana anak zaman dahulu.” @refaniris\r\n“Cuma satu yang kuinginkan, aku ingin cowok seperti Dilan.” @_SLovaFC\r\n“Dilan brengsek! Dia selalu tahu caranya menjadi pusat perhatian, bahkan ketika jadi buku, setiap serinya selalu ditunggu.” @Tedy_Pensil\r\n“Membaca Dilan itu seperti jatuh cinta lagi, lagi, dan lagi. Ah, indah, deh. Rasanya gak akan pernah bosan membacanya.” @agungwyd', '202412154500.jpg', 'Milea-Suara-Dari-Dilan', '10', '2024-12-17', 'bayu', '80099.00', 16, 'Pidi Baiq'),
(44, 'Gadis Kretek', 'Gadis Kretek adalah sebuah novel karya Ratih Kumala. Novel ini berisi tentang perkembangan industri kretek pada zaman periode penjajahan Belanda hingga kemerdekaan. Di mana industri kretek tersebut, sang pemilik (Romo) mewariskan kepada putra sulungnya yang bernama Tegar.\r\n\r\nDengan latar Kota M, Kudus, Jakarta, dari periode penjajahan Belanda hingga kemerdekaan, novel setebal 288 halaman ini akan membawa pembaca berkenalan dengan perkembangan industri kretek di Indonesia. Kaya akan wangi tembakau. Sarat dengan aroma cinta.', '202412154950.jpg', 'gadis-kretek', '7', '2024-12-17', 'bayu', '60000.00', 17, 'Ratih Kumala'),
(45, 'Kemaharajaan Maritim Sriwijaya', 'Kerajaan-kerajaan yang berkembang di wilayah Nusantara tidak muncul dalam waktu yang singkat. Peperangan, pemberontakan, balas dendam, dan intrik politik di tubuh kerajaan pun tak pelak menjadi alat untuk menggulingkan raja yang bertakhta. Seperti halnya kerajaan terbesar di Jawa, Majapahit, berdiri setelah meninggalnya Kěrtanāgara dalam pemberontakan yang dilakukan Pasukan Jayakatwang dan runtuhnya Kerajaan Singhasari.', '202412155701.jpg', 'Kemaharajaan-Maritim-Sriwijaya', '7', '2024-12-17', 'bayu', '85003.00', 18, 'O.W. Wolters'),
(46, 'Catatan Pinggir 3', 'Di Indonesia, agensi politik lebih leluasa menggunakan suasana politik demokratis yang memungkinkan mereka melakukan tindakan populisme Islam atau politik identitas untuk memenuhi hasrat berkuasa kelompok mereka. Kelompok-kelompok populis justru memanfaatkan demokrasi untuk melancarkan politik identitas atau populisme agama.\r\n', '202412160552.jpg', 'Catatan-Pinggir-3', '7', '2024-12-17', 'bayu', '100000.00', 19, 'Goenawan Mohammad'),
(47, 'Sejarah Sumatra', 'Muhamad Radjab menjadi salah satu wartawan Indonesia yang terlibat ekspedisi ke Sumatra pada 1947-1948. Misinya adalah meninjau keadaan dan perkembangan di Kotaraja hingga Teluk Betung setelah Indonesia merdeka. Tidak ada pembagian kerja secara spesifik, sekadar mengikuti ketertarikan masing-masing wartawan. Radjab memperhatikan masyarakat, tabiat, adat, dan kesanggupan mereka memikul tanggung jawab sebagai bangsa yang baru merdeka.', '202412160924.jpg', 'sejarah-sumatra', '7', '2024-12-17', 'bayu', '145000.00', 20, 'William Marsden'),
(48, 'DF Free The Art of Debugging ', 'MIT App Inventor, Kodular, dan Adalo adalah tiga software yang sangat powerful dan user-friendly yang memungkinkan pengguna dari berbagai latar belakang untuk mengembangakan aplikasi dengan mudah. MIT App Inventor, dengan antarmuka yang sederhana dan intuitif, memungkinkan para pemula untuk memahami dasar-dasar pengembagan aplikasi. Kodular menawarkan fitur lebih lanjut yang memungkinkan pembuatan aplikasi yang lebih kompleks dan fungsional. Adalo, di sisi lain, memperluas cakupan dengan memungkinkan pengembangan aplikasi untuk berbagai platform, tidak hanya Android.\r\n', '202412162326.jpg', 'df-free-the-art-of-debugging-', '5', '2024-12-17', 'bayu', '35550.00', 21, 'Siti Olis & Dian WP'),
(49, 'Mahir Python untuk Pemula', 'Buku ini akan menjelaskan bagaimana cara menggunakan Python beserta contoh kode program dan keluarannya (output). Untuk melakukannya, buku ini akan menjelaskan kenapa Anda perlu memahami cara menggunakan Python beserta kelebihan bahasa pemrograman ini. Kemudian, buku ini akan menjelaskan mengenai kompiler Python serta cara instalasi Python, cara menulis dan menjelaskan kode pertama. ', '202412164312.jpg', 'Mahir-Python-untuk-Pemula', '5', '2024-12-17', 'bayu', '68500.00', 22, 'Aris Defiana, S.Kom'),
(50, 'Software Development', 'Bagaimana cara robot pembersih bisa membersihkan setiap sudut rumah? Bagaimana cara drone atau pesawat kendali dapat bergerak dengan bebas di udara? Semua itu terjadi berkat adanya perangkat lunak.\r\n\r\nSeiring meningkatnya bidang-bidang yang menggunakan perangkat lunak, tentu pendidikan dan kelas pemrograman untuk membuat perangkat lunak juga semakin meningkat.', '202412164832.jpg', 'Software-Development', '5', '2024-12-17', 'bayu', '88000.00', 23, 'Elex Media Komputindo'),
(51, 'C&GUI Programming  Edition', 'Saat ini, PHP banyak dipakai untuk membuat program situs web dinamis. Contoh aplikasi program PHP adalah forum (phpBB) dan MediaWiki (software di belakang Wikipedia). Sedangkan, Mambo, Joomla!, Postnuke, Xaraya, dan lain-lain merupakan contoh aplikasi yang lebih kompleks berupa CMS dan dibangun menggunakan PHP.\r\n\r\n', '202412165307.jpg', 'c-gui-programming-edition', '5', '2024-12-17', 'bayu', '44550.00', 2, 'RIZKI HIDAYATULLA'),
(53, 'Dr. Slump 08', 'Turnamen terbesar di dunia akan diadakan!! Hadiah bagi pemenangnya adalah 400.000 yen! Bahkan peringkat ke-2 akan mendapat 100.000 yen! Pertarungan sengit tanpa aturan akan terjadi pada seluruh peserta dari seluruh dunia! Akankah Arale bisa mendapatkan cukup uang hadiah untuk memberi makan kucing telantarnya?\r\n', '202412170803.jpg', 'Dr.-Slump-08', '9', '2024-12-17', 'bayu', '64000.00', 25, 'Akira Toriyama'),
(54, 'Dr. Slump 09', 'Grand Prix Penguin ke-2 diseleggarakan! Pemenangnya akan ditunjuk sebagai kepala desa di Desa Penguin!! 10 peserta yang lolos babak penyisihan akan berada dalam kondisi mati-matian untuk mencapai tujuan! Siapa yang akan menduduki posisi kepala desa yang baru? Akhirnya komik kesayangan kalian, selesai juga!\r\n', '202412171102.jpg', 'dr-slump-09', '9', '2024-12-17', 'bayu', '64000.00', 27, 'Akira Toriyama'),
(55, 'Dr. Slump 05', 'Senbei Norimaki akhirnya menikah dengan wanita idamannya, Sensei Midori Yamabuki. Mereka pergi bulan madu dengan penuh kebahagiaan, namun begitu tragis. Sensei Midori tiba-tiba hilang diculik! Sungguh ini masalah yang sangat besar!!　 Bagaimana nasib mereka selanjutnya!?\r\n\r\nDi antara jenis buku lainnya, komik memang disukai oleh semua kalangan mulai dari anak kecil hingga orang dewasa. Alasan komik lebih disukai oleh banyak orang karena disajikan dengan penuh dengan gambar dan cerita yang mengasyikan sehingga mampu menghilangkan rasa bosan di kala waktu senggang.', '202412171400.jpg', 'dr-slump-05', '9', '2024-12-17', 'bayu', '60000.00', 28, 'Akira Toriyama'),
(56, 'Azzamine', '\"Sophie Aulia yang lebih dikenal dengan nama penanya Jupi alias Jupiter Lee adalah seorang gadis yang lahir di bulan kemerdekaan Republik Indonesia, tepatnya pada tahun 2005. Memiliki cita-cita untuk membanggakan orang tua walaupun dalam sehari lebih banyak rebahannya. Saat ini sedang menempuh pendidikan di SMK Master Indonesia. Sophie mulai tertarik dalam dunia kepenulisan sejak menduduki bangku SMP. Saat itu awalnya coba-coba, tapi lama-lama jadi suka. Azzamine ini adalah buku pertamanya, berharap nanti akan terus berkarya dan tidak berhenti sampai di sini saja.', '202412034852.jpg', 'Azzamine', '10', '2024-12-18', 'nashwa', '89100.00', 29, 'Sophie Aulia');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id_order` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `foto` varchar(225) NOT NULL,
  `payment` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nama_penerima` varchar(150) NOT NULL,
  `no_telp` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` varchar(100) NOT NULL,
  `produk` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id_order`, `total`, `foto`, `payment`, `tanggal`, `alamat`, `nama_penerima`, `no_telp`, `email`, `status`, `produk`) VALUES
(7, 467075, '202501071543_1.jpg', 'BNI', '2025-01-14', 'tyukjh', 'asdfg', 2345, 'srtyuh', 'Complete', 'Azzamine, Pulang - Pergi, Sendiri'),
(8, 467075, '202501072141_1.jpg', 'BNI', '2025-01-14', 'pokoh baru', 'nashwa', 2147483647, 'chiquita123@gmail.com', 'Complete', 'Azzamine, Pulang - Pergi, Sendiri'),
(10, 94475, '202412060442_1.jpg', 'BNI', '2024-12-19', 'dfygjh', 'ghf', 7678, 'hgjhk', 'pending', 'Pulang - Pergi'),
(11, 89100, '202501071307_1.jpg', 'BRI', '2025-01-14', 'seplang', 'chiquila', 987654321, 'nashwasarita@gmail.com', 'pending', 'Septihan'),
(12, 89100, '202501071711_1.jpg', 'BNI', '2025-01-14', '5876876', 'ndbjkf', 60798, '808', 'pending', 'Septihan'),
(13, 178200, '202501072133_1.jpg', 'BNI', '2025-01-14', 'hkhfjkqnjnwa', 'chiku', 131323515, ' nsdvlidnskvndsvnsil', 'Complete', 'Septihan, Dia adalah Dilanku Tahun 1990'),
(14, 94500, '202502024534_1.jpg', 'BNI', '2025-02-10', 'qwertyuiop', 'nashwa', 123456789, 'kwlee0128@gmail.com', 'pending', 'Sendiri'),
(15, 89100, '202508111401_1.jpg', 'BNI', '2025-08-12', 'pokoh baru', 'nashwa', 2147483647, 'nashwasarita@gmail.com', 'pending', 'Azzamine'),
(16, 89100, '202508113045_1.jpg', 'BNI', '2025-08-24', 'kcsd', 'tfu', 12345, 'kwlee0128@gmail.com', 'pending', 'Azzamine');

-- --------------------------------------------------------

--
-- Table structure for table `populer`
--

CREATE TABLE `populer` (
  `id_populer` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `keterangan` text NOT NULL,
  `foto` varchar(50) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `id_kategori` varchar(200) NOT NULL,
  `tanggal` date NOT NULL,
  `username` varchar(50) NOT NULL,
  `harga` decimal(10,2) NOT NULL,
  `detail` int(11) NOT NULL,
  `karya` varchar(200) NOT NULL,
  `nama` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `populer`
--

INSERT INTO `populer` (`id_populer`, `judul`, `keterangan`, `foto`, `slug`, `id_kategori`, `tanggal`, `username`, `harga`, `detail`, `karya`, `nama`) VALUES
(8, 'dsad', 'bkkb', '202412040441.jpg', 'dsad', '9', '2024-12-18', 'nashwa', '9.00', 2, 'n m', 'k');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(70) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `email`) VALUES
(32, 'nashwa', 'nashwa', '202cb962ac59075b964b07152d234b70', 'naswa@gmail.com'),
(33, 'wawa', 'wawa', '81dc9bdb52d04dc20036dbd8313ed055', 'wawa@gmail.com'),
(34, 'navisha', 'navisha', '1234', 'nashwasarita@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `caraousel`
--
ALTER TABLE `caraousel`
  ADD PRIMARY KEY (`id_caraousel`);

--
-- Indexes for table `detail_buku`
--
ALTER TABLE `detail_buku`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indexes for table `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id_konten`),
  ADD KEY `fk_detailbuku` (`detail`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `populer`
--
ALTER TABLE `populer`
  ADD PRIMARY KEY (`id_populer`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `caraousel`
--
ALTER TABLE `caraousel`
  MODIFY `id_caraousel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `detail_buku`
--
ALTER TABLE `detail_buku`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id_konfigurasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `konten`
--
ALTER TABLE `konten`
  MODIFY `id_konten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `populer`
--
ALTER TABLE `populer`
  MODIFY `id_populer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `konten`
--
ALTER TABLE `konten`
  ADD CONSTRAINT `fk_detailbuku` FOREIGN KEY (`detail`) REFERENCES `detail_buku` (`id_detail`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
