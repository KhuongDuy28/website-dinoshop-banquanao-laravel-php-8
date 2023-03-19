<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\CartService;
use App\Models\Customer;

class CartController extends Controller
{

    protected $cart;

    public function __construct(CartService $cart)
    {
        $this->cart = $cart;
    }
    public function index()
    {
        return view('admin.carts.customer', [
            'title' => 'Danh sách đơn đặt hàng',
            'customers' => $this->cart->getCustomer()
        ]);
    }

    public function show(Customer $customer)
    {
        $cart = $this->cart->getProductForCart($customer);

        return view('admin.carts.detail', [
            'title' => 'Chi tiết đơn hàng : ' . $customer->name,
            'customer' => $customer,
            'carts' => $cart
        ]);
    }
}
