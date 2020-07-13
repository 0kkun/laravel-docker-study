
# 目的
このdockerはLaravelの勉強用に、2020/07/13に作成したもの。
下記Qiitaの記事を参考に作成したものである。
https://qiita.com/A-Kira/items/1c55ef689c0f91420e81

Laravelの教本である青本、緑本を手を動かしながら学ぶためのdocker-laravel-templateである。
また、git操作に慣れるために、リポジトリも作成しつつ進めている。


### dockerの起動
make up

### dockerの停止
make stop

### phpコンテナに入る
make work

### Laravelプロジェクト作成(最新バージョン)
$ laravel new

### Laravelプロジェクト5.8の作成
$ make create-project
この後、作成されたlaravelディレクトリの中身(非表示ファイル含む)をコピーし、serverディレクトリ
配下にペーストする

### mysqlコンテナへログイン
make db

### .envファイルの編集をする
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=password

### configディレクトリのdatabase.phpを編集する
'port' => env('DB_PORT', '3306'),
'database' => env('DB_DATABASE', 'laravel'),
'username' => env('DB_USERNAME', 'root'),
'password' => env('DB_PASSWORD', 'password'),

### Sequel ProなどでDBに接続する
ホスト : 0.0.0.0
ポート : 13306
ユーザー名 : root
パスワード : password