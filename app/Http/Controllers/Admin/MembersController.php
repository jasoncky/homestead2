<?php

namespace App\Http\Controllers\Admin;

use App\Member;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyMemberRequest;
use App\Http\Requests\StoreMemberRequest;
use App\Http\Requests\UpdateMemberRequest;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Log;
use DB;

class MembersController extends Controller
{
    use MediaUploadingTrait;

    public function index(Request $request)
    {
        
		if ($request->ajax()) {
            
			$query = Member::query()
				->filterDates()
				->select(sprintf('%s.*', (new Member)->table));
            $table = Datatables::of($query);
			
			/*
			$querydebug = Member::query()
				->filterDates()
				->select(sprintf('%s.*', (new Member)->table))->toSql();
			Log::debug($querydebug);
			*/
			
            $table->addColumn('placeholder', '&nbsp;');
			$table->addColumn('extaactioncolumn', '&nbsp;');
			
			$table->editColumn('extaactioncolumn', function ($row) {
				return view('partials.rowsmember', compact('row'));
			});
			
            $table->addColumn('actions', '&nbsp;');
			$table->addColumn('status_color', ' ');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'member_show';
                $editGate      = 'member_edit';
                $deleteGate    = 'member_delete';
                $crudRoutePart = 'members';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : "";
            });
            $table->editColumn('name', function ($row) {
                return $row->name ? $row->name : "";
            });
			$table->editColumn('email', function ($row) {
                return $row->email ? $row->email : "";
            });
			$table->editColumn('phone', function ($row) {
                return $row->phone ? $row->phone : "";
            });
			$table->editColumn('provider', function ($row) {
                return $row->provider ? $row->provider : "";
            });
			$table->editColumn('status', function ($row) {
                $statuscontent = $row->status ? $row->status : "";
				return view('partials.rowsmemberstatus', compact('statuscontent','row'));
            });
			$table->editColumn('status_color', function ($row) {
				return $row->status && Member::STATUS_COLOR[$row->status] ? Member::STATUS_COLOR[$row->status] : 'none';
			});
            /*$table->editColumn('photo', function ($row) {
                if ($photo = $row->photo) {
                    return sprintf(
                        '<a href="%s" target="_blank"><img src="%s" width="50px" height="50px"></a>',
                        $photo->url,
                        $photo->thumbnail
                    );
                }

                return '';
            });*/

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.members.index');
    }

    public function create()
    {
        abort_if(Gate::denies('member_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.members.create');
    }

    public function store(StoreMemberRequest $request)
    {
        $member = Member::create($request->all());

        if ($request->input('photo', false)) {
            $member->addMedia(storage_path('tmp/uploads/' . $request->input('photo')))->toMediaCollection('photo');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $member->id]);
        }

        return redirect()->route('admin.members.index');
    }

    public function edit(Member $member)
    {
        abort_if(Gate::denies('member_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.members.edit', compact('member'));
    }

    public function update(UpdateMemberRequest $request, Member $member)
    {
        $member->update($request->all());
		
        return redirect()->route('admin.members.index');
    }

    public function show(Member $member)
    {
        abort_if(Gate::denies('member_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.members.show', compact('member'));
    }

    public function destroy(Member $member)
    {
        abort_if(Gate::denies('member_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $member->delete();

        return back();
    }

    public function massDestroy(MassDestroyMemberRequest $request)
    {
        Employee::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
	
	public function updateStatus(Request $request)
	{
		abort_if(Gate::denies('member_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
		$updated = Member::where('id', request('id'))
			->update([
				'status' => request('status')
        ]);
		if($updated) {
			// returns true
			return response()->json(['message' => 'success'], 200); 
		}
		else {
			// returns false
			return response()->json(['message' => 'fail'], 200); 
		}
	}

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('member_create') && Gate::denies('member_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Member();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media', 'public');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}