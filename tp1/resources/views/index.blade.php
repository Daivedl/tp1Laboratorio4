<table style="border-collapse: collapse; width: 100%;" border="1">
        <thead>
            <tr>
                <th>Empresa</th>
                <th>Ver</th>
            </tr>
        </thead>
        <tbody>
            @forelse($empresas as $empresa)
            <tr>
            
                <td>{{$empresa->denominacion}}</td>
                
                <td><a href="{{url('/detalle/'.$empresa->id)}}">Ver página</a></td>
               

            @empty
                
            @endforelse
            </tr>
        </tbody>
</table>
