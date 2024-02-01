<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @php
        $mild_lake_names = App\Models\Mild_Lake::orderBy('Percentage_Decrease', 'desc')
            ->take(10)
            ->get();
        $moderate_lake_names = App\Models\Moderate_Lake::get();
        $severe_lake_names = App\Models\Severe_Lake::get();
    @endphp
    <table>

        <thead>
            <th>
                Year 2015
            </th>
            <th>
                Year 2016
            </th>
        </thead>
        <tbody>
            @foreach ($mild_lake_names as $mild_lake_name)
                <tr>
                    <td>
                        <a href="{{ route('lake.image', ['filename' => $mild_lake_name->Filename]) }}" target="blank">
                            {{ $mild_lake_name->Filename }}
                        </a>
                    </td>
                    <td>

                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
</body>

</html>
