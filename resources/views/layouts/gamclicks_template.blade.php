<!DOCTYPE html>
<html>
  @include('includes._head')
  <body>

  <!-- Navbar (sit on top) -->
  @include('includes._navbar_header')

  <!-- Header with full-height image -->
  @include('includes._header')

  <!-- content -->
  @yield('content')

  <!-- footer -->
  @include('includes._footer')
   
  <!-- Add Google Maps -->
  <script>
  function myMap()
  {
    myCenter=new google.maps.LatLng(41.878114, -87.629798);
    var mapOptions= {
      center:myCenter,
      zoom:12, scrollwheel: false, draggable: false,
      mapTypeId:google.maps.MapTypeId.ROADMAP
    };
    var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

    var marker = new google.maps.Marker({
      position: myCenter,
    });
    marker.setMap(map);
  }

  // Modal Image Gallery
  function onClick(element) {
    document.getElementById("img01").src = element.src;
    document.getElementById("modal01").style.display = "block";
    var captionText = document.getElementById("caption");
    captionText.innerHTML = element.alt;
  }


  // Toggle between showing and hiding the sidebar when clicking the menu icon
  var mySidebar = document.getElementById("mySidebar");

  function w3_open() {
      if (mySidebar.style.display === 'block') {
          mySidebar.style.display = 'none';
      } else {
          mySidebar.style.display = 'block';
      }
  }

  // Close the sidebar with the close button
  function w3_close() {
      mySidebar.style.display = "none";
  }
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
  <!--
  To use this code on your website, get a free API key from Google.
  Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
  -->

  </body>
</html>
