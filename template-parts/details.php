<!-- Author and Time Details -->

<div class="details">
  <div><i class="fa-solid fa-circle-user fa-lg"></i><?php echo get_the_author(); ?></div>
  <div><i class="fa-solid fa-clock fa-lg"></i><?php
    $post_date = get_the_date('Y-m-d');
    $current_date = date('Y-m-d');
    $post_time = get_the_time('U');
    $days_diff = strtotime($current_date) - strtotime($post_date);
    if ($days_diff < 86400) { // 86400 seconds in a day
      echo trim(human_time_diff($post_time, current_time('timestamp'))) . ' ago';
    } else {
      echo trim(get_the_date('F jS'));
    }
  ?></div>
</div>
