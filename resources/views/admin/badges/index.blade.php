@extends('layouts.admin')
@section('content')
@can('badge_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.badges.create") }}">
                {{ trans('global.add') }} {{ trans('cruds.badge.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.badge.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Badge">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.badge.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.badge.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.badge.fields.icon') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($badges as $key => $badge)
                        <tr data-entry-id="{{ $badge->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $badge->id ?? '' }}
                            </td>
                            <td>
                                {{ $badge->name ?? '' }}
                            </td>
                            <td>
                                @if($badge->icon)
                                    <a href="{{ $badge->icon->getUrl() }}" target="_blank">
                                        <img src="{{ $badge->icon->getUrl() }}" width="50px" height="50px">
                                    </a>
                                @endif
                            </td>
                            <td>
                                @can('badge_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.badges.show', $badge->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('badge_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.badges.edit', $badge->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('badge_delete')
                                    <form action="{{ route('admin.badges.destroy', $badge->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
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
@can('badge_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.badges.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
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
  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  $('.datatable-Badge:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})
</script>
@endsection