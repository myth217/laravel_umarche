<x-test.app>
    <x-slot name="header">ヘッダー1</x-slot>
    comps
    <x-test.card title="タイトル" content="コンポーネント側で設定した変数をblade側から引数として代入する" :message="$message"></x-test> 

</x-test.app>
