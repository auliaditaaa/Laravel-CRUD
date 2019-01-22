<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Supplier;
class SupplierController extends Controller
{
    //buat fungsi baru untuk index
    function index(){
        //echo "hayo hayo";
        $supplier = Supplier::get(['supplier_id', 'supplier_name','supplier_address']);
        //var_dump($supplier);
        return view('supplier.index', compact('supplier'));
    }

 	function create() 
 	{ // echo "telo";
    return view('supplier.create'); }

     public function store(Request $request) 
     {	// echo "cobak";
    	$txtSupplierId = $request->input('txt_supplierid');
    	$txtSupplierName = $request->input('txt_suppliername');
    	$txtSupplierAddress = $request->input('txt_supplieraddress');

    	echo $txtSupplierId."<br /> ".$txtSupplierName."<br /> ".$txtSupplierAddress;

    	Supplier::create([
    		'supplier_id' => $txtSupplierId,
    		'supplier_name' => $txtSupplierName,
    		'supplier_address' => $txtSupplierAddress ]);

    	return redirect('/Supplier');
    }
}
