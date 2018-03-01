@extends('admin.layouts.app')

@section('admin_content')
    <form action="{{action('HomeController@post_editAlbum')}}" method="post">
        <table class="table table-hover">
            <tr>
                <td>Albüm Adı</td>
                <td>
                    <input type="text" class="form-control" name="title" value="{{$album->title}}">
                    <input type="hidden" class="form-control" name="id" value="{{$album->id}}">
                    {{csrf_field()}}
                </td>
            </tr>

            <tr>
                <td>Oluşturulma Tarihi</td>
                <td>{{$album->created_at}}</td>
            </tr>

            <tr>
                <td>Güncelleme Tarihi</td>
                <td>{{$album->updated_at}}</td>
            </tr>

            <tr>
                <td>Oluşturan Kullanıcı</td>
                <td>{{$album->user->name}}</td>
            </tr>
        </table>
        <div style="text-align: right">
            <button type="submit" class="btn btn-primary">
                Güncelle
            </button>
        </div>
    </form>
@endsection