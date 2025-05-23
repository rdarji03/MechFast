<header class="min-h-[100vh]  bg-[#25223B]">
    <div class="BannerHead flex items-center justify-center gap-1 p-2">
        <img src="{{ asset('img/logo/logo.png') }}" alt="" srcset="" class="h-[2.5rem]">
        <span class=" text-[1.5rem] font-semibold text-white ">Mech Fast</span>
    </div>
    <nav id="sidebarMenu" class="p-2">
        <div>
            <div class="list-group list-group-flush rounded">
                <div class="p-2">
                    <ul>
                        <li class=" my-5">
                            <a class="text-white text-decoration-none p-1 flex items-center gap-1"
                                href="/buyer/home/{{ auth()->user()->id }}"><img class="h-[1.3rem] w-auto"
                                    src="{{ asset('img/homeIcon/home.png') }}" alt="" srcset="">Home </a>
                        </li>
                        <li class=" my-5">
                            <a class="text-white text-decoration-none p-1  flex items-center gap-1"
                                href="/buyer/orders/{{ auth()->user()->id }}"><img class="h-[1.3rem] w-auto"
                                    src="{{ asset('img/homeIcon/order.png') }}" alt="" srcset="">Orders
                            </a>
                        </li>
                        <li class=" my-5">
                            <a class="text-white text-decoration-none p-1 flex items-center gap-1"
                                href="/buyer/cart/{{ auth()->user()->id }}"><img class="h-[1.3rem] w-auto"
                                    src="{{ asset('img/homeIcon/shopping.png') }}" alt="" srcset="">Cart
                                &#40;{{ $item }}&#41;</a>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
    </nav>




</header>
