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
 * Strings for component 'tool_xmldb', language 'fa', version '4.5'.
 *
 * @package     tool_xmldb
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aftertable'] = 'بعد از جدول:';
$string['back'] = 'بازگشت';
$string['backtomainview'] = 'بازگشت به صفحهٔ اصلی';
$string['change'] = 'تغییر';
$string['check_bigints'] = 'جستجوی عددهای صحیح نادرست در پایگاه داده';
$string['check_defaults'] = 'جستجوی مقادیر پیش‌فرض ناسازگار';
$string['check_foreign_keys'] = 'جستجوی تخطی‌های کلید خارجی';
$string['check_indexes'] = 'جستجوی index های ناموجود در پایگاه داده';
$string['checkbigints'] = 'بررسی integer ها';
$string['checkdefaults'] = 'بررسی پیش‌فرض‌ها';
$string['checkforeignkeys'] = 'بررسی کلیدهای خارجی';
$string['checkindexes'] = 'بررسی index ها';
$string['completelogbelow'] = '(گزارش کامل جستجو را در زیر ببینید)';
$string['confirmcheckbigints'] = 'این قابلیت به جستجوی <a href="http://tracker.moodle.org/browse/MDL-11038">فیلدهای عددی صحیح به طور بالقوه مشکل‌دار</a> در کارگزار مودل شما می‌پردازد و به طور خودکار دستورات SQL مورد نیاز برای مناسب کردن تعریف تمام فیلدهای عدد صحیح در پایگاه دادهٔ شما را تولید (و نه اجرا) می‌کند.

پس از تولید، می‌توانید آن دستورها را کپی کرده و آنها را با خاطر آسوده و با استفاده از نرم‌افزار اتصال به SQL دلخواهتان اجرا کنید (فراموش نکنید که پیش از آن از داده‌هایتان پشتیبان تهیه نمایید).

قویاً توصیه می‌شود که برای اجرای جستجوی عددهای صحیح مشکل‌دار، در حال استفاده از جدیدترین نسخهٔ موجود (نسخهٔ +) از انتشار مودل خود (۱٫۸، ۱٫۹، ۲٫x، ...) باشید.

این قابلیت هیچ عملی در قبال پیاگاه داده انجام نمی‌دهد (تنها اطلاعات را از آن می‌خواند)، بنابراین می‌تواند در هر زمانی اجرا شود.';
$string['confirmcheckdefaults'] = 'این قابلیت به جستجوی مقادیر پیش‌فرض ناسازگار در کارگزار مودل شما می‌پردازد و به طور خودکار دستورات SQL مورد نیاز برای تعریف مناسب مقادیر پیش‌فرض را تولید (و نه اجرا) می‌کند.

پس از تولید، می‌توانید آن دستورها را کپی کرده و آنها را با خاطر آسوده و با استفاده از نرم‌افزار اتصال به SQL دلخواهتان اجرا کنید (فراموش نکنید که پیش از آن از داده‌هایتان پشتیبان تهیه نمایید).

قویاً توصیه می‌شود که برای اجرای جستجوی مقادیر پیش‌فرض ناسازگار، در حال استفاده از جدیدترین نسخهٔ موجود (نسخهٔ +) از انتشار مودل خود (۱٫۸، ۱٫۹، ۲٫x، ...) باشید.

این قابلیت هیچ عملی در قبال پایگاه داده انجام نمی‌دهد (تنها اطلاعات را از آن می‌خواند)، بنابراین می‌تواند در هر زمانی اجرا شود.';
$string['confirmcheckforeignkeys'] = 'این قابلیت به جستجوی تخطی‌های بالقوهٔ کلیدهای خارجی تعریف شده در تعاریف install.xml می‌پردازد. (در حال حاضر مودل محدودیت‌های واقعی کلید خارجی را تولید نمی‌کند. به همین دلیل است که ممکن است داده‌های نامعتبری در پایگاه داده وجود داشته باشد.)

قویاً توصیه می‌شود که برای اجرای جستجوی تخطی‌های بالقوهٔ کلیدهای خارجی، در حال استفاده از جدیدترین نسخهٔ موجود (نسخهٔ +) از انتشار مودل خود باشید.

این قابلیت هیچ عملی در قبال پایگاه داده انجام نمی‌دهد (تنها اطلاعات را از آن می‌خواند)، بنابراین می‌تواند در هر زمانی اجرا شود.';
$string['confirmcheckindexes'] = 'این قابلیت به جستجوی index های بالقوهٔ ناموجود در کارگزار مودل شما می‌پردازد و به طور خودکار دستورات SQL مورد نیاز برای به‌روز کردن همه چیز را تولید (و نه اجرا) می‌کند.

پس از تولید، می‌توانید آن دستورها را کپی کرده و آنها را با خاطر آسوده و با استفاده از نرم‌افزار اتصال به SQL دلخواهتان اجرا کنید (فراموش نکنید که پیش از آن از داده‌هایتان پشتیبان تهیه نمایید).

قویاً توصیه می‌شود که برای اجرای جستجوی index های ناموجود، در حال استفاده از جدیدترین نسخهٔ موجود (نسخهٔ +) از انتشار مودل خود (۱٫۸، ۱٫۹، ۲٫x، ...) باشید.

این قابلیت هیچ عملی در قبال پایگاه داده انجام نمی‌دهد (تنها اطلاعات را از آن می‌خواند)، بنابراین می‌تواند در هر زمانی اجرا شود.';
$string['confirmdeletefield'] = 'آیا کاملا مطمئن هستید که می‌خواهید این فیلد را حذف کنید:';
$string['confirmdeleteindex'] = 'آیا کاملا مطمئن هستید که می‌خواهید این index را حذف کنید:';
$string['confirmdeletekey'] = 'آیا کاملا مطمئن هستید که می‌خواهید این کلید را حذف کنید:';
$string['confirmdeletetable'] = 'آیا کاملا مطمئن هستید که می‌خواهید این جدول را حذف کنید:';
$string['confirmdeletexmlfile'] = 'آیا کاملا مطمئن هستید که می‌خواهید این فایل را حذف کنید:';
$string['confirmrevertchanges'] = 'آیا کاملا مطمئن هستید که می‌خواهید تغییرات اعمال شده را برگردانید:';
$string['create'] = 'ایجاد';
$string['delete'] = 'حذف';
$string['delete_field'] = 'حذف فیلد';
$string['delete_index'] = 'حذف index';
$string['delete_key'] = 'حذف کلید';
$string['delete_table'] = 'حذف جدول';
$string['delete_xml_file'] = 'حذف فایل XML';
$string['doc'] = 'مستند';
$string['documentationintro'] = 'این مستندات از روی تعریف پایگاه داده XMLDB به صورت خودکار تولید شده‌اند و تنها به انگلیسی موجود می‌باشند.';
$string['down'] = 'پایین';
$string['edit'] = 'ویرایش';
$string['edit_field'] = 'ویرایش فیلد';
$string['edit_index'] = 'ویرایش index';
$string['edit_key'] = 'ویرایش کلید';
$string['edit_table'] = 'ویرایش جدول';
$string['edit_xml_file'] = 'ویرایش فایل XML';
$string['fields'] = 'فیلدها';
$string['filemodifiedoutfromeditor'] = 'اخطار: در حینی که از ویرایشگر XMLDB استفاده می‌شده است، فایل به‌طور محلی تغییر کرده است. ذخیرهٔ تغییرات منجر به بازنویسی شدن تغییرات محلی خواهد شد.';
$string['filenotwriteable'] = 'فایل قابل نوشتن نیست';
$string['generate_documentation'] = 'مستندات';
$string['gotolastused'] = 'رفتن به آخرین فایل استفاده شده';
$string['index'] = '';
$string['indexes'] = 'index ها';
$string['keys'] = 'کلیدها';
$string['listreservedwords'] = 'لیست کلمه‌های رزرو شده<br />(برای به‌روز نگاه داشتن <a href="http://docs.moodle.org/dev/XMLDB_reserved_words" target="_blank">XMLDB_reserved_words</a> استفاده می‌شود)';
$string['load'] = 'بار شدن';
$string['main_view'] = 'نمای اصلی';
$string['missingindexes'] = 'index های ناموجود پیدا شده';
$string['new_table_from_mysql'] = 'جدول جدید از روی MySQL';
$string['newfield'] = 'فیلد جدید';
$string['newindex'] = 'index جدید';
$string['newkey'] = 'کلید جدید';
$string['newtable'] = 'جدول جدید';
$string['newtablefrommysql'] = 'جدول جدید از روی MySQL';
$string['noviolatedforeignkeysfound'] = 'هیچ کلید خارجی ناقضی پیدا نشد';
$string['nowrongdefaultsfound'] = 'هیچ مقدار پیش‌فرض ناسازگاری پیدا نشد، پایگاه دادهٔ شما نیاز به اقدامات بیشتری ندارد.';
$string['nowrongintsfound'] = 'هیچ عدد صحیح مشکل‌داری پیدا نشد، پایگاه دادهٔ شما نیاز به اقدامات بیشتری ندارد.';
$string['pendingchangescannotbesaved'] = 'تغییراتی در این فایل داده شده است ولی قابل ذخیره شدن نیستند! لطفا بررسی کنید که هم دایرکتوری و هم فایل instal.xml داخل آن مجوز نوشتن توسط کارگزار وب را داشته باشند.';
$string['pendingchangescannotbesavedreload'] = 'تغییراتی در این فایل داده شده است ولی قابل ذخیره شدن نیستند! لطفا بررسی کنید که هم دایرکتوری و هم فایل instal.xml داخل آن مجوز نوشتن توسط کارگزار وب را داشته باشند. سپس با بارگیری مجدد این صفحه باید بتوانید آن تغییرات را ذخیره کنید.';
$string['pluginname'] = 'ویرایشگر XMLDB';
$string['primarykeyonlyallownotnullfields'] = 'کلیدهای اصلی نمی‌توانند null باشند';
$string['reservedwords'] = 'کلمات رزرو شده';
$string['revert'] = 'بازگردانی';
$string['save'] = 'ذخیره';
$string['searchresults'] = 'نتایج جستجو';
$string['tables'] = 'جدول‌ها';
$string['unload'] = 'تخلیه';
$string['up'] = 'بالا';
$string['view_reserved_words'] = 'مشاهدهٔ کلمه‌های رزرو شده';
$string['view_table_php'] = 'مشاهدهٔ کد PHP جدول';
$string['view_table_sql'] = 'مشاهدهٔ کد SQL جدول';
$string['viewedited'] = 'مشاهدهٔ نسخهٔ ویرایش شده';
$string['vieworiginal'] = 'مشاهدهٔ نسخهٔ اصلی';
$string['viewphpcode'] = 'مشاهدهٔ کد PHP';
$string['viewsqlcode'] = 'مشاهدهٔ کد SQL';
$string['viewxml'] = 'XML';
$string['violatedforeignkeys'] = 'کلیدهای خارجی ناقض';
$string['violatedforeignkeysfound'] = 'کلیدهای خارجی ناقض پیدا شده';
$string['wrongdefaults'] = 'مقادیر پیش‌فرض نادرست پیدا شده';
$string['wrongints'] = 'عددهای صحیح مشکل دار پیدا شده';
$string['wrongreservedwords'] = 'کلمات رزرو شده‌ای که هم اکنون در حال استفاده‌اند<br />(توجه کنید که در صورت استفاده از <span dir="ltr" style="display:inline-block;direction:ltr">$CFG->prefix</span> نام جدول‌ها مهم نیستند)';
