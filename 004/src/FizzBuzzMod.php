<?php

class FizzBuzzMod {
    // 戻り値では結果がわからない
    // 1つの処理で3つの役割を持っている
    // （状態管理、文字列への変換、結果の書き出し）
    public function run(): void {
        // 呼び出しごとに変わる状態へ依存
        static $current_state = 0;
        $next = $current_state + 100;

        for ($n = $current_state; $n < $next; $n++) {
            if ($n % 15 === 0) {
                // 外部の関数呼び出しを切り離せない
                // 副作用として結果が現れる
                sendToExternalSystem('FizzBuzz');
            } elseif ($n % 3 === 0) {
                sendToExternalSystem('Fizz');
            } elseif ($n % 5 === 0) {
                sendToExternalSystem('Buzz');
            }
            sendToExternalSystem((string)$n);
        }

        $current_state = $next;
    }
}
