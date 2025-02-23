


@extends('layouts.dash')
  
@section('content')
<body class="g-sidenav-show  bg-gray-100">

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
  
  <div class="container-fluid py-2">
    <div class="row min-vh-80">
      <div class="col-12">
        <div class="card h-100">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h5 class="text-white text-capitalize ps-3">Vector Map</h5>
            </div>
          </div>
          <div class="card-body">
            <div id="vector-map" class="mt-5 min-height-500"></div>
          </div>
        </div>
      </div>
    </div>

  </div>
</main>

<!--   Core JS Files   -->
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap.min.js"></script>
<script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
<script src="../assets/js/plugins/world.js"></script>
<script>
  // Initialize the vector map
  var map = new jsVectorMap({
    selector: "#vector-map",
    map: "world_merc",
    zoomOnScroll: false,
    zoomButtons: false,
    selectedMarkers: [1, 3],
    markersSelectable: true,
    markers: [{
        name: "USA",
        coords: [40.71296415909766, -74.00437720027804]
      },
      {
        name: "Germany",
        coords: [51.17661451970939, 10.97947735117339]
      },
      {
        name: "Brazil",
        coords: [-7.596735421549542, -54.781694323779185]
      },
      {
        name: "Russia",
        coords: [62.318222797104276, 89.81564777631716]
      },
      {
        name: "China",
        coords: [22.320178999475512, 114.17161225541399],
        style: {
          fill: '#E91E63'
        }
      }
    ],
    markerStyle: {
      initial: {
        fill: "#e91e63"
      },
      hover: {
        fill: "E91E63"
      },
      selected: {
        fill: "E91E63"
      }
    },


  });
</script>
<script>
  var win = navigator.platform.indexOf('Win') > -1;
  if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
      damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
  }
</script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/material-dashboard.min.js?v=3.2.0"></script>
</body>
@endsection