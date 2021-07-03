「Drupal 9 おいしいレシピ集 / Drupal Meetup 豊田支部」
第1章 アプリ開発のCI/CD環境構築

に関する補足ページです。

# 使い方
まず、ご自身が構築した GitLab サーバにユーザ名 `dev01` でログインして、`cicd-drupal9` という名前の空プロジェクトを作成します。

ローカル開発環境のターミナル上で以下のコマンドを実行します。
```
$ cd ~
$ git clone https://github.com/takahiro-komatsu/cicd-drupal9
$ cd cicd-drupal9
$ git remote set-url origin https://gitlab.example.com/dev01/cicd-drupal9
$ git push -u origin main
```
なお、`https://gitlab.example.com/` の部分はご自身が構築されたGitLabサーバのURLに合わせてください。
