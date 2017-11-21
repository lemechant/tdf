 <div class="site-wrap js-site-wrap">
  <div class="widget js-widget">
    <div class="widget__content">

        <div id="map" class="map js-map map--index" data-infobox-theme="white" style="height:800px"></div>
     
    <script>
   <?php echo "var iconBase = '".base_url('public/img/marker/')."';";?>
       
      // This example displays a marker at the center of Australia.
      // When the user clicks the marker, an info window opens.

      function initMap() {
        var uluru = {lat: -25.363, lng: 131.044};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 16,
          center: new google.maps.LatLng(-33.91722, 151.23064),
          mapTypeId: 'roadmap'
        });

/*var link = "assets/media-demo/properties/277x180/" + data.image + ".jpg";
     "<span class='map__address'>" + data.address +
      "</span> <span class='map__info'>" +
      "<img  class='map__photo' src='" + link + "'/><span class='map__details'> " +
      "<dl><dt>Type:</dt> <dd>" + data.type + "</dd></dl>" +
      "<dl><dt>Area:</dt> <dd>" + data.area + " m2</dd></dl>" +
      "<dl><dt>Bedrooms:</dt> <dd>" + data.bedrooms + "</dd></dl>" +
      "</span></span> <span class='map__price'><strong>$" + data.price +
      "</strong></span> <a  class='map__more' href='property_details.html'>Details</a>";*/
        var contentString = '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h1 id="firstHeading" class="firstHeading">Uluru</h1>'+
            '<div id="bodyContent">'+
            '<p><b>Uluru</b>, also referred to as <b>Ayers Rock</b>, is a large ' +
            'sandstone rock formation in the southern part of the '+
            'Northern Territory, central Australia. It lies 335&#160;km (208&#160;mi) '+
            'south west of the nearest large town, Alice Springs; 450&#160;km '+
            '(280&#160;mi) by road. Kata Tjuta and Uluru are the two major '+
            'features of the Uluru - Kata Tjuta National Park. Uluru is '+
            'sacred to the Pitjantjatjara and Yankunytjatjara, the '+
            'Aboriginal people of the area. It has many springs, waterholes, '+
            'rock caves and ancient paintings. Uluru is listed as a World '+
            'Heritage Site.</p>'+
            '<p>Attribution: Uluru, <a href="https://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">'+
            'https://en.wikipedia.org/w/index.php?title=Uluru</a> '+
            '(last visited June 22, 2009).</p>'+
            '</div>'+
            '</div>';

        var infowindow = new google.maps.InfoWindow({
          content: contentString
        });

      

        var icons = {
          parking: {
            icon: iconBase + 'default.png'
          },
          library: {
            icon: iconBase + 'dark_violet-yellow.png'
          },
          info: {
            icon: iconBase + 'blue-orange_red.png'
          }
        };

        var features = [
          
             <?php echo "{position: new google.maps.LatLng(-33.91721, 151.22630), type: 'info'}, "; ?>
          {
            position: new google.maps.LatLng(-33.91539, 151.22820),
            type: 'info'
          }, {
            position: new google.maps.LatLng(-33.916988, 151.233640),
            type: 'info'
          }, {
            position: new google.maps.LatLng(-33.91851096391805, 151.2344058214569),
            type: 'parking'
          }, {
            position: new google.maps.LatLng(-33.91818154739766, 151.2346203981781),
            type: 'parking'
          }, {
            position: new google.maps.LatLng(-33.91727341958453, 151.23348314155578),
            type: 'library'
          }
        ];

/*
         <?php echo "var features = [ { position: new google.maps.LatLng(-33.91721, 151.22630), type: 'info' }, { position: new google.maps.LatLng(-33.91539, 151.22820), type: 'info' }, { position: new google.maps.LatLng(-33.916988, 151.233640), type: 'info' }, { position: new google.maps.LatLng(-33.91851096391805, 151.2344058214569), type: 'parking' }, { position: new google.maps.LatLng(-33.91818154739766, 151.2346203981781), type: 'parking' }, { position: new google.maps.LatLng(-33.91727341958453, 151.23348314155578), type: 'library' } ];";?>
*/

        // Create markers.
        features.forEach(function(feature) {
          var marker = new google.maps.Marker({
            position: feature.position,
            icon: icons[feature.type].icon,
            map: map
          });
           marker.addListener('click', function() {
          infowindow.open(map, marker);
        });
        });
      }
    </script>
      </div>
    </div>
  </div>
