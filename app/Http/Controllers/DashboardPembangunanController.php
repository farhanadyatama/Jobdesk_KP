<?php

namespace App\Http\Controllers;

use App\Models\Pembangunan;
use Illuminate\Http\Request;
use App\Exports\PembangunanExport;
use Maatwebsite\Excel\Facades\Excel;

class DashboardPembangunanController extends Controller
{
    public function export(){
        return Excel::download(new PembangunanExport, 'data_pembangunan.xlsx');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Pembangunan $pembangunans)
    {
        return view('dashboard.pembangunan.pembangunan',[
            // "reservasis" => $reservasis
            'pembangunans' => Pembangunan::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('admin');

        return view('dashboard.pembangunan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('admin');

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
        
        Pembangunan::create($validatedData);

        return redirect('/dashboard/pembangunan')->with('success', 'New file Pembangunan has been Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pembangunan  $pembangunan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('dashboard.pembangunan.show', [
            'pembangunan' => Pembangunan::find($id)
        
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pembangunan  $pembangunan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pembangunan $pembangunan)
    {
        $this->authorize('admin');

        return view('dashboard.pembangunan.edit',[
            // dd($pembangunan),
            'pembangunan' => $pembangunan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pembangunan  $pembangunan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pembangunan $pembangunan)
    {
        $this->authorize('admin');

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
        // $validatedData = $request->validate($rules);

        Pembangunan::where('id', $pembangunan->id)->update($validatedData);

        return redirect('/dashboard/pembangunan')->with('success', 'data pembagunan sudah  diperbarui');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pembangunan  $pembangunan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pembangunan $pembangunan)
    {
        $this->authorize('admin');

        Pembangunan::destroy($pembangunan->id);
        return redirect('/dashboard/pembangunan')->with('success', 'Data sudah dihapus');
    }
}
