@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span>Барча Меню категориялари</span>
                        <!-- <a href="/admin/categories/create" class="btn btn-success"> Янги Яратиш</a> -->
                        <a href="{{ route('admin.categories.create') }}" class="btn btn-success"> Янги Яратиш</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">#ID</th>
                                <th scope="col">Nomi-uz</th>
                                <th scope="col">Nomi-ru</th>
                                <th scope="col">Nomi-en</th>
                                <th scope="col">Izoh</th>
                                <th scope="col">Amaliyotlar</th>
                            </tr>
                            </thead>

                            <tbody>
                                @foreach($categories as $item)
                                    <tr>
                                        <th>{{ $item->id }}</th>
                                        <td>{{ $item->getTranslation('name', 'uz') }}</td>
                                        <td>{{ $item->getTranslation('name', 'ru') }}</td>
                                        <td>{{ $item->getTranslation('name', 'en') }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <a href="{{ route('admin.categories.edit', $item->id) }}" class="btn btn-success">Tahrirlash</a>
                                                <form action="{{ route('admin.categories.destroy', $item->id) }}" method="POST" class="my-2">
                                                    @csrf @method('DELETE')
                                                    <button class="btn btn-danger">O'chirish</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        {{ $categories->links() }}, Jami: {{ $categories->total() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
