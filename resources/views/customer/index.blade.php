apa iyh?

<br />
@foreach ($customer as $customerlist)
{{ $customerlist->customer_id}}
{{ $customerlist->name}}
{{ $customerlist->address}}

		<a href="/Customer/{{ $customerlist->customer_id }}">show</a>
		<a href="/Customer/{{ $customerlist->customer_id }}/edit"> Edit </a>
		<form action= "/Customer/
		{{$customerlist->customer_id}}" method="post">
			{{ csrf_field()}}
			{{ method_field('DELETE') }}
			<button>X</button>
		</form>

<!-- http://localhost:800/Customer/3 -->

@endforeach


<a href="{{ url('Customer/create')}}">
	Kembali ke view
</a>