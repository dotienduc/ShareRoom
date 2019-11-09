@foreach($comments as $key => $comment)
<div class="panel panel-default" style="border:1px solid black; padding: 8px; margin-bottom:8px;">
  <div class="panel-heading">By <b>{{$comment->name}}</b> : </div>
  <div class="panel-body">Nội dung: {{$comment->content}}</div>
 </div>
@endforeach