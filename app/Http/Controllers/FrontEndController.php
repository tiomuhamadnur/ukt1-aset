<?php

namespace App\Http\Controllers;

class FrontEndController extends Controller
{
    // ADMIN
    public function dashboard_godmode()
    {
        return view('pages.users.godmode.dashboard.index');
    }
    public function dashboard_admin()
    {
        return view('pages.users.godmode.dashboard.index');
    }

    // KONTRAK
    public function kontrak_index()
    {
        return view('pages.users.godmode.kontrak.index');
    }

    // MASTEDATA
    public function masterdata_index()
    {
        return view('pages.users.godmode.masterdata.index');
    }

    // ASET
    public function aset_index()
    {
        return view('pages.users.godmode.aset.index');
    }
    public function dataAset_index()
    {
        return view('pages.users.godmode.aset.dataAset.index');
    }
    public function dataAsetTetap_index()
    {
        return view('pages.users.godmode.aset.dataAsetTetap.index');
    }
    public function dataAsetTetap_create()
    {
        return view('pages.users.godmode.aset.dataAsetTetap.create');
    }
    public function detailAsetTetap_index()
    {
        return view('pages.users.godmode.aset.dataAsetTetap.blog');
    }

    // PENGIRIMAN
    public function pengiriman_index()
    {
        return view('pages.users.godmode.trans.form_pengiriman');
    }
    public function listPengiriman_index()
    {
        return view('pages.users.godmode.trans.list_pengiriman');
    }
    public function detailPengiriman_index()
    {
        return view('pages.users.godmode.trans.detail_pengiriman');
    }
    public function monitoringAset_index()
    {
        return view('pages.users.godmode.aset.monitoring.index');
    }






    // USERSSS
    public function dashboard_pns()
    {
        return view('pages.users.godmode.dashboard.index');
    }
    public function dashboard_pjlp()
    {
        return view('pages.users.pjlp.dashboard.index');
    }

    // ASET
    public function pjlp_aset()
    {
        return view('pages.users.pjlp.aset.index');
    }
    public function pjlpDataAset_index()
    {
        return view('pages.users.pjlp.aset.dataAset.index');
    }
    public function pjlpDataAsetTetap_index()
    {
        return view('pages.users.pjlp.aset.dataAsetTetap.index');
    }
    public function pjlpDetailAsetTetap_index()
    {
        return view('pages.users.pjlp.aset.dataAsetTetap.blog');
    }

    // TRANS
    public function pemakaian_index()
    {
        return view('pages.users.pjlp.trans.form_pemakaian');
    }
    public function listPemakaian_index()
    {
        return view('pages.users.pjlp.trans.list_pemakaian');
    }
    public function detailPemakaian_index()
    {
        return view('pages.users.pjlp.trans.detail_pemakaian');
    }
    public function listPenerimaan_index()
    {
        return view('pages.users.pjlp.trans.list_penerimaan');
    }
    public function detailPenerimaan_index()
    {
        return view('pages.users.pjlp.trans.detail_penerimaan');
    }
}
