var d3 = require('d3');
var uStatePaths = require('./uStatePaths');
		
exports.draw = function(id, data, toolTip, $) {		

	function clicked(d) {
		d3.select("#tooltip").transition().duration(200).style("opacity", .9);      
		d3.select("#tooltip").style("pointer-events", "auto");
		
		d3.select("#tooltip #tooltip-body").html(toolTip(d.n, data[d.id]))
		//d3.select("#tooltip").style("top", "60%");
	}

	var map = d3.selectAll(".state");

	function equalToEventTarget() {
		return $(this).attr("class") == $(d3.event.target).attr("class");
	}

	function tooltipClose() {
		d3.select("#tooltip").transition().duration(500).style("opacity", 0);      
		d3.select("#tooltip").style("pointer-events", "none");
	}

	d3.select(document).on("click",function(){
		var outside = $(d3.event.target).attr("class") != "state" && $(d3.event.target).parents("#tooltip") == null;
		if (outside) {
			tooltipClose();
		}
	});

	d3.select('body').on('keyup', function () {
		if (d3.event.key === 'Escape') {
			tooltipClose();
		}
	});

	var tooltipCloseCancel;

	d3.select("#tooltip").on('mouseleave', function(d){
		tooltipCloseCancel = setTimeout(tooltipClose, 500);
	});

	d3.select('#tooltip').on('mouseenter', function(e) {
		clearTimeout(tooltipCloseCancel);
	});

	$('#close-tooltip').on("click", function(e){
		d3.select("#tooltip").transition().duration(500).style("opacity", 0);      
		d3.select("#tooltip").style("pointer-events", "none");
	});

	d3.select(id).selectAll(".state")
			.data(uStatePaths).enter().append("path").attr("class","state").attr("d",function(d){ return d.d;})
			.style("fill",function(d){
				var score = data[d.id][0]["Stance"].indexOf("Opposed") != -1;
				score += data[d.id][1]["Stance"].indexOf("Opposed") != -1;
				return score == 0 ? "#000000" : score == 1 ? "#04243e" : "#339999";
			})
			.on("click", clicked);
};
