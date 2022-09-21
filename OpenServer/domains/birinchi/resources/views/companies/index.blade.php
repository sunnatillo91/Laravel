<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bu tashkilotlar ro'yxati</title>
</head>
<body>
    <h2>Bu tashkilotlar ro'yxati</h2>
    <br>
    <table border="1">
        <thead>
            <tr>
                <td>T/R</td>
                <td>Tashkilot nomi</td>
                <td>Tashkilot manzili</td>
                <td>Telefon raqami</td>
            </tr>
        </thead>
        <tbody>
            @foreach($companies as $company)
                <tr>
                    <td>T/R</td>
                    <td>{{ $company->name }}</td>
                    <td>{{ $company->address}}</td>
                    <td>{{ $company->phone}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>