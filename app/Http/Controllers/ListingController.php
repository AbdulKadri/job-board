<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    public function index() {
        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(6),
        ]);
    }

    public function show(Listing $listing) {
        return view('listings.show', [
            'listing' => $listing,
        ]);
    }

    public function create() {
        return view('listings.create');
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('listings', 'company')],
            'location' => 'required',
            'website' => ['required', 'url'],
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required',
            'logo' => ['sometimes', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);

        if($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $formFields['user_id'] = auth()->id();

        Listing::create($formFields);

        return redirect('/')->with('success', 'Listing Created!');
    }

    public function edit(Listing $listing) {
        return view('listings.edit', [
            'listing' => $listing,
        ]);
    }

    public function update(Request $request, Listing $listing) {
        if($listing->user_id != auth()->id()) {
            abort(403, 'Unauthorized');
        };

        $formFields = $request->validate([
            'title' => 'required',
            'company' => 'required',
            'location' => 'required',
            'website' => ['required', 'url'],
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required',
            'logo' => ['sometimes', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);

        if($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $listing->update($formFields);

        return back()->with('success', 'Listing Updated!');
    }

    public function destroy(Listing $listing) {
        if($listing->user_id != auth()->id()) {
            abort(403, 'Unauthorized');
        };

        $listing->delete();

        return redirect('/')->with('success', 'Listing Deleted!');
    }

    public function manage() {
        return view('listings.manage', [
            'listings' => Listing::where('user_id', auth()->id())->latest()->paginate(6),
        ]);
    }
}
