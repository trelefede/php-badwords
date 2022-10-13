<?php

$badWord = $_GET['word'];

$paragrafo = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis, libero. Sed deleniti dolore nam dolor molestias eius at quaerat ea eum neque rerum optio laboriosam autem, modi odio maiores porro."; 
$paragrafoLength = strlen($paragrafo);

$censoredWord = str_ireplace($badWord, '***', $paragrafo);
$censoredParagraphLength = strlen($censoredWord);

?>

<p>
    Paragrafo originale: <?= $paragrafo ?>
</p>
                                
<p>
    Lunghezza paragrafo originale: <?= $paragrafoLength ?>
</p>

<p>
    Paragrafo con parola censurata: <?= $censoredWord ?>
</p>

<p>
    Lunghezza paragrafo censurato: <?= $censoredParagraphLength ?>
</p>