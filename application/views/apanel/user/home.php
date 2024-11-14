<title>Хэрэглэгч</title>
<div class="container">
    <div id="body" class="pt-5 ml-72 mt-20 w-[100%] ">
        <div>
            <a href="<?= base_url('apanel/user/add'); ?>">
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
                        <td>Хэрэглэгч</td>
                        <td>Түвшин</td>
                        <td>Үйлдэл</td>
                    </tr>
                </thead>
                <?php for ($i = 0; $i < count($user); $i++) {
                    ?>
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-blue-100 dark:hover:bg-gray-600">
                        <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white"><?= $user[$i]->lastname; ?></td>
                        <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                            <!-- <?php
                            switch ($user[$i]->level) {
                                case "1":
                                    echo "Admin";
                                    break;
                                case "0":
                                    echo "User";
                                    break;
                            }
                            ?> -->
                        </td>
                        <td class="text-center bg-white"><a onclick="return confirm('Устгах уу!!!')"
                                href="<?= base_url('apanel/user/del/' . $user[$i]->id); ?>"><img
                                    src="<?= base_url('images/delete.png'); ?>" height="30" alt="Устгах"></a></td>
                    </tr>
                <?php } ?>
            </table>

        </div>
        <div class="mt-2">
            <a href="<?= base_url('apanel/user/add'); ?>">
                <button type="button"
                    class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
                    Нэмэх
                </button>
            </a>
        </div>
    </div>
    </body>

    </html>