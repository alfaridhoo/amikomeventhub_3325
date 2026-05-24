<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Partner;

class PartnerController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $partners = Partner::when($search, function ($query) use ($search) {
            $query->where('name', 'LIKE', "%$search%");
        })->latest()->get();

        return view('admin.partners.index', compact('partners'));
    }

    public function create()
    {
        return view('admin.partners.create');
    }

   public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'logo' => 'required|image|mimes:jpg,jpeg,png,svg|max:2048'
    ]);

    $logo = $request->file('logo')->store('partners', 'public');

    Partner::create([
        'name' => $request->name,
        'logo' => $logo
    ]);

    return redirect()->route('admin.partners.index')
        ->with('success', 'Partner berhasil ditambahkan');
}

    public function edit(Partner $partner)
    {
        return view('admin.partners.edit', compact('partner'));
    }

   public function update(Request $request, Partner $partner)
{
    $data = [
        'name' => $request->name
    ];

    if ($request->hasFile('logo')) {
        $data['logo'] = $request->file('logo')
            ->store('partners', 'public');
    }

    $partner->update($data);

    return redirect()->route('admin.partners.index')
        ->with('success', 'Partner berhasil diupdate');
}

    public function destroy(Partner $partner)
    {
        $partner->delete();

        return back()->with('success', 'Partner berhasil dihapus');
    }
}