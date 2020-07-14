<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Contact;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;
use App\Http\Resources\Admin\ContactResource;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ContactsApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('client_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return (new ContactResource(Contact::all()))
			->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function store(StoreClientRequest $request)
    {
        $contact = Contact::create($request->all());

        return (new ClientResource($contact))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Contact $contact)
    {
        abort_if(Gate::denies('client_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return (new ClientResource($contact))
			->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function update(UpdateClientRequest $request, Contact $contact)
    {
        $contact->update($request->all());

        return (new ClientResource($contact))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Contact $contact)
    {
        abort_if(Gate::denies('client_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $contact->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
