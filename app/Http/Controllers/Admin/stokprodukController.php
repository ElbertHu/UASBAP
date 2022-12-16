<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\stokproduk;
use Illuminate\Http\Request;

class stokprodukController extends Controller
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
            $stokproduk = stokproduk::where('id_produk', 'LIKE', "%$keyword%")
                ->orWhere('nama_produk', 'LIKE', "%$keyword%")
                ->orWhere('stok_produk', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $stokproduk = stokproduk::latest()->paginate($perPage);
        }

        return view('admin.stokproduk.index', compact('stokproduk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.stokproduk.create');
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
        
        stokproduk::create($requestData);

        return redirect('admin/stokproduk')->with('flash_message', 'stokproduk added!');
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
        $stokproduk = stokproduk::findOrFail($id);

        return view('admin.stokproduk.show', compact('stokproduk'));
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
        $stokproduk = stokproduk::findOrFail($id);

        return view('admin.stokproduk.edit', compact('stokproduk'));
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
        
        $stokproduk = stokproduk::findOrFail($id);
        $stokproduk->update($requestData);

        return redirect('admin/stokproduk')->with('flash_message', 'stokproduk updated!');
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
        stokproduk::destroy($id);

        return redirect('admin/stokproduk')->with('flash_message', 'stokproduk deleted!');
    }
}
