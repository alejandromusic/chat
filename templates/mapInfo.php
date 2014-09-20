<div data-role="page" id="home">    
    
    <div data-role="header" data-theme="a" id="headr">
    	<a href="#menu" data-icon="plus" class="ui-btn-left">Explore</a>
        <h1>Home</h1>
		<a href="#news" data-icon="plus" class="ui-btn-right">News</a>
    </div>
    
    <div id="mapG" data-role="content">
		<div id="mapWin" style="width:100%;height:613px;">
       		<div id="mapholder"></div>
		</div>
    </div>
</div>

<div data-role="page" id="menu">    
    
    <div data-role="header" data-theme="a">
    	<a href="#home" data-icon="plus" class="ui-btn-left" data-direction="reverse">Back</a>
        <h1>Main Menu</h1>
    </div>
    
    <div data-role="content">
	<ul data-role="listview" data-theme="c">
	    	<li><a href="#home" onclick="getLocation()" data-direction="reverse">My Location</a></li>
		<li><a href="#buildings">Buildings</a></li>
            	<li id="departments"><a href="#dept">Departments</a></li>
	  	<li id="services"><a href="#student">Student Services</a></li>
        </ul>
    </div>
</div> <!--end page-->

<div data-role="page" id="buildings">    
    
    <div data-role="header" data-theme="a">
    	<a href="#menu" data-icon="plus" class="ui-btn-left" data-direction="reverse">Back</a>
        <h1>Buildings</h1>
    </div>
    
    <div data-role="content">
	    <ul data-role="listview" data-filter="true" data-input="#filterBasic-input" data-theme="c">
			<li class="vars" id="aspen" onclick="showInfo(this, aspen)">
				<a href="#home" data-direction="reverse">AH - Aspen Hall</a></li>
			<li class="vars" id="cedar" onclick="showInfo(this, cedar)">
				<a href="#home" data-direction="reverse">CH - Cedar Hall</a></li>
			<li class="vars" id="cypress" onclick="showInfo(this, cypress)">
				<a href="#home" data-direction="reverse">CY - Cypress Hall</a></li>
			<li class="vars" id="juniper" onclick="showInfo(this, juniper)">
				<a href="#home" data-direction="reverse">JH - Juniper Hall</a></li>
			<li class="vars" id="laurel" onclick="showInfo(this, laurel)">
				<a href="#home" data-direction="reverse">LH - Laurel Hall</a></li>
			<li class="vars" id="mariposa" onclick="showInfo(this, mariposa)">
				<a href="#home" data-direction="reverse">MA - Mariposa Hall</a></li>
			<li class="vars" id="magnolia" onclick="showInfo(this, magnolia)">
				<a href="#home" data-direction="reverse">MH - Magnolia Hall</a></li>
			<li class="vars" id="oak" onclick="showInfo(this, oak)">
				<a href="#home" data-direction="reverse">OH - Oak Hall</a></li>
			<li class="vars" id="sage" onclick="showInfo(this, sage)">
				<a href="#home" data-direction="reverse">SA - Sage Hall</a></li>
			<li class="vars" id="sequoia" onclick="showInfo(this, sequoia)">
				<a href="#home" data-direction="reverse">SQ - Sequoia Hall</a></li>
			<li class="vars" id="willow" onclick="showInfo(this, willow)">
				<a href="#home" data-direction="reverse">WH - Willow Hall</a></li>        
        </ul>
    </div>

</div> <!--end page-->

<div data-role="page" id="dept">    
    
    <div data-role="header" data-theme="a">
    	<a href="#menu" data-icon="plus" class="ui-btn-left" data-direction="reverse">Back</a>
        <h1>Departments</h1>
    </div>
    
    <div data-role="content">
		
		<ul data-role="listview" data-filter="true" data-input="#filterBasic-input" data-theme="c">
            
				<li class="vars" id="administration" onclick="showInfo(this, aspen)">
					<a href="#home" data-direction="reverse">Administration of Justice</a></li>
				
				<li class="vars" id="behavioral" onclick="showInfo(this, aspen)">
					<a href="#home" data-direction="reverse">Behavioral and Social Sciences</a></li>
				
				<li class="vars" id="business" onclick="showInfo(this, cedar)">
					<a href="#home" data-direction="reverse">Business, CIS, CAOT</a></li>
				
				<li class="vars" id="community" onclick="showInfo(this, cedar)">
					<a href="#home" data-direction="reverse">Community and Economic Development</a></li>
				
				<li class="vars" id="CDM" onclick="showInfo(this, sequoia)">
					<a href="#home" data-direction="reverse">CDM</a></li>
					
				<li class="vars" id="cosmetology" onclick="showInfo(this, magnolia)">
					<a href="#home" data-direction="reverse">Cosmetology</a></li>
					
				<li class="vars" id="culinary" onclick="showInfo(this, sage)">
					<a href="#home" data-direction="reverse">Culinary Arts</a></li>
				
				<li class="vars" id="design" onclick="showInfo(this, cypress)">
					<a href="#home" data-direction="reverse">Design and Media Arts</a></li>
					
				<li class="vars" id="electronics" onclick="showInfo(this, cedar)">
					<a href="#home" data-direction="reverse">Electronics and Computer Technology</a></li>
					
				<li class="vars" id="english" onclick="showInfo(this, aspen)">
					<a href="#home" data-direction="reverse">English</a></li>
					
				<li class="vars" id="labor" onclick="showInfo(this, aspen)">
					<a href="#home" data-direction="reverse">Labor Studies</a></li>
					
				<li class="vars" id="learning" onclick="showInfo(this, aspen)">
					<a href="#home" data-direction="reverse">Learning Skills</a></li>
					
				<li class="vars" id="library" onclick="showInfo(this, mariposa)">
					<a href="#home" data-direction="reverse">Library Science</a></li>
				
				<li class="vars" id="language" onclick="showInfo(this, oak)">
					<a href="#home" data-direction="reverse">Language Arts</a></li>
					
				<li class="vars" id="mathematics" onclick="showInfo(this, aspen)">
					<a href="#home" data-direction="reverse">Mathematics</a></li>
					
				<li class="vars" id="noncredit" onclick="showInfo(this, mariposa)">
					<a href="#home" data-direction="reverse">Noncredit Continuing Education</a></li>
					
				<li class="vars" id="nursing" onclick="showInfo(this, magnolia)">
					<a href="#home" data-direction="reverse">Nursing and Allied Health</a></li>
					
				<li class="vars" id="physical" onclick="showInfo(this, laurel)">
					<a href="#home" data-direction="reverse">Physical Education and Health</a></li>
					
				<li class="vars" id="science" onclick="showInfo(this, cedar)">
					<a href="#home" data-direction="reverse">Science</a></li>
					
				<li class="vars" id="transportation" onclick="showInfo(this, oak)">
					<a href="#home" data-direction="reverse">Transportation</a></li>
                      
        </ul>
    </div>

</div> <!--end page-->
<div data-role="page" id="student">    
    
    <div data-role="header" data-filter="true" data-input="#filterBasic-input" data-theme="a">
    	<a href="#menu" data-icon="plus" class="ui-btn-left">Back</a>
        <h1>Student Services</h1>
    </div>
    
    <div data-role="content">
	    <ul data-role="listview" data-theme="c">
			
			<li class="vars" id="twentyfirst" onclick="showInfo(this, juniper)">
				<a href="#home" data-direction="reverse">21st Century</a></li>
			
			<li class="vars" id="academic" onclick="showInfo(this, juniper)">
				<a href="#home" data-direction="reverse">Academic Affairs</a></li>
			
			<li class="vars" id="administrative" onclick="showInfo(this, juniper)">
				<a href="#home" data-direction="reverse">Administrative Offices</a></li>
			
			<li class="vars" id="admissions" onclick="showInfo(this, juniper)">
				<a href="#home" data-direction="reverse">Admissions and Records</a></li>
			
			<li class="vars" id="bridges" onclick="showInfo(this, mariposa)">
				<a href="#home" data-direction="reverse">Bridges</a></li>
			
			<li class="vars" id="business0" onclick="showInfo(this, juniper)">
				<a href="#home" data-direction="reverse">Business Office</a></li>
			
			<li class="vars" id="calworks" onclick="showInfo(this, juniper)">
				<a href="#home" data-direction="reverse">CalWorks/GAIN</a></li>
			
			<li class="vars" id="career" onclick="showInfo(this, juniper)">
				<a href="#home" data-direction="reverse">Career Center</a></li>
			
			<li class="vars" id="compliance" onclick="showInfo(this, juniper)">
				<a href="#home" data-direction="reverse">Compliance Office</a></li>
			
			<li class="vars" id="counseling" onclick="showInfo(this, juniper)">
				<a href="#home" data-direction="reverse">Counseling Center</a></li>
			
			<li class="vars" id="eops" onclick="showInfo(this, juniper)">
				<a href="#home" data-direction="reverse">EOPS/CARE</a></li>
			
			<li class="vars" id="financial" onclick="showInfo(this, juniper)">
				<a href="#home" data-direction="reverse">Financial Aid</a></li>
			
			<li class="vars" id="human" onclick="showInfo(this, juniper)">
				<a href="#home" data-direction="reverse">Human Resources</a></li>
			
			<li class="vars" id="information" onclick="showInfo(this, juniper)">
				<a href="#home" data-direction="reverse">Information Center</a></li>
			
			<li class="vars" id="international" onclick="showInfo(this, juniper)">
				<a href="#home" data-direction="reverse">International Student Center</a></li>
				
			<li class="vars" id="matriculation" onclick="showInfo(this, juniper)">
				<a href="#home" data-direction="reverse">Matriculation</a></li>
			
			<li class="vars" id="president" onclick="showInfo(this, juniper)">
				<a href="#home" data-direction="reverse">President&#39s Office</a></li>
			
			<li class="vars" id="publicR" onclick="showInfo(this, juniper)">
				<a href="#home" data-direction="reverse">Public Relations</a></li>
			
			<li class="vars" id="puente" onclick="showInfo(this, juniper)">
				<a href="#home" data-direction="reverse">PUENTE</a></li>
			
			<li class="vars" id="studentS" onclick="showInfo(this, juniper)">
				<a href="#home" data-direction="reverse">Student Services</a></li>
			
			<li class="vars" id="umoja" onclick="showInfo(this, juniper)">
				<a href="#home" data-direction="reverse">UMOJA</a></li>
			
			<li class="vars" id="university" onclick="showInfo(this, juniper)">
				<a href="#home" data-direction="reverse">University Transfer Center</a></li>
			
			<li class="vars" id="workforce" onclick="showInfo(this, juniper)">
				<a href="#home" data-direction="reverse">Workforce and Econ. Dev.</a></li>
			
        </ul>
    </div>
</div> <!--end page-->


<div data-role="page" id="news">    
    
    <div data-role="header" data-theme="a">
    	<a href="#home" data-icon="plus" class="ui-btn-left" data-direction="reverse">Back</a>
        <h1>Campus News</h1>
    </div>
    
    <div data-role="content">
		<ul data-role="listview" data-theme="c">
    		<li><a href="#newsC" onclick="news('fb')">Facebook</a></li>
			<li><a href="#newsC" onclick="news('cw')">College Website</a></li>
	        </ul>
    </div>
</div> <!--end page-->

<div data-role="page" id="newsC">    
    
    <div data-role="header" data-theme="a">
    	<a href="#home" data-icon="plus" class="ui-btn-left" data-direction="reverse">Back</a>
        <h1>Campus News</h1>
    </div>
    
    <div data-role="content">
	<div id="msg">
		<h2>News</h2>
		<p>Loading...</p>
	</div>
    </div>
</div> <!--end page-->






<script src="http://maps.google.com/maps/api/js?sensor=true"></script>

<script>

// coordinates of each building (duh)
var aspen = new google.maps.LatLng(34.029662, -118.270534);	
var cedar = new google.maps.LatLng(34.031845, -118.269332);
var cypress = new google.maps.LatLng(34.030615, -118.270424);
var juniper = new google.maps.LatLng(34.030404, -118.270094);
var laurel = new google.maps.LatLng(34.030124, -118.272438);
var magnolia = new google.maps.LatLng(34.032561, -118.269745);
var mariposa = new google.maps.LatLng(34.031464, -118.270633);
var oak = new google.maps.LatLng(34.032618, -118.270936);
var sage = new google.maps.LatLng(34.032523, -118.269038);
var sequoia = new google.maps.LatLng(34.031096, -118.271770);
var willow = new google.maps.LatLng(34.030538, -118.272079);

// stores the content that should be displayed on the infoWindow
var buildings = {
	
	
	aspen: "<strong>Aspen Hall: AH</strong> <br />Former TE-building",
	cedar: "<strong>Cedar Hall: CH</strong> <br />Former K-building",
	cypress: "<strong>Cypress Hall: CY</strong> <br />Former D-building",
	juniper: "<strong>Juniper Hall: JH</strong> <br />Former ST-building",
	laurel: "<strong>Laurel Hall: JH</strong> <br />Former G-Gym",
	magnolia: "<strong>Magnolia Hall: MH</strong> <br />Former LRC-building",
	mariposa: "<strong>Mariposa Hall: MA</strong> <br />Former A-building",
	oak: "<strong>Oak Hall: OH</strong> <br />Former F-building",
	sage: "<strong>Sage Hall: SH</strong> <br />Former H-building",
	sequoia: "<strong>Sequoia Hall: SQ</strong> <br />Former B-building",
	willow: "<strong>Willow Hall: WH</strong> <br />Former J-building",
	
	
	
	administration:"<strong>Aspen Hall</strong> <br />Administration of Justice",
	
	behavioral:"<strong>Aspen Hall</strong>  <a href='http://college.lattc.edu/bss/' target='_new'> <br />Behavioral and Social Sciences </a><br /> AH-516 - <a href='tel:+12137635513'>213-763-5513 </a> ",
	
	business:"<strong>Cedar Hall</strong> <a href='http://college.lattc.edu/businessadmin/' target='_new'> <br />Business, CIS, CAOT <br />CH-225 - <a href='tel:+12137637252'>213-763-7252 </a> ",
	
	community:"<strong>Cedar Hall</strong> <br/><a href='http://college.lattc.edu/ced/' target='_new'>Community and Economic Development</a><br/>CH-203F - <a href='tel:+12137633757'>213-763-3757 </a> ",
	
	CDM: "<strong>Sequoia Hall</strong> <br /> <a href='http://college.lattc.edu/cdm/' target='_new'> Construction Design and Manufacturing</a> <br/>SH-118 - <a href='tel:+12137633700'>213-763-3700 </a> ",
	
	cosmetology:"<strong>Magnolia Hall</strong> <br/> <a href='http://college.lattc.edu/cosmetology/' target='_new'> Cosmetology </a><br/>MH-241 - <a href='tel:+12137637133'>213-763-7133 </a> ",
		
	culinary:"<strong>Sage Hall</strong> <br /> <a href='http://college.lattc.edu/culinaryarts/' target='_new'>	Culinary Arts</a><br />SH-199 - <a href='tel:+12137637331'>213-763-7331 </a> ",
	
	design: "<strong>Cypress Hall</strong> <br/> <a href='http://college.lattc.edu/design/' target='_new'> Design and Media Arts</a> <br/>CH-218 - <a href='tel:+12137633640'>213-763-3640 </a> ",
	
	electronics: "<strong>Cedar Hall</strong> <br /><a href='http://college.lattc.edu/electronics/' target='_new'>Electronics and Computer Technology</a> br />CH-325 - <a href='tel:+12137633782'>213-763-3782 </a> ",
		
	english: "<strong>Aspen Hall</strong> <br /><a href='http://college.lattc.edu/english/' target='_new'>English</a> <br />AH 515 - <a href='tel:+12137633929'>213-763-3929 </a> ",
		
	labor: "<strong>Mariposa Hall</strong> <br /><a href='http://college.lattc.edu/laborcenter/' target='_new'>Labor Studies</a> <br />MA Basement  - <a href='tel:+12137637129'>213-763-7129 </a> ",
		
	learning: "<strong>Aspen Hall</strong> <br /><a href='http://college.lattc.edu/academicconnections/' target='_new'>Learning Skills (Academic Connections)</a> <br /> MA-109 - <a href='tel:+12137633738'>213-763-3738 </a> ",
		
	library: "<strong>Mariposa Hall</strong> <br /><a href='http://college.lattc.edu/library/' target='_new'>Library Science</a> <br />MA 3rd Floor - <a href='tel:+12137633950'>213-763-3950 </a> ",
	
	language: "<strong>Oak Hall</strong> <br /><a href='http://college.lattc.edu/culinaryarts/' target='_new'>Language Arts</a> <br />AH 5th Floor - <a href='tel:+12137633923'>213-763-3923 </a> ",
		
	mathematics: "<strong>Aspen Hall</strong> <br /><a href='http://college.lattc.edu/math/' target='_new'>Mathematics</a> <br />AH-506 - <a href='tel:+12137637330'>213-763-7330 </a> ",
		
	noncredit: "<strong>Mariposa Hall</strong> <br /><a href='http://college.lattc.edu/academicconnections/' target='_new'>Academic Connections</a> <br />MA-109 - <a href='tel:+12137633738'>213-763-3738 </a> ",
		
	nursing: "<strong>Magnolia Hall</strong> <br /><a href='http://college.lattc.edu/alliedhealth/' target='_new'>Nursing and Allied Health</a> <br />MH-165 - <a href='tel:+12137637170'>213-763-7170 </a> ",
		
	physical: "<strong>Laurel Gym</strong> <br /><a href='http://college.lattc.edu/physed/' target='_new'>Kinesiology</a> <br />LG-212 - <a href='tel:+12137633726'>213-763-3726 </a> ",
		
	science: "<strong>Cedar Hall</strong> <br /><a href='http://college.lattc.edu/science/' target='_new'>Science</a> <br />CH-405 - <a href='tel:+12137637295'>213-763-7295 </a> ",
	
	transportation: "<strong>Oak Hall</strong> <br /><a href='http://college.lattc.edu/transportation/' target='_new'>Transportation</a> <br />OH-114 - <a href='tel:+12137633900'>213-763-3900 </a> ",
	
	
	
	
	twentyfirst:"<strong>Juniper Hall</strong>  <a href='http://college.lattc.edu/21stcentury/' target='_new'> <br />21st Century </a><br /> JH-320 - <a href='tel:+12137635510'>213-763-5510</a>",
	
	academic:"<strong>Juniper Hall</strong>  <a href='http://college.lattc.edu/academicaffairs/' target='_new'> <br />Academic Affairs</a> <br /> JH-320 - <a href='tel:+12137635510'>213-763-5510</a>",
	
	administrative: "<strong>Juniper Hall </strong> <br /><a href='http://college.lattc.edu/administration/' target='_new'>Administrative Offices</a> <br />JH-532  - <a href='tel:+12137637040'>213-763-7040</a>",
	
	admissions: "<strong>Juniper Hall </strong> <br /><a href='http://college.lattc.edu/admissions/' target='_new'>Admissions and Records</a> <br />JH-118 - <a href='tel:+12137635300'>213-763-5300 </a>",
	
	business0: "<strong>Juniper Hall </strong> <br /><a href='http://college.lattc.edu/business/' target='_new'>Business Office</a> <br />JH-109 - <a href='tel:+12137637225'>213-763-7225 </a>",
	
	bridges: "<strong>Mariposa Hall </strong> <br /><a href='http://college.lattc.edu/bridges/' target='_new'>Bridges to Success</a> <br />MA-105 - <a href='tel:+12137635560'>213-763-5560 </a>",
	
	calworks: "<strong>Juniper Hall </strong> <br /><a href='http://college.lattc.edu/gain/' target='_new'>CalWorks/GAIN</a> <br />JH-403 - <a href='tel:+12137635994'>213-763-5994 </a>",
	
	career: "<strong>Juniper Hall </strong> <br /><a href='http://college.lattc.edu/careercenter/' target='_new'>Career Center</a> <br />JH-415 - <a href='tel:+12137637104'>213-763-7104 </a>",
	
	compliance: "<strong>Juniper Hall </strong> <br /><a href='http://college.lattc.edu/compliance/' target='_new'>Compliance Office</a> <br />JH- 523 - <a href='tel:+12137632317'>213-891-2317 </a>",
	
	counseling: "<strong>Juniper Hall </strong> <br /><a href='http://college.lattc.edu/counseling/' target='_new'>Counseling Center</a> <br />JH-416 - <a href='tel:+12137637354'> 213-763-7354 </a>",
	
	eops: "<strong>Juniper Hall </strong> <br /><a href='http://college.lattc.edu/eops/' target='_new'>EOPS/CARE</a> <br />JH-205 - <a href='tel:+12137637098'>213-763-7098 </a>",
	
	financial: "<strong>Juniper Hall </strong> <br /><a href='http://college.lattc.edu/financialaid/' target='_new'>Financial Aid</a> <br />JH-214 - <a href='tel:+12137637082'>213-763-7082 </a>",
	
	human: "<strong>Juniper Hall </strong> <br /><a href='http://college.lattc.edu/payroll/' target='_new'>Human Resources (Personnel)</a> <br />JH-429 - <a href='tel:+12137637275'>213-763-7275 </a>",
	
	information: "<strong>Juniper Hall </strong> <br /><a href='http://college.lattc.edu/sic/' target='_new'>Student Information Center</a> <br />JH Lobby - <a href='tel:+12137635337'>213-763-5337 </a>",
	
	international: "<strong>Juniper Hall </strong> <br /><a href='http://college.lattc.edu/isc/' target='_new'>International Student Center</a> <br />JH-316 - <a href='tel:+12137635345'>213-763-5345 </a>",
	
	matriculation: "<strong>Juniper Hall </strong> <br /><a href='http://college.lattc.edu/matriculation/' target='_new'>Matriculation</a> <br />JH-320 - <a href='tel:+12137635348'>213-763-5348 </a>",
	
	president: "<strong>Juniper Hall </strong> <br /><a href='http://college.lattc.edu/president/' target='_new'>President&#39s Office</a> <br />JH-542 - <a href='tel:+12137637052'>213-763 -7052 </a>",
	
	publicR: "<strong>Juniper Hall </strong> <br /><a href='http://college.lattc.edu/pr/' target='_new'>Public Relations</a> <br />JH-533 - <a href='tel:+12137637054'>213-763-7054 </a>",
	
	puente: "<strong>Juniper Hall </strong> <br /><a href='http://college.lattc.edu/puente/' target='_new'>PUENTE</a> <br />JH-413 <a href='tel:+12137633771'>213-763-3771 </a>",
	
	studentS: "<strong>Juniper Hall </strong> <br /><a href='http://college.lattc.edu/studentservices/' target='_new'>Student Services</a> <br />JH-512 - <a href='tel:+12137637078'>213-763-7078 </a>",
	
	umoja: "<strong>Juniper Hall </strong> <br /><a href='http://college.lattc.edu/umoja/' target='_new'>UMOJA</a> <br /> ",
	
	university: "<strong>Juniper Hall </strong> <br /><a href='http://college.lattc.edu/utc/' target='_new'>University Transfer Center</a> <br />JH-203 - <a href='tel:+12137637154'>213-763-7154 </a>",
	
	workforce: "<strong>Juniper Hall </strong> <br /><a href='http://college.lattc.edu/wed/' target='_new'>Workforce and Econ. Dev.</a> <br />JH-519 - <a href='tel:+12137635534'>213-763-5534 </a>",
	
};

var map;
var markers = [];
var marker = [];

function initialize() {
	
	var mapG = document.getElementById("mapG");
	var mapWin = document.getElementById("mapWin");
	var mapholder = document.getElementById("mapholder");
	
	mapG.style.width = window.innerWidth-20+"px";
	mapWin.style.width = window.innerWidth-20+"px";
	mapholder.style.width = window.innerWidth-20+"px";
	

	
	mapG.style.height = window.innerHeight - $("div:jqmData(role='header')").first().height() + "px";
	mapWin.style.height = window.innerHeight - $("div:jqmData(role='header')").first().height() + "px";
	mapholder.style.height = window.innerHeight - $("div:jqmData(role='header')").first().height() + "px";
	
	var mapOptions = {
		zoom: 17,
		center: mariposa
	}
	map = new google.maps.Map(document.getElementById("mapholder"), mapOptions);
}

// clears and displays information in the 'info' div. Calls addMarker
function showInfo(object, building) {
	
	addMarker(building, object.id);
}

var j=0;
var k=0;

// add marker for buildings
function addMarker(object, named) {
	
	
	// delete current markers
	for (var i = 0; i < markers.length; i++) {
		markers[i].setMap(null);
	}
	
	// create new marker
	markers.push(new google.maps.Marker({
		position: object,
		map: map,
		draggable: false,
		animation: google.maps.Animation.DROP
	}));
	
	//display cute infoWindow
	nameBuilding = buildings[named];
	
	var infowindowBuilding = new google.maps.InfoWindow({
		content: nameBuilding
	});
	
	infowindowBuilding.open(map, markers[j]);
	j++;
}

// get my location
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition,showError);
    } else { 
        alert("Geolocation is not supported by this browser.");}
}

// find current position
function showPosition(position) {

    mypos = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
    
	for (var i = 0; i < marker.length; i++) {
		marker[i].setMap(null);
	}

	marker.push(new google.maps.Marker({
		position: mypos,
		map: map,
		icon: 'images/blue_MarkerA.png',
		animation: google.maps.Animation.DROP
	}));
	
	
	// show silly message
	infowindow.open(map, marker[k]);
	k++;
}

// show silly message
var infowindow = new google.maps.InfoWindow({
	content:"You are here :D"
});

// display errors, if any
function showError(error) {
	switch(error.code) {
        case error.PERMISSION_DENIED:
            alert("User denied the request for Geolocation. Try again later");
            break;
        case error.POSITION_UNAVAILABLE:
            alert("Location information is unavailable.");
            break;
        case error.TIMEOUT:
            alert("The request to get user location timed out.");
            break;
        case error.UNKNOWN_ERROR:
            alert("An unknown error occurred.");
            break;
    }
}
google.maps.event.addDomListener(window,'load',initialize);


function news(num) {
	
	if (num == 'cw')
	{
		url = "https://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20rss%20where%20url%20%3D%20'http%3A%2F%2Fcollege.lattc.edu%2Fblog%2Fcategory%2Fnews%2Ffeed%2F'%20limit%2020&format=json&diagnostics=true&callback=";}	
	else if (num == 'fb')
	{	
		url = 'https://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20rss%20where%20url%3D%22https%3A%2F%2Fwww.facebook.com%2Ffeeds%2Fpage.php%3Fformat%3Drss20%26id%3D250330846189%22&format=json&diagnostics=true&callback='
	}
	
	$.getJSON(url, function(data){
		var items = data.query.results.item;  
		      var output = '';    
		      for(var i=0;i<items.length;i++){  
				  var title;
				  if (items[i].title === null)
				  {
					  title = "";
				  }
				  else
				  {
				  	title = items[i].title;
				  }
				var link = items[i].link;  
		        var desc = items[i].description; 
				var date = items[i].pubDate;
				var encod = items[i].encoded; 
		        output += "<a href='" + link + "'>"+title+"</a><br /> <div class='date'>" + date + "</div><div class='content'>" + desc + "</div><hr/>";  
		      }  
		      // Place news stories in div tag  
		      document.getElementById('msg').innerHTML = output; 
	});
}


</script>
