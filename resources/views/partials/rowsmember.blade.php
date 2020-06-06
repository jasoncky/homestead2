@can('member_edit')
@if($row->status == "Active")
<a data-id="{{ $row->id }}" data-value="{{ $row->status }}" class="btn btn-xs btn-warningcustom statuslink" href="#">
	Inactive
</a>
@else
<a data-id="{{ $row->id }}" data-value="{{ $row->status }}" class="btn btn-xs btn-info statuslink" href="#">
	Active
</a>
@endif
@endcan
<!--- 
<a class="btn btn-xs btn-cyan" href="#">
	Fund in
</a>
<a class="btn btn-xs btn-cyan" href="#">
	Fund out
</a>
<a class="btn btn-xs btn-cyan" href="#">
	Account
</a>
<a class="btn btn-xs btn-cyan" href="#">
	Wallet
</a>
<a class="btn btn-xs btn-warningcustom" href="#">
	Change Tree
</a>
<a class="btn btn-xs btn-warningcustom" href="#">
	Login
</a>
--->
<script>
$(".statuslink").click(function(evt){
	evt.stopImmediatePropagation();
	var sid = $(this).attr("data-id");
	var val = $(this).attr("data-value");
	var updstatus = "";
	if (val == 'Active')
	{
		updstatus = 'Inactive';
	}
	else if (val == 'Inactive')
	{
		updstatus = 'Active';
	}
	var that = $(this);
	
	$.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: "{{ route('admin.members.updateStatus') }}",
          data: { id: sid, status: updstatus }
	}).done(function (data) { 
		 //console.log(data.message);
		 if (data.message == "success"){
			 if (val == 'Active')
			 {
				that.removeClass("btn-warningcustom");
				that.addClass("btn-info");
				that.html('Active');	
				that.attr("data-value","Inactive");
				$("#strow_"+sid).html('Inactive');
				$("#strow_2").parents('td').last().css('background-color','rgb(0, 191, 255)');
				
			}	
			else if (val == 'Inactive')
			{
				that.removeClass("btn-info");
				that.addClass("btn-warningcustom");
				that.html('Inactive');
				that.attr("data-value","Active");
				$("#strow_"+sid).html('Active');
				$("#strow_2").parents('td').last().css('background-color','rgb(144, 238, 144)');
			}
		 }
	})
});
</script>