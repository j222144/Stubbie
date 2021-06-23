@extends('stubby.layouts.app')
@section('content')
        <div class="jumbotron vertical-center d-flex">
            <div class="container bg-grey rounded p-4">
                <div class="row align-items-center p-2">
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
                                        <input type="text" class="form-control" placeholder="Short URL..." name="short_url">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-8">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">stubbyapp.com/</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Name..." name="stubby_name">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="submit">Shorten</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row align-items-center">
                    <table class="table table-striped table-hover table-responsive-stack">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center">Stubby URL</th>
                                <th class="text-center">Website URL</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Expires in</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="text-center"><a href="#">stubby.com/haha</a></td>
                            <td class="text-center"><a href="#">www.youtube.com</a></td>
                            <td class="text-center">Funny Youtube</td>
                            <td class="text-center">3.5 days</td>
                            <td class="text-center"><a href="#"><strong>Delete</strong></a></td>
                        </tr>
                        <tr>
                            <td class="text-center"><a href="#">stubby.com/haha</a></td>
                            <td class="text-center"><a href="#">www.youtube.com</a></td>
                            <td class="text-center">Funny Youtube</td>
                            <td class="text-center">3.5 days</td>
                            <td class="text-center"><a href="#"><strong>Delete</strong></a></td>
                        </tr>
                        <tr>
                            <td class="text-center"><a href="#">stubby.com/haha</a></td>
                            <td class="text-center"><a href="#">www.youtube.com</a></td>
                            <td class="text-center">Funny Youtube</td>
                            <td class="text-center">3.5 days</td>
                            <td class="text-center"><a href="#"><strong>Delete</strong></a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection
