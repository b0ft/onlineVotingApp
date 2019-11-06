-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2019 at 05:03 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voting`
--

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `nim` int(10) NOT NULL,
  `namacalon` varchar(32) NOT NULL,
  `nama` text NOT NULL,
  `visi` varchar(60) NOT NULL,
  `misi` text NOT NULL,
  `status` enum('0','1') NOT NULL,
  `jumlahsuara` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nama` varchar(32) NOT NULL,
  `nim` int(10) NOT NULL,
  `prodi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nama`, `nim`, `prodi`) VALUES
('Dummy', 1234567890, 'Dummy'),
('KEVIN ASHAR IBNU SYAHSIAH', 1910501001, 'D3 Sistem Informasi'),
('Raffel Bagas Alam', 1910501002, 'D3 Sistem Informasi'),
('Gelam Alfarisi', 1910501003, 'D3 Sistem Informasi'),
('Muhammad Gilang Putu Sutrisno', 1910501004, 'D3 Sistem Informasi'),
('Marcellino Calvin Passar', 1910501005, 'D3 Sistem Informasi'),
('Irfan Nurul Susilo', 1910501006, 'D3 Sistem Informasi'),
('Anton Putra Pratama', 1910501007, 'D3 Sistem Informasi'),
('Muhammad sidik harjanto', 1910501008, 'D3 Sistem Informasi'),
('Ayunda Rahmawati', 1910501009, 'D3 Sistem Informasi'),
('Hibatul Wafi', 1910501010, 'D3 Sistem Informasi'),
('Mochamad Ardiansyah', 1910501011, 'D3 Sistem Informasi'),
('Surya Ardy Pramudya', 1910501012, 'D3 Sistem Informasi'),
('Candra Laksono', 1910501013, 'D3 Sistem Informasi'),
('Bayu Wicaksono', 1910501014, 'D3 Sistem Informasi'),
('IKBAL MARWAN MAULANA', 1910501015, 'D3 Sistem Informasi'),
('Rosa Helvida Errendyar', 1910501016, 'D3 Sistem Informasi'),
('Lutfi Nugroho', 1910501017, 'D3 Sistem Informasi'),
('Camelia Evionita Zen', 1910501018, 'D3 Sistem Informasi'),
('Shofia Namira', 1910501019, 'D3 Sistem Informasi'),
('Yoga Permana Agung', 1910501020, 'D3 Sistem Informasi'),
('Jeva Afriliano', 1910501021, 'D3 Sistem Informasi'),
('Muhammad Albarri', 1910501022, 'D3 Sistem Informasi'),
('Lulu Zaujatun Sholekhah', 1910501023, 'D3 Sistem Informasi'),
('Daffa Kinciano putra', 1910501024, 'D3 Sistem Informasi'),
('ZULHAM EFENDI', 1910501025, 'D3 Sistem Informasi'),
('Syafirra Zahra', 1910501026, 'D3 Sistem Informasi'),
('Mutia Hasanah', 1910501027, 'D3 Sistem Informasi'),
('Vicky Fajrian', 1910501028, 'D3 Sistem Informasi'),
('Andru Sandhya Prawira', 1910501029, 'D3 Sistem Informasi'),
('Muhammad Fairuz Hatma Aulia', 1910501030, 'D3 Sistem Informasi'),
('Anisah Fitri Nurkhasanah', 1910501031, 'D3 Sistem Informasi'),
('Amalia Ayu Ardian', 1910501032, 'D3 Sistem Informasi'),
('Raden Roro Astria Aurellia Cahya', 1910501033, 'D3 Sistem Informasi'),
('Dimas Nugroho', 1910501034, 'D3 Sistem Informasi'),
('Aryobenno Putra Chaniago', 1910501035, 'D3 Sistem Informasi'),
('Khairul laksono', 1910501036, 'D3 Sistem Informasi'),
('Muhamad Rasyiid Fajri Riyanto', 1910501037, 'D3 Sistem Informasi'),
('Anisah Cahya Isvara', 1910501038, 'D3 Sistem Informasi'),
('Avikatria Cahyaningrum', 1910501039, 'D3 Sistem Informasi'),
('Alta Gilbran Ardana', 1910501040, 'D3 Sistem Informasi'),
('Hanif Rabbani Zubair', 1910501041, 'D3 Sistem Informasi'),
('Rafly Mahdavikia Namara', 1910501042, 'D3 Sistem Informasi'),
('Saptony T', 1910501043, 'D3 Sistem Informasi'),
('ANGGELA WILMINA B', 1910501044, 'D3 Sistem Informasi'),
('Tiya Alfianti', 1910501045, 'D3 Sistem Informasi'),
('Fatimah Putri Jarir', 1910501046, 'D3 Sistem Informasi'),
('Alya Latifah Putri Achmad', 1910501047, 'D3 Sistem Informasi'),
('Ripai Veri', 1910501048, 'D3 Sistem Informasi'),
('MUHAMMAD NAUFAL', 1910501049, 'D3 Sistem Informasi'),
('Zulyanto Ilham Nurrahman', 1910501050, 'D3 Sistem Informasi'),
('Rahmatami Novitiya utari', 1910501051, 'D3 Sistem Informasi'),
('Randy noufal pradhitya', 1910501052, 'D3 Sistem Informasi'),
('Dimas Alfarizki', 1910501053, 'D3 Sistem Informasi'),
('Rifqi Fadhilah', 1910501054, 'D3 Sistem Informasi'),
('Dheasy Nurfadhilah', 1910501055, 'D3 Sistem Informasi'),
('Tivani Yona Silvia', 1910501056, 'D3 Sistem Informasi'),
('Salma Zulfa Sania', 1910501057, 'D3 Sistem Informasi'),
('Muhammad Shafa Ridho Syahputra', 1910501058, 'D3 Sistem Informasi'),
('Nabhan Ghiyats Bagas Putra', 1910501059, 'D3 Sistem Informasi'),
('Shidqi Azmi Fadhil', 1910501060, 'D3 Sistem Informasi'),
('Martinus Rafael', 1910501061, 'D3 Sistem Informasi'),
('Andika Rosi Wirayuda', 1910501062, 'D3 Sistem Informasi'),
('Rini Nurhasanah', 1910501063, 'D3 Sistem Informasi'),
('Muhammad Abby Hartadi', 1910501064, 'D3 Sistem Informasi'),
('Any Saroh Dwisono', 1910501065, 'D3 Sistem Informasi'),
('Rahmat Pangestu Widodo', 1910501066, 'D3 Sistem Informasi'),
('Andira Yulianingrum', 1910501067, 'D3 Sistem Informasi'),
('Muhammad Zufarul Muttaqin', 1910501068, 'D3 Sistem Informasi'),
('Hanan Layali Khoiriyah', 1910501069, 'D3 Sistem Informasi'),
('Hafid Fauzan Ramadhito', 1910501070, 'D3 Sistem Informasi'),
('Nurul Adinda Prasetianingsih', 1910501071, 'D3 Sistem Informasi'),
('Fatahillah Dian Pratomo', 1910501072, 'D3 Sistem Informasi'),
('Maulana Assyidiq', 1910501073, 'D3 Sistem Informasi'),
('Muhammad Daffa Mulia Pratama', 1910501074, 'D3 Sistem Informasi'),
('Amalia Rosdiana', 1910501075, 'D3 Sistem Informasi'),
('Maulida Shyfa Mahadewi', 1910501076, 'D3 Sistem Informasi'),
('Fauziah Syifa R Siregar', 1910501077, 'D3 Sistem Informasi'),
('Gilang Dwi Amardan', 1910501078, 'D3 Sistem Informasi'),
('Dwiki Airlambang', 1910501079, 'D3 Sistem Informasi'),
('Adam Hidayat', 1910501080, 'D3 Sistem Informasi'),
('Mira adriyani', 1910501081, 'D3 Sistem Informasi'),
('Bagus Wijanarko', 1910501082, 'D3 Sistem Informasi'),
('Farhan Yazid Raditya', 1910501083, 'D3 Sistem Informasi'),
('Diva Aulia Shafira', 1910501084, 'D3 Sistem Informasi'),
('Riki Muslikhah', 1910501085, 'D3 Sistem Informasi'),
('Vidiani Aulia Fadiyawan', 1910501086, 'D3 Sistem Informasi'),
('Rafi Dhiya Ulfadhli', 1910501087, 'D3 Sistem Informasi'),
('Fauzia Hayati Rahmah', 1910501088, 'D3 Sistem Informasi'),
('Muhamad Dafa Putra Susyanto', 1910501089, 'D3 Sistem Informasi'),
('Rafika Rona Fairuz', 1910501090, 'D3 Sistem Informasi'),
('Annizhamul Hafizhah', 1910501091, 'D3 Sistem Informasi'),
('Pradipta Wisnu Wardana', 1910501092, 'D3 Sistem Informasi'),
('Adella Rifiandika Putri', 1910501093, 'D3 Sistem Informasi'),
('Murdika Wahyuda', 1910501094, 'D3 Sistem Informasi'),
('Gabriela Langi Saratu', 1910501095, 'D3 Sistem Informasi'),
('Yeremia Bonar Tambunan', 1910501096, 'D3 Sistem Informasi'),
('Jaya sitanggang', 1910501097, 'D3 Sistem Informasi'),
('Naritha cahya wardhani', 1910501098, 'D3 Sistem Informasi'),
('Zafira Khairani', 1910501099, 'D3 Sistem Informasi'),
('Rizqy Nabila', 1910501100, 'D3 Sistem Informasi'),
('Abdurahim', 1910501101, 'D3 Sistem Informasi'),
('Silva Ria Dinasty', 1910501102, 'D3 Sistem Informasi'),
('Arnold Pratama Saritan', 1910501103, 'D3 Sistem Informasi'),
('Suci Nabila', 1910501104, 'D3 Sistem Informasi'),
('Stephen Kurnia', 1910511001, 'S1 Informatika'),
('Siti Khaalishah Sayid', 1910511002, 'S1 Informatika'),
('Siti Hinggit', 1910511003, 'S1 Informatika'),
('Muhammad Raihan Adyantama', 1910511004, 'S1 Informatika'),
('Fikri Azhari', 1910511005, 'S1 Informatika'),
('Fitria Adyati Mardha', 1910511006, 'S1 Informatika'),
('Harvey Guharelvino Prabowo', 1910511007, 'S1 Informatika'),
('Aldio Rasyid', 1910511008, 'S1 Informatika'),
('Rohanda Selia Pangaribuan', 1910511009, 'S1 Informatika'),
('Muhammad Taufiqurahman', 1910511010, 'S1 Informatika'),
('Nurul Yustika Rahmayani', 1910511011, 'S1 Informatika'),
('PUTRI APRICANIA', 1910511012, 'S1 Informatika'),
('Muhammad Bariq Dharmawan', 1910511013, 'S1 Informatika'),
('Aldy Adhany Pratama', 1910511014, 'S1 Informatika'),
('Dwi Febriansyah', 1910511015, 'S1 Informatika'),
('Jasmine Athira Azzahra', 1910511016, 'S1 Informatika'),
('Sulthan Reza Masyalbi Pratama', 1910511017, 'S1 Informatika'),
('Aditia Mardiana', 1910511018, 'S1 Informatika'),
('Almira Van Fadhila', 1910511019, 'S1 Informatika'),
('Ariansyah Arifin', 1910511020, 'S1 Informatika'),
('Putu Vikola Raditya', 1910511021, 'S1 Informatika'),
('Rakha Syaipudin', 1910511022, 'S1 Informatika'),
('Felicia Febriana', 1910511023, 'S1 Informatika'),
('Rachma Adzima Maulida', 1910511024, 'S1 Informatika'),
('Muthiara Panghurina', 1910511025, 'S1 Informatika'),
('Weni Ariska', 1910511026, 'S1 Informatika'),
('Haris Mujianto', 1910511027, 'S1 Informatika'),
('Azy Umardi Azhra', 1910511028, 'S1 Informatika'),
('Annisya Octaviani', 1910511029, 'S1 Informatika'),
('Rainaldi Satria Sukarno', 1910511030, 'S1 Informatika'),
('Ahmadien Hafizh Yusufi', 1910511031, 'S1 Informatika'),
('Agung Hot Iman', 1910511032, 'S1 Informatika'),
('Berli Suharmanto', 1910511033, 'S1 Informatika'),
('Marshall Anugrah Najmi', 1910511034, 'S1 Informatika'),
('Raihan Kemmy Rachmansyah', 1910511035, 'S1 Informatika'),
('Brahma Aditama', 1910511036, 'S1 Informatika'),
('Putri Sarah Fransisca', 1910511037, 'S1 Informatika'),
('Adrian Dwi Adinata', 1910511038, 'S1 Informatika'),
('Adithya Kharisma', 1910511039, 'S1 Informatika'),
('Jovanka Samudra', 1910511040, 'S1 Informatika'),
('Khalid Rinaldy', 1910511041, 'S1 Informatika'),
('Gito Putro Wardana', 1910511042, 'S1 Informatika'),
('Muhammad Hazim Al Farouq', 1910511043, 'S1 Informatika'),
('Daffy Fayyadhya Ramzy', 1910511044, 'S1 Informatika'),
('Fransisco Ready Permana', 1910511045, 'S1 Informatika'),
('Aldiriansyah Dwi Febrianto', 1910511046, 'S1 Informatika'),
('Albani Kautsar', 1910511047, 'S1 Informatika'),
('Ajeng Arifa Chantika Rindu', 1910511048, 'S1 Informatika'),
('M. Rifqi Wibowo', 1910511049, 'S1 Informatika'),
('Alfian Pratama', 1910511050, 'S1 Informatika'),
('Jamie Saviola', 1910511051, 'S1 Informatika'),
('Jilan Aqila Mahesaputri', 1910511052, 'S1 Informatika'),
('Zidan Avecena Yahya', 1910511053, 'S1 Informatika'),
('Sandy Ardanu Bagasraga', 1910511054, 'S1 Informatika'),
('Syamsul Arifin', 1910511055, 'S1 Informatika'),
('Muhammad Akbar Wira Jaya', 1910511056, 'S1 Informatika'),
('Annisya Safa Kusyanti', 1910511057, 'S1 Informatika'),
('Muhammad Fathurrahman', 1910511058, 'S1 Informatika'),
('M. Fadlan Ridho', 1910511059, 'S1 Informatika'),
('Wahyu Miftahul Aflah', 1910511060, 'S1 Informatika'),
('Abril Muhammad Fikar Wijaya', 1910511061, 'S1 Informatika'),
('Muhammad Raffiza Azka', 1910511062, 'S1 Informatika'),
('Gede Angga Widya Putra', 1910511063, 'S1 Informatika'),
('Muhammad Hafiyyan Fadhil Riezthi', 1910511064, 'S1 Informatika'),
('Rahma Alya', 1910511065, 'S1 Informatika'),
('Ardhi Atmaja Karo Karo', 1910511066, 'S1 Informatika'),
('Naufal Alfarisi', 1910511067, 'S1 Informatika'),
('Banyu Ontoseno', 1910511068, 'S1 Informatika'),
('Rizki Fauzi', 1910511069, 'S1 Informatika'),
('I Putu Eka Suartana', 1910511070, 'S1 Informatika'),
('Adika Rajendra Haris', 1910511071, 'S1 Informatika'),
('Yusuf Maulana', 1910511072, 'S1 Informatika'),
('Alfian Husaen', 1910511073, 'S1 Informatika'),
('Muhammad Dipangga Perbawa Salaks', 1910511074, 'S1 Informatika'),
('Zulvan Rizal Maulana', 1910511075, 'S1 Informatika'),
('Rafid Ammar Adinegoro', 1910511076, 'S1 Informatika'),
('Michael Aurelio Nugraha', 1910511077, 'S1 Informatika'),
('Maulana Luthfi', 1910511078, 'S1 Informatika'),
('Iyas Abdurahman', 1910511079, 'S1 Informatika'),
('Hanif Radityo', 1910511080, 'S1 Informatika'),
('Ananta Khayana Putra', 1910511081, 'S1 Informatika'),
('Thariqhat Rama Putra', 1910511082, 'S1 Informatika'),
('Aria Nanda Herdiawan', 1910511083, 'S1 Informatika'),
('Muhamad Ardiansyah', 1910511084, 'S1 Informatika'),
('Aldy Syachranie', 1910511085, 'S1 Informatika'),
('Laurenza Setiana Riva', 1910511086, 'S1 Informatika'),
('Rafael Salomo Sahat Piero', 1910511087, 'S1 Informatika'),
('Adla Anugrah Abbas', 1910511088, 'S1 Informatika'),
('Muhammad Fadhlurrahman Azzami', 1910511089, 'S1 Informatika'),
('Gesang Budiono', 1910511090, 'S1 Informatika'),
('Muhammad Aldy Ikramsyah', 1910511091, 'S1 Informatika'),
('Herlambang Rafli Wicaksono', 1910511092, 'S1 Informatika'),
('Fathurrahman Irwansa', 1910511093, 'S1 Informatika'),
('Salwa Ziada Salsabiila', 1910511094, 'S1 Informatika'),
('Pandapotan Sitanggang', 1910511095, 'S1 Informatika'),
('Ramadhan Azka Dhamawan', 1910511096, 'S1 Informatika'),
('Adhiya Delira Yasiin', 1910511097, 'S1 Informatika'),
('Trassanda Scudetto Widestomo Put', 1910511098, 'S1 Informatika'),
('Sheila ilham auriza', 1910511099, 'S1 Informatika'),
('Hozana Aulia', 1910511100, 'S1 Informatika'),
('Adhiva Windra Maulana', 1910511101, 'S1 Informatika'),
('Muhammad Mumtaz Ramadhan', 1910511102, 'S1 Informatika'),
('Mauludhanti Putri SUkmadi', 1910511103, 'S1 Informatika'),
('Doli Ananda Efraim', 1910511104, 'S1 Informatika'),
('Sultan Farel Syah Reza', 1910511105, 'S1 Informatika'),
('Muhammad Nabil Nufail Pribadi', 1910511106, 'S1 Informatika'),
('Rakha Wahyu Rafi\'syah', 1910511107, 'S1 Informatika'),
('Margaretha Anjani', 1910511108, 'S1 Informatika'),
('Viryal Zahra Nada', 1910511109, 'S1 Informatika'),
('Rizqan Syahru Ramadhan', 1910511110, 'S1 Informatika'),
('Dzaki Anmaris Harahap', 1910511111, 'S1 Informatika'),
('Naufal Muhammad Khalishan', 1910511112, 'S1 Informatika'),
('Hafidz Ashabi Muhammad', 1910511113, 'S1 Informatika'),
('Ananda Thufail Mutawakkil', 1910511114, 'S1 Informatika'),
('Aini Cahyaning Putri', 1910511115, 'S1 Informatika'),
('Caleb Sebastian', 1910511116, 'S1 Informatika'),
('Nabilah Lendy', 1910511117, 'S1 Informatika'),
('Muhammad Dandy Pradipa', 1910511118, 'S1 Informatika'),
('Barirotun Najah', 1910511119, 'S1 Informatika'),
('Mohamad Zydane Ulir Rizqi Toyyib', 1910511120, 'S1 Informatika'),
('Ardi Rudini', 1910511121, 'S1 Informatika'),
('Mohammad Rafi Qurshofat', 1910511122, 'S1 Informatika'),
('Achmad Sesar Balbo', 1910511123, 'S1 Informatika'),
('Bagas Prabaswara Wira Notokoesoe', 1910511124, 'S1 Informatika'),
('Ikhlasul Amal', 1910511125, 'S1 Informatika'),
('Syamil Taqiyuddin Ayyasy', 1910511126, 'S1 Informatika'),
('Muhamad Rizky Yusuf', 1910511127, 'S1 Informatika'),
('Naufaldy Purwanto', 1910511128, 'S1 Informatika'),
('Kiana Rizki Tsaniyah Zulkarnain', 1910511129, 'S1 Informatika'),
('Nabilah Dwi Lathifah', 1910511130, 'S1 Informatika'),
('Muhammad Ryan Fahlevi', 1910511131, 'S1 Informatika'),
('Ainurrahma Kurnia Santoso', 1910512001, 'S1 Sistem Informasi'),
('Fransiskus Ramaditya Arief Nursa', 1910512002, 'S1 Sistem Informasi'),
('Fadillah Anzal Nurrohmah Ardiani', 1910512003, 'S1 Sistem Informasi'),
('Andika Hiro Pratama', 1910512004, 'S1 Sistem Informasi'),
('Arif Hilmi Hakim', 1910512005, 'S1 Sistem Informasi'),
('Juan Prima Bangun Priyadi', 1910512006, 'S1 Sistem Informasi'),
('Nabilah Luthfiana Putri', 1910512007, 'S1 Sistem Informasi'),
('Fauzan Ahmat Rahmawan', 1910512008, 'S1 Sistem Informasi'),
('Romie Aswari', 1910512009, 'S1 Sistem Informasi'),
('M. Redi Rezki', 1910512010, 'S1 Sistem Informasi'),
('Anggitha Lidya Anggraini', 1910512011, 'S1 Sistem Informasi'),
('Patrick Santino', 1910512012, 'S1 Sistem Informasi'),
('Lulu Nailufar', 1910512013, 'S1 Sistem Informasi'),
('Raditya Rahardyansyah Rifat', 1910512014, 'S1 Sistem Informasi'),
('Angelia Christy', 1910512015, 'S1 Sistem Informasi'),
('Mohammad Iqbal Anggoro', 1910512016, 'S1 Sistem Informasi'),
('MUHAMMAD IBNUN ARROSYID', 1910512017, 'S1 Sistem Informasi'),
('Ocktaviyani Dwi Hayati', 1910512018, 'S1 Sistem Informasi'),
('Farel Fahrozi', 1910512019, 'S1 Sistem Informasi'),
('Veronika Trinovianti', 1910512020, 'S1 Sistem Informasi'),
('Harnanda Rafika Anjani', 1910512021, 'S1 Sistem Informasi'),
('Septian Aditya Prasetyo', 1910512022, 'S1 Sistem Informasi'),
('Gilang Chandra Syahputra', 1910512023, 'S1 Sistem Informasi'),
('Galuh Widiana', 1910512024, 'S1 Sistem Informasi'),
('Aditya Nur\'ahya', 1910512025, 'S1 Sistem Informasi'),
('Adi Putro Nugroho', 1910512026, 'S1 Sistem Informasi'),
('Jemima Carla', 1910512027, 'S1 Sistem Informasi'),
('Rahmat Gunawan', 1910512028, 'S1 Sistem Informasi'),
('Alif Falih Muhammad Lubis', 1910512029, 'S1 Sistem Informasi'),
('Ditha Nadhira Jasmine', 1910512030, 'S1 Sistem Informasi'),
('Kevin Leonard Sugiman', 1910512031, 'S1 Sistem Informasi'),
('Dicky Darmawan', 1910512032, 'S1 Sistem Informasi'),
('Riki Raihan Tidar', 1910512033, 'S1 Sistem Informasi'),
('Gelar Asto Bawono', 1910512034, 'S1 Sistem Informasi'),
('Bagasta', 1910512035, 'S1 Sistem Informasi'),
('Alifia Laksita Maheswari', 1910512036, 'S1 Sistem Informasi'),
('Muhammad Radityo', 1910512037, 'S1 Sistem Informasi'),
('Annisa Shabirah', 1910512038, 'S1 Sistem Informasi'),
('Sherina Salsabila Mandiangan', 1910512039, 'S1 Sistem Informasi'),
('Muhammad Fahri', 1910512040, 'S1 Sistem Informasi'),
('Sabiila Islami Nursalma', 1910512041, 'S1 Sistem Informasi'),
('Farhan Akmal Muhammad', 1910512042, 'S1 Sistem Informasi'),
('Tazkia Hanifah Susilo', 1910512043, 'S1 Sistem Informasi'),
('Nio Dimas Radityo', 1910512044, 'S1 Sistem Informasi'),
('Putri Benedicta Simanjuntak', 1910512045, 'S1 Sistem Informasi'),
('Radyan Nugroho', 1910512046, 'S1 Sistem Informasi'),
('Rayhan Athaya Noor Hidayat', 1910512047, 'S1 Sistem Informasi'),
('Amanda Naomi Kindangen', 1910512048, 'S1 Sistem Informasi'),
('IRFAN NADA BAYU SAMUDERA', 1910512049, 'S1 Sistem Informasi'),
('Fabian Abi Pratama', 1910512050, 'S1 Sistem Informasi'),
('Gabriella Clarissa Leandra', 1910512051, 'S1 Sistem Informasi'),
('Alvia Ariana', 1910512052, 'S1 Sistem Informasi'),
('Dina Septina', 1910512053, 'S1 Sistem Informasi'),
('Elsa Sabilah', 1910512054, 'S1 Sistem Informasi'),
('Mahdi Ali Ghazi Yuana Putra', 1910512055, 'S1 Sistem Informasi'),
('Siti Aminah', 1910512056, 'S1 Sistem Informasi'),
('Nais Hella Alvina', 1910512057, 'S1 Sistem Informasi'),
('Diandra Aurelliea Azra', 1910512058, 'S1 Sistem Informasi'),
('Rafli Arandhana', 1910512059, 'S1 Sistem Informasi'),
('Vania Amanda Harlind', 1910512060, 'S1 Sistem Informasi'),
('Michael Siahaan', 1910512061, 'S1 Sistem Informasi'),
('Rechan Tantraryo Hafish', 1910512062, 'S1 Sistem Informasi'),
('Candra', 1910512063, 'S1 Sistem Informasi'),
('Intan Yuefa', 1910512064, 'S1 Sistem Informasi'),
('Najmah Nuurul Khairiyyah  Tou', 1910512065, 'S1 Sistem Informasi'),
('Ilham Wardana', 1910512066, 'S1 Sistem Informasi'),
('Muhammad Duta Purnomoputra', 1910512067, 'S1 Sistem Informasi'),
('Moh. Teddy Reza', 1910512068, 'S1 Sistem Informasi'),
('Christopher Theodore Emilio L. T', 1910512069, 'S1 Sistem Informasi'),
('Jessica Christie', 1910512070, 'S1 Sistem Informasi'),
('Muhamad Dian Rahendra', 1910512071, 'S1 Sistem Informasi'),
('Muhammad Idzhar Abisina', 1910512072, 'S1 Sistem Informasi'),
('Nathanael Boan Tua Sipahutar', 1910512073, 'S1 Sistem Informasi'),
('Muhammad Naufan Pridyatmaja', 1910512074, 'S1 Sistem Informasi'),
('Mario Cahya Saputra', 1910512075, 'S1 Sistem Informasi'),
('Ahmad Razi', 1910512076, 'S1 Sistem Informasi'),
('Bayu Rizki Rahmat Kartika', 1910512077, 'S1 Sistem Informasi'),
('Muhammad Faza Irfata', 1910512078, 'S1 Sistem Informasi'),
('MONIKA BR PELAWI', 1910512079, 'S1 Sistem Informasi'),
('Imam Rasyadi Hakim', 1910512080, 'S1 Sistem Informasi'),
('Aditya Yoga Adhiputra', 1910512081, 'S1 Sistem Informasi'),
('Alifah Fatimah Azzahra Hardian', 1910512082, 'S1 Sistem Informasi'),
('Harina Budi Mulyani', 1910512083, 'S1 Sistem Informasi'),
('Reginald Jeremica', 1910512084, 'S1 Sistem Informasi'),
('Naufal Rachmandani', 1910512085, 'S1 Sistem Informasi'),
('Tabitha  Adischa  Puti  Salma', 1910512086, 'S1 Sistem Informasi'),
('Muh. Ahyan Saputra', 1910512087, 'S1 Sistem Informasi'),
('Adinda Revita', 1910512088, 'S1 Sistem Informasi'),
('Annisa Novaguinea', 1910512089, 'S1 Sistem Informasi'),
('Guido Aryasatya', 1910512090, 'S1 Sistem Informasi'),
('Diaz Jihad Nouval', 1910512091, 'S1 Sistem Informasi'),
('Zidane Anvio Putra', 1910512092, 'S1 Sistem Informasi'),
('Arsa Erjore Ginting', 1910512093, 'S1 Sistem Informasi'),
('Vira Febrita Lukdayanti', 1910512094, 'S1 Sistem Informasi'),
('Sheren Clever Cantika', 1910512095, 'S1 Sistem Informasi'),
('Badiuzzaman Abdur Rohman', 1910512096, 'S1 Sistem Informasi'),
('Gustian Abrary Shidqi', 1910512097, 'S1 Sistem Informasi'),
('Diny Rahmawati', 1910512098, 'S1 Sistem Informasi'),
('Athaya Damar Hardani', 1910512099, 'S1 Sistem Informasi'),
('Muhammad Abigail Athallah', 1910512100, 'S1 Sistem Informasi'),
('Muhammad Fauzan Alhafizh', 1910512101, 'S1 Sistem Informasi'),
('Irsal Aulia', 1910512102, 'S1 Sistem Informasi'),
('Alvin Daniswara', 1910512103, 'S1 Sistem Informasi'),
('Imam Abdul Karim Sulaiman', 1910512104, 'S1 Sistem Informasi'),
('Wulan Zulhikmah', 1910512105, 'S1 Sistem Informasi'),
('Zefta Alfredo Julius', 1910512106, 'S1 Sistem Informasi'),
('Putri Widya Prasetyaningsih', 1910512107, 'S1 Sistem Informasi'),
('Vanka Putriana Ariningtiyas', 1910512108, 'S1 Sistem Informasi'),
('Farhan Yuda Putra', 1910512109, 'S1 Sistem Informasi'),
('Ahmad Ibnu Islami', 1910512110, 'S1 Sistem Informasi'),
('Dina Aulia', 1910512111, 'S1 Sistem Informasi'),
('Adisa Dinda Pramesta', 1910512112, 'S1 Sistem Informasi'),
('Muhammad Fakhri Mubarok Wasis Pu', 1910512113, 'S1 Sistem Informasi'),
('Syifa Salsabila Hasya', 1910512114, 'S1 Sistem Informasi'),
('Muhammad Rakha Abyan', 1910512115, 'S1 Sistem Informasi'),
('Amelia Azzahra Chairun Nisa', 1910512116, 'S1 Sistem Informasi'),
('Kania Alyaputri', 1910512117, 'S1 Sistem Informasi'),
('Shaffanisa aulia dzikri', 1910512118, 'S1 Sistem Informasi'),
('Raihan Darmawan Pringgodigdo', 1910512119, 'S1 Sistem Informasi'),
('Farhan Muhammad Ramadhan', 1910512120, 'S1 Sistem Informasi'),
('Rama Gio Gustio Fany', 1910512121, 'S1 Sistem Informasi'),
('Gabriella Kristyawardani Putri', 1910512122, 'S1 Sistem Informasi'),
('Muhammad Faiz Hafizh Ramadhan', 1910512123, 'S1 Sistem Informasi'),
('Muhammad Yahya Hadynoto', 1910512124, 'S1 Sistem Informasi'),
('Niasari Nastiti', 1910512125, 'S1 Sistem Informasi'),
('Livia Ramadhani', 1910512126, 'S1 Sistem Informasi'),
('Muhammad Rivaldiansyah', 1910512127, 'S1 Sistem Informasi'),
('Rifqi Aria Bramantyo', 1910512128, 'S1 Sistem Informasi'),
('Erico Dwi Rosadi', 1910512129, 'S1 Sistem Informasi'),
('Hadi Sastro Muhammad', 1910512130, 'S1 Sistem Informasi'),
('Eliana Rosa Evelyn', 1910512131, 'S1 Sistem Informasi'),
('Miftahul Jannah', 1910512132, 'S1 Sistem Informasi'),
('Khodadat Azizy Jeser', 1910512133, 'S1 Sistem Informasi'),
('Diego Irfansyah', 1910512134, 'S1 Sistem Informasi'),
('Muhammad Fadhil Nugrahadi', 1910512135, 'S1 Sistem Informasi'),
('Rifdah Nisrina Hiryan', 1910512136, 'S1 Sistem Informasi'),
('Muhammad Irfan Ajisoko', 1910512137, 'S1 Sistem Informasi'),
('Al Fatih Fachreza Norsa Adryan', 1910512138, 'S1 Sistem Informasi'),
('Taufik Ismail Asra', 1910512139, 'S1 Sistem Informasi');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `namaprodi` varchar(32) NOT NULL,
  `jumlahmhs` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `nim` int(10) NOT NULL,
  `password` varchar(70) NOT NULL,
  `role` enum('admin','user') NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`nim`, `password`, `role`, `status`) VALUES
(1234567890, '851fdee206c1eec10cee5ec8e8962af2', 'admin', '0'),
(1910511080, 'ce236b23c4fbde91a5bcb772d00e4a58', 'user', '0'),
(1910511081, 'b6e99b487ad707c1e85d36c01f1ba983', 'user', '0'),
(1910511084, '7b717ec43095800b07cadeccf156c8b2', 'user', '0'),
(1910511085, 'b24f9978ebe96b1b507838ff8edf50e1', 'user', '0'),
(1910511086, '1e49db1e9c07d30d9e583e709c020d10', 'user', '0'),
(1910511090, '2dba6080f5c8982b7a9d15d298c5d166', 'user', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`namaprodi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`nim`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
