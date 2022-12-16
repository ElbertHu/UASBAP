<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\produklist;
use Illuminate\Http\Request;

class produklistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $produklist = produklist::where('id_produk', 'LIKE', "%$keyword%")
                ->orWhere('nama_produk', 'LIKE', "%$keyword%")
                ->orWhere('harga', 'LIKE', "%$keyword%")
                ->orWhere('image', 'LIKE', "%$keyword%")
                ->orWhere('deskripsi_produk', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $produklist = produklist::latest()->paginate($perPage);
        }

        return view('admin.produklist.index', compact('produklist'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.produklist.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        $file = $request->file('image');
        $file_path = 'upload\\'.$file->getClientOriginalName();
        // dd(base_path('public\upload'));
        $file->move(base_path('public\upload'), $file->getClientOriginalName());
        $requestData['image'] = $file_path;
        produklist::create($requestData);

        return redirect('admin/produklist')->with('flash_message', 'produklist added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $produklist = produklist::findOrFail($id);

        return view('admin.produklist.show', compact('produklist'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $produklist = produklist::findOrFail($id);

        return view('admin.produklist.edit', compact('produklist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $produklist = produklist::findOrFail($id);
        $produklist->update($requestData);

        return redirect('admin/produklist')->with('flash_message', 'produklist updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        produklist::destroy($id);

        return redirect('admin/produklist')->with('flash_message', 'produklist deleted!');
    }
}
