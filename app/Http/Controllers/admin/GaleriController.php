<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['title'] = 'Galeri';
        if ($request->ajax()) {
            $data = Galeri::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->editColumn('link', function($row){
                    $gambar = asset('storage/'.$row->link);
                    return
                    '<img src="'.$gambar.'" class="img-responsive avatar avatar-xl me-3"  alt="">';
                })
                ->addColumn('action', function ($row) {
                    return '
                        <a href="galeri/delete/' . $row->id . '" class="delete-button btn btn-danger btn-sm">Delete</a>
                        ';
                })
                ->rawColumns(['link','action'])
                ->make(true);
        }
        return view('backend.galeri.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $extension = $request->link->getClientOriginalExtension();
        $fileName = Str::random(6).'.' .$extension;
        $path = public_path().'/storage/silabus/';
        $dir = 'silabus' .'/' . $fileName;
        $file = $request->file('link');
        $file->move($path, $fileName);

        // dd($request->link);

        $data = Galeri::updateOrCreate(
            [
                'id' => $request->id,
            ],
            [
                'name' => $fileName,
                'link' => $dir,
            ]
        );
        Alert::success('success', 'Data telah ditambahkan');
        return redirect()->route('galeri.index');
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
        //
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
        Galeri::find($id)->delete();
        Alert::success('success', 'Data berhasil dihapus.');
        return redirect()->back();
    }
}
