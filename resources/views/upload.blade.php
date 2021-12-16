@extends('layouts.slime')
@section('content')
    <div class="row my-3">
        <div class="col col-md-6">
            <h3 class="h3">Upload</h3>
            <p>
                This is a lead paragraph. It stands out from regular paragraphs.</span>
            </p>
            
            <form class="row g-3" method="post" enctype="multipart/form-data" action="{{ route('file.upload') }}">
            @csrf
            <div class="col col-md-6 mb-2">
                <label for="validationCustom01" class="form-label">Name</label>
                <input type="text" class="form-control form-control-sm" name="firstName">
            </div>
            <div class="col col-md-6 mb-2">
                <label for="validationCustom02" class="form-label">File</label>
                <input type="file" class="form-control form-control-sm" name="fileUpload">
            </div>
            
            <div class="col-12">
                <button class="btn btn-sm btn-primary" type="submit">Upload</button>
            </div>
            </form>
        </div>
        <div class="col col-md-6">
            <h3 class="h3">Upload Result</h3>
        </div>
    </div>
@endsection