ini create dari view
<form method="POST" action="/Supplier">
	{{ csrf_field()}}
	
<input type="text" name="txt_supplierid" /> 
<input type="text" name="txt_suppliername" /> 
<input type="text" name="txt_supplieraddress" /> 

<input type="submit" name="sbm_save" id="sbm_save" value="save" />

</form>

