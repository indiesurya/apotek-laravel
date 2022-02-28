<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Obat;
use App\Models\User;
use App\Models\Kategori;
use App\Models\Pemasukan;
use App\Models\Pengeluaran;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        Obat::create([
            'nama' => 'Kalpanax',
            'kode' => '678',
            'kategori_id' => 1,
            'kegunaan' => 'pilek',
            'distributor' => 'PT.amalia',
            'stok' => 40,
            'harga' => 7000
        ]);
        Obat::create([
            'nama' => 'Panadol',
            'kode' => '6782',
            'kategori_id' => 1,
            'kegunaan' => 'pilek',
            'distributor' => 'PT.amalia',
            'stok' => 40,
            'harga' => 2000
        ]);
        Obat::create([
            'nama' => 'Paracetamol',
            'kode' => '6718',
            'kategori_id' => 2,
            'kegunaan' => 'batuk',
            'distributor' => 'PT.sentosa',
            'stok' => 50,
            'harga' => 8000
        ]);
        Obat::create([
            'nama' => 'Duckbil',
            'kode' => '68',
            'kategori_id' => 3,
            'kegunaan' => 'batuk',
            'distributor' => 'PT.yontosa',
            'stok' => 50,
            'harga' => 6000
        ]);
        Kategori::create([
            'nama' => 'Pil'
        ]);
        Kategori::create([
            'nama' => 'Sirup'
        ]);
        Kategori::create([
            'nama' => 'Masker'
        ]);
        User::create([
            'name' => 'indie surya',
            'email' => 'indie@gmail.com',
            'password' => bcrypt('12345')
        ]);
        User::create([
            'name' => 'indrasurya',
            'email' => 'indrasurayae@gmail.com',
            'password' => bcrypt('12345')
        ]);
        User::create([
            'name' => 'idewalaksana',
            'email' => 'indewalaksana@gmail.com',
            'password' => bcrypt('12345')
        ]);
        User::create([
            'name' => 'malika',
            'email' => 'malika@gmail.com',
            'password' => bcrypt('12345')
        ]);
        Pemasukan::create([
            'nama'=>'duckbil',
            'jumlah'=> 4,
            'harga'=> 6000,
            'total'=> 24000,
            'user_id'=>1
        ]);
        Pemasukan::create([
            'nama' => 'kalpanax',
            'jumlah' => 4,
            'harga' => 7000,
            'total' => 28000,
            'user_id' => 1
        ]);
        Pemasukan::create([
            'nama' => 'kalpanax',
            'jumlah' => 2,
            'harga' => 7000,
            'total' => 14000,
            'user_id' => 3
        ]);
        Pengeluaran::create([
            'nama' => 'beli aqua galon',
            'total' => 50000,
            'user_id' => 4,
            'bukti' => '1.jpg'
        ]);
        Pengeluaran::create([
            'nama' => 'beli aqua tanggung',
            'total' => 8000,
            'user_id' => 2,
            'bukti' => '2.jpg'
        ]);
        Pengeluaran::create([
            'nama' => 'beli lampu',
            'total' => 6000,
            'user_id' => 1,
            'bukti' => '1.jpg'
        ]);
    }
}
