<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index()
    {
        return view('plan.index', ['plans' => Plan::all()]);
    }

    public function create()
    {
        return view('plan.create');
    }

    public function store(Request $request)
    {
        $plan = Plan::create($request->all());
        return redirect(route('plan.show', $plan->id));
    }

    public function show($id)
    {
        return view('plan.show', ['plan' => Plan::findOrFail($id)]);
    }

    public function edit($id)
    {
        return view('plan.edit', ['plan' => Plan::findOrFail($id)]);
    }

    public function update(Request $request, $id)
    {
        Plan::findOrFail($id)->update($request->all());
        return redirect(route('plan.index'));
    }

    public function destroy($id)
    {
        Plan::findOrFail($id)->delete();
        return redirect(route('plan.index'));
    }
}
