<h1>Data User</h1>
<div align="right">
    <a href="{{route('user.create')}}">Tambah</a>
</div>
<table border="1" width="100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td></td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
                <a href="{{route('user.edit', $user->id)}}">Edit</a>
                <form action="{{route('user.destroy', $user->id)}}" method="post">
                    @csrf
                    @method("DELETE")
                    <!-- <input type="hidden" name="_method" value="DELETE"> -->
                    <button type="submit">Delete</button>
                </form>
                <!-- <a href="{{route('user.destroy', $user->id)}}" onclick="return confirm('Apakah anda yakin akan menghapus data ini??')">Delete</a> -->
            </td>
        </tr>
        @endforeach
    </tbody>
</table>