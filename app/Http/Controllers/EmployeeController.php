<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
{
    // buat fungsi baru untuk index
    function index() {
    	// echo "asoy geboy";
    	$employee = Employee::get(['employee_id', 'employee_name', 'employee_address', 'employee_phone']);
    	// var_dump($customer);
    	return view('employee.index', compact('employee'));
    }

    function create() {
    	// echo "telo";
    	return view('employee.create');
    }

    public function store(Request $request) {
    	// echo "cobak";
    	$txtId = $request->input('txt_id');
    	$txtName = $request->input('txt_name');
    	$txtAddress = $request->input('txt_address');
        $txtPhone = $request->input('txt_phone');

    	echo $txtId."<br /> ".$txtName."<br /> ".$txtAddress."<br />".$txtPhone;

    	Employee::create([
    		'employee_id' => $txtId,
    		'employee_name' => $txtName,
    		'employee_address' => $txtAddress,
            'employee_phone' => $txtPhone
    	]);

    	return redirect('/Employee');
    }

    public function show($id) {
        // return view('customer.show', ['customer' => 
        // Customer::where('customer_id', $id)]

        $employee = Employee::where('employee_id', $id)->get();
        return view('employee.show', compact('employee'));

        }

    public function edit($id) {
        // return view('customer/edit', ['customer' => 
        // Customer::where('customer_id', $id)]

        $employee = Employee::where('employee_id', $id)->get();
        return view('employee.edit', compact('employee'));
    
    }

    public function update(Request $request, $id)
    {

        $txtId = $request->input('txt_id');
        $txtName = $request->input('txt_name');
        $txtAddress = $request->input('txt_address');
        $txtPhone = $request->input('txt_phone');

        Employee::where('employee_id', $id)->update([
            'employee_id' => $txtId,
            'employee_name' => $txtName,
            'employee_address' => $txtAddress,
            'employee_phone' => $txtPhone
        ]);
        return redirect('/Employee');
    }

    public function destroy($id)
    {
        $employee = Employee::where('employee_id', $id)->first();
        $employee->delete();
        return redirect('/Employee');
    }
}
