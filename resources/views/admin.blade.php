@include('inc.header')
<div class="container">
  <div class="row">
  <legend>Reminders</legend>
  @if(session('info'))
    <div class="alert alert-success">
    {{ session('info') }}
    </div>
  @endif
  <table class="table table-striped table-hover">
  <thead>
    <tr>
      <th>Title</th>
      <th>Description</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @if(count ($reminders) > 0)
      @foreach($reminders->all() as $reminder)
        <tr>
          <td>{{ $reminder->title }}</td>
          <td>{{ $reminder->description }}</td>
          <td>
            <a href='{{ url("/read/{$reminder->id}") }}' class="badge badge-info">Read</a> |
            <a href='{{ url("/update/{$reminder->id}") }}' class="badge badge-success">Update</a> |
            <a href='{{ url("/delete/{$reminder->id}") }}' class="badge badge-danger">Delete</a>
          </td>
        </tr>
      @endforeach
    @endif
  </tbody>
</table> 
  </div>
</div>
@include('inc.footer')