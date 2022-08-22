<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\DataPelajar;
use Carbon\Carbon;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;

class DataPelajarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['title'] = 'Data Pelajar';
        if ($request->ajax()) {
            $data = DataPelajar::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('ttl', function ($row) {
                    $ttl = $row->tempat_lahir . ', ' . $row->tanggal_lahir;
                    return $ttl;
                })
                ->editColumn('keterangan', function ($row)
                {
                    if(isset($row->keterangan)){
                        return $row->keterangan;
                    }
                    else {
                        return 'Aktif';
                    }
                })
                ->addColumn('action', function ($row) {
                    return '
                        <a href="pelajar/' . $row->id . '/edit" class="edit btn btn-secondary btn-sm">Edit</a>
                        <form action="pelajar/delete/' . $row->id . '" method="GET">
                            ' . csrf_field() . '
                            <button type="submit" class="delete-button btn btn-danger btn-sm"
                                onclick="return confirm(\'Are You Sure Want to Delete?\')">Delete</button>
                        </form>

                        ';
                })
                ->rawColumns(['link', 'action'])
                ->make(true);
        }
        return view('backend.data_pelajar.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'Data Pelajar';
        return view('backend.data_pelajar.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->file('link')) {
            $request->validate([
                'link' => 'required|mimes:png,jpeg,jpg',
            ]);
            $extension = $request->link->getClientOriginalExtension();
            $fileName = Str::slug($request->nama) . '.' . $extension;
            $path = public_path() . '/storage/siswa/';
            $dir = 'siswa' . '/' . $fileName;
            $update = DataPelajar::where('id', $request->id)->first();
            if (!empty($update->link)) {
                unlink('storage/' . $update->link);
            }
            $file = $request->file('link');
            $file->move($path, $fileName);
        }
        $data = DataPelajar::updateOrCreate(
            ['id' => $request->id],
            [
                'nama' => $request->nama,
                'nisn' => $request->nisn,
                'jenis_kelamin' => $request->jenis_kelamin,
                'agama' => $request->agama,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'alamat' => $request->alamat,
                'telepon' => $request->telepon,
                'keterangan' => $request->keterangan,
            ],
        );
        // dd($data);
        Alert::success('success', 'Data ' . $data->nama . ' telah ditambahkan');
        return redirect()->route('pelajar.index');
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['title'] = 'Data Pelajar';
        $data['data'] = DataPelajar::find($id);
        $data['jenis_kelamin'] = array('Laki-Laki', 'Perempuan');
        $data['agama'] = array('Islam', 'Kristen', 'Khatolik', 'Hindu', 'Budha', 'Konghucu');
        return view('backend.data_pelajar.create', $data);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DataPelajar::find($id)->delete();
        Alert::success('success', 'Data berhasil dihapus.');
        return redirect()->back();
    }
}
