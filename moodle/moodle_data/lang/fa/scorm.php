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
 * Strings for component 'scorm', language 'fa', version '4.5'.
 *
 * @package     scorm
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activation'] = 'فعال بودن';
$string['activityloading'] = 'به طور خودکار به فعالیت هدایت خواهید شد. زمان انتظار:';
$string['activityoverview'] = 'شما بسته‌های اسکورمی دارید که نیازمند توجه هستند';
$string['activitypleasewait'] = 'در حال بار شدن فعالیت. لطفاً منتظر بمانید ...';
$string['adminsettings'] = 'تنظیمات مدیریتی';
$string['advanced'] = 'متغیرها';
$string['aliasonly'] = 'هنگام انتخاب فایل imsmanifest.xml از یک انباره، باید از یک فایل مستعار/میان‌بُر برای این فایل استفاده کنید.';
$string['allowapidebug'] = 'فعال کردن اشکال‌زدایی و ردیابی توسط API (باید capture mask را هم تنظیم کنید)';
$string['allowtypeexternal'] = 'فعال بودن نوع بستهٔ خارجی';
$string['allowtypeexternalaicc'] = 'فعال بودن آدرس url مستقیم به AICC';
$string['allowtypeexternalaicc_desc'] = 'در صورت فعال بودن، آدرس url مستقیم به یک بستهٔ AICC ساده مجاز خواهد بود';
$string['allowtypelocalsync'] = 'فعال بودن نوع بستهٔ دریافت شده';
$string['apidebugmask'] = 'capture mask اشکال‌زدایی توسط API - از یک عبارت منظم ساده روی <span dir="ltr" style="display:inline-block;direction:ltr;white-space: nowrap;">&lt;نام کاربری&gt;:&lt;نام فعالیت&gt;</span> استفاده می‌کند. مثلاً <span dir="ltr" style="display:inline-block;direction:ltr">admin:.*</span> فقط برای کاربر admin اشکال‌زدایی می‌کند.';
$string['areacontent'] = 'فایل‌های محتوا';
$string['areapackage'] = 'فایل بسته';
$string['asset'] = 'دارایی';
$string['assetlaunched'] = 'دارایی - دیده شده';
$string['attempt'] = 'تلاش';
$string['attempt1'] = '۱ بار';
$string['attempts'] = 'تلاش';
$string['attemptsmanagement'] = 'مدیریت تلاش';
$string['attemptstatusall'] = 'میز کار و صفحهٔ ورودی';
$string['attemptstatusentry'] = 'فقط صفحهٔ ورودی';
$string['attemptstatusmy'] = 'فقط میز کار';
$string['attemptsx'] = '{$a} بار';
$string['attr_error'] = 'مقدار نامناسب برای ویژگی ({$a->attr}) در علامت {$a->tag}.';
$string['autocommit'] = 'ثبت خودکار';
$string['autocommit_help'] = 'در صورتی که فعال باشد، داده‌های اسکورم به‌طور خودکار در پایگاه داده ذخیره می‌شوند. این کار برای اشیاء اسکورمی که داده‌هایشان را مرتباً ذخیره نمی‌کنند مفید است.';
$string['autocommitdesc'] = 'ذخیرهٔ خودکار داده‌های اسکورم اگر بستهٔ اسکورم خودش آنها را ذخیره نمی‌کند.';
$string['autocontinue'] = 'ادامهٔ خودکار';
$string['autocontinue_help'] = 'در صورت فعال بودن، اجزای آموزشی پشت سر هم، به صورت خودکار شروع می‌شوند. در غیر این صورت، باید از دکمهٔ ادامه استفاده کرد تا قسمت بعدی شروع شود.';
$string['autocontinuedesc'] = 'این گزینه تعیین می‌کند که به صورت پیش‌فرض در فعالیت‌های اسکورم قابلیت ادامهٔ خودکار فعال باشد یا خیر';
$string['averageattempt'] = 'متوسط تعداد دفعات تلاش';
$string['badarchive'] = 'باید یک فایل zip معتبر ارائه کنید';
$string['badimsmanifestlocation'] = 'یک فایل imsmanifest.xml پیدا شد ولی در سطح اول فایل zip شما نبود و در یک دایرکتوری داخلی بود. لطفا اسکورم را دوباره بسته‌بندی کنید!';
$string['badmanifest'] = 'یک سری خطا مربوط به مانیفست: log خطاها را ببینید';
$string['browse'] = 'پیش‌نمایش';
$string['browsed'] = 'به صورت پیش‌نمایش دیده شده';
$string['browsemode'] = 'حالت پیش‌نمایش';
$string['browserepository'] = 'مرور انباره';
$string['calculatedweight'] = 'وزن محاسبه‌شده';
$string['calendarend'] = 'بسته می‌شود {$a}';
$string['calendarstart'] = '{$a} باز می‌شود';
$string['cannotfindsco'] = 'فایل SCO پیدا نشد';
$string['chooseapacket'] = 'بسته‌ای را انتخاب یا به‌روز کنید';
$string['closebeforeopen'] = 'تاریخِ بسته شدن را پیش از تاریخِ باز شدن انتخاب کرده‌اید.';
$string['compatibilitysettings'] = 'تنظیمات مربوط به سازگاری';
$string['completed'] = 'کامل شده';
$string['completiondetail:allscos'] = 'انجام همه قسمت‌های فعالیت';
$string['completiondetail:completionscore'] = 'دریافت یک نمره {$a} یا بیشتر';
$string['completiondetail:completionstatuscompleted'] = 'کامل کردن فعالیت';
$string['completiondetail:completionstatuscompletedorpassed'] = 'کامل کردن یا گذراندن فعالیت';
$string['completiondetail:completionstatuspassed'] = 'قبول شدن فعالیت';
$string['completionscorerequired'] = 'حداقل امتیاز لازم';
$string['completionscorerequired_help'] = 'درصورت فعال بودن این گزینه، کاربر باید علاوه بر سایر شرایط لازم، حداقل امتیاز وارد شده را کسب کند تا این فعالیت اسکورم برایش به‌عنوان کامل‌شده علامت زده شود';
$string['completionstatus_completed'] = 'تکمیل';
$string['completionstatus_passed'] = 'موفق';
$string['completionstatusrequired'] = 'نیازمند وضعیت';
$string['completionstatusrequired_help'] = 'در صورت انتخاب‌بودن یک یا چند وضعیت، کاربر باید علاوه بر سایر شرایط لازم، حداقل یکی از وضعیت‌های انتخاب‌شده را نیز کسب کند تا این فعالیت اسکورم برایش به‌عنوان کامل‌شده علامت بخورد.';
$string['confirmloosetracks'] = 'اخطار: بسته، تغییر کرده یا دستکاری شده به نظر می‌رسد. اگر ساختار بسته تغییر کرده باشد، رد پای بعضی کاربران ممکن است در حین فرایند به‌روزرسانی از دست برود.';
$string['contents'] = 'محتویات';
$string['coursepacket'] = 'بستهٔ درس';
$string['coursestruct'] = 'ساختار درس';
$string['currentwindow'] = 'پنجرهٔ جاری';
$string['datadir'] = 'خطا در سیستم فایلی: ایجاد مسیر داده‌های درس مقدور نیست';
$string['defaultdisplaysettings'] = 'تنظیمات پیش‌فرض نمایش';
$string['defaultgradesettings'] = 'تنظیمات پیش‌فرض نمره';
$string['defaultothersettings'] = 'سایر تنظیمات پیش‌فرض';
$string['deleteallattempts'] = 'پاک کردن تمام تلاش‌های صورت گرفته در اسکورم‌ها';
$string['deleteattemptcheck'] = 'آیا قطعا مطمئنید که می‌خواهید این تلاش‌ها را به طور کامل حذف کنید؟';
$string['deleteselected'] = 'حذف دفعات انتخاب شده';
$string['deleteuserattemptcheck'] = 'آیا کاملاً مطمئن هستید که می‌خواهید تمام تلاش‌هایتان را به طور کامل حذف کنید؟';
$string['details'] = 'دنبال کردن جزئیات';
$string['directories'] = 'نمایش نوار پیوندها';
$string['disabled'] = 'غیر فعال شده است';
$string['display'] = 'نمایش بسته';
$string['displayattemptstatus'] = 'نمایش وضعیت تلاش';
$string['displayattemptstatus_help'] = 'با استفاده از این گزینه می‌توان خلاصه وضعیت تلاش کاربر را در جدول مرور کلی درس در میز کار و/یا در صفحهٔ ورودی اسکورم نمایش داد.';
$string['displayattemptstatusdesc'] = 'اینکه آیا خلاصه وضعیت تلاش کاربر در جدول مرور کلی درس در میز کار و/یا در صفحهٔ ورودی اسکورم نشان داده شود یا خیر.';
$string['displaycoursestructure'] = 'نمایش ساختار درس در صفحهٔ ورودی';
$string['displaycoursestructure_help'] = 'در صورت فعال بودن، در صفحهٔ طرح کلی اسکورم، فهرست محتویات آن نمایش داده خواهد شد.';
$string['displaycoursestructuredesc'] = 'این گزینه، مقدار پیش‌فرض برای تنظیم مربوط به نمایش ساختار درس در صفحهٔ ورودی را تعیین می‌کند';
$string['displaydesc'] = 'این گزینه تعیین می‌کند که در یک فعالیت اسکورم، به صورت پیش‌فرض بستهٔ اسکورم چگونه نمایش داده شود';
$string['displaysettings'] = 'تنظیمات نمایش';
$string['dnduploadscorm'] = 'اضافه‌کردن یک بستهٔ اسکورم';
$string['domxml'] = 'کتابخانهٔ خارجی DOMXML';
$string['element'] = 'مورد';
$string['enter'] = 'ورود';
$string['entercourse'] = 'ورود به درس';
$string['errorlogs'] = 'خطاهای ثبت شده';
$string['eventattemptdeleted'] = 'تلاش پاک شد';
$string['eventreportviewed'] = 'گزارش مشاهده شد';
$string['eventuserreportviewed'] = 'گزارش کاربر مشاهده شد';
$string['everyday'] = 'هر روز';
$string['everytime'] = 'هر گاه که استفاده می‌شود';
$string['exceededmaxattempts'] = 'حداکثر تعداد تلاش‌ها را انجام داده‌اید.';
$string['exit'] = 'خروج از درس';
$string['exitactivity'] = 'خروج از فعالیت';
$string['expired'] = 'متأسفیم، این فعالیت در {$a} بسته شد و دیگر در دسترس نیست';
$string['external'] = 'به‌روزرسانی زمانبندی بسته‌های خارجی';
$string['failed'] = 'ناموفق';
$string['finishscorm'] = 'اگر مشاهدهٔ این منبع را به پایان رسانده‌اید، {$a}';
$string['finishscormlinkname'] = 'اینجا کلیک کنید تا به صفحهٔ درس بازگردید';
$string['firstaccess'] = 'اولین دسترسی';
$string['firstattempt'] = 'اولین تلاش';
$string['floating'] = 'شناور';
$string['forcecompleted'] = 'تحمیل تکمیل';
$string['forcecompleted_help'] = 'در صورت فعال بودن، وضعیت تلاش جاری به صورت اجباری «کامل شده» می‌شود. (تنها در مورد بسته‌های اسکورم ۱٫۲ کاربرد دارد.)';
$string['forcecompleteddesc'] = 'این گزینه، مقدار پیش‌فرض برای تنظیم مربوط به تحمیل تکمیل را تعیین می‌کند';
$string['forcejavascript'] = 'اجبار کاربران به فعال کردن جاوا اسکریپت';
$string['forcejavascript_desc'] = 'در صورت فعال بودن (توصیه می‌شود)، از دسترسی به اشیاء اسکورم در حالتی که مرورگر کاربر از جاوا اسکریپت پشتیبانی نمی‌کند یا جاوا اسکریپت در آن غیر فعال است جلوگیری می‌شود. اگر غیر فعال باشد، کاربر می‌تواند اسکورم را ببیند ولی ارتباطات API موفق نخواهند بود و در نتیجه هیچ نمره‌ای ذخیره نخواهد شد.';
$string['forcejavascriptmessage'] = 'برای مشاهدهٔ این شیء جاوا اسکریپت لازم است. لطفاً جاوا اسکریپت را در مرورگرتان فعال کنید و سپس دوباره تلاش کنید.';
$string['forcenewattempts'] = 'تحمیل تلاش جدید';
$string['found'] = 'مانیفست پیدا شد';
$string['frameheight'] = 'این تنظیم، ارتفاع پیش‌فرض پنجره یا فریم نمایش را تعیین می‌کند';
$string['framewidth'] = 'این تنظیم، عرض پیش‌فرض پنجره یا فریم نمایش را تعیین می‌کند';
$string['fromleft'] = 'از راست';
$string['fromtop'] = 'از بالا';
$string['fullscreen'] = 'پر کردن کل صفحه';
$string['general'] = 'داده‌های کلی';
$string['gradeaverage'] = 'نمرهٔ میانگین';
$string['gradeforattempt'] = 'نمرهٔ تلاش';
$string['gradehighest'] = 'بالاترین نمره';
$string['grademethod'] = 'روش نمره‌دهی';
$string['grademethod_help'] = 'روش نمره‌دهی، تعیین می‌کند که نمرهٔ یک دفعه شرکت در فعالیت چگونه محاسبه شود.

۴ روش برای نمره‌دهی وجود دارد:

* اجزای آموزشی - تعداد مورد‌های آموزشی با موفقیت پشت سر گذاشته شده یا کامل شده
* بالاترین نمره - بالاترین امتیاز کسب شده از تمام هدف‌های آموزشی کامل شده
* نمرهٔ میانگین - میانگین تمام امتیازها
* جمع نمره - جمع تمام امتیازها';
$string['grademethoddesc'] = 'این گزینه، شیوهٔ پیش‌فرض نمره‌دهی یک فعالیت اسکورم را تعیین می‌کند';
$string['gradereported'] = 'نمرهٔ گزارش شده';
$string['gradescoes'] = 'اهداف آموزشی';
$string['gradesettings'] = 'تنظیمات نمره';
$string['gradesum'] = 'جمع نمره';
$string['height'] = 'ارتفاع';
$string['hidden'] = 'مخفی';
$string['hidebrowse'] = 'غیر فعال کردن حالت پیش‌نمایش';
$string['hidebrowse_help'] = 'حالت پیش‌نمایش به شاگرد اجازهٔ مرور یک فعالیت پیش از اقدام به شرکت در آن را می‌دهد. اگر حالت پیش‌نمایش غیر قعال باشد، دکمهٔ پیش‌نمایش مخفی خواهد بود.';
$string['hidebrowsedesc'] = 'این گزینه تعیین می‌کند که حالت پیش‌نمایش به طور پیش‌فرض فعال باشد یا غیر فعال';
$string['hideexit'] = 'مخفی کردن پیوند خروج';
$string['hidereview'] = 'مخفی کردن دکمهٔ مرور';
$string['hidetoc'] = 'نمایش ساختار درس در پخش‌کننده';
$string['hidetoc_help'] = 'این گزینه تعیین می‌کند که فهرست چگونه در پخش‌کنندهٔ اسکورم نمایش داده شود.';
$string['hidetocdesc'] = 'این گزینه تعیین می‌کند که به صورت پیش‌فرض ساختار درس (فهرست) در پخش‌کنندهٔ اسکورم نمایش داده می‌شود یا خیر';
$string['highestattempt'] = 'بالاترین تلاش';
$string['identifier'] = 'شناسهٔ سؤال';
$string['incomplete'] = 'ناتمام';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['interactions'] = 'تعامل‌ها';
$string['invalidactivity'] = 'فعالیت اسکورم نادرست است';
$string['invalidmanifestname'] = 'تنها فایل imsmanifest.xml یا فایل‌های با پسوند zip‌ قابل قبول هستند.';
$string['invalidmanifestresource'] = 'هشدار: به موارد زیر در مانیفست شما ارجاع داده شده است ولی قابل پیدا شدن نبودند:';
$string['last'] = 'زمان آخرین دسترسی';
$string['lastaccess'] = 'آخرین دسترسی';
$string['lastattempt'] = 'آخرین تلاش';
$string['lastattemptlock'] = 'قفل شدن پس از آخرین تلاش';
$string['lastattemptlock_help'] = 'در صورت فعال بودن، از اجرا کردن پخش‌کنندهٔ اسکورم توسط شاگردان پس از صورت دادن تمام تلاش‌های مجازشان، جلوگیری می‌شود.';
$string['lastattemptlockdesc'] = 'این گزینه، مقدار پیش‌فرض برای تنظیم مربوط به قفل شدن پس از آخرین تلاش را تعیین می‌کند';
$string['location'] = 'نمایش نوار آدرس';
$string['masteryoverride'] = '«امتیاز قبولی» بر «وضعیت» تقدم دارد';
$string['masteryoverride_help'] = 'اگر فعال باشد و یک «امتیاز قبولی» (mastery score) توسط بستهٔ اسکورم فراهم شده باشد، آنگاه هنگامی که LMSFinish صدا زده می‌شود و یک امتیاز خام تعیین شده است، «وضعیت» با توجه به امتیاز کسب‌شده و امتیاز قبولی تعریف‌شده مجددا محاسبه خواهد شد و هر «وضعیت»ی که توسط اسکورم فراهم شده باشد (حتی «ناکامل» بازنویسی خواهد شد.';
$string['masteryoverridedesc'] = 'این گزینه مقدار پیش‌فرض برای تنظیم «تقدم امتیاز قبولی بر وضعیت» را تعیین می‌کند';
$string['max'] = 'بیشترین امتیاز';
$string['maximumattempts'] = 'تعداد تلاش‌ها';
$string['maximumattempts_help'] = 'با استفاده از این تنظیم می‌توان تعداد دفعات تلاش را محدود کرد. این مسئله فقط در مورد بسته‌های اسکورم ۱٫۲ و AICC قابل اجرا است.';
$string['maximumattemptsdesc'] = 'این گزینه، مقدار پیش‌فرض برای حداکثر تعداد تلاش مجاز در یک فعالیت اسکورم را تعیین می‌کند';
$string['maximumgradedesc'] = 'این گزینه، مقدار پیش‌فرض برای حداکثر نمرهٔ مجاز در یک فعالیت اسکورم را تعیین می‌کند';
$string['menubar'] = 'نمایش نوار منو';
$string['min'] = 'کمترین امتیاز';
$string['missing_attribute'] = 'صفت {$a->attr} در تگ {$a->tag} جا افتاده است';
$string['missing_tag'] = 'تگ {$a->tag} وجود ندارد';
$string['missingparam'] = 'یک مورد اجباری وجود ندارد یا اشتباه است';
$string['mode'] = 'حالت';
$string['modulename'] = 'بستهٔ اسکورم';
$string['modulename_help'] = 'یک بستهٔ اسکورم، شامل یک سری فایل است که مطابق با یک استاندارد مورد توافق برای مفاد آموزشی بسته‌بندی شده‌اند. با استفاده از ماژول فعالیت اسکورم می‌توان بسته‌های اسکورم (SCORM) یا AICC را به‌صورت یک فایل ZIP در درس بارگذاری کرد.

محتوا معمولا بر روی چند صفحه (با امکان حرکت بین صفحات) نمایش داده می‌شود. گزینه‌های متعددی برای نمایش محتوا در یک پنجرهٔ بازشونده، با یک فهرست محتویات، با دکمه‌هایی برای حرکت بین صفحات و ... وجود دارد. فعالیت‌های اسکورم معمولا شامل سوال‌هایی هستند که نمره‌شان در دفتر نمره ثبت می‌شود.

فعالیت‌های اسکورم را می‌توان برای موارد زیر استفاده کرد

* برای نمایش محتوای چندرسانه‌ای و انیمیشن
* به‌عنوان یک ابزار ارزشیابی';
$string['modulename_link'] = 'mod/scorm/view';
$string['modulenameplural'] = 'بسته‌های اسکورم';
$string['nav'] = 'نمایش راهبری';
$string['nav_help'] = 'این تنظیم تعیین می‌کند که آیا دکمه‌های راهبری نمایش داده شوند یا خیر و اینکه کجا نمایش داده شوند.

۳ حالت وجود دارد:

* خیر - دکمه‌های راهبری نمایش داده نمی‌شوند
* زیر محتوا - دکمه‌های راهبری در زیر محتوای بستهٔ اسکورم نمایش داده می‌شوند
* شناور - دکمه‌های راهبری به‌طور شناور و در موقعیت تعیین‌شده در تنظیمات «از راست» و «از بالا» نسبت به بسته نمایش داده می‌شوند';
$string['navdesc'] = 'این تنظیم تعیین می‌کند که آیا راهبری نمایش داده شود یا خیر و اینکه در صورت نمایش چگونه نمایش داده شود.';
$string['navigation'] = 'راهبری';
$string['newattempt'] = 'شروع یک تلاش جدید';
$string['next'] = 'ادامه';
$string['no_attributes'] = 'تگ {$a->tag} باید صفت‌هایی داشته باشد';
$string['no_children'] = 'تگ {$a->tag} باید زیرشاخه داشته باشد';
$string['noactivity'] = 'چیزی برای گزارش وجود ندارد';
$string['noattemptsallowed'] = 'تعداد تلاش‌های مجاز';
$string['noattemptsmade'] = 'تعداد تلاش‌هایی که انجام داده‌اید';
$string['nolimit'] = 'نامحدود';
$string['nomanifest'] = 'مانیفست پیدا نشد';
$string['noprerequisites'] = 'متأسفیم ولی شما پیش‌نیازهای لازم برای دسترسی به این مورد آموزشی را کسب نکرده‌اید';
$string['noreports'] = 'گزارشی برای نمایش وجود ندارد';
$string['normal'] = 'معمولی';
$string['noscriptnoscorm'] = 'مرورگر شما از جاوا اسکریپت پشتیبانی نمی‌کند یا اینکه پشتیبانی از جاوا اسکریپت در آن غیر فعال شده است. این بستهٔ اسکورم ممکن است به درستی نمایش داده نشود یا داده‌ها را ذخیره نکند.';
$string['not_corr_type'] = 'عدم تطابق نوع برای تگ {$a->tag}';
$string['notattempted'] = 'شرکت صورت نگرفته است';
$string['notopenyet'] = 'این فعالیت تا {$a} در دسترس نخواهد بود';
$string['objectives'] = 'اهداف';
$string['optallstudents'] = 'تمام کاربران';
$string['optattemptsonly'] = 'فقط کاربرانی که تلاش‌هایی کرده‌اند';
$string['options'] = 'اختیارات (در بعضی از مرورگرها جلویشان گرفته می‌شود)';
$string['optionsadv'] = 'اختیارات (پیشرفته)';
$string['optionsadv_desc'] = 'در صورت انتخاب بودن، اختیارات مربوط به پنجرهٔ نمایش به عنوان تنظیمات پیشرفته در فرم تنظیمات نمایش داده می‌شود';
$string['optnoattemptsonly'] = 'فقط کاربرانی که هیچ تلاشی نکرده‌اند';
$string['organization'] = 'سازمان';
$string['organizations'] = 'سازمان‌ها';
$string['othersettings'] = 'تنظیمات تکمیلی';
$string['package'] = 'فایل بسته';
$string['package_help'] = 'فایل بسته، یک فایل zip (یا pif) محتوی فایل‌های تعریف درس اسکورم یا AIIC است.';
$string['packagedir'] = 'خطا در سیستم فایلی: ساختن مسیر بسته مقدور نیست';
$string['packagefile'] = 'فایل بسته مشخص نشده است';
$string['packagehdr'] = 'بسته';
$string['packageurl'] = 'آدرس اینترنتی';
$string['packageurl_help'] = 'با استفاده از این قسمت می‌توان به جای انتخاب یک فایل توسط انتخاب‌کنندهٔ فایل، آدرس اینترنتی یک بستهٔ اسکورم را مشخص کرد.';
$string['page-mod-scorm-x'] = 'هر صفحه‌ای از ماژول اسکورم';
$string['pagesize'] = 'اندازهٔ صفحه';
$string['passed'] = 'موفق';
$string['php5'] = 'PHP 5 (کتابخانهٔ محلی DOMXML)';
$string['pluginadministration'] = 'مدیریت اسکورم/AICC';
$string['pluginname'] = 'بستهٔ اسکورم';
$string['popup'] = 'پنجرهٔ جدید';
$string['popupmenu'] = 'در یک منوی باز شونده';
$string['popupopen'] = 'باز کردن بسته در یک پنجرهٔ جدید';
$string['popupsblocked'] = 'به نظر می‌رسد که پنجره‌های بازشونده بلوکه شده‌اند که این امر موجب جلوگیری از نمایش این ماژول اسکورم شده است. لطفا پیش از اینکه دوباره شروع کنید، تنظیمات مرورگرتان را بررسی کنید.';
$string['position_error'] = 'تگ {$a->tag} نمی‌تواند زیرشاخهٔ تگ {$a->parent} باشد';
$string['preferencespage'] = 'ترجیحات فقط مربوط به این صفحه';
$string['preferencesuser'] = 'ترجیحات این گزارش';
$string['prev'] = 'قبلی';
$string['privacy:metadata:attempt'] = 'تعداد تلاش';
$string['protectpackagedownloads_desc'] = 'اگر فعال باشد، آنگاه بسته‌های اسکورم تنها درصورتی‌که کاربر قابلیت course:manageactivities را داشته باشد می‌توانند دانلود شوند. اگر غیرفعال باشد، آنگاه همیشه می‌توان بسته‌های اسکورم را (توسط موبایل یا به‌روش‌های دیگر) دانلود کرد.';
$string['raw'] = 'امتیاز خام';
$string['regular'] = 'مانیفست معمولی';
$string['report'] = 'گزارش';
$string['reportcountallattempts'] = '{$a->nbattempts} تلاش برای {$a->nbusers} کاربر، از بین {$a->nbresults} نتیجه';
$string['reportcountattempts'] = '{$a->nbresults} نتیجه ({$a->nbusers} کاربر)';
$string['reports'] = 'گزارش‌ها';
$string['response'] = 'پاسخ';
$string['result'] = 'نتیجه';
$string['results'] = 'نتایج';
$string['review'] = 'مرور';
$string['reviewmode'] = 'حالت مرور';
$string['rightanswer'] = 'پاسخ درست';
$string['scoes'] = 'اجزای آموزشی';
$string['score'] = 'امتیاز';
$string['scorm:addinstance'] = 'اضافه‌کردن یک بستهٔ اسکورم جدید';
$string['scorm:deleteownresponses'] = 'پاک کردن تلاش‌های خود';
$string['scorm:deleteresponses'] = 'پاک کردن تلاش‌های صورت گرفته در اسکورم';
$string['scorm:savetrack'] = 'دخیرهٔ رد پا';
$string['scorm:skipview'] = 'پرش از روی مرور';
$string['scorm:viewreport'] = 'دیدن گزارش‌ها';
$string['scorm:viewscores'] = 'دیدن امتیازها';
$string['scormclose'] = 'تا';
$string['scormcourse'] = 'درس آموزشی';
$string['scormloggingoff'] = 'ثبت وقایع API غیر فعال است';
$string['scormloggingon'] = 'ثبت وقایع API فعال است';
$string['scormopen'] = 'باز';
$string['scormresponsedeleted'] = 'تلاش‌های کاربران پاک شدند';
$string['scormtype'] = 'نوع اسکورم';
$string['scormtype_help'] = 'این تنظیم تعیین می‌کند که بسته چگونه در درس گنجانده می‌شود. این کار به ۴ صورت ممکن است:

* بستهٔ ارسال شده - بستهٔ اسکورم را می‌توان از طریق انتخاب‌کنندهٔ فایل انتخاب کرد
* مانیفست اسکورم خارجی - می‌توان آدرس اینترنتی manifest.xml را مشخص کرد. توجه: اگر آدرس مربوط به دامنهٔ متفاوتی نسبت به سایت شما می‌باشد، آنگاه گزینهٔ «بستهٔ دریافت شده» انتخاب بهتری خواهد بود. زیرا در غیر این صورت نمره‌ها ذخیره نخواهند شد.
* بستهٔ دریافت شده - می‌توان آدرس اینترنتی بسته را مشخص کرد. بسته از حالت فشرده خارج و به صورت محلی ذخیره، و همراه با به‌روز شدن بستهٔ اسکورم خارجی به‌روز خواهد شد.
* آدرس اینترنتی AICC خارجی - این آدرس (URL)، آدرس اجرا برای یک فعالیت AICC تکی است. یک شبه بسته حول آن ساخته خواهد شد.';
$string['scrollbars'] = 'پنجره امکان scroll خوردن داشته باشد';
$string['search:activity'] = 'بستهٔ اسکورم - اطلاعات فعالیت';
$string['selectall'] = 'انتخاب همه';
$string['selectnone'] = 'انتخاب هیچکدام';
$string['show'] = 'نمایش';
$string['sided'] = 'در کنار';
$string['skipview'] = 'شاگردان از روی صفحهٔ ساختار محتوا بپرند';
$string['skipview_help'] = 'این گزینه تعیین می‌کند که آیا همیشه باید از روی صفحهٔ ساختار محتوا پرید (نمایش داده نشود) یا خیر. اگر بسته فقط شامل اجزای آموزشی باشد، می‌توان همیشه صفحهٔ ساختار محتوا را نادیده گرفت (از روی آن پرید).';
$string['skipviewdesc'] = 'این گزینه تعیین می‌کند که به صورت پیش‌فرض چه زمانی از روی ساختار محتوای یک صفحه پریده شود';
$string['slashargs'] = 'هشدار: اسلش‌دار کردن آرگومان‌ها در این سایت غیر فعال است و اشیاء ممکن است مطابق با انتظار عمل نکنند!';
$string['stagesize'] = 'اندازهٔ صحنه';
$string['stagesize_help'] = 'این دو گزینه، عرض و ارتفاع پنجره/قاب برای اجزای آموزشی را تعیین می‌کنند.';
$string['started'] = 'زمان شروع';
$string['status'] = 'وضعیت';
$string['statusbar'] = 'نمایش نوار وضعیت';
$string['student_response'] = 'پاسخ داده شده';
$string['subplugintype_scormreport'] = 'گزارش';
$string['subplugintype_scormreport_plural'] = 'گزارش‌ها';
$string['suspended'] = 'معلق';
$string['syntax'] = 'خطای نحوی';
$string['tag_error'] = 'تگ ناشناخته ({$a->tag}) با این محتوا: {$a->value}';
$string['time'] = 'زمان';
$string['title'] = 'عنوان';
$string['toc'] = 'فهرست';
$string['too_many_attributes'] = 'تگ {$a->tag} دارای صفت‌های خیلی زیادی است';
$string['too_many_children'] = 'تگ {$a->tag} زیر شاخه‌های خیلی زیادی دارد';
$string['toolbar'] = 'نمایش نوار ابزار';
$string['totaltime'] = 'زمان';
$string['trackcorrectcount'] = 'تعداد صحیح';
$string['trackcorrectcount_help'] = 'تعداد نتایج صحیحی برای سؤال';
$string['trackid'] = 'شناسه';
$string['trackingloose'] = 'هشدار: اطلاعات مربوط به ردیابی در این بسته از دست خواهد رفت!';
$string['trackpattern'] = 'الگو';
$string['trackresponse'] = 'پاسخ';
$string['trackresult'] = 'نتیجه';
$string['tracktime'] = 'زمان';
$string['tracktype'] = 'نوع';
$string['trackweight'] = 'وزن';
$string['type'] = 'نوع';
$string['typeexternal'] = 'مانیفست اسکورم خارجی';
$string['typelocal'] = 'بستهٔ ارسال شده';
$string['typelocalsync'] = 'بستهٔ دریافت شده';
$string['undercontent'] = 'زیر محتوا';
$string['unziperror'] = 'هنگام خارج کردن بسته از حالت فشرده خطایی روی داد';
$string['updatefreq'] = 'به‌روزرسانی خودکار';
$string['updatefreqdesc'] = 'این گزینه سرعت پیش‌فرض به‌روز شدن خودکار فعالیت‌های اسکورم را تعیین می‌کند';
$string['validateascorm'] = 'اعتبار سنجی بسته';
$string['validation'] = 'نتیجهٔ اعتبار سنجی';
$string['validationtype'] = 'این گزینه، کتابخانهٔ DOMXML به کار رفته برای اعتبارسنجی مانیفست اسکورم را تعیین می‌کند. اگر نمی‌دانید که چه چیزی باید در این قسمت وارد کنید، گزینهٔ انتخاب شده را تغییر ندهید.';
$string['value'] = 'مقدار';
$string['versionwarning'] = 'نسخهٔ مانیفست قدیمی‌تر از ۱٫۳ است. هشدار در تگ {$a->tag}.';
$string['viewallreports'] = 'دیدن گزارش‌ها برای {$a} تلاش';
$string['viewalluserreports'] = 'دیدن گزارش‌ها برای {$a} کاربر';
$string['whatgrade'] = 'نمره‌دهی تلاش‌ها';
$string['whatgrade_help'] = 'اگر چند بار تلاش مجاز باشد، این تنظیم تعیین می‌کند که نمره‌ای که در دفتر نمره ثبت می‌شود بالاترین نمره، میانگین نمره‌ها، نمرهٔ اولین یا نمرهٔ آخرین تلاش باشد. گزینهٔ «آخرین تلاش کامل‌شده» شامل تلاش‌هایی که وضعیتشان «ناموفق» است نمی‌شود.

نکاتی پیرامون مدیریت تلاش‌های متعدد:

* گزینهٔ شروع یک تلاش جدید، در صفحهٔ ساختار محتوا و با انتخاب کردن یک مربع در بالای دکمهٔ ورود فراهم می‌شود. بنابراین اگر می‌خواهید که اجازهٔ بیش از یک بار تلاش را بدهید، مطمئن شوید که دسترسی به آن صفحه را فراهم کرده باشید.
* بعضی از بسته‌های اسکورم در مورد تلاش‌های جدید هوشمند هستند، ولی بسیاری نه. یعنی اگر شاگرد دوباره وارد یک تلاش موجود شود، اگر محتوای اسکورم منطق درونی‌ای برای جلوگیری از بازنویسی شدن تلاش‌های قبل نداشته باشد، ممکن است تلاش‌های قبلی بازنویسی شوند. حتی اگر تلاش قبلی «تمام» یا «پشت سر» گذاشته شده باشد.
* گزینه‌های «تحمیل تکمیل»، «تحمیل تلاش جدید» و «قفل شدن پس از آخرین تلاش» نیز مدیریت بیشتری روی تلاش‌های متعدد فراهم می‌کنند.';
$string['whatgradedesc'] = 'این گزینه، نحوهٔ پیش‌فرض نمره‌دهی تلاش‌ها را تعیین می‌کند';
$string['width'] = 'عرض';
$string['window'] = 'پنجره';
