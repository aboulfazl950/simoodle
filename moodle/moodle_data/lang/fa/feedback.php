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
 * Strings for component 'feedback', language 'fa', version '4.5'.
 *
 * @package     feedback
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_item'] = 'اضافه کردن سؤال';
$string['add_pagebreak'] = 'اضافه کردن یک انتهای صفحه';
$string['adjustment'] = 'آرایش';
$string['after_submit'] = 'بعد از ثبت نظر';
$string['allowfullanonymous'] = 'اجازهٔ ناشناسی کامل';
$string['analysis'] = 'تحلیل';
$string['anonymous'] = 'ناشناس';
$string['anonymous_edit'] = 'ثبت کردن نام کاربران';
$string['anonymous_entries'] = 'نظرهای وارد شدهٔ ناشناس ({$a})';
$string['anonymous_user'] = 'کاربر ناشناس';
$string['append_new_items'] = 'اضافه کردن موارد جدید';
$string['autonumbering'] = 'شماره‌گذاری خودکار سؤال‌ها';
$string['autonumbering_help'] = 'شماره‌گذاری خودکار برای سؤال‌ها را فعال یا غیر فعال می‌کند';
$string['average'] = 'میانگین';
$string['bold'] = 'ذخیم';
$string['calendarend'] = 'بسته می‌شود {$a}';
$string['calendarstart'] = '{$a} باز می‌شود';
$string['cannotsavetempl'] = 'ذخیره کردن الگوها مجاز نیست';
$string['captcha'] = 'تصویر امنیتی';
$string['captchanotset'] = 'تصویر امنیتی تعیین نشده است.';
$string['check'] = 'چند گزینه‌ای - انتخاب چند گزینه';
$string['check_values'] = 'پاسخ‌های ممکن';
$string['checkbox'] = 'چند گزینه‌ای - انتخاب چند گزینه مجاز است (مربع‌های انتخابی)';
$string['choosefile'] = 'فایلی را انتخاب کنید';
$string['chosen_feedback_response'] = 'پاسخ انتخاب شده';
$string['complete_the_form'] = 'پاسخ دادن به سوال‌ها...';
$string['completed'] = 'کامل شده';
$string['completed_feedbacks'] = 'جواب‌های ارائه شده';
$string['completiondetail:submit'] = 'ثبت بازخورد';
$string['completionsubmit'] = 'در صورت ارسال بازخورد به‌عنوان کامل‌شده نمایش داده شود';
$string['configallowfullanonymous'] = 'اگر این گزینه روی بله تنظیم شده باشد، بازخوردهایی که در صفحهٔ اول قرار دارند را می‌توان بدون وارد شدن به سایت با استفاده از حساب کاربری کامل کرد.';
$string['confirmdeleteentry'] = 'آیا مطمئنید که می‌خواهید این اطلاعات را پاک کنید؟';
$string['confirmdeleteitem'] = 'آیا مطمئنید که می‌خواهید این مورد را پاک کنید؟';
$string['confirmdeletetemplate'] = 'آیا مطمئنید که می‌خواهید این الگو را پاک کنید؟';
$string['confirmusetemplate'] = 'آیا مطمئنید که می‌خواهید از این الگو استفاده کنید؟';
$string['continue_the_form'] = 'ادامه دادن فرم';
$string['count_of_nums'] = 'تعداد عددها';
$string['courseid'] = 'شناسهٔ درس';
$string['creating_templates'] = 'ذخیرهٔ این سوال‌ها به عنوان یک الگوی جدید';
$string['delete_entry'] = 'پاک کردن اطلاعات وارد شده';
$string['delete_item'] = 'پاک کردن سؤال';
$string['delete_old_items'] = 'پاک کردن موارد قدیمی';
$string['delete_template'] = 'حذف الگو';
$string['delete_templates'] = 'حذف الگو...';
$string['depending'] = 'سؤال‌های وابسته';
$string['depending_help'] = 'با استفاده از سؤال‌های وابسته، می‌توانید با توجه به پاسخ‌های ارائه شده به سایر سؤال‌ها تصمیم بگیرید که سؤالی نشان داده شود یا خیر.<br />
<strong>در اینجا مثالی برای ساختن این گونه سؤال‌ها ارائه می‌شود:</strong><br />
<ul>
<li>ابتدا سؤالی که قرار است سایر سؤال‌ها به پاسخ آن وابسته باشند را تعریف کنید.</li>
<li>سپس یک علامت انتهای صفحه اضافه کنید.</li>
<li>سپس سؤال‌هایی که به پاسخ سؤال قبلی وابسته هستند را اضافه کنید<br />
در فرم تعریف سؤال، سؤالی که این سؤال به پاسخ ان وابسته است را انتخاب کنید و مقدار مورد نیاز را در قسمت «مقدار وابسته» وارد کنید.</li>
</ul>
<strong>ساختار حاصل باید به این صورت باشد:</strong>
<ol>
<li>سؤال: آیا دارای اتومبیل شخصی می‌باشید؟ پاسخ: بله/خیر</li>
<li>انتهای صفحه</li>
<li>سؤال: اتومبیل شما چه رنگی است؟<br />
(این سؤال به پاسخ «بله» به سؤال قبل وابسته است)</li>
<li>سؤال: چرا اتومبیل ندارید؟<br />
(این سؤال به پاسخ «خیر» به سؤال قبل وابسته است)</li>
<li>... سایر سؤال‌ها</li>
</ol>
همین. لذت ببرید!';
$string['dependitem'] = 'وابستگی به سؤال';
$string['dependvalue'] = 'مقدار وابسته';
$string['description'] = 'توصیف';
$string['do_not_analyse_empty_submits'] = 'تحلیل نشدن پاسخ‌های خالی';
$string['drop_feedback'] = 'پاک شدن از این درس';
$string['dropdown'] = 'چند گزینه‌ای - انتخاب یک گزینه مجاز است (لیست باز شونده)';
$string['dropdown_values'] = 'پاسخ‌ها';
$string['dropdownlist'] = 'چند گزینه‌ای - تک پاسخی (منوی باز شونده)';
$string['dropdownrated'] = 'لیست باز شونده (امتیاز دار)';
$string['edit_item'] = 'ویرایش سؤال';
$string['edit_items'] = 'ویرایش سوال‌ها';
$string['email_notification'] = 'خبر رسانی از طریق پست الکترونیکی';
$string['emailteachermail'] = '{$a->username} فرم بازخورد ({$a->feedback}) را پر کرده است

فرم پر شده را می‌توانید در این آدرس ببینید:

{$a->url}';
$string['emailteachermailhtml'] = '{$a->username} فرم بازخورد (<i>{$a->feedback}</i>) را پر کرده است<br /><br />
فرم پر شده را می‌توانید در <a href="{$a->url}">این آدرس</a> ببینید.';
$string['entries_saved'] = 'پاسخ‌های شما ذخیره شدند. با تشکر.';
$string['export_questions'] = 'صادر کردن سوال‌ها';
$string['export_to_excel'] = 'صدور به Excel';
$string['feedback:addinstance'] = 'اضافه‌کردن یک بازخورد جدید';
$string['feedback:complete'] = 'کامل کردن یک بازخورد';
$string['feedback:createprivatetemplate'] = 'ساختن الگوی خصوصی';
$string['feedback:createpublictemplate'] = 'ساختن الگوی عمومی';
$string['feedback:deletesubmissions'] = 'پاک کردن اطلاعات وارد شده';
$string['feedback:deletetemplate'] = 'پاک کردن الگو';
$string['feedback:edititems'] = 'ویرایش سؤال‌ها';
$string['feedback:mapcourse'] = 'مرتبط کردن درس‌ها با بازخوردهای عمومی';
$string['feedback:receivemail'] = 'دریافت پست‌های الکترونیکی اطلاع رسانی';
$string['feedback:view'] = 'دیدن یک بازخورد';
$string['feedback:viewanalysepage'] = 'دیدن صفحهٔ تحلیل پس از ارائه';
$string['feedback:viewreports'] = 'دیدن گزارش‌ها';
$string['feedback_is_not_for_anonymous'] = 'ارائه این بازخورد به صورت ناشناس ممکن نیست';
$string['feedback_is_not_open'] = 'بازخورد باز نیست';
$string['feedbackclose'] = 'بستن بازخورد در';
$string['feedbackopen'] = 'باز کردن بازخورد در';
$string['file'] = 'فایل';
$string['filter_by_course'] = 'محدود شدن لیست بر اساس درس';
$string['handling_error'] = 'در مدیریت اقدامات ماژول بازخورد خطا صورت گرفت';
$string['hide_no_select_option'] = 'نشان ندادن گزینهٔ «انتخاب نشده»';
$string['horizontal'] = 'افقی';
$string['import_questions'] = 'وارد کردن سوال‌ها';
$string['import_successfully'] = 'وارد کردن سؤال‌ها با موفقیت انجام شد';
$string['importfromthisfile'] = 'وارد کردن از این فایل';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['info'] = 'اطلاعات';
$string['infotype'] = 'نوع اطلاعات';
$string['insufficient_responses'] = 'کافی نبودن پاسخ‌ها';
$string['insufficient_responses_for_this_group'] = 'پاسخ‌های کافی برای این گروه وجود ندارد';
$string['insufficient_responses_help'] = 'پاسخ‌های کافی برای این گروه وجود ندارد.

برای ناشناس نگاه داشتن این بازخورد، حداقل ۲ پاسخ باید ارائه شود.';
$string['item_label'] = 'عنوان';
$string['item_name'] = 'سؤال';
$string['label'] = 'متن';
$string['mapcourse'] = 'نسبت دادن بازخورد به درس‌ها';
$string['mapcourse_help'] = 'به صورت پیش‌فرض، فرم‌های بازخوردی که در صفحهٔ اول ساخته شوند در کل سایت در دسترس هستند
و با استفاده از بلوک بازخورد در تمام درس‌ها نمایش داده می‌شوند. با استفاده از بلوک‌های چسبناک می‌توانید کاری کنید که فرم بازخورد در درس‌ها نمایش داده شود. همچنین با نسبت دادن فرم بازخورد به چند درس خاص می‌توانید کاری کنید که فرم بازخورد فقط در آن درس‌ها قابل دسترسی باشد.';
$string['mapcourseinfo'] = 'این بازخورد مربوط به کل سایت است و در تمام درس‌هایی که از بلوک بازخورد استفاده می‌کنند قابل دستیابی است. هرچند با نسبت دادن این بازخورد با یک سری درس، می‌توانید درس‌هایی که این بازخورد در آن‌ها نمایش داده می‌شود را محدود کنید. درس مورد نظرتان را جستجو کنید و آن را به این بازخورد مرتبط کنید.';
$string['mapcoursenone'] = 'هیچ درسی نسبت داده نشده است. این بازخورد در تمام درس‌ها در دسترس خواهد بود';
$string['mapcourses'] = 'نسبت دادن بازخورد به درس‌ها';
$string['mappedcourses'] = 'درس‌های متناظر';
$string['maximal'] = 'حداکثر';
$string['messageprovider:message'] = 'یادآوری بازخورد';
$string['messageprovider:submission'] = 'خبرهای مربوط به بازخورد';
$string['mode'] = 'حالت';
$string['modulename'] = 'بازخورد';
$string['modulename_help'] = 'با استفاده از ماژول فعالیت بازخورد اساتید می‌توانند یک پرسشنامه سفارشی بسازند تا با استفاده از سوال‌هایی از انواع مختلف (شامل چندگزینه‌ای، بله/خیر یا متنی) بازخورد شرکت‌کنندگان را جمع‌آوری کنند.

پاسخ‌های داده‌شده می‌توانند در صورت تمایل ناشناس باشند. نتایج هم می‌توانند به همهٔ شرکت‌کنندگان یا تنها به اساتید نمایش داده شوند. فعالیت‌های بازخوردی که در صفحهٔ اول سایت باشند می‌توانند توسط کاربرانی که وارد سایت نشده‌اند هم کامل شوند.

از فعالیت‌های بازخورد می‌توان برای موارد زیر استفاده کرد

* برای ارزیابی دروس، به‌منظور بهبود محتوای درس برای شرکت‌کنندگان آتی
* برای اینکه شرکت‌کنندگان بتوانند برای ماژول‌های درسی، رویدادها، ... ثبت‌نام کنند
* برای نظرسنجی از بازدیدکنندگان درباره درس‌های موجود، قوانین مدرسه، ...
* برای نظرسنجی‌های مربوط به شکایت از تحت تبعیض واقع شدن یا مورد تمسخر قرار گرفتن به این صورت که شاگردان بتوانند به‌طور ناشناس وقایع را گزارش دهند';
$string['modulename_link'] = 'mod/feedback/view';
$string['modulenameplural'] = 'بازخوردها';
$string['move_item'] = 'تغییر مکان این سؤال';
$string['multichoice'] = 'چند گزینه‌ای';
$string['multichoice_values'] = 'مقدار گزینه‌ها';
$string['multichoicerated'] = 'چند گزینه‌ای (امتیاز دار)';
$string['multichoicetype'] = 'نوع چند گزینه‌ای';
$string['multiplesubmit'] = 'ارسال چندباره';
$string['multiplesubmit_help'] = 'در صورت فعال بودن در بازخوردهای ناشناس، کاربران می‌توانند هر چند بار که بخواهند فرم بازخورد را پر کنند و بفرستند.';
$string['name'] = 'نام';
$string['name_required'] = 'نام لازم است';
$string['next_page'] = 'صفحهٔ بعد';
$string['no_handler'] = 'مدیریت کننده‌ای وجود ندارد برای اقدام';
$string['no_itemlabel'] = 'بدون عنوان';
$string['no_itemname'] = 'سؤال بدون متن';
$string['no_items_available_yet'] = 'هنوز سوالی تعریف نشده است';
$string['no_templates_available_yet'] = 'هنوز الگویی موجود نیست';
$string['non_anonymous'] = 'نام کاربران ثبت و به همراه پاسخ‌ها نمایش داده خواهد شد';
$string['non_anonymous_entries'] = 'اطلاعات وارد شده به صورت غیر ناشناس ({$a})';
$string['non_respondents_students'] = 'شاگردانی که پاسخ نداده‌اند';
$string['not_completed_yet'] = 'هنوز کامل نکرده است';
$string['not_selected'] = 'انتخاب نشده';
$string['not_started'] = 'شروع نکرده است';
$string['numeric'] = 'پاسخ عددی';
$string['numeric_range_from'] = 'حد پائین';
$string['numeric_range_to'] = 'حد بالا';
$string['of'] = 'از';
$string['oldvaluespreserved'] = 'تمام سوال‌های قدیمی و پاسخ‌های وارد شده برای آن‌ها حفظ خواهند ماند';
$string['oldvalueswillbedeleted'] = 'سوال‌های فعلی و پاسخ‌های کاربران به آن‌ها حذف خواهند شد';
$string['only_one_captcha_allowed'] = 'در هر فرم بازخورد حداکثر می‌توان یک تصویر امنیتی داشت';
$string['overview'] = 'مرور اجمالی';
$string['page'] = 'صفحه';
$string['page-mod-feedback-x'] = 'هر صفحه‌ای از ماژول بازخورد';
$string['page_after_submit'] = 'صفحهٔ بعد از پر کردن فرم';
$string['pagebreak'] = 'انتهای صفحه';
$string['pluginadministration'] = 'مدیریت بازخورد';
$string['pluginname'] = 'بازخورد';
$string['position'] = 'مکان';
$string['previewquestions'] = 'پیش‌نمایش سوال‌ها';
$string['previous_page'] = 'صفحهٔ قبل';
$string['public'] = 'عمومی';
$string['question'] = 'سؤال';
$string['questionandsubmission'] = 'تنظیمات مربوط به سؤال‌ها و ثبت پاسخ';
$string['questions'] = 'سوال‌ها';
$string['radio'] = 'چند گزینه‌ای - انتخاب یک گزینه';
$string['radio_values'] = 'پاسخ‌ها';
$string['ready_feedbacks'] = 'بازخوردهای آماده';
$string['required'] = 'الزامی بودن';
$string['resetting_data'] = 'بازنشانی کردن پاسخ‌های بازخورد';
$string['resetting_feedbacks'] = 'بازنشانی کردن بازخوردها';
$string['response_nr'] = 'پاسخ شمارهٔ';
$string['responses'] = 'پاسخ‌ها';
$string['responsetime'] = 'زمان پاسخ‌ها';
$string['save_as_new_item'] = 'ذخیره به عنوان سؤال جدید';
$string['save_as_new_template'] = 'ذخیره به عنوان الگوی جدید';
$string['save_entries'] = 'فرستادن پاسخ‌های شما';
$string['save_item'] = 'ذخیرهٔ سؤال';
$string['saving_failed'] = 'ذخیره کردن ناموفق بود';
$string['search:activity'] = 'بازخورد - اطلاعات فعالیت';
$string['search_course'] = 'جستجوی درس';
$string['searchcourses'] = 'جستجوی درس‌ها';
$string['searchcourses_help'] = 'از طریق کد یا نام درسی (درس‌هایی) که می‌خواهید با این بازخورد مرتبط کنید، به جستجوی درس(ها) بپردازید.';
$string['selected_dump'] = 'مقدار اندیس‌های انتخاب شده از متغیر $SESSION در زیر نمایش داده شده است:';
$string['send'] = 'فرستادن';
$string['send_message'] = 'فرستادن پیام';
$string['show_all'] = 'نمایش همه';
$string['show_analysepage_after_submit'] = 'نمایش صفحهٔ تحلیل پس از ارسال فرم بازخورد';
$string['show_entries'] = 'نمایش پاسخ‌ها';
$string['show_entry'] = 'نمایش پاسخ';
$string['show_nonrespondents'] = 'نمایش کسانی که پاسخ نداده‌اند';
$string['site_after_submit'] = 'سایت بعد از پر کردن فرم';
$string['sort_by_course'] = 'مرتب شدن بر اساس درس';
$string['started'] = 'شروع کرده است';
$string['subject'] = 'موضوع';
$string['switch_item_to_not_required'] = 'تغییر به: پاسخ الزامی نیست';
$string['switch_item_to_required'] = 'تغییر به: پاسخ الزامی ایست';
$string['template'] = 'الگو';
$string['template_saved'] = 'الگو ذخیره شد';
$string['templates'] = 'الگو‌ها';
$string['textarea'] = 'پاسخ متنی بلند';
$string['textarea_height'] = 'تعداد خط‌ها';
$string['textarea_width'] = 'عرض';
$string['textfield'] = 'پاسخ متنی کوتاه';
$string['textfield_maxlength'] = 'حداکثر حروف قابل قبول';
$string['textfield_size'] = 'عرض مستطیل ورود متن';
$string['there_are_no_settings_for_recaptcha'] = 'تصویر امنیتی دارای تنظیمات نمی‌باشد';
$string['this_feedback_is_already_submitted'] = 'شما قبلا این فعالیت را کامل کرده‌اید.';
$string['typemissing'] = 'مقدار «نوع» از قلم افتاده است';
$string['update_item'] = 'ذخیرهٔ تغییرات در سؤال';
$string['url_for_continue'] = 'آدرس مربوط به دکمهٔ ادامه';
$string['url_for_continue_help'] = 'به طور پیش‌فرض وقتی یک فرم بازخورد پر شده و ارسال می‌شود، مقصد دکمهٔ ادامه صفحهٔ درس خواهد بود. در این قسمت می‌توانید آدرس دیگری را به عنوان مقصد این دکمه تعیین نمائید.';
$string['use_one_line_for_each_value'] = '<br />در هر خط یک پاسخ را وارد کنید!';
$string['use_this_template'] = 'استفاده از این الگو';
$string['using_templates'] = 'استفاده از یک الگو';
$string['vertical'] = 'عمودی';
