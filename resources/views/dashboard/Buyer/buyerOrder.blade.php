@extends('Layouts.index')
@section('title', 'Orders')
@section('content')
    <div class="sellerContainer flex">
        <div class="sidenav w-[14%]">
            @include('navbar.buyerSideNav')
        </div>
        <div class="sellerSection w-[86%]">
            <div>
                @include('navbar.topNavbar')
                <div class="productList flex justify-center flex-wrap max-h-[40rem] overflow-auto">
                    @foreach ($orderProducts as $item)
                        <div class="max-w-sm w-full sm:w-1/2 lg:w-[24%] py-6 px-3 rounded">
                            <div class="bg-white shadow-xl rounded-lg">
                                <div class="bg-cover bg-center h-56 p-4 flex justify-center">
                                    <img src="/products/{{ $item['productImg'] }}"
                                        class="h-[10rem] w-auto object-cover object-center rounded">
                                </div>
                                <div class="p-1">
                                    <p class="text-xl text-gray-900">{{ $item['productName'] }}</p>
                                </div>
                                <div class="flex p-4 border-t border-gray-300 text-gray-700">

                                    <div class="flex-1 inline-flex items-center">

                                        <p><span class="text-gray-900 font-bold">
                                                @if ($item['orderStatus'] == '1')
                                                    Out For Delivery
                                                @elseif ($item['orderStatus'] == '2')
                                                    Delivered
                                                @else
                                                    Ordered
                                                @endif
                                        </p>
                                    </div>

                                </div>

                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

        @endsection
