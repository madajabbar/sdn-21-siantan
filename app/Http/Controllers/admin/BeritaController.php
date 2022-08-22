<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['title'] = 'BERITA';
        if ($request->ajax()) {
            $data = Berita::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->editColumn('isi', function($row){
                    $isi = Str::limit($row->isi, $limit = 200, $end = '...');
                    return $isi;
                })
                ->editColumn('link', function ($row) {
                    $gambar = asset('storage/' . $row->link);
                    return
                        '<img src="' . $gambar . '" class="img-responsive avatar avatar-xl me-3"  alt="">';
                })
                ->addColumn('action', function ($row) {
                    return '
                        <a href="berita/' . $row->id . '/edit" class="edit btn btn-secondary btn-sm">Edit</a>
                        <a href="berita/delete/' . $row->id . '" class="delete-button btn btn-danger btn-sm">Delete</a>
                        ';
                })
                ->rawColumns(['link', 'action','isi'])
                ->make(true);
        }
        return view('backend.berita.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'BERITA';
        return view('backend.berita.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            //code...
            if($request->file('link')){
                $request->validate([
                    'link' => 'mimes:jpeg,jpg,png,gif|required|max:10000',
                ]);

                $extension = $request->link->getClientOriginalExtension();
                $fileName = Str::slug($request->judul).'.' .$extension;
                $path = public_path().'/storage/berita/';
                $dir = 'berita' .'/' . $fileName;
                $file = $request->file('link');
                $file->move($path, $fileName);
                $data = Berita::updateOrCreate(
                    [
                        'id' => $request->id,
                    ],
                    [
                        'judul' => $request->judul,
                        'isi' => $request->input('isi'),
                        'link' => $dir,
                    ]
                );

            }
            else{
                $data = Berita::updateOrCreate(
                    [
                        'id' => $request->id,
                    ],
                    [
                        'judul' => $request->judul,
                        'isi' => $request->input('isi'),
                    ]
                );

            }
            Alert::success('success', 'Data '.$data->judul .' telah ditambahkan');
            return redirect()->route('berita.index');
        } catch (\Throwable $th) {
            //throw $th;
            Alert::error('error', 'Terjadi kesalahan');
            return redirect()->back()
            ->with('error', 'Terjadi kesalahan');
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
        $data['title'] = 'BERITA';
        $data['data'] = Berita::find($id);

        return view('backend.berita.create',$data);
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
       $data= Berita::find($id);
    //    unlink('storage/'.$data->link);
       $data->delete();
       Alert::success('success','Data '.$data->judul.' berhasil dihapus');
       return redirect()->back();
    }
}
