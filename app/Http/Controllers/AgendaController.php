<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;

class AgendaController extends Controller
{
    public function index (Request $request){
        if ($request->ajax()){
            $data = Agenda::whereDate('start', '>=', $request->start)
                    ->whereDate('end', '<=', $request->end)
                    ->get(['id', 'title', 'start', 'end']);
            return response()->json($data);
        }

        return view('admin.kegiatan.agenda');
    }

    public function post(Request $request) {
        switch ($request->type) {
            case 'add':
                $agenda = Agenda::create([
                    'title' => $request->title,
                    'start' => $request->start,
                    'end' => $request->end,
                ]);

                return response()->json($agenda);
            break;
            case 'update':
                $agenda = Agenda::find($request->id)->update([
                    'title' => $request->title,
                    'start' => $request->start,
                    'end' => $request->end,
                ]);
                return response()->json($agenda);
            break;
            case 'delete':
                $agenda = Agenda::find($request->id)->delete();
                return response()->json($agenda);
            break;
            default:
                # code..
                break;
        }
    }
}
