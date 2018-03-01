@extends('admin.layouts.app')

@section('admin_content')
    <form action="{{action('HomeController@post_editCategory')}}" method="post">
        <table class="table table-hover">
            <tr>
                <td>Kategori Adı</td>
                <td>
                    <input type="text" class="form-control" name="title" value="{{$category->title}}">
                    <input type="hidden" class="form-control" name="id" value="{{$category->id}}">
                    {{csrf_field()}}
                </td>
            </tr>

            <tr>
                <td>Oluşturulma Tarihi</td>
                <td>{{$category->created_at}}</td>
            </tr>

            <tr>
                <td>Güncelleme Tarihi</td>
                <td>{{$category->updated_at}}</td>
            </tr>

            <tr>
                <td>Oluşturan Kullanıcı</td>
                <td>{{$category->user->name}}</td>
            </tr>
        </table>
        <div style="text-align: right">
            <button type="submit" class="btn btn-primary">
                Güncelle
            </button>
        </div>
    </form>
@endsection