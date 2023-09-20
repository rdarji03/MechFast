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
                <div class="productList flex flex-col items-center justify-center flex-wrap ">
                    <p class="my-3 text-lg md:text-xl dark:text-white font-semibold leading-6 xl:leading-5 text-gray-800">
                        Your Cart</p>
                    <div class=" px-4 md:px-6 w-[50rem]">
                        <div
                            class=" flex flex-col xl:flex-row jusitfy-center items-stretch w-full xl:space-x-8 space-y-4 md:space-y-6 xl:space-y-0">
                            <div
                                class="max-h-[40rem] overflow-auto scrollbar  scrollbar-track-white scrollbar-thumb-gray-800 scrollbar-thumb-rounded-full scrollbar-w-2 flex flex-col justify-start items-start w-full space-y-4 md:space-y-6 xl:space-y-8">
                                <div
                                    class="flex flex-col justify-start items-start dark:bg-gray-800 bg-gray-50 px-4 py-4 md:py-6 md:p-6 xl:p-8 w-full">
                                    @foreach ($orderProducts as $item)
                                        <div
                                            class="mt-4 md:mt-6 flex flex-col md:flex-row justify-start items-start md:items-center md:space-x-6 xl:space-x-8 w-full ">
                                            <div class="flex justify-between">
                                                <div class="pb-4 md:pb-8 w-full md:w-40">
                                                    <img class="w-full hidden md:block"
                                                        src="/products/{{ $item['productImg'] }}" alt="dress" />
                                                    <img class="w-full md:hidden"src="/products/{{ $item['productImg'] }}"
                                                        alt="dress" />
                                                </div>

                                            </div>
                                            <div
                                                class="border-b border-gray-200 md:flex-row flex-col flex justify-between items-start w-full pb-8 space-y-4 md:space-y-0">

                                                <div class="w-full flex flex-col justify-start items-start space-y-8">
                                                    <div class="flex items-center gap-4 w-full">
                                                        <h3
                                                            class="text-xl dark:text-white xl:text-2xl font-semibold leading-6 text-gray-800">
                                                            {{ $item['productName'] }}</h3>
                                                        <div class="productprice">
                                                            <p class="text-base dark:text-white xl:text-lg leading-6">
                                                                {{ $item['productDetail'] }}</h3>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center  gap-3">
                                                        <p
                                                            class="text-sm dark:text-white leading-none text-gray-800 font-semibold">
                                                            <span class="dark:text-gray-400 ">Price: </span>
                                                            <span>&#8377;</span> {{ $item['productPrice'] }}
                                                        </p>
                                                        <p class="text-sm    leading-none text-gray-800"><span
                                                                class="dark:text-gray-400 ">Category: </span>
                                                            {{ $item['productCategory'] }}</p>

                                                        <p class="text-sm dark:text-white leading-none text-gray-800"><span
                                                                class="dark:text-gray-400 ">Status: </span>

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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
