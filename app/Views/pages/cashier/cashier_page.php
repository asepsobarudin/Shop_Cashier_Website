<?= $this->extend('layout/main') ?>

<?= $this->section('content'); ?>
<main class="flex flex-col md:flex-row justify-center w-full h-full md:h-screen overflow-hidden p-2" id="main">
  <div class="container px-1 pt-2 md:pb-[60px] lg:pb-2 overflow-y-scroll" id="block_ctn">
    <div class="w-full h-max block">
      <div class="mb-2 flex flex-col md:flex-row justify-center md:justify-between gap-2 items-start md:items-center">
        <h2 class="text-2xl font-medium text-green-600">
          Cashier
        </h2>

        <label for="search" class="flex justify-center items-center relative w-full md:w-max">
          <span class="absolute top-0 left-2 flex justify-center items-center h-full">
            <img src="<?= base_url('assets/icons/search-line.svg') ?>" alt="filter" class="w-[30px] opacity-70">
          </span>
          <input type="text" id="search" name="search" class="py-2 outline-none pl-10 pr-2 rounded-md border-2 border-transparent w-full md:w-[250px] lg:w-max focus:border-sky-300" placeholder="Search...">
        </label>
      </div>

      <div class="block h-[2px] w-full bg-black/10 rounded-full mb-2"></div>

      <table class="border-separate border-spacing-0 rounded-md w-full table-auto">
        <thead>
          <tr>
            <td class="border-black/50 bg-slate-800 text-white font-medium p-2 text-center">Kode</td>
            <td class="border-black/50 bg-slate-800 text-white font-medium p-2">Nama</td>
            <td class="border-black/50 bg-slate-800 text-white font-medium p-2 text-center">Stok</td>
            <td class="border-black/50 bg-slate-800 text-white font-medium p-2 text-center">Harga</td>
            <td class="border-black/50 bg-slate-800 text-white font-medium p-2 text-center">Action</td>
          </tr>
        </thead>
        <tbody class="goods_table" id="goods_table">
        </tbody>
      </table>

      <div class="flex justify-between items-center p-2 gap-2 my-2">
        <div class="paginate_text" id="paginate_text">
        </div>
        <div class="paginate_button" id="paginate_button">
        </div>
      </div>
    </div>
  </div>

  <?= $this->include('components/cart') ?>
</main>
<?= $this->endSection(); ?>