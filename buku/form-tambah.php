<?php
include '../config/layout.php';
include '../config/Database.php';
include '../object/Kategori.php';
include '../object/Penerbit.php';

$database = new Database();
$db = $database->getConnection();

$kategori = new Kategori($db);
$penerbit = new Penerbit($db);

$dataKategori = $kategori->readAll();
$dataPenerbit = $penerbit->readAll();

?>

<section class="bg-white dark:bg-gray-900">
    <div class="p-4 sm:ml-64">
        <div class="p-4 mt-14">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Tambah Anggota Baru</h2>
            <form action="proses-tambah.php" method="POST">
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="w-full">
                        <label for="ISBN"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ISBN</label>
                        <input type="text" name="isbn" id="isbn"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Masukkan ISBN" required="">
                    </div>
                    <div class="w-full">
                        <label for="Judul"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul</label>
                        <input type="text" name="judul" id="judul"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Masukkan Judul" required="">
                    </div>
                    <div class="w-full">
                        <label for="Pengarang"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pengarang</label>
                        <input type="text" name="pengarang" id="pengarang"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Masukkan Pengarang" required="">
                    </div>
                    <div class="w-full">
                        <label for="Kategori"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pengarang</label>
                        <input type="text" name="pengarang" id="pengarang"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Masukkan Pengarang" required="">
                    </div>
                   <?php 
                   //<div class="sm:col-span-2">
                     //   <label for="Pengarang"
                       //     class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                      //  <textarea name="pengarang" id="pengarang" rows="8"
                       //     class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        //    placeholder="Masukkan Pengarang"></textarea>
                 //   </div>
                    ?>
                    <div class="sm:col-span-2">
                        <button type="submit" class="text-white bg-blue-700hover:bg-blue-800 focus:ring-4 focus:">
                            <label for="notelp"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor
                                Telepon</label>
                            <input type="text" name="notelp" id="notelp"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Masukkan Nomor Telepon" required="">
                    </div>
                    <div class="sm:col-span-2">
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
                        <button type="button" onclick="history.back()" class="ms-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Batal</button>
                    </div>
                    <button type="submit"
                        class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                        Add product
                    </button>
            </form>
        </div>
    </div>

    </body>

    </html>