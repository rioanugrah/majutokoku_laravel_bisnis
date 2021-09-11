<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\MenuKategori;
use App\Models\Roles;
use Carbon\Carbon;
use DataTables;
use Validator;

class MenuController extends Controller
{
    public function index(Request $req)
    {
        if ($req->ajax()) {
            
            $akses_menu = Menu::where('role_id', auth()->user()->role)->first();
            
            if($akses_menu->role_id == 1){
                $data = Menu::where('role_id', auth()->user()->role)->get();
            }else{
                $data = Menu::all();
            }
            
            return DataTables::of($data)
                    ->addIndexColumn()
                    // ->addColumn('role', function($row){
                    //     return $row->roles->role;
                    // })
                    ->addColumn('no', function($row){
                        // $row = 1;
                        $i=1;
                        return $i++;
                    })
                    ->addColumn('role', function($row){
                        return $row->roles->role;
                    })
                    ->addColumn('action', function($row){
                        // $view = url('roles/'.$row->slug);
                        $btn = '<div class="button-items">';
                        // if($row->role_id == auth()->user()->role){
                            
                        // }
                        if($row->r == 'Y'){
                            $btn = $btn.'<button type="button" onclick="show('.$row->id.')" class="btn btn-success waves-effect waves-light">
                                            <i class="mdi mdi-eye-circle font-size-16 align-middle mr-2"></i> Show
                                        </button>';
                        }
                        if($row->u == 'Y'){
                            $btn = $btn.'<button type="button" onclick="edit('.$row->id.')" class="btn btn-warning waves-effect waves-light">
                                            <i class="bx bx-highlight font-size-16 align-middle mr-2"></i> Edit
                                        </button>';
                        }
                        if($row->d == 'Y'){
                            $btn = $btn.'<button type="button" onclick="delete('.$row->id.')" class="btn btn-danger waves-effect waves-light">
                                            <i class="bx bx-trash-alt font-size-16 align-middle mr-2"></i> Delete
                                        </button>';
                        }
                            // if($row->role_id == auth()->user()->role){
                                
                                
                            // }
                        $btn = $btn.'</div>';
                        //    $btn = '<button onclick="show('.$row->id.')" class="btn btn-warning dim"><i class="fa fa-edit"></i></button>';
                        //    $btn = $btn.'<button class="btn btn-danger dim" onclick="hapus('.$row->id.')"><i class="fa fa-trash"></i></button>';
         
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        $data['roles'] = Roles::all();
        return view('menu.index', $data);
    }

    public function index_kategori_menu(Request $req)
    {
        if ($req->ajax()) {
            $data = MenuKategori::all();
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('menu', function($row){
                        return $row->menus->menu;
                    })
                    ->addColumn('action', function($row){
                        $btn = '<div class="button-items">';
                        $btn = $btn.'<button type="button" onclick="edit('.$row->id.')" class="btn btn-warning">
                                    <i class="bx bx-highlight font-size-16 align-middle mr-2"></i> Edit
                                </button>';
                        $btn = $btn.'<button type="button" onclick="delete('.$row->id.')" class="btn btn-danger">
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
       $data['menus'] = Menu::where('role_id', 2)->get();
        return view('menu_kategori.index', $data);
    }

    public function simpan(Request $request)
    {
        $rules = [
            'menu'  => 'required',
            'slug'  => 'required',
            'role_id'  => 'required',
        ];
 
        $messages = [
            'menu.required'  => 'Menu wajib diisi.',
            'slug.required'   => 'Link wajib diisi.',
            'role_id.required'   => 'Akses wajib diisi.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->passes()) {
            $input = $request->all();

            if($input['role_id'] == ''){
                $input['role_id'] = 1;
            }
    
            $item = Menu::create($input);

            if($item){
                    $message_title="Berhasil !";
                    $message_content="Menu Berhasil Dibuat";
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

    public function simpan_menu_kategori(Request $request)
    {
        $rules = [
            'menu_kategori'  => 'required',
            'menu_id'  => 'required',
        ];
 
        $messages = [
            'menu_kategori.required'  => 'Kategori Menu wajib diisi.',
            'menu_id.required'   => 'Menu wajib diisi.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->passes()) {
            $input = $request->all();
    
            $item = MenuKategori::create($input);

            if($item){
                    $message_title="Berhasil !";
                    $message_content="Kategori Menu Berhasil Dibuat";
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
}
