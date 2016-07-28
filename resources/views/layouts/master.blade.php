
	@include('layouts.partials.header')
	<body>
		@include('layouts.partials.nevbar')
		@yield('content');
		@include('layouts.partials.footer')	
	</body>
</html>