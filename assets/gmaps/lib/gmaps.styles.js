GMaps.prototype.addStyle=function(p){var e=new google.maps.StyledMapType(p.styles,p.styledMapName);this.map.mapTypes.set(p.mapTypeId,e)},GMaps.prototype.setStyle=function(p){this.map.setMapTypeId(p)};