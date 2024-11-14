<title>Мэдээ</title>
<div class="container" style="margin-top:60px;">


    <?php echo form_open(base_url("admin/news/search")); ?>
    Мэдээний төрлөөр хайх
    <select name="searchmenuid" class="searchbox">
        <option value="0">Бүгд</option>
        <?php
        for ($i = 0; $i < count($menulist); $i++) {
            if ($menulist[$i]->parentid == 0) { ?>
                <option value="<?= $menulist[$i]->IDs; ?>" <?php if (isset($menuid)) {
                      if ($menuid == $menulist[$i]->IDs) {
                          echo "selected";
                      }
                  } ?>>
                    <?= $menulist[$i]->menuname; ?>
                </option>
                <?php
                for ($j = 0; $j < count($menulist); $j++) {
                    if ($menulist[$i]->IDs == $menulist[$j]->parentid) { ?>
                        <option value="<?= $menulist[$j]->IDs; ?>" <?php if (isset($menuid)) {
                              if ($menuid == $menulist[$j]->IDs) {
                                  echo "selected";
                              }
                          } ?>>&nbsp;&nbsp;&nbsp;-
                            <?= $menulist[$j]->menuname; ?>
                        </option>
                        <?php
                        for ($k = 0; $k < count($menulist); $k++) {
                            if ($menulist[$j]->IDs == $menulist[$k]->parentid) { ?>
                                <option value="<?= $menulist[$k]->IDs; ?>" <?php if (isset($menuid)) {
                                      if ($menuid == $menulist[$k]->IDs) {
                                          echo "selected";
                                      }
                                  } ?>>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-<?= $menulist[$k]->menuname; ?></option>
                                <?php
                            }
                        }
                    }
                }
            }
        }
        ?>
    </select>
    <button type="submit" class="btn btn-primary">Хайх</button>
    </form>
    <div class="row">

        <a href="<?= base_url('admin/news/add'); ?>">
            <button type="button" class="btn btn-primary ">
                Нэмэх
            </button>
        </a>
    </div>
    <div class="row">
        <table cellpadding="5" width="100%" class="table">
            <tr class='tablehead'>
                <td>Зураг</td>
                <td>Гарчиг</td>
                <td>Меню нэр</td>
                <td width="80">Огноо</td>
                <td width="120"></td>
            </tr>
            <?php for ($i = 0; $i < count($news); $i++) { ?>
                <tr class='tablebody'>
                    <td align="center" class="align-middle"><img src="<?= base_url($news[$i]->small_picurl); ?>" height=30
                            style="height:30px!important;">
                    </td>
                    <td><?= $news[$i]->title; ?></td>
                    <td><?= $news[$i]->menuname; ?></td>
                    <td><?= date_format(date_create($news[$i]->created_at), "Y-m-d"); ?></td>
                    <td class="text-center align-middle flex justify-center">
                        <a href="<?= base_url('admin/news/edit/' . $news[$i]->id); ?>"><img
                                src="<?= base_url('images/edit.png'); ?>" height="30" alt="Засах"></a>
                        <a onclick="return confirm('Устгах уу!!!')"
                            href="<?= base_url('admin/news/del/' . $news[$i]->id); ?>"><img
                                src="<?= base_url('images/delete.png'); ?>" height="30" alt="Устгах"></a>
                    </td>
                </tr>
            <?php }
            ?>
        </table>
    </div>
    <div>
        <?php
        if ($newscount / 20 > 1) {
            $total_pages = ceil($newscount / 20);
            for ($i = 1; $i <= $total_pages; $i++) {
                echo "<a href='" . base_url("admin/news/page/" . $i) . "'>" . $i . "</a> ";
            }
        }
        ?>
    </div>
    <div class="row">

        <a href="<?= base_url('admin/news/add'); ?>">
            <button type="button" class="btn btn-primary ">
                Нэмэх
            </button>
        </a>
    </div>
</div>