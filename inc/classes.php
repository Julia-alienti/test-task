<?php
class VideoOrderBy
{
    public static function orderby($query)
    {
        if ($query->get('post_type') == 'video') {
            $query->set('orderby', 'meta_value');
            $query->set('order', 'ASC');
            $query->set('meta_key', 'order');
        }
    }
}