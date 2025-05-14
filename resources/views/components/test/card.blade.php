@props(
[
'title' => '初期値なわけ',
'message' => '初期値ですわよ',
'content' => 'これも初期値ですわよ'

//propsを一つでも設定する場合種類設定する必要あり
])
<div class="border-2 shadow-md w-1/4 p-2">
    <div>{{$title}}</div>
    <div>画像</div>
    <div>{{$content}}</div>
    <div>{{$message}}</div>

</div>