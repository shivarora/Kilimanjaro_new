<?php
    
    $base_color = '#63D3E9';
    $hover_color = '#00A4D1';
    if( $comp_color ){
        $base_color = com_arrIndex($comp_color, 'theme_menu_base', '#63D3E9');
        $hover_color = com_arrIndex($comp_color, 'theme_menu_hover', '#00A4D1');
    }
    
?>
<style>
    .table-mystyled th{
        font-size: 14px;
        font-weight: 600;
    }
    .table-mystyled td{
        font-size: 13px;
    }
    .table.table-mystyled a{
        border: 1px solid;
        color: rgb(242, 119, 51);
        font-size: 13px;
        font-weight: 100;
        margin: 0 2px;
        padding: 1px 6px;
    }
</style>
<style>
    .order-history-full-container .table-mystyled th{
        color: #404040 !important;
        font-size: 12px !important;
        padding-bottom: 9px !important;
        padding-top: 5px !important;
        text-transform: capitalize !important;
    }
    #table,.table-mystyled th,.table-mystyled td{
        border: 1px solid #dedede !important;
    }
    .order-form-custom-fields input {
        margin-bottom: 5px;
        padding: 0;
    }
    .top-order-history-srh-btn input, button{
        box-shadow: none;
    }
    #order-table tbody tr td{
        font-size: 12px;
    }
    #order-table tbody tr td select{
        font-size: 11px;
        height: 25px;
        margin-bottom: 5px;
        padding-bottom: 0;
        padding-top: 0;
        width: 100%;
    }
    .order-form-custom-fields > div {
        font-size: 11px;
        font-weight: 600;
    }
    .order-history-full-container .table-mystyled th {
/*        background: rgb(242, 119, 51) none repeat scroll 0 0 !important;
        border: 1px solid #d25713 !important;*/
        background: <?= $base_color; ?> !important;
        border: 1px solid <?= $hover_color; ?> !important;
        
        border-bottom: none !important;
        border-radius: 0 !important;
        color: #fff !important;
        font-size: 12px !important;
        padding-bottom: 9px !important;
        padding-top: 5px !important;
        text-transform: capitalize !important;
    }
    
</style>

<div class="col-md-12">
   <div class="invoice-top-title-section" style="padding: 0;margin-bottom:0">
       <div class="row">
           <div class="col-md-9">
                <h3 class="mar-bot0"> Order History </h3> 
           </div>

           <div class="col-md-3">
               <a href="order/download"><h3 style="cursor: pointer; font-size: 15px;margin-left: 44px;margin-bottom: 5px;" class="btn btn-primary"><i class="fa fa-download" title="Add New user"></i> Download Orders Details</h3></a>
           </div>
        </div>
    </div>
    <div class="col-lg-12 padding-0">
        <div role="grid" class="dataTables_wrapper form-inline" id="table_wrapper">
            <div  id="order-view-div" >
                

            <table id="example" class="table table-striped table-bordered display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Order No.</th>
                <th>User Type</th>
                <th>Order By</th>
                <th>Email</th>
                <th>Order Date</th>
                <th>Order Qty</th>
                <th>Order Total</th>
                <th>Status</th>
            </tr>
        </thead>

        <tfoot>
            <tr>
                <th>Order No.</th>
                <th>User Type</th>
                <th>Order By</th>
                <th>Email</th>
                <th>Order Date</th>
                <th>Order Qty</th>
                <th>Order Total</th>
                <th>Status</th>
                
            </tr>
        </tfoot>
   
        <tbody>
            <?php 
                foreach ($this->data['orders'] as $key => $value) {
                    ?>
                    <tr>
                        <td><?php echo  $value['order_num'] ?></td>
                        <td><?php echo  $value['ugrp_name'] ?></td>
                        <td><?php echo  $value['uacc_username'] ?></td>
                        <td><?php echo $value['uacc_email'] ?></td>
                        <td><?php echo $value['order_date'] ?></td>
                        <td><?php echo $value['order_qty'] ?></td>
                        <td><?php echo $value['order_total'] ?></td>
                        <td><?php echo $value['status'] ?></td>
                
                    </tr>

                <?php }
            ?>
        </tbody>
    </table>

    <script>
$(document).ready(function() {
    $('#example').DataTable( {
            "order": [[ 4, "asc" ]],
            initComplete: function () {
                this.api().columns().every( function () {
                    var column = this;
                    var select = $('<select><option value="">Select</option></select>')
                            .appendTo( $(column.footer()).empty() )
                            .on( 'change', function () {
                                var val = $.fn.dataTable.util.escapeRegex(
                                        $(this).val()
                                );

                                column
                                        .search( val ? '^'+val+'$' : '', true, false )
                                        .draw();
                            } );

                    column.data().unique().sort().each( function ( d, j ) {
                        select.append( '<option value="'+d+'">'+d+'</option>' )
                    } );
                } );
            }
        } );
} );

</script>


            </div>
        </div>
    </div>
</div>
