<?= $this->extend('components/template') ?>

<?= $this->section('content') ?>

<!-- main content -->
<main class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8 mt-8">
    <section id="about" class="mb-16">

        <form class="max-w-md mx-auto" method="POST" action="<?= site_url('kelas/save') ?>">
            <?= csrf_field() ?>
            <h1 class="text-4xl font-semibold font-mono mb-5 text-gray-600">Add Your Class Bro</h1>
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" name="nama_kelas" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 focus:outline-none focus:ring-0 peer" placeholder=" " value="<?= old('nama_kelas'); ?>" autofocus />
                <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Name Class</label>
                <?php if (validation_show_error('nama_kelas')) : ?>
                    <small class="text-red-500"><?= validation_show_error('nama_kelas') ?></small>
                <?php endif; ?>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="number" name="max" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " value="<?= old('max'); ?>" />
                <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Max Capacity</label>
                <?php if (validation_show_error('max')) : ?>
                    <small class="text-red-500"><?= validation_show_error('max') ?></small>
                <?php endif; ?>
            </div>
            <button type="submit" class="inline-block rounded bg-teal-500 px-4 py-2 text-xs font-medium text-white hover:bg-teal-700">Submit</button>
        </form>


    </section>
</main>
<!-- end main content -->

<?= $this->endSection() ?>