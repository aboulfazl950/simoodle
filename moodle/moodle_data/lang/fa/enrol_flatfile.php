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
 * Strings for component 'enrol_flatfile', language 'fa', version '4.5'.
 *
 * @package     enrol_flatfile
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['encoding'] = 'کدگذاری فایل';
$string['expiredaction'] = 'اقدام انقضای ثبت‌نام';
$string['expiredaction_help'] = 'کاری که به‌هنگام منقضی شدن ثبت‌نام کاربر باید انجام شود را انتخاب کنید. لطفاً توجه کنید که برخی از داده‌ها و تنظیمات کاربر در هنگام لغو ثبت‌نام از درس پاک‌سازی می‌شوند.';
$string['filelockedmail'] = 'فایل متنی‌ای که برای ثبت نام از روی فایل از آن استفاده کرده‌اید ({$a}) نمی‌تواند توسط فرآیند cron حذف شود. این مشکل معمولاً به دلیل داشتن مجوزهای اشتباه روی فایل است. لطفاً مجوزها را تصحیح کنید تا مودل بتواند فایل را پاک کند، در غیر اینصورت ممکن است فایل مکرراً پردازش شود.';
$string['filelockedmailsubject'] = 'خطای مهم: فایل ثبت نام';
$string['flatfile:manage'] = 'مدیریت ثبت نام های کاربران به‌طور دستی';
$string['flatfile:unenrol'] = 'لغو کردن ثبت‌نام کاربران در درس به‌طور دستی';
$string['flatfilesync'] = 'همگام‌سازی ثبت‌نام‌ها از فایل متنی';
$string['location'] = 'محل فایل';
$string['location_desc'] = 'آدرس کامل فایل ثبت‌نام را مشخص کنید. فایل پس از پردازش به‌طور خودکار پاک خواهد شد.';
$string['mapping'] = 'نگاشت نقش فایل متنی';
$string['messageprovider:flatfile_enrolment'] = 'نگاشت نقش فایل متنی';
$string['notifyadmin'] = 'باخبرکردن مدیر سیستم';
$string['notifyenrolled'] = 'باخبرکردن کاربران ثبت‌نام‌شده';
$string['notifyenroller'] = 'باخبرکردن کاربری که مسئول ثبت‌نام‌ها است';
$string['pluginname'] = 'فایل متنی (CSV)';
$string['pluginname_desc'] = 'این روش مکرراً محلی که مشخص کرده‌اید را بررسی می‌کند و در صورت وجود فایل متنی با قالب‌بندی به‌خصوص آن را پردازش می‌کند.
این فایل یک فایل جدا شده با کاما است که فرض می‌شود در هر سطر چهار یا شش فیلد داشته باشد:

<pre class="informationbox"><code><span dir="ltr" style="display:inline-block;direction:ltr"><span style="display: inline-block">عمل</span>, <span style="display: inline-block">نقش</span>, <span style="display: inline-block; direction: rtl">کد شناسایی کاربر</span>, <span style="display: inline-block; direction: rtl">کد شناسایی درس</span> [, <span style="display: inline-block">زمان شروع</span> [, <span style="display: inline-block">زمان پایان</span>]]</span></code></pre>

که در آن:

*  عمل = add یا del
*  نقش = student یا teacher یا teacheredit
*  کد شناسائی (کاربر) = idnumber (توجه: id نیست) در جدول user
*  کد شناسائی (درس) = idnumber (توجه: id نیست) در جدول course
*  زمان شروع = زمان شروع (بر حسب ثانیه‌های سپری شده از <span dir="ltr" style="display:inline-block;direction:ltr">۱۹۷۰/۱/۱</span>) – اختیاری
*  زمان پایان = زمان پایان (بر حسب ثانیه‌های سپری شده از <span dir="ltr" style="display:inline-block;direction:ltr">۱۹۷۰/۱/۱</span>) – اختیاری

می‌تواند شبیه به این باشد:
<pre class="informationbox">
   add, student, 5, CF101
   add, teacher, 6, CF101
   add, teacheredit, 7, CF101
   del, student, 8, CF101
   del, student, 17, CF101
   add, student, 21, CF101, 1091115000, 1091215000
</pre>';
