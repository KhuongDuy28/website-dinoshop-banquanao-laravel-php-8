<?php

namespace App\Http\Services\Product;

use App\Models\Product;
use App\Models\Size;
use Exception;
use Illuminate\Support\Facades\Session;

class ProductService
{

    const LIMIT = 8;

    public function get($page = null)
    {
        return Product::select('id', 'name', 'price', 'price_sale', 'thumb')
            ->orderByDesc('id')
            ->when($page != null, function ($query) use ($page) {
                $query->offset($page * self::LIMIT);
            })
            ->limit(self::LIMIT)
            ->get();
    }

    public function show($id)
    {
        return Product::where('id', $id)->where('active', 1)
            ->with('menu')
            ->firstOrFail();
    }

    public function showSize($id)
    {
        // return Size::where('id', $id)->where('active', 1)
        //     ->with('size')
        //     ->firstOrFail();
        return Size::select('id', 'name')
            ->where('active', 1)
            ->where('id', '!=', $id)
            ->orderByDesc('id')
            // ->limit(8)
            ->get();
    }

    public function more($id)
    {
        return Product::select('id', 'name', 'price', 'price_sale', 'thumb')
            ->where('active', 1)
            ->where('id', '!=', $id)
            ->orderByDesc('id')
            ->limit(8)
            ->get();
    }
}
