<?php

namespace App\Http\Controllers;

use App\Http\Requests\Todo\StoreRequest;
use App\Http\Resources\TodoResource;
use App\Models\Todo;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        return new JsonResponse([
            'todos' => TodoResource::collection($request->user()->todos),
        ], Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $record = new Todo();
        $record->title = $request->input('title');
        $request->user()->todos()->save($record);

        return new JsonResponse([
            'todos' => TodoResource::collection($request->user()->todos),
        ], Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreRequest $request, Todo $todo)
    {
        Gate::authorize('update', $todo);

        $todo->title = $request->input('title');
        $todo->save();

        return new JsonResponse([
            'todos' => TodoResource::collection($request->user()->todos),
        ], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Todo $todo)
    {
        Gate::authorize('delete', $todo);

        $todo->delete();

        return new JsonResponse([
            'todos' => TodoResource::collection($request->user()->todos),
        ], Response::HTTP_OK);
    }
}
