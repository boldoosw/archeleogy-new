<title>product</title>
<script src="<?= base_url('ckeditor/ckeditor.js'); ?>" type="text/javascript"></script>
<div class="container1 mt-5">
    <div class="xl:flex w-full">
        <div id="body" class="pt-5 ml-72 mt-20 w-full">
            <?php echo form_open_multipart(base_url("apanel/product/save")); ?>
            <table cellpadding="5" border="0" class="table-border-none">
                <tr class='tablebody'>
                    <td align="right">Бүтээгдэхүүний зураг</td>
                    <td></td>
                    <td>
                        <div class="flex justify-items-center items-baseline">
                            <input type="file" name="productpic" id="productpic"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            <button type="button" onclick="picclear()"
                                class="text-black bg-gray-300 w-48 ml-2 hover:bg-gray-200 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Зураг
                                арилгах
                            </button>
                        </div>
                    </td>
                </tr>
                <tr class='tablebody'>
                    <td align="right">Нүүрний зураг</td>
                    <td></td>
                    <td>
                        <div class="flex justify-items-center items-baseline">
                            <input type="file" name="homepic" id="homepic"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            <button type="button" onclick="picclear1()"
                                class="text-black bg-gray-300 w-48 ml-2 hover:bg-gray-200 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Зураг
                                арилгах
                            </button>
                        </div>
                    </td>
                </tr>
                <tr class='tablebody'>
                    <td align="right">Category</td>
                    <td></td>
                    <td>
                        <select name="categoryid"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <?php
                            for ($i = 0; $i < count($category); $i++) { ?>
                                <option value="<?= $category[$i]->id; ?>" <?php if (isset($product[0]->categoryid)) {
                                      if ($product[0]->categoryid == $category[$i]->id) {
                                          echo "selected";
                                      }
                                  } ?>>
                                    <?= $category[$i]->title; ?>
                                </option>

                            <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr class='tablebody'>
                    <td align="right">Гарчиг</td>
                    <td></td>
                    <td><input type="text" name="title"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            value="<?php if (isset($product[0]->title)) {
                                echo $product[0]->title;
                            }
                            ; ?>"></td>
                </tr>
                <tr class='tablebody'>
                    <td align="right">Үнэ</td>
                    <td></td>
                    <td><input type="text" name="price"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            value="<?php if (isset($product[0]->price)) {
                                echo $product[0]->price;
                            }
                            ; ?>"></td>
                </tr>
                <tr class='tablebody'>
                    <td align="right" valign="top">Товч тайлбар</td>
                    <td></td>
                    <td>
                        <textarea
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            name="description"><?php if (isset($product[0]->description)) {
                                echo $product[0]->description;
                            } ?></textarea>
                    </td>
                </tr>
                <tr class='tablebody'>
                    <td align="right" valign="top">Дэлгэрэнгүй</td>
                    <td></td>
                    <td>
                        <textarea name="info"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"><?php if (isset($product[0]->info)) {
                                echo $product[0]->info;
                            } ?></textarea>
                        <script type="text/javascript">
                            CKEDITOR.replace('info', {
                                "extraPlugins": 'imagebrowser,justify,font',
                                "imageBrowser_listUrl": "<?= base_url('apanel/browserfile'); ?>",
                                "filebrowserUploadUrl": "<?= base_url('apanel/upload'); ?>",
                                allowedContent: true,
                                width: "800",
                                height: "300",
                                language: "en"
                            });
                        </script>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td>
                        <button type="submit"
                            class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
                            Хадгалах
                        </button>
                        <a href="<?= base_url("apanel/product"); ?>">
                            <button type="button"
                                class="text-black hover:bg-gray-50 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
                                Болих
                            </button>
                        </a>
                    </td>
                </tr>
            </table>
            <input type="hidden" name="productid" id="productid" value="<?php if (isset($product[0]->id)) {
                echo $product[0]->id;
            }
            ; ?>" />
            <input type="hidden" name="productpicurl" id="productpicurl" value="<?php if (isset($product[0]->picurl)) {
                echo $product[0]->picurl;
            }
            ; ?>" />
            <input type="hidden" name="productsmallpicurl" id="productsmallpicurl" value="<?php if (isset($product[0]->small_picurl)) {
                echo $product[0]->small_picurl;
            }
            ; ?>" />
            <input type="hidden" name="homepicurl" id="homepicurl" value="<?php if (isset($product[0]->home_picurl)) {
                echo $product[0]->home_picurl;
            }
            ; ?>" />
            <input type="hidden" name="homesmallpicurl" id="homesmallpicurl" value="<?php if (isset($product[0]->home_small_picurl)) {
                echo $product[0]->home_small_picurl;
            }
            ; ?>" />
            </form>
            <?php
            if (isset($productid) && $productid > 0) {
                ?>
                <div class="w-full xl:w-3/1 ml-5 pt-5 mt-20 ml-72 xl:ml-0 ">
                    <div>
                        <a href="<?= base_url('apanel/product/skus_add/' . $productid); ?>">
                            <button type="button"
                                class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
                                Нэмэх
                            </button>
                        </a>
                        <table cellpadding="5" width="100%" class="table">
                            <caption>Бүтээгдэхүүний өнгө</caption>
                            <tr class='tablehead'>
                                <td class="bg-gray-600 text-white">Зураг</td>
                                <td class="bg-gray-600 text-white">Гарчиг</td>
                                <!-- <td class="bg-gray-600 text-white">Тоо</td>
                                    <td class="bg-gray-600 text-white">Үнэ</td> -->
                                <td class="bg-gray-600 text-white">Өнгө</td>
                                <td width="120" class="bg-gray-600 text-white"> Үйлдэл</td>
                            </tr>
                            <?php
                            for ($i = 0; $i < count($product_skus); $i++) { ?>
                                <tr class='tablebody'>
                                    <td align="center" class="align-middle w-20">
                                        <img src="<?= base_url($product_skus[$i]->small_picurl); ?>" height=30
                                            style="height:30px!important;">
                                    </td>
                                    <td><?= $product_skus[$i]->title; ?></td>
                                    <!-- <td><?= $product_skus[$i]->quantity; ?></td>
                                    <td><?= $product_skus[$i]->price; ?></td> -->
                                    <td><?= $product_skus[$i]->color; ?></td>
                                    <td class="text-center">
                                        <div class="align-middle flex justify-center">
                                            <a
                                                href="<?= base_url('apanel/product/skus_edit/' . $productid . '/' . $product_skus[$i]->id); ?>"><img
                                                    src="<?= base_url('images/edit.png'); ?>" height="30" alt="Засах"></a>
                                            <a onclick="return confirm('Устгах уу!!!')"
                                                href="<?= base_url('apanel/product/skus_del/' . $productid . '/' . $product_skus[$i]->id); ?>"><img
                                                    src="<?= base_url('images/delete.png'); ?>" height="30" alt="Устгах"></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                    <div class="mt-10">
                        <a href="<?= base_url('apanel/product/picture_add/' . $productid); ?>">
                            <button type="button"
                                class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
                                Нэмэх
                            </button>
                        </a>
                        <table cellpadding="5" width="100%" class="table">
                            <caption>Бүтээгдэхүүний зураг /Өнгө тус бүрээр/</caption>
                            <tr class='tablehead'>
                                <td class="bg-gray-600 text-white">Зураг</td>
                                <td class="bg-gray-600 text-white">Өнгө</td>
                                <td width="120" class="bg-gray-600 text-white">Үйлдэл</td>
                            </tr>
                            <?php
                            for ($i = 0; $i < count($product_picture); $i++) { ?>
                                <tr class='tablebody'>
                                    <td align="center" class="align-middle w-20">
                                        <img src="<?= base_url($product_picture[$i]->small_picurl); ?>" height=30
                                            style="height:30px!important;">
                                    </td>
                                    <td><?= $product_picture[$i]->skus_name; ?></td>
                                    <td class="text-center">
                                        <div class="align-middle flex justify-center">
                                            <a onclick="return confirm('Устгах уу!!!')"
                                                href="<?= base_url('apanel/product/picture_del/' . $productid . '/' . $product_picture[$i]->id); ?>"><img
                                                    src="<?= base_url('images/delete.png'); ?>" height="30" alt="Устгах"></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                    <div class="mt-10">
                        <a href="<?= base_url('apanel/product/slider_add/' . $productid); ?>">
                            <button type="button"
                                class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
                                Нэмэх
                            </button>
                        </a>
                        <table cellpadding="5" width="100%" class="table">
                            <caption>Бүтээгдэхүүний танилцуулга зураг</caption>
                            <tr class='tablehead'>
                                <td class="bg-gray-600 text-white">Зураг</td>
                                <td class="bg-gray-600 text-white">Байрлал</td>
                                <td width="120" class="bg-gray-600 text-white">Үйлдэл</td>
                            </tr>
                            <?php
                            for ($i = 0; $i < count($product_slider); $i++) { ?>
                                <tr class='tablebody'>
                                    <td align="center" class="align-middle w-20">
                                        <img src="<?= base_url($product_slider[$i]->small_picurl); ?>" height=30
                                            style="height:30px!important;">
                                    </td>
                                    <td>
                                        <?php if ($product_slider[$i]->position == 'left') {
                                            echo 'Зүүн';
                                        } else {
                                            echo 'Баруун';
                                        } ?>
                                    </td>
                                    <td class="text-center">
                                        <div class="align-middle flex justify-center">
                                            <a
                                                href="<?= base_url('apanel/product/slider_edit/' . $productid . '/' . $product_slider[$i]->id); ?>"><img
                                                    src="<?= base_url('images/edit.png'); ?>" height="30" alt="Засах"></a>
                                            <a onclick="return confirm('Устгах уу!!!')"
                                                href="<?= base_url('apanel/product/slider_del/' . $productid . '/' . $product_slider[$i]->id); ?>"><img
                                                    src="<?= base_url('images/delete.png'); ?>" height="30" alt="Устгах"></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            <?php } ?>
        </div>

    </div>

</div>

<script type="text/javascript">
    function picclear() {
        document.getElementById("productpicurl").value = "";
        document.getElementById("productsmallpicurl").value = "";
        document.getElementById("homepicurl").value = "";
        document.getElementById("homesmallpicurl").value = "";
    }
</script>
</body>

</html>