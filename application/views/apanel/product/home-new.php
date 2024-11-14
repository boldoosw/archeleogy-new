<title>Мэдээ</title>
<div class="container">
    <div id="body" class="pt-5 ml-72 mt-20 w-[100%] ">

        <div>
            <a href="<?= base_url('apanel/product/add'); ?>">
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
                        <th scope="col" class="px-16 py-3">
                            Зураг
                        </th>
                        <th scope="col" class="px-16 py-3">
                            Нүүр зураг
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Ангилал
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Бүтээгдэхүүн
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Дэлгэрэнгүй мэдээлэл
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Огноо
                        </th>

                        <th scope="col" class="px-6 py-3">
                            Үйлдэл
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for ($i = 0; $i < count($product); $i++) { ?>
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-blue-100 dark:hover:bg-gray-600">
                            <td class="p-4">
                                <img src="<?= base_url($product[$i]->small_picurl); ?>"
                                    class="w-16 md:w-32 max-w-full max-h-full" alt=<?= $product[$i]->title; ?>>
                            </td>
                            <td class="p-4">
                                <img src="<?= base_url($product[$i]->home_small_picurl); ?>"
                                    class="w-16 md:w-32 max-w-full max-h-full" alt=<?= $product[$i]->categoryname; ?>>
                            </td>
                            <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                <?= $product[$i]->categoryname; ?>
                            </td>
                            <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                <?= $product[$i]->title; ?>
                            </td>

                            <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                <?= $product[$i]->info; ?>
                            </td>
                            <td class="px-6 py-4"><?= date_format(date_create($product[$i]->created_at), "Y-m-d"); ?></td>
                            <td class="px-6 py-4">
                                <!-- <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Remove</a> -->
                                <div class="align-middle flex justify-center">
                                    <a href="<?= base_url('apanel/product/edit/' . $product[$i]->id); ?>"><img
                                            class="btn-delete" src="<?= base_url('images/edit.png'); ?>" height="30"
                                            alt="Засах"></a>
                                    <a onclick="return confirm('Устгах уу!!!')"
                                        href="<?= base_url('apanel/product/del/' . $product[$i]->id . '/' . $productid); ?>"><img
                                            src="<?= base_url('images/delete.png'); ?>" height="30" alt="Устгах"></a>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="m-2">
            <a href="<?= base_url('apanel/product/add'); ?>">
                <button type="button"
                    class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
                    Нэмэх
                </button>
            </a>
        </div>

    </div>
</div>