<?php include('header.php'); ?>
<script type="text/javascript"
src="https://www.gstatic.com/charts/loader.js"></script>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<div class="main-body-content w-100 ets-pt">
    <div class="container">
        <div class="well" style="background-color: #eef4fb;">
            <div class="card">
                <div class="card-header" style="text-align: center">
                    <h2>STATISTIC FOR VIETNAM</h2>
                </div>

                <div id="continent_chart" style="margin: 0px 30px 30px 30px"></div>
            </div>
            <br>
            <?php if ($_SESSION['username'] == true) { ?>
                <div align="right" style="margin-bottom:5px;">
                    <button type="button" name="add_button" id="add_button" class="btn btn-success btn-xs">Add</button>
                </div>
            <?php } ?>

            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Cases</th>
                        <th>Active</th>
                        <th>Deaths</th>
                        <th>Recovered</th>
                        <?php if ($_SESSION['username'] == TRUE) { ?>
                            <th>Edit</th>
                            <th>Delete</th>
                        <?php } ?>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>

        </div>
    </div>
</div>

</body>
</html>
<div id="apicrudModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" id="api_crud_form">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add Data</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Enter Name</label>
                        <input type="text" name="name" id="name" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Enter Cases</label>
                        <input type="text" name="cases" id="cases" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Enter Active Cases</label>
                        <input type="text" name="active" id="active" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Enter Deaths Cases</label>
                        <input type="text" name="deaths" id="deaths" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Enter Recovered Cases</label>
                        <input type="text" name="recovered" id="recovered" class="form-control" />
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="hidden_id" id="hidden_id" />
                    <input type="hidden" name="action" id="action" value="insert" />
                    <input type="submit" name="button_action" id="button_action" class="btn btn-info" value="Insert" />
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function () {

        fetch_data();

        function fetch_data()
        {
            $.ajax({
                url: "fetch.php",
                success: function (data)
                {
                    $('tbody').html(data);
                }
            })
        }
        $('#add_button').click(function () {
            $('#action').val('insert');
            $('#button_action').val('Insert');
            $('.modal-title').text('Add Data');
            $('#apicrudModal').modal('show');
        });

        $('#api_crud_form').on('submit', function (event) {
            event.preventDefault();
            if ($('#name').val() == '')
            {
                alert("Enter Name");
            } else if ($('#cases').val() == '')
            {
                alert("Enter Cases");
            } else if ($('#active').val() == '')
            {
                alert("Enter Active Cases");
            } else if ($('#deaths').val() == '')
            {
                alert("Enter Deaths Cases");
            } else if ($('#recovered').val() == '')
            {
                alert("Enter Recovered Cases");
            } else
            {
                var form_data = $(this).serialize();
                $.ajax({
                    url: "action.php",
                    method: "POST",
                    data: form_data,
                    success: function (data)
                    {
                        fetch_data();
                        $('#api_crud_form')[0].reset();
                        $('#apicrudModal').modal('hide');
                        if (data == 'insert')
                        {
                            alert("Data Inserted using PHP API");
                        }
                        if (data == 'update')
                        {
                            alert("Data Updated using PHP API");
                        }
                    }
                });
            }
        });

        $(document).on('click', '.edit', function () {
            var id = $(this).attr('id');
            var action = 'fetch_single';
            $.ajax({
                url: "action.php",
                method: "POST",
                data: {id: id, action: action},
                dataType: "json",
                success: function (data)
                {
                    $('#hidden_id').val(id);
                    $('#name').val(data.name);
                    $('#cases').val(data.cases);
                    $('#active').val(data.active);
                    $('#deaths').val(data.deaths);
                    $('#recovered').val(data.recovered);
                    $('#action').val('update');
                    $('#button_action').val('Update');
                    $('.modal-title').text('Edit Data');
                    $('#apicrudModal').modal('show');
                }
            })
        });

        $(document).on('click', '.delete', function () {
            var id = $(this).attr("id");
            var action = 'delete';
            if (confirm("Are you sure you want to remove this data using PHP API?"))
            {
                $.ajax({
                    url: "action.php",
                    method: "POST",
                    data: {id: id, action: action},
                    success: function (data)
                    {
                        fetch_data();
                        alert("Data Deleted using PHP API");
                    }
                });
            }
        });

    });
</script>

 <script type="text/javascript">
    var jsonData = [];
    $(document).ready(function () {
        $.ajax({
            url: "https://api.apify.com/v2/datasets/RnzK2Aea1RlgBcauw/items?format=json&clean=1",
            dataType: "json",
            async: false,
            success: function (result) {
                jsonData = result;
            }
        });
    });

    // Load the Visualization API and the corechart package.
    google.charts.load('current', {packages: ['corechart']});

    // Set a callback to run when the Google Visualization API is loaded.
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Day');
        data.addColumn('number', 'Cases');
        data.addColumn('number', 'Recovered');
        data.addColumn('number', 'Active');
        data.addColumn('number', 'Deaths');

//        get 10 last statistic updated api time
        for (var i = jsonData.length - 10; i < jsonData.length; i++) {
            var day = jsonData[i].lastUpdatedAtApify;
            var cases = jsonData[i].infected;
            var recovered = jsonData[i].recovered;
            var active= jsonData[i].treated;
            var deaths = jsonData[i].deaths;
            data.addRows([[day, cases, recovered, active, deaths]]);
        }
        ;

        var options = {
            'width': 1020,
            'height': 350,
            'legend': 'none',
            trendlines: {0:
                        {
                            type: 'polynomial',
                            degree: 3,
                            visibleInLegend: true,
                        }
            }  // Draw a trendline for data series 0.
        };

        // Instantiate and draw the chart.
        var chart = new google.visualization.ColumnChart(document.getElementById('continent_chart'));
        chart.draw(data, options);

        chart.draw(data, google.charts.Bar.convertOptions(options));
    }
</script>