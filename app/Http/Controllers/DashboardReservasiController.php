<?php

namespace App\Http\Controllers;

use App\Models\Reservasi;
use Illuminate\Http\Request;
use App\Exports\PreservasiExport;
use Maatwebsite\Excel\Facades\Excel;

class DashboardReservasiController extends Controller
{
    public function export(){
        return Excel::download(new PreservasiExport, 'data_preservasi.xlsx');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Reservasi $reservasis)
    {
        // return Reservasi::all();
        // $reservasis = Reservasi::all();

        return view('dashboard.preservasi.reservasi',[
            // "reservasis" => $reservasis
            'reservasis' => Reservasi::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.preservasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tanggal' => 'required',
            'nama_kegiatan' => 'required|max:255',
            'target' => 'required',
            'kontrak' => 'required',
            'nama_perusahaan' => 'required|max:255',
            'konsultan_pengawas' => 'required|max:255',
            'tanggal_kontrak' => 'required',
            'pelaksanaan' => 'required',
            'pemberian_kesempatan' => 'required',
            'tanggal_akhir_kontrak' => 'required',
            'keuangan_rp' => 'required',
            'keuangan_persen' => 'required',
            'fisik_rencana' => 'required',
            'fisik_realisasi' => 'required',
            'fisik_deviasi' => 'required',
            'keterangan' => 'required|max:255'
        ]);
        // if($request->file('image')){
        //     $validatedData['image'] = $request->file('image')->store('post-images');
        // }
        // $validatedData['user_id'] = auth()->user()->id;
        // $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 150);
        Reservasi::create($validatedData);

        return redirect('/dashboard/preservasi')->with('success', 'New file Preservasi has been Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservasi  $reservasi
     * @return \Illuminate\Http\Response
     */
    // public function show(Reservasi $reservasi)
    public function show($id)
    {
        return view('dashboard.preservasi.show', [
            // "reservasi" => $reservasi
            'reservasi' => Reservasi::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservasi  $reservasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservasi $preservasi)
    {
        return view('dashboard.preservasi.edit',[
            // dd($preservasi),
            'preservasi' => $preservasi
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservasi  $reservasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservasi $preservasi)
    {
        $validatedData = $request->validate([
            'tanggal' => 'required',
            'nama_kegiatan' => 'required|max:255',
            'target' => 'required',
            'kontrak' => 'required',
            'nama_perusahaan' => 'required|max:255',
            'konsultan_pengawas' => 'required|max:255',
            'tanggal_kontrak' => 'required',
            'pelaksanaan' => 'required',
            'pemberian_kesempatan' => 'required',
            'tanggal_akhir_kontrak' => 'required',
            'keuangan_rp' => 'required',
            'keuangan_persen' => 'required',
            'fisik_rencana' => 'required',
            'fisik_realisasi' => 'required',
            'fisik_deviasi' => 'required',
            'keterangan' => 'required|max:255'
        ]);

        Reservasi::where('id', $preservasi->id)->update($validatedData);

        return redirect('/dashboard/preservasi')->with('success', 'data preservasi sudah  diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservasi  $reservasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservasi $preservasi)
    {
        
        Reservasi::destroy($preservasi->id);
        return redirect('/dashboard/preservasi')->with('success', 'Data sudah dihapus');

    }
}
