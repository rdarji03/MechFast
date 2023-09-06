@extends('Layouts.index')
@section('title', 'SellerDashboard')
@section('content')

    <div class="Container flex w-[100%]">
        <div class="sidenav w-[14%]">
            @include('navbar.sellerSideNav')
        </div>
        <div class="sellerSection w-[86%] flex flex-col">
            <div>
                @include('navbar.topNavbar')
                <div class="categoryTable flex justify-center">
                    
                    <div class="dataTable  border-2 rounded border-gray-950 w-[95%] mt-3"
                        style="max-height: 36rem;overflow: auto; background:white">
                        <table id="myTable" class="display">
                            
                            <thead>
                                <tr>
                                    <th scope="col" class=" text-center" style="text-align: center">Sr no</th>
                                    <th scope="col" class=" text-center" style="text-align: center">Product Name</th>
                                    <th scope="col" class="text-center" style="text-align: center">Buyers Name</th>
                                    <th scope="col" class="text-center" style="text-align: center">Buyers Email</th>
                                    <th scope="col" class="text-center" style="text-align: center">Buyers Address</th>
                                    <th scope="col" class="text-center" style="text-align: center">Product Price</th>
                                    <th scope="col" class="text-center" style="text-align: center">Order Status</th>
                                    <th scope="col" class="text-center" style="text-align: center">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <div class="">
                                    @foreach ($products as $item)
                                        <tr>
                                            <td>{{ $item['orderedProductid'] }}</td>
                                            <td>{{ $item['productName'] }}</td>
                                            <td>{{ $item['name'] }}</td>
                                            <td>{{ $item['email'] }}</td>
                                            <td>{{$item["sellerStoreNo"]}},{{$item["sellerArea"]}},{{$item["sellerLandmark"]}}</td>
                                            <td>{{ $item['productPrice'] }}</td>
                                            <td>
                                                @if ($item['orderStatus'] == '1')
                                                    Out For Delivery
                                                @elseif ($item['orderStatus'] == '2')
                                                    Delivered
                                                @else
                                                    Ordered
                                                @endif
                                            </td>
                                            <td>

                                                <select name="" id="" onchange="location=this.value">
                                                    <option value="accepted/{{ $item['orderedProductid'] }}">Ordered
                                                    </option>
                                                    <option value="outfordelivery/{{ $item['orderedProductid'] }}">Out For
                                                        delivery</option>
                                                    <option value="delivered/{{ $item['orderedProductid'] }}">Delivered
                                                    </option>
                                                </select>
                                               
                                            </td>
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
