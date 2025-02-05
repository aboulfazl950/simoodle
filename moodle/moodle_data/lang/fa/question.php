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
 * Strings for component 'question', language 'fa', version '4.5'.
 *
 * @package     question
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'عمل';
$string['addanotherhint'] = 'اضافه کردن یک راهنمایی دیگر';
$string['addcategory'] = 'ایجاد طبقه';
$string['addmorechoiceblanks'] = '{no} جای خالی برای انتخاب بیشتر';
$string['adminreport'] = 'گزارش مشکلات احتمالی در پایگاه دادهٔ سؤالات شما.';
$string['advancedsearchoptions'] = 'گزینه های جستجو';
$string['alltries'] = 'همه تلاش‌ها';
$string['answer'] = 'پاسخ';
$string['answers'] = 'پاسخ ها';
$string['answersaved'] = 'پاسخ ذخیره شد';
$string['attemptfinished'] = 'تلاش به پایان رسید';
$string['attemptfinishedsubmitting'] = 'تلاش برای ارسال این مورد به پایان رسید:';
$string['attemptoptions'] = 'گزینه‌های تلاش';
$string['availableq'] = 'قابل استفاده؟';
$string['behaviour'] = 'رفتار';
$string['behaviourbeingused'] = 'رفتار مورد استفاده: {$a}';
$string['byandon'] = '<em>{$a->time}</em> توسط <em>{$a->user}</em>';
$string['cannotcopybackup'] = 'امکان کپی فایل پشتیبان وجود ندارد';
$string['cannotcreate'] = 'نمی‌توان یک ورودی جدید در جدول question_attempts ساخت';
$string['cannotcreatepath'] = 'امکان ایجاد این مسیر وجود ندارد: {$a}';
$string['cannotdeletebehaviourinuse'] = 'امکان حذف رفتار «{$a}» وجود ندارد. در تلاش‌ها از آن استفاده شده است.';
$string['cannotdeleteneededbehaviour'] = 'امکان حذف رفتار سؤال «{$a}» وجود ندارد. بعضی از رفتارها به آن وابسته هستند.';
$string['cannotdeleteqtypeinuse'] = 'نمی‌توانید نوع «{$a}» را حذف کنید. سوال‌هایی در بانک سوال وجود دارند که از این نوع هستند.';
$string['cannotdeleteqtypeneeded'] = 'نمی‌توانید نوع «{$a}» را حذف کنید. انواع سؤال دیگری نصب شده‌اند که به این نوع متکی هستند.';
$string['cannotenable'] = 'امکان ایجاد نوع سؤال {$a} به‌صورت مستقیم وجود ندارد.';
$string['cannotenablebehaviour'] = 'امکان استفاده از رفتار سؤال {$a} به‌صورت مستقیم وجود ندارد. فقط برای استفاده داخلی است.';
$string['cannotfindquestionfile'] = 'در بستهٔ zip فایل اطلاعات سؤال وجود ندارد';
$string['cannothidequestion'] = 'پنهان کردن سؤال مقدور نبود';
$string['cannotimportformat'] = 'متاسفانه امکان ورود از این قالب هنوز پیاده‌سازی نشده است!';
$string['cannotinsertquestion'] = 'درج سؤال جدید نتوانست انجام شود!';
$string['cannotloadquestion'] = 'امکان بارگذاری سؤال وجود ندارد';
$string['cannotopenforwriting'] = 'امکان بازکردن فایل جهت نوشتن وجود ندارد: {$a}';
$string['cannotpreview'] = 'شما نمی‌توانید این سؤالات را پیش‌مشاهده کنید!';
$string['cannotread'] = 'امکان خواندن فایل ورودی وجود ندارد (یا فایل خالی است)';
$string['cannotunhidequestion'] = 'خارج کردن سؤال از حالت پنهان ناموفق بود.';
$string['cannotunzip'] = 'امکان خارج نمودن فایل از حالت فشرده وجود ندارد.';
$string['cannotwriteto'] = 'امکان نوشتن سؤالات صادرشده در فایل {$a} وجود ندارد';
$string['categories'] = 'طبقه‌ها';
$string['category'] = 'طبقه';
$string['categorycurrent'] = 'دستهٔ فعلی';
$string['categorycurrentuse'] = 'استفاده از این دسته';
$string['categorydoesnotexist'] = 'این دسته وجود ندارد';
$string['categoryinfo'] = 'اطلاعات طبقه';
$string['categorymoveto'] = 'ذخیره در دستهٔ';
$string['categorynamecantbeblank'] = 'نام دسته نمی‌تواند خالی باشد.';
$string['changeoptions'] = 'تغییر گزینه‌ها';
$string['changepublishstatuscat'] = 'وضعیت اشتراکی <a href="{$a->caturl}">دستهٔ «{$a->name}»</a>در درس «{$a->coursename}» از <strong>{$a->changefrom} به {$a->changeto}</strong> تغییر پیدا خواهد کرد.';
$string['check'] = 'بررسی';
$string['chooseqtypetoadd'] = 'چه نوع سؤالی می‌خواهید اضافه کنید';
$string['clearwrongparts'] = 'پاک کردن پاسخ‌های نادرست';
$string['clickflag'] = 'علامت زدن سؤال';
$string['clicktoflag'] = 'علامت زدن سؤال برای مراجعهٔ بعدی';
$string['clicktounflag'] = 'برای پاک کردن علامت این سؤال کلیک کنید';
$string['clickunflag'] = 'حذف علامت';
$string['closepreview'] = 'بستن پیش‌نمایش';
$string['combinedfeedback'] = 'بازخورد ترکیبی';
$string['comment'] = 'دیدگاه';
$string['commentormark'] = 'نوشتن نظر یا بازنویسی نمره';
$string['comments'] = 'دیدگاه‌ها';
$string['commentx'] = 'دیدگاه: {$a}';
$string['complete'] = 'کامل';
$string['copy'] = 'کپی شدن از {$a} و تغییر کردن پیوندها.';
$string['correct'] = 'درست';
$string['correctfeedback'] = 'برای هر پاسخ درست';
$string['correctfeedbackdefault'] = 'پاسخ شما صحیح می باشد';
$string['created'] = 'ایجاد شد';
$string['createdby'] = 'ایجاد کنندهٔ سؤال';
$string['createdmodifiedheader'] = 'ایجاد / آخرین تغییر';
$string['createnewquestion'] = 'تعریف یک سؤال جدید ...';
$string['cwrqpfs'] = 'سؤال‌های تصادفی ای که سؤال آن‌ها از زیردسته‌ها انتخاب می‌شود.';
$string['cwrqpfsinfo'] = '<p>حین ارتقاء به مودل ۱٫۹ دسته‌های سؤال به فضاهای جداگانه تقسیم خواهند شد.
وضعیت اشتراکی بعضی از دسته‌های سؤال و سؤال‌های سایت شما تغییر خواهد کرد.
این کار در وضعیت نادری که یک یا چند سؤال «تصادفی» در یک آزمون به صورت انتخاب از بین مخلوطی از
دسته‌های مشترک و غیرمشترک تنظیم شده‌اند (مانند این سایت) لازم است. این وضعیت زمانی رخ می‌دهد که یک سؤال تصادفی
به صورت انتخاب از زیردسته‌ها تنظیم شده باشد و یک یا چند زیردسته وضعیت اشتراکی متفاوتی نسبت به دستهٔ منشأیی که
سؤال تصادفی در آن ایجاد شده است داشته باشند.</p>
<p>در حین ارتقاء به مودل ۱٫۹، وضعیت اشتراکی دسته‌های سؤال زیر، که سؤال‌های «تصادفی» دسته‌های بالاتر
از بین آن‌ها انتخاب می‌شود، به وضعیت اشتراکی یکسانی نسبت به دسته‌ای که سؤال «تصادفی» در آن است
تغییر خواهد کرد. وضعیت اشتراکی دسته‌های زیر تغییر خواهد کرد. سؤال‌هایی که تغییر کنند
در تمام آزمون‌های موجود همچنان کار خواهند کرد تا زمانی که آن‌ها را از این آزمون‌ها حذف نمائید.</p>';
$string['cwrqpfsnoprob'] = 'هیچ دستهٔ سؤالی در سایت شما دچار مشکل «سؤال‌های تصادفی ای که سؤال آن‌ها از زیردسته‌ها انتخاب می‌شود» نشده است.';
$string['decimalplacesingrades'] = 'تعداد رقم‌های اعشاری در نمره‌ها';
$string['defaultfor'] = 'پیش‌فرض برای {$a}';
$string['defaultinfofor'] = 'طبقهٔ پیش‌فرض برای سوال‌های مشترک در «{$a}».';
$string['defaultmark'] = 'نمرهٔ پیش‌فرض';
$string['defaultmarkmustbepositive'] = 'نمرهٔ پیش‌فرض باید مثبت باشد.';
$string['deletecoursecategorywithquestions'] = 'در بانک سؤال، سؤال‌هایی وجود دارد که به این طبقهٔ درسی وابسته است. در صورتی که ادامه دهید، آن‌ها حذف خواهند شد. ممکن است که ابتدا مایل به انتقال آن‌ها از طریق واسط بانک سؤال باشید.';
$string['deletequestioncheck'] = 'آیا از حذف «{$a}» اطمینان دارید؟';
$string['deletequestionscheck'] = 'آیا از حذف این سوال‌ها اطمینان دارید؟ <br /><br />{$a}';
$string['deletingbehaviour'] = 'درحال حذف رفتار سوال «{$a}»';
$string['deletingqtype'] = 'حذف نوع سؤال «{$a}»';
$string['didnotmatchanyanswer'] = '[با هیچ پاسخی مطابقت نداشت]';
$string['disabled'] = 'غیرفعال';
$string['displayoptions'] = 'نمایش گزینه ها';
$string['donothing'] = 'فایل‌ها کپی یا منتقل نشده و پیوندها نیز تغییر داده نشوند.';
$string['editcategories'] = 'ویرایش طبقه‌ها';
$string['editcategories_help'] = 'به جای نگه داشتن همه چیز در یک لیست بزرگ، می‌توان سوال‌ها را طبقه‌بندی کرد.

هر طبقه دارای زمینه‌ای است که تعیین می‌کند سوال‌های مربوط به آن طبقه در کجا می‌توانند استفاده شوند:

* زمینهٔ فعالیت - سوال‌ها فقط در ماژول فعالیتی که در آن تعریف شده‌اند در دسترس هستند
* زمینهٔ درس - سوال‌های این طبقه در تمام ماژول‌های فعالیت درس قابل استفاده هستند
* زمینهٔ طبقهٔ درسی - سوال‌ها در تمام ماژول‌های فعالیت و درس‌های واقع در طبقهٔ درسی در دسترس هستند
* زمینهٔ سیستم مرکزی - سوال‌های این طبقه در تمام درس‌ها و فعالیت‌های سایت قابل استفاده هستند

طبقه‌بندی سوال‌ها هنگام انتخاب سوال‌های تصادفی نیز مهم می‌شود، زیرا سوال‌ها از طبقهٔ تعیین شده‌ای انتخاب می‌شوند.';
$string['editcategories_link'] = 'question/category';
$string['editcategory'] = 'ویرایش دسته';
$string['editingcategory'] = 'در حال ویرایش یک طبقه';
$string['editingquestion'] = 'در حال ویرایش یک سؤال';
$string['editquestion'] = 'ویرایش سؤال';
$string['editquestions'] = 'ویرایش سوال‌ها';
$string['editthiscategory'] = 'ویرایش این طبقه';
$string['emptyxml'] = 'خطای نامعلوم - imsmanifest.xml خالی';
$string['enabled'] = 'فعال';
$string['erroraccessingcontext'] = 'فضا قابل دستیابی نیست';
$string['errordeletingquestionsfromcategory'] = 'مواجهه با خطا هنگام حذف سؤال‌ها از دستهٔ {$a}.';
$string['errorfilecannotbecopied'] = 'خطا: فایل {$a} قابل کپی شدن نیست.';
$string['errorfilecannotbemoved'] = 'خطا: فایل {$a} قابل انتقال نیست.';
$string['errorfileschanged'] = 'خطا: فایل‌هایی که از سؤال‌ها به آن‌ها پیوند داده شده است از زمان نمایش داده شدن فرم تغییر کرده‌اند.';
$string['errormanualgradeoutofrange'] = 'نمرهٔ {$a->grade} برای سؤال «{$a->name}» بین ۰ و {$a->maxgrade} نیست. توضیح و نمره ذخیره نشدند.';
$string['errormovingquestions'] = 'مواجهه با خطا هنگام انتقال سؤال‌ها با شناسه‌های {$a}.';
$string['errorprocessingresponses'] = 'هنگام پردازش پاسخ‌های شما خطائی روی داد.';
$string['errorsavingcomment'] = 'مواجهه با خطا هنگام ذخیرهٔ توضیح داده شده روی سؤال «{$a->name}» در پایگاه داده.';
$string['errorupdatingattempt'] = 'مواجهه با خطا هنگام به‌روزرسانی تلاش {$a->id} در پایگاه داده.';
$string['eventquestioncategorycreated'] = 'دسته بندی سوال ساخته شد';
$string['export'] = 'صدور';
$string['exportasxml'] = 'صدور به عنوان Moodle XML';
$string['exportcategory'] = 'طبقهٔ مورد صدور';
$string['exportfilename'] = 'سوال‌ها';
$string['exportnameformat'] = '%Y%m%d-%H%M';
$string['exportonequestion'] = 'دریافت این سوال در قالب  XML مودل';
$string['exportquestions'] = 'صدور سوال‌ها به فایل';
$string['exportquestions_link'] = 'question/export';
$string['feedback'] = 'بازخورد';
$string['fileformat'] = 'قالب فایل';
$string['filesareacourse'] = 'محل فایل‌های درس';
$string['filesareasite'] = 'محل فایل‌های سایت';
$string['filestomove'] = 'انتقال / کپی فایل‌ها به {$a}؟';
$string['fillincorrect'] = 'درج پاسخ درست در محل';
$string['filterbytags'] = 'فیلترکردن بر اساس برچسب...';
$string['firsttry'] = 'اولین تلاش';
$string['flagged'] = 'علامت‌گذاری شده';
$string['flagthisquestion'] = 'علامت‌گذاری این سوال';
$string['fractionsnomax'] = 'یکی از پاسخ‌ها باید نمرهٔ ٪۱۰۰ داشته باشد تا بتوان نمرهٔ کامل این سؤال را به دست آورد.';
$string['generalfeedback'] = 'بازخورد عمومی';
$string['generalfeedback_help'] = 'پس از اینکه شاگردان سؤال را کامل کردند بازخورد عمومی به آنها نشان داده می‌شود. برخلاف بازخورد اختصاصی که به نوع سؤال و پاسخ ارائه‌شده بستگی دارد، بازخورد عمومی برای همهٔ شاگردان یکسان است.

از بازخورد عمومی می‌توانید برای نمایش کامل‌تری پاسخ سؤال و احتمالا فراهم‌کردن یک پیوند به صفحه‌ای که اطلاعات بیشتری ارائه می‌کند استفاده کنید.';
$string['getcategoryfromfile'] = 'دریافت طبقه از فایل';
$string['getcontextfromfile'] = 'دریافت زمینه از فایل';
$string['hintn'] = 'راهنمایی {no}';
$string['hinttext'] = 'متن راهنمایی';
$string['howquestionsbehave'] = 'چگونگی رفتار سوال‌ها';
$string['howquestionsbehave_help'] = 'نحوه تعامل شاگردان با سوال‌های موجود در آزمون می‌تواند به صورت‌های مختلفی باشد. به طور مثال، ممکن است بخواهید تا پیش از اینکه شاگرد پاسخ تمام سوال‌ها را نداده و کل آزمون را ارائه نکرده است، هیچ یک از سوال‌ها نمره داده نشود و هیچ بازخوردی به شاگرد نمایش داده نشود. عملکرد حالت «بازخورد معوق» به این صورت است. یا اینکه ممکن است بخواهید که شاگردان پاسخ سوال‌ها را یکی یکی بدهند و پس از ارائه پاسخ هر سوال بازخوردی دریافت کنند و اگر پاسخشان درست نبود، بتوانند دوباره و در ازای نمرهٔ کمتری به سؤال پاسخ دهند. حالت «تعاملی با چند بار تلاش» به این صورت است.';
$string['howquestionsbehave_link'] = 'question/behaviour';
$string['ignorebroken'] = 'نادیده گرفتن پیوندهای شکسته';
$string['import'] = 'ورود';
$string['importcategory'] = 'طبقهٔ ورودی';
$string['importcategory_help'] = 'این گزینه، طبقه‌ای که سوال‌های وارد شده در آن قرار می‌گیرند را تعیین می‌کند.

برخی از قالب‌های ورود سوال مانند GIFT و XML مودل، می‌توانند شامل طبقه و اطلاعات زمینه در فایل ورود باشند. برای استفاده شدن آن اطلاعات به جای طبقهٔ انتخاب شده، مربع‌های مناسب باید علامت زده شوند. اگر طبقه‌هایی که در فایل ورود مشخص شده‌اند وجود نداشته باشند، ایجاد خواهند شد.';
$string['importfromupload'] = 'یک فایل را برای وارد کردن انتخاب کنید...';
$string['importingquestions'] = 'ورود {$a} سوال از فایل';
$string['importquestions'] = 'ورود سوال‌ها از فایل';
$string['importquestions_help'] = 'با استفاده از این قابلیت می‌توان سوال‌هایی با قالب‌های مختلف را از طریق فایل متنی وارد کرد. توجه کنید که کدگذاری فایل باید <span dir="ltr" style="display:inline-block;direction:ltr">UTF-8</span> باشد.';
$string['importquestions_link'] = 'question/import';
$string['includesubcategories'] = 'سوال‌های موجود در زیرطبقه‌ها هم نشان داده شوند';
$string['incorrect'] = 'نادرست';
$string['incorrectfeedback'] = 'برای هر پاسخ نادرست';
$string['incorrectfeedbackdefault'] = 'پاسخ شما صحیح نیست';
$string['information'] = 'توضیح';
$string['invalidanswer'] = 'پاسخ ناقص';
$string['invalidcontextinhasanyquestions'] = 'فضای نامعتبری به‌عنوان پارامتر به تابع question_context_has_any_questions فرستاده شده است.';
$string['lastmodifiedby'] = 'آخرین کسی که سؤال را تغییر داده است';
$string['lasttry'] = 'آخرین تلاش';
$string['linkedfiledoesntexist'] = 'فایل پیوند داده شدهٔ {$a} وجود ندارد';
$string['makechildof'] = 'زیرمجموعهٔ «{$a}» شدن';
$string['makecopy'] = 'ساختن کپی';
$string['maketoplevelitem'] = 'انتقال به سطح مبدأ';
$string['manualgradeinvalidformat'] = 'شماره نامعتبر است.';
$string['manuallygraded'] = 'نمرهٔ {$a->mark} به‌طور دستی داده شد به‌همراه توضیح: {$a->comment}';
$string['mark'] = 'نمره';
$string['markedoutof'] = 'نمره از';
$string['markedoutofmax'] = 'نمره از {$a}';
$string['markoutofmax'] = 'نمره {$a->mark} از {$a->max}';
$string['marks'] = 'نمره';
$string['matchgrades'] = 'تطابق نمره‌ها';
$string['matchgrades_help'] = 'نمره‌های وارد شده باید منطبق با لیست ثابتی از نمره‌های معتبر باشند - ۱۰۰، ۹۰، ۸۰، ۷۵، ۷۰، ۶۶٫۶۶۶، ۶۰، ۵۰، ۴۰، ۳۳٫۳۳۳، ۳۰، ۲۵، ۲۰، ۱۶٫۶۶۶، ۱۴٫۲۸۵۷، ۱۲٫۵، ۱۱٫۱۱۱، ۱۰، ۵، ۰ (و همچنین مقادیر منفی). در غیر اینصورت دو انتخاب وجود دارد:

* خطا اگر نمره در لیست نباشد: اگر سؤالی نمره‌ای داشته باشد که در لیست وجود نداشته باشد خطایی نمایش داده می‌شود و آن سؤال وارد نخواهد شد
* نزدیکترین نمره اگر در لیست نباشد: اگر نمره‌ای پیدا شود که منطبق با مقداری از لیست نباشد، نمره به نزدیکترین مقدار موجود در لیست تغییر داده می‌شود';
$string['matchgradeserror'] = 'خطا اگر نمره در لیست نباشد';
$string['matchgradesnearest'] = 'نزدیکترین نمره اگر در لیست نباشد';
$string['missingimportantcode'] = '<u>قسمت مهمی از کد</u> برای این نوع سؤال پیاده‌سازی نشده است: {$a}';
$string['modified'] = 'آخرین تغییر';
$string['move'] = 'منتقل شدن از {$a} و تغییر کردن پیوندها.';
$string['movecategory'] = 'انتقال دسته';
$string['movedquestionsandcategories'] = 'انتقال سؤال‌ها و دسته‌های سؤال از {$a->oldplace} به {$a->newplace}.';
$string['movelinksonly'] = 'فقط محل اشارهٔ پیوند تغییر یابد ولی فایل‌ها منتقل یا کپی نشوند.';
$string['moveq'] = 'انتقال سؤال(ها)';
$string['moveqtoanothercontext'] = 'انتقال سؤال به فضایی دیگر.';
$string['moveto'] = 'انتقال به >>';
$string['movingcategory'] = 'منتقل شدن دسته';
$string['movingcategoryandfiles'] = 'آیا مطمئن هستید که می‌خواهید دستهٔ {$a->name} و همهٔ دسته‌های زیرمجموعه را به فضای مربوط به «{$a->contextto}» منتقل نمائید؟<br />{$a->urlcount} فایل وجود دارد که از سؤال‌های موجود در {$a->fromareaname} به آن(ها) پیوند داده شده است. آیا مایل به کپی یا انتقال این فایل‌ها به {$a->toareaname} هستید؟';
$string['movingcategorynofiles'] = 'آیا مطمئن هستید که می‌خواهید دستهٔ {$a->name} و همهٔ دسته‌های زیرمجموعه را به فضای مربوط به «{$a->contextto}» منتقل نمائید؟';
$string['movingquestions'] = 'انتقال سؤال‌ها و همهٔ فایل‌ها';
$string['movingquestionsandfiles'] = 'آیا مطمئن هستید که می‌خواهید سؤال(های) {$a->questions} را به فضای مربوط به <strong>«{$a->tocontext}»</strong> منتقل نمائید؟<br /><strong>{$a->urlcount} فایل</strong> در {$a->fromareaname} وجود دارد که از این سؤال(ها) به آن(ها) پیوند داده شده است. آیا مایلید که این فایل(ها) را به {$a->toareaname} منتقل، یا در آنجا کپی نمائید؟';
$string['movingquestionsnofiles'] = 'آیا مطمئن هستید که می‌خواهید سؤال(های) {$a->questions} را به فضای مربوط به <strong>«{$a->tocontext}»</strong> منتقل نمائید؟<br />فایلی در {$a->fromareaname} وجود <strong>ندارد</strong> که از این سؤال(ها) به آن پیوند داده شده باشد.';
$string['needtochoosecat'] = 'باید یک دسته را برای انتقال این سؤال به آن انتخاب نمائید و یا اینکه دکمهٔ «لغو» را فشار دهید.';
$string['nopermissionadd'] = 'شما مجوز اضافه کردن سؤال به این قسمت را ندارید.';
$string['noprobs'] = 'مشکلی در پایگاه دادهٔ سؤالات شما وجود ندارد.';
$string['noquestionsinfile'] = 'هیچ سوالی در فایل واردات وجود ندارد';
$string['noresponse'] = '[بدون پاسخ]';
$string['notagfiltersapplied'] = 'هیچ فیلتر برچسبی اعمال نشده‌است';
$string['notanswered'] = 'پاسخ داده نشده';
$string['notenoughanswers'] = 'این نوع از سوال حداقل {$a} جواب نیازمند است';
$string['notenoughdatatoeditaquestion'] = 'نه شناسهٔ سؤال مشخص شده است و نه شناسهٔ دسته و نوع سؤال.';
$string['notenoughdatatomovequestions'] = 'باید شناسهٔ سؤال‌هایی که می‌خواهید منتقل شوند را ارائه نمائید.';
$string['notgraded'] = 'نمره داده نشده';
$string['notshown'] = 'عدم نمایش';
$string['notyetanswered'] = 'هنوز پاسخ داده نشده است';
$string['numqas'] = 'تعداد تلاش‌های صورت گرفته';
$string['numquestions'] = 'تعداد سوال‌ها';
$string['options'] = 'گزینه‌ها';
$string['page-question-category'] = 'صفحه دسته بندی سوال';
$string['page-question-edit'] = 'صفحه ویرایش سوال';
$string['page-question-x'] = 'همه صفحات سوال';
$string['parent'] = 'والد';
$string['parentcategory'] = 'طبقهٔ مادر';
$string['parentcategory_help'] = 'طبقهٔ مادر، طبقه‌ای است که طبقهٔ جدید درون آن قرار خواهد گرفت. «مبدأ» به این معنی است که این طبقه درون هیچ طبقهٔ دیگری قرار ندارد. زمینهٔ طبقه‌ها به صورت پررنگ نشان داده می‌شود.  حداقل یک طبقه از هر زمینه باید وجود داشته باشد.';
$string['parentcategory_link'] = 'question/category';
$string['parsingquestions'] = 'تجزیه فایل و پیدا کردن سوال‌ها.';
$string['partiallycorrect'] = 'پاسخ نیمه درست';
$string['partiallycorrectfeedback'] = 'برای هر پاسخ نمیه درست';
$string['partiallycorrectfeedbackdefault'] = 'پاسخ شما تا حدودی صحیح است';
$string['penaltyfactor'] = 'میزان جریمه';
$string['penaltyforeachincorrecttry'] = 'جریمهٔ هر بار پاسخ نادرست';
$string['permissionedit'] = 'این سؤال را ویرایش کنید';
$string['permissionmove'] = 'این سؤال را منتقل کنید';
$string['permissionsaveasnew'] = 'این سؤال را به صورت یک سؤال جدید ذخیره کنید';
$string['permissionto'] = 'شما می‌توانید:';
$string['previewquestion'] = 'پیش‌نمایش سؤال: {$a}';
$string['published'] = 'به اشتراک گذاشته شده';
$string['qtypeveryshort'] = 'نوع';
$string['question_version'] = 'نسخه سوال';
$string['questionaffected'] = '<a href="{$a->qurl}">سؤال «{$a->name}» ({$a->qtype})</a> در این دستهٔ سؤال‌ها قرار دارد ولی در <a href="{$a->qurl}">آزمون «{$a->quizname}»</a> در درس «{$a->coursename}» نیز در حال استفاده است.';
$string['questionbank'] = 'بانک سؤال';
$string['questionbehaviouradminsetting'] = 'تنظیمات وضعیت سوال';
$string['questionbehavioursorder'] = 'چیدمان وضعیت سوال';
$string['questioncategories'] = 'طبقه‌های سؤال‌ها';
$string['questioncategory'] = 'دستهٔ سؤال‌ها';
$string['questioncatsfor'] = 'دسته‌های سؤال مربوط به «{$a}»';
$string['questiondoesnotexist'] = 'این سؤال وجود ندارد';
$string['questionname'] = 'نام سؤال';
$string['questionnamecopy'] = '{$a} (کپی)';
$string['questionno'] = 'سؤال {$a}';
$string['questionpreviewdefaults'] = 'پیش‌فرض‌های پیش‌نمایش سوال';
$string['questionpreviewdefaults_desc'] = 'این پیش‌فرض‌ها زمانی که کاربری برای اولین بار پیش‌نمایش سوالی را می‌بیند استفاده خواهند شد. هنگامی که کاربران پیش‌نمایش سوالی را مشاهده کنند، ترجیحات شخصی‌شان ذخیره شده و دفعات بعدی مورد استفاده قرار خواهد گرفت.';
$string['questions'] = 'سوال‌ها';
$string['questionsaveerror'] = 'خطاهایی در حین ذخیرهٔ سؤال رخ داد - ({$a})';
$string['questionsmovedto'] = 'سؤال‌هایی که همچنان در حال استفاده هستند به «{$a}» در طبقهٔ درسی مبدأ منتقل شدند.';
$string['questionsrescuedfrom'] = 'سؤال‌هایی که از فضای {$a} ذخیره شده‌اند.';
$string['questionsrescuedfrominfo'] = 'این سؤال‌ها (که برخی از آن‌ها ممکن است پنهان باشند) هنگامی که فضای {$a} حذف شد ذخیره شدند زیرا همچنان توسط بعضی از آزمون‌ها یا سایر فعالیت‌ها در حال استفاده بودند.';
$string['questiontext'] = 'متن سؤال';
$string['questiontype'] = 'نوع سؤال';
$string['questionuse'] = 'استفاده از سؤال در این دسته';
$string['questionx'] = 'سؤال {$a}';
$string['requiresgrading'] = 'نمره‌دهی لازم است';
$string['responsehistory'] = 'تاریخچه پاسخ‌ها';
$string['restart'] = 'شروع دوباره';
$string['restartwiththeseoptions'] = 'شروع دوباره با این تنظیمات';
$string['reviewresponse'] = 'مرور پاسخ';
$string['rightanswer'] = 'پاسخ درست';
$string['rightanswer_help'] = 'متن به‌طور خودکار تولیدشده‌ای از پاسخ درست را نمایش می‌دهد. این متن ممکن است محدودیت‌هایی داشته باشد، بنابراین شاید ترجیح بدهید که راه‌حل درست را در بازخورد عمومی سؤال توضیح بدهید و این گزینه را غیرفعال کنید.';
$string['save'] = 'ذخیره';
$string['savechangesandcontinueediting'] = 'ذخیره تغییرات و ادامه ویرایش';
$string['saved'] = 'ذخیره شد: {$a}';
$string['selectacategory'] = 'یک طبقه را انتخاب کنید:';
$string['selectaqtypefordescription'] = 'با انتخاب هر یک از انواع مختلف سؤال، توصیف آن را خواهید دید.';
$string['selectcategoryabove'] = 'یکی از دسته‌های بالا را انتخاب کنید';
$string['settingsformultipletries'] = 'تنظیمات مربوط به چندبار شرکت در آزمون';
$string['shareincontext'] = 'به اشتراک گذاشته شدن در فضای مربوط به «{$a}»';
$string['showhidden'] = 'سوال‌های قدیمی هم نشان داده شوند';
$string['showmarkandmax'] = 'نمایش نمره و سقف نمره';
$string['showmaxmarkonly'] = 'فقط نمایش سقف نمره';
$string['shown'] = 'نمایش';
$string['shownumpartscorrect'] = 'نمایش تعداد پاسخ‌های درست';
$string['shownumpartscorrectwhenfinished'] = 'نمایش تعداد پاسخ‌های درست بعد از اتمام سؤال';
$string['showquestiontext'] = 'نشان داده متن سوال در لیست سوال‌ها';
$string['specificfeedback'] = 'بازخورد اختصاصی';
$string['specificfeedback_help'] = 'بازخوردی که به پاسخ ارائه‌شده توسط شاگرد بستگی دارد.';
$string['started'] = 'شروع شد';
$string['state'] = 'وضعیت';
$string['step'] = 'قدم';
$string['stoponerror'] = 'توقف در صورت بروز خطا';
$string['stoponerror_help'] = 'این تنظیم تعیین می‌کند که در صورت بروز خطا فرآیند ورود متوقف شود (که در نتیجه هیچ سؤالی وارد نخواهد شد) یا اینکه سوال‌هایی شامل خطا هستند نادیده گرفته شوند و سوال‌های معتیر وارد شوند.';
$string['submit'] = 'ارسال';
$string['submitandfinish'] = 'ثبت و اتمام';
$string['submitted'] = 'ارائه: {$a}';
$string['tagarea_question'] = 'سوال‌ها';
$string['technicalinfo'] = 'اطلاعات فنی';
$string['technicalinfoquestionsummary'] = 'خلاصه سوال: {$a}';
$string['technicalinforesponsesummary'] = 'خلاصه پاسخ: {$a}';
$string['technicalinforightsummary'] = 'خلاصه پاسخ های درست: {$a}';
$string['technicalinfostate'] = 'وضعیت سوال {$a}';
$string['technicalinfovariant'] = 'تنوع سوال: {$a}';
$string['tofilecategory'] = 'نوشتن دسته در فایل';
$string['tofilecontext'] = 'نوشتن فضا در فایل';
$string['uninstallqtype'] = 'حذف این نوع سؤال.';
$string['unknown'] = 'نامعلوم';
$string['unknownbehaviour'] = 'وضعیت نامشخص: {$a}';
$string['unknownquestion'] = 'سوال نامشخص: {$a}.';
$string['unknownquestioncatregory'] = 'دسته بندی سوال نامشخص: {$a}';
$string['unknownquestiontype'] = 'نوع سؤال ناشناخته است: {$a}.';
$string['unpublished'] = 'به اشتراک گذاشته نشده';
$string['unusedcategorydeleted'] = 'این طبقه حذف شد. زیرا بعد از حذف شدن درس، سؤال‌هایش دیگر استفاده نمی‌شدند.';
$string['updatedisplayoptions'] = 'به روز کردن گزینه‌های نمایش';
$string['upgradeproblemcategoryloop'] = 'هنگام ارتقاء دسته‌های سؤال مشکلی تشخیص داده شد. در یاختار درختی دسته‌ها حلقه‌ای وجود دارد. شناسهٔ دستهٔ مشکل دار {$a} است.';
$string['upgradeproblemcouldnotupdatecategory'] = 'دستهٔ سؤال‌های {$a->name} ({$a->id}) قابل به‌روزرسانی نیست.';
$string['upgradeproblemunknowncategory'] = 'هنگام ارتقاء دسته‌های سؤال مشکلی تشخیص داده شد. دستهٔ {$a->id} زیرمجموعهٔ دستهٔ {$a->parent} است که وجود ندارد. برای حل مشکل محل دسته تغییر داده شد.';
$string['version_selection'] = 'نسخه {$a->version}';
$string['whethercorrect'] = 'درستی پاسخ';
$string['whethercorrect_help'] = 'هم شامل توصیفات متنی «درست»، «نیمه درست» یا «نادرست» می‌شود و هم شامل هرگونه استفاده از رنگ‌های متفاوت که همان اطلاعات را می‌رساند.';
$string['withselected'] = 'رفتار با موارد انتخاب شده';
$string['xoutofmax'] = '{$a->mark} از {$a->max}';
$string['yougotnright'] = 'شما به درستی {$a->num} گزینه را انتخاب کرده‌اید';
$string['youmustselectaqtype'] = 'باید نوع سؤال را انتخاب کنید.';
$string['yourfileshoulddownload'] = 'دریافت فایل صدور باید به‌زودی شروع شود. اگر نشد، لطفاً روی <a href="{$a}">این پیوند</a> کلیک نمائید. برای حل مشکل مبدأ تغییر داده شد.';
