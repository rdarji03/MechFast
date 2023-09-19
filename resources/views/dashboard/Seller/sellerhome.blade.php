@extends('Layouts.index', ['axisData' => $axisData])
@section('title', 'SellerDashboard')
@section('content')
    <div class="sellerContainer flex">
        <div class="sidenav w-[14%]">
            @include('navbar.sellerSideNav')
        </div>
        <div class="sellerSection w-[86%]">
            <div class="sellerHome">
                @include('navbar.topNavbar')
                <div class="statsContainer p-5 flex justify-center">
                    <div class="flex gap-5">
                        <div
                            class="rounded-sm border border-stroke bg-white p-5 shadow-md dark:border-strokedark dark:bg-boxdark h-auto w-[15rem]">
                            <div class="flex h-11.5 w-11.5 items-center justify-start rounded-full bg-meta-2 dark:bg-meta-4">
                                <img src="{{ asset('img/logo/cart.png') }}" alt="" srcset=""
                                    class="h-[2.5rem] w-auto">
                            </div>

                            <div class="mt-4 flex items-end justify-between">
                                <div>

                                    <span class="text-title-md font-bold text-black dark:text-white">Total order</span>
                                </div>

                                <span class="text-title-md font-bold text-black dark:text-white">
                                    {{ $totalorder }}
                                </span>
                            </div>
                        </div>
                        <div
                            class="rounded-sm border border-stroke bg-white p-5 shadow-md dark:border-strokedark dark:bg-boxdark h-auto w-[15rem]">
                            <div
                                class="flex h-11.5 w-11.5 items-center justify-start rounded-full bg-meta-2 dark:bg-meta-4">
                                <img src="{{ asset('img/logo/rupees.png') }}" alt="" srcset=""
                                    class="h-[2.5rem] w-auto">
                            </div>

                            <div class="mt-4 flex items-end justify-between">
                                <div>

                                    <span class="text-title-md font-bold text-black dark:text-white">Total Sale</span>
                                </div>

                                <span class="text-title-md font-bold text-black dark:text-white">
                                    {{ $totalSale[0]['totalSale'] }}
                                </span>
                            </div>
                        </div>
                        <div
                            class="rounded-sm border border-stroke bg-white p-5 shadow-md dark:border-strokedark dark:bg-boxdark h-auto w-[15rem]">
                            <div
                                class="flex h-11.5 w-11.5 items-center justify-start rounded-full bg-meta-2 dark:bg-meta-4">
                                <img src="{{ asset('img/logo/pending.png') }}" alt="" srcset=""
                                    class="h-[2.5rem] w-auto">
                            </div>

                            <div class="mt-4 flex items-end justify-between">
                                <div>

                                    <span class="text-title-md font-bold text-black dark:text-white">Pending Order</span>
                                </div>

                                <span class="text-title-md font-bold text-black dark:text-white">
                                    {{ $totalPending[0]['pendingOrder'] }}
                                </span>
                            </div>
                        </div>
                        <div
                            class="rounded-sm border border-stroke bg-white p-5 shadow-md dark:border-strokedark dark:bg-boxdark h-auto w-[15rem]">
                            <div
                                class="flex h-11.5 w-11.5 items-center justify-start rounded-full bg-meta-2 dark:bg-meta-4">
                                <img src="{{ asset('img/logo/delivery.png') }}" alt="" srcset=""
                                    class="h-[2.5rem] w-auto">
                            </div>

                            <div class="mt-4 flex items-end justify-between">
                                <div>

                                    <span class="text-title-md font-bold text-black dark:text-white">Out For Delivery</span>
                                </div>

                                <span class="text-title-md font-bold text-black dark:text-white">
                                    {{ $totalOrderinDelivery[0]['pendingOrder'] }}
                                </span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="saleChart">
                    <div id="curve_chart" style="width: 900px; height: 500px">

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Year', 'Sales'],
            <?php echo $axisData;?>
        ]);

        var options = {
            title: 'Total Sales',
            curveType: 'function',
            legend: {
                position: 'bottom'
            }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
    }
</script>