<div class="dropdown text-center">
    <a class="dropdown-button" id="dropdown-menu-{{ $row->id }}" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-ellipsis-v"></i>
    </a>
    <div class="dropdown-menu leftmenu" aria-labelledby="dropdown-menu-{{ $row->id }}">
        @can($viewGate)
            <a class="dropdown-item" href="{{ route('admin.' . $crudRoutePart . '.show', $row->id) }}">
                <i class="fa fa-eye fa-lg"></i>
                {{ trans('global.view') }}
            </a>
        @endcan

        @can($editGate)
            <a class="dropdown-item" href="{{ route('admin.' . $crudRoutePart . '.edit', $row->id) }}">
                <i class="fa fa-edit"></i>
                {{ trans('global.edit') }}
            </a>
        @endcan
        
        @can($deleteGate)
            <form id="delete-{{ $row->id }}" action="{{ route('admin.' . $crudRoutePart . '.destroy', $row->id) }}" method="POST">
                @method('DELETE')
                @csrf
            </form>
            <a class="dropdown-item" href="#" onclick="if(confirm('{{ trans('global.areYouSure') }}')) document.getElementById('delete-{{ $row->id }}').submit()">
                <i class="fa fa-trash"></i>
                {{ trans('global.delete') }}
            </a>
        @endcan
    </div>
</div>