<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jk');
            $table->integer('nisn');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->string('nik');
            $table->string('agama');
            $table->string('alamat');
            $table->string('rt');
            $table->string('rw');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('kode_pos');
            $table->string('jenis_tinggal');
            $table->string('alat_transportasi');
            $table->string('telepon');
            $table->string('hp');
            $table->string('skhun');
            $table->string('penerima_kps');
            $table->string('no_kps');
            $table->string('nama_ayah');
            $table->string('tahun_lahir_ayah');
            $table->string('pendidikan_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('penghasilan_ayah');
            $table->string('nik_ayah');
            $table->string('nama_ibu');
            $table->string('tahun_lahir_ibu');
            $table->string('pendidikan_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('penghasilan_ibu');
            $table->string('nik_ibu');
            $table->string('rombel');
            $table->string('no_peserta_ujian');
            $table->string('no_seri_ijazah');
            $table->string('penerima_kip');
            $table->string('no_kip');
            $table->string('nama_kip');
            $table->string('no_kks');
            $table->string('no_reg_akta_lahir');
            $table->string('bank');
            $table->string('no_rek_bank');
            $table->string('bank_atas_nama');
            $table->string('layak_pip');
            $table->string('alasan_layak_pip');
            $table->string('kebutuhan_khusus');
            $table->string('sekolah_asal');
            $table->string('anak_ke');
            $table->string('lintang');
            $table->string('bujur');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswas');
    }
}
