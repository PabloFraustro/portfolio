<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
<html><body><p>#!/usr/bin/env bash

basedir=$( dirname $( readlink -f ${BASH_SOURCE[0]} ) )

php -dphar.readonly=0 "$basedir/other/build_phar.php" $*</p></body></html>
<!-- Powered by Staatic (https://staatic.com/) -->