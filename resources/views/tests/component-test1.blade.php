<x-test.app>
    <x-slot name="header">ヘッダー1</x-slot>
    comps
    <x-test.card title="タイトル" content="コンポーネント側で設定した変数をblade側から引数として代入する" :message="$message"></x-test> 
    <x-test.card title="タイトル2"></x-test> 
    <x-test.card title="css変更したい!" class="text-red-500">$attribute忘れずに</x-test.card>
</x-test.app>
