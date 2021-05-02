<table class="table table-bordered">
    <thead>
        <tr>
            <td width="80">Action</td>
            <td>Person</td>
            <td>Occupation</td>
        </tr>
    </thead>
    <tbody>
        @foreach($testimony as $testimony)

            <tr>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route' => ['backend.testimony.destroy', $testimony->id]]) !!}
                        <a href="{{ route('backend.testimony.edit', $testimony->id) }}" class="btn btn-xs btn-default">
                            <i class="fa fa-edit"></i>
                        </a>
                        @if($testimony->id == config('cms.default_testimony_id'))
                            <button onclick="return false" type="submit" class="btn btn-xs btn-danger disabled">
                                <i class="fa fa-times"></i>
                            </button>
                        @else
                            <button onclick="return confirm('Are you sure?');" type="submit" class="btn btn-xs btn-danger">
                                <i class="fa fa-times"></i>
                            </button>
                        @endif
                    {!! Form::close() !!}
                </td>
                <td>{{ $testimony->Person }}</td>
                <td>{{ $testimony->Occupation }}</td>
            </tr>

        @endforeach
    </tbody>
</table>
