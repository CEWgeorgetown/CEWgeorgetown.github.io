<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>The Economic Value of College Majors</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">


<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.6/css/jquery.dataTables.css"/>

<link rel="stylesheet" type="text/css" href="css/wiw.css"/>

<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.6/js/jquery.dataTables.min.js"></script> 
<script type="text/javascript" charset="utf8" src="//jquery-datatables-row-grouping.googlecode.com/svn/trunk/media/js/jquery.dataTables.rowGrouping.js"></script> 

<script type="text/javascript" src="//fast.fonts.net/jsapi/34999b20-7cff-46b1-a1a8-b2c1cbb5e5c8.js"></script>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script src="js/raphael.js"></script>

	<script src="js/color.jquery.js"></script>
	<script src="js/jquery.usmap.js"></script>
    
<script>
function convert_state(name, to) {
    var states = new Array(                         {'name':'Alabama', 'abbrev':'AL'},          {'name':'Alaska', 'abbrev':'AK'},
        {'name':'Arizona', 'abbrev':'AZ'},          {'name':'Arkansas', 'abbrev':'AR'},         {'name':'California', 'abbrev':'CA'},
        {'name':'Colorado', 'abbrev':'CO'},         {'name':'Connecticut', 'abbrev':'CT'},      {'name':'Delaware', 'abbrev':'DE'},
        {'name':'Florida', 'abbrev':'FL'},          {'name':'Georgia', 'abbrev':'GA'},          {'name':'Hawaii', 'abbrev':'HI'},
        {'name':'Idaho', 'abbrev':'ID'},            {'name':'Illinois', 'abbrev':'IL'},         {'name':'Indiana', 'abbrev':'IN'},
        {'name':'Iowa', 'abbrev':'IA'},             {'name':'Kansas', 'abbrev':'KS'},           {'name':'Kentucky', 'abbrev':'KY'},
        {'name':'Louisiana', 'abbrev':'LA'},        {'name':'Maine', 'abbrev':'ME'},            {'name':'Maryland', 'abbrev':'MD'},
        {'name':'Massachusetts', 'abbrev':'MA'},    {'name':'Michigan', 'abbrev':'MI'},         {'name':'Minnesota', 'abbrev':'MN'},
        {'name':'Mississippi', 'abbrev':'MS'},      {'name':'Missouri', 'abbrev':'MO'},         {'name':'Montana', 'abbrev':'MT'},
        {'name':'Nebraska', 'abbrev':'NE'},         {'name':'Nevada', 'abbrev':'NV'},           {'name':'New Hampshire', 'abbrev':'NH'},
        {'name':'New Jersey', 'abbrev':'NJ'},       {'name':'New Mexico', 'abbrev':'NM'},       {'name':'New York', 'abbrev':'NY'},
        {'name':'North Carolina', 'abbrev':'NC'},   {'name':'North Dakota', 'abbrev':'ND'},     {'name':'Ohio', 'abbrev':'OH'},
        {'name':'Oklahoma', 'abbrev':'OK'},         {'name':'Oregon', 'abbrev':'OR'},           {'name':'Pennsylvania', 'abbrev':'PA'},
        {'name':'Rhode Island', 'abbrev':'RI'},     {'name':'South Carolina', 'abbrev':'SC'},   {'name':'South Dakota', 'abbrev':'SD'},
        {'name':'Tennessee', 'abbrev':'TN'},        {'name':'Texas', 'abbrev':'TX'},            {'name':'Utah', 'abbrev':'UT'},
        {'name':'Vermont', 'abbrev':'VT'},          {'name':'Virginia', 'abbrev':'VA'},         {'name':'Washington', 'abbrev':'WA'},
        {'name':'West Virginia', 'abbrev':'WV'},    {'name':'Wisconsin', 'abbrev':'WI'},        {'name':'Wyoming', 'abbrev':'WY'},
		{'name':'District of Columbia', 'abbrev':'DC'}
        );
    var name = name;
    var to = to;
    var returnthis = false;
    $.each(states, function(index, value){
        if (to == 'name') {
            if (value.abbrev.toLowerCase() == name.toLowerCase()){
                returnthis = value.name;
                return false;
            }
        } else if (to == 'abbrev') {
            if (value.name.toLowerCase() == name.toLowerCase()){
                returnthis = value.abbrev.toUpperCase();
                return false;
            }
        }
    });
    return returnthis;
}





	$(document).ready(function() {
	  $('#map').usmap({
		showLabels: true,
		stateHoverStyles: {fill: '#DABA61'},
		
		'mouseover': function(event, data) {
	
	var FullState = convert_state(data.name,"name");		
			
    $('#clicked-state')
	  .text('Selected state: '+FullState);
      //.text('Selected state: '+data.name);
      //.parent().effect('highlight', {color: '#C7F464'}, 2000);
  	},
	'mouseout': function(event, data) {
    $('#clicked-state')
      .text('Select a state below.');
      //.parent().effect('highlight', {color: '#C7F464'}, 2000);
  	},      
	    'click' : function(event, data) {
		console.log(data.name);
		var FullState = convert_state(data.name,"name");		
		window.location.href = "wiw.php?bstnm="+data.name+"&fstate="+FullState;	
	      $('#alert')
	        .text('Click '+data.name+' on map 1')
	        .stop()
	        .css('backgroundColor', '#DABA61')
	        .animate({backgroundColor: '#ddd'}, 1000);
	    }
		
	  });
	  
	});
	</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-43086304-2', 'auto');
  ga('send', 'pageview');

</script>

</head>

<body>

<div class="vc_column_container">
<div class="row">
<div class="col-md-6" style="text-align:center;">
<h3>Explore Majors by Group</h3>

<div class="row">
<div class="col-md-3 agriculture-and-natural-resources-icon">
<span class="fa-stack fa-lg">
  <i class="fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-leaf fa-stack-1x fa-inverse"></i>
</span><br/>
<a href="wiw.php?mgroup=Agriculture and natural resources&dtype=National&i=fa-leaf">Agriculture and natural resources</a>
</div>
<div class="col-md-3 architecture-and-engineering-icon">
<span class="fa-stack fa-lg">
  <i class="fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-cogs fa-stack-1x fa-inverse"></i>
</span><br/>
<a href="wiw.php?mgroup=Architecture and engineering&dtype=National&i=fa-cogs">Architecture and engineering</a>
</div>
<div class="col-md-3 arts-icon">
<span class="fa-stack fa-lg">
  <i class="fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-paint-brush fa-stack-1x fa-inverse"></i>
</span><br/>
<a href="wiw.php?mgroup=Arts&dtype=National&i=fa-paint-brush">Arts</a></div>
<div class="col-md-3 biology-and-life-sciences-icon">
<span class="fa-stack fa-lg">
  <i class="fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-eyedropper fa-stack-1x fa-inverse"></i>
</span><br/>
<a href="wiw.php?mgroup=Biology and life sciences&dtype=National&i=fa-eyedropper">Biology and life sciences</a>
</div>
</div>
<div class="row">
<div class="col-md-12">
&nbsp;
</div>
</div>
<div class="row">
<div class="col-md-3 business-icon">
<span class="fa-stack fa-lg">
  <i class="fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-briefcase fa-stack-1x fa-inverse"></i>
</span><br/>
<a href="wiw.php?mgroup=Business&dtype=National&i=fa-briefcase">Business</a>
</div>
<div class="col-md-3 communications-and-journalism-icon">
<span class="fa-stack fa-lg">
  <i class="fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-newspaper-o fa-stack-1x fa-inverse"></i>
</span><br/>
<a href="wiw.php?mgroup=Communications and journalism&dtype=National&i=fa-newspaper-o">Communications and journalism</a>
</div>
<div class="col-md-3 computers-statistics-and-mathematics-icon">
<span class="fa-stack fa-lg">
  <i class="fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-bar-chart fa-stack-1x fa-inverse"></i>
</span><br/>
<a href="wiw.php?mgroup=Computers, statistics, and mathematics&dtype=National&i=fa-bar-chart">Computers, statistics, and mathematics</a>
</div>
<div class="col-md-3 education-icon">
<span class="fa-stack fa-lg">
  <i class="fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-graduation-cap fa-stack-1x fa-inverse"></i>
</span><br/>
<a href="wiw.php?mgroup=Education&dtype=National&i=fa-graduation-cap">Education</a>
</div>
</div>
<div class="row">
<div class="col-md-12">
&nbsp;
</div>
</div>
<div class="row">
<div class="col-md-3 health-icon">
<span class="fa-stack fa-lg">
  <i class="fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-heartbeat fa-stack-1x fa-inverse"></i>
</span><br/>
<a href="wiw.php?mgroup=Health&dtype=National&i=fa-heartbeat">Health</a>
</div>
<div class="col-md-3 humanities-and-liberal-arts-icon">
<span class="fa-stack fa-lg">
  <i class="fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-fire fa-stack-1x fa-inverse"></i>
</span><br/>
<a href="wiw.php?mgroup=Humanities and liberal arts&dtype=National&i=fa-fire">Humanities and liberal arts</a>
</div>
<div class="col-md-3 industrial-arts-consumer-services-and-recreation-icon">
<span class="fa-stack fa-lg">
  <i class="fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-trophy fa-stack-1x fa-inverse"></i>
</span><br/>
<a href="wiw.php?mgroup=Industrial arts, consumer services, and recreation&dtype=National&i=fa-trophy">Industrial arts, consumer services, and recreation</a>
</div>
<div class="col-md-3 law-and-public-policy-icon">
<span class="fa-stack fa-lg">
  <i class="fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-gavel fa-stack-1x fa-inverse"></i>
</span><br/>
<a href="wiw.php?mgroup=Law and public policy&dtype=National&i=fa-gavel">Law and public policy</a>
</div>
</div>
<div class="row">
<div class="col-md-12">
&nbsp;
</div>
</div>
<div class="row">
<div class="col-md-3 physical-sciences-icon">
<span class="fa-stack fa-lg">
  <i class="fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-flask fa-stack-1x fa-inverse"></i>
</span><br/>
<a href="wiw.php?mgroup=Physical sciences&dtype=National&i=fa-flask">Physical sciences</a>
</div>
<div class="col-md-3 psychology-and-social-work-icon">
<span class="fa-stack fa-lg">
  <i class="fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-users fa-stack-1x fa-inverse"></i>
</span><br/>
<a href="wiw.php?mgroup=Psychology and social work&dtype=National&i=fa-users">Psychology and social work</a>
</div>
<div class="col-md-3 social-sciences-icon">
<span class="fa-stack fa-lg">
  <i class="fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-globe fa-stack-1x fa-inverse"></i>
</span><br/>
<a href="wiw.php?mgroup=Social sciences&dtype=National&i=fa-globe">Social sciences</a>
</div>
<div class="col-md-3">
</div>
<div class="col-md-12">
<hr/>
<h3><a href="wiw.php?dtype=National">Explore All Majors</a></h3>
</div>
</div>

</div>
<div class="col-md-6" style="text-align:center;">
<h3>Explore Earnings by State</h3>
  <div id="clicked-state">Select a state below.</div>
  <div id="map" style="width: 100%; height: 378px;"></div>
</div>

</div>
<div class="row">

</div>
</div>



</body>
</html>
