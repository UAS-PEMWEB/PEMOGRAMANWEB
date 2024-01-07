<!-- jQuery -->
<script src="{{ URL::asset('/assets/js/jquery-3.6.1.min.js') }}"></script>

<!-- Bootstrap Core JS -->
<script src="{{ URL::asset('/assets/js/bootstrap.bundle.min.js') }}"></script>

<!-- Fearther JS -->
<script src="{{ URL::asset('/assets/js/feather.min.js') }}"></script>

<!-- Owl Carousel JS -->
<script src="{{ URL::asset('/assets/js/owl.carousel.min.js') }}"></script>

<!-- select JS -->
<script src="{{ URL::asset('/assets/plugins/select2/js/select2.min.js') }}"></script>

<!-- Mobile CSS-->
<script src="{{ URL::asset('/assets/plugins/intltelinput/js/intlTelInput.js') }}"></script>

<!-- Validation-->
<script src="{{ URL::asset('/assets/js/validation.js') }}"></script>

<!-- Datetimepicker JS -->
<script src="{{ URL::asset('/assets/js/moment.min.js') }}"></script>
<script src="{{ URL::asset('/assets/js/bootstrap-datetimepicker.min.js') }}"></script>

<!-- Sticky Sidebar JS -->
<script src="{{ URL::asset('/assets/plugins/theia-sticky-sidebar/ResizeSensor.js') }}"></script>
<script src="{{ URL::asset('/assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js') }}"></script>

<!-- Rangeslider JS -->
<script src="{{ URL::asset('/assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js') }}"></script>
<script src="{{ URL::asset('/assets/plugins/ion-rangeslider/js/custom-rangeslider.js') }}"></script>

<!-- Mobile Input -->
<script src="{{ URL::asset('/assets/plugins/intltelinput/js/intlTelInput.js') }}"></script>

<!-- Slimscroll JS -->
<script src="{{ URL::asset('/assets/plugins/ckeditor/ckeditor.js') }}"></script>

<!-- Bootstrap Tagsinput JS -->
<script src="{{ URL::asset('/assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js') }}"></script>

<!-- Slimscroll JS -->
<script src="{{ URL::asset('/assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

<!-- Datatables JS -->
<script src="{{ URL::asset('/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('/assets/plugins/datatables/datatables.min.js') }}"></script>

<!-- Fullcalendar JS -->
<script src="{{ URL::asset('/assets/plugins/fullcalendar/main.min.js') }}"></script>

<!-- Sweetalert 2 -->
<script src="{{ URL::asset('/assets/plugins/sweetalert/sweetalert2.all.min.js') }}"></script>
<script src="{{ URL::asset('/assets/plugins/sweetalert/sweetalerts.min.js') }}"></script>

<!-- Fancybox JS -->
<script src="{{ URL::asset('/assets/plugins/fancybox/jquery.fancybox.min.js') }}"></script>

<!-- Slick JS -->
<script src="{{ URL::asset('/assets/js/slick.js') }}"></script>

<!-- Aos -->
<script src="{{ URL::asset('/assets/plugins/aos/aos.js') }}"></script>
<!-- Top JS -->
<script src="{{ URL::asset('/assets/js/backToTop.js') }}"></script>

<!-- counterup JS -->
<script src="{{ URL::asset('/assets/js/jquery.waypoints.js') }}"></script>
<script src="{{ URL::asset('/assets/js/jquery.counterup.min.js') }}"></script>

<script src="{{ URL::asset('/assets/js/script.js') }}"></script>

<!-- widget instagram by elfsight -->
<script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>

<!-- widget youtube by elfsight -->
<script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>

<script async src="https://cse.google.com/cse.js?cx=97dd589fe17d848aa"></script>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
    integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

<script>
    // Example array of locations with latitude and longitude
    const apiUrl = 'api/map';
    let locations = [];
    let map; // Define map variable outside of the functions

    // Fetch data from the API
    fetch(apiUrl)
        .then(response => {
            // Check if the request was successful (status code 200-299)
            if (!response.ok) {
                throw new Error(`HTTP error! Status: ${response.status}`);
            }

            // Parse the JSON response
            return response.json();
        })
        .then(data => {
            // Log the response data
            locations = data.data;

            // Set the initial center to the coordinates of the first location
            var initialCenter = [locations[0].latitude, locations[0].longitude];

            // Initialize the map with the new initial center
            map = L.map('map').setView(initialCenter, 13);

            // Add the OpenStreetMap tile layer
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© OpenStreetMap contributors'
            }).addTo(map);

            // Add markers from the array
            locations.forEach(location => {
                // Create a marker for each location
                var marker = L.marker([location.latitude, location.longitude]).addTo(map);

                // Bind a popup with the location name (optional)
                marker.bindPopup(
                    `<div><strong>Nama : ${location.name}</strong></div><div>Address : ${location.address}</div>
                         <div>Location : ${location.location}</div><div>Latitude: ${location.latitude}</div><div>Longitude: ${location.longitude}</div><a href="data-babuka/kampungkb/${location.id}" class="btn mt-2 flex justify-content-end btn-outline-primary">Data SeaMap</a>`
                ).openPopup();
            });

            // Add click event listener to the map
            // map.on('click', onMapClick);
        })
        .catch(error => {
            // Log any errors that occurred during the fetch
            console.error('Fetch Error:', error);
        });

    const filterLocation = (location) => {
        const apiUrl = `api/map/${location}`;
        let locations = [];

        fetch(apiUrl)
            .then(response => {
                if (!response.ok) {
                    throw new Error(`HTTP error! Status: ${response.status}`);
                }
                return response.json();
            })
            .then(data => {
                locations = data.data;

                // Clear previous markers on the map
                map.eachLayer(layer => {
                    if (layer instanceof L.Marker) {
                        map.removeLayer(layer);
                    }
                });

                var initialCenter = [locations[0].latitude, locations[0].longitude];
                var bounds = L.latLngBounds(); // Create a LatLngBounds object

                locations.forEach(location => {
                    var marker = L.marker([location.latitude, location.longitude]).addTo(map);

                    marker.bindPopup(
                        `<div><strong>Nama : ${location.name}</strong></div><div>Address : ${location.address}</div>
                         <div>Location : ${location.location}</div><div>Latitude: ${location.latitude}</div><div>Longitude: ${location.longitude}</div><a href="data-babuka/kampungkb/${location.id}" class="btn mt-2 flex justify-content-end btn-outline-primary">Data Babuka</a>`
                    ).openPopup();

                    bounds.extend([location.latitude, location
                        .longitude
                    ]); // Extend bounds with marker's coordinates
                });

                // Set the map view to the last location and zoom out
                map.setView([locations[locations.length - 1].latitude, locations[locations.length - 1]
                    .longitude
                ], 12);

            })
            .catch(error => {
                console.error('Fetch Error:', error);
            });
    }

    const allLocation = () => {
        const apiUrl = `api/map`;
        let locations = [];

        fetch(apiUrl)
            .then(response => {
                if (!response.ok) {
                    throw new Error(`HTTP error! Status: ${response.status}`);
                }
                return response.json();
            })
            .then(data => {
                locations = data.data;

                // Clear previous markers on the map
                map.eachLayer(layer => {
                    if (layer instanceof L.Marker) {
                        map.removeLayer(layer);
                    }
                });

                var initialCenter = [locations[0].latitude, locations[0].longitude];
                var bounds = L.latLngBounds(); // Create a LatLngBounds object

                locations.forEach(location => {
                    var marker = L.marker([location.latitude, location.longitude]).addTo(map);

                    marker.bindPopup(
                        `<div><strong>Nama : ${location.name}</strong></div><div>Address : ${location.address}</div>
                         <div>Location : ${location.location}</div><div>Latitude: ${location.latitude}</div><div>Longitude: ${location.longitude}</div><a href="data-babuka/kampungkb/${location.id}" class="btn mt-2 flex justify-content-end btn-outline-primary">Data SeaMap</a>`
                    ).openPopup();

                    bounds.extend([location.latitude, location
                        .longitude
                    ]); // Extend bounds with marker's coordinates
                });

                // Set the map view to the last location and zoom out
                // Set the map view slightly above the last location and zoom out
                map.setView([locations[locations.length - 1].latitude - 0.01, locations[locations.length - 1]
                    .longitude
                ], 11);


            })
            .catch(error => {
                console.error('Fetch Error:', error);
            });
    }

    // pop up
    $(document).ready(function() {
        const openPopupButton = $("#openPopup");
        const closePopupButton = $("#closePopup");
        const popup = $("#popup");

        openPopupButton.click(function() {
            popup.css("display", "block");
        });

        closePopupButton.click(function() {
            popup.css("display", "none");
        });

        // Set a time delay for the popup to open (in milliseconds)
        const popupDelay = 5000; // 5 seconds

        setTimeout(function() {
            popup.css("display", "block");
        }, popupDelay);
    });

    // berita (search google)
    (function() {
        var cx = '97dd589fe17d848aa';
        var gcse = document.createElement('script');
        gcse.type = 'text/javascript';
        gcse.async = true;
        gcse.src = (document.location.protocol ==
                'https:' ? 'https:' : 'http:') +
            '//cse.google.com/cse.js?cx=' + cx;
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(gcse, s);
    })();
    window.onload = function() {
        var keyword = "stunting dan kemiskinan ekstrem kota bandung";
        var title = "Search Geeksforgeeks";
        var textBox = document.querySelector("#gsc-i-id1");
        var buttonClick = document.querySelector(".gsc-search-button-v2");
        var button = document.querySelector(".gsc-search-button-v2 svg title");

        textBox.placeholder = title;
        textBox.title = title;
        textBox.value = keyword;
        button.innerHTHL = title;

        buttonClick.click();
    }
</script>

<style>
    .gsc-search-box {
        display: none !important;
    }
</style>

<!-- contoh css buat section berita -->
<style>
    .gsc-control-cse {
        border: 0 !important;
        padding: 6px 8px 6px 10px !important;
        margin: 0px;
        border-radius: 2px;
        overflow: hidden;
    }

    .gsc-expansionArea {
        width: 100%;
        padding: 10px;
    }

    #map {
        height: 400px;
    }

    .gsc-expansionArea .gsc-webResult {
        width: 30%;
        /* Adjust width as needed */
        height: 300px;
        padding: 5px;
        background-color: #f0f0f0;
        margin: 10px;
        display: inline-block;
        /* Display boxes in a line */
        box-sizing: border-box;
        /* Include padding and border in the element's total width and height */
        vertical-align: top;
        /* Align the top of each box */
        border-radius: 10px;
    }

    @media only screen and (max-width: 768px) {
        .gsc-expansionArea .gsc-webResult {
            width: 100%;
            /* Adjust width as needed */
            padding: 5px;
            background-color: #f0f0f0;
            margin: 10px;
            display: inline-block;
            /* Display boxes in a line */
            box-sizing: border-box;
            /* Include padding and border in the element's total width and height */
            vertical-align: top;
            /* Align the top of each box */
            border-radius: 10px;
        }
    }

    /* Style for the title link */
    .gsc-expansionArea .gsc-webResult .gsc-thumbnail-inside .gs-title {
        text-decoration: none;
        color: #333;
        /* Title link color */
        font-weight: bold;
        font-size: 18px;
        /* Adjust the font size as needed */
    }

    #gs_tti50 {
        padding: 6px 0 !important;
    }

    #gsc-i-id1 {
        color: #000 !important;
        text-indent: 0 !important;
        font-size: 14px !important;
        line-height: 1 !important;
        background: none !important;
    }

    #gsc-i-id1::-webkit-input-placeholder {
        color: #000 !important;
    }

    #gsc-i-id1::-as-input-placeholder {
        color: #fff;
    }

    #gsc-i-id1::-moz-placeholder {
        color: #fff;
        opacity: 1;
    }

    #gsc-i-id1::-moz-placeholder {
        color: #fff;
        opacity: 1;
    }

    .gsib_b {
        display: none !important;
    }

    .gsc-search-button -v2 {
        padding: 7.5px !important;
        margin-left: !important;
        outline: none !important;
        border: !important;
        cursor: pointer;
    }

    .gsc-search-button-v2,
    gsc-search-button-v2: hover {
        cursor: pointer;
    }

    .gsc-search-button-v2,
    gsc-search-button-v2: hover {
        background-color: transparent !important;
        background-image: none !important;
    }

    .gsc-search-button -v2:focus {
        outline: none !important;
        box-shadow: none !important;
        background-color: transparent !important;
        background-image: none !important;
    }

    .gsc-search-button -v2:focus {
        outline: none !important;
        box-shadow: none !important;
    }

    .gcsc-find-more-on-google {
        display: none !important;
    }
</style>

<!-- start chart bar -->

<!-- Chart JS -->
<script src="{{ URL::asset('/admin_assets/plugins/apexchart/apexcharts.min.js') }}"></script>
<script src="{{ URL::asset('/admin_assets/plugins/apexchart/chart-data.js') }}"></script>

<!-- end chart bar -->

<!-- bg landingpage -->
<style>
    /* Apply background to a footer element */
    footer {
        /* From https://css.glass */
        background: url('/assets/img/dppkb/nadias.jpg') center center/cover no-repeat;
        /* Change the color to your desired background color */
        color: white;
        /* Set text color to contrast with the background */
        padding: 20px;
        /* Adjust padding as needed */
        text-align: center;
        /* Center-align text within the footer */
    }

    .footer-wrapper{
       background: rgba(255, 255, 255, 0.637);
       padding: 10px !important;
       border-radius: 20px;
    }

    .footer-wrapper:nth-child(1){
        padding-top: 40px !important;
        padding-left: 20px !important;
        padding-right: 20px !important;
    }
</style>
<!-- bg landingpage -->
