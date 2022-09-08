<?php

namespace App\Http\Controllers;

use App\Models\AssetModel;
use App\Traits\AutoNumber;
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

    use AutoNumber;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

     public function index()
    {
        $asset = AssetModel::all();
        return view ('admin.report-asset',['vasset' => $asset]);
    }

     public function assetReport()
    {
        $asset = AssetModel::all();
        return view ('admin.report-asset',['vasset' => $asset]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $no_req = $this->getMaintenanceAssetNo();
        return view ('admin.register-asset',['no_reqs' => '$no_req']);
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
		Session::flash('Import Assert','Data Aset Berhasil diimport !');
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

        AssetModel::create([
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
        //Alert::warning('Tambah pengguna berhasil !');
        return redirect()->route('admin.report-asset');

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
    public function edit($id)
    {
        //
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
        return redirect()->route('admin.report-asset');
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
        return redirect()->route('admin.report-asset')->with('Success','Data Berhasil di Hapus'); */
    }
}
