<?php

namespace App\Http\Controllers\Backend;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return view('admin.book.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::all();
        return view('admin.book.add', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {     
        $this->validate($request, [
            'quantity' => 'required|numeric',
        ]);
        $books = new Book();

        if ($request->hasFile('cover')) {
            $coverFile = $request->file('cover');
            $coverExt = $coverFile->getClientOriginalExtension();
            $coverFilename = time() . '.' . $coverExt;
            $coverFile->move('assets/uploads/books/', $coverFilename);
            $books->cover = $coverFilename;
        }

        if ($request->hasFile('file')) {
            $documentFile = $request->file('file');
            $documentExt = $documentFile->getClientOriginalExtension();
            $documentFilename = time() . '.' . $documentExt;
            $documentFile->move('assets/uploads/document/', $documentFilename);
            $books->file = $documentFilename;
        }

        $books->title = $request->input('title');
        $books->description = $request->input('description');
        $books->cate_id = $request->input('cate_id');
        $books->quantity = $request->input('quantity');

        $books->save();

        return redirect('/book')->with('status', 'Buku berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book = Book::find($id);
        return view('admin.book.view', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book = Book::find($id);
        return view('admin.book.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $books = Book::find($id);
        if ($request->hasFile('cover'))
        {
        $path = 'assets/uploads/books/'.$books->image;
            if (File::exists($path))
            {
                File::delete($path);
            } 
            $coverFile = $request->file('cover');
            $coverExt = $coverFile->getClientOriginalExtension();
            $coverFilename = time() . '.' . $coverExt;
            $coverFile->move('assets/uploads/books/', $coverFilename);
            $books->cover = $coverFilename;
        }
        if ($request->hasFile('file'))
        {
        $path = 'assets/uploads/document/'.$books->file;
            if (File::exists($path))
            {
                File::delete($path);
            } 
            $documentFile = $request->file('file');
            $documentExt = $documentFile->getClientOriginalExtension();
            $documentFilename = time() . '.' . $documentExt;
            $documentFile->move('assets/uploads/document/', $documentFilename);
            $books->file = $documentFilename;
        }
        $books->title = $request->input('title');
        $books->description = $request->input('description');
        $books->quantity = $request->input('quantity');
        $books->update();

        return redirect('/book')->with('status', 'Buku berhasil ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book = Book::find($id);

    if ($book->cover) 
    { 
        $pathCover = 'assets/uploads/books/'.$book->cover;
        if (File::exists($pathCover))
        {
            File::delete($pathCover);
        }
    }

    if ($book->file) 
    { 
        $pathFile = 'assets/uploads/document/'.$book->file;
        if (File::exists($pathFile))
        {
            File::delete($pathFile);
        }
    }

    $book->delete();

    return redirect('/book')->with('status', 'Buku berhasil dihapus');
    }
}
