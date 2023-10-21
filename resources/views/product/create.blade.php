@extends('layouts.layout')
@section('content')

{{Form::open(['route'=>'products.store','method'=>'GET'])}};
<div class="form">
    {[Form:label('product.name', 'nombre del producto') ]}
    {{Form:text('nombre_product',null,['class'=>form])}}
</div>
<div class="form">
    {[Form:label('description', 'Describe_producto') ]}
    {{Form:textarea('description',null,['class'=>form])}}

</div>
   

<div class="form">
{[Form:label('price', 'Precio del producto') ]}
{{Form:text('price',null,['class'=>form])}}
</div>
<div class="form">
{[Form:label('stock', 'Productos existentes') ]}
{{Form:text('stock',null,['class'=>form])}}
</div>
<div class="form">
{[Form:submit]}
</div>





@endsection