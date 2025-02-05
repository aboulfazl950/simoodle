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
 * Strings for component 'assign', language 'fa', version '4.5'.
 *
 * @package     assign
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityattachments'] = 'ضمیمه‌های فعالیت تکلیف';
$string['activitydate:submissionsdue'] = 'مهلت:';
$string['activitydate:submissionsopen'] = 'باز می‌شود:';
$string['activitydate:submissionsopened'] = 'باز شده:';
$string['activityeditor'] = 'فعالیت';
$string['activityeditor_help'] = 'اقداماتی که دوست دارید شاگرد برای این تکلیف انجام دهد. این فقط در صفحه ارسال و تحویل تکلیف نشان داده می‌شود که در آن دانش آموزان تکالیف خود را ویرایش و ارسال می کنند.';
$string['activityoverview'] = 'شما تکلیف‌هایی دارید که نیازمند توجه هستند';
$string['addattempt'] = 'اجازه‌دادن یک بار تلاش دیگر';
$string['addnewattempt'] = 'اضافه‌کردن یک تلاش جدید';
$string['addnewattempt_help'] = 'با این کار یک تکلیف خالی جدید برای کار ایجاد می شود.';
$string['addnewattemptfromprevious'] = 'اضافه‌کردن یک تلاش جدید بر اساس ارسال قبلی';
$string['addnewgroupoverride'] = 'اضافه‌کردن بازنویسی گروه';
$string['addnewuseroverride'] = 'اضافه‌کردن بازنویسی کاربر';
$string['addsubmission'] = 'تحویل تکلیف';
$string['addsubmission_help'] = 'شما هنوز چیزی تحویل نداده‌اید';
$string['allocatedmarker'] = 'مصحح منسوب‌شده';
$string['allocatedmarker_help'] = 'مصحح منسوب‌شده به این تحویل';
$string['allowsubmissions'] = 'به کاربر اجازه دهید تا ارسالی برای این تکلیف را ادامه دهد.';
$string['allowsubmissionsfromdate'] = 'مجاز بودن تحویل از';
$string['allowsubmissionsfromdate_help'] = 'اگر فعال باشد، شاگردان تا پیش از این تاریخ قادر به تحویل تکلیف نخواهند بود. اگر غیر فعال باشد، شاگردان می‌توانند از همین حالا اقدام به تحویل تکلیف کنند.';
$string['allowsubmissionsshort'] = 'مجاز به تحویل دادن تکلیف شود';
$string['alwaysshowdescription'] = 'توضیح تکلیف همواره نمایش داده شود';
$string['alwaysshowdescription_help'] = 'اگر غیر فعال باشد، توضیحی که در بالا برای تکلیف نوشته شده است تنها پس از تاریخ «مجاز بودن تکلیف از» توسط شاگردان قابل مشاهده خواهد بود.';
$string['applytoteam'] = 'اعمال نمره و بازخورد به کل گروه';
$string['assign:addinstance'] = 'اضافه کردن یک تکلیف جدید';
$string['assign:exportownsubmission'] = 'صدور تکلیف تحویل داده شده خود';
$string['assign:grade'] = 'تصحیح تکلیف';
$string['assign:grantextension'] = 'تمدید مهلت';
$string['assign:manageallocations'] = 'نشانگرهای اختصاص داده شده به موارد ارسالی را مدیریت کنید';
$string['assign:managegrades'] = 'نقد و بررسی و انتشار نمرات';
$string['assign:manageoverrides'] = 'مدیریت لغو تکالیف را مدیریت کنید';
$string['assign:releasegrades'] = 'منتشرکردن نمره‌ها';
$string['assign:revealidentities'] = 'آشکار کردن هویت شاگردان';
$string['assign:reviewgrades'] = 'مرورکردن نمره‌ها';
$string['assign:submit'] = 'تحویل تکلیف';
$string['assign:view'] = 'دیدن تکلیف';
$string['assign:viewblinddetails'] = 'هنگامی که ارسال های ناشناس فعال هستند ، هویت دانش آموزان را مشاهده کنید';
$string['assign:viewgrades'] = 'دیدن نمره‌ها';
$string['assignfeedback'] = 'پلاگین بازخورد';
$string['assignfeedbackpluginname'] = 'پلاگین بازخورد';
$string['assignmentduedigestitem'] = '<strong>{$a->assignmentname}</strong> در درس {$a->coursename}<br/>
<strong>موعد سررسید: {$a->duetime}</strong><br/>
<a href ="{$a->url}" aria-label="Go to {$a->assignmentname}">رفتن به فعالیت</a>';
$string['assignmentduesoonhtml'] = '<p>سلام {$a->firstname}،</p>
<p>تکلیف <strong>{$a->assignmentname}</strong> در درس {$a->coursename} به زودی موعد سر رسید آن می‌رسد.< /p>
<p><strong>سررسید: {$a->duedate}</strong></p>
<p><a href="{$a->url}">رفتن به فعالیت</a> </p>';
$string['assignmentisdue'] = 'موعد تحویل گذشته است';
$string['assignmentmail'] = '{$a->grader} بازخوردی بر روی تکلیفی که برای «{$a->assignment}» تحویل داده‌اید نوشته است.

بازخورد را می‌توانید در ادامهٔ پاسختان ببینید:

    {$a->url}';
$string['assignmentmailhtml'] = '<p>{$a->grader} بازخوردی بر روی تکلیفی که برای «<i>{$a->assignment}</i>» تحویل داده‌اید نوشته است.</p>
<p>بازخورد را می‌توانید در ادامهٔ <a href="{$a->url}">پاسختان</a> ببینید.</p>';
$string['assignmentmailsmall'] = '{$a->grader} بازخوردی بر روی تکلیفی که برای «{$a->assignment}» تحویل داده‌اید نوشته است. بازخورد را می‌توانید در ادامهٔ پاسختان ببینید.';
$string['assignmentname'] = 'نام تکلیف';
$string['assignmentoverduehtml'] = '<p>سلام {$a->firstname}،</p>
<p><strong>{$a->assignmentname}</strong> در درس {$a->coursename} در <strong>{ $a->duedate}</strong>.</p>
<p>شاید همچنان بتوانید تکلیف خود را ارسال کنید{$a->cutoffsnippet}، اما ارسال شما به‌عنوان دارای تأخیر علامت‌گذاری می‌شود.</
p> <p ><a href="{$a->url}">به فعالیت بروید</a></p>';
$string['assignmentplugins'] = 'پلاگین‌های تکلیف';
$string['assignmentsperpage'] = 'تعداد تکلیف در هر صفحه';
$string['assignsubmission'] = 'پلاگین تحویل';
$string['assignsubmissionpluginname'] = 'پلاگین تحویل';
$string['assigntimeleft'] = 'زمان باقی‌مانده';
$string['attempthistory'] = 'تلاش‌های قبلی';
$string['attemptnumber'] = '';
$string['attemptreopenmethod'] = 'مجاز شدن تلاش مجدد';
$string['attemptreopenmethod_help'] = 'تعیین می‌کند که تلاش مجدد شاگردان در چه صورتی مجاز می‌شود. گزینه‌های موجود عبارتند از: <ul><li>هیچ وقت - تلاش مجدد شاگردان مجاز نخواهد شد.</li><li>دستی - شاگردان می‌توانند توسط یکی از اساتید مجاز به تلاش مجدد شوند.</li><li>به‌طور خودکار تا قبول شدن - تلاش مجدد تا زمانی که شاگردان نمرهٔ قبولی [که در دفتر نمره (در قسمت تنظیمات دفتر نمره) برای این تکلیف تعیین شده است] را کسب کنند به‌طور خودکار مجاز خواهد شد.</li></ul>';
$string['attemptreopenmethod_manual'] = 'دستی';
$string['attemptreopenmethod_none'] = 'هیچ‌وقت';
$string['attemptreopenmethod_untilpass'] = 'به‌طور خودکار تا قبول شدن';
$string['attemptsettings'] = 'تنظیمات تلاش';
$string['availability'] = 'دسترسی';
$string['backtoassignment'] = 'بازگشت به تکالیف';
$string['batchoperationconfirmaddattempt'] = 'آیا تلاش مجدد برای تکلیف انتخاب شده مجاز است؟';
$string['batchoperationconfirmdownloadselected'] = 'دریافت تحویل‌های انتخاب‌شده؟';
$string['batchoperationconfirmlock'] = 'تکلیف های انتخاب شده قفل شود؟';
$string['batchoperationconfirmremovesubmission'] = 'تکلیف های انتخاب شده حذف شود؟';
$string['batchoperationconfirmreverttodraft'] = 'تکلیف های ارسالی برای پیش نویس برگردانده می شود؟';
$string['batchoperationconfirmsetmarkingallocation'] = 'تخصیص علامت گذاری برای همه موارد تکلیف های انتخاب شده تنظیم شود؟';
$string['batchoperationconfirmsetmarkingworkflowstate'] = 'تعیین وضعیت گردش‌کار تصحیح برای تمام تحویل‌های انتخاب‌شده؟';
$string['batchoperationconfirmunlock'] = 'تکلیف های انتخاب شده باز شود؟';
$string['batchoperationlock'] = 'تکلیف‌ها قفل شوند';
$string['batchoperationreverttodraft'] = 'تکالیف را به پیش نویس برگردانید';
$string['batchoperationsdescription'] = 'با موارد انتخاب شده...';
$string['batchoperationunlock'] = 'قفل تکلیف‌ها باز شود';
$string['batchsetallocatedmarker'] = 'انتساب مصحح برای {$a} کاربر انتخاب‌شده';
$string['batchsetmarkingworkflowstateforusers'] = 'تعیین وضعیت گردش‌کار تصحیح برای {$a} کاربر انتخاب‌شده.';
$string['blindmarking'] = 'نمره‌دهی ناشناس';
$string['blindmarking_help'] = 'نمره‌دهی ناشناس، هویت شاگردان را از دید نمره دهنده پنهان می‌کند. تنظیمات مربوط به نمره‌دهی ناشناس پس از اینکه اولین شاگرد تکلیف را تحویل داد یا اولین نمره به تکلیفی داده شد غیر قابل تغییر خواهد شد.';
$string['blindmarkingenabledwarning'] = 'ارسال های ناشناس برای این فعالیت فعال است.';
$string['calendardue'] = 'موعد {$a} سر رسیده است';
$string['calendargradingdue'] = 'زمان نمره‌دهی {$a}  است';
$string['changefilters'] = 'تغییر فیلترها';
$string['changeuser'] = 'تغییر کاربر';
$string['choosegradingaction'] = 'عملیات نمره دهی';
$string['choosemarker'] = 'انتخاب کنید...';
$string['chooseoperation'] = 'عملیات را انتخاب کنید';
$string['clickexpandreviewpanel'] = 'برای گسترش پانل بررسی کلیک کنید';
$string['collapsegradepanel'] = 'جمع کردن پانل نمره';
$string['collapsereviewpanel'] = 'جمع کردن پانل نظر';
$string['comment'] = 'نظر';
$string['completiondetail:submit'] = 'انجام یک ارسال';
$string['completionsubmit'] = 'شاگردان برای تکمیل این فعالیت باید آن را تحویل دهند';
$string['configshowrecentsubmissions'] = 'همه می‌توانند اطلاعیه‌های مربوط به تحویل داده شدن تکلیف را در گزارش‌های فعالیت‌های اخیر ببینند.';
$string['confirmbatchgradingoperation'] = 'آیا مطمئن هستید که می خواهید برای {$a->count} دانش آموز {$a->operation} انجام دهید؟';
$string['confirmsubmission'] = 'آیا مطمئن هستید که می‌خواهید تکلیفتان را برای تصحیح تحویل دهید؟ پس از تحویل قادر به ایجاد تغییر در تکلیف نخواهید بود.';
$string['confirmsubmissionheading'] = 'تأیید تحویل';
$string['conversionexception'] = 'تبدیل تکلیف ناموفق بود. خطای دریافتی: {$a}';
$string['couldnotconvertgrade'] = 'تبدیل نمرهٔ تکلیف برای کاربر {$a} ناموفق بود.';
$string['couldnotconvertsubmission'] = 'تبدیل تحویل تکلیف برای کاربر {$a} ناموفق بود.';
$string['couldnotcreatecoursemodule'] = 'ماژول دوره ایجاد نشد.';
$string['couldnotcreatenewassignmentinstance'] = 'نمونه انتساب جدید ایجاد نشد.';
$string['couldnotfindassignmenttoupgrade'] = 'تکلیف نمونه جدید را ساخته نشد';
$string['currentassigngrade'] = 'نمره جاری در تکلیف';
$string['currentattempt'] = 'این تلاش {$a} ام است.';
$string['currentattemptof'] = 'این تلاش {$a->attemptnumber} ام است (در کل {$a->maxattempts} تلاش مجاز است).';
$string['currentgrade'] = 'نمرهٔ فعلی در دفتر نمره';
$string['cutoffdate'] = 'تاریخ عدم پذیرش';
$string['cutoffdate_help'] = 'اگر تعیین شده باشد، امکان تحویل تکلیف پس از این تاریخ وجود نخواهد داشت. مگر اینکه مهلت تحویل تکلیف تمدید شود.';
$string['cutoffdatecolon'] = 'تاریخ عدم پذیرش: {$a}';
$string['cutoffdatefromdatevalidation'] = 'تاریخ عدم پذیرش باید بعد از تاریخ مجاز بودن تکلیف باشد.';
$string['cutoffdatevalidation'] = 'تاریخ عدم پذیرش نمی‌تواند قبل از مهلت تحویل باشد.';
$string['defaultsettings'] = 'تنظیمات پیش فرض تکالیف';
$string['defaultsettings_help'] = 'این تنظیمات به صورت پیش فرض برای تمامی تکالیف جدید تعرف شده است';
$string['defaultteam'] = 'گروه پیش‌فرض';
$string['deleteallsubmissions'] = 'پاک کردن تمام تحویل‌ها';
$string['description'] = 'توضیح تکلیف';
$string['disabled'] = 'غیرفعال';
$string['downloadall'] = 'دریافت تمام تکلیف‌های تحویل داده شده';
$string['downloadasfolders'] = 'دریافت پاسخ‌های تکلیف در پوشه‌ها';
$string['downloadselectedsubmissions'] = 'دریافت تحویل‌های انتخاب‌شده';
$string['duedate'] = 'مهلت تحویل';
$string['duedate_help'] = 'موعد تحویل تکلیف در این زمان است. تحویل تکلیف پس از این تاریخ هم همچنان مجاز خواهد بود ولی تکلیف‌هایی که پس از این تاریخ تحویل داده شوند به عنوان دیر تحویل داده شده مشخص می‌شوند. برای جلوگیری از تحویل تکلیف پس از یک زمان خاص، تاریخ عدم پذیرش را تعیین کنید.';
$string['duedatecolon'] = 'مهلت تحویل: {$a}';
$string['duedatevalidation'] = 'مهلت تحویل باید بعد از تاریخ مجاز بودن تحویل باشد.';
$string['editattemptfeedback'] = 'ویرایش نمره و بازخورد برای تلاش شماره {$a}.';
$string['editingstatus'] = 'وضعیت ویرایش';
$string['editoverride'] = 'ویرایش بازنویسی';
$string['editsubmission'] = 'ویرایش پاسخ';
$string['editsubmission_help'] = 'شما می‌توانید هنوز پاسخ خود را تحویل/تغییر دهید';
$string['enabled'] = 'فعال';
$string['errornosubmissions'] = 'فایلی برای دانلود وجود ندارد';
$string['eventassessablesubmitted'] = 'یک مورد برای تحویل ثبت شده است.';
$string['eventfeedbackupdated'] = 'بازخورد به‌روز شد';
$string['eventfeedbackviewed'] = 'بازخورد مشاهده شد';
$string['eventgradingformviewed'] = 'فرم نمره‌دهی مشاهده شد';
$string['eventgradingtableviewed'] = 'جدول نمره‌دهی مشاهده شد';
$string['eventidentitiesrevealed'] = 'هویت‌ها افشا شدند.';
$string['eventmarkerupdated'] = 'مصحح منسوب‌شده به‌روز شد.';
$string['eventoverrideupdated'] = 'بازنویسی تکلیف به‌روز شد';
$string['eventremovesubmissionformviewed'] = 'تاییدیهٔ حذف تکلیف تحویل داده شده، مشاهده شد.';
$string['eventrevealidentitiesconfirmationpageviewed'] = 'صفحهٔ تایید افشای هویت‌ها مشاهده شد.';
$string['eventsubmissioncreated'] = 'تحویل کار ایجاد شد.';
$string['eventsubmissionformviewed'] = 'فرم تحویل مشاهده شد.';
$string['eventsubmissiongraded'] = 'تکلیف ارائه‌شده نمره داده شد.';
$string['eventsubmissionstatusupdated'] = 'وضعیت ارسال به روز شده است.';
$string['eventsubmissionstatusviewed'] = 'وضعیت تحویل مشاهده شد.';
$string['eventsubmissionupdated'] = 'تحویل به‌روز شد.';
$string['eventsubmissionviewed'] = 'تحویل مشاهده شد.';
$string['extensionduedate'] = 'مهلت تمدید شده';
$string['extensionnotafterduedate'] = 'تاریخ تمدید باید پس از مهلت تحویل باشد';
$string['extensionnotafterfromdate'] = 'تاریخ تمدید باید پس از تاریخ مجاز بودن تحویل باشد';
$string['feedback'] = 'بازخورد';
$string['feedbackavailablesmall'] = '{$a->username} برای تکلیف {$a->assignment} بازخورد ثبت کرده است';
$string['feedbackplugin'] = 'پلاگین بازخورد';
$string['feedbackpluginforgradebook'] = 'پلاگین بازخوردی که نظرات را در دفتر نمره قرار خواهد داد';
$string['feedbackplugins'] = 'پلاگین‌های بازخورد';
$string['feedbacksettings'] = 'تنظیمات بازخورد';
$string['feedbacktypes'] = 'روش‌های بازخورد';
$string['filesubmissions'] = 'تحویل فایل';
$string['filter'] = 'فیلتر';
$string['filterdraft'] = 'پیش‌نویس';
$string['filtergrantedextension'] = 'تمدید شده‌ها';
$string['filternone'] = 'فیلتری اعمال نشود';
$string['filternotsubmitted'] = 'تحویل داده نشده';
$string['filterrequiregrading'] = 'در انتظار نمره';
$string['filtersubmitted'] = 'تحویل داده شده';
$string['gradechangessaveddetail'] = 'تغییرات اعمال‌شده بر نمره و بازخورد ذخیره شدند';
$string['graded'] = 'نمره داده شده است';
$string['gradedby'] = 'نمره دهنده';
$string['gradedon'] = 'تاریخ ثبت نمره';
$string['gradeitem:submissions'] = 'تحویل کار';
$string['gradeoutof'] = 'نمره از {$a}';
$string['gradeoutofhelp'] = 'نمره';
$string['gradeoutofhelp_help'] = 'نمره تکلیف شاگرد را در این قسمت وارد کنید. می‌توانید از اعشار هم استفاده کنید.';
$string['gradersubmissionupdatedhtml'] = '{$a->username} تکلیف تحویل داده شدهٔ <i>«{$a->assignment}»</i> خود را تغییر داده است<br /><br />
پاسخ جدید <a href="{$a->url}">در وب‌گاه قابل دسترسی است</a>.';
$string['gradersubmissionupdatedtext'] = '{$a->username} تکلیف تحویل داده شدهٔ «{$a->assignment}» خود را تغییر داده است

پاسخ جدید در آدرس زیر قابل دسترسی است:

    {$a->url}';
$string['gradeuser'] = 'نمره دادن به {$a}';
$string['grading'] = 'نمره دهی';
$string['gradingchangessaved'] = 'تغییراتی که در نمره‌ها داده‌اید ذخیره شدند';
$string['gradingduedate'] = 'برای نمره دهی یادآوریم کن تا';
$string['gradingdueduedatevalidation'] = 'یادآوری برای نمره‌دهی نمی‌تواند زودتر از مهلت تحویل باشد.';
$string['gradingduefromdatevalidation'] = 'یادآوری برای نمره‌دهی نمی‌تواند زودتر از تاریخ مجاز برای تحویل باشد';
$string['gradingmethodpreview'] = 'معیارهای نمره‌دهی';
$string['gradingoptions'] = 'اختیارات';
$string['gradingstatus'] = 'وضعیت تصحیح';
$string['gradingstudent'] = 'نمره‌دادن به شاگرد';
$string['gradingsummary'] = 'خلاصه نمره‌دهی';
$string['grantextension'] = 'تمدید مهلت';
$string['grantextensionforusers'] = 'تمدید مهلت تکلیف برای {$a} شاگرد';
$string['groupoverrides'] = 'بازنویسی‌های مربوط به گروه‌ها';
$string['groupoverridesdeleted'] = 'بازنویسی مربوط به گروه‌ها پاک شد';
$string['groupsnone'] = 'هیچ گروهی در این درس وجود ندارد';
$string['groupsubmissionsettings'] = 'تنظیمات تحویل گروهی';
$string['hiddenuser'] = 'شاگرد شماره';
$string['hidegrader'] = 'پنهان کردن هویت تصحیح کننده از شاگردان';
$string['hideshow'] = 'پنهان/نمایش';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['introattachments'] = 'فایل‌های کمکی';
$string['introattachments_help'] = 'می‌توان چند فایل‌های کمکی (مثل فرم پاسخنامه) برای استفاده در تکلیف اضافه کرد. در این صورت، پیوند دریافت فایل‌ها در صفحهٔ تکلیف و در زیر توضیح تکلیف نمایش داده خواهد شد.';
$string['invalidgradeforscale'] = 'نمرهٔ ارائه شده برای این مقیاس معتبر نبود';
$string['lastmodifiedgrade'] = 'آخرین تغییر (نمره)';
$string['lastmodifiedsubmission'] = 'آخرین تغییر (تحویل)';
$string['latesubmissions'] = 'تحویل‌های دیر (با تأخیر)';
$string['latesubmissionsaccepted'] = 'تا  {$a} مجاز است.';
$string['loading'] = 'بارگیری...';
$string['locksubmissions'] = 'تکلیف‌ها قفل شوند';
$string['manageassignfeedbackplugins'] = 'مدیریت پلاگین‌های بازخورد تکلیف';
$string['manageassignsubmissionplugins'] = 'مدیریت پلاگین‌های تحویل تکلیف';
$string['markerfilter'] = 'فیلتر مصحح';
$string['markerfilternomarker'] = 'بدون مصحح';
$string['markingallocation'] = 'استفاده از انتساب مصحح';
$string['markingallocation_help'] = 'اگر به‌همراه گردش‌کار تصحیح فعال شده باشد، می‌توان به شاگردان خاص مصحح اختصاص داد.';
$string['markingworkflow'] = 'استفاده از گردش‌کار تصحیح';
$string['markingworkflow_help'] = 'اگر فعال باشد، نمرات پیش از اینکه براش شاگردان منتشر شود، از یک‌سری مرحله می‌گذرند. این‌کار اجازه می‌دهد که نمره‌دادن در چندین مرحله انجام پذیرد، ولی نمره‌ها به‌طور همزمان برای تمام شاگردان منتشر شود.';
$string['markingworkflowstate'] = 'وضعیت گردش‌کار تصحیح';
$string['markingworkflowstate_help'] = 'وضعیت‌های ممکن برای گردش‌کار (بسته به مجوزهای شما) می‌تواند این موارد باشد:

* نمره داده‌نشده - مصحح هنوز شروع نکرده است
* درحال تصحیح - مصحح شروع کرده است ولی هنوز تمام نکرده است
* نمره‌دهی کامل شده - مصحح تمام کرده است ولی ممکن است بخواهد برای بررسی/اصلاح دوباره برگردد
* درحال مرور - نمره‌دهی برای بررسی کیفیت تصحیح در اختیار استاد مسئول است
* آمادهٔ انتشار - استاد مسئول از تصحیح راضی است ولی پیش از اینکه نتایج را در اختیار شاگردان قرار دهد صبر می‌کند
* منتشر‌شده - شاگرد می‌تواند نمره/بازخورد را ببیند';
$string['markingworkflowstateinmarking'] = 'درحال تصحیح';
$string['markingworkflowstateinreview'] = 'درحال بازبینی';
$string['markingworkflowstatenotmarked'] = 'نمره داده نشده';
$string['markingworkflowstatereadyforrelease'] = 'آمادهٔ انتشار';
$string['markingworkflowstatereadyforreview'] = 'نمره‌دهی کامل شده';
$string['markingworkflowstatereleased'] = 'منتشر‌شده';
$string['maxattempts'] = 'حداکثر تعداد تلاش';
$string['maxattempts_help'] = 'حداکثر تعداد دفعاتی که یک شاگرد می‌تواند تکلیف را تحویل دهد. بعد از این تعداد تحویل، شاگرد دیگر نمی‌تواند باز هم تکلیف را تحویل دهد.';
$string['maxperpage'] = 'حداکثر تعداد تکلیف در هر صفحه';
$string['maxperpage_help'] = 'حداکثر تعداد تکلیف‌هایی که یک نمره‌دهنده می‌تواند در صفحهٔ نمره‌دهی به تکالیف ببیند.  برای اجتناب از timeout در درس‌هایی که ثبت‌نام‌های خیلی زیادی دارند مفید است.';
$string['messageprovider:assign_notification'] = 'تذکرات تکالیف';
$string['modulename'] = 'تکلیف';
$string['modulename_help'] = 'ماژول فعالیت تکلیف به یک استاد این امکان را می‌دهد تا وظایفی را بر عهده شاگردان بگذارد، کارهای انجام شده را جمع آوری کند و در نهایت نمره و بازخورد خود را در اختیار شاگردان بگذارد.

شاگردان می‌توانند هر گونه محتوای دیجیتالی (فایل) مانند اسناد متنی، صفحه‌های گسترده، تصاویر، یا کلیپ‌های صوتی و تصویری را تحویل دهند. همچنین به جای این کار (یا به علاوهٔ این کار) می‌توان یک ویرایشگر متنی در اختیار شاگرد قرار داد و از او خواست که پاسخ تکلیف را مستقیما توسط آن وارد کند. از ماژول تکلیف همچنین می‌توان برای یادآوری تکالیفی که شاگردان باید در «دنیای واقعی» و به صورت آفلاین انجام دهند (مانند کارهای هنری) استفاده کرد که در این صورت نیازی به هیچگونه محتوای دیجیتالی نخواهد بود.

هنگام مرور تکالیف، اساتید می‌توانند بازخوردشان را در قالب نظر بنویسند و یا به صورت فایل‌های شامل تکلیف تصحیح شده/نمره داده شده شاگرد، فایل صوتی شامل صحبت ضبط شده استاد در مورد تکلیف تحویل داده شده یا ... ارسال کنند. تکالیف می‌توانند با استفاده از یک مقیاس عددی یا قراردادی یا یک شیوه نمره دهی پیشرفته مانند یک روبریک نمره دهی شوند. نمره‌های نهایی در دفتر نمره ثبت خواهند شد.';
$string['modulename_link'] = 'mod/assignment/view';
$string['modulenameplural'] = 'تکالیف';
$string['newsubmissions'] = 'تکالیف تحویل داده شده';
$string['noattempt'] = 'هیچ چیزی تحویل داده نشده است';
$string['noclose'] = 'بدون تاریخ بسته شدن';
$string['nomoresubmissionsaccepted'] = 'فقط برای شرکت‌کنندگانی که مهلت ارسال‌شان تمدید شده است، مجاز است';
$string['noonlinesubmissions'] = 'این تکلیف نیازی به ارسال چیزی به صورت آنلاین ندارد';
$string['noopen'] = 'بدون تاریخ باز شدن';
$string['nooverridedata'] = 'باید حداقل یکی از تنظیمات تکلیف را بازنویسی کنید.';
$string['nosavebutnext'] = 'بعدی';
$string['nosubmission'] = 'هیچ چیزی برای این تکلیف تحویل داده نشده است';
$string['notgraded'] = 'نمره داده نشده است';
$string['notgradedyet'] = 'هنوز تصحیح نشده است';
$string['notifications'] = 'اطلاع‌رسانی‌ها';
$string['nousersselected'] = 'کاربری انتخاب نشده است';
$string['numberofdraftsubmissions'] = 'پیش‌نویس‌ها';
$string['numberofparticipants'] = 'شرکت کنندگان';
$string['numberofsubmissionsneedgrading'] = 'نیازمند نمره‌دهی';
$string['numberofsubmissionsneedgradinglabel'] = 'نیازمند نمره‌دهی: {$a}';
$string['numberofsubmittedassignments'] = 'تحویل داده شده';
$string['numberofteams'] = 'تعداد گروه‌ها';
$string['outlinegrade'] = 'نمره: {$a}';
$string['outof'] = '{$a->current} از {$a->total}';
$string['overdue'] = '<font color="red">از موعد تحویل تکلیف {$a} گذشته است</font>';
$string['override'] = 'بازنویسی';
$string['overridedeleteusersure'] = 'آیا مطمئن هستید که می‌خواهید بازنویسی صورت گرفته برای کاربر {$a} را حذف کنید؟';
$string['overridegroup'] = 'گروه مورد بازنویسی';
$string['overrides'] = 'بازنویسی‌ها';
$string['overrideuser'] = 'کاربر بازنویسی';
$string['page-mod-assign-view'] = 'صفحهٔ اصلی و صفحهٔ تحویل در ماژول تکلیف';
$string['page-mod-assign-x'] = 'هر صفحه‌ای از ماژول تکلیف';
$string['paramtimeremaining'] = '{$a} باقیمانده';
$string['participant'] = 'شرکت کننده';
$string['pluginadministration'] = 'مدیریت تکلیف';
$string['pluginname'] = 'تکلیف';
$string['preventsubmissionnotingroup'] = 'نیازمند گروه برای تحویل‌دادن';
$string['preventsubmissionnotingroup_help'] = 'اگر فعال باشد، کاربرانی که عضو هیچ گروهی نیستند قادر به تحویل تکلیف نخواهند بود.';
$string['preventsubmissionsshort'] = 'جلوی تغییر دادن تکلیف گرفته شود';
$string['previous'] = 'قبلی';
$string['privacy:metadata:timestarted'] = 'زمان شروع شده';
$string['quickgrading'] = 'نمره گذاری سریع';
$string['quickgrading_help'] = 'قابلیت نمره گذاری سریع این امکان را به شما می‌دهد تا نمره‌ها (و اهداف) شاگردان را مستقیما در جدول بالا وارد کنید. این قابلیت با قابلیت نمره دهی پیشرفته سازگار نیست و در حالتی که بیش از یک نمره دهنده وجود دارد نیز توصیه نمی‌شود.';
$string['quickgradingchangessaved'] = 'تغییراتی که در نمره‌ها داده‌اید ذخیره شدند';
$string['quickgradingresult'] = 'نمره گذاری سریع';
$string['recordid'] = 'شناسه هویت';
$string['removeallgroupoverrides'] = 'پاک کردن تمام بازنویسی‌های صورت گرفته برای گروه‌ها';
$string['removealluseroverrides'] = 'پاک کردن تمام بازنویسی‌های صورت گرفته برای کاربران';
$string['removesubmission'] = 'حذف تکلیف تحویل داده شده';
$string['removesubmissionconfirm'] = 'آیا مطمئن هستید که می‌خواهید آنچه تحویل داده‌اید را حذف کنید؟';
$string['removesubmissionconfirmforstudent'] = 'آیا مطمئن هستید که می‌خواهید آنچه برای {$a} را تحویل داده‌اید حذف کنید؟';
$string['removesubmissionforstudent'] = 'حذف تکلیف تحویل داده شده برای شاگرد: (id={$a->id}, fullname={$a->fullname}).';
$string['requireallteammemberssubmit'] = 'نیازمند تحویل تمام اعضای گروه';
$string['requireallteammemberssubmit_help'] = 'اگر فعال باشد، تمام اعضای گروه باید بر روی دکمه تحویل کلیک کنند تا این تکلیف توسط گروه به عنوان تحویل داده شده در نظر گرفته شود. اگر غیر فعال باشد، به محض اینکه یکی از اعضای گروهی بر روی دکمه تحویل کلیک کند، تکلیف برای آن گروه به عنوان تحویل داده شده در نظر گرفته خواهد شد.';
$string['requiresubmissionstatement'] = 'لازم است که شاگردان بیانیهٔ تحویل تکلیف را بپذیرند';
$string['requiresubmissionstatement_help'] = 'لازم است که شاگردان برای هر باری که این تکلیف را تحویل می‌دهد بیانیهٔ تحویل تکلیف را بپذیرند';
$string['revealidentities'] = 'آشکار کردن هویت شاگردان';
$string['revealidentitiesconfirm'] = 'آیا مطمئن هستید که می‌خواهید هویت شاگردان در این تکلیف را آشکار کنید؟ این فرآیند برگشت‌پذیر نیست. به محض اینکه هویت شاگردان افشا شود، نمرات وارد دفتر نمره خواهند شد.';
$string['reverttodefaults'] = 'بازگشت به پیش‌فرض‌های تکلیف';
$string['reverttodraft'] = 'بازگرداندن تکلیف تحویل داده شده به وضعیت پیش‌نویس';
$string['reverttodraftshort'] = 'بازگرداندن وضعیت تحویل به پیش‌نویس';
$string['reviewed'] = 'بررسی شده';
$string['save'] = 'ذخیره';
$string['saveallquickgradingchanges'] = 'ذخیره تمام نمره‌های درج شده';
$string['saveandcontinue'] = 'ذخیره و ادامه';
$string['savechanges'] = 'ذخیره تغییرات';
$string['savegradingresult'] = 'نمره';
$string['savenext'] = 'ذخیره و نمایش بعدی';
$string['saveoverrideandstay'] = 'ذخیره و وارد کردن یک بازنویسی دیگر';
$string['savingchanges'] = 'ذخیرهٔ تغییرات...';
$string['scale'] = 'مقیاس';
$string['search:activity'] = 'تکلیف - اطلاعات فعالیت';
$string['selectedusers'] = 'کاربران انتخاب‌شده';
$string['selectlink'] = 'انتخاب...';
$string['selectuser'] = 'انتخاب {$a}';
$string['sendlatenotifications'] = 'با خبر کردن نمره دهندگان از تحویل‌های دیر';
$string['sendlatenotifications_help'] = 'اگر فعال باشد، هر گاه که شاگردی تکلیف را دیر تحویل دهد پیامی به نمره دهندگان (معمولاً اساتید) فرستاده می‌شود. نوع پیام قابل پیکربندی است.';
$string['sendnotifications'] = 'با خبر کردن نمره دهندگان از تحویل‌ها';
$string['sendnotifications_help'] = 'اگر فعال باشد، هر گاه که شاگردی تکلیف را زود، به موقع یا دیر تحویل دهد پیامی به نمره دهندگان (معمولاً اساتید) فرستاده می‌شود. نوع پیام قابل پیکربندی است.';
$string['sendstudentnotifications'] = 'باخبرکردن شاگردان';
$string['sendstudentnotificationsdefault'] = 'تنظیم پیش‌فرض برای «باخبرکردن شاگردان»';
$string['sendstudentnotificationsdefault_help'] = 'مقدار پیش‌فرض گزینهٔ انتخابی «باخبرکردن شاگردان» در فرم نمره‌دادن به تکلیف.';
$string['sendsubmissionreceipts'] = 'ارسال رسید تحویل تکلیف به شاگردان';
$string['sendsubmissionreceipts_help'] = 'این گزینه امکان دادن رسید به شاگردان برای تحویل تکلیف را فعال می‌کند. هر بار که یک شاگرد با موفقیت تکلیفی را تحویل دهد از موفق بودن تحویل با خبر خواهد شد.';
$string['setmarkingallocation'] = 'تعیین مصحح';
$string['setmarkingworkflowstate'] = 'تعیین وضعیت گردش‌کار تصحیح';
$string['settings'] = 'تنظیمات تکلیف';
$string['showrecentsubmissions'] = 'نمایش تکلیف‌های تحویل داده شده اخیر';
$string['status'] = 'وضعیت';
$string['submission'] = 'پاسخ ارسالی';
$string['submissionattachments'] = 'فقط در حین ارسال فایل‌ها نمایش داده شود';
$string['submissiondrafts'] = 'نیازمند کلیک شاگردان بر روی دکمهٔ تحویل';
$string['submissiondrafts_help'] = 'اگر فعال باشد، شاگردان باید با کلیک بر روی دکمه‌ای با عنوان تحویل تکلیفشان را نهایی شده اعلام کنند. به این ترتیب شاگردان می‌توانند یک نسخه پیش‌نویس از تکلیفی که می‌خواهند تحویل دهند را روی سیستم نگهداری کنند. اگر پس از اینکه شاگردانی تکلیفشان را تحویل دادند، این تنظیم از روی «خیر» به «بله» تغییر کند، تکلیف‌هایی که قبلا تحویل داده شده‌اند به‌عنوان نهایی شده در نظر گرفته خواهند شد.';
$string['submissioneditable'] = 'شاگرد می‌تواند این تکلیف تحویل داده شده را ویرایش کند';
$string['submissionempty'] = 'چیزی ارسال نشده بود';
$string['submissionnoteditable'] = 'شاگرد نمی‌تواند این تکلیف را ویرایش کند';
$string['submissionplugins'] = 'پلاگین‌های تحویل';
$string['submissionreceipthtml'] = '<p>شما تکلیف «<i>{$a->assignment}</i>» را تحویل دادید.</p>
<p>می‌توانید وضعیت <a href="{$a->url}">تکلیفی که تحویل داده‌اید</a> را ببینید.</p>';
$string['submissionreceiptotherhtml'] = 'تکلیف «<i>{$a->assignment}</i>» شما تحویل داده شد.<br /><br />
می‌توانید وضعیت <a href="{$a->url}">تکلیف تحویل داده شده</a> را ببینید.';
$string['submissionreceiptothersmall'] = 'تکلیف {$a->assignment} شما تحویل داده شد.';
$string['submissionreceiptothertext'] = 'تکلیف «{$a->assignment}» شما تحویل داده شد.

می‌توانید وضعیت تکلیف تحویل داده شده را ببینید:

    {$a->url}';
$string['submissionreceiptsmall'] = 'شما تکلیف خود را برای {$a->assignment} تحویل دادید';
$string['submissionsclosed'] = 'امکان تحویل‌ها بسته شد';
$string['submissionsettings'] = 'تنظیمات تحویل';
$string['submissionslocked'] = 'این تکلیف، تحویل جدیدی را نمی‌پذیرد';
$string['submissionslockedshort'] = 'اجازه تحویل تکلیف را ندارد';
$string['submissionstatement'] = 'بیانیه تحویل تکلیف';
$string['submissionstatement_help'] = 'بیانیهٔ تایید تحویل تکلیف';
$string['submissionstatementdefault'] = 'این تکلیف نتیجه کار شخص من است، مگر در مواردی که استفاده از آثار دیگران را بطور واضح اعلام کرده باشم.';
$string['submissionstatementteamsubmission'] = 'بیانیه تحویل تکلیف گروهی';
$string['submissionstatementteamsubmissionallsubmit'] = 'بیانیه تحویل تکلیف گروهی وقتی همه اعضای گروه تحویل می‌دهند';
$string['submissionstatementteamsubmissionallsubmitdefault'] = 'این تکلیف نتیجه کار شخص من به عنوان عضو یک گروه است، مگر در مواردی که استفاده از آثار دیگران را بطور واضح اعلام کرده باشم.';
$string['submissionstatementteamsubmissiondefault'] = 'این تکلیف نتیجه کار گروه من است، مگر در مواردی که ما استفاده از آثار دیگران را بطور واضح اعلام کرده باشم.';
$string['submissionstatus'] = 'وضعیت تحویل';
$string['submissionstatus_'] = 'تحویل نداده است';
$string['submissionstatus_draft'] = 'پیش‌نویس (تحویل داده نشده است)';
$string['submissionstatus_marked'] = 'تصحیح شده';
$string['submissionstatus_reopened'] = 'دوباره بازشده';
$string['submissionstatus_submitted'] = 'برای تصحیح تحویل داده شده است';
$string['submissionstatusheading'] = 'وضعیت تحویل';
$string['submissionsummary'] = '{$a->status}. آخرین تغییر در {$a->timemodified}';
$string['submissionteam'] = 'گروه';
$string['submissiontypes'] = 'روش‌های تحویل';
$string['submitassignment'] = 'تحویل تکلیف';
$string['submitassignment_help'] = 'بعد از اینکه این تکلیف تحویل داده شد دیگر قادر به تغییر دادن آن نخواهید بود';
$string['submitted'] = 'تحویل داده شده';
$string['submittedearly'] = 'تکلیف {$a} زود تحویل داده شد';
$string['submittedlate'] = 'تکلیف {$a} با تأخیر تحویل داده شد';
$string['submittedlateshort'] = 'با {$a} تأخیر';
$string['subplugintype_assignfeedback_plural'] = 'پلاگین‌های بازخورد';
$string['subplugintype_assignsubmission'] = 'پلاگین تحویل';
$string['subplugintype_assignsubmission_plural'] = 'پلاگین‌های تحویل';
$string['teamsubmission'] = 'شاگردان به صورت گروهی تحویل می‌دهند';
$string['teamsubmission_help'] = 'اگر فعال باشد، شاگردان بر اساس مجموعه گروه‌های پیش‌فرض یا یک ابرگروه تغییر یافته به گروه‌هایی تقسیم خواهند شد. تکلیف تحویل داده شده به صورت گروهی، بین اعضای گروه به اشتراک گذاشته خواهد شد و تمام اعضای گروه، تغییرات اعمال شده توسط همدیگر را خواهند دید.';
$string['teamsubmissiongroupingid'] = 'ابرگروه مورد استفاده برای گروه‌بندی شاگردان';
$string['teamsubmissiongroupingid_help'] = 'برای گروهبندی شاگردان از گروه‌های موجود در این ابرگروه استفاده خواهد شد. اگر تعیین نشده باشد، مجموعه پیش‌فرض گروه‌ها استفاده خواهند شد.';
$string['timemodified'] = 'آخرین تغییر';
$string['timeremaining'] = 'زمان باقیمانده';
$string['timeremainingcolon'] = 'زمان باقیمانده: {$a}';
$string['ungroupedusers'] = 'تنظیم «نیازمند گروه برای تحویل‌دادن» فعال است و بعضی از کاربران یا عضو هیچ گروهی نیستند، یا عضو بیش از یک گروه هستند. در نتیجه نمی‌توانند تکلیف را تحویل دهند.';
$string['unlimitedattempts'] = 'نامحدود';
$string['unlimitedpages'] = 'نامحدود';
$string['unlocksubmissions'] = 'قفل تکلیف‌ها باز شود';
$string['unsavedchanges'] = 'تغییراتِ ذخیره نشده';
$string['unsavedchangesquestion'] = 'تغییراتِ ذخیره نشده‌ای در نمره یا بازخورد داده‌اید. آیا می‌خواهید تغییرات را ذخیره کنید و ادامه دهید؟';
$string['updategrade'] = 'تغییر نمره';
$string['userextensiondate'] = 'مهلت تحویل تا {$a} تمدید شده است';
$string['usergrade'] = 'به کاربر نمره داده شد';
$string['useroverrides'] = 'بازنویسی‌های مربوط به کاربران';
$string['useroverridesdeleted'] = 'بازنویسی‌های مربوط به کاربران حذف شد';
$string['userswhoneedtosubmit'] = 'کاربرانی که باید تحویل دهند: {$a}';
$string['validmarkingworkflowstates'] = 'وضعیت‌های معتبر گردش‌کار تصحیح';
$string['viewgradebook'] = 'مشاهده دفتر نمره';
$string['viewgrading'] = 'مشاهده/نمره دادن تمام تکلیف‌های تحویل داده شده';
$string['viewsubmission'] = 'مشاهدهٔ تحویل';
$string['workflowfilter'] = 'فیلتر گردش‌کار';
$string['xofy'] = '{$a->x} از {$a->y}';
