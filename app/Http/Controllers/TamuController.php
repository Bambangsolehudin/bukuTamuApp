<?php

namespace App\Http\Controllers;

use App\Tamu;
use Illuminate\Http\Request;
use Mail;
use PDF;

class TamuController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tamus = Tamu::all();
        return view('admin.tamu.index', compact('tamus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tamu.create');
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
            'nama' => 'required',
            'no_ktp' => 'required|numeric',
            'email' => 'required',
            'umur' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'tujuan_kunjungan' => 'required',
            'no_ktp' => 'required',
            'foto' => 'required',
        ]);

        $data = $request->all();
        Tamu::create($data);
        return redirect()->route('tamu.index')->with('status', 'data tamu berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tamu = Tamu::find($id);
        return view('admin.tamu.show', compact('tamu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Tamu::find($id);
        return view('admin.tamu.edit', compact('item'));
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
            'nama' => 'required',
            'no_ktp' => 'required|numeric',
            'email' => 'required',
            'umur' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'tujuan_kunjungan' => 'required',
            'no_ktp' => 'required',
            'foto' => 'required',
        ]);

        $data = $request->all();
        $tamu = Tamu::find($id);
        $tamu->update($data);
        return redirect()->route('tamu.index')->with('status', 'data tamu berhasil diUpdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tamu = Tamu::find($id);
        $tamu->delete();
        return redirect()->route('tamu.index')->with('status', 'data tamu berhasil dihapus');
    }

    public function send($id)
    {
        $tamu = Tamu::find($id);
        Mail::send(
            'send',
            array('tamu' => $tamu),
            function ($pesan) use ($tamu) {
                $pesan->to($tamu['email'], 'pemberitahuani')->subject('Pemberitahuan');
                $pesan->from('bambangsoleh666@gmail.com', 'pemberitahuan Jadwal');
            }
        );
        // Alert::success('', 'Pendaftaran selesai');
        return redirect()->route('tamu.index')->with('status', 'data tamu berhasil dikirim');;
    }

    public function laporan()
    {
        return view('admin.tamu.laporan');
    }

    public function createlaporan(Request $request)
    {
        $date1 = $request->date1;
        $date2 = $request->date2;
        $items = Tamu::whereBetween('tanggal', [$date1, $date2])->get();
        // dd($items);

        $pdf = PDF::loadView('print.tamu', ['items' => $items]);
        return $pdf->download('Transaction-pdf.pdf');
    }
}
