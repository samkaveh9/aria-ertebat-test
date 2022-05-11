@extends('Admin.master')
@section('content')
    <div class="row">
       <form action="{{ route('products.store') }}" method="post" class="form" enctype="multipart/form-data">
           @csrf
           @if($errors->any())
           <div class="alert alert-danger">
                   <ul>
                       @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                       @endforeach
                   </ul>
           </div>
           @endif

           <div class="col-md-6 offset-md-3">
               <div class="form-group">
                   <label for="">عنوان</label>
                   <input type="text" name="title" class="form-control">
               </div>

               <div class="form-group">
                   <label for="">تصویر محصول</label>
                   <input type="file" name="image" class="form-control">
               </div>

               <div class="form-group">
                   <label for="">قیمت محصول</label>
                   <input type="text" name="price" class="form-control">
               </div>

               <div class="form-group">
                   <label for="">توضیحات کوتاه</label>
                   <textarea type="text" name="description" class="form-control"></textarea>
               </div>

               <div class="form-group">
                   <label for="">توضیحات</label>
                   <textarea type="text" name="content" class="form-control"></textarea>
               </div>
               <button class="btn btn-primary" type="submit">ثبت</button>
           </div>
       </form>
    </div>
@endsection
