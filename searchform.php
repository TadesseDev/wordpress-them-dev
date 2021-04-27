<div class="search-form">
<form role="search" method="get" action="http://localhost/wordpress/">
    <!-- <div class="search-lable">
    <label for="search">serach for your content</label>
    </div> -->
    <input type="text" name="s" id="search" value='<?php the_search_query();?>' required>
    <button type="submit">search</button>
</form>
</div>
			