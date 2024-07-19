-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2024 at 02:46 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dinsos_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `aplikasis`
--

CREATE TABLE `aplikasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `label` varchar(255) NOT NULL,
  `ket` text DEFAULT NULL,
  `url` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aplikasis`
--

INSERT INTO `aplikasis` (`id`, `label`, `ket`, `url`, `icon`, `created_at`, `updated_at`) VALUES
(2, 'E-JPS', 'Aplikasi Jaringan Pengaman Sosial', 'https://e-jps.gorontaloprov.go.id/', '1721270024.png', '2024-07-17 19:33:44', '2024-07-17 19:33:44');

-- --------------------------------------------------------

--
-- Table structure for table `asets`
--

CREATE TABLE `asets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `bidang_id` bigint(20) UNSIGNED NOT NULL,
  `item_id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(255) NOT NULL,
  `merk` varchar(255) NOT NULL,
  `bapp` date NOT NULL,
  `satuan` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `kondisi` varchar(255) NOT NULL,
  `no_pol` varchar(255) DEFAULT NULL,
  `no_mesin` varchar(255) DEFAULT NULL,
  `no_rangka` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `ket` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `asets`
--

INSERT INTO `asets` (`id`, `user_id`, `bidang_id`, `item_id`, `kode`, `merk`, `bapp`, `satuan`, `jumlah`, `kondisi`, `no_pol`, `no_mesin`, `no_rangka`, `foto`, `ket`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 1, 'A.1.0', 'Daihatsu', '2024-07-04', 'Unit', 1, 'Baik', NULL, NULL, NULL, '1721264837.jpg', NULL, '2024-07-17 18:07:17', '2024-07-17 18:07:17');

-- --------------------------------------------------------

--
-- Table structure for table `beritas`
--

CREATE TABLE `beritas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `label` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `sts` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beritas`
--

INSERT INTO `beritas` (`id`, `label`, `desc`, `image`, `slug`, `user_id`, `sts`, `created_at`, `updated_at`) VALUES
(1, 'Banjir Bandang Gorontalo: Belasan Ribu Warga Terdampak, 6 Kecamatan Terendam', '<p>Enam kecamatan di Gorontalo yang terendam banjir adalah Kota Selatan, Kota Tengah, Dungingi, Kota Barat, Dumbo Raya, dan Kota Timur. Dampak banjir bandang Gorontalo yang mencapai 80 persen menyebabkan perekonomian lumpuh. Pantauan Kompas.com, Kamis, banjir bandang di Gorontalo menyebabkan pusat pertokoan dan layanan publik terendam. Selain itu, banyak toko yang memutuskan tutup dan pemilik usaha memilih mengevakuasi barang-barangnya dari terjangan banjir. Banjir Gorontalo juga menyebabkan transportasi lumpuh karena jalan di pertokoan terendam air setinggi dada orang dewasa, sementara di jalan protokol ketinggian banjir mencapai setinggi lutut. &ldquo;Kami mendirikan pos pengungsian di sejumlah titik, membangun dapur umum, teman-teman Badan Penanggulangan Bencana Daerah Kota maupun Provinsi Gorontalo tengah membantu evakuasi warga,\" kata Penjabat Walikota Gorontalo Ismail Madjid<br /><br />Artikel ini telah tayang di&nbsp;<a href=\"https://www.kompas.com/\">Kompas.com</a>&nbsp;dengan judul \"Banjir Bandang Gorontalo: Belasan Ribu Warga Terdampak, 6 Kecamatan Terendam\", Klik untuk baca:&nbsp;<a href=\"https://www.kompas.com/tren/read/2024/07/12/073000665/banjir-bandang-gorontalo--belasan-ribu-warga-terdampak-6-kecamatan-terendam\">https://www.kompas.com/tren/read/2024/07/12/073000665/banjir-bandang-gorontalo--belasan-ribu-warga-terdampak-6-kecamatan-terendam</a>.<br /><br /><br />Kompascom+ baca berita tanpa iklan:&nbsp;<a href=\"https://kmp.im/plus6\">https://kmp.im/plus6</a><br />Download aplikasi:&nbsp;<a href=\"https://kmp.im/app6\">https://kmp.im/app6</a></p>', '1721263102.jpg', 'banjir-bandang-gorontalo-belasan-ribu-warga-terdampak-6-kecamatan-terendam', 1, 1, '2024-07-17 17:38:22', '2024-07-17 17:38:22'),
(2, 'Banjir Kota Gorontalo Meluas Rendam 6 Kecamatan, Terparah di Dumbo Raya dan Kota Barat', '<p>Mahmud juga mengatakan,&nbsp;<a href=\"https://www.liputan6.com/tag/banjir-gorontalo\">banjir Gorontalo</a>&nbsp;terparah menggenangi wilayah Kecamatan Dumbo Raya dan Kota Barat dengan ketinggian air mencapai di atas 50 sentimeter.</p>\r\n<p>Menurutnya, banjir disebabkan curah hujan tinggi yang memicu meluapnya Sungai Bone dan Bolango, ditambah aliran sungai dari Danau Limboto.</p>\r\n<p>\"Seluruhnya bertemu di Kota Gorontalo sehingga berdampak terjadinya banjir,\" kata Mahmud.</p>\r\n<p>Ia menjelaskan banjir di Kota Gorontalo terjadi karena curah hujan tinggi sejak 23 Juni 2024, kemudian banjir lagi pada 27 Juni, hingga berulang pada 3 dan 4 Juli.</p>\r\n<p>\"Kemarin pada tanggal 8, 9 dan 10 dan hingga kini banjir masih melanda, bahkan meluas menggenangi hampir seluruh wilayah Kota Gorontalo,\" katanya.</p>', '1721263229.jpg', 'banjir-kota-gorontalo-meluas-rendam-6-kecamatan-terparah-di-dumbo-raya-dan-kota-barat', 1, 1, '2024-07-17 17:40:29', '2024-07-17 17:40:29'),
(3, 'Waka MPR Dorong Penanganan Jangka Panjang untuk Banjir Gorontalo  Baca artikel detiknews', '<p>Jakarta - Wakil Ketua MPR RI, Prof. Dr. Ir. Fadel Muhammad menegaskan pentingnya penanganan banjir berkelanjutan di Gorontalo. Hal tersebut disampaikan Fadel usai meninjau lokasi banjir dan bertemu pengungsi banjir di Desa Tilote, Kecamatan Tilango, Kabupaten Gorontalo, Selasa (16/7/).<br />Dalam sambutannya, Fadel mengajak semua pihak untuk memanfaatkan momentum kunjungan Kepala Badan Nasional Penanggulangan Bencana (BNPB) Letjen TNI Suharyanto guna merencanakan penanganan jangka panjang terhadap banjir di Gorontalo. Ia menegaskan pentingnya kolaborasi antara pemerintah daerah dan BNPB dalam menangani bencana secara komprehensif.<br /><br />Fadel mengungkap bahwa bencana banjir kali ini adalah yang terparah sejak ia menjabat sebagai gubernur pada tahun 2001. Sebelumnya ia telah meminta Institut Teknologi Bandung (ITB) untuk membuat studi mengenai banjir di Gorontalo. Hasil studi tersebut merekomendasikan pembangunan dua kanal besar, yaitu Kanal Bone dan Kanal Bolango.<br /><br /></p>', '1721263365.jpg', 'waka-mpr-dorong-penanganan-jangka-panjang-untuk-banjir-gorontalo-baca-artikel-detiknews', 1, 1, '2024-07-17 17:42:45', '2024-07-17 17:42:45'),
(4, 'Penjagub Ismail Pakaya Irup Upacara Hari Patriotik 23 Januari', '<p>Bone Bolango, Kominfotik &ndash; Penjabat Gubernur Gorontalo Ismail Pakaya, menjadi irup upacara Peringatan 82 tahun Hari Patriotik 23 Januari 1942 bertempat di Lapangan Duano, Kecamatan Suwawa, Kabupaten Bone Bolango, Selasa, (23/1/2024).</p>\r\n<p>Bertindak sebagai Perwira Upacara Kapten Infanteri Syamsudin jabatan sehari hari Pasi Pers Korem 133/NWB. Komandan Upacara dipimpin oleh Mayor Caj Tinton Kurniawan jabatan Kaajenrem 133/NWB.</p>\r\n<p>Selain pengibaran bendera merah putih dan hening cipta, upacara hari patriotik diisi dengan pembacaan Pancasila oleh Irup, pembacaan UUD 1945 oleh Chika Tri Wahyuni Hasan Purna Paskibraka Indonesia Provinsi Gorontalo, serta pembacaan Lintas Sejarah Patriotik oleh Mohammad Reza Akbar pengurus pemuda pancasila Provinsi Gorontalo.</p>\r\n<p>Peristiwa Tanggal 23 januari 1942, menjadi potret sifat Nasionalisme dan Patriotik yang sangat besar dari putra putri Gorontalo untuk bergabung dengan negara Indonesia. Tidak heran jika peristiwa itu membuat Gorontalo diingat sebagai salah satu daerah yang, memiliki peran penting dalam memberikan contoh bagi daerah-daerah lain, guna merebut kemerdekaan dan kebebasannya dari penjajahan.</p>\r\n<p>&ldquo;Oleh karena itu semangat pahlawan Nasional Nani Wartabone yang dengan gagah berani mengusir penjajah dan mengibarkan bendera merah putih di bumi Gorontalo, perlu kita lestarikan dan kita kembangkan dalam penyelenggaraan pemerintahan serta dalam seluruh kehidupan sehari-hari,&rdquo; kata Ismail.</p>', '1721267079.jpg', 'penjagub-ismail-pakaya-irup-upacara-hari-patriotik-23-januari', 1, 1, '2024-07-17 18:44:39', '2024-07-17 18:44:39');

-- --------------------------------------------------------

--
-- Table structure for table `bidangs`
--

CREATE TABLE `bidangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bidangs`
--

INSERT INTO `bidangs` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Bidang Aset', '2024-07-17 09:20:14', '2024-07-17 09:20:14'),
(2, 'Bidang Apa', '2024-07-17 18:32:30', '2024-07-17 18:32:30');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ket` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `ket`, `created_at`, `updated_at`) VALUES
(1, '<p><strong>1.Apa sajakah persyaratan administrasi untuk mengadopsii anak bagi suami/istri warga negara Indonesia (WNI) ?</strong></p>\r\n<p>Jawab :</p>\r\n<ol class=\"wp-block-list\">\r\n<li>Surat permohonan pengangkatan anak (adopsi)</li>\r\n<li>Membuat pernyataan tertulis bahwa pengangkatan anak adalah untuk kesejahteraan anak (Materai)</li>\r\n<li>Surat Keterangan Catatan Kepolisian (SKCK) dari Polisi, suami istri</li>\r\n<li>Dalam keadaan sehat jasmani berdasarkan surat dari dokter pemerintah, suami istri</li>\r\n<li>Dalam keadaan sehat rohani/surat keterangan kesehatan jiwa dari Rumah Sakit Jiwa Daerah Provinsi Kalimantan Barat, suami istri6</li>\r\n<li>Surat keterangan dari Dokter Kandungan</li>\r\n<li>Dalam keadaan mampu ekonomi berdasarkan surat keterangan dari pejabat yang berwenang, serendah-rendahnya Lurah/Kepala Desa setempat, suami istri</li>\r\n</ol>\r\n<p>(Bagi Pegawai Negeri Sipil (PNS), POLRI dan TNI melampirkan daftar/slip gaji.)</p>\r\n<ol class=\"wp-block-list\" start=\"8\">\r\n<li>Surat keterangan dari pihak keluarga kedua Calon Orang Tua Angkat (COTA)</li>\r\n<li>Surat Pernyataan/Berita Acara penyerahan anak dari orang tua kandung kepada calon orang tua angkat disaksikan oleh dua orang saksi dan diketahui oleh RT/RW setempat (Materai)</li>\r\n<li>Akte kelahiran Calon Orang Tua Angkat suami istri</li>\r\n<li>Surat keterangan kelahiran Calon Anak Angkat (CAA)</li>\r\n<li>Fotocopy Surat Nikah Calon Orang Tua Angkat (COTA)</li>\r\n<li>Foto keluarga calon orang tua dan anak angkat</li>\r\n<li>Laporan Sosial Calon Orang Tua dan Anak Angkat</li>\r\n</ol>\r\n<p>*Dibuat Rangkap 4 (Empat)</p>\r\n<p>Keterangan Lebih Lanjut Bisa Langsung Datang Ke Dinas Sosial Provinsi Gorontalo.</p>\r\n<p><strong>2.Bagaimana caranya agar bisa memperoleh bantuan?</strong></p>\r\n<p>Jawab :</p>\r\n<p>Berdasarkan UU No 13 Tahun 2011 dan Permensos No 3 Tahun 2021 semua program bantuan dan pemberdayaan pemerintah dalam rangka penanganan fakir miskin harus berdasarkan Data Terpadu kesejahteraan Sosial (DTKS). Sedangkan DTKS berbasis data kependudukan. Pada dasarnya pengusulan untuk masuk dalam DTKS ataupun pengusulan menjadi Keluarga Penerima Manfaat (KPM) bansos yang merupakan program reguler Kementerian Sosial RI (Sembako, PKH, PBI) merupakan kewenangan pemerintah daerah Kabupaten/Kota bersama pemerintah lingkup terkecil yaitu desa/kelurahan. Artinya, setiap lurah dapat mengusulkan warga yang tidak mampu dan membutuhkan di wilayahnya untuk masuk DTKS dan mengakses bantuan.</p>\r\n<p>Apabila ada warga yang merasa kurang mampu dan membutuhkan akses bansos namun belum masuk dalam DTKS, atau sudah ada dalam DTKS namun belum pernah diusulkan untuk mendapatkan bansos, dapat melaporkan diri melalui unsur pemerintah terkecil di wilayahnya (RT/RW/Kepala Dusun/Lurah) agar dapat diusulkan sebagai KPM bansos. Apabila pengusulan sudah dilakukan dari kelurahan, selanjutnya akan ada kunjungan rumah dalam rangka verifikasi kelayakan keluarga tersebut sesuai kriteria yang telah ditentukan oleh Menteri Sosial RI. Pengesahan akhir dilakukan setiap menjelang periode salur bansos, dan merupakan kewenangan Menteri. Seseorang akan dinyatakan sah sebagai KPM apabila data-data usulan telah melalui proses validasi dan terverifikasi layak menjadi penerima bansos.</p>\r\n<p><strong>3.Bagaimana cara mengusulkan diri jika belum masuk (DTKS)?</strong></p>\r\n<p>Jawab :</p>\r\n<p>Berdasarkan Permensos No 3 Tahun 2021 tentang Pengelolaan DTKS, pengusulan DTKS dapat dilakukan melalui RT/RW/Kepala Dusun/Lurah dan atau Potensi Sumber Kesejahteraan Sosial (PSKS) di wilayah setempat sesuai alamat KTP. Perlu diketahui bahwa DTKS berbasis data kependudukan, sehingga validitas data kependudukan akan mempengaruhi proses usulan data. Usulan yang telah masuk dapat ditindaklanjuti melalui Muskal/Muskel serta verifikasi dan validasi sebelum disahkan oleh kepala daerah dan dikirim ke Pusdatin Kemensos melalui aplikasi SIKS-NG.</p>\r\n<p><strong>4.Bagaimana cara mengetahui secara pasti apakah saya masuk dalam DTKS dan status kepesertaan bansos saya?</strong></p>\r\n<p>Jawab :</p>\r\n<p>Status keberadaan data seseorang dalam Data Terpadu Kesejahteraan Sosial (DTKS) dan kepesertaan bansos dapat diketahui dengan cara menanyakan langsung (datang langsung ke bagian pelayanan masyarakat atau melalui email) ke Dinas Sosial Kabupaten/Kota setempat sesuai alamat KTP anda dengan menunjukkan atau mengirimkan foto/scan :</p>\r\n<p>1) KTP,</p>\r\n<p>2) KK</p>\r\n<p>3) KKS (jika ada)</p>\r\n<p>Pengecekan status keberadaan seseorang dalam DTKS serta status kepesertaan bantuan sosial berbasis NIK saat ini juga telah dapat dilakukan secara mandiri melalui aplikasi Cek Bansos. Aplikasi milik Kementerian Sosial RI tersebut dapat diunduh secara gratis di Playstore. Pengguna diharuskan membuat akun dan melengkapi data diri dan keluarga untuk dapat menggunakan aplikasi tersebut.</p>\r\n<p><strong>5.Apa yang dimaksud DTKS?</strong></p>\r\n<p>Jawab :</p>\r\n<p>DTKS adalah Data Terpadu Kesejahteraan Sosial yang meliputi Pemerlu Pelayanan Kesejahteraan Sosial (PPKS), Penerima Bantuan dan Pemberdaan Sosial serta Potensi dan Sumber Kesejahteraan Sosial (PSKS). DTKS memuat 40% penduduk yang mempunyai status kesejahteraan sosial terendah.</p>\r\n<p><strong>6.Apakah tujuan terdaftar di dalam DTKS?</strong></p>\r\n<p>Jawab :</p>\r\n<p>Berdasarkan UU no.13 Tahun 2011 Tentang Penanganan Fakir Miskin menjelaskan bahwa program pemberdayaan dan bantuan sosial harus mengacu pada data terpadu yang dikelola Kementerian Sosial, yang sekarang disebut DTKS. Jika sudah terdaftar di DTKS bisa diusulkan untuk mendapat program bantuan sosial dan pemberdayaan pemerintah pusat maupun daerah.</p>\r\n<p><strong>7.Apa saja dasar hukum DTKS?</strong></p>\r\n<p>Jawab :</p>\r\n<ol class=\"wp-block-list\">\r\n<li>UU No 13 Tahun2011 tentang Penanganan Fakir Miskin.</li>\r\n<li>UU No 23 Tahun 2014 tentang Pembagian Urusan Pemerintah di Bidang Sosial.</li>\r\n<li>Permensos Nomor 28 Tahun 2017 tentang Pedoman Umum Verifikasi dan Validasi Data Terpadu Penanganan Fakir Miskin dan Orang Tidak Mampu.</li>\r\n<li>Permensos Nomor 5 Tahun 2019 tentang Pengelolaan Data Terpadu Kesejahteraan Sosial.</li>\r\n<li>Permensos Nomor 11 Tahun 2019 tentang Perubahan Atas Permensos Nomor 5 Tahun 2019 tentang Pengelolaan Data Terpadu Kesejahteraan Sosial.</li>\r\n</ol>\r\n<p><strong>8.Apa syarat mendapatkan bantuan JKN (Jaminan Kesehatan Nasional)</strong></p>\r\n<p>Jawab :</p>\r\n<ul class=\"wp-block-list\">\r\n<li>Belum mendapatkan bantuan PBI JKN</li>\r\n<li>Fotocopy Kartu Keluarga</li>\r\n<li>Fotocopy KTP</li>\r\n<li>Membawa Surat Keterangan Tidak Mampu dari Kelurahan</li>\r\n<li>Membawa surat keterangan dari Rumah Sakit/ Puskesmas</li>\r\n</ul>\r\n<p><strong>9.Bagaimana Cara mendapatkan bantuan JKN (Jaminan Kesehatan Nasional)</strong></p>\r\n<p>Jawab :</p>\r\n<ul class=\"wp-block-list\">\r\n<li>Membawa persyaratan lengkap ke Dinas Sosial setempat</li>\r\n<li>Dinas Sosial akan melakukan pengecekan data, dan kelengkapan berkas.</li>\r\n<li>Masyarakat pengusul menunggu terlebih dahulu paling cepat 1 bulan, mengingat banyaknya usulan yang masuk ke Dinas Sosial.</li>\r\n<li>Jika keadaan darurat Dinas Sosial akan memberikan surat rekomendasi ke RSUD setempat agar segera di tangani.</li>\r\n</ul>\r\n<p><strong>10.Apa syarat mendapatkan surat keterangan DTKS?</strong></p>\r\n<p>Jawab :</p>\r\n<ul class=\"wp-block-list\">\r\n<li>Terdaftar di DTKS</li>\r\n<li>Membawa surat keterangan tidak mampu dari kelurahan yang menyatakan kegunaan surat DTKS tersebut.</li>\r\n</ul>\r\n<p><strong>11.Apa syarat mendaftar DTKS?</strong></p>\r\n<p>Jawab :</p>\r\n<ul class=\"wp-block-list\">\r\n<li>Kartu Keluarga.</li>\r\n<li>KTP</li>\r\n<li>Pekerjaan Kapala Keluarga merupakan buruh harian lepas.</li>\r\n<li>Foto Rumah.</li>\r\n<li>Bukan merupakan pegawai pemerintah/aparatur negara/pegawai swasta yang menerima upah bulanan, termasuk anggota keluarga lainnya.</li>\r\n<li>Termasuk ke dalam kategori masyarakat miskin atau rentan miskin.</li>\r\n</ul>\r\n<p><strong>12. Saya mendapatkan bantuan sebagai PBI JK. Tetapi pada saat akan menggunakan layanan kesehatan status kepesertaan saya kok nonaktif. Bagaimana ini?</strong></p>\r\n<p>Jawab :</p>\r\n<p>Penonaktifan kepesertaan PBI dapat disebabkan oleh beberapa faktor. Diantaranya :</p>\r\n<p>1. Meninggal</p>\r\n<p>2. Pindah Segmen kepesertaan JKN</p>\r\n<p>Contoh : Yang bersangkutan menjadi pekerja, sehingga kepesertaan JKNnya menjadi Pekerja Peneruma Upah (PPU)</p>\r\n<p>3. Terdeteksi Ganda dalam database BPJS Kesehatan</p>\r\n<p>Contoh : NIK terdeteksi digunakan oleh orang lain, NIK&amp;NoKK terdeteksi tetapi susunan keluarga di database BPJS berbeda dengan adminduk NIK digunakan untuk lebih dari satu peserta BPJS</p>\r\n<p>4. Dinonaktifkan oleh Dinas Sosial Kabupaten/Kota karena tidak layak</p>\r\n<p>5. Penonaktifan otomatis by system karena Bayi Baru Lahir (BBL) dari peserta PBI aktif yang dalam waktu 3 bulan tidak didaftarkan adminduk dan tidak dilaporkan ke Dinas Sosial Kabupaten/Kota untuk diusulkan masuk DTKS.</p>\r\n<p>Jika anda mengalami salah satu dari kendala di atas, disarankan untuk melaporkan kendala tersebut ke Dinas Sosial Kab/Kota untuk dapat ditindaklanjuti. Apabila laporan disampaikan kurang dari 6 bulan sejak tanggal penonaktifan, jika pelapor terbukti masuk dalam DTKS dan layak, maka pengaktifan kepesertaan PBI dapat difasilitasi oleh Dinas Sosial Kabupaten/Kota agar tetap dapat mengakses layanan kesehatan sebagai peserta PBI. Namun apabila laporan disampaikan setelah lebih dari 6 bulan sejak kepesertaan dinonaktifkan, maka untuk mendapatkan kembali kepesertaan PBI harus kembali melalui proses pengusulan.</p>\r\n<p><strong>13. Ibu saya merupakan penerima bantuan PKH yang berstatus pengurus (pemegang rekening). Namun Beberapa hari yang lalu meninggal. Apakah bisa digantikan anggota keluarga yang lain?</strong></p>\r\n<p>Jawab :</p>\r\n<p>Bisa, melalui mekanisme pergantian pengurus. Akan tetapi perlu diketahui bahwa dalam mekanisme pergantian pengurus, yang bisa dilakukan penggantian pengurus HANYA penerima bansos yang aktif di periode terakhir.</p>\r\n<p>Syarat pengurus pengganti :</p>\r\n<p>1. HARUS ada di keluarga (satu KK dengan almarhum/ah)</p>\r\n<p>2. Masuk DTKS di DTKS</p>\r\n<p>3. Data administrasi kependudukannya valid (tidak ganda, sudah rekam E-KTP, dll)</p>\r\n<p>4. Berusia di atas 17 tahun</p>\r\n<p><strong>14. Orangtua saya lansia yang sudah tidak memiliki penghasilan. Sebelumnya mereka merupakan penerima PKH dan BPNT. Tetapi 2 periode terakhir ini mengapa mereka tidak lagi menerima. Apakah ada kaitannya dengan diterimanya saya sebagai CPNS?</strong></p>\r\n<p>Jawab : Benar.</p>\r\n<p>Sejak Kementerian Sosial RI menerbitkan surat edaran nomor 37/1.7/DI.02/1/2022 tanggal 10 Januari 2022 terkait Verifikasi Ketidaklayakan Penerima Bantuan Sosial, jenis pekerjaan menjadi kriteria utama verifikasi ketidaklayakan penerima bansos. Pada praktiknya, berlaku untuk KPM yang salah satu anggota keluarganya (dalam 1 KK) terdapat anggota keluarga dengan pekerjaan ASN/PNS/TNI/POLRI/Karyawan Swasta/Pensiunan.</p>\r\n<p>Namun pada saat ini cakupannya telah berkembang karena Kementerian Sosial melakukan upaya sinkronisasi DTKS dengan berbagai data induk di pusat seperti data pendamping sosial, data kependudukan, dapodik, data kepegawaian, data AHU, dll.</p>\r\n<p><strong>15. Apakah ada kriteria tertentu untuk Fakir Miskin yang mendapat prioritas untuk diusulkan ke dalam DTKS dan atau penerima bansos?</strong></p>\r\n<p>Jawab :</p>\r\n<p>Ada. Menteri Sosial RI telah menerbitkan Peraturan Menteri Sosial Nomor 262 Tahun 2022 per 31 Desember 2022 tentang Kriteria Fakir Miskin. Saat ini peraturan tersebut telah diimplementasikan dalam setiap proses usulan DTKS melalui SIKS-NG.</p>', '2024-07-17 09:20:13', '2024-07-17 18:02:49');

-- --------------------------------------------------------

--
-- Table structure for table `galeris`
--

CREATE TABLE `galeris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `label` varchar(255) NOT NULL,
  `ket` text DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galeris`
--

INSERT INTO `galeris` (`id`, `label`, `ket`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Verifikasi dan Validasi Calon Penerima Bantuan UEP', NULL, 1, '2024-07-17 17:47:57', '2024-07-17 17:47:57'),
(2, 'Bimtek TKSK', NULL, 1, '2024-07-17 17:48:42', '2024-07-17 17:48:42'),
(3, 'Penyaluran BANSOSPRES', NULL, 1, '2024-07-17 17:49:37', '2024-07-17 17:49:37');

-- --------------------------------------------------------

--
-- Table structure for table `galeri_dets`
--

CREATE TABLE `galeri_dets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `galeri_id` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galeri_dets`
--

INSERT INTO `galeri_dets` (`id`, `galeri_id`, `foto`, `created_at`, `updated_at`) VALUES
(1, 1, '1721263690.jpg', '2024-07-17 17:48:10', '2024-07-17 17:48:10'),
(2, 1, '1721263695.jpg', '2024-07-17 17:48:15', '2024-07-17 17:48:15'),
(3, 2, '1721263731.jpg', '2024-07-17 17:48:51', '2024-07-17 17:48:51'),
(4, 3, '1721263794.jpg', '2024-07-17 17:49:54', '2024-07-17 17:49:54');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Mobil Terios', '2024-07-17 18:06:18', '2024-07-17 18:06:18');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kuesioners`
--

CREATE TABLE `kuesioners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenkel` varchar(255) NOT NULL,
  `usia` int(11) NOT NULL,
  `pendidikan` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `u1` int(11) NOT NULL,
  `u2` int(11) NOT NULL,
  `u3` int(11) NOT NULL,
  `u4` int(11) NOT NULL,
  `u5` int(11) NOT NULL,
  `u6` int(11) NOT NULL,
  `u7` int(11) NOT NULL,
  `u8` int(11) NOT NULL,
  `u9` int(11) NOT NULL,
  `saran` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kuesioners`
--

INSERT INTO `kuesioners` (`id`, `tanggal`, `waktu`, `nama`, `jenkel`, `usia`, `pendidikan`, `pekerjaan`, `u1`, `u2`, `u3`, `u4`, `u5`, `u6`, `u7`, `u8`, `u9`, `saran`, `created_at`, `updated_at`) VALUES
(1, '2024-07-17', 1, 'Usaman Pauno', 'L', 27, 'S1', 'TNI', 3, 3, 4, 3, 3, 4, 4, 4, 3, 'oke', '2024-07-17 09:23:49', '2024-07-17 09:23:49'),
(2, '2024-07-17', 1, 'Usaman Pauno', 'L', 27, 'SMA', 'TNI', 3, 3, 2, 2, 2, 3, 3, 4, 4, 'okeeee', '2024-07-17 09:35:33', '2024-07-17 09:35:33'),
(3, '2024-07-11', 1, 'Usaman Pauno', 'L', 27, 'SD', 'TNI', 3, 4, 4, 3, 4, 4, 4, 4, 4, '-', '2024-07-17 22:57:06', '2024-07-17 22:57:06'),
(4, '2024-07-19', 2, 'Rinto', 'L', 4, 'S1', 'Swasta', 3, 3, 3, 4, 4, 2, 2, 4, 4, '-', '2024-07-17 22:57:46', '2024-07-17 22:57:46');

-- --------------------------------------------------------

--
-- Table structure for table `layanans`
--

CREATE TABLE `layanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `ket` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `layanans`
--

INSERT INTO `layanans` (`id`, `nama`, `foto`, `ket`, `created_at`, `updated_at`) VALUES
(1, 'Layanan Rehabilitasi Sosial Dasar Lanjut Usia dalam Panti', '1721262397.jpg', NULL, '2024-07-17 17:26:37', '2024-07-17 17:29:00'),
(2, 'Layanan Data dan Informasi', '1721262429.jpg', '<p>-</p>', '2024-07-17 17:27:09', '2024-07-17 17:27:09'),
(3, 'Layanan Pengangkatan Anak melalui Masyarakat', '1721262480.jpg', NULL, '2024-07-17 17:28:00', '2024-07-17 17:28:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_07_04_015908_create_beritas_table', 1),
(5, '2024_07_04_020344_create_populers_table', 1),
(6, '2024_07_04_020635_create_publikasis_table', 1),
(7, '2024_07_04_020927_create_publikasi_dets_table', 1),
(8, '2024_07_04_021642_create_galeris_table', 1),
(9, '2024_07_04_021852_create_galeri_dets_table', 1),
(10, '2024_07_04_022323_create_layanans_table', 1),
(11, '2024_07_04_022737_create_profiles_table', 1),
(12, '2024_07_04_023645_create_aplikasis_table', 1),
(13, '2024_07_04_094741_create_bidangs_table', 1),
(14, '2024_07_04_122242_create_pesans_table', 1),
(15, '2024_07_04_125945_create_faqs_table', 1),
(16, '2024_07_17_030134_create_asets_table', 1),
(17, '2024_07_17_044239_create_items_table', 1),
(18, '2024_07_17_161126_create_kuesioners_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pesans`
--

CREATE TABLE `pesans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subjek` varchar(255) NOT NULL,
  `pesan` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesans`
--

INSERT INTO `pesans` (`id`, `nama`, `email`, `subjek`, `pesan`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Sihi Hadijjah', 'siti@gmail.com', 'Permohonan', 'Saya bermaksud untuk melakukan anunya agar asupaya anuku menjadi lebih baik.', 1, '2024-07-17 16:49:03', '2024-07-17 17:01:56');

-- --------------------------------------------------------

--
-- Table structure for table `populers`
--

CREATE TABLE `populers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `berita_id` bigint(20) UNSIGNED NOT NULL,
  `sts` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `populers`
--

INSERT INTO `populers` (`id`, `berita_id`, `sts`, `created_at`, `updated_at`) VALUES
(1, 3, 1, '2024-07-17 17:45:10', '2024-07-17 17:45:10'),
(2, 2, 1, '2024-07-17 17:45:16', '2024-07-17 17:45:16'),
(3, 1, 1, '2024-07-17 17:45:20', '2024-07-17 17:45:20'),
(4, 4, 1, '2024-07-17 18:44:47', '2024-07-17 18:44:47'),
(5, 4, 1, '2024-07-17 20:58:17', '2024-07-17 20:58:17');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `ket` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `nama`, `ket`, `created_at`, `updated_at`) VALUES
(1, 'Tujuan dan Sasaran', '<ol class=\"wp-block-list\" type=\"a\">\r\n<li>Tujuan.</li>\r\n</ol>\r\n<p>Sesuai dengan tugas pokok dan fungsi Dinas Sosial Provinsi Gorontalo maka tujuan terhadap rencana strategis yang ingin dicapai pada empat tahun mendatang meliputi :</p>\r\n<ol class=\"wp-block-list\">\r\n<li>Pemenuhan hak sosial dasar masyarakat.</li>\r\n<li>Meningkatnya kualitastatakelolapemerintahan.</li>\r\n<li>Sasaran.<br />Adapun sasaran yang ingin dicapai Dinas Sosial Provinsi Gorontalo selang tahun 2023 &ndash; 2026 adalah sebagai berikut :</li>\r\n</ol>\r\n<ol class=\"wp-block-list\">\r\n<li>Perlindungan sosial bagi masyarakat.</li>\r\n<li>Meningkatnya kualitas urusan penunjang pemerintahan OPD.</li>\r\n</ol>\r\n<p>Secara rinci tujuan, sasaran, indikator kinerja tujuan/sasaran dan target kinerja perangkat daerah disajikan pada Tabel 4.1 berikut ini.</p>\r\n<p><strong>Tabel 4.1</strong></p>\r\n<p><strong>Tujuan dan Sasaran Jangka Menengah Pelayanan</strong></p>\r\n<p><strong>Dinas Sosial</strong><strong>Provinsi Gorontalo</strong></p>\r\n<p><strong>Tahun 2023-2026</strong></p>\r\n<figure class=\"wp-block-table\">\r\n<table>\r\n<tbody>\r\n<tr>\r\n<td rowspan=\"2\"><br /><br /><strong>No</strong></td>\r\n<td rowspan=\"2\"><br /><br /><strong>Tujuan</strong></td>\r\n<td rowspan=\"2\"><br /><br /><strong>Sasaran</strong></td>\r\n<td rowspan=\"2\"><br /><br /><strong>Indikator Tujuan/Sasaran</strong></td>\r\n<td colspan=\"4\"><strong>Target Kinerja Tujuan/Sasaran Pada Tahun ke</strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>1</strong></td>\r\n<td><strong>2</strong></td>\r\n<td><strong>3</strong></td>\r\n<td><strong>4</strong></td>\r\n</tr>\r\n<tr>\r\n<td><em><strong>1</strong></em></td>\r\n<td><em><strong>2</strong></em></td>\r\n<td><em>3</em></td>\r\n<td><em>4</em></td>\r\n<td><em><strong>5</strong></em></td>\r\n<td><em><strong>6</strong></em></td>\r\n<td><em><strong>7</strong></em></td>\r\n<td><em><strong>8</strong></em></td>\r\n</tr>\r\n<tr>\r\n<td>1</td>\r\n<td>Pemenuhan hak sosial dasar masyarakat</td>\r\n<td>Perlindungan sosial bagi masyarakat</td>\r\n<td>Persentase (%) keluarga miskin dan rentan yang meningkat aksesnya dalam menerima bantuan pemenuhan kebutuhan dasar.</td>\r\n<td>100</td>\r\n<td>100</td>\r\n<td>100</td>\r\n<td>100</td>\r\n</tr>\r\n<tr>\r\n<td>&nbsp;</td>\r\n<td>&nbsp;</td>\r\n<td>&nbsp;</td>\r\n<td>Persentase (%) keluarga miskin dan rentan yang meningkat sosial ekonominya.</td>\r\n<td>100</td>\r\n<td>100</td>\r\n<td>100</td>\r\n<td>100</td>\r\n</tr>\r\n<tr>\r\n<td>&nbsp;</td>\r\n<td>&nbsp;</td>\r\n<td>&nbsp;</td>\r\n<td>Persentase (%) anak terlantar, lanjut usia terlantar, penyandang disabilitas, gelandangan dan pengemis yang meningkat keberfungsian sosialnya melalui rehabilitasi sosial di dalam panti.</td>\r\n<td>100</td>\r\n<td>100</td>\r\n<td>100</td>\r\n<td>100</td>\r\n</tr>\r\n<tr>\r\n<td>&nbsp;</td>\r\n<td>&nbsp;</td>\r\n<td>&nbsp;</td>\r\n<td>Persentase (%) korban bencana alam dan sosial yang tertangani dan terlayani</td>\r\n<td>100</td>\r\n<td>100</td>\r\n<td>100</td>\r\n<td>100</td>\r\n</tr>\r\n<tr>\r\n<td>&nbsp;</td>\r\n<td>&nbsp;</td>\r\n<td>&nbsp;</td>\r\n<td>Persentase (%) potensi dan sumber kesejahteraan sosial perorangan yang diberdayakan</td>\r\n<td>100</td>\r\n<td>100</td>\r\n<td>100</td>\r\n<td>100</td>\r\n</tr>\r\n<tr>\r\n<td>&nbsp;</td>\r\n<td>&nbsp;</td>\r\n<td>&nbsp;</td>\r\n<td>Pesersentase (%) potensi dan sumber kesejahteraan sosial kelembagaan yang diberdayakan</td>\r\n<td>100</td>\r\n<td>100</td>\r\n<td>100</td>\r\n<td>100</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</figure>\r\n<figure class=\"wp-block-table\">\r\n<table>\r\n<tbody>\r\n<tr>\r\n<td><em><strong>1</strong></em></td>\r\n<td><em><strong>2</strong></em></td>\r\n<td><em>3</em></td>\r\n<td><em>4</em></td>\r\n<td><em><strong>5</strong></em></td>\r\n<td><em><strong>6</strong></em></td>\r\n<td><em><strong>7</strong></em></td>\r\n<td><em><strong>8</strong></em></td>\r\n</tr>\r\n<tr>\r\n<td>2</td>\r\n<td>Meningkatnya Kualitas Tata Kelola Pemerintahan</td>\r\n<td>Meningkatnya kualitas urusan penunjang pemerintahan OPD</td>\r\n<td><br /><br />Nilai SAKIP</td>\r\n<td><br /><br />BB</td>\r\n<td><br /><br />BB</td>\r\n<td><br /><br />A</td>\r\n<td><br /><br />A</td>\r\n</tr>\r\n<tr>\r\n<td>&nbsp;</td>\r\n<td>&nbsp;</td>\r\n<td>&nbsp;</td>\r\n<td><br /><br />Indeks Kepuasan Masyarakat</td>\r\n<td><br /><br />B</td>\r\n<td><br /><br />B</td>\r\n<td><br /><br />B</td>\r\n<td><br /><br />A</td>\r\n</tr>\r\n<tr>\r\n<td>&nbsp;</td>\r\n<td>&nbsp;</td>\r\n<td>&nbsp;</td>\r\n<td><br /><br />Nilai PembangunanStatistik</td>\r\n<td><br /><br />3</td>\r\n<td><br /><br />4</td>\r\n<td><br /><br />4</td>\r\n<td><br /><br />5</td>\r\n</tr>\r\n<tr>\r\n<td>&nbsp;</td>\r\n<td>&nbsp;</td>\r\n<td>&nbsp;</td>\r\n<td>IndeksBudayaKerja</td>\r\n<td>Belum bagus</td>\r\n<td>Belum bagus</td>\r\n<td>Bagus</td>\r\n<td>Bagus</td>\r\n</tr>\r\n<tr>\r\n<td>&nbsp;</td>\r\n<td>&nbsp;</td>\r\n<td>&nbsp;</td>\r\n<td>Nilai PengelolaanKearsipan</td>\r\n<td>Sangat kurang</td>\r\n<td>Sangat kurang</td>\r\n<td>cukup</td>\r\n<td>cukup</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</figure>\r\n<nav class=\"navigation post-navigation\" aria-label=\"Continue Reading\">\r\n<div class=\"nav-links\">\r\n<div class=\"nav-previous\">&nbsp;</div>\r\n</div>\r\n</nav>', '2024-07-17 18:00:01', '2024-07-17 18:00:01'),
(2, 'Tugas Pokok dna Fungsi Organisasi', '<p>Dinas Sosial Provinsi Gorontalo sesuai dengan Peraturan Gubernur Nomor 38 Tahun 2022 tentang Organisasi dan Tata Kerja Pemerintah Daerah, melaksanakan urusan pemerintahan daerah dibidang sosial untuk membantu Gubernur dalam menyelenggarakan pemerintahan.</p>\r\n<p>Untuk melaksanakan tugas sebagaimana dimaksud di atas, Dinas Sosial menyelenggarakan fungsi :</p>\r\n<ol class=\"wp-block-list\" type=\"a\">\r\n<li>Penyusunan kebijakan teknis dibidang sosial;</li>\r\n<li>Menyusun rencana program/kegiatan tahunan tingkat Provinsi sejalan dengan perencanaan nasional dalam bidang sosial;</li>\r\n<li>Pembinaan, pelayanan dan rehabilitasi, pemberdayaan dan perlindungan serta pemberian bantuan dan jaminan sosial;</li>\r\n<li>Pemantauan dan evaluasi program dibidang sosial;</li>\r\n<li>Pengelolaan urusan kesekretariatan dinas;</li>\r\n<li>Koordinasi pelaksanaan tugas, pembinaan, dan pemberian dukungan administrasi kepada seluruh unsur organisasi di lingkungan Dinas Sosial;</li>\r\n<li>Pengelolaan barang milik/kekayaan daerah yang menjadi tanggung jawab Dinas Sosial;</li>\r\n<li>Pengawasan atas pelaksanaan tugas di lingkungan Dinas Sosial;</li>\r\n<li>Pelaksanaan bimbingan teknis dan supervisi atas pelaksanaan urusan Dinas Sosial; dan</li>\r\n<li>Pelaksanaan dukungan substantif kepada seluruh unsur organisasi di lingkungan Dinas Sosial.</li>\r\n</ol>\r\n<p>Uraian tugas dan fungsi masing-masing jabatan di lingkungan Dinas Sosial sesuai Peraturan Gubernur Nomor 38 Tahun 2022 tentang Organisasi dan Tata Kerja Pemerintah sebagai berikut :</p>\r\n<p><em>Kepala Dinas</em>&nbsp;mempunyai tugas melaksanakan sebagian urusan Pemerintahan Daerah dalam Bidang Perlindungan dan Jaminan Sosial, Rehabilitasi Sosial, Pemberdayaan Sosial serta Pemberdayaan Potensi dan Sumber Kesejahteraan Sosial yang berada dibawah tanggung jawab Gubernur.</p>\r\n<p>Dalam melaksanakan tugas, Kepala Dinas menyelenggarakan fungsi:</p>\r\n<ol class=\"wp-block-list\">\r\n<li>Pelaksanaan kebijakan dibidang perlindungan dan jaminan sosial;</li>\r\n<li>Pelaksanaan kebijakan dibidang rehabilitasi sosial ;</li>\r\n<li>Pelaksanaan kebijakan dibidang pemberdayaan sosial;</li>\r\n<li>Pelaksanaan kebijakan dibidang pemberdayaan potensi dan sumber kesejahteraan sosial;</li>\r\n<li>Pelaksanaan kebijakan norma, standar, prosedur, dan kriteria dibidang sosial yang mencakup perlindungan dan jaminan sosial, rehabilitasi sosial, pemberdayaan sosial, pemberdayaan postensi dan sumber kesejahteraan sosial;</li>\r\n<li>Memberikan bimbingan teknis dan supervisi di bidang perlindungan dan jaminan sosial, rehabilitasi sosial, pemberdayaan sosial, pemberdayaan postensi dan sumber kesejahteraan sosial;</li>\r\n<li>Pelaksanaan evaluasi dan pelaporan di bidang perlindungan dan jaminan sosial, rehabilitasi sosial, pemberdayaan sosial, pemberdayaan potensi dan sumber kesejahteraan sosial;</li>\r\n</ol>\r\n<p><em>Sekretariat&nbsp;</em>oleh dipimpin sekretaris yang mempunyai tugas merencanakan, melaksanakan, mengkoordinasikan dan mengendalikan kegiatan perencanaan, evaluasi, pelaksanaan, penatausahaan, pelaporan, pertanggungjawaban dan pengawasan keuangan, pelayanan administrasi, kehumasan, umum dan kepegawaian.<br />Dalam melaksanakan tugasnya Sekretaris menyelenggarakan fungsi:</p>\r\n<ol class=\"wp-block-list\">\r\n<li>Pelaksanaan perencanaan, evaluasi dan pengendalian serta menyusun laporan;</li>\r\n<li>Pengelolaan administrasi, keuangan dan urusan rumah tangga;</li>\r\n<li>Pengelolaan umum dan Kepegawaian;</li>\r\n<li>Penyelenggaraan pelayanan kehumasan;</li>\r\n<li>Penyusunan bahan laporan pelaksanaan kegiatan Sekretariat daan kegiatan dinas secara berkala; dan</li>\r\n<li>Pelaksanaan fungsi lain sesuai bidang tugasnya.</li>\r\n</ol>\r\n<p>Sekretaiatterdiriatas Sub Bagian Keuangan, Sub Bagian Umum dan Kepegawaian, sertaJabatanFungsional dan Pelaksana.</p>\r\n<p><em>Sub Bagian Keuangan&nbsp;</em>mempunyai tugas melaksanakan penatausahaan keuangan, pelaporan, pertanggungjawaban, verifikasi dan pengawasan. Dalam melaksanakan tugasnya Sub Bagian Keuangan menyelenggarakan fungsi</p>\r\n<ol class=\"wp-block-list\" type=\"a\">\r\n<li>Menatausahakan pengelolaan keuangan;</li>\r\n<li>Menghimpun dan mengolah data keuangan;</li>\r\n<li>Menyusun laporan keuangan SKPD;</li>\r\n<li>Menyusun laporan pertanggungjawaban SKPD;</li>\r\n<li>Meneliti dan melakukan verfikasi tagihan pembayaran;</li>\r\n<li>Menyiapkan dokumen lainnya sebagai dasar pengajuan tagihan;</li>\r\n<li>Menyiapkan dan menerbitkan SPM;</li>\r\n<li>Mengajukan SPM beserta kelengkapan dokumen kepada BUD melelui bendahara pengeluaran;</li>\r\n<li>Mengelola pembayaran gaji pegawai;</li>\r\n<li>Mengendalikan, mengontrol, dan mengevaluasi pelaksanaan tugas bendahara pengeluaran;</li>\r\n<li>Membuat register SPP, SPM, penolakan penerbitan SPM, penerimaan SPJ, pengesahan SPJ, penolakan pengesahan SPJ;</li>\r\n<li>Membuat laporan pengesahan SPJ, pengesahan pengawasan definitife anggaran/kegiatan, register kontrak/surat perintah kerja. Daftar realisasi pembayaran kontrak dan realisasi pembayaranper nomor kontrak;</li>\r\n<li>Membuat buku-buku catatan akuntasi sesuai dengan kebijakan akuntasi;</li>\r\n<li>Mengarsipkan seluruh dokumen pembayaran untuk kepentingan pengawasan dan pengendalian;</li>\r\n<li>Secara berkala membuat berita acara hasil pemeriksaan kas dan melaporkan kepada BUD serta PA;</li>\r\n<li>Menyiapkan bahan laporan realisasi keuangan dan penyusunan laporan keuangan;</li>\r\n<li>Menyiapkan bahan/data untuk perhitungan anggaran dan perubahan anggaran; dan</li>\r\n<li>Pelaksanaan fungsi sesuai bidang tugasnya.</li>\r\n</ol>\r\n<p><em>Sub Bagian Umum dan Kepegawaian&nbsp;</em>mempunyai tugas melaksanakan pelayanan administrasi umum, kehumasan, ketatausahaan, penyusunan rencana kebutuhan barang unit, dan administrasi kepegawaian yang berbasis aplikasi.</p>\r\n<p>Dalam melaksanakan tugas, Sub Bagian Umum dan Kepegawaian menyelenggarakan fungsi :</p>\r\n<ol class=\"wp-block-list\">\r\n<li>Menyusun program dan rencana kegiatan Sub Bagian Umum dan Kepegawaian;</li>\r\n<li>Melaksanakan pelayanan ketatausahaan;</li>\r\n<li>Menyusun rencana kebutuhan pengadaan dan pendistribusian barang perlengkapan;</li>\r\n<li>Pemeliharaan, pengendalian dan pemanfaatan barang inventaris;</li>\r\n<li>Mengusulkan pengurus barang dan pembantu pengurus barang milik daerah;</li>\r\n<li>Pengolahan data, pengarsipan dokumen, dan urusan administrasi pegawai berbasis aplikasi;</li>\r\n<li>Pengembangan SDM Aparatur;</li>\r\n<li>Menyelenggarakan tata laksana, pemeliharaan kebersihan, keindahan dan kenyamanan lingkungan perkantoran;</li>\r\n<li>Menyusun bahan evaluasi dan pelaporan kegiatan;</li>\r\n<li>Memimpin, mengatur dan mengendalikan tugas Sub Bagian Umum dan Kepegawaian;</li>\r\n<li>Menyusun bahan, konsep naskah dinas sesuai dengan arahan dari Sekretaris;</li>\r\n<li>Menyiapkan dan menyusun program kerja dan rencana kegiatan Sub Bagian Umum dan Kepegawaian;</li>\r\n<li>Memantau dan mengendalikan pelaksanaan tugas-tugas rutin yang menjadi tanggung jawabnya;</li>\r\n<li>Mengevaluasi dan melaporkan serta mempertanggungjawabkan pelaksanaan tugas kepada Sekretaris;</li>\r\n<li>Menyiapkan data yang wajib menyampaikan LHKPN, LHKASN, dan SPT;</li>\r\n<li>Menyiapkan serta menghimpun data tentang sasaran kinerja pegawai, Standar Operasional dan Prosedur (SOP), Standar Pelayanan Minima (SPM)l;</li>\r\n<li>Menyiapkan bahan penyusunan analisis jabatan, informasi jabatan dan standar kompetensi jabatan structural;</li>\r\n<li>Menyiapkan rencana kebutuhan barang unit;</li>\r\n<li>Melaksanakan pengadaaan, pendistribusian, dan pengadministrasian naskah dinas serta perlengkapan kepada unit kerja yang membutuhkan sesuai dengan rencana pengadaan yang ditetapkan.</li>\r\n<li>Melaksanakan tugas kehumasan;</li>\r\n<li>Melaksanakan pengolahan dan penataan arsip naskah dinas serta administrasi perjalanan dinas;</li>\r\n<li>Melaksanakan penerimaan, pendistribusian dan pengiriman surat, penggandaan naskahdinas (SPT/SPPD/Konsep Surat berdasarkan telaahan bidang-bidang) dan kearsipan dinas;</li>\r\n<li>Melaksanakan penomoran, penggagendaan, penggandaan naskah dinas sesuai tata naskah dinas di lingkungan pemerintah daerah.</li>\r\n</ol>\r\n<p><em>Bidang Perlindungan dan Jaminan Sosial</em>&nbsp;mempunyai tugas perumusan dan pelaksanaan kebijakan teknis, penyusunan norma, standar, prosedur dan kriteria; pemberian bimbingan teknis, pemantauan dan supervise, serta evaluasi dibidang perlindungan dan jaminan sosial.</p>\r\n<p>Dalam melaksanakan tugas Bidang Perlindungan dan Jaminan Sosial menyelenggarakan fungsi:</p>\r\n<ol class=\"wp-block-list\">\r\n<li>Penyiapan rumusan kebijakan teknis dibidang perlindungan dan jaminan sosial;</li>\r\n<li>Penyusunan rencana kegiatan operasional bidang perlindungan dan jaminan sosial;</li>\r\n<li>Pelaksanaan kebijakan teknis dibidang perlindungan sosial korban bencana alam;</li>\r\n<li>Pelaksanaan kebijakan teknis dibidang perlindungan sosial korban bencana sosial dan non alam;</li>\r\n<li>Pelaksanaan kebijakan teknis dibidang jaminan sosial;</li>\r\n<li>Pelaksanaan pemutakhiran Data Terpadu Kesejahteraan Sosial (DTKS);</li>\r\n<li>Pelaksanaan norma, standar, prosedur dan kriteria dibidang perlindungan sosial korban bencana alam; perlindungan sosial korban bencana sosial dan non alam; jaminan sosial; dan pemutakhiran DTKS;</li>\r\n<li>Pelaksanaan pemberian bimbingan teknis dan supervisi dibidang perlindungan sosial korban bencana alam; perlindungan sosial korban bencana sosial dan non alam; jaminan sosial; dan pemutakhiran DTKS;</li>\r\n<li>Pelaksanaan pemantauan, evaluasi dan melaporkan pelaksanaan kebijakan dibidang perlindungan sosial korban bencana alam; perlindungan sosial korban bencana sosial dan non alam; jaminan sosial; dan pemutakhiran DTKS;</li>\r\n<li>Membagi tugas, menyelia, mengatur, mengevaluasi kegiatan bidang perlindungan sosial korban bencana alam; perlindungan sosial korban bencana sosial dan non alam; jaminan sosial; dan pemutakhiran DTKS;</li>\r\n<li>Pelaksanaan penilaian kinerja pegawai pada bidang perlindungan dan jaminan sosial;</li>\r\n<li>Memberikan saran dan pertimbangan kepada atasan terkait dengan tugas dan fungsi bidang perlindungan sosial korban bencana alam; perlindungan sosial korban bencana sosial dan non alam; jaminan sosial dan pemutakhiran DTKS;</li>\r\n<li>Melaporkan hasil kegiatan perlindungan sosial korban bencana alam; perlindungan sosial korban bencana sosial dan non alam; jaminan sosial; dan pemutakhiran DTKS kepada atasan.</li>\r\n</ol>\r\n<p>Bidang Perlindungan dan Jaminan Sosial terdiri atas kelompok Jabatan Fungsional dan Pelaksana.</p>\r\n<p><em>Bidang Rehabilitasi Sosial</em>&nbsp;mempunyai tugas perumusan, dan pelaksanaan kebijakan teknis, penyusunan norma, standar, prosedur dan kriteria; pemberian bimbingan teknis; pemantauan dan supervisi, serta evaluasi dibidang rehabilitasi sosial.</p>\r\n<p>Dalam melaksanakan tugas Bidang Rehabilitasi Sosial dan Perlindungan Anak menyelenggarakan fungsi:</p>\r\n<ol class=\"wp-block-list\">\r\n<li>Penyiapan rumusan kebijakan teknis dibidang rehabilitasi sosial;</li>\r\n<li>Penyusunan rencanakegiatan operasional bidang rehabilitasi sosial;</li>\r\n<li>Pelaksanaan kebijakan teknis dibidang rehabilitasi sosial anak termasuk balita terlantar, anak terlantar, anak bermasalah dengan hukum, anak penyandang disabilitas, dan anak korban kekerasan;</li>\r\n<li>Pelaksanaan kebijakan teknis dibidang rehabilitasi sosial lanjut usia terlantar;</li>\r\n<li>Pelaksanaan kebijakan teknis dibidang rehabilitasi sosial tuna sosial termasuk gelandangan dan pengemis, korban penyalahgunaan napza, tuna susila, eks napi, eks psikotik, orang dengan HIV/AIDS;</li>\r\n<li>Pelaksanaan kebijakan teknis dibidang rehabilitasi sosial penyandang disabilitas;</li>\r\n<li>Pelaksanaan kebijakan teknis dibidang rehabilitasi sosial korban kekerasan;</li>\r\n<li>Pelaksanaan norma, standar, prosedur dan kriteria dibidang rehabilitasi sosial balita terlantar, anak terlantar, anak bermasalah dengan hukum, anak penyandang disabilitas, dan anak korban kekerasan, lanjut usia terlantar,penyandang disabilitas, gelandangan, pengemis, korban penyalagunaan napza, tuna susila, eks napi, eks psikotik , orang dengan HIV/AIDS dan korban kekerasan;</li>\r\n<li>Pelaksanaan pemberian bimbingan teknis dan supervise dibidang rehabilitasi sosial balita terlantar, anak terlantar, anak bermasalah dengan hukum, anak penyandang disabilitas, dan anak korban kekerasan, lanjut usia terlantar,penyandang disabilitas, gelandangan, pengemis, korban penyalagunaan napza, tuna susila, eks napi, eks psikotik , orang dengan HIV/AIDS dan korban kekerasan;</li>\r\n<li>Pelaksanaan pemantauan, evaluasi dan melaporkan pelaksanaan kebijakan dibidang balita terlantar, anak terlantar, anak bermasalah dengan hukum, anak penyandang disabilitas, dan anak korban kekerasan, lanjut usia terlantar,penyandang disabilitas, gelandangan, pengemis, korban penyalagunaan napza, tuna susila, eks napi, eks psikotik , orang dengan HIV/AIDS dan korban kekerasan;</li>\r\n<li>Membagi tugas, menyelia, mengatur, mengevaluasi kegiatan bidang rehabilitasi sosial balita terlantar, anak terlantar, anak bermasalah dengan hukum, anak penyandang disabilitas, dan anak korban kekerasan, lanjut usia terlantar,penyandang disabilitas, gelandangan, pengemis, korban penyalagunaan napza, tuna susila, eks napi, eks psikotik , orang dengan HIV/AIDS dan korban kekerasan;</li>\r\n<li>Pelaksanaan penilaian kinerja pegawai dibidang rehabilitasi sosial;</li>\r\n<li>Memberikan saran dan pertimbangan kepada atasan terkait dengan tugas dan fungsi bidang rehabilitasi sosial balita terlantar, anak terlantar, anak bermasalah dengan hukum, anak penyandang disabilitas, dan anak korban kekerasan, lanjut usia terlantar,penyandang disabilitas, gelandangan, pengemis, korban penyalagunaan napza, tuna susila, eks napi, eks psikotik , orang dengan HIV/AIDS dan korban kekerasan; dan</li>\r\n<li>Melaporkan hasil kegiatan rehabilitasi sosial balita terlantar, anak terlantar, anak bermasalah dengan hukum, anak penyandang disabilitas, dan anak korban kekerasan, lanjut usia terlantar,penyandang disabilitas, gelandangan, pengemis, korban penyalagunaan napza, tuna susila, eks napi, eks psikotik , orang dengan HIV/AIDS dan korban kekerasan kepada atasan.</li>\r\n</ol>\r\n<p>Bidang Rehabilitasi Sosial terdiri atas Kelompok Jabatan Fungsional dan Pelaksana.</p>\r\n<p><em>Bidang Pemberdayaan Sosial</em>&nbsp;mempunyai tugas mempunyai tugas perumusan, dan pelaksanaan kebijakan teknis, penyusunan norma, standar, prosedur dan kriteria; pemberian bimbingan teknis; pemantauan dan supervisi, serta evaluasi dibidang pemberdayaan sosial.</p>\r\n<p>Dalam melaksanakan tugas, bidang pemberdayaan sosial menyelenggarakan fungsi:</p>\r\n<ol class=\"wp-block-list\">\r\n<li>Penyiapan rumusan kebijakan teknis dibidang pemberdayaan sosial;</li>\r\n<li>Penyusunan rencana kegiatan operasional bidang pemberdayaan sosial;</li>\r\n<li>Pelaksanaan kebijakan dibidang pemberdayaan sosial keluarga miskin dan kelompok rentan;</li>\r\n<li>Pelaksanaan kebijakan dibidang pemberdayaan masyarakat dan pengelolaan sumber dana dan bantuan sosial;</li>\r\n<li>Pelaksanaan kebijakan dibidang penanaman nilai kepahlawanan, keperintisan dan kesetiakawanan sosial;</li>\r\n<li>Pelaksanaan norma, standar, prosedur dan kriteria dibidang pemberdayaan masyarakat, dan pengelolaan sumber dana dan bantuan sosial, pemberdayaan keluarga miskin dan kelompok rentan; penanaman dan pelestarian nilai kepahlawanan, keperintisan dan kesetiakawanan sosial;</li>\r\n<li>Pelaksanaan pemberian bimbingan teknis dan supervise dibidang pemberdayaan masyarakat, dan pengelolaan sumber dana dan bantuan sosial, pemberdayaan keluarga miskin dan kelompok rentan; penanaman dan pelestarian nilai kepahlawanan, keperintisan dan kesetiakawanan sosial;</li>\r\n<li>Pelaksanaan pemantauan, evaluasi dan melaporkan pelaksanaan kebijakan dibidang pemberdayaan masyarakat, dan pengelolaan sumber dana dan bantuan sosial, pemberdayaan keluarga miskin dan kelompok rentan; penanaman dan pelestarian nilai kepahlawanan, keperintisan dan kesetiakawanan sosial;</li>\r\n<li>Membagi tugas, menyelia, mengatur, mengevaluasi kegiatan bidang pemberdayaan masyarakat, dan pengelolaan sumber dana dan bantuan sosial, pemberdayaan keluarga miskin dan kelompok rentan; penanaman dan pelestarian nilai kepahlawanan, keperintisan dan kesetiakawanan sosial;</li>\r\n<li>Pelaksanaan penilaian kinerja pegawai dibidang pemberdayaan sosial;</li>\r\n<li>Memberikan saran dan pertimbangan kepada atasan terkait dengan tugas dan fungsi bidang pemberdayaan masyarakat, dan pengelolaan sumber dana dan bantuan sosial, pemberdayaan keluarga miskin dan kelompok rentan; penanaman dan pelestarian nilai kepahlawanan, keperintisan dan kesetiakawanan sosial; dan</li>\r\n<li>Melaporkan hasil kegiatan pemberdayaan masyarakat, dan pengelolaan sumber dana dan bantuan sosial, pemberdayaan keluarga miskin dan kelompok rentan; penanaman dan pelestarian nilai kepahlawanan, keperintisan dan kesetiakawanan sosial kepada atasan.</li>\r\n</ol>\r\n<p>Bidang Pemberdayaan Sosial terdiri atas Kelompok Jabatan Fungsional dan Pelaksana.</p>\r\n<p><em>Bidang Pemberdayaan Potensi dan Sumber Kesejahteraan Sosial</em>&nbsp;mempunyai tugas perumusan, dan pelaksanaan kebijakan teknis, penyusunan norma, standar, prosedur dan kriteria; pemberian bimbingan teknis; pemantauan dan supervisi, serta evaluasi dibidang Pemberdayaan Potensi dan Sumber Kesejahteraan Sosial .</p>\r\n<p>Dalam melaksanakan tugas, Bidang Pemberdayaan Potensi dan Sumber Kesejahteraan Sosial menyelenggarakan fungsi:</p>\r\n<ol class=\"wp-block-list\">\r\n<li>Penyiapan rumusan kebijakan teknis dibidang pemberdayaan potensi dan sumber kesejahteraan sosial;</li>\r\n<li>Penyusunan rencana kegiatan operasional bidang pemberdayaan potensi dan sumber kesejahteraan sosial;</li>\r\n<li>Pelaksanaan kebijakan teknis dibidang pemberdayaan Tenaga Kesejahteraan Sosial Masyarakat (TKSM) termasuk Pekerja Sosial Masyarakat (PSM), Wanita Pemimpin Kesejahteraan Sosial (WPRS) dan Keluarga Pioner;</li>\r\n<li>Pelaksanaan kebijakan teknis dibidang pemberdayaan Tenaga Kesejahteraan Sosial Kecamatan (TKSK);</li>\r\n<li>Pelaksanaan kebijakan teknis dibidang pemberdayaan sosial kelembagaan masyarakat termasuk Lembaga Kesejahteraan Sosial (LKS), Lembaga Koordinasi Kesejahteraan Sosial (LKKS), Karang Taruna, Pusat Kesejahteraan Sosial (Puskesos) dan Tanggung Jawab Lintas Sektor dan Dunia Usaha (CSR);</li>\r\n<li>Pelaksanaan norma, standar, prosedur dan kriteria dibidang pemberdayaan Tenaga Kesejahteraan Sosial Masyarakat (TKSM) termasuk Pekerja Sosial Masyarakat (PSM), Wanita Pemimpin Kesejahteraan Sosial (WPRS) dan Keluarga Pioner; Tenaga Kesejahteraan Sosial Kecamatan (TKSK); dan kelembagaan masyarakat termasuk Lembaga Kesejahteraan Sosial (LKS), Lembaga Koordinasi Kesejahteraan Sosial (LKKS), Karang Taruna, Pusat Kesejahteraan Sosial (Puskesos) dan Tanggung Jawab Lintas Sektor dan Dunia Usaha (CSR);</li>\r\n<li>Pelaksanaan pemberian bimbingan teknis dan supervise dibidang pemberdayaan Tenaga Kesejahteraan Sosial Masyarakat (TKSM) termasuk Pekerja Sosial Masyarakat (PSM), Wanita Pemimpin Kesejahteraan Sosial (WPRS) dan Keluarga Pioner; Tenaga Kesejahteraan Sosial Kecamatan (TKSK); dan kelembagaan masyarakat termasuk Lembaga Kesejahteraan Sosial (LKS), Lembaga Koordinasi Kesejahteraan Sosial (LKKS), Karang Taruna, Pusat Kesejahteraan Sosial (Puskesos) dan Tanggung Jawab Lintas Sektor dan Dunia Usaha (CSR);</li>\r\n<li>Pelaksanaan pemantauan, evaluasi dan melaporkan pelaksanaan kebijakan dibidang pemberdayaan Tenaga Kesejahteraan Sosial Masyarakat (TKSM) termasuk Pekerja Sosial Masyarakat (PSM), Wanita Pemimpin Kesejahteraan Sosial (WPRS) dan Keluarga Pioner; Tenaga Kesejahteraan Sosial Kecamatan (TKSK); dan kelembagaan masyarakat termasuk Lembaga Kesejahteraan Sosial (LKS), Lembaga Koordinasi Kesejahteraan Sosial (LKKS), Karang Taruna, Pusat Kesejahteraan Sosial (Puskesos) dan Tanggung Jawab Lintas Sektor dan Dunia Usaha (CSR);</li>\r\n<li>Membagi tugas, menyelia, mengatur, mengevaluasi kegiatan bidang pemberdayaan Tenaga Kesejahteraan Sosial Masyarakat (TKSM) termasuk Pekerja Sosial Masyarakat (PSM), Wanita Pemimpin Kesejahteraan Sosial (WPRS) dan Keluarga Pioner;; Tenaga Kesejahteraan Sosial Kecamatan (TKSK); dan kelembagaan masyarakat termasuk Lembaga Kesejahteraan Sosial (LKS), Lembaga Koordinasi Kesejahteraan Sosial (LKKS), Karang Taruna, Pusat Kesejahteraan Sosial (Puskesos) dan Tanggung Jawab Lintas Sektor dan Dunia Usaha (CSR);</li>\r\n<li>Pelaksanaan penilaian kinerja pegawai dibidang pemberdayaan potensi dan sumber kesejahteraan sosial;</li>\r\n<li>Memberikan saran dan pertimbangan kepada atasan terkait dengan tugas dan fungsi bidang pemberdayaan Tenaga Kesejahteraan Sosial Masyarakat (TKSM) termasuk Pekerja Sosial Masyarakat (PSM), Wanita Pemimpin Kesejahteraan Sosial (WPRS) dan Keluarga Pioner; Tenaga Kesejahteraan Sosial Kecamatan (TKSK); dan kelembagaan masyarakat termasuk Lembaga Kesejahteraan Sosial (LKS), Lembaga Koordinasi Kesejahteraan Sosial (LKKS), Karang Taruna, Pusat Kesejahteraan Sosial (Puskesos) dan Tanggung Jawab Lintas Sektor dan Dunia Usaha (CSR); dan</li>\r\n<li>Melaporkan hasil kegiatan pemberdayaan Tenaga Kesejahteraan Sosial Masyarakat (TKSM) termasuk Pekerja Sosial Masyarakat (PSM), Wanita Pemimpin Kesejahteraan Sosial (WPRS) dan Keluarga Pioner; Tenaga Kesejahteraan Sosial Kecamatan (TKSK); dan kelembagaan masyarakat termasuk Lembaga Kesejahteraan Sosial (LKS), Lembaga Koordinasi Kesejahteraan Sosial (LKKS), Karang Taruna, Pusat Kesejahteraan Sosial (Puskesos) dan Tanggung Jawab Lintas Sektor dan Dunia Usaha (CSR);kepada atasan.</li>\r\n</ol>\r\n<p>Bidang Pemberdayaan Sosial terdiri atas Kelompok Jabatan Fungsional dan Pelaksana.</p>', '2024-07-17 18:00:47', '2024-07-17 18:00:47');

-- --------------------------------------------------------

--
-- Table structure for table `publikasis`
--

CREATE TABLE `publikasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `ket` varchar(255) DEFAULT NULL,
  `sts` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `publikasis`
--

INSERT INTO `publikasis` (`id`, `nama`, `ket`, `sts`, `created_at`, `updated_at`) VALUES
(1, 'Materi Bimtek', NULL, 1, '2024-07-17 17:51:44', '2024-07-17 17:57:47'),
(2, 'Materi Undang-undang', NULL, 1, '2024-07-17 19:27:37', '2024-07-17 19:27:37');

-- --------------------------------------------------------

--
-- Table structure for table `publikasi_dets`
--

CREATE TABLE `publikasi_dets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `publikasi_id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `ket` text DEFAULT NULL,
  `nm_file` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `publikasi_dets`
--

INSERT INTO `publikasi_dets` (`id`, `publikasi_id`, `nama`, `ket`, `nm_file`, `created_at`, `updated_at`) VALUES
(1, 1, 'Materi Bimtek TKSK', '-', '1721264019.doc', '2024-07-17 17:53:39', '2024-07-17 17:53:39'),
(2, 1, 'Materi Bimtek Apa Joo?', NULL, '1721264255.doc', '2024-07-17 17:57:35', '2024-07-17 17:57:35'),
(3, 2, '-', '-', '1721269692.doc', '2024-07-17 19:28:12', '2024-07-17 19:28:12'),
(4, 2, '-', '-', '1721269704.doc', '2024-07-17 19:28:24', '2024-07-17 19:28:24');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('eZAsyDldZzCOFncLdgRR6wiD5NkXb5sSSDGqkysR', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36 Edg/126.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiaHhSMVlrNGI5bDEzc0tYN3J6T3BXWWlPQVF3dE1RMW9UWlVxR0JaNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9iaWRhbmciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTozO30=', 1721385564);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bidang_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `bidang_id`, `name`, `email`, `username`, `level`, `email_verified_at`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Admin', 'admin@example.com', 'admin', 'admin', '2024-07-17 09:20:12', '$2y$12$X0MSJseIchWcVzYY7KCRAO4oN..zhjnzPwQUJ6I8JKLaW9MWXBdy.', 1, 'sm8qGi2ykuQUEw2P8llGpsdWt7r11X8Tcy865m6ClMf8fNJjjJLG33zCGISU', '2024-07-17 09:20:12', '2024-07-17 09:20:12'),
(2, NULL, 'Admin', 'admin3244@example.com', 'admin3244', 'admin', '2024-07-17 09:20:13', '$2y$12$/QxiZW/TQAZTWX/ts9JXuOJEoU2NPB/YFUNSOLQuzb27ZSu8We7sK', 1, 'a8nTz4gntu', '2024-07-17 09:20:13', '2024-07-17 09:20:13'),
(3, 1, 'Admin Bidang', 'aset@example.com', '1', 'bidang', '2024-07-17 09:20:13', '$2y$12$ZBh7W41eCfJsmpQO3EjKbeYhEKfXjy6dTn/5XhrUWM55YD7L4pgTC', 1, 'Re77DLH8ljxqvWu9sKcteFDcgqH3mfFN2L0AKje552rk14FOoUwVysYNCpUn', '2024-07-17 09:20:13', '2024-07-17 09:20:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aplikasis`
--
ALTER TABLE `aplikasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `asets`
--
ALTER TABLE `asets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `beritas_slug_unique` (`slug`);

--
-- Indexes for table `bidangs`
--
ALTER TABLE `bidangs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeris`
--
ALTER TABLE `galeris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri_dets`
--
ALTER TABLE `galeri_dets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kuesioners`
--
ALTER TABLE `kuesioners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layanans`
--
ALTER TABLE `layanans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pesans`
--
ALTER TABLE `pesans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `populers`
--
ALTER TABLE `populers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publikasis`
--
ALTER TABLE `publikasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publikasi_dets`
--
ALTER TABLE `publikasi_dets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aplikasis`
--
ALTER TABLE `aplikasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `asets`
--
ALTER TABLE `asets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bidangs`
--
ALTER TABLE `bidangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `galeris`
--
ALTER TABLE `galeris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `galeri_dets`
--
ALTER TABLE `galeri_dets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kuesioners`
--
ALTER TABLE `kuesioners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `layanans`
--
ALTER TABLE `layanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pesans`
--
ALTER TABLE `pesans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `populers`
--
ALTER TABLE `populers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `publikasis`
--
ALTER TABLE `publikasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `publikasi_dets`
--
ALTER TABLE `publikasi_dets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
