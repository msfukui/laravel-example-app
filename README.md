# laravel example app

- Laravel 11 のドキュメント https://laravel.com/docs/11.x
- 書籍「PHP フレームワーク Laravel Web アプリケーション開発」  
  (ソシム株式会社, ISBN978-4-8026-1300-2)

を眺めながら Laravel を使った Web アプリケーション開発を個人的に学ぶためのリポジトリです

## 環境

Docker と素の Laravel でローカルに開発環境を作成してみます

- PHP 8.4
- Composer 2
- Laravel 11

### ローカルの開発環境

リポジトリをクローンしてから、

- make build-up

正常に起動しなかったら大抵の場合 composer install に失敗しているので、

- docker-compose.yaml の command の composer install の前段に sleep を入れて無理やり起動してから
- docker compose exec dev bash でコンテナ内に入って
- composer install の結果を見て個別に対処します
    - どこかのパッケージのバージョンが古いなどで失敗している場合は、手で composer require してバージョンを雑に最新化します

- make key-generate
- make migrate
- make serve

で環境を起動して http://localhost:8456 にアクセスして Welcome ページが表示できれば OK です
