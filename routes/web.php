<?php

use App\Http\Controllers\FrontEndController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('auth.login');
})->name('login');

Route::controller(FrontEndController::class)->prefix('admin')->group(function () {
    // DASHBOARD
    Route::get('/godmode', 'dashboard_godmode')->name('godmode.dashbboard');
    Route::get('/admin', 'dashboard_admin')->name('admin.dashboard');

    // MASTERDATA
    Route::get('/masterdata', 'masterdata_index')->name('masterdata.dashboard');

    // KONTRAK
    Route::get('/kontrak', 'kontrak_index')->name('kontrak.index');

    // ASET
    Route::get('/aset', 'aset_index')->name('aset.index');

    // DATA ASET
    Route::get('/data-aset', 'dataAset_index')->name('dataAset.index');
    Route::get('/data-aset-tetap', 'dataAsetTetap_index')->name('dataAsetTetap.index');
    Route::get('/create-aset-tetap', 'dataAsetTetap_create')->name('dataAsetTetap.create');
    Route::get('/detail-aset-tetap', 'detailAsetTetap_index')->name('detailAsetTetap.index');

    Route::get('/monitoring-aset', 'monitoringAset_index')->name('monitoringAset.index');

    // TRANS - PENGIRIMAN Aset
    Route::get('/pengiriman', 'pengiriman_index')->name('pengiriman.index');
    Route::get('/list-pengiriman', 'listPengiriman_index')->name('listPengiriman.index');
    Route::get('/detail-pengiriman', 'detailPengiriman_index')->name('detailPengiriman.index');

    // KONFIGURASI
    Route::get('/konfigurasi-pic', 'pic_index')->name('pic.index');
});

Route::controller(FrontEndController::class)->prefix('user')->group(function () {
    // DASHBOARD
    Route::get('/pns', 'dashboard_pns')->name('pns.dashboard');
    Route::get('/pjlp', 'dashboard_pjlp')->name('pjlp.dashboard');

    // ASET
    Route::get('/pjlp-aset', 'pjlp_aset')->name('pjlpAset.index');

    // DATA ASET
    Route::get('/data-aset', 'pjlpDataAset_index')->name('pjlpDataAset.index');
    Route::get('/data-aset_tetap', 'pjlpDataAsetTetap_index')->name('pjlpDataAsetTetap.index');
    Route::get('/detail-aset-tetap', 'pjlpDetailAsetTetap_index')->name('pjlpDetailAsetTetap.index');

    Route::get('/pemakaian', 'pemakaian_index')->name('pemakaian.index');
    Route::get('/list-pemakaian', 'listPemakaian_index')->name('listPemakaian.index');
    Route::get('/detail-pemakaian', 'detailPemakaian_index')->name('detailPemakaian.index');

    Route::get('/list-penerimaan', 'listPenerimaan_index')->name('listPenerimaan.index');
    Route::get('/detail-penerimaan', 'detailPenerimaan_index')->name('detailPenerimaan.index');
});
