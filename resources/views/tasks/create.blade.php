<h1>Neuen Task erstellen</h1>

<form action="/tasks" method="post">
    {{ csrf_field() }}

    @if($errors->has('name'))
        {{ $errors->first('name') }}
    @endif

    <input type="text" name="name">

    @if($errors->has('description'))
        {{ $errors->first('description') }}
    @endif
    <textarea name="description"></textarea>

    <input type="submit">
</form>