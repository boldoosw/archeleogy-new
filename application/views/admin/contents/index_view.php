<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="container" style="margin-top:60px;">
    <div class="row">
        <?php

        echo anchor('admin/contents/create/' . $content_type . '/' . $current_lang['slug'], 'Add ' . $content_type, 'class="btn btn-primary"');

        ?>
    </div>
    <div class="row">
        <?php
        echo '<table class="table table-hover table-bordered table-condensed">';
        echo '<thead>';
        echo '<tr>';
        echo '<th rowspan="2">ID</th>';
        echo '<th rowspan="2">' . ucfirst($content_type) . ' title</th>';
        echo '<th rowspan="2">Featured</th>';
        foreach ($langs as $slug => $language) {
            echo '<th>' . $slug . '</th>';
        }
        echo '<th>All</th>';
        echo '</tr>';
        echo '<tr>';
        foreach ($langs as $slug => $language) {
            echo '<th>Operations</th>';
        }
        echo '<th>Operations</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        if (!empty($contents)) {

            foreach ($contents as $content_id => $content) {
                echo '<tr>';
                echo '<td>' . $content_id . '</td><td>' . $content['title'] . '</td>';
                echo '<td>';
                if (strlen($content['featured_image']) > 0) {
                    echo anchor($content['featured_image'], '<span class="glyphicon glyphicon-picture"></span>', 'target="_blank"');
                    echo ' ' . anchor('admin/images/delete_featured/' . $content_id, '<span class="glyphicon
                            glyphicon-remove" aria-hidden="true"></span>', 'onclick="return confirm(\'Are you sure you want to delete?\')"');
                } else {
                    echo anchor('admin/images/featured/' . $content_id, '<span class="glyphicon glyphicon-plus"></span>');
                }
                echo '</td>';
                foreach ($langs as $slug => $language) {
                    echo '<td>';
                    if (array_key_exists($slug, $content['translations'])) {
                        echo anchor('admin/contents/edit/' . $slug . '/' . $content_id, '<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>');
                        echo ' ' . anchor('admin/contents/delete/' . $slug . '/' . $content_id, '<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>', 'onclick="return confirm(\'Are you sure you want to delete?\')"');
                        $rakestyle = '';
                        if ($content['translations'][$slug]['rake'] != '1')
                            $rakestyle = ' style="color:red;"';
                        echo ' ' . anchor('admin/rake/analyze/' . $slug . '/' . $content_id, '<span class="glyphicon glyphicon-cog" aria-hidden="true"' . $rakestyle . '></span>');
                        /*echo '<br />'.$page['translations'][$slug]['created_at'];
                        echo '<br />'.$page['translations'][$slug]['last_update'];*/
                    } else {
                        echo anchor('admin/contents/create/' . $content['content_type'] . '/' . $slug . '/' . $content_id, '<span style="color:red">Мэдээлэл оруулаагүй байна!  </span><span class="glyphicon glyphicon-plus pl-4" aria-hidden="true"></span>');
                    }
                    echo '</td>';
                }
                echo '<td>';
                echo anchor('admin/contents/delete/all/' . $content_id, '<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>', 'onclick="return confirm(\'Are you sure you want to delete?\')"');
                echo ' ' . anchor('admin/images/index/' . $content_id, '<span class="glyphicon glyphicon-picture"></span>');
                $publish = ($content['published'] == '1') ? 0 : 1;
                $style = ($content['published'] == '1') ? '' : ' style="color: red;"';
                $icon = ($content['published'] == '1') ? 'up' : 'down';
                echo ' ' . anchor('admin/contents/publish/' . $content_id . '/' . $publish, '<span class="glyphicon glyphicon-thumbs-' . $icon . '" aria-hidden="true"' . $style . '></span>');
                echo '<br />' . $content['published_at'];
                echo '</td>';
                echo '</tr>';
            }
        }
        echo '</tbody>';
        echo '</table>';
        ?>
    </div>
</div>