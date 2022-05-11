@extends('Admin.master')
@section('content')
    <div class="row">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>تصویر محصول</th>
                <th>نام محصول</th>
                <th>عملیات</th>
            </tr>
            </thead>

            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td><img src="{{ asset('storage/'. $product->image) }}" alt="" width="64" height="64"></td>
                        <td>{{ $product->title }}</td>
                        <td>
                            <form action="{{ route('products.destroy', $product->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">ویرایش محصول</a>
                                <button class="btn btn-danger">حذف محصول</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
