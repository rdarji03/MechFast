@extends("Layouts.index")
@section('title', 'SellerDashboard')
@section("content")


<div class="sellerContainer flex">
    <div class="sidenav w-[14%]">
        @include("navbar.sellerSideNav")
    </div>
    <div class="sellerSection w-[86%]">
        @include("navbar.topNavbar")
    </div>
</div>
@endsection