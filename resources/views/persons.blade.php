@extends('template')

@section('content')





    <table class="table table-responsive">

        <th>id</th>
        <th>firtsname</th>
        <th>lastname</th>
        <th>names</th>
        <tbody>

            @foreach ($persons as $personss)
                <tr>
                    <td>{{ $personss->id }}</td>
                    <td>{{ $personss->firtsname }} </td>
                    <td>{{ $personss->lastname }} </td>
                    <td>{{ $personss->names }}</td>
                </tr>
            @endforeach

        </tbody>
    </table>



@endsection
