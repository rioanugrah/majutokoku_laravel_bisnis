<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Kategori;
use App\Models\KategoriDetail;
use DB;
use DataTables;
use Validator;

class KategoriController extends Controller
{
    public function index(Request $request)
    {
        // $kategoris = Kategori::all();
        // return view('backend.kategori.index', compact('kategoris'));
        if ($request->ajax()) {
            $data = Kategori::all();
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        $btn = '<div class="button-items">';
                        $btn = $btn.'<button type="button" onclick="showDetail('.$row->id.')" class="btn btn-primary waves-effect waves-light">
                                    <i class="mdi mdi-eye-circle font-size-16 align-middle mr-2"></i> Detail Kategori
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
        
        // return view('users');
        // dd(\App\User::select('*'));
        
        return view('kategori.index');
    }

    public function create(Request $req)
    {
        $rules = [
            'nama_kategori'  => 'required',
        ];
 
        $messages = [
            'name_kategori.required'  => 'Kategori wajib diisi.',
            'nama_kategori.unique'   => 'Kategori sudah terdaftar.',
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

        $kategori = Kategori::create([
            'slug' => Str::slug($req->nama_kategori),
            'nama_kategori' => $req->nama_kategori,
        ]);

        if($kategori){
            $message_title="Berhasil !";
            $message_content="Kategori Berhasil Disimpan";
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

    public function createDetail(Request $req)
    {
        $rules = [
            'sub_kategori'  => 'required',
        ];
 
        $messages = [
            'sub_kategori.required'  => 'Kategori wajib diisi.',
            'sub_kategori.unique'   => 'Kategori sudah terdaftar.',
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

        $kategoriDetail = KategoriDetail::create([
            'kategori_id' => $req->kategori_id,
            'slug' => Str::slug($req->nama_kategori),
            'nama_kategori' => $req->nama_kategori,
        ]);

        if($kategoriDetail){
            $message_title="Berhasil !";
            $message_content="Sub Kategori Berhasil Disimpan";
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

    public function show(Request $request, $id)
    {
        try {
            $kategoris = Kategori::find($id);

            return response()->json([
                'status' => true,
                'data' => $kategoris
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false
            ], 401);
        }
    }

    public function showDetail(Request $request, $id)
    {
        if ($request->ajax()) {
            $data = KategoriDetail::where('kategori_id',$id)->get();
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('kategori_id', function($row){
                        return $row->kategori->nama_kategori;
                    })
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
    }

    public function update(Request $req)
    {
        try {
            $kategoris = Kategori::find($req->id)->update([
                'nama_kategori' => $req->nama_kategori
            ]);
            return response()->json([
                'status' => true,
                'message' => 'Data Berhasil Update'
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => 'Data Gagal Update'
            ], 401);
        }
    }

    public function delete($id)
    {
        try {
            $kategoris = Kategori::find($id)->delete();
            return redirect()->back()->with('message', 'Data Berhasil Hapus');
            // return response()->json([
            //     'status' => true,
            //     'message' => 'Data Berhasil Hapus'
            // ], 200);
        } catch (\Throwable $th) {
            return redirect()->back()->with('message', 'Data Gagal Hapus');
            // return response()->json([
            //     'status' => false,
            //     'message' => 'Data Gagal Hapus'
            // ], 401);
        }
    }

    public function kategoriDetailIndex($slug)
    {
        $kategori = Kategori::where('slug', $slug)->firstOrFail();
        $kategoriDetails = KategoriDetail::where('kategori_id', $kategori->id)->get();
        // dd($kategori);
        return view('backend.kategori_detail.index', compact('kategori','kategoriDetails'));
    }

    public function kategoriDetailCreate(Request $req)
    {
        try {
            KategoriDetail::create([
                'kategori_id' => $req->kategori_id,
                'sub_kategori' => $req->sub_kategori,
            ]);
            return response()->json([
                'status' => true,
                'message' => 'Data Berhasil Disimpan'
            ], 200);
            // return redirect()->back()->with('message','Data Berhasil Disimpan');
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => 'Data Gagal Disimpan'
            ], 401);
            // return redirect()->back()->with('message','Gagal Disimpan');
        }
    }

    public function kategoriDetailShow($id)
    {
        try {
            $kategoriDetails = KategoriDetail::find($id);
            return response()->json([
                'status' => true,
                'data' => $kategoriDetails
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false
            ], 401);
        }
    }

    public function kategoriDetailUpdate(Request $req)
    {
        try {
            $kategoriDetails = KategoriDetail::find($req->id)->update([
                'sub_kategori' => $req->sub_kategori
            ]);
            return response()->json([
                'status' => true,
                'message' => 'Data Berhasil Update'
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => 'Data Gagal Update'
            ], 401);
        }
    }

    public function kategoriDetailDelete($id)
    {
        try {
            $kategoriDetails = KategoriDetail::find($id)->delete();
            return redirect()->back()->with('message', 'Data Berhasil Hapus');
        } catch (\Throwable $th) {
            return redirect()->back()->with('message', 'Data Gagal Hapus');
        }
    }
}
