<?php

function Palindrome($s)
{
    $word = str_replace(' ', '', $s);
    $len = strlen($word);
    $isPalindrome = true;
    for ($i=0; $i < $len/2 ; $i++) {
        if (strtolower($word[$i]) != strtolower($word[$len-1-$i])) {
            $isPalindrome = false;
            break;
        }
    }
    if ($isPalindrome) {
        echo("The word \"" . $word . "\" is a Palindrome. <br>");
    } else {
        echo("The word \"" . $word . "\" is NOT a Palindrome. <br>");
    }
}
?>

<html>
    <head>
        <title>Is the word a palindrome?</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
   <body>
        <div class="flex w-full h-full bg-gray-200 mx-auto items-center justify-center">
            <div class="bg-gray-400 rounded m-10 p-10 md:p-20 flex flex-col gap-6">
                <h2 class="font-bold text-xl md:text-3xl text-center">Palindrome Check</h2>
                <form name="form" action="" method="get" class="flex flex-row gap-2">
                    <input type="text" name="word" id="word" placeholder="Insert word" class="px-4 py-2"
                    <?php if (isset($_GET['word'])): ?> value="<?php  echo $_GET['word'] ?>" <?php endif; ?> >
                    <button class="border border-black px-4 py-2 bg-black hover:bg-gray-400 text-white hover:text-black">
                        Check
                    </button>
                </form>
                <?php if (isset($_GET['word'])): ?>
                    <div class="text-center"> <?php Palindrome($_GET['word']); ?> </div>
                <?php endif; ?>
            </div>
        </div>
   </body>
</html>