-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2021 at 09:50 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jatimlelungon`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'wisata'),
(2, 'kuliner'),
(3, 'penginapan');

-- --------------------------------------------------------

--
-- Table structure for table `post_foto`
--

CREATE TABLE `post_foto` (
  `id` int(11) NOT NULL,
  `id_post_foto` varchar(150) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_foto`
--

INSERT INTO `post_foto` (`id`, `id_post_foto`, `foto`) VALUES
(2, '609a1e456d6e9', '609a1ef6e67ed.jpg'),
(3, '609a1e456d6e9', '609a1ef6e739c.jpg'),
(5, '609a1fbfd1e7b', '609a203b47b15.jpg'),
(6, '609a1fbfd1e7b', '609a2096449ef.jpeg'),
(8, '609a20ea3e893', '609a21b3a208a.jpg'),
(9, '609a20ea3e893', '609a226a1adbc.jpg'),
(10, '609a2270247a3', '609a22cec9027.jpg'),
(11, '609a2270247a3', '609a22ceca535.jpeg'),
(12, '609a23096d535', '609a236929676.jpg'),
(13, '609a23096d535', '609a236929d59.jpg'),
(15, '609a236a9719c', '609a23de9883c.jpg'),
(16, '609a236a9719c', '609a243d3f436.jpg'),
(17, '609a2441d1210', '609a24c3879a4.jpg'),
(18, '609a24e5d8a6f', '609a2529b8814.jpg'),
(19, '609a24e5d8a6f', '609a2529b9532.jpg'),
(20, '609a272fe6ad0', '609a27b490819.jpg'),
(21, '609a272fe6ad0', '609a27ef4e861.jpg'),
(22, '609a2803480b8', '609a285991c53.jpg'),
(23, '609a2803480b8', '609a28599224d.jpg'),
(24, '609a28797ec0d', '609a28d6d3951.jpg'),
(25, '609a28797ec0d', '609a28d6d44b8.png'),
(26, '609a29e258485', '609a2a313fe81.jpg'),
(27, '609a29e258485', '609a2a31403d5.jpg'),
(28, '609a2a5151d61', '609a2a9ceeb7e.jpg'),
(29, '609a2a5151d61', '609a2a9cef094.jpg'),
(31, '609a2aca06bc5', '609a2afe506a6.jpg'),
(32, '609a2aca06bc5', '609a2b3d60ec7.jpg'),
(33, '609a2b4b0fda5', '609a2b94a1ca0.jpg'),
(34, '609a2b4b0fda5', '609a2b94a218b.jpg'),
(35, '609a2c3968b98', '609a2cbc7f041.jpeg'),
(36, '609a2c3968b98', '609a2cceb8b18.jpeg'),
(37, '609a2c3968b98', '609a2cceb916d.jpeg'),
(38, '609a2d26f4023', '609a2d8bc5c71.jpeg'),
(39, '609a2d26f4023', '609a2d8bc68f3.jpeg'),
(40, '609a2d26f4023', '609a2d8bc73f4.jpeg'),
(41, '609a2d9ab4ac3', '609a2e13373f8.jpg'),
(42, '609a2d9ab4ac3', '609a2e133784f.jpg'),
(43, '609a2e2ccc185', '609a2e90612d7.jpg'),
(44, '609a2e2ccc185', '609a2e906179f.jpg'),
(45, '609a2ea043fbd', '609a2f35baca6.jpg'),
(46, '609a2ea043fbd', '609a2f35bb4db.jpg'),
(47, '609a2f3805260', '609a2fe342fdf.jpeg'),
(48, '609a2f3805260', '609a2fe34425a.jpeg'),
(49, '609a2fe4d64ed', '609a303c629eb.jpeg'),
(50, '609a2fe4d64ed', '609a303c62fa0.jpeg'),
(51, '609a303d7af34', '609a316900d68.jpg'),
(52, '609a303d7af34', '609a31690136f.jpeg'),
(53, '609a303d7af34', '609a3169018be.jpg'),
(54, '609a316e69ca7', '609a31ee5969f.jpeg'),
(55, '609a316e69ca7', '609a31ee59cd0.jpeg'),
(56, '609a320e825bd', '609a329b5e74b.jpg'),
(57, '609a320e825bd', '609a329b5f4f7.jpg'),
(58, '609a320e825bd', '609a329b5fe19.jpg'),
(59, '609a329d89fd4', '609a333094b6a.jpeg'),
(60, '609a329d89fd4', '609a33309502d.jpeg'),
(61, '609a329d89fd4', '609a333095605.jpeg'),
(62, '609a33f3eb3c2', '609a34763f427.png'),
(63, '609a3be7cb672', '609a3bfd3a386.png'),
(64, '609a3c15cb3f6', '609a3c916b4e8.png'),
(65, '609a3c15cb3f6', '609a3c916c05d.png'),
(66, '609a3c92d6cd5', '609a3e11ba608.png'),
(67, '609a3c92d6cd5', '609a3e4650333.png'),
(68, '609a3e4f2c408', '609a41372603b.png'),
(69, '609a413869f95', '609a4191dc9ff.png'),
(70, '609a4194a45f9', '609a4208a3736.png'),
(71, '609a4194a45f9', '609a4208a40c7.png'),
(72, '609a4215c9de1', '609a426dc5093.png'),
(73, '609a426f17cdb', '609a431639090.png'),
(74, '609a4317a2959', '609a4370be7be.png'),
(75, '609a437c5a3c7', '609a440b03619.png'),
(76, '609a437c5a3c7', '609a440b04999.png'),
(77, '609a44243ef79', '609a44bb6f72d.png'),
(78, '609a44243ef79', '609a44bb701ad.png'),
(79, '609a44cdecd98', '609a45e7c2ecc.png');

-- --------------------------------------------------------

--
-- Table structure for table `publish`
--

CREATE TABLE `publish` (
  `id_publish` int(11) NOT NULL,
  `id_post_foto` varchar(150) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kontak` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `uploaded_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publish`
--

INSERT INTO `publish` (`id_publish`, `id_post_foto`, `id_kategori`, `judul`, `deskripsi`, `alamat`, `kontak`, `created_at`, `uploaded_by`) VALUES
(2, '609a1e456d6e9', 1, 'Bromo', 'Gunung Bromo adalah salah satu tempat wisata Jawa Timur paling populer, dan jadi favorit banyak orang karena pemandangannya yang indah dan akses yang cukup baik. tidak seperti naik gunung pada umumnya, kamu tidak perlu trekking hingga berjam-jam untuk sampai ke Kawah Bromo karena kamu bisa naik mobil jeep ke sana, lalu baru jalan menanjak sedikit ke puncak.', 'Area Gn. Bromo, Podokoyo, Tosari, Pasuruan, Jawa Timur', 'bookingbromo.bromotenggersemeru.org', '2021-05-11 06:03:49', 1),
(3, '609a1fbfd1e7b', 1, 'Kawah Ijen', 'Kawah Ijen adalah salah satu tempat wisata populer di Jawa Timur sejak lama, tetapi tempat ini tengah naik popularitasnya dalam dua tahun terakhir. Daya tarik utama Ijen tentu saja kawah birunya dan aktivitas penambangan belerang yang ikonik di sini. Belum lagi dengan daya tarik api biru - fenomena alam yang tak banyak bisa dilihat di tempat lainnya di dunia.', 'Kawah Ijen, Curah Macan, Kalianyar, Sempol, Kabupaten Bondowoso, Jawa Timur 68288', '0813-2235-1364', '2021-05-11 06:10:07', 1),
(4, '609a20ea3e893', 1, 'Taman Nasional Baluran', 'Taman Nasional Baluran adalah salah satu Taman Nasional di Indonesia yang terletak di wilayah Banyuputih, Situbondo, Jawa Timur, Indonesia. Di Taman Nasional Baluran, kamu akan menemukan lanskap alam yang benar-benar beda dari yang biasa kamu lihat di bagian Indonesia lainnya: alih-alih hutan tropis yang lebat dengan barisan pepohonan, Taman Nasional Baluran punya padang sabana yang bakal mengingatkan kamu pada lanskap Afrika.', 'Area Hutan/Kebun, Sumberwaru, Kec. Banyuputih, Kabupaten Situbondo, Jawa Timur', '(333) 461936', '2021-05-11 06:15:06', 1),
(5, '609a2270247a3', 1, 'Air Terjun Tumpak Sewu', 'Air Terjun Tumpak Sewu atau disebut juga Coban Sewu adalah sebuah air terjun berketinggian sekira 120 meter yang berada di perbatasan Kabupaten Lumajang dan Kabupaten Malang, Provinsi Jawa Timur. Air Terjun Tumpak Sewu merupakan air terjun terindah di Pulau Jawa dan Indonesia. Agak berbeda dengan air terjun pada umumnya, Tumpak Sewu cukup unik karena berbentuk lebar seperti tirai, karena aliran air Sungai Glidik yang melebar. Gak heran kalau banyak orang kemudian menyebut Air Terjun Tumpak Sewu seperti Niagara di Amerika Utara.', 'kampung siji, Jl. Raya Sidomulyo, Besukcukit, Sidomulyo, Pronojiwo, Kabupaten Lumajang, Jawa Timur 67374', '0813-3406-1395', '2021-05-11 06:21:36', 1),
(6, '609a23096d535', 1, 'Bukit Jaddih', 'Bukit Jaddih adalah tambang kapur yang meningkat popularitasnya dalam beberapa tahun terakhir karena pemandangannya yang Instagrammable. ', 'Jakan, Parseh, Socah, Kabupaten Bangkalan, Jawa Timur 69161', '0813-3111-8592', '2021-05-11 06:24:09', 1),
(7, '609a236a9719c', 1, 'Air Terjun Madakaripura', 'Air terjun Madakaripura adalah sebuah air terjun yang terletak di Kabupaten Probolinggo, Provinsi Jawa Timur. Air terjun setinggi 200 meter ini merupakan air terjun tertinggi di Pulau Jawa dan tertinggi kedua di Indonesia. Aliran air di Air Terjun Madakaripura berasal dari Gunung Bromo, karena letaknya hanya sekitar 1 jam di utara Bromo.', 'Sapih, Branggah, Lumbang, Probolinggo, Jawa Timur  67183', '0823-6234-1234', '2021-05-11 06:25:46', 1),
(8, '609a2441d1210', 1, 'Arosbaya Pelalangan', 'Bukit Arosbaya adalah bekas tambang kapur yang sudah lama tidak aktif. Bukit ini juga merupakan tempat wisata Madura yang Instagrammable karena pemandangannya yang indah.', 'Plalangan Madura, Buduran, Arosbaya, Makam Air Mata, Buduran, Arosbaya, Kabupaten Bangkalan, Jawa Timur 69151', '0823-0099-3121', '2021-05-11 06:29:21', 1),
(9, '609a24e5d8a6f', 1, 'Gili Ketapang', 'Gili Ketapang adalah sebuah desa dan pulau kecil di Selat Madura, tepatnya 8 km di lepas pantai utara Probolinggo. Pulau ini memiliki berbagai rekreasi seperti snorkeling dan yang lainnya.', 'Gili ketapang, Jl. Tanjung Tembaga Barat, Sapia, Mangunharjo, Probolinggo, Jawa Timur', '0823-3105-5568', '2021-05-11 06:32:05', 1),
(10, '609a272fe6ad0', 1, 'Museum Sampoerna', 'House of Sampoerna adalah sebuah museum tembakau dan markas besar Sampoerna yang terletak di Surabaya. Gaya arsitektur dari bangunan utamanya yang dipengaruhi oleh gaya kolonial Belanda dibangun pada 1862 dan sekarang menjadi situs sejarah.', 'Taman Sampoerna No.6, Krembangan Utara, Kec. Pabean Cantian, Kota SBY, Jawa Timur 60163', '(031) 3539000', '2021-05-11 06:41:51', 1),
(11, '609a2803480b8', 1, 'Desa Jodipan', 'Desa Jodipan atau biasa disebut sebagai kampung warna warni ini memiliki keunikan pada struktur dan pewarnaan daerahnya. desa ini memiliki pemandangan yang Instagrammable karena hampir di setiap sudut desa memiliki berbagai spot foto yang menarik.', 'Jodipan, Kec. Blimbing, Kota Malang, Jawa Timur', '0812-2448-1944', '2021-05-11 06:45:23', 1),
(12, '609a28797ec0d', 1, 'Museum Angkut Malang', 'Museum Angkut merupakan museum transportasi dan tempat wisata modern yang terletak di Kota Batu, Jawa Timur, sekitar 20 km dari Kota Malang. Museum ini terletak di kawasan seluas 3,8 hektar di lereng Gunung Panderman dan memiliki lebih dari 300 koleksi jenis angkutan tradisional hingga modern. Museum ini terbagi dalam beberapa zona yang didekorasi dengan setting landscape model bangunan dari benua Asia, Eropa hingga Amerika.', 'Jl. Terusan Sultan Agung No.2, Ngaglik, Kec. Batu, Kota Batu, Jawa Timur 65314', 'https://jtp.id/museumangkut/', '2021-05-11 06:47:21', 1),
(13, '609a29e258485', 1, 'Jatim Park', 'Jatim Park adalah sebuah tempat rekreasi dan taman belajar yang terdapat di Kota Batu, Jawa Timur. Objek wisata ini memiliki memiliki 36 wahana, di antaranya kolam renang raksasa, spinning coaster, dan drop zone.', 'Jl. Kartika No.2, Sisir, Kec. Batu, Kota Batu, Jawa Timur 65315', '(0341) 597777', '2021-05-11 06:53:22', 1),
(14, '609a2a5151d61', 1, 'Candi Penantaran', 'Candi Penataran atau nama aslinya adalah Candi Palah adalah sebuah gugusan candi bersifat keagamaan Hindu Siwaitis yang terletak di Desa Penataran, Kecamatan Nglegok, Kabupaten Blitar, Jawa Timur.', 'Penataran, Nglegok, Blitar, Jawa Timur 66181', 'candipenataran.business.site', '2021-05-11 06:55:13', 1),
(15, '609a2aca06bc5', 1, 'Gua Gong', 'Goa Gong terletak di Desa Bomo, Kecamatan Punung, Donorejo, sekitar 140 km arah selatan kota Solo atau 30 km arah Barat Daya Kota Pacitan. Dinamakan Goa Gong karena didalamnya terdapat sebuah batu yang jika dipukul akan menimbulkan bunyi seperti Gong yang ditabuh. Goa ini memiliki keindahan yang luar biasa, para pengunjung akan dibuat takjub dengan mahakarya dari keindahan dalam goa ini.', 'Jl. Salam, Salam, Bomo, Punung, Kabupaten Pacitan, Jawa Timur 63553', '0812-3462-2927', '2021-05-11 06:57:14', 1),
(16, '609a2b4b0fda5', 1, 'Wisata Bahari Lamongan ', 'Wisata Bahari Lamongan atau disingkat WBL adalah tempat wisata bahari yang terletak di Kecamatan Paciran, Kabupaten Lamongan, Jawa Timur. Seperti tempat wisata pada umumnya, Bahari Lamongan juga memiliki berbagai wahana seperti kolam renang dan Halilintar.', 'Jl. Raya Paciran, Paciran, Kec. Paciran, Kabupaten Lamongan, Jawa Timur 62264', '(0322) 666111', '2021-05-11 06:59:23', 1),
(17, '609a2c3968b98', 3, 'The Onsen Hot Spring Resort Songgoriti', 'akomodasi ini adalah pilihan yang pas jika Anda mencari liburan yang tenang dan jauh dari keramaian.\r\nPengalaman menginap Anda tak akan terlupakan berkat pelayanan istimewa yang disertai oleh berbagai fasilitas pendukung untuk kenyamanan Anda.\r\nResepsionis siap 24 jam untuk melayani proses check-in, check-out dan kebutuhan Anda yang lain. Jangan ragu untuk menghubungi resepsionis, kami siap melayani Anda.\r\n\r\nTerdapat restoran yang menyajikan menu lezat ala The Onsen Hot Spring Resort Batu khusus untuk Anda.\r\n\r\nWiFi tersedia di seluruh area publik properti untuk membantu Anda tetap terhubung dengan keluarga dan teman.\r\nThe Onsen Hot Spring Resort Batu adalah akomodasi dengan fasilitas baik dan kualitas pelayanan memuaskan menurut sebagian besar tamu.\r\nPengalaman berkesan dan tak terlupakan akan Anda dapatkan selama menginap di akomodasi The Onsen Hot Spring Resort Batu.', 'Jl. Arumdalu No.98, Songgokerto, Kec. Batu, Kota Batu, Jawa Timur 65312', 'info@theonsenresort.com', '2021-05-11 07:06:31', 2),
(18, '609a2d26f4023', 3, 'Baobab Safari Resort', 'Baobab Safari Resort adalah sebuah hotel di Jawa Timur yang menawarkan pengalaman menginap bernuansa alam. Beralamat di Jatiarjo, Prigen, Pasuruan, Jawa Timur, hotel ini berada dalam kompleks pariwisata Taman Safari Indonesia Prigen. Dari dalam kamar, Anda bisa melihat pemandangan pegunungan, sabana, dan aneka satwa layaknya di alam liar Afrika.\r\n\r\nTidak hanya lingkungan sekitarnya saja yang menyajikan nuansa alam. Desain interior dan ornamen resort pun banyak mengusung tema natural modern, sebagaimana tampak dari unsur kayu dan bebatuan yang dominan. Bahkan, ada pula pepohonan dan kolam di dalam lingkungan hotel, membuat akomodasi ini semakin menyatu dengan alam.\r\n\r\nResor Baobab Safari memiliki 148 kamar yang terbagi menjadi 6 tipe kamar tamu, 3 meeting room, dan 1 ballroom. Pilihan kamar yang tersedia yaitu Deluxe Hill, Deluxe Savana, Junior Suit Room Hill, Junior Suit Room Savana, Premium Room Hill, dan Premium Room Savana. Setiap kamar di akomodasi berbintang 4 ini telah dilengkapi dengan fasilitas memadai. Sebut saja TV kabel dengan acara yang komplet, mesin pemanas air untuk membuat kopi dan teh, brankas, kulkas, AC, shower air hangat, dan kelengkapan toileteries. Tidak hanya itu saja, ada pula balkon untuk menikmati indahnya pemandangan di sekitar.\r\n\r\nSelain menyaksikan pemandangan dari kamar mewah, ada banyak hal menarik yang bisa Anda lakukan di dalam hotel. Di antaranya adalah berenang, berjalan-jalan di taman, night walk, dan feeding giraffes atau memberi makan jerapah. Hal yang unik dari kolam renang di Resort Baobab Safari ialah Anda bisa berenang sembari melihat hewan-hewan yang berada di seberang kolam renang, seperti jerapah, badak, zebra, kerbau, kuda nil, rusa, dan sebagainya.\r\n\r\nTerlebih, ada tempat duduk malas di sekitar kolam yang dapat Anda gunakan untuk bersantai. Selain itu, ada pula bar di pinggir kolam renang yang menyajikan aneka kudapan dan minuman menyegarkan.\r\n\r\nFasilitas lain yang dimiliki oleh hotel ini ialah kedai kopi, gym, spa, bar/lounge, dan ruang meeting yang dapat dipergunakan untuk acara kantor. Hotel ini juga memiliki ballroom yang dapat disewa untuk menggelar acara besar, seperti pesta pernikahan. Ada pula sambungan WiFi yang tersebar di area resort.\r\n\r\nTidak hanya itu saja, Baobab Safari Resort juga memanjakan para tamu hotel dengan sajian lezat di Kilimanjaro Restaurant. Restoran yang didesain dengan menawan ini menyajikan aneka kuliner nusantara dan western delicacy. Menu yang mereka tawarkan di antaranya adalah Prawn Avocado Salad, Thailand Sweet, Sate Maranggi, Chiken Cordon Bleau, Flying Noodle, aneka minuman menyegarkan, dan masih banyak lagi.\r\n\r\nTerlepas dari kemewahan dan kenyamanan yang ditawarkan di dalam hotel, kelebihan utama akomodasi ini adalah lokasinya yang sangat strategis. Berada di lereng Gunung Arjuna, Baobab berdiri di kawasan Taman Safari Prigen. Artinya, tamu hotel hanya perlu berjalan kaki saja untuk merasakan serunya berinteraksi dengan satwa liar. Bahkan, pihak hotel juga menawarkan paket menginap sekaligus tiket masuk ke Taman Safari Prigen, terutama pada masa liburan seperti Natal dan tahun baru.\r\n\r\nSetelah menghabiskan siang hari berinteraksi dengan satwa di Taman Safari Prigen, di malam hari pun masih ada keseruan lain. Bagi tamu hotel yang datang bersama anak, ada Kid’s Story Telling yang dimulai pukul 19:00. Anak-anak dapat mendengarkan dongeng tentang kehidupan satwa liar yang ditampilkan dengan boneka tangan berbentuk hewan-hewan yang lucu. Kemudian mulai pukul 21:00, Anda bisa mengikuti night walk yaitu berjalan-jalan untuk melihat kehidupan binatang di malam hari.\r\n\r\nMasih dalam satu naungan dengan Taman Safari Prigen, cukup dengan berjalan kaki dari resort Anda akan mendapati Safari Water World. Wahana seluas 3,5 hektar ini memiliki setidaknya 4 tipe kolam renang untuk pengunjung semua umur. Ada juga seluncuran air dan replika Kapal Bajak Laut, menjadikan Safari Water World tempat yang seru untuk dikunjungi bersama keluarga maupun teman.\r\n\r\nLantas, bagi Anda yang ingin berjalan-jalan, pihak hotel juga menyediakan rental sepeda dan rental mobil. Selain mengunjungi Taman Safari Indonesia Pasuruan, pilihan objek wisata lain yaitu Saygon Night Park serta Finna Golf and Country Club. Kedua tempat tersebut berjarak sekitar 14,2 km dari kawasan hotel dan dapat ditempuh selama 30-40 menit.\r\n\r\nBaobab Safari Resort merupakan hotel unik yang menawarkan wisata edukasi tentang alam dan hewan. Anda pun bisa merasakan kesejukan alam dengan kondisi yang tetap nyaman dan menyenangkan.', 'Gn. Princi, Jatiarjo, Prigen, Pasuruan, Jawa Timur 67157', '(+62343) 6743888', '2021-05-11 07:07:18', 2),
(19, '609a2d9ab4ac3', 3, 'Pines Garden Resort', 'Pines Garden Resort memiliki segala fasilitas penunjang bisnis untuk Anda dan kolega. Pines Garden Resort adalah tempat bermalam yang tepat bagi Anda yang berlibur bersama keluarga. Nikmati segala fasilitas hiburan untuk Anda dan keluarga.\r\n\r\nJika Anda berniat menginap dalam jangka waktu yang lama, Pines Garden Resort adalah pilihan tepat. Berbagai fasilitas yang tersedia dan kualitas pelayanan yang baik akan membuat Anda merasa sedang berada di rumah sendiri. hotel ini adalah pilihan yang pas jika Anda mencari liburan yang tenang dan jauh dari keramaian.\r\n\r\nPelayanan memuaskan serta fasilitas hotel yang memadai akan membuat Anda nyaman berada di Pines Garden Resort. Tersedia kolam renang untuk Anda bersantai sendiri maupun bersama teman dan keluarga.\r\n\r\nResepsionis siap 24 jam untuk melayani proses check-in, check-out dan kebutuhan Anda yang lain. Jangan ragu untuk menghubungi resepsionis, kami siap melayani Anda. Terdapat restoran yang menyajikan menu lezat ala Pines Garden Resort khusus untuk Anda.\r\n\r\nWiFi tersedia di seluruh area publik properti untuk membantu Anda tetap terhubung dengan keluarga dan teman. Pines Garden Resort adalah akomodasi dengan fasilitas baik dan kualitas pelayanan memuaskan menurut sebagian besar tamu.\r\n\r\nDengan fasilitas yang memadai, Pines Garden Resort menjadi pilihan yang tepat untuk menginap.', 'Jalan Ijen 5, Tretes, Pasuruan, Prigen, Pasuruan, Jawa Timur, Indonesia, 67157', 'info@pinesgarden.com', '2021-05-11 07:09:14', 2),
(20, '609a2e2ccc185', 3, 'THE BATU Hotel &amp; Villas', 'The Batu Hotel &amp; Villas yang berada di Malang menyediakan beberapa pilihan tipe akomodasi nyaman. Letaknya hanya 5 menit berkendara dari Museum Angkut. Hotel ini memiliki fasilitas rapat, spa dan ruang permainan tersendiri. Akses WiFi gratis tersedia di seluruh area hotel.\r\n\r\nThe Batu Hotel &amp; Villas menyediakan sejumlah unit kamar dengan tempat tidur bertingkat dan kamar mandi bersama. Tipe lainnya adalah vila dan cottage yang luas dengan layanan pribadi dan memiliki beberapa kamar serta ruang keluarga terpisah dan taman pribadi. Selain ber-AC, di kamar tersedia TV layar datar dengan saluran TV kabel, fasilitas pembuat teh/kopi dan area tempat duduk. Kamar mandi dalam dilengkapi dengan shower dan peralatan mandi gratis.\r\n\r\nLayanan bersantap di kamar tersedia setiap hari dengan permintaan, sedangkan restoran hotel menyediakan menu terpisah untuk makan siang dan makan malam dengan sajian Asia dan lokal. Tamu juga dapat menjelajah area sekitar yang menyediakan banyak restoran dengan sajian internasional di Lippo Plaza Batu, hanya dengan 5 menit berkendara dari hotel.\r\n\r\nThe Batu Hotel &amp; Villas menyediakan pusat bisnis dan fasilitas parkir pribadi gratis untuk tamu yang membawa kendaraan. Staf yang ramah di resepsionis 24 jam dapat membantu tamu dengan permintaan laundry, penyewaan mobil, pemesanan aktivitas wisata atau pengaturan tur sehari dengan biaya tambahan.\r\n\r\nDari hotel ini butuh 10 menit berjalan kaki untuk ke taman rekreasi Jatim Park I, sedangkan pemandian air panas Taman Wisata Tirta Nirwana Songgoriti berjarak 10 menit berkendara. Perjalanan ke Bandara Abdulrachman Saleh memakan waktu 1 jam berkendara dengan mobil. Layanan antar-jemput bandara tersedia dengan biaya tambahan', 'Jl. Sultan Agung No.29, Sisir, Kec. Batu, Kota Batu, Jawa Timur 65314', 'marketing@thebatuvillas.com', '2021-05-11 07:11:40', 2),
(21, '609a2ea043fbd', 3, 'Amaranta Guest House', 'Bagi Anda yang menginginkan kualitas pelayanan oke dengan harga yang ramah di kantong, Amaranta Guest House adalah pilihan yang tepat. Karena meski murah, akomodasi ini menyediakan fasilitas memadai dan pelayanan yang tetap terjaga mutunya.\r\n\r\nakomodasi ini adalah pilihan tepat bagi Anda dan pasangan yang ingin menikmati liburan romantis. Dapatkan pengalaman yang penuh kesan bersama pasangan dengan menginap di Amaranta Guest House. Amaranta Guest House memiliki segala fasilitas penunjang bisnis untuk Anda dan kolega.\r\n\r\nAmaranta Guest House adalah tempat bermalam yang tepat bagi Anda yang berlibur bersama keluarga. Nikmati segala fasilitas hiburan untuk Anda dan keluarga.\r\n\r\nJika Anda berniat menginap dalam jangka waktu yang lama, Amaranta Guest House adalah pilihan tepat. Berbagai fasilitas yang tersedia dan kualitas pelayanan yang baik akan membuat Anda merasa sedang berada di rumah sendiri.\r\n\r\nResepsionis siap 24 jam untuk melayani proses check-in, check-out dan kebutuhan Anda yang lain. Jangan ragu untuk menghubungi resepsionis, kami siap melayani Anda. WiFi tersedia di seluruh area publik properti untuk membantu Anda tetap terhubung dengan keluarga dan teman.\r\n\r\nAmaranta Guest House adalah akomodasi dengan fasilitas baik dan kualitas pelayanan memuaskan menurut sebagian besar tamu. Pelayanan yang baik dengan harga terjangkau akan membuat Anda merasa nyaman menginap di Amaranta Guest House.', 'Jalan Melati Kavling Atas No. 15, Songgokerto, Kec. Batu, Kota Batu, Jawa Timur 65312', '(0341) 3073247', '2021-05-11 07:13:36', 2),
(22, '609a2f3805260', 3, 'Three Eight Front One Boutique Hotel Batu', 'Dengan pemandangan gunung yang megah, Three Eight Front One Boutique Batu Malang terletak di dataran tinggi Batu dan hanya 7 menit berkendara dari Museum Angkut dan 10 menit berkendara dari Batu Night Spectacular. Hotel ini menawarkan kolam renang outdoor dan parkir pribadi gratis. WiFi gratis juga dapat diakses di seluruh hotel.\r\n\r\nSetiap kamar di hotel ini berpendingin ruangan dan dilengkapi dengan televisi layar datar, air minum botol gratis serta fasilitas pembuat kopi/teh. Kamar mandi dalam dilengkapi dengan hot shower, handuk dan perlengkapan mandi.\r\n\r\nRestoran di Three Eight Front One Boutique Batu Malang menawarkan beragam hidangan khas Indonesia dan terbuka untuk sarapan, makan siang dan makan malam. Kamu dapat memilih untuk menikmati santapanmu di restoran atau di atap hotel sambil menyeruput minuman nikmat dari kafe. Layanan kamar yang tersedia juga dapat mengantarkan makanan langsung ke kamarmu. Staff resepsionis yang ramah tersedia 24 jam dan siap membantumu dengan segala kebutuhanmu. Beberapa fasilitas lain yang tersedia adalah taman bermain anak dan ruang rapat.\r\n\r\nBatu Town Square terletak 2,3 km dari hotel, sementara Jatim Park terletak 3,5 km dari hotel. Bandar terdekat adalah Bandara Abdul Rachman Saleh yang terletak 32,6 km dari hotel. Kamu juga dapat meminta layanan antar-jemput bandara dengan biaya tambahan.\r\n', 'Jalan Hasanudin, No. 1 Kota Batu, Malang, Jawa Timur, 65313', '(0341) 511777', '2021-05-11 07:16:08', 2),
(23, '609a2fe4d64ed', 3, 'Hotel Ciputra World Surabaya', 'Hotel Ciputra World Surabaya berdiri dengan megahnya di pusat Kota Surabaya. Hotel bintang 5 ini memiliki arsitektur modern yang sangat unik serta menawarkan pengalaman menginap yang nyaman dan sangat berkelas. Kunjungan ke Surabaya dalam rangka pekerjaan atau pun wisata terasa semakin luar biasa dengan memilih akomodasi satu ini.\r\n\r\nKemewahan tergambar jelas dalam kamar-kamar yang ada di akomodasi satu ini. Tersedia pilihan kamar Deluxe, Superior Deluxe, dan Grand Deluxe yang dapat dipesan dengan atau tanpa paket sarapan. Tamu pun bebas memilih ingin fasilitas double bed atau dua twin bed.\r\n\r\nSetiap kamar berdesain modern dan memiliki luas 30-36 m2, tergantung pada tipe kamarnya. Setiap furnitur yang dipilih merupakan kualitas terbaik dan didesain oleh profesional sehingga menghadirkan suasana yang tak hanya mewah, tetapi juga secara estetis sangat menarik.\r\n\r\nKamar di Ciputra World Hotel ini ber-AC dan dilengkapi dengan sambungan Wi-Fi, televisi, dan koran gratis untuk membuat tamu tetap update berita atau hiburan terkini. Ada pula fasilitas pelengkap kamar, di antaranya meja, kulkas, pembuat kopi dan teh, brankas, serta tirai (blackout drapes) untuk memastikan privasi tamu terjaga seratus persen. Kamar mandi pun tersedia dengan peralatan mandi lengkap dan bathtub yang mewah.\r\n\r\nHotel Ciputra World Surabaya juga memiliki aneka fasilitas mewah yang dapat menunjang aktivitas menarik selama tamu menginap di hotel ini. Untuk melepas penat setelah seharian beraktivitas, terdapat layanan pijat dan spa yang dilakukan oleh terapis yang ramah dan terlatih. Tamu juga dapat menghabiskan waktu senggang di jacuzzi atau sauna di dalam hotel ini.\r\n\r\nJika ingin olahraga, pusat kebugaran adalah fasilitas yang bisa dimanfaatkan oleh tamu. Untuk yang kurang berminat melakukan olahraga di dalam ruangan, terdapat kolam renang luar ruangan dengan air bersih dan bisa dipakai kapan saja. Di tepi kolam renang, para tamu dapat duduk-duduk atau berjemur dengan santai.\r\n\r\nWisata kuliner tak boleh dilewatkan ketika berkunjung ke hotel ini. Tamu tidak harus keluar dari hotel untuk mendapatkan makanan lezat. Makanan Indonesia dan Barat dihidangkan di dalam restoran dan dapat dipesan untuk sarapan, makan siang, serta makan malam. Hotel ini juga memiliki kafe untuk tamu yang ingin bersantai seraya menikmati minuman kesukaan dan menikmati alunan musik.\r\n\r\nHotel Ciputra World Surabaya berada di Jalan Mayjend Sungkono 87-87, bersebelahan dengan pusat perbelanjaan termegah di Surabaya, Ciputra World Mall. Hotel dan mall ini menjadi kombinasi arsitektur megah dan disebut-sebut akan menjadi ikon modern Kota Surabaya.\r\n\r\nTempat-tempat populer lain juga terletak tak jauh dari Ciputra World Hotel. Misalnya, Surabaya Town Square yang hanya berjarak 830 m, sedangkan kebun Binatang Surabaya dan Patung Sura dan Buaya berada sekitar 1,5 km. Kebun binatang tersebut merupakan yang terbesar di Asia dengan koleksi hewan yang cukup lengkap. Patung ikan sura dan buaya merupakan ikon Kota Surabaya sehingga wajib dikunjungi.\r\n\r\nTak jauh dari Patung Sura dan Baya, terdapat Taman Bungkul yang cocok untuk tamu yang ingin berjalan-jalan di area sejuk di tengah kota. Taman ini juga dapat digunakan untuk melakukan olahraga papan seluncur dan sepeda. Tersedia juga panggung untuk menampilkan hiburan secara langsung.\r\n\r\nDengan kombinasi lokasi yang sangat strategis di pusat kota, arsitektur modern dan mewah, fasilitas lengkap, dan pelayanan terbaik, Hotel Ciputra World Surabaya akan menjadi pilihan terbaik untuk siapa saja yang menginginkan kemewahan dan kenyamanan.', 'Surabaya Superblock, Ciputra World, Jl. Mayjen Sungkono No.87-89, Gn. Sari, Kec. Dukuhpakis, Kota SBY, Jawa Timur 60224', '(031) 51201000', '2021-05-11 07:19:00', 2),
(24, '609a303d7af34', 3, 'Oak Tree Glamping Resort', 'Menginap di OAK TREE GLAMPING RESORT tak hanya memberikan kemudahan untuk mengeksplorasi destinasi petualangan Anda, tapi juga menawarkan kenyamanan bagi istirahat Anda. akomodasi ini adalah pilihan yang pas jika Anda mencari liburan yang tenang dan jauh dari keramaian.\r\n\r\nPengalaman menginap Anda tak akan terlupakan berkat pelayanan istimewa yang disertai oleh berbagai fasilitas pendukung untuk kenyamanan Anda. Tersedia kolam renang untuk Anda bersantai sendiri maupun bersama teman dan keluarga.\r\n\r\nResepsionis siap 24 jam untuk melayani proses check-in, check-out dan kebutuhan Anda yang lain. Jangan ragu untuk menghubungi resepsionis, kami siap melayani Anda.\r\n\r\nTerdapat restoran yang menyajikan menu lezat ala OAK TREE GLAMPING RESORT khusus untuk Anda. WiFi tersedia di seluruh area publik properti untuk membantu Anda tetap terhubung dengan keluarga dan teman.\r\n\r\nOAK TREE GLAMPING RESORT adalah akomodasi dengan fasilitas baik dan kualitas pelayanan memuaskan menurut sebagian besar tamu. Pengalaman berkesan dan tak terlupakan akan Anda dapatkan selama menginap di akomodasi OAK TREE GLAMPING RESORT.', 'Jl. Raya Tawangargo No.1, Sisir, Kec. Batu, Kota Batu, Jawa Timur 65314', '(0341) 3077777', '2021-05-11 07:20:29', 2),
(25, '609a316e69ca7', 3, 'Lembah Metro Resort', 'Jika Anda memiliki agenda kegiatan yang membutuhkan ruangan besar, maka Lembah Metro Resort adalah pilihan yang tepat. Hotel ini memiliki ruang pertemuan yang luas dan dilengkapi dengan berbagai fasilitas penunjang.\r\n\r\nakomodasi ini adalah pilihan tepat bagi Anda dan pasangan yang ingin menikmati liburan romantis. Dapatkan pengalaman yang penuh kesan bersama pasangan dengan menginap di Lembah Metro Resort . Lembah Metro Resort adalah pilihan tepat bagi Anda yang ingin menghabiskan waktu dengan berbagai fasilitas mewah. Nikmati kualitas layanan terbaik dan pengalaman mengesankan selama menginap di akomodasi ini.\r\n\r\nDesain dan arsitektur menjadi salah satu faktor penentu kenyamanan Anda di akomodasi. Lembah Metro Resort menyediakan tempat menginap yang tak hanya nyaman untuk beristirahat, tapi juga desain cantik yang memanjakan mata Anda.\r\n\r\nLembah Metro Resort memiliki segala fasilitas penunjang bisnis untuk Anda dan kolega. Lembah Metro Resort adalah tempat bermalam yang tepat bagi Anda yang berlibur bersama keluarga. Nikmati segala fasilitas hiburan untuk Anda dan keluarga.\r\n\r\nJika Anda berniat menginap dalam jangka waktu yang lama, Lembah Metro Resort adalah pilihan tepat. Berbagai fasilitas yang tersedia dan kualitas pelayanan yang baik akan membuat Anda merasa sedang berada di rumah sendiri. akomodasi ini adalah pilihan yang pas jika Anda mencari liburan yang tenang dan jauh dari keramaian.\r\n\r\nPengalaman menginap Anda tak akan terlupakan berkat pelayanan istimewa yang disertai oleh berbagai fasilitas pendukung untuk kenyamanan Anda. Pusat kebugaran menjadi salah satu fasilitas yang wajib Anda coba saat menginap di tempat ini. Tersedia kolam renang untuk Anda bersantai sendiri maupun bersama teman dan keluarga.\r\n\r\nResepsionis siap 24 jam untuk melayani proses check-in, check-out dan kebutuhan Anda yang lain. Jangan ragu untuk menghubungi resepsionis, kami siap melayani Anda. Terdapat restoran yang menyajikan menu lezat ala Lembah Metro Resort khusus untuk Anda.\r\n\r\nWiFi tersedia di seluruh area publik properti untuk membantu Anda tetap terhubung dengan keluarga dan teman. Lembah Metro Resort adalah akomodasi dengan fasilitas baik dan kualitas pelayanan memuaskan menurut sebagian besar tamu.\r\n\r\nPengalaman berkesan dan tak terlupakan akan Anda dapatkan selama menginap di Lembah Metro Resort ', 'Jl. Metro No.46, Sisir, Kec. Batu, Kota Batu, Jawa Timur 65314', '(0341) 599988', '2021-05-11 07:25:34', 2),
(26, '609a320e825bd', 3, 'Omah Kayu Paralayang', 'Nikmati pengalaman mendebarkan paralayang di sekitar Batu, MalangTantang keberanian Anda dengan terbang ratusan meter di atas tanah Lihat pemandangan Gunung Banyak yang menakjubkan dari Omah Kayu (rumah pohon) Berburu foto-foto fotogenik di Taman Langit karena Anda akan dikelilingi dengan dekorasi yang unik', 'Jl. Gn. Banyak, Gunungsari, Kec. Bumiaji, Kota Batu, Jawa Timur 65312', '0822-3297-5886', '2021-05-11 07:28:14', 2),
(27, '609a329d89fd4', 3, 'Ubud Hotel &amp; Cottages Malang', 'Didekorasi dengan konsep arsitektur tropis, Ubud Hotel &amp; Cottages Malang akan menyambutmu dengan nuansa hangat khas Bali. Lokasinya yang strategis hanya berjarak 15 menit berkendara dari Alun Alun Malang dan 5,4 km dari Lembah Dieng Waterpark. Akomodasi ini menyediakan kamar untuk keluarga, wilayah parkir gratis, resepsionis 24 jam yang fasih dalam berbagai bahasa serta WiFi gratis yang dapat diakses di seluruh area.\r\n\r\nSeluruh kamarnya merupakan kawasan bebas merokok serta dilengkapi dengan fasilitas pembuat kopi/teh, AC dan TV layar datar. Peralatan mandi gratis tersedia di kamar mandi pribadinya.\r\n\r\nSantap sajian khas Bali dan makanan internasional di restoran hotel Tampak Siring, restoran Bale Agung dan kafe Kopi Bali. Berbagai pilihan kuliner juga tersedia di sekitar hotel seperti Ayam Pakuan Malang yang dapat ditempuh dengan 7 menit berjalan kaki, serta Golden Heritage Koffie dan Bakso Pak Samut yang berjarak 1,9 km dari hotel.\r\n\r\nSelain banyaknya pilihan tempat makan, akomodasi ini juga menyediakan fasilitas lainnya seperti bar tepi kolam, fasilitas BBQ, layanan pijat dan antar-jemput bandara yang tersedia dengan tambahan biaya.\r\n\r\nKamu dapat menuju Ubud Hotel &amp; Cottages Malang dengan berkendara sejauh 18 km dari Bandara Abdulrachman Saleh atau dari Stasiun Kota Baru dengan 15 menit berkendara. Hotel ini berlokasi sejauh 2,7 km dari MX Malang dan 8 menit berkendara dari Malang Town Square.\r\n', 'Jl. Bend. Sigura-Gura Barat No.6, Karangbesuki, Kec. Sukun, Kota Malang, Jawa Timur 65149', '(0341) 571313', '2021-05-11 07:30:37', 2),
(28, '609a33f3eb3c2', 2, 'KUPANG CANDI Kuliner Tradisional Jawa Timur', 'Makanan khas Jawa timur khususnya Surabaya dan Sidoarjo dan terkenal keenakan lontong kupangnya', 'City Of Tomorrow Lantai 1 Blok FS 11 Nomor 5, Jl. Ahmad Yani, Dukuh Menanggal, Kec. Gayungan, Kota SBY, Jawa Timur 60235', '0813-1688-7910', '2021-05-11 07:36:19', 3),
(29, '609a3be7cb672', 2, 'Cangkul (Cangkruan Kuliner)', 'Memiliki tempat yang bagus serta makanannya yang enak dan murah serta terdapat banyak kolam ikan', 'Perumahan Renojoyo Blok B, Porong, Kedungkampil, Kedungsolo, Kec. Sidoarjo, Kabupaten Sidoarjo, Jawa Timur 61274', '0856-4518-2053', '2021-05-11 08:10:15', 3),
(30, '609a3c15cb3f6', 2, 'Kuliner Ponorogo', 'Kuliner khas ponorogo yang mempunyai tempat yang nyaman serta lahan parkir yang sangat luas pelaayanan yang sangat baik serta kualitas jaringan wifi yang bagus', 'Jl. Kh. Ahmad Dahlan No.53 F, Hasanudin, Nologaten, Kec. Ponorogo, Kabupaten Ponorogo, Jawa Timur 63411', '0858-5442-2008', '2021-05-11 08:11:01', 3),
(31, '609a3c92d6cd5', 2, 'Warung kuliner cak Pri', 'Tempatnya bersih pelayanan baik makanannya sangat enak rekomendasi es oyen dalam porsi besar', 'Babadan Gang Tengah, RT.04/RW.01, Babatan, Kec. Wiyung, Kota SBY, Jawa Timur 60227', '0895-1618-3688', '2021-05-11 08:13:06', 3),
(32, '609a3e4f2c408', 2, 'KULINER MBOK NA', 'Makanan ayam geprek yang sangat renyah ditambah dengan sambal yang sangat pedas', 'Babatan, Jati, Sidoarjo Sub-Distrcit, Sidoarjo Regency, East Java 61226', '0813-5775-5257', '2021-05-11 08:20:31', 3),
(33, '609a413869f95', 2, 'Aisyah Kuliner', 'Tempat kuliner yang memiliki berbagai macam jenis makanan yang unik', 'Gajah Timur, Magersari, Sidoarjo Sub-Distrcit, Sidoarjo Regency, East Java 61212', '0852-3603-8827', '2021-05-11 08:32:56', 3),
(34, '609a4194a45f9', 2, 'Rawon Rasa', 'Makanan rawon dengan daging yang empuk serta sambal yang enak tempatnya cocok untuk kumpul keluarga', 'Jl. Kh. Ahmad Dahlan No.53 E, Bangunsari, Kec. Ponorogo, Kabupaten Ponorogo, Jawa Timur 63411', '0858-5442-2008', '2021-05-11 08:34:28', 3),
(35, '609a4215c9de1', 2, 'Masakan Kuliner Khas Rumahan', 'Makanan kuliner khas Rumahan ala jawa timur yang sangat enak serta harga yang cocok untuk semua kalangan', 'Jl. Raya Dukuh Kupang No.28, Dukuh Kupang, Kec. Dukuhpakis, Kota SBY, Jawa Timur 60225', '0812-3514-8680', '2021-05-11 08:36:37', 3),
(36, '609a426f17cdb', 2, 'Kuliner Malam Warung Pak Be', 'Masakan bebek dan ayam goreng disertai berbagai macam sambal yang pedas dan enak', 'Jl. Raya Surabaya - Malang No.73-75, Daleman, Pekauman, Kec. Sidoarjo, Kabupaten Sidoarjo, Jawa Timur 61213', '0812-4947-8403', '2021-05-11 08:38:07', 3),
(37, '609a4317a2959', 2, 'Warung Nggunung', 'Makanan khas Jawa timur ketan durian dan nasi jagung', 'Jl. Anjasmoro, RT.02/RW.03, Pucangrejo, Tukum, Wonosalam, Kabupaten Jombang, Jawa Timur 61476', '0857-9088-2999', '2021-05-11 08:40:55', 3),
(38, '609a437c5a3c7', 2, 'Warung Kuliner Cak Indro', 'Rasa ayam yang crispy membuat pembeli ingin membeli lagi dan lagi', 'Jl. Griya Kebraon Tengah, Kebraon, Kec. Karang Pilang, Kota SBY, Jawa Timur 60222', '0813-8609-7658', '2021-05-11 08:42:36', 3),
(39, '609a44243ef79', 2, 'Yaman Kuliner', 'Restoran yang memiliki tempat yang bersih serta makanan kambing oven yang sangat direkomen', 'Jl. KH Mas Mansyur No.92, Ampel, Kec. Semampir, Kota SBY, Jawa Timur 60162', '0895-3479-12460', '2021-05-11 08:45:24', 3),
(40, '609a44cdecd98', 2, 'Bakso Dewa Dewi', 'Menjual paket paket bakso yang unik seperti bakso jumbo serta adanya siomay', 'Jl. Raya Diwek No.80, Diwek, Kec. Diwek, Kabupaten Jombang, Jawa Timur 61471', '0812-5225-4848', '2021-05-11 08:48:13', 3);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id_review` int(11) NOT NULL,
  `id_publish` int(11) NOT NULL,
  `review` text NOT NULL,
  `review_by` int(11) NOT NULL,
  `review_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id_review`, `id_publish`, `review`, `review_by`, `review_at`) VALUES
(1, 2, 'hebat', 1, '2021-05-12 06:42:18'),
(2, 38, 'makanan nya enak banget', 1, '2021-05-12 06:51:52'),
(3, 39, 'ayam nya enak dan dengan harga yang murah', 1, '2021-05-12 07:25:27'),
(4, 40, 'makanannya enak banget', 21, '2021-05-18 07:20:24'),
(5, 39, 'kambing ovennya memang terbaik yang pernah saya coba', 21, '2021-05-18 07:21:12'),
(6, 20, 'Enak banget ini vila nya, bersih, soal kualitas jangan diragukan lagi karena bagus banget. Apalagi ada layanan wifi gratis yang bisa bantu kita kalo jaringannya lagi jelek', 21, '2021-05-18 07:21:59'),
(7, 22, 'hotelnya bersih dan ada kolam renangnya jadi bikin seru', 21, '2021-05-18 07:22:47'),
(8, 36, 'ayam gorengnya sih gak ada 2 nya', 15, '2021-05-18 07:23:28'),
(9, 38, 'ayam kripsy nya enak sekali, tapi sangat pedas untuk lidah saya ', 15, '2021-05-18 07:24:25'),
(10, 27, 'gaya klasik adat yang bagus untuk menambah suasana yang tenang', 15, '2021-05-18 07:25:29'),
(11, 20, 'Termantap pernah nginep disini, fasilitasnya gk ush diraguin lagi\r\n\r\n', 15, '2021-05-18 07:26:02'),
(12, 12, 'banyak mobil mobil klasik yang bagus', 15, '2021-05-18 07:26:38'),
(13, 40, 'baksonya banyak dengan harga yang murah', 8, '2021-05-18 07:27:25'),
(14, 13, 'Well, kalo ke jatim emang wajib kesini karena seseru itu. Wahananya banyak dan ga ngebosenin\r\n\r\n', 8, '2021-05-18 07:28:09'),
(15, 15, 'asik banget jalan-jalan liat gua yang estetik', 8, '2021-05-18 07:28:54'),
(16, 11, 'desa pelangi keren', 8, '2021-05-18 07:29:26'),
(17, 26, 'rumah pohonya bagus bangat', 8, '2021-05-18 07:30:18'),
(18, 38, 'pedas nya mantap', 6, '2021-05-18 07:31:12'),
(19, 27, 'ubud the best', 6, '2021-05-18 07:32:18'),
(20, 20, 'Waktu itu pernah kesini dan seru sih, kalo belum pernah kesini wajib mampir!\r\n\r\n', 6, '2021-05-18 07:32:44'),
(21, 7, 'wajib kesini kalau main ke jatim', 6, '2021-05-18 07:33:25'),
(22, 15, 'seru banget', 6, '2021-05-18 07:33:38'),
(23, 16, 'ada halilitarnya jadi asik', 6, '2021-05-18 07:34:09'),
(24, 13, 'lebih seru daripada dufan', 6, '2021-05-18 07:34:34'),
(25, 13, 'banyak permainan yang seru untuk dimainkan', 10, '2021-05-18 07:35:35'),
(26, 12, 'luas banget', 10, '2021-05-18 07:35:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(64) DEFAULT NULL,
  `email_user` varchar(255) NOT NULL,
  `password_user` varchar(255) NOT NULL,
  `roles` varchar(64) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama_user`, `email_user`, `password_user`, `roles`, `status`) VALUES
(1, 'rico', 'rico@student.pradita.ac.id', '$2y$10$K1/4twMvHNpZnJ81OxloROOwX0R9qbzlanQWqG5L6ybppgEE8g7OO', 'admin', 1),
(2, 'novia', 'novia.pramesti@student.pradita.ac.id', '$2y$10$9S8Ft2xwufZmwDJ7rIbRWe4way6.Jn/cyxiO5gSua6fd3QK89Ervm', 'admin', 1),
(3, 'piter', 'piter.tanuwijaya@student.pradita.ac.id', '$2y$10$x7dgwlib9AuNarCyyEzFx.xy4zrms3MDUzPM1/qlpBQYnd9ne3W5K', 'admin', 1),
(4, 'ahong', 'ahong88@gmail.com', '$2y$10$ao4kBTbGpIEG6wEi9sQhi.jFSQYScDd3DxkgNzpkr4vXyu6BqGXO6', 'user', 1),
(5, 'andi', 'andi456@gmail.com', '$2y$10$s0FES4kjkh5GTQbPovIddeWh1u3D1Dl2sSFLhE/dsLo5TNZ8YnVvO', 'user', 0),
(6, 'anton', 'anton911@gmail.com', '$2y$10$vhnREctlXDUmOzHE8TFPUeWBVarxLeZbuSvZTI7FsO/4bPLQXr1oC', 'user', 1),
(7, 'bharata', 'bharata@gmail.com', '$2y$10$SwJS0zRcakqmwJnft9UMP.DN2IKOcwWv.7mAzRS93PYot0tg168KW', 'user', 1),
(8, 'bobon', 'bobon321@gmail.com', '$2y$10$Y4KMEhSTNMUTbnCNcMuxduIq/G5I9VLN/jZnoSnq83SaBZmQRuOc6', 'user', 1),
(9, 'edho', 'edho643@gmail.com', '$2y$10$Rb6fPvneYJIVxFkWpJUIUu5hm3pZWfyR7KTVwtsIDm/lhyb.Y4IDu', 'user', 1),
(10, 'erick', 'erick777@gmail.com', '$2y$10$t/lGWe71PJlhSbC/YcWtC.dfd1HWosKyGmp6DfLKXRZ6viDCxwJkq', 'user', 1),
(11, 'ipin', 'ipin321@gmail.com', '$2y$10$cVrmK4iHpJeKGRTXsDcwmuL9r6vHS/eaVZbk/a6miMrxoNndKvmeq', 'user', 1),
(12, 'jarjit', 'jarjit432@gmail.com', '$2y$10$5jCBVlSU9ZM6A1WE1NwEme8ZHaXzwnNGzNPOc2Rsni30q6qUNQdBC', 'user', 1),
(13, 'joni', 'joni456@gmail.com', '$2y$10$gJeAnm61lK34Kson50N37eA12wTeH/.0y/3l328vEq0z/WMq3lsQK', 'user', 1),
(14, 'keanu', 'keanu678@gmail.com', '$2y$10$J0c7lwkUThdKkiZ.O4zI4O3BnTrMPRELYjtPRIuSNx3iEAUWK3CsK', 'user', 1),
(15, 'kenny', 'kenny65@gmail.com', '$2y$10$L0/mJ8XptKJHskSfRlILIuo1o.qfrrrFVJmCV0O0WMz6kWkUyzcBS', 'user', 1),
(16, 'kenzo', 'kenzo555@gmail.com', '$2y$10$oRRP9P1AOUuEtE8GGcKfs.rkadmucO8HMsUJEgA5Ng1NAe5PZyv76', 'user', 1),
(17, 'luna', 'luna543@gmail.com', '$2y$10$RZjx6q2udPUHM.ak7nnMMuNZ1ws2FVKdb6odn2BW7g7FBjl3dcfS.', 'user', 1),
(18, 'milly', 'milly765@gmail.com', '$2y$10$R0b8uBxyhdHdxa5Iu0NrS.4xq8EN3E/elvg07umGf9/0YSd3Bga9i', 'user', 1),
(19, 'patrick', 'patrick654@gmail.com', '$2y$10$U5Q1AGuHhCuMuyKC8Gvd6erMhhkMIGQ3/FbgbeOYJS8kijlfpRVAq', 'user', 1),
(20, 'reza', 'reza345@gmail.com', '$2y$10$nz/Hq7Xoyalx5OyBkyPF2e9ZdknKvL4xUeUDg3s6/vbiKiYc2gTR.', 'user', 1),
(21, 'sony', 'sony765@gmail.com', '$2y$10$S27E/k5LZ.AVPM/cVcuQFeFp6YY8DFS6jaaqfv6fyNLJ.Ovp7k59K', 'user', 1),
(22, 'tony', 'tony555@gmail.com', '$2y$10$8ZeCDI7bvo8AmQxaKidOVuMK92VXEjiE1mntbN1.rmpp8oqKmgNZa', 'user', 1),
(23, 'eben', 'eben.feliciano@student.pradita.ac.id', '$2y$10$RO3NUVQKZ2HudWg75Wlv9urhREDBhp3xjPqRDWoFIbZHRxEZPDQEi', 'admin', 1),
(24, 'vito', 'vito.jericho@student.pradita.ac.id', '$2y$10$2Ps7B8p1bejmcotUCjOK7e26jy.A/bJkOqlbOSeGPZTv2scWOaJ9O', 'admin', 1),
(25, 'marcel', 'marcelinus.fajar@student.pradita.ac.id', '$2y$10$RsiQynD9xEXfyyBr1zSes.R6DTfC4UnmqKv7Po6fUKp5SR4YihN2C', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `post_foto`
--
ALTER TABLE `post_foto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foto_fk1` (`id_post_foto`);

--
-- Indexes for table `publish`
--
ALTER TABLE `publish`
  ADD PRIMARY KEY (`id_publish`),
  ADD UNIQUE KEY `id_post_foto` (`id_post_foto`),
  ADD KEY `publish_fk2` (`id_kategori`),
  ADD KEY `publish_fk3` (`uploaded_by`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id_review`),
  ADD KEY `review_fk1` (`id_publish`),
  ADD KEY `review_fk2` (`review_by`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email_user` (`email_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `post_foto`
--
ALTER TABLE `post_foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `publish`
--
ALTER TABLE `publish`
  MODIFY `id_publish` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id_review` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post_foto`
--
ALTER TABLE `post_foto`
  ADD CONSTRAINT `foto_fk1` FOREIGN KEY (`id_post_foto`) REFERENCES `publish` (`id_post_foto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `publish`
--
ALTER TABLE `publish`
  ADD CONSTRAINT `publish_fk2` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `publish_fk3` FOREIGN KEY (`uploaded_by`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_fk1` FOREIGN KEY (`id_publish`) REFERENCES `publish` (`id_publish`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `review_fk2` FOREIGN KEY (`review_by`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
