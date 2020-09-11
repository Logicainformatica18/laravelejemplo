<table class="table table-responsive">

    <th>id</th>
    <th>firtsname</th>
    <th>lastname</th>
    <th>names</th>
    <th>acciones</th>
    <tbody>

        @foreach ($persons as $personss)
            <tr>
                <td>{{ $personss->id }}</td>
                <td>{{ $personss->firtsname }} </td>
                <td>{{ $personss->lastname }} </td>
                <td>{{ $personss->names }}</td>
                <td>    <!-- Button trigger modal -->
                    <button type="button"onclick="personsEdit({{ $personss->id }})" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                       edit
                    </button>
                </td>
                <td>    <!-- Button trigger modal -->
                    <button type="button"onclick="personsDestroy({{ $personss->id }})" class="btn btn-danger">
                       delete
                    </button>
                </td>
            </tr>
        @endforeach

    </tbody>
</table>
