# URL
http://54.199.249.244/register 
（メールアドレスでのログインをお願いします）    

<アプリ概要>    
Laravelを使ったアプリです。
OCR APIとCHAT GPT APIを使用して、画像ファイルをテキストにし、
誤字脱字、スペルミスを修正した文章と、それを要約した文章を閲覧することができます。

<仕様技術>
・PHP
・Laravel
・WSL2
・ubuntu
・Docker
・MySQL
・Cloud Vision API
・CHAT GPT API
・AWS（EC2）

<実装機能>
・認証機能
・CRUD機能
・検索機能
・画像読み取り機能

<目指した課題解決>
・OCRを気軽にできるサイトを作りたかった
・CHAT　GPTが流行っているが、画像入力機能がまだ備わっていないため、OCRの技術と組み合わせることで、テキストが書かれた画像なら画像を駆使してCHAT GPTを活用できることを試したかった
    
<苦労したこと>
・Docker-compose.ymlの作り直し（CHAT GPT APIがPHP8.1以上に依存していたため）
・自作Docker-compose.yml→Laravel sailsに切り替え（デプロイ時にエラーが発生し、一からやり直すことになり、sailも試したくなり切り替えました。自作Docker-compose.ymlでもローカル環境では動作確認しました。Git：https://github.com/reo00ngee/old-ocr-app）  
    
