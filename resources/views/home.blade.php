@include('inc.header')
<div class="container">
  <div class="row">
  <table class="table table-striped table-hover">
  <thead>
    <tr>
      <th>ID</th>
      <th>Title</th>
      <th>Description</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @if(count ($reminders) > 0)
      @foreach($reminders->all() as $reminder)
        <tr>
          <td>{{ $reminder->id }}</td>
          <td>{{ $reminder->title }}</td>
          <td>{{ $reminder->description }}</td>
          <td>
            <a href="{{ url('') }}" class="badge badge-info">Read</a> |
            <a href="{{ url('') }}" class="badge badge-success">Update</a> |
            <a href="{{ url('') }}" class="badge badge-danger">Delete</a>
          </td>
        </tr>
      @endforeach
    @endif
  </tbody>
</table> 
  </div>
</div>
@include('inc.footer')