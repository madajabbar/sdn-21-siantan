<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\DataPengajar;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class DataPengajarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['title'] = 'Data Pengajar';
        if ($request->ajax()) {
            $data = DataPengajar::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('ttl', function ($row) {
                    $ttl = $row->tempat_lahir . ', ' . $row->tanggal_lahir;
                    return $ttl;
                })
                ->addColumn('umur', function ($row) {
                    // return 'usia tiada yang tahu';
                    $sekarang = Carbon::now()->format('Y');
                    $tahun = date('Y', strtotime($row->tanggal_lahir));
                    return $sekarang - $tahun;
                })
                ->addColumn('action', function ($row) {
                    return '
                        <a href="pengajar/' . $row->id . '/edit" class="edit btn btn-secondary btn-sm">Edit</a>
                        <form action="pengajar/delete/' . $row->id . '" method="GET">
                            ' . csrf_field() . '
                            <button type="submit" class="delete-button btn btn-danger btn-sm"
                                onclick="return confirm(\'Are You Sure Want to Delete?\')">Delete</button>
                        </form>
                        ';
                })
                ->rawColumns(['link', 'action'])
                ->make(true);
        }
        return view('backend.data_pengajar.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'Data Pengajar';
        return view('backend.data_pengajar.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'nip' => 'required|unique:data_pengajars',
        // ]);
        if($request->file('link')){
            $request->validate([
                'link' => 'required|mimes:png,jpeg,jpg',
            ]);
            $extension = $request->link->getClientOriginalExtension();
            $fileName = Str::slug($request->nama).'.' .$extension;
            $path = public_path().'/storage/tutor/';
            $dir = 'tutor' .'/' . $fileName;
            $update = DataPengajar::where('id', $request->id)->first();
            if(!empty($update->link)){
                unlink('storage/'.$update->link);
            }
            $file = $request->file('link');
            $file->move($path, $fileName);

            $data = DataPengajar::updateOrCreate(
                ['id' => $request->id],
                ['nama' => $request->nama,
                'nip' => $request->nip,
                'status' => $request->status,
                'pendidikan' => $request->pendidikan,
                'jabatan' => $request->jabatan,
                'jenis_kelamin' => $request->jenis_kelamin,
                'agama' => $request->agama,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'alamat' => $request->alamat,
                'telepon' => $request->telepon,
                'keterangan' => $request->keterangan,
                'link' => $dir
            ],
            );
        }
        else{
            $data = DataPengajar::updateOrCreate(
                ['id' => $request->id],
                ['nama' => $request->nama,
                'nip' => $request->nip,
                'status' => $request->status,
                'pendidikan' => $request->pendidikan,
                'jabatan' => $request->jabatan,
                'jenis_kelamin' => $request->jenis_kelamin,
                'agama' => $request->agama,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'alamat' => $request->alamat,
                'telepon' => $request->telepon,
                'keterangan' => $request->keterangan,
            ],
            );

        }
        // dd($request->id);
        // dd($data);
        Alert::success('success', 'Data '.$data->nama .' telah ditambahkan');
        return redirect()->route('pengajar.index');
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
        $data['title'] = 'Data Pengajar';
        $data['data'] = DataPengajar::find($id);
        $data['status'] = array('aktif','non aktif');
        $data['pendidikan'] = array('S1','S2', 'S3');
        $data['jenis_kelamin'] = array('Laki-Laki','Perempuan');
        $data['agama'] = array('Islam','Kristen','Khatolik','Hindu','Budha','Konghucu');
        return view('backend.data_pengajar.create',$data);
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
        DataPengajar::find($id)->delete();
        Alert::success('success', 'Data berhasil dihapus.');
        return redirect()->back();
    }
}
