add_filter ( 'woocommerce_product_thumbnails_columns', 'codeithub_change_gallery_columns' );
 
function codeithub_change_gallery_columns() {
     return 1; 
}
