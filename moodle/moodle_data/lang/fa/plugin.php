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
 * Strings for component 'plugin', language 'fa', version '4.5'.
 *
 * @package     plugin
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'اقدام‌ها';
$string['availability'] = 'دسترسی';
$string['cancelinstallall'] = 'لغو نصب‌های جدید ({$a})';
$string['cancelinstallhead'] = 'در حال لغو نصب پلاگین‌ها';
$string['cancelinstallinfo'] = 'پلاگین‌های زیر هنوز به‌طور کامل نصب نشده‌اند و نصب آنها می‌تواند لغو شود. برای این‌کار، اکنون باید پوشهٔ پلاگین از کارگزار پاک شود. برای جلوگیری از از دست دادن داده‌ها (از جمله تغییراتی که خودتان در کد داده‌اید) مطمئن شوید واقعا این کاری است که می‌خواهید انجام دهید.';
$string['cancelinstallinfodir'] = 'پوشه‌ای که می‌خواهد پاک شود: {$a}';
$string['cancelinstallone'] = 'لغو این نصب';
$string['cancelupgradeall'] = 'لغو ارتقاءها({$a})';
$string['cancelupgradehead'] = 'در حال بازیابی نسخهٔ قبلی پلاگین‌ها';
$string['cancelupgradeone'] = 'لغو این ارتقاء';
$string['checkforupdates'] = 'چک کردن موجود بودن به‌روزرسانی';
$string['checkforupdateslast'] = 'آخرین بررسی در {$a} انجام شده است';
$string['dependencyavailable'] = 'موجود';
$string['dependencyfails'] = 'ناموفق';
$string['dependencyinstall'] = 'نصب';
$string['dependencyinstallhead'] = 'در حال نصب وابستگی‌های ناموجود';
$string['dependencyinstallmissing'] = 'نصب وابستگی‌های ناموجود ({$a})';
$string['dependencymissing'] = 'مفقود';
$string['dependencyunavailable'] = 'ناموجود';
$string['dependencyupload'] = 'بارگذاری';
$string['dependencyuploadmissing'] = 'ارسال فایل‌های ZIP';
$string['detectedmisplacedplugin'] = 'پلاگین «{$a->component}» در محل نادرست {$a->current} نصب شده است، محل مورد انتظار «{$a->expected}» است.';
$string['displayname'] = 'نام پلاگین';
$string['err_response_curl'] = 'ناتوانی در دریافت اطلاعات به‌روزرسانی‌های موجود - خطای غیرمنتظرهٔ cURL.';
$string['err_response_format_version'] = 'نسخهٔ غیرمنتظره برای قالب پاسخ. لطفا موجود بودن به‌روزرسانی را مجددا بررسی کنید.';
$string['err_response_http_code'] = 'ناتوانی در دریافت اطلاعات به‌روزرسانی‌های موجود - کد پاسخ HTTP غیرمنتظره.';
$string['filterall'] = 'همهٔ پلاگین‌ها نشان داده شوند';
$string['filtercontribonly'] = 'فقط پلاگین‌های اضافی نشان داده شوند';
$string['filterupdatesonly'] = 'نمایش موارد قابل به‌روز‌رسانی';
$string['isenabled'] = 'فعال است؟';
$string['misdepinfoplugin'] = 'اطلاعات پلاگین';
$string['misdepinfoversion'] = 'اطلاعات نسخه';
$string['misdepsavail'] = 'وابستگی‌های مفقودهٔ موجود';
$string['misdepsunavail'] = 'وابستگی‌های مفقودهٔ ناموجود';
$string['misdepsunavaillist'] = 'هیچ نسخه‌ای برای تأمین الزامات وابستگی پیدا نشد: {$a}.';
$string['misdepsunknownlist'] = 'در پوشه پلاگین‌ها وجود ندارد: <strong>{$a}</strong>.';
$string['moodleversion'] = 'مودل {$a}';
$string['noneinstalled'] = 'هیچ پلاگینی از این نوع نصب نشده است';
$string['notdownloadable'] = 'دریافت بسته مقدور نبود';
$string['notdownloadable_help'] = 'بستهٔ ZIP شامل به‌روزرسانی نتوانست به‌طور خودکار دریافت شود. برای راهنمایی بیشتر لطفا به صفحه مستندات مراجعه کنید.';
$string['notdownloadable_link'] = 'admin/mdeploy/notdownloadable';
$string['notes'] = 'توضیحات';
$string['notwritable'] = 'فایل‌های پلاگین قابل نوشتن نیستند';
$string['notwritable_help'] = 'فایل‌های پلاگین توسط کارگزار وب قابل نوشتن نیستند. پروسهٔ کارگزار وب باید دسترسی نوشتن در پوشهٔ پلاگین و تمام محتویات آن را داشته باشد. دسترسی نوشتن در پوشهٔ اصلی مربوط به نوع پلاگین مورد نظر نیز ممکن است نیاز باشد.';
$string['otherplugin'] = '{$a->component}';
$string['otherpluginversion'] = '{$a->component} ({$a->version})';
$string['overviewall'] = 'تمام پلاگین‌ها';
$string['overviewext'] = 'پلاگین‌های اضافی';
$string['overviewupdatable'] = 'به‌روزرسانی‌های موجود';
$string['packagesdownloading'] = 'در حال دریافت {$a}';
$string['packagesextracting'] = 'در حال خارج‌کردن {$a} از حالت فشرده';
$string['packagesvalidating'] = 'در حال اعتبارسنجی {$a}';
$string['packagesvalidatingfailed'] = 'به دلیل ناموفق بودن اعتبارسنجی، نصب متوقف شد';
$string['packagesvalidatingok'] = 'اعتبارسنجی با موفقیت انجام شد، نصب می‌تواند ادامه یابد';
$string['plugincheckall'] = 'تمام پلاگین‌ها';
$string['plugincheckattention'] = 'پلاگین‌های نیازمند توجه';
$string['pluginchecknone'] = 'هیچ پلاگینی نیازمند توجه شما نیست';
$string['pluginchecknotice'] = 'این صفحه پلاگین‌هایی که در حین ارتقا ممکن است نیازمند توجه شما باشند (مانند پلاگین‌های جدیدی که قرار است نصب شوند، پلاگین‌هایی که قرار است ارتقا داده شوند، پلاگین‌هایی که کد آنها موجود نیست و غیره) را نمایش می‌دهد. پلاگین‌های اضافی در صورتی که به‌روزرسانی‌ای برایشان موجود باشد نمایش داده می‌شوند. توصیه می‌شود بررسی کنید که آیا نسخهٔ جدیدتری از پلاگین‌ها موجود است و در اینصورت کد آنها را قبل از ادامهٔ ارتقای مودل به‌روز کنید.';
$string['plugindisable'] = 'غیرفعال نمودن';
$string['plugindisabled'] = 'غیر فعال';
$string['pluginenable'] = 'فعال نمودن';
$string['pluginenabled'] = 'فعال';
$string['release'] = 'انتشار';
$string['requiredby'] = 'پیش‌نیاز برای: {$a}';
$string['requires'] = 'پیش‌نیازها';
$string['rootdir'] = 'دایرکتوری';
$string['settings'] = 'تنظیمات';
$string['source'] = 'منبع';
$string['sourceext'] = 'افزونه';
$string['sourcestd'] = 'استاندارد';
$string['status'] = 'وضعیت';
$string['status_delete'] = 'در آستانهٔ حذف';
$string['status_downgrade'] = 'نسخهٔ بالاتری قبلا نصب شده است!';
$string['status_missing'] = 'از روی دیسک پاک شده است';
$string['status_new'] = 'آمادهٔ نصب';
$string['status_nodb'] = 'پایگاه داده وجود ندارد';
$string['status_upgrade'] = 'آمادهٔ ارتقاء';
$string['status_uptodate'] = 'نصب‌شده';
$string['supportedmoodleversions'] = 'نسخه‌های پشتیبانی‌شده مودل';
$string['systemname'] = 'شناسه';
$string['type_antivirus'] = 'پلاگین ضد ویروس';
$string['type_antivirus_plural'] = 'پلاگین‌های ویروس‌یابی';
$string['type_auth'] = 'شیوهٔ شناسایی';
$string['type_auth_plural'] = 'پلاگین‌های شناسائی';
$string['type_availability'] = 'محدودیت دسترسی';
$string['type_availability_plural'] = 'محدودیت‌های دسترسی';
$string['type_block'] = 'بلوک';
$string['type_block_plural'] = 'بلوک‌ها';
$string['type_cachestore'] = 'انبارهٔ cache';
$string['type_cachestore_plural'] = 'انباره‌های cache';
$string['type_calendartype'] = 'نوع تقویم';
$string['type_calendartype_plural'] = 'انواع تقویم';
$string['type_contentbank'] = 'بانک محتوا';
$string['type_contenttype'] = 'بانک محتوا';
$string['type_coursereport'] = 'گزارش درس';
$string['type_coursereport_plural'] = 'گزارش‌های درس';
$string['type_customfield'] = 'فیلد سفارشی';
$string['type_customfield_plural'] = 'مشخصه‌های سفارشی';
$string['type_dataformat'] = 'قالب داده';
$string['type_dataformat_plural'] = 'قالب‌های داده';
$string['type_editor'] = 'ویرایشگر';
$string['type_editor_plural'] = 'ویرایشگرها';
$string['type_enrol'] = 'روش ثبت‌نام';
$string['type_enrol_plural'] = 'روش‌های ثبت نام';
$string['type_fileconverter'] = 'مبدل اسناد';
$string['type_fileconverter_plural'] = 'مبدل‌های اسناد';
$string['type_fileconvertermanage'] = 'مدیریت مبدل‌های اسناد';
$string['type_filter'] = 'فیلتر';
$string['type_filter_plural'] = 'فیلترهای متنی';
$string['type_format'] = 'قالب درس';
$string['type_format_plural'] = 'قالب‌های درسی';
$string['type_gradeexport'] = 'روش صدور نمرات';
$string['type_gradeexport_plural'] = 'روش‌های صدور نمرات';
$string['type_gradeimport'] = 'روش وارد کردن نمرات';
$string['type_gradeimport_plural'] = 'روش‌های وارد کردن نمرات';
$string['type_gradereport'] = 'گزارش دفتر نمره';
$string['type_gradereport_plural'] = 'گزارش‌های دفتر نمره';
$string['type_gradingform'] = 'روش نمره‌دهی پیشرفته';
$string['type_gradingform_plural'] = 'شیوه‌های نمره‌دهی پیشرفته';
$string['type_local'] = 'پلاگین محلی';
$string['type_local_plural'] = 'پلاگین‌های محلی';
$string['type_media'] = '';
$string['type_media_plural'] = 'پخش‌کننده‌های صوتی-تصویری';
$string['type_message'] = 'خروجی پیام';
$string['type_message_plural'] = 'خروجی‌های پیام';
$string['type_mlbackend'] = 'زیرساخت یادگیری ماشین';
$string['type_mlbackend_plural'] = 'زیرساخت یادگیری ماشین';
$string['type_mnetservice'] = 'سرویس شبکهٔ مودلی';
$string['type_mnetservice_plural'] = 'سرویس‌های شبکهٔ مودلی';
$string['type_mod'] = 'ماژول فعالیت';
$string['type_mod_plural'] = 'ماژول‌های فعالیت';
$string['type_paygw'] = 'درگاه پرداخت';
$string['type_paygw_plural'] = 'درگاه‌های پرداخت';
$string['type_paygwmanage'] = 'مدیریت درگاه‌های پرداخت';
$string['type_plagiarism'] = 'پلاگین تقلب‌یاب';
$string['type_plagiarism_plural'] = 'پلاگین‌های جلوگیری از تقلب';
$string['type_portfolio'] = 'پورتفولیو';
$string['type_portfolio_plural'] = 'پورتفولیوها';
$string['type_profilefield'] = 'نوع مشخصه فردی کاربر';
$string['type_profilefield_plural'] = 'انواع مشخصه‌های اضافی';
$string['type_qbank_plural'] = 'افزونه‌های بانک سوال';
$string['type_qbehaviour'] = 'رفتار سؤال';
$string['type_qbehaviour_plural'] = 'رفتارهای سؤال';
$string['type_qformat'] = 'قالب ورود/صدور سؤال';
$string['type_qformat_plural'] = 'قالب‌های ورود/صدور سؤال‌ها';
$string['type_qtype'] = 'نوع سؤال';
$string['type_qtype_plural'] = 'نوع‌های سؤال';
$string['type_report'] = 'گزارش سایت';
$string['type_report_plural'] = 'گزارش‌ها';
$string['type_repository'] = 'مخزن';
$string['type_repository_plural'] = 'انباره‌ها';
$string['type_search'] = 'موتور جستجو';
$string['type_search_plural'] = 'موتورهای جستجو';
$string['type_smsgateway'] = 'درگاه پیامک';
$string['type_smsgateway_plural'] = 'درگاه‌های پیامک';
$string['type_theme'] = 'پوسته';
$string['type_theme_plural'] = 'پوسته‌ها';
$string['type_tool'] = 'ابزار مدیر';
$string['type_tool_plural'] = 'ابزارهای مدیر';
$string['type_webservice'] = 'پروتکل وب‌سرویس';
$string['type_webservice_plural'] = 'پروتکل‌های وب‌سرویس';
$string['uninstall'] = 'حذف';
$string['uninstallconfirm'] = 'شما در آستانهٔ حذف پلاگین <em>{$a->name}</em> هستید. این کار تمام داده‌های مربوط به این پلاگین (شامل پیکربندی‌ها، لاگ‌ها، فایل‌هایی از کاربران که توسط این پلاگین مدیریت می‌شوند و غیره) را به‌طور کامل از پایگاه داده پاک خواهد کرد. هیچ راه بازگشتی نیست و مودل به‌خودی‌خود هیچ پشتیبانی برای شما نخواهد ساخت. آیا مطمئن هستید که می‌خواهید ادامه دهید؟';
$string['uninstalldelete'] = 'تمام داده‌های مرتبط با پلاگین <em>{$a->name}</em> از پایگاه داده حذف شدند. برای جلوگیری از اینکه پلاگین خودش را دوباره نصب کند، پوشهٔ پلاگین <em>{$a->rootdir}</em> باید هم‌اکنون به‌طور دستی از روی کارگزار شما پاک شود. به دلیل نداشتن مجوز نوشتن، مودل خودش نمی‌تواند این پوشه را پاک کند.';
$string['uninstalldeleteconfirm'] = 'تمام داده‌های مرتبط با پلاگین <em>{$a->name}</em> از پایگاه داده حذف شدند. برای جلوگیری از اینکه پلاگین خودش را دوباره نصب کند، پوشهٔ پلاگین <em>{$a->rootdir}</em> باید هم‌اکنون از روی کارگزار شما پاک شود. آیا می‌خواهید پوشهٔ پلاگین را هم‌اکنون پاک کنید؟';
$string['uninstalldeleteconfirmexternal'] = 'به‌نظر می‌رسد که نسخهٔ فعلی پلاگین با checkout از سیستم مدیریت کد منبع ({$a}) تهیه شده است. اگر پوشهٔ این پلاگین را حذف کنید، ممکن است تغییرات مهم محلی کد را از دست بدهید. لطفا پیش از ادامه دادن مطمئن شوید که واقعا می‌خواهید پلاگین را حذف کنید.';
$string['uninstallextraconfirmblock'] = '{$a->instances} نمونه از این ماژول وجود دارد.';
$string['uninstallextraconfirmenrol'] = '{$a->enrolments} ثبت‌نام کاربر وجود دارد.';
$string['uninstallextraconfirmmod'] = '{$a->instances} نمونه از این ماژول در {$a->courses} درس وجود دارد.';
$string['uninstalling'] = 'حذف‌کردن {$a->name}';
$string['updateavailable'] = 'نسخهٔ جدیدی ({$a}) موجود است!';
$string['updateavailable_moreinfo'] = 'اطلاعات بیشتر...';
$string['updateavailable_release'] = 'انتشار {$a}';
$string['updatepluginconfirm'] = 'تایید به‌روزرسانی پلاگین';
$string['updatepluginconfirmexternal'] = 'به‌نظر می‌رسد که نسخهٔ فعلی پلاگین با checkout از سیستم مدیریت کد منبع ({$a}) تهیه شده است. اگر این به‌روزرسانی را نصب کنید، دیگر نخواهید توانست به‌روزرسانی‌های پلاگین را از طریق سیستم مدیریت کد منبع دریافت کنید. لطفا پیش از ادامه دادن مطمئن شوید که واقعا می‌خواهید پلاگین را به‌روز کنید.';
$string['updatepluginconfirminfo'] = 'شما در آستانهٔ نصب نسخهٔ جدیدی از پلاگین <strong>{$a->name}</strong> هستید. یک بستهٔ ZIP شامل نسخهٔ {$a->version} پلاگین از آدرس <a href="{$a->url}">{$a->url}</a> دریافت و در محل نصب مودل شما از حالت فشرده خارج خواهد شد تا بتواند نصب شما را ارتقاء دهد.';
$string['updatepluginconfirmwarning'] = 'لطفا توجه کنید که مودل به‌طور خودکار پیش از ارتقاء از پایگاه داده شما پشتیبان نمی‌سازد. قویا توصیه می‌کنیم که هم‌اکنون یک پشتیبان کامل تهیه کنید تا بتوانید با شرایط نادری که کد جدید دارای ایراداتی است که سایت شما را از دسترس خارج می‌کند یا حتی پایگاه داده شما را خراب می‌کند مقابله کنید. با مسئولیت خودتان ادامه دهید.';
$string['validationmsg_componentmatch'] = 'نام کامل کامپوننت';
$string['validationmsg_componentmismatchname'] = 'عدم تطابق در نام پلاگین';
$string['validationmsg_componentmismatchname_help'] = 'برخی از بسته‌های ZIP، نظیر آنهایی که توسط Github تولید می‌شوند، ممکن است دارای نام اشتباهی برای دایرکتوری مبدأ باشند. باید نام دایرکتوری مبدأ را تصحیح کنید تا با نام اظهاری پلاگین منطبق باشد.';
$string['validationmsg_componentmismatchname_info'] = 'پلاگین اظهار می‌کند که نامش «{$a}» است ولی این نام با نام دایرکتوری ریشه منطبق نیست.';
$string['validationmsg_componentmismatchtype'] = 'عدم تطابق در نوع پلاگین';
$string['validationmsg_componentmismatchtype_info'] = 'نوع «{$a->expected}» مورد انتظار بود ولی پلاگین اعلام می‌کند که نوعش «{$a->found}» است.';
$string['validationmsg_filenotexists'] = 'فایل خارج شده از حالت فشرده پیدا نشد';
$string['validationmsg_filesnumber'] = 'فایل‌های موجود در بسته کافی نیست';
$string['validationmsg_filestatus'] = 'خروج همه فایل‌ها از حالت فشرده ممکن نبود';
$string['validationmsg_filestatus_info'] = 'تلاش برای خارج کردن فایل {$a->file} از حالت فشرده منجر به خطای «{$a->status}» شد.';
$string['validationmsg_foundlangfile'] = 'فایل زبان پیداشده';
$string['validationmsg_maturity'] = 'سطح کمال اظهارشده';
$string['validationmsg_maturity_help'] = 'پلاگین می‌تواند سطح کمال خودش را اظهار کند. اگر نگهدارندهٔ پلاگین، سطح کمال پلاگین را باثبات می‌داند، سطح کمال به‌صورت MATURITY_STABLE اظهار می‌شود. کلیهٔ سایر سطوح کمال (نظیر آلفا و بتا) باید به‌عنوان بی‌ثبات در نظر گرفته شوند و یک اخطار نمایش داده می‌شود.';
$string['validationmsg_missingcomponent'] = 'پلاگین نام کامپوننتش را اظهار نکرده است';
$string['validationmsg_missingcomponent_help'] = 'تمام پلاگین‌ها باید با استفاده از `$plugin->component` در فایل version.php نام کامل کامپوننتشان را ارائه کنند.';
$string['validationmsg_missingcomponent_link'] = 'Development:version.php';
$string['validationmsg_missingexpectedlangenfile'] = 'عدم تطابق در نام فایل بستهٔ زبانی انگلیسی';
$string['validationmsg_missingexpectedlangenfile_info'] = 'نوع پلاگین ارائه‌شده دارای فایل زبان انگلیسی نیست {$a}.';
$string['validationmsg_missinglangenfile'] = 'فایلی برای زبان انگلیسی پیدا نشد';
$string['validationmsg_missinglangenfolder'] = 'پوشهٔ زبان انگلیسی موجود نیست';
$string['validationmsg_missingversion'] = 'پلاگین نسخه‌اش را اظهار نکرده‌است';
$string['validationmsg_missingversionphp'] = 'فایل version.php پیدا نشد';
$string['validationmsg_multiplelangenfiles'] = 'چند فایل زبان انگلیسی پیدا شد';
$string['validationmsg_onedir'] = 'ساختار نامعتبر برای بستهٔ ZIP.';
$string['validationmsg_onedir_help'] = 'بستهٔ ZIP باید تنها شامل یک دایرکتوری مبدأ باشد که محتوی کد پلاگین است. نام آن دایرکتوری مبدأ باید با نام پلاگین منطبق باشد.';
$string['validationmsg_pathwritable'] = 'بررسی دسترسی نوشتن';
$string['validationmsg_pluginversion'] = 'نسخهٔ پلاگین';
$string['validationmsg_release'] = 'انتشار پلاگین';
$string['validationmsg_requiresmoodle'] = 'نسخهٔ مودل مورد نیاز';
$string['validationmsg_rootdir'] = 'نام پلاگینی که قرار است نصب شود';
$string['validationmsg_rootdir_help'] = 'نام دایرکتوری مبدأ در بستهٔ ZIP، نام پلاگینی که قرار است نصب شود را تعیین می‌کند. اگر این نام درست نیست، شاید بخواهید قبل از نصب پلاگین نام دایرکتوری مبدأ را در فایل ZIP تغییر دهید.';
$string['validationmsg_rootdirinvalid'] = 'نام پلاگین نامعتبر';
$string['validationmsg_rootdirinvalid_help'] = 'نام دایرکتوری مبدأ در بستهٔ ZIP نیازمندی‌های دستور رسمی را نقض می‌کند. برخی از بسته‌های ZIP، نظیر آنهایی که توسط Github تولید می‌شوند، ممکن است دارای نام اشتباهی برای دایرکتوری مبدأ باشند. باید نام دایرکتوری مبدأ را تصحیح کنید تا با نام پلاگین منطبق باشد.';
$string['validationmsg_targetexists'] = 'محل مقصد از قبل وجود دارد و حذف خواهد شد';
$string['validationmsg_targetexists_help'] = 'دایرکتوری پلاگین از قبل وجود دارد و توسط محتوای بستهٔ پلاگین جایگزین خواهد شد.';
$string['validationmsg_targetnotdir'] = 'محل مقصد توسط یک فایل اشغال شده است';
$string['validationmsg_unknowntype'] = 'نوع پلاگین ناشناخته';
$string['validationmsg_versionphpsyntax'] = 'ساختار دستوری پشتیبانی نشده در فایل version.php پیدا شد';
$string['validationmsglevel_debug'] = 'اشکال‌زدایی';
$string['validationmsglevel_error'] = 'خطا';
$string['validationmsglevel_info'] = 'تایید';
$string['validationmsglevel_warning'] = 'اخطار';
$string['version'] = 'نسخه';
$string['versiondb'] = 'نسخهٔ فعلی';
$string['versiondisk'] = 'نسخهٔ جدید';
