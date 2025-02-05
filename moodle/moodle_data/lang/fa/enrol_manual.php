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
 * Strings for component 'enrol_manual', language 'fa', version '4.5'.
 *
 * @package     enrol_manual
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alterstatus'] = 'تغییر وضعیت';
$string['altertimeend'] = 'تغییر زمان پایان';
$string['altertimestart'] = 'تغییر زمان شروع';
$string['assignrole'] = 'انتساب نقش';
$string['browsecohorts'] = 'فهرست هم‌دوره‌ای‌ها';
$string['browseusers'] = 'فهرست کاربران';
$string['confirmbulkdeleteenrolment'] = 'آیا مطمئن هستید که می‌خواهید ثبت‌نام این کاربران را حذف کنید؟';
$string['defaultperiod'] = 'مدت ثبت نام پیش‌فرض';
$string['defaultperiod_desc'] = 'مدت زمان پیش‌فرض معتبر بودن ثبت‌نام. اگر برابر با صفر باشد، مدت ثبت‌نام به‌طور پیش‌فرض نامحدود خواهد بود.';
$string['defaultperiod_help'] = 'مدت زمان پیش‌فرض معتبر بودن ثبت‌نام، با شروع از لحظه‌ای که کاربر ثبت‌نام می‌شود. اگر غیرفعال باشد، مدت ثبت‌نام به‌طور پیش‌فرض نامحدود خواهد بود.';
$string['defaultstart'] = 'شروع پیش‌فرض ثبت‌نام';
$string['deleteselectedusers'] = 'پاک‌کردن ثبت‌نام کاربران انتخاب شده';
$string['editselectedusers'] = 'ویرایش ثبت‌نام کاربران انتخاب شده';
$string['enrolledincourserole'] = 'به‌عنوان «{$a->role}» در «{$a->course}» ثبت‌نام شد';
$string['enrolusers'] = 'ثبت نام کاربران';
$string['enroluserscohorts'] = 'ثبت‌نام کاربران و هم‌دوره‌ای‌های انتخاب شده';
$string['expiredaction'] = 'اقدام انقضای ثبت‌نام';
$string['expiredaction_help'] = 'کاری که به‌هنگام منقضی شدن ثبت‌نام کاربر باید انجام شود را انتخاب کنید. لطفاً توجه کنید که برخی از داده‌ها و تنظیمات کاربر در هنگام لغو ثبت‌نام از درس پاک‌سازی می‌شوند.';
$string['expirymessageenrolledbody'] = '{$a->user} گرامی،

ثبت‌نام شما در درس «{$a->course}» در {$a->timeend} به پایان خواهد رسید.

در صورت نیاز به راهنمایی، لطفا با {$a->enroller} تماس بگیرید.';
$string['expirymessageenrolledsubject'] = 'اطلاع‌رسانی انقضای ثبت‌نام';
$string['expirymessageenrollerbody'] = 'ثبت‌نام کاربران زیر در درس «{$a->course}» ظرف {$a->threshold} آینده منقضی خواهد شد:

{$a->users}

برای تمدید ثبت‌نام به {$a->extendurl} بروید.';
$string['expirymessageenrollersubject'] = 'اطلاعیه انقضای ثبت‌نام';
$string['managemanualenrolements'] = 'مدیریت ثبت‌نام‌های دستی';
$string['manual:config'] = 'پیکربندی نمونه‌های ثبت‌نام به‌صورت دستی';
$string['manual:enrol'] = 'ثبت نام کاربران';
$string['manual:manage'] = 'مدیریت ثبت نام های کاربران';
$string['manual:unenrol'] = 'لغو ثبت نام کاربران در درس';
$string['manual:unenrolself'] = 'لغو ثبت نام خود در درس';
$string['manualpluginnotinstalled'] = 'پلاگین «دستی» هنوز نصب نشده است';
$string['messageprovider:expiry_notification'] = 'اطلاعیه‌های انقضای ثبت‌نام دستی';
$string['now'] = 'هم‌اکنون';
$string['pluginname'] = 'ثبت نام به صورت دستی';
$string['pluginname_desc'] = 'پلاگین ثبت نام به صورت دستی، از طریق پیوندی در قسمت تنظیمات مدیریت درس، امکان ثبت نام شدن کاربران به صورت دستی توسط کاربری که مجوزهای مناسب را دارد (مانند یک استاد) فراهم می‌کند. به طور معمول این پلاگین باید فعال باشد. زیرا پلاگین‌های خاص دیگری (مانند پلاگین ثبت نام فردی) به آن نیاز دارند.';
$string['privacy:metadata'] = 'پلاگین ثبت‌نام دستی هیچ اطلاعات شخصی‌ای ذخیره نمی‌کند.';
$string['selectcohorts'] = 'انتخاب هم‌دوره‌ای';
$string['selectusers'] = 'انتخاب کاربران';
$string['status'] = 'فعال بودن ثبت نام به صورت دستی';
$string['status_desc'] = 'دسترسی کاربران ثبت نام شدهٔ داخلی به درس را اجازه می‌دهد. اکثر مواقع باید فعال باشد.';
$string['status_help'] = 'این تنظیم تعیین می‌کند که آیا کاربری که نقش مناسب را دارد (مانند استاد) می‌تواند سایر کاربران را به‌طور دستی (با استفاده از پیوندی در تنظیمات مدیریت درس) ثبت‌نام کند یا خیر.';
$string['statusdisabled'] = 'غیرفعال';
$string['statusenabled'] = 'فعال';
$string['unenrolselfconfirm'] = 'آیا واقعا می‌خواهید ثبت‌نام خودتان در درس «{$a}» را لغو کنید؟';
$string['unenroluser'] = 'آیا واقعا می‌خواهید ثبت‌نام «{$a->user}» در درس «{$a->course}» را لغو کنید؟';
$string['unenrolusers'] = 'لغو ثبت‌نام کاربران';
