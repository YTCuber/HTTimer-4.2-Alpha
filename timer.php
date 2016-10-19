<!-- Auto-generated file, do not Edit! -->
<!--
This file is part of the source code of HTTimer 4.2 Alpha.
You are not permitted to use any part of the code you are currently watching.
-->
<!doctype html>
<html lang="en">
	<head>
		<title>HTTimer 4.2.0 Alpha</title>
		<link rel="stylesheet" type="text/css" href="css/timercss.css"            media="screen" />
		<link rel="stylesheet" type="text/css" href="css/cubing-icons.css"        media="all"    />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"       media="all"    />
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css" media="all"    />
		<script src="js/mathlib.js"></script>
		<script src="js/jquery.min.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script src="js/metronome.js"></script>
		<script src="js/interact.js"></script>
		<script src="js/mousetrap.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.min.js"></script>
		<script>window.modules={};window.TNOODLE_ENV={"TNOODLE_333_MIN_DISTANCE":"4"};</script>
		<script src="js/tnoodle.js"></script>
		<script>function puzzlesLoaded(puzzles){window.puzzles=puzzles;window.addEventListener("load",function(){/*tnoodlejs.getVersion()*/tnoodlejs.setLogLevel("FINEST");init()})}function newScramble(puzzle){var scram=puzzle.generateScramble();var maxWidth=0,maxHeight=0,svgText=tnoodlejs.scrambleToSvg(scram,puzzle,maxWidth,maxHeight);return scram}//newScramble(puzzles["222"]);</script>
		<script src="js/cube.js"></script>
		<script type="text/javascript" src="http://www.qqtimer.net/scramble_333_edit.js"></script>
		<script src="js/hutiscrambler.js"></script>
		<script src="js/squanPyraScrambler.js"></script>
		<script src="js/language.js"></script>
		<script src="js/alg.js"></script>
		<script src="js/alg_jison.js"></script>
		<script src="js/hutitimer.js"></script>
		<meta name="viewport"           content="width=device-width,initial-scale=1.0"/>
		<meta name="description"        content="HTTimer:the best cubing timer!"      />
		<meta name="keywords"           content="httimer,timer,cube timer,rubiks timer,multi stage timer,multistage timer,rubik's timer,rubik's cube timer,rubiks cube timer,rubix cube timer,javascript timer,rubiks,rubix,multi-stage,multistage, multi-step,multistep,breakdown, breakdowns"/>
		<meta name="resource-type"      content="document"/>
		<meta name="language"           content="English"/>
		<meta name="rating"             content="general"/>
		<meta name="robots"             content="all"/>
		<meta name="expires"            content="never"/>
		<meta name="revisit-after"      content="14 days"/>
		<meta name="distribution"       content="global"/>
		<meta http-equiv="Content-Type" content="text/html; iso-8859-1"/>
		<script>
		$(function(){
			$("#movable > div").draggable({handle:"div"});
		});
		</script>
	</head>
	<body>
		<!--
		Bootstrap Navigation
		-->
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" nohref="nohref">HT 4.2.0.256 Alpha</a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<?php
							$login=isset($_COOKIE['HTTimer-login']);
							if($login){
								echo "<li><a nohref='nohref'>Logged in as <b>".$_COOKIE['HTTimer-login']."</b></a></li>";
							}else{
							?>
							<li><a href="../login.php" target="_blank">Login</a></li>
							<?php } ?>
						<li><a nohref="nohref" class="scrambleop" onclick="show('scrambler')">Switch scrambler</a></li>
						<li class="dropdown">
							<a nohref="nohref" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Other <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a nohref="nohref" onclick="javascript:show('options');">Options</a></li>
								<li><a nohref="nohref" onclick="javascript:show('hilfe');">Help</a></li>
								<li role="separator" class="divider"></li>
								<li><a nohref="nohref" onclick="javascript:ziel.display();">Goals</a></li>
								<li><a nohref="nohref" onclick="javascript:show('musik');">Music</a></li>
								<li><a nohref="nohref" onclick="javascript:takeabreak();">Take a break</a></li>
								<li role="separator" class="divider"></li>
								<li><a nohref="nohref" onclick="javascript:importCode();">Import</a></li>
								<li><a nohref="nohref" onclick="javascript:exportCode();">Export</a></li>
								<li><a nohref="nohref" onclick="javascript:generateExport();">Generate Export</a></li>
								<li role="separator" class="divider"></li>
								<li><a nohref="nohref">AlgSets (disabled)</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a nohref="nohref" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Layout <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a nohref="nohref" class="edit">Edit</a></li>
								<li><a nohref="nohref" onclick="javascript:show('codeeditor');">Edit Code <span class="badge">ADVANCED</span></a></li>
							</ul>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a nohref="nohref" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Help <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a nohref="nohref" onclick="javascript:show('hilfe');">Open Help</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="http://htsoftware.boards.net" target="_blank">Submit bug</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<div id="remove"></div>
		<div id="add">
			<div class="times"></div>
			<div class="scramble"></div>
			<div class="next">Next &gt;</div>
			<div class="time">0.000</div>
			<div class="scrambleimg" id="scrambleImage">Scramble image not available.</div>
			<div class="sessions"><div class="sessionlist"></div><div class="sessionavg"></div></div>
			<div class="graph-progressio"><canvas class="graph-progression" width="300" height="200"></canvas></div>
			<div class="metronome">
				<br />
				<div class="beatIndicatorContainer">
					<div class="beatIndicator" class="beep">1</div>
				</div>

				<div class="settingsContainer">
					<div class="settings">
						<div>
							<label>Beats Per Minute:</label>
							<input type="text" name="bpm" class="bpm" value="100" />
							<input type="button" name="bpmPlus" class="bpmPlus" class="plusMinus" value="+" />
							<input type="button" name="bpmMinus" class="bpmMinus" class="plusMinus" value="-" />
							<input type="button" name="start" class="start" value="start" />
						</div>
						<div>
							<label>Beats Per Bar:</label>
							<input type="text" name="bpb" class="bpb" value="4" />
							<input type="button" name="bpbPlus" class="bpbPlus" class="plusMinus" value="+" />
							<input type="button" name="bpbMinus" class="bpbMinus" class="plusMinus" value="-" />
							<input type="button" name="stop" class="stop" value="stop" />
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="movable">
			<div class="vertical-line">&nbsp;</div>
			<div class="horizontal-line">&nbsp;</div>
			<div class="scramble"></div>
			<div class="next">Next &gt;</div>
			<div class="times">
				<table class="table table-striped table-condensed table-hover">
					<tbody>
						<tr>
							<td colspan="3">Solve Times</td>
						</tr>
						<tr>
							<td>1.:</td>
							<td>Your first time</td>
							<td><select><option>OK</option><option>+2</option><option>+4</option><option>DNF</option><option>Delete</option></select></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="sessions">
				<div class="sessionavg"></div>	
			</div>
			<div class="sessionlist"></div>

			<div class="time" onclick="var a=prompt('Set time');if(a){timer.zeit=Math.floor(+new Date()-a-80);stop();}">
				0.000
			</div>
			<div class="goal-time" style="visibility:hidden">
				Goal Time
			</div>
			<div class="scrambleimg">
				Scramble image not available.
			</div>
		</div>
		<div id="footer">Made by YTCuber.</div>
		
		<div class="audioHide">
        	<audio id="beepOne" src="http://deejdesigns.com/experiment/metronome/sound/beep-7.wav" preload="auto" controls="controls">Get a better standards compliant browser!   </audio>
        	<audio id="beepTwo" src="http://deejdesigns.com/experiment/metronome/sound/beep-8.wav" preload="auto" controls="controls"><!--displaying the warning once is enough--></audio>
    	</div>
		
		<div class="options" id="flagtime"    style="visibility:hidden;"></div>
		<div class="options" id="timeDetails" style="visibility:hidden;"></div>
		<div class="options" id="export"      style="visibility:hidden;"></div>
		<div class="options" id="export"      style="visibility:hidden;"></div>
		<div class="options" id="relays"      style="visibility:hidden;"></div>
		<div class="options" id="ziele"       style="visibility:hidden;"></div>
		<div class="options" id="algSets"     style="visibility:hidden;"></div>
		<div class="options" id="codeeditor"  style="visibility:hidden;">
			<div class="row">
				<div class="col-md-9"><textarea id="code-editor" style="width:100%;height:100%;box-sizing: border-box;"></textarea><button onclick="hide('codeeditor');codeeditor();" class="btn btn-default">Apply</button></div>
				<div class="col-md-3">
					<h4>Advanced Code Editor</h4>
					<div class="alert alert-danger alert-dismissable" role="alert">Code at your own Risk. I am not responsible for data loss or computer crashes.</div>
					Here you can write your own Layout and Style it using HTML and CSS (no JS). To insert a timer element, use the following table:<br>
					<table class="table table-striped table-condensed">
						<tr>
							<td>You write</td><td>It converts to</td>
						</tr>
						<tr>
							<td>SCRAMBLE</td><td>Scramble</td>
						</tr>
						<tr>
							<td>NEXT</td><td>Next Scramble Button</td>
						</tr>
						<tr>
							<td>TIME</td><td>The big display with the current time</td>
						</tr>
						<tr>
							<td>TIMES</td><td>Your time history</td>
						</tr>
						<tr>
							<td>SESSIONAVG</td><td>Statistics of Single, Ao5, Ao12, Ao50, Ao100, Session mean and custom mean</td>
						</tr>
					</table>
					You can style these elements using the classes scramble-unstyled, next-unstyled, time-unstyled, times-unstyled and sessionavg-unstyled.<br/><br/>
					<button class="btn btn-default" onclick="loadCode('qqtimer');">Load QQTimer</button>
					<button class="btn btn-default" onclick="loadCode('ppt');">Load PrismaPuzzleTimer</button>
					<button class="btn btn-default" onclick="loadCode('httimer');">Load HTTimer-old</button>
				</div>
			</div>
		</div>
		<div class="options" id="scrambler" style="visibility:hidden;">
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#scrambler1">WCA</a></li>
				<li><a data-toggle="tab" href="#scrambler2">Special NxNxN</a></li>
				<li><a data-toggle="tab" href="#scrambler4">Cuboids</a></li>
				<li><a data-toggle="tab" href="#scrambler5">Sonstige</a></li>
				<li><a data-toggle="tab" href="#scrambler3">Custom</a></li>
				<li><a onclick="javascript:hide('scrambler');hide('scrambler-sonstige');">back</a></li>
			</ul>

			<div class="tab-content">
				<div id="scrambler1" class="tab-pane fade in active">
					<div class="icons">
						<ul class="icons-list">
						 <li id="event-222" onclick="switchScrambler('2x2');">
						  <span class="cubing-icon event-222"></span>
						  <span>TNOODLE 2x2x2</span>
						 </li>
						 <li id="event-333" onclick="switchScrambler('3x3');">
						  <span class="cubing-icon event-333"></span>
						  <span>TNOODLE 3x3x3</span>
						 </li>
						 <li id="event-333bf" onclick="switchScrambler('3x3bld');">
						  <span class="cubing-icon event-333bf"></span>
						  <span>3x3x3 Blindfolded</span>
						 </li>
						 <li id="event-333fm" onclick="switchScrambler('FMC');">
						  <span class="cubing-icon event-333fm"></span>
						  <span>3x3x3&nbsp;Fewest&nbsp;Moves</span>
						 </li>
						 <li id="event-444" onclick="switchScrambler('4x4');">
						  <span class="cubing-icon event-444"></span>
						  <span>4x4x4</span>
						 </li>
						 <li id="event-444bf" onclick="switchScrambler('5x5bld');">
						  <span class="cubing-icon event-444bf"></span>
						  <span>4x4x4 Blindfolded</span>
						 </li>
						 <li id="event-555" onclick="switchScrambler('5x5');">
						  <span class="cubing-icon event-555"></span>
						  <span>5x5x5</span>
						 </li>
						 <li id="event-555bf" onclick="switchScrambler('5x5bld');">
						  <span class="cubing-icon event-555bf"></span>
						  <span>5x5x5 Blindfolded</span>
						 </li>
						 <li id="event-666" onclick="switchScrambler('6x6');">
						  <span class="cubing-icon event-666"></span>
						  <span>6x6x6</span>
						 </li>
						 <li id="event-777" onclick="switchScrambler('7x7');">
						  <span class="cubing-icon event-777"></span>
						  <span>7x7x7</span>
						 </li>
						 <li id="event-clock" onclick="switchScrambler('clock');">
						  <span class="cubing-icon event-clock"></span>
						  <span>Clock</span>
						 </li>
						 <li id="event-minx" onclick="switchScrambler('mega');">
						  <span class="cubing-icon event-minx"></span>
						  <span>Megaminx</span>
						 </li>
						 <li id="event-pyram" onclick="switchScrambler('pyra');">
						  <span class="cubing-icon event-pyram"></span>
						  <span title="Random State Pyraminx">RS Pyraminx</span>
						 </li>
						  <li id="event-sq1" onclick="switchScrambler('square-1');">
						  <span class="cubing-icon event-sq1"></span>
						  <span>Square-1</span>
						 </li>
						 <li id="event-skewb" onclick="switchScrambler('skewb');">
						  <span class="cubing-icon event-skewb"></span>
						  <span>Skewb</span>
						 </li>
						</ul>
					</div>
				</div>
				<div id="scrambler2" class="tab-pane fade">
					<h3>Special NxNxN</h3>
					<div class="icons">
					<div class="row">
						<div class="col-md-4" onclick="switchScrambler('1x1');">1x1x1</div>
						<div class="col-md-4" onclick="switchScrambler('3x3ru');">3x3x3 &lt;RU&gt;</div>
						<div class="col-md-4" onclick="switchScrambler('4x4rruu');">4x4x4 &lt;RrUu&gt;</div>
						<div class="col-md-4" onclick="switchScrambler('2x2opt');">2x2x2 kurz</div>
						<div class="col-md-4" onclick="switchScrambler('3x3ruf');">3x3x3 &lt;RUF&gt;</div>
						<div class="col-md-4" onclick="switchScrambler('4x4sign');">4x4x4 SiGN</div>
						<div class="col-md-4" onclick="switchScrambler('2x2bld');">2x2x2 blind</div>
						<div class="col-md-4" onclick="switchScrambler('3x3rul');">3x3x3 &lt;RUL&gt;</div>
						<div class="col-md-4" onclick="switchScrambler('4x4sh');">4x4x4 kurz</div>
						<div class="col-md-4">&nbsp;</div>
						<div class="col-md-4" onclick="switchScrambler('3x3hco');" title="HCO=Half Center Orientation">3x3x3 HCO</div>
						<div class="col-md-4" onclick="switchScrambler('5x5sign');">5x5x5 SiGN</div>
						<div class="col-md-4">&nbsp;</div>
						<div class="col-md-4" onclick="switchScrambler('3x3lse');">3x3x3 LSE</div>
						<div class="col-md-4" onclick="switchScrambler('5x5sh');">5x5x5 kurz</div>
						<div class="col-md-4">&nbsp;</div>
						<div class="col-md-4" onclick="switchScrambler('3x3ll');">3x3x3 CFOP Last Layer</div>
						<div class="col-md-4">&nbsp;</div>
						<div class="col-md-4">&nbsp;</div>
						<div class="col-md-4" onclick="switchScrambler('3x3pll');">3x3x3 CFOP PLL</div>
						<div class="col-md-4">&nbsp;</div>
						<div class="col-md-4">&nbsp;</div>
						<div class="col-md-4" onclick="switchScrambler('3x3zbll');">3x3x3 ZBLL</div>
						<div class="col-md-4">&nbsp;</div>
						<div class="col-md-4">&nbsp;</div>
						<div class="col-md-4" onclick="switchScrambler('3x32gll');">3x3x3 2Gen Last Layer</div>
						<div class="col-md-4">&nbsp;</div>
						<div class="col-md-4">&nbsp;</div>
						<div class="col-md-4" onclick="switchScrambler('3x3zzls');">3x3x3 ZZ Last Slot</div>
						<div class="col-md-4">&nbsp;</div>
						<div class="col-md-4">&nbsp;</div>
						<div class="col-md-4" onclick="switchScrambler('3x3cmll');">3x3x3 CMLL</div>
					</div>
					</div>
				</div>
				<div id="scrambler4" class="tab-pane fade">
					<h3>Cuboids</h3>
					<div class="icons">
					<div class="row">
						<div class="col-md-4" onclick="switchScrambler('1x1');">1x1x1</div>
						<div class="col-md-4" onclick="switchScrambler('2x2x1');">2x2x1</div>
						<div class="col-md-4" onclick="switchScrambler('3x3x1');">3x3x1</div>
						<div class="col-md-4" onclick="switchScrambler('1x1x2');">1x1x2</div>
						<div class="col-md-4" onclick="switchScrambler('2x2');">2x2x2</div>
						<div class="col-md-4" onclick="switchScrambler('3x3x2');">3x3x2</div>
						<div class="col-md-4" onclick="switchScrambler('1x1x3');">1x1x3</div>
						<div class="col-md-4" onclick="switchScrambler('2x2x3');">2x2x3</div>
						<div class="col-md-4" onclick="switchScrambler('3x3x3');">3x3x3</div>
						<div class="col-md-4">&nbsp;</div>
						<div class="col-md-4">&nbsp;</div>
						<div class="col-md-4" onclick="switchScrambler('3x3x4');">3x3x4</div>
						<div class="col-md-4">&nbsp;</div>
						<div class="col-md-4">&nbsp;</div>
						<div class="col-md-4" onclick="switchScrambler('3x3x5');">3x3x5</div>
						<div class="col-md-4">&nbsp;</div>
						<div class="col-md-4">&nbsp;</div>
						<div class="col-md-4">&nbsp;</div>
						<div class="col-md-4" onclick="switchScrambler('1x2x3');">1x2x3</div>
					</div>
					</div>
				</div>
				<div id="scrambler5" class="tab-pane fade">
					<h3>Shapemods</h3>
					<div class="icons">
					<div class="row">
						<div class="col-md-4" onclick="switchScrambler('barrel');">Barrel Cube</div>
						<div class="col-md-4" onclick="switchScrambler('ghost');">Ghost Cube</div>
						<div class="col-md-4" onclick="switchScrambler('3x3co');">Fisher Cube</div>
					</div>
					</div>
					<h3>Sonstige</h3>
					<div class="icons">
					<div class="row">
						<div class="col-md-4" onclick="switchScrambler('heli');">Helicopter Cube</div>
						<div class="col-md-4" onclick="switchScrambler('helij');">Jumbled Helicopter Cube</div>
						<div class="col-md-4" onclick="switchScrambler('curvy');">Curvy Copter</div>
						<div class="col-md-4" onclick="switchScrambler('curvyj');">Jumbled Curvy Copter</div>
						<div class="col-md-4" onclick="switchScrambler('curvyp');">Curvy Copter Plus</div>
						<div class="col-md-4" onclick="switchScrambler('curvypj');">Jumbled Curvy Copter Plus</div>
						<div class="col-md-4" onclick="switchScrambler('curvypfj');">Fully Jumbled Curvy Copter Plus</div>
						<div class="col-md-4" onclick="switchScrambler('mixup3x3');">Mixup 3x3</div>
						<div class="col-md-4" onclick="switchScrambler('mixup4x4');">Mixup 4x4</div>
						<div class="col-md-4" onclick="switchScrambler('mpyra');">Master Pyraminx</div>
						<div class="col-md-4" onclick="switchScrambler('giga');">Gigaminx</div>
						<div class="col-md-4" onclick="switchScrambler('pyracrystal');">Pyraminx Crystal</div>
						<div class="col-md-4" onclick="switchScrambler('sq224');">Square 2x2x4</div>
						<div class="col-md-4" onclick="switchScrambler('dreidellim');">Dreidel LimCube</div>
						<div class="col-md-4" onclick="switchScrambler('square-2');">Square-2</div>
						<div class="col-md-4" onclick="switchScrambler('gear');">Gear Cube</div>
						<div class="col-md-4" onclick="switchScrambler('void');">Void Cube</div>
					</div>
					</div>
					<h3>Relays</h3>
					<div class="icons">
					<div class="row">
						<div class="col-md-4" onclick="switchScrambler('relay');">Relays</div>
						<li>Auswahl in Menü/Optionen/Sonstiges/Relays</div>
					</div>
					</div>
				<div id="scrambler3" class="tab-pane fade">
					<div class="btn btn-success btn-big" onclick="addCustomScrambler();">Add</div><br/>
					<div id="customScrambler"></div>
				</div>
			</div>
		<?php
		include("options_en.html");
		?>
		<noscript>Enable JavaScript to use this timer!</noscript>
		<script src="js/bottom.js"></script>
		<script>
		$('#movable > div').each(function(){
			$(this).prepend("<div class='handle'>Handle</div>");
		});
		$('.handle').toggle();
			
		$('.edit').on('click', function(){
			$("#movable").toggleClass("editActive");
			$('#movable > div').each(function(){
				$(this).toggleClass("resize");
				if($(this).find('.handle').length==0){
					$(this).prepend("<div class='handle' style='display:none'>Handle</div>");
				}
			});
			$('.handle').toggle();
			$("#add").toggle();//forget about remove here
		});
		
		$("#movable > div").on("dblclick",function(){
			if($("#movable").hasClass("editActive")){
				$(this).remove();
			}
		});
		$('#add>div').on('click',function(){
			var newElement = $(this).clone(true);
			newElement.unbind('click');
			$(newElement).addClass('resize');
			$(newElement).prepend("<div class='handle'>Handle</div>");
			$('div#movable').append(newElement);
			resizeStart();
		});
		
		function resizeStart(){
			interact('.resize')
			  .resizable({
				preserveAspectRatio: false,
				edges: { left: true, right: true, bottom: true, top: true }
			  })
			  .on('resizemove', function (event) {
				var target = event.target,
					x = (parseFloat(target.getAttribute('data-x')) || 0),
					y = (parseFloat(target.getAttribute('data-y')) || 0);

				// update the element's style
				target.style.width  = event.rect.width + 'px';
				target.style.height = event.rect.height + 'px';

				// translate when resizing from top or left edges
				x += event.deltaRect.left;
				y += event.deltaRect.top;

				target.style.webkitTransform = target.style.transform =
					'translate(' + x + 'px,' + y + 'px)';

				target.setAttribute('data-x', x);
				target.setAttribute('data-y', y);
			  });
			$("#movable > div").draggable({ handle: "div" });
			$("#movable > div").on("dblclick",function(){
				if($("#movable").hasClass("editActive")){
					$(this).remove();
				}
			});
		}
		resizeStart();
		</script>
	</body>
</html>