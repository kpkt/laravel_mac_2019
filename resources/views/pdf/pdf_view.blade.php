<style>
    table { width: 100%; border-collapse: collapse; }
    th { font-weight: bolder; }
    td, th { border: 1px solid black; }
</style>

<table>
    <tr>
        <th>#</th><th>Subject</th><th>Category</th><th>Created On</th>
    </tr>
    @foreach($posts as $post)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $post->subject }}</td>
            <td>{{ $post->category->name }}</td>
            <td>{{ $post->created_at->format('d M Y, H:i A') }}</td>
        </tr>
    @endforeach
</table>
