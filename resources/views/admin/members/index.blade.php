@extends('layouts.admin')
@section('content')
@can('member_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.members.create") }}">
                {{ trans('global.add') }} {{ trans('cruds.member.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.member.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
            <form action="" id="filtersForm">
				Created at 
                <div class="input-group">
                <input type="text" name="from-to" class="form-control mr-2" id="date_filter">
                <span class="input-group-btn">
                    <input type="submit" class="btn btn-primary" value="Filter">
                </span> 
                </div>
            </form>
            </div>
        </div>
		<br><br>
		<table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-member">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        {{ trans('cruds.member.fields.id') }}
                    </th>
                    <th>
                        {{ trans('cruds.member.fields.name') }}
                    </th>
                    <th>
                        {{ trans('cruds.member.fields.email') }}
                    </th>
					<th>
                        {{ trans('cruds.member.fields.phone') }}
                    </th>
					<th>
                        {{ trans('cruds.member.fields.provider') }}
                    </th>
					<th>
                        {{ trans('cruds.member.fields.status') }}
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
@endsection
@section('styles')
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css">
@endsection
@section('scripts')
@parent
<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
<script>
$(function () {
  let searchParams = new URLSearchParams(window.location.search)
  let dateInterval = searchParams.get('from-to');
  let start = moment();
  let end = moment().add(1, 'days');
  if (dateInterval) {
      dateInterval = dateInterval.split(' - ');
      start = dateInterval[0];
      end = dateInterval[1];
  }
  $('#date_filter').daterangepicker({
      "showDropdowns": true,
      "showWeekNumbers": true,
      "alwaysShowCalendars": true,
      startDate: start,
      endDate: end,
      locale: {
          format: 'YYYY-MM-DD',
          firstDay: 1,
      },
      ranges: {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')],
          'This Year': [moment().startOf('year'), moment().endOf('year')],
          'Last Year': [moment().subtract(1, 'year').startOf('year'), moment().subtract(1, 'year').endOf('year')],
          'All time': [moment().subtract(30, 'year').startOf('month'), moment().endOf('month')],
      }
  });
  
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('member_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.members.massDestroy') }}",
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
  dtButtons.push(deleteButton)
@endcan
  let dtOverrideGlobals = {
    buttons: dtButtons,
    processing: true,
    serverSide: true,
    retrieve: true,
    aaSorting: [],
    ajax: {
      url: "{{ route('admin.members.index') }}",
      data: {
        'from-to': searchParams.get('from-to'),
      }
    },
    columns: [
		{ data: 'placeholder', name: 'placeholder' },
		{ data: 'id', name: 'id' },
		{ data: 'name', name: 'name' },
		{ data: 'email', name: 'email' },
		{ data: 'phone', name: 'phone' },
		{ data: 'provider', name: 'provider' },
		{ data: 'status', name: 'status' },
		{ data: 'extaactioncolumn', name: 'extaactioncolumn' },
		{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    order: [[ 1, 'desc' ]],
    pageLength: 100,
	columnDefs: [
	  { targets: 'no-sort', orderable: false }
	],
	// But we do have value, so we can add CSS from data.status_color value
    createdRow: (row, data, dataIndex, cells) => {
        $(cells[6]).css('background-color', data.status_color)
    }
  };
  $('.datatable-member').DataTable(dtOverrideGlobals);
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
});
</script>
@endsection