<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\pengguna;
use Illuminate\Http\Request;

class penggunaController extends Controller
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
            $pengguna = pengguna::where('id_pengguna', 'LIKE', "%$keyword%")
                ->orWhere('username', 'LIKE', "%$keyword%")
                ->orWhere('nama', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $pengguna = pengguna::latest()->paginate($perPage);
        }

        return view('admin.pengguna.index', compact('pengguna'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.pengguna.create');
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
        
        pengguna::create($requestData);

        return redirect('admin/pengguna')->with('flash_message', 'pengguna added!');
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
        $pengguna = pengguna::findOrFail($id);

        return view('admin.pengguna.show', compact('pengguna'));
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
        $pengguna = pengguna::findOrFail($id);

        return view('admin.pengguna.edit', compact('pengguna'));
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
        
        $pengguna = pengguna::findOrFail($id);
        $pengguna->update($requestData);

        return redirect('admin/pengguna')->with('flash_message', 'pengguna updated!');
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
        pengguna::destroy($id);

        return redirect('admin/pengguna')->with('flash_message', 'pengguna deleted!');
    }
}
