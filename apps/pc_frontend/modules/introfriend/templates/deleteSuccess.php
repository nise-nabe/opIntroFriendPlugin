<?php op_include_parts('yesNo', 'delete_introfriend', array(
  'yes_form' => new BaseForm(),
  'yes_method' => 'post',
  'no_method' => 'get',
  'no_url' => url_for('@obj_introfriend?id='.$friendId),
  'title' => __('Do you really delete it?'),
)) ?>
