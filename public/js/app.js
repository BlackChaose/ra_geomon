require('../../resources/js/bootstrap');
const here = {
    id: 'YLrX3obLoYzsGNHCchfR',
    code: 'vECw_cankY-qjFOn73pnIA'
 };
 var crd={};
 navigator.geolocation.getCurrentPosition(function(position) {
   crd = {
      zoom: 14,
      center: {lng: position.coords.latitude, lat: position.coords.longitude}
    };
 });
 const map = L.map('map', {
    center: crd,
    zoom: 13,
    layers: [
       Tangram.leafletLayer({
          scene: 'yaml/scene.yaml',
          events: {
             click: onMapClick
          }
       })
    ],
    zoomControl: false
 });
 
 async function onMapClick() {
    //We will write code in here later...
 }