<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // lay du lieu tu author
         $authors=Author::all();
        //Hien thi ra index cua Author
        // co 3 cu phap truyen du lieu trang cho view
        //cach duoi day chi laf 1 cach
        return view("authors.index", compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('authors.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name'=>'required',
        ]);
        Author::create($request->all());
        return redirect()->route('authors.index')->with('success', 'Author created successfully');//INSERT INTO ..
    }
    public function show(Author $author)
    {
        //
        return view('authors.show', compact('author'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author)
    {
        //
        return view('authors.edit', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Author $author)
    {
        //
        $request->validate([
            'name' => 'required',
            ]);
            $author->update($request->all());
            return redirect()->route('authors.index')->with('success', 'Author updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        //
        $author->delete();
        return redirect()->route('authors.index')->with('success', 'Authordeleted successfully');
    }
}
