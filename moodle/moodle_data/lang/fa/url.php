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
 * Strings for component 'url', language 'fa', version '4.5'.
 *
 * @package     url
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['chooseavariable'] = 'انتخاب یک متغیر...';
$string['clicktoopen'] = 'برای باز کردن منبع روی {$a} کلیک کنید.';
$string['configdisplayoptions'] = 'تمام گزینه‌هایی که می‌خواهید موجود باشند را انتخاب کنید. تنظیمات فعلی پیوندهای موجود تغییری نخواهد کرد. برای انتخاب چند گزینه کلید کنترل (Ctrl) را نگه دارید.';
$string['configframesize'] = 'وقتی که محتوای یک صفحهٔ وب یا یک فایل در داخل یک قاب نمایش داده می‌شود، این مقدار ارتفاع قاب بالایی (که شامل نوار راهبری است) را (بر حسب پیکسل) تعیین می‌کند.';
$string['configrolesinparams'] = 'در صورتی که می‌خواهید لیست پارامترهای موجود شامل نام نقش‌های محلی شده باشد این گزینه را انتخاب کنید.';
$string['configsecretphrase'] = 'از این عبارت رمزی برای تولید کد رمزنگاری شده استفاده می‌شود که می‌تواند به عنوان یک پارامتر به کارگزارها ارسال شود. این کد رمزنگاری شده با محاسبهٔ md5 آدرس IP کاربر حاضر به همراه این عبارت رمز تولید می‌شود. یعنی <code dir="ltr">code = md5(IP.secretphrase)</code>. توجه داشته باشید که نمی‌توان روی این مقدار حساب کرد زیرا آدرس IP ممکن است تغییر کند و معمولاً بین چند رایانه مشترک است.';
$string['contentheader'] = 'محتوا';
$string['createurl'] = 'ساخت یک URL';
$string['displayoptions'] = 'نحوه‌های ممکن نمایش';
$string['displayselect'] = 'نحوهٔ نمایش';
$string['displayselect_help'] = 'این گزینه، همراه با نوع فایل پیوند شده و اینکه مرورگر اجازهٔ جاسازی شدن را بدهد یا خیر، نحوهٔ نمایش آدرس پیوند شده را تعیین می‌کند. مقادیر قابل تعیین به این شرح هستند:

* خودکار - بهترین نحوهٔ نمایش به صورت خودکار انتخاب می‌شود
* جاسازی - محتوای پیوند شده به همراه توصیف آن و تمام بلوک‌ها در داخل صفحه و در زیر نوار راهبری نمایش داده می‌شود.
* باز شدن - تنها محتوای پیوند شده در پنجرهٔ مرورگر نمایش داده می‌شود
* در پنجرهٔ pop-up - محتوای پیوند شده در یک پنجرهٔ جدید که فاقد منوها و نوار آدرس است نمایش داده می‌شود
* در داخل یک قاب - محتوای پیوند شده در داخل یک چارچوب زیر نوار راهبری و توصیف پیوند قرار می‌گیرد
* پنجرهٔ جدید - محتوای پیوند شده در یک پنجرهٔ جدید که دارای منوها و نوار آدرس است نمایش داده می‌شود';
$string['displayselectexplain'] = 'نحوهٔ نمایش را انتخاب کنید. متاسفانه همهٔ گزینه‌های موجود برای تمام پیوندها مناسب نیستند.';
$string['externalurl'] = 'پیوند خارجی';
$string['framesize'] = 'ارتفاع قاب';
$string['indicator:cognitivedepth'] = 'URL شناختی';
$string['indicator:cognitivedepthdef'] = 'URL شناختی';
$string['indicator:cognitivedepthdef_help'] = 'شرکت کننده در این بازه تجزیه و تحلیل به این درصد از تعامل شناختی ارائه شده توسط منابع URL رسیده است (سطح = بدون مشاهده ، مشاهده)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'URL اجتماعی';
$string['indicator:socialbreadth_help'] = 'این شاخص براساس گستردگی اجتماعی دانش آموز در یک منبع URL است.';
$string['indicator:socialbreadthdef'] = 'URL اجتماعی';
$string['indicator:socialbreadthdef_help'] = 'شرکت کننده در این بازه تجزیه و تحلیل به این درصد از مشارکت اجتماعی ارائه شده توسط منابع URL رسیده است (سطح = بدون مشارکت ، فقط شرکت کننده)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['invalidstoredurl'] = 'این منبع نمایش داده نمی شود ، URL نامعتبر است.';
$string['invalidurl'] = 'URL وارد شده نامعتبر است';
$string['modulename'] = 'پیوند';
$string['modulename_help'] = 'ماژول آدرس اینترنتی به استاد این امکان را می‌دهد تا یک پیوند وب را به‌عنوان یک منبع درس اضافه کند. به هر چیزی که به‌صورت آنلاین در دسترس باشد (مانند اسناد یا تصاویر) می‌توان پیوند داد؛ بنابراین «آدرس اینترنتی» لزوما نباید حتما صفحهٔ اول یک وب‌سایت باشد. می‌توان آدرس اینترنتی یک صفحهٔ وب را کپی کرد، یا اینکه استاد می‌تواند با استفاده از انتخاب‌گر فایل (بسته به اینکه چه انباره‌هایی در سایت فعال باشند) پیوندی از یک انباره مانند فلیکر، یوتیوب یا ویکی‌مدیا را انتخاب کند.

حالت‌های مختلفی برای نمایش «آدرس اینترنتی» وجود دارد؛ مانند جاسازی‌شده یا باز شدن در یک پنجرهٔ جدید. در صورت نیاز حالت‌های پیشرفته‌ای هم برای درج برخی اطلاعات (مانند نام شاگرد) در آدرس اینترنتی وجود دارد.

توجه کنید که با استفاده از ویرایشگر متنی می‌توان آدرس‌های اینترنتی را به هر نوع منبع یا فعالیت دیگری هم اضافه کرد.';
$string['modulename_link'] = 'mod/url/view';
$string['modulenameplural'] = 'پیوندها';
$string['page-mod-url-x'] = 'هر صفحه‌ای از ماژول پیوند';
$string['parameterinfo'] = '&amp;نام متغیر=پارامتر';
$string['parametersheader'] = 'پارامترها';
$string['parametersheader_help'] = 'بعضی از متغیرهای داخلی مودل می‌توانند به‌طور خودکار به انتهای آدرسِ پیوند اضافه شوند. نام مورد نظرتان را برای پارامترها را در کادرهای زیر وارد کنید و متغیر متناظر با هرکدام  را انتخاب کنید.';
$string['pluginadministration'] = 'مدیریت ماژول پیوند';
$string['pluginname'] = 'پیوند';
$string['popupheight'] = 'ارتفاع پنجرهٔ pop-up (بر حسب پیکسل)';
$string['popupheightexplain'] = 'ارتفاع پیش‌فرض پنجره‌های pop-up را تعیین می‌کند.';
$string['popupwidth'] = 'عرض پنجرهٔ pop-up (بر حسب پیکسل)';
$string['popupwidthexplain'] = 'عرض پیش‌فرض پنجره‌های pop-up را تعیین می‌کند.';
$string['printintro'] = 'نمایش توصیف پیوند';
$string['printintroexplain'] = 'نمایش توصیف صفحه در زیر محتویات آن؟ در برخی از نحوه‌های نمایش، توصیف صفحه حتی اگر این گزینه انتخاب شده باشد هم ممکن است نمایش داده نشود.';
$string['privacy:metadata'] = 'افزونه منبع URL هیچگونه اطلاعات شخصی را ذخیره نمی کند.';
$string['rolesinparams'] = 'نام نقش‌ها هم در میان پارامترها بیاید';
$string['search:activity'] = 'پیوند';
$string['serverurl'] = 'آدرس سایت';
$string['url:addinstance'] = 'اضافه‌کردن یک پیوند جدید';
$string['url:view'] = 'مشاهده URL';
