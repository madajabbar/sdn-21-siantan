<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Jadwal;
use App\Models\Kelas;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;

class JadwalController extends Controller
{
    public function index(Request $request){
        $data['title'] = 'Jadwal';
        if ($request->ajax()) {
            $data = Jadwal::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    return '
                        <a href="jadwal/' . $row->id . '/edit" class="edit btn btn-secondary btn-sm">Edit</a>
                        <form action="jadwal/delete/' . $row->id . '" method="GET">
                            ' . csrf_field() . '
                            <button type="submit" class="delete-button btn btn-danger btn-sm"
                                onclick="return confirm(\'Are You Sure Want to Delete?\')">Delete</button>
                        </form>
                        ';
                })
                ->editColumn('kelas_id', function ($row){
                    return $row->kelas->name;
                })
                ->rawColumns(['link','action'])
                ->make(true);
        }
        return view('backend.jadwal.index',$data);
    }
    public function create(){
        $data['title'] = "Tambah Jadwal";
        $data['kelas'] = Kelas::all();
        return view('backend.jadwal.create',$data);
    }
    public function edit($id){
        $data['title'] = "Tambah Jadwal";
        $data['kelas'] = Kelas::all();
        $data['data'] = Jadwal::find($id);
        return view('backend.jadwal.create',$data);
    }
    public function store(Request $request){
        $data = Jadwal::updateOrCreate(
            ['id' => $request->id],
            [
                'mata_pelajaran' => $request->mata_pelajaran,
                'kelas_id' => $request->kelas_id,
                'hari' => $request->hari,
                'jam' => $request->jam,
            ],
        );
        // dd($data);
        Alert::success('success', 'Data ' . $data->mata_pelajaran . ' telah ditambahkan');
        return redirect()->route('jadwal.index');
    }
    public function destroy($id) {
        Jadwal::find($id)->delete();
        Alert::success('success', 'Data berhasil dihapus.');
        return redirect()->back();
    }

}
