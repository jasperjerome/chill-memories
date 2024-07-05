@extends('layouts.app')

@section('content')
<div class="main-content">
    <div class="row">
        <div class="col-xl-12">
            <div class="main-content-title-profile mb-50">
                <div class="main-content-title">
                    <h3>About Us</h3>
                </div>
            </div>
            <div class="recent-listing-area">
                <div class="title-and-tab">
                    <h6 class="opacity-0">Tour Package Info</h6>
                    <a href="{{route('app.about_us.create')}}" class="primary-btn3">Create New</a>
                    <div class="search-area d-none">
                        <form>
                            <div class="search-box">
                                <input type="text" placeholder="Search Here">
                                <button type="submit"><i class="bx bx-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="recent-listing-table table-responsive">
                    <table class="eg-table2">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($data->count())
                                @foreach ($data as $index => $datas)
                                <tr>
                                    <td>{{$index+1}}</td>
                                    <td>{{$datas->title}}</td>
                                    <td>{{$datas->desc}}</td>
                                    <td><img src="{{$datas->img}}" style="width: 200px;" alt=""></td>
                                    <td>
                                        <ul class="d-flex align-items-center action-btns">
                                            <li class="nav-item mx-2 text-danger"><a href="#!" data-bs-toggle="modal" data-bs-target="#delete_modal{{$datas->id}}" class="nav-link button-delete"> <i class="fas fa-trash"></i> </a></li>
                                            <li class="nav-item mx-2 text-primary"><a href="{{route('app.about_us.edit', ['id'=>$datas->id])}}" class="nav-link button-edit"> <i class="fas fa-pencil-alt"></i> </a></li>
                                        </ul>
                                    </td>
                                </tr>

                                {{-- delete modal --}}
                                <div class="modal fade" id="delete_modal{{$datas->id}}" data-bs-keyboard="false" tabindex="-1" aria-labelledby="delete_modal" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="delete_modal">Modal title</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                          <h4 class="text-center">Are you sure you want to delete?</h4>
                                          <p class="text-center">This change is permanent and cannot be undone.</p>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                          <form action="{{route('app.about_us.delete', ['id'=>$datas->id])}}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Yes</button>
                                        </form>
                                    </div>
                                      </div>
                                    </div>
                                  </div>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection