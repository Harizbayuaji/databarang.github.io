<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;


class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
        {
        return view('home');
        }
    public function index(Request $request)
    {
        $tampil = Barang::when($request->has('search'), function ($query) use ($request) {
            $query->where('nama_brg', 'LIKE', '%' . $request->search . '%');
        })
        ->cursorPaginate(4);

            return view('index', compact('tampil'));

            $data = [
                'kd_brg' => $request->kd_brg,
                'nama_brg' => $request->nama_brg,
                'tipe_brg' => $request->tipe_brg,
                'jumlah_brg' => $request->jumlah_brg,
                'distributor' => $request->distributor,
                'tanggal_masuk' => $request->tanggal_masuk,
                'tanggal_keluar' => $request->tanggal_keluar,
            ];
    }
    public function landing_page()
        {

        return view('landing_page');
        }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah');

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
            'kd_brg' => 'required','numeric','unique:barangs,kd_buku',
            'nama_brg' => 'required',
            'tipe_brg' => 'required',
            'jumlah_brg' => 'required',
            'distributor' => 'required',
            'tanggal_masuk' => 'required',
            'tanggal_keluar' => 'required',

        ],[
        'kd_brg.required' => ' harap isi kode',
        'kd_brg.numeric' => ' harap isi kode menggunakan angka',
        'kd_brg.unique' => ' kode telah ada',
        'nama_brg.required' => ' harap isi nama ',
        'tipe_brg.required' => ' harap isi tipe barang',
        'jumlah_brg.required' => ' harap isi jumlah barang',
        'distributor.required' => ' harap isi distributor',
        'tanggal_masuk.required' => ' harap isi tangal',
        'tanggal_keluar.required' => ' harap isi tanggal',

        ]);
                $data = [
                    'kd_brg' => $request->kd_brg,
                    'nama_brg' => $request->nama_brg,
                    'tipe_brg' => $request->tipe_brg,
                    'jumlah_brg' => $request->jumlah_brg,
                    'distributor' => $request->distributor,
                    'tanggal_masuk' => $request->tanggal_masuk,
                    'tanggal_keluar' => $request->tanggal_keluar,
                ];
                Barang::create($data);
                return redirect('index')->with('success', 'Data Berhasil Ditambah');
        }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
    public function update(Request $request, $kd_brg)
    {
        $request->validate([
            'nama_brg' => 'required',
            'tipe_brg' => 'required',
            'jumlah_brg' => 'required',
            'distributor' => 'required',
            'tanggal_masuk' => 'required',
            'tanggal_keluar' => 'required',

        ],[
        'nama_brg.required' => ' harap isi nama ',
        'tipe_brg.required' => ' harap isi tipe barang',
        'jumlah_brg.required' => ' harap isi jumlah barang',
        'distributor.required' => ' harap isi distributor',
        'tanggal_masuk.required' => ' harap isi tangal',
        'tanggal_keluar.required' => ' harap isi tanggal',

        ]);
        $data = [
            'nama_brg' => $request->nama_brg,
            'tipe_brg' => $request->tipe_brg,
            'jumlah_brg' => $request->jumlah_brg,
            'distributor' => $request->distributor,
            'tanggal_masuk' => $request->tanggal_masuk,
            'tanggal_keluar' => $request->tanggal_keluar,
        ];
        Barang::where('kd_brg', $kd_brg)->update($data);
        return redirect('/index')->with('success', 'Data Berhasil Diupdate');

//         Post::find($id)->update($request->all());
//    return back()->with('success',' Data telah diperbaharui!');
    // dd($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function delete($id){
        Barang::where('kd_brg',$id)->delete();
        return redirect('/index')->with('success', 'Data Berhasil Dihapus');
    }
}