@extends('master')


@section('content')
        <h2>Create New App</h2>
        <form class="form-horizontal" action="{{ route('update', $first_info->id) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
            <div class="mb-3">
                <label for="app_name" class="form-label">App Name</label>
                <input type="text" class="form-control" name="app_name" id="app_name" value="{{ $first_info->app_name}}">
            </div>
            <div class="mb-3">
                <label for="bg_image" class="form-label">Upload Background Image</label>
                <input class="form-control" type="file" name="bg_image" id="bg_image" value="{{ $first_info->bg_image}}">
            </div>
            <!-- <div class="mb-3">
                <label for="bg_image" class="form-label">Background Image</label>
                <input type="text" class="form-control" name="bg_image" id="bg_image">
            </div> -->
            
            <!-- <div class="mb-3">
                <label for="theme_color" class="form-label">Theme Color</label>
                <input type="text" class="form-control" name="theme_color" id="theme_color" value="{{ $first_info->theme_color }}">
            </div>

            <div class="mb-3">
                <label for="btn_color" class="form-label">Button Color</label>
                <input type="text" class="form-control" name="btn_color" id="btn_color" value="{{ $first_info->btn_color }}">
            </div> -->

            <!-- <div>
                <label for="exampleColorInput" class="form-label">Choose Theme Color</label>
                <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#563d7c" title="Choose theme color">
                <br />
            </div>

            <div>
                <label for="exampleColorInput" class="form-label">Choose Button Color</label>
                <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#71d71d" title="Choose button color">
                <br>
            </div> -->

            <div>
                <label for="exampleColorInput" class="form-label">Choose Theme Color</label>
                <input type="color" class="form-control form-control-color" id="exampleColorInput" name="theme_color" value="#563d7c" title="Choose theme color">
                <br />
            </div>

            <div>
                <label for="exampleColorInput" class="form-label">Choose Button Color</label>
                <input type="color" class="form-control form-control-color" id="exampleColorInput" name="btn_color" value="#71d71d" title="Choose button color">
                <br>
            </div>    
            
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
@endsection
