<?php

if (get_the_author_meta('googleplus')) { ?>

	<a class="g-plus" rel="me" href="<?php the_author_meta('googleplus'); ?>">
	    <img src="http://www.google.com/images/icons/ui/gprofile_button-44.png" width="44" height="44">
	</a>
      
<?php } ?>