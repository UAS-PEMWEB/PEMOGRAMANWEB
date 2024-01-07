<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">

<!-- Fontawesome CSS -->
<link rel="stylesheet" href="{{url('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
<link rel="stylesheet" href="{{url('assets/plugins/fontawesome/css/all.min.css')}}">

<!-- Fearther CSS -->
<link rel="stylesheet" href="{{url('assets/css/feather.css')}}">

<!-- select CSS -->
<link rel="stylesheet" href="{{url('assets/plugins/select2/css/select2.min.css')}}">
    
<!-- Owl carousel CSS -->
<link rel="stylesheet" href="{{url('assets/css/owl.carousel.min.css')}}">

<!-- Mobile CSS-->
<link rel="stylesheet" href="{{url('assets/plugins/intltelinput/css/intlTelInput.css')}}">
<link rel="stylesheet" href="{{url('assets/plugins/intltelinput/css/demo.css')}}">

<link rel="stylesheet" href="{{url('assets/css/bootstrap-datetimepicker.min.css')}}">

<link rel="stylesheet" href="{{url('assets/plugins/ion-rangeslider/css/ion.rangeSlider.min.css')}}">

@if(Route::is(['service-information','provider-edit-service']))
<!-- Ckeditor CSS -->
<link rel="stylesheet" href="{{url('assets/plugins/ckeditor/ckeditor.css')}}">
@endif

<!-- Bootstrap Tagsinput CSS -->
<link rel="stylesheet" href="{{url('assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css')}}">



<!-- Mobile CSS-->
<link rel="stylesheet" href="{{url('assets/plugins/intltelinput/css/intlTelInput.css')}}">
<link rel="stylesheet" href="{{url('assets/plugins/intltelinput/css/demo.css')}}">

<!-- Datatables CSS -->
<link rel="stylesheet" href="{{url('assets/plugins/datatables/datatables.min.css')}}">

<link rel="stylesheet" href="{{url('assets/plugins/fullcalendar/main.min.css')}}">
<link rel="stylesheet" href="{{url('assets/plugins/fullcalendar/bootstrap-icons.css')}}">


<link rel="stylesheet" href="{{url('assets/plugins/fancybox/jquery.fancybox.min.css')}}">


<!-- Aos CSS -->
<link rel="stylesheet" href="{{url('assets/plugins/aos/aos.css')}}">
<!-- Main CSS -->
<link rel="stylesheet" href="{{url('assets/css/style.css')}}">

<!-- pop up -->
<style>
    body {
        font-family: Arial, sans-serif;
    }

    .popup {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);
        z-index: 1;
        overflow: hidden;
    }

    .popup-content {
        position: absolute;
        top: 60%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #fff;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        max-width: 300px;
        text-align: center; /* Center the close button */
        position: relative; /* Relative position for absolute close button */
    }

    .close {
        position: absolute;
        top: -10px; /* Adjust the distance from the top edge */
        right: -10px; /* Adjust the distance from the right edge */
        width: 25px; /* Set a width to make it circular */
        height: 25px; /* Set a height to make it circular */
        background-color: #ccc;
        border-radius: 50%; /* Make it circular */
        cursor: pointer;
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>