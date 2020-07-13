
# 目的
このdockerはLaravelの勉強用に、2020/07/13に作成したもの。<br>
下記Qiitaの記事を参考に作成したものである。<br>
https://qiita.com/A-Kira/items/1c55ef689c0f91420e81 <br>

Laravelの教本である青本、緑本を手を動かしながら学ぶためのdocker-laravel-templateである。 <br>
また、git操作に慣れるために、リポジトリも作成しつつ進めている。


### dockerの起動
make up

### dockerの停止
make stop

### phpコンテナに入る
make work

### Laravelプロジェクト作成(最新バージョン)
laravel new

### Laravelプロジェクト5.8の作成
make create-project
この後、作成されたlaravelディレクトリの中身(非表示ファイル含む)をコピーし、serverディレクトリ配下にペーストする

### mysqlコンテナへログイン
make db

### .envファイルの編集をする
DB_CONNECTION=mysql <br>
DB_HOST=db <br>
DB_PORT=3306 <br>
DB_DATABASE=laravel <br>
DB_USERNAME=root <br>
DB_PASSWORD=password <br>

### configディレクトリのdatabase.phpを編集する
'port' => env('DB_PORT', '3306'), <br>
'database' => env('DB_DATABASE', 'laravel'), <br>
'username' => env('DB_USERNAME', 'root'), <br>
'password' => env('DB_PASSWORD', 'password'), <br>

### Sequel ProなどでDBに接続する
ホスト : 0.0.0.0 <br>
ポート : 13306 <br>
ユーザー名 : root <br>
パスワード : password <br>