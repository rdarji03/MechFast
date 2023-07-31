@extends("Layouts.index")
@section('title', 'SellerDashboard')
@section("content")


<div class="sellerContainer flex">
    <div class="sidenav w-[12%]">
        @include("navbar.sellerSideNav")
    </div>
    <div class="sellerSection w-[88%]">
        @include("navbar.topNavbar")
    </div>
</div>
@endsection