<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\PageContent;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    public function run(): void
    {
        $original = json_decode(<<<'JSON'
{"title": "Mengenal Jurusan Desain Produk", "slug": "mengenal-jurusan-desain-produk", "category": "Informasi Jurusan", "excerpt": "Apa yang dipelajari di Desain Produk, prospek kerja, dan portofolio seperti apa yang dicari kampus.", "summary": null, "body": "## Apa itu Desain Produk?\n\nDesain Produk adalah bidang yang merancang benda pakai — dari kursi, sepeda, perangkat elektronik, hingga kemasan — agar berfungsi baik, nyaman digunakan, aman, dan menarik secara visual. Di ITB, program studi ini berada di bawah Fakultas Seni Rupa dan Desain (FSRD).\n\nBerbeda dengan DKV yang berfokus pada komunikasi visual dua dimensi, Desain Produk bekerja dengan bentuk tiga dimensi, material, dan proses produksi. Kamu akan sering berurusan dengan sketsa, model 3D, dan prototipe fisik.\n\n“Desainer produk yang baik memikirkan orang yang memakainya, bukan hanya bentuknya.”\n\n## Apa yang dipelajari?\n\n### 1. Dasar-dasar desain\n\nNirmana dua dan tiga dimensi, gambar teknik, gambar bentuk, teori warna, serta sejarah desain. Ini fondasi yang juga diujikan saat seleksi masuk lewat portofolio.\n\n### 2. Desain produk fisik\n\nErgonomi, material dan proses manufaktur, mekanika dasar, hingga studio desain produk yang menghasilkan prototipe nyata setiap semester.\n\n### 3. Teknologi dan software\n\nPemodelan 3D (Rhino, SolidWorks, Blender), rendering, dan 3D printing untuk memvisualisasikan dan menguji rancangan.\n\n### 4. Inovasi dan kreativitas\n\nMetode riset pengguna, design thinking, dan pengembangan konsep — bagaimana menemukan masalah yang layak dipecahkan.\n\n### 5. Manajemen desain dan bisnis\n\nKewirausahaan desain, hak kekayaan intelektual, dan cara membawa produk dari ide ke pasar.\n\n## Prospek kerja\n\n- Desainer produk di industri furnitur, otomotif, elektronik, atau peralatan rumah tangga\n\n- Desainer kemasan dan desainer mainan\n\n- Peneliti pengalaman pengguna (UX researcher) untuk produk fisik-digital\n\n- Wirausaha brand produk sendiri\n\n## Portofolio yang dicari kampus\n\nUntuk jalur SNBP, portofolio berbobot 50%. Kampus mencari gambar naratif yang menunjukkan kemampuan bercerita secara visual, serta karya bebas yang memperlihatkan penguasaan bentuk, proporsi, dan gelap-terang. Untuk Desain Produk, sketsa objek tiga dimensi dari berbagai sudut menjadi nilai tambah.\n\nDi Villa Merah, modul [Intensif SNBP](/program) menyusun portofolio ini secara bertahap — dari dasar menggambar hingga kurasi karya akhir.", "author_name": "Tim Pengajar Villa Merah", "author_type": "Organization", "image": "/assets/img/kegiatan-workshop-maket.webp", "image_alt": "Siswa Villa Merah membuat maket dalam workshop desain", "status": "published", "published_at": "2024-11-05 02:00:00", "is_indexable": true}
JSON, true);
        Article::firstOrCreate(['slug' => $original['slug']], $original);
        foreach (config('content.pages') as $key => $defaults) {
            PageContent::firstOrCreate(['key' => $key], [...$defaults, 'is_indexable' => $key !== 'daftar']);
        }
    }
}
