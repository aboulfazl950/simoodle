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
 * Strings for component 'enrol', language 'fa', version '4.5'.
 *
 * @package     enrol
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actenrolshhdr'] = 'پلاگین‌های موجود ثبت‌نام در درس';
$string['addinstance'] = 'اضافه کردن روش';
$string['addinstanceanother'] = 'اضافه‌کردن روش و ساختن یک نمونه دیگر';
$string['ajaxnext25'] = '۲۵ مورد بعدی...';
$string['ajaxoneuserfound'] = '۱ کاربر پیدا شد';
$string['ajaxxusersfound'] = '{$a} کاربر پیدا شد';
$string['assignnotpermitted'] = 'شما مجوز لازم را ندارید یا اینکه نمی‌توانید در این درس نقشی به کاربران نسبت دهید.';
$string['bulkuseroperation'] = 'عملیات گروهی کاربران';
$string['configenrolplugins'] = 'لطفاً پلاگین‌های مورد نیاز را انتخاب و به ترتیب مناسب مرتب نمائید.';
$string['custominstancename'] = 'نام سفارشی این روش ثبت‌نام';
$string['customwelcomemessage'] = 'پیام خوش‌آمدگویی سفارشی';
$string['customwelcomemessage_help'] = 'یک پیغام خوش‌آمد سفارشی را در قالب متن ساده یا قالب خودکار مودل، شامل تگ‌های HTML و تگ‌های چند-زبانه می‌توان وارد کرد.

از متغیرهای زیر می‌توان در متن پیام استفاده کرد:

* نام درس <span dir="ltr" style="direction:ltr;display:inline-block">{$a->coursename}</span>
* پیوند به صفحهٔ مشخصات فردی کاربر <span dir="ltr" style="direction:ltr;display:inline-block">{$a->profileurl}</span>
* آدرس پست الکترونیکی کاربر <span dir="ltr" style="direction:ltr;display:inline-block">{$a->email}</span>
* نام کامل کاربر <span dir="ltr" style="direction:ltr;display:inline-block">{$a->fullname}</span>';
$string['defaultenrol'] = 'فعال بودن در درس‌های جدید';
$string['defaultenrol_desc'] = 'این پلاگین در تمام درس‌هایی که تازه ایجاد می‌شوند به صورت پیش‌فرض فعال باشد.';
$string['deleteinstanceconfirm'] = 'شما در آستانهٔ حذف‌کردن روش ثبت‌نام «{$a->name}» هستید. ثبت‌نام تمام {$a->users} کاربری که هم‌اکنون با استفاده از این روش ثبت‌نام در درس ثبت‌نام هستند لغو خواهد شد و تمام داده‌های آنها که مربوط به درس است از قبیل نمرات، عضویت در گروه‌ها یا اشتراک‌هایشان در تالارهای گفتگو پاک خواهد شد.

آیا مطمئن هستید که می‌خواهید ادامه دهید؟';
$string['deleteinstanceconfirmself'] = 'آیا مطمئن هستید که می‌خواهید نمونهٔ «{$a->name}» که دسترسی به این درس را برای شما فراهم کرده است پاک کنید؟ اگر ادامه دهید ممکن است نتوانید به این درس دسترسی پیدا کنید.';
$string['deleteinstancenousersconfirm'] = 'شما در آستانهٔ حذف‌کردن روش ثبت‌نام «{$a->name}» هستید. آیا مطمئن هستید که می‌خواهید ادامه دهید؟';
$string['disableinstanceconfirmself'] = 'آیا مطمئن هستید که می‌خواهید نمونهٔ «{$a->name}» که دسترسی به این درس را برای شما فراهم کرده است غیرفعال کنید؟ اگر ادامه دهید ممکن است نتوانید به این درس دسترسی پیدا کنید.';
$string['durationdays'] = '{$a} روز';
$string['editenrolment'] = 'ویرایش ثبت‌نام';
$string['edituserenrolment'] = 'ویرایش ثبت‌‌نام {$a}';
$string['enrol'] = 'ثبت‌نام';
$string['enrolcandidates'] = 'کاربران ثبت‌نام نشده';
$string['enrolcandidatesmatching'] = 'کاربران پیدا شده ای که ثبت‌نام نیستند';
$string['enrolcohort'] = 'ثبت‌نام هم‌دوره‌ای‌ها';
$string['enrolcohortusers'] = 'ثبت‌نام کاربران';
$string['enroldetails'] = 'جزئیات ثبت‌نام';
$string['enrollednewusers'] = '{$a} کاربر جدید با موفقیت ثبت‌نام شدند';
$string['enrolledusers'] = 'کاربران ثبت‌نام شده';
$string['enrolledusersmatching'] = 'کاربران پیدا شده ای که ثبت‌نام هستند';
$string['enrolme'] = 'مرا در این درس ثبت‌نام بنما';
$string['enrolmentinstances'] = 'روش‌های ثبت‌نام';
$string['enrolmentmethod'] = 'روش ثبت‌نام';
$string['enrolmentnew'] = 'ثبت‌نام جدید در {$a}';
$string['enrolmentnewuser'] = '«{$a->user}» در درس «{$a->course}» ثبت‌نام شده است';
$string['enrolmentoptions'] = 'پارامترهای ثبت‌نام';
$string['enrolments'] = 'ثبت‌نام‌ها';
$string['enrolnotpermitted'] = 'شما مجوز ندارید یا مجاز نیستید که کسی را در این درس ثبت‌نام کنید';
$string['enrolperiod'] = 'مدت ثبت‌نام‌';
$string['enroltimecreated'] = 'ایجاد ثبت‌نام';
$string['enroltimeend'] = 'خاتمه ثبت‌نام‌';
$string['enroltimeendinvalid'] = 'تاریخ پایان ثبت‌نام بایستی بعد از تاریخ شروع  ثبت‌نام باشد';
$string['enroltimestart'] = 'شروع ثبت‌نام‌';
$string['enrolusage'] = 'نمونه‌ها / ثبت‌نام‌ها';
$string['enrolusers'] = 'ثبت‌نام کاربران';
$string['enrolxusers'] = 'ثبت‌نام {$a} کاربر';
$string['errajaxfailedenrol'] = 'خطا در ثبت‌نام‌ کاربر';
$string['errajaxsearch'] = 'خطا در هنگام جستجوی کاربران';
$string['erroreditenrolment'] = 'خطایی در حین تلاش برای ویرایش ثبت‌نام یک کاربر رخ داد';
$string['errorenrolcohort'] = 'خطا در ساختن نمونه از ثبت‌نام همگام‌سازی هم‌دوره‌ای‌ها در این درس.';
$string['errorenrolcohortusers'] = 'خطا در ثبت‌نام اعضای هم‌دوره‌ای در این درس.';
$string['errorthresholdlow'] = 'آستانهٔ اطلاع‌رسانی باید حداقل ۱ روز باشد.';
$string['errorwithbulkoperation'] = 'هنگام پردازش تغییر گروهی شما در ثبت‌نام‌ها، خطایی رخ داد.';
$string['eventenrolinstancecreated'] = 'نمونهٔ ثبت‌نام ایجاد شد';
$string['eventenrolinstancedeleted'] = 'نمونهٔ ثبت‌نام پاک شد';
$string['eventenrolinstanceupdated'] = 'نمونهٔ ثبت‌نام به‌روز شد';
$string['eventuserenrolmentcreated'] = 'کاربر در درس ثبت‌نام شد';
$string['eventuserenrolmentdeleted'] = 'ثبت‌نام کاربر در درس لغو شد';
$string['eventuserenrolmentupdated'] = 'ثبت‌نام کاربر به‌روز شد';
$string['expirynotify'] = 'باخبرکردن پیش از منقضی‌شدن ثبت‌نام';
$string['expirynotify_help'] = 'این تنظیم تعیین می‌کند که آیا اطلاعیهٔ منقضی‌شدن ثبت‌نام ارسال شود یا خیر.';
$string['expirynotifyall'] = 'کاربر ثبت‌نام کننده و ثبت‌نام شده';
$string['expirynotifyenroller'] = 'تنها ثبت‌نام‌کننده';
$string['expirynotifyhour'] = 'ساعت ارسال اطلاعیه‌های منقضی‌شدن ثبت‌نام';
$string['expirythreshold'] = 'آستانهٔ اطلاع‌رسانی';
$string['expirythreshold_help'] = 'کاربران چقدر پیش از انقضای ثبت‌نام باید مطلع شوند؟';
$string['extremovedaction'] = 'رفتار در قبال لغو ثبت‌نام خارجی';
$string['extremovedaction_help'] = 'کاری که به‌هنگام ناپدید شدن ثبت‌نام یک کاربر از پایگاه دادهٔ ثبت‌نام خارجی باید انجام شود را انتخاب کنید. لطفاً توجه کنید که برخی از داده‌ها و تنظیمات کاربر در هنگام لغو ثبت‌نام از درس پاک‌سازی می‌شوند.';
$string['extremovedkeep'] = 'ثبت‌نام نگه داشتن کاربر';
$string['extremovedsuspend'] = 'غیرفعال کردن ثبت‌نام در درس';
$string['extremovedsuspendnoroles'] = 'غیر فعال کردن ثبت‌نام در درس و حذف نقش‌ها';
$string['extremovedunenrol'] = 'لغو ثبت‌نام کاربر در درس';
$string['finishenrollingusers'] = 'اتمام ثبت‌نام کاربران';
$string['foundxcohorts'] = '{$a} هم‌دوره‌ای پیدا شد';
$string['instanceadded'] = 'روش اضافه شد';
$string['instanceeditselfwarning'] = 'اخطار:';
$string['instanceeditselfwarningtext'] = 'شما با استفاده از این شیوهٔ شناسایی در این درس ثبت‌نام شده‌اید. تغییرات ممکن است روی دسترسی شما به این درس تاثیر بگذارند.';
$string['invalidenrolinstance'] = 'نمونه ثبت‌نام نامعتبر';
$string['invalidrequest'] = 'درخواست نامعتبر';
$string['invalidrole'] = 'نقش نامعتبر';
$string['manageenrols'] = 'مدیریت پلاگین‌های ثبت‌نام';
$string['manageinstance'] = 'مدیریت';
$string['migratetomanual'] = 'تبدیل به ثبت‌نام‌های دستی';
$string['nochange'] = 'بدون تغییر';
$string['noexistingparticipants'] = 'شرکت‌کننده‌ای وجود ندارد';
$string['nogroup'] = 'گروهی وجود ندارد';
$string['noguestaccess'] = 'مهمان‌ها اجازهٔ دسترسی به این درس را ندارند، لطفاً با حساب کاربری خود وارد شوید.';
$string['none'] = 'هیچ';
$string['notenrollable'] = 'در حال حاضر امکان ثبت‌نام در این درس وجود ندارد.';
$string['notenrolledusers'] = 'سایر کاربران';
$string['otheruserdesc'] = 'کاربران زیر در این درس ثبت‌نام نیستند ولی نقش‌هایی، مشتق شده یا نسبت داده شده، در آن دارند.';
$string['participationactive'] = 'فعال';
$string['participationnotcurrent'] = 'فعال نیست';
$string['participationstatus'] = 'وضعیت';
$string['participationsuspended'] = 'تعلیق‌شده';
$string['periodend'] = 'تا {$a}';
$string['periodnone'] = 'ثبت‌نام در {$a}';
$string['periodstart'] = 'از {$a}';
$string['periodstartend'] = 'از {$a->start} تا {$a->end}';
$string['privacy:metadata:user_enrolments'] = 'ثبت‌نام‌ها';
$string['privacy:metadata:user_enrolments:modifierid'] = 'شناسه آخرین کاربری که ثبت‌نام کاربر را تغییر داده است';
$string['privacy:metadata:user_enrolments:status'] = 'وضعیت ثبت‌نام کاربر در یک درس';
$string['privacy:metadata:user_enrolments:timecreated'] = 'زمان ایجاد ثبت‌نام کاربر';
$string['privacy:metadata:user_enrolments:timeend'] = 'زمان پایان ثبت‌نام کاربر';
$string['privacy:metadata:user_enrolments:timemodified'] = 'زمان اصلاح ثبت‌نام کاربر';
$string['privacy:metadata:user_enrolments:timestart'] = 'زمان شروع ثبت‌نام کاربر';
$string['privacy:metadata:user_enrolments:userid'] = 'شناسه کاربر';
$string['recovergrades'] = 'احیای نمره‌های قدیمی کاربر در صورت امکان';
$string['rolefromcategory'] = '{$a->role} (به ارث رسیده از طبقهٔ درس)';
$string['rolefrommetacourse'] = '{$a->role} (به ارث رسیده از درس والد)';
$string['rolefromsystem'] = '{$a->role} (نسبت داده شده در سطح سایت)';
$string['rolefromthiscourse'] = '{$a->role} (در این درس منسوب شده است)';
$string['sendfromcoursecontact'] = 'از طرف مسئول درس';
$string['sendfromkeyholder'] = 'از طرف دارندهٔ کلید';
$string['sendfromnoreply'] = 'از طرف آدرس no-reply';
$string['startdatetoday'] = 'امروز';
$string['synced'] = 'همگام شد';
$string['testsettings'] = 'آزمایش تنظیمات';
$string['testsettingsheading'] = 'آزمایش تنظیمات ثبت‌نام - {$a}';
$string['totalenrolledusers'] = '{$a} کاربر ثبت‌نام شده';
$string['totalotherusers'] = '{$a} کاربر متفرقه';
$string['unassignnotpermitted'] = 'شما مجوزِ گرفتن نقش از کاربران در این درس را ندارید';
$string['unenrol'] = 'لغو ثبت‌نام‌';
$string['unenrolconfirm'] = 'آیا واقعا می‌خواهید ثبت‌نام کاربر «{$a->user}» در درس «{$a->course}» (که قبلا به روش "{$a->enrolinstancename}" ثبت‌نام شده بود) را لغو کنید؟';
$string['unenrolme'] = 'ثبت‌نام‌ من را لغو کن';
$string['unenrolnotpermitted'] = 'شما مجوز ندارید یا نمی‌توانید ثبت‌نام این کاربر را در این درس لغو کنید.';
$string['unenrolroleusers'] = 'لغو ثبت‌نام‌ كاربران';
$string['uninstallmigrating'] = 'تبدیل ثبت‌نام‌های «{$a}»';
$string['unknowajaxaction'] = 'عمل درخواستی ناشناخته بود';
$string['unlimitedduration'] = 'نامحدود';
$string['userremovedfromselectiona'] = 'کاربر "{$a}" از انتخاب‌شدگان حذف شد.';
$string['usersearch'] = 'جستجو';
$string['withselectedusers'] = 'با کاربران انتخاب‌شده';
$string['youenrolledincourse'] = 'شما در این درس ثبت‌نام شدید';
$string['youunenrolledfromcourse'] = 'ثبت شما از درس "{$a}" لغو گردید.';
