
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title> @yield('title', 'Tree Sharing') </title>

    @include('frontend.layouts.partials.styles')

    @yield('styles')

</head>

<body>
	
	<div class="wrapper">

        @include('frontend.layouts.partials.header')

        {{-- start main content --}}

        @yield('content')

        {{-- ends main content --}}

        @include('frontend.layouts.partials.footer')

	</div>

    @include('frontend.layouts.partials.scripts')

    @yield('scripts')

</body>
</html>
