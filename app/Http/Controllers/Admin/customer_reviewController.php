<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\customer_review;
use Illuminate\Http\Request;

class customer_reviewController extends Controller
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
            $customer_review = customer_review::where('username', 'LIKE', "%$keyword%")
                ->orWhere('komentar', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $customer_review = customer_review::latest()->paginate($perPage);
        }

        return view('admin.customer_review.index', compact('customer_review'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.customer_review.create');
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
        
        customer_review::create($requestData);

        return redirect('admin/customer_review')->with('flash_message', 'customer_review added!');
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
        $customer_review = customer_review::findOrFail($id);

        return view('admin.customer_review.show', compact('customer_review'));
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
        $customer_review = customer_review::findOrFail($id);

        return view('admin.customer_review.edit', compact('customer_review'));
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
        
        $customer_review = customer_review::findOrFail($id);
        $customer_review->update($requestData);

        return redirect('admin/customer_review')->with('flash_message', 'customer_review updated!');
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
        customer_review::destroy($id);

        return redirect('admin/customer_review')->with('flash_message', 'customer_review deleted!');
    }
}
