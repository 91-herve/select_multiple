<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/boostrap-select.css">
    <link rel="stylesheet" href="css/boostrap.min.css">
    <script src="js/jquery.min.js"></script>

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="clo-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Bootstrap Multi Select Dropdown with Checkboxes using Jquery in PHP</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                            </div>
                            <div class="col-md-6">
                                <form method="post" id="framework_form">
                                    <div class="form-group">
                                        <label for="">Liste</label>
                                        <select class="form-control mb-3 selectpicker" name="framework[]" id="framework" multiple data-live-search="true">
                                            <option value="admin">Admin</option>
                                            <option value="moderator">Moderator</option>
                                            <option value="user">User</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-info" name="submit" value="Submit" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="js/boostrap.bundle.min.js"></script>
    <script src="js/boostrap-select.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#framework_form').on('submit', function(event) {
                event.preventDefault();
                var form_data = $(this).serialize();
                $.ajax({
                    url: "insert.php",
                    method: "POST",
                    data: form_data,
                    success: function(data) {
                               alert(data);
                    }
                });
            });
        });
    </script>
</body>

</html>