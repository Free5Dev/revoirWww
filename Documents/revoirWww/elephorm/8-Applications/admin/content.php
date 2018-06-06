<?php 
	if ($argc < 4 || $argv[$argc - 2] != ">>" && $argv[$argc - 2] != ">")
  {
    echo "Usage: ./redirection 'string' '[> >>]' 'File'\n";
      }
else if (is_dir($argv[$argc - 1]))
  {
    echo "redirection.php: {$argv[$argc -1]}: Is a directory\n";
  }
else if (is_file($argv[$argc - 1]) && !(is_writable($argv[$argc - 1])))
  {
    echo "redirection.php: {$argv[$argc -1]}: Permission denied\n";
  }
else if ($argv[$argc - 2] == ">>")
  {
    $open = fopen($argv[$argc - 1], "a");
    fwrite($open, $argv[1]);
    fclose($open);
  }
else if ($argv[$argc - 2] == ">")
  {
    $open = fopen($argv[$argc - 1], "w");
    fwrite($open, $argv[1]);
    fclose($open);
  }
else
  echo "redirection.php: {$argv[$argc -1]}: Cannot open file\n";
?>

