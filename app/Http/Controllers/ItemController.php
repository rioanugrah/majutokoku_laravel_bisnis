<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\Item;
use App\Models\Kategori;
use DB;
use PDF;
use File;
use DataTables;
use Validator;
use \Milon\Barcode\DNS1D;

class ItemController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Item::all();
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        $btn = '<div class="button-items">';
                        $btn = $btn.'<a href="'.url('item/download_barcode/'.$row->kode_barang).'" class="btn btn-success waves-effect waves-light">
                                    <i class="bx bx-barcode font-size-16 align-middle mr-2"></i> Unduh
                                </a>';
                        $btn = $btn.'<button type="button" onclick="detail('.$row->kode_barang.')" class="btn btn-primary waves-effect waves-light">
                                    <i class="bx bx-box font-size-16 align-middle mr-2"></i> Lihat Barang
                                </button>';
                        $btn = $btn.'<button type="button" onclick="edit('.$row->kode_barang.')" class="btn btn-warning waves-effect waves-light">
                                    <i class="bx bx-highlight font-size-16 align-middle mr-2"></i> Edit
                                </button>';
                        $btn = $btn.'<button type="button" onclick="delete('.$row->kode_barang.')" class="btn btn-danger waves-effect waves-light">
                                    <i class="bx bx-trash-alt font-size-16 align-middle mr-2"></i> Delete
                                </button>';
                        $btn = $btn.'</div>';
                        //    $btn = '<button onclick="show('.$row->id.')" class="btn btn-warning dim"><i class="fa fa-edit"></i></button>';
                        //    $btn = $btn.'<button class="btn btn-danger dim" onclick="hapus('.$row->id.')"><i class="fa fa-trash"></i></button>';
         
                        return $btn;
                    })
                    ->addColumn('foto', function($row){
                        $url_image= Storage::url('produk/'.$row->foto);
                        // $url_image= Storage::disk('storage')->get('produk/'.$row->foto);
                        // $url_image= asset('storage/app/public/produk/'.$row->foto);
                        // $url_image= asset('storage/app/produk/'.$row->foto);
                        return '<img src="'.$url_image.'" width="200" align="center">' ;
                        // return $row->roles->role;
                    })
                    ->addColumn('harga_barang', function($row){
                        return 'Rp.'.number_format($row->harga_barang,2,",",".");
                        // return $row->roles->role;
                    })
                    ->addColumn('kategori', function($row){
                        return $row->kategori_item->nama_kategori;
                        // return $row->roles->role;
                    })
                    ->addColumn('barcode', function($row){
                        $d = new DNS1D();
                        $d->setStorPath(__DIR__.'/cache/');
                        // return '<img src="data:image/png;base64,' . $d->getBarcodePNG(4445645656, 'EAN13', 2,33,array(1,1,1), true) . '" alt="barcode"   />';
                        
                        // $barcode = '<img class="barcode1"/>
                        //             <script>JsBarcode(".barcode1", "'.$row->kode_barang.'");</script>';
                        $kode = (float)$row->kode_barang;
                        $barcode = '<img class="barcode"/><script>
                                        JsBarcode(".barcode")
                                        .options({font: "OCR-B"})
                                        .CODE39("'.$kode.'", {fontSize: 18, textMargin: 0})
                                        .blank(20)
                                        .render();
                                    </script>';
                        // $barcode = '<svg class="barcode"
                        //                 jsbarcode-format="upc"
                        //                 jsbarcode-value="'.$row->kode_barang.'"
                        //                 jsbarcode-textmargin="0"
                        //                 jsbarcode-fontoptions="bold">
                        //             </svg>';
                        return $barcode;
                        
                        // return $d->getBarcodeSVG('4445645656', 'C128B');
                        // return DNS1D::getBarcodeHTML('4445645656', 'C128A');
                        // return $row->kode_barang;
                        // return DNS1D::getBarcodeHTML('4445645656', 'C128A');
                    })
                    ->rawColumns(['action','foto','barcode'])
                    ->make(true);
        }

        $data['kategoris'] = Kategori::all();
        return view('item.index', $data);
    }

    public function barcode($kode_barang)
    {
        $item = Item::where('kode_barang',$kode_barang)->first();
        // $headers = array('Content-Type: image/png');
        if(!empty($item)){
            // return response()->json([
            //     'data' => DNS1D::getBarcodeHTML('4445645656', 'C128A')
            // ]);
            $d = new DNS1D();
            $d->setStorPath(__DIR__.'/cache/');
            return '<img src="data:image/png;base64,' . $d->getBarcodePNG($item->kode_barang, 'EAN13') . '" alt="barcode"   />';
            // return '<img src="data:image/png;base64,' . $d->getBarcodePNG($item->kode_barang, 'EAN13') . '" alt="barcode"   />';
            // return $d->getBarcodePNG($item->kode_barang, 'EAN13');
            // return file_put_contents('barcode.jpg', $d->getBarcodeHTML($kode_barang, 'C128A'));
            // return response()->download($d->getBarcodeHTML($item->kode_barang, 'EAN13'), $kode_barang.'.png',$headers);
        }

        return false;
    }

    public function simpan_barcode($kode_barang)
    {
        $item = Item::where('kode_barang',$kode_barang)->first();
        $d = new DNS1D();
        $d->setStorPath(__DIR__.'/cache/');
        return Storage::download('<img src="data:image/png;base64,' . $d->getBarcodePNG($item->kode_barang, 'EAN13') . '" alt="barcode"   />');
        // return Storage::download($item->kode_barang.'.jpg');
    }

    public function downloadBarcode(Request $request)
    {
        $data['item'] = Item::where('kode_barang',$request->cari_barcode)->first();

        $data['jml'] = (int)$request->jumlah_cetak;
        // for ($i=0; $i < $jml; $i++) {
        //     echo "The number is: $i <br>";
        // }

        // return $request;
        // $pdf = PDF::loadView('item.cetak_barcode', $data);
        // return $pdf->stream();
        $data['cetak'] = '';
        
        // $pdf = PDF::loadView('item.cetak_barcode', $data);
        if($request->cari_barcode){
            return view('item.cetak_barcode', $data);
            // return $pdf->stream();
        }else{
            // return $pdf->download('Barcode.pdf');
        }

        // return response()->json($item);
        // if($request->cari_barcode){

        // }
    }

    public function show($kode_barang)
    {
        $item = Item::where('kode_barang',$kode_barang)->first();

        if(!empty($item)){
            $d = new DNS1D();
            $d->setStorPath(__DIR__.'/cache/');
            return response()->json([
                'status' => true,
                'data' => [
                    'kode_barang' => $item->kode_barang,
                    'nama_barang' => $item->nama_barang,
                    'kategori' => $item->kategori_item->nama_kategori,
                    'deskripsi' => $item->deskripsi,
                    'stock' => $item->stock,
                    'barcode' => $item->kode_barang,
                    // 'barcode' => '<img src="data:image/png;base64,' . $d->getBarcodePNG($item->kode_barang, 'EAN13', 2,33,array(1,1,1), true) . '" alt="barcode"   />',
                    'harga_barang' => 'Rp. '.number_format($item->harga_barang,2,",","."),
                    'foto' => '<img src="'.asset('public/produk/'.$item->foto).'" width="200">',
                ]
            ]);
        }

        return response()->json([
           'status' => false, 
           'data' => 'Data Tidak Ditemukan' 
        ]);
        
    }

    public function edit($kode_barang)
    {
        $item = Item::where('kode_barang',$kode_barang)->first();

        if(!empty($item)){
            return response()->json([
                'status' => true,
                'data' => [
                    'kode_barang' => $item->kode_barang,
                    'nama_barang' => $item->nama_barang,
                    'kategori' => $item->kategori,
                    'deskripsi' => $item->deskripsi,
                    'stock' => $item->stock,
                    'harga_barang' => $item->harga_barang,
                    'foto' => '<img src="'.asset('public/produk/'.$item->foto).'" width="200">',
                ]
            ]);
        }

        return response()->json([
           'status' => false, 
           'data' => 'Data Tidak Ditemukan' 
        ]);
        
    }

    public function simpan(Request $request)
    {
        $rules = [
            'kode_barang'  => 'required',
            'nama_barang'  => 'required',
            'kategori'  => 'required',
            'deskripsi'  => 'required',
            'stock'  => 'required',
            'harga_barang'  => 'required',
            'foto'  => 'required',
        ];
 
        $messages = [
            'kode_barang.required'  => 'Kode Barang wajib diisi.',
            'kode_barang.unique'  => 'Kode Barang sudah ada.',
            'kategori.required'   => 'Kategori wajib diisi.',
            'deskripsi.required'   => 'Deskripsi wajib diisi.',
            'stock.required'   => 'Stock wajib diisi.',
            'harga_barang.required'   => 'Harga Barang wajib diisi.',
            'foto.required'   => 'Foto Produk wajib diisi.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->passes()) {
            $input = $request->all();
            $input['foto'] = time().'.'.$request->foto->getClientOriginalExtension();
            // $request->foto->move(public_path('produk'), $input['foto']);
            $request->foto->move(storage_path('app/public/produk'), $input['foto']);
    
           $item = Item::create($input);

           if($item){
                $message_title="Berhasil !";
                $message_content="Item Berhasil Disimpan";
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

    public function update(Request $request)
    {
        $rules = [
            // 'edit_kode_barang'  => 'required|kode_barang|unique:item',
            'edit_nama_barang'  => 'required',
            'edit_kategori'  => 'required',
            'edit_deskripsi'  => 'required',
            'edit_stock'  => 'required',
            'edit_harga_barang'  => 'required',
            'edit_foto'  => 'required',
        ];
 
        $messages = [
            // 'edit_kode_barang.required'  => 'Kode Barang wajib diisi.',
            // 'edit_kode_barang.unique'  => 'Kode Barang sudah ada.',
            'edit_kategori.required'   => 'Kategori wajib diisi.',
            'edit_deskripsi.required'   => 'Deskripsi wajib diisi.',
            'edit_stock.required'   => 'Stock wajib diisi.',
            'edit_harga_barang.required'   => 'Harga Barang wajib diisi.',
            'edit_foto.required'   => 'Foto Produk wajib diisi.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        
        $detail_item = Item::where('kode_barang',$request->edit_kode_barang)->first();
        $image_path = storage_path('app/public/produk/'.$detail_item->foto);
        File::delete($image_path);

        if ($validator->passes()) {
            $input = $request->all();
            $input['edit_foto'] = time().'.'.$request->edit_foto->getClientOriginalExtension();
            
            // $input['edit_foto']->store('public/produk');
            // $saveProduk = $request->edit_foto->store('public/produk');
            
            // $request->edit_foto->move(public_path('produk'), $input['edit_foto']);
            // $path = Storage::putFile('produk/',$input['edit_foto']);
            // $request->edit_foto->storeAs('produk', $input['edit_foto']);
            // $request->edit_foto->move(public_path('produk'), $input['edit_foto']);
            
            $request->edit_foto->move(storage_path('app/public/produk'), $input['edit_foto']);
            // $item = Item::create($input);
            
            $item = Item::where('kode_barang',$input['edit_kode_barang'])->update([
               'nama_barang' => $input['edit_nama_barang'],
               'kategori' => $input['edit_kategori'],
               'deskripsi' => $input['edit_deskripsi'],
               'stock' => $input['edit_stock'],
               'harga_barang' => $input['edit_harga_barang'],
               'foto' => $input['edit_foto'],
            //    'foto' => $saveProduk,
           ]);

           if($item){
                $message_title="Berhasil !";
                $message_content="Item Berhasil Diupdate";
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
