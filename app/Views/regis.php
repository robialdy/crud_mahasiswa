<?= $this->extend('components/template') ?>

<?= $this->section('content') ?>

<!-- main content -->
<main class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8 mt-8">
    <section id="about" class="mb-16">

        <form class="max-w-md mx-auto" method="POST" action="<?= site_url('auth/regissave') ?>">
            <?= csrf_field() ?>
            <h1 class="text-4xl font-semibold font-mono mb-5 text-gray-600">Add Your Account Bro</h1>

            <div class="relative z-0 w-full mb-5 group">
                <input type="text" name="username" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 focus:outline-none focus:ring-0 peer" placeholder=" " value="<?= old('username') ?>" autofocus />
                <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Username</label>
                <?php if (validation_show_error('username')) : ?>
                    <small class="text-red-500"><?= validation_show_error('username') ?></small>
                <?php endif; ?>
            </div>

            <div class="relative z-0 w-full mb-5 group">
                <input type="email" name="email" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 focus:outline-none focus:ring-0 peer" placeholder=" " value="<?= old('email') ?>" autofocus />
                <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
                <?php if (validation_show_error('email')) : ?>
                    <small class="text-red-500"><?= validation_show_error('email') ?></small>
                <?php endif; ?>
            </div>

            <div class="relative z-0 w-full mb-5 group">
                <input type="password" name="password1" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 focus:outline-none focus:ring-0 peer" placeholder=" " value="<?= old('password1') ?>" autofocus />
                <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
                <?php if (validation_show_error('password1')) : ?>
                    <small class="text-red-500"><?= validation_show_error('password1') ?></small>
                <?php endif; ?>
            </div>

            <div class="relative z-0 w-full mb-5 group">
                <input type="password" name="password2" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 focus:outline-none focus:ring-0 peer" placeholder=" " value="<?= old('password2') ?>" autofocus />
                <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Re-Password</label>
                <?php if (validation_show_error('password2')) : ?>
                    <small class="text-red-500"><?= validation_show_error('password2') ?></small>
                <?php endif; ?>
            </div>
            <button type="submit" class="inline-block rounded bg-teal-500 px-4 py-2 text-xs font-medium text-white hover:bg-teal-700">Submit</button>
        </form>


    </section>
</main>
<!-- end main content -->

<?= $this->endSection() ?>