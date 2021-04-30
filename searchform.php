<div class="search-form">
<form role="search" method="get" action="http://localhost/wordpress/">
    <!-- <div class="search-lable">
    <label for="search">serach for your content</label>
    </div> -->
    <div class="row">
        <div class="col-md-9">
    <input type="text" name="s" id="search" value='<?php the_search_query();?>' required placeholder="serach....."></div>
        <div class="col-md-3">
    <button type="submit">G
                <img class="icon-image-40" src="<?php echo get_template_directory_uri()?>/images/icon/go-dearch-smiley.png" alt="search icon">
    </button></div>
    </div>
</form>
</div>
			