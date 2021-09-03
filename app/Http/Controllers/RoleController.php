<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Roles;
use DataTables;

class RoleController extends Controller
{
    public function index(Request $req)
    {
        if ($req->ajax()) {
            $data = Roles::all();
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        $view = url('roles/'.$row->slug);
                        $btn = '<div class="button-items">';
                        $btn = $btn.'<button type="button" onclick="show('.$row->id.')" class="btn btn-success waves-effect waves-light">
                                    <i class="mdi mdi-eye-circle font-size-16 align-middle mr-2"></i> Show
                                </button>';
                        $btn = $btn.'<button type="button" onclick="edit('.$row->id.')" class="btn btn-warning waves-effect waves-light">
                                    <i class="bx bx-highlight font-size-16 align-middle mr-2"></i> Edit
                                </button>';
                        $btn = $btn.'<button type="button" onclick="delete('.$row->id.')" class="btn btn-danger waves-effect waves-light">
                                    <i class="bx bx-trash-alt font-size-16 align-middle mr-2"></i> Delete
                                </button>';
                        $btn = $btn.'</div>';
                        //    $btn = '<button onclick="show('.$row->id.')" class="btn btn-warning dim"><i class="fa fa-edit"></i></button>';
                        //    $btn = $btn.'<button class="btn btn-danger dim" onclick="hapus('.$row->id.')"><i class="fa fa-trash"></i></button>';
         
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('roles.index');
    }

    public function simpan(Request $req)
    {
        try {
            $req->validate([
                'role' => 'required'
            ],[
                'role.required' => 'Akses Belum Diisi'
            ]);
    
            $roles = Roles::max('id');
    
            Roles::create([
                'id' => $roles+1,
                'role' => $req->role   
            ]);
    
            return response()->json([
                'status' => true,
                'message' => 'Data Akses Disimpan'
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => 'Data Not Save'
            ]);
        }
    }

    public function show($id)
    {
        try {
            $roles = Roles::find($id);
            return response()->json([
                'status' => true,
                'data' => $roles
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => 'Data Not Find'
            ]);
        }
    }

    public function update(Request $req)
    {
        try {
            $roles = Roles::find($req->id_role)->update([
                'role' => $req->role
            ]);
            return response()->json([
                'status' => true,
                'message' => 'Data Berhasil Update'
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => 'Data Gagal Update'
            ]);
        }
    }
}
