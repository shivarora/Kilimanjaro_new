    <div class="invoice-top-title-section">

        <h2>Assigned stock</h2>

    </div>

    <div class="quick-order-address-detail-container">

        <div class="row">

            <div class="col-sm-8 col-xs-12">

                <div class="left-quick-order-address-detail">

                    <ul class="list-unstyled text-left">

                        <li><span class="bold-text">Contact:</span>

                            <?= ucfirst( $orderShip['first_name'] ).' '.$orderShip['last_name']; ?></li>

                        <li><span class="bold-text">Order no:</span><?= $orderShip['order_num']; ?></li>

                    </ul>

                </div>

            </div>

            <div class="col-sm-4 col-xs-12">

                <div class="right-quick-order-address-detail">

                    <ul class="list-unstyled text-right">

                        <li class="head-title-name">Shipping address</li>

                        <li><?= $orderShip['address_1'] .',' .$orderShip['address_2']; ?></li>

                        <li><?= $orderShip['city'].' ,'.$orderShip['county'].' ,'.$orderShip['postcode']; ?></li>

                    </ul>

                    <div class="clearfix"></div>

                </div>

            </div>

        </div>

    </div>



<style>

    .custom-border-table-container{

        background: none !important;

    }

    table.custom-border-table-style thead{

        background:#555;

        color:#fff;

    }

    table.custom-border-table-style thead th{

        background:#555;

        color:#fff;

    }

    table.custom-border-table-style th,table.custom-border-table-style td{

        border:1px solid #ddd !important;

    }

    .custom-border-table-container .rightbar-invoice-header-section{

        padding: 0 15px !important;

    }

    .quick-order-address-detail-container{

        padding-bottom: 0px !important;

    }

    .bold-text{

        font-weight: 600 !important;

    }

    .quick-order-address-detail-container ul li{

       

    }

    .right-quick-order-address-detail ul {

        -moz-border-bottom-colors: none;

        -moz-border-left-colors: none;

        -moz-border-right-colors: none;

        -moz-border-top-colors: none;

        border-bottom: 1px solid #d0d0d0;

        border-image: none;

        border-left: 1px solid #d0d0d0;

        border-radius: 5px;

        border-right: 1px solid #d0d0d0;

        padding-bottom: 10px;

    }

    .head-title-name {

        background: #6a6a6a none repeat scroll 0 0;

        border-radius: 4px 4px 0 0 !important;

        color: #fff !important;

        font-size: 14px !important;

        font-weight: 600 !important;

        margin-bottom: 5px;

        padding: 6px 10px !important;

        text-align: right;

        text-transform: uppercase;

    }

    .quick-order-address-detail-container ul li {

        border-bottom: 1px solid #ddd;

        border-radius: 0;

        color: #555;

        font-size: 13px;

        font-weight: normal;

        line-height: 20px;

        padding: 0 10px 3px;

    }

    .quick-order-address-detail-container ul li:last-child {

        border-bottom: none;

    }

    .left-quick-order-address-detail ul li{

        border:none;

    }

</style>

    <div class="rightbar-invoice-full-section custom-border-table-container">

        <header class="panel-heading rightbar-invoice-header-section">

            <div class="row">                        

                <div class="col-sm-12 pad-left0">

                    <h3 style="margin: 20px 0 5px 0px;font-size: 18px; font-weight: 600; text-align: left; color: f27733;"><?= $orderShip['order_num']; ?></h3>

                </div>                

            </div>

        </header>

        <div class="rightbar-invoice-info-container">

            <div class="table-responsive text-center">                

                <table id="pagination-table" class="table table-bordered table-striped custom-border-table-style">

                    <thead>

                        <tr>

                            <th width="50">S.no</th>

                            <th class="leftalign">Code</th>

                            <th width="150">Product Image</th>

                            <th class="leftalign">Product Name</th>                            

                            <th class="leftalign">Req Qty.</th>

                            <th class="leftalign">Comp Store.</th>

                            <th class="leftalign">Issue Qty.</th>

                            <th class="leftalign">Price</th>

                        </tr>

                    </thead>

                    <tbody>

                    <?php                       

                        com_get_product_image('default_product.jpg', 50, 50);

                        foreach ($orderDetail as $orderIndex => $orderDet ) {

                            $sub_options = json_decode( $orderDet['order_item_options'] , true);                            

                            $product_image = com_arrIndex($sub_options[ 'product' ], 'product_imgae', '' );

                            $productSkuIndex = $sub_options[ 'product' ][ 'product_sku' ];

                            $assignedStock 	= com_arrIndex($allowedStock, $productSkuIndex, 0)[ 'stock_qty' ];

                            $store_id 		= com_arrIndex($allowedStock, $productSkuIndex, 0)[ 'store_id' ];

                            $store_name 	= com_arrIndex($store_list, $store_id );                            

                    ?>

                        <tr>

                            <td><?= ($orderIndex + 1); ?></td>

                            <td class="leftalign"><?= $orderDet['product_ref']; ?></td>

                            <td><img src="<?= com_get_product_image( $product_image, 50, 50); ?>" height="50px"/> </td>

                            <td class="leftalign"><?= $orderDet['order_item_name']; ?></td>

                            <td class="leftalign"><?= $orderDet['order_item_qty']; ?></td>

                            <td class="leftalign"><?= $store_name; ?></td>

                            <td class="leftalign"><?= $assignedStock; ?></td>

                            <td class="leftalign">&#163; <?= $orderDet['order_item_price']; ?></td>

                        </tr>

                    <?php            

                        }

                    ?>

                    </tbody>

                    <tfoot>

                        <td colspan="8">

                        </td>                        

                    </tfoot>

                </table>                

                <div class="clearfix"></div>        

            </div>

        </div>

    </div>

    <div class="clearfix"></div>

    <script type="text/javascript">

        $(document).ready(function(){

            $('.userQty').on('change', function( event ){            

                if( $(this).val() < 0){

                    $(this).val(0);

                }

                var relatedQty = '.' + $(this).data('id');

                $(relatedQty).val( $(this).val() );

                event.preventDefault();

            });

        });

    </script>    

    <?php  if( $user_type == USER ) { ?>

    <div class="quick-order-bottom-container">

        <div class="row">

            <div class="col-lg-7 col-xs-12">    

                <ul class="quick-order-record-collect-option list-inline">

                    <li>

                    <a href="order/reorder/<?= $orderShip['order_num']; ?>" class="btn btn-orange btn-large"> Reorder Now</a> </li>

                </ul>            

                <div class="clearfix"></div>

            </div>        

            <div class="col-lg-5 col-xs-12">

                <div class="quick-order-total-calculate-amount_container">

                    <div class="quick-order-total-calculate-amount-bottom">

                        <ul class="list-unstyled bottom-quick-order-amount">                            

                            <li><span class="bold-text">  Total </span> $<?= $orderShip['order_total']; ?></li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <?php } ?>

