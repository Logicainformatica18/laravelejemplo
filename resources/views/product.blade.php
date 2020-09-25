@extends('template')

@section('content')





    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Gestionar product
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>


                <div class="modal-body">
                    <form action="" name="product" id="product">
                        <input type="hidden" name="id">
                        Category
                        <select name="category_id" id="" class="form-control">
                            @foreach ($category as $categorys)
                                <option value=" {{ $categorys->id }}"> {{ $categorys->description }}</option>

                            @endforeach
                        </select>
                        Description
                        <input type="text" name="description" class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" onclick="productUpdate()" class="btn btn-warning">Modificar</button>
                    <button type="button" onclick="productStore()" class="btn btn-success">Guardar</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <div id="mycontent">
        @include('producttable')
    </div>

@endsection
