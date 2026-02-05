<?php

namespace App\Http\Controllers;

use App\Http\Requests\HabitRequest;
use App\Models\Habit;
use Illuminate\Http\Request;
use Illuminate\View\View;


class HabitController extends Controller
{
 
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

        auth()->user()->habit()->create($validated);

        return redirect()
            ->route('site.dashboard')
            ->with('success', 'Hábito criado com sucesso');
    }

    public function edit(Habit $habit): View
    {
        return view("habits.edit", compact("habit"));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(HabitRequest $request, Habit $habit)
    {
        if($habit->user_id !== auth()->user()->id){
            abort(403, 'Esse hábito não é seu');
        }

        $habit->update($request->all());

        return redirect()
        ->route('site.dashboard')
        ->with('success',value: 'Hábito atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Habit $habit)
    {
        if($habit->user_id !== auth()->user()->id){
            abort(403, 'Esse hábito não é seu');
        }

        $habit->delete();

        return redirect()
            ->route('site.dashboard')
            ->with('success','Hábito removido com sucesso');
    }
}
