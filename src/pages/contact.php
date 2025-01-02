<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../dist/output.css" rel="stylesheet">
  <title>Contact Form</title>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen bg-[url('./img/nature-2990060_1280.jpg')] bg-cover bg-center bg-no-repeat">

  <div class="bg-white/90 shadow-lg rounded-lg w-full max-w-md">
    <!-- Header -->
    <h2 class="text-lg font-bold text-white bg-red-500 py-3 px-6 rounded-t-lg">
      Contact Form
    </h2>
    <!-- Form -->
    <form action="#" method="POST" class="p-6 space-y-4">
      <!-- Name -->
      <div>
        <label for="name" class="block text-sm font-medium text-gray-700">
          お名前
        </label>
        <input type="text" id="name" name="name" placeholder="例: 山田 太郎"
          class="mt-1 w-full rounded-md border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500 text-sm p-2.5"
        >
      </div>
      <!-- Email -->
      <div>
        <label for="email" class="block text-sm font-medium text-gray-700">
          メール
        </label>
        <input type="email" id="email" name="email" placeholder="例: example@example.com"
          class="mt-1 w-full rounded-md border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500 text-sm p-2.5"
        >
      </div>
      <!-- Subject -->
      <div>
        <label for="subject" class="block text-sm font-medium text-gray-700">
          件名
        </label>
        <input type="text" id="subject" name="subject" placeholder="件名を入力してください"
          class="mt-1 w-full rounded-md border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500 text-sm p-2.5"
        >
      </div>
      <!-- Message -->
      <div>
        <label for="message" class="block text-sm font-medium text-gray-700">
          メッセージ
        </label>
        <textarea id="message" name="message" rows="4" placeholder="ここにメッセージを入力してください"
          class="mt-1 w-full rounded-md border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500 text-sm p-2.5"
        ></textarea>
      </div>
      <!-- Submit Button -->
      <div>
        <button type="submit"
          class="w-full bg-green-500 text-white font-medium rounded-md py-2.5 text-sm hover:bg-green-600 transition duration-300"
        >
          送信する
        </button>
      </div>
    </form>
  </div>

</body>
</html>
