<?php 
    /**
     * Header php fragment
     * 
     */
    $urlPrefix="";
    if ( strstr($_SERVER['REQUEST_URI'],"pages")!==FALSE) {
        //This means we're inside "pages" was found
        $urlPrefix = "../";     //modify
    }
?>

<!-- header -->
<header id="header">
    <h1 id="logo"><a href=<?php echo $urlPrefix."index" ?>>Techno Flair Lab</a></h1>
    <!-- search -->
<!--    <div class="search">
        <form method="post">
            <span class="field"><input type="text" class="field" value="keywords here ..." title="keywords here ..." /></span>
            <input type="submit" class="search-btn" value="" />
        </form>
    </div>-->
    <!-- end of search -->
</header>
<!-- end of header -->