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
                <div class="productList">
                    <div class="productContainer flex justify-center flex-col items-center my-4 flex-wrap max-h-[40rem] overflow-auto">
                        <div class="searchProduct">
                            <input type="text" name="searchProduct" id="" class="rounded typeahead">
                        </div>
                        @foreach ($products as $item)
                            <div class="max-w-sm w-full sm:w-1/2 lg:w-[24%] py-6 px-3 rounded">
                                <div class="bg-white shadow-xl rounded-lg">
                                    <div class="bg-cover bg-center h-56 p-4 flex justify-center">
                                        <img src="/products/{{ $item['productImg'] }}"
                                            class="h-[10rem] w-auto object-cover object-center rounded">
                                    </div>
                                    <div class="p-1">
                                        <p class="text-xl text-gray-900">
                                            {{ $item['productDetail'] }}-{{ $item['productName'] }}</p>
                                    </div>
                                    <div class="flex p-4 border-t border-gray-300 text-gray-700">
                                        <div class="flex-1 inline-flex items-center">

                                            <p><span class="text-gray-900 font-bold">Category-{{ $item['productCategory'] }}
                                            </p>
                                        </div>
                                        <div class="flex-1 inline-flex items-center">

                                            <p><span class="text-gray-900 font-bold">{{ $item['productPrice'] }}Rs</p>
                                        </div>
                                    </div>

                                    <a href="/order/{{ $item['ProductMasterid'] }}/{{ auth()->user()->id }}/{{ $item['id'] }}"
                                        class="flex justify-center p-1 border-t border-gray-300 bg-gray-100">
                                        Add To Cart
                                    </a>

                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
