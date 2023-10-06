<?= $this->extend('layout/main') ?>

<?= $this->section('content'); ?>
<main class="flex flex-col md:flex-row justify-between items-start">
  <?= $this->include('components/navbar') ?>
  <div class="block container md:h-screen md:overflow-y-scroll px-2 pt-2 md:pb-[60px] lg:pb-2" id="block_ctn">
    <div class="mb-2 flex justify-center md:justify-between gap-2 items-center">
      <h2 class="text-xl font-medium text-green-600">
        Cashier
      </h2>

      <label for="search" class="flex justify-center items-center relative w-full md:w-max">
        <span class="absolute top-0 left-2 flex justify-center items-center h-full">
          <img src="<?= base_url('assets/icons/search.png') ?>" alt="filter" class="w-[30px] opacity-70">
        </span>
        <input type="text" id="search" name="search" class="py-2 outline-none pl-10 pr-2 rounded-md border-2 border-transparent w-full md:w-[250px] lg:w-max focus:border-sky-300" placeholder="Search...">
      </label>
    </div>

    <div>

    </div>

    <div class="block h-[2px] w-full bg-black/10 rounded-full mb-2"></div>

    <div class="flex justify-center items-start flex-wrap gap-2 h-max relative" id="product_container">
    </div>

    <div class="flex justify-between items-center p-2 my-5 gap-2">
      <div class="paginate_text" id="paginate_text">
      </div>
      <div class="paginate_button" id="paginate_button">
      </div>
    </div>
  </div>

  <div class="block w-full h-full md:h-screen md:w-[700px] bg-white md:overflow-y-scroll cart_container">
    <div class="w-full h-max md:h-full lg:h-max flex flex-col gap-2 px-2 pt-2 pb-[60px] lg:pb-2">
      <div class="flex flex-col gap-2">
        <div class="flex justify-center items-center gap-2 text-2xl font-medium h-max w-full opacity-80 mt-4">
          <img src="<?= base_url("assets/icons/cart.png") ?>" alt="cart" class="w-[30px]">
          <h2>Keranjang Belanja</h2>
        </div>
        <span class="block h-[2px] w-full bg-black/10 mb-4"></span>
        <div class="flex justify-start items-center gap-2 text-sm font-semibold text-black/50">
          <h2>No Transaksi</h2>
          <h2>T-0000001</h2>
        </div>
        <details class="p-2 bg-black/5 hover:bg-black/0 ease-in-out duration-100 rounded-md border-2 border-black/5 data_pelangan">
          <summary class="text-base font-semibold select-none flex items-center gap-2">
            <img src="<?= base_url('assets/icons/arrow.png') ?>" alt="arrow" class="w-[30px] duration-200 ease-in-out">
            <span>Tambahkan Data Pelanggan</span>
          </summary>
          <div class="py-4 flex flex-col gap-4">
            <label for="name_customer" class="relative flex justify-start items-center">
              <input type="text" id="name_customer" class="p-2 rounded-md font-medium outline-none border-2 border-black/10 focus:border-black/30 w-full" placeholder="Nama">
              <span class="absolute block font-medium text-sm text-black/60 -top-[9px] left-2 bg-white ease-out duration-100 px-1">Nama Pelanggan</span>
            </label>
            <label for="address_customer" class="relative flex justify-start items-center">
              <textarea name="address_customer" id="address_customer" cols="0" rows="4" class="p-2 rounded-md font-medium outline-none border-2 border-black/10 focus:border-black/30 w-full" placeholder="Alamat"></textarea>
              <span class="absolute block font-medium text-sm text-black/60 -top-[9px] left-2 bg-white ease-out duration-100 px-1">Alamat Pelanggan</span>
            </label>
          </div>
        </details>
      </div>
      <div class="cart_list flex h-max md:h-[500px] lg:h-[440px] md:overflow-y-scroll shadow-inner bg-black/5 rounded-md md:p-2">
        <div class="flex flex-col h-full w-full">
          <?php for ($i = 1; $i <= 10; $i++) : ?>
            <div class="p-2 bg-white rounded-md flex justify-start items-start gap-2 w-full">
              <img src="<?= base_url("assets/images/image1.jpeg") ?>" alt="image1" class="w-[80px] h-[80px] object-cover rounded-md">
              <div class="w-full">
                <h2 class="font-medium">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex, maxime?</h2>
                <div class="flex justify-between items-center w-full">
                  <span class="text-green-700 font-semibold">Rp 100.000</span>
                  <div class="flex items-center justify-center gap-1">
                    <button class="flex justify-center items-center rounded-full w-[30px] h-[30px] bg-black/10 hover:bg-black/30 duration-100 ease-in">
                      <span class="object-cover font-semibold text-lg text-black">-</span>
                    </button>
                    <input type="number" id="qty" required placeholder="Qty" class="w-[100px] outline-none border-2 rounded-md p-1 font-medium focus:border-black/30 text-sm">
                    <button class="flex justify-center items-center rounded-full w-[30px] h-[30px] bg-black hover:bg-black/80 duration-100 ease-in">
                      <span class="object-cover font-semibold text-lg text-white">+</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          <?php endfor; ?>
        </div>
      </div>
      <div class="w-full h-max p-2 shadow-md rounded-md my-2 border-2 flex flex-col gap-1 text-sm bg-white">
        <div class="font-semibold flex justify-between items-center gap-1">
          <h2>Diskon</h2>
          <label for="discount" class="relative">
            <span class="h-full absolute right-2 flex justify-center items-center text-black/80">%</span>
            <input type="number" min="0" max="100" maxlength="3" class="pl-1 py-1 pr-6 w-[75px] border-2 rounded-md outline-none focus:border-black/30" id="discount">
          </label>
        </div>
        <div class="font-semibold text-red-600 flex justify-between items-center">
          <h2>Total Harga</h2>
          <h2>Rp. 500.000</h2>
        </div>
        <div class="font-semibold flex justify-between items-center">
          <h2>Bayar</h2>
          <label for="pay" class="relative">
            <span class="h-full absolute left-2 flex justify-center items-center text-black/80">Rp</span>
            <input type="number" class="pl-7 py-1 pr-1 w-[200px] border-2 rounded-md outline-none focus:border-black/30" id="pay">
          </label>
        </div>
        <div class="font-semibold flex justify-between items-center">
          <h2>Kembalian</h2>
          <h2>Rp. 0</h2>
        </div>
        <div class="font-semibold text-red-600 flex justify-between items-center">
          <h2>Tunggakan</h2>
          <h2>Rp. 500.000</h2>
        </div>
        <div class="flex justify-center items-center gap-2">
          <button class="flex justify-center items-center gap-1 p-1 bg-red-600 hover:bg-red-700 w-[20%] text-white font-semibold rounded-md ease-in duration-100 mt-2">
            <img src="<?= base_url("assets/icons/trash.png") ?>" alt="trash" class="w-[30px]">
          </button>
          <button class="flex justify-center items-center gap-1 p-1 bg-green-600 hover:bg-green-700 w-[80%] text-white font-semibold rounded-md ease-in duration-100 mt-2">
            <span>Checkout</span>
            <img src="<?= base_url("assets/icons/checkout.png") ?>" alt="checkout" class="w-[30px]">
          </button>
        </div>
      </div>
    </div>
  </div>
</main>
<?= $this->endSection(); ?>