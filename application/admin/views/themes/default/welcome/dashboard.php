<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript" src="<?php echo base_url() . 'js/charts/Chart.js'; ?>"></script>
<script type="text/javascript" src="<?php echo base_url('js/jquery-datetimepicker/jquery-ui.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('js/jquery-datetimepicker/jquery-ui-timepicker-addon.js') ?>"></script>
<link href="<?php echo base_url('js/jquery-datetimepicker/date-style.css') ?>" rel="stylesheet" type="text/css">
<script type="text/javascript">
    $(document).ready(function () {
        $('#from_date,#from_date').datepicker({
            dateFormat: 'dd M yy',
            showOn: "button",
            buttonImage: "http://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
            buttonImageOnly: true
        });
        $('#end_date,#end_date').datepicker({
            dateFormat: 'dd M yy',
            showOn: "button",
            buttonImage: "http://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
            buttonImageOnly: true
        });
        $(".day").on("click", function () {
            $("#from_date,#end_date").attr("attr", $(this).text().toLowerCase());
            $(".fDetail ul li").css("background-color", "#23527c");
            $(this).css("background-color", "#0EB04B");
        });
        $(".week").on("click", function () {
            $("#from_date,#end_date").attr("attr", $(this).text().toLowerCase());
            $(".fDetail ul li").css("background-color", "#23527c");
            $(this).css("background-color", "#0EB04B");
        });
        $(".month").on("click", function () {
            $("#from_date,#end_date").attr("attr", $(this).text().toLowerCase());
            $(".fDetail ul li").css("background-color", "#23527c");
            $(this).css("background-color", "#0EB04B");
        });
        $(".year").on("click", function () {
            $("#from_date,#end_date").attr("attr", $(this).text().toLowerCase());
            $(".fDetail ul li").css("background-color", "#23527c");
            $(this).css("background-color", "#0EB04B");
        });
        var date = new Date();
        $("#from_date").datepicker().datepicker("setDate", new Date(date.getFullYear(), date.getMonth(), 1));
        $("#end_date").datepicker().datepicker("setDate", new Date());
    })
</script>
<div class="popups"></div>
<div class="table_cont">
    <div class="top-table info">
    </div>
    <div class="bott-table">

    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="col-md-12">
            <div class="panel rounded shadow">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h3 class="panel-title">Orders</h3>
                    </div>
                    <div class="pull-right">
                        <button class="btn btn-sm" data-action="expand" data-toggle="tooltip" data-placement="top" data-title="Expand"><i class="fa fa-expand"></i></button>
                        <!--<button class="btn btn-sm" data-action="refresh" data-toggle="tooltip" data-placement="top" data-title="Refresh"><i class="fa fa-refresh"></i></button>-->
                        <button class="btn btn-sm" data-action="collapse" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                        <!--<button class="btn btn-sm" data-action="remove" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>-->
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                    <!--<div id="chartdiv" class="chart"></div>-->
                    <!--<div id="c3js-combination-chart" ></div>-->

                    <div class="rightbar-top-container">
                        <?php
                        $Userdata = $this->flexi_auth->get_user_custom_data('ugrp_name');
                        if ($Userdata == ADMIN) {
                            ?>
                            <script>
                                var chart;
                                var chartData = <?= json_encode($yealychartdata) ?>;
                                AmCharts.ready(function () {
                                    // SERIAL CHART
                                    chart = new AmCharts.AmSerialChart();
                                    chart.dataProvider = chartData;
                                    chart.categoryField = "month";
                                    chart.startDuration = 1;
                                    // category
                                    var categoryAxis = chart.categoryAxis;
                                    categoryAxis.labelRotation = 45; // this line makes category values to be rotated
                                    categoryAxis.gridAlpha = 0;
                                    categoryAxis.fillAlpha = 1;
                                    categoryAxis.fillColor = "#FAFAFA";
                                    categoryAxis.gridPosition = "start";
                                    // value
                                    var valueAxis = new AmCharts.ValueAxis();
                                    valueAxis.dashLength = 5;
                                    valueAxis.title = "Orders by the year";
                                    valueAxis.axisAlpha = 0;
                                    chart.addValueAxis(valueAxis);
                                    // GRAPH
                                    var graph = new AmCharts.AmGraph();
                                    graph.valueField = "total";
                                    graph.colorField = "color";
                                    graph.balloonText = "<b>[[month]]: [[total]]</b>";
                                    graph.type = "column";
                                    graph.lineAlpha = 0;
                                    graph.fillAlphas = 1;
                                    chart.addGraph(graph);
                                    // CURSOR
                                    var chartCursor = new AmCharts.ChartCursor();
                                    chartCursor.cursorAlpha = 0;
                                    chartCursor.zoomable = false;
                                    chartCursor.categoryBalloonEnabled = false;
                                    chart.addChartCursor(chartCursor);
                                    chart.creditsPosition = "top-right";
                                    // WRITE
                                    chart.write("chartdiv");
                                });
                            </script>
                            <div class="">
                                <!--<h2>Orders </h2>-->
                            </div>
                            <div id="chartdiv" style="width:100%; height:600px;"></div>
                            <?php
                        }
                        if ($Userdata == USER) {
                            ?>
                            <script type="text/javascript">
                                AmCharts.ready(function () {
                                    var chart = AmCharts.makeChart("chartdiv", {
                                        "type": "pie",
                                        "theme": "light",
                                        "dataProvider": <?php echo json_encode($piechartdata) ?>,
                                        "valueField": "count",
                                        "titleField": "mode",
                                        "balloon": {
                                            "fixedPosition": true
                                        },
                                        "export": {
                                            "enabled": true
                                        }
                                    });
                                })
                            </script>
                            <div class="">
                                <h2>Orders by the year</h2>
                            </div>
                            <div id="chartdiv" style="width:100%; height:600px;"></div>
                            <?php
                        }
//    || $Userdata == CMP_PM || $Userdata == CMP_MD
                        if ($Userdata == CMP_ADMIN || $Userdata == CMP_PM || $Userdata == CMP_MD) {
                            $var = "";
                            if ($Userdata == CMP_ADMIN) {
                                $var = "C";
                            } else {
                                $var = "notCompany";
                            }
                            ?>
                            <div class="total-amtANdQty1">
                                <div class="amtANDqty-inner ">
                                    <div class="tot-amt">
                                        <div class="grapamt no-padding"><img src="<?= base_url(); ?>images/graphamt.png" alt="Amount" /></div>
                                        <div class="amt-val no-padding"></div>
                                    </div>
                                    <div class="tot-qty">
                                        <div class="graphqty no-padding"><img src="<?= base_url(); ?>images/graphqty.png" alt="Quantity" /></div>
                                        <div class="qty-val  no-padding"></div>
                                    </div>

                                    <div class="clearfix"></div>
                                    <br />
                                </div>
                            </div>   
                            <div id="filtering" class="filtering">
                                <div class="start-end-date">
                                    <label>Range From</label>
                                    <input attr="day" type="text" name="from_date" id="from_date" placeholder="Start Date" readonly="true">
                                    <label class="to">To</label>
                                    <input attr="day" type="text" name="end_date" id="end_date" placeholder="End Date" readonly="true">
                                </div>
                                <div class="day-week-month-year fDetail">
                                    <ul class="list-unstyled">
                                        <li class="day">Day</li>
                                        <li class="week">Week</li>
                                        <li class="month">Month</li>
                                        <li class="year">Year</li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <div class="loader-img"><img width="250px" src="<?= base_url(); ?>images/circle-loader.gif" /></div>
                                <div id="chartdiv1" class="chartdiv" style="width:100%;"></div>
                                <div title="Full Screen" class="zoomfullwidth2"><img width="20" src="<?= base_url(); ?>images/fullscreen.png" /></div>
                                <div id="chartdiv2" class="chartdiv" style="width:100%;"></div>
                                <div title="Full Screen" class="zoomfullwidth"><img width="20" src="<?= base_url(); ?>images/fullscreen.png" /></div>
                            </div>
                            <script type="text/javascript">
                                $(function () {
                                    $(".zoomfullwidth").on("click", function () {
                                        if (typeof $(".rightbar-top-container").attr("style") !== typeof undefined && $(".rightbar-top-container").attr("style") !== false) {
                                            $("#chartdiv1").show();
                                            $(".filteringF").show();
                                            $(".zoomfullwidth2").show();
                                            $(".total-amtANdQty2").show();
                                            $(".total-amtANdQty1").show();
                                            $(".rightbar-top-container").removeAttr("style");
                                            $(".chartdiv").css("height", "440px");
                                            $("#filtering").css("padding", "0");
                                        } else {
                                            $("#chartdiv1").hide();
                                            $(".filteringF").hide();
                                            $(".zoomfullwidth2").hide();
                                            $(".total-amtANdQty1").hide();
                                            $(".total-amtANdQty2").hide();
                                            $(".rightbar-top-container").css({"background-color": "#FFFFFF", "position": "fixed", "top": '0px', 'width': $(window).width() + "px", "left": '0px', "right": "0px", "z-index": "9999", "height": $(window).height() + "px", "padding": "0 10px"});
                                            $(".filteringS").css("padding", "10px 0");
                                            $(".chartdiv").css("height", ($(window).height() - 70) + "px");
                                            $("#filtering").css("padding", "14px 10px 5px 44px");
                                        }

                                    });
                                    $(".zoomfullwidth2").on("click", function () {
                                        if (typeof $(".rightbar-top-container").attr("style") !== typeof undefined && $(".rightbar-top-container").attr("style") !== false) {
                                            $("#chartdiv2").show();
                                            $(".filteringS").show();
                                            $(".zoomfullwidth").show();
                                            $(".total-amtANdQty1").show();
                                            $(".total-amtANdQty2").show();
                                            $(".rightbar-top-container").removeAttr("style");
                                            $(".chartdiv").css("height", "440px");
                                            $("#filtering").css("padding", "0");
                                        } else {
                                            $("#chartdiv2").hide();
                                            $(".filteringS").hide();
                                            $(".total-amtANdQty1").hide();
                                            $(".total-amtANdQty2").hide();
                                            $(".zoomfullwidth").hide();
                                            $(".rightbar-top-container").css({"background-color": "#FFFFFF", "position": "fixed", "top": '0px', 'width': $(window).width() + "px", "left": '0px', "right": "0px", "z-index": "9999", "height": $(window).height() + "px", "padding": "0 10px"});
                                            $(".chartdiv").css("height", ($(window).height() - 70) + "px");
                                            $("#filtering").css("padding", "14px 10px 5px 44px");
                                        }

                                    });
                                    $("#from_date,#end_date").on("change", function () {
                                        var selectedTab = $(this).attr("attr");
                                        var startDate = Date.parse($('#from_date').val());
                                        var endDate = Date.parse($('#end_date').val());
                                        if (startDate > endDate) {
                                            $('#end_date').val($("#from_date").val());
                                        }
                                        $(".loader-img").show();
                                        setTimeout(function () {
                                            $.post("<?= base_url() ?>dashboard/getTotalOrderVolume/", "var=<?= $var; ?>&from=" + $("#from_date").val() + "&to=" + $("#end_date").val() + "&selectedTab=" + selectedTab, function (data) {
                                                TotalOrderVolumeLineGraph1(data);
                                                TotalOrderVolumeLineGraph2(data);
                                                $(".loader-img").hide();
                                            }, 'json');
                                        }, 500);
                                        var resultdata;
                                        $.post("<?= base_url() ?>dashboard/getTotalAmtAndQty/", "var=<?= $var; ?>&from=" + $("#from_date").val() + "&to=" + $("#end_date").val(), function (data) {
                                            resultdata = $.parseJSON(data);
                                            if (resultdata.qty != null && resultdata.amount != null) {
                                                $(".qty-val").text(resultdata.qty);
                                                $(".amt-val").text("£" + (resultdata.amount).replace(/\B(?=(\d{3})+(?!\d))/g, ","));
                                            } else {
                                                $(".qty-val").text(0);
                                                $(".amt-val").text(0);
                                            }
                                        });
                                    });
                                    $(".day,.week,.month,.year").on("click", function () {
                                        var selectedTab = $(this).text().toLowerCase();
                                        $(".loader-img").show();
                                        setTimeout(function () {
                                            $.post("<?= base_url() ?>dashboard/getTotalOrderVolume/", "var=<?= $var; ?>&from=" + $("#from_date").val() + "&to=" + $("#end_date").val() + "&selectedTab=" + selectedTab, function (data) {
                                                TotalOrderVolumeLineGraph1(data);
                                                TotalOrderVolumeLineGraph2(data);
                                                $(".loader-img").hide();
                                            }, 'json');
                                        }, 500);
                                    });
                                    $(".day").css("background-color", "#0EB04B");
                                    $(".loader-img").show();
                                    $.post("<?= base_url() ?>dashboard/getTotalOrderVolume/", "var=<?= $var; ?>&from=" + $("#from_date").val() + "&to=" + $("#end_date").val() + "&selectedTab=day", function (data) {
                                        TotalOrderVolumeLineGraph1(data);
                                        TotalOrderVolumeLineGraph2(data);
                                        $(".loader-img").hide();
                                    }, 'json');
                                    var resultdata;
                                    $.post("<?= base_url() ?>dashboard/getTotalAmtAndQty/", "var=<?= $var; ?>&from=" + $("#from_date").val() + "&to=" + $("#end_date").val(), function (data) {
                                        resultdata = $.parseJSON(data);
                                        if (resultdata.qty != null && resultdata.amount != null) {
                                            $(".qty-val").text(resultdata.qty);
                                            $(".amt-val").text("£" + (resultdata.amount).replace(/\B(?=(\d{3})+(?!\d))/g, ","));
                                        } else {
                                            $(".qty-val").text(0);
                                            $(".amt-val").text(0);
                                        }
                                    });
                                });

                                function TotalOrderVolumeLineGraph1(data) {
                                    var chart1 = AmCharts.makeChart("chartdiv1", {
                                        "type": "serial",
                                        "theme": "light",
                                        "dataProvider": data,
                                        "valueAxes": [{
                                                "title": "Quantity"
                                            }],
                                        "gridAboveGraphs": true,
                                        "startDuration": 1,
                                        "graphs": [{
                                                "balloonText": "Quantity[[title]]: <b>[[value]]</b>",
                                                "bullet": "round",
                                                "bulletSize": 10,
                                                "bulletBorderColor": "#ffffff",
                                                "bulletBorderAlpha": 1,
                                                "bulletBorderThickness": 2,
                                                "valueField": "value",
                                                "bulletField": "a",
                                                "value": 72,
                                            }],
                                        "chartCursor": {
                                            "categoryBalloonEnabled": false,
                                            "cursorAlpha": 0,
                                            "zoomable": false
                                        },
                                        "categoryField": "category",
                                        "categoryAxis": {
                                            "gridPosition": "start",
                                            "gridAlpha": 0
                                        }
                                    });

                                    AmCharts.checkEmptyData1 = function (chart1) {
                                        if (0 == chart1.dataProvider.length) {
                                            chart1.valueAxes[0].minimum = 0;
                                            chart1.valueAxes[0].maximum = 100;

                                            var dataPoint = {
                                                dummyValue: 0
                                            };
                                            dataPoint[chart1.categoryField] = '';
                                            chart1.dataProvider = [dataPoint];

                                            chart1.addLabel(0, '50%', 'The chart contains no data', 'center');

                                            chart1.chartDiv.style.opacity = 0.5;

                                            chart1.validateNow();
                                        }
                                    }
                                    AmCharts.checkEmptyData1(chart1);

                                }
                                function TotalOrderVolumeLineGraph2(data) {

                                    var chart2 = AmCharts.makeChart("chartdiv2", {
                                        "type": "serial",
                                        "theme": "light",
                                        "dataProvider": data,
                                        "valueAxes": [{
                                                "title": "Amount"
                                            }],
                                        "gridAboveGraphs": true,
                                        "startDuration": 1,
                                        "graphs": [{
                                                "balloonText": "Amount[[title]]: <b>[[amount]]</b>",
                                                "bullet": "round",
                                                "bulletSize": 10,
                                                "bulletBorderColor": "#ffffff",
                                                "bulletBorderAlpha": 1,
                                                "bulletBorderThickness": 2,
                                                "valueField": "amount",
                                                "bulletField": "a",
                                                "value": 72,
                                            }],
                                        "chartCursor": {
                                            "categoryBalloonEnabled": false,
                                            "cursorAlpha": 0,
                                            "zoomable": false
                                        },
                                        "categoryField": "category",
                                        "categoryAxis": {
                                            "gridPosition": "start",
                                            "gridAlpha": 0
                                        }
                                    });


                                    AmCharts.checkEmptyData2 = function (chart2) {
                                        if (0 == chart2.dataProvider.length) {
                                            chart2.valueAxes[0].minimum = 0;
                                            chart2.valueAxes[0].maximum = 100;

                                            var dataPoint = {
                                                dummyValue: 0
                                            };
                                            dataPoint[chart2.categoryField] = '';
                                            chart2.dataProvider = [dataPoint];

                                            chart2.addLabel(0, '50%', 'The chart contains no data', 'center');

                                            chart2.chartDiv.style.opacity = 0.5;

                                            chart2.validateNow();
                                        }
                                    }
                                    AmCharts.checkEmptyData2(chart2);
                                }
                            </script>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>