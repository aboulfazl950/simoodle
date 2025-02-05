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
 * Strings for component 'folder', language 'fa', version '4.5'.
 *
 * @package     folder
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['contentheader'] = 'محتوا';
$string['display'] = 'نمایش محتویات پوشه';
$string['display_help'] = 'اگر انتخاب کنید که محتویات پوشه در صفحهٔ درس نشان داده شوند، پیوندی به یک صفحهٔ‌ مجزا وجود نخواهد داشت.
متن توصیف تنها در صورتی که گزینهٔ «نمایش توضیح در صفحهٔ درس» انتخاب شده باشد نشان داده خواهد شد.<br />همچنین در نظر داشته باشید که در این حالت، مشاهده‌هایی که توسط شرکت‌کنندگان صورت می‌پذیرد نمی‌توانند لاگ شود.';
$string['displayinline'] = 'جاسازی‌شده در صفحهٔ یک درس';
$string['displaypage'] = 'در یک صفحهٔ مجزا';
$string['dnduploadmakefolder'] = 'ساختن یک پوشه و unzip کردن محتوای فایل در آن';
$string['downloadfolder'] = 'دریافت کل محتوای پوشه';
$string['eventallfilesdownloaded'] = 'آرشیو فشرده‌شدهٔ پوشه دریافت شد';
$string['eventfolderupdated'] = 'پوشه به‌روز شد';
$string['folder:addinstance'] = 'اضافه‌کردن یک پوشهٔ جدید';
$string['folder:managefiles'] = 'مدیریت فایل‌ها در ماژول پوشه';
$string['folder:view'] = 'مشاهده محتوای پوشه';
$string['foldercontent'] = 'فایل‌ها و زیرپوشه‌ها';
$string['forcedownload'] = 'اجبار برای بارگیری فایل‌ها';
$string['forcedownload_help'] = 'اینکه آیا فایل‌های خاصی مانند تصاویر یا فایل‌های HTML باید به جای دانلود شدن، در مرورگر نمایش داده شوند. توجه داشته باشید بنا به دلایل امنیتی، این تنظیم فقط در حالتی می‌تواند از انتخاب خارج شود که تمام کاربرانی که قابلیت مدیریت فایل‌ها در پوشه را دارند کاربران مورد اعتمادی باشند.';
$string['indicator:cognitivedepth'] = 'پوشه شناختی';
$string['indicator:cognitivedepth_help'] = 'این شاخص بر اساس عمق شناختی دانش آموز در یک منبع پوشه است.';
$string['indicator:cognitivedepthdef'] = 'پوشه شناختی';
$string['indicator:cognitivedepthdef_help'] = 'شرکت کننده در این بازه تجزیه و تحلیل به این درصد از تعامل شناختی ارائه شده توسط منابع پوشه رسیده است (سطح = بدون مشاهده ، مشاهده)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'پوشه اجتماعی';
$string['indicator:socialbreadth_help'] = 'این شاخص بر اساس گستردگی اجتماعی دانش آموز در یک منبع پوشه است.';
$string['indicator:socialbreadthdef'] = 'پوشه اجتماعی';
$string['indicator:socialbreadthdef_help'] = 'شرکت کننده در این بازه تجزیه و تحلیل به این درصد از مشارکت اجتماعی ارائه شده توسط منابع پوشه رسیده است (سطوح = بدون مشارکت ، فقط شرکت کننده)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['maxsizetodownload'] = 'حداکثر اندازه بارگیری پوشه (مگابایت)';
$string['maxsizetodownload_help'] = 'حداکثر اندازه پوشه ای که می تواند به عنوان یک فایل zip بارگیری شود. اگر روی صفر تنظیم شود ، اندازه پوشه نامحدود است.';
$string['modulename'] = 'پوشه';
$string['modulename_help'] = 'با استفاده از ماژول پوشه اساتید می‌تواند برای کم‌کردن نیاز به پیمایش در صفحه، چند فایل مرتبط با هم را در داخل یک پوشه نمایش دهند. می‌توان یک پوشهٔ zip شده را بارگذاری کرد و روی سایت از حالت فشرده خارج کرد، یا اینکه می‌توان یک پوشهٔ خالی ساخت و بعدا فایل‌هایی را به آن اضافه کرد.

از پوشه می‌توان این استفاده‌ها را کرد:

* برای مجموعه‌ای از فایل‌های مربوط به یک موضوع، مثلا مجموعه‌ای از سؤال‌های امتحانی سال‌های گذشته در قالب pdf یا مجموعه‌ای از فایل‌های تصویری برای استفاده در پروژه‌های شاگردان
* برای فراهم کردن یک فضای مشترک قراردادن فایل‌ها برای اساتید درس (با مخفی‌کردن پوشه تا تنها توسط اساتید قابل دسترسی باشد)';
$string['modulename_link'] = 'mod/folder/view';
$string['modulenameplural'] = 'پوشه‌ها';
$string['newfoldercontent'] = 'محتوای پوشه جدید';
$string['noautocompletioninline'] = 'تکمیل خودکار مشاهده فعالیت نمی تواند همراه با گزینه "Display inline" انتخاب شود';
$string['page-mod-folder-view'] = 'صفحهٔ اصلی ماژول پوشه';
$string['page-mod-folder-x'] = 'هر صفحه‌ای از ماژول پوشه';
$string['pluginadministration'] = 'مدیریت پوشه';
$string['pluginname'] = 'پوشه';
$string['privacy:metadata'] = 'افزونه منبع پوشه هیچگونه اطلاعات شخصی را ذخیره نمی کند.';
$string['search:activity'] = 'پوشه';
$string['showdownloadfolder'] = 'نمایش دکمهٔ دریافت کل محتوای پوشه';
$string['showdownloadfolder_help'] = 'اگر روی «بله» تنظیم شده باشد، دکمه‌ای نمایش داده خواهد شد که با استفاده از آن می‌توان کل محتویات پوشه را به‌صورت یک فایل فشرده zip دریافت کرد.';
$string['showexpanded'] = 'نمایش زیرپوشه‌ها به‌صورت بازشده';
$string['showexpanded_help'] = 'اگر روی «بله» تنظیم شده باشد، زیرپوشه‌ها به‌طور پیش‌فرض به‌صورت باز شده نمایش داده خواهند شد؛ در غیر این‌صورت به‌صورت بسته شده خواهند بود.';
