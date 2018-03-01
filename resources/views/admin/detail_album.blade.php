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
                        <tr>
                            <td><b>{{$album->title}}</b></td>
                            <td>{{$album->created_at}}</td>
                            <td>{{$album->updated_at}}</td>
                            <td>{{$album->user->name}}</td>
                            <td>
                                <a href="{{action('HomeController@get_editAlbum',['album_id' => $album->id])}}" class="btn btn-info btn-sm">
                                    Düzenle
                                </a>
                            </td>
                            <td>
                                <form action="{{action('HomeController@post_deleteAlbum')}}" method="post">
                                    <input type="hidden" name="id" value="{{$album  ->id}}">
                                    {{csrf_field()}}
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        Sil
                                    </button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br><br><br>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h3><b>Fotoğraflar</b></h3>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Başlık</th>
                        <th>Oluşturulma Tarihi</th>
                        <th>Güncellenme Tarihi</th>
                        <th>Oluşturan kullanıcı</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($album->photos as $photo)
                        <tr>
                            <td>{{$photo->pivot->title}}</td>
                            <td>{{$photo->pivot->created_at}}</td>
                            <td>{{$photo->pivot->updated_at}}</td>
                            <td>{{$photo->pivot->user->name}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
