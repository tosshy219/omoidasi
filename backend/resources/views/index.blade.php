<h1>記事一覧画面</h1>
<ul>
  @foreach ($tasks as $task)
  <li>{{$task->text}}</li>
      
  @endforeach
</ul>
<a href="{{route('create')}}">追加</a>