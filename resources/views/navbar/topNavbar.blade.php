<nav class="flex items-center justify-between flex-wrap py-2 px-3 shadow-md shadow-slate-500 bg-white">
    <a href="/seller/profile/{{auth()->user()->id}}" target="_blank" rel="noopener noreferrer">
        <div class="flex items-center text-white mr-6">
            <img src="{{asset("img/logo/userLogo.png")}}" alt="" srcset="" class="h-[2rem]">
            <h4 class="text-[1.5rem] text-black">{{auth()->user()->name}}</h4>
        </div>
    </a>
    <div class="flex items-center gap-2">
        <div>
            <a href="/logout" class=" bg-teal-500 p-2 rounded-md"><button class="rounded-md text-white">Logout</button>
            </a>
        </div>
    </div>
    </div>
</nav>