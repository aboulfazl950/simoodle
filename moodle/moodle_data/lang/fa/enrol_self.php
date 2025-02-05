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
 * Strings for component 'enrol_self', language 'fa', version '4.5'.
 *
 * @package     enrol_self
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cohortonly'] = 'تنها اعضای هم‌دوره‌ای‌ها';
$string['cohortonly_help'] = 'ثبت‌نام خود می‌تواند تنها محدود به اعضای یک هم‌دوره‌ای خاص شود. توجه کنید که تغییر این تنظیم تأثیری روی ثبت‌نام‌های موجود نخواهد داشت.';
$string['confirmbulkdeleteenrolment'] = 'آیا مطمئن هستید که می‌خواهید ثبت‌نام این کاربران را حذف کنید؟';
$string['customwelcomemessage'] = 'پیام خوش‌آمدگویی سفارشی';
$string['customwelcomemessage_help'] = 'یک پیغام خوش‌آمد سفارشی را در قالب متن ساده یا قالب خودکار مودل، شامل تگ‌های HTML و تگ‌های چند-زبانه می‌توان وارد کرد.

از متغیرهای زیر می‌توان در متن پیام استفاده کرد:

* نام درس <span dir="ltr" style="direction:ltr;display:inline-block">{$a->coursename}</span>
* پیوند به صفحهٔ مشخصات فردی کاربر <span dir="ltr" style="direction:ltr;display:inline-block">{$a->profileurl}</span>
* آدرس پست الکترونیکی کاربر <span dir="ltr" style="direction:ltr;display:inline-block">{$a->email}</span>
* نام کامل کاربر <span dir="ltr" style="direction:ltr;display:inline-block">{$a->fullname}</span>';
$string['defaultrole'] = 'نقش انتسابی پیش‌فرض';
$string['defaultrole_desc'] = 'نقشی که به طور پیش‌فرض به کاربرانی که خودشان را ثبت‌نام می‌کنند باید نسبت داده شود را انتخاب کنید';
$string['deleteselectedusers'] = 'حذف ثبت‌نام کاربران ثبت انتخاب شده';
$string['editselectedusers'] = 'ویرایش ثبت‌نام کاربران انتخاب‌شده';
$string['enrolenddate'] = 'تاریخ پایان';
$string['enrolenddate_help'] = 'در صورت فعال بودن، کاربران تنها تا این تاریخ می‌توانند خود را ثبت‌نام کنند.';
$string['enrolenddaterror'] = 'تاریخ انقضای ثبت‌نام نمی‌تواند قبل از شروع آن باشد';
$string['enrolme'] = 'ثبت‌نام من';
$string['enrolperiod'] = 'مدت ثبت‌نام';
$string['enrolperiod_desc'] = 'مدت زمان پیش‌فرض معتبر بودن ثبت‌نام. اگر برابر با صفر باشد، مدت ثبت‌نام به‌طور پیش‌فرض نامحدود خواهد بود.';
$string['enrolperiod_help'] = 'مدت زمانی که ثبت‌نام معتبر است، با شروع از لحظه‌ای که کاربر خود را ثبت‌نام می‌کند. اگر غیرفعال باشد، مدت ثبت‌نام نامحدود خواهد بود.';
$string['enrolstartdate'] = 'تاریخ شروع';
$string['enrolstartdate_help'] = 'در صورت فعال بودن، کاربران تنها پس از این تاریخ می‌توانند خود را ثبت‌نام کنند.';
$string['expiredaction'] = 'اقدام انقضای ثبت‌نام';
$string['expiredaction_help'] = 'کاری که به‌هنگام منقضی شدن ثبت‌نام کاربر باید انجام شود را انتخاب کنید. لطفاً توجه کنید که برخی از داده‌ها و تنظیمات کاربر در هنگام لغو ثبت‌نام از درس پاک‌سازی می‌شوند.';
$string['expirymessageenrolledbody'] = '{$a->user} گرامی،

ثبت‌نام شما در درس «{$a->course}» در {$a->timeend} به پایان خواهد رسید.

در صورت نیاز به راهنمایی، لطفا با {$a->enroller} تماس بگیرید.';
$string['expirymessageenrolledsubject'] = 'اطلاعیه انقضای ثبت‌نام خود';
$string['expirymessageenrollerbody'] = 'ثبت‌نام کاربران زیر توسط خودشان در درس «{$a->course}» ثبت‌نام شده‌اند، ظرف {$a->threshold} آینده منقضی خواهد شد:

{$a->users}

برای تمدید ثبت‌نام به {$a->extendurl} بروید.';
$string['expirymessageenrollersubject'] = 'اطلاعیه انقضای ثبت‌نام خود';
$string['expirynotifyall'] = 'کاربر ثبت‌نام کننده و ثبت‌نام شده';
$string['expirynotifyenroller'] = 'تنها ثبت‌نام‌کننده';
$string['groupkey'] = 'استفاده از کلیدهای عضویت در گروه‌ها';
$string['groupkey_desc'] = 'استفاده از کلیدهای عضویت در گروه‌ها به طور پیش‌فرض.';
$string['longtimenosee'] = 'لغو ثبت‌نام غیر‌فعال‌ها پس از';
$string['longtimenosee_help'] = 'اگر کاربران برای مدت زمانی طولانی به درسی وارد نشوند، به صورت خودکار ثبت‌نامشان در آن درس لغو می‌شود. مقدار این گزینه، تعیین کنندهٔ طولانی شدن مدت است.';
$string['maxenrolled'] = 'حداکثر کاربران ثبت‌نام شده';
$string['maxenrolled_help'] = 'حداکثر تعداد کاربرانی که می‌توانند خودشان را در درس ثبت‌نام کنند را تعیین می‌کند. مقدار عددی صفر به معنی نبود محدودیت است.';
$string['maxenrolledreached'] = 'حداکثر نعداد ثبت نام مجاز تکمیل گردیده';
$string['messageprovider:expiry_notification'] = 'اطلاعیه‌های انقضای ثبت‌نام خود';
$string['newenrols'] = 'مجاز بودن ثبت‌نام‌های جدید';
$string['newenrols_desc'] = 'به‌طور پیش‌فرض به کاربران اجازه داده شود که خودشان را در درس‌های جدید ثبت‌نام کنند.';
$string['newenrols_help'] = 'این تنظیم تعیین می‌کند که آیا یک کاربر می‌تواند در این درس ثبت‌نام شود یا خیر.';
$string['nopassword'] = 'به کلید ثبت‌نام نیازی نیست.';
$string['password'] = 'کلید ثبت نام';
$string['password_help'] = 'با استفاده از کلید ثبت‌نام می‌توان دسترسی به درس را محدود به کاربرانی کرد که کلید را می‌دانند.

اگر این فیلد خالی باشد، هر کاربری می‌تواند در درس ثبت‌نام کند.

اگر یک کلید ثبت‌نام تعیین شده باشد، از هر کاربری که بخواهد در درس ثبت‌نام کند خواسته می‌شود که کلید ثبت‌نام را وارد کند. توجه کنید که کاربر لازم است که این کلید را تنها یک بار و در هنگام ثبت‌نام در درس وارد کند.';
$string['passwordinvalidhint'] = 'کلید ثبت‌نامی که وارد کرده‌اید اشتباه است، لطفاً مجدداً تلاش کنید<br />
(یک راهنمائی: با «{$a}» شروع می‌شود)';
$string['pluginname'] = 'ثبت‌نام خود';
$string['pluginname_desc'] = 'پلاگین ثبت‌نام خود به کاربران اجازه می‌دهد تصمیم بگیرند که در چه درس‌هایی می‌خواهند شرکت کنند. درس‌ها می‌توانند با استفاده از یک کلید ثبت‌نام محافظت شوند. این ثبت‌نام‌ها در اصل با استفاده از پلاگین ثبت‌نام دستی که باید در درس فعال باشد انجام می‌شوند.';
$string['privacy:metadata'] = 'پلاگین ثبت‌نام خود هیچ اطلاعات شخصی‌ای ذخیره نمی‌کند.';
$string['requirepassword'] = 'نیازمند کلید ثبت‌نام';
$string['requirepassword_desc'] = 'نیازمند تعیین کلید ثبت‌نام در درس‌های جدید و جلوگیری از حذف کلید ثبت‌نام در درس‌های موجود.';
$string['role'] = 'نقشی که به‌طور پیش‌فرض نسبت داده می‌شود';
$string['self:config'] = 'پیکربندی نمونه‌های ثبت‌نام خود';
$string['self:holdkey'] = 'نمایش داده شدن به‌عنوان دارندهٔ کلید ثبت‌نام خود';
$string['self:manage'] = 'مدیریت کاربران ثبت‌نام شده';
$string['self:unenrol'] = 'کاربران ثبت نام نشده در دوره';
$string['self:unenrolself'] = 'لغو ثبت نام خود در درس';
$string['sendcoursewelcomemessage'] = 'ارسال پیام خوش‌آمد به درس';
$string['sendcoursewelcomemessage_help'] = 'می‌توان هنگامی که کاربری خود را در درسی ثبت‌نام می‌کند یک پیام خوش‌آمد از طریق پست الکترونیک به او فرستاد. اگر از طرف مسئول درس (به‌طور پیش‌فرض استاد) فرستاده می‌شود، و بیش از یک کاربر این نقش را داشته باشند، نامهٔ الکترونیکی از طرف اولین کاربری که آن نقش را گرفته است فرستاده خواهد شد.';
$string['showhint'] = 'نمایش راهنمایی';
$string['showhint_desc'] = 'نمایش اولین حرف رمز دسترسی مهمان.';
$string['status'] = 'مجاز بودن ثبت‌نام خود';
$string['status_desc'] = 'به طور پیش‌فرض به کاربران اجازه داده شود که خودشان را در درس ثبت‌نام کنند.';
$string['status_help'] = 'اگر فعال باشد و تنظیم «مجاز بودن ثبت‌نام‌های جدید» غیرفعال باشد، آنگاه تنها کاربرانی که از قبل خودشان را ثبت‌نام کرده‌اند می‌توانند به درس دسترسی داشته باشند. اگر غیرفعال باشد، آنگاه باتوجه به‌اینکه تمام ثبت‌نام‌های کاربرانی که از قبل خود را ثبت‌نام کرده‌اند تعلیق می‌شوند و کاربران جدید هم نمی‌توانند خود را ثبت‌نام کنند، عملا این شیوهٔ ثبت‌نام خود غیرفعال خواهد بود.';
$string['unenrolselfconfirm'] = 'آیا واقعا می‌خواهید ثبت‌نام خود درس «{$a}» را خاتمه دهید؟';
$string['unenroluser'] = 'آیا واقعا می‌خواهید ثبت‌نام «{$a->user}» در درس «{$a->course}» را لغو کنید؟';
$string['usepasswordpolicy'] = 'استفاده از شرایط مورد نیاز رمزها';
$string['usepasswordpolicy_desc'] = 'شرایط تعیین شده برای رمز ورود، برای کلیدهای ثبت‌نام هم مورد استفاده قرار گیرند.';
$string['welcometocourse'] = 'به {$a} خوش آمدید';
$string['welcometocoursetext'] = 'به {$a->coursename} خوش آمدید!

به منظور آشنائی بیشتر با شما، اگر قبلاً این کار را انجام نداده‌اید، باید صفحهٔ مشخصات فردی خود را ویرایش نمائید:

  {$a->profileurl}';
