<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\TicketRequest;
use App\Models\Ticket;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     *
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index() : JsonResponse
    {
        $tickets = Ticket::all();
        return response()->json($tickets, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param TicketRequest $request
     * @return JsonResponse
     */
    public function store(TicketRequest $request) : JsonResponse
    {
        $ticket = new Ticket($request->all());
        $ticket->save();
        return response()->json($ticket, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function show(int $id) : JsonResponse
    {
        $ticket = Ticket::with('airline')->find($id);
        return response()->json($ticket, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param TicketRequest $request
     * @param Ticket $ticket
     * @return JsonResponse
     */
    public function update(TicketRequest $request, Ticket $ticket) : JsonResponse
    {
        $ticket->fill($request->all());
        if ($ticket->isClean()){
            return response()->json('Nothing to updated', 301);
        }

        $ticket = Ticket::find($ticket->id);
        $ticket->update($request->all());
        return response()->json($ticket, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Ticket $ticket
     * @return JsonResponse
     */
    public function destroy(Ticket $ticket) : JsonResponse
    {
        $ticket->delete();
        return response()->json('Resource deleted',204);
    }
}
