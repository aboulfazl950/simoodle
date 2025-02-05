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
 * Strings for component 'tool_uploaduser', language 'fa', version '4.5'.
 *
 * @package     tool_uploaduser
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowdeletes'] = 'مجاز بودن حذف‌ها';
$string['allowrenames'] = 'مجاز بودن تغییر نام‌ها';
$string['allowsuspends'] = 'مجاز بودن تعلیق و فعال‌کردن حساب‌های کاربری';
$string['csvdelimiter'] = 'حرفِ جداکننده CSV';
$string['defaultvalues'] = 'مقادیر پیش‌فرض';
$string['deleteerrors'] = 'خطاهای حذف';
$string['encoding'] = 'کدگذاری';
$string['errors'] = 'خطاها';
$string['examplecsv'] = 'نمونه یک فایل متنی';
$string['examplecsv_help'] = 'برای استفاده از این نمونه فایل متنی، آن را دانلود کرده و سپس در یک ویرایشگر متنی یا اکسل باز کنید. سطر اول را بدون تغییر رها کنید، سپس خطوط بعدی (رکوردها) را ویرایش کرده و داده‌های مربوط به کاربران خود را اضافه کنید هر تعداد خط که می‌خواهید اضافه کنید. هر خط یک رکورد برای یک کاربر است. در پایان آن را به عنوان یک فایل CSV ذخیره کنید.

فایل متنی نمونه ممکن است برای آزمایش نیز استفاده شود، زیرا می‌توانید پیش‌نمایش داده‌های کاربر را مشاهده کنید و می‌توانید قبل از ایجاد حساب‌های کاربری، اقدام را لغو کنید.';
$string['nochanges'] = 'بدون تغییر';
$string['pluginname'] = 'ارسال فایل کاربران';
$string['renameerrors'] = 'Rename errors';
$string['requiredtemplate'] = 'لازم است. می‌توانید از قالب‌های داخل پرانتز استفاده کنید (l = lastname% و f = firstname% و u = username%). برای دیدن توضیح بیشتر و مثال‌ها به راهنما مراجعه کنید.';
$string['rowpreviewnum'] = 'پیش‌نمایش سطرها';
$string['uploadpicture_baduserfield'] = 'مشخصهٔ معین شده معتبر نیست. لطفاً مجدداً تلاش کنید.';
$string['uploadpicture_cannotmovezip'] = 'فایل فشرده شده قابل انتقال به دایرکتوری موقت نبود.';
$string['uploadpicture_cannotprocessdir'] = 'فایل‌های فشرده‌گشایی شده قابل پردازش نبودند.';
$string['uploadpicture_cannotsave'] = 'عکس کاربر {$a} قابل ذخیری نبود. فایل اصلی عکس را بررسی کنید.';
$string['uploadpicture_cannotunzip'] = 'فایل تصاویر قابل فشرده‌گشایی نبود.';
$string['uploadpicture_invalidfilename'] = 'نام فایل {$a} از حروف نامعتبر تشکیل شده است. پرش.';
$string['uploadpicture_overwrite'] = 'جایگزینی با عکس فعلی کاربران؟';
$string['uploadpicture_userfield'] = 'مشخصه‌ای از کاربر که برای تطابق عکس استفاده شود:';
$string['uploadpicture_usernotfound'] = 'کاربری با «{$a->userfield}» برابر با «{$a->uservalue}» وجود ندارد. پرش.';
$string['uploadpicture_userskipped'] = 'پریدن از کاربر {$a} (خودش عکس دارد).';
$string['uploadpicture_userupdated'] = 'عکس کاربر {$a} به‌روز شد.';
$string['uploadpictures'] = 'ارسال عکس‌های کاربران';
$string['uploadpictures_help'] = 'عکس‌های کاربران را می‌توان به صورت یک فایل zip شامل فایل‌های تصویری ارسال کرد. فایل‌های تصویری باید به صورت <nobr>«مشخصهٔ–انتخاب–شده.پسوند»</nobr> نام‌گذاری شوند. به عنوان مثال برای کاربری با نام کاربری user1234 به صورت user1234.jpg.';
$string['uploaduser:uploaduserpictures'] = 'ارسال عکس‌های کاربران';
$string['uploadusers'] = 'ارسال فایل کاربران';
$string['uploadusers_help'] = 'می‌توان با ارسال یک فایل متنی، کاربران را در سایت ایجاد کرد (یا حتی در صورت تمایل در درس‌ها ثبت نام کرد). قالب فایل باید به این صورت باشد:

* هر خط از فایل شامل یک رکورد باشد
* هر رکورد دنباله‌ای از داده‌ها است که با کاما (یا سایر حروفِ جداکننده) از یکدیگر جدا شده‌اند
* اولین رکورد، لیستی از نام فیلدها است و تعیین کنندهٔ قالب ادامهٔ فایل است
* فیلدهای اجباری عبارتند از username و password و firstname و lastname و email';
$string['uploadusers_link'] = 'admin/tool/uploaduser/index';
$string['uploaduserspreview'] = 'پیش‌نمایش فایل ارسالی';
$string['uploadusersresult'] = 'نتیجهٔ ارسال فایل کاربران';
$string['useraccountupdated'] = 'User updated';
$string['useraccountuptodate'] = 'کاربر به روز شده';
$string['userdeleted'] = 'User deleted';
$string['userrenamed'] = 'User renamed';
$string['userscreated'] = 'کاربران ایجاد شده';
$string['usersdeleted'] = 'کاربران حذف شده';
$string['usersrenamed'] = 'Users renamed';
$string['usersskipped'] = 'کاربران رد شده';
$string['usersupdated'] = 'کاربران به‌روز شده';
$string['usersweakpassword'] = 'کاربرانی که رمز ورودشان ضعیف است';
$string['uubulk'] = 'انتخاب به منظور عملیات گروهی';
$string['uubulkall'] = 'همهٔ کاربران';
$string['uubulknew'] = 'کاربران جدید';
$string['uubulkupdated'] = 'کاربران به‌روز شده';
$string['uucsvline'] = 'خط CSV';
$string['uulegacy1role'] = '( در اصل شاگرد) typeN=1';
$string['uulegacy2role'] = '(در اصل استاد) typeN=2';
$string['uulegacy3role'] = '(در اصل استاد بدون حق ویرایش) typeN=3';
$string['uunoemailduplicates'] = 'جلوگیری از تکرار آدرس‌های پست الکترونیک';
$string['uuoptype'] = 'نوع ارسال';
$string['uuoptype_addinc'] = 'اضافه شدن همه، در صورت لزوم اضافه شدن شمارنده به نام‌های کاربری';
$string['uuoptype_addnew'] = 'فقط اضافه شدن کاربران جدید، صرف‌نظر شدن از کاربران موجود';
$string['uuoptype_addupdate'] = 'اضافه‌شدن کاربران جدید و به‌روز شدن کاربران موجود';
$string['uuoptype_update'] = 'فقط به‌روز شدن کاربران موجود';
$string['uupasswordnew'] = 'رمز ورود کاربر جدید';
$string['uupasswordold'] = 'رمز ورود کاربران موجود';
$string['uustandardusernames'] = 'متعارف کردن نام کاربری';
$string['uuupdateall'] = 'بازنویسی از روی فایل و پیش‌فرض‌ها';
$string['uuupdatefromfile'] = 'بازنویسی از روی فایل';
$string['uuupdatemissing'] = 'موارد بدون مقدار از روی فایل و پیش‌فرض‌ها پر شود';
$string['uuupdatetype'] = 'جزئیات کاربران موجود';
