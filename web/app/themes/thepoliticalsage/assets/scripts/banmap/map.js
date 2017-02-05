var d3 = require('./d3.min');
var senators = require('./senators');
var uStates = require('./uStates');

function tooltipHtml(n, d){
	var elem = "<h4>"+n+"</h4><div class='row'>"+
		"<div class='col-xs-6' id='tooltip-body-col'><div class='row'><h6>"+(d[0]["First Name"] + " " + d[0]["Last Name"])+"</h6></div><div class='row'><p>"+(d[0]["Stance"])+"</p></div><div class='row'><p>";

	var addQuotes = d[0]["Statement"].indexOf('"') == -1;
	//if (addQuotes) elem += '"';
	elem += d[0]["Statement"];
	//if (addQuotes) elem += '"';

	elem += "</p></div><div class='row'><a href = '"+ (d[0]["Statement Link"]) + "'><p>"+(d[0]["Statement Link"])+"</a></p></div><div class='row'><p>"+(d[0]["Local Office Number"])+"</p></div></div>"+
		"<div class='col-xs-6' id='tooltip-body-col'><div class='row'><h6>"+(d[1]["First Name"] + " " + d[1]["Last Name"])+"</h6></div><div class='row'><p>"+(d[1]["Stance"])+"</p></div><div class='row'><p>"

	addQuotes = d[1]["Statement"].indexOf('"') == -1;
	//if (addQuotes) elem += '"';
	elem += d[1]["Statement"];
	//if (addQuotes) elem += '"';

	elem += "</p></div><div class='row'><a href = '"+ (d[1]["Statement Link"]) + "'><p>"+(d[1]["Statement Link"])+"</a></p></div><div class='row'><p>"+(d[1]["Local Office Number"])+"</p></div></div>"+
		"</div></div>";

	return elem;
}

d3.select("div#map-container")
   .append("div")
   .classed("svg-container", true) //container class to make it responsive
   .append("svg")
   //responsive SVG needs these 2 attributes and no width and height attr
   .attr("preserveAspectRatio", "xMinYMin meet")
   //.attr("viewBox", "0 0 1120 700")
   .attr("viewBox", "0 0 960 600")
   //.attr("viewBox", "0 0 " + window.innerWidth + " " + window.innerWidth * .625)
   .attr("id", "statesvg")
   //class to make it responsive
   .classed("svg-content-responsive", true); 

uStates.draw("#statesvg", senators, tooltipHtml);
