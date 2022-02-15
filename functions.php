<?php // phpの開始タグはfunctions.phpの先頭にコードを書くときに必要（このレッスンではまだfunctions.phpに他のコードを書いていないのでそのまま貼り付けてください）
function display_title() {
  add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'display_title' );