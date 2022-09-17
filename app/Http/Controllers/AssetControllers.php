<?php

namespace App\Http\Controllers;

use App\Models\AssetModel;
use App\Models\JenisAssetModel;
use App\Models\LocationModel;
use App\Models\StatusAssetModel;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Session;

class AssetControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

     public function index()
    {
        $asset = AssetModel::all();
        return view ('admin.display-master-asset',['vasset' => $asset]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $location = LocationModel::all();
        $status = StatusAssetModel::all();
        $jenis = JenisAssetModel::all();
        return view ('admin.register-asset', compact(['location','status','jenis']));
    }

    public function showImportAsetForm()
    {
        return view ('admin.import-asset');
    }

    public function importAsset(Request $request)
    {
        		// validasi
		$this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);

		// menangkap file excel
		$file = $request->file('file');

		// membuat nama file unik
		$nama_file = rand().$file->getClientOriginalName();

		// upload ke folder file_siswa di dalam folder public
		$file->move('asset_files',$nama_file);

		// import data
		Excel::import(new AssetModel, public_path('/asset_files/'.$nama_file));

		// notifikasi dengan session
		Session::flash('Import Asset','Data Aset Berhasil diimport !');

		// alihkan halaman kembali
		return redirect('/admin/index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request['host_name']);
        $request->validate([
            // 'id_transaction' => 'required',
            'host_name' => 'required',
            'serial_number' => 'required',
            'kode_asset' => 'required',
            'user_name' => 'required',
            'dept' => 'required',
            'division' => 'required',
            'no_po' => 'required',
            'po_date' => 'required',
            'model' => 'required',
            'id_asset_location' => 'required',
            'id_asset_status' => 'required',
            'id_jenis_asset' => 'required',
            // 'image' => 'required',
        ]);

        $po_date = strtotime($request['po_date']);
        AssetModel::create([
            // 'id_transaction' => $request['id_transaction'],
            'host_name' => $request['host_name'],
            'serial_number' => $request['serial_number'],
            'kode_asset' => $request['kode_asset'],
            'user_name' => $request['user_name'],
            'dept' => $request['dept'],
            'division' => $request['division'],
            'requestor' => $request['requestor'],
            'no_po' => $request['no_po'],
            'po_date' => date('Y-m-d', $po_date),
            'model' => $request['model'],
            'id_asset_location' => $request['id_asset_location'],
            'id_asset_status' => $request['id_asset_status'],
            'id_jenis_asset' => $request['id_jenis_asset'],
            // 'image' => $request['image'],
        ]);
        //Alert::warning('Tambah pengguna berhasil !');
        return redirect()->route('asset.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(AssetModel $asset)
    {
        return view ('admin.report-asset', compact('admin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(AssetModel $asset)
    {
        return view('admin.edit-register-asset', compact('asset'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $assetModel)
    {
        //
        $request->validate([
            'id_transaction' => 'required',
            'host_name' => 'required',
            'serial_number' => 'required',
            'kode_asset' => 'required',
            'user_name' => 'required',
            'dept' => 'required',
            'division' => 'required',
            'no_po' => 'required',
            'po_date' => 'required',
            'model' => 'required',
            'id_asset_location' => 'required',
            'id_asset_status' => 'required',
            'id_jenis_asset' => 'required',
            'image' => 'required',
        ]);

        AssetModel::where('id', $assetModel)->update([
            'id_transaction' => $request['id_transaction'],
            'host_name' => $request['host_name'],
            'serial_number' => $request['serial_number'],
            'kode_asset' => $request['kode_asset'],
            'user_name' => $request['user_name'],
            'dept' => $request['dept'],
            'division' => $request['division'],
            'no_po' => $request['no_po'],
            'po_date' => $request['po_date'],
            'model' => $request['model'],
            'id_asset_location' => $request['id_asset_location'],
            'id_asset_status' => $request['id_asset_status'],
            'id_jenis_asset' => $request['id_jenis_asset'],
            'image' => $request['image'],
        ]);
        return redirect()->route('asset.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(AssetModel $id)
    {
  /*       $id->delete();
        return redirect()->route('asset.index')->with('Success','Data Berhasil di Hapus'); */
    }
}
