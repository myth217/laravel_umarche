<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TestClassBase extends Component
{
    public $classBaseMessage;
    public $defaltBaseMessage;
    /**
     * Create a new component instance.
     */
    public function __construct($classBaseMessage, $defaltBaseMessage='初期値なんすわ')
    {
       $this->classBaseMessage = $classBaseMessage;
       $this->defaltBaseMessage = $defaltBaseMessage;
    //    クラスベースである場合初期変数をbladeのみの時と違い、クラス側にも用意必要
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.test.test-class-base-component');
    }
}
