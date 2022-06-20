<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lagbe - Dashboard</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    
    <div class="center">
        <h3>Welcome to Dashboard</h3>
        <table>
            <thead>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </thead>
            <tbody>
                <tr>
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    <td><a href="logout">Logout</a></td>
                </tr>
            </tbody>
        </table>
        <button id="date-show" class="mdc-button mdc-button--outlined">
            <span class="mdc-button__ripple"></span>
            <span class="mdc-button__label">Congrats</span>
        </button>
    </div>

    <script src="js/app.js"></script>
</body>
</html>