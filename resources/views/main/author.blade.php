@extends('layouts.master')

@section('body')


	<!-- user info section -->
<div class="container " style="font-family: 'El Messiri', sans-serif; font-size: 16px; margin-top: 75px;">
	<div class="row">

		<div class="col-md-3">
				<img src="/img/astro.jpg" alt="Developer's Photo" id="aut_profile">
		</div>


		<div class="col-md-4">
					<!-- INFO DISPLAY -->
					<table class="table table-condensed">
						<thead>
							<tr>
								<td colspan="5" id="th"> About Developer</td>
							</tr>
						</thead>

						<tbody>
							<tr>
								<th>First Name:</th>
								<td>Clement</td>
							</tr>

							<tr>
								<th>Middle Name:</th>
								<td>Frimpong</td>
							</tr>
							
							<tr>
								<th>Last Name:</th>
								<td>Osei</td>
							</tr>

							<tr>
								<th>Email:</th>
								<td>frimpsastro@gmail.com</td>
							</tr>

							<tr>
								<th>Nicky:</th>
								<td>AstroBoy</td>
							</tr>
						</tbody>
					</table>

				</div>

				<div class="col-md-5">
					<!-- ADDITIONAL INFO DISPLAY -->
					<table class="table table-condensed">
						<thead>
							<tr>
								<td colspan="5" id="th" > Additional Info</td>
							</tr>
						</thead>

						<tbody>

							<tr>
								<th>School:</th>
								<td>KNUST, 300</td>
							</tr>

							<tr>
								<th>Phone:</th>
								<td>0578435630, 0501347655</td>
							</tr>

							<tr>
								<th>Residence:</th>
								<td>Kumasi</td>
							</tr>

							<tr>
								<th>Region:</th>
								<td>Ashanti Region</td>
							</tr>
							<tr>
								<th>Bio:</th>
								<td>Am a man of God.<br> How simple is that?</td>
							</tr>
						</tbody>
					</table>

				</div>
	</div>

</div>
	<!-- author info section ends -->

	<!--contact me modal-->
	@include('modals.contact')

	<div class="container contact">
		<button class="btn btn-primary" data-toggle="modal" data-target="#contact_me" id="send">Contact me</button>
	</div>
@endsection

@section('scripts')
<script >
    // checking for errors to open modal
   
    var count = {{ $errors->has('name') || $errors->has('email')|| $errors->has('message') }}
   
        if(count)
        {
            $('#send').trigger('click');
        }

  </script>
@endsection

