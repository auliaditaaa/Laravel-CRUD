INI HALAMAN SHOW EDIT

<br/>
@foreach ($employee as $employeelist)
{{ $employeelist->employee_id}}
{{ $employeelist->employee_name}}
{{ $employeelist->employee_address}}
{{ $employeelist->employee_phone}}

<br />

@endforeach


<a href="{{ url('Employee/create')}}">
	Kembali ke view
</a>