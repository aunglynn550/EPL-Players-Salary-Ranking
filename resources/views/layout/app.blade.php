<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Player Salary Ranking</title>
</head>
<body>
<form action="{{ route( 'players.update') }}" method="get">
<div class="container p-3">
    <div class="row">
        <div class="col-md-2">
            <select class="form-select rounded" name="fee" id="fee">
            <option value="weekly_salary">Weekly Salary</option>
            <option value="annual_salary">Annual Salary</option>
            <option value="contract_value">Contract Value</option>
            <option value="transfer_fee">Transfer Fee</option>
            </select>

        </div>
        <!-- col -->

        <div class="col-md-2">
            <select class="form-select rounded" name="position" id="position">
            <option value="all">All Positions</option>    
            <option value="forward">Forward</option>
            <option value="midfield">Midfield</option>
            <option value="defence">Defence</option>
            <option value="goal">Goal Keeper</option>
            </select>

        </div>
        <!-- col -->

        <div class="col-md-2">
            <input type="submit" class="btn btn-info m-3" value="Update">
        </div>

    </div>
    <!-- row -->
</div>
<!-- container -->

    
</form>



@yield('content')


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

</body>
</html>