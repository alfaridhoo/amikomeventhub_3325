<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
    $data = $request->validate([
        'name' => 'required',
        'logo' => 'nullable|image|mimes:jpg,jpeg,png,svg|max:2048',
        'logo_url' => [
            'nullable',
            function ($attribute, $value, $fail) {
                if (! preg_match('/^(https?:\/\/|data:image\/[a-zA-Z]+;base64,)/', $value)) {
                    $fail('Logo URL harus berupa link gambar langsung dengan http/https atau data URI gambar.');
                }
            },
        ],
    ]);

    if (! $request->hasFile('logo') && ! $request->logo_url) {
        return back()
            ->withErrors(['logo' => 'Logo partner harus berupa file gambar atau URL gambar.'])
            ->withInput();
    }

    if ($request->hasFile('logo')) {
        $logo = $request->file('logo')->store('partners', 'public');
    } else {
        $logo = $request->logo_url;
    }

    Partner::create([
        'name' => $data['name'],
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
    $data = $request->validate([
        'name' => 'required',
        'logo' => 'nullable|image|mimes:jpg,jpeg,png,svg|max:2048',
        'logo_url' => [
            'nullable',
            function ($attribute, $value, $fail) {
                if (! preg_match('/^(https?:\/\/|data:image\/[a-zA-Z]+;base64,)/', $value)) {
                    $fail('Logo URL harus berupa link gambar langsung dengan http/https atau data URI gambar.');
                }
            },
        ],
    ]);

    if ($request->hasFile('logo')) {
        $oldLogo = $partner->getAttribute('logo');
        if ($oldLogo && ! preg_match('/^https?:\/\//', $oldLogo)) {
            Storage::disk('public')->delete($oldLogo);
        }

        $data['logo'] = $request->file('logo')->store('partners', 'public');
    } elseif ($request->logo_url) {
        $oldLogo = $partner->getAttribute('logo');
        if ($oldLogo && ! preg_match('/^https?:\/\//', $oldLogo)) {
            Storage::disk('public')->delete($oldLogo);
        }

        $data['logo'] = $request->logo_url;
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