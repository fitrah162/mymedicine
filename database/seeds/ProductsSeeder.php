<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'generic_Name' => 'fentanil',
            'form' => 'inj 0,05 mg/mL (i.m./i.v.) ',
            'restriction_Formula' => '5 amp/kasus',
            'description' => 'Hanya untuk nyeri berat dan harus diberikan oleh tim medis yang dapat melakukan resusitasi.',
            'category' => '1',
            'faskes_TK1' => '0',
            'faskes_TK2' => '1',
            'faskes_TK3' => '1',
            'img'=> 'fentanil_inj_005.jpg',
            'price'=>'25000'
        ]);
        DB::table('products')->insert([
            'generic_Name' => 'fentanil',
            'form' => 'patch 12,5 mcg/jam ',
            'restriction_Formula' => '10 patch/bulan.',
            'description' => '- Untuk nyeri kronik pada
            pasien kanker yang tidak
            terkendali.
            - Tidak untuk nyeri akut.',
            'category' => '1',
            'faskes_TK1' => '0',
            'faskes_TK2' => '1',
            'faskes_TK3' => '1',
            'img'=> 'fentanil_inj_25.jpg',
            'price'=>'40000'
        ]);
        DB::table('products')->insert([
            'generic_Name' => 'fentanil',
            'form' => 'patch 25 mcg/jam ',
            'restriction_Formula' => '10 patch/bulan.',
            'description' => '- Untuk nyeri kronik pada
            pasien kanker yang tidak
            terkendali.
            - Tidak untuk nyeri akut.',
            'category' => '1',
            'faskes_TK1' => '0',
            'faskes_TK2' => '1',
            'faskes_TK3' => '1',
            'img'=> 'fentanil_patch_125.jpg',
            'price'=>'70000'
        ]);
        DB::table('products')->insert([
            'generic_Name' => 'asam mefenamat',
            'form' => 'kaps 250 mg ',
            'restriction_Formula' => '30 kaps/bulan.',
            'description' => '',
            'category' => '2',
            'faskes_TK1' => '1',
            'faskes_TK2' => '1',
            'faskes_TK3' => '1',
            'img'=> 'asam_mefenamat_250.jpg',
            'price'=>'70000'
        ]);
        DB::table('products')->insert([
            'generic_Name' => 'asam mefenamat',
            'form' => 'tab 500 mg ',
            'restriction_Formula' => '30 tab/bulan.',
            'description' => '',
            'category' => '2',
            'faskes_TK1' => '1',
            'faskes_TK2' => '1',
            'faskes_TK3' => '1',
            'img'=> 'asam_mefenamat_500.jpg',
            'price'=>'120000'
        ]);
        DB::table('products')->insert([
            'generic_Name' => 'ibuprofen',
            'form' => 'tab 200 mg ',
            'restriction_Formula' => '30 tab/bulan.',
            'description' => '',
            'category' => '2',
            'faskes_TK1' => '1',
            'faskes_TK2' => '1',
            'faskes_TK3' => '1',
            'img'=> 'ibuprofentab_200mg.jpg',
            'price'=>'67000'
            
        ]);
        DB::table('products')->insert([
            'generic_Name' => 'alopurinol ',
            'form' => 'tab 100 mg* ',
            'restriction_Formula' => '30 tab/bulan',
            'description' => 'Tidak diberikan pada saat nyeri akut.',
            'category' => '3',
            'faskes_TK1' => '1',
            'faskes_TK2' => '1',
            'faskes_TK3' => '1',
            'img'=> 'alopurinol_tab_100mg.jpg',
            'price'=>'85000'
        ]);
        DB::table('products')->insert([
            'generic_Name' => 'alopurinol ',
            'form' => 'tab 300 mg* ',
            'restriction_Formula' => '30 tab/bulan',
            'description' => 'Tidak diberikan pada saat nyeri akut.',
            'category' => '3',
            'faskes_TK1' => '1',
            'faskes_TK2' => '1',
            'faskes_TK3' => '1',
            'img'=> 'alopurinol-normon-300-mg-comprimidos.jpg',
            'price'=>'115000'
            
        ]);
        DB::table('products')->insert([
            'generic_Name' => 'kolkisin ',
            'form' => 'tab 500 mcg ',
            'restriction_Formula' => '30 tab/bulan',
            'description' => 'Tidak diberikan pada saat nyeri akut.',
            'category' => '3',
            'faskes_TK1' => '1',
            'faskes_TK2' => '1',
            'faskes_TK3' => '1',
            'img'=> 'kolkisin_tab_500_mcg.png',
            'price'=>'145000'
            
        ]);
        //category 4
        DB::table('products')->insert([
            'generic_Name' => 'kolkisin ',
            'form' => 'tab 25 mg ',
            'restriction_Formula' => '30 tab/bulan.',
            'description' => '',
            'category' => '4',
            'faskes_TK1' => '1',
            'faskes_TK2' => '1',
            'faskes_TK3' => '1',
            'img'=> 'kolkisin_tablet25.jpg',
            'price'=>'48000'
        ]);
        DB::table('products')->insert([
            'generic_Name' => 'gabapentin ',
            'form' => 'kaps 100 mg ',
            'restriction_Formula' => '60 kaps/bulan.',
            'description' => 'Hanya untuk neuralgia pascaherpes
            atau nyeri neuropati diabetikum.',
            'category' => '4',
            'faskes_TK1' => '1',
            'faskes_TK2' => '1',
            'faskes_TK3' => '1',
            'img'=> 'gabapentin_kaps_100mg.jpg',
            'price'=>'55000'
        ]);
        DB::table('products')->insert([
            'generic_Name' => 'gabapentin ',
            'form' => 'kaps 300 mg ',
            'restriction_Formula' => '30 kaps/bulan.',
            'description' => 'Hanya untuk neuralgia pascaherpes
            atau nyeri neuropati diabetikum.',
            'category' => '4',
            'faskes_TK1' => '1',
            'faskes_TK2' => '1',
            'faskes_TK3' => '1',
            'img'=> 'gabapentin_kaps_300mg.jpg',
            'price'=>'95000'
        ]);
        //category 5
        DB::table('products')->insert([
            'generic_Name' => 'bupivakain ',
            'form' => 'inj 0,5% ',
            'restriction_Formula' => '',
            'description' => '',
            'category' => '5',
            'faskes_TK1' => '0',
            'faskes_TK2' => '1',
            'faskes_TK3' => '1',
            'img'=> 'bupivakain_inj_05.jpg',
            'price'=>'82000'
        ]);
        DB::table('products')->insert([
            'generic_Name' => 'lidokain ',
            'form' => 'inj 2%',
            'restriction_Formula' => '',
            'description' => '',
            'category' => '5',
            'faskes_TK1' => '1',
            'faskes_TK2' => '1',
            'faskes_TK3' => '1',
            'img'=> 'lidokain_inj2%.jpg',
            'price'=>'22000'
        ]);
        DB::table('products')->insert([
            'generic_Name' => 'lidokain ',
            'form' => 'spray topikal 10%',
            'restriction_Formula' => '',
            'description' => '',
            'category' => '5',
            'faskes_TK1' => '1',
            'faskes_TK2' => '1',
            'faskes_TK3' => '1',
            'img'=> 'lidokain_spray10%.jpg',
            'price'=>'52000'
        ]);
        //category 6
        DB::table('products')->insert([
            'generic_Name' => 'ketamin ',
            'form' => 'inj 50 mg/mL (i.v.)',
            'restriction_Formula' => '',
            'description' => '',
            'category' => '6',
            'faskes_TK1' => '0',
            'faskes_TK2' => '1',
            'faskes_TK3' => '1',
            'img'=> 'ketamin_inj_50_mgml.jpg',
            'price'=>'72000'
        ]);
        DB::table('products')->insert([
            'generic_Name' => 'ketamin ',
            'form' => 'inj 100 mg/mL (i.v.)',
            'restriction_Formula' => '',
            'description' => '',
            'category' => '6',
            'faskes_TK1' => '0',
            'faskes_TK2' => '1',
            'faskes_TK3' => '1',
            'img'=> 'ketamin_inj_100_mgml.jpg',
            'price'=>'92000'
        ]);
        DB::table('products')->insert([
            'generic_Name' => 'propofol ',
            'form' => 'inj 1% ',
            'restriction_Formula' => '',
            'description' => '',
            'category' => '6',
            'faskes_TK1' => '0',
            'faskes_TK2' => '1',
            'faskes_TK3' => '1',
            'img'=> 'propofol1%.jpg',
            'price'=>'32000'
        ]);
        //category 7
        DB::table('products')->insert([
            'generic_Name' => 'atropin ',
            'form' => 'inj 0,25 mg/mL (i.v./s.k.) ',
            'restriction_Formula' => '',
            'description' => '',
            'category' => '7',
            'faskes_TK1' => '1',
            'faskes_TK2' => '1',
            'faskes_TK3' => '1',
            'img'=> 'atropin_inj_025.jpg',
            'price'=>'72000'
        ]);
        DB::table('products')->insert([
            'generic_Name' => 'midazolam ',
            'form' => 'inj 1 mg/mL (i.v.) ',
            'restriction_Formula' => ' Dosis rumatan:
            1 mg/jam (24
            mg/hari).
            - Dosis premedikasi:
            8 vial/kasus.',
            'description' => 'Dapat digunakan untuk premedikasi
            sebelum induksi anestesi dan
            rumatan selama anestesi umum.',
            'category' => '7',
            'faskes_TK1' => '0',
            'faskes_TK2' => '1',
            'faskes_TK3' => '1',
            'img'=> 'midazolam_inj_1mg.jpg',
            'price'=>'42000'
        ]);
        DB::table('products')->insert([
            'generic_Name' => 'midazolam ',
            'form' => 'inj 5 mg/mL (i.v.) ',
            'restriction_Formula' => ' Dosis rumatan:
            1 mg/jam (24
            mg/hari).
            - Dosis premedikasi:
            8 vial/kasus.',
            'description' => 'Dapat digunakan untuk premedikasi
            sebelum induksi anestesi dan
            rumatan selama anestesi umum.',
            'category' => '7',
            'faskes_TK1' => '0',
            'faskes_TK2' => '1',
            'faskes_TK3' => '1',
            'img'=> 'midazolam_inj_5mg.jpg',
            'price'=>'72000'
        ]);
        //category 8
        DB::table('products')->insert([
            'generic_Name' => 'deksametason ',
            'form' => 'inj 5 mg/mL ',
            'restriction_Formula' => '20 mg/hari.',
            'description' => '',
            'category' => '8',
            'faskes_TK1' => '1',
            'faskes_TK2' => '1',
            'faskes_TK3' => '1',
            'img'=> 'deksametason_inj_5mg.jpg',
            'price'=>'62000'
        ]);
        DB::table('products')->insert([
            'generic_Name' => 'difenhidramin ',
            'form' => 'inj 10 mg/mL (i.v./i.m.)  ',
            'restriction_Formula' => '30 mg/hari.',
            'description' => '',
            'category' => '8',
            'faskes_TK1' => '1',
            'faskes_TK2' => '1',
            'faskes_TK3' => '1',
            'img'=> 'difenhidramin_inj_10mg.jpg',
            'price'=>'42000'
        ]);
        DB::table('products')->insert([
            'generic_Name' => 'epinefrin (adrenalin) ',
            'form' => 'inj 1 mg/mL  ',
            'restriction_Formula' => '',
            'description' => '',
            'category' => '8',
            'faskes_TK1' => '1',
            'faskes_TK2' => '1',
            'faskes_TK3' => '1',
            'img'=> 'epinefrin_adrenalin_inj_1_mg_ml.jpg',
            'price'=>'132000'
        ]);
        //category 9
        DB::table('products')->insert([
            'generic_Name' => 'atropin ',
            'form' => 'tab 0,5 mg  ',
            'restriction_Formula' => '',
            'description' => '',
            'category' => '9',
            'faskes_TK1' => '1',
            'faskes_TK2' => '1',
            'faskes_TK3' => '1',
            'img'=> 'atropin_inj_025.jpg',
            'price'=>'68000'
        ]);
        DB::table('products')->insert([
            'generic_Name' => 'atropin ',
            'form' => 'inj 0,25 mg/mL (i.v.)  ',
            'restriction_Formula' => '',
            'description' => '',
            'category' => '9',
            'faskes_TK1' => '1',
            'faskes_TK2' => '1',
            'faskes_TK3' => '1',
            'img'=> 'atropin_tab_05mg.jpg',
            'price'=>'88000'
        ]);
        DB::table('products')->insert([
            'generic_Name' => 'efedrin ',
            'form' => 'inj 50 mg/mL  ',
            'restriction_Formula' => '',
            'description' => '',
            'category' => '9',
            'faskes_TK1' => '0',
            'faskes_TK2' => '1',
            'faskes_TK3' => '1',
            'img'=> 'efedrin_inj_50mg_ml.jpg',
            'price'=>'77000'
        ]);
        //category 10
        DB::table('products')->insert([
            'generic_Name' => 'fenitoin ',
            'form' => 'kaps 30 mg*  ',
            'restriction_Formula' => '90 kaps/bulan.',
            'description' => '',
            'category' => '10',
            'faskes_TK1' => '1',
            'faskes_TK2' => '1',
            'faskes_TK3' => '1',
            'img'=> 'fenitoin_kaps_30mg.jpg',
            'price'=>'97000'
        ]);
        DB::table('products')->insert([
            'generic_Name' => 'fenitoin ',
            'form' => 'kaps 100 mg*  ',
            'restriction_Formula' => '120 kaps/bulan.',
            'description' => '',
            'category' => '10',
            'faskes_TK1' => '1',
            'faskes_TK2' => '1',
            'faskes_TK3' => '1',
            'img'=> 'fenitoin_kaps_100mg.jpg',
            'price'=>'127000'
        ]);
        DB::table('products')->insert([
            'generic_Name' => 'fenitoin ',
            'form' => 'inj 50 mg/mL  ',
            'restriction_Formula' => 'Untuk status
            epileptikus, dapat
            diberikan hingga
            dosis 15 - 30
            mg/kgBB di Faskes
            Tk. 2 dan 3.',
            'description' => 'Dapat digunakan untuk status
            konvulsivus',
            'category' => '10',
            'faskes_TK1' => '1',
            'faskes_TK2' => '1',
            'faskes_TK3' => '1',
            'img'=> 'fenitoin_inj_100mg.webp',
            'price'=>'147000'
            
        ]);

        
        
    }
}
