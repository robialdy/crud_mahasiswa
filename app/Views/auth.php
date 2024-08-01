<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Auth | IGAPIN</title>
</head>

<body class="bg-gradient-to-r from-teal-600">

    <!--
  Heads up! 👋

  Plugins:
    - @tailwindcss/forms
-->

    <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-lg">
            <h1 class="text-center text-2xl font-bold text-white sm:text-3xl drop-shadow-lg">KAMPUS IGAPIN.</h1>

            <form action="<?= site_url('auth/login') ?>" class="mb-0 mt-6 space-y-4 rounded-lg p-4 shadow-lg sm:p-6 lg:p-8" method="POST">
                <p class="text-center text-lg font-medium text-white drop-shadow">Sign in to your account</p>

                <div>
                    <label for="email" class="sr-only">Email</label>

                    <div class="relative">
                        <input type="text" class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm" placeholder="Enter username or email" name="user" />
                    </div>
                </div>

                <div>
                    <label for="password" class="sr-only">Password</label>

                    <div class="relative">
                        <input type="password" class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm" placeholder="Enter password" name="password" />
                    </div>
                </div>

                <button type="submit" class="block w-full rounded-lg bg-teal-600 px-5 py-3 text-sm font-medium text-white hover:bg-teal-700">
                    Sign in
                </button>
            </form>
        </div>
    </div>

</body>

</html>