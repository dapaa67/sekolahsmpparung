-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2025 at 08:51 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `agendas`
--

CREATE TABLE `agendas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `kegiatan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agendas`
--

INSERT INTO `agendas` (`id`, `tanggal`, `kegiatan`, `created_at`, `updated_at`) VALUES
(1, '15 Juli 2025', 'Masa Pengenalan Lingkungan Sekolah (MPLS)', '2025-06-14 10:16:18', '2025-06-14 10:16:18'),
(2, '22 Juli 2025', 'Awal Masuk Semester Ganjil', '2025-06-14 10:16:26', '2025-06-14 10:16:26'),
(3, '17 Agustus 2025', 'Libur Hari Kemerdekaan RI', '2025-06-14 10:16:33', '2025-06-14 10:16:33'),
(4, '30 September 2025', 'Penilaian Tengah Semester (PTS) Ganjil', '2025-06-14 10:16:40', '2025-06-14 10:16:40'),
(5, '20 Oktober 2025', 'Ujian Tengah Semester Ganjil', '2025-06-14 10:16:51', '2025-06-14 10:16:51'),
(6, '16 Desember 2025', 'Ujian Akhir Semester Ganjil', '2025-06-14 10:17:03', '2025-06-14 10:17:03'),
(7, '22 Desember 2025', 'Libur Semester Ganjil', '2025-06-14 10:17:10', '2025-06-14 10:17:10'),
(8, '6 Januari 2026', 'Masuk Semester Genap', '2025-06-14 10:17:17', '2025-06-14 10:17:17'),
(9, '17 Februari 2026', 'Penilaian Tengah Semester (PTS) Genap', '2025-06-14 10:17:24', '2025-06-14 10:17:24'),
(10, '23 Maret 2026', 'Ujian Tengah Semester Genap', '2025-06-14 10:17:32', '2025-06-14 10:17:32'),
(11, '2 Mei 2026', 'Hari Pendidikan Nasional', '2025-06-14 10:17:39', '2025-06-14 10:17:39'),
(12, '18 Mei 2026', 'Ujian Akhir Semester Genap', '2025-06-14 10:17:51', '2025-06-14 10:17:51'),
(13, '23 Juni 2026', 'Pembagian Rapor & Libur Akhir Tahun', '2025-06-14 10:17:58', '2025-06-14 10:17:58');

-- --------------------------------------------------------

--
-- Table structure for table `aset_sekolahs`
--

CREATE TABLE `aset_sekolahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status_kepemilikan_tanah` varchar(255) NOT NULL,
  `luas_tanah` int(11) NOT NULL,
  `luas_bangunan` int(11) NOT NULL,
  `luas_parkir` int(11) NOT NULL,
  `luas_lapangan` int(11) NOT NULL,
  `luas_lainnya` int(11) NOT NULL,
  `sertifikat_tanah` varchar(255) NOT NULL,
  `status_kepemilikan_gedung` varchar(255) NOT NULL,
  `total_luas_gedung` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aset_sekolahs`
--

INSERT INTO `aset_sekolahs` (`id`, `status_kepemilikan_tanah`, `luas_tanah`, `luas_bangunan`, `luas_parkir`, `luas_lapangan`, `luas_lainnya`, `sertifikat_tanah`, `status_kepemilikan_gedung`, `total_luas_gedung`, `created_at`, `updated_at`) VALUES
(1, 'Milik Sendiri / Wakaf', 4410, 2381, 500, 420, 1109, '10.10.20.10.1.00026', 'Milik Sendiri', 2381, '2025-06-14 09:32:31', '2025-06-14 09:33:20');

-- --------------------------------------------------------

--
-- Table structure for table `beritas`
--

CREATE TABLE `beritas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `isi` text DEFAULT NULL,
  `excerpt` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beritas`
--

INSERT INTO `beritas` (`id`, `judul`, `slug`, `tanggal`, `isi`, `excerpt`, `gambar`, `created_at`, `updated_at`) VALUES
(2, 'SMP Islam Parung Angkat Budaya Lewat Pentas Seni Tari Tradisional', 'smp-islam-parung-angkat-budaya-lewat-pentas-seni-tari-tradisional-684d1603c9f77', '2025-06-06', '<p>Parung – Dalam rangka memperingati Bulan Bahasa dan Seni, SMP Islam Parung mengadakan kegiatan pentas seni tari yang diselenggarakan di aula sekolah pada hari Kamis, 6 Juni 2025. Acara ini merupakan bagian dari program tahunan sekolah yang bertujuan untuk mengenalkan dan melestarikan budaya bangsa melalui seni tari tradisional.</p><p>Kegiatan ini diikuti oleh seluruh siswa dari kelas VII hingga IX, dengan menampilkan beragam tarian dari berbagai daerah di Indonesia, seperti Tari Saman dari Aceh, Tari Piring dari Sumatera Barat, dan Tari Jaipong dari Jawa Barat. Penampilan para siswa berhasil memukau para guru, orang tua, dan tamu undangan yang hadir.</p><p>Kepala SMP Islam Parung, Bapak Ahmad Fauzi, dalam sambutannya menyampaikan apresiasi tinggi terhadap semangat dan kerja keras para siswa dan pembina ekstrakurikuler seni. “Kami percaya bahwa pendidikan tidak hanya sebatas akademik, namun juga mencakup penguatan karakter dan identitas budaya. Kegiatan seperti ini menjadi media penting untuk membentuk kepribadian siswa yang bangga akan budaya sendiri,” ujarnya.</p><p>Selain sebagai ajang unjuk bakat, kegiatan ini juga menjadi sarana pembelajaran kolaboratif antara siswa, guru, dan orang tua. Persiapan dilakukan selama kurang lebih satu bulan melalui latihan rutin sepulang sekolah. Tak hanya itu, kostum dan tata rias juga disiapkan secara khusus untuk menunjang keaslian penampilan setiap tarian.</p><p>Di akhir acara, diumumkan pula tiga penampilan terbaik versi dewan juri, yaitu Tari Saman dari kelas VIII A, Tari Piring oleh kelas VII C, dan Tari Gambyong dari kelas IX B. Para penampil terbaik diberikan penghargaan dan piagam dari pihak sekolah.</p><p>Dengan terselenggaranya pentas seni ini, SMP Islam Parung berharap siswa semakin mencintai kekayaan budaya Indonesia dan termotivasi untuk terus mengembangkan potensi diri dalam bidang seni dan budaya.</p>', 'SMP Islam Parung menggelar pertunjukan seni tari tradisional sebagai bentuk pelestarian budaya nusantara dan pengembangan bakat siswa di bidang kesenian.\n\n', 'images/01JXPHVZQD0WSNH641R5S07BWE.jpg', '2025-06-13 23:26:11', '2025-06-13 23:26:11'),
(3, 'Siswa SMP Islam Parung Ukir Prestasi dalam Kejuaraan Taekwondo Tingkat Kabupaten', 'siswa-smp-islam-parung-ukir-prestasi-dalam-kejuaraan-taekwondo-tingkat-kabupaten-684d195a797a4', '2025-06-02', '<p>Parung – Prestasi membanggakan kembali ditorehkan oleh siswa SMP Islam Parung. Dalam ajang <strong>Kejuaraan Taekwondo Pelajar Tingkat Kabupaten Bogor</strong> yang digelar pada tanggal 2 Juni 2025 di GOR Pakansari, tim Taekwondo sekolah berhasil membawa pulang total <strong>5 medali</strong>, terdiri dari 2 emas, 2 perak, dan 1 perunggu.</p><p>Kompetisi ini diikuti oleh puluhan sekolah dari berbagai kecamatan di Kabupaten Bogor, menjadikannya sebagai ajang yang sangat kompetitif. Meski demikian, para atlet muda dari SMP Islam Parung tampil dengan semangat juang tinggi dan disiplin luar biasa, hasil dari latihan rutin yang mereka jalani setiap pekan bersama pelatih mereka, Coach Hendra Saputra.</p><p>Salah satu siswa yang berhasil meraih medali emas adalah <strong>Aulia Rahma (kelas VIII B)</strong> yang tampil mengesankan di kategori kelas under 45 kg putri. Ia mengalahkan lawannya dalam dua ronde berturut-turut dengan teknik yang bersih dan percaya diri. Sementara itu, <strong>Rizki Maulana (kelas IX A)</strong> juga berhasil meraih emas di kategori poomsae beregu bersama dua rekan satu timnya.</p><p>Kepala SMP Islam Parung, <strong>Bapak Ahmad Fauzi</strong>, mengungkapkan rasa bangganya atas prestasi yang diraih para siswa. “Taekwondo bukan hanya soal fisik, tapi juga melatih disiplin, fokus, dan mental juang. Ini adalah bagian dari pendidikan karakter yang kami dorong di sekolah,” ujarnya saat acara penyambutan tim Taekwondo di halaman sekolah.</p><p>Sebagai bentuk apresiasi, sekolah memberikan penghargaan berupa piagam dan dana pembinaan kepada para juara. Selain itu, para siswa yang tertarik mengikuti ekskul Taekwondo juga semakin termotivasi setelah menyaksikan keberhasilan kakak-kakak kelas mereka.</p><p>Ekskul Taekwondo di SMP Islam Parung sendiri telah aktif sejak 2018 dan kini menjadi salah satu kegiatan favorit. Latihan rutin dilakukan setiap hari Sabtu, dan para siswa juga dibekali dengan nilai-nilai sportivitas serta etika bela diri sesuai prinsip-prinsip taekwondo seperti <strong>courtesy, integrity, perseverance, self-control, dan indomitable spirit</strong>.</p><p>Sekolah berharap ke depan, kegiatan ini bisa terus berkembang dan membawa nama baik SMP Islam Parung hingga tingkat provinsi bahkan nasional.</p>', 'Tim Taekwondo SMP Islam Parung berhasil meraih 5 medali dalam Kejuaraan Taekwondo se-Kabupaten Bogor, membuktikan semangat sportivitas dan dedikasi dalam bidang olahraga bela diri.', 'images/01JXPJP2BSTM2NZ95CT0SY0JY6.png', '2025-06-13 23:40:26', '2025-06-13 23:40:26'),
(4, 'SMP Islam Parung Sukses Gelar Perkemahan Pramuka Tahunan di Ciseeng', 'smp-islam-parung-sukses-gelar-perkemahan-pramuka-tahunan-di-ciseeng-684d1a8e5ebef', '2025-06-14', '<p>Parung – Dalam upaya membentuk karakter siswa yang disiplin, mandiri, dan bertanggung jawab, <strong>SMP Islam Parung</strong> kembali menyelenggarakan <strong>Perkemahan Pramuka Tahunan</strong> pada tanggal <strong>31 Mei – 2 Juni 2025</strong> di <strong>Bumi Perkemahan Ciseeng, Kabupaten Bogor</strong>. Kegiatan ini diikuti oleh seluruh siswa kelas VII dan VIII serta didampingi oleh para pembina dan guru pendamping.</p><p>Acara diawali dengan upacara pembukaan yang dipimpin langsung oleh <strong>Kepala Sekolah, Bapak Ahmad Fauzi, S.Pd.</strong>, yang dalam sambutannya menyampaikan bahwa kegiatan kepramukaan adalah bagian penting dalam membentuk jiwa kepemimpinan dan semangat gotong royong siswa. “Pramuka bukan sekadar kegiatan luar ruang, tetapi sarana pendidikan karakter yang menyenangkan dan mendalam,” ujarnya.</p><p>Selama tiga hari dua malam, para peserta mengikuti berbagai kegiatan menarik seperti <strong>orientasi alam, lomba yel-yel, jelajah malam, api unggun, lomba pionering, dan pentas seni</strong>. Salah satu kegiatan yang paling berkesan adalah <strong>\"Wide Game\"</strong>, di mana para siswa ditantang menyelesaikan berbagai misi yang mengasah kemampuan navigasi, kerja tim, dan kepemimpinan.</p><p>Malam puncak kegiatan ditandai dengan <strong>api unggun</strong> dan penampilan bakat dari tiap regu. Beberapa siswa menampilkan musik akustik, pembacaan puisi perjuangan, serta drama pendek bertema kepahlawanan. Suasana hangat dan kebersamaan menyelimuti seluruh peserta yang berkemah di tengah alam terbuka.</p><p>Di akhir acara, diumumkan regu terbaik yang diraih oleh <strong>Regu Elang (putra)</strong> dan <strong>Regu Melati (putri)</strong>. Mereka dinilai paling disiplin, kreatif, dan kompak dalam seluruh rangkaian kegiatan. Semua peserta mendapatkan <strong>sertifikat keikutsertaan</strong>, sedangkan regu terbaik mendapatkan <strong>piala bergilir dari sekolah</strong>.</p><p>Perkemahan ini menjadi pengalaman yang tak terlupakan bagi siswa, terlebih bagi mereka yang pertama kali mengikuti kegiatan berkemah. Banyak yang mengaku belajar hal-hal baru seperti memasak bersama, mendirikan tenda, hingga mengatur jadwal tugas harian dalam regu.</p><p>Dengan suksesnya kegiatan ini, SMP Islam Parung berkomitmen untuk terus menjadikan <strong>ekstrakurikuler Pramuka sebagai kegiatan wajib</strong> yang menyenangkan dan edukatif, sejalan dengan visi sekolah untuk membentuk <strong>siswa Islami yang cerdas, tangguh, dan cinta alam</strong>.</p>', 'Kegiatan perkemahan tahunan Pramuka SMP Islam Parung berlangsung meriah di Bumi Perkemahan Ciseeng, diikuti oleh seluruh siswa kelas VII dan VIII sebagai sarana pembentukan karakter, kemandirian, dan kerja sama tim.', 'images/01JXPJZF1BPGKPBMKYC7TTND4M.png', '2025-06-13 23:45:34', '2025-06-13 23:45:34'),
(5, 'PMR SMP Islam Parung Gelar Latihan Gabungan dan Simulasi Pertolongan Pertama', 'pmr-smp-islam-parung-gelar-latihan-gabungan-dan-simulasi-pertolongan-pertama-684d1ad95711d', '2025-06-14', '<p>Parung – Dalam rangka memperingati <strong>Hari Palang Merah dan Bulan Kemanusiaan</strong>, SMP Islam Parung melalui ekstrakurikuler <strong>Palang Merah Remaja (PMR)</strong> mengadakan kegiatan <strong>Latihan Gabungan dan Simulasi Pertolongan Pertama</strong> pada hari Sabtu, <strong>7 Juni 2025</strong>, bertempat di lapangan sekolah.</p><p>Kegiatan ini diikuti oleh lebih dari 70 siswa dari berbagai sekolah sekitar, seperti SMP Negeri 2 Parung dan MTs Al-Mustofa, yang turut hadir sebagai peserta latihan gabungan. Acara dimulai dengan apel pembukaan yang dipimpin oleh Pembina PMR SMP Islam Parung, <strong>Ibu Siti Nurhaliza, S.Kep.</strong>, sekaligus memberikan pengarahan mengenai pentingnya peran remaja dalam kegiatan kemanusiaan.</p><p>Latihan gabungan ini mencakup <strong>materi pertolongan pertama</strong>, seperti cara menangani luka ringan, pembidaian patah tulang, dan evakuasi darurat. Para peserta juga berlatih cara melakukan <strong>CPR (resusitasi jantung paru)</strong> menggunakan alat peraga dan bimbingan langsung dari tim PMI Kabupaten Bogor yang hadir sebagai pemateri.</p><p>Selain itu, dilakukan pula <strong>simulasi penanganan korban kecelakaan lalu lintas</strong>, di mana siswa diperagakan sebagai korban dan tim PMR bertindak sebagai petugas penyelamat. Simulasi ini bertujuan menguji kesiapan siswa dalam menerapkan keterampilan pertolongan pertama secara cepat, tepat, dan tenang.</p><p>Kegiatan ini mendapat respon positif dari siswa dan guru. “Latihan seperti ini sangat berguna, karena kami jadi tahu bagaimana cara membantu orang lain saat terjadi kecelakaan,” ujar <strong>Amira (kelas VIII B)</strong>, salah satu peserta. Kepala sekolah, <strong>Bapak Ahmad Fauzi</strong>, juga menyampaikan dukungannya terhadap kegiatan ini dan berharap PMR terus menjadi wadah pembinaan karakter yang peduli dan tanggap terhadap sesama.</p><p>Kegiatan ditutup dengan penyerahan sertifikat keikutsertaan kepada seluruh peserta dan piagam penghargaan bagi peserta terbaik. PMR SMP Islam Parung juga berkomitmen untuk rutin melakukan edukasi kesehatan sederhana kepada siswa lain, serta turut aktif dalam kegiatan sosial dan donor darah bekerja sama dengan PMI setempat.</p><p>Melalui kegiatan ini, SMP Islam Parung ingin menanamkan semangat kepedulian, tanggung jawab sosial, dan kemampuan hidup sehat kepada siswa sejak dini, sejalan dengan nilai-nilai Islam dan kemanusiaan universal.</p>', 'Ekstrakurikuler PMR SMP Islam Parung mengadakan latihan gabungan bersama sekolah lain serta simulasi pertolongan pertama untuk meningkatkan keterampilan dasar siswa dalam bidang kesehatan dan kemanusiaan.', 'images/01JXPK1R84P7PYBNDHY5T2K4W8.png', '2025-06-13 23:46:49', '2025-06-13 23:46:49'),
(6, 'Paskibra SMP Islam Parung Tampil Memukau di Upacara Hari Kebangkitan Nasional', 'paskibra-smp-islam-parung-tampil-memukau-di-upacara-hari-kebangkitan-nasional-684d1b3624288', '2025-06-14', '<p>Parung – Dalam rangka memperingati <strong>Hari Kebangkitan Nasional</strong> yang jatuh pada tanggal <strong>20 Mei 2025</strong>, <strong>Pasukan Pengibar Bendera (Paskibra)</strong> SMP Islam Parung kembali menunjukkan kebanggaan dan kedisiplinan mereka dengan menjadi petugas utama dalam <strong>upacara bendera peringatan Harkitnas</strong> yang digelar di halaman sekolah.</p><p>Sebanyak 30 anggota Paskibra yang terdiri dari siswa kelas VII hingga IX tampil gagah dan penuh percaya diri sejak prosesi awal hingga akhir. Petugas pengibar bendera, yang dipimpin oleh <strong>Raihan Aditya (kelas VIII A)</strong>, menjalankan tugasnya dengan sangat baik dan berhasil mengibarkan Merah Putih secara sempurna diiringi lagu kebangsaan Indonesia Raya yang dinyanyikan bersama seluruh peserta upacara.</p><p>Pelatih Paskibra, <strong>Bapak Heri Prasetyo</strong>, menyampaikan bahwa latihan telah dilakukan secara intensif selama dua minggu menjelang hari pelaksanaan. “Kedisiplinan, kekompakan, dan semangat nasionalisme menjadi fokus utama kami dalam pembinaan anggota Paskibra. Mereka telah berlatih keras, dan hasilnya sangat membanggakan,” ujarnya.</p><p>Kegiatan ini juga menjadi ajang unjuk kemampuan bagi anggota baru Paskibra angkatan 2025. Kepala SMP Islam Parung, <strong>Bapak Ahmad Fauzi</strong>, memberikan apresiasi khusus kepada seluruh anggota Paskibra atas keberhasilan mereka dalam mengemban tugas penting ini. “Upacara kali ini bukan hanya seremonial, tetapi menjadi refleksi semangat kebangkitan generasi muda. Dan Paskibra kita menjadi simbol kedisiplinan dan kebanggaan sekolah,” tutur beliau dalam pidatonya.</p><p>Selain upacara, peringatan Hari Kebangkitan Nasional juga diisi dengan pembacaan puisi perjuangan, penampilan paduan suara lagu-lagu nasional, dan pembagian hadiah untuk lomba poster bertema nasionalisme. Acara berjalan lancar dan penuh semangat kebangsaan.</p><p>Keberhasilan ini sekaligus menjadi motivasi bagi anggota Paskibra untuk terus berkembang dan mempersiapkan diri menghadapi <strong>seleksi Paskibraka tingkat kecamatan</strong> yang akan diadakan pada bulan Agustus mendatang. Sekolah mendukung penuh para siswa yang ingin melanjutkan kiprahnya sebagai bagian dari Paskibraka Kabupaten Bogor.</p><p>Melalui kegiatan ini, SMP Islam Parung berharap dapat terus menumbuhkan <strong>jiwa nasionalisme, tanggung jawab, dan kepemimpinan</strong> dalam diri para siswa, sejalan dengan nilai-nilai pendidikan karakter yang ditanamkan sejak dini.</p>', 'Pasukan Pengibar Bendera (Paskibra) SMP Islam Parung sukses menjalankan tugas sebagai petugas upacara dalam peringatan Hari Kebangkitan Nasional dengan penampilan yang disiplin dan penuh semangat.', 'images/01JXPK4JVMXW3F0G143G2W9B9R.png', '2025-06-13 23:48:22', '2025-06-13 23:48:22'),
(7, 'Paduan Suara SMP Islam Parung Raih Juara Harapan I di Festival Lagu Daerah', 'paduan-suara-smp-islam-parung-raih-juara-harapan-i-di-festival-lagu-daerah-684d1bc4cb50c', '2025-06-14', '<p>Parung – Kabar gembira datang dari dunia seni suara SMP Islam Parung. Tim <strong>Paduan Suara SMP Islam Parung</strong> berhasil meraih <strong>Juara Harapan I</strong> dalam ajang <strong>Festival Lagu Daerah tingkat Kabupaten Bogor</strong> yang diselenggarakan pada Sabtu, <strong>24 Mei 2025</strong>, di Gedung Kesenian Cibinong.</p><p>Dalam kompetisi tersebut, tim paduan suara membawakan lagu daerah <strong>\"Manuk Dadali\"</strong> dari Jawa Barat dan <strong>\"Cik Cik Periuk\"</strong> dari Kalimantan Barat, dengan aransemen modern yang dipadukan dengan gerakan ekspresif dan harmonisasi vokal yang kuat. Penampilan mereka sukses memukau dewan juri dan mendapat tepuk tangan meriah dari para penonton.</p><p>Persiapan dilakukan selama kurang lebih satu bulan, dibimbing langsung oleh guru seni musik, <strong>Ibu Rina Puspita, S.Pd.</strong>, dan pelatih vokal eksternal, Kak Anjas dari Sanggar Nada Rasa. Latihan intensif diadakan tiga kali seminggu sepulang sekolah, dengan fokus pada teknik pernapasan, artikulasi, serta kekompakan suara antar bagian sopran, alto, dan tenor.</p><p>“Ini adalah pencapaian yang sangat membanggakan, karena ini adalah kali pertama kami mengikuti lomba tingkat kabupaten. Anak-anak sangat antusias dan berkomitmen sejak awal latihan hingga hari tampil,” ujar Ibu Rina saat diwawancarai usai acara.</p><p>Kepala SMP Islam Parung, <strong>Bapak Ahmad Fauzi, S.Pd.</strong>, juga memberikan apresiasi besar atas pencapaian tersebut. “Paduan suara adalah wadah yang sangat baik untuk menumbuhkan kerja sama, rasa percaya diri, serta apresiasi terhadap kekayaan budaya Indonesia. Kami akan terus mendukung pengembangan seni di sekolah, baik melalui lomba, pelatihan, maupun pentas internal,” tuturnya.</p><p>Keberhasilan ini menjadi motivasi baru bagi tim paduan suara untuk terus berlatih dan menyiapkan penampilan yang lebih baik di masa mendatang. Sekolah juga berencana mengadakan <strong>konser mini</strong> di akhir semester sebagai bentuk apresiasi terhadap seluruh tim dan untuk menginspirasi siswa lain agar ikut mengembangkan bakat di bidang seni vokal.</p><p>Dengan semangat dan dedikasi yang ditunjukkan para siswa, SMP Islam Parung yakin bahwa kegiatan paduan suara tidak hanya membangun kemampuan bermusik, tetapi juga menanamkan nilai-nilai <strong>kerja sama, disiplin, dan cinta budaya lokal</strong> dalam diri generasi muda.</p>', 'Tim paduan suara SMP Islam Parung berhasil meraih Juara Harapan I dalam Festival Lagu Daerah se-Kabupaten Bogor, menampilkan aransemen kreatif lagu tradisional dengan penuh semangat dan kekompakan.\n\n', 'images/01JXPK8Y6SA78AFZKJ05SH0VCP.png', '2025-06-13 23:50:44', '2025-06-13 23:50:44'),
(8, 'SMP Islam Parung Gelar Pekan Olahraga Sekolah 2025: Wujudkan Siswa Sehat dan Sportif', 'smp-islam-parung-gelar-pekan-olahraga-sekolah-2025-wujudkan-siswa-sehat-dan-sportif-684d1c22d414b', '2025-06-15', '<p>Parung – Suasana meriah dan penuh semangat terasa selama sepekan terakhir di SMP Islam Parung. Sekolah ini sukses menggelar <strong>Pekan Olahraga Sekolah (POS) 2025</strong> mulai tanggal <strong>27 Mei hingga 1 Juni 2025</strong>, yang diikuti oleh seluruh siswa dari kelas VII hingga IX.</p><p>POS tahun ini mengusung tema <strong>“Sehat, Sportif, dan Berprestasi”</strong> dengan tujuan menanamkan nilai sportivitas, kerja sama tim, dan semangat hidup sehat sejak dini. Acara dibuka secara resmi oleh <strong>Kepala Sekolah, Bapak Ahmad Fauzi, S.Pd.</strong>, dalam upacara pembukaan yang ditandai dengan pelepasan balon dan defile peserta dari masing-masing kelas.</p><p>Berbagai cabang olahraga dipertandingkan, antara lain:</p><ul><li><strong>Futsal</strong></li><li><strong>Bulu tangkis</strong></li><li><strong>Tenis meja</strong></li><li><strong>Basket mini</strong></li><li><strong>Cerdas cermat olahraga</strong></li></ul><p>Salah satu pertandingan yang paling menarik perhatian adalah final futsal antara <strong>kelas IX A dan VIII C</strong>, yang berlangsung seru dan disaksikan oleh seluruh warga sekolah. Tim IX A akhirnya keluar sebagai juara setelah menang adu penalti dengan skor 3-2. Sorak sorai dan semangat kebersamaan mewarnai suasana pertandingan.</p><p>Selain pertandingan, diadakan pula <strong>senam massal</strong> bersama guru dan siswa sebagai bagian dari kampanye gaya hidup sehat. Kegiatan ini dibimbing oleh instruktur senam dari luar sekolah dan berlangsung di halaman utama sekolah dengan penuh antusiasme.</p><p>Waka Kesiswaan, <strong>Ibu Lilis Maulida, S.Pd.</strong>, menjelaskan bahwa POS bukan hanya sekadar perlombaan, tapi juga merupakan media pendidikan karakter. “Di lapangan, siswa belajar mengelola emosi, menghormati lawan, serta berusaha keras untuk mencapai hasil terbaik. Inilah nilai-nilai yang kami harapkan tumbuh melalui olahraga,” jelasnya.</p><p>Sebagai bentuk apresiasi, sekolah memberikan <strong>tropi dan piagam penghargaan</strong> kepada para juara serta penghargaan khusus untuk <strong>pemain terbaik dan tim paling fair play</strong>. Tidak hanya itu, para pemenang juga diproyeksikan untuk mewakili sekolah dalam kejuaraan antar SMP tingkat kecamatan yang akan datang.</p><p>Dengan kegiatan ini, SMP Islam Parung berharap dapat membentuk siswa yang tidak hanya unggul dalam akademik, tetapi juga <strong>aktif, sehat, dan berkarakter kuat</strong>, sesuai dengan visi pendidikan holistik yang dijunjung tinggi oleh sekolah.</p>', 'SMP Islam Parung menyelenggarakan Pekan Olahraga Sekolah (POS) 2025 sebagai ajang pembinaan fisik, mental, dan sportivitas siswa melalui berbagai pertandingan olahraga antar kelas.', 'images/01JXPKBT15J73WA5T36V1X628D.JPG', '2025-06-13 23:52:18', '2025-06-13 23:52:18'),
(9, 'Tim Futsal SMP Islam Parung Raih Juara 1 Turnamen Antar SMP se-Kecamatan Parung', 'tim-futsal-smp-islam-parung-raih-juara-1-turnamen-antar-smp-se-kecamatan-parung-684d1c7fb9d4f', '2025-06-15', '<p>Parung – Kabar membanggakan datang dari dunia olahraga SMP Islam Parung. <strong>Tim futsal sekolah berhasil meraih Juara 1</strong> dalam ajang <strong>Turnamen Futsal Antar SMP se-Kecamatan Parung</strong> yang digelar pada <strong>5–7 Juni 2025</strong> di GOR Parung.</p><p>Turnamen yang diikuti oleh 12 tim dari berbagai SMP ini berlangsung ketat dan kompetitif. SMP Islam Parung menunjukkan performa luar biasa sejak babak penyisihan hingga final. Dalam pertandingan puncak, tim futsal SMP Islam Parung berhasil menaklukkan SMPN 3 Parung dengan skor <strong>3-1</strong>, lewat gol spektakuler yang dicetak oleh <strong>Rizky Maulana</strong>, <strong>Fadlan Zidan</strong>, dan <strong>Aditio Ramadhan</strong>.</p><p>Pelatih futsal, <strong>Bapak Hendra Saputra</strong>, menyampaikan rasa bangganya atas semangat dan kekompakan para pemain. “Anak-anak bermain dengan strategi yang disiplin, tidak hanya mengandalkan skill, tetapi juga kerja sama dan mental bertanding yang luar biasa,” ujar beliau usai pertandingan.</p><p>Selama turnamen berlangsung, tim futsal SMP Islam Parung menunjukkan sportivitas tinggi dan menjadi sorotan karena permainan mereka yang rapi dan atraktif. Tidak hanya meraih gelar juara, <strong>Rizky Maulana</strong> dari kelas VIII B juga dinobatkan sebagai <strong>Pemain Terbaik Turnamen</strong>.</p><p>Kepala SMP Islam Parung, <strong>Bapak Ahmad Fauzi, S.Pd.</strong>, memberikan apresiasi besar atas prestasi yang diraih. “Kemenangan ini bukan hanya soal piala, tetapi menunjukkan bahwa siswa kami mampu berprestasi di berbagai bidang, termasuk olahraga. Kami akan terus mendukung dan memfasilitasi bakat siswa agar berkembang secara maksimal,” ujarnya saat penyambutan tim di sekolah.</p><p>Sebagai bentuk penghargaan, sekolah memberikan <strong>sertifikat, piagam, dan dana pembinaan</strong> kepada seluruh tim futsal. Prestasi ini juga menjadi motivasi untuk mengikuti kejuaraan tingkat kabupaten yang akan datang. Sekolah kini tengah mempersiapkan tim untuk mengikuti seleksi lanjutan.</p><p>Melalui keberhasilan ini, SMP Islam Parung berharap dapat terus menumbuhkan semangat kompetitif yang sehat serta memperkuat karakter siswa dalam hal <strong>disiplin, kerja keras, dan sportivitas</strong>, sesuai dengan visi sekolah sebagai institusi yang mendidik secara menyeluruh, baik akademik maupun non-akademik.</p>', 'Tim futsal SMP Islam Parung meraih juara 1 dalam Turnamen Futsal Antar SMP se-Kecamatan Parung setelah menang dramatis di babak final melawan SMPN 3 Parung.', 'images/01JXPKEMRBWM2FQGB4YB8Y1FCK.jpg', '2025-06-13 23:53:51', '2025-06-13 23:53:51'),
(10, 'Drumband SMP Islam Parung Semarakkan Pawai HUT RI ke-80 dengan Penampilan Spektakuler', 'drumband-smp-islam-parung-semarakkan-pawai-hut-ri-ke-80-dengan-penampilan-spektakuler-684d1cc451db4', '2025-06-15', '<p>Parung – Dalam rangka memeriahkan <strong>Hari Ulang Tahun Kemerdekaan Republik Indonesia ke-80</strong>, <strong>unit Drumband SMP Islam Parung</strong> turut serta dalam acara <strong>Pawai Kemerdekaan se-Kecamatan Parung</strong> yang digelar pada <strong>17 Agustus 2025</strong>. Penampilan mereka sukses mencuri perhatian masyarakat dan dewan juri dengan kombinasi ritme dinamis, kostum seragam menarik, serta semangat nasionalisme yang tinggi.</p><p>Dipimpin oleh <strong>Mayoret utama, Zahra Aulia (kelas IX A)</strong>, tim drumband yang beranggotakan 45 siswa menampilkan berbagai lagu nasional seperti <strong>“Hari Merdeka”</strong>, <strong>“Garuda Pancasila”</strong>, dan aransemen kreatif lagu daerah <strong>“Yamko Rambe Yamko”</strong>. Barisan marching yang tertata rapi, teknik pukul yang presisi, dan sinergi antara snare, bass, tenor, dan bell lyra menunjukkan hasil latihan yang konsisten dan serius selama dua bulan terakhir.</p><p>Pembina Drumband, <strong>Bapak Dedi Sutrisno</strong>, mengatakan bahwa latihan dilakukan setiap sore sejak awal Juni 2025. “Kami latih tidak hanya teknik, tapi juga kekompakan dan rasa percaya diri anak-anak. Mereka berhasil tampil luar biasa hari ini. Ini adalah kerja keras seluruh tim,” ujarnya bangga.</p><p>Penampilan Drumband SMP Islam Parung menjadi salah satu yang paling banyak mendapat sorakan dan tepuk tangan dari warga yang memadati sepanjang rute pawai. Bahkan beberapa penonton mengabadikan momen penampilan mereka untuk dibagikan di media sosial, menjadikan SMP Islam Parung sempat menjadi topik hangat di komunitas Parung.</p><p>Kepala SMP Islam Parung, <strong>Bapak RAHMAT HERMAWAN S.Pd.</strong>, yang hadir langsung mendampingi, mengungkapkan rasa bangga dan syukurnya. “Drumband bukan hanya soal musik dan baris-berbaris, tapi juga bagian dari pembentukan karakter. Anak-anak dilatih disiplin, kerja tim, dan keberanian tampil di depan umum. Ini sangat sejalan dengan misi sekolah,” tuturnya.</p><p>Tak hanya itu, unit Drumband SMP Islam Parung juga meraih <strong>Penghargaan Khusus sebagai Tim Drumband Terfavorit</strong> versi panitia. Ini menjadi motivasi baru bagi para anggota untuk terus berkembang dan mempersiapkan diri mengikuti ajang tingkat kabupaten di masa depan.</p><p>Dengan semangat “Berani, Berirama, dan Berkarya”, unit drumband SMP Islam Parung terus berkomitmen menjadi duta seni dan semangat kebangsaan bagi sekolah, serta mempererat rasa cinta tanah air melalui alunan musik dan kekompakan.</p>', 'Unit Drumband SMP Islam Parung tampil memukau dalam Pawai HUT Kemerdekaan RI ke-80 di Parung dengan aransemen lagu-lagu perjuangan yang energik dan kostum seragam yang menarik perhatian.', 'images/01JXPKGQQA10M4NB1MTS3R0KKD.jpg', '2025-06-13 23:55:00', '2025-06-13 23:55:40'),
(11, 'Tim Basket SMP Islam Parung Melaju ke Final Turnamen Antar Sekolah se-Kabupaten Bogor', 'tim-basket-smp-islam-parung-melaju-ke-final-turnamen-antar-sekolah-se-kabupaten-bogor-684d1d2f66553', '2025-06-15', '<p>Parung – Prestasi membanggakan kembali ditorehkan oleh siswa SMP Islam Parung. <strong>Tim basket putra</strong> sekolah berhasil melaju ke <strong>babak final Turnamen Basket Pelajar se-Kabupaten Bogor 2025</strong> setelah menumbangkan tim kuat <strong>SMPN 6 Cibinong</strong> dengan skor akhir <strong>46-39</strong>, dalam pertandingan semifinal yang digelar di GOR Indoor Pakansari pada <strong>10 Juni 2025</strong>.</p><p>Sejak awal pertandingan, tim SMP Islam Parung tampil dengan performa meyakinkan. <strong>Kapten tim, Arkan Prasetyo (kelas IX B)</strong>, memimpin rekan-rekannya dengan strategi yang solid dan komunikasi yang baik di lapangan. Dalam pertandingan tersebut, Arkan mencetak 18 poin dan menjadi pemain dengan kontribusi tertinggi. Permainan cepat dan akurat dari para pemain, khususnya saat fast break dan rebound, menjadi kunci kemenangan tim.</p><p>Pelatih basket sekolah, <strong>Bapak Fadli Ramadhan</strong>, menyampaikan bahwa keberhasilan ini tidak lepas dari latihan intensif selama dua bulan terakhir. “Kami tidak hanya melatih teknik dan fisik, tapi juga membentuk mental juang dan kerja sama tim. Anak-anak menunjukkan semangat luar biasa, dan saya sangat bangga,” ujarnya.</p><p>SMP Islam Parung sendiri memang dikenal aktif dalam pengembangan bakat siswa di bidang olahraga. Tim basket merupakan salah satu ekstrakurikuler unggulan, dengan anggota yang berasal dari berbagai jenjang kelas dan memiliki semangat kompetitif tinggi. Sekolah secara rutin mengikutsertakan tim dalam berbagai turnamen tingkat kecamatan dan kabupaten.</p><p>Kepala sekolah, <strong>Bapak RAHMAT HERMAWAN S.Pd.</strong>, mengucapkan selamat kepada seluruh anggota tim. “Ini bukan hanya kemenangan dalam pertandingan, tapi juga hasil dari kedisiplinan, kerja keras, dan semangat pantang menyerah. Semoga di final nanti kalian bisa tampil lebih maksimal dan membawa pulang gelar juara,” tutur beliau.</p><p>Final turnamen akan digelar pada <strong>15 Juni 2025</strong>, di mana SMP Islam Parung akan menghadapi SMP Negeri 1 Gunung Sindur. Seluruh warga sekolah menyatakan dukungannya penuh dan berencana mengadakan nonton bareng sebagai bentuk semangat solidaritas dan motivasi untuk para pemain.</p><p>Dengan semangat “Berani Tampil, Siap Menang”, tim basket SMP Islam Parung bertekad memberikan yang terbaik dan menjadikan olahraga sebagai bagian dari pembentukan karakter siswa yang tangguh, sehat, dan berprestasi.</p>', 'Tim basket putra SMP Islam Parung berhasil menembus babak final dalam Turnamen Basket Pelajar se-Kabupaten Bogor setelah mengalahkan SMPN 6 Cibinong dengan permainan solid dan penuh strategi.', 'images/01JXPKM09K64EHS5JJMFG4NFKK.png', '2025-06-13 23:56:47', '2025-06-13 23:57:12');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel_cache_356a192b7913b04c54574d18c28d46e6395428ab', 'i:1;', 1749922818),
('laravel_cache_356a192b7913b04c54574d18c28d46e6395428ab:timer', 'i:1749922818;', 1749922818),
('laravel_cache_livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3', 'i:1;', 1749908906),
('laravel_cache_livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1749908906;', 1749908906);

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
-- Table structure for table `ekstrakurikulers`
--

CREATE TABLE `ekstrakurikulers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `jadwal` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ekstrakurikulers`
--

INSERT INTO `ekstrakurikulers` (`id`, `nama`, `deskripsi`, `jadwal`, `lokasi`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Seni Tari', 'Ekskul Seni Tari adalah tempat siswa menyalurkan minat dan bakat di bidang tari, baik tradisional maupun modern. Melalui latihan rutin, siswa belajar gerak, kekompakan, dan percaya diri. Ekskul ini juga aktif tampil di berbagai acara sekolah dan lomba.', 'Hari Senin', 'Lapangan', 'images/01JXQQWC7D9Z0HET623SEXHHPH.jpg', '2025-06-14 10:30:30', '2025-06-14 10:31:26'),
(2, 'Taekwondo', 'Ekskul Taekwondo melatih siswa dalam seni bela diri asal Korea yang mengutamakan disiplin, kekuatan, dan ketangkasan. Selain meningkatkan fisik dan mental, siswa juga dibina untuk mengikuti ujian sabuk dan kejuaraan tingkat sekolah hingga daerah.', 'Hari Selasa', 'Lapangan', 'images/01JXQR0EJCNDN8EN7STTJ27ZK0.png', '2025-06-14 10:32:43', '2025-06-14 10:32:43'),
(3, 'Pramuka', 'Ekskul Pramuka membentuk karakter siswa yang mandiri, disiplin, dan bertanggung jawab melalui kegiatan kepramukaan. Siswa dilatih keterampilan dasar, kerja sama tim, serta ikut serta dalam kegiatan perkemahan dan lomba tingkat gugus depan hingga kwartir.', 'Hari Rabu', 'Lapangan', 'images/01JXQR1YXGHEYKMRYJHZ48JJ18.png', '2025-06-14 10:33:33', '2025-06-14 10:33:33'),
(4, 'PMR (Palang Merah Remaja)', 'Ekskul PMR mengajarkan siswa keterampilan dasar pertolongan pertama, kepedulian sosial, dan hidup sehat. Kegiatan ini membentuk jiwa relawan sejak dini melalui pelatihan, simulasi, dan keterlibatan dalam kegiatan kemanusiaan di sekolah maupun luar sekolah.', 'Hari Kamis', 'Lapangan', 'images/01JXQR36NTB1374E414CPPYKV0.png', '2025-06-14 10:34:14', '2025-06-14 10:34:14'),
(5, 'Paskibra', 'Ekskul Paskibra melatih kedisiplinan, tanggung jawab, dan kekompakan siswa melalui kegiatan baris-berbaris dan upacara bendera. Anggota Paskibra juga dipersiapkan untuk menjadi petugas upacara di sekolah maupun dalam ajang seleksi tingkat kecamatan hingga nasional.', 'Hari Jumat', 'Lapangan', 'images/01JXQR4QAXGAD3K7K3QQRGTB7H.png', '2025-06-14 10:35:04', '2025-06-14 10:35:04'),
(6, 'Paduan Suara', 'Ekskul Paduan Suara adalah wadah bagi siswa yang hobi menyanyi dan ingin mengasah kemampuan vokal secara harmonis. Kegiatan ini melatih teknik bernyanyi, kekompakan, dan percaya diri, serta tampil di berbagai acara sekolah maupun lomba seni.', 'Hari Sabtu', 'Lapangan', 'images/01JXQR60BF5R9T9FZATZ7ZVB6C.png', '2025-06-14 10:35:46', '2025-06-14 10:35:46'),
(7, 'Sepak Bola', 'Ekskul Sepak Bola melatih kemampuan teknik bermain bola, strategi tim, dan sportivitas. Kegiatan ini dilakukan secara rutin di lapangan dan menjadi ajang bagi siswa untuk berprestasi melalui pertandingan antarsekolah dan turnamen tingkat daerah.', 'Hari Sabtu', 'Lapangan', 'images/01JXQR7WEG3KGTX6489B70VB2R.JPG', '2025-06-14 10:36:47', '2025-06-14 10:36:47'),
(8, 'Futsal', 'Ekskul Futsal menjadi tempat siswa mengembangkan skill bermain futsal seperti dribbling, passing, dan kerja sama tim. Latihan rutin dilakukan di lapangan indoor dan tim futsal sekolah aktif mengikuti berbagai kompetisi antar pelajar.', 'Hari Sabtu', 'Lapangan', 'images/01JXQR963VR2QFKTNT7FTVDJKJ.jpg', '2025-06-14 10:37:30', '2025-06-14 10:37:30'),
(9, 'Drumband', 'Ekskul Drumband melatih siswa dalam memainkan alat musik perkusi dan tiup secara kompak dan ritmis. Kegiatan ini mengembangkan kreativitas, disiplin, dan kerja sama tim, serta rutin tampil di acara sekolah maupun pawai peringatan hari besar.', 'Hari Sabtu', 'Lapangan', 'images/01JXQRC23QQVRFP0C83KWM964C.jpg', '2025-06-14 10:39:04', '2025-06-14 10:39:04'),
(10, 'Basket', 'Ekskul Basket melatih siswa dalam teknik dasar permainan bola basket, seperti dribble, passing, dan shooting. Selain meningkatkan kebugaran, kegiatan ini juga membentuk semangat sportivitas dan kerja sama tim, serta aktif mengikuti turnamen antar sekolah.', 'Hari Jumat', 'Lapangan', 'images/01JXQRE6BERF9EZ8T4DQ09RS41.png', '2025-06-14 10:40:14', '2025-06-14 10:40:14');

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
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galeris`
--

CREATE TABLE `galeris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `kategori` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galeris`
--

INSERT INTO `galeris` (`id`, `judul`, `deskripsi`, `kategori`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Kegiatan Seni', 'SMP Islam Parung', 'kegiatan', 'images/01JXPKXPA41MHY5ZJEFS2WQW51.jpg', '2025-06-14 00:02:04', '2025-06-14 08:08:31'),
(2, 'Kegiatan Taekwondo', 'SMP Islam Parung', 'kegiatan', 'images/01JXPM1F94F58NASYKAAHT1PBM.png', '2025-06-14 00:04:08', '2025-06-14 08:08:31'),
(3, 'Kegiatan Pramuka', 'SMP Islam Parung', 'kegiatan', 'images/01JXPM35GPDG7X78BMP45P2ZCV.png', '2025-06-14 00:05:04', '2025-06-14 08:08:31'),
(4, 'Kegiatan PMR', 'SMP Islam Parung', 'kegiatan', 'images/01JXPM4DRQBWJCFXK7GBEN18TF.png', '2025-06-14 00:05:45', '2025-06-14 08:08:31'),
(5, 'Kegitan Paskibra', 'SMP Islam Parung', 'kegiatan', 'images/01JXPM5J71CWKT5RRHEATEARW4.png', '2025-06-14 00:06:22', '2025-06-14 08:08:31'),
(6, 'Kegiatan Paduan Suara', 'SMP Islam Parung', 'kegiatan', 'images/01JXPNKTQEN70S44X65DEEF3EQ.png', '2025-06-14 00:31:38', '2025-06-14 08:08:31'),
(7, 'Kegiatan Basket', '12 Juni 2025', 'kegiatan', 'images/01JXQBQH8HFZW1K55WFGRNF184.png', '2025-06-14 06:58:08', '2025-06-14 08:08:31'),
(8, 'Kegiatan Voli', '20 Juni 2025', 'kegiatan', 'images/01JXQCC59K6P5N2HK74NNT70DV.png', '2025-06-14 07:09:24', '2025-06-14 08:08:31'),
(10, 'Kegiatan Futsal', '12 Juni 2025', 'ekskul', 'images/01JXQG32H3MAXCPFAS77MXS7CS.jpg', '2025-06-14 08:14:21', '2025-06-14 08:14:21');

-- --------------------------------------------------------

--
-- Table structure for table `gurus`
--

CREATE TABLE `gurus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `mapel` varchar(255) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gurus`
--

INSERT INTO `gurus` (`id`, `nama`, `mapel`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Rahmat Hermawan, S.Pd', 'Pend Jasmani Olah Raga Kesehatan ( PJOK)', 'KEPSEK', '2025-06-14 09:44:20', '2025-06-14 09:44:20'),
(2, 'Drs. H.Muslim', 'Pend. Agama  dan Budi Pekerti', 'Humas', '2025-06-14 09:44:57', '2025-06-14 09:44:57'),
(3, 'Neni Rukmini, S.Ag, M.Pd', 'Pend. Agama  dan Budi Pekerti', 'Humas', '2025-06-14 09:45:09', '2025-06-14 09:45:09'),
(4, 'Neni Rukmini, S.Ag, M.Pd', 'Bahasa Sunda', 'Humas', '2025-06-14 09:45:23', '2025-06-14 09:45:23'),
(5, 'Supriyadi, S.Pd', 'Pendidikan Seni Budaya', NULL, '2025-06-14 09:45:34', '2025-06-14 09:45:34'),
(6, 'Ahmad Dahlan, S.Ag', 'Pend. Agama  dan Budi Pekerti', 'Pemb OSIS', '2025-06-14 09:45:48', '2025-06-14 09:45:48'),
(7, 'Irawati Picziani, S.Kom', 'Teknologi Informasi dan Komunikasi /Informatika', NULL, '2025-06-14 09:46:06', '2025-06-14 09:46:06'),
(8, 'Nining Indraningsih, M.Pd', 'Bahasa Indonesia', 'BK', '2025-06-14 09:46:37', '2025-06-14 09:46:37'),
(9, 'Ajat Munajat, S.Ag', 'Ilmu Pengetahuan Sosial ( IPS )', 'BK', '2025-06-14 09:47:09', '2025-06-14 09:47:09'),
(10, 'Agung Wijaya K, S.Ag', 'PPKn / Pendidikan Pancasila', NULL, '2025-06-14 09:47:17', '2025-06-14 09:47:17'),
(11, 'Nurohayati, S.Tp', 'Matematika', NULL, '2025-06-14 09:47:24', '2025-06-14 09:47:24'),
(12, 'Rahmat Mustopa, S.Ag', 'Matematika', 'WAKSEK KUR', '2025-06-14 09:47:36', '2025-06-14 09:47:36'),
(13, 'Yudith Eviyanti, S.Pd', 'Bahasa Inggris', NULL, '2025-06-14 09:47:48', '2025-06-14 09:47:48'),
(14, 'Rina Anggraeni, S.Pd', 'Ilmu Pengetahuan Alam ( IPA )', NULL, '2025-06-14 09:48:01', '2025-06-14 09:48:01'),
(15, 'Rina Anggraeni, S.Pd', 'Bahasa Sunda', NULL, '2025-06-14 09:48:08', '2025-06-14 09:48:08'),
(16, 'Susilo Herawati, S.Sos', 'PPKn / Pendidikan Pancasila', NULL, '2025-06-14 09:48:59', '2025-06-14 09:48:59'),
(17, 'Ir. Suud Hamid', 'Ilmu Pengetahuan Alam ( IPA )', 'Koord Lab ', '2025-06-14 09:49:19', '2025-06-14 09:49:19'),
(18, 'Ade Spetikasari, S.Pd', 'Bahasa Indonesia', NULL, '2025-06-14 09:49:32', '2025-06-14 09:49:32'),
(19, 'Neneng Hasanah, S.Mn', 'Ilmu Pengetahuan Sosial ( IPS )', NULL, '2025-06-14 09:49:51', '2025-06-14 09:49:51'),
(20, 'Febby Kusliani, S.Pd', 'Bahasa Inggris', NULL, '2025-06-14 09:49:58', '2025-06-14 09:49:58'),
(21, 'Nurhasanah, S.Pd', 'Ilmu Pengetahuan Alam ( IPA )', 'Pemb.OSIS', '2025-06-14 09:50:12', '2025-06-14 09:50:12'),
(22, 'Dery Prima Rohendi, SE', 'Ilmu Pengetahuan Sosial ( IPS )', 'WAKASEK SIS', '2025-06-14 09:50:25', '2025-06-14 09:50:25'),
(23, 'Maulana Hasan, S.Pd', 'Bahasa Indonesia', NULL, '2025-06-14 09:50:38', '2025-06-14 09:50:38'),
(24, 'Dedi Suherdi', 'Pend Jasmani Olah Raga Kesehatan  ( PJOK)', NULL, '2025-06-14 09:50:53', '2025-06-14 09:50:53'),
(25, 'Dedi Suherdi', 'Bahasa Sunda', NULL, '2025-06-14 09:51:06', '2025-06-14 09:51:06'),
(26, 'Sasi Kirana', 'Prakarya', NULL, '2025-06-14 09:51:13', '2025-06-14 09:51:13'),
(27, 'Ana Syafitri, S.Pd', 'Bahasa Inggris', NULL, '2025-06-14 09:51:29', '2025-06-14 09:51:29'),
(28, 'Sri Rahayu, S.Si', 'Matematika', 'Pemb OSIS', '2025-06-14 09:51:43', '2025-06-14 09:51:43'),
(29, 'Istianah Ismail', 'Bahasa Indonesia', NULL, '2025-06-14 09:51:55', '2025-06-14 09:51:55'),
(30, 'Ade Hermawan Miftah, A.Md', 'Teknologi Informasi dan Komunikasi /Informatika', NULL, '2025-06-14 09:52:04', '2025-06-14 09:52:04'),
(31, 'Ika Prawati, S.Pd', 'Matematika', NULL, '2025-06-14 09:52:12', '2025-06-14 09:52:12'),
(32, 'Rizki Amalia, S.Pd', 'Baca Tulis Al Qur\'an ( BTQ )', NULL, '2025-06-14 09:52:22', '2025-06-14 09:52:22'),
(33, 'Wilda Ayu Lestari, S.Pd', 'PPKn / Pendidikan Pancasila', NULL, '2025-06-14 09:52:32', '2025-06-14 09:52:32'),
(34, 'Seli Purnama Sari, S.Pd', 'Ilmu Pengetahuan Sosial ( IPS )', NULL, '2025-06-14 09:52:41', '2025-06-14 09:52:41'),
(35, 'Sifa Nasyiroh, S.S', 'Bahasa Inggris', NULL, '2025-06-14 09:52:50', '2025-06-14 09:52:50'),
(36, 'Sifa Nasyiroh, S.S', 'Prakarya', NULL, '2025-06-14 09:52:59', '2025-06-14 09:52:59'),
(37, 'Joko Purnomo', 'Pend Jasmani Olah Raga Kesehatan  ( PJOK)', NULL, '2025-06-14 09:53:26', '2025-06-14 09:53:26'),
(38, 'Diana Amelia Candra, SS', 'Bahasa Inggris', NULL, '2025-06-14 09:53:36', '2025-06-14 09:53:36'),
(39, 'Muslihun, S.Ag', 'Pend. Agama  dan Budi Pekerti', 'Pemb OSIS', '2025-06-14 09:53:47', '2025-06-14 09:53:47'),
(40, 'Arief Budiman, S.Si', 'Ilmu Pengetahuan Alam ( IPA )', NULL, '2025-06-14 09:53:57', '2025-06-14 09:53:57'),
(41, 'Ryan Herdian', 'Seni Budaya', NULL, '2025-06-14 09:54:06', '2025-06-14 09:54:06'),
(42, 'Melati Anggrayani', 'Bahasa Indonesia', 'Pemb OSIS', '2025-06-14 09:54:14', '2025-06-14 09:55:48'),
(43, 'Melati Anggrayani', 'Prakarya', 'Pemb OSIS', '2025-06-14 09:54:29', '2025-06-14 09:54:29'),
(44, 'Wahyu Iskandar, S.Pd', 'Baca Tulis Al Qur\'an ( BTQ )', 'Sanpras', '2025-06-14 09:54:39', '2025-06-14 09:54:39'),
(45, 'Moch . Ray Akbarayaldi', 'PJOK', NULL, '2025-06-14 09:54:48', '2025-06-14 09:54:48'),
(46, 'Desti Rismawati, S.S', 'Bahasa Indonesia', NULL, '2025-06-14 09:54:55', '2025-06-14 09:54:55');

-- --------------------------------------------------------

--
-- Table structure for table `hero_images`
--

CREATE TABLE `hero_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hero_images`
--

INSERT INTO `hero_images` (`id`, `image`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'hero-images/01JXPNZRW8APNXPC9S87NW5V8M.jpg', 0, '2025-06-14 00:38:10', '2025-06-14 00:38:10'),
(3, 'hero-images/01JXPP56ZG0ZJ4JE9MBXK8EHE9.jpg', 0, '2025-06-14 00:41:08', '2025-06-14 00:41:08'),
(4, 'hero-images/01JXPPN10J4E4DTDG6EY6869F2.jpg', 0, '2025-06-14 00:49:46', '2025-06-14 00:49:46'),
(5, 'hero-images/01JXPQ8NFFGV4FRRAZPNC6C42E.jpg', 0, '2025-06-14 01:00:30', '2025-06-14 01:00:30'),
(6, 'hero-images/01JXPQ98NRR7BV00YTXJSC5G1A.jpg', 0, '2025-06-14 01:00:49', '2025-06-14 01:00:49'),
(7, 'hero-images/01JXPQZ7YQBTD1CFMCZPCBBG88.jpg', 0, '2025-06-14 01:12:50', '2025-06-14 01:12:50');

-- --------------------------------------------------------

--
-- Table structure for table `identitas_sekolahs`
--

CREATE TABLE `identitas_sekolahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `hp` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `identitas_sekolahs`
--

INSERT INTO `identitas_sekolahs` (`id`, `nama`, `alamat`, `telepon`, `hp`, `email`, `logo`, `created_at`, `updated_at`) VALUES
(2, 'SMP ISLAM PARUNG', 'Jl. Raya Parung Bogor No. 648', '0251-8611451', '0812-8895-6718', 'smpiparung.sch.id@gmail.com', 'images/01JXPXQVEM2DJ4GWBCTCNW2V4W.png', '2025-06-14 02:53:39', '2025-06-14 02:53:39');

-- --------------------------------------------------------

--
-- Table structure for table `info_cards`
--

CREATE TABLE `info_cards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_ppdbs`
--

CREATE TABLE `jadwal_ppdbs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `kegiatan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jadwal_ppdbs`
--

INSERT INTO `jadwal_ppdbs` (`id`, `tanggal`, `kegiatan`, `created_at`, `updated_at`) VALUES
(1, '01 Mei 2025 - 30 Mei 2025', 'Pendaftaran Online', '2025-06-14 10:55:19', '2025-06-14 10:55:19'),
(2, '01 Juni 2025 - 03 Juni 2025', 'Verifikasi Berkas & Validasi Data', '2025-06-14 10:56:28', '2025-06-14 10:56:28'),
(3, '05 Juni 2025	- 06 Juni 2025', 'Tes Akademik & Wawancara', '2025-06-14 10:56:38', '2025-06-14 10:56:38'),
(4, '08 Juni 2025	- 08 Juni 2025', 'Pengumuman Hasil Seleksi', '2025-06-14 10:56:47', '2025-06-14 10:56:47'),
(5, '10 Juni 2025	- 15 Juni 2025', 'Daftar Ulang & Penyerahan Berkas Asli', '2025-06-14 10:56:57', '2025-06-14 10:56:57'),
(6, '20 Juni 2025	- 21 Juni 2025', 'Pengukuran Seragam & Pengambilan Buku', '2025-06-14 10:57:07', '2025-06-14 10:57:07'),
(7, '01 Juli 2025 - 01 Juli 2025', 'Sosialisasi Program Sekolah & Pra-MPLS', '2025-06-14 10:57:24', '2025-06-14 10:57:24'),
(8, '15 Juli 2025 - 19 Juli 2025', 'MPLS (Masa Pengenalan Lingkungan Sekolah)', '2025-06-14 10:57:41', '2025-06-14 10:57:41');

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
-- Table structure for table `kepala_sekolahs`
--

CREATE TABLE `kepala_sekolahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `periode` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kepala_sekolahs`
--

INSERT INTO `kepala_sekolahs` (`id`, `nama`, `periode`, `image`, `created_at`, `updated_at`) VALUES
(2, 'A. Kamil Amrullah, BA', '1973 – 1974', NULL, '2025-06-14 02:55:18', '2025-06-14 02:55:52'),
(3, 'K. H. Ahmad Mansyur', '1967 – 1973', NULL, '2025-06-14 02:55:20', '2025-06-14 02:55:20'),
(4, 'Mahmudi', '1974 – 1976', NULL, '2025-06-14 02:56:11', '2025-06-14 02:56:11'),
(5, 'Zaenal Abidin A.S.', '1976 – 1977', NULL, '2025-06-14 02:56:23', '2025-06-14 02:56:23'),
(6, 'Drs. A. Kamil Amrullah', '1977 – 1996', NULL, '2025-06-14 02:56:31', '2025-06-14 02:56:31'),
(7, 'H. E. Djamhoer, S.Ag.', '1996 – 1998', NULL, '2025-06-14 02:56:40', '2025-06-14 02:56:40'),
(8, 'Ahmad Amsori, S.Pd.', '1998 – 2002', NULL, '2025-06-14 02:56:47', '2025-06-14 02:56:47'),
(9, 'Yayan Herdiyana Yazid', '2002 – 2008', NULL, '2025-06-14 02:56:55', '2025-06-14 02:56:55'),
(10, 'H. Jarkasih, S.Ag.', '2008 – 2011', NULL, '2025-06-14 02:57:02', '2025-06-14 02:57:02'),
(11, 'Yayan Herdiyana Yazid, S.Pd.', '2011 – 2015', NULL, '2025-06-14 02:57:09', '2025-06-14 02:57:09'),
(12, 'Acep Haryadi, S.P.d', '2015 – 2023', NULL, '2025-06-14 02:57:16', '2025-06-14 02:57:16'),
(13, 'Rahmat Hermawan, S.Pd', '2023 - sekarang ', NULL, '2025-06-14 02:57:22', '2025-06-14 02:57:22');

-- --------------------------------------------------------

--
-- Table structure for table `lingkungan_sekolahs`
--

CREATE TABLE `lingkungan_sekolahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lingkungan_sekolahs`
--

INSERT INTO `lingkungan_sekolahs` (`id`, `judul`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Gedung Sekolah', 'images/01JXQKCVNGNYZTR5Q3DRQ1PY7Q.jpg', '2025-06-14 09:12:07', '2025-06-14 09:14:55'),
(2, 'Halaman Depan', 'images/01JXQKDV6A990K5W88FMTEP21C.jpg', '2025-06-14 09:12:40', '2025-06-14 09:12:40'),
(3, 'Lorong Depan', 'images/01JXQKEJGRR0CWF58NZKECA0W7.jpg', '2025-06-14 09:13:03', '2025-06-14 09:13:03'),
(4, 'Ruang Tata Usaha', 'images/01JXQKFA8J2J76SD9M3PPDDM69.jpg', '2025-06-14 09:13:28', '2025-06-14 09:13:28'),
(5, 'Taman Sekolah', 'images/01JXQKFXK0HT7N9NM9PB9DZ2CK.jpg', '2025-06-14 09:13:48', '2025-06-14 09:13:48'),
(6, 'Lapangan Olahraga', 'images/01JXQKGQSA7JQJV9ZKFBTQBR1M.jpg', '2025-06-14 09:14:14', '2025-06-14 09:14:14');

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
(4, '2025_05_25_022251_create_info_cards_table', 1),
(5, '2025_05_26_155741_create_hero_images_table', 1),
(6, '2025_05_30_163356_create_principal_sections_table', 1),
(7, '2025_05_30_235035_create_prestasis_table', 1),
(8, '2025_05_31_014818_add_deskripsi_to_prestasis_table', 1),
(9, '2025_06_01_001835_create_galeris_table', 1),
(10, '2025_06_01_005257_create_beritas_table', 1),
(11, '2025_06_01_012842_add_slug_to_beritas_table', 1),
(12, '2025_06_01_041833_create_identitas_sekolahs_table', 1),
(13, '2025_06_02_002444_create_sejarah_sekolahs_table', 1),
(14, '2025_06_02_020043_create_kepala_sekolahs_table', 1),
(15, '2025_06_02_040108_create_struktur_organisasis_table', 1),
(16, '2025_06_14_084741_add_deskripsi_to_prestasis_table', 2),
(17, '2025_06_14_133926_add_kategori_to_galeris_table', 3),
(18, '2025_06_14_135641_modify_kategori_nullable_in_galeris_table', 4),
(19, '2025_06_14_153224_create_visi_misi_table', 5),
(20, '2025_06_14_160207_create_lingkungan_sekolahs_table', 6),
(21, '2025_06_14_162256_create_aset_sekolahs_table', 7),
(22, '2025_06_14_163535_create_gurus_table', 8),
(23, '2025_06_14_170712_create_agendas_table', 9),
(24, '2025_06_14_172249_create_ekstrakurikulers_table', 10),
(25, '2025_06_14_174556_create_jadwal_ppdbs_table', 11),
(26, '2025_06_14_180014_create_fasilitas_table', 12),
(27, '2025_06_14_180822_create_persyaratan_ppdbs_table', 13);

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
-- Table structure for table `persyaratan_ppdbs`
--

CREATE TABLE `persyaratan_ppdbs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `syarat` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `persyaratan_ppdbs`
--

INSERT INTO `persyaratan_ppdbs` (`id`, `syarat`, `created_at`, `updated_at`) VALUES
(1, 'Fotokopi Akta Kelahiran (1 lembar)', '2025-06-14 11:12:59', '2025-06-14 11:12:59'),
(2, 'Fotokopi Kartu Keluarga (KK) (1 lembar, terbaru)', '2025-06-14 11:13:06', '2025-06-14 11:13:06'),
(3, 'Fotokopi Ijazah/Surat Keterangan Lulus dari SD/MI (1 lembar, dilegalisir)', '2025-06-14 11:13:11', '2025-06-14 11:13:11'),
(4, 'Pas Foto Berwarna ukuran 3x4 (4 lembar)', '2025-06-14 11:13:16', '2025-06-14 11:13:16'),
(5, 'Fotokopi KTP Orang Tua/Wali (1 lembar)', '2025-06-14 11:13:24', '2025-06-14 11:13:24'),
(6, 'Fotokopi KIP/PKH (jika ada) sebagai syarat jalur afirmasi', '2025-06-14 11:13:33', '2025-06-14 11:13:33'),
(7, 'Mengisi Formulir Pendaftaran (disediakan panitia atau unduh online)', '2025-06-14 11:13:40', '2025-06-14 11:13:40'),
(8, 'Surat Keterangan Sehat dari Dokter (opsional sesuai kebijakan sekolah)', '2025-06-14 11:13:50', '2025-06-14 11:13:50'),
(9, 'Surat Pernyataan Orang Tua bersedia mengikuti seluruh peraturan sekolah', '2025-06-14 11:14:04', '2025-06-14 11:14:04');

-- --------------------------------------------------------

--
-- Table structure for table `prestasis`
--

CREATE TABLE `prestasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `siswa` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `skala` varchar(255) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prestasis`
--

INSERT INTO `prestasis` (`id`, `judul`, `tanggal`, `gambar`, `siswa`, `kelas`, `skala`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'SMP Islam Parung Juara 2 Festival Tari Tradisional se-Kabupaten Bogor', '2025-06-14', '01JXPVFAZCR4XVMMNF41JJ6Z91.jpg', 'SMP Islam Parung', 'VIII', 'Nasional', 'Prestasi membanggakan kembali diraih oleh tim seni tari SMP Islam Parung dalam ajang Festival Tari Tradisional Pelajar se-Kabupaten Bogor yang digelar pada 5 Juni 2025 di Gedung Kesenian Kabupaten. Tim tari yang terdiri dari siswi kelas VIII A dan VIII B ini berhasil meraih Juara 2 dengan membawakan Tari “Lenggang Sari”, sebuah tarian Betawi penuh semangat dan ekspresi.\n\nKoreografi tari disusun oleh Ibu Ratna Wijayanti, S.Sn., guru seni budaya SMP Islam Parung, dengan latihan intensif selama lebih dari satu bulan. Tim tari menampilkan kekompakan luar biasa dengan kostum cerah dan musik pengiring khas Betawi modern.\n\nSalah satu penari, Nabila Azzahra, mengatakan bahwa ini adalah pengalaman lomba pertamanya dan ia merasa sangat bangga bisa tampil membawa nama baik sekolah. “Awalnya grogi, tapi kami percaya diri karena sudah latihan keras. Kami ingin membanggakan SMP Islam Parung,” ujarnya.\n\nKepala sekolah, Bapak RAHMAT HERMAWAN S.Pd., menyampaikan apresiasi dan menyebut tim tari sebagai duta budaya sekolah. Sekolah memberikan piagam penghargaan, serta kesempatan untuk tampil kembali pada acara Peringatan Hari Guru Nasional yang akan datang.\n\nDengan pencapaian ini, SMP Islam Parung berkomitmen untuk terus mendorong kegiatan seni sebagai bagian penting dari pembinaan karakter dan pelestarian budaya bangsa.', '2025-06-14 02:14:03', '2025-06-14 02:14:46'),
(2, 'Atlet Taekwondo SMP Islam Parung Raih Medali Emas di Kejuaraan Antar Pelajar se-Kabupaten Bogor', '2025-06-14', '01JXPW2B20RRGR5MR5ZGTH3GGD.png', 'SMP Islam Parung', 'VIII, IX', 'Nasional', 'SMP Islam Parung kembali mencatatkan prestasi membanggakan dalam bidang olahraga. Kali ini datang dari cabang bela diri Taekwondo, di mana tiga siswa berhasil meraih medali dalam ajang Kejuaraan Taekwondo Antar Pelajar se-Kabupaten Bogor yang digelar pada 9 Juni 2025 di GOR Parung.\n\nRizky Maulana, siswa kelas IX B, sukses meraih medali emas dalam kategori under 51 kg putra setelah mengalahkan lawan berat dari SMPN 2 Gunung Sindur. Ia menampilkan teknik yang bersih, akurat, dan penuh percaya diri, mencetak poin penuh di ronde ketiga. Sementara itu, Daffa Prasetyo membawa pulang medali perak di kelas under 45 kg, dan Aulia Salsabila, atlet termuda dari SMP Islam Parung, berhasil meraih medali perunggu di kategori pemula putri.\n\nKejuaraan ini diikuti oleh lebih dari 300 peserta dari berbagai SMP dan MTs se-Kabupaten Bogor, sehingga persaingan sangat ketat. Namun demikian, ketiga siswa SMP Islam Parung mampu menunjukkan kedisiplinan, ketangguhan mental, dan semangat sportivitas selama pertandingan.\n\nPelatih Taekwondo SMP Islam Parung, Bapak Hendra Saputra, mengaku bangga atas pencapaian para atlet binaannya. “Mereka sudah berlatih sejak awal semester secara rutin tiga kali seminggu. Kami tidak hanya melatih teknik, tapi juga membentuk karakter mereka agar tahan banting dan fokus. Hasil ini adalah buah dari latihan yang konsisten,” ujarnya.\n\nKepala SMP Islam Parung, Bapak Ahmad Fauzi, S.Pd., juga memberikan apresiasi besar atas prestasi ini. Dalam sambutannya pada upacara Senin pagi, beliau menyampaikan, “Taekwondo bukan hanya soal menang atau kalah, tetapi tentang bagaimana siswa belajar disiplin, menghormati lawan, dan tetap rendah hati dalam setiap pencapaian. Kami bangga memiliki siswa-siswa seperti Rizky, Daffa, dan Aulia.”\n\nSebagai bentuk penghargaan, pihak sekolah memberikan piagam penghargaan, beasiswa ekstrakurikuler, dan bonus perlengkapan latihan bagi ketiga siswa tersebut. Selain itu, mereka juga akan mewakili sekolah dalam Kejuaraan Tingkat Provinsi yang akan digelar di Kota Bogor bulan depan.\n\nPrestasi ini sekaligus menjadi motivasi bagi anggota ekstrakurikuler Taekwondo lainnya untuk terus berlatih dan berprestasi. Saat ini, ekstrakurikuler Taekwondo di SMP Islam Parung sudah memiliki lebih dari 40 anggota aktif dari semua jenjang kelas, dan terus berkembang menjadi salah satu ekstrakurikuler unggulan di sekolah.\n\nDengan semangat “Berani, Disiplin, dan Tangguh”, SMP Islam Parung berkomitmen untuk terus mendukung siswa dalam mengejar prestasi, baik di bidang akademik maupun non-akademik.', '2025-06-14 02:24:25', '2025-06-14 02:24:25'),
(3, 'Regu Pramuka SMP Islam Parung Raih Juara 1 Lomba Ketangkasan dan Baris-Berbaris se-Kecamatan Parung', '2025-06-14', '01JXPWMHTBRGXGDP0X8QKSF4F8.png', 'SMP Islam Parung', 'Kelas VIII A dan VIII B', 'Nasional', 'SMP Islam Parung kembali menunjukkan kualitas pembinaan karakter siswanya melalui prestasi gemilang regu Pramuka yang berhasil meraih Juara 1 dalam Lomba Ketangkasan dan Baris-Berbaris (LTBB) se-Kecamatan Parung, yang diadakan pada Sabtu, 1 Juni 2025 di Lapangan Kecamatan Parung.\n\nLomba ini diikuti oleh lebih dari 15 pangkalan Pramuka dari berbagai SMP di Kecamatan Parung. Dalam kompetisi yang meliputi formasi baris-berbaris, yel-yel regu, simpul dan tali-temali, serta wawasan kepramukaan, regu Pramuka SMP Islam Parung tampil sangat solid dan kompak sejak awal hingga akhir lomba.\n\nTim yang dipimpin oleh Muhammad Alfarizi sebagai pemimpin regu, menunjukkan kekuatan formasi yang rapi dan yel-yel penuh semangat yang membakar semangat peserta lain. Sedangkan Zahra dan Salsabila berhasil mencuri perhatian juri dalam sesi tali-temali cepat dan tepat.\n\nPelatih Pramuka SMP Islam Parung, Kak Rudi Saputra, menyampaikan rasa bangganya atas keberhasilan regu binaannya. “Kedisiplinan dan kekompakan mereka luar biasa. Latihan selama satu bulan terakhir terbukti efektif. Mereka tidak hanya menunjukkan kemampuan teknis, tetapi juga semangat kebersamaan yang kuat,” ujarnya.\n\nKepala sekolah, Bapak RAHMAT HERMAWAN S.Pd., menyambut kepulangan regu Pramuka dengan bangga. Dalam sambutan singkatnya, beliau mengatakan:\n\"Kegiatan Pramuka adalah tempat terbaik untuk melatih jiwa kepemimpinan, tanggung jawab, dan kemandirian siswa. Prestasi ini adalah bukti nyata bahwa pendidikan karakter yang kami tanamkan bisa membuahkan hasil luar biasa.\"\n\nSebagai bentuk apresiasi, para anggota regu mendapatkan piagam penghargaan, sertifikat prestasi, dan akan menjadi tim perwakilan sekolah dalam Lomba Tingkat II yang akan digelar di Cibinong pada bulan Juli mendatang.\n\nPrestasi ini menjadi bukti bahwa kegiatan Pramuka bukan hanya kegiatan rutin mingguan, tetapi juga sarana aktualisasi diri dan pencetak generasi muda yang tangguh, sigap, dan cinta tanah air.\n\nDengan semangat \"Satyaku Kudarmakan, Darmaku Kubaktikan\", SMP Islam Parung berkomitmen untuk terus mendukung dan mengembangkan kegiatan kepramukaan sebagai bagian dari pendidikan karakter yang menyeluruh.', '2025-06-14 02:34:22', '2025-06-14 02:34:22'),
(4, 'Paskibra SMP Islam Parung Raih Juara 1 Formasi Terbaik dalam Lomba PBB Antar SMP se-Kabupaten Bogor', '2025-06-14', '01JXPXBQH0AY0NPAN2HV87K402.png', 'SMP Islam Parung', 'Kelas VIII dan IX', 'Nasional', 'Prestasi kembali diraih oleh tim Pasukan Pengibar Bendera (Paskibra) SMP Islam Parung dalam ajang Lomba Baris-Berbaris (PBB) dan Formasi Tingkat SMP se-Kabupaten Bogor, yang berlangsung pada 8 Juni 2025 di Lapangan Yonif 315/Garuda.\n\nTim Paskibra SMP Islam Parung tampil luar biasa dengan formasi baris-berbaris yang rapi, kompak, dan penuh semangat. Dalam lomba yang diikuti oleh 30 sekolah, tim berhasil menyabet Juara 1 Kategori Formasi Terbaik, mengalahkan peserta dari berbagai wilayah seperti Cibinong, Gunung Putri, dan Citeureup.\n\nLomba ini terdiri dari beberapa penilaian, mulai dari PBB dasar, variasi formasi, ketegasan komando, hingga kekompakan gerakan. Tim SMP Islam Parung tampil dengan percaya diri di bawah komando Muhammad Fajar Ramadhan (kelas IX A), yang memimpin barisan dengan suara tegas dan konsisten.\n\nMenurut pelatih Paskibra, Bapak Dadan Maulana, latihan telah dilakukan secara intensif selama enam minggu. “Mereka ini luar biasa, datang lebih pagi sebelum sekolah, pulang lebih sore, latihan meski hujan. Semangat dan kekompakan mereka patut diacungi jempol,” ujarnya.\n\nSalah satu peserta, Tiara Salsabila, menambahkan bahwa lomba ini menjadi pengalaman tak terlupakan. “Saya belajar banyak dari sini, bukan cuma soal baris-berbaris, tapi juga bagaimana menghargai teman satu tim, disiplin waktu, dan percaya pada diri sendiri,” ungkapnya.\n\nKepala SMP Islam Parung, Bapak RAHMAT HERMAWAN S.Pd., mengucapkan rasa bangga atas pencapaian ini. Dalam amanatnya saat upacara hari Senin, beliau mengatakan:\n\"Paskibra bukan hanya tentang seragam dan barisan. Ini adalah simbol disiplin, kebersamaan, dan cinta tanah air. Prestasi kalian hari ini adalah bukti bahwa kerja keras tidak akan pernah sia-sia.\"\n\nSebagai bentuk apresiasi, pihak sekolah memberikan piagam penghargaan, sertifikat prestasi, dan dana pembinaan ekstrakurikuler untuk seluruh anggota tim. Tim ini juga akan tampil khusus dalam upacara peringatan Hari Kemerdekaan di tingkat kecamatan mewakili sekolah.\n\nDengan pencapaian ini, Paskibra SMP Islam Parung semakin memperkuat posisinya sebagai ekstrakurikuler unggulan yang tak hanya membentuk fisik dan kedisiplinan, tapi juga menanamkan nilai-nilai kepemimpinan dan nasionalisme kepada para siswa.', '2025-06-14 02:47:02', '2025-06-14 02:47:02');

-- --------------------------------------------------------

--
-- Table structure for table `principal_sections`
--

CREATE TABLE `principal_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL DEFAULT 'Kepala Sekolah',
  `image` varchar(255) NOT NULL,
  `greeting` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `principal_sections`
--

INSERT INTO `principal_sections` (`id`, `name`, `position`, `image`, `greeting`, `created_at`, `updated_at`) VALUES
(2, 'RAHMAT HERMAWAN S.Pd', 'Kepala Sekolah', 'principal/01JXKDS5FAJ85JD9XT66BF3VFB.png', 'Assalamu’alaikum warahmatullahi wabarakatuh,\n\nSegala puji dan syukur kita panjatkan ke hadirat Allah Subhanahu Wa Ta\'ala atas limpahan rahmat, hidayah, dan karunia-Nya, sehingga kita semua diberikan kesempatan untuk terus melanjutkan ikhtiar dalam dunia pendidikan, khususnya di lingkungan SMP Islam Parung yang kita cintai ini.\n\nSMP Islam Parung hadir sebagai lembaga pendidikan yang berkomitmen mencetak generasi muda yang berilmu, berakhlak mulia, serta memiliki kepekaan sosial dan semangat Islami. Kami terus berusaha mengembangkan pembelajaran yang tidak hanya berorientasi pada prestasi akademik, tetapi juga pada pembentukan karakter yang kuat, tangguh, dan mandiri.\n\nDengan semangat kerja sama antara guru, siswa, orang tua, dan seluruh elemen sekolah, kami yakin bisa menciptakan lingkungan belajar yang kondusif, nyaman, dan menyenangkan. Kami juga terus mendorong inovasi dalam pembelajaran, penguatan kegiatan ekstrakurikuler, serta pengembangan nilai-nilai keislaman dalam kehidupan sehari-hari siswa.\n\nKami menyambut baik seluruh siswa, guru, dan masyarakat yang menjadi bagian dari keluarga besar SMP Islam Parung. Semoga kebersamaan kita di sekolah ini menjadi ladang amal, tempat tumbuhnya ilmu, dan awal dari kesuksesan di masa depan.\n\nWassalamu’alaikum warahmatullahi wabarakatuh.', '2025-06-12 18:17:01', '2025-06-14 01:15:43');

-- --------------------------------------------------------

--
-- Table structure for table `sejarah_sekolahs`
--

CREATE TABLE `sejarah_sekolahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tahun_berdiri` year(4) DEFAULT NULL,
  `bentuk_sekolah` varchar(255) DEFAULT NULL,
  `status_sekolah` varchar(255) DEFAULT NULL,
  `sk_ban` varchar(255) DEFAULT NULL,
  `tgl_sk_ban` date DEFAULT NULL,
  `waktu_penyelenggaraan` varchar(255) DEFAULT NULL,
  `sk_izin` varchar(255) DEFAULT NULL,
  `tgl_sk_izin` date DEFAULT NULL,
  `surat_pengukuhan` varchar(255) DEFAULT NULL,
  `tgl_surat_pengukuhan` date DEFAULT NULL,
  `nss` varchar(255) DEFAULT NULL,
  `nds` varchar(255) DEFAULT NULL,
  `npsn` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sejarah_sekolahs`
--

INSERT INTO `sejarah_sekolahs` (`id`, `tahun_berdiri`, `bentuk_sekolah`, `status_sekolah`, `sk_ban`, `tgl_sk_ban`, `waktu_penyelenggaraan`, `sk_izin`, `tgl_sk_izin`, `surat_pengukuhan`, `tgl_surat_pengukuhan`, `nss`, `nds`, `npsn`, `created_at`, `updated_at`) VALUES
(1, '1967', 'Biasa / Konvensional', 'Swasta / Terakreditasi “ A “', 'No. 1334/BAN-SM/SK/2020', '2020-12-15', 'Pagi', 'No. 105/C/7/1967 ', '1967-04-23', 'No. 346/I02/07/DS/1996 ', '1996-07-02', '202020210134', '2002050148', '20200543', '2025-06-12 18:04:06', '2025-06-14 03:00:04');

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
('gR5GYMMAl0mZr5k61K8Yfi2FuzUYRkC1NyF9nqk4', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoicHZPMTh4VXNHQWQ3dUpOVHN6eHVoV2s4aEVPNlF0UWcwckxwSjhOaCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9nYWxlcmkiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjM6InVybCI7YTowOnt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEyJHF1YU1MTGxQbDhUYnR2bXU2amw4aE9taXp4akF2QXltV2FLdnE5Y0VCMXZnV2VmQzAvUGdxIjtzOjg6ImZpbGFtZW50IjthOjA6e319', 1749927038);

-- --------------------------------------------------------

--
-- Table structure for table `struktur_organisasis`
--

CREATE TABLE `struktur_organisasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `struktur_organisasis`
--

INSERT INTO `struktur_organisasis` (`id`, `gambar`, `created_at`, `updated_at`) VALUES
(2, 'struktur-organisasi/01JXPY76PDQ6HJ2RFRQ49ZPQ7V.jpg', '2025-06-14 03:02:02', '2025-06-14 03:02:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$12$quaMLLlPl8Tbtvmu6jl8hOmizxjAvAymWaKvq9cEB1vgWefC0/Pgq', NULL, '2025-06-12 18:04:06', '2025-06-12 18:04:06');

-- --------------------------------------------------------

--
-- Table structure for table `visi_misi`
--

CREATE TABLE `visi_misi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `visi` text NOT NULL,
  `indikator_visi` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`indikator_visi`)),
  `misi` text NOT NULL,
  `daftar_misi` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`daftar_misi`)),
  `gambar_visi` varchar(255) DEFAULT NULL,
  `gambar_misi` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visi_misi`
--

INSERT INTO `visi_misi` (`id`, `visi`, `indikator_visi`, `misi`, `daftar_misi`, `gambar_visi`, `gambar_misi`, `created_at`, `updated_at`) VALUES
(1, '\"Terwujudnya Peserta didik yang berakhlak, unggul dalam prestasi Akademis non-akademis, berwawasan global Islami dan peduli lingkungan\"', '[{\"poin\":\"Terwujudnya pendidikan yang mengedepankan Akhlak pembentukan Profil Pelajar Pancasila\"},{\"poin\":\"Terwujudnya prestasi peserta didik yang unggul dalam akademik dan non akademik\"},{\"poin\":\"Terwujudnya peserta didik berwawasan global berdasarkan pada nilai-nilai keislaman dan Pancasila\"},{\"poin\":\"Terwujudnya peserta didik dalam menjaga kebersihan, kenyamanan dan keamanan lingkungan sekolah \"},{\"poin\":\"Terwujudnya siswa yang memiliki ke-Imanan dan ketaqwaan kepada Tuhan Yang Maha Esa\"},{\"poin\":\"Terwujudnya siswa yang memiliki karakter\"},{\"poin\":\"Terwujudnya pembentukan profil pelajar Pancasila, yang memiliki enam dimensi utama yaitu: Beriman, bertakwa kepada Tuhan Yang Maha Esa, dan berakhlak mulia, Mandiri, Bernalar Kritis, Kreatif, Bergotong-royong, dan Berkebinekaan global.\"}]', '\"Terwujudnya Peserta didik yang berakhlak, unggul dalam prestasi Akademis non-akademis, berwawasan global Islami dan peduli lingkungan\"', '[{\"poin\":\"Membangun dan mengembangkan budaya belajar yang dinamis, berdisiplin dan  Bertanggungjawab\"},{\"poin\":\"Meningkatkan prestasi akademis lulusan untuk dapat melanjutkan sekolah\"},{\"poin\":\"Membentuk peserta didik yang berkarakter, berakhlak mulia dan berwawasan  lingkungan hidup\"},{\"poin\":\"Meningkatkan prestasi kegiatan ekstrakurikuler.\"},{\"poin\":\"Menumbuhkan semangat keunggulan, keteladanan serta prestasi dalam penguasaan ilmu pengetahuan dan teknologi\"},{\"poin\":\"Menumbuhkan semangat dan kesadaran dalam pengamalan nilai\\u2013nilai ke-Imanan dan  ketaqwaan \"},{\"poin\":\"Menjadikan Sekolah yang bersih,hijau dan sehat \"},{\"poin\":\"Mewujudkan manusia Indonesia yang mampu berkontribusi pada kehidupan, berbangsa, bernegara sesuai peradaban dunia\"},{\"poin\":\"Menjadikan generasi yang berakhlakul karimah dan beretika\"},{\"poin\":\"Terjalinnya hubungan  yang erat dengan para alumni dalam satu keluarga besar SMP Islam Parung\"}]', 'images/01JXQJ3RXRTTHKA7SA2PHJK37F.jpg', 'images/01JXQJ3RXZM03AEEGBRS7YJ0NZ.jpg', '2025-06-14 08:49:41', '2025-06-14 08:59:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agendas`
--
ALTER TABLE `agendas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aset_sekolahs`
--
ALTER TABLE `aset_sekolahs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `beritas_slug_unique` (`slug`);

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
-- Indexes for table `ekstrakurikulers`
--
ALTER TABLE `ekstrakurikulers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeris`
--
ALTER TABLE `galeris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gurus`
--
ALTER TABLE `gurus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hero_images`
--
ALTER TABLE `hero_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `identitas_sekolahs`
--
ALTER TABLE `identitas_sekolahs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info_cards`
--
ALTER TABLE `info_cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal_ppdbs`
--
ALTER TABLE `jadwal_ppdbs`
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
-- Indexes for table `kepala_sekolahs`
--
ALTER TABLE `kepala_sekolahs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lingkungan_sekolahs`
--
ALTER TABLE `lingkungan_sekolahs`
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
-- Indexes for table `persyaratan_ppdbs`
--
ALTER TABLE `persyaratan_ppdbs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prestasis`
--
ALTER TABLE `prestasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `principal_sections`
--
ALTER TABLE `principal_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sejarah_sekolahs`
--
ALTER TABLE `sejarah_sekolahs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `struktur_organisasis`
--
ALTER TABLE `struktur_organisasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visi_misi`
--
ALTER TABLE `visi_misi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agendas`
--
ALTER TABLE `agendas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `aset_sekolahs`
--
ALTER TABLE `aset_sekolahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `ekstrakurikulers`
--
ALTER TABLE `ekstrakurikulers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galeris`
--
ALTER TABLE `galeris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `gurus`
--
ALTER TABLE `gurus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `hero_images`
--
ALTER TABLE `hero_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `identitas_sekolahs`
--
ALTER TABLE `identitas_sekolahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `info_cards`
--
ALTER TABLE `info_cards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jadwal_ppdbs`
--
ALTER TABLE `jadwal_ppdbs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kepala_sekolahs`
--
ALTER TABLE `kepala_sekolahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `lingkungan_sekolahs`
--
ALTER TABLE `lingkungan_sekolahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `persyaratan_ppdbs`
--
ALTER TABLE `persyaratan_ppdbs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `prestasis`
--
ALTER TABLE `prestasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `principal_sections`
--
ALTER TABLE `principal_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sejarah_sekolahs`
--
ALTER TABLE `sejarah_sekolahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `struktur_organisasis`
--
ALTER TABLE `struktur_organisasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visi_misi`
--
ALTER TABLE `visi_misi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
