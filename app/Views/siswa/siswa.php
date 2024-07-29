<?= $this->extend('components/template') ?>

<?= $this->section('content') ?>

<!-- main content -->
<main class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8 mt-8">
    <section id="about" class="mb-16">

        <a href="<?= site_url('siswa/create/') ?>" class="inline-block rounded bg-teal-500 px-4 py-2 mb-4 text-xs font-medium text-white hover:bg-teal-700">
            Create Siswa
        </a>

        <?php if (session()->getFlashdata('notif')) : ?>
            <div class="p-4 mb-4 text-sm text-gray-100 rounded-lg bg-teal-500" role="alert">
                <?= session()->getFlashData('notif'); ?>
            </div>
        <?php endif; ?>

        <div class="overflow-x-auto">
            <table class="min-w-full divide-y-2 divide-gray-200 bg-gray-100 text-sm">
                <thead">
                    <tr>
                        <th class="text-left px-4 py-2 font-medium text-gray-900">No</th>
                        <th class="text-left px-4 py-2 font-medium text-gray-900">Name</th>
                        <th class="text-left px-4 py-2 font-medium text-gray-900">Date</th>
                        <th class="text-left px-4 py-2 font-medium text-gray-900">School Form</th>
                        <th class="text-left px-4 py-2 font-medium text-gray-900">Address</th>
                        <th class="text-left px-4 py-2 font-medium text-gray-900">Placed in</th>
                        <th class="px-4 py-2 w-40"></th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <?php
                        $i = 1;
                        foreach ($listSiswa as $ls) : ?>
                            <tr>
                                <td class="px-4 py-2 font-medium text-gray-900"><?= $i; ?></td>
                                <td class="px-4 py-2 text-gray-700"><?= $ls['name']; ?></td>
                                <td class="px-4 py-2 text-gray-700"><?= $ls['date']; ?></td>
                                <td class="px-4 py-2 text-gray-700"><?= $ls['school_from']; ?></td>
                                <td class="px-4 py-2 text-gray-700"><?= $ls['address']; ?></td>
                                <td class="px-4 py-2 text-gray-700"><?= $ls['nama_kelas']; ?></td>
                                <td class="px-4 py-2 flex space-x-2">
                                    <a href="<?= site_url('siswa/e/') ?><?= $ls['slug']; ?>" class="inline-block rounded bg-teal-500 px-4 py-2 text-xs font-medium text-white hover:bg-teal-700">
                                        Edit
                                    </a>
                                    <form action="<?= site_url('siswa/delete/') ?><?= $ls['id']; ?>" method="POST">
                                        <?= csrf_field() ?>
                                        <!-- <input type="hidden" name="_method" value="DELETE"> INI FUNGSI GA SIH SEBENERNYA ANYING -->
                                        <button type="submit" class="inline-block rounded bg-red-500 px-4 py-2 text-xs font-medium text-white hover:bg-red-700">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        <?php
                            $i++;
                        endforeach; ?>
                    </tbody>
            </table>
        </div>

    </section>
</main>
<!-- end main content -->

<?= $this->endSection() ?>