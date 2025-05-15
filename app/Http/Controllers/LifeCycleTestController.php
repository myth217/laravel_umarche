<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LifeCycleTestController extends Controller
{
    //

    public function showServiceProviderTest() {
        $encrypt = app()->make('encrypter'); //クリプト化出来る

        $password = $encrypt->encrypt('password');
        $sample = app()->make('SampleServiceProvider');
        dd($sample, $password, $encrypt->decrypt($password));

    }



    public function showServiceContainerTest() {
        app()->bind('lifeCycleTest', function(){
            return 'ライフサイクルテストなう';
        });

        $test = app()->make('lifeCycleTest');

        // サービスコンテナなしのパターン
        // $message = new Message();
        // $sample = new Sample($message);
        // $sample->run();

        // サービスコンテナありのパターン
        app()->bind('sample', Sample::class); //クラスを紐づけられる
        $sample = app()->make('sample');
        $sample->run();

        dd($test,app());
    }
}


class Sample {
    public $message;
    public function __construct(Message $message) { //Messageを自動でインスタンス化
        $this->message = $message; //$this->message の中に　Messageクラスをインスタンス化

    }
    public function run() {
        $this->message->send();
    }
}

class Message
{
    public function send() {
        echo('めっさ表示');
    }
}

