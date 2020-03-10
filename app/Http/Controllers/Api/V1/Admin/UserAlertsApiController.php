<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserAlertRequest;
use App\Http\Requests\UpdateUserAlertRequest;
use App\Http\Resources\Admin\UserAlertResource;
use App\UserAlert;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserAlertsApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('user_alert_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new UserAlertResource(UserAlert::with(['users'])->get());
    }

    public function store(StoreUserAlertRequest $request)
    {
        //$userAlert = UserAlert::create($request->all());
		$userAlert = UserAlert::create($request->only('alert_text', 'alert_link', 'users'));
        $userAlert->users()->sync($request->input('users', []));

        return (new UserAlertResource($userAlert))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(UserAlert $userAlert)
    {
        abort_if(Gate::denies('user_alert_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new UserAlertResource($userAlert->load(['users']));
    }

    public function update(UpdateUserAlertRequest $request, UserAlert $userAlert)
    {
        //$userAlert->update($request->all());
		$userAlert->update($request->only('alert_text', 'alert_link', 'users'));
        $userAlert->users()->sync($request->input('users', []));

        return (new UserAlertResource($userAlert))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(UserAlert $userAlert)
    {
        abort_if(Gate::denies('user_alert_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $userAlert->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
