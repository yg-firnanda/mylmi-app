<?php

namespace Database\Seeders;

use App\Models\Magazine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MagazineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $magazines = [
            [
                "image" => "https://lmizakat.org/majalah/2018/Januari_2018.png",
                "title" => "Selalu Ada Berkah di Balik Musibah",
                "slug" => "selalu-ada-berkah-di-balik-musibah",
                "description" => "Temukan hikmah dan kekuatan di balik setiap kesulitan dalam majalah ini. Temukan bagaimana musibah dapat membuka jalan menuju kebahagiaan dan pembelajaran berharga.",
                "release" => "2018-01-01",
                "views" => 4,
                "link" => "https://lmizakat.org/majalah/2018/1_Share_Letter_Januari_2018.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2018/Februari_2018.png",
                "title" => "Kembalikan Fitrah Bermain Anak",
                "slug" => "kembalikan-fitrah-bermain-anak",
                "description" => "Mari kita ciptakan kembali ruang bermain yang sehat dan menyenangkan bagi anak-anak. Majalah ini membahas pentingnya bermain dalam perkembangan anak dan bagaimana orang tua dapat mendukungnya.",
                "release" => "2018-02-01",
                "views" => 7,
                "link" => "https://lmizakat.org/majalah/2018/2_Share_Letter_Februari_2018.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2018/Maret_2018.png",
                "title" => "(agar) Anak Cinta Masjid",
                "slug" => "agar-anak-cinta-masjid",
                "description" => "Bantu anak-anak mencintai masjid sejak dini dengan panduan dan tips praktis di majalah ini. Ciptakan kecintaan pada ibadah dan ajarkan nilai-nilai Islam dengan cara yang menyenangkan.",
                "release" => "2018-03-01",
                "views" => 13,
                "link" => "https://lmizakat.org/majalah/2018/3_Share_Letter_Maret_2018.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2018/April_2018.png",
                "title" => "Akil Baligh, Siapkah Anak-Anak Kita ?",
                "slug" => "akil-baligh-siapkah-anak-anak-kita",
                "description" => "Pelajari tentang fase penting dalam kehidupan anak-anak ini, termasuk perubahan fisik, emosional, dan spiritual. Temukan tips untuk membantu anak-anak memasuki masa akil baligh dengan penuh persiapan.",
                "release" => "2018-04-01",
                "views" => 19,
                "link" => "https://lmizakat.org/majalah/2018/4_Share_Letter_April_2018.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2018/Mei_2018.png",
                "title" => "Move on Ramadhan",
                "slug" => "move-on-ramadhan",
                "description" => "Ramadhan telah usai, tapi semangatnya harus terus hidup. Majalah ini membahas cara mempertahankan kebiasaan baik di bulan Ramadhan dan menerapkannya dalam kehidupan sehari-hari.",
                "release" => "2018-05-01",
                "views" => 7,
                "link" => "https://lmizakat.org/majalah/2018/5_Share_Letter_Mei_2018.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2018/Juni_2018.png",
                "title" => "Ramadhan Berlalu Apakah Kebaikannya Berlanjut ?",
                "slug" => "ramadhan-berlalu-apakah-kebaikannya-berlanjut",
                "description" => "Mari jadikan Ramadhan sebagai awal perubahan positif yang langgeng. Majalah ini berisi inspirasi dan tips untuk menjaga semangat ibadah dan kebaikan di luar bulan Ramadhan.",
                "release" => "2018-06-01",
                "views" => 3,
                "link" => "https://lmizakat.org/majalah/2018/6_Share_Letter_Juni_2018.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2018/Juli_2018.png",
                "title" => "Petani Berhak Sejahtera, Saatnya Qurban Holic",
                "slug" => "petani-berhak-sejahtera-saatnya-qurban-holic",
                "description" => "Mari kita dukung kesejahteraan petani melalui qurban. Majalah ini membahas manfaat qurban holic dan bagaimana program ini membantu para petani di Indonesia.",
                "release" => "2018-07-01",
                "views" => 17,
                "link" => "https://lmizakat.org/majalah/2018/7_Share_Letter_Juli_2018.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2018/Agustus_2018.png",
                "title" => "Nikmatnya Berkah Berbagi",
                "slug" => "nikmatnya-berkah-berbagi",
                "description" => "Rasakan kebahagiaan sejati dengan berbagi kepada sesama. Majalah ini menghadirkan kisah inspiratif tentang berbagi dan tips untuk menyebarkan kebaikan di sekitar kita.",
                "release" => "2018-08-01",
                "views" => 20,
                "link" => "https://lmizakat.org/majalah/2018/8_Share_Letter_Agustus_2018.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2018/September_2018.png",
                "title" => "23th LMI, Nikmatnya Berkah Berbagi",
                "slug" => "23th-lmi-nikmatnya-berkah-berbagi",
                "description" => "Rayakan 23 tahun Laznas LMI dengan kisah inspiratif tentang berbagi dan berbuat baik. Temukan bagaimana LMI membantu banyak orang dan ciptakan perubahan positif di Indonesia.",
                "release" => "2018-09-01",
                "views" => 0,
                "link" => "https://lmizakat.org/majalah/2018/9_Share_Letter_September_2018.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2018/Oktober_2018.png",
                "title" => "Aku Muda dan Berdaya Guna",
                "slug" => "aku-muda-dan-berdaya-guna",
                "description" => "Temukan potensi diri dan ciptakan perubahan positif di usia muda. Majalah ini berisi tips dan inspirasi untuk menjadi pemuda yang berdaya guna dan berkontribusi pada masyarakat.",
                "release" => "2018-10-01",
                "views" => 16,
                "link" => "https://lmizakat.org/majalah/2018/10_Share_Letter_Oktober_2018.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2018/November_2018.png",
                "title" => "Guru, Digugu lan Ditiru",
                "slug" => "guru-digugu-lan-ditiru",
                "description" => "Mari kita hormati dan teladani profesi guru yang mulia. Majalah ini membahas peran penting guru dalam pendidikan dan bagaimana kita dapat mendukung mereka.",
                "release" => "2018-11-01",
                "views" => 19,
                "link" => "https://lmizakat.org/majalah/2018/11_Share_Letter_November_2018.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2018/Desember_2018.png",
                "title" => "Waspada Big Sale!",
                "slug" => "waspada-big-sale",
                "description" => "Belajarlah berbelanja dengan bijak di era diskon besar-besaran. Majalah ini berisi tips untuk menghindari penipuan, memilih produk berkualitas, dan mengelola keuangan dengan cerdas.",
                "release" => "2018-12-01",
                "views" => 13,
                "link" => "https://lmizakat.org/majalah/2018/12_Share_Letter_Desember_2018.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2019/Januari_2019.png",
                "title" => "2019 Mau Ganti Apa?",
                "slug" => "2019-mau-ganti-apa",
                "description" => "Refleksi diri dan resolusi untuk tahun baru. Majalah ini mengajakmu merenungkan pencapaian di tahun 2019 dan merumuskan tujuan yang ingin diraih di tahun 2020.",
                "release" => "2019-01-01",
                "views" => 3,
                "link" => "https://lmizakat.org/majalah/2019/1_ZAKATO_Januari_2019.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2019/Februari_2019.png",
                "title" => "Dewasa Bermedia Sosial",
                "slug" => "dewasa-bermedia-sosial",
                "description" => "Gunakan media sosial dengan bijak dan bertanggung jawab. Majalah ini membahas tips untuk menghindari cyberbullying, penipuan online, dan konten negatif lainnya di media sosial.",
                "release" => "2019-02-01",
                "views" => 18,
                "link" => "https://lmizakat.org/majalah/2019/2_ZAKATO_Februari_2019.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2019/Maret_2019.png",
                "title" => "Film, Sarana Berdakwah Tanpa Ceramah",
                "slug" => "film-sarana-berdakwah-tanpa-ceramah",
                "description" => "Pelajari kekuatan film sebagai media dakwah yang efektif. Majalah ini membahas film-film inspiratif dan bagaimana film dapat digunakan untuk menyebarkan nilai-nilai positif.",
                "release" => "2019-03-01",
                "views" => 8,
                "link" => "https://lmizakat.org/majalah/2019/3_ZAKATO_Maret_2019.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2019/April_2019.png",
                "title" => "Ikan, Panganan Sehat Kaya Manfaat",
                "slug" => "ikan-panganan-sehat-kaya-manfaat",
                "description" => "Nikmati kelezatan dan manfaat ikan sebagai sumber protein yang kaya. Majalah ini berisi resep masakan ikan yang lezat dan mudah dibuat.",
                "release" => "2019-04-01",
                "views" => 14,
                "link" => "https://lmizakat.org/majalah/2019/4_ZAKATO_April_2019.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2019/Mei_2019.png",
                "title" => "Mari Detoks Diri dengan Ramadan",
                "slug" => "mari-detoks-diri-dengan-ramadan",
                "description" => "Gunakan bulan Ramadhan untuk membersihkan diri secara fisik dan spiritual. Majalah ini berisi tips detoksifikasi tubuh dan jiwa selama bulan Ramadhan.",
                "release" => "2019-05-01",
                "views" => 10,
                "link" => "https://lmizakat.org/majalah/2019/5_ZAKATO_Mei_2019.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2019/Juni_2019.png",
                "title" => "Merawat Ketakwaan",
                "slug" => "merawat-ketakwaan",
                "description" => "Jaga dan pelihara ketakwaan di hati agar hidup lebih tenang dan bermakna. Majalah ini berisi panduan untuk meningkatkan ketakwaan dan mendekatkan diri kepada Allah SWT.",
                "release" => "2019-06-01",
                "views" => 17,
                "link" => "https://lmizakat.org/majalah/2019/6_ZAKATO_Juni_2019.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2019/Juli_2019.png",
                "title" => "Yuk, Kaya. . .",
                "slug" => "yuk-kaya",
                "description" => "Raih kekayaan dengan cara yang halal dan berkah. Majalah ini berisi tips dan inspirasi untuk mencapai kesuksesan finansial dengan cara yang etis dan bertanggung jawab.",
                "release" => "2019-07-01",
                "views" => 8,
                "link" => "https://lmizakat.org/majalah/2019/7_ZAKATO_Juli_2019.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2019/Agustus_2019.png",
                "title" => "Terima Kasih atas Perjuanganmu, Ibuku. . .",
                "slug" => "terima-kasih-atas-perjuanganmu-ibuku",
                "description" => "Ungkapkan rasa terima kasih dan cinta kepada ibumu dengan tulus. Majalah ini berisi kumpulan kisah inspiratif tentang perjuangan ibu dan tips untuk menunjukkan rasa cinta dan kasih sayang kepadanya.",
                "release" => "2019-08-01",
                "views" => 10,
                "link" => "https://lmizakat.org/majalah/2019/8_ZAKATO_Agustus_2019.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2019/September_2019.png",
                "title" => "Menjadi Lebih Bermanfaat",
                "slug" => "menjadi-lebih-bermanfaat",
                "description" => "Kembangkan diri dan ciptakan dampak positif bagi orang lain. Majalah ini berisi tips untuk menjadi pribadi yang lebih bermanfaat dan berkontribusi pada masyarakat.",
                "release" => "2019-09-01",
                "views" => 15,
                "link" => "https://lmizakat.org/majalah/2019/9_ZAKATO_September_2019.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2019/Oktober_2019.png",
                "title" => "Ambil Peran, Jangan Baperan",
                "slug" => "ambil-peran-jangan-baperan",
                "description" => "Jadilah pribadi proaktif dan hindari sikap baperan. Majalah ini berisi tips, kisah inspiratif, dan panduan untuk membangun mentalitas kuat dan berkontribusi dalam berbagai hal.",
                "release" => "2019-10-01",
                "views" => 3,
                "link" => "https://lmizakat.org/majalah/2019/10_ZAKATO_Oktober_2019.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2019/November_2019.png",
                "title" => "Ayahku Idolaku",
                "slug" => "ayahku-idolaku",
                "description" => "Temukan sosok ayah yang inspiratif dan pelajari nilai-nilai positif yang dapat dipelajari darinya. Majalah ini berisi kisah inspiratif tentang ayah dan tips untuk membangun hubungan yang lebih dekat dengan ayah.",
                "release" => "2019-11-01",
                "views" => 16,
                "link" => "https://lmizakat.org/majalah/2019/11_ZAKATO_November_2019.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2019/Desember_2019.png",
                "title" => "Air untuk Kehidupan",
                "slug" => "air-untuk-kehidupan",
                "description" => "Mari kita jaga dan lestarikan air sebagai sumber kehidupan yang vital. Majalah ini membahas pentingnya air, dampak pencemaran air, dan tips untuk menghemat air dalam kehidupan sehari-hari.",
                "release" => "2019-12-01",
                "views" => 13,
                "link" => "https://lmizakat.org/majalah/2019/12_ZAKATO_Desember_2019.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2020/Januari_2020.png",
                "title" => "Masjid Bersinergi",
                "slug" => "masjid-bersinergi",
                "description" => "Mari jadikan masjid sebagai pusat kegiatan dan pengembangan umat. Majalah ini membahas peran masjid dalam kehidupan masyarakat dan bagaimana kita dapat bersinergi untuk memakmurkannya.",
                "release" => "2020-01-01",
                "views" => 5,
                "link" => "https://lmizakat.org/majalah/2020/1_ZAKATO_Januari_2020.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2020/Februari_2020.png",
                "title" => "Siapkan Bekal Ramadhan",
                "slug" => "siapkan-bekal-ramadhan",
                "description" => "Sambut bulan Ramadhan dengan persiapan yang matang. Majalah ini berisi tips untuk mempersiapkan diri secara fisik, spiritual, dan mental untuk menyambut bulan suci Ramadhan.",
                "release" => "2020-02-01",
                "views" => 11,
                "link" => "https://lmizakat.org/majalah/2020/2_ZAKATO_Februari_2020.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2020/Maret_2020.png",
                "title" => "Awalnya Tak Harus Ikhlas",
                "slug" => "awalnya-tak-harus-ikhlas",
                "description" => "Belajarlah untuk menerima kenyataan pahit dan temukan kekuatan untuk bangkit kembali. Majalah ini berisi kisah inspiratif tentang orang-orang yang berhasil melewati masa sulit dan tips untuk menumbuhkan rasa ikhlas.",
                "release" => "2020-03-01",
                "views" => 0,
                "link" => "https://lmizakat.org/majalah/2020/3_ZAKATO_Maret_2020.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2020/April_2020.png",
                "title" => "Ramadhan Bersama dalam Kebaikan",
                "slug" => "ramadhan-bersama-dalam-kebaikan",
                "description" => "Mari ciptakan momen Ramadhan yang penuh dengan kebaikan dan kebersamaan. Majalah ini berisi ide kegiatan Ramadhan yang dapat dilakukan bersama keluarga dan komunitas.",
                "release" => "2020-04-01",
                "views" => 15,
                "link" => "https://lmizakat.org/majalah/2020/4_ZAKATO_April_2020.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2020/Mei_2020.png",
                "title" => "Ramadhan dalam Pandemi",
                "slug" => "ramadhan-dalam-pandemi",
                "description" => "Tetap khusyuk dan produktif di bulan Ramadhan meskipun dalam situasi pandemi. Majalah ini berisi tips untuk menjalankan ibadah dan aktivitas Ramadhan di masa pandemi.",
                "release" => "2020-05-01",
                "views" => 4,
                "link" => "https://lmizakat.org/majalah/2020/5_ZAKATO_Mei_2020.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2020/Juni_2020.png",
                "title" => "Qurban untuk Ketahanan Pangan",
                "slug" => "qurban-untuk-ketahanan-pangan",
                "description" => "Dukung ketahanan pangan di Indonesia melalui qurban. Majalah ini membahas manfaat qurban dan bagaimana program ini membantu meningkatkan kesejahteraan peternak dan masyarakat.",
                "release" => "2020-06-01",
                "views" => 3,
                "link" => "https://lmizakat.org/majalah/2020/6_ZAKATO_Juni_2020.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2020/Juli_2020.png",
                "title" => "Gaya Hidup Islami & New Normal",
                "slug" => "gaya-hidup-islami-new-normal",
                "description" => "Terapkan gaya hidup Islami dalam kehidupan sehari-hari di era new normal. Majalah ini berisi tips untuk menyeimbangkan ibadah, pekerjaan, dan aktivitas lainnya sesuai dengan nilai-nilai Islam.",
                "release" => "2020-07-01",
                "views" => 4,
                "link" => "https://lmizakat.org/majalah/2020/7_ZAKATO_Juli_2020.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2020/Agustus_2020.png",
                "title" => "Seni Mendidik dari Rumah",
                "slug" => "seni-mendidik-dari-rumah",
                "description" => "Temukan cara-cara kreatif untuk mendidik anak di rumah. Majalah ini berisi tips dan inspirasi untuk menciptakan lingkungan belajar yang menyenangkan dan efektif di rumah.",
                "release" => "2020-08-01",
                "views" => 10,
                "link" => "https://lmizakat.org/majalah/2020/8_ZAKATO_Agustus_2020.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2020/September_2020.png",
                "title" => "Bahagia dengan Bahagiakan Sesama",
                "slug" => "bahagia-dengan-bahagiakan-sesama",
                "description" => "Temukan kebahagiaan sejati dengan berbagi dan membantu orang lain. Majalah ini berisi kisah inspiratif tentang filantropi dan tips untuk menyebarkan kebahagiaan di sekitar kita.",
                "release" => "2020-09-01",
                "views" => 7,
                "link" => "https://lmizakat.org/majalah/2020/9_ZAKATO_September_2020.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2020/Oktober_2020.png",
                "title" => "Wakaf Produktif, Berdayakan Indonesia",
                "slug" => "wakaf-produktif-berdayakan-indonesia",
                "description" => "Mari berwakaf untuk membangun Indonesia yang lebih sejahtera. Majalah ini membahas manfaat wakaf produktif dan bagaimana program ini dapat membantu berbagai sektor di Indonesia.",
                "release" => "2020-10-01",
                "views" => 7,
                "link" => "https://lmizakat.org/majalah/2020/10_ZAKATO_Oktober_2020.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2020/November_2020.png",
                "title" => "Ajak Anakmu Musyawarah",
                "slug" => "ajak-anakmu-musyawarah",
                "description" => "Ajarkan anak-anak untuk bermusyawarah dan menyelesaikan masalah dengan cara yang demokratis. Majalah ini berisi tips untuk membangun komunikasi yang baik dengan anak dan mendorong mereka untuk berpartisipasi dalam pengambilan keputusan.",
                "release" => "2020-11-01",
                "views" => 13,
                "link" => "https://lmizakat.org/majalah/2020/11_ZAKATO_November_2020.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2020/Desember_2020.png",
                "title" => "Worklife Balance",
                "slug" => "worklife-balance",
                "description" => "Temukan keseimbangan antara pekerjaan dan kehidupan pribadi di era new normal. Majalah ini berisi tips untuk menghindari burnout, meningkatkan produktivitas, dan menjaga kesehatan mental di tengah kesibukan.",
                "release" => "2020-12-01",
                "views" => 11,
                "link" => "https://lmizakat.org/majalah/2020/12_ZAKATO_Desember_2020.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2021/Januari_2021.png",
                "title" => "Apa Langkah Pedulimu?",
                "slug" => "apa-langkah-pedulimu",
                "description" => "Mari ambil peran dan berkontribusi dalam berbagai isu sosial dan lingkungan. Majalah ini membahas berbagai isu aktual dan mengajakmu untuk mengambil tindakan nyata untuk membuat dunia menjadi lebih baik.",
                "release" => "2021-01-01",
                "views" => 13,
                "link" => "https://lmizakat.org/majalah/2021/1_ZAKATO_Januari_2021.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2021/Februari_2021.png",
                "title" => "Merdeka Belajar, Ngampus dari Mana Aja",
                "slug" => "merdeka-belajar-ngampus-dari-mana-aja",
                "description" => "Pelajari tentang konsep Merdeka Belajar dan bagaimana hal itu dapat mengubah dunia pendidikan di Indonesia. Majalah ini berisi informasi tentang berbagai program Merdeka Belajar dan bagaimana kamu bisa terlibat.",
                "release" => "2021-02-01",
                "views" => 12,
                "link" => "https://lmizakat.org/majalah/2021/2_ZAKATO_Februari_2021.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2021/Maret_2021.png",
                "title" => "Hutan Lindungi Kehidupan",
                "slug" => "hutan-lindungi-kehidupan",
                "description" => "Mari jaga dan lestarikan hutan sebagai sumber kehidupan yang penting. Majalah ini membahas pentingnya hutan, dampak deforestasi, dan tips untuk menjaga kelestarian hutan.",
                "release" => "2021-03-01",
                "views" => 10,
                "link" => "https://lmizakat.org/majalah/2021/3_ZAKATO_Maret_2021.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2021/April_2021.png",
                "title" => "Ramadhan Playlist",
                "slug" => "ramadhan-playlist",
                "description" => "Temukan inspirasi dan semangat dalam playlist lagu religi untuk bulan Ramadhan. Majalah ini berisi rekomendasi lagu-lagu religi yang indah dan penuh makna.",
                "release" => "2021-04-01",
                "views" => 14,
                "link" => "https://lmizakat.org/majalah/2021/4_ZAKATO_April_2021.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2021/Mei_2021.png",
                "title" => "Wakaf Produktif Berdaya Sama-Sama",
                "slug" => "wakaf-produktif-berdaya-sama-sama",
                "description" => "Mari berkolaborasi dan bersinergi untuk meningkatkan dampak wakaf produktif. Majalah ini membahas pentingnya kolaborasi dan bagaimana berbagai pihak dapat bekerja sama untuk memaksimalkan potensi wakaf produktif.",
                "release" => "2021-05-01",
                "views" => 4,
                "link" => "https://lmizakat.org/majalah/2021/5_ZAKATO_Mei_2021.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2021/Juni_2021.png",
                "title" => "Kita Semua Orang Tua bagi Yatim",
                "slug" => "kita-semua-orang-tua-bagi-yatim",
                "description" => "Mari bantu dan bahagiakan anak-anak yatim piatu. Majalah ini berisi kisah inspiratif, tips, informasi, dan ajakan untuk terlibat dalam aksi nyata membantu mereka.",
                "release" => "2021-06-01",
                "views" => 14,
                "link" => "https://lmizakat.org/majalah/2021/6_ZAKATO_Juni_2021.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2021/Juli_2021.png",
                "title" => "Belajar dari Ismail",
                "slug" => "belajar-dari-ismail",
                "description" => "Temukan hikmah dan pelajaran berharga dari kisah Nabi Ismail AS. Majalah ini membahas tentang ketaatan, kesabaran, dan pengorbanan Nabi Ismail dan keluarganya.",
                "release" => "2021-07-01",
                "views" => 16,
                "link" => "https://lmizakat.org/majalah/2021/7_ZAKATO_Juli_2021.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2021/Agustus_2021.png",
                "title" => "Merdeka dari Hati",
                "slug" => "merdeka-dari-hati",
                "description" => "Rasakan kemerdekaan sejati yang berasal dari dalam diri. Majalah ini membahas tentang makna kemerdekaan yang hakiki dan bagaimana mencapainya dalam kehidupan pribadi.",
                "release" => "2021-08-01",
                "views" => 1,
                "link" => "https://lmizakat.org/majalah/2021/8_ZAKATO_Agustus_2021.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2021/September_2021.png",
                "title" => "26th LMI, Kuatkan Harmoni Kepedulian",
                "slug" => "26th-lmi-kuatkan-harmoni-kepedulian",
                "description" => "Rayakan 26 tahun Laznas LMI dengan semangat kepedulian dan solidaritas. Majalah ini berisi kisah inspiratif tentang aksi sosial LMI dan bagaimana kamu bisa berkontribusi dalam gerakan ini.",
                "release" => "2021-09-01",
                "views" => 6,
                "link" => "https://lmizakat.org/majalah/2021/9_ZAKATO_September_2021.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2021/Oktober_2021.png",
                "title" => "Memahami Hak Anak",
                "slug" => "memahami-hak-anak",
                "description" => "Pelajari tentang hak-hak anak dan pentingnya melindunginya. Majalah ini membahas berbagai hak anak, termasuk hak untuk hidup, pendidikan, dan kesehatan.",
                "release" => "2021-10-01",
                "views" => 2,
                "link" => "https://lmizakat.org/majalah/2021/10_ZAKATO_Oktober_2021.pdf",
                "user_id" => 1,
            ],
            [
                "image" => "https://lmizakat.org/majalah/2021/November_2021.png",
                "title" => "Transformasi LAZNAS LMI di Masa Pandemi",
                "slug" => "transformasi-laznas-lmi-di-masa-pandemi",
                "description" => "Pelajari bagaimana Laznas LMI beradaptasi dan bertransformasi di masa pandemi. Majalah ini berisi informasi tentang program-program inovatif LMI dan bagaimana mereka membantu masyarakat di tengah pandemi.",
                "release" => "2021-11-01",
                "views" => 1,
                "link" => "https://lmizakat.org/majalah/2021/11_ZAKATO_November_2021.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2021/Desember_2021.png",
                "title" => "Menghormati Kesedihan",
                "slug" => "menghormati-kesedihan",
                "description" => "Belajarlah untuk memahami dan menghormati kesedihan orang lain. Majalah ini membahas tentang pentingnya empati dan bagaimana menunjukkan dukungan kepada orang yang sedang bersedih.",
                "release" => "2021-12-01",
                "views" => 11,
                "link" => "https://lmizakat.org/majalah/2021/12_ZAKATO_Desember_2021.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2022/Januari_2022.png",
                "title" => "Bahagia Secukupnya",
                "slug" => "bahagia-secukupnya",
                "description" => "Temukan kebahagiaan dalam kesederhanaan dan rasa syukur. Majalah ini membahas tentang konsep kebahagiaan yang seimbang dan bagaimana mencapainya tanpa mengejar materi berlebihan.",
                "release" => "2022-01-01",
                "views" => 18,
                "link" => "https://lmizakat.org/majalah/2022/1_ZAKATO_Januari_2022.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2022/Februari_2022.png",
                "title" => "Recovery Mental",
                "slug" => "recovery-mental",
                "description" => "Bangkit kembali dan pulihkan mentalmu setelah melewati masa sulit. Majalah ini berisi tips untuk mengatasi kecemasan, depresi, dan stres, serta membangun mental yang lebih kuat.",
                "release" => "2022-02-01",
                "views" => 17,
                "link" => "https://lmizakat.org/majalah/2022/2_ZAKATO_Februari_2022.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2022/Maret_2022.png",
                "title" => "Gak Sabar Pengen Ketemu",
                "slug" => "gak-sabar-pengen-ketemu",
                "description" => "Ungkapkan kerinduan dan cinta kepada orang-orang terkasih dengan cara yang kreatif. Majalah ini berisi ide-ide kreatif untuk menunjukkan rasa sayang dan kerinduan kepada keluarga dan sahabat.",
                "release" => "2022-03-01",
                "views" => 9,
                "link" => "https://lmizakat.org/majalah/2022/3_ZAKATO_Maret_2022.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2022/April_2022.png",
                "title" => "Produktif Yuk, Bund!",
                "slug" => "produktif-yuk-bund",
                "description" => "Tingkatkan produktivitas dan kelola waktumu dengan bijak sebagai ibu rumah tangga. Majalah ini berisi tips untuk menyeimbangkan pekerjaan rumah tangga, mengurus anak, dan mengembangkan diri.",
                "release" => "2022-04-01",
                "views" => 11,
                "link" => "https://lmizakat.org/majalah/2022/4_ZAKATO_April_2022.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2022/Mei_2022.png",
                "title" => "Antara Aku dan Guruku",
                "slug" => "antara-aku-dan-guruku",
                "description" => "Membangun hubungan yang baik antara murid dan guru. Majalah ini membahas tentang pentingnya komunikasi dan rasa saling menghormati dalam hubungan guru dan murid.",
                "release" => "2022-05-01",
                "views" => 3,
                "link" => "https://lmizakat.org/majalah/2022/5_ZAKATO_Mei_2022.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2022/Juni_2022.png",
                "title" => "Jabatan Bermula Ketaatan",
                "slug" => "jabatan-bermula-ketaatan",
                "description" => "Raih kesuksesan dengan mengedepankan ketaatan dan moralitas. Majalah ini berisi kisah inspiratif tentang pemimpin yang sukses dan bagaimana mereka berpegang teguh pada nilai-nilai moral.",
                "release" => "2022-06-01",
                "views" => 9,
                "link" => "https://lmizakat.org/majalah/2022/6_ZAKATO_Juni_2022.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2022/Juli_2022.png",
                "title" => "Qurbanmu Bahagiakan Saudaramu",
                "slug" => "qurbanmu-bahagiakan-saudaramu",
                "description" => "Berikan kebahagiaan dan berkah kepada saudara-saudaramu melalui qurban. Majalah ini membahas manfaat qurban dan bagaimana program ini membantu masyarakat yang membutuhkan.",
                "release" => "2022-07-01",
                "views" => 18,
                "link" => "https://lmizakat.org/majalah/2022/7_ZAKATO_Juli_2022.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2022/Agustus_2022.png",
                "title" => "Alam Merdeka Dimulai dari Kita",
                "slug" => "alam-merdeka-dimulai-dari-kita",
                "description" => "Mari jaga dan lestarikan alam untuk mencapai kemerdekaan yang hakiki. Majalah ini membahas pentingnya menjaga kelestarian alam dan tips untuk melakukan aksi nyata dalam kehidupan sehari-hari.",
                "release" => "2022-08-01",
                "views" => 10,
                "link" => "https://lmizakat.org/majalah/2022/8_ZAKATO_Agustus_2022.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2022/September_2022.png",
                "title" => "Makin Dewasa Makin Bermakna",
                "slug" => "makin-dewasa-makin-bermakna",
                "description" => "Temukan makna hidup yang lebih dalam seiring bertambahnya usia. Majalah ini membahas tentang tips untuk menjalani hidup yang lebih bermakna dan penuh tujuan.",
                "release" => "2022-09-01",
                "views" => 5,
                "link" => "https://lmizakat.org/majalah/2022/9_ZAKATO_September_2022.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2022/Oktober_2022.png",
                "title" => "Si Paling Teladan",
                "slug" => "si-paling-teladan",
                "description" => "Temukan teladan dalam diri orang-orang di sekitarmu dan ikuti jejak mereka. Majalah ini berisi kisah inspiratif tentang orang-orang biasa yang melakukan hal luar biasa dan memberikan dampak positif bagi orang lain.",
                "release" => "2022-10-01",
                "views" => 17,
                "link" => "https://lmizakat.org/majalah/2022/10_ZAKATO_Oktober_2022.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2022/November_2022.png",
                "title" => "The Real Superhero is You",
                "slug" => "the-real-superhero-is-you",
                "description" => "Temukan kekuatan super within dirimu dan ciptakan perubahan positif. Majalah ini berisi tips untuk membangun kepercayaan diri, mengembangkan potensi, dan menjadi versi terbaik diri sendiri.",
                "release" => "2022-11-01",
                "views" => 18,
                "link" => "https://lmizakat.org/majalah/2022/11_ZAKATO_November_2022.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2022/Desember_2022.png",
                "title" => "Teman Ajaib",
                "slug" => "teman-ajaib",
                "description" => "Temukan kebahagiaan dan persahabatan yang tulus dengan hewan peliharaan. Majalah ini membahas tentang manfaat memiliki hewan peliharaan dan tips untuk merawatnya dengan baik.",
                "release" => "2022-12-01",
                "views" => 19,
                "link" => "https://lmizakat.org/majalah/2022/12_ZAKATO_Desember_2022.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2023/Januari_2023.png",
                "title" => "Muda-Muda Pengusaha",
                "slug" => "muda-muda-pengusaha",
                "description" => "Raih mimpimu menjadi pengusaha sukses di usia muda. Majalah ini berisi tips dan inspirasi untuk memulai bisnis, mengelola keuangan, dan membangun mentalitas pengusaha.",
                "release" => "2023-01-01",
                "views" => 9,
                "link" => "https://lmizakat.org/majalah/2023/1_ZAKATO_Januari_2023.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2023/Februari_2023.png",
                "title" => "Banyak Makan Global Warming",
                "slug" => "banyak-makan-global-warming",
                "description" => "Pahami dampak konsumsi berlebihan terhadap pemanasan global. Majalah ini membahas tentang gaya hidup berkelanjutan dan tips untuk mengurangi jejak karbon dalam kehidupan sehari-hari.",
                "release" => "2023-02-01",
                "views" => 5,
                "link" => "https://lmizakat.org/majalah/2023/2_ZAKATO_Februari_2023.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2023/Maret_2023.png",
                "title" => "30 Days Love Story",
                "slug" => "30-days-love-story",
                "description" => "Rasakan cinta dalam kisah romantis yang menghangatkan hati. Majalah ini berisi cerita cinta yang inspiratif dan penuh makna.",
                "release" => "2023-03-01",
                "views" => 1,
                "link" => "https://lmizakat.org/majalah/2023/3_ZAKATO_Maret_2023.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2023/April_2023.png",
                "title" => "The Vibrant Rise of Us",
                "slug" => "the-vibrant-rise-of-us",
                "description" => "Bangkitlah bersama dan ciptakan masa depan cerah! Majalah ini berisi kisah inspiratif, tips, strategi, dan panduan untuk membangun karakter, mengembangkan potensi, dan mengejar mimpi.",
                "release" => "2023-04-01",
                "views" => 8,
                "link" => "https://lmizakat.org/majalah/2023/4_ZAKATO_April_2023.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2023/Mei_2023.png",
                "title" => "The Dream Catchers",
                "slug" => "the-dream-catchers",
                "description" => "Wujudkan mimpimu dengan tekad dan kerja keras. Majalah ini berisi tips untuk menetapkan tujuan, menyusun strategi, dan mengatasi rintangan dalam mengejar mimpi.",
                "release" => "2023-05-01",
                "views" => 8,
                "link" => "https://lmizakat.org/majalah/2023/5_ZAKATO_Mei_2023.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2023/Juni_2023.png",
                "title" => "Semua #bisa Qurban",
                "slug" => "semua-bisa-qurban",
                "description" => "Mari berqurban dan berbagi kebahagiaan dengan semua orang. Majalah ini membahas tentang manfaat qurban dan berbagai program qurban yang mudah diakses oleh semua kalangan.",
                "release" => "2023-06-01",
                "views" => 4,
                "link" => "https://lmizakat.org/majalah/2023/6_ZAKATO_Juni_2023.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2023/Juli_2023.png",
                "title" => "Who Am I",
                "slug" => "who-am-i",
                "description" => "Temukan jati diri dan tujuan hidupmu melalui introspeksi dan refleksi. Majalah ini berisi panduan untuk mengenal diri sendiri dengan lebih baik dan menemukan makna hidup yang sesungguhnya.",
                "release" => "2023-07-01",
                "views" => 5,
                "link" => "https://lmizakat.org/majalah/2023/7_ZAKATO_Juli_2023.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2023/Agustus_2023.png",
                "title" => "Bangga Indonesia",
                "slug" => "bangga-indonesia",
                "description" => "Mari kita jaga dan lestarikan budaya Indonesia yang kaya raya. Majalah ini membahas tentang keindahan budaya Indonesia, pentingnya melestarikannya, dan tips untuk menumbuhkan rasa cinta tanah air.",
                "release" => "2023-08-01",
                "views" => 1,
                "link" => "https://lmizakat.org/majalah/2023/8_ZAKATO_Agustus_2023.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2023/September_2023.png",
                "title" => "Petualangan Si Amil",
                "slug" => "petualangan-si-amil",
                "description" => "Ikuti kisah inspiratif Si Amil, seorang anak yang rajin dan suka membantu orang lain. Majalah ini berisi cerita edukatif dan menghibur yang mengajarkan nilai-nilai moral dan karakter positif kepada anak-anak.",
                "release" => "2023-09-01",
                "views" => 2,
                "link" => "https://lmizakat.org/majalah/2023/9_ZAKATO_September_2023.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2023/Oktober_2023.png",
                "title" => "Maaf Mental Health-ku Terganggu",
                "slug" => "maaf-mental-health-ku-terganggu",
                "description" => "Belajarlah untuk memahami dan berbicara tentang kesehatan mental dengan terbuka. Majalah ini membahas tentang pentingnya kesehatan mental, berbagai jenis gangguan mental, dan tips untuk mencari bantuan dan dukungan.",
                "release" => "2023-10-01",
                "views" => 5,
                "link" => "https://lmizakat.org/majalah/2023/10_ZAKATO_Oktober_2023.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2023/November_2023.png",
                "title" => "Bersama Selamatkan Hutan",
                "slug" => "bersama-selamatkan-hutan",
                "description" => "Mari jaga dan lestarikan hutan sebagai paru-paru dunia. Majalah ini membahas tentang pentingnya hutan, dampak deforestasi, dan aksi-aksi nyata yang dapat dilakukan untuk menyelamatkan hutan.",
                "release" => "2023-11-01",
                "views" => 12,
                "link" => "https://lmizakat.org/majalah/2023/11_ZAKATO_November_2023.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2023/Desember_2023.png",
                "title" => "Tanah Suci yang Terokupasi",
                "slug" => "tanah-suci-yang-terokupasi",
                "description" => "Pelajari tentang perjuangan rakyat Palestina dan dukung kemerdekaan mereka. Majalah ini membahas tentang situasi di Palestina, dampak pendudukan Israel, dan cara-cara untuk menunjukkan solidaritas.",
                "release" => "2023-12-01",
                "views" => 13,
                "link" => "https://lmizakat.org/majalah/2023/12_ZAKATO_Desember_2023.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2024/Januari_2024.png",
                "title" => "Terbatas Tapi Tak Terbatas",
                "slug" => "terbatas-tapi-tak-terbatas",
                "description" => "Temukan kekuatan dan potensi dalam keterbatasan diri. Majalah ini berisi kisah inspiratif tentang orang-orang yang berhasil mencapai kesuksesan meskipun memiliki keterbatasan fisik atau mental.",
                "release" => "2024-01-01",
                "views" => 14,
                "link" => "https://lmizakat.org/majalah/2024/1_ZAKATO_Januari_2024.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2024/Februari_2024.png",
                "title" => "Bukan Sekadar Karya",
                "slug" => "bukan-sekadar-karya",
                "description" => "Lebih dari sekadar cerita fiksi, pelajari nilai-nilai moral dan pesan mendalam dalam serial Arya. Majalah ini membahas tentang karakter-karakter dalam serial Arya, makna di balik cerita, dan relevansinya dengan kehidupan nyata.",
                "release" => "2024-02-01",
                "views" => 16,
                "link" => "https://lmizakat.org/majalah/2024/2_ZAKATO_Februari_2024.pdf",
                "user_id" => 1,
            ],

            [
                "image" => "https://lmizakat.org/majalah/2024/Maret_2024.png",
                "title" => "Ramadhan #BahagiaBersama",
                "slug" => "ramadhan-bahagiabersama",
                "description" => "Ciptakan momen Ramadhan yang penuh dengan kebahagiaan dan kebersamaan. Majalah ini berisi ide-ide kreatif untuk mengisi kegiatan Ramadhan bersama keluarga dan komunitas.",
                "release" => "2024-03-01",
                "views" => 2,
                "link" => "https://lmizakat.org/majalah/2024/3_ZAKATO_Maret_2024.pdf",
                "user_id" => 1,
            ],

        ];

        foreach ($magazines as $magazine) {
            Magazine::create($magazine);
        }
    }
}
