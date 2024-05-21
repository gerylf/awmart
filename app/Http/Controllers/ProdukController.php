<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $data['produk'] = Produk::all();
        return view('Content.admin.dashboardProduct', $data);
    }

    public function create()
    {
        return view('Content.admin.createProduct');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Produk::create($input);
        return redirect('/createProduct')->with('success', 'Produk berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $produk = Produk::findOrFail($id);
        return view('Content.admin.editProduct', compact('produk'));
    }

    public function update(Request $request, $id)
    {
        $produk = Produk::findOrFail($id);
        $input = $request->all();
        $produk->update($input);
        return redirect('dashboard-product');
    }

    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();
        return redirect()->route('dashboard-product')->with('success', 'Produk berhasil dihapus!');
    }

}