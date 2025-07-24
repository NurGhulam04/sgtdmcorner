<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('articles')->truncate();

        $articles = [
            [
                'title' => 'AWARENES TRAINING DALAM MENINGKATKAN SELF AWERENESS PADA KELUARGA DENGAN PENDERITA DIABETES MELLITUS TIPE 2',
                'doi' => '10.31004/cdj.v3i3.8589',
                'file_path' => 'articles/jurnal_1.pdf',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Diabetic foot spa, bueger\'s allen exercise and music therapy on foot sensitivity, the ankle brachial index and sleep quality for diabetes mellitus in Indonesia',
                'doi' => '10.3329/bjms.v22i3.65317',
                'file_path' => 'articles/jurnal_2.pdf',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'ACCEPTANCE AND COMMITMENT THERAPY (ACT) ON INCREASING THE COMPLIANCE OF MANAGEMENT DIABETES MELLITUS TYPE 2',
                'doi' => null,
                'file_path' => 'articles/jurnal_3.pdf',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'BUERGER ALLEN EXERCISE BERPENGARUH TERHADAP KETIDAKEFEKTIFAN PERFUSI JARINGAN PERIFER PADA PENDERITA DIABETES MELLITUS',
                'doi' => '10.32583/keperawatan.v13i3.1324',
                'file_path' => 'articles/jurnal_4.pdf',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Spiritual Mindfulness Based on Benson Relaxation in The Management of Stress Levels Reduction on Type 2 DM Patients',
                'doi' => '10.30874/ksshr.1',
                'file_path' => 'articles/jurnal_5.pdf',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Pengaruh Edukasi Kesehatan Terapi Buerger Allen Exercise Terhadap Pengetahuan Penderita Diabetes Mellitus Dalam Upaya Menurunkan Resiko Gangguan Perfusi Jaringan Perifer',
                'doi' => null,
                'file_path' => 'articles/jurnal_6.pdf',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'PENERAPAN SHALAT DAN DOA TERHADAP PEMAKNAAN HIDUP PADA PASIEN DIABETES MELLITUS',
                'doi' => 'https://doi.org/10.32583/keperawatan.v12i1.607',
                'file_path' => 'articles/jurnal_7.pdf',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('articles')->insert($articles);
    }
}
