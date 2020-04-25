<h2>Chinese Proverb Uploader</h2>
<form method="post" action="index.php?page=midterm_assessment">
    <p>Enter a Chinese Proverb here: </p>
    <textarea name="prov" rows="4" cols="50" required></textarea>
    <input type="submit" value="Upload"/>
</form>

<?php
    if (isset($_POST['prov'])) {
        $File = fopen("proverbs.txt", "ab");
        fwrite($File, $_POST['prov'] . "\n");
        fclose($File);
    }
?>
