<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="personal_page.css"/>
	
	<title>Visual Politics</title>
<style type="text/css">
	
	
	h1, h2, h3, h4{
		color:black;
		padding: 0;
		
	}
	.blank_app{
		padding: 3%;
	}
	.withcolor{
		background-color: rgba(160,160,160,0.1);
		padding: 3% 0;
	}

	
/*--------Fei's CSS Start---------------------------------------------*/	
body {
  font: 12px sans-serif;
}

.axis path,
.axis line {
  fill: none;
  stroke: #000;
  shape-rendering: crispEdges;
}

.bar {
  fill: orange;
}

.bar:hover {
  fill: orangered ;
}

/*.x.axis path {
  display: none;
}*/

.d3-tip {
  line-height: 1;
  font-weight: bold;
  padding: 12px;
  background: rgba(0, 0, 0, 0.8);
  color: #fff;
  border-radius: 2px;
}
/* Creates a small triangle extender for the tooltip */
.d3-tip:after {
  box-sizing: border-box;
  display: inline;
  font-size: 10px;
  width: 100%;
  line-height: 1;
  color: rgba(0, 0, 0, 0.8);
  content: "\25BC";
  position: absolute;
  text-align: center;
}

/* Style northward tooltips differently */
.d3-tip.n:after {
  margin: -1px 0 0 0;
  top: 100%;
  left: 0;
}
/*--------Fei's CSS End----------------------------------------------------*/		


/* ------------------------- Manu Start ------------------------------- */
text {
  font-size: 11px;
  pointer-events: none;
}

text.parent {
  fill: #1f77b4;
}

circle {
  fill: #ccc;
  stroke: #999;
  pointer-events: all;
}

circle.parent {
  fill: #1f77b4;
  fill-opacity: .1;
  stroke: steelblue;
  z-index:0;
}

circle.parent:hover {
  stroke: #ff7f0e;
  stroke-width: .5px;
  z-index:0;
}

circle.child {
  z-index : 999;
}
circle.child:hover {
  z-index : 999;
  stroke: #ff7f0e;
  stroke-width: .5px;

}
/* ---------------------------------------- Manu End ------------------------------------*/
/*------------------------------------------Jingzhu's CSS start-----------*/
.node {
    stroke: #fff;
    stroke-width: 1.5px;
  }

  .link {
    stroke: #999;
    stroke-opacity: .6;
  }
/*------------------------------------------Jingzhu's CSS end-----------*/
</style>
</head>

<body>


 <div class="blank" > </div>    

<div class="container-fluid"> 

<!--   -->

<div class="row" style="padding-bottom:0">
   
 	<div class="col-sm-12">
 		<h1 style="text-align: center; font: bold; font-weight:100">What Makes a Political Rockstar Follow a "Casual User"?</h1>
 	</div>
 
</div>


<div class="row" style="padding-bottom:0">
   	<div class="col-sm-1">
   	</div>
 	<div class="col-sm-10">
<!-- 		<srtong style="font-size:2em; text-aligh:left; margin: 1%">What makes a Political Rockstar follow a "Casual User"?</strong> -->
 	</div>
 	<div class="col-sm-1">
   	</div>
</div>


<div class="row" style="padding-bottom:0">
   	<div class="col-sm-1">
   	</div>
 	<div class="col-sm-10">
 		<p style="font-weight:50;font-size:1.5em"> Narendra Modi is the second most followed elected official in the world after Barack Obama. Part of growing online presence has been attributed to a careful campaign for brand building through social media through a mix of crafted messaging and online affiliation. Modi currently has 11.7 Million Twitter followers (@narendramodi), but follows only 1,075 people. A set of dedicated  set of about 300 followers who consistently retweet the messages from Narendra  Modi were followed back by Modi.Indian Prime Minister Narendra Modi, elected in May 2014, followed casual users during the year leading up to elections. Who Are these casual users?  They are Writers, Students, Producers, BJP Grass-Root Workers, IT Workers, and others of varying influence but they are not celebrities either.
	</p>

    <p style="font-weight:50; font-size:1.5em">These casual users were found to be very active on twitter. On drilling further, found that they were vocal about voicing their opinions about the Indian political scenario. All of these users liked to talk about India's top 3 political parties : "BJP", "Congress" & "AAP". Interestingly, these users talk more about Narendra Modi and BJP, from which Modi hails from. These casual users are not shy of talking about leaders of the opposition, namely Arvind Kejriwal and the Gandhi family, which has presided over Congress party forever. From a superficial look at the data, we find that these people are interested about elections, the Indian diaspora and the capital, New Delhi.</p>
    
	<p style="font-weight:30; color:blue;font-size:1em; padding-top:1%">Visualization 1 below shows a circular word cloud depicting all words used in tweets and retweets between the 408 casual users. <p/>
  </div>
 	<div class="col-sm-1">
   	</div>
</div>

<!-- WORD CLOUD -->
<div class="row" style="padding-bottom:0; padding-top:2%">
    <div class="col-sm-1">
    </div>
  <div class="col-sm-10">
<!--    <strong style="font-size:2em; text-aligh:left; margin: 1%">Visualization 1: Word Cloud</strong> -->
    <p style="font"
  </div>
  <div class="col-sm-1">
    </div>
</div>



<div class="row" style="padding-bottom:0">
    <div class="col-sm-1">
    </div>
  <div class="col-sm-10">
    <p style="margin-top:50px;margin-left:0;" id="wordcloud">
      
    
<script src="http://d3js.org/d3.v3.min.js"></script>
    <script type="text/javascript">

var w = 1200,
    h = 800,
    r = 720,
    x_scale = d3.scale.linear().range([0, r]),
    y_scale = d3.scale.linear().range([0, r]),
    node,
    root;

var pack = d3.layout.pack()
    .size([r, r])
    .value(function(d) { return d.size; })

var vis = d3.select("#wordcloud").insert("svg:svg", "h2")
    .attr("width", w)
    .attr("height", h)
  .append("svg:g")
    .attr("transform", "translate(" + (w - r) / 2 + "," + (h - r) / 2 + ")");

d3.json("flare.json", function(data) {

  node = root = data;

  var nodes = pack.nodes(root);

  vis.selectAll("circle")
      .data(nodes)
    .enter().append("svg:circle")
      .attr("class", function(d) { return d.children ? "parent" : "child"; })
      .attr("cx", function(d) { return d.x; })
      .attr("cy", function(d) { return d.y; })
      .attr("r", function(d) { return d.r; })
    .append("svg:title")
    .text(function(d){ console.log(d.name); return "Word:"+d.name+"\n"+"Size:"+d.size })
      .on("click", function(d) { return zoom(node == d ? root : d); })
    


  vis.selectAll("text")
      .data(nodes)
    .enter().append("svg:text")
      .attr("class", function(d) { return d.children ? "parent" : "child"; })
      .attr("x", function(d) { return d.x; })
      .attr("y", function(d) { return d.y; })
      .attr("dy", ".35em")
      .attr("text-anchor", "middle")
      .style("opacity", function(d) { return d.r > 20 ? 1 : 0; })
      .text(function(d) { return d.name; });

  //d3.select(window).on("click", function() { zoom(root); });
});

function zoom(d, i) {
  var k = r / d.r / 2;
  x.domain([d.x - d.r, d.x + d.r]);
  y.domain([d.y - d.r, d.y + d.r]);

  var t = vis.transition()
      .duration(d3.event.altKey ? 7500 : 750);

  t.selectAll("circle")
      .attr("cx", function(d) { return x(d.x); })
      .attr("cy", function(d) { return y(d.y); })
      .attr("r", function(d) { return k * d.r; });

  t.selectAll("text")
      .attr("x", function(d) { return x(d.x); })
      .attr("y", function(d) { return y(d.y); })
      .style("opacity", function(d) { return k * d.r > 20 ? 1 : 0; });

  node = d;
  d3.event.stopPropagation();
}

    </script>
</p>
  </div>
  <div class="col-sm-1">
    </div>
</div>
<!-- WORD CLOUD ENDS-->

<!--  Bar Chart Start -->  


<div class="row" style="padding-bottom:0; padding-top:2%">
    <div class="col-sm-1">
    </div>
  <div class="col-sm-10">
    <p style="margin-top:50px;margin-left:0;"> </p>
     <p style="font-weight:50; font-size:2em">Looking at our list of top used words over time, we’re able to better understand the ebb and flow of the period leading up to the election in May of 2014.  In a sense, we see what’s important to Modi’s party, along with most important to these 408 as a small, but representative slice of the general population.</p>
    <p style="font-weight:50; color:blue;font-size:2em; padding-top: 1%">Visualization 2 below shows bar chart depicting keyword usage in a given month for all tweets and retweets between the 408 casual users. <p/>
    <p style="font-weight:50; color:blue; font-size:1.8em">(Use the slider to change between months)</p>
 <!--   <strong style="padding-top: 2%;font-size:2em; text-align:left; margin: 1%">Visualization 2: Hot Words by Month</strong> -->
  </div>
  <div class="col-sm-1">
    </div>
</div>

<!--Slider-->
<div class="row" style="padding-bottom:0">
  <div class="col-sm-1">
    </div>
<div class="col-sm-10">
    <label for="slider1" 
      style="display: inline-block; width: 500px; text-align: right">
      MONTH = <span id="slider1-value">…</span>
    </label>
    <input type="range" min="1" max="56" step="1" id="slider1">
</div>
<div class="col-sm-1">
    </div>
</div>
<!--Slider-->


<div class="row" style="padding-bottom:0">
    <div class="col-sm-1">
    </div>
  <div class="col-sm-10">
    <p style="margin-top:50px;margin-left:0;" id="bargraph">



<script src="http://labratrevenge.com/d3-tip/javascripts/d3.tip.v0.6.3.js"></script>
<script>

var margin = {top: 40, right: 20, bottom: 30, left: 70},
    width = 1100 - margin.left - margin.right,
    height = 700 - margin.top - margin.bottom;

// var formatPercent = d3.format(".0%");

var svg = d3.select("#bargraph").append("svg")
        .attr("width", width + margin.left + margin.right)
        .attr("height", height + margin.top + margin.bottom)
        .append("g")
        .attr("transform", "translate(" + margin.left + "," + margin.top + ")");

var y = d3.scale.ordinal()
    // .domain(data.map(function(d) {return d.letter;}))
    .rangeRoundBands([0, height], .1);

// var x = d3.scale.linear()
//         .range([0, width])
//         .domain([0,24]);

// var x = d3.scale.linear()
//     .range([0, width]);

var superscript = "⁰¹²³⁴⁵",
    formatPower = function(d) { return (d + "").split("").map(function(c) { return superscript[c]; }).join(""); };

var x = d3.scale.log()
    .range([0, width]);

var xAxis = d3.svg.axis()
    .scale(x)
    .orient("top")
    .ticks(10, function(d) { return 10 + formatPower(Math.round(Math.log(d) / Math.LN10)); });

var yAxis = d3.svg.axis()
    .scale(y)
    .orient("left");
    // .tickFormat(formatPercent);

var file =["datadata.tsv",
"2010-04.tsv.new",
"2010-05.tsv.new",
"2010-06.tsv.new",
"2010-07.tsv.new",
"2010-09.tsv.new",
"2010-11.tsv.new",
"2010-12.tsv.new",
"2011-01.tsv.new",
"2011-03.tsv.new",
"2011-05.tsv.new",
"2011-06.tsv.new",
"2011-07.tsv.new",
"2011-08.tsv.new",
"2011-09.tsv.new",
"2011-10.tsv.new",
"2011-11.tsv.new",
"2011-12.tsv.new",
"2012-01.tsv.new",
"2012-03.tsv.new",
"2012-04.tsv.new",
"2012-05.tsv.new",
"2012-06.tsv.new",
"2012-07.tsv.new",
"2012-08.tsv.new",
"2012-09.tsv.new",
"2012-10.tsv.new",
"2012-11.tsv.new",
"2012-12.tsv.new",
"2013-01.tsv.new",
"2013-02.tsv.new",
"2013-03.tsv.new",
"2013-04.tsv.new",
"2013-05.tsv.new",
"2013-06.tsv.new",
"2013-07.tsv.new",
"2013-08.tsv.new",
"2013-09.tsv.new",
"2013-10.tsv.new",
"2013-11.tsv.new",
"2013-12.tsv.new",
"2014-01.tsv.new",
"2014-02.tsv.new",
"2014-03.tsv.new",
"2014-04.tsv.new",
"2014-05.tsv.new",
"2014-06.tsv.new",
"2014-07.tsv.new",
"2014-08.tsv.new",
"2014-09.tsv.new",
"2014-10.tsv.new",
"2014-11.tsv.new",
"2014-12.tsv.new",
"2015-01.tsv.new",
"2015-02.tsv.new",
"2015-03.tsv.new"];



function drawB(h) {



    svg.selectAll("*").remove();


    var tip = d3.tip()
      .attr('class', 'd3-tip')
      .offset([-10, 0])
      .html(function(d) {
        return "<strong>Word : <span style='color:red'>" + d.letter + "</span> <br> <br> Frequency :</strong> <span style='color:red'>" + d.frequency + "</span>";
      });


    svg.call(tip);

    //file[h] go into the file


    d3.tsv(file[h-1], type, function(error, data) {
      // x.domain([0, d3.max(data, function(d) { return d.frequency; })]);
      // x.domain([1, 33000]);
      x.domain([1e0, 1e5]);
      y.domain(data.map(function(d) { return d.letter; }));

      svg.append("g")
          .attr("class", "x axis")
          .call(xAxis)
          .append("text")
          .attr("transform", "translate(" + width + ",20)")
          .attr("x", 6)
          .attr("dx", ".71em")
          .style("text-anchor", "end")
          .text("Frequency");

      svg.append("g")
          .attr("class", "y axis")
          .call(yAxis)
        // .append("text")
        //   .attr("transform", "rotate(-90)")
        //   .attr("y", 6)
        //   .attr("dy", ".71em")
        //   .style("text-anchor", "end")
          // .text("letter");

      var bar = svg.selectAll(".bar")
          .data(data)
        .enter().append("rect")
          .attr("class", "bar")
          .attr("x", function(d) { return 0; })
          .attr("y", function(d) { return y(d.letter); })
          .attr("height", y.rangeBand())
          .attr("width", function(d) { if (d.frequency==0) { return 0; } else { return x(d.frequency); } })
          .on('mouseover', tip.show)
          .on('mouseout', tip.hide);

          bar.transition();

          bar.exit().transition()
          .remove();



    });

    function type(d) {
      d.frequency = +d.frequency;
      return d;
    }

} //drawB function

</script>


<script>

    // when the input range changes update  
    d3.select("#slider1").on("input", function() {
      update1(+this.value);
      
      drawB(+this.value);
      
    });

    // Initial starting radius of the circle 
    update1(1);
    
    drawB(1);


    

    // update the elements
    function update1(m) {

          var month =["total",
          "2010-04",
"2010-05",
"2010-06",
"2010-07",
"2010-09",
"2010-11",
"2010-12",
"2011-01",
"2011-03",
"2011-05",
"2011-06",
"2011-07",
"2011-08",
"2011-09",
"2011-10",
"2011-11",
"2011-12",
"2012-01",
"2012-03",
"2012-04",
"2012-05",
"2012-06",
"2012-07",
"2012-08",
"2012-09",
"2012-10",
"2012-11",
"2012-12",
"2013-01",
"2013-02",
"2013-03",
"2013-04",
"2013-05",
"2013-06",
"2013-07",
"2013-08",
"2013-09",
"2013-10",
"2013-11",
"2013-12",
"2014-01",
"2014-02",
"2014-03",
"2014-04",
"2014-05",
"2014-06",
"2014-07",
"2014-08",
"2014-09",
"2014-10",
"2014-11",
"2014-12",
"2015-01",
"2015-02",
"2015-03"];
      // adjust the text on the range slider
      d3.select("#slider1-value").text(month[m-1]);
      d3.select("#slider1").property("value", m);
    }
    </script>
</p>
  </div>
  <div class="col-sm-1">
    </div>
</div>
<!--  Bar Chart End  -->




<!--NETWORK START-->
<div class="row" style="padding-bottom:0">
    <div class="col-sm-1">
    </div>
  <div class="col-sm-10">
     <p style="font-weight:50; font-size:2em">Did casual users' behavior change once Narendra Modi followed them?  Looking at retweeting habits within the 408 user "network".</p>
    <p style="font-weight:50; color:blue;font-size:2em">Visualization 3 below shows a network diagram depicting Modi (Blue, Center) and his 408 followers. <p/>
    <p style="font-weight:50; color:blue;font-size:2em"> Larger circles indicate users who retweeted Modi's tweets frequently; unconnected dots depict those users among the 408 who did not retweet Modi. <p/>  
    <strong style="font-size:2em; text-aligh:left; margin: 1%">Visualization 3: Retweeting Network</strong>
  </div>
  <div class="col-sm-1">
    </div>
</div>



<div class="row" style="padding-bottom:0; padding-top:2%">
    <div class="col-sm-1">
    </div>
  <div class="col-sm-10">
    <p style="margin-top:50px;margin-left:0;" id="network">
<script type="text/javascript">

var width = 960,
    height = 500;

var color = d3.scale.category20();

var force = d3.layout.force()
    .charge(-40)
    .linkDistance(80)
    .size([width, height]);

var svg3 = d3.select("#network").insert("svg")
    .attr("width", width)
    .attr("height", height);

d3.json("data.json", function(error, graph) {
  force
      .nodes(graph.nodes)
      .links(graph.links)
      .start();

  var link = svg3.selectAll(".link")
      .data(graph.links)
    .enter().append("line")
      .attr("class", "link")
      .style("stroke-width", 1);
<!---->
  var node = svg3.selectAll(".node")
      .data(graph.nodes)
    .enter().append("circle")
      .attr("class", "node")
      .attr("r", function(d) { if(d.value!=0){return Math.sqrt(d.value)*2;} else{return 4;} })
      .style("fill", function(d) { return color(d.group); })
      .call(force.drag);

  node.append("title")
      .text(function(d) { return 'Name: '+d.name+'\nRetweets: '+d.value; });

  force.on("tick", function() {
    link.attr("x1", function(d) { return d.source.x; })
        .attr("y1", function(d) { return d.source.y; })
        .attr("x2", function(d) { return d.target.x; })
        .attr("y2", function(d) { return d.target.y; });

    node.attr("cx", function(d) { return d.x; })
        .attr("cy", function(d) { return d.y; });
  });
});

</script>

    </p>
  </div>
  <div class="col-sm-1">
  </div>
</div>      
<!--NETWORK END-->
</body>
</html>