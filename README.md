## ProkenWeb
釧路高専プログラミング研究会のホームページと、講習会用のWebサイト。

使用言語：HTML5, CSS3, JavaScript, PHP, SQL

## SetUp
任意のディレクトリ上でリポジトリをクローンする
```
$ git clone https://github.com/Tomopu/prokenWeb.git
```
クローンしたリポジトリに移動して、./db/init/setup.sh の実行権限を変更する。
```
$ cd prokenWeb
$ sudo chmod a+x ./db/init/setup.sh
```
Dockerコンテナを立ち上げる。
```
$ docker-compose up -d
```
