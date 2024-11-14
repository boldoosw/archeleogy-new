<title>Мэдээ</title>
<div class="container">
    <div id="body" class="pt-5 ml-72 mt-20 w-[100%] ">

        <div class="mt-2">
            <a href="<?= base_url('apanel/test/add'); ?>">
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

                        <th scope="col" class="px-6 py-3">
                            Гарчиг
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Мэдээлэл
                        </th>

                        <th scope="col" class="px-6 py-3">
                            Үйлдэл
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for ($i = 0; $i < count($test); $i++) { ?>
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-blue-100 dark:hover:bg-gray-600">
                            <td class="p-4">
                                <a href="<?= base_url('/' . $test[$i]->pdfurl); ?>">
                                    <img src="<?= base_url($test[$i]->picurl); ?>"
                                        class="w-16 md:w-32 max-w-full max-h-full" alt=<?= $test[$i]->title; ?>>
                                </a>
                            </td>
                            <td><?= $test[$i]->title; ?></td>
                            <td><?= $test[$i]->description; ?></td>

                            <td class="px-6 py-4">
                                <!-- <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Remove</a> -->
                                <div class="align-middle flex justify-center">
                                    <a href="<?= base_url('/' . $test[$i]->pdfurl); ?>"><img class="btn-success"
                                            src="<?= base_url('images/view.png'); ?>" height="30" alt="Харах"></a>
                                    <a href="<?= base_url('apanel/test/edit/' . $test[$i]->id); ?>"><img class="btn-delete"
                                            src="<?= base_url('images/edit.png'); ?>" height="30" alt="Засах"></a>
                                    <a onclick="return confirm('Устгах уу!!!')"
                                        href="<?= base_url('apanel/test/del/' . $test[$i]->id . '/' . $productid); ?>"><img
                                            src="<?= base_url('images/delete.png'); ?>" height="30" alt="Устгах"></a>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="mt-2">
            <a href="<?= base_url('apanel/test/add'); ?>">
                <button type="button"
                    class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
                    Нэмэх
                </button>
            </a>
        </div>

    </div>
</div>