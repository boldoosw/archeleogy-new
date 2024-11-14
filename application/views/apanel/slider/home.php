<div class="container">
    <div id="body" class="pt-5 ml-72 mt-20 w-[100%] ">
        <div>
            <a href="<?= base_url('apanel/slider/add'); ?>">
                <button type="button"
                    class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
                    Нэмэх
                </button>
            </a>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr class="bg-gray-600 text-white">
                        <th scope="col" class="px-6 py-3">
                            Гарчиг
                        </th>

                        <th scope="col" class="px-6 py-3">
                            Тайлбар</th>
                        <th scope="col" class="px-6 py-3">Зураг</th>
                        <th scope="col" class="px-6 py-3">Үйлдэл</th>
                    </tr>
                </thead>

                <?php for ($i = 0; $i < count($slider); $i++) { ?>
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-blue-100 dark:hover:bg-gray-600">
                        <td class="p-4"><?= $slider[$i]->title; ?></td>
                        <td class="p-4"> <?= $slider[$i]->info; ?></td>
                        <td class="p-4"><img src="<?= base_url($slider[$i]->small_picurl); ?>" height="30"
                                style="height:30px!important;">
                        </td>
                        <td class="text-center">
                            <div class="flex justify-center text-center">
                                <a href=" <?= base_url('apanel/slider/edit/' . $slider[$i]->id); ?>">
                                    <img src="<?= base_url('images/edit.png'); ?>" height="30" alt="Засах"></a>
                                <a onclick="return confirm('Устгах уу!!!')"
                                    href="<?= base_url('apanel/slider/del/' . $slider[$i]->id); ?>">
                                    <img src="<?= base_url('images/delete.png'); ?>" height="30" alt="Устгах"></a>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
        <div class="mt-2">
            <a href="<?= base_url('apanel/slider/add'); ?>">
                <button type="button"
                    class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
                    Нэмэх
                </button>
            </a>
        </div>
    </div>
</div>
</body>

</html>