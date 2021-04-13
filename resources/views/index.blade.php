@extends('master')

@section('content')
        <table class="table table-responsive table-hover">
            <tr>
                <th>Serial</th>
                <th>App Name</th>
                <th>Theme Color</th>
                <th>Background Image</th>
                <th>Button Color</th>
                <th>Action</th>
            </tr>
            <!-- @php $i = 0; @endphp -->

            @foreach ($firstPage as $firstPage)
            <!-- @php $i++ @endphp -->
                <tr>
                    <!-- <td>{{ $i }}</td> -->
                    <td>#</td>
                    <td>{{ $firstPage->app_name }}</td>
                    <td>{{ $firstPage->theme_color }}</td>
                    <td>{{ $firstPage->bg_image }}</td>
                    <td>{{ $firstPage->btn_color }}</td>
                    <td> 
                        <!-- <a href="{{ route('edit', $firstPage->id) }}" class="btn btn-success">Edit</a> -->
                        <form class="form-inline" action="{{ route('delete', $firstPage->id) }}" method="post">
                            {{ csrf_field() }}
                            <!-- <input type="submit" class="btn btn-danger" value="delete" /> -->
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
@endsection
