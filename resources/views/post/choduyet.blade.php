@extends('layouts.account')

@section('content')

<table>
    <tr>
        <th>Tiêu đề</th>
        <th>Trạng thái</th>
    </tr>
    @foreach ($posts as $post)
    <tr>
        <td>{{ $post->job_title }}</td>
        <td>
            @if ($post->status == 'pending')
                <span class="text-warning">Đang chờ duyệt</span>
            @elseif ($post->status == 'approved')
            
                <span class="text-success">Đã duyệt</span>
            @else
                <span class="text-danger">Bị từ chối</span>
            @endif
        </td>
    </tr>
    @endforeach
</table>

@endsection
