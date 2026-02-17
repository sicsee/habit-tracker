<?php

namespace App\Http\Controllers;

use App\Http\Requests\HabitRequest;
use App\Models\Habit;
use App\Models\HabitLog;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;


class HabitController extends Controller
{   
    use AuthorizesRequests;

    public function index()
    {
        $habits = Auth::user()->habit()
          ->with('habitLogs')
          ->get();

        return view('dashboard', compact('habits'));
    }
 
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view("habits.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HabitRequest $request)
    {
        $validated = $request->validated();

        Auth::user()->habit()->create($validated);

        return redirect()
            ->route('habits.index')
            ->with('success', 'Hábito criado com sucesso');
    }

    public function edit(Habit $habit): View
    {
        $this->authorize('update', $habit);

        return view("habits.edit", compact("habit"));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(HabitRequest $request, Habit $habit)
    {
        $this->authorize('update', $habit);

        $habit->update($request->all());

        return redirect()
        ->route('habits.index')
        ->with('success',value: 'Hábito atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Habit $habit)
    {
        $this->authorize('delete', $habit);


        $habit->delete();

        return redirect()
            ->route('habits.index')
            ->with('success','Hábito removido com sucesso');
    }

    public function settings(): View
    {
        $habits = Auth::user()->habit;

        return view('habits.settings', compact('habits'));
    }

    public function toggle(Habit $habit)
    {
        $this->authorize('toggle', $habit);

        $today = Carbon::today()->toDateString();

        $log = HabitLog::query()
        ->where('habit_id', $habit->id)
        ->where('completed_at', $today)
        ->first();

        if($log){
            $log->delete();  
            $message = 'Hábito desmarcado';
        } else {
            HabitLog::create([
                'user_id'=> Auth::user()->id,
                'habit_id'=> $habit->id,
                'completed_at'=> $today,
            ]);
            $message = 'Hábito marcado como concluído';
        }

        return redirect()
            ->route('habits.index')
            ->with('success', $message);
    }
}
