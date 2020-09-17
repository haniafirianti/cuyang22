<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Buku;
use App\Kategori;
use App\Anggota;
use App\Transaksi;
use phpDocumentor\Reflection\Types\Null_;
use Alert;

class TransaksiController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = Transaksi::join('table_buku', 'table_buku.id_buku', '=', 'table_transaksi.id_buku')
            ->join('table_kategori', 'table_kategori.kategori', '=', 'table_buku.kategori')
            ->join('table_anggota', 'table_transaksi.id_anggota', '=', 'table_anggota.id_anggota')
            ->select(
                'table_transaksi.id',
                'table_anggota.nama_anggota',
                'table_buku.id_buku',
                'table_buku.judul_buku',
                'table_buku.deskripsi',
                'table_kategori.deskripsi as kategori',
                'table_transaksi.tgl_pinjam',
                'table_transaksi.tgl_kembali'
            )
            ->get();
        // return $transaksi;
        return view('transaksi.index', compact('transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('transaksi.pinjam');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'tgl_pinjam' => 'required',

        ]);

        if (Anggota::where('id_anggota', $request->id_anggota)->count() > 0) {
            if (Buku::where('id_buku', $request->id_buku)->count() > 0) {
                // return $request;
                $transaksi = new Transaksi;
                // $transaksi->type_transaksi = $request->type_transaksi;
                $transaksi->id_anggota = $request->id_anggota;
                $transaksi->id_buku = $request->id_buku;
                if ($request->type_transaksi == 'pinjam') {
                    $transaksi->tgl_pinjam = $request->tgl_pinjam;
                    $transaksi->tgl_kembali = NULL;
                    $transaksi->save();
                    Alert::success('Peminjaman','Data Berhasil Di Tambahkan');
                    return redirect('transaksi');
                } else {
                    $transaksi->tgl_kembali = $request->tgl_kembali;
                }
                // return $transaksi;
            } else {
                Alert::error('Pemijaman','Buku Tidak Di Temukan');
                return redirect()->back();
            }
        } else {
            Alert::error('Peminjaman','Anggota tidak di temukan');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pinjaman = Transaksi::join('table_buku', 'table_buku.id_buku', '=', 'table_transaksi.id_buku')
            ->join('table_anggota', 'table_anggota.id_anggota', '=', 'table_transaksi.id_anggota')
            ->join('table_kategori', 'table_kategori.kategori', '=', 'table_buku.kategori')
            ->select(
                'table_transaksi.id',
                'table_transaksi.id_anggota',
                'table_anggota.nama_anggota',
                'table_buku.id_buku',
                'table_buku.judul_buku',
                'table_buku.deskripsi',
                'table_kategori.deskripsi as kategori',
                'table_transaksi.tgl_pinjam',
                'table_transaksi.tgl_kembali'
            )
            ->where('table_transaksi.id', '=', $id)->first();
        return json_encode($pinjaman);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function showBuku($id)
    {
        // $buku = Buku::where('id_buku', $id)->first();
        if (Buku::where('id_buku', $id)->count() > 0) {
            $buku = Buku::join('table_kategori', 'table_buku.kategori', '=', 'table_kategori.kategori')
                ->select(
                    'table_buku.id_buku',
                    'table_buku.judul_buku',
                    'table_buku.deskripsi',
                    'table_kategori.deskripsi as kategori',
                    'table_buku.cover_img'
                )
                ->where('table_buku.id_buku', '=', $id)
                ->get();
            return $buku;
        } else {
            return 'false';
        }
    }
    public function getAnggota($id)
    {
        // $buku = Buku::where('id_buku', $id)->first();
        $anggota = Anggota::where('id_anggota', $id)->first();
        // return $anggota;
        if ($anggota === null) {
            return 'false';
        } else {
            return $anggota;
        }
    }
    public function edit($id)
    {
        $pinjaman = Transaksi::join('table_buku', 'table_buku.id_buku', '=', 'table_transaksi.id_buku')
            ->join('table_anggota', 'table_anggota.id_anggota', '=', 'table_transaksi.id_anggota')
            ->join('table_kategori', 'table_kategori.kategori', '=', 'table_buku.kategori')
            ->select(
                'table_transaksi.id',
                'table_transaksi.id_anggota',
                'table_anggota.nama_anggota',
                'table_buku.id_buku',
                'table_buku.judul_buku',
                'table_buku.deskripsi',
                'table_kategori.deskripsi as kategori',
                'table_transaksi.tgl_pinjam',
                'table_transaksi.tgl_kembali'
            )
            ->where('table_transaksi.id', '=', $id)->first();
        return view('transaksi.kembali', compact('pinjaman'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'tgl_kembali' => 'required',

        ]);

        Transaksi::where('id', $id)
            ->update(['tgl_kembali' => $request->tgl_kembali]);
        return redirect('transaksi')->with('msg', 'Buku Telah dikembalikan');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
