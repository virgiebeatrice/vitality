<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ObatvitaminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('obatvitamin')->insert([
            [
                'id'    =>  'b9ec6a3a-7f63-11ee-b962-0242ac120002',
                'id_obatvitamin'    => 'V01',
                'nama'  => 'paracetamol',
                'deskripsi' => 'Paracetamol merupakan obat yang berfungsi untuk meredakan demam dan nyeri, termasuk untuk mengobati nyeri haid hingga sakit gigi yang tersedia dalam bentuk tablet, sirup, tetes, suppositoria dan infus.',
                'obat_dewasa'   =>'500-1.000 mg. 4-6 jam sekali',
                'obat_anak' => '125-500 mg. 4-6 jam sekali'
            ],
            [
                'id'    =>  'b9ec6f08-7f63-11ee-b962-0242ac120002',
                'id_obatvitamin'    => 'V02',
                'nama'  => 'salbutamol',
                'deskripsi' => 'Salbutamol merupakan obat albuterol yang berfungsi melemaskan otot saluran pernapasan. Obat bronkitis ini termasuk dalam bronkodilator, yang ditujukan untuk melegakan saluran pernapasan.
',
                'obat_dewasa'   =>'Dewasa dan anak-anak usia >12 tahun: 2-4 mg, 3-4 kali sehari.',
                'obat_anak' => 'Anak-anak usia 7-12 tahun: 2 mg, 3-4 kali sehari.'
            ],
            [
                'id'    => 'b9ec7048-7f63-11ee-b962-0242ac120002',
                'id_obatvitamin'    =>'V03',
                'nama'  => 'Formoterol',
                'deskripsi' => 'Formoterol adalah obat untuk meredakan gejala penyempitan saluran pernapasan akibat bronkitis, asma, atau penyakit paru obstruktif kronis (PPOK).
                Obat ini juga dapat digunakan untuk mencegah frekuensi kekambuhan serangan asma dan PPOK.
                Formoterol termasuk ke dalam golongan obat bronkodilator jenis agonis beta kerja panjang.
                Obat bronkitis ini bekerja dengan cara merelaksasi otot-otot di saluran pernapasan.
                Dengan begitu, saluran pernapasan yang sebelumnya menyempit dapat lebih melebar dan aliran udara dari dan ke dalam paru-paru akan lebih lancar.',
                'obat_dewasa'   =>'Dewasa: 80/4,5 mcg 1-2 inhalasi 2 kali sehari atau 160/4,5 mcg 1-2 inhalasi 2 kali sehari',
                'obat_anak' =>'Anak (6 tahun keatas) dosis rendah untuk anak 6-11 tahun',

            ],
            [
                'id'    => 'b9ec7174-7f63-11ee-b962-0242ac120002',
                'id_obatvitamin'    =>'V04',
                'nama'  => ' Ipratropium',
                'deskripsi' => 'Ipratropium atau ipratropium bromide adalah obat untuk meredakan dan mencegah gejala karena penyempitan saluran pernapasan (bronkospasme), seperti bronkitis, mengi atau sesak napas, akibat penyakit paru obstruktif kronik (PPOK).',
                'obat_dewasa'   =>'Dewasa dan anak-anak usia >12 tahun: 20–40 mcg, 3–4 kali sehari',
                'obat_anak' =>'Anak-anak usia <6 tahun: 20 mcg, 3 kali sehari',
            ],
            [
                'id'    => 'b9ec72a0-7f63-11ee-b962-0242ac120002',
                'id_obatvitamin'    =>'V05',
                'nama'  => 'Antihistamin',
                'deskripsi' => 'Jika sinusitis disebabkan alergi, maka obat sinusitis yang tepat adalah antihistamin. Obat ini dapat meringankan gejala hidung tersumbat akibat alergi. Belilah obat alergi yang mengandung antihistamin untuk meredakan pilek dan bersin karena alergi. Loratadine adalah salah satu obat yang mengandung antihistamin. Antihistamin biasanya dianjurkan untuk diminum di malam hari karena umumnya dapat menyebabkan efek mengantuk. Bicarakan dengan dokter mengenai jenis antihistamin dan dosis yang tepat.',
                'obat_dewasa'   =>'Dewasa: 25 mg,',
                'obat_anak' =>'Anak berusia 2-5 tahun: 5-15 mg, 1-2 kali sehari. Anak berusia 5-10 tahun: 10-25 mg, 1-2 kali sehari.',
            ],
            [
                'id'    => 'b9ec74f8-7f63-11ee-b962-0242ac120002',
                'id_obatvitamin'    =>'V06',
                'nama'  => 'Dekongestan',
                'deskripsi'   =>'Dekongestan juga merupakan obat untuk sinusitis yang membantu mengurangi berbagai gejala seperti pembengkakan di saluran hidung, serta meredakan hidung tersumbat dan tekanan sinus.
                Dekongestan tersedia dalam bentuk semprotan hidung, seperti oxymetazoline, naphazoline, dan phenylephrine. Selain itu, dekongestan juga tersedia dalam bentuk pil minum, contohnya fenilefrin dan pseudoefedrin.
                Ikuti petunjuk di label kemasan untuk menggunakannya. Jangan menggunakan dekongestan oral lebih dari yang disarankan tanpa berkonsultasi kepada dokter.
                Kamu juga tidak boleh menggunakan semprotan hidung dekongestan lebih dari tiga hari. Pemakaian berlebihan dapat memperburuk gejala sinusitis.
                Selain itu, dekongestan dapat meningkatkan tekanan darah. Jadi, tanya dokter terlebih dahulu jika kamu punya masalah kesehatan lainnya atau sedang minum obat lain.
                Jangan memberikan dekongestan atau obat flu yang dijual bebas kepada anak di bawah usia 4 tahun.',
                'obat_dewasa' => 'Dewasa: 1 hingga 2 kali semprot atau 2 hingga 3 tetes ke setiap lubang hidung, dengan interval 4 sampai 6 jam. (untuk semprot hidung)',
                'obat_anak' =>'Anak-anak: Dosis penggunaan ditentukan langsung oleh dokter berdasarkan usia dan berat badan mereka. (untuk semprot hidung)',
            ],
            [
                'id'    => 'b9ec7624-7f63-11ee-b962-0242ac120002',
                'id_obatvitamin'    =>'V07',
                'nama'  => 'Ibuprofen',
                'deskripsi' => 'Ibuprofen adalah obat untuk untuk meredakan nyeri dan menurunkan deman. Obat ini juga memiliki efek antiradang. Ibuprofen bisa digunakan untuk meredakan nyeri haid, sakit kepala, sakit gigi, nyeri otot, atau nyeri sendi akibat radang sendi. Obat ini tersedia dalam bentuk tablet, kapsul, dan sirop.',
                'obat_dewasa'   =>'Dewasa, dosis yang dianjurkan 200-250 mg 3-4 kali sehari.',
                'obat_anak' =>'Anak 1-2 tahun, 50 mg 3-4 kali sehari. 3-7 tahun, 100-125 mg 3-4 kali sehari. 8-12 tahun, 200-250 mg 3-4 kali sehari.',
            ],
            [
                'id'    => 'b9ec7746-7f63-11ee-b962-0242ac120002',
                'id_obatvitamin'    =>'V08',
                'nama'  => 'Naproxen',
                'deskripsi' => 'Naproxen adalah obat untuk meredakan nyeri, demam, bengkak, dan kemerahan akibat peradangan. Obat ini bisa digunakan untuk mengatasi nyeri pada saat haid, nyeri akibat radang tendon, penyakit asam urat, rheumatoid arthritis, osteoarthritis, atau ankylosing spondylitis.',
                'obat_dewasa'   =>'Dewasa: 550–100 mg per hari, yang bisa dibagi dalam 1 atau 2 jadwal konsumsi.',
                'obat_anak' =>'Anak 12 tahun dosisnya sama seperti orang dewasa',
            ],
            [
                'id'    => 'b9ec7854-7f63-11ee-b962-0242ac120002',
                'id_obatvitamin'    =>'V09',
                'nama'  => 'Aspirin',
                'deskripsi' => 'Aspirin adalah obat untuk meredakan nyeri, demam, dan peradangan. Obat yang juga dikenal dengan nama asam asetisalisilat ini juga digunakan untuk mencegah terbentuknya gumpalan darah sehingga menurunkan risiko terjadinya serangan jantung atau stroke pada penderita penyakit kardiovaskular.  ',
                'obat_dewasa'   =>'Dosis awal 300–900 mg, diberikan setiap 4–6 jam. Dosis maksimal 4.000 mg per hari.',
                'obat_anak' =>'Anak-anak: Dosis penggunaan ditentukan langsung oleh dokter berdasarkan usia dan berat badan mereka.',
            ],
            [
                'id'    => 'b9ec7aac-7f63-11ee-b962-0242ac120002',
                'id_obatvitamin'    =>'V10',
                'nama'  => 'Azithromycin',
                'deskripsi' => 'Azithromycin bermanfaat untuk mengobati infeksi bakteri pada berbagai bagian tubuh, seperti saluran pernapasan, paru-paru, mata, kulit, telinga, tenggorokan, amandel, dan alat kelamin. Obat ini hanya boleh digunakan dengan resep dokter.',
                'obat_dewasa'   =>'500 mg, 1 kali sehari, pada hari pertama. Dilanjutkan dengan 250 mg, 1 kali sehari, pada hari kedua sampai kelima.',
                'obat_anak' =>'10 mg/kgBB pada hari pertama, dilanjutkan dengan 5 mg/kgBB pada hari kedua sampai kelima.',
            ],
            [
                'id'    => 'b9ec7bce-7f63-11ee-b962-0242ac120002',
                'id_obatvitamin'    =>'V11',
                'nama'  => 'Levofloxacin',
                'deskripsi' => ' Levofloxacin adalah obat antibiotik yang bermanfaat untuk mengobati penyakit akibat infeksi bakteri, seperti pneumonia, sinusitis, prostatitis, konjungtivitis, infeksi saluran kemih, dan infeksi kulit. Obat ini tersedia dalam bentuk tablet, tetes mata, dan cairan infus.',
                'obat_dewasa'   =>'Dewasa: 500 mg, 1 kali sehari, selama 8 minggu.',
                'obat_anak' =>'Anak-anak usia ≥6 tahun dengan BB <50 kg: 8 mg/kgBB sampai maksimal 250 mg, 2 kali sehari.',
            ],
            [
                'id'    => 'b9ec7ce6-7f63-11ee-b962-0242ac120002',
                'id_obatvitamin'    =>'V12',
                'nama'  => 'Sulfamethoxazole',
                'deskripsi' => 'obat albuterol yang berfungsi melemaskan otot saluran pernapasan. Obat bronkitis ini termasuk dalam bronkodilator, yang ditujukan untuk melegakan saluran pernapasan.',
                'obat_dewasa'   =>'',
                'obat_anak' =>'',
            ],
            [
                'id'    => 'b9ec7eee-7f63-11ee-b962-0242ac120002',
                'id_obatvitamin'    =>'V13',
                'nama'  => 'Sulfamethoxazole',
                'deskripsi' => 'Sulfamethoxazole adalah obat antibiotik untuk mengobati berbagai penyakit akibat infeksi bakteri. Obat ini selalu dikombinasikan dengan trimethoprim untuk meningkatkan efektivitasnya. Kombinasi kedua antibiotik tersebut dikenal sebagai kotrimoksazol.',
                'obat_dewasa'   =>'Dewasa: Dosis awal adalah 2.000 mg, dilanjutkan dengan 1.000 mg, 2 kali sehari. Untuk infeksi berat dosisnya adalah 1.000 mg, 3 kali sehari.',
                'obat_anak' =>'Anak-anak: Dosis awal adalah 50–60 mg/kgBB, dilanjutkan dengan 25–30 mg/kgBB, 2 kali sehari. Dosis maksimal adalah 75 mg/kgBB.',
            ],
            [
                'id'    => 'b9ec8024-7f63-11ee-b962-0242ac120002',
                'id_obatvitamin'    =>'V14',
                'nama'  => 'Benzocaine',
                'deskripsi' => 'obat benzocaine merupakanobat anestesi atau bius lokal yang berbentuk obat kumur, gel, salep, dan bubuk. Cara kerja benzocaine adalah dengan menghambat sinyal saraf di dalam tubuh. Benzocaine adalah obat yang bersifat bebas. Artinya obat ini bisa dibeli di apotek baik dengan maupun tanpa resep dokter.',
                'obat_dewasa'   =>'Gunakan dalam sediaan semprot, krim, salep, losion, gel, atau solusio sebanyak 3-4 kali sehari. ',
                'obat_anak' =>'Gunakan dalam sediaan semprot sebanyak 1 kali (1 mg) ke belakang tenggorokan. Ulangi pemberian obat setiap 2-3 jam dengan dosis maksimal 8 kali semprot per hari.',
            ],
            [
                'id'    => 'b9ec8290-7f63-11ee-b962-0242ac120002',
                'id_obatvitamin'    =>'V15',
                'nama'  => 'cefotaxim',
                'deskripsi' => 'Cefotaxim adalah obat antibiotik untuk mengobati berbagai macam penyakit infeksi bakteri. Beberapa penyakit infeksi yang bisa diatasi oleh obat ini adalah pneumonia, infeksi saluran kemih, kencing nanah, meningitis, peritonitis, atau osteomielitis (infeksi pada tulang).',
                'obat_dewasa'   =>'Dewasa: 1–2 gram tiap 8–12 jam, tergantung dari tingkat keparahan infeksi.',
                'obat_anak' =>'ANAK: 100-150 mg/kg bb/hari dalam 2-4 kali pemberian. (pada infeksi berat dapat ditingkatkan menjadi 200 mg/kg bb/hari).',
            ],
            [
                'id'    => 'b9ec83d0-7f63-11ee-b962-0242ac120002',
                'id_obatvitamin'    =>'V16',
                'nama'  => 'Ceftriaxone',
                'deskripsi' => 'cetriaxone merupakan obat untuk mengatasi penyakit akibat infeksi bakteri, seperti gonore, meningitis, otitis media, sifilis, dan penyakit Lyme. Obat ini tersedia dalam bentuk suntik.',
                'obat_dewasa'   =>'Dewasa: 1.000–2.000 mg per hari. Pada infeksi yang berat, dosis dapat ditingkatkan menjadi 4.000 mg, 1–2 kali sehari. ',
                'obat_anak' =>'Anak usia 15 hari hingga 12 tahun: 50–80 mg/kgBB per hari. Dosis maksimal 4.000 mg per hari.',
            ],
            [
                'id'    => 'b9ec84fc-7f63-11ee-b962-0242ac120002',
                'id_obatvitamin'    =>'V17',
                'nama'  => 'Fluconazole',
                'deskripsi' => 'Fluconazole merupakan obat untuk mengatasi penyakit akibat infeksi jamur, termasuk infeksi jamur Candida (candidiasis). Fluconazole dapat digunakan untuk infeksi jamur di kulit, vagina, mulut, tenggorokan, kerongkongan, rongga perut, paru-paru, saluran kemih, maupun aliran darah.',
                'obat_dewasa'   =>'Dewasa: Dosis awal 400 mg pada hari pertama, diikuti 200–400 mg, 1 kali sehari, selama 6–8 minggu.',
                'obat_anak' =>'Anak usia 28 hari–11 tahun: Dosis awal 6mg/kgBB, diikuti 3 mg/kgBB, 1 kali sehari.',
            ],
            [
                'id'    => 'b9ec861e-7f63-11ee-b962-0242ac120002',
                'id_obatvitamin'    =>'V18',
                'nama'  => 'Salbutamol',
                'deskripsi' => 'obat albuterol yang berfungsi melemaskan otot saluran pernapasan. Obat bronkitis ini termasuk dalam bronkodilator, yang ditujukan untuk melegakan saluran pernapasan.',
                'obat_dewasa'   =>'',
                'obat_anak' =>'',
            ],
            [
                'id'    => 'b9ec874a-7f63-11ee-b962-0242ac120002',
                'id_obatvitamin'    =>'V19',
                'nama'  => 'Caladine powder',
                'deskripsi' => 'merupakan bedak yang digunakan untuk merawat kulit bayi dari kemerahan akibat dari iritasi ringan dikarenkan pemakaian popok, udara panas atau bakteri. Bedak ini dapat pula digunakan untuk mengatasi gatal-gatal pada kulit bayi akibat gigitan serangga, sinar matahari dan biang keringat)',
                'obat_dewasa'   =>'secukupnya',
                'obat_anak' =>'secukupnya',
            ],
            [
                'id'    => 'b9ec88ee-7f63-11ee-b962-0242ac120002',
                'id_obatvitamin'    =>'V20',
                'nama'  => 'Caladine Lotion',
                'deskripsi' => 'CALADINE LOTION merupakan lotion anti gatal yang mengandung Calamine, Zinc Oxyde dan Diphenhydramine HCL. Caladine lotion digunakan untuk mengobati gatal karena biang keringet, udara panas, gigitan serangga. Selain itu dapat digunakan sebagai antialergi, antideptik dan penyejuk kulit',
                'obat_dewasa'   =>'Secukupnya',
                'obat_anak' =>'Secukupnya',
            ],
            [
                'id'    => 'b9ec6c9c-7f63-11ee-b962-0242ac120002',
                'id_obatvitamin'    =>'V21',
                'nama'  => 'Clinovir Cream',
                'deskripsi' => 'CLINOVIR CREAM merupakan obat yang mengandung Acyclovir yang digunakan untuk mengobati infeksi akibat virus seperti pengobatan infeksi herpes simpleks pada kulit & membran mukosa, termasuk herpes genital awal & rekuren. Pencegahan infeksi herpes simpleks berulang pada pasien imunokompeten. Profilaksis herpes simpleks pada pasien immunocompromised. Pengobatan herpes zoster. Obat ini bekerja dengan cara menghambat virus herpes simplex DNA polymerase dan replikasi DNA virus, sehingga mencegah sintesa DNA virus tanpa mempengaruhi sel normal (sel tubuh). Dalam penggunaan obat ini HARSU SESUAI DENGAN PETUNJUK DOKTER. Pembelian obat ini memerlukan edukasi terkait penggunaan atau pengonsumsian obat yang tepat dan aman yang akan dikenakan biaya.',
                'obat_dewasa'   =>'',
                'obat_anak' =>'',
            ],
            [
                'id'    => 'b9ec6c9c-7f63-11ee-b962-0242ac120002',
                'id_obatvitamin'    =>'V02',
                'nama'  => 'Salbutamol',
                'deskripsi' => 'obat albuterol yang berfungsi melemaskan otot saluran pernapasan. Obat bronkitis ini termasuk dalam bronkodilator, yang ditujukan untuk melegakan saluran pernapasan.',
                'obat_dewasa'   =>'',
                'obat_anak' =>'',
            ],
            [
                'id'    => 'b9ec6c9c-7f63-11ee-b962-0242ac120002',
                'id_obatvitamin'    =>'V02',
                'nama'  => 'Salbutamol',
                'deskripsi' => 'obat albuterol yang berfungsi melemaskan otot saluran pernapasan. Obat bronkitis ini termasuk dalam bronkodilator, yang ditujukan untuk melegakan saluran pernapasan.',
                'obat_dewasa'   =>'',
                'obat_anak' =>'',
            ],
            [
                'id'    => 'b9ec6c9c-7f63-11ee-b962-0242ac120002',
                'id_obatvitamin'    =>'V02',
                'nama'  => 'Salbutamol',
                'deskripsi' => 'obat albuterol yang berfungsi melemaskan otot saluran pernapasan. Obat bronkitis ini termasuk dalam bronkodilator, yang ditujukan untuk melegakan saluran pernapasan.',
                'obat_dewasa'   =>'',
                'obat_anak' =>'',
            ],
            [
                'id'    => 'b9ec6c9c-7f63-11ee-b962-0242ac120002',
                'id_obatvitamin'    =>'V02',
                'nama'  => 'Salbutamol',
                'deskripsi' => 'obat albuterol yang berfungsi melemaskan otot saluran pernapasan. Obat bronkitis ini termasuk dalam bronkodilator, yang ditujukan untuk melegakan saluran pernapasan.',
                'obat_dewasa'   =>'',
                'obat_anak' =>'',
            ],
            [
                'id'    => 'b9ec6c9c-7f63-11ee-b962-0242ac120002',
                'id_obatvitamin'    =>'V02',
                'nama'  => 'Salbutamol',
                'deskripsi' => 'obat albuterol yang berfungsi melemaskan otot saluran pernapasan. Obat bronkitis ini termasuk dalam bronkodilator, yang ditujukan untuk melegakan saluran pernapasan.',
                'obat_dewasa'   =>'',
                'obat_anak' =>'',
            ],
            [
                'id'    => 'b9ec6c9c-7f63-11ee-b962-0242ac120002',
                'id_obatvitamin'    =>'V02',
                'nama'  => 'Salbutamol',
                'deskripsi' => 'obat albuterol yang berfungsi melemaskan otot saluran pernapasan. Obat bronkitis ini termasuk dalam bronkodilator, yang ditujukan untuk melegakan saluran pernapasan.',
                'obat_dewasa'   =>'',
                'obat_anak' =>'',
            ],
            [
                'id'    => 'b9ec6c9c-7f63-11ee-b962-0242ac120002',
                'id_obatvitamin'    =>'V02',
                'nama'  => 'Salbutamol',
                'deskripsi' => 'obat albuterol yang berfungsi melemaskan otot saluran pernapasan. Obat bronkitis ini termasuk dalam bronkodilator, yang ditujukan untuk melegakan saluran pernapasan.',
                'obat_dewasa'   =>'',
                'obat_anak' =>'',
            ],

            ]);

    }
}