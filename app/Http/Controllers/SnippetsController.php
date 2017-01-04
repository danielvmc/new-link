<?php

namespace App\Http\Controllers;

use App\Snippet;
use Illuminate\Http\Request;

class SnippetsController extends Controller
{
    public function index(Request $request)
    {
        if ($request->input()) {
            return view('snippet.redirect');
        } else {
            $snippets = Snippet::latest()->get();
            return view('snippets.index', compact('snippets'));
        }
    }

    public function create(Snippet $snippet)
    {
        return view('snippets.create', compact('snippet'));
    }

    public function show(Snippet $snippet)
    {
        return view('snippets.show', compact('snippet'));
    }

    public function store()
    {
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required',
        ]);

        Snippet::create([
            'title' => request('title'),
            'body' => request('body'),
            'forked_id' => request('forked_id'),
        ]);

        return redirect()->home();
    }
}
