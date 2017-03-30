<form role="search" class="row" method="get" id="searchform" action="<?php echo home_url( '/' );?>" >
    <div class="col-sm-7"><input class="form-control input-sm" placeholder="<?php _e('Site Search...'); ?>" type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" /></div>
    <div class="col-sm-5"><input class="btn btn-sm btn-primary btn-block" type="submit" id="searchsubmit" value="<?php _e('Search'); ?>" /></div>
</form>