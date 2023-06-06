<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Barang;
use App\Models\Satuan;
class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = 'List Barang';

        //RAW SQL QUERY
        // $barangs = DB::select('
        // select *, barangs.id as barang_id, satuans.nama as satuan_nama
        // from barangs
        // left join satuans on barangs.satuan_id = satuans.id');

        // ELoQUENT
        $barangs = Barang::all();

        return view('barang.index', [
            'pageTitle' => $pageTitle,
            'barangs' => $barangs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Tambah Barang';

        //RAW SQL QUERY
        // $satuans = DB::select('select * from satuans');

        //ELOQUENT
        $satuans = Satuan::all();

        return view('barang.create', compact('pageTitle', 'satuans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'numeric' => 'Isi :attribute dengan angka'
        ];

        $validator = Validator::make($request->all(), [
            'namaBarang' => 'required',
            'kodeBarang' => 'required',
            'hargaBarang' => 'required|numeric',
            'deskripsiBarang' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        //INSERT QUERY
        // DB::table('barangs')->insert([
        //     'kodebarang' => $request->kodeBarang,
        //     'namabarang' => $request->namaBarang,
        //     'hargabarang' => $request->hargaBarang,
        //     'deskripsibarang' => $request->deskripsiBarang,
        //     'satuan_id' => $request->satuan,
        // ]);

        //ELOQUENT
        $barang = New Barang;
        $barang->kodebarang = $request->kodeBarang;
        $barang->namabarang = $request->namaBarang;
        $barang->hargabarang = $request->hargaBarang;
        $barang->deskripsibarang = $request->deskripsiBarang;
        $barang->satuan_id = $request->satuan;
        $barang->save();

        return redirect()->route('barang.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pageTitle = 'Barang Detail';
         // ELOQUENT
         $barang = Barang::find($id);
         
         return view('barang.show', compact('pageTitle', 'barang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pageTitle = 'Edit Barang';
        // $barang = DB::table('barangs')->find($id);
        // $satuans = DB::select('select * from satuans');

        // ELOQUENT
        $satuans = Satuan::all();
        $barang = Barang::find($id);

        return view('barang.edit', compact('pageTitle', 'satuans', 'barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'numeric' => 'Isi :attribute dengan angka'
        ];

        $validator = Validator::make($request->all(), [
            'namaBarang' => 'required',
            'kodeBarang' => 'required',
            'hargaBarang' => 'required|numeric',
            'deskripsiBarang' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // DB::table('barangs')
        // ->where('id', $id)
        // ->update([
        //     'kodebarang' => $request->kodeBarang,
        //     'namabarang' => $request->namaBarang,
        //     'hargabarang' => $request->hargaBarang,
        //     'deskripsibarang' => $request->deskripsiBarang,
        //     'satuan_id' => $request->satuan,
        // ]);

        // ELOQUENT
        $barang = Barang::find($id);
        $barang->kodebarang = $request->kodeBarang;
        $barang->namabarang = $request->namaBarang;
        $barang->hargabarang = $request->hargaBarang;
        $barang->deskripsibarang = $request->deskripsiBarang;
        $barang->satuan_id = $request->satuan;
        $barang->save();

        return redirect()->route('barang.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //QUERY BUILDER
        // DB::table('barangs')
        //     ->where('id', $id)
        //     ->delete();

        // ELOQUENT
        Barang::find($id)->delete();

        return redirect()->route('barang.index');
    }
}
