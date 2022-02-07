@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span>Барча Меню категориялари</span>
                        <a href="{{ route('admin.categories.index') }}" class="btn btn-outline-success"> Барча категориялар</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.categories.update', $item->id) }}" method="POST">
                            @method('PATCH') @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nomi - ru</label>
                                <input class="form-control" value="{{ $item->getTranslation('name', 'ru') }}" name="name[ru]">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nomi - en</label>
                                <input class="form-control" value="{{ $item->getTranslation('name', 'en') }}" name="name[en]">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nomi - uz</label>
                                <input class="form-control" value="{{ $item->getTranslation('name', 'uz') }}" name="name[uz]">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Izoh</label>
                                <textarea name="description" id="" cols="30" rows="10" class="form-control">{{ $item->description }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary mt-4">Saqlash</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
