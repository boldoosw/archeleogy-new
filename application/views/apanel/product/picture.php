<title>product</title>
<script src="<?=base_url('ckeditor/ckeditor.js');?>" type="text/javascript"></script>
<div class="container mt-5">
    <div class="flex">
        <div id="body" class="pt-5 ml-72 mt-20">
            <?php  echo form_open_multipart(base_url("apanel/product/picture_save")); ?>
            <table cellpadding="5" width="100%" class="w-full table-border-none">
                <tr class='tablebody'>
                    <td align="right">Нүүрний зураг</td>
                    <td></td>
                    <td>
                        <div class="flex justify-items-center items-baseline">
                            <input type="file" name="product_picture[]" id="product_picture" multiple
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            <button type="button" onclick="picclear()"
                                class="text-black bg-gray-300 w-48 ml-2 hover:bg-gray-200 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Зураг
                                арилгах
                            </button>
                        </div>
                    </td>
                </tr>
                <tr class='tablebody'>
                    <td align="right">Өнгө</td>
                    <td></td>
                    <td>
                        <select name="product_skus_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <?php 
							for($i=0;$i<count($product_skus);$i++)
							{?>
                            <option value="<?=$product_skus[$i]->id;?>"
                                <?php if(isset($product_picture[0]->product_skus_id)) {if($product_picture[0]->product_skus_id==$product_skus[$i]->id) {echo "selected";}} ?>>
                                <?=$product_skus[$i]->title;?></option>
                            <?php  } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td>
                        <button type="submit"
                            class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
                            Хадгалах
                        </button>
                        <a href="<?=base_url("apanel/product/edit/".$productid);?>">
                            <button type="button"
                                class="text-black hover:bg-gray-50 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
                                Болих
                            </button>
                        </a>
                    </td>
                </tr>
                <input type="hidden" name="pictureid" id="pictureid"
                    value="<?php if(isset($product_picture[0]->id)) {echo $product_picture[0]->id; };?>" />
                <input type="hidden" name="product_id" id="product_id"
                    value="<?php if(isset($productid)) {echo $productid; };?>" />
                <input type="hidden" name="product_picture_picurl" id="product_picture_picurl"
                    value="<?php if(isset($product_picture[0]->picurl)) {echo $product_picture[0]->picurl; };?>" />
                <input type="hidden" name="product_picture_smallpicurl" id="product_picture_smallpicurl"
                    value="<?php if(isset($product_picture[0]->small_picurl)) {echo $product_picture[0]->small_picurl; };?>" />
            </table>
            </form>
        </div>
    </div>

</div>

<script type="text/javascript">
function picclear() {
    document.getElementById("product_picture_picurl").value = "";
    document.getElementById("product_picture_smallpicurl").value = "";
}
</script>
</body>

</html>