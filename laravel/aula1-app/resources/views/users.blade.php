<h1>Usuarios</h1>
<br>
<table border='1' style="font-size:30px">
    <thead style="text-align:center; color:red">
        <tr>
            <td>Nome</td>
            <td>E-mail</td>
        </tr>
    </thead>


@foreach($users as $user)
<tr>
     <td>{{$user->name}}</td>
     <td>{{$user->email}}</td>
</tr>

  @endforeach
 </table> 
