<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\DataAlumni;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;

class DataAlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['title'] = 'Data Alumni';
        if ($request->ajax()) {
            $data = User::where('role', '=', 'alumni')->latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->editColumn('link', function ($row) {
                    if ($row->hasVerifiedEmail()) {
                        if (isset($row->dataAlumni)) {
                            $ijazah = asset('storage/' . $row->dataAlumni->link);
                            return '<a href="' . $ijazah . '" class="edit btn btn-primary btn-sm">Download</a>
                                    <a href="alumni/' . $row->id . '/check" class="edit btn btn-primary btn-sm">Isi Ijazah</a>';
                        }
                        return '<a href="alumni/' . $row->id . '/check" class="edit btn btn-primary btn-sm">Isi Ijazah</a>';
                    }
                })
                ->addColumn('ttl', function ($row) {
                    return $row->dataAlumni->tempat_lahir . ', ' . $row->dataAlumni->tanggal_lahir;
                })
                ->addColumn('alamat', function ($row) {
                    return $row->dataAlumni->alamat;
                })
                ->addColumn('nama_ayah', function ($row) {
                    return $row->dataAlumni->nama_ayah;
                })
                ->addColumn('nama_ibu', function ($row) {
                    return $row->dataAlumni->nama_ibu;
                })
                ->addColumn('action', function ($row) {

                    if ($row->hasVerifiedEmail()) {
                        $data =  '<a href="alumni/verifikasi/' . $row->id . '" class="edit btn btn-secondary btn-sm">Batalkan Verifikasi</a>';
                    } else {
                        $data =  '<a href="alumni/verifikasi/' . $row->id . '" class="edit btn btn-success btn-sm">Verifikasi</a>';
                    }
                    return '
                        ' . $data . '
                        <form action="alumni/delete/' . $row->id . '" method="GET">
                            ' . csrf_field() . '
                            <button type="submit" class="delete-button btn btn-danger btn-sm"
                                onclick="return confirm(\'Are You Sure Want to Delete?\')">Delete</button>
                        </form>
                        ';
                })
                ->rawColumns(['link', 'action'])
                ->make(true);
        }
        return view('backend.data_alumni.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'Data Alumni';
        return view('backend.data_alumni.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addIjazah(Request $request)
    {
        $request->validate([
            'link' => 'required|mimes:pdf,xlx,csv',
        ]);
        $nama = User::find($request->id);
        $extension = $request->link->getClientOriginalExtension();
        $fileName = Str::slug($nama->name) . '.' . $extension;
        $path = public_path() . '/storage/ijazah/';
        $dir = 'ijazah' . '/' . $fileName;
        $update = DataAlumni::where('user_id', $request->id);
        if (!empty($update->link)) {
            unlink('storage/' . $update->link);
        }
        $file = $request->file('link');
        $file->move($path, $fileName);

        // dd($request->link);
        $ijazah = DataAlumni::updateOrCreate(
            ['user_id' => $request->id],
            [
                'user_id' => $request->id,
                'link' => $dir,
            ]
        );
        Alert::success('Ijazah Berhasil Ditambahkan');
        return redirect()->route('alumni.index');
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
        // $data['title'] = 'Data Alumni';
        // $data['data'] = User::find($id);
        // return view('backend.data_alumni.create', $data);
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
        // dd($id);
        User::find($id)->delete();
        Alert::success('success', 'Data Berhasil Dihapus');
        return redirect()->back();
    }
    public function check($id)
    {
        $data['title'] = 'Data Alumni';
        $data['data'] = User::find($id);
        return view('backend.data_alumni.add_ijazah', $data);
    }

    public function verify($id)
    {
        $data = User::find($id);
        if ($data->email_verified_at != NULL) {
            $data->email_verified_at = NULL;
        } else {
            $data->email_verified_at = Carbon::now();
        }
        $data->save();
        Alert::success('success', 'Data Berhasil Diverifikasi');
        return redirect()->back();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'nisn' => ['required', 'string', 'max:255', 'unique:users'],
        ]);

        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'role' => 'alumni',
            'nisn' => $request['nisn'],
        ]);
        // dd($user);
        if ($request->file('foto')) {
            $extension = $request->foto->getClientOriginalExtension();
            $fileName = Str::slug($user->name) . '.' . $extension;
            $path = public_path() . '/storage/alumni/';
            $dir = 'alumni' . '/' . $fileName;
            $update = DataAlumni::where('user_id', $user->id);
            if (!empty($update->foto)) {
                unlink('storage/' . $update->foto);
            }
            $file = $request->file('foto');
            $file->move($path, $fileName);
            $alumni = DataAlumni::create(
                [
                    'alamat' => $request['alamat'],
                    'tempat_lahir' => $request['tempat_lahir'],
                    'tanggal_lahir' => $request['tanggal_lahir'],
                    'tanggal_lahir' => $request['tanggal_lahir'],
                    'nama_ayah' => $request['nama_ayah'],
                    'nama_ibu' => $request['nama_ibu'],
                    'user_id' => $user->id,
                    'foto' => $dir,
                ]
            );
        }
        else {
            $alumni = DataAlumni::create(
                [
                    'alamat' => $request['alamat'],
                    'tempat_lahir' => $request['tempat_lahir'],
                    'tanggal_lahir' => $request['tanggal_lahir'],
                    'tanggal_lahir' => $request['tanggal_lahir'],
                    'nama_ayah' => $request['nama_ayah'],
                    'nama_ibu' => $request['nama_ibu'],
                    'user_id' => $user->id,

                ]
            );
        }
        Alert::success('success', 'Data Berhasil ditambahkan');
        return redirect('admin/alumni');
    }
}
