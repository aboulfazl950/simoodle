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
 * Strings for component 'completion', language 'fa', version '4.5'.
 *
 * @package     completion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievinggrade'] = 'به دست آوردن نمره';
$string['achievingpassinggrade'] = 'به دست آوردن نمره قبولی';
$string['activities'] = 'فعالیت‌ها';
$string['activitiescompleted'] = 'تکمیل فعالیت‌ها';
$string['activitiescompletednote'] = 'توجه: تکمیل فعالیت باید برای یک فعالیت تنظیم شده باشد تا در لیست بالا ظاهر شود.';
$string['activitieslabel'] = 'فعالیت‌ها / منابع';
$string['activityaggregation'] = 'این شرط نیازمند آن است که';
$string['activityaggregation_all'] = 'تمام فعالیت‌های انتخاب‌شده تکمیل شوند';
$string['activityaggregation_any'] = 'حداقل یکی از فعالیت‌های انتخاب‌شده تکمیل شود';
$string['activitycompletion'] = 'تکمیل فعالیت';
$string['activitycompletionupdated'] = 'تغییرات ذخیره شدند';
$string['activitygradenotrequired'] = 'نمره لازم نیست';
$string['addconditions'] = 'اضافه کردن شرایط';
$string['affectedactivities'] = 'تغییرات بر روی <b>{$a}</b> فعالیت یا منبع زیر اثر می‌گذارند:';
$string['aggregationmethod'] = 'چگونگی جمع‌بندی و نتیجه‌گیری';
$string['all'] = 'همه';
$string['allconditions'] = 'فعالیت زمانی تکمیل می‌شود که شاگردان تمام کارهای زیر را انجام دهند:';
$string['any'] = 'هر کدام';
$string['approval'] = 'تایید';
$string['badautocompletion'] = 'وقتی تکمیل به صورت خودکار را انتخاب می‌کنید، باید حداقل یک شرط (در زیر) برای تکمیل فعالیت انتخاب کنید.';
$string['bulkactivitycompletion'] = 'ویرایش انبوه تکمیل فعالیت';
$string['bulkactivitydetail'] = 'فعالیت‌هایی که می‌خواهید به‌طور انبوه ویرایش کنید را انتخاب کنید.';
$string['bulkcompletiontracking'] = 'پیگیری تکمیل';
$string['bulkcompletiontracking_help'] = '<strong>هیچ:</strong> تکمیل فعالیت مشخص نشود

<strong>دستی:</strong> شاگردان خودشان می‌توانند فعالیت را به‌عنوان کامل‌شده علامت بزنند

<strong>با شرایط:</strong> هنگامی که شرایط برقرار بودند فعالیت به‌عنوان کامل‌شده نمایش داده شود';
$string['checkactivity'] = 'کادر انتخاب برای فعالیت / منبع: {$a}';
$string['checkall'] = 'انتخاب یا عدم انتخاب تمام فعالیت‌ها و منابع';
$string['checkallsection'] = 'انتخاب یا عدم انتخاب تمام فعالیت‌ها و منابع در این قسمت: {$a}';
$string['completeactivity'] = 'کامل کردن فعالیت';
$string['completed'] = 'تکمیل‌شده';
$string['completedunlocked'] = 'قفل گزینه‌های مربوط به تکمیل باز شد';
$string['completedunlockedtext'] = 'با ذخیرهٔ تغییرات، وضعیت تکمیل تمام شاگردان پاک می‌شود. اگر نظرتان در مورد تغییر دادن این گزینه‌ها عوض شده است، فرم را ذخیره نکنید.';
$string['completedwarning'] = 'گزینه‌های مربوط به تکمیل قفل شده‌اند';
$string['completedwarningtext'] = 'در حال حاضر تعدادی از شاگردان ({$a} نفر) این فعالیت را به عنوان کامل علامت زده‌اند. تغییر گزینه‌های مربوط به تکمیل فعالیت منجر به پاک شدن علامت‌های آنها خواهد شد و ممکن است موجب سردرگمی آنها شود. به همین دلیل این گزینه‌ها قفل شده‌اند و نباید از حالت قفل شده خارج شوند، مگر اینکه واقعاً ضروری باشد.';
$string['completion'] = 'ردیابی تکمیل';
$string['completion-alt-auto-enabled'] = 'این فعالیت در صورت برقرار بودن یک سری شرایط، به صورت خودکار توسط سیستم به عنوان تکمیل شده علامت خواهد خورد.';
$string['completion-alt-auto-fail'] = 'تکمیل شده است (بدون اکتساب نمرهٔ قبولی)';
$string['completion-alt-auto-n'] = 'تکمیل نشده است';
$string['completion-alt-auto-n-override'] = 'تکمیل نشده است: {$a->modname} (ثبت شده توسط {$a->overrideuser})';
$string['completion-alt-auto-pass'] = 'تکمیل شده است (با اکتساب نمرهٔ قبولی)';
$string['completion-alt-auto-y'] = 'تکمیل شده است';
$string['completion-alt-auto-y-override'] = 'تکمیل شده: {$a->modname} (ثبت شده توسط {$a->overrideuser})';
$string['completion-alt-manual-enabled'] = 'شاگردان خودشان می‌توانند به صورت دستی تکمیل فعالیت را مشخص کنند';
$string['completion-alt-manual-n'] = 'کامل نشده است؛ انتخاب کنید تا به عنوان کامل شده علامت بخورد';
$string['completion-alt-manual-n-override'] = 'تکمیل نشده است: {$a->modname} (ثبت شده توسط {$a->overrideuser}). برای تیک خوردن به عنوان کامل شده انتخاب کنید.';
$string['completion-alt-manual-y'] = 'کامل شده است؛ انتخاب کنید تا به عنوان کامل شده علامت بخورد';
$string['completion-alt-manual-y-override'] = 'تکمیل شده: {$a->modname} (ثبت شده توسط {$a->overrideuser}). به عنوان تکمیل نشده انتخاب کنید .';
$string['completion-fail'] = 'تکمیل‌شده (نمره قبولی به دست نیاورد)';
$string['completion-n'] = 'تکمیل‌نشده';
$string['completion-n-override'] = 'تکمیل نشده است (ثبت شده توسط {$a})';
$string['completion-pass'] = 'تکمیل‌شده (نمره قبولی گرفته است)';
$string['completion-y'] = 'تکمیل‌شده';
$string['completion-y-override'] = 'تکمیل شده (ثبت شده توسط {$a})';
$string['completion_automatic'] = 'هنگامی که شرایط برقرار بودند فعالیت به عنوان کامل شده نشان داده شود';
$string['completion_help'] = 'در صورتی که فعال باشد، تکمیل این فعالیت به صورت دستی یا خودکار و بر اساس شرایطی مشخص ردیابی می‌شود. در صورت تمایل می‌توان برای تکمیل یک فعالیت چندین شرط تعیین کرد. در این صورت، تنها در صورتی که تمام آن شرایط برقرار باشد فعالیت به عنوان کامل شده در نظر گرفته خواهد شد.

در صفحهٔ اصلی درس در کنار نام هر فعالیت یک مربع قرار دارد که تیک خوردن این مربع تکمیل قعالیت را نشان می‌دهد.';
$string['completion_link'] = 'activity/completion';
$string['completion_manual'] = 'شاگردان باید خودشان فعالیت را به عنوان کامل شده علامت بزنند';
$string['completion_none'] = 'تکمیل فعالیت نشان داده نشود';
$string['completionactivitydefault'] = 'پیش‌فرض فعالیت استفاده شود';
$string['completionanygrade_desc'] = 'هر نمره‌ای';
$string['completiondefault'] = 'پیگیری تکمیل پیش‌فرض';
$string['completiondisabled'] = 'غیر فعال، در تنظیمات فعالیت‌ها نشان داده نمی‌شود';
$string['completionduration'] = 'ثبت‌نام';
$string['completionenabled'] = 'فعال، توسط تنظیمات فعالیت‌ها و تنظیمات مربوط به تکمیل درس کنترل می‌شود';
$string['completionexpected'] = 'تاریخ تکمیل مورد انتظار';
$string['completionexpected_help'] = 'این گزینه تاریخی که برای کامل شدن این فعالیت انتظار می‌رود را مشخص می‌کند.';
$string['completionexpecteddesc'] = 'تکمیل در تاریخ {$a} انتظار می‌رود';
$string['completionexpectedfor'] = '{$a->instancename} باید تکمیل شده باشد';
$string['completionicons'] = 'مربع‌های تیک دار مربوط به تکمیل';
$string['completionicons_help'] = 'وجود یک علامت تیک در کنار نام هر فعالیت نشان می‌دهد که آن فعالیت کامل شده است.

اگر مربع کنار یک فعالیت به صورت نقطه‌چین تیک خورده است، می‌توانید زمانی که فکر می‌کنید آن فعالیت را کامل کرده‌اید بر روی آن مربع کلیک کنید تا به صورت کامل علامت بخورد. (اگر نظرتان عوض شد می‌توانید مجددا بر روی مربع کلیک کنید تا علامت تیک برداشته شود.) کلیک کردن بر روی این مربع‌ها اختیاری است و صرفاً راهی برای ردیابی میزان پیشروی شما در درس است.

اگر مربع کنار فعالیت کاملا خالی است، زمانی که فعالیت را بر اساس شرایط تعیین شده توسط استاد درس کامل کردید، این مربع به صورت خودکار تیک خواهد خورد.';
$string['completionmenuitem'] = 'تکمیل';
$string['completionnotenabled'] = 'قابلیت تکمیل فعال نشده است';
$string['completionnotenabledforcourse'] = 'قابلیت تکمیل برای این درس فعال نشده است';
$string['completionnotenabledforsite'] = 'قابلیت تکمیل برای این سایت فعال نشده است';
$string['completionondate'] = 'تاریخ';
$string['completionondatevalue'] = 'کاربر باید ثبت‌نام باقی بماند تا';
$string['completionpassgrade'] = 'نیازمند نمره قبولی';
$string['completionpassgrade_desc'] = 'شاگرد باید نمره قبولی دریافت کند تا این فعالیت کامل شده محسوب شود';
$string['completionsettingslocked'] = 'تنظیمات تکمیل قفل است';
$string['completionupdated'] = 'تکمیل فعالیت <b>{$a}</b> به‌روز شد';
$string['completionusegrade'] = 'نیاز به نمره';
$string['completionusegrade_desc'] = 'برای اینکه این فعالیت به صورت کامل شده در نظر گرفته شود، شاگردان باید نمرهٔ این فعالیت را دریافت کنند.';
$string['completionusegrade_help'] = 'در صورت انتخاب، دریافت کردن نمره در این فعالیت به معنی کامل کردن این فعالیت خواهد بود. اگر یک نمرهٔ قبولی برای این فعالیت تعیین شده باشد، آیکن‌های مربوط به قبولی یا ردی نیز برای این فعالیت نمایش داده می‌شود.';
$string['completionview'] = 'ملزم به مشاهده';
$string['completionview_desc'] = 'شاگردان برای تکمیل این فعالیت باید حتماً آن را مشاهده کنند';
$string['configcompletiondefault'] = 'تنظیم پیش‌فرضِ «پیگیری تکمیل» هنگامی که فعالیت‌های جدید ساخته می‌شوند.';
$string['configenablecompletion'] = 'در صورتی که فعال باشد، امکان فعال کردن و استفاده از قابلیت پیگیری تکمیل (میزان پیشروی) در سطح درس را خواهید داشت.';
$string['confirmselfcompletion'] = 'تکمیل خود را تایید می‌کنم';
$string['courseaggregation'] = 'این شرط نیازمند آن است که';
$string['courseaggregation_all'] = 'تمام درس‌های انتخاب‌شده کامل شده باشند';
$string['courseaggregation_any'] = 'هر کدام از درس‌های انتخاب‌شده کامل شده باشد';
$string['coursealreadycompleted'] = 'شما قبلا این درس را کامل کرده‌اید';
$string['coursecomplete'] = 'تکمیل درس';
$string['coursecompleted'] = 'تکمیل درس انجام شد';
$string['coursecompletion'] = 'تکمیل درس';
$string['coursecompletioncondition'] = 'شرط: {$a}';
$string['coursegrade'] = 'نمره درس';
$string['coursesavailable'] = 'درس‌های موجود';
$string['coursesavailableexplaination'] = 'توجه: شرایط تکمیل درس باید برای یک درس تعیین شده باشد تا آن درس در لیست بالا نمایش داده شود.';
$string['criteria'] = 'ضوابط';
$string['criteriagroup'] = 'گروه ضوابط';
$string['criteriarequiredall'] = 'تمام ضوابط زیر باید برآورده شوند';
$string['criteriarequiredany'] = 'حداقل یکی از ضوابط زیر برآورده شود';
$string['csvdownload'] = 'دریافت فایل در قالب صفحهٔ گسترده (فایل csv با کدگذاری UTF-8)';
$string['datepassed'] = 'سپری شدن تاریخ';
$string['days'] = 'روز';
$string['daysoftotal'] = '{$a->days} از {$a->total}';
$string['defaultcompletion'] = 'تکمیل فعالیت پیش‌فرض';
$string['defaultcompletionupdated'] = 'تغییرات ذخیره شدند';
$string['deletecompletiondata'] = 'پاک کردن اطلاعات تکمیل';
$string['dependencies'] = 'وابستگی‌ها';
$string['dependenciescompleted'] = 'تکمیل درس‌های دیگر';
$string['detail_desc:receivegrade'] = 'نمره گرفتن';
$string['detail_desc:view'] = 'مشاهده';
$string['editconditions'] = 'ویرایش شرایط';
$string['editcoursecompletionsettings'] = 'ویرایش تنظیمات تکمیل درس';
$string['enablecompletion'] = 'فعال بودن پیگیری تکمیل';
$string['enablecompletion_help'] = 'در صورت فعال بودن، می‌توان شرایط تکمیل هر فعالیت را در صفحه تنظیمات فعالیت تعیین کرد و/یا شرایط تکمیل درس را می‌توان تعیین کرد. توصیه می‌شود این تنظیم را فعال بگذارید تا اطلاعات معناداری در قسمت مرور کلی درس‌ها در میز کار نمایش داده شود.';
$string['enrolmentduration'] = 'مدت ثبت‌نام';
$string['enrolmentdurationlength'] = 'کاربر باید ثبت‌نام باقی بماند به‌مدت';
$string['err_noactivities'] = 'اطلاعات تکمیل برای هیچکدام از فعالیت‌ها فعال نشده است، بنابراین هیچکدام نمی‌توانند نمایش داده شوند. اطلاعات تکمیل را می‌توانید با ویرایش تنظیمات هر فعالیت فعال کنید.';
$string['err_nocourses'] = 'ویژگی تکمیل درس برای هیچکدام از درس‌های دیگر فعال نشده است، در نتیجه هیچکدام از آنها نمی‌توانند نشان داده شوند. این ویژگی را در صفحهٔ تنظیمات هر درس می‌توانید فعال کنید.';
$string['err_nograde'] = 'برای این درس نمرهٔ قبولی تعیین نشده است. برای فعال کردن این نوع ضابطه، باید یک نمرهٔ قبولی برای این درس درنظر بگیرید.';
$string['err_noroles'] = 'هیچ نقشی با قابلیت moodle/course:markcomplete در این درس وجود ندارد.';
$string['err_nousers'] = 'هیچ شاگردی عضو این درس یا گروه نیست تا اطلاعات تکمیل فعالیتش نمایش داده شود. (به‌طور پیش‌فرض، اطلاعات مربوط به تکمیل فعالیت فقط برای شاگردان نمایش داده می‌شود، بنابراین در صورتی که شاگردی وجود نداشته باشد، این پیام را خواهید دید. مدیرها می‌توانند در صفحه‌های مدیریت سایت، این رفتار را تغییر دهند.)';
$string['err_settingslocked'] = 'یک یا چند شاگرد در این لحظه یکی از ضابطه‌ها را تکمیل کرده‌اند بنابراین تنظیمات قفل شده است. بازکردن قفل تنظیم ضوابط تکمیل موجب پاک‌شدن تمام داده‌های موجود کاربران شده و ممکن است موجوب سردرگمی شود.';
$string['err_system'] = 'یک خطای داخلی در سیستم تکمیل رخ داد. (مدیران سیستم برای مشاهدهٔ جزئیات بیشتر می‌توانند اشکال‌زدایی را فعال کنند.)';
$string['eventcoursecompleted'] = 'تکمیل درس انجام شد';
$string['eventcoursecompletionupdated'] = 'تکمیل درس به‌روز شد';
$string['eventcoursemodulecompletionupdated'] = 'تکمیل فعالیت درسی به‌روز شد';
$string['eventdefaultcompletionupdated'] = 'پیش‌فرض تکمیل فعالیت درس به‌روز شد';
$string['excelcsvdownload'] = 'دریافت فایل در قالب سازگار با Excel (فایل csv)';
$string['fraction'] = 'کسر';
$string['graderequired'] = 'نمره لازم در درس';
$string['gradexrequired'] = '{$a} لازم است';
$string['hiddenrules'] = 'بعضی از تنظیماتی که مختص <b>{$a}</b> هستند پنهان شده‌اند. برای دیدن آنها سایر فعالیت‌ها را از انتخاب خارج کنید';
$string['inprogress'] = 'در جریان';
$string['manual'] = 'دستی';
$string['manualcompletionby'] = 'علامت زدن به عنوان کامل توسط';
$string['manualcompletionbynote'] = 'توجه: برای اینکه یک نقش در لیست نمایش داده شود، باید قابلیت moodle/course:markcomplete را داشته باشد.';
$string['manualselfcompletion'] = 'علامت زدن به عنوان کامل توسط خود افراد';
$string['manualselfcompletionnote'] = 'توجه: در صورت فعال بودن تکمیل دستی خود، بلوک تکمیل خود باید به درس اضافه شده باشد.';
$string['markcomplete'] = 'علامت زدن به‌عنوان کامل';
$string['markedcompleteby'] = 'علامت خوردن به عنوان کامل توسط {$a}';
$string['markingyourselfcomplete'] = 'علامت زدن خود به عنوان کامل';
$string['modifybulkactions'] = 'اقداماتی که می‌خواهید به‌طور انبوه ویرایش کنید را تغییر دهید';
$string['moredetails'] = 'جزئیات بیشتر';
$string['nocriteriaset'] = 'هیچ ضابطه‌ای برای تکمیل این درس تعیین نشده است';
$string['nogradeitem'] = 'نیاز به نمره نمی‌تواند برای <b>{$a}</b> فعال شود زیرا فعالیت نمره داده نشده است.';
$string['notcompleted'] = 'تکمیل‌نشده';
$string['notenroled'] = 'شما در این درس ثبت‌نام نیستید';
$string['nottracked'] = 'تکمیل شما در این درس رصد نمی‌شود';
$string['notyetstarted'] = 'هنوز شروع نشده است';
$string['overallaggregation'] = 'نیازمندی‌های تکمیل';
$string['overallaggregation_all'] = 'درس در صورتی که تمام شرایط برآورده شوند کامل است';
$string['overallaggregation_any'] = 'درس در صورتی که هر کدام از شرایط برآورده شود کامل است';
$string['pending'] = 'در حال بررسی';
$string['periodpostenrolment'] = 'بعد از ثبت‌نام مدت مشخص';
$string['progress'] = 'پیشروی شاگردان';
$string['progress-title'] = '{$a->user}، {$a->activity}: {$a->state} {$a->date}';
$string['progresstotal'] = 'میزان پیشروی: {$a->complete} از {$a->total}';
$string['recognitionofpriorlearning'] = 'به‌رسمیت شناختن یادگیری قبلی';
$string['remainingenroledfortime'] = 'ثبت‌نام باقی ماندن برای یک مدت زمان مشخص';
$string['remainingenroleduntildate'] = 'ثبت‌نام باقی ماندن تا تاریخ مشخصی';
$string['reportpage'] = 'نمایش کاربران {$a->from} تا {$a->to} از {$a->total} کاربر.';
$string['requiredcriteria'] = 'ضوابط مورد نیاز';
$string['resetactivities'] = 'پاک‌سازی تمام فعالیت‌ها و منابع انتخاب‌شده';
$string['restoringcompletiondata'] = 'نوشتن اطلاعات تکمیل';
$string['roleaggregation'] = 'این شرط نیازمند آن است که';
$string['roleaggregation_all'] = 'هنگامی‌که شرط برآورده شد، تمام نقش‌های انتخاب‌شده علامت بزنند';
$string['roleaggregation_any'] = 'هنگامی‌که شرط برآورده شد، هر کدام از نقش‌های انتخاب‌شده علامت بزند';
$string['roleidnotfound'] = 'نقش با شناسهٔ {$a} پیدا نشد';
$string['saved'] = 'ذخیره شد';
$string['seedetails'] = 'مشاهده جزئیات';
$string['select'] = 'انتخاب';
$string['self'] = 'خود فرد';
$string['selfcompletion'] = 'تکمیل خود';
$string['showcompletionconditions'] = 'نمایش شرایط تکمیل فعالیت';
$string['showinguser'] = 'نمایش کاربر';
$string['studentsmust'] = 'شاگردان باید';
$string['todo'] = 'انجام شود';
$string['unenrolingfromcourse'] = 'لغو ثبت‌نام در درس';
$string['unenrolment'] = 'اتمام ثبت نام';
$string['unit'] = 'واحد';
$string['unlockcompletion'] = 'باز کردن قفل گزینه‌های مربوط به تکمیل';
$string['unlockcompletiondelete'] = 'بازکردن قفل گزینه‌های تکمیل و  پاک‌کردن اطلاعات مربوط به تکمیل کاربران';
$string['updateactivities'] = 'به‌روزرسانی وضعیت تکمیل فعالیت‌های انتخاب‌شده';
$string['usealternateselector'] = 'استفاده از انتخاب‌گر درس جایگزین';
$string['usernotenroled'] = 'کاربر در این درس ثبت‌نام نیست';
$string['viewcoursereport'] = 'مشاهده گزارش درس';
$string['viewingactivity'] = 'دیدن {$a}';
$string['withconditions'] = 'با شرایط';
$string['writingcompletiondata'] = 'نوشتن اطلاعات تکمیل';
$string['xdays'] = '{$a} روز';
$string['youmust'] = 'شما باید';
