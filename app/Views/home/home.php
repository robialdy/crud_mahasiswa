<?= $this->extend('components/template') ?>

<?= $this->section('content') ?>

<!-- main content -->
<main class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8 mt-8">
    <section id="about" class="mb-16">

        <!-- <div class="mx-auto max-w-screen-xl px-4 py-auto lg:flex lg:h-screen lg:items-center"> -->
        <div class="flex items-center justify-center h-screen">
            <div class="mx-auto max-w-xl text-center mb-36">
                <h1 class="text-3xl font-extrabold sm:text-5xl">
                    Terbaik Tetap Selalu
                    <strong class="font-extrabold text-teal-600 sm:block">Kampus IGAPIN.</strong>
                </h1>

                <p class="mt-4 sm:text-xl/relaxed">
                    Kampus TERBAIK di Indonesia dengan guru Import dari Germany!
                </p>
            </div>
        </div>


        <h1 class="text-4xl font-bold text-teal-600">Card Siswa</h1>
        <small class="text-base font-normal ml-2">Dinamis</small>

        <div class="grid grid-cols-5 gap-2">
            <?php foreach ($dataSiswa as $dt) : ?>
                <div class="group relative block bg-black w-52 h-72 mt-5 shadow-xl">
                    <img alt="" src="assets/img/<?= $dt['foto'] ?>" class="absolute inset-0 h-full  w-full object-cover opacity-75 transition-opacity group-hover:opacity-50" />

                    <div class="relative pt-2 pl-2">
                        <p class="text-xs font-medium uppercase tracking-widest text-teal-600"><?= $dt['nama_kelas'] ?></p>

                        <p class="text-sm font-bold text-white"><?= $dt['name'] ?></p>
                    </div>

                    <div class=" relative p-4 mt-48">
                        <div class="transform opacity-0 transition-all group-hover:translate-y-0 group-hover:opacity-100">
                            <p class="text-sm text-white">
                                Ikan Hiu ikan sepat, fakyuu
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>



    </section>
</main>
<!-- end main content -->

<?= $this->endSection() ?>