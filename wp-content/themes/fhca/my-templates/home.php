<?php
/*
 * Template Name: Home
 */

get_header(); ?>
	
	<div id="home-contain" class="clearfix">
		<div class="feature" style="background-image: url(<?php bloginfo('stylesheet_directory')?>/img/fhca_elderly_1.jpg);">
			<div>
				<h2>Some News About Elders</h2>
				<p>Xeriberibusae et as esequo blabore pudae. Ut laboreperum hit quunt dolumet, test, soloreribus, que pel ius voluptatur arum Xeriberibusae et as esequo blabore pudae.</p>
				<button><a href="<?php echo home_url(); ?>/aging-issues/elder-stories">See Stories</a></button>
			</div>
		</div>
		
		<aside>
			<h2>Aging Issues</h2>
			<ul>
				<li>
					<a class="clearfix" href="<?php echo home_url(); ?>/aging-issues/balance">
					<div class="fa-stack fa-2x">	
						<i class="fa fa-child fa-stack-1x"></i>
						<i class="fa fa-circle-thin fa-stack-2x"></i>
					</div>
					<h6>Balance</h6>
					<p>Que vellendi consed ma gnamet, ipsant ad maxim quam que odigenempeco </p>
					</a>
				</li>
				<li>
					<a class="clearfix" href="<?php echo home_url(); ?>/aging-issues/depression">
					<div class="fa-stack fa-2x">	
						<i class="fa fa-arrow-circle-down fa-stack-1x"></i>
						<i class="fa fa-circle-thin fa-stack-2x"></i>
					</div>
					<h6>Depression</h6>
					<p>Que vellendi consed ma gnamet, ipsant ad maxim quam que odigenempeco</p>
					</a>
				</li>
				<li>
					<a class="clearfix" href="<?php echo home_url(); ?>/aging-issues/driving">
					<div class="fa-stack fa-2x">	
						<i class="fa fa-car fa-stack-1x"></i>
						<i class="fa fa-circle-thin fa-stack-2x"></i>
					</div>
					<h6>Driving</h6>
					<p>Que vellendi consed ma gnamet, ipsant ad maxim quam que odigenempeco</p>
					</a>
				</li>
				<li>
					<a class="clearfix" href="<?php echo home_url(); ?>/aging-issues/hearing">
					<div class="fa-stack fa-2x">	
						<i class="fa fa-volume-up fa-stack-1x"></i>
						<i class="fa fa-circle-thin fa-stack-2x"></i>
					</div>
					<h6>Hearing</h6>
					<p>Que vellendi consed ma gnamet, ipsant ad maxim quam que odigenempeco</p>
					</a>
				</li>
				<li>
					<a class="clearfix" href="<?php echo home_url(); ?>/aging-issues/independence">
					<div class="fa-stack fa-2x">	
						<i class="fa fa-road fa-stack-1x"></i>
						<i class="fa fa-circle-thin fa-stack-2x"></i>
					</div>
					<h6>Independence</h6>
					<p>Que vellendi consed ma gnamet, ipsant ad maxim quam que odigenempeco</p>
					</a>
				</li>
			</ul>
				<button><a href="<?php echo home_url(); ?>/aging-issues/medication">See More</a></button>
		</aside>
		
		<div class="boxes">
			<div class="box" style="background-image: url(<?php bloginfo('stylesheet_directory')?>/img/fhca_elderly_1.jpg);" >
			    <a href="<?php echo home_url(); ?>/florida-elder-care/60-years-of-caring-report/"><span>60 Years of Caring Report</span></a>
			</div>
			<div class="box" style="background-image: url(<?php bloginfo('stylesheet_directory')?>/img/fhca_elderly_2.jpg);">
			    <a href="<?php echo home_url(); ?>/florida-elder-care/60-years-of-caring-report/"><span>60 Years of Caring Report</span></a>
			</div>
			<div class="box" style="background-image: url(<?php bloginfo('stylesheet_directory')?>/img/fhca_elderly_3.jpg);">
			    <a href="<?php echo home_url(); ?>/florida-elder-care/60-years-of-caring-report/"><span>60 Years of Caring Report</span></a>
			</div>
		</div>
	</div>	
				


<?php get_footer(); ?>
