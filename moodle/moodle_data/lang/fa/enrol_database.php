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
 * Strings for component 'enrol_database', language 'fa', version '4.5'.
 *
 * @package     enrol_database
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['database:config'] = 'پیکربندی نمونه‌های ثبت‌نام پایگاه دادهٔ خارجی';
$string['database:unenrol'] = 'لغو ثبت نام کاربران تعلیق شده';
$string['dbencoding'] = 'کدگذاری پایگاه داده';
$string['dbhost'] = 'میزبان پایگاه داده';
$string['dbhost_desc'] = 'آدرس IP یا نام میزبان کارگزار پایگاه داده';
$string['dbname'] = 'نام پایگاه داده';
$string['dbname_desc'] = 'در صورتی‌که در میزبان پایگاه داده از یک نام DSN استفاده می‌کنید این قسمت را خالی بگذارید.';
$string['dbpass'] = 'رمز اتصال به پایگاه داده';
$string['dbsetupsql'] = 'دستور برپایی پایگاه داده';
$string['dbsetupsql_desc'] = 'دستور SQL برای برپا کردن پایگاه داده. معمولاً برای تنظیم کدگذاری ارتباط استفاده می‌شود. مثال برای MySQL و PostgreSQL:<br /><em dir="ltr" style="display:inline-block;direction:ltr">SET NAMES \'utf8\'</em>';
$string['dbsybasequoting'] = 'استفاده از quote های sybase';
$string['dbsybasequoting_desc'] = 'استفاده از single quote به سبک sybase - برای Oracle، MS SQL و بعضی از پایگاه داده‌های دیگر لازم است. برای MySQL استفاده نکنید!';
$string['dbtype'] = 'راه‌انداز پایگاه داده';
$string['dbtype_desc'] = 'نام راه‌انداز پایگاه داده ADOdb، نوع موتور پایگاه دادهٔ خارجی.';
$string['dbuser'] = 'کاربر پایگاه داده';
$string['debugdb'] = 'اشکال‌زدایی ADOdb';
$string['debugdb_desc'] = 'اشکال‌زدایی اتصال ADOdb به پایگاه دادهٔ خارجی - مواقعی که هنگام ورود با یک صفحهٔ خالی مواجه می‌شوید استفاده شود. برای وب‌گاه‌های تحت بهره‌برداری مناسب نیست!';
$string['defaultcategory'] = 'طبقهٔ پیش‌فرض درس جدید';
$string['defaultcategory_desc'] = 'طبقهٔ پیش‌فرض درس‌های ساخته شده به صورت خودکار. هنگامی که شناسهٔ طبقهٔ درس جدید مشخص نشده باشد یا اینکه پیدا نشود استفاده می‌شود.';
$string['defaultrole'] = 'نقش پیش‌فرض';
$string['defaultrole_desc'] = 'نقشی که اگر نقش دیگری در جدول خارجی مشخص نشده باشد، به طور پیش‌فرض نسبت داده خواهد شد.';
$string['ignorehiddencourses'] = 'نادیده گرفتن درس‌های پنهان';
$string['ignorehiddencourses_desc'] = 'اگر فعال باشد، کاربران در درس‌هایی که به صورت غیر قابل دسترسی برای شاگردان تعیین شده‌اند ثبت نام نخواهند شد.';
$string['localcategoryfield'] = 'فیلد محلی طبقه';
$string['localcoursefield'] = 'فیلد محلی درس';
$string['localrolefield'] = 'فیلد محلی نقش';
$string['localuserfield'] = 'فیلد محلی کاربر';
$string['newcoursecategory'] = 'فیلد شناسهٔ طبقهٔ درس جدید';
$string['newcoursefullname'] = 'فیلد نام کامل درس جدید';
$string['newcourseidnumber'] = 'فیلد کد درس درس جدید';
$string['newcourseshortname'] = 'فیلد نام کوتاه درس جدید';
$string['newcoursetable'] = 'جدول خارجی درس‌های جدید';
$string['newcoursetable_desc'] = 'نام جدولی که شامل لیست درس‌هایی که باید به طور خودکار ساخته شوند است را مشخص کنید. خالی بودن یعنی درسی ساخته نمی‌شود.';
$string['pluginname'] = 'پایگاه دادهٔ خارجی';
$string['pluginname_desc'] = 'می‌توانید از یک پایگاه دادهٔ خارجی (از تقریباً هر نوعی) برای مدیریت ثبت نام‌هایتان استفاده کنید. فرض می‌شود که پایگاه دادهٔ خارجی شما حداقل شامل یک فیلد محتوی کد درس، و یک فیلد محتوی کد شناسائی کاربر است. این مقادیر با فیلدهایی که از جدول‌های محلی مربوط به درس‌ها و مربوط به کاربران انتخاب می‌کنید مقایسه می‌شود.';
$string['remotecoursefield'] = 'فیلد خارجی درس';
$string['remotecoursefield_desc'] = 'نام فیلدی در جدول خارجی که می‌خواهیم برای مطابقت با رکوردهای جدول درس‌ها استفاده کنیم.';
$string['remoteenroltable'] = 'جدول خارجی ثبت نام کاربران';
$string['remoteenroltable_desc'] = 'نام جدولی که شامل لیست ثبت نام‌های کاربران است را مشخص کنید. خالی ماندن این فیلد به معنی همگام نشدن ثبت نام کاربران است.';
$string['remoteotheruserfield'] = 'فیلد خارجی کاربر متفرقه';
$string['remoteotheruserfield_desc'] = 'نام فیلدی در جدول خارجی که از آن می‌خواهیم برای علامت زدن نقش‌های انتسابی به‌عنوان «کاربر متفرقه» استفاده کنیم.';
$string['remoterolefield'] = 'فیلد خارجی نقش';
$string['remoterolefield_desc'] = 'نام فیلدی در جدول خارجی که می‌خواهیم برای مطابقت با رکوردهای جدول نقش‌ها استفاده کنیم.';
$string['remoteuserfield'] = 'فیلد خارجی کاربر';
$string['remoteuserfield_desc'] = 'نام فیلدی در جدول خارجی که می‌خواهیم برای مطابقت با رکوردهای جدول کاربرها استفاده کنیم.';
$string['settingsheaderdb'] = 'اتصال به پایگاه دادهٔ خارجی';
$string['settingsheaderlocal'] = 'نگاشت فیلدهای محلی';
$string['settingsheadernewcourses'] = 'ساخته شدن درس‌های جدید';
$string['settingsheaderremote'] = 'همگام‌سازی ثبت نام خارجی';
$string['templatecourse'] = 'الگوی درس جدید';
$string['templatecourse_desc'] = 'اختیاری: درس‌های ساخته شده می‌توانند تنظیماتشان را از یک درس الگو به صورت خودکار کپی کنند. نام کوتاه درس الگو را در این قسمت وارد کنید.';
