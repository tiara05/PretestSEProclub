<html>
<head>
    <title>CURD REST API in Codeigniter</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
</head>
<body>
    <div class="container">
        <br />
        
        <br />
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-12">
                        <center><h3>DATA REST API in Codeigniter</h3><br>
                            <h4 class="panel-title">Tiara Rahmania Hadiningrum</h4><br>
                            <h4 class="panel-title">Software Engineer</h4></center><br>
                    </div>
                    <!-- <div class="col-md-6" align="right">
                        <button type="button" id="add_button" class="btn btn-info btn-xs">Add</button>
                    </div> -->
                </div>
            </div>
            <div class="panel-body">
                <span id="success_message"></span>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th style="text-align: center;">First Name</th>
                            <th style="text-align: center;">Last Name</th>
                            <th style="text-align: center;">Tanggal Lahir</th>
                            <th style="text-align: center;">Umur</th>
                            <th style="text-align: center;">Alamat</th>
                            <th style="text-align: center;">Telepon</th>
                            <th style="text-align: center;">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>

<!-- <div id="userModal" class="modal fade">
    <div class="modal-dialog">
        <form method="post" id="user_form">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add User</h4>
                </div>
                <div class="modal-body">
                    <label>Enter First Name</label>
                    <input type="text" name="first_name" id="first_name" class="form-control" />
                    <span id="first_name_error" class="text-danger"></span>
                    <br />
                    <label>Enter Last Name</label>
                    <input type="text" name="last_name" id="last_name" class="form-control" />
                    <span id="last_name_error" class="text-danger"></span>
                    <br />
                    <label>Enter Tanggal Lahir</label>
                    <input type="text" name="tangal_lahir" id="tangal_lahir" class="form-control" />
                    <span id="tangal_lahir_error" class="text-danger"></span>
                    <br />
                    <label>Enter Umur</label>
                    <input type="text" name="umur" id="umur" class="form-control" />
                    <span id="umur_error" class="text-danger"></span>
                    <br /
                    ><label>Enter Alamat</label>
                    <input type="text" name="alamat" id="alamat" class="form-control" />
                    <span id="alamat_error" class="text-danger"></span>
                    <br />
                    <label>Enter Telepon</label>
                    <input type="text" name="telepon" id="telepon" class="form-control" />
                    <span id="telepon_error" class="text-danger"></span>
                    <br />
                    <label>Enter Email</label>
                    <input type="text" name="email" id="email" class="form-control" />
                    <span id="email_error" class="text-danger"></span>
                    <br />
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="user_id" id="user_id" />
                    <input type="hidden" name="data_action" id="data_action" value="Insert" />
                    <input type="submit" name="action" id="action" class="btn btn-success" value="Add" />
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </form>
    </div>
</div>
 -->
<script type="text/javascript" language="javascript" >
$(document).ready(function(){
    
    function fetch_data()
    {
        $.ajax({
            url:"<?php echo base_url(); ?>index.php/Rest_server/action",
            method:"POST",
            data:{data_action:'fetch_all'},
            success:function(data)
            {
                $('tbody').html(data);
            }
        });
    }

    fetch_data();


    
});
</script>