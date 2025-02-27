<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Material;
use App\Models\Supplier;


class MaterialsController extends Controller
{
    public function index()
    {
        return view('materials.index', [
            'materials' => Material::all(),
        ]);
    }

    public function create()
    {
        return view('materials.create', [
            'suppliers' => Supplier::all(),
        ]);
    }

    public function store(Request $request)
    {
        $material = Material::create($request->all());

        return redirect()->route('materials.index');
    }

    public function edit(Material $material)
    {
        return view('materials.edit', [
            'material' => $material,
            'suppliers' => Supplier::all(),
        ]);
    }

    public function update(Request $request, Material $material)
    {
        $material->update($request->all());

        return redirect()->route('materials.index');
    }

    public function destroy(Material $material)
    {
        $material->delete();

        return redirect()->route('materials.index');
    }
}
