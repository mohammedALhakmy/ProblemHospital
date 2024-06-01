
		<!-- BACK TO TOP -->
		<a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

		<!-- JQUERY MIN JS -->
		<script src="{{asset('build/assets/plugins/jquery/jquery.min.js')}}"></script>

		<!-- BOOTSTRAP BUNDLE JS -->
		<script src="{{asset('build/assets/plugins/bootstrap/js/popper.min.js')}}"></script>
		<script src="{{asset('build/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

		<!-- PERFECT-SCROLLBAR JS  -->
		<script src="{{asset('build/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
        <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
        @vite('resources/js/app.js')
        <script src="{{asset('js/app.js')}}" defer></script>

		@yield('scripts')
