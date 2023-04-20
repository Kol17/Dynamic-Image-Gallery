<?php
$page = "<!DOCTYPE html><html><head><title>";
$page .= $pageData->getTitle();
$page .= "</title>
<meta http-equiv='Content-Type' content='text/html;charset=utf-8' />";
$page .= $pageData->getCSS();
$page .= "</head><body>";
$page .= $pageData->getContent();
$page .= $pageData->getScript();
$page .= "</body></html>";
