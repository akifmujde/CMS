@extends('admin.layouts.app')

@section('admin_content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Kategori Adı</th>
                            <th>Oluşturulma Tarihi</th>
                            <th>Güncellenme Tarihi</th>
                            <th>Oluşturan Kullanıcı</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><b>{{$category->title}}</b></td>
                            <td>{{$category->created_at}}</td>
                            <td>{{$category->updated_at}}</td>
                            <td>{{$category->user->name}}</td>
                            <td>
                                <a href="{{action('HomeController@get_editCategory',['category' => $category->id])}}" class="btn btn-info btn-sm">
                                    Düzenle
                                </a>
                            </td>
                            <td>
                                <form action="{{action('HomeController@post_deleteCategory')}}" method="post">
                                    <input type="hidden" name="id" value="{{$category->id}}">
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
                <h3><b>İçerikler</b></h3>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Başlık</th>
                            <th>İçerik</th>
                            <th>Oluşturulma Tarihi</th>
                            <th>Güncellenme Tarihi</th>
                            <th>Yayınlanma Durumu</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($category->posts as $ctgr)
                            <tr>
                                <td>{{$ctgr->title}}</td>
                                <td>{{$ctgr->content}}</td>
                                <td>{{$ctgr->created_at}}</td>
                                <td>{{$ctgr->updated_at}}</td>
                                <td>{{$ctgr->show}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection