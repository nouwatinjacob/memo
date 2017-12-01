@include('inc.header')
    <div class="container">
        <div class"row">
        <h2 class="text-center">{{ $reminders->title }}</h2>
<p class="text-center">{{ $reminders->description }}</p>
        </div>
    </div>
@include('inc.footer')