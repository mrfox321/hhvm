<?hh // decl

/*
   +----------------------------------------------------------------------+
   | HipHop for PHP                                                       |
   +----------------------------------------------------------------------+
   | Copyright (c) 2010-present Facebook, Inc. (http://www.facebook.com)  |
   +----------------------------------------------------------------------+
   | This source file is subject to version 3.01 of the PHP license,      |
   | that is bundled with this package in the file LICENSE, and is        |
   | available through the world-wide-web at the following url:           |
   | http://www.php.net/license/3_01.txt                                  |
   | If you did not receive a copy of the PHP license and are unable to   |
   | obtain it through the world-wide-web, please send a note to          |
   | license@php.net so we can mail you a copy immediately.               |
   +----------------------------------------------------------------------+
 */

namespace HH\Lib\_Private\_Str {

use type HH\Lib\_Private\_Locale\Locale;

<<__Native>>
function strlen_l(string $str, ?Locale $loc = null): int;
<<__Native>>
function uppercase_l(string $str, ?Locale $loc = null): string;
<<__Native>>
function lowercase_l(string $str, ?Locale $loc = null): string;
<<__Native>>
function titlecase_l(string $str, ?Locale $loc = null): string;

<<__Native>>
function foldcase_l(string $str, ?Locale $loc = null): string;

} // namespace HH\Lib\_Private\_Str