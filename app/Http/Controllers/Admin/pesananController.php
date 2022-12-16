<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\pesanan;
use Illuminate\Http\Request;

class pesananController extends Controller
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
            $pesanan = pesanan::where('id_pesanan', 'LIKE', "%$keyword%")
                ->orWhere('jumlah_produk', 'LIKE', "%$keyword%")
                ->orWhere('nama_produk', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $pesanan = pesanan::latest()->paginate($perPage);
        }

        return view('admin.pesanan.index', compact('pesanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.pesanan.create');
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
        
        pesanan::create($requestData);

        return redirect('admin/pesanan')->with('flash_message', 'pesanan added!');
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
        $pesanan = pesanan::findOrFail($id);

        return view('admin.pesanan.show', compact('pesanan'));
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
        $pesanan = pesanan::findOrFail($id);

        return view('admin.pesanan.edit', compact('pesanan'));
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
        
        $pesanan = pesanan::findOrFail($id);
        $pesanan->update($requestData);

        return redirect('admin/pesanan')->with('flash_message', 'pesanan updated!');
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
        pesanan::destroy($id);

        return redirect('admin/pesanan')->with('flash_message', 'pesanan deleted!');
    }
}
