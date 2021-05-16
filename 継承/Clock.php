<?php
declare(strict_types);
abstract class Clock{
 //クラスの宣言時にabstractをつけることで、そのクラス（Clock）がスーパークラスであることを示している。
  //抽象クラスは、実在しないメタな概念を表すときにつかうものなので、インスタンス化することはできない
   //＄clock=new Clock()
    //このように書くとエラーが発生する。
    protected $time;
    abstract public function show(): string;
    //メソッドの生成時にabstractを付けることで、抽象メソッドを作成している。
    //抽象メソッドであるshow()はサブクラスで必ずその中身のプログラム処理を実装しなければならない。
    //抽象メソッドは中身の処理を持たないので、行末にセミコロン（；）で終わらせて、宣言する
    
    public function setTime(int $time): void
  //クラスの中で定義される関数のことをメソッドと呼ぶ。
    {
        $this->time = $time;

    }
    public function getTime(): string{
  //show()メソッドに比べて一方getTime()メソッドは通常のメソッド（具象メソッド）なので、中身のプログラム勝利をそのまま、サブクラスに引き継ぐことが出来る。
        return $this->time;
    }
}
