<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Obat;
use App\Models\User;
use App\Models\Kategori;
use App\Models\Pemasukan;
use App\Models\Pengeluaran;
use App\Models\Distributor;

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
            'kategori_id' => 1,
            'kegunaan' => 'pilek',
            'distributor_id' => 2,
            'stok' => 40,
            'harga' => 7000
        ]);
        Obat::create([
            'nama' => 'Panadol',
            'kategori_id' => 1,
            'kegunaan' => 'pilek',
            'distributor_id' => 1,
            'stok' => 40,
            'harga' => 2000
        ]);
        Obat::create([
            'nama' => 'Paracetamol',
            'kategori_id' => 2,
            'kegunaan' => 'batuk',
            'distributor_id' => 1,
            'stok' => 50,
            'harga' => 8000
        ]);
        Obat::create([
            'nama' => 'Duckbil',
            'kategori_id' => 3,
            'kegunaan' => 'batuk',
            'distributor_id' => 1,
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
            'obat_id'=>4,
            'nama'=>'duckbil',
            'jumlah'=> 4,
            'harga'=> 6000,
            'total'=> 24000,
            'user_id'=>1
        ]);
        Pemasukan::create([
            'obat_id'=>1,
            'nama' => 'kalpanax',
            'jumlah' => 4,
            'harga' => 7000,
            'total' => 28000,
            'user_id' => 1
        ]);
        Pemasukan::create([
            'obat_id'=>1,
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
        Distributor::create([
            'nama' => 'PT.JAWA',
            'alamat' => 'jalan jawa',
            'telepon' => '08976432884',
            'kurir' => 'jawajawaaa'
        ]);
        Distributor::create([
            'nama' => 'PT.BALI',
            'alamat' => 'jalan jawa',
            'telepon' => '08976432884',
            'kurir' => 'jawajawaaa'
        ]);
        Distributor::create([
            'nama' => 'PT.LOMBOK',
            'alamat' => 'jalan jawa',
            'telepon' => '08976432884',
            'kurir' => 'jawajawaaa'
        ]);
    }
}
