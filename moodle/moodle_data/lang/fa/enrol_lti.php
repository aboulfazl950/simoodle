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
 * Strings for component 'enrol_lti', language 'fa', version '4.5'.
 *
 * @package     enrol_lti
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowframeembedding'] = 'توجه: توصیه می‌شود که تنظیم مدیریتی «اجازهٔ جاسازی شدن در فریم» فعال باشد، تا ابزارها به‌جای نمایش داده شدن در یک پنجرهٔ جدید، در داخل یک فریم نمایش داده شوند.';
$string['authltimustbeenabled'] = 'توجه: این پلاگین احتیاج دارد که پلاگین شناسایی LTI هم فعال باشد.';
$string['enrolenddate'] = 'تاریخ پایان';
$string['enrolenddate_help'] = 'در صورت فعال بودن، کاربران تنها تا این تاریخ می‌توانند دسترسی داشته باشند.';
$string['enrolenddateerror'] = 'تاریخ پایان ثبت‌نام نمی‌تواند قبل از شروع آن باشد';
$string['enrolisdisabled'] = 'پلاگین «انتشار به‌عنوان ابزار LTI» غیرفعال است.';
$string['enrolmentfinished'] = 'ثبت‌نام به پایان رسیده است.';
$string['enrolmentnotstarted'] = 'ثبت‌نام آغاز نشده است.';
$string['enrolperiod'] = 'مدت ثبت‌نام';
$string['enrolperiod_help'] = 'مدت زمانی که ثبت‌نام معتبر است، با شروع از لحظه‌ای که کاربر از سیستم بیرونی خود را ثبت‌نام می‌کند. اگر غیرفعال باشد، مدت ثبت‌نام نامحدود خواهد بود.';
$string['enrolstartdate'] = 'تاریخ شروع';
$string['enrolstartdate_help'] = 'در صورت فعال بودن، کاربران تنها از این تاریخ به بعد می‌توانند دسترسی داشته باشند.';
$string['gradesync'] = 'همگام‌سازی نمرات';
$string['gradesync_help'] = 'آیا نمرات از ابزار به سیستم بیرونی (مصرف‌کنندهٔ LTI) فرستاده می‌شوند یا خیر.';
$string['lti:config'] = 'پیکربندی نمونه‌های «انتشار به‌عنوان ابزار LTI»';
$string['lti:unenrol'] = 'لغو ثبت نام کاربران در درس';
$string['maxenrolled'] = 'حداکثر تعداد کاربران ثبت‌نام شده';
$string['maxenrolled_help'] = 'حداکثر تعداد کاربران بیرونی که می‌توانند به این ابزار دسترسی داشته باشند. اگر برابر با صفر قرار داده شود، تعداد کاربران ثبت‌نام شده نامحدود خواهد بود.';
$string['membersync'] = 'همگام‌سازی کاربران';
$string['membersync_help'] = 'آیا یک وظیفهٔ زمان‌بندی‌شده ثبت‌نام‌های این درس را با کاربران ثبت‌نام‌شده در سیستم بیرونی همگام می‌کند یا خیر (هر جا که لازم است با ساختن حساب کاربری برای کاربران بیرونی و ثبت‌نام کردن یا لغو کردن ثبت‌نام آنها بسته به نیاز).

اگر روی خیر تنظیم شده باشد، در حال حاضر هر گاه که یک کاربر بیرونی می‌خواهد به ابزار دسترسی پیدا کند، یک حساب کاربری برایش ساخته می‌شود و به‌طور خودکار ثبت‌نام خواهد شد.';
$string['membersyncmode'] = 'نوع همگام‌سازی کاربران';
$string['membersyncmode_help'] = 'اینکه کاربران بیرونی باید در این درس ثبت‌نام شوند و/یا ثبت‌نامشان در این درس لغو شود.';
$string['membersyncmodeenrolandunenrol'] = 'ثبت‌نام کردن کاربران جدید و لغو ثبت‌نام کاربران ناموجود';
$string['membersyncmodeenrolnew'] = 'ثبت‌نام کردن کاربران جدید';
$string['membersyncmodeunenrolmissing'] = 'لغو ثبت‌نام کاربران ناموجود';
$string['pluginname'] = 'انتشار به‌عنوان ابزار LTI';
$string['pluginname_desc'] = 'پلاگین «انتشار به‌عنوان ابزار LTI» در کنار پلاگین شناسایی LTI، به کاربران بیرونی این امکان را می‌دهد تا به درس‌ها و فعالیت‌های انتخاب‌شده دسترسی داشته باشند. به‌عبارت دیگر، مودل به‌عنوان یک تامین‌کنندهٔ ابزار LTI‌عمل می‌کند.';
$string['privacy:metadata:enrol_lti_users:lastaccess'] = 'زمانی که کاربر برای آخرین بار به درس دسترسی پیدا کرد.';
$string['remotesystem'] = 'سیستم بیرونی';
$string['requirecompletion'] = 'نیازمند تکمیل درس یا فعالیت پیش از همگام‌سازی نمرات';
$string['returnurlnotset'] = 'آدرس بازگشت تعیین نشده بود.';
$string['roleinstructor'] = 'نقش استاد';
$string['roleinstructor_help'] = 'نقشی که در ابزار به استاد بیرونی نسبت داده می‌شود.';
$string['rolelearner'] = 'نقش شاگرد';
$string['rolelearner_help'] = 'نقشی که در ابزار به شاگرد بیرونی نسبت داده می‌شود.';
$string['secret'] = 'رمز';
$string['secret_help'] = 'رشته‌ای از کاراکترها که در اختیار سیستم بیرونی (مصرف‌کنندهٔ LTI) گذاشته می‌شود تا دسترسی به ابزار برایش فراهم شود.';
$string['sharedexternaltools'] = 'انتشار به‌عنوان ابزارهای LTI';
$string['tasksyncgrades'] = 'همگام‌سازی نمرات انتشار به‌عنوان ابزار LTI';
$string['tasksyncmembers'] = 'همگام‌سازی کاربران «انتشار به‌عنوان ابزار LTI»';
$string['toolsprovided'] = 'ابزارهای منتشر شده';
$string['toolsprovided_help'] = 'اینها اطلاعاتی هستند که باید برای اضافه‌کردن این ابزارها در هر سیستمی قرار دهید. در سایر سیستم‌ها ممکن است به آدرس ابزار (Tool URL) تحت نام آدرس پیکربندی (configuration URL) یا پیوند وب (web link) اشاره شود.';
$string['tooltobeprovided'] = 'ابزاری که منتشر می‌شود';
$string['toolurl'] = 'آدرس ابزار';
$string['userdefaultvalues'] = 'مقادیر پیش‌فرض کاربران';
