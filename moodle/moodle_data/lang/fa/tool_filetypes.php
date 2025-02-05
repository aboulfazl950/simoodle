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
 * Strings for component 'tool_filetypes', language 'fa', version '4.5'.
 *
 * @package     tool_filetypes
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addfiletypes'] = 'اضافه‌کردن یک نوع فایل جدید';
$string['defaulticon'] = 'آیکن پیش‌فرض برای نوع MIME';
$string['defaulticon_help'] = 'اگر چند پسوند با نوع MIME یکسان وجود داشته باشند، این گزینه را برای یکی از پسوندها انتخاب کنید تا هنگام تعیین یک آیکن از نوع MIME ها، از آیکن آن پسوند استفاده شود.';
$string['delete_confirmation'] = 'آیا کاملا مطمئن هستید که می‌خواهید <strong style="display:inline-block; direction:ltr;">.{$a}</strong> را حذف کنید؟';
$string['deletea'] = 'حذف {$a}';
$string['deletefiletypes'] = 'پاک‌کردن یک نوع فایل';
$string['description'] = 'توصیف سفارشی';
$string['descriptiontype_custom'] = 'توصیف سفارشی مشخص‌شده در این فرم';
$string['descriptiontype_default'] = 'پیش‌فرض (نوع MIME یا عبارت ترجمهٔ مربوطه در صورت موجود بودن)';
$string['descriptiontype_help'] = 'برای مشخص کردن یک توصیف سه راه وجود دارد.

* رفتار پیش‌فرض این است که از نوع MIME استفاده شود. اگر ترجمه‌ای برای آن نوع MIME در بستهٔ زبانی موجود باشد، از ترجمه استفاده خواهد شد؛ در غیراین‌صورت خود نوع MIME به کاربران نمایش داده خواهد شد.
* می‌توانید یک توصیف سفارشی در این فرم مشخص کنید.
* می‌توانید نام شناسهٔ یک عبارت ترجمه در فایل mimetypes.php را وارد کنید تا به‌جای نوع MIME از آن استفاده شود.';
$string['displaydescription'] = 'توصیف';
$string['editfiletypes'] = 'ویرایش یک نوع فایل موجود';
$string['emptylist'] = 'هیچ نوع فایلی تعریف نشده است.';
$string['error_addentry'] = 'پسوند، توصیف، نوع MIME، و آیکن فایل نباید شامل کاراکترهای خط جدید و نقطه‌ویرگول لاتین (semicolon) باشند.';
$string['error_defaulticon'] = 'پسوند دیگری از همین نوع MIME قبلا به‌عنوان آیکن پیش‌فرض انتخاب شده است.';
$string['extension'] = 'پسوند';
$string['extension_help'] = 'پسوند فایل بدون نقطه. مثال: &rsquo;mobi&lsquo;';
$string['groups'] = 'گروه‌های نوع';
$string['groups_help'] = 'لیست اختیاری گروه‌های نوع که این نوع به آنها تعلق دارد. اینها دسته‌های عمومی مانند &rsquo;سند&lsquo; و &rsquo;عکس&lsquo; هستند.';
$string['icon'] = 'آیکن فایل';
$string['icon_help'] = 'نام فایل آیکن. لیست آیکن‌ها از دایرکتوری <span dir="ltr" style="display:inline-block;direction:ltr">/pix/f</span> خوانده می‌شود. اگر لازم باشد می‌توانید آیکن‌های جدید را به این پوشه اضافه کنید.';
$string['mimetype'] = 'نوع MIME';
$string['mimetype_help'] = 'نوع MIME منسوب به این نوع فایل؛ مثال: «application/x-mobipocket-ebook»';
$string['pluginname'] = 'انواع فایل';
$string['revert'] = 'بازیابی {$a} به پیش‌فرض‌های مودل';
$string['revert_confirmation'] = 'آیا کاملا مطمئن هستید که می‌خواهید تغییراتتان را نادیده بگیرید و <strong style="display:inline-block; direction:ltr;">.{$a}</strong> را به پیش‌فرض‌های مودل بازیابی کنید؟';
$string['source'] = 'نوع';
$string['source_deleted'] = 'حذف‌شده';
$string['source_standard'] = 'استاندارد';
