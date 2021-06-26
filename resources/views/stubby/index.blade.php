@extends('stubby.layouts.app')
@section('content')
        <div class="jumbotron vertical-center d-flex">
            <div class="container bg-grey rounded p-4">
                    <div class="col-sm text-center float-center">
                        <form action='#' autocomplete="off">
                            @csrf
                            <div class="row justify-content-center">
                                <div class="col-sm-12 col-md-6 col-lg-4">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Long URL..." name="long_url">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-4">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">stubbyapp.com/</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Short URL..." name="short_url">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-10 col-lg-5">
                                    <div class="input-group mb-3">

                                        <input type="text" class="form-control" placeholder="Name..." name="stubby_name">
                                        <div class="input-group-append">
                                            <button class="btn btn-dark" type="submit">Shorten</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                <div class="row justify-content-center m-0">
                    <div>
                        <table class="table table-striped table-hover align-middle stubby-table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Stubby URL</th>
                                    <th scope="col">Website URL</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Expires in</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @forelse($stubbies as $stubby)
                            <tr>
                                <td><a href="#">{{$stubby->short_url}}</a></td>
                                <td><a href="#">{{$stubby->long_url}}</a></td>
                                <td>{{$stubby->stubby_name}}</td>
                                <td>{{$stubby->expiry_time}}</td>
                                <td><a href="#"><strong>Delete</strong></a></td>
                            </tr>
                            @empty
                                <p class="text-center">No data to display</p>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection
