!function($){function n(n){var o=n.find(".marker"),t={zoom:16,center:new google.maps.LatLng(0,0),mapTypeId:google.maps.MapTypeId.ROADMAP},r=new google.maps.Map(n[0],t);return r.markers=[],o.each(function(){e($(this),r)}),a(r),r}function e(n,e){var a=new google.maps.LatLng(n.attr("data-lat"),n.attr("data-lng")),o=new google.maps.Marker({position:a,map:e});if(e.markers.push(o),n.html()){var t=new google.maps.InfoWindow({content:n.html()});google.maps.event.addListener(o,"click",function(){t.open(e,o)})}}function a(n){var e=new google.maps.LatLngBounds;$.each(n.markers,function(n,a){var o=new google.maps.LatLng(a.position.lat(),a.position.lng());e.extend(o)}),1==n.markers.length?(n.setCenter(e.getCenter()),n.setZoom(16)):n.fitBounds(e)}var o=null;$(document).ready(function(){$(".acf-map").each(function(){o=n($(this))})})}(jQuery);
//# sourceMappingURL=./maps-min.js.map