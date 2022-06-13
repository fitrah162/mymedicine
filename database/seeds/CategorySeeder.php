<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' =>'ANALGESIK NARKOTIK',
            'description' =>''
        ]);
        DB::table('categories')->insert([
            'name' =>'ANALGESIK NON NARKOTIK',
            'description' =>''
        ]);
        DB::table('categories')->insert([
            'name' =>'ANTIPIRAI',
            'description' =>''
        ]);
        DB::table('categories')->insert([
            'name' =>'NYERI NEUROPATIK',
            'description' =>''
        ]);
        DB::table('categories')->insert([
            'name' =>'ANESTETIK LOKAL',
            'description' =>''
        ]);
        DB::table('categories')->insert([
            'name' =>'ANESTETIK UMUM dan OKSIGEN',
            'description' =>''
        ]);
        DB::table('categories')->insert([
            'name' =>'OBAT untuk PROSEDUR PRE OPERATIF',
            'description' =>''
        ]);
        DB::table('categories')->insert([
            'name' =>'ANTIALERGI dan OBAT untuk ANAFILAKSIS',
            'description' =>''
        ]);
        DB::table('categories')->insert([
            'name' =>'ANTIDOT dan OBAT LAIN untuk KERACUNAN (KHUSUS)',
            'description' =>''
        ]);
        DB::table('categories')->insert([
            'name' =>'ANTIEPILEPSI - ANTIKONVULSI',
            'description' =>''
        ]);


    }
}
