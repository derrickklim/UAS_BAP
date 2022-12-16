<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\alamat;
use Illuminate\Http\Request;

class alamatController extends Controller
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
            $alamat = alamat::where('username', 'LIKE', "%$keyword%")
                ->orWhere('alamat', 'LIKE', "%$keyword%")
                ->orWhere('provinsi', 'LIKE', "%$keyword%")
                ->orWhere('kota', 'LIKE', "%$keyword%")
                ->orWhere('kecamatan', 'LIKE', "%$keyword%")
                ->orWhere('kode_pos', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $alamat = alamat::latest()->paginate($perPage);
        }

        return view('admin.alamat.index', compact('alamat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.alamat.create');
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
        
        alamat::create($requestData);

        return redirect('admin/alamat')->with('flash_message', 'alamat added!');
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
        $alamat = alamat::findOrFail($id);

        return view('admin.alamat.show', compact('alamat'));
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
        $alamat = alamat::findOrFail($id);

        return view('admin.alamat.edit', compact('alamat'));
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
        
        $alamat = alamat::findOrFail($id);
        $alamat->update($requestData);

        return redirect('admin/alamat')->with('flash_message', 'alamat updated!');
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
        alamat::destroy($id);

        return redirect('admin/alamat')->with('flash_message', 'alamat deleted!');
    }
}
