# アプリ概要   
文章が書かれた画像ファイルをアップロードすることで、OCRされた文章とそれを要約した文章を閲覧することができるアプリです。  
活用例は以下になります。  
・本や記事、名刺などのスクリーンショットを文章化しノートに写せるようにする  
・請求書の画像を文章化し、手入力を省く

# URL
http://54.199.249.244/register 
（メールアドレスでのログインをお願いします）    

# 仕様技術
・PHP  
・Laravel  
・WSL2  
・ubuntu  
・Docker  
・MySQL  
・Cloud Vision API  
・CHAT GPT API  
・AWS（EC2）  

# 実装機能
・認証機能  
・CRUD機能  
・検索機能  
・画像読み取り機能　　

# 目指した課題解決
・OCRを気軽にできるサイトを作りたかった  
・CHAT　GPTが流行っているが、画像入力機能がまだ備わっていないため、OCRの技術と組み合わせることで、テキストが書かれた画像なら画像を駆使してCHAT GPTを活用できることを試したかった

# こだわりポイント
・画像をテキストに変える機能（Cloud Vision API)  
・テキストの誤字脱字スペルミスの修正（CHAT GPT API）  
・テキストの要約（CHAT GPT API）
    
# 開発中の背景
・CHAT GPT APIがPHP8.1以上に依存していたため、開発環境をPHP7.4からPHP8.1に作り直し、LaravelやMySQLもバージョンアップを行いました。  
・自作Docker-compose.ymlとLaravel sail両方を試しました。（自作のDocker-compose.yml：https://github.com/reo00ngee/old-ocr-app）
    
