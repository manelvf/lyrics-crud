<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Coolyrics') }}</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
       
        <!--b-navbar class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">{{ config('app.name', 'Coolyrics') }}</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Artists <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="{{route('artists.create')}}">New Artist</a></li>
                    <li><a href="{{route('artists.index')}}">Artists</a></li>
                  </ul>
                </li>


                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Songs <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="{{ route('songs.create') }}">New Song</a></li>
                    <li><a href="{{ route('songs.index') }}">Songs</a></li>
                  </ul>
                </li>

                <li><a href="{{route('register')}}">Register New User</a></li>

              </ul>

              <ul class="nav navbar-nav pull-right">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Name<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                      <li><a href="{{route('logout')}}">Logout</a></li>
                  </ul>
                </li>
              </ul>
              
            </div>
          </div>
        </b-navbar-->

  <b-navbar toggleable="lg" type="dark" variant="info">
    <b-navbar-brand href="#">{{ config('app.name', 'Coolyrics') }}</b-navbar-brand>

    <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

    <b-collapse id="nav-collapse" is-nav>
      <b-navbar-nav>
        <b-nav-item href="#">Link</b-nav-item>
        <b-nav-item-dropdown text="Songs" right>
          <b-dropdown-item href="{{ route('songs.create') }}">New Song</b-dropdown-item>
          <b-dropdown-item href="{{ route('songs.index') }}">Songs</b-dropdown-item>
        </b-nav-item-dropdown>
        <b-nav-item-dropdown text="Artists" right>
          <b-dropdown-item href="{{ route('artists.create') }}">New Artist</b-dropdown-item>
          <b-dropdown-item href="{{ route('artists.index') }}">Artists</b-dropdown-item>
        </b-nav-item-dropdown>
        <b-nav-item href="{{route('register')}}#">Register New User</b-nav-item>
      </b-navbar-nav>

      <!-- Right aligned nav items -->
      <b-navbar-nav class="ml-auto">
        <b-nav-form>
          <b-form-input size="sm" class="mr-sm-2" placeholder="Search"></b-form-input>
          <b-button size="sm" class="my-2 my-sm-0" type="submit">Search</b-button>
        </b-nav-form>

        <b-nav-item-dropdown text="Lang" right>
          <b-dropdown-item href="#">EN</b-dropdown-item>
          <b-dropdown-item href="#">GL</b-dropdown-item>
        </b-nav-item-dropdown>

        <b-nav-item-dropdown right>
          <!-- Using 'button-content' slot -->
          <template #button-content>
            <em>User</em>
          </template>
          <b-dropdown-item href="#">Profile</b-dropdown-item>
          <b-dropdown-item href="{{route('logout')}}">Logout</b-dropdown-item>
        </b-nav-item-dropdown>
      </b-navbar-nav>
    </b-collapse>
  </b-navbar>


        @if (Session::has('flash_message'))
          <div class="container">
            <div class="alert alert-success">{{ Session::get('flash_message') }}</div>
          </div>
        @endif

        @yield('content')
    </div>

    <!-- Scripts -->
    
    <!-- Latest compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}"></script>

<script src="https://www.google.com/recaptcha/api.js?render={{ env('GOOGLE_CAPTCHA_PUBLIC_KEY') }}"></script>
<script>
grecaptcha.ready(function() {
	grecaptcha.execute('{{ env('GOOGLE_CAPTCHA_PUBLIC_KEY') }}')
	    	.then(function(token) {
			let recaptcha_token = document.getElementById("recaptcha_token");

			if (token && recaptcha_token) {
   document.getElementById("recaptcha_token").value = token;
			}
 }); });
</script>

</body>
</html>
