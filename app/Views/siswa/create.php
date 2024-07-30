<?= $this->extend('components/template') ?>

<?= $this->section('content') ?>

<!-- main content -->
<main class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8 mt-8">
    <section id="about" class="mb-16">

        <form class="max-w-md mx-auto" method="POST" action="<?= site_url('siswa/save') ?>" enctype="multipart/form-data">
            <?= csrf_field() ?>
            <h1 class="text-4xl font-semibold font-mono mb-5 text-gray-600">Add Your Siswa Bro</h1>
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" name="name" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 focus:outline-none focus:ring-0 peer" placeholder=" " value="<?= old('name') ?>" autofocus />
                <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Name</label>
                <?php if (validation_show_error('name')) : ?>
                    <small class="text-red-500"><?= validation_show_error('name') ?></small>
                <?php endif; ?>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="date" name="date" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " value="<?= old('date') ?>" />
                <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Date</label>
                <?php if (validation_show_error('date')) : ?>
                    <small class="text-red-500"><?= validation_show_error('date') ?></small>
                <?php endif; ?>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <select name="class" id="floating_school" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                    <option value="" disabled selected hidden>Select Class</option>
                    <?php foreach ($listKelas as $lk) : ?>
                        <option value="<?= $lk['id_kelas'] ?>"><?= $lk['nama_kelas'] ?></option>
                    <?php endforeach; ?>
                </select>
                <label for="floating_school" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Enter A Class Of</label>
                <?php if (validation_show_error('class')) : ?>
                    <small class="text-red-500"><?= validation_show_error('class') ?></small>
                <?php endif; ?>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" name="school" id="floating_repeat_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " value="<?= old('school') ?>" />
                <label for="floating_repeat_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">School Form</label>
                <?php if (validation_show_error('school')) : ?>
                    <small class="text-red-500"><?= validation_show_error('school') ?></small>
                <?php endif; ?>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" name="address" id="floating_repeat_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 focus:outline-none focus:ring-0 peer" placeholder=" " value="<?= old('address') ?>" />
                <label for="floating_repeat_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Address</label>
                <?php if (validation_show_error('address')) : ?>
                    <small class="text-red-500"><?= validation_show_error('address') ?></small>
                <?php endif; ?>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="file" name="foto" id="floating_repeat_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 focus:outline-none focus:ring-0 peer" placeholder=" " value="<?= old('address') ?>" accept="image/*" />
                <label for="floating_repeat_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Address</label>
                <?php if (validation_show_error('foto')) : ?>
                    <small class="text-red-500"><?= validation_show_error('foto') ?></small>
                <?php endif; ?>
            </div>
            <button type="submit" class="inline-block rounded bg-teal-500 px-4 py-2 text-xs font-medium text-white hover:bg-teal-700">Submit</button>
        </form>


    </section>
</main>
<!-- end main content -->

<?= $this->endSection() ?>