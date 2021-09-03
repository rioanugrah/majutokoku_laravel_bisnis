<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DataTables;
use Validator;
use Hash;
use Cache;
use Carbon\Carbon;

class PenggunaController extends Controller
{
    public function index(Request $req)
    {
        if ($req->ajax()) {
            $data = User::all();
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('role', function($row){
                        return $row->roles->role;
                    })
                    ->addColumn('status', function($row){
                        // return $row->roles->role;
                        if(Cache::has('is_online'.$row['id'])){
                            return '<span class="text-success">Online</span>';
                        }else{
                            return '<span class="text-secondary">Offline</span>';
                        }
                    })
                    ->addColumn('last_seen', function($row){
                        return Carbon::parse($row->last_seen)->diffForHumans();
                    })
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
                    ->rawColumns(['action','status'])
                    ->make(true);
        }
        return view('pengguna.index');
    }

    public function simpan(Request $req)
    {
        // $validator = $req->validate([
        //     'name' => 'required',
        //     'email' => 'required',
        //     'role' => 'required'
        // ],[
        //     'name.required' => 'Nama Belum Diisi',
        //     'email.required' => 'Email Belum Diisi',
        //     'role.required' => 'Akses Belum Diisi',
        // ]);

        // if($validator->fails()){
        //     $message_title = "Failed !";
        //     $message_content = "Data Tidak Disimpan, silahkan cek kembali";
        //     $message_type = "danger";
        //     $message_succes = false;
        // }

        $rules = [
            'name'  => 'required',
            'role'  => 'required',
            'email' => 'required|email|unique:users'
        ];
 
        $messages = [
            'name.required'  => 'Nama wajib diisi.',
            'role.required'  => 'Akses wajib diisi.',
            'email.required' => 'Email wajib diisi.',
            'email.email'    => 'Email tidak valid.',
            'email.unique'   => 'Email sudah terdaftar.',
        ];

        $validator = Validator::make($req->all(), $rules, $messages);
         
        if($validator->fails()){
            $message_title = "Failed !";
            $message_content = "Data Tidak Disimpan, silahkan cek kembali";
            // $message_content = "Data Tidak Disimpan, silahkan cek kembali";
            $message_type = "error";
            $message_succes = false;

            $array_message = array(
                'success' => $message_succes,
                'message_title' => $message_title,
                'message_content' => $message_content,
                'message_type' => $message_type,
            );
            return response()->json($array_message);
            // return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        $pengguna = User::firstOrCreate([
            'id' => rand(100,99999999),
            'name' => $req->name,
            'email' => $req->email,
            'role' => $req->role,
            'password' => Hash::make('users')
        ]);

        if($pengguna){
            $message_title="Berhasil !";
            $message_content="Data Pengguna Berhasil Disimpan";
            $message_type="success";
            $message_succes = true;
        }

        $array_message = array(
            'success' => $message_succes,
            'message_title' => $message_title,
            'message_content' => $message_content,
            'message_type' => $message_type,
        );

        return response()->json($array_message);
    }

    public function show($id)
    {
        $pengguna = User::find($id);

        if(empty($pengguna)){
            return response()->json([
                'success' => false,
                'message' => 'Data Tidak Ditemukan'
            ]);
        }

        return response()->json([
            'success' => true,
            'data' => [
                'id' => $pengguna->id,
                'name' => $pengguna->name,
                'email' => $pengguna->email,
                'role' => $pengguna->roles->role,
            ]
        ]);
    }

    public function update(Request $req)
    {

        $pengguna = User::find($req->edit_user)->update([
            'name' => $req->edit_name,
            'email' => $req->edit_email,
            'role' => $req->edit_akses,
        ]);

        if($pengguna){
            $message_title="Berhasil !";
            $message_content="Data Pengguna Berhasil Diupdate";
            $message_type="success";
            $message_succes = true;
        }

        $array_message = array(
            'success' => $message_succes,
            'message_title' => $message_title,
            'message_content' => $message_content,
            'message_type' => $message_type,
        );

        return response()->json($array_message);

    }
}
