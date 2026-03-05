<?php

/**
 * Title: Recent Products
 * Slug: bizboost/products-recent
 * Categories: bizboost, page
 */
?>

<!-- wp:group {"align":"full","className":"wp-block-section wp-block-products products-recent","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull wp-block-section wp-block-products products-recent">
    <!-- wp:group {"className":"wp-block-group-heading"} -->
    <div class="wp-block-group wp-block-group-heading">
        <!-- wp:heading {"textAlign":"center"} -->
        <h2 class="has-text-align-center"><?php esc_html_e('Recent Products', 'bizboost'); ?></h2>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"align":"full","className":"wp-block-group-content"} -->
    <div class="wp-block-group alignfull wp-block-group-content"><!-- wp:woocommerce/product-collection {"queryId":3,"query":{"perPage":4,"pages":1,"offset":0,"postType":"product","order":"desc","orderBy":"date","search":"","exclude":[],"inherit":false,"taxQuery":{},"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"timeFrame":{"operator":"not-in","value":"-3 months"},"filterable":false,"relatedBy":{"categories":true,"tags":true}},"tagName":"div","displayLayout":{"type":"flex","columns":4,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"collection":"woocommerce/product-collection/new-arrivals","hideControls":["inherit","order","filterable"],"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":false,"previewMessage":"Actual products will vary depending on the page being viewed."},"align":"full"} -->
        <div class="wp-block-woocommerce-product-collection alignfull"><!-- wp:woocommerce/product-template -->
            <!-- wp:template-part {"slug":"product-template-home-patterns"} /-->
            <!-- /wp:woocommerce/product-template -->
        </div>
        <!-- /wp:woocommerce/product-collection -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
