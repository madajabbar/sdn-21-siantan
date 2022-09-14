<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\DataAlumni;
use App\Models\DataPelajar;
use App\Models\DataPengajar;
use App\Models\Galeri;
use App\Models\Silabus;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('frontend.beranda.index');
    }
    public function profil(){
        return view('frontend.profil.index');
    }
    public function dataPengajar(){
        $data['pengajar'] = DataPengajar::latest()->paginate(9);
        return view('frontend.data_pengajar.index', $data);
    }
    public function dataPengajarPersonal($id){
        $data['pengajar'] = DataPengajar::find($id);
        return view('frontend.data_pengajar.data_pengajar_personal.index', $data);
    }
    public function dataPelajar(Request $request){
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
                ->rawColumns(['link', 'action'])
                ->make(true);
        }
        return view('frontend.data_pelajar.index');
    }
    public function dataPelajarPersonal($id){
        $data['pelajar'] = DataPelajar::find($id);
        return view('frontend.data_pelajar.data_pelajar_personal.index', $data);
    }
    public function dataAlumni(Request $request){
        // if ($request->ajax()) {
        //     $data = DataAlumni::latest()->get();
        //     return DataTables::of($data)
        //         ->addIndexColumn()
        //         ->addColumn('ttl', function ($row) {
        //             $ttl = $row->tempat_lahir . ', ' . $row->tanggal_lahir;
        //             return $ttl;
        //         })
        //         ->addColumn('nama',function ($row) {
        //             return $row->user->name;
        //         })
        //         ->addColumn('nisn',function ($row) {
        //             return $row->user->nisn;
        //         })
        //         ->addColumn('nama_ayah',function ($row) {
        //             return $row->nama_ayah;
        //         })
        //         ->addColumn('nama_ibu',function ($row) {
        //             return $row->nama_ibu;
        //         })
        //         ->addColumn('alamat',function ($row) {
        //             return $row->alamat;
        //         })
        //         ->addColumn('action', function ($row){
        //             $data =  '<a href="data-alumni/' . $row->id . '" class="edit btn btn-success btn-sm">Detail</a>';
        //             return $data;
        //         })
        //         ->rawColumns(['action'])
        //         ->make(true);
        // }
        $data['alumni'] = DataAlumni::latest()->paginate(9);
        return view('frontend.data_alumni.index',$data);
    }
    public function dataAlumniPersonal($id){
        $data['alumni'] = DataAlumni::find($id);
        return view('frontend.data_alumni.data_alumni_personal.index', $data);
    }
    public function berita(){
        $data['berita'] = Berita::latest()->paginate(9);
        return view('frontend.berita.index',$data);
    }
    public function beritaSinglePage($id){
        $data['berita'] = Berita::find($id);
        return view('frontend.berita.single-page.index',$data);
    }
    public function silabus(Request $request){
        if ($request->ajax()) {
            $get = Silabus::orderBy('id','Desc')->get();
            return DataTables::of($get)
                    ->addIndexColumn()
                    ->editColumn('link',function($row){
                        $get = asset('storage/'.$row->link);
                       return '<a href="'.$get.'" class="edit btn btn-primary btn-sm">Download</a>';
                    })
                    ->rawColumns(['link'])
                    ->make(true);
        }
        return view('frontend.silabus.index');
    }
    public function galeri(){
        $data['galeri'] = Galeri::latest()->paginate(9);
        return view('frontend.galeri.index', $data);
    }
    public function user($id){
        $data['data'] = User::find($id);
        return view('frontend.user.index',$data);
    }
    public function editUser($id){
        $data['data'] = User::find($id);
        return view('frontend.user.edit',$data);
    }
    public function update(Request $request, $id){
        $user = User::find($id);
        if($request->email){
            $user->email = $request->email;
        }
        if($request->alamat){
            $user->dataAlumni->alamat = $request->alamat;
        }
        // dd($user->dataAlumni->foto);
        if($request->file('foto')){
            $extension = $request->foto->getClientOriginalExtension();
            $fileName = Str::slug($user->name) . '.' . $extension;
            $path = public_path() . '/storage/alumni/';
            $dir = 'alumni' . '/' . $fileName;
            $update = DataAlumni::where('user_id', $user->id)->first();
            if (!empty($update->foto)) {
                unlink('storage/' . $update->foto);
            }
            $file = $request->file('foto');
            $file->move($path, $fileName);
            $update->foto = $dir;
            $update->save();
        }
        $user->save();
        $user->dataAlumni->save();
        Alert::success('success', 'Data Berhasil Diubah');
        return redirect('user/'.$user->id);
    }
}
