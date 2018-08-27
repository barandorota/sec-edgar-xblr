<?php
$xsd = __DIR__ . '/us-gaap-2018-01-31/dis/us-gaap-dis-acec-2018-01-31.xsd';
$xml = __DIR__ . '/us-gaap-2018-01-31/dis/us-gaap-dis-acec-def-2018-01-31.xml';

if (file_exists($xsd)) {
    echo $xsd.'<br/>';
}

if (file_exists($xml)) {
    echo $xml.'<br/>';
}

include 'DOMValidator.php';

$validator = new DomValidator($xsd);
$validated = $validator->validateFeeds($xml);
if ($validated) {
  echo "Feed successfully validated";
} else {
  print_r($validator->displayErrors());
}

require 'XMLValidator.php';
$validator = new XmlValidator($xsd);
$validated = $validator->validateFeeds($xml);
if ($validated) {
  echo "Feed successfully validated";
} else {
  print_r($validator->displayErrors());
}

?>