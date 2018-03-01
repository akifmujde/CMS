@extends('admin.layouts.app')

@section('admin_content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Albüm Adı</th>
                        <th>Oluşturulma Tarihi</th>
                        <th>Güncellenme Tarihi</th>
                        <th>Oluşturan Kullanıcı</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($albums as $album)
                        <tr>
                            <td><b>{{$album->title}}</b></td>
                            <td>{{$album->created_at}}</td>
                            <td>{{$album->updated_at}}</td>
                            <td>{{$album->user->name}}</td>
                            <td>
                                <a href="{{action('HomeController@get_detailAlbum',['album_id' => $album->id])}}" class="btn btn-primary btn-sm">
                                    Ayrıntılar
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <hr><br>
        <form action="{{action('HomeController@post_addAlbum')}}" method="post">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <input type="text" class="form-control" name="title">
                    <input type="hidden" class="form-control" name="user_id" value="{{\Illuminate\Support\Facades\Auth::id()}}">
                    {{csrf_field()}}
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <button type="submit" class="btn btn-success">
                        Albüm Ekle
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
