<?php
// isi dokumen dinyatakan dalam bentuk string
$document = file_get_contents("permohonan.rtf");
// header untuk membuka file output RTF dengan MS. Word
// nama file output adalah undangan.rtf
header("Content-type: application/msword");
header("Content-disposition: inline; filename=permohonan.rtf");
header("Content-length: " . strlen($document));
echo $document;

?>