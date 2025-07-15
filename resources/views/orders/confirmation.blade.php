
<x-layout>

<h2>Order Confirmation</h2>

<h4>Shipping Info</h4>
<ul>
    <li>Name: {{ $shipping['full_name'] }}</li>
    <li>Address: {{ $shipping['address'] }}, {{ $shipping['city'] }}</li>
    <li>Postal Code: {{ $shipping['postal_code'] }}</li>
    <li>Phone: {{ $shipping['phone'] }}</li>
</ul>

<h4>Payment Info</h4>
<ul>
    <li>Card Ending: ****{{ substr($payment['card_number'], -4) }}</li>
</ul>

<a href="/" class="btn btn-primary">Place Order</a>


</x-layout>