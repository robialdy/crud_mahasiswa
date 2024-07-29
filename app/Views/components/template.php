<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <title><?= $title ?></title>
</head>

<body class="bg-gray-100">
    <!-- header -->
    <header class="bg-gray-200">
        <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <a class="block text-teal-600 font-bold text-2xl" href="<?= site_url() ?>">
                        KAMPUS IGAPIN.
                    </a>
                </div>

                <div class="md:flex md:items-center md:gap-12">
                    <nav aria-label="Global" class="hidden md:block">
                        <ul class="flex items-center gap-6 text-sm">
                            <li>
                                <a class="text-gray-500 transition hover:text-gray-500/75" href="<?= site_url() ?>"> Home </a>
                            </li>

                            <li>
                                <p class="text-gray-500">|</p>
                            </li>

                            <li>
                                <a class="text-gray-500 transition hover:text-gray-500/75" href="<?= site_url('siswa/') ?>"> Siswa </a>
                            </li>

                            <li>
                                <a class="text-gray-500 transition hover:text-gray-500/75" href="<?= site_url('class/') ?>"> Class </a>
                            </li>

                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </header>
    <!-- endheader -->

    <?= $this->renderSection('content'); ?>

</body>

</html>