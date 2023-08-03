@extends("Layouts.index")
@section('title', 'SellerDashboard')
@section("content")


<div class="sellerContainer flex">
    <div class="sidenav w-[12%]">
        @include("navbar.buyerSideNav")
    </div>
    <div class="sellerSection w-[88%]">
        <div>
            @include("navbar.topNavbar")
            <div class="productList">
                <div class="productContainer flex justify-center my-4">

                    @foreach ($products as $item)

                    <div class="flex gap-3">
                        <div class="group relative">
                            <div
                                class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 l-75 lg:h-80">
                                <img src="/products/{{$item["productImg"]}}"
                                    class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                            </div>
                            <div class="mt-4 flex justify-between">
                                <div>
                                    <h3 class="text-sm text-gray-700">
                                        <a href="#">
                                            <span aria-hidden="true" class="absolute inset-0"></span>
                                            {{$item["productName"]}}
                                        </a>
                                    </h3>
                                    <p class="mt-1 text-sm text-gray-500"> {{$item["productCategory"]}}</p>
                                </div>
                                <p class="text-sm font-medium text-gray-900">{{$item["productPrice"]}}</p>
                            </div>

                        </div>
                        <a href="/order/{{$item["ProductMasterid"]}}/{{auth()->user()->id}}">
                            Order
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection