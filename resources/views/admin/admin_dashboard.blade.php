<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>SupcomJE - Dashboard </title>
	<script src="https://kit.fontawesome.com/f5f77ab04f.js" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap');

* {
	font-family: 'Open Sans', sans-serif;
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}

:root {
	--grey: #F1F0F6;
	--dark-grey: #8D8D8D;
	--light: #fff;
	--dark: #000;
	--green: #81D43A;
	--light-green: #E3FFCB;
	--blue: #1775F1;
	--light-blue: #D0E4FF;
	--dark-blue: #0C5FCD;
	--red: #FC3B56;
}

html {
	overflow-x: hidden;
}

body {
	background: var(--grey);
	overflow-x: hidden;
}

a {
	text-decoration: none;
}

li {
	list-style: none;
}

/* CONTENT */
#content {
	position: relative;
	width: calc(100% - 260px);
	left: 260px;
	transition: all .3s ease;
}
#sidebar.hide + #content {
	width: calc(100% - 60px);
	left: 60px;
}

/* MAIN */
main {
	width: 100%;
	padding: 24px 20px 20px 20px;
}
main .title {
	font-size: 28px;
	font-weight: 600;
	margin-bottom: 10px;
}
main .breadcrumbs {
	display: flex;
	grid-gap: 6px;
}
main .breadcrumbs li,
main .breadcrumbs li a {
	font-size: 14px;
}
main .breadcrumbs li a {
	color: var(--blue);
}
main .breadcrumbs li a.active,
main .breadcrumbs li.divider {
	color: var(--dark-grey);
	pointer-events: none;
}



main .info-data {
	margin-top: 36px;
	display: grid;
	grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
	grid-gap: 20px;
}
main .info-data .card {
	padding: 20px;
	border-radius: 10px;
	background: var(--light);
	box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;}
main .card .head {
	display: flex;
	justify-content: space-between;
	align-items: flex-start;
}
main .card .head h2 {
	font-size: 24px;
	font-weight: 600;
}
main .card .head p {
	font-size: 14px;
}
main .card .head .icon {
	font-size: 20px;
	color: var(--green);
}
main .card .head .icon.down {
	color: var(--red);
}
main .card .progress {
	display: block;
	margin-top: 24px;
	height: 10px;
	width: 100%;
	border-radius: 10px;
	background: var(--grey);
	overflow-y: hidden;
	position: relative;
	margin-bottom: 4px;
	
}
main .card .progress::before {
	content: '';
	position: absolute;
	top: 0;
	left: 0;
	height: 100%;
	background: var(--blue);
	width: var(--value);
}
main .card .label {
	font-size: 14px;
	font-weight: 700;
}




main .data {
	display: flex;
	grid-gap: 20px;
	margin-top: 20px;
	flex-wrap: wrap;
}
main .data .content-data {
	flex-grow: 1;
	flex-basis: 400px;
	padding: 20px;
	background: var(--light);
	border-radius: 10px;
	box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
}
main .data .content-data table {
  background: var(--light);
  border-radius: 10px;
  border-collapse: collapse;
  margin: 1em;
  width: 70vw;
}
main .data .content-data th {
  border-bottom: 1px solid #364043;
  color:var(--dark-blue);
  font-size: 0.85em;
  font-weight: 600;
  padding: 0.5em 1em;
  text-align: left;
}
main .data .content-data td {
  color: #4F5F64;
  font-weight: 400;
  padding: 0.65em 1em;
}
main .data .content-data tbody tr {
  transition: background 0.25s ease;
}
main .data .content-data tbody tr:hover {
  background: var(--grey);
}
main .data .content-data td:hover {
  color: black;
}
main .data .content-data-special{
	flex-grow: 1;
	flex-basis: 400px;
	padding: 20px;
	background: var(--light);
	border-radius: 10px;
	box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
	max-width: 35% ;
	min-width:35%;
}
main .content-data .head {
	display: flex;
	justify-content: space-between;
	align-items: center;
	margin-bottom: 24px;
}
main .content-data .head h3 {
	font-size: 20px;
	font-weight: 600;
}
main .content-data .head .menu {
	position: relative;
	display: flex;
	justify-content: center;
	align-items: center;
}
main .content-data .head .menu .icon {
	cursor: pointer;
}
main .content-data .head .menu-link {
	position: absolute;
	top: calc(100% + 10px);
	right: 0;
	width: 140px;
	background: var(--light);
	border-radius: 10px;
	box-shadow: 4px 4px 16px rgba(0, 0, 0, .1);
	padding: 10px 0;
	z-index: 100;
	opacity: 0;
	pointer-events: none;
	transition: all .3s ease;
}
main .content-data .head .menu-link.show {
	top: 100%;
	opacity: 1;
	pointer-events: visible;
}
main .content-data .head .menu-link a {
	display: block;
	padding: 6px 16px;
	font-size: 14px;
	color: var(--dark);
	transition: all .3s ease;
}
main .content-data .head .menu-link a:hover {
	background: var(--grey);
}
main .content-data .chart {
	width: 100%;
	max-width: 100%;
	overflow-x: auto;
	scrollbar-width: none;
}
main .content-data .chart::-webkit-scrollbar {
	display: none;
}

main .chat-box {
	width: 100%;
	max-height: 360px;
	overflow-y: auto;
	scrollbar-width: none;
}
main .chat-box::-webkit-scrollbar {
	display: none;
}
main .chat-box .day {
	text-align: center;
	margin-bottom: 10px;
}
main .chat-box .day span {
	display: inline-block;
	padding: 6px 12px;
	border-radius: 20px;
	background: var(--light-blue);
	color: var(--blue);
	font-size: 12px;
	font-weight: 600;
}
main .chat-box .msg img {
	width: 28px;
	height: 28px;
	border-radius: 50%;
	object-fit: cover;
}
main .chat-box .msg {
	display: flex;
	grid-gap: 6px;
	align-items: flex-start;
}
main .chat-box .profile .username {
	font-size: 14px;
	font-weight: 600;
	display: inline-block;
	margin-right: 6px;
}
main .chat-box .profile .time {
	font-size: 12px;
	color: var(--dark-grey);
}
main .chat-box .chat p {
	font-size: 14px;
	padding: 6px 10px;
	display: inline-block;
	max-width: 400px;
	line-height: 150%;
}
main .chat-box .msg:not(.me) .chat p {
	border-radius: 0 5px 5px 5px;
	background: var(--blue);
	color: var(--light);
}
main .chat-box .msg.me {
	justify-content: flex-end;
}
main .chat-box .msg.me .profile {
	text-align: right;
}
main .chat-box .msg.me p {
	background: var(--grey);
	border-radius: 5px 0 5px 5px;
}
main form {
	margin-top: 6px;
}
main .form-group {
	width: 100%;
	display: flex;
	grid-gap: 10px;
}
main .form-group input {
	flex-grow: 1;
	padding: 10px 16px;
	border-radius: 5px;
	outline: none;
	background: var(--grey);
	border: none;
	transition: all .3s ease;
	width: 100%;
}
main .form-group input:focus {
	box-shadow: 0 0 0 1px var(--blue), 0 0 0 4px var(--light-blue);
}
main .btn-send {
	padding: 0 16px;
	background: var(--blue);
	border-radius: 5px;
	color: var(--light);
	cursor: pointer;
	border: none;
	transition: all .3s ease;
}
main .btn-send:hover {
	background: var(--dark-blue);
}


main .btn-upgrade {
	font-size: 13px;
	display: flex;
	justify-content: center;
	align-items: center;
	padding: 8px ;
	color: var(--light);
	background: var(--blue);
	transition: all .3s ease;
	border-radius: 5px;
	font-weight: 600;
	margin-bottom: 20px;
	margin-left: 80%;
	width: 15%;	

}
main .btn-upgrade:hover {
	background: var(--dark-blue);	
}

/* MAIN */
/* CONTENT */






@media screen and (max-width: 768px) {
	#content {
		position: relative;
		width: calc(100% - 60px);
		transition: all .3s ease;
	}
	nav .nav-link,
	nav .divider {
		display: none;
	}
	
}
@media screen and (max-width: 950px) {
	main .data .content-data-special{
	flex-grow: 1;
	flex-basis: 400px;
	padding: 20px;
	background: var(--light);
	border-radius: 10px;
	box-shadow: 4px 4px 16px rgba(0, 0, 0, .1);
	min-width: 100%;
}
}
    </style>
</head>
<body>
	
	
	<!-- SIDEBAR -->
	@include('sidebar')
	<!-- SIDEBAR -->

	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		@include('navbar')
		<!-- NAVBAR -->
		
		<!-- MAIN -->
		<main>
			<h1 class="title">Dashboard</h1>
			<ul class="breadcrumbs">
				<li><a href="#">Home</a></li>
				<li class="divider">/</li>
				<li><a href="#" class="active">Dashboard</a></li>
			</ul>
			<div class="info-data">
			<div class="card">
					<div class="head">
						<div>
							<h2>1500</h2>
							<p>Scheduled task completion rate</p>
						</div>
						<i class='bx bx-trending-up icon' ></i>
					</div>
					<span class="progress" data-value="20%"></span>
					<span class="label">{{$avg}} </span>
				</div>
				<div class="card">
					<div class="head">
						<div>
							<h2>234</h2>
							<p>Skill Proficiency Level</p>
						</div>
						<i class='bx bx-trending-down icon down' ></i>
					</div>
					<span class="progress" data-value="{{$avg1}}"></span>
					<span class="label">{{$avg1}}</span>
				</div>
				<div class="card">
					<div class="head">
						<div>
							<h2>465</h2>
							<p>Number of external projects</p>
						</div>
						<i class='bx bx-trending-up icon' ></i>
					</div>
					<span class="progress" data-value="{{$sum}}"></span>
					<span class="label">{{$sum}}</span>
				</div>
				<div class="card">
					<div class="head">
						<div>
							<h2>235</h2>
							<p>Number of internal projects</p>
						</div>
						<i class='bx bx-trending-up icon' ></i>
					</div>
					<span class="progress" data-value="{{$sum1}}"></span>
					<span class="label">{{$sum1}}</span>
				</div>						
			</div>
			<div class="data">
				<div style="width: 55%" class="content-data">
				
						<div class="wrapper">
							<a href="{{ route('admin.edit.barchart') }}" class="btn-upgrade">Edit</a>
						</div>
					
					@include('bar-chart', ['data' => $barChartData])
					
					

				</div>
                <div class="content-data-special">
					<div class="wrapper">
						<a href="{{ route('admin.edit.piechart') }}" class="btn-upgrade">Edit</a>
					</div>
					@include('pie-chart', ['data' => $pieChartData])

				</div>
				<div style="width: 20%" class="content-data">
					<div class="wrapper">
						<a href="{{ route('admin.edit.externe') }}" class="btn-upgrade">Edit</a>
					</div>
					<canvas id="myChart0"></canvas>
					<script>
						Chart.defaults.global.title.display = true;
						Chart.defaults.global.title.text = "Nombre de projets externes";
						Chart.defaults.global.elements.point.radius = 10;
					</script>
				
					<script>
						var ctx = document.getElementById('myChart0').getContext('2d');
				
						var chart = new Chart(ctx, {
							type: 'line',
							data: {
								labels: {!! json_encode($anneesExterne) !!},
								datasets: [{
									label: 'Nombre de projets externes',
									backgroundColor: 'rgba(106, 18, 137, 0.25)',
									borderColor: 'rgba(106, 18, 137)',
									data: {!! json_encode($nbresExterne) !!},
								}]
							},
							options: {
								title: {
									display: true,
									text: 'Les projets externes'
								},
								plugins: {
									title: {
										display: true,
										text: 'Nombre de projets externes'
									},
									legend: {
										display: true,
										position: 'top'
									}
								},
								animations: {
									tension: {
										duration: 2000,
										easing: 'linear',
										from: 1,
										to: 0,
										loop: true,
									}
								},
								elements: {
									point: {
										radius: 5,
										backgroundColor: 'rgba(0, 0, 255, 0.5)'
									}
								}
							}
						});
					</script>
				</div>
				
								
								<div style="width: 20%" class="content-data">
									<div class="wrapper">
										<a href="{{ route('admin.edit.mobile') }}" class="btn-upgrade">Edit</a>
									</div>
					<canvas id="myChart00"></canvas>
					<script>
						Chart.defaults.global.title.display = true;
						Chart.defaults.global.title.text = "Nombre de projets externes";
						Chart.defaults.global.elements.point.radius = 10;
					</script>
				
					<script>
						var ctx = document.getElementById('myChart00').getContext('2d');
				
						var chart = new Chart(ctx, {
							type: 'line',
							data: {
								labels: {!! json_encode($anneesMobile) !!},
								datasets: [{
									label: 'Nombre de projets mobile',
									backgroundColor: 'rgba(18, 31, 137, 0.25)',
									borderColor: 'rgba(18, 31, 137)',
									data: {!! json_encode($nbresMobile) !!},
								}]
							},
							options: {
								title: {
									display: true,
									text: 'Les projets mobiles'
								},
								plugins: {
									title: {
										display: true,
										text: 'Les projets mobiles'
									},
									legend: {
										display: true,
										position: 'top'
									}
								},
								animations: {
									tension: {
										duration: 2000,
										easing: 'linear',
										from: 1,
										to: 0,
										loop: true,
									}
								},
								elements: {
									point: {
										radius: 5,
										backgroundColor: 'rgba(0, 0, 255, 0.5)'
									}
								}
							}
						});
					</script>
				</div>
				<div style="width: 55%" class="content-data">
					<h1 style='padding:0 0 2% 2%;' class='title' >Latest Projects</h1>
					<table>
						<thead>
						  <tr>
							<th>ID
							<th>Name
							<th>Date
							<th>Pole
							<th>Project Link
							<th>Type ( Externe/Mobile )
						</thead>
						<tbody>
							@forEach($projects as $project)

						  <tr>
							<td>{{ $project->id }}
							<td>{{ $project->name }}
							<td>{{ $project->date }}
							<td>{{ $project->pole }}
							<td>{{ $project->lien }}
							<td>{{ $project->type }}
								@endforeach
						</tbody>
					  </table>
				
			   </div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->

	<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
	<script>
        // SIDEBAR DROPDOWN
const allDropdown = document.querySelectorAll('#sidebar .side-dropdown');
const sidebar = document.getElementById('sidebar');

allDropdown.forEach(item=> {
	const a = item.parentElement.querySelector('a:first-child');
	a.addEventListener('click', function (e) {
		e.preventDefault();

		if(!this.classList.contains('active')) {
			allDropdown.forEach(i=> {
				const aLink = i.parentElement.querySelector('a:first-child');

				aLink.classList.remove('active');
				i.classList.remove('show');
			})
		}

		this.classList.toggle('active');
		item.classList.toggle('show');
	})
})





// SIDEBAR COLLAPSE
const toggleSidebar = document.querySelector('nav .toggle-sidebar');
const allSideDivider = document.querySelectorAll('#sidebar .divider');

if(sidebar.classList.contains('hide')) {
	allSideDivider.forEach(item=> {
		item.textContent = '-'
	})
	allDropdown.forEach(item=> {
		const a = item.parentElement.querySelector('a:first-child');
		a.classList.remove('active');
		item.classList.remove('show');
	})
} else {
	allSideDivider.forEach(item=> {
		item.textContent = item.dataset.text;
	})
}

toggleSidebar.addEventListener('click', function () {
	sidebar.classList.toggle('hide');

	if(sidebar.classList.contains('hide')) {
		allSideDivider.forEach(item=> {
			item.textContent = '-'
		})

		allDropdown.forEach(item=> {
			const a = item.parentElement.querySelector('a:first-child');
			a.classList.remove('active');
			item.classList.remove('show');
		})
	} else {
		allSideDivider.forEach(item=> {
			item.textContent = item.dataset.text;
		})
	}
})




sidebar.addEventListener('mouseleave', function () {
	if(this.classList.contains('hide')) {
		allDropdown.forEach(item=> {
			const a = item.parentElement.querySelector('a:first-child');
			a.classList.remove('active');
			item.classList.remove('show');
		})
		allSideDivider.forEach(item=> {
			item.textContent = '-'
		})
	}
})



sidebar.addEventListener('mouseenter', function () {
	if(this.classList.contains('hide')) {
		allDropdown.forEach(item=> {
			const a = item.parentElement.querySelector('a:first-child');
			a.classList.remove('active');
			item.classList.remove('show');
		})
		allSideDivider.forEach(item=> {
			item.textContent = item.dataset.text;
		})
	}
})




// PROFILE DROPDOWN
const profile = document.querySelector('nav .profile');
const imgProfile = profile.querySelector('img');
const dropdownProfile = profile.querySelector('.profile-link');

imgProfile.addEventListener('click', function () {
	dropdownProfile.classList.toggle('show');
})




// MENU
const allMenu = document.querySelectorAll('main .content-data .head .menu');

allMenu.forEach(item=> {
	const icon = item.querySelector('.icon');
	const menuLink = item.querySelector('.menu-link');

	icon.addEventListener('click', function () {
		menuLink.classList.toggle('show');
	})
})



window.addEventListener('click', function (e) {
	if(e.target !== imgProfile) {
		if(e.target !== dropdownProfile) {
			if(dropdownProfile.classList.contains('show')) {
				dropdownProfile.classList.remove('show');
			}
		}
	}

	allMenu.forEach(item=> {
		const icon = item.querySelector('.icon');
		const menuLink = item.querySelector('.menu-link');

		if(e.target !== icon) {
			if(e.target !== menuLink) {
				if (menuLink.classList.contains('show')) {
					menuLink.classList.remove('show')
				}
			}
		}
	})
})





// PROGRESSBAR

allProgress = document.querySelectorAll('main .card .progress');

allProgress.forEach(item=> {
	item.style.setProperty('--value', item.dataset.value)
})






// APEXCHART
var options = {
  series: [{
  name: 'series1',
  data: [31, 40, 28, 51, 42, 109, 100]
}, {
  name: 'series2',
  data: [11, 32, 45, 32, 34, 52, 41]
}],
  chart: {
  height: 350,
  type: 'area'
},
dataLabels: {
  enabled: false
},
stroke: {
  curve: 'smooth'
},
xaxis: {
  type: 'datetime',
  categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
},
tooltip: {
  x: {
    format: 'dd/MM/yy HH:mm'
  },
},
};

var chart = new ApexCharts(document.querySelector("#chart"), options);
chart.render();
    </script>
</body>
</html>