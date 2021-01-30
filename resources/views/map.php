<!DOCTYPE html>
<html>
  <head>
    <title>Heatmaps</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGUqu0xbN4fcwCd09XqLjIwEOhRMjCYgE&callback=initMap&libraries=visualization&v=weekly"
      defer
    ></script>
    <link rel="stylesheet" type="text/css" href= <?php echo asset('css/map.css')?> />
    <script src=<?php echo asset('js/map.js')?>></script>
  </head>
  <body>
    <div id="floating-panel">
      <button onclick="toggleHeatmap()">Toggle Heatmap</button>
      <button onclick="changeGradient()">Change gradient</button>
      <button onclick="changeRadius()">Change radius</button>
      <button onclick="changeOpacity()">Change opacity</button>
    </div>
    <div id="map"></div>
  </body>
</html>
