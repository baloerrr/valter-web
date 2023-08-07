<?php

namespace Database\Seeders;

use App\Models\dokumentasi;
use App\Models\Kegiatan;
use App\Models\Sponsor;
use App\Models\Timeline;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Type\Time;

class KegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kegiatan::factory()->create([
            'nama_kegiatan' => 'Lomba Web Design',
            'deskripsi' => '<p>Perlombaan web design adalah kompetisi tingkat nasional, di mana peserta bersaing untuk merancang dan mengembangkan desain website yang kreatif, fungsional, dan menarik secara visual.Dalam perlombaan ini, peserta dinilai berdasarkan beberapa faktor utama. Pertama, desain visual menjadi penilaian utama, dengan kualitas desain grafis, estetika, dan keselarasan elemen-elemen visual dalam website menjadi fokus. Selain itu, pengalaman pengguna juga menjadi hal yang penting, di mana peserta harus menciptakan pengalaman yang nyaman, mudah dinavigasi, dan responsif terhadap berbagai perangkat. Fungsionalitas website juga dievaluasi, termasuk integrasi fitur-fitur yang relevan. Kesesuaian dengan topik atau tema yang ditetapkan dalam perlombaan juga menjadi pertimbangan, serta inovasi dan kreativitas dalam pendekatan yang diambil oleh peserta. Perlombaan web design memberikan kesempatan bagi peserta untuk mengeksplorasi bakat dan kemampuan mereka, sambil belajar dari peserta lain, mendapatkan umpan balik, dan membangun portofolio yang kuat untuk karir di bidang desain web.</p>',
            'gambar' => 'assets/img/valter/MASKOT_LOMBA WEB DESAIN.png',
            'poster' => 'assets/img/valter/POSTER_LOMBA VALTER 23.jpg',
            'slug' => 'lomba-web-design'
        ]);

        Kegiatan::factory()->create([
            'nama_kegiatan' => 'Lomba Design Logo',
            'deskripsi' => 'Desain Logo adalah salah satu kompetisi tingkat nasional dalam ajang Fesival Multimedia 
            dan Komputer 2023 (VALTER 2023) yang diselenggarakan oleh Jurusan Teknik Komputer 
            Politeknik Negeri Sriwijaya. Kompetisi ini menantang peserta tingkat mahasiswa diseluruh 
            Indonesia untuk membuat desain logo dari tema yang telah mereka tentukan sendiri. Peserta 
            ditantang untuk mengeksplorasi ide-ide kreatif dan inovatif dalam merancang logo yang 
            merupakan identitas visual dari sebuah organisasi.',
            'gambar' => 'assets/img/valter/MASKOT_LOMBA LOGO.png',
            'poster' => 'assets/img/valter/POSTER_LOMBA VALTER 23.jpg',
            'slug' => 'lomba-design-logo'
        ]);
        Kegiatan::factory()->create([
            'nama_kegiatan' => 'Lomba Mobile Legend',
            'deskripsi' => 'Mobile Legends (ML) adalah sebuah permainan mobile berjenis MOBA (Multiplayer 
            Online Battle Arena) yang dikembangkan dan diterbitkan oleh Moonton. Tidak bisa 
            dipungkiri lagi ML adalah salah satu game yang sangat digandrungi remaja saat ini, 
            dalam rangkaian Festival Multimedia dan Komputer 2023 (VALTER 2023) kami 
            memasukkan ML sebagai salah satu dari cabang lomba yang diadakan. Kegiatan ini 
            bertujuan untuk meningkatkan skill generasi muda dalam ranah e-sport dan juga 
            mempererat tali silaturahmi para mahasiswa dilingkup Politeknik Negeri Sriwijaya
            khususnya Teknik Komputer POLSRI. Untuk itu, kami mengajak kamu semua untuk 
            ikutan kompetisi Mobile Legends Festival Multimedia dan Komputer 2023 (VALTER 
            2023)',
            'gambar' => 'assets/img/valter/MASKOT_LOMBA ML.png',
            'poster' => 'assets/img/valter/POSTER_LOMBA VALTER 23.jpg',
            'slug' => 'lomba-mobile-legend'
        ]);
        Kegiatan::factory()->create([
            'nama_kegiatan' => 'Seminar',
            'deskripsi' => 'Seminar merupakan salah satu agenda dari rangkaian acara pada Festival Multimedia 
            dan Teknik Komputer (VALTER) 2023. Seminar Valter 2023 akan menjadi media dalam 
            menyampaikan informasi maupun bertukar pikiran antara narasumber dan peserta 
            khususnya pada bidang teknologi.',
            'gambar' => 'assets/img/valter/MASKOT_SEMINAR.png',
            'poster' => 'assets/img/valter/POSTER_SEMINAR VALTER 23.jpg',
            'slug' => 'seminar'
        ]);
        Kegiatan::factory()->create([
            'nama_kegiatan' => 'Pelatihan',
            'deskripsi' => '<p>Kegiatan Festival Multimedia dan Komputer 2023 (VALTER 2023) merupakan 
            kegiatan yang diselenggarakan oleh Himpunan Mahasiswa Jurusan Teknik Komputer 
            Politeknik Negeri Sriwijaya yang terdiri dari pelatihan tingkat Regional (se-Politeknik 
            Negeri Sriwijaya), dimana pelatihan yang akan dilaksanakan yaitu pelatihan UI/UX 
            Desain.</p>
            <p>Pelatihan UI/UX Desain merupakan kegiatan yang ditargetkan untuk mahasiswa – mahasiswi 
            umum dengan tujuan memberikan informasi mengenai cara membuat desain antarmuka dan 
            pengalaman pengguna dalam aplikasi mobile yang benar yang disampaikan oleh narasumber 
            yang berkompeten di bidang tersebut, serta ditambah adanya info-info dan tips dan trik terkait 
            UI/UX. Untuk menciptakan sebuah hasil karya desain antarmuka yang bagus bukanlah 
            sebuah hal yang mudah untuk kita lakukan, untuk itu Himpunan Mahasiswa Jurusan 
            Teknik Komputer melakukan sebuah pelatihan UI/UX desain bertemakan “VT23: How 
            to stand out in the crowd” yang informatif dan mengandung makna khusus. Tujuan 
            Pelatihan UI/UX Desain ini yaitu peserta diharapkan dapat mendesain antarmuka dalam 
            aplikasi mobile untuk membuat promosi yang menarik dan juga mengembangkan 
            kreatifitas pelajar dan mahasiswa dalam mendesain suatu bentuk kehidupan, 
            pengalaman, atau fenomena.</p>',
            'gambar' => 'assets/img/valter/MASKOT_PELATIHAN.png',
            'poster' => 'assets/img/valter/POSTER_PELATIHAN VALTER 23.jpg',
            'slug' => 'pelatihan'
        ]);

        dokumentasi::factory()->create([
            'foto' => 'assets/img/valter/IMG_0210.JPG'
        ]);
        dokumentasi::factory()->create([
            'foto' => 'assets/img/valter/IMG_0233.JPG'
        ]);
        dokumentasi::factory()->create([
            'foto' => 'assets/img/valter/IMG_0264.JPG'
        ]);
        dokumentasi::factory()->create([
            'foto' => 'assets/img/valter/IMG_0273.JPG'
        ]);
        dokumentasi::factory()->create([
            'foto' => 'assets/img/valter/IMG_0299.JPG'
        ]);
        dokumentasi::factory()->create([
            'foto' => 'assets/img/valter/IMG_0307.JPG'
        ]);
        dokumentasi::factory()->create([
            'foto' => 'assets/img/valter/IMG_0322.JPG'
        ]);
        dokumentasi::factory()->create([
            'foto' => 'assets/img/valter/IMG_0356.JPG'
        ]);
        dokumentasi::factory()->create([
            'foto' => 'assets/img/valter/IMG_0384.JPG'
        ]);
        dokumentasi::factory()->create([
            'foto' => 'assets/img/valter/IMG_0415.JPG'
        ]);
        dokumentasi::factory()->create([
            'foto' => 'assets/img/valter/IMG_0548.JPG'
        ]);
        dokumentasi::factory()->create([
            'foto' => 'assets/img/valter/IMG_0595.JPG'
        ]);



        Timeline::factory()->create([
            'gambar' => 'assets/img/valter/ASSET TIMELINE_1.jpg',
            'kegiatan' => 'Pembukaan Pendaftaran Seluruh Kegiatan',
            'tanggal' => '8 Agustus'
        ]);
        Timeline::factory()->create([
            'gambar' => 'assets/img/valter/ASSET TIMELINE_2.jpg',
            'kegiatan' => 'Penutupan Pendaftaran Lomba',
            'tanggal' => '20 September'
        ]);
        Timeline::factory()->create([
            'gambar' => 'assets/img/valter/ASSET TIMELINE_3.jpg',
            'kegiatan' => 'Technical Meeting Perlombaan ',
            'tanggal' => '22-23 September'
        ]);
        Timeline::factory()->create([
            'gambar' => 'assets/img/valter/ASSET TIMELINE_4.jpg',
            'kegiatan' => 'Pengumpulan Karya dan Proposal/Design Brief',
            'tanggal' => '26 September'
        ]);
        Timeline::factory()->create([
            'gambar' => 'assets/img/valter/ASSET TIMELINE_5.jpg',
            'kegiatan' => 'Penyisihan Lomba Web dan Logo',
            'tanggal' => '27 Sept-1 Oktober'
        ]);
        Timeline::factory()->create([
            'gambar' => 'assets/img/valter/ASSET TIMELINE_6.jpg',
            'kegiatan' => 'Pengumuman Finalis Lomba Web dan Logo',
            'tanggal' => '2 Oktober'
        ]);
        Timeline::factory()->create([
            'gambar' => 'assets/img/valter/ASSET TIMELINE_7.jpg',
            'kegiatan' => 'Penutupan Pendaftaran Pelatihan dan Seminar',
            'tanggal' => '2 Oktober'
        ]);
        Timeline::factory()->create([
            'gambar' => 'assets/img/valter/ASSET TIMELINE_8.jpg',
            'kegiatan' => 'Pembukaan Valter23 dan Presentasi Lomba Logo',
            'tanggal' => '3 Oktober'
        ]);

        Sponsor::factory()->create([
            'gambar' => '/assets/img/valter/Karyawan-patra-pertamina.PNG'
        ]);
        Sponsor::factory()->create([
            'gambar' => '/assets/img/valter/Logo-PTBA-R3011-colour.png'
        ]);
        Sponsor::factory()->create([
            'gambar' => '/assets/img/valter/pt.sinar anyar abadi.png'
        ]);
    }
}
