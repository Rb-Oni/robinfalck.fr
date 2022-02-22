@if(session()->has('success'))
<div class="alert alert-success text-green text-lg font-bold">
    {{ session()->get('success') }}
</div>
@endif