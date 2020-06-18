@can('appointment_status')
@if($row->status == "Approve")
<a data-id="{{ $row->id }}" data-value="{{ $row->status }}" class="btn btn-xs btn-warningcustom statuslink" href="#">
	Cancel
</a>
@else
<a data-id="{{ $row->id }}" data-value="{{ $row->status }}" class="btn btn-xs btn-info statuslink" href="#">
	Approve
</a>
@endif
@endcan
<script>
$(".statuslink").click(function(evt){
	evt.stopImmediatePropagation();
	var sid = $(this).attr("data-id");
	var val = $(this).attr("data-value");
	var updstatus = "";
	if (val == 'Approve')
	{
		updstatus = 'Cancel';
	}
	else if (val == 'Cancel')
	{
		updstatus = 'Approve';
	}
	else
	{
		updstatus = 'Approve';
	}
	var that = $(this);
	
	$.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: "{{ route('admin.appointments.updateStatus') }}",
          data: { id: sid, status: updstatus },
		  beforeSend : function(){
			  that.html('Processing ...');
		  }
	}).done(function (data) { 
		 //console.log(data.message);
		 if (data.message == "success"){
			 if (val == 'Approve')
			 {
				that.removeClass("btn-warningcustom");
				that.addClass("btn-info");
				that.html('Approve');	
				that.attr("data-value","Cancel");
				$("#strow_"+sid).html('Cancel');
				$("#strow_2").parents('td').last().css('background-color','rgb(0, 191, 255)');
				
			}	
			else if (val == 'Cancel')
			{
				that.removeClass("btn-info");
				that.addClass("btn-warningcustom");
				that.html('Cancel');
				that.attr("data-value","Approve");
				$("#strow_"+sid).html('Approve');
				$("#strow_2").parents('td').last().css('background-color','rgb(144, 238, 144)');
			}
			else
			{
				that.removeClass("btn-info");
				that.addClass("btn-warningcustom");
				that.html('Cancel');
				that.attr("data-value","Approve");
				$("#strow_"+sid).html('Approve');
				$("#strow_2").parents('td').last().css('background-color','rgb(144, 238, 144)');
			}
		 }
	})
});
</script>