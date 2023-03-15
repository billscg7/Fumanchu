<table>
    <thead>
        <tr>
            <th colspan="2">ID</th>
             <th colspan="2">TITLE</th>
              <th colspan="2">DESC</th>
              <th colspan="2">GENERO</th>
        </tr>
    </thead>
    <tbody>
       
           @foreach($peliculas as $pelicula)
            <tr>
              <td >{{ $pelicula->id }} </td>
              <td>{{ $pelicula->title }}</td> 
               <td>{{ $pelicula->description }}</td> 
               <td>{{ $pelicula->generos->name }}</td> 
               </tr>
            @endforeach
         
        
    </tbody>
</table>

