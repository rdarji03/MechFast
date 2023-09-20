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
                <div class="cart p-3">

                    @if (session('success'))
                        <div id="alert-3"
                            class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                            role="alert">
                            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                            </svg>
                            <span class="sr-only">Info</span>
                            <div class="ml-3 text-sm font-medium">
                                {{ session('success') }}
                            </div>
                            <button type="button"
                                class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
                                data-dismiss-target="#alert-3" aria-label="Close">
                                <span class="sr-only">Close</span>
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                            </button>
                        </div>
                    @endif
                    <div class="cartContainer my-4 bg-white rounded">
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
                                            <th scope="col" class="text-center" style="text-align: center">
                                                Action</th>
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
                                                <td> <a href={{ url('delet/item/' . $products['cartId']) }}>
                                                        <button class="bg-red-400 mx-2 p-1  border rounded">
                                                            <img src="{{ asset('img/action-icons/delet.png') }}"
                                                                class="h-[1.5rem]" alt="description of myimage">
                                                        </button>
                                                    </a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>

                            <div id="summary" class="w-1/4 px-8 py-10">
                                <h1 class="font-semibold text-2xl border-b pb-8">Order Summary</h1>

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
                                        <span>{{ $totalBill[0]['totalSale'] }}</span>
                                    </div>
                                    <button
                                        class="bg-indigo-500 font-semibold hover:bg-indigo-600 py-3 text-sm text-white uppercase w-full"><a
                                            href="/checkout/{{ auth()->user()->id }}">Checkout</a></button>
                                </div>
                            </div>

                        </div>
                    </div>
                    </body>
                </div>
            </div>
        </div>
    @endsection
