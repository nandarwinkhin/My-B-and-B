<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Frontdesk</title>
    <style>
        .navcolor {
            color: #66cfff;
        }

        /* .body{
            background-color: #66cfff;
        } */
        .row-day-name, .row-day {
            background-color: #99dfff;

        }

        .daytable {
            width: 100%;
            text-align: center;
        }

        .roomNumSize {
            width: 15%;
        }

        .logoPannel {
            height: 2cm;
        }

        .caladar {

        }

        /* td.roomCell:hover{
            cursor: pointer;
            color: burlywood;
            background-color: brown;

        } */
        .highlight {
            background-color: #ccc !important;
        }

        .highlight1 {
            background-color: #99dfff !important;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/jquery-contextmenu/2.7.1/jquery.contextMenu.min.css">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-contextmenu/2.7.1/jquery.contextMenu.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-contextmenu/2.7.1/jquery.ui.position.js"></script>
    <script src="js/multipleSelect.js"></script>
    <script src="js/multi.js"></script>

</head>
<body>
@include('../sharedata/nav')
<div class="row ml-0 mr-0 body">
    <div class="col-md-2 ml-0 mr-0">
        <div class="calandar">
            <div class="caladar">
                @include('../sharedata/calander')
            </div>
            <br>

            @include('../sharedata/sidebar')
        </div>
    </div>
    <div class="col-md-10">

        <ul class="nav nav-tabs mt-1" id="myTab" role="tablist" style="background-color:#e6faff">

            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#homed" role="tab" aria-controls="home"
                   aria-selected="true">FrontDesk</a>
            </li>
            {{--@if (Route::currentRouteAction()!="App\Http\Controllers\DateBarController@createDate")--}}
                {{--@if ($tabNum==1)--}}
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                           aria-controls="profile"
                           aria-selected="false">Housekeeping</a>
                    </li>
                {{--@endif--}}
                {{--@if ($tabNum[0]==2)--}}
                    <li class="nav-item">
                        <a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab"
                           aria-controls="messages"
                           aria-selected="false">Report</a>
                    </li>
                {{--@endif--}}
                {{--@if ($tabNum==3)--}}
                    <li class="nav-item">
                        <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab"
                           aria-controls="settings"
                           aria-selected="false">Member</a>
                    </li>
                {{--@endif--}}
                {{--@php(print_r($tabNum))--}}
            {{--@endif--}}
            <li class="nav-item  ml-auto">
                <a class="btn btn-sm btn-outline-info" href="{{url('/7')}}">Week</a>
            </li>
            <li class="nav-item ml-2 mr-2">
                <a class="btn btn-sm btn-outline-info" href="{{url('/15')}}">15 Days</a>
            </li>


            <li class="nav-item navbar-right">
                <a class="btn btn-sm btn-outline-info" href="{{url('/')}}">Month</a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane active" id="homed" role="tabpanel" aria-labelledby="home-tab">

                <table class="daytable table-bordered">

                    @php

                        $month=$col;
                        $dayName=[1=>'Su',2=>'Mo',3=>'Tu',4=>'We',5=>'Th',6=>'Fr',7=>'Sa'];
                      $firstDay= substr(date("l", mktime(5, 5, 5, $mon, 1, $year)),0,2);
                    @endphp
                    {{-- Start For Day Name Row --}}
                    <tr class="row-day-name">
                        <td class="roomNumSize"></td>

                        @php($i=1)
                        @foreach ($dayName as $key=>$each)

                            @if($firstDay!=$each)
                                @continue

                            @endif
                            @for ($count = $key; $count <=7; $count++)
                                <td>
                                    {{$dayName[$count]}}
                                    @php($i++)
                                </td>
                            @endfor

                        @endforeach

                        @while($i<=$month)
                            @foreach($dayName as $key=> $name)
                                <td>
                                    {{$name}}
                                </td>
                                @php($i++)
                                @if($i>$month)
                                    @break
                                @endif
                            @endforeach

                        @endwhile

                    </tr>
                    {{-- End For Day Name Row --}}

                    {{-- Start for Day Row --}}
                    <tr class="row-day">
                        <td class=""></td>

                        @for ($count=1;$count<=$month;$count++)
                            @if($count<10)
                                <td class="day">{{"0".$count}}</td>
                            @else
                                <td class="day">{{$count}}</td>
                            @endif
                        @endfor

                    </tr>
                    {{-- End for Day Row --}}

                    {{--Start For Room Thpe and  Rome Number --}}
                    @include('frontdesk.room')
                    {{--End For Room Thpe and  Rome Number --}}
                </table>
            </div>
            <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            </div>
            <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">messages...</div>
            <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">settings...</div>
        </div>
    </div>
</div>

{{--<a class="btn btn-inverse btn-large hidden-print" onClick="javascript:window.print();">Printt</a>--}}
</body>

</html>
