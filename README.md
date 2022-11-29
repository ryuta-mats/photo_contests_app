# フォトコンテストアップロードアプリ


## 概要

ニセコでフォトコンテストを開催する際に投稿フォームを作成することができます。

管理画面から新規グループ作成と写真のダウンロードなどが行なえます。

デザインはbootstrap4.5を使用しています。

### 管理画面
・新規団体（Group）の登録

・団体（Group）の情報参照・修正

・指定の団体（Group）のフォームの生成

・投稿され写真の一覧表示

・投稿写真のモーダル表示

・チェック済み写真をZipでダウンロード


## アップロード画面
・団体の情報を反映したフォーム

・画像アップロード

・アップロード画像の参照

・タイトルの入力

・説明の入力

・チーム名の入力

・バリデーション機能


## 管理画面

https://xs618728.xsrv.jp/photo_contests_app/admin/index.php


## ベーシック認証

User: admin

Pass: niseko


## データベースとユーザーの作成

```sql
CREATE DATABASE IF NOT EXISTS photo_contests;
CREATE USER IF NOT EXISTS photo_contests_admin IDENTIFIED BY '1234';
GRANT ALL ON photo_contests.* TO photo_contests_admin;

```


## テーブルの作成

以下のコマンドを実行して、テーブルをセットアップします。
```bash
$ docker-compose exec app php photo_app/db/db_setup.php
```
