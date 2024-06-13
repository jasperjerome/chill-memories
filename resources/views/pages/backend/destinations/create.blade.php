@extends('layouts.app')

@section('content')
<div class="main-content">
    <div class="row">
        <div class="col-xl-12">
            <div class="main-content-title-profile mb-50">
                <div class="main-content-title">
                    <h3>Add Destination</h3>
                </div>
            </div>
            <div class="dashboard-profile-wrapper two">
                <div class="dashboard-profile-tab-content">
                    <form action="{{route('app.destinations.store')}}" method="post" enctype="multipart/form-data"> 
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-inner mb-30">
                                    <label>Destination Title</label>
                                    <input type="text" name="title" placeholder="Title here...">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-inner mb-30">
                                    <label>Wheather</label>
                                    <select name="wheather" id="wheather">
                                        <option value="3">Select Location</option>
                                        <option value="2">Chennai</option>
                                        <option value="1">Salem</option>
                                        <option value="5">Coimbatore</option>
                                    </select>
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
                            <div class="col-md-6">
                                <div class="form-inner mb-30">
                                    <label>SEO Title</label>
                                    <input type="text" name="seo_title" placeholder="SEO Title">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-inner mb-30">
                                    <label>SEO Meta Description</label>
                                    <input type="text" name="meta_desc" placeholder="SEO Meta description">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-inner mb-30">
                                    <label>Description</label>
                                    <textarea name="desc" id="desc" placeholder="Description"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 mb-30">
                                <div class="form-inner">
                                    <label>Long Description</label>
                                    <textarea placeholder="Description here" name="long_desc" rows="4" id="long_desc"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-inner mb-30">
                                    <label>Youtube Video Link</label>
                                    <input type="text" name="video_link" placeholder="Ex: https://www.youtube.com/embed/_I4Zax5Wkwk">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-inner mb-30">
                                    <label>Images</label>
                                    <input type="file" class="form-control" name="images[]" multiple>
                                </div>
                            </div>
                        </div>
                        <div class="upload-img-area d-none">
                            <div class="upload-img-wrapper">
                                <div class="drag-area">
                                    <button type="button" class="upload-btn"><i
                                            class="bi bi-plus-lg"></i></button>
                                    <input type="file" hidden="">
                                </div>
                            </div>
                        </div>
                        <div class="d-none form-inner mb-50">
                            <label class="containerss">
                                <input type="checkbox">
                                <span class="checkmark"></span>
                                <span class="text">Update details in all properties included in this
                                    site.</span>
                            </label>
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
		.create( document.querySelector( '#long_desc' ), {
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