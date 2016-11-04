<td colspan="3">
  <?php echo __('%%id%% - %%created_at%% - %%updated_at%%', array('%%id%%' => link_to($jobeet_category->getId(), 'jobeet_category_edit', $jobeet_category), '%%created_at%%' => false !== strtotime($jobeet_category->getCreatedAt()) ? format_date($jobeet_category->getCreatedAt(), "f") : '&nbsp;', '%%updated_at%%' => false !== strtotime($jobeet_category->getUpdatedAt()) ? format_date($jobeet_category->getUpdatedAt(), "f") : '&nbsp;'), 'messages') ?>
</td>
