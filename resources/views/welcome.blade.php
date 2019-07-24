<?php
    $weather = "nắng";
    $data = [
        [
            'name' => "Baro",
            'job' => "Developer"
        ],
        [
            'name' => "Hajji",
            'job' => "Tester"
        ]
    ];
?>

@foreach ($data as $item)
    <h1>Tên: {{ $item['name'] }}</h1>
    <h2>Công việc: {{ $item['job'] }}</h2>
    <br>
@endforeach









