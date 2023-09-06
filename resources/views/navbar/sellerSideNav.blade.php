<header class="min-h-[100vh]  bg-[#25223B]">
    <div class="BannerHead flex items-center justify-center gap-1 p-2">
        <img src="{{asset("img/logo/logo.png")}}" alt="" srcset="" class="h-[2.5rem]">
        <span class=" text-[1.5rem] font-semibold text-white ">MechFast</span>
    </div>
    <nav id="sidebarMenu" class="p-2">
        <div>
            <div class="list-group list-group-flush rounded">
                    <div class="p-2">
                        <ul>
                            <li class=" my-5">
                                <a class="text-white text-decoration-none p-1 flex items-center gap-3" href="/seller/home/{{auth()->user()->id}}"><img class="h-[1.7rem] w-auto" src="{{asset("img/homeIcon/dashboard.png")}}" alt="" srcset="">Dashboard </a>
                            </li>
                            <li class=" my-5">
                                <a class="text-white text-decoration-none p-1 flex items-center gap-3" href="/seller/category/{{auth()->user()->id}}"><img class="h-[1.7rem] w-auto" src="{{asset("img/homeIcon/sorting.png")}}" alt="" srcset="">Category </a>
                            </li>
                            <li class=" my-5">
                                <a class="text-white text-decoration-none p-1 flex items-center gap-3" href="/seller/product/{{auth()->user()->id}}"><img class="h-[1.7rem] w-auto" src="{{asset("img/homeIcon/product.png")}}" alt="" srcset="">Product</a>
                            </li>
                            <li class=" my-5">
                                <a class="text-white text-decoration-none p-1 flex items-center gap-3" href="/seller/orders/{{auth()->user()->id}}"><img class="h-[1.7rem] w-auto" src="{{asset("img/homeIcon/shopping.png")}}" alt="" srcset="">Orders </a>
                            </li>
                        </ul>
                    </div>
            </div>
        </div>
    </nav>




</header>