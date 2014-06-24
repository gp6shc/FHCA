<?php
/*
 * Template Name: Home
 * Description: Design of the home page
 */

get_header(); ?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory')?>/js/jquery.glide.min.js"></script>

<div class="slider">
	<ul class="slides">
		<li class="slide">
			<div class="box" style="background-image: url(<?php bloginfo('stylesheet_directory')?>/img/fhca_elderly_1.jpg);">
				
			</div>
		</li>
		<li class="slide">
			<div class="box" style="background-image: url(<?php bloginfo('stylesheet_directory')?>/img/fhca_elderly_2.jpg);">
				
			</div>
		</li>
		<li class="slide">
			<div class="box" style="background-image: url(<?php bloginfo('stylesheet_directory')?>/img/fhca_elderly_3.jpg);">
				
			</div>
		</li>
	</ul>
</div>		

<script>
    $(window).bind("load", function() {
    	$('.slider').glide({
    	    autoplay: 5000,
    	    arrowLeftText: '<i class="fa fa-chevron-left fa-5x"></i>',
    	    arrowRightText: '<i class="fa fa-chevron-right fa-5x"></i>'
			});
    	});
</script>
	
	<div id="primary" class="content-area">
		
			<div style="height: 1200px; background-color: white;">
				<p>Lorem ipsum dolor sit amet, sumo fugit assentior at mel. Eum ea feugiat perfecto, eum alterum euismod ei, usu an graeco consequat. Sit id quot mutat, vis ex iuvaret incorrupte. Cu usu summo tritani offendit.

Accumsan aliquando id mea. Graece atomorum adipiscing ne qui, te eos choro voluptatum, in mei suas regione. Sit suas semper ut, zril homero dolorem ex pro. Modo tempor civibus at nec. Ad rebum possim pro, vel ullum iuvaret no, hinc quot discere nec ex.

No qui pertinax oportere, usu adhuc fugit liberavisse in, sea no augue iudico detraxit. Zril decore cetero ad est, ius veri mnesarchum et. Nibh recteque in vis, mei dicat suavitate ea. Vel in adhuc veniam laudem, ne mea dicunt inimicus. Nulla labitur gloriatur eos no, vis ne facer lucilius contentiones.

Autem laoreet imperdiet eu qui, quem nibh sanctus duo an. Menandri assentior has ut, usu malorum nusquam no, choro audiam nec in. Et alienum fastidii perpetua vix, ne pro omnis essent maiestatis. Qui ne zril percipit, putant alienum sententiae te vel. Qui amet assentior in. Altera voluptatum est at, his ad aeque senserit dignissim, ei prima periculis deseruisse mei.

At has posse ullamcorper definitionem. Eu aliquip maiorum recusabo per. Vis quas falli alienum ex, in nec nonumes facilisi, eam ex lucilius probatus. Vocent timeam probatus ea duo. Sea sonet mollis efficiantur ad. Mei impetus dolores cu.</p>
			</div>


<?php get_footer(); ?>
