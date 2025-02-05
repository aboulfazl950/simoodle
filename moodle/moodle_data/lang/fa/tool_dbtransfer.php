<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'tool_dbtransfer', language 'fa', version '4.5'.
 *
 * @package     tool_dbtransfer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['dbtransfer'] = 'مهاجرت پایگاه داده';
$string['enablemaintenance'] = 'فعال کردن حالت نگهداشت';
$string['enablemaintenance_help'] = 'این گزینه حالت نگهداشت را در حین و پس از مهاجرت پایگاه داده روشن نگاه می‌دارد و جلوی دسترسی تمام کاربران را تا اتمام مهاجرت می‌گیرد. لطفا توجه داشته باشید که مدیر سایت باید بعد از به‌روز کردن تنظیمات فایل config.php، فایل <span dir="ltr" style="direction:ltr\'display:inline-block;">$CFG->dataroot/climaintenance.html</span> را به‌طور دستی پاک کند تا عملکرد سایت به وضعیت عادی بازگردد.';
$string['notargetconectexception'] = 'اتصال به پایگاه داده مقصد برقرار نشد.';
$string['options'] = 'اختیارات';
$string['pluginname'] = 'انتقال پایگاه داده';
$string['targetdatabase'] = 'پایگاه دادهٔ مقصد';
$string['transferdata'] = 'انتقال داده‌ها';
$string['transferdbintro'] = 'این اسکریپت کل محتویات این پایگاه داده را به یک کارگزار پایگاه داده دیگر منتقل می‌کند. از این قابلیت معمولا برای مهاجرت داده‌ها به یک نوع متفاوت پایگاه داده استفاده می‌شود.';
$string['transferdbtoserver'] = 'انتقال پایگاه دادهٔ مودل به یک کارگزار دیگر';
$string['transferringdbto'] = 'انتقال این پایگاه دادهٔ {$a->dbtypefrom} به پایگاه دادهٔ {$a->dbtype} با نام «{$a->dbname}» در میزبان «{$a->dbhost}»';
