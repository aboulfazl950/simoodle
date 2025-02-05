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
 * Strings for component 'tool_usertours', language 'fa', version '4.5'.
 *
 * @package     tool_usertours
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['above'] = 'بالا';
$string['actions'] = 'اقدامات';
$string['appliesto'] = 'اعمال روی';
$string['backdrop'] = 'تیره کردن پس‌زمینه';
$string['backdrop_help'] = 'با تیره کردن پس‌زمینه می‌توانید بخش خاصی از صفحه که به آن اشاره می‌کنید را برجسته کنید.

توجه: تیره کردن پس‌زمینه با برخی از قسمت‌های صفحه مانند نوار راهبری سازگار نیست.';
$string['below'] = 'پایین';
$string['block'] = 'بلوک';
$string['block_named'] = 'بلوک «{$a}»';
$string['cachedef_stepdata'] = 'لیست مراحل تور کاربر';
$string['cachedef_tourdata'] = 'لیست اطلاعات تورهای کاربری فعال که در تمام صفحه‌ها دریافت می‌شود';
$string['confirmstepremovalquestion'] = 'آیا نسبت به حذف این مرحله مطمئن هستید؟';
$string['confirmstepremovaltitle'] = 'تایید حذف مرحله';
$string['confirmtourremovalquestion'] = 'آیا نسبت به حذف این تور مطمئن هستید؟';
$string['confirmtourremovaltitle'] = 'تایید حذف تور';
$string['content'] = 'متن';
$string['content_heading'] = 'محتوا';
$string['content_help'] = 'محتوایی که مرحله را شرح می‌دهد می‌تواند به‌صورت متن ساده یا در صورت لزوم بین تگ‌های چند زبانه یا multilang (برای استفاده با فیلتر محتوای چندزبانه) اضافه شود.

یا اینکه از شناسهٔ یک عبارت ترجمه به‌صورت identifier,component استفاده شود (بدون کروشه و یا فاصله بعد از کاما) که در آن identifier شناسهٔ عبارت است و component کامپوننتی است که عبارت در آن قرار دارد.';
$string['cssselector'] = 'انتخاب‌گر CSS';
$string['defaultvalue'] = 'پیش‌فرض ({$a})';
$string['description'] = 'شرح';
$string['done'] = 'انجام شد';
$string['editstep'] = 'در حال ویرایش «{$a}»';
$string['enabled'] = 'فعال';
$string['endonesteptour'] = 'متوجه شدم';
$string['endtour'] = 'اتمام تور';
$string['event_tour_ended'] = 'تور به پایان رسید';
$string['event_tour_started'] = 'تور شروع شد';
$string['exporttour'] = 'صدور تور';
$string['filter_header'] = 'فیلترهای تور';
$string['filter_help'] = 'شرطی که در آن صورت تور نمایش داده خواهد شد را انتخاب کنید. برای اینکه یک تور نمایش داده شود، باید از تمام فیلترها رد شود.';
$string['filter_role'] = 'نقش';
$string['filter_theme'] = 'پوسته';
$string['filter_theme_help'] = 'تور در هنگامی که کاربر از یکی از پوسته‌های زیر استفاده می‌کند نمایش داده شود.';
$string['importtour'] = 'وارد کردن تور از فایل';
$string['left'] = 'چپ';
$string['modifyshippedtourwarning'] = 'این یک تور کاربر است که همراه با مودل آمده است. هر تغییری که در این تور بدهید ممکن است در هنگام ارتقای بعدی سایت بازنویسی شود.';
$string['movestepdown'] = 'انتقال مرحله به پایین';
$string['movestepup'] = 'انتقال مرحله به بالا';
$string['movetourdown'] = 'انتقال تور به پائین';
$string['movetourup'] = 'انتقال تور به بالا';
$string['name'] = 'نام';
$string['newstep'] = 'مرحلهٔ جدید';
$string['newtour'] = 'ایجاد یک تور جدید';
$string['next'] = 'بعدی';
$string['nextstep'] = 'ادامه';
$string['nextstep_sequence'] = 'بعدی ({$a->position} از {$a->total})';
$string['options_heading'] = 'گزینه‌ها';
$string['orphan'] = 'اگر سوژه پیدا نشد نمایش داده شود';
$string['orphan_help'] = 'مرحله در صورتی که سوژه در صفحه پیدا نشد نمایش داده شود.';
$string['pathmatch_help'] = 'تورها در هر صفحه‌ای که آدرسش با این مقدار منطبق باشد نمایش داده خواهند شد.

می‌توانید از کاراکتر % به‌عنوان یک جایگزینی برای هر متنی استفاده کنید.
به‌طور مثال:

* <span dir="ltr" style="direction:ltr;display=inline-block">/my/%</span> - برای منطبق شدن با میز کار
* <span dir="ltr" style="direction:ltr;display=inline-block">/course/view.php?id=2</span> - برای منطبق شدن با یک درس خاص
* <span dir="ltr" style="direction:ltr;display=inline-block">/mod/forum/view.php%</span> - برای منطبق شدن با لیست گفتگوهای تالار گفتگو
* <span dir="ltr" style="direction:ltr;display=inline-block">/user/profile.php%</span> - برای منطبق شدن با صفحهٔ مشخصات فردی کاربر

اگر می‌خواهید توری را در صفحهٔ اول سایت نمایش دهید ، می‌توانید از مقدار FRONTPAGE استفاده کنید.';
$string['pausetour'] = 'توقف';
$string['placement'] = 'قرارگیری';
$string['placement_help'] = 'یک مرحله می‌تواند در بالا، پایین، چپ یا راست سوژه مورد اشاره قرار گیرد. توصیه می‌شود که یا بالا باشد و یا پایین، زیرا این دو گزینه برای نمایش در موبایل بهتر عمل می‌کنند.

اگر مرحله در یک صفحه‌ای در محل مشخص‌شده جا نشود، به‌طور خودکار در محل دیگری قرار داده خواهد شد.';
$string['pluginname'] = 'تورهای کاربر';
$string['reflex'] = 'پیشروی با کلیک';
$string['reflex_help'] = 'پشروی به صفحهٔ بعد هنگامی که روی سوژه کلیک می‌شود.';
$string['resettouronpage'] = 'بازنشانی تور کاربر در این صفحه';
$string['resumetour'] = 'ادامه';
$string['right'] = 'راست';
$string['selectordisplayname'] = 'یک انتخاب‌گر CSS‌ منطبق با «{$a}»';
$string['sharedtourslink'] = 'انبار تورها';
$string['skip_tour'] = 'بستن راهنما';
$string['target'] = 'سوژه';
$string['target_block'] = 'بلوک';
$string['target_heading'] = 'سوژهٔ مرحله';
$string['target_selector'] = 'انتخاب‌گر';
$string['target_selector_targetvalue'] = 'انتخاب‌گرهای CSS';
$string['target_selector_targetvalue_help'] = 'از یک انتخابگر CSS می‌توان برای هدف قرار دادن تقریبا هر قسمتی از صفحه استفاده کرد. انتخابگر مناسب را می‌توانید به‌سادگی با استفاده از ابزار توسعه‌دهنده در مرورگرتان پیدا کنید.';
$string['target_unattached'] = 'نمایش در وسط صفحه';
$string['targettype'] = 'نوع سوژه';
$string['targettype_help'] = 'هر مرحله دربارهٔ یکی از اجزای صفحه (سوژه) است. انواع سوژه عبارتند از:

* بلوک - برای نمایش یک مرحله در کنار بلوک تعیین‌شده
* انتخابگر CSS - برای تعریف دقیق ناحیهٔ سوژه با استفاه از CSS
* نمایش در وسط صفحه - برای مرحله‌ای که نیازی نیست به قسمت خاصی در صفحه مربوط باشد';
$string['title'] = 'عنوان';
$string['title_help'] = 'عنوان مرحله می‌تواند به‌صورت متن ساده، یا در صورت لزوم بین تگ‌های چند زبانه یا multilang (برای استفاده با فیلتر محتوای چندزبانه) اضافه شود.

یا اینکه از شناسهٔ یک عبارت ترجمه به‌صورت identifier,component استفاده شود (بدون کروشه و یا فاصله بعد از کاما) که در آن identifier شناسهٔ عبارت است و component کامپوننتی است که عبارت در آن قرار دارد.';
$string['tour1_content_addingblocks'] = 'در واقع، با دقت دربارهٔ شامل‌کردن هر بلوکی در صفحه‌هایتان فکر کنید. بلوک‌ها در برنامهٔ موبایل نشان داده نمی‌شوند، بنابراین به‌عنوان یک قانون کلی بسیار بهتر است که مطمئن شوید سایت بدون هیچ بلوکی هم به‌خوبی کار کند.';
$string['tour1_content_blockregion'] = 'هنوز ناحیه‌ای برای بلوک‌ها وجود دارد. توصیه می‌کنیم که بلوک‌های راهبری و مدیریت را به‌طور کامل حذف کنید، زیرا تمام قابلیت‌های این دو بلوک به‌صورت دیگری در پوستهٔ شتاب گنجانده شده است.';
$string['tour1_content_customisation'] = 'برای سفارشی کردن ظاهر سایت و صفحهٔ اول، از منوی تنظیمات در گوشهٔ این قسمت استفاده کنید. حال سعی کنید که حالت ویرایش را فعال کنید.';
$string['tour1_content_end'] = 'به پایان تور کاربری رسیدید. این تور دوباره نمایش داده نخواهد شد مگر اینکه با استفاده از پیوندی که در پایین صفحه نمایش داده شده است،  آن را بازنشانی کنید. به‌عنوان یک مدیر شما هم می‌توانید در صورت نیاز تورهای جدیدی مشابه با این تور ایجاد کنید.';
$string['tour1_content_navigation'] = 'راهبری اصلی از طریق کشوی راهبری انجام می‌گیرد. محتویات این کشو بسته به اینکه کجای سایت باشید تغییر می‌کند. از دکمهٔ بالا برای نمایش‌دادن یا پنهان‌کردن این کشو استفاده کنید.';
$string['tour1_content_welcome'] = 'به پوستهٔ شتاب خوش‌آمدید. اگر از یکی از نسخه‌های قدیمی‌تر به این نسخه آمده باشید، ممکن است در این پوسته بعضی چیزها به نظرتان متفاوت بیاید.';
$string['tour1_title_addingblocks'] = 'اضافه‌کردن بلوک‌ها';
$string['tour1_title_blockregion'] = 'ناحیه بلوک‌ها';
$string['tour1_title_customisation'] = 'سفارشی‌کردن';
$string['tour1_title_end'] = 'پایان تور';
$string['tour1_title_navigation'] = 'راهبری';
$string['tour1_title_welcome'] = 'خوش آمدید';
$string['tour2_content_addblock'] = 'در صورتی که حالت ویرایش را فعال کنید می‌توانید از کشوی راهبری بلوک‌هایی اضافه کنید. ولی در مورد اضافه‌کردن هر بلوکی به صفحه‌ها با دقت فکر کنید. بلوک‌ها در برنامه موبایل نشان داده نمی‌شوند، بنابراین برای بهترین تجربهٔ کاربری بهتر است مطمئن شوید که درس شما بدون بلوک‌ها هم کامل باشد.';
$string['tour2_content_addingblocks'] = 'با استفاده از این دکمه می‌توانید بلوک‌هایی را به این صفحه اضافه کنید. البته، دربارهٔ داشتن بلوک‌ها در صفحه به‌دقت فکر کنید. بلوک‌ها در برنامهٔ موبایل مودل نمایش داده نمی‌شوند، بنابراین برای داشتن بهترین تجربهٔ کاربری بهتر است مطمئن شوید که درس شما بدون بلوک‌ها هم به‌خوبی عمل کند.';
$string['tour2_content_customisation'] = 'برای تغییر هر یک از تنظیمات درس، از منوی تنظیمات در گوشهٔ این قسمت استفاده کنید. همانند این منو، منوی تنظیمات مشابهی در صفحهٔ اول تمام فعالیت‌ها خواهید دید. هم‌اکنون سعی کنید که حالت ویرایش را فعال کنید.';
$string['tour2_content_end'] = 'به پایان تور کاربری رسیدید. این تور دوباره نمایش داده نخواهد شد مگر اینکه با استفاده از پیوندی که در پایین صفحه نمایش داده شده است، آن را بازنشانی کنید. مدیر سایت می‌تواند در صورت نیاز تورهای دیگری نیز برای این سایت ایجاد کند.';
$string['tour2_content_navigation'] = 'راهبری اکنون از طریق این کشوی راهبری انجام می‌شود. از دکمهٔ بالا برای پنهان‌کردن یا نمایش  این کشو استفاده کنید. خواهید دید که پیوندهایی برای قسمت‌های درس شما در اختیارتان قرار گرفته است.';
$string['tour2_content_opendrawer'] = 'حال سعی کنید که کشوی راهبری را باز کنید.';
$string['tour2_content_participants'] = 'شرکت‌کنندگان را اینجا ببینید. اینجا همینطور جایی است که شاگردان را اضافه یا حذف می‌کنید.';
$string['tour2_content_welcome'] = 'به پوستهٔ شتاب خوش‌آمدید. اگر سایت شما از یکی از نسخه‌های قدیمی‌تر به این نسخه ارتقا پیدا کرده است، ممکن است چیزهایی که اینجا در صفحهٔ درس می‌بینید به نظرتان متفاوت بیاید.';
$string['tour2_title_addblock'] = 'اضافه کردن یک بلوک';
$string['tour2_title_addingblocks'] = 'اضافه‌کردن بلوک‌ها';
$string['tour2_title_customisation'] = 'سفارشی‌کردن';
$string['tour2_title_end'] = 'پایان تور';
$string['tour2_title_navigation'] = 'راهبری';
$string['tour2_title_opendrawer'] = 'کشوی راهبری را باز کنید';
$string['tour2_title_participants'] = 'شرکت‌کنندگان درس';
$string['tour2_title_welcome'] = 'خوش آمدید';
$string['tour3_content_displayoptions'] = 'درس‌ها می‌توانند بر اساس نام درس یا بر اساس آخرین زمان دسترسی به آنها مرتب شوند.

همچنین می‌توانید انتخاب کنید که درس‌ها به‌صورت یک لیست، یا همراه با اطلاعات خلاصه، یا به‌طور پیش‌فرض به‌صورت یک سری «کارت» نمایش داده شوند.';
$string['tour3_content_recentcourses'] = 'بلوک «درس‌های اخیرا مراجعه‌شده» با نمایش دادن آخرین درس‌هایی که بازدید کرده‌اید، این امکان را برایتان فراهم می‌کند تا به‌سرعت به آنها دوباره دسترسی داشته باشید.';
$string['tour3_title_overview'] = 'نمای کلی درس';
$string['tour3_title_recentcourses'] = 'درس‌های اخیرا مراجعه‌شده';
$string['tour4_title_icon'] = 'پیام‌دهی';
$string['tour4_title_settings'] = 'تنظیمات پیام‌دهی';
$string['tour4_title_starred'] = 'انتخاب شده';
$string['tour_activityinfo_activity_student_content'] = 'تاریخ‌های فعالیت به علاوه آنچه برای انجام فعالیت باید تکمیل شود در صفحه فعالیت نشان داده شده است.';
$string['tour_activityinfo_activity_student_title'] = 'جدید: اطلاعاتی درباره فعالیت';
$string['tour_activityinfo_activity_teacher_title'] = 'جدید: اطلاعاتی درباره فعالیت';
$string['tour_activityinfo_course_student_content'] = 'تاریخ‌های فعالیت و/یا آنچه برای انجام و تکمیل فعالیت باید انجام شود، در صفحه درس نمایش داده می‌شود.';
$string['tour_activityinfo_course_student_title'] = 'جدید: اطلاعاتی درباره فعالیت';
$string['tour_activityinfo_course_teacher_content'] = 'تنظیمات جدید درس "نمایش شرایط تکمیل" و "نمایش تاریخ فعالیت" شما را قادر می‌سازد تا انتخاب کنید که شرایط تکمیل فعالیت (در صورت تنظیم) و/یا تاریخ فعالیت‌ها برای شاگردان در صفحه درس نمایش داده شود یا خیر.';
$string['tour_activityinfo_course_teacher_title'] = 'جدید: اطلاعاتی درباره فعالیت';
$string['tour_gradebook_filter_title'] = 'فیلتر کردن با نام';
$string['tour_navigation_course_edit_teacher_content'] = '@@PIXICON::tour/tour_course_admin_1::tool_usertours@@<br>برای اضافه‌کردن محتوای جدید یا ویرایش محتوای موجود.';
$string['tour_navigation_course_edit_teacher_title'] = 'فعال کردن حالت ویرایش';
$string['tour_navigation_course_index_teacher_content'] = '@@PIXICON::tour/tour_course_admin_2::tool_usertours@@<br>برای تغییر ترتیب محتویات درس می‌توانید فعالیت‌ها را با استفاده از mouse جابجا کنید.';
$string['tour_navigation_course_index_teacher_title'] = 'فهرست درس';
$string['tour_navigation_course_student_tour_name'] = 'فهرست درس';
$string['tour_navigation_dashboard_content'] = '@@PIXICON::tour/tour_dashboard::tool_usertours@@<br>این پنل کنار صفحه می‌تواند امکانات بیشتری را ارائه کند.';
$string['tour_navigation_dashboard_title'] = 'این کشو را باز کنید تا گزینه‌های بیشتری را ببینید';
$string['tour_resetforall'] = 'وضعیت تور بازنشانی شد. این تور دوباره به تمام کاربران نمایش داده خواهد شد.';
$string['tourconfig'] = 'فایل پیکربندی تور برای وارد کردن';
$string['tourisenabled'] = 'تور فعال است';
$string['tourlist_explanation'] = 'به هر تعدادی که بخواهید می‌توانید تور بسازید و آنها را برای قسمت‌های مختلف مودل فعال کنید. بازای هر صفحه حداکثر یک تور می‌توانید بسازید.';
$string['tours'] = 'تورها';
$string['usertours'] = 'تورهای کاربر';
$string['usertours:managetours'] = 'ساخت، ویرایش، و حذف تورهای کاربران';
$string['viewtour_edit'] = 'می‌توانید <a href="{$a->editlink}">پیش‌فرض‌های تور را ویرایش کنید</a> و <a href="{$a->resetlink}">اجبار کنید</a> که تور دوباره به تمام کاربران نمایش داده شود.';
$string['viewtour_info'] = 'این تور «{$a->tourname}» است. این تور بر مسیر «{$a->path}» اعمال می‌شود.';
