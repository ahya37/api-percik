<?php

use App\TugasModel;
use Illuminate\Database\Seeder;

class MasterTugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => 1,'nomor' => '01', 'nama' => 'Memberikan materi manasik sesi "Cara Umrah Rasulullah Saw" pada waktu yang sudah ditentukan.'],
            ['id' => 2,'nomor' => '02', 'nama' => "Mempelajari  booklet perjalanan, keadaan jama'ah, dan info lainnya yang berhubungan dengan program."],
            ['id' => 3,'nomor' => '03', 'nama' => "Cek kesiapan perlengkapan pembimbing yang harus dibawa."],
            ['id' => 4,'nomor' => '04', 'nama' => "Cek kesiapan perlengkapan program yang harus dibawa paling lambat 2 hari sebelum keberangkatan."],
            ['id' => 5,'nomor' => '05', 'nama' => "Hadir paling lambat 30 menit sebelum acara pelepasan saat keberangkatan."],
            ['id' => 6,'nomor' => '06', 'nama' => "Memberikan pengarahan selama maks 15 menit di acara pelepasan saat keberangkatan."],
            ['id' => 7,'nomor' => '07', 'nama' => "Memimpin do'a saat acara pelepasan."],
            ['id' => 8,'nomor' => '08', 'nama' => "Cek kesiapan panitia, keleng kapan peserta, bus, sebelum berangkat."],
            ['id' => 9,'nomor' => '09', 'nama' => "Memimpin doa perjalanan sesaat setelah Bus berjalan."],
            ['id' => 10,'nomor' => '10', 'nama' => "Memberikan informasi seputar keberangkatan,acara apa saja saat tiba di bandara, info penerbangan (update info kalau ada), dll yang sekira nya perlu disampaikan."],
            ['id' => 11,'nomor' => '11', 'nama' => "Koordinasi dengan panitia selama perjalanan menuju Bandara."],
            ['id' => 12,'nomor' => '12', 'nama' => "Memberikan pengarahan saat ada di restoran sambil menunggu waktu boarding."],
            ['id' => 13,'nomor' => '13', 'nama' => "Apabila Delay  Memberikan infromasi keterlambatan secara akurat dan memberikan motivasi kepada jama 'ah untuk sena ntiasa sabar saat menunggu."],
            ['id' => 14,'nomor' => '14', 'nama' => "Mengarahkan jama'ah saat boarding hingga tiba di gate penerbangan."],
            ['id' => 15,'nomor' => '15', 'nama' => "Menyapa, dialog, berkomunikasi	dengan jama'ah saat di gate sambil menunggu waktu take off."],
            ['id' => 16,'nomor' => '16', 'nama' => "Mengarahkan jama'ah saat memasuki pesawat, mengatur tempat duduk, dan penyimpanan tas cabin."],
            ['id' => 17,'nomor' => '17', 'nama' => "Menyapa, berkomunikasi seperlunya selama dalam penerbangan."],
            ['id' => 18,'nomor' => '18', 'nama' => "Memberikan pengarahan dan mengingatkan kembali saat akan memasuki zona miqat."],
            ['id' => 19,'nomor' => '19', 'nama' => "Mengarahkan, membantu, dan memantau penggantian kain ihram jama'ah pria."],
            ['id' => 20,'nomor' => '20', 'nama' => "Cek kesiapan seluruh jama'ah untuk lhlal lhram (terutama berkaitan dengan hal-hal yang tidak diperbolehkan saat berihram)."],
            ['id' => 21,'nomor' => '21', 'nama' => "Mengarahkan dan mengingatkan seluruh jama'ah untuk mengucapkan ihlal ihram saat 25 menit sebelum landing."],
            ['id' => 22,'nomor' => '22', 'nama' => "Koordinasi langsung dengan panitia handling/muthawif bergitu pesawat landing."],
            ['id' => 23,'nomor' => '23', 'nama' => "Mengarahkan jama'ah saat keluar dari pesawat hingga ke tempat imigrasi."],
            ['id' => 24,'nomor' => '24', 'nama' => "Cek kelengkapan jama'ah begitu tiba di tempat pemeriksaan paspor."],
            ['id' => 25,'nomor' => '25', 'nama' => "Mengingatkan jama'ah untuk berbaris berdasarkan mahramhnya."],
            ['id' => 26,'nomor' => '26', 'nama' => "Koordinasi, cek kesiapan bus dan panitia penjemputan."],
            ['id' => 27,'nomor' => '27', 'nama' => "Pembimbing ibadah berada di baris/urutan terakhir  saat pemeriksaan paspor."],
            ['id' => 28,'nomor' => '28', 'nama' => "Cek kondisi jama'ah saat berbaris di antrian imigrasi."],
            ['id' => 29,'nomor' => '29', 'nama' => "Memberikan pengarahan, bimbingan selama berada di bandara sampai keluar bandara dan masuk Bus."],
            ['id' => 30,'nomor' => '30', 'nama' => "Cek kelengkapan koper jama'ah di baggage claim, pastikan tidak ada yang tertinggal."],
            ['id' => 31,'nomor' => '31', 'nama' => "Koordinasi dengan panitia penjemputan seputar kelengkapan jama'ah dan koper sebelum pembimbing keluar imigrasi."],
            ['id' => 32,'nomor' => '32', 'nama' => "Cek kelengkapan koper begitu tiba di Bus."],
            ['id' => 33,'nomor' => '33', 'nama' => "Mengumpulkan  paspor jama'ah di dalam bus."],
            ['id' => 34,'nomor' => '34', 'nama' => "Cek kelengkapan jama'ah sebelum bus berangkat."],
            ['id' => 35,'nomor' => '35', 'nama' => "Memimpin doa perjalanan."],
            ['id' => 36,'nomor' => '36', 'nama' => "Menyapa jama'ah, ucapan selamat datang, info seputar acara, hotel, dll yang sekiranya harus disampaikan."],
            ['id' => 37,'nomor' => '37', 'nama' => "Mengingatkan dan membimbing jama'ah dalam kondisi berihram."],
            ['id' => 38,'nomor' => '38', 'nama' => "Memimpin talbiyah."],
            ['id' => 39,'nomor' => '39', 'nama' => "Memperkenalkan team Muthawif."],
            ['id' => 40,'nomor' => '40', 'nama' => "Koordinasi dengan team handling di hotel selama perjalanan."],
            ['id' => 41,'nomor' => '41', 'nama' => "Pastikan kesiapan hotel : kunci hotel sudah masuk amplop, welcome letter, kuisioner, dan air mineral (jika tdk disediakan pihak hotel) sudah ada di dalam kamar."],
            ['id' => 42,'nomor' => '42', 'nama' => "Mengarahkan jama'ah masuk hotel"],
            ['id' => 43,'nomor' => '43', 'nama' => "Mengumpulkan seluruh jama'ah di lobby hotel atau di tempat yang cukup kondusif dan memberikan pengarahan tentang persiapan pelaksanaan Umrah : waktu dan tempat kumpul, apa saja yang harus di bawa dan tidak boleh di
bawa, dan informasi lainnya yang sekira nya perlu disampaikan."],
            ['id' => 44,'nomor' => '44', 'nama' => "Mempersilahkan  Muthawwif/team handling untuk mebagikan kunci kamar kepada jama'ah."],
            ['id' => 45,'nomor' => '45', 'nama' => "Koordinasi dengan team handling hotel dan Muthawwif untuk memastikan semua koper terkirim secara benar ke semua jamaa'ah."],
            ['id' => 46,'nomor' => '46', 'nama' => "Mengkoordinir Muthawif untuk memastikan jama'ah  mendapatkan pelayanan yang baik di dalam kamar hotel selama berada di Makkah."],
            ['id' => 47,'nomor' => '47', 'nama' => "Briefing Umrah tahap 1 di lobby hotel/tempat lainnya yang kondusif. Meteri briefing  meliputi: memastikan seluruh jama 'a h suda h punya wudhu, memastikan atribut group dipakai semua jama'ah, mengingatkan hal-hal yang berkaitan dengan larangan dan sunnah selama ber-ihram,
menjelaskan secara singkat tahapan ibadah yang a kan dilakukan, menjelaskan posisi hotel menuju ke/dari arah Masjidil Haram."],
            ['id' => 48,'nomor' => '48', 'nama' => "Briefing Umrah tahag 2 di halaman Masjidil  Haram. Materi briefing meliputi: penjelasan  singkat keadaan umum disekitar halaman masjidil haram termasuk akses pintu masuk masjidil haram, mengingatkan jama'ah tahapan ibadah yang a kan dilakukan yaitu membaca doa saat masuk masjid, membaca doa saat melihat ka'bah ketika sudah berada di dalam masjid,dan infolain yang bcrkaitan disampaikan sec.ara singkat."],
            ['id' => 49,'nomor' => '49', 'nama' => "Mengarahkan dan memb mbing jama'ah masuk ke Masjidil Haram."],
            ['id' => 50,'nomor' => '50', 'nama' => "Mengarahkan jama'ah menuju tempat yang kondusif untuk membaca do'a melihat ka'bah."],
            ['id' => 51,'nomor' => '51', 'nama' => "Memberikan kesempatan agak luang tetapi tldak tedalu la1na kepada jama'ah untuk setara khusyu membac.a doa'a me ihat ka'bah."],
            ['id' => 52,'nomor' => '52', 'nama' => "Briefing Umrah taha 3 diarea thawaf sebelum memulai thawaf.
Mengingatkan kembali secara singkat tata cara ibadah thawaf,dan materi doa saat thawaf, lokasi dan tata cara shalat sunah di Maqam Ibrahim, menunjukkan letak sudut hajar aswad tempat memulai dan mengakhiri thawaf, sudut ruknul yaman, maqam ibrahim, hijr ismail."],
            ['id' => 53,'nomor' => '53', 'nama' => "Mengatur barisan thawaf: yang sepuh2 didepan,muthawif mengontrol dari belakang."],
            ['id' => 54,'nomor' => '54', 'nama' => "Memimpindibaris depan pelaksanaan ibadah thawaf."],
            ['id' => 55,'nomor' => '55', 'nama' => "Mengingatkan jama'ah saat akan mengakhiri putaran thawaf dan mengarahkan barisan keluar putaran"],
            ['id' => 56,'nomor' => '56', 'nama' => "Membimbing dan mengarahkan barisan menuju lokasi yang kondusif untuk pelaksanaan shalat sunah di Maqam Ibrahim."],
            ['id' => 57,'nomor' => '57', 'nama' => "Membimbing dan mengarahkan jama'ah menujuair zam-iam."],
            ['id' => 58,'nomor' => '58', 'nama' => "Brefing Umrah tahap 4 dilokasi menuju masa'i. Pembimbing mengingatkan kembaliproses pelaksanaan ibadah Sa'i dan tahallul."],
            ['id' => 59,'nomor' => '59', 'nama' => "Mengarahkan jama'ah menuju ke tempat sa'i."],
            ['id' => 60,'nomor' => '60', 'nama' => "Memimpin jama'ah melambaikan tangan sambil mengecup ke arah hajar aswad sebelum memasuki tempat sa'i."],
            ['id' => 61,'nomor' => '61', 'nama' => "Membimbing dan mengarahkan jama'ah saat berdoa di safa dan marwah."],
            ['id' => 62,'nomor' => '62', 'nama' => "Membimbing jama'ah pria saat lari-lari kecil di dua pilar lampu hijau."],
            ['id' => 63,'nomor' => '63', 'nama' => "Membimbing dan mengarahkan jama'ah saat pelaksanaan tahalul."],
            ['id' => 64,'nomor' => '64', 'nama' => "Mengumpulkan jama'ah untuk memberikan informasi seputar program berikutnya, terutama info pelaksanaan ziarah/city tour."],
            ['id' => 65,'nomor' => '65', 'nama' => "Mengarahkan jama'ah ke pintu keluar masjidil haram menuju hotel untuk istirahat."],
            ['id' => 66,'nomor' => '66', 'nama' => "Selama di Makkah selelu koordinasi dengan muthawif/team handling hotel apabila ditemukan kendala seputar pelayanan jama'ah, fasilitas, kamar, restoran, dll."],
            ['id' => 67,'nomor' => '67', 'nama' => "Koordinasi 1 (satu) hari sebelumnya dengan team handling dan muthawif tentang kesiapan bus, konsumsi, dan perangkat untuk pelaksanaan city tour / ziarah Makkah."],

            ['id' => 68,'nomor' => '68', 'nama' => "Keep in touch dengan ja ma'ah di setiap waktu makan di restoran. Apabila memungkinkan mengadakan tausyiah sore."],
            ['id' => 69,'nomor' => '69', 'nama' => "Apabila memungkinkan mengadakan tausyiah sore."],
            ['id' => 70,'nomor' => '70', 'nama' => "Mengarahkan jama'ah menuju bus yang akan berangkat ziarah."],

            ['id' => 71,'nomor' => '71', 'nama' => "Memimpin doa perjalanan."],
            ['id' => 72,'nomor' => '72', 'nama' => "Membimbing dan memberikan informasi seputar perjalanan dan tempat-tempat yang dikunjungi saat ziarah baik saat di dalam bus maupun di luar bus saat di tempat tujuan."],
            ['id' => 73,'nomor' => '73', 'nama' => "Memastikan konsumsi sudah dibagikan ke seleuruh jama'ah oleh Muthawwif."],
            ['id' => 74,'nomor' => '74', 'nama' => "Memberikan Informasi seputar program berikutnya, terutama pelaksanaan ziarah seputar masjidil haram, tawaf wada, dll."],
            ['id' => 75,'nomor' => '75', 'nama' => "Memimpin jama'ah saat acara ziarah masjidil Haram dengan mengarahkan dan memberikan informasi kepada jama'ah seputar Masjidil Haram."],
            ['id' => 76,'nomor' => '76', 'nama' => "Berkoordinasi dengan Muthawwif dan team handling sehari sebelumnya tentang kesiapan bus, konsumsi, dan handling check out."],
            ['id' => 77,'nomor' => '77', 'nama' => "Berkoordinasi dengan team handling madinah sehari sebelumnya tentang kesiapan hotel madinah."],
            ['id' => 78,'nomor' => '78', 'nama' => "Mengingatkan jama'ah untuk mengisi kuisioner."],
            ['id' => 79,'nomor' => '79', 'nama' => "Mengumpulkan kuisioner dari seluruh jama'ah."],
            ['id' => 80,'nomor' => '80', 'nama' => "Membimbing dan mengarahkan jama'ah saat pelaksanaan thawaf wada."],
            ['id' => 81,'nomor' => '81', 'nama' => "Cek & ricek kesiapan check out, bus, sopir, hotel di Madinah, paspor jama'ah."],
            ['id' => 82,'nomor' => '82', 'nama' => "Memastikan seluruh koper jama'ah sudah terangkut ke dalam bus."],
            ['id' => 83,'nomor' => '83', 'nama' => "Memastikan kelengkapan jama'ah sebelum bus berangkat."],
            ['id' => 84,'nomor' => '84', 'nama' => "Memimpin do'a perjalanan."],
            ['id' => 85,'nomor' => '85', 'nama' => "Talim 5·10 menit saat meninggalkan kota  Makkah. Materi ta'lim seputar: keutamaan Kota Haram Makkah, mengingatkan Jama'ah untuk senantiasa bersyukur dan berdoa supaya diberikan kesempatan oleh Allah kembali ke Kota Makkah."],
            ['id' => 86,'nomor' => '86', 'nama' => "Memastikan konsumsi sudah dibagikan oleh Muthawif ke seluruh jama'ah."],
            ['id' => 87,'nomor' => '87', 'nama' => "Mengarahkan jama'ah saat memasuki rest area."],
            ['id' => 88,'nomor' => '88', 'nama' => "Cek kelengkapan jama'ah sebelum bus berangkat dari rest area."],
            ['id' => 89,'nomor' => '89', 'nama' => "Keep in touch dengan panitia madinah seputar kesiapan hotel madinah dan proses kesiapan untuk check in."],
            ['id' => 90,'nomor' => '90', 'nama' => "Memberikan informasi seputar kota Madinah dan sejarah kota Madinah begitu memasuki tanah haram di Madinah."],
            ['id' => 91,'nomor' => '91', 'nama' => "Memberikan informasi kepada seluruh jama'ah seputar acara / program selama di Madinah."],
            ['id' => 92,'nomor' => '92', 'nama' => "Mengarahkan jama'ah menuju ke restoran/ lobby hotel."],
            ['id' => 93,'nomor' => '93', 'nama' => "Mempersilahkan Muthawwif atau team handling madinah untuk membagikan kunci kamar kepada jama'ah."],
            ['id' => 94,'nomor' => '94', 'nama' => "Memastikan seluruh koper jama'ah sudah terkirim ke seluruh jama'ah."],
            ['id' => 95,'nomor' => '95', 'nama' => "Membimbing dan mengarahkan jama'ah saat ziarah ke Raudah dan Makam Rasulullah Saw."],
            ['id' => 96,'nomor' => '96', 'nama' => "Mengkoordinir Muthawif untuk memastikan jama'ah mendapatkan pelayanan yang baik di dalam kamar hotel selama berada di Madinah."],
            ['id' => 97,'nomor' => '97', 'nama' => "Berkoordinasi dengan muthawif dan team handling Madinah apabila ada kendala atau masalah pada jama'ah selama di Madinah."],
            ['id' => 98,'nomor' => '98', 'nama' => "Cek kesiapan perlengkapan ziarah, bus,sopir,konsumsi untuk pelaksanaan ziarah kota Madinah."],
            ['id' => 99,'nomor' => '99', 'nama' => "Memastikan kelengkapan jama'ah sebelum bus berangkat ziarah."],
            ['id' => 100,'nomor' => '100', 'nama' => "Memimpin doa perjalanan."],
            ['id' => 101,'nomor' => '101', 'nama' => "Berdialog, memberikan informasi seputar perjalanan ziarah dan tempat-tempat yang dikunjungi baik saat didalam bus maupun di tempat ziarah."],
            ['id' => 102,'nomor' => '102', 'nama' => "Memberikan informasi program / acara berikutnya terutama seputar check out dan kesiapan perjalanan menuju  kota Jeddah."],
            ['id' => 103,'nomor' => '103', 'nama' => "Apabila memungkinkan mengadakan tausyiah sore."],
            ['id' => 104,'nomor' => '104', 'nama' => "Berkoordinasi seharis ebelumnya dengan muthawwif dan team handling Jeddah tentang kesiapan bus, sopir, dan hotel Jeddah."],
            ['id' => 105,'nomor' => '105', 'nama' => "Mengumpulkan Kuisioner"],
            ['id' => 106,'nomor' => '106', 'nama' => "Memastikan seluruh koper terangkut ke dalam truck yang akan di bawa ke jeddah."],
            ['id' => 107,'nomor' => '107', 'nama' => "Memastikan kelengkapan jama'ah sebelum berangkat meninggalkan kota Madinah."],
            ['id' => 108,'nomor' => '108', 'nama' => "Memimpin do'a perjalanan."],
            ['id' => 109,'nomor' => '109', 'nama' => "Ta'lim 5-10 menit saat meninggalkan kota  Madinah. Materi ta'lim seputar: keutamaan Kota Haram Madinah, mengingatkan jama'ah untuk senantiasa bersyukur dan berdoa supaya diberikan kesempatan oleh Allah kembali ke Kota Madinah."],
            ['id' => 110,'nomor' => '110', 'nama' => "Memastikan konsumsi dibagikan ke seluruh jama'ah oleh Muthawwif."],
            ['id' => 111,'nomor' => '111', 'nama' => "Koordinasi dengan tem handling Jeddah, mamastikan kesiapan hotel Jeddah dan proses check in."],
            ['id' => 112,'nomor' => '112', 'nama' => "Memberikan informasi seputar kota Jeddah dan dan sejarahnya begitu memasuki kota jeddah."],
            ['id' => 113,'nomor' => '113', 'nama' => "Memberikan informasi seputar program / acara selanjutnya selama berada di kota Jeddah."],
            ['id' => 114,'nomor' => '114', 'nama' => "Mengarahkan jam'ah menuju lobby / restoran hotel Jeddah"],
            ['id' => 115,'nomor' => '115', 'nama' => "Mempersilahkan  muthawwif / team	handling membagikan kunci kamar kepada jama'ah."],
            ['id' => 116,'nomor' => '116', 'nama' => "Memberikan informasi seputar program / acara selanjutnya."],
            ['id' => 117,'nomor' => '117', 'nama' => "Memastikan seluruh jama'ah mendapatkan layanan / fasilitas hotel dengan sebaik-baiknya selama di Jeddah."],
            ['id' => 118,'nomor' => '118', 'nama' => "Berkoordinasi dengan muthawwif dan team handling Jeddah apabila ditemukan kendala / masalah."],
            ['id' => 119,'nomor' => '119', 'nama' => "Membimbing dan mengarahkan jama'ah saat acara jalan-jalan / shopping ke kawasan Al-Balad."],
            ['id' => 120,'nomor' => '120', 'nama' => "Berkoordinasi dengan team handling tentang kesiapan check out dan kepulangan di bandara."],
            ['id' => 121,'nomor' => '121', 'nama' => "Memastikan seluruh persiapan kepulangan bisa berjalan dengan baik."],
            ['id' => 122,'nomor' => '122', 'nama' => "Mengumpulkan kuisioner."],
            ['id' => 123,'nomor' => '123', 'nama' => "Memastikan kesiapan bus, sopir, bagasi, check in bandara, boarding pass, dll untuk kepulangan."],
            ['id' => 124,'nomor' => '124', 'nama' => "Memastikan kelengkapan jama'ah sebelum meninggalkan hotel Jeddah."],
            ['id' => 125,'nomor' => '125', 'nama' => "Memimpin do'a perjalanan."],
            ['id' => 126,'nomor' => '126', 'nama' => "Berkoordinasi dengan team bandara seputar waktu boarding, dan kesiapan kepulangan secaa keseluruhan."],
            ['id' => 127,'nomor' => '127', 'nama' => "Memimpin dan mengarahkan jama'ah saat kepulangan di Bandara."],
            ['id' => 128,'nomor' => '128', 'nama' => "Cek kondisi jama'ah selam dalam penerbangan menuju Jakarta."],
            ['id' => 129,'nomor' => '129', 'nama' => "Berkoordinasi dengan kepulangan begit landing di Bandara Soetta."],
            ['id' => 130,'nomor' => '130', 'nama' => "Memastikan kelengkapan seluruh koper jama'ah, air zam-zam sebelum meninggalkan bandara soetta."],
            ['id' => 131,'nomor' => '131', 'nama' => "Memberikan sambutan penutup sebelum tiba di kota Bandung yang berisi ucapan terima kasih dan permohonan maaf."],

];
        

        foreach ($data as $value) {
            TugasModel::create($value);
        }
    }
}