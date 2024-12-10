@extends('layouts.account')

@section('content')


<!-- account/chapnhan.blade.php -->
@if($posts->isEmpty())
<p>Không có bài viết chờ duyệt.</p>
@else
<table>
    <tr>
        <th>Tiêu đề</th>
        <th>Công ty</th>
        <th>Loại việc làm</th>
        <th>Địa điểm</th>
        <th>Cấp độ</th>
        <th>Trình độ học vấn</th>
        <th>Hạn nộp hồ sơ</th>
    </tr>
    @foreach ($posts as $post)
    <tr>
        <td>{{ $post->job_title }}</td>
        <td>{{ $post->company_id }}</td>
        <td>{{ $post->employment_type }}</td>
        <td>{{ $post->job_location }}</td>
        <td>{{ $post->job_level }}</td>
        <td>{{ $post->education_level }}</td>
        <td>{{ $post->deadline }}</td>
        <td>
            <!-- Form Duyệt -->
            <form action="{{ route('posts.approve', $post->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('PUT')
                <button type="submit" class="btn btn-success">Duyệt</button>
            </form>

            <!-- Form Từ chối -->
            <form action="{{ route('posts.reject', $post->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('PUT')
                <button type="submit" class="btn btn-danger">Từ chối</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endif


@endSection

