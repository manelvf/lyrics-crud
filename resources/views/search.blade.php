@extends('layouts.basic')

@section('css')
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/instantsearch.js/1/instantsearch.min.css" />
@endsection

@section('content')

<div id="header">
    <div class="col-md-2"><h1>Coolyrics</h1></div>
    <div class="col-md-6">

          <div id="search-box"></div> 

    </div>
</div>

<div class="container-fluid">
    <div id="hits-container"></div>
    <div id="pagination-container"></div>
</div>

@endsection

@section('scripts')  
<!-- Scripts -->
@parent    
<script language="javascript" src="https://cdn.jsdelivr.net/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/instantsearch.js/1/instantsearch.min.js"></script>
@endsection 

@section('javascript')
@endsection
