@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                <ul>
                    <li>
                        <a href="{{action('HomeController@get_albums')}}" class="btn btn-link">Albümler</a>
                    </li>
                    <li>
                        <a href="{{action('HomeController@get_categories')}}" class="btn btn-link">Kategoriler</a>
                    </li>
                    <li>
                        <a href="{{action('HomeController@get_categories')}}" class="btn btn-link">İçerikler</a>
                    </li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
                @yield('admin_content')
            </div>
        </div>
    </div>
@endsection