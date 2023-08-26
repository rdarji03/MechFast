@extends('Layouts.index')
@section('title', 'Home')
@section('content')

    <div class="sellerContainer flex">
        <div class="sidenav w-[14%]">
            @include('navbar.buyerSideNav')
        </div>
        <div class="sellerSection w-[86%]">
            <div>
                @include('navbar.topNavbar')
                <div class="cart">
                    <div class="cartContainer my-4 bg-white">
                        <div class="flex shadow-md">
                            <div class="w-3/4 px-10 py-10">
                                <div class="flex justify-between border-b pb-8">
                                    <h1 class="font-semibold text-2xl">Shopping Cart</h1>
                                </div>
                                <table id="myTable" class=" compact stripe">
                                    <thead>
                                        <tr>
                                            <th scope="col" class=" text-center" style="text-align: center">Product
                                                Name</th>
                                            <th scope="col" class="text-center" style="text-align: center">Product
                                                Detail</th>
                                            <th scope="col" class="text-center" style="text-align: center">Product
                                                Image</th>
                                            <th scope="col" class="text-center" style="text-align: center">Product
                                                Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $products)
                                            <tr>
                                                <td>{{ $products['productName'] }}</td>
                                                <td>{{ $products['productDetail'] }}</td>
                                                <td class=" flex justify-center"><img
                                                        src="/products/{{ $products['productImg'] }}"
                                                        class="h-[3.5rem] w-auto" alt="ntg" srcset="">
                                                <td>{{ $products['productPrice'] }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>

                            <div id="summary" class="w-1/4 px-8 py-10">
                                <h1 class="font-semibold text-2xl border-b pb-8">Order Summary</h1>
                                <div class="flex justify-between mt-10 mb-5">
                                    <span class="font-semibold text-sm uppercase">Items 3</span>
                                    <span class="font-semibold text-sm">590$</span>
                                </div>
                                <div>
                                    <label class="font-medium inline-block mb-3 text-sm uppercase">Shipping</label>
                                    <select class="block p-2 text-gray-600 w-full text-sm">
                                        <option>Standard shipping - $10.00</option>
                                    </select>
                                </div>
                                <div class="py-10">
                                    <label for="promo" class="font-semibold inline-block mb-3 text-sm uppercase">Promo
                                        Code</label>
                                    <input type="text" id="promo" placeholder="Enter your code"
                                        class="p-2 text-sm w-full">
                                </div>
                                <button
                                    class="bg-red-500 hover:bg-red-600 px-5 py-2 text-sm text-white uppercase">Apply</button>
                                <div class="border-t mt-8">
                                    <div class="flex font-semibold justify-between py-6 text-sm uppercase">
                                        <span>Total cost</span>
                                        <span>{{$totalBill[0]["totalSale"]}}</span>
                                    </div>
                                    <button
                                        class="bg-indigo-500 font-semibold hover:bg-indigo-600 py-3 text-sm text-white uppercase w-full"><a href="/checkout/{{auth()->user()->id}}">Checkout</a></button>
                                </div>
                            </div>

                        </div>
                    </div>
                    </body>
                </div>
            </div>
        </div>
    @endsection
