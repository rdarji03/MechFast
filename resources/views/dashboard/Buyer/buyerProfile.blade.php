@extends("Layouts.index")
@section('title', 'Profile')
@section("content")
<div class="detailForm  fixed  z-10  min-h-full w-full transition-all hidden">
    <form class="space-y-4 md:space-y-6 bg-[#ECECEC] shadow-lg rounded p-1" method="POST" action="/editProfile">
        @csrf
        <div class="closeIcon flex justify-end">
            <img src="{{asset("img/action-icons/close.png")}}" alt="" srcset=""
                class="h-[1.5rem] cursor-pointer" onclick="closeForm()">
        </div>
        <div class="flex justify-between">
            <input type="text" value="{{auth()->user()->id}}" name="userId" hidden> 
            <div>
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Full Name</label>
                <input type="text" name="name" id="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="name@company.com" required="">
            </div>
            <div>
                <label for="number"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Number</label>
                <input type="text" name="number" id="number"
                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="9988774455" required="">
            </div>
            <div>
                <label for="email"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                    email</label>
                <input type="email" name="email" id="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="name@company.com" required="">
            </div>
        </div>
        <div>
            <div>
                <label for="houseNo"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">House No
                </label>
                <input type="text" name="houseNo" id="houseNo"
                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="23 abc" required="">
            </div>
            <div>
                <label for="area"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Area
                </label>
                <input type="text" name="area" id="area"
                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Tarsali" required="">
            </div>
            <div>
                <label for="landmark"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Landmark
                </label>
                <input type="text" name="landmark" id="landmark"
                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Nr xyz" required="">
            </div>
            <div class="flex gap-2">
                <div>
                    <label for="city"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">City
                    </label>
                    <input type="text" name="sCity" id=""
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Vadodara">
                </div>
                <div>
                    <label for="pincode"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pincode
                    </label>
                    <input type="text" name="pincode" id=""
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="336655">
                </div>
                <div>
                    <label for="state"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">State
                    </label>
                    <select name="uState"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg ">

                        @for ($i = 0; $i < count((array)$states); $i++){ <option>{{$states[$i]}}
                            </option>
                            } @endfor
                    </select>

                </div>
            </div>
        </div>
        <button type="submit"
            class="w-full text-white bg-blue-500 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Update Profile</button>
       
    </form>
</div>
<div class="Container flex">
    <div class="sidenav w-[14%]">
        @include('navbar.buyerSideNav')
    </div>
    <div class="sellerSection w-[86%] flex flex-col">
        <div>
            @include("navbar.topNavbar")
            <div class=" w-full flex justify-center items-center p-[1rem] ">
                <div class="bg-white p-3 shadow-md rounded-md w-[75%] ">
                    <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                        <span clas="text-green-500">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </span>
                        <span class="tracking-wide">About</span>
                    </div>
                    <div class="text-gray-700">
                        <div class="grid md:grid-cols-2 text-sm">
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">First Name</div>
                                <div class="px-4 py-2">{{$uInfo[0]["sellerName"]}}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Email</div>
                                <div class="px-4 py-2">{{$uInfo[0]["sellerEmail"]}}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Contact No</div>
                                <div class="px-4 py-2">{{$uInfo[0]["sellerNumber"]}}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Adress</div>
                                <div class="px-4 py-2">{{$uInfo[0]["sellerStoreNo"]}},{{$uInfo[0]["sellerArea"]}},{{$uInfo[0]["sellerLandmark"]}}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold"> City</div>
                                <div class="px-4 py-2">{{$uInfo[0]["sellerCity"]}}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold"> State</div>
                                <div class="px-4 py-2">{{$uInfo[0]["sellerState"]}}</div>
                            </div>
                            
                        </div>
                    </div>
                    <button
                        class="block w-full bg-[#25223B] text-sm font-light rounded-lg text-white  p-3 my-4" onclick="showForm()">Edit</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection