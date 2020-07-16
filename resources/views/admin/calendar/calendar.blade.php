@extends('layouts.admin')
@section('content')
@can('event_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.appointments.create") }}">
                {{ trans('global.add') }} {{ trans('cruds.appointment.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<h3 class="page-title">{{ trans('global.systemCalendar') }}</h3>
<div class="card">
    <div class="card-header">
        {{ trans('global.systemCalendar') }}
    </div>

    <div class="card-body">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />

        <div id='calendar'></div>
    </div>
</div>

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
			 <input type="hidden" name="appointment_id" id="appointment_id" value="" />
			<div class="modal-body">
                <h4>Edit appointment</h4>
                Start time:
                <br />
                <input type="text" class="form-control datetime" name="start_time" id="start_time" required>
                End time:
                <br />
                <input type="text" class="form-control datetime" name="finish_time" id="finish_time" required>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <input type="button" class="btn btn-primary" id="appointment_update" value="Save">
            </div>
        </div>
    </div>
</div>



@endsection

@section('scripts')
@parent
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
<script>
    $(document).ready(function () {
            // page is now ready, initialize the calendar...
            events={!! json_encode($appointments) !!};
			console.log(events);
            $('#calendar').fullCalendar({
                // put your options and callbacks here
                events: events,
				eventClick: function(calEvent, jsEvent, view) {
					$('#appointment_id').val(calEvent.id);
					$('#start_time').val(moment(calEvent.start).format('YYYY-MM-DD HH:mm:ss'));
					$('#finish_time').val(moment(calEvent.end).format('YYYY-MM-DD HH:mm:ss'));
					$('#editModal').modal();
				}
            });
			
			
			$('#appointment_update').click(function(e) {
				e.preventDefault();
				var stime = $('#start_time').val();
				var etime = $('#finish_time').val();
				
				if (stime !="" && etime !="")
				{
					var data = {
						_token: '{{ csrf_token() }}',
						id: $('#appointment_id').val(),
						start_time: $('#start_time').val(),
						end_time: $('#finish_time').val(),
					};

					var url = "{{ route('admin.appointments.ajaxUpdate') }}";
					$.post(url, data, function( result ) {
						console.log(result);
						if (result["message"]!="fail"){
							$('#calendar').fullCalendar('removeEvents', $('#appointment_id').val());

							$('#calendar').fullCalendar('renderEvent', {
								
								id:result.appointments.id,
								title: result.appointments.name,
								start: result.appointments.start_time,
								end: result.appointments.end_time
							}, true);

							$('#editModal').modal('hide');
						}
						else
						{
							swal("Appointment overlapping, please try other date!!");	
						}
					});
				}else{
					swal("Start time or End time either is empty!!!");	
				}
			});
        });
</script>
@endsection