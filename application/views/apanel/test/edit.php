<div class="container">
    <div id="body" class="pt-5 ml-72 mt-20 w-full">
        <?php echo form_open_multipart(base_url("apanel/test/save")); ?>
        <table cellpadding="5" border="0" align="left" class="table-border-none">
            <tr class='tablebody'>
                <td>Гарчиг</td>
                <td></td>
                <td><input type="text" name="title"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="<?php if (isset($test[0]->title)) {
                            echo $test[0]->title;
                        }
                        ; ?>"></td>
            </tr>
            <tr class='tablebody'>
                <td>Дэлгэрэнгүй Мэдээлэл</td>
                <td></td>
                <td><input type="text" name="description"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="<?php if (isset($test[0]->description)) {
                            echo $test[0]->description;
                        }
                        ; ?>"></td>
            </tr>

            <tr class='tablebody'>
                <td>Зураг</td>
                <td></td>
                <td>
                    <input type="file" name="testpic" required
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                </td>
            </tr>
            <tr class='tablebody'>
                <td>PDF файл</td>
                <td></td>
                <td>
                    <input type="file" name="testpdf" required
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                </td>
            </tr>

            <tr>
                <td colspan="2"></td>
                <td>
                    <button type="submit"
                        class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
                        Хадгалах
                    </button>
                    <a href="<?= base_url("apanel/test"); ?>">
                        <button type="button"
                            class="text-black hover:bg-gray-50 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
                            Болих
                        </button>
                    </a>
                </td>
            </tr>
            <!-- <tr>
                <?php echo form_open_multipart('filemanager/upload_file'); ?>
                <input type="file" name="userfile" size="20" />
                <br /><br />
                <input type="submit" value="оруулах" />
                </form>
            </tr> -->
        </table>
        <input type="hidden" name="testid" value="<?php if (isset($test[0]->id)) {
            echo $test[0]->id;
        }
        ; ?>" />
        <input type="hidden" name="testpicurl" value="<?php if (isset($test[0]->picurl)) {
            echo $test[0]->picurl;
        }
        ; ?>" />
        <input type="hidden" name="testpdfurl" value="<?php if (isset($test[0]->pdfurl)) {
            echo $test[0]->pdfurl;
        }
        ; ?>" />

        </form>
    </div>
</div>
</body>

</html>