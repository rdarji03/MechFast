@extends("Layouts.index")
@section("title","SellerInfo")
@section("content")

<div class="sellerInfoForm">
    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center mx-auto md:h-screen lg:py-0">
            <div
                class="bg-white rounded-lg shadow dark:border md:mt-0  w-[40rem] xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8 ">
                    <h1
                        class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Tell us Something About You
                    </h1>
                    <form class="space-y-4 md:space-y-6" method="POST">
                        @csrf
                        <div class="flex justify-between">
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
                            class="w-full text-white bg-blue-500 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Sign
                            in</button>
                        <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                            Don’t have an account yet? <a href="/register"
                                class="font-medium text-primary-600 hover:underline dark:text-primary-500">Sign
                                up</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection