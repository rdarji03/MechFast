@extends("Layouts.index")
@section('title', 'SellerDashboard')
@section("content")
<div class="detailForm  fixed  z-10  min-h-full w-full transition-all hidden">
    <form action="/addProduct" method="post" enctype="multipart/form-data"
        class="d-flex bg-white justify-content-center bg-body-secondary border rounded d-flex flex-column justify-content-center align-items-center p-1 shadow-lg "
        style="height: auto; width:25rem">
        @csrf
        <input type="text" name="sellerId" value="{{auth()->user()->id}}" hidden>
        <div class="closeIcon flex justify-end">
            <img src="{{asset("img/action-icons/close.png")}}" alt="" srcset="" class="h-[1.5rem] cursor-pointer"
                onclick="closeForm()">
        </div>
        <div class="mb-6 flex flex-col">
            <label for="productName">Product Name</label>
            <input type="text" id="productName" name="productName"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required>
        </div>
        <div class="mb-6 flex flex-col">
            <label for="productDetail">Product Detail</label>
            <input type="text" id="productDetail" name="productDetail"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required>
        </div>
        <div class="mb-6 flex flex-col">
            <label for="productQty">Product Quantity</label>
            <input type="text" id="productQty" name="productQty"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required>
        </div>
        <div class="mb-6 flex flex-col">
            <label for="productImg">Product Image</label>
            <input type="file" id="productImg" name="productImg" 
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                >
        </div>
        <div class="mb-6 flex flex-col">
            <label for="productCategory">Product Category</label>
           <select name="productCategory" id="">
            @foreach ($cData as $data)
                <option value="{{$data["categoryDetail"]}}">{{$data["categoryDetail"]}}</option>
            @endforeach
           </select>
        </div>

        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add
            Task</button>
    </form>
</div>
<div class="container flex">
    <div class="sidenav w-[12%]">
        @include("navbar.sellerSideNav")
    </div>
    <div class="sellerSection w-[88%] flex flex-col">
        <div>
            @include("navbar.topNavbar")
            <div class="actionsButton flex gap-3">
                <button type="button" class="text-white bg-[#fe7e36] font-medium rounded-md text-sm px-5 py-2.5"
                    onclick="showForm()">Add Product</button>
            </div>
            <div class="categoryTable flex justify-center">
                <div class="dataTable  border-2 rounded border-gray-950 w-[75%]"
                    style="max-height: 36rem;overflow: auto; background:white;">
                    <table id="myTable" class="display">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center" style="text-align: center">Product Name</th>
                                <th scope="col" class="text-center" style="text-align: center">Product Detail </th>
                                <th scope="col" class="text-center" style="text-align: center">Product Qty </th>
                                <th scope="col" class="text-center" style="text-align: center">Product Img </th>
                                <th scope="col" class="text-center" style="text-align: center">Product Category </th>
                            </tr>
                        </thead>
                        <tbody>
                            <div class="">
                                @foreach ($pData as $data)
                                <tr>
                                    <td scope="row" class="text-center">{{$data["productName"]}}</td>
                                    <td class="text-center">{{$data["productDetail"]}}
                                    </td>
                                    <td class="text-center">{{$data["productQty"]}}
                                    </td>
                                    <td class="text-center"><img src="{{url("E:\web development\FrameWork\project\MechFast\storage\app\public\images\1690569819.png")}}" alt="ntg" srcset="">
                                    <td class="text-center">{{$data["productCategory"]}}
                                    </td>
                                    {{-- <td class="text-center">
                                        <a href={{ 'delet/' . $data['taskID'] }}>
                                            <button class="bg-red-400 mx-2 p-1  border rounded">
                                                <img src="{{ asset(" img/action-icons/delet.png") }}" class="h-[1.5rem]"
                                                    alt="description of myimage">
                                            </button>
                                        </a>
                                        <a href={{ 'edit/' . $data['taskID'] }} target="_blank">
                                            <button class="bg-blue-400 mx-2 p-1  border rounded">
                                                <img src="{{ asset(" img/action-icons/edit.png") }}" class="h-[1.5rem]"
                                                    alt="description of myimage">
                                            </button>
                                        </a>
                                    </td> --}}
                                </tr>
                                @endforeach
                            </div>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection