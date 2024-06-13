@extends('layouts.app')

@section('content')
<div class="main-content">
    <div class="row">
        <div class="col-xl-12">
            <div class="main-content-title-profile mb-50">
                <div class="main-content-title">
                    <h3>Add Package</h3>
                </div>
            </div>
            <div class="dashboard-profile-wrapper two">
                <div class="dashboard-profile-tab-content">
                    <form action="{{route('app.packages.store')}}" method="post" enctype="multipart/form-data"> 
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-inner mb-30">
                                    <label>Select Destination</label>
                                    <select name="destination_id" id="destination_id">
                                        @foreach ($destinations as $destination)
                                        <option value="{{$destination->id}}">{{$destination->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-inner mb-30">
                                    <label>Package Title</label>
                                    <input type="text" name="package_title" placeholder="Title here...">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-inner mb-30">
                                    <label>Feature Image</label>
                                    <input type="file" class="form-control" name="feature_img">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-inner mb-30">
                                    <label>Breadcrumb Image</label>
                                    <input type="file" class="form-control" name="breadcrumb_img">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-inner mb-30">
                                    <label>Rate</label>
                                    <input type="text" name="cost" placeholder="SEO Title">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-inner mb-30">
                                    <label>No Of Days</label>
                                    <select name="days" id="">
                                        <option value="">select Days</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-inner mb-30">
                                    <label>No Of Nights</label>
                                    <select name="nights" id="nights">
                                        <option value="">select Nights</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 mb-30">
                                <div class="form-inner">
                                    <label>Long Description</label>
                                    <textarea placeholder="Description here" name="desc" rows="4" id="desc"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-inner mb-30">
                                    <label>Images</label>
                                    <input type="file" class="form-control" name="images[]" multiple>
                                </div>
                            </div>
                        </div>
                        <div class="form-inner d-flex justify-content-end">
                            <button type="submit" class="primary-btn3">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
	ClassicEditor
		.create( document.querySelector( '#desc' ), {
			// toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
		} )
		.then( editor => {
			window.editor = editor;
		} )
		.catch( err => {
			console.error( err.stack );
		} );
</script>
@endsection