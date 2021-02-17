<?php 
$word1 = strip_tags($single_blog_description);
$word2 = strip_tags($single_blog_content);
$wordNumber1 = str_word_count($word1);
$wordNumber2 = str_word_count($word2);
$addition = $wordNumber1 + $wordNumber2;
$reading_time = floor($addition / 250);
?>

<?php if ($single_blog_description){ ?> <p>Temps de lecture : <?php echo $reading_time ;?> min</p> <?php } ?>