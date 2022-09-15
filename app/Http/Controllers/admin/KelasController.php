<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Kelas;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;

class KelasController extends Controller
{
    public function index(Request $request){
        $data['title'] = 'Kelas';
        if ($request->ajax()) {
            $data = Kelas::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    return '
                        <a href="kelas/' . $row->id . '/edit" class="edit btn btn-secondary btn-sm">Edit</a>
                        <form action="kelas/delete/' . $row->id . '" method="GET">
                            ' . csrf_field() . '
                            <button type="submit" class="delete-button btn btn-danger btn-sm"
                                onclick="return confirm(\'Are You Sure Want to Delete?\')">Delete</button>
                        </form>
                        ';
                })
                ->addColumn('jumlah', function($row){
                    return $row->dataPelajar->count();
                })
                ->rawColumns(['link','action'])
                ->make(true);
        }
        return view('backend.kelas.index',$data);
    }
    public function create(){
        $data['title'] = 'Tambah Kelas';
        return view('backend.kelas.create',$data);
    }
    public function edit($id){
        $data['title'] = 'Tambah Kelas';
        $data['data'] = Kelas::find($id);
        return view('backend.kelas.create',$data);
    }
    public function store(Request $request){
        $data = Kelas::updateOrCreate(
            ['id' => $request->id],
            [
                'name' => $request->name,
            ],
        );
        // dd($data);
        Alert::success('success', 'Data ' . $data->name . ' telah ditambahkan');
        return redirect()->route('kelas.index');
    }
    public function destroy($id) {
        Kelas::find($id)->delete();
        Alert::success('success', 'Data berhasil dihapus.');
        return redirect()->back();
    }

}
