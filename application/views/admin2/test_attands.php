 <style type="text/css">
    table.minimalistBlack {
  
  width: 100%;
  height: 200px;
  text-align: left;
  border-collapse: collapse;
}
table.minimalistBlack td, table.minimalistBlack th {
  border: 1px solid #000000;
  padding: 5px 4px;
}
table.minimalistBlack tbody td {
  font-size: 13px;
}
table.minimalistBlack thead {
  background: #CFCFCF;
  background: -moz-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);
  background: -webkit-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);
  background: linear-gradient(to bottom, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);
  border-bottom: 3px solid #000000;
}
table.minimalistBlack thead th {
  font-size: 15px;
  font-weight: bold;
  color: #000000;
  text-align: left;
}
table.minimalistBlack tfoot {
  font-size: 14px;
  font-weight: bold;
  color: #000000;
  border-top: 3px solid #000000;
}
table.minimalistBlack tfoot td {
  font-size: 14px;
}
</style>
 <script src="jquery.min.1.11.1.js" type="text/javascript"></script>  
  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.5/jszip.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>admin_assets/external/FileSaver.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>admin_assets/scripts/excel-gen.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>admin_assets/scripts/demo.page.js"></script>
<script>
	//table2excel.js
;(function ( $, window, document, undefined ) {
    var pluginName = "table2excel",

    defaults = {
        exclude: ".noExl",
                name: "Table2Excel"
    };

    // The actual plugin constructor
    function Plugin ( element, options ) {
            this.element = element;
            // jQuery has an extend method which merges the contents of two or
            // more objects, storing the result in the first object. The first object
            // is generally empty as we don't want to alter the default options for
            // future instances of the plugin
            //
            this.settings = $.extend( {}, defaults, options );
            this._defaults = defaults;
            this._name = pluginName;
            this.init();
    }

    Plugin.prototype = {
        init: function () {
            var e = this;

            e.template = {
                head: "<html xmlns:o=\"urn:schemas-microsoft-com:office:office\" xmlns:x=\"urn:schemas-microsoft-com:office:excel\" xmlns=\"http://www.w3.org/TR/REC-html40\"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets>",
                sheet: {
                    head: "<x:ExcelWorksheet><x:Name>",
                    tail: "</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet>"
                },
                mid: "</x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body>",
                table: {
                    head: "<table>",
                    tail: "</table>"
                },
                foot: "</body></html>"
            };

            e.tableRows = [];

            // get contents of table except for exclude
            $(e.element).each( function(i,o) {
                var tempRows = "";
                $(o).find("tr").not(e.settings.exclude).each(function (i,o) {
                    tempRows += "<tr>" + $(o).html() + "</tr>";
                });
                e.tableRows.push(tempRows);
            });

            e.tableToExcel(e.tableRows, e.settings.name);
        },

        tableToExcel: function (table, name) {
            var e = this, fullTemplate="", i, link, a;

            e.uri = "data:application/vnd.ms-excel;base64,";
            e.base64 = function (s) {
                return window.btoa(unescape(encodeURIComponent(s)));
            };
            e.format = function (s, c) {
                return s.replace(/{(\w+)}/g, function (m, p) {
                    return c[p];
                });
            };
            e.ctx = {
                worksheet: name || "Worksheet",
                table: table
            };

            fullTemplate= e.template.head;

            if ( $.isArray(table) ) {
                for (i in table) {
                    //fullTemplate += e.template.sheet.head + "{worksheet" + i + "}" + e.template.sheet.tail;
                    fullTemplate += e.template.sheet.head + "Table" + i + "" + e.template.sheet.tail;
                }
            }

            fullTemplate += e.template.mid;

            if ( $.isArray(table) ) {
                for (i in table) {
                    fullTemplate += e.template.table.head + "{table" + i + "}" + e.template.table.tail;
                }
            }

            fullTemplate += e.template.foot;

            for (i in table) {
                e.ctx["table" + i] = table[i];
            }
            delete e.ctx.table;

            if (typeof msie !== "undefined" && msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))      // If Internet Explorer
            {
                if (typeof Blob !== "undefined") {
                    //use blobs if we can
                    fullTemplate = [fullTemplate];
                    //convert to array
                    var blob1 = new Blob(fullTemplate, { type: "text/html" });
                    window.navigator.msSaveBlob(blob1, getFileName(e.settings) );
                } else {
                    //otherwise use the iframe and save
                    //requires a blank iframe on page called txtArea1
                    txtArea1.document.open("text/html", "replace");
                    txtArea1.document.write(fullTemplate);
                    txtArea1.document.close();
                    txtArea1.focus();
                    sa = txtArea1.document.execCommand("SaveAs", true, getFileName(e.settings) );
                }

            } else {
                link = e.uri + e.base64(e.format(fullTemplate, e.ctx));
                a = document.createElement("a");
                a.download = getFileName(e.settings);
                a.href = link;

                document.body.appendChild(a);

                a.click();

                document.body.removeChild(a);
            }

            return true;
        }
    };

    function getFileName(settings) {
        return ( settings.filename ? settings.filename : "table2excel") + ".xls";
    }

    $.fn[ pluginName ] = function ( options ) {
        var e = this;
            e.each(function() {
                if ( !$.data( e, "plugin_" + pluginName ) ) {
                    $.data( e, "plugin_" + pluginName, new Plugin( this, options ) );
                }
            });

        // chain jQuery functions
        return e;
    };

})( jQuery, window, document );
</script>
    <!-- /.Navbar  Static Side -->
<div class="control-sidebar-bg"></div>
<!-- Page Content -->
<div id="page-wrapper">
    <!-- main content -->
    <div class="content">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="header-icon">
                <i class="pe-7s-box1"></i>
            </div>
            <div class="header-title">
                <h1>View Case</h1>

                <ol class="breadcrumb">
                    <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>

                    <li class="active">View Case</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>View Case</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                          <script src="http://alasql.org/console/alasql.min.js"></script>
    <script src="http://alasql.org/console/xlsx.core.min.js"></script>
    <button onclick="window.exportExcel()">Export table to Excel</button>
                    	<button type="button" class="btn btn-success" onclick="exportexcel()">  
        Export</button>  
                    	
                    	<button type="button" class="print-btn btn btn-success">Print</button> 
                    	<br><br>
                        <div class="table-responsive print-div">

                            <table  id="MyInquires" class="table table-bordered table-striped table-hover">

                               <thead>
                                <tr>
                                    <th>adss</th>
                                    <th>adss</th>
                                    <th>adss</th>
                                    <th>adss</th>
                                    <th>adss</th>
                                </tr>
                                   </thead>
                                   <tbody>
                                        <tr>
                                            <td>sdhsad</td>
                                            <td>sdhsad</td>
                                            <td>sdhsad</td>
                                            <td>sdhsad</td>
                                            <td>sdhsad</td>
                                        </tr>

                                </tbody>
                           
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="container">
        <h1>excel-gen.js: Table To Excel Export Plugin Demo</h1>
        <button id="generate-excel" class="btn btn-danger">
            Generate Excel</button>
        <br /><br />
        <table id="test_table" class="table table-bordered">
            <thead>
                <tr>
                    <th>
                        Rank
                    </th>
                    <th>
                        Name
                    </th>
                    <th>
                        City
                    </th>
                    <th>
                        State
                    </th>
                    <th>
                        Section
                    </th>
                    <th>
                        District
                    </th>
                    <th>
                        Points
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <span>1</span>
                    </td>
                    <td>
                        <span>Small, Steve </span>
                    </td>
                    <td>
                        <span>New York</span>
                    </td>
                    <td>
                        <span>NY</span>
                    </td>
                    <td>
                        <span>Eastern</span>
                    </td>
                    <td>
                        <span>Metropolitan Region</span>
                    </td>
                    <td>
                        <span>378</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>2</span>
                    </td>
                    <td>
                        <span>Novello, Rodolfo </span>
                    </td>
                    <td>
                        <span>Lawrence</span>
                    </td>
                    <td>
                        <span>NY</span>
                    </td>
                    <td>
                        <span>Eastern</span>
                    </td>
                    <td>
                        <span>Long Island Region</span>
                    </td>
                    <td>
                        <span>223</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>3</span>
                    </td>
                    <td>
                        <span>O'Neill, Jim </span>
                    </td>
                    <td>
                        <span>Philmont</span>
                    </td>
                    <td>
                        <span>NY</span>
                    </td>
                    <td>
                        <span>Eastern</span>
                    </td>
                    <td>
                        <span>Northern Region</span>
                    </td>
                    <td>
                        <span>192</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>4</span>
                    </td>
                    <td>
                        <span>Sobong, Emmanuel </span>
                    </td>
                    <td>
                        <span>River Edge</span>
                    </td>
                    <td>
                        <span>NJ</span>
                    </td>
                    <td>
                        <span>Eastern</span>
                    </td>
                    <td>
                        <span>New Jersey Region</span>
                    </td>
                    <td>
                        <span>162</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>5</span>
                    </td>
                    <td>
                        <span>Stewart, Cliff </span>
                    </td>
                    <td>
                        <span>Bridgewater</span>
                    </td>
                    <td>
                        <span>NJ</span>
                    </td>
                    <td>
                        <span>Eastern</span>
                    </td>
                    <td>
                        <span>New Jersey Region</span>
                    </td>
                    <td>
                        <span>132</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>6</span>
                    </td>
                    <td>
                        <span>Erskine, Ronald G </span>
                    </td>
                    <td>
                        <span>Ridgewood</span>
                    </td>
                    <td>
                        <span>NJ</span>
                    </td>
                    <td>
                        <span>Eastern</span>
                    </td>
                    <td>
                        <span>New Jersey Region</span>
                    </td>
                    <td>
                        <span>126</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>6</span>
                    </td>
                    <td>
                        <span>Levine, Max </span>
                    </td>
                    <td>
                        <span>West Sand Lake</span>
                    </td>
                    <td>
                        <span>NY</span>
                    </td>
                    <td>
                        <span>Eastern</span>
                    </td>
                    <td>
                        <span>Northern Region</span>
                    </td>
                    <td>
                        <span>126</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>6</span>
                    </td>
                    <td>
                        <span>Warren, Paul </span>
                    </td>
                    <td>
                        <span>Schenectady</span>
                    </td>
                    <td>
                        <span>NY</span>
                    </td>
                    <td>
                        <span>Eastern</span>
                    </td>
                    <td>
                        <span>Northern Region</span>
                    </td>
                    <td>
                        <span>126</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>9</span>
                    </td>
                    <td>
                        <span>Fischbach, David </span>
                    </td>
                    <td>
                        <span>Prt Washingtn</span>
                    </td>
                    <td>
                        <span>NY</span>
                    </td>
                    <td>
                        <span>Eastern</span>
                    </td>
                    <td>
                        <span>Long Island Region</span>
                    </td>
                    <td>
                        <span>97</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>9</span>
                    </td>
                    <td>
                        <span>Lai, Ben </span>
                    </td>
                    <td>
                        <span>Bridgewater</span>
                    </td>
                    <td>
                        <span>NJ</span>
                    </td>
                    <td>
                        <span>Eastern</span>
                    </td>
                    <td>
                        <span>New Jersey Region</span>
                    </td>
                    <td>
                        <span>97</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>11</span>
                    </td>
                    <td>
                        <span>Gitterman, Matthew </span>
                    </td>
                    <td>
                        <span>Bridgewater</span>
                    </td>
                    <td>
                        <span>NJ</span>
                    </td>
                    <td>
                        <span>Eastern</span>
                    </td>
                    <td>
                        <span>New Jersey Region</span>
                    </td>
                    <td>
                        <span>96</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>11</span>
                    </td>
                    <td>
                        <span>Kalina, Jonathan </span>
                    </td>
                    <td>
                        <span>Fair Lawn</span>
                    </td>
                    <td>
                        <span>NJ</span>
                    </td>
                    <td>
                        <span>Eastern</span>
                    </td>
                    <td>
                        <span>New Jersey Region</span>
                    </td>
                    <td>
                        <span>96</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>11</span>
                    </td>
                    <td>
                        <span>Elfant, Scott </span>
                    </td>
                    <td>
                        <span>Paramus</span>
                    </td>
                    <td>
                        <span>NJ</span>
                    </td>
                    <td>
                        <span>Eastern</span>
                    </td>
                    <td>
                        <span>New Jersey Region</span>
                    </td>
                    <td>
                        <span>96</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>14</span>
                    </td>
                    <td>
                        <span>Salandy, John </span>
                    </td>
                    <td>
                        <span>East Orange</span>
                    </td>
                    <td>
                        <span>NJ</span>
                    </td>
                    <td>
                        <span>Eastern</span>
                    </td>
                    <td>
                        <span>New Jersey Region</span>
                    </td>
                    <td>
                        <span>81</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>15</span>
                    </td>
                    <td>
                        <span>Sendich, Sadik </span>
                    </td>
                    <td>
                        <span>Staten Island</span>
                    </td>
                    <td>
                        <span>NY</span>
                    </td>
                    <td>
                        <span>Eastern</span>
                    </td>
                    <td>
                        <span>Metropolitan Region</span>
                    </td>
                    <td>
                        <span>66</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>16</span>
                    </td>
                    <td>
                        <span>Grey, James </span>
                    </td>
                    <td>
                        <span>Westwood</span>
                    </td>
                    <td>
                        <span>NJ</span>
                    </td>
                    <td>
                        <span>Eastern</span>
                    </td>
                    <td>
                        <span>New Jersey Region</span>
                    </td>
                    <td>
                        <span>41</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>16</span>
                    </td>
                    <td>
                        <span>Wirstrom, Robert </span>
                    </td>
                    <td>
                        <span>Upper Saddle River</span>
                    </td>
                    <td>
                        <span>NJ</span>
                    </td>
                    <td>
                        <span>Eastern</span>
                    </td>
                    <td>
                        <span>New Jersey Region</span>
                    </td>
                    <td>
                        <span>41</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>16</span>
                    </td>
                    <td>
                        <span>Prevost, Christopher </span>
                    </td>
                    <td>
                        <span>Hoboken</span>
                    </td>
                    <td>
                        <span>NJ</span>
                    </td>
                    <td>
                        <span>Eastern</span>
                    </td>
                    <td>
                        <span>New Jersey Region</span>
                    </td>
                    <td>
                        <span>41</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>16</span>
                    </td>
                    <td>
                        <span>Koch, Vladimir </span>
                    </td>
                    <td>
                        <span>Cresskill</span>
                    </td>
                    <td>
                        <span>NJ</span>
                    </td>
                    <td>
                        <span>Eastern</span>
                    </td>
                    <td>
                        <span>New Jersey Region</span>
                    </td>
                    <td>
                        <span>41</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>20</span>
                    </td>
                    <td>
                        <span>bullaro, joseph </span>
                    </td>
                    <td>
                        <span>Great Neck</span>
                    </td>
                    <td>
                        <span>NY</span>
                    </td>
                    <td>
                        <span>Eastern</span>
                    </td>
                    <td>
                        <span>Long Island Region</span>
                    </td>
                    <td>
                        <span>6</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>21</span>
                    </td>
                    <td>
                        <span>Scarpati, Steven </span>
                    </td>
                    <td>
                        <span>Basking Ridge</span>
                    </td>
                    <td>
                        <span>NJ</span>
                    </td>
                    <td>
                        <span>Eastern</span>
                    </td>
                    <td>
                        <span>New Jersey Region</span>
                    </td>
                    <td>
                        <span>2</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>21</span>
                    </td>
                    <td>
                        <span>MIRZA, SHAHZEB </span>
                    </td>
                    <td>
                        <span>Jackson heights</span>
                    </td>
                    <td>
                        <span>NY</span>
                    </td>
                    <td>
                        <span>Eastern</span>
                    </td>
                    <td>
                        <span>Metropolitan Region</span>
                    </td>
                    <td>
                        <span>2</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>21</span>
                    </td>
                    <td>
                        <span>Voellmicke, Craig </span>
                    </td>
                    <td>
                        <span>New York</span>
                    </td>
                    <td>
                        <span>NY</span>
                    </td>
                    <td>
                        <span>Eastern</span>
                    </td>
                    <td>
                        <span>Metropolitan Region</span>
                    </td>
                    <td>
                        <span>2</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>24</span>
                    </td>
                    <td>
                        <span>Sulsky, Ben </span>
                    </td>
                    <td>
                        <span>Cornwall</span>
                    </td>
                    <td>
                        <span>NY</span>
                    </td>
                    <td>
                        <span>Eastern</span>
                    </td>
                    <td>
                        <span>Southern Region</span>
                    </td>
                    <td>
                        <span>1</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>24</span>
                    </td>
                    <td>
                        <span>Jasnosz, Michael </span>
                    </td>
                    <td>
                        <span>Ridgewood</span>
                    </td>
                    <td>
                        <span>NJ</span>
                    </td>
                    <td>
                        <span>Eastern</span>
                    </td>
                    <td>
                        <span>New Jersey Region</span>
                    </td>
                    <td>
                        <span>1</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>24</span>
                    </td>
                    <td>
                        <span>PEREZ, JACOB </span>
                    </td>
                    <td>
                        <span>Haworth</span>
                    </td>
                    <td>
                        <span>NJ</span>
                    </td>
                    <td>
                        <span>Eastern</span>
                    </td>
                    <td>
                        <span>New Jersey Region</span>
                    </td>
                    <td>
                        <span>1</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>24</span>
                    </td>
                    <td>
                        <span>Gonzalez, Christopher </span>
                    </td>
                    <td>
                        <span>North Bergen</span>
                    </td>
                    <td>
                        <span>NJ</span>
                    </td>
                    <td>
                        <span>Eastern</span>
                    </td>
                    <td>
                        <span>New Jersey Region</span>
                    </td>
                    <td>
                        <span>1</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>24</span>
                    </td>
                    <td>
                        <span>Margolin, Ken </span>
                    </td>
                    <td>
                        <span>East Brunswick</span>
                    </td>
                    <td>
                        <span>NJ</span>
                    </td>
                    <td>
                        <span>Eastern</span>
                    </td>
                    <td>
                        <span>New Jersey Region</span>
                    </td>
                    <td>
                        <span>1</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>24</span>
                    </td>
                    <td>
                        <span>Watson, Michael </span>
                    </td>
                    <td>
                        <span>Manville</span>
                    </td>
                    <td>
                        <span>NJ</span>
                    </td>
                    <td>
                        <span>Eastern</span>
                    </td>
                    <td>
                        <span>New Jersey Region</span>
                    </td>
                    <td>
                        <span>1</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>24</span>
                    </td>
                    <td>
                        <span>Garbisch, Leif </span>
                    </td>
                    <td>
                        <span>Ghent</span>
                    </td>
                    <td>
                        <span>NY</span>
                    </td>
                    <td>
                        <span>Eastern</span>
                    </td>
                    <td>
                        <span>Northern Region</span>
                    </td>
                    <td>
                        <span>1</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>24</span>
                    </td>
                    <td>
                        <span>Shkop, Sergey </span>
                    </td>
                    <td>
                        <span>Ridgewood</span>
                    </td>
                    <td>
                        <span>NJ</span>
                    </td>
                    <td>
                        <span>Eastern</span>
                    </td>
                    <td>
                        <span>New Jersey Region</span>
                    </td>
                    <td>
                        <span>1</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>24</span>
                    </td>
                    <td>
                        <span>Honore, Daniel </span>
                    </td>
                    <td>
                        <span>Albany</span>
                    </td>
                    <td>
                        <span>NY</span>
                    </td>
                    <td>
                        <span>Eastern</span>
                    </td>
                    <td>
                        <span>Northern Region</span>
                    </td>
                    <td>
                        <span>1</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>24</span>
                    </td>
                    <td>
                        <span>Israel, Matthew </span>
                    </td>
                    <td>
                        <span>Great Neck</span>
                    </td>
                    <td>
                        <span>NY</span>
                    </td>
                    <td>
                        <span>Eastern</span>
                    </td>
                    <td>
                        <span>Long Island Region</span>
                    </td>
                    <td>
                        <span>1</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>24</span>
                    </td>
                    <td>
                        <span>Chung, Dong-Ha </span>
                    </td>
                    <td>
                        <span>Delmar</span>
                    </td>
                    <td>
                        <span>NY</span>
                    </td>
                    <td>
                        <span>Eastern</span>
                    </td>
                    <td>
                        <span>Northern Region</span>
                    </td>
                    <td>
                        <span>1</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>24</span>
                    </td>
                    <td>
                        <span>Auler, Robert </span>
                    </td>
                    <td>
                        <span>Oswego</span>
                    </td>
                    <td>
                        <span>NY</span>
                    </td>
                    <td>
                        <span>Eastern</span>
                    </td>
                    <td>
                        <span>Western Region</span>
                    </td>
                    <td>
                        <span>1</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>24</span>
                    </td>
                    <td>
                        <span>Killebrew, Steve </span>
                    </td>
                    <td>
                        <span>Ridgewood</span>
                    </td>
                    <td>
                        <span>NJ</span>
                    </td>
                    <td>
                        <span>Eastern</span>
                    </td>
                    <td>
                        <span>New Jersey Region</span>
                    </td>
                    <td>
                        <span>1</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>24</span>
                    </td>
                    <td>
                        <span>Mehringer, Daniel Boyd</span>
                    </td>
                    <td>
                        <span>Middletown</span>
                    </td>
                    <td>
                        <span>NJ</span>
                    </td>
                    <td>
                        <span>Eastern</span>
                    </td>
                    <td>
                        <span>New Jersey Region</span>
                    </td>
                    <td>
                        <span>1</span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
    </div>
    <!-- /.main content -->
</div>
<!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<!-- START CORE PLUGINS -->


<script type="text/javascript">  
        function exportexcel() {  
            $("#mytable").table2excel({  
                name: "Table2Excel",  
                filename: "myFileName",  
                fileext: ".xls"  
            });  
        }  
</script> 
<script type="text/javascript">
    $('.print-btn').click(function() {
        w = window.open();
        var ht = $('.print-div').html()
        var head = $('head').html()
        w.document.write('<html>');
        w.document.write('<head>');
        w.document.write(head);
        // w.document.write('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
        // w.document.write('<link rel="stylesheet" type="text/css" href="' + url + '/assets/css/bootstrap.min.css">');
        // w.document.write('<link rel="stylesheet" type="text/css" href="' + url + '/assets/css/bootstrap-responsive.min.css">');
        // w.document.write('<link rel="stylesheet" type="text/css" href="' + url + '/assets/css/font-awesome.min.css">');
        // w.document.write('<link rel="stylesheet" type="text/css" href="' + url + '/assets/css/style.css">');
        // w.document.write('<link rel="stylesheet" type="text/css" href="' + url + '/assets/css/responsive.css">');
        w.document.write('<style>h4.product-totle{padding-left:295px}</style>')
        w.document.write('<style>.product-tital{padding-left:220px;position: fixed;margin-top: -30px;}</style>')
        w.document.write('<style>. table.minimalistBlack {width: 100%;height: 200px; text-align: left; border-collapse: collapse;}</style>')
         w.document.write('<style>table.minimalistBlack td, table.minimalistBlack th {border: 1px solid #000000;padding: 5px 4px;}</style>')
         w.document.write('<style>table.minimalistBlack tbody td {font-size: 13px;}</style>')
         w.document.write('<style>table.minimalistBlack thead {background: #CFCFCF;background: -moz-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);background: -webkit-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);background: linear-gradient(to bottom, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);border-bottom: 3px solid #000000;}</style>')
         w.document.write('<style>table.minimalistBlack thead th {font-size: 15px;font-weight: bold;color: #000000;text-align: left;}</style>')
        w.document.write('</head>');
        w.document.write('<body>');
        w.document.write(ht);
        w.document.write('<body>');
        w.document.write('</html>');
        setTimeout(function() {
            w.print();
            w.close();
        }, 300);
    })
</script>

<script>
window.exportExcel =     function exportExcel() {
        alasql('SELECT * INTO XLSX("myinquires.xls",{headers:true}) \
                    FROM HTML("#MyInquires",{headers:true})');
    }
</script>