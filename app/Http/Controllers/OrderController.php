<?php
namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    // Show initial order form (if needed)
public function create(Request $request)
{
    $product = Product::findOrFail($request->product_id);
    return view('orders.create', compact('product'));
}

public function store(Request $request)
{
    $validated = $request->validate([
        'product_id' => 'required|exists:products,id',
        'full_name' => 'required',
        'address' => 'required',
        'city' => 'required',
        'postal_code' => 'required',
        'phone' => 'required',
        'size' => 'required|string|max:10',
        'color' => 'required|string|max:20',
        'quantity' => 'required|integer|min:1',
        'payment_method' => 'required|string',
    ]);

    $product = Product::findOrFail($validated['product_id']);
    $total = $product->price * $validated['quantity'];

    $order = Order::create([
        'user_id' => Auth::id(),
        'product_id' => $product->id,
        'size' => $validated['size'],
        'color' => $validated['color'],
        'quantity' => $validated['quantity'],
        'payment_method' => $validated['payment_method'],
        'full_name' => $validated['full_name'],
        'address' => $validated['address'],
        'city' => $validated['city'],
        'postal_code' => $validated['postal_code'],
        'phone' => $validated['phone'],
        'total_price' => $total,
    ]);

    return redirect()->route('orders.success')->with('message', 'Order placed successfully!');
}

public function success()
{
    return view('orders.success');
}


    // Show latest order in cart
    public function showCart()
    {
        $orders = Order::with('product') // Eager load product details
                    ->where('user_id', Auth::id())
                    ->latest()
                    ->get();

        return view('orders.cart', compact('orders'));
    }

    //show preview in the cart
        public function preview(Order $order)
{
    
    if ($order->user_id !== auth()->id()) {
        abort(403, 'Unauthorized access to this order.');
    }

    return view('orders.preview', compact('order'));
}
}

