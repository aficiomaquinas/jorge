<?php

if (!have_posts()) :
	not_found();
endif;

all_types_index_loop();

navigation($wp_query);

?>