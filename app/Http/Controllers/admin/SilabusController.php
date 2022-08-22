<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Silabus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;
use Alert;
use Exception;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;

class SilabusController extends Controller
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
    public function index(Request $request)
    {
        $data['title'] = 'SILABUS';
        if ($request->ajax()) {
            $get = Silabus::orderBy('id','Desc')->get();
            return DataTables::of($get)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){

                           return '
                           <a href="silabus/'.$row->id.'/edit" class="edit btn btn-secondary btn-sm">Edit</a>
                           <a href="silabus/delete/'.$row->id.'" class="delete-button btn btn-danger btn-sm">Delete</a>
                           ';
                    })
                    ->editColumn('link',function($row){
                        $get = asset('storage/'.$row->link);
                       return '<a href="'.$get.'" class="edit btn btn-primary btn-sm">Download</a>';
                    })
                    ->rawColumns(['action','link'])
                    ->make(true);
        }

        return view('backend.silabus.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $data['title'] = 'SILABUS';
        return view('backend.silabus.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            if($request->link){
                $request->validate([
                    'link' => 'required|mimes:pdf,xlx,csv|max:2048',
                ]);
                $extension = $request->link->getClientOriginalExtension();
                $fileName = Str::slug($request->mata_pelajaran).'.' .$extension;
                $path = public_path().'/storage/silabus/';
                $dir = 'silabus' .'/' . $fileName;
                $update = Silabus::find($request->id);
                if(!empty($update->link)){
                    unlink('storage/'.$update->link);
                }
                $file = $request->file('link');
                $file->move($path, $fileName);


                $data = Silabus::updateOrCreate(
                    [
                        'id' => $request->id,
                    ],
                    [
                        'mata_pelajaran' => $request->mata_pelajaran,
                        'tahun_ajar' => $request->tahun_ajar,
                        'kelas' => $request->kelas,
                        'link' =>  $request->link ? $dir : '',
                    ]
                );
            }
            else{
                $data = Silabus::updateOrCreate(
                    [
                        'id' => $request->id,
                    ],
                    [
                        'mata_pelajaran' => $request->mata_pelajaran,
                        'tahun_ajar' => $request->tahun_ajar,
                        'kelas' => $request->kelas,
                    ]
                );
            }


            FacadesAlert::success('success', 'Data telah ditambahkan');
            return redirect()->route('silabus.index');
        }
        catch (Exception $e) {
            FacadesAlert::error('error', 'Terjadi kesalahan');
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
    {   $title= 'SILABUS';
        $data = Silabus::find($id);
        return view('backend.silabus.create',compact('data','title'));
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
        Silabus::find($id)->delete();
        FacadesAlert::success('Success', 'Data berhasil dihapus');
        return redirect()->back();
    }
}
