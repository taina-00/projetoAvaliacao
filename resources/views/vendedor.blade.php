


@foreach ($vendedores as $vendedor)
  <div>
    {{$vendedor->name}} 
    {{$vendedor->matricula}} 
    {{$vendedor->comissapo}}
  </div>
@endforeach