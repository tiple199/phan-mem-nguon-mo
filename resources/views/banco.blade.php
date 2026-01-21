<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ban co</title>
  
    </style>
</head>
<body>
    <div style="display:flex;flex-direction:column;align-items:center;}">
        <h1>Ban co</h1>
        <div style="border:1px solid black;display:inline-block;font-size:0;line-height:0;">
    @for ($i = 0; $i < $n; $i++)
        @for ($j = 0; $j < $n; $j++)
            <span style="display:inline-block;width:30px;height:30px;
                background-color: {{ (($i+$j)%2==0) ? 'black' : 'white' }};"></span>
        @endfor
        <br/>
    @endfor
</div>

    </div>
</body>
</html>