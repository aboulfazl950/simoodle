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
 * Strings for component 'auth_db', language 'fa', version '4.5'.
 *
 * @package     auth_db
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_dbcantconnect'] = 'اتصال به پایگاه داده تعیین شده برای شناسائی برقرار نشد...';
$string['auth_dbchangepasswordurl_key'] = 'آدرس صفحهٔ تغییر رمز ورود';
$string['auth_dbdebugauthdb'] = 'اشکال‌زدایی ADOdb';
$string['auth_dbdebugauthdbhelp'] = 'اشکال‌زدایی اتصال ADOdb به پایگاه دادهٔ خارجی - مواقعی که هنگام ورود با یک صفحهٔ خالی مواجه می‌شوید استفاده شود. برای وب‌گاه‌های تحت بهره‌برداری مناسب نیست.';
$string['auth_dbdeleteuser'] = 'کاربر {$a->name} با شناسهٔ {$a->id} حذف شد';
$string['auth_dbdeleteusererror'] = 'خطا در حذف کاربر {$a}';
$string['auth_dbdescription'] = 'این روش از یک جدول پایگاه دادهٔ خارجی برای کنترل صحت نام کاربری و رمز ورود وارد شده استفاده می‌کند. در صورتیکه اطلاعات ورودی مربوط به یک حساب جدید باشد، اطلاعات مربوط به سایر فیلدها نیز می‌توانند به مودل منتقل شوند.';
$string['auth_dbextencoding'] = 'کدگذاری پایگاه دادهٔ خارجی';
$string['auth_dbextencodinghelp'] = 'کدگذاری مورد استفاده در پایگاه دادهٔ خارجی';
$string['auth_dbextrafields'] = 'این قسمت‌ها اختیاری هستند. می‌توانید انتخاب کنید که بعضی از مشخصه‌های کاربران مودل به صورت اولیه با اطلاعات <b>فیلدهایی از پایگاه دادهٔ خارجی</b> که در این قسمت مشخص کرده‌اید پر شوند. <p>در صورت خالی گذاشتن این قسمت، پیش‌فرض‌ها استفاده خواهند شد.</p><p>در هر صورت، کاربر پس از ورود قادر به ویرایش تمام این موارد خواهد بود.</p>';
$string['auth_dbfieldpass'] = 'نام فیلدی که شامل رمزهای ورود است';
$string['auth_dbfieldpass_key'] = 'فیلد رمز ورود';
$string['auth_dbfielduser'] = 'نام فیلدی که محتوی نام‌های کاربری است';
$string['auth_dbfielduser_key'] = 'فیلد نام کاربری';
$string['auth_dbhost'] = 'کامپیوتری که میزبانی کارگزار پایگاه داده را به عهده دارد. اگر از ODBC استفاده می‌کنید از DSN entry استفاده کنید.';
$string['auth_dbhost_key'] = 'میزبان';
$string['auth_dbinsertuser'] = 'کاربر {$a->name} با شناسهٔ {$a->id} درج شد';
$string['auth_dbinsertusererror'] = 'خطا در درج کاربر {$a}';
$string['auth_dbname'] = 'نام خود پایگاه داده. اگر از ODBC DSN استفاده می‌کنید خالی بگذارید.';
$string['auth_dbname_key'] = 'نام پایگاه داده';
$string['auth_dbpass'] = 'رمز ورود منطبق با نام کاربری بالا';
$string['auth_dbpass_key'] = 'رمز اتصال';
$string['auth_dbpasstype'] = '<p>قالبی که فیلد رمز ورود استفاده می‌کند را مشخص کنید. درهم ریختگی با MD5 برای مرتبط شدن با سایر برنامه‌های تحت وب متعارف مانند PostNuke مناسب است.</p><p>در صورتیکه می‌خواهید نام‌های کاربری و آدرس‌های پست الکترونیک توسط پایگاه دادهٔ خارجی مدیریت شوند، اما مدیریت رمزهای ورود بر عهدهٔ مودل باشد، گزینهٔ «داخلی» را انتخاب کنید. در صورت انتخاب «داخلی»، <i>باید</i> یک فیلد شامل آدرس‌های پست الکترونیک در پایگاه داده فراهم کنید، و هر دو admin/cron.php و auth/db/auth_db_sync_users.php را به طور مرتب اجرا نمائید. مودل به کاربران جدید یک نامهٔ الکترونیک محتوی یک رمز ورود موقت خواهد فرستاد.</p>';
$string['auth_dbpasstype_key'] = 'قالب رمز ورود';
$string['auth_dbreviveduser'] = 'کاربر {$a->name} با شناسهٔ {$a->id} احیا شد';
$string['auth_dbrevivedusererror'] = 'خطا در احیای کاربر {$a}';
$string['auth_dbsetupsql'] = 'فرمان SQL راه‌اندازی';
$string['auth_dbsetupsqlhelp'] = 'دستور SQL برای راه‌اندازی ویژهٔ پایگاه داده. معمولاً برای راه‌اندازی کدگذاری ارتباط استفاده می‌شود - مثلاً در MySQL و PostgreSQL به صورت: <em dir="ltr" style="display:inline-block;direction:ltr">SET NAMES \'utf8\'</em>';
$string['auth_dbsuspenduser'] = 'کاربر {$a->name} با شناسهٔ {$a->id} تعلیق شد';
$string['auth_dbsuspendusererror'] = 'خطا در تعلیق کاربر {$a}';
$string['auth_dbsybasequoting'] = 'استفاده از quote های sybase';
$string['auth_dbsybasequotinghelp'] = 'استفاده از single quote به سبک sybase - برای Oracle، MS SQL و بعضی از پایگاه داده‌های دیگر لازم است. برای MySQL استفاده نکنید!';
$string['auth_dbtable'] = 'نام جدول در پایگاه داده';
$string['auth_dbtable_key'] = 'جدول';
$string['auth_dbtype'] = 'نوع پایگاه داده (برای مشاهدهٔ جزئیات <a href="http://phplens.com/adodb/supported.databases.html">مستندات ADOdb</a> را ببینید)';
$string['auth_dbtype_key'] = 'پایگاه داده';
$string['auth_dbupdatinguser'] = 'به‌روزرسانی کاربر {$a->name} با شناسهٔ {$a->id}';
$string['auth_dbuser'] = 'نام کاربر دارای سطح دسترسی خواندن پایگاه داده';
$string['auth_dbuser_key'] = 'کاربر پایگاه داده';
$string['auth_dbuserstoadd'] = 'تعداد کاربران برای اضافه شدن: {$a}';
$string['auth_dbuserstoremove'] = 'تعداد کاربران برای حذف: {$a}';
$string['pluginname'] = 'پایگاه دادهٔ خارجی';
$string['privacy:metadata'] = 'پلاگین شناسایی پایگاه دادهٔ خارجی هیچ اطلاعات شخصی‌ای ذخیره نمی‌کند.';
