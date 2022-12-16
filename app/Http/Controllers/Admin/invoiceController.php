<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\invoice;
use Illuminate\Http\Request;
use PDF;

class invoiceController extends Controller
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
            $invoice = invoice::where('id_invoice', 'LIKE', "%$keyword%")
                ->orWhere('id_pengguna', 'LIKE', "%$keyword%")
                ->orWhere('nama_pengguna', 'LIKE', "%$keyword%")
                ->orWhere('id_pesanan', 'LIKE', "%$keyword%")
                ->orWhere('nama_produk', 'LIKE', "%$keyword%")
                ->orWhere('jumlah_produk', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $invoice = invoice::latest()->paginate($perPage);
        }

        return view('admin.invoice.index', compact('invoice'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.invoice.create');
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
        
        invoice::create($requestData);

        return redirect('admin/invoice')->with('flash_message', 'invoice added!');
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
        $invoice = invoice::findOrFail($id);

        return view('admin.invoice.show', compact('invoice'));
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
        $invoice = invoice::findOrFail($id);

        return view('admin.invoice.edit', compact('invoice'));
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
        
        $invoice = invoice::findOrFail($id);
        $invoice->update($requestData);

        return redirect('admin/invoice')->with('flash_message', 'invoice updated!');
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
        invoice::destroy($id);

        return redirect('admin/invoice')->with('flash_message', 'invoice deleted!');
    }

    public function cetak_pdf()
    {
        $invoice = invoice::all();

        $pdf = PDF::loadview('admin/invoice/cetak_pdf',['invoice'=>$invoice]);
        return $pdf->download('Invoice.pdf');
    }
}
