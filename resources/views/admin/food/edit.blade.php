@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span>Барча Овкатлар</span>
                        <a href="{{ route('admin/foods/index') }}" class="btn btn-outline-success"> Ортга</a>
                    </div>
                    <div class="card-body">
                        <form action="/admin/foods/{{ $item->id }}" method="POST" enctype="multipart/form-data">
                            @csrf @method('PATCH')
                            <div class="form-group">
                                <label for="">Narxi</label>
                                <input type="text" class="form-control my-2" name="narxi" value="{{ $item->narxi }}">
                            </div>
                            <div class="form-group">
                                <label for="">Nomi</label>
                                <input type="text" class="form-control my-2" name="nomi" value="{{ $item->nomi }}">
                            </div>
                            <div class="form-group">
                                <label for="">Retsepti</label>
                                <input type="text" class="form-control my-2" name="retsept" value="{{ $item->retsept }}">
                            </div>
                            <div class="form-group">
                                <label for="">Rasmi</label>
                                <input type="file" class="form-control my-2" name="image" value="{{ $item->image }}">
                            </div>
                            <button type="submit" class="btn btn-primary mt-4 col-4 offset-8" value="{{ $item->id }}">Озгартириш</button>
                        </form>   
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection