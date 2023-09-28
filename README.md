# frontend_starterkit_for_wp


## パッケージのインストール
```
npm i
```

## 開発時のgulp起動
```
npm run start
```
## 本番用ビルド
```
npm run build
```
/root/wp-content/themes/wp/assets/が出力先のフォルダです。(config/index.jsで変更可能)

## volta
package.jsonでnode,npmバージョンを管理する目的で導入。
インストールについては、下記クロノQAシート「gulp3系→4系,nodistアンインストール」を参考
https://docs.google.com/spreadsheets/d/1-KD5qmU8VHFpVBhs8J4O9imPk4S0twTx86rUYAxNJR8/edit#gid=1572583831

## /config/index.js
ここで各ファイルを圧縮するかどうか、TypeScriptを使うかどうかを指定します。
**server.localUrlでローカルのurlを指定します。(host,vhostと同じ設定)**

## Tailwind CSS
Tailwind CSSのJITモードを標準搭載しています。
https://v2.tailwindcss.com/docs/just-in-time-mode

## Scssメモ
### メディアクエリ
ブレイクポイントはmixin.scssにあるbreakpointsにまとめてます。
下記は767px以下の例です。
```
@include r.mq(mdless) {
  ~~~
}
```
## パスについて
### scss
* 開発時、本番時ともに「$path: $path: '${settings.root}assets/'」
でgulpから変数を渡しています。(settings.rootはconfig/index.js記載)

**使用例**
```
.p-top_mv{
  background-image: url(p.$path + 'images/top/bg_mv01.jpg');
}
```
相対パスを使いたい場合は、settings/_variable.scssに$pathを用意してv.$pathとして読みんでも大丈夫です。

**本番アップのディレクトリが「/lp/」のときは、configで「root: '/lp/wp-content/themes/wp/'」にする**

## /assets/static
ここには、フォント等のコンパイル対象外のソースを格納します。
```
npm run copy
```
上記コマンドで「/assets/static」配下のファイルを「/root/wp-content/themes/wp/assets」配下にコピーします。

## Prettier
コードを整形する目的でPrettierを導入しています。
VSCodeの拡張機能「Prettier - Code formatter」をインストールしてください。
プロジェクト配下の.vscode/settings.jsonで保存時に走るように設定してあるので、特に設定はいらないです。
**PHPは残念ながらPrettier機能がない(一応あるけど使えない)のでしない方向性でいきます**
**Scss, JS, TSが整形対象です**

## その他
* 現状は、ページごとにjsファイル、cssファイルを分けてます。
なので、meta.php内で分岐させて、$scriptsという変数に各ページでjsがあるかどうかを指定しています。
* ファイル名の頭に「_」があればそのファイルはビルド対象外になります。