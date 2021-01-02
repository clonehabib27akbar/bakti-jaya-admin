<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gurus', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nuptk');
            $table->string('jk');
            $table->string('tempat_lahir');
            $table->string('tgl_lahir');
            $table->string('nip');
            $table->string('status_kepegawaian');
            $table->string('jenis_ptk');
            $table->string('agama');
            $table->string('alamat_jln');
            $table->string('rt');
            $table->string('rw');
            $table->string('nama_dusun');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('kodepos');
            $table->string('telepon');
            $table->string('hp');
            $table->string('email');
            $table->string('tugas_tambahan');
            $table->string('sk_cpns');
            $table->string('tgl_cpns');
            $table->string('sk_kepangkatan');
            $table->string('tmt_kepangkatan');
            $table->string('lembaga_kepangkatan');
            $table->string('pangkat_golongan');
            $table->string('sumber_gaji');
            $table->string('nama_ibu_kandung');
            $table->string('status_perkawinan');
            $table->string('nama_suami_istri');
            $table->string('nip_suami_istri');
            $table->string('pekerjaan_suami_istri');
            $table->string('tmt_pns');
            $table->string('sudah_lisensi_kepala_sekolah');
            $table->string('pernah_diklat_kepengawasan');
            $table->string('keahlian_braile');
            $table->string('keahlian_bhs_isyarat');
            $table->string('npwp');
            $table->string('nama_wajib_pajak');
            $table->string('kewarganegaraan');
            $table->string('nik');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gurus');
    }
}
