<div class="gumby">
<?php
    /* META BOXES FOR FOLIOS */
    global $post_id;
    
    if( $isRendition ){
        include_once( dirname( __DIR__ ) . "/meta-boxes/includes/folio-actions-rendition.php" );
    }
    else{
        include_once( dirname( __DIR__ ) . "/meta-boxes/includes/folio-actions-parent.php" );
    }
?>
</div>