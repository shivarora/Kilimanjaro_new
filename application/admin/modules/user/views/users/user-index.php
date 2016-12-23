<?php
//$comp_color = com_get_theme_menu_color();
$base_color = '#63D3E9';
$hover_color = '#00A4D1';
if ($comp_color) {
    $base_color = com_arrIndex($comp_color, 'theme_menu_base', '#63D3E9');
    $hover_color = com_arrIndex($comp_color, 'theme_menu_hover', '#00A4D1');
}
?>
<style>
    /*    
        
    */
    .btn-primary {
        background-color: <?= $base_color; ?>;
        border-color: <?= $hover_color; ?>;
    }
    .btn-primary:hover, .btn-primary:active, .btn-primary.hover {
        background-color: <?= $hover_color; ?>;
        border-color: <?= $base_color; ?>;
    }
    .pagination > .active > a, .pagination > .active > span, 
    .pagination > .active > a:hover, .pagination > .active > span:hover, 
    .pagination > .active > a:focus, .pagination > .active > span:focus{
        background-color: <?= $base_color; ?>;
        border-color: <?= $hover_color ?>;
    }
</style>
<header class="panel-heading">    
    <div class="row">
        <div class="col-sm-6">
            <h3 style="margin: 0;"> <i class="fa fa-user"></i> Users Management</h3>
        </div>
        <div class="col-sm-2">
            <a href="user/download"><h3 style="cursor: pointer; margin: 0;font-size: 15px;" class="btn btn-primary"><i class="fa fa-download" title="Add New user"></i> Dowland All Users</h3></a>
        </div>
        <div class="col-sm-2">
            <a href="utilities/users_csv"><h3 style="cursor: pointer; margin: 0;font-size: 15px;" class="btn btn-primary"><i class="fa fa-cart-plus" title="Add New user"></i> Upload Bulk Users </h3></a>
        </div>
        <div class="col-sm-2" style="text-align: right">            
            <a href="user/add"><h3 style="cursor: pointer; margin: 0;font-size: 15px;" class="btn btn-primary"><i class="fa fa-plus-square" title="Add New user"></i> Add New user </h3></a>
        </div>
    </div>
</header>
<div class="clearfix"></div>


<table id="example" class="table table-striped table-bordered display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Email</th>
                <th>UserName</th>
                <th>User Type</th>
                <th>Company</th>
                <th>Action</th>
                        
            </tr>
        </thead>

        <tfoot>
                <tr>
                <th>Email</th>
                <th>UserName</th>
                <th>User Type</th>
                <th>Company</th>
                <th>Blank</th>
                
                </tr>
        </tfoot>
   
        <tbody>
            <?php 
                foreach ($this->data['users'] as $key => $value) {
                    ?>
                    <tr>
                        <td><?php echo  $value['uacc_email'] ?></td>
                        <td><?php echo  $value['uacc_username'] ?></td>
                        <td><?php echo  $value['ugrp_name'] ?></td>
                        <td><?php echo $value['upro_company'] ?></td>
                        <td>
                            <input type="button" class="btn-primary"  id=<?php echo $value['uacc_id'] ?> value="View" onclick="">

                            <input type="button" class="btn-secondary"  id=<?php echo $value['uacc_id'] ?> value="Delete" onclick="">
                        </td> 

                    </tr>

                <?php }
            ?>
        </tbody>
    </table>

<script>
$(document).ready(function() {
    $('#example').DataTable( {
            "order": [[ 2, "desc" ]],
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

$(document).ready(function(){
        var table = $("#example").DataTable();
        $(".btn-secondary").click(function(){
            var line = this;
            var contentPanelId = jQuery(this).attr("id");
            var data = table.row( $(this).parents("tr") ).data();

            var result = confirm("Are you sure you want to delete this user?");


            if(result){
                $.ajax({
                    url: "/admin/user/user_delete/"+contentPanelId,
                    type: "DELETE",
                    success: function(response) {
                        //...
                        
                        // table
                        //         .row( $(line).parents("tr") )
                        //         .remove()
                        //         .draw();
                    },
                    error: function () {
                        //your error code
                        
                    }
                });

                 table
                                .row( $(line).parents("tr") )
                                .remove()
                                .draw();
            }
        });

         $(".btn-primary").click(function(){
            var line = this;
            var contentPanelId = jQuery(this).attr("id");
            
        let url = "/admin/user/view/" + contentPanelId;
        window.open(url, "_self");
        });
    });


</script>
