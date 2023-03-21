<table>
    <thead>
        
    </thead>
    <tbody>
        
       <section>
        <h1>Bienvenidos al menu generos</h1>
       </section>

           @foreach($generos as $genero)
            <li>
                <a href="{{route('generos.create', $genero->id)}}">{{$genero->name}}</a>
            </li>
            @endforeach
         
        
    </tbody>
</table>

