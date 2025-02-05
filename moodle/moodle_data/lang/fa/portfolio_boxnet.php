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
 * Strings for component 'portfolio_boxnet', language 'fa', version '4.5'.
 *
 * @package     portfolio_boxnet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientid'] = 'شناسهٔ مشتری';
$string['clientsecret'] = 'رمز مشتری';
$string['missingoauthkeys'] = 'شناسه و رمز مشتری وارد نشده است';
$string['missingoauthkeys_help'] = 'شناسه یا رمز مشتری برای این پلاگین پیکربندی نشده است. یکی از اینها را می‌توانید از صفحهٔ توسعهٔ Box بگیرید.';
$string['notarget'] = 'باید یا یک پوشهٔ موجود یا پوشهٔ جدیدی که می‌خواهید در آن آپلود کنید را تعیین کنید';
$string['setupinfo'] = 'دستورالعمل راه‌اندازی';
$string['setupinfodetails'] = 'برای گرفتن کلید API، به عنوان کاربر وارد Box.net شوید و <a href="{$a->servicesurl}">صفحهٔ توسعهٔ OpenBox</a> آنها را ببینید. در قسمت «Developer Tools»، بر روی «Create new application» کلیک کنید و یک برنامهٔ جدید برای سایت مودلتان بسازید. در فرم ویرایش برنامه، کلید API در قسمت «Backend parameters» نمایش داده می‌شود. در آن فرم، فیلد «Redirect URL» را با مقدار زیر پر کنید:<br /><code dir="ltr" style="display:inline-block;direction:ltr">{$a->callbackurl}</code><br />در صورت تمایل، می‌توانید اطلاعات دیگری هم در مورد سایت مودلتان در آن فرم وارد کنید. این مقادیر بعداً در صفحهٔ «View my applications» قابل ویرایش هستند.';
$string['warninghttps'] = 'برای اینکه پورتفولیوی Box کار کند، سایت شما باید از HTTPS استفاده کند.';
