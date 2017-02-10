var d3 = require('d3');
var senators = require('./senators');
var uStates = require('./uStates');

module.exports = function($) {
  function senatorHtml(d){
    var senBody = "<div class='col-xs-6 tooltip-body-col'><div class='row'><h6>"+(d["First Name"] + " " + d["Last Name"])+"</h6></div><div class='row '><p class='senator-status'>"+(d["Stance"])+"</p></div><div class='row'><p>";
    senBody += d["Statement"];
    senBody += "</p></div><div class='row'><p><a target='_blank' href = '"+ (d["Statement Link"]) + "'>Source</a></p></div><div class='row'><p><strong>Phone Number:</strong> "+(d["Local Office Number"])+"</p></div></div>";
    return senBody;
  }

  function tooltipHtml(n, d){
	var html = "<h4>"+n+"</h4><div class='row'>" + senatorHtml(d[0]) + senatorHtml(d[1]) +"</div></div>";
    return html;
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

  uStates.draw("#statesvg", senators, tooltipHtml, $);
};
