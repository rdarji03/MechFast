@extends("Layouts.index")
@section('title', 'SellerDashboard')
@section("content")

<div class="container flex">
    <div class="sidenav w-[12%]">
        @include("navbar.sellerSideNav")
    </div>
    <div class="sellerSection w-[88%] flex flex-col">
        <div>
            @include("navbar.topNavbar")
            <div class="categoryTable flex justify-center">
                <div class="dataTable  border-2 rounded border-gray-950 w-[75%]" style="max-height: 36rem;overflow: auto; background:white">
                    <table id="myTable" class="display"> 
                        <thead>
                            <tr>
                                <th scope="col" class=" text-center" style="text-align: center">Product Name</th>
                                <th scope="col" class="text-center" style="text-align: center">Product Price</th>
                                <th scope="col" class="text-center" style="text-align: center">Buyers Name</th>
                                <th scope="col" class="text-center" style="text-align: center">Byuers Email</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            <div class="">
                               @foreach ($products as $item)
                               <tr>
                                   <td>{{$item["productName"]}}</td>
                                   <td>{{$item["name"]}}</td>
                                   <td>{{$item["email"]}}</td>
                                   <td>{{$item["productPrice"]}}</td>
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