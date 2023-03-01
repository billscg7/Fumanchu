Bienvenidos


 <table>
    <thead>
        <tr>
            <th colspan="2">ID</th>
             <th colspan="2">NAME</th>
              <th colspan="2">BR</th>
              <th colspan="2">PR</th>
        </tr>
    </thead>
    <tbody>
       
           @foreach($pets as $item)
            <tr>
              <td >{{ $item->id }} </td>
              <td>{{ $item->name }}</td> 
               <td>{{ $item->breed }}</td> 
               <td>{{ $item->price }}</td> 
               </tr>
            @endforeach
         
        
    </tbody>
</table>
