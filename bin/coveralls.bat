@ECHO OFF
SET BIN_TARGET=%~dp0/../vendor/satooshi/php-coveralls/composer/bin/coveralls
php "%BIN_TARGET%" %*
