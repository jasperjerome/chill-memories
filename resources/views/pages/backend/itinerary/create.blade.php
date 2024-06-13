@extends('layouts.app')

@section('content')
<div class="main-content">
    <div class="row">
        <div class="col-xl-12">
            <div class="main-content-title-profile mb-50">
                <div class="main-content-title">
                    <h3>Add Itinerary</h3>
                </div>
            </div>
            <div class="dashboard-profile-wrapper two">
                <div class="dashboard-profile-tab-content">
                    <form action="{{route('app.itinerary.store')}}" id="itinerary-form" method="post"> 
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-2">
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
                                    <label>Itinerary Title</label>
                                    <input type="text" name="title" id="title" placeholder="Itinerary Title">
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 mb-30">
                                <div class="form-inner">
                                    <label>Itinerary Description</label>
                                    <textarea placeholder="Description here" name="desc" rows="4" id="desc"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-inner d-flex justify-content-end">
                            <button type="submit" class="primary-btn3">Save</button>
                        </div>
                    </form>

                    <div class="mt-5">
                    </div>
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