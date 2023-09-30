<?php

namespace Database\Seeders;

use App\Models\JenisSoal;
use App\Models\KategoriSoal;
use App\Models\TingkatSoal;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // todo : membuat data kategoriSoal
        $dataKategoriSoal = new KategoriSoal();
        $dataKategoriSoal::create([
            'kategoriSoal' => 'Pengetahuan',
            'descripsi' => 'Soal-soal pengetahuan menguji pemahaman dasar tentang fakta, konsep, atau informasi yang relevan dengan subjek atau topik tertentu. Jenis-jenis soal ini dapat meliputi pertanyaan pilihan ganda, pertanyaan singkat, definisi, dan pertanyaan benar/salah.',
        ]);
        $dataKategoriSoal::create([
            'kategoriSoal' => 'Keterampilan',
            'descripsi' => 'Kategori ini menguji kemampuan peserta dalam menerapkan pengetahuan mereka untuk memecahkan masalah atau melaksanakan tugas tertentu. Soal keterampilan dapat berbentuk pertanyaan esai, studi kasus, simulasi, atau permasalahan yang harus dipecahkan.',
        ]);
        $dataKategoriSoal::create([
            'kategoriSoal' => 'Pemahanam Konsep',
            'descripsi' => 'Soal pemahaman konsep menguji pemahaman mendalam peserta tentang konsep-konsep kunci dalam subjek tertentu. Ini dapat termasuk analisis, pembandingan, dan penjelasan konsep-konsep tersebut.',
        ]);
        $dataKategoriSoal::create([
            'kategoriSoal' => 'Pemecahan Masalah',
            'descripsi' => 'Kategori ini fokus pada kemampuan peserta untuk mengidentifikasi masalah, merencanakan solusi, dan menjelaskan proses pemecahan masalah. Soal-soal ini seringkali berbentuk studi kasus atau situasi nyata yang memerlukan pemecahan masalah.',
        ]);
        // todo : membuat data jenisSoal
        $dataJenisSoal = new JenisSoal();
        $dataJenisSoal::create([
            'jenisSoal' => 'Soal Pilihan Ganda (Multiple Choice Questions - MCQ)',
            'descripsi' => 'Soal pilihan ganda adalah soal di mana peserta ujian diminta untuk memilih jawaban yang benar dari beberapa pilihan yang diberikan. Soal ini dapat digunakan untuk menguji pemahaman konsep, fakta, atau bahkan penalaran.',
        ]);
        $dataJenisSoal::create([
            'jenisSoal' => 'Soal Benar atau Salah (True/False Questions)',
            'descripsi' => 'Soal ini mengharuskan peserta ujian untuk memutuskan apakah pernyataan yang diberikan adalah benar atau salah. Soal ini sering digunakan untuk menguji pemahaman dasar terhadap fakta atau konsep tertentu.',
        ]);
        $dataJenisSoal::create([
            'jenisSoal' => 'Soal Isian Singkat (Fill in the Blanks)',
            'descripsi' => 'Soal esai meminta peserta ujian untuk memberikan jawaban yang lebih rinci dan naratif terhadap pertanyaan yang diajukan. Soal ini mengukur pemahaman mendalam, kemampuan analisis, penalaran, dan pemecahan masalah.',
        ]);
        $dataJenisSoal::create([
            'jenisSoal' => 'Soal Perhitungan (Mathematical Questions)',
            'descripsi' => 'Soal ini melibatkan perhitungan matematika, seperti soal aritmetika, aljabar, geometri, statistik, dan lain-lain. Soal perhitungan menguji pemahaman konsep matematika dan kemampuan untuk menerapkan rumus dan metode perhitungan.',
        ]);
        $dataJenisSoal::create([
            'jenisSoal' => 'Soal Penalaran (Reasoning Questions)',
            'descripsi' => 'Soal penalaran menguji kemampuan peserta ujian untuk membuat inferensi logis, mengevaluasi argumen, atau memecahkan masalah yang melibatkan pemikiran kritis. Contoh jenis soal ini adalah soal logika dan soal penalaran deduktif.',
        ]);
        $dataJenisSoal::create([
            'jenisSoal' => 'Soal Berbasis Kasus (Case-Based Questions)',
            'descripsi' => 'Peserta ujian diberikan sebuah kasus atau skenario yang kompleks, dan mereka diminta untuk menjawab pertanyaan atau mengambil keputusan berdasarkan informasi yang diberikan dalam kasus tersebut. Soal ini menguji kemampuan menerapkan pengetahuan dalam konteks nyata.',
        ]);
        $dataJenisSoal::create([
            'jenisSoal' => 'Soal Praktikum (Practical Questions)',
            'descripsi' => 'Soal ini menguji kemampuan peserta ujian untuk melakukan tugas praktis, seperti penggunaan perangkat lunak, eksperimen laboratorium, atau keterampilan praktis lainnya.',
        ]);
        $dataJenisSoal::create([
            'jenisSoal' => 'Soal Komprehensif (Comprehensive Questions)',
            'descripsi' => 'Soal ini mencakup berbagai aspek materi pelajaran dan mengharuskan peserta ujian untuk menggabungkan pengetahuan mereka dari berbagai topik.',
        ]);
        // todo : membuat data tingkatan soal
        $dataTingkatSoal = new TingkatSoal();
        $dataTingkatSoal::create([
            'tingkatSoal' => 'Mudah',
            'descripsi' => 'Soal ini dirancang untuk menguji pemahaman dasar atau konsep dasar dari suatu topik. Jawaban biasanya dapat ditemukan dengan mudah dalam materi pelajaran yang diajarkan.',
        ]);
        $dataTingkatSoal::create([
            'tingkatSoal' => 'Sedang',
            'descripsi' => 'Soal ini memiliki tingkat kesulitan yang sedang. Mereka mengharuskan pemahaman yang lebih dalam tentang topik tertentu dan mungkin mengharuskan pemecahan masalah yang sederhana.',
        ]);
        $dataTingkatSoal::create([
            'tingkatSoal' => 'Sulit',
            'descripsi' => 'Soal-soal ini memiliki tingkat kesulitan yang tinggi dan seringkali mengharuskan pemahaman konsep yang lebih dalam, analisis yang lebih mendalam, dan penerapan pengetahuan yang lebih rumit.',
        ]);
        $dataTingkatSoal::create([
            'tingkatSoal' => 'Kreatif',
            'descripsi' => 'Soal-soal kreatif mengharuskan peserta ujian untuk berpikir kreatif, membuat solusi yang inovatif, atau menghubungkan berbagai konsep dalam konteks yang baru.',
        ]);
        $dataTingkatSoal::create([
            'tingkatSoal' => 'Penelaran',
            'descripsi' => 'Soal ini menguji kemampuan peserta ujian untuk melakukan penalaran logis, mengevaluasi argumen, dan membuat kesimpulan yang tepat berdasarkan informasi yang diberikan.',
        ]);
        $dataTingkatSoal::create([
            'tingkatSoal' => 'Praktis',
            'descripsi' => 'Soal-soal praktis mengharuskan peserta ujian untuk menerapkan pengetahuan dalam situasi dunia nyata atau menyelesaikan masalah yang melibatkan keterampilan praktis.',
        ]);
        $dataTingkatSoal::create([
            'tingkatSoal' => 'Analisis',
            'descripsi' => 'Soal ini mengharuskan peserta ujian untuk menganalisis informasi atau data yang diberikan, mengidentifikasi pola atau tren, dan membuat kesimpulan berdasarkan analisis tersebut.',
        ]);
        $dataTingkatSoal::create([
            'tingkatSoal' => 'Berbasis Kasus',
            'descripsi' => 'Peserta ujian diberikan sebuah kasus atau skenario yang kompleks, dan mereka diminta untuk menjawab pertanyaan atau mengambil keputusan berdasarkan informasi dalam kasus tersebut.',
        ]);
        $dataTingkatSoal::create([
            'tingkatSoal' => 'Essay',
            'descripsi' => 'Soal esai mengharuskan peserta ujian untuk memberikan jawaban yang lebih mendalam dan naratif terhadap pertanyaan yang diajukan. Mereka sering memerlukan pemikiran analitis dan argumentasi yang kuat.',
        ]);
        $dataTingkatSoal::create([
            'tingkatSoal' => 'Praktikum',
            'descripsi' => ' Soal-soal praktikum meminta peserta ujian untuk melakukan tugas praktis atau menyelesaikan masalah dalam konteks praktis, seperti penggunaan perangkat lunak atau eksperimen laboratorium.',
        ]);
        $dataTingkatSoal::create([
            'tingkatSoal' => 'Ujian Formatif',
            'descripsi' => ' Soal-soal ini digunakan untuk mengukur pemahaman siswa sepanjang proses pembelajaran dan dapat digunakan untuk memberikan umpan balik yang dapat meningkatkan pemahaman mereka.',
        ]);
        $dataTingkatSoal::create([
            'tingkatSoal' => 'Ujian Sumatif',
            'descripsi' => 'Soal-soal ini digunakan untuk mengevaluasi pemahaman siswa setelah selesai belajar dalam suatu periode waktu tertentu, seperti ujian akhir semester atau ujian akhir tahun.',
        ]);
    }
}
