<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\DataPelajar;
use App\Models\Jadwal;
use App\Models\Kelas;
use App\Models\Nilai;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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
                ->editColumn('keterangan', function ($row) {
                    if (isset($row->keterangan)) {
                        return $row->keterangan;
                    } else {
                        return 'Aktif';
                    }
                })
                ->addColumn('lihatNilai', function ($row){
                    return '
                    <a href="pelajar/lihat/nilai/'. $row->id .'" class="edit btn btn-primary btn-sm">Lihat Nilai</a>';
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
                ->addColumn('nilai',function ($row){
                    return '
                    <a href="pelajar/' . $row->id . '/nilai" class="edit btn btn-primary btn-sm">Isi Nilai</a>';
                })
                ->rawColumns(['nilai', 'action','lihatNilai'])
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
        $data['kelas'] = Kelas::all();
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
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'nisn' => ['required', 'string', 'max:255', 'unique:users'],
            ]);
            // dd($request->nisn);

            $user = User::updateOrCreate(
                ['id' => $request->user_id],
                [
                    'name' => $request['name'],
                    'email' => $request['email'],
                    'password' => Hash::make($request['password']),
                    'role' => 'pelajar',
                    'nisn' => $request['nisn'],
                ]
            );

            $data = DataPelajar::updateOrCreate(
                ['id' => $request->id],
                [
                    'nama' => $user->name,
                    'jenis_kelamin' => $request->jenis_kelamin,
                    'agama' => $request->agama,
                    'tempat_lahir' => $request->tempat_lahir,
                    'tanggal_lahir' => $request->tanggal_lahir,
                    'alamat' => $request->alamat,
                    'telepon' => $request->telepon,
                    'keterangan' => $request->keterangan,
                    'link' => $dir,
                    'kelas_id'=>$request->kelas_id
                ],
            );
        }

        $user = User::updateOrCreate(
            ['id' => $request->user_id],
            [
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
                'role' => 'pelajar',
                'nisn' => $request['nisn'],
            ]
        );
        // dd($user);
        $data = DataPelajar::updateOrCreate(
            ['user_id' => $user->id],
            [
                'nama' => $user->name,
                'jenis_kelamin' => $request->jenis_kelamin,
                'agama' => $request->agama,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'alamat' => $request->alamat,
                'telepon' => $request->telepon,
                'keterangan' => $request->keterangan,
                'link' => $request->link,
                'kelas_id'=>$request->kelas_id
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
        $data['kelas'] = Kelas::all();
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
    public function nilai($id){
        $data['data'] = DataPelajar::find($id);
        $data['title'] = 'Nilai '.$data['data']->nama;
        $data['kelas'] = Kelas::find($data['data']->kelas_id);
        $data['jadwal'] = Jadwal::where('kelas_id',$data['kelas']->id)->get();
        return view('backend.data_pelajar.nilai', $data);
    }

    public function addNilai(Request $request){
        // dd($request->nilai);
        $count = count($request->nilai);
        for ($i=0; $i<$count; $i++){
            $nilai = new Nilai();
            $nilai->nilai = $request->nilai[$i];
            $nilai->data_pelajar_id = $request->data_pelajar_id;
            $nilai->jadwal_id = $request->jadwal_id[$i];
            $nilai->save();
        }
        Alert::success('success', 'Data nilai telah ditambahkan');
        return redirect()->route('pelajar.index');
    }

    public function lihatNilai( $id, Request $request) {
        $data['data'] = DataPelajar::find($id);
        $data['title'] = 'Nilai'.$data['data']->name;
        if($request->ajax()){
            $data = Nilai::where('data_pelajar_id', $id)->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('mata_pelajaran', function ($row){
                    return $row->jadwal->mata_pelajaran;
                })
                ->addColumn('action', function ($row) {
                    return '
                        <a href="' . $row->id . '/edit" class="edit btn btn-secondary btn-sm">Edit</a>
                        <form action="pelajar/delete/' . $row->id . '" method="GET">
                            ' . csrf_field() . '
                            <button type="submit" class="delete-button btn btn-danger btn-sm"
                                onclick="return confirm(\'Are You Sure Want to Delete?\')">Delete</button>
                        </form>


                        ';
                })
                ->rawColumns(['nilai', 'action'])
                ->make(true);
        }
        return view('backend.data_pelajar.lihat_nilai',$data);
    }

    public function editNilai($id) {
        $data['data'] = Nilai::find($id);
        $data['title'] = 'Edit Nilai';
        return view('backend.data_pelajar.edit_nilai',$data);
    }

    public function updateNilai(Request $request){
        $data =  Nilai::find($request->id);
        $data->nilai = $request->nilai;
        $data->save();
        Alert::success('success', 'Data nilai telah ubah');
        return redirect()->route('pelajar.index');
    }


}
