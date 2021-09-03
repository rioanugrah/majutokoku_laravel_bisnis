<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Portal;
use DB;
use DataTables;
use Validator;

class PortalController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Portal::all();
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        $btn = '<div class="button-items">';
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
        return view('portal.index');
    }

    public function simpan(Request $req)
    {
        $rules = [
            'nama_portal'  => 'required',
            'link_url'  => 'required',
            'icon'  => 'required',
        ];
 
        $messages = [
            'nama_portal.required' => 'Portal wajib diisi.',
            'nama_portal.unique' => 'Portal sudah terdaftar.',
            'link_url.required' => 'Url wajib diisi.',
            'link_url.unique' => 'Url sudah terdaftar.',
            'icon.required' => 'Icon wajib diisi.',
            'icon.unique' => 'Icon sudah terdaftar.',
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

        $portal = Portal::create([
            'nama_portal' => $req->nama_portal,
            'slug' => Str::slug($req->nama_portal),
            'link_url' => $req->link_url,
            'icon' => $req->icon,
        ]);

        if($portal){
            $message_title="Berhasil !";
            $message_content="Portal Berhasil Disimpan";
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
