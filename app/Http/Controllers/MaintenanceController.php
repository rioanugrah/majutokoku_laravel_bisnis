<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Maintenance;
use DB;
use DataTables;
use Validator;

class MaintenanceController extends Controller
{
    public function index()
    {
        return view('maintenance.index');
    }

    public function index_maintenance(Request $request)
    {
        if ($request->ajax()) {
            $data = Maintenance::all();
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        $btn = '<div class="button-items">';
                        $btn = $btn.'<button type="button" onclick="edit('.$row->id.')" class="btn btn-warning waves-effect waves-light">
                                    <i class="bx bx-highlight font-size-16 align-middle mr-2"></i> Edit
                                </button>';
                        $btn = $btn.'<button type="button" onclick="hapus('.$row->id.')" class="btn btn-danger waves-effect waves-light">
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
        return view('maintenance.maintenance');
    }

    public function simpan(Request $request)
    {
        $rules = [
            'title'  => 'required',
            'url'  => 'required',
            'deskripsi'  => 'required',
            'status'  => 'required',
            'mulai'  => 'required',
            'sampai'  => 'required',
        ];
 
        $messages = [
            'title.required'  => 'Title wajib diisi.',
            'url.required'   => 'Link Url wajib diisi.',
            'deskripsi.required'   => 'Deskripsi wajib diisi.',
            'status.required'   => 'Status wajib diisi.',
            'mulai.required'   => 'Tanggal Mulai wajib diisi.',
            'sampai.required'   => 'Tanggal Selesai wajib diisi.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->passes()) {
            $input = $request->all();
            // $input['url'] = url($request->url);

            $maintenance = Maintenance::create($input);

           if($maintenance){
                $message_title="Berhasil !";
                $message_content="Maintenance Berhasil Dibuat";
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

        return response()->json(
            [
                'success' => false,
                'error' => $validator->errors()->all()
            ]
        );
    }

    public function edit($id)
    {
        $maintenance = Maintenance::find($id);

        if(!empty($maintenance)){
            return response()->json([
                'status' => true,
                'data' => $maintenance
            ]);
        }

        return response()->json([
           'status' => false, 
           'data' => 'Data Tidak Ditemukan' 
        ]);
        
    }

    public function update(Request $request)
    {
        $rules = [
            'edit_title'  => 'required',
            'edit_url'  => 'required',
            'edit_deskripsi'  => 'required',
            'edit_status'  => 'required',
            'edit_mulai'  => 'required',
            'edit_sampai'  => 'required',
        ];
 
        $messages = [
            'edit_title.required'  => 'Title wajib diisi.',
            'edit_url.required'   => 'Link Url wajib diisi.',
            'edit_deskripsi.required'   => 'Deskripsi wajib diisi.',
            'edit_status.required'   => 'Status wajib diisi.',
            'edit_mulai.required'   => 'Tanggal Mulai wajib diisi.',
            'edit_sampai.required'   => 'Tanggal Selesai wajib diisi.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->passes()) {
            $input = $request->all();
            // $input['url'] = url($request->url);

            $maintenance = Maintenance::where('id', $input['edit_id'])->update([
                'title' => $input['edit_title'],
                'url' => $input['edit_url'],
                'deskripsi' => $input['edit_deskripsi'],
                'status' => $input['edit_status'],
                'mulai' => $input['edit_mulai'],
                'sampai' => $input['edit_sampai'],
            ]);

           if($maintenance){
                $message_title="Berhasil !";
                $message_content="Maintenance Berhasil Diupdate";
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

        return response()->json(
            [
                'success' => false,
                'error' => $validator->errors()->all()
            ]
        );
    }

    public function delete($id)
    {
        $maintenance = Maintenance::find($id);

        if(!empty($maintenance)){
            
            $maintenance->delete();

            $message_title="Berhasil !";
            $message_content="Maintenance Berhasil Dihapus";
            $message_type="success";
            $message_succes = true;

            $array_message = array(
                'success' => $message_succes,
                'message_title' => $message_title,
                'message_content' => $message_content,
                'message_type' => $message_type,
            );
            return response()->json($array_message);
        }
        return response()->json(
            [
                'success' => false,
                'error' => 'Data Tidak Berhasil Dihapus'
            ]
        );
    }
}
