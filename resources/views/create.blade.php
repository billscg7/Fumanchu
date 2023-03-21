
<table>
    <thead>
        
    </thead>
    <tbody>
        
       <section>
        <h1>Bienvenidos a las peliculas del genero: _________</h1>
       </section>

           @foreach($peliculas as $pelicula)
            <li>
               {{$pelicula}}
            
            </li>
            @endforeach
         
        
    </tbody>
</table>

