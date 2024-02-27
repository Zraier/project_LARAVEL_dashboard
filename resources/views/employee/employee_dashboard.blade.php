<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>Employee Panel</title>

		<!-- Site favicon -->
		<link
			rel="apple-touch-icon"
			sizes="180x180"
			href="{{ asset('backend_agence/vendors/images/apple-touch-icon.png')}}"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="32x32"
			href="{{ asset('backend_agence/vendors/images/favicon-32x32.png')}}"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="16x16"
			href="{{ asset('backend_agence/vendors/images/favicon-16x16.png')}}"
		/>
	
		<!-- Mobile Specific Metas -->
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"
		/>

		<!-- Google Font -->
		
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="{{ asset('backend_agence/vendors/styles/core.css')}}" />
		<link
			rel="stylesheet"
			type="text/css"
			href="{{ asset('backend_agence/vendors/styles/icon-font.min.css')}}"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="{{ asset('backend_agence/src/plugins/bootstrap-select-country/css/bootstrap-select-country.min.css')}}"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="{{ asset('backend_agence/src/plugins/jquery-steps/jquery.steps.css')}}"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="{{ asset('backend_agence/src/plugins/dropzone/src/dropzone.css')}}"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="{{ asset('backend_agence/src/plugins/fullcalendar/fullcalendar.css')}}"
		/>
		<link rel="stylesheet" type="text/css" href="{{ asset('backend_agence/vendors/styles/style.css')}}" />

		<!-- Global site tag (gtag.js) - Google Analytics -->
	
	
	
	</head>
	<body>
		{{-- <div class="pre-loader">
			<div class="pre-loader-box">
				<div class="loader-logo">
					<img src="{{ asset('backend_agence/vendors/images/deskapp-logo.svg')}}" alt="" />
				</div>
				<div class="loader-progress" id="progress_div">
					<div class="bar" id="bar1"></div>
				</div>
				<div class="percent" id="percent1">0%</div>
				<div class="loading-text">Loading...</div>
			</div>
		</div> --}}
		
		

		<!-- Header -->
		@include('employee.body.header')

		<!-- Sidebar perso -->
		@include('employee.body.Config_Sidebar')

		<!-- Sidebar -->
		@include('employee.body.sidebar')

		<div class="main-container">
			
			@yield('employee')
			
			
			{{-- @include('employee.body.footer') --}}
		</div>

		
					
		
		
		<!-- js -->
		<script src="{{ asset('backend_agence/vendors/scripts/core.js') }}"></script>
		<script src="{{ asset('backend_agence/vendors/scripts/script.min.js') }}"></script>
		<script src="{{ asset('backend_agence/vendors/scripts/process.js') }}"></script>
		<script src="{{ asset('backend_agence/vendors/scripts/layout-settings.js') }}"></script>
		
		<script src="{{ asset('backend_agence/src/plugins/fullcalendar/fullcalendar.min.js') }}"></script>
		<script src="{{ asset('backend_agence/vendors/scripts/calendar-setting.js') }}"></script>
		<script src="{{ asset('backend_agence/src/plugins/jquery-steps/jquery.steps.js')}}"></script>
		<script src="{{ asset('backend_agence/vendors/scripts/steps-setting.js')}}"></script>
		<script src="{{ asset('backend_agence/src/plugins/bootstrap-select-country/js/bootstrap-select-country.min.js')}}"></script>	
		<script src="{{ asset('backend_agence/src/plugins/dropzone/src/dropzone.js')}}"></script>
		<script>		
			// Function to calculate date difference and update the input field
			function calculateDateDifference() {
				// Get the selected dates
				var startDate = new Date(document.getElementById('startDate').value);
				var endDate = new Date(document.getElementById('endDate').value);
		
				// Calculate the difference in milliseconds
				var differenceInMilliseconds = endDate - startDate;
		
				// Convert milliseconds to days
				var differenceInDays = Math.floor(differenceInMilliseconds / (1000 * 60 * 60 * 24));
		
				// Update the input field with the result
				document.getElementById('dateDifference').value = differenceInDays;
			}
		
			// Listen to input event on date input fields
			document.getElementById('startDate').addEventListener('input', calculateDateDifference);
			document.getElementById('endDate').addEventListener('input', calculateDateDifference);
		</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
 @if(Session::has('message'))
 var type = "{{ Session::get('alert-type','info') }}"
 switch(type){
    case 'info':
    toastr.info(" {{ Session::get('message') }} ");
    break;

    case 'success':
    toastr.success(" {{ Session::get('message') }} ");
    break;

    case 'warning':
    toastr.warning(" {{ Session::get('message') }} ");
    break;

    case 'error':
    toastr.error(" {{ Session::get('message') }} ");
    break; 
 }
 @endif 
</script>
	
	</body>
</html>
