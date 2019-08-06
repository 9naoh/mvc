<?php 
    $weather = "nang";
    $data = [
        [
            'name' => "hoang",
            'job' => "dev"
        ],
        [
            'name' => "tungbd",
            'job' => "cai win dao"
        ]
    ];
?>
@foreach ($data as $item)
<h1> Ten: {{ $item['name'] }}</h1>
<h2>Job: {{$item['job'] }}</h2>
@endforeach 




