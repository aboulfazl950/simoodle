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
 * Strings for component 'tool_generator', language 'fa', version '4.5'.
 *
 * @package     tool_generator
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bigfile'] = 'فایل بزرگ {$a}';
$string['courseexplanation'] = 'این ابزار درس‌های استاندارد آزمایشی‌ای می‌سازد که شامل چندین قسمت، فعالیت، و فایل هستند.

هدف این کار فراهم کردن یک ابزار سنجش استاندارد برای بررسی اعتمادپذیری و کارایی اجزای محتلف سیستم (مانند پشتیبان‌گیری و بازیابی) است.

این آزمایش مهم است زیرا در گذشته موارد متعددی بوده است که در مواجهه با شرایط واقعی (مثلا درس‌هایی با بیش از ۱٫۰۰۰ فعالیت)، سیستم کار نکرده است.

درس‌هایی که با استفاده از این قابلیت ساخته می‌شوند می‌توانند فضای بسیار زیادی از پایگاه داده و هارد دیسک را اشغال کنند (ده‌ها گیگابایت). برای آزادسازی دوبارهٔ این فضا لازم است که درس‌های آزمایشی را پاک کنید (و صبر کنید تا وظیفه‌های مربوط به پاک‌سازی اطلاعات اجرا شوند).

**از این امکان در سایت‌های تحت بهره‌برداری استفاده نکنید**. تنها در کارگزارهای مربوط به توسعهٔ نرم‌افزار از این قابلیت استفاده کنید.
(به‌منظور جلوگیری از استفادهٔ اشتباهی، این امکان غیرفعال شده است مگر اینکه سطح اشکال‌زدایی را روی توسعه‌دهنده قرار داده باشید.)';
$string['coursesize_0'] = 'XS (تقریبا ۱۰ کیلوبایت؛ ساخت در تقریبا ۱ ثانیه)';
$string['coursesize_1'] = 'S (تقریبا ۱۰ مگابایت؛ ساخت در تقریبا ۳۰ ثانیه)';
$string['coursesize_2'] = 'M (تقریبا ۱۰۰ مگابایت؛ ساخت در تقریبا ۵ دقیقه)';
$string['coursesize_3'] = 'L (تقریبا ۱ گیگابایت؛ ساخت در تقریبا ۳۰ دقیقه)';
$string['coursesize_4'] = 'XL (تقریبا ۱۰ گیگابایت؛ ساخت در تقریبا ۲ ساعت)';
$string['coursesize_5'] = 'XXL (تقریبا ۲۰ گیگابایت؛ ساخت در تقریبا ۴ ساعت)';
$string['coursewithoutusers'] = 'درس ساخته شده هیچ کاربری ندارد';
$string['createcourse'] = 'ساختن درس';
$string['creating'] = 'ایجاد درس';
$string['done'] = 'انجام شد ({$a} ثانیه)';
$string['downloadusersfile'] = 'دریافت فایل کاربران';
$string['error_noforumdiscussions'] = 'درس انتخاب‌شده شامل مباحثه‌ای در تالارهای گفتگو نیست';
$string['error_noforuminstances'] = 'درس انتخاب‌شده شامل هیچ تالار گفتگویی نیست';
$string['error_noforumreplies'] = 'درس انتخاب‌شده شامل هیچ مطلبی در تالارهای گفتگو نیست.';
$string['error_nonexistingcourse'] = 'درس انتخاب‌شده وجود ندارد';
$string['error_nopageinstances'] = 'درس انتخاب‌شده شامل هیچ صفحه‌ای نیست (نمونه‌ای از ماژول صفحه)';
$string['error_notdebugging'] = 'در این کارگزار در دسترس نیست زیرا اشکال‌زدایی روی «توسعه‌دهنده» تنظیم نشده است';
$string['fullname'] = 'درس آزمایشی: {$a->size}';
$string['maketestcourse'] = 'ساختن درس آزمایشی';
$string['notenoughusers'] = 'درس انتخابی دارای کاربر کافی نیست';
$string['progress_checkaccounts'] = 'بررسی حساب‌های کاربری ({$a})';
$string['progress_coursecompleted'] = 'تکمیل درس انجام شد ({$a} ثانیه)';
$string['progress_createaccounts'] = 'ایجاد حساب‌های کاربری ({$a->from} - {$a->to})';
$string['progress_createassignments'] = 'ایجاد تکالیف ({$a})';
$string['progress_createbigfiles'] = 'ایجاد فایل‌های بزرگ ({$a})';
$string['progress_createcourse'] = 'در حال ایجاد درس {$a}';
$string['progress_createforum'] = 'ایجاد تالار گفتگو (با {$a} پست)';
$string['progress_createpages'] = 'ایجاد صفحه‌ها ({$a})';
$string['progress_createsmallfiles'] = 'ایجاد فایل‌های کوچک ({$a})';
$string['progress_enrol'] = 'ثبت‌نام کردن کاربران در درس {$a}';
$string['shortsize_0'] = 'XS';
$string['shortsize_1'] = 'S';
$string['shortsize_2'] = 'M';
$string['shortsize_3'] = 'L';
$string['shortsize_4'] = 'XL';
$string['shortsize_5'] = 'XXL';
$string['sitesize_0'] = 'XS (تقریبا ۱۰ مگابایت؛ ۳ درس، ساخت در تقریبا ۳۰ ثانیه)';
$string['sitesize_1'] = 'S (تقریبا ۵۰ مگابایت؛ ۸ درس، ساخت در تقریبا ۲ دقیقه)';
$string['sitesize_2'] = 'M (تقریبا ۲۰۰ مگابایت؛ ۷۳ درس، ساخت در تقریبا ۱۰ دقیقه)';
$string['sitesize_3'] = 'L (تقریبا ۱٫۵ گیگابایت؛ ۲۷۷ درس، ساخت در تقریبا ۱٫۵ ساعت)';
$string['sitesize_4'] = 'XL (تقریبا ۱۰ گیگابایت؛ ۱۰۶۵ درس، ساخت در تقریبا ۵ ساعت)';
$string['sitesize_5'] = 'XXL (تقریبا ۲۰ گیگابایت؛ ۴۱۷۷ درس، ساخت در تقریبا ۱۰ ساعت)';
$string['size'] = 'اندازهٔ درس';
$string['smallfiles'] = 'فایل‌های کوچک';
$string['targetcourse'] = 'درس مرجع تست';
$string['updateuserspassword'] = 'به‌روز کردن رمز ورود کاربران درس';
