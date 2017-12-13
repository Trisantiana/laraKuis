<?php

use Illuminate\Database\Seeder;
use App\Question as Quest;
class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Quest::create([
            'question' => 'PHP singkatan dari ...',
            'a' => 'PHP Hypertext Procedure',
            'b' => 'PHP Hypertext Preprocessor',
            'c' => 'Pemberi Harapan Palsu',
            'd' => 'Polisi Hapus Pungli',
            'answer_key' => 'b',
        ]);

        Quest::create([
            'question' => 'Skrip PHP dimulai dengan tag ..',
            'a' => '// .. //',
            'b' => '<html> .. </html>',
            'c' => '<?php .. ?>',
            'd' => '/* .. */',
            'answer_key' => 'c',
        ]);

        Quest::create([
            'question' => 'Ada berapa cara untuk memodelkan perangkat Lunak',
            'a' => '5',
            'b' => '6',
            'c' => '7',
            'd' => '4',
            'answer_key' => 'b',
        ]);

        Quest::create([
            'question' => 'Apa kepanjangan dari DFD ?',
            'a' => 'Data Flow Diagram',
            'b' => 'Data Farian Diagram',
            'c' => 'Description Font Diagram',
            'd' => 'Data Found Default',
            'answer_key' => 'a',
        ]);

        Quest::create([
            'question' => 'Apa Kepanjangan dari ERD ?',
            'a' => 'Endors Relation Diagram',
            'b' => 'Entity Relationship Diagram',
            'c' => 'Eloquent Relation Diagram',
            'd' => 'Encrypt RElation Diagram',
            'answer_key' => 'b',
        ]);

        Quest::create([
            'question' => 'perintah sql untuk membuat table baru yaitu..',
            'a' => 'create table nama_table(id int(11), name varchar(20));',
            'b' => 'select * from nama_table',
            'c' => 'insert into nama_table values(a,b)',
            'd' => 'create database nama_database',
            'answer_key' => 'a',
        ]);

        Quest::create([
            'question' => 'DDL singkatan dari ..',
            'a' => 'Data Definition Language',
            'b' => 'Data Manipulation Language',
            'c' => 'Data Control Language',
            'd' => 'Data Diagram Language',
            'answer_key' => 'a',
        ]);

        Quest::create([
            'question' => 'Yang termasuk perintah DDL yaitu ..',
            'a' => 'Grant',
            'b' => 'Delete',
            'c' => 'Insert',
            'd' => 'Alter',
            'answer_key' => 'd',
        ]);

        Quest::create([
            'question' => 'Yang bukan termasuk perintah DML yaitu ..',
            'a' => 'Insert',
            'b' => 'Update',
            'c' => 'Delete',
            'd' => 'Grant',
            'answer_key' => 'd',
        ]);

        Quest::create([
            'question' => 'perintah sql untuk menghapus tabel yaitu ..',
            'a' => 'drop table nama_table',
            'b' => 'drop nama_table',
            'c' => 'delete nama_table',
            'd' => 'select nama_table',
            'answer_key' => 'a',
        ]);

        Quest::create([
            'question' => 'perintah sql untuk menampilkan data dengan nama yang berawalan huruf A adalah ..',
            'a' => 'select * from nama_table where field2 like %A',
            'b' => 'select * from nama_table where field2 like %A%',
            'c' => 'select * from nama_table where field2 like A%',
            'd' => 'select * from nama_table where  like %A',
            'answer_key' => 'c',
        ]);

        Quest::create([
            'question' => 'tahapan normalisasi ke berapa untuk menghilangkan ketergantungan transitif ..',
            'a' => 'Bentuk Normal 1NF',
            'b' => 'Bentuk Normal 2NF',
            'c' => 'Bentuk Normal BCNF',
            'd' => 'Bentuk Normal 5NF',
            'answer_key' => 'b',
        ]);

        Quest::create([
            'question' => 'simbol untuk operasi aritmatika sisa hasil bagi (modulus) adalah',
            'a' => '+',
            'b' => '-',
            'c' => '%',
            'd' => '&',
            'answer_key' => 'c',
        ]);

        Quest::create([
            'question' => 'sistem bilangan yang hanya menggunakan simbol 0 dan 1 adalah ..',
            'a' => 'bilangan desimal',
            'b' => 'bilangan oktal',
            'c' => 'bilangan hexadecimal',
            'd' => 'bilanagn biner',
            'answer_key' => 'd',
        ]);

        Quest::create([
            'question' => 'Proses menterjemakah perancangan desain ke bentuk yang dapat di mengerti oleh mesin dengan mengunakan bahasa program adalah ..',
            'a' => 'Desain',
            'b' => 'Pengkodean',
            'c' => 'Pengujian',
            'd' => 'Pemeliharaan',
            'answer_key' => 'b',
        ]);

        Quest::create([
            'question' => 'PHP pertama kali dibuat pada tahun ..',
            'a' => '1995',
            'b' => '1595',
            'c' => '1959',
            'd' => '1985',
            'answer_key' => 'a',
        ]);

        Quest::create([
            'question' => 'ada berapa jenis tipe data pada PHP',
            'a' => '5',
            'b' => '7',
            'c' => '8',
            'd' => '9',
            'answer_key' => 'c',
        ]);

        Quest::create([
            'question' => 'Memenuhi kebutuhan kepada pemakai sistem dan memberikan gambaran yang jelas dan rancangan bangunan yang lengkap kepada program komputer adalah tujuan dari ',
            'a' => 'Analisa Sistem',
            'b' => 'Desain sistem',
            'c' => 'Analisa Berorientasi Object',
            'd' => 'Analisa Terstruktur',
            'answer_key' => 'b',
        ]);

        Quest::create([
            'question' => 'Ada berapa model prototype',
            'a' => '2',
            'b' => '3',
            'c' => '4',
            'd' => '5',
            'answer_key' => 'c',
        ]);

        Quest::create([
            'question' => 'Ada berapa jenis attribute yang digunakan dalam ERD',
            'a' => '6',
            'b' => '7',
            'c' => '8',
            'd' => '9',
            'answer_key' => 'b',
        ]);
    }
}
