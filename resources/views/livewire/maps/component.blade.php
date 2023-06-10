<div>

    <div id="map">
        <a href="https://www.maptiler.com" style="position:absolute;left:10px;bottom:10px;z-index:999;"><img src="https://api.maptiler.com/resources/logo.svg" alt="MapTiler logo"></a>
    </div>

        <style>
            #map {position: absolute; top: 0; right: 0; bottom: 0; left: 0;}
        </style>

    <div>

          <p><a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a></p>


<script>

    var map = L.map('map').setView([-18.6696553,35.5273354], 1);
              L.tileLayer('https://api.maptiler.com/maps/streets/{z}/{x}/{y}.png?key=xFSx3MlGWjBha2x684jv#7.7/46.82312/8.83241',{
              tileSize: 512,
              zoomOffset: -1,
              minZoom:5,
              attribution: "\u003ca href=\"https://www.maptiler.com/copyright/\" target=\"_blank\"\u003e\u0026copy; MapTiler\u003c/a\u003e \u003ca href=\"https://www.openstreetmap.org/copyright\" target=\"_blank\"\u003e\u0026copy; OpenStreetMap contributors\u003c/a\u003e",
              crossOrigin: true
            }).addTo(map);

            var xIcon = new L.Icon({
                iconUrl: 'img/marker-icon-2x-orange.png',
                shadowUrl: 'img/marker-shadow.png',
                iconSize: [25, 41],
                iconAnchor: [12, 41],
                popupAnchor: [1, -34],
                shadowSize: [41, 41]
            });

            var greenIcon = new L.Icon({
                iconUrl: 'img/marker-icon-2x-green.png',
                shadowUrl: 'img/marker-shadow.png',
                iconSize: [25, 41],
                iconAnchor: [12, 41],
                popupAnchor: [1, -34],
                shadowSize: [41, 41]
            });

            var redIcon = new L.Icon({
                iconUrl: 'img/marker-icon-2x-red.png',
                shadowUrl: 'img/marker-shadow.png',
                iconSize: [25, 41],
                iconAnchor: [12, 41],
                popupAnchor: [1, -34],
                shadowSize: [41, 41]
            });

            var blackIcon = new L.Icon({
                iconUrl: 'marker-icon-2x-black.png',
                shadowUrl: 'marker-icon-black.png',
                iconSize: [25, 41],
                iconAnchor: [12, 41],
                popupAnchor: [1, -34],
                shadowSize: [41, 41]
            });



     const markers = @js($maps);
     const p = @js($points);
     console.log(p);

     p.forEach((e) => {
        var url_imagem = "storage/uploads/point/"+e.image;
        L.marker([e.lng,e.lat],{icon:redIcon}).addTo(map).bindPopup('<img src="'+url_imagem+'" width="100" height="100" />').openPopup();});

        markers.forEach((e) => {
        if(e.status_id == 4){
        L.marker([e.lng,e.lat],{icon:greenIcon}).addTo(map).bindPopup('<div class="text-center">Status:Alocado <br />Contentor Numero:<br /></div>'+e.tags ).openPopup(); }
                    if(e.status_id == 2){
                        L.marker([e.lng,e.lat],{icon:xIcon}).addTo(map).bindPopup('<div class="text-center">Status:Cheio <br />Contentor Numero:<br /></div>'+e.tags ).openPopup();
                    }});

          </script>
    </div>

</div>
