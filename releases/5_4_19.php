<?php
$_SERVER['BASE_PAGE'] = 'releases/5_4_19.php';
include_once __DIR__ . '/../include/prepend.inc';
site_header("PHP 5.4.19 Release Announcement");
?>

<h1>PHP 5.4.19 Release Announcement</h1>

<p>The PHP development team announces the immediate availability of PHP
5.4.19. This release fixes a bug in the patch for CVE-2013-4248 in OpenSSL module and
compile failure with ZTS enabled.</p>

<p>All PHP 5.4 users are encouraged to upgrade to this release.</p>

<p>For source downloads of PHP 5.4.19 please visit our <a href="https://www.php.net/downloads.php">downloads page</a>,
Windows binaries can be found on <a href="https://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="https://www.php.net/ChangeLog-5.php#5.4.19">ChangeLog</a>.
</p>

<?php site_footer(); ?>
