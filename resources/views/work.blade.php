<!DOCTYPE html>
<html>
<head>

	<title>. PurpleDash .</title>


	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

	<!-- CSS -->
	<link rel="shortcut icon" href="{{URL::asset('/img/favicon.ico')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Raleway:200,300,500,600,700' rel='stylesheet' type='text/css'>
	<link href='{{URL::asset("/css/styles.css")}}' rel="stylesheet" type="text/css">

	<style type="text/css">
		/* Modal Styles */
		#portfolio-modal .section-header{
			font-family: 'NeutraText';
		}

		/* #portfolio-modal .modal-dialog{ */
			#mdialog{
				width: 80%;
				margin: 0;

				margin-left: 10%;
			}
			:-moz-any(#mdialog){
				margin: 0;
				width: 100%;
			}

			:-webkit-any(#mdialog){
				margin: 10px !important;
				width: 100%;
			}

			#portfolio-modal img{
				width: 100%;
			}

			.photos span {
				margin-bottom: 10px;
				position: relative;
				float: left;
				width: 100%;
				text-align: center;
			}

			.modalW .section-header{
				padding-bottom: 0px;
			}

			.modalW .work-title{
				font-family: 'NeutraText';
				font-size: 39px !important;
				font-weight: 400;
				padding: 0 !important;
			}

			.modalW .work-sub{
				font-family: 'NeutraText';
				font-size: 26px !important;
				font-weight: 300;
			}

			.modalW .section-slogan{
				font-family: 'NeutraText';
				font-size: 22px !important;
				font-weight: 300;
			}

			.modal-header{
				padding-bottom: 35px;
			}

			/* Modal Styles */


			@media screen and (max-width: 767px) {
				.modalW .work-title{
					font-family: 'NeutraText';
					font-size: 30px !important;
					font-weight: 400;
					padding: 0 !important;
					line-height: 1;
				}

				.modalW .work-sub{
					font-family: 'NeutraText';
					font-size: 20px !important;
					font-weight: 300;
				}

				.modalW .section-slogan{
					font-family: 'NeutraText';
					font-size: 16px !important;
					font-weight: 300;
				}
			}

			@media screen and (max-width: 550px){
				.modalW .section-title{
					font-size: 40px;
				}

				.modalW .section-slogan{
					font-size: 20px;
				}
				.modalW .work-title{
					font-family: 'NeutraText';
					font-size: 18px !important;
					font-weight: 400;
					padding: 0 !important;
					line-height: 1;
				}

				.modalW .work-sub{
					font-family: 'NeutraText';
					font-size: 16px !important;
					font-weight: 300;
				}

				.modalW .section-slogan{
					font-family: 'NeutraText';
					font-size: 15px !important;
					font-weight: 300;
				}
			}

		</style>
	</head>
	<body class="modalW">
		<div class="modal-content">
			<div class="modal-header">
				<div class="grid-100 mobile-100 tablet-100">
					<header class="section-header">
						<div class="grid-40 rb"><h2 style="opacity:1" class="section-title"><span class="work-title">{!! $work->title !!}</span></h2><span class="work-sub" style="opacity:1">{!! $work->subtitle !!}</span></div>
						<div class="grid-60 nrb"><p class="section-slogan work-description" style="text-align:left; padding-left:5%; opacity:1;">{!! $work->description !!}</p></div>            </header>
					</div>
				</div>
				<div class="grid-100 mobile-100 tablet-100">
					<div class="photos clear">
						<span class="modal-imgs">
							@foreach($images as $img)
							<img src="{{URL::asset('public/img').'/'.$img->image}}" class="magicfields" style="width:100%;">
							@endforeach
						</span>
					</div>
				</div>
			</div>

			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

			<script type="text/javascript">
				$(document).ready(function(){
					window.history.replaceState(null, "", "{{ $work->title }}");
				});
			</script>
		</body>
		</html>