EMPLOYEE SHOW

<br/>
<br/>
@foreach ($employee as $employeelist)
{{ $employeelist->employee_id}}
{{ $employeelist->employee_name}}
{{ $employeelist->employee_address}}
{{ $employeelist->employee_phone}}

		<a href="/Employee/{{ $employeelist->employee_id }}">show</a>
		<a href="/Employee/{{ $employeelist->employee_id }}/edit"> Edit </a>
		<form action= "/Employee/
		{{$employeelist->employee_id}}" method="post">
			{{ csrf_field()}}
			{{ method_field('DELETE') }}
			<button>X</button>
		</form>

<!-- http://localhost:800/Customer/3 -->

@endforeach


<a href="{{ url('Employee/create')}}">
	Kembali ke view
</a>