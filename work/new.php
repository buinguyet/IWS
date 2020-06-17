<?php include('header.php'); ?>

<div class="main-body-content w-100 ets-pt">
    <div class="container">
        <div class="well" style="background-color: #eef4fb;">
            <div class="row">

                <!-- Blog Entries Column -->

                <div class="col-md-8" id="news">
                </div>
                <!-- Sidebar Widgets Column -->
                <div class="col-md-4">
                    <?php if ($_SESSION['username'] == true) { ?>
                        <div align="right" style="margin-bottom:5px;">
                            <button type="button" name="add_button" id="add_button" class="btn btn-success btn-xs">Add New</button>
                        </div>
                    <?php } ?>

                    <!-- Side Widget -->
                    <div class="card my-4">
                        <h5 class="card-header" style="text-align: center;">How to protect yourself!</h5>
                        <div class="card-body">
                            <ol>
                                <li><span>Wash your hands frequently</span></li>
                                <hr>
                                <li><span>Maintain social distancing</span></li>
                                <hr>
                                <li><span>Avoid touching eyes, nose and mouth</span></li>
                                <hr>
                                <li><span>Practice respiratory hygiene</span></li>
                                <hr>
                                <li><span>If you have fever, cough and difficulty
                                        breathing, seek medical care early</span></li>
                                <hr>
                                <li><span>Stay informed and follow advice given by
                                        your healthcare provider</span></li>
                                <hr>

                            </ol>
                        </div>
                    </div>
                </div>
            </div>
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
                    <h4 class="modal-title">Add News</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Enter Title</label>
                        <input type="text" name="title" id="title" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Enter Link Image</label>
                        <input type="text" name="image" id="image" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Enter Brief</label>
                        <input type="text" name="brief" id="brief" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Enter Description</label>
                        <input type="text" name="descr" id="descr" class="form-control" />
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="hidden_id" id="hidden_id" />
                    <input type="hidden" name="action" id="action" value="insert_new" />
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
                url: "fetch_new.php",
                success: function (data)
                {
                    $('#news').html(data);


                }
            })
        }
        $('#add_button').click(function () {
            $('#action').val('insert_new');
            $('#button_action').val('Insert');
            $('.modal-title').text('Add New');
            $('#apicrudModal').modal('show');
        });

        $('#api_crud_form').on('submit', function (event) {
            event.preventDefault();
            if ($('#title').val() == '')
            {
                alert("Enter Title");
            } else if ($('#image').val() == '')
            {
                alert("Enter Link Image");
            } else if ($('#brief').val() == '')
            {
                alert("Enter Brief");
            } else if ($('#descr').val() == '')
            {
                alert("Enter Description");
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
            var action = 'fetch_single_new';
            $.ajax({
                url: "action.php",
                method: "POST",
                data: {id: id, action: action},
                dataType: "json",
                success: function (data)
                {
                    $('#hidden_id').val(id);
                    $('#title').val(data.title);
                    $('#image').val(data.image);
                    $('#brief').val(data.brief);
                    $('#descr').val(data.descr);
                    $('#action').val('update_new');
                    $('#button_action').val('Update');
                    $('.modal-title').text('Edit Data');
                    $('#apicrudModal').modal('show');
                }
            })
        });

        $(document).on('click', '.delete', function () {
            var id = $(this).attr("id");
            var action = 'delete_new';
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


