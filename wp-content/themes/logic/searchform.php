<form action="/" method="get" id="search-form">
    <fieldset>
        <label>What is <span>the meaning of...</span></label>
        <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="eg. Stress" />
        <div id="search-button">
            <button type="submit"><i class="icon-search"></i><span>Search</span></button>
        </div>
    </fieldset>
</form>
