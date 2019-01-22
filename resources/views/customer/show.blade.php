INI HALAMAN SHOW EDIT

<br/>
@foreach ($customer as $customerlist)
{{ $customerlist->customer_id}}
{{ $customerlist->name}}
{{ $customerlist->address}}

<br />

@endforeach


<a href="{{ url('Customer/create')}}">
	Kembali ke view
</a>