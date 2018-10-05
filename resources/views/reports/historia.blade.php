<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Download</title>
    <style>
        <?php include(base_path().'/css/bootstrap.min.css');?>
    </style>
    <style>
        body{
            text-align: justify;
            font-size: 1.1em:
            color: #404040;
            padding-top: 8em;
            padding-bottom: 8em;
        }
        .sub_titul{
            color: #3c8dbc;
            text-align: center;
            text-decoration: underline;
            font-weight: bold;
            margin-top: 1em;
        }
        table{
            width: 100%;
        }
    </style>
</head>
<body>
    <p class="sub_titul">Historia Clinica</p>

    <div class="row">
        <div class="col-xs-6 col-xs-offset-3">
            <table class="table-striped">
                <tr>
                    <th>Nombre:</th>
                    <td>{{ $historiaclinica->paciente->name }}</td>
                </tr>
                <tr>
                    <th>Fecha:</th>
                    <td>{{ date('d/m/Y') }}</td>
                </tr>
            </table>
        </div>
    </div>

    <div style="margin-top: 2em">
        @include('reports._historia', ['historia'=> $historiaclinica])
    </div>
</body>
</html>
