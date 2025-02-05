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
 * Strings for component 'portfolio_flickr', language 'fa', version '4.5'.
 *
 * @package     portfolio_flickr
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apikey'] = 'کلید API';
$string['err_noapikey'] = 'کلید API موجود نیست';
$string['err_noapikey_help'] = 'هیچ کلید API ی برای این پلاگین پیکربندی نشده است. از صفحه سرویس‌های فلیکر می‌توانید یکی دریافت کنید.';
$string['safe'] = 'امن';
$string['safetylevel'] = 'سطح امنیت';
$string['setupinfo'] = 'دستورالعمل راه‌اندازی';
$string['setupinfodetails'] = 'برای دریافت کلید API و عبارت رمز، به صورت یک کاربر وارد فلیکر شوید و <a href="{$a->applyurl}">درخواست یک کلید جدید</a> نمائید. پس از اینکه کلید و عبارت رمز جدید برایتان تولید شد، پیوند «Edit auth flow for this app» در صفحه را دنبال کنید. گزینهٔ «App Type» را روی «Web Application» قرار دهید. در فیلد «Callback URL» مقدار زیر را قرار دهید:<br /><code style="display:inline-block">{$a->callbackurl}</code><br />در صورت تمایل می‌توانید توصیف و لوگوی سایت مودلتان را هم وارد کنید. این مقادیر بعداً در صفحهٔ <a href="{$a->keysurl}">listing your Flickr applications</a> قابل تغییر هستند.';
$string['sharedsecret'] = 'عبارت رمز';
$string['title'] = 'عنوان';
