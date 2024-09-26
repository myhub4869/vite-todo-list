<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;

class TodoComplatedController extends Controller
{
    public function complated(Request $request, Todo $todo): JsonResponse
    {
        Gate::authorize('update', $todo);

        $todo->completed = $todo->completed->inversion();
        $todo->save();

        return new JsonResponse([
            'todos' => $request->user()->todos,
        ], Response::HTTP_OK);
    }
}
