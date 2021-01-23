@extends('layouts.app')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-12 ml-auto">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{url('/reports')}}">Reports</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sales Summary Graphical</li>
                    </ol>
                </nav>
            </div>
        </div>

    </div>
    <sales-summary-graphical/>
@endsection
