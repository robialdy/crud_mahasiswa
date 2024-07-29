<?= $this->extend('components/template') ?>

<?= $this->section('content') ?>

<!-- main content -->
<main class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8 mt-8">
    <section id="about" class="mb-16">

        <a href="<?= site_url('class/create/') ?>" class="inline-block rounded bg-teal-500 px-4 py-2 mb-4 text-xs font-medium text-white hover:bg-teal-700">
            Create Class
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
                        <th class="text-left px-4 py-2 font-medium text-gray-900">Name Class</th>
                        <th class="text-left px-4 py-2 font-medium text-gray-900">Max Capacity</th>
                        <th class="px-4 py-2 w-40"></th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <?php
                        $i = 1;
                        foreach ($listKelas as $lk) :
                        ?>
                            <tr>
                                <td class="px-4 py-2 font-medium text-gray-900"><?= $i; ?></td>
                                <td class="px-4 py-2 text-gray-700"><?= $lk['nama_kelas'] ?></td>
                                <td class="px-4 py-2 text-gray-700"><?= $lk['max_kapasitas'] ?></td>
                                <td class="px-4 py-2 flex space-x-2">
                                    <a href="<?= site_url('class/e/') ?><?= $lk['slug'] ?>" class="inline-block rounded bg-teal-500 px-4 py-2 text-xs font-medium text-white hover:bg-teal-700">
                                        Edit
                                    </a>
                                    <form action="<?= site_url('kelas/delete/') ?><?= $lk['id_kelas'] ?>" method="POST">
                                        <?= csrf_field() ?>
                                        <!-- <input type="hidden" name="_method" value="DELETE"> INI FUNGSI GA SIH SEBENERNYA ANYING -->
                                        <button type="submit" class="inline-block rounded bg-red-500 px-4 py-2 text-xs font-medium text-white hover:bg-red-700">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        <?php
                            $i++;
                        endforeach;
                        ?>
                    </tbody>
            </table>
        </div>

    </section>
</main>
<!-- end main content -->

<?= $this->endSection() ?>