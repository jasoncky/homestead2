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
<div class="card">
    <div class="card-header">
        {{ trans('cruds.appointment.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Event">
                <thead>
                    <tr>
                        <th width="10" class="no-sort">

                        </th>
                        <th>
                            {{ trans('cruds.appointment.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.appointment.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.appointment.fields.start_time') }}
                        </th>
                        <th>
                            {{ trans('cruds.appointment.fields.end_time') }}
                        </th>
                        <th>
                            {{ trans('cruds.appointment.fields.recurrence') }}
                        </th>
						<th>
							{{ trans('cruds.appointment.fields.client') }}
						</th>
						<th>
							{{ trans('cruds.appointment.fields.employee') }}
						</th>
						<th>
							{{ trans('cruds.appointment.fields.venue') }}
						</th>
						<th>
							{{ trans('cruds.appointment.fields.comments') }}
						</th>
						<th>
							{{ trans('cruds.appointment.fields.services') }}
						</th>
						<th class="no-sort">
                            &nbsp;
                        </th>
                        <th class="no-sort">
                            &nbsp;
                        </th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('event_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.appointments.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).data(), function (entry) {
          return entry.id
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push('selectAll')
  dtButtons.push('selectNone')
  dtButtons.push(deleteButton)	
@endcan
  
  let dtOverrideGlobals = {
    buttons: dtButtons,
    processing: true,
    serverSide: true,
    retrieve: true,
    aaSorting: [],
    ajax: "{{ route('admin.appointments.index') }}",
    columns: [
		{ data: 'placeholder', name: 'placeholder' },
		{ data: 'id', name: 'id' },
		{ data: 'name', name: 'name' },
		{ data: 'start_time', name: 'start_time' },
		{ data: 'end_time', name: 'end_time' },
		{ data: 'recurrence', name: 'recurrence' },
		{ data: 'client_name', name: 'client.name' },
		{ data: 'employee_name', name: 'employee.name' },
		{ data: 'venue', name: 'venue' },
		{ data: 'description', name: 'description' },
		{ data: 'services', name: 'services.name' },
		{ data: 'extaactioncolumn', name: 'extaactioncolumn' },
		{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    order: [[ 1, 'desc' ]],
    pageLength: 10,
	lengthMenu: [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
	pagingType: 'simple_numbers',
	columnDefs: [
	  { targets: 'no-sort', orderable: false },
	  { orderable: false, className: 'select-checkbox', targets: 0 }
	],
  };
  
  
  /*$.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'asc' ]],
    pageLength: 10,
	lengthMenu: [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
	pagingType: 'simple_numbers',
	columnDefs: [
		{ targets: 'no-sort', orderable: false }
	]
  });*/
  //$('.datatable-Event:not(.ajaxTable)').DataTable(dtOverrideGlobals)
  $('.datatable-Event').DataTable(dtOverrideGlobals);
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection