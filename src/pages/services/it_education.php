<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../dist/output.css" rel="stylesheet">
    <title>VisionSync - 超実践型プログラミングスクール</title>
</head>
<body>
    <!-- ナビゲーションバー -->
    <nav class="fixed top-0 w-full bg-white z-50 py-4">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <div class="text-2xl font-bold text-[#FF7A00]">VisionSync</div>
            <div class="hidden md:flex space-x-6">
                <a href="../../index.php" class="hover:text-[#FF7A00]">ホーム</a>
            </div>
            <button class="bg-[#FF7A00] text-white px-6 py-2 rounded-full hover:bg-[#FF9933]">
                無料相談会を予約する
            </button>
        </div>
    </nav>

    <!-- ヒーローセクション -->
    <div class="relative h-screen">
        <div class="absolute inset-0">
            <img src="../../img/IT_education1.jpg" alt="背景画像" class="w-full h-full object-cover">
        </div>
        <div class="relative z-10 container mx-auto px-4 h-full flex items-center">
            <div class="max-w-2xl">
                <h1 class="text-5xl font-bold text-white mb-4 leading-tight">
                    ITスキルを身につけて<br>人生の新たな可能性を開く
                </h1>
                <p class="text-2xl text-white mb-8">
                    プログラミング×AIで即戦力の人材に
                </p>
                <button class="bg-[#FF7A00] text-white px-8 py-3 rounded-full text-lg hover:bg-[#FF9933]">
                    無料相談会を予約する
                </button>
            </div>
        </div>
    </div>

    <!-- About us セクション -->
    <div class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <!-- タイトル -->
            <div class="text-center mb-12">
                <h2 class="text-[#FF7A00] text-xl mb-4">About us</h2>
                <div class="text-4xl font-bold mb-4">
                    <span class="text-[#FF7A00]">VisionSync</span>は、
                </div>
                <div class="text-3xl font-bold mb-8">
                    IT人材として社会で活躍するための<br>
                    プログラミング×AIのスキルを身につける場を提供します。
                </div>
            </div>

            <!-- コンテンツ -->
            <div class="flex flex-col md:flex-row items-center justify-between gap-12">
                <div class="md:w-1/2">
                    <p class="text-lg mb-4">
                        <span class="text-[#FF7A00] font-bold">プログラミングやAIを活用して設計から開発、リリースまでの実践</span><br>
                        を通してビジネスやプライベートの場で活躍できるIT人材を育成します。
                    </p>
                    <p class="text-lg mb-4">
                        しっかりと時間をかけて、<br>
                        <span class="text-[#FF7A00] font-bold">確かなエンジニアスキル</span>を習得したい方に<br>
                        選ばれ続けています。
                    </p>
                </div>
                <div class="md:w-1/2">
                    <img src="../../img/IT_education2.jpg" alt="プログラミング学習イメージ" class="rounded-lg shadow-lg">
                </div>
            </div>
        </div>
    </div>

    <!-- おすすめ対象者セクション -->
    <div class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-center text-4xl font-bold mb-16">
                <span class="text-[#FF7A00]">VisionSync</span>はこんな人にオススメ！
            </h2>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- カード1 -->
                <div class="bg-white rounded-lg p-6 shadow-lg">
                    <div class="mb-4">
                        <img src="../../img/IT_education3.jpg" alt="未経験者" class="w-full h-48 object-cover rounded-lg">
                    </div>
                    <div class="text-center">
                        <p class="text-gray-600 mb-2">AIとプログラミングを学んで</p>
                        <p class="text-lg">
                            <span class="text-[#FF7A00] font-bold">最先端のスキル</span>を身につけたい方
                        </p>
                    </div>
                </div>

                <!-- カード2 -->
                <div class="bg-white rounded-lg p-6 shadow-lg">
                    <div class="mb-4">
                        <img src="../../img/IT_education4.jpg" alt="現職エンジニア" class="w-full h-48 object-cover rounded-lg">
                    </div>
                    <div class="text-center">
                        <p class="text-gray-600 mb-2">チーム開発スキルを磨いて、</p>
                        <p class="text-lg">
                            <span class="text-[#FF7A00] font-bold">即戦力エンジニア</span>を目指したい人
                        </p>
                    </div>
                </div>

                <!-- カード3 -->
                <div class="bg-white rounded-lg p-6 shadow-lg">
                    <div class="mb-4">
                        <img src="../../img/IT_education5.jpeg" alt="スキルアップ" class="w-full h-48 object-cover rounded-lg">
                    </div>
                    <div class="text-center">
                        <p class="text-gray-600 mb-2">ITスキルを身につけて</p>
                        <p class="text-lg">
                            仕事やプライベートで<span class="text-[#FF7A00] font-bold">役立て</span>たい人
                        </p>
                    </div>
                </div>
            </div>

            <!-- CTA ボタン -->
            <div class="text-center mt-12">
                <a href="#" class="inline-block bg-[#FF7A00] text-white px-8 py-4 rounded-full text-lg font-bold hover:bg-[#FF9933] transition-colors">
                    無料相談会を予約する
                    <span class="ml-2">›</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Features セクション -->
    <div class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <!-- セクションヘッダー -->
            <div class="text-center mb-16">
                <h2 class="text-[#FF7A00] text-xl mb-4">Features</h2>
                <div class="text-4xl font-bold">
                    <span class="text-[#FF7A00]">VisionSync</span>が選ばれる<br>
                    4つの理由
                </div>
            </div>

            <!-- 特徴カード -->
            <div class="space-y-8">
                <!-- 特徴1 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg">
                    <div class="flex flex-col md:flex-row items-center gap-8">
                        <div class="md:w-1/2">
                            <h3 class="text-2xl font-bold mb-4">
                                <span class="text-[#FF7A00]">01.</span>
                                AI×プログラミングで<br>
                                最新スキルを習得
                            </h3>
                            <p class="text-gray-700 mb-6">
                            VisonSyncでは、AI技術とプログラミングを組み合わせた<br>
                            最先端の教育カリキュラムを提供しています。<br>
                            実践的なスキルを習得できるため、即戦力として活躍できる<br>
                            エンジニアを目指せます。
                            </p>
                            <a href="#" class="inline-flex items-center text-[#FF7A00] hover:text-[#FF9933]">
                                カリキュラムについて
                                <span class="ml-2">›</span>
                            </a>
                        </div>
                        <!-- <div class="md:w-1/2">
                            <img src="../../img/curriculum.jpg" alt="カリキュラム画面" class="rounded-lg shadow-md">
                        </div> -->
                    </div>
                </div>

                <!-- 特徴2 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg">
                    <div class="flex flex-col md:flex-row items-center gap-8">
                        <div class="md:w-1/2">
                            <h3 class="text-2xl font-bold mb-4">
                                <span class="text-[#FF7A00]">02.</span>
                                質疑応答で<br>
                                わからないことを解決
                            </h3>
                            <p class="text-gray-700 mb-6">
                            オンラインを活用し、質問や相談がしやすい環境を提供。<br>
                            仲間と切磋琢磨しながら学習を進めることで、挫折せずに学び続けられます。<br>
                            わからないことを解決できます。<br>
                            </p>
                            <a href="#" class="inline-flex items-center text-[#FF7A00] hover:text-[#FF9933]">
                                Webアプリについて
                                <span class="ml-2">›</span>
                            </a>
                        </div>
                        <!-- <div class="md:w-1/2">
                            <img src="../../img/web-app.jpg" alt="Webアプリケーション例" class="rounded-lg shadow-md">
                        </div> -->
                    </div>
                </div>

                <!-- 特徴3 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg">
                    <div class="flex flex-col md:flex-row items-center gap-8">
                        <div class="md:w-1/2">
                            <h3 class="text-2xl font-bold mb-4">
                                <span class="text-[#FF7A00]">03.</span>
                                チーム開発スキルを<br>徹底強化
                            </h3>
                            <p class="text-gray-700 mb-6">
                                実際の開発現場を想定したチーム開発演習を取り入れ、<br>
                                Gitやタスク管理ツールを活用した実践トレーニングを実施します。<br>
                                コミュニケーション力やプロジェクト管理スキルも習得できるため、<br>
                                チームで成果を出す力を養います。<br>
                            </p>
                            <a href="#" class="inline-flex items-center text-[#FF7A00] hover:text-[#FF9933]">
                                Webアプリについて
                                <span class="ml-2">›</span>
                            </a>
                        </div>
                        <!-- <div class="md:w-1/2">
                            <img src="../../img/web-app.jpg" alt="Webアプリケーション例" class="rounded-lg shadow-md">
                        </div> -->
                    </div>
                </div>

                <!-- 特徴4 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg">
                    <div class="flex flex-col md:flex-row items-center gap-8">
                        <div class="md:w-1/2">
                            <h3 class="text-2xl font-bold mb-4">
                                <span class="text-[#FF7A00]">04.</span>
                                AIツールの活用で学習効率を<br>最大化
                            </h3>
                            <p class="text-gray-700 mb-6">
                                AIによる自動コード生成やエラーチェック機能を<br>
                                活用した効率的な学習環境を提供。<br>
                                短期間で習得したスキルを実務レベルに引き上げるサポートを行います。<br>
                            </p>
                            <a href="#" class="inline-flex items-center text-[#FF7A00] hover:text-[#FF9933]">
                                Webアプリについて
                                <span class="ml-2">›</span>
                            </a>
                        </div>
                        <!-- <div class="md:w-1/2">
                            <img src="../../img/web-app.jpg" alt="Webアプリケーション例" class="rounded-lg shadow-md">
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA セクション -->
    <div class="relative py-20">
        <!-- 背景画像 -->
        <div class="absolute inset-0">
            <img src="../../img/IT_education6.jpg" alt="背景" class="w-full h-full object-cover brightness-50">
        </div>
        
        <!-- コンテンツ -->
        <div class="relative z-10 container mx-auto px-4 text-center text-white">
            <h2 class="text-4xl font-bold mb-8">
                まずはお気軽に無料キャリア相談会に<br>
                ご参加ください！
            </h2>
            <a href="#" class="inline-block bg-[#FF7A00] text-white px-12 py-4 rounded-full text-lg font-bold hover:bg-[#FF9933] transition-colors">
                無料相談会を予約する
                <span class="ml-2">›</span>
            </a>
        </div>
    </div>

    <!-- フッター -->
    <footer class="bg-gray-100 py-16">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- ロゴと住所 -->
                <div class="md:col-span-1">
                    <div class="text-2xl font-bold text-[#FF7A00] mb-4">VisionSync</div>
                    <p class="text-sm text-gray-600">

                    </p>
                    <!-- SNSアイコン -->
                    <div class="flex space-x-4 mt-4">
                        <a href="#" class="text-[#FF7A00] hover:text-[#FF9933]">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-[#FF7A00] hover:text-[#FF9933]">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-[#FF7A00] hover:text-[#FF9933]">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- メニューリンク -->
                <div class="md:col-span-3 grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div>
                        <ul class="space-y-2">
                            <li><a href="#" class="hover:text-[#FF7A00]">カリキュラム</a></li>
                            <li><a href="#" class="hover:text-[#FF7A00]">Webアプリ</a></li>
                            <li><a href="#" class="hover:text-[#FF7A00]">学習環境</a></li>
                            <li><a href="#" class="hover:text-[#FF7A00]">就職サポート</a></li>
                        </ul>
                    </div>
                    <div>
                        <ul class="space-y-2">
                            <li><a href="#" class="hover:text-[#FF7A00]">料金</a></li>
                            <li><a href="#" class="hover:text-[#FF7A00]">給付金制度</a></li>
                            <li><a href="#" class="hover:text-[#FF7A00]">FAQ</a></li>
                            <li><a href="#" class="hover:text-[#FF7A00]">法人のお客様</a></li>
                        </ul>
                    </div>
                    <div>
                        <ul class="space-y-2">
                            <li><a href="#" class="hover:text-[#FF7A00]">運営会社</a></li>
                            <li><a href="#" class="hover:text-[#FF7A00]">VisionSyncブログ</a></li>
                            <li><a href="#" class="hover:text-[#FF7A00]">利用規約</a></li>
                            <li><a href="#" class="hover:text-[#FF7A00]">プライバシーポリシー</a></li>
                            <li><a href="#" class="hover:text-[#FF7A00]">お問い合わせ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>