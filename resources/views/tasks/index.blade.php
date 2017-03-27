<ul>
    @foreach($tasks as $task)
        <li>
        {{ $task->name }}, {{ $task->created_at->format('d.m.Y, H:i') }}<br>
        {{ $task->description }}
        </li>
    @endforeach
</ul>
