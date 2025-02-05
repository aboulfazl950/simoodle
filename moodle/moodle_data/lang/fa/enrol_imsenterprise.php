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
 * Strings for component 'enrol_imsenterprise', language 'fa', version '4.5'.
 *
 * @package     enrol_imsenterprise
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aftersaving...'] = 'پس از اینکه تنظیمات خود را ذخیره کردید، ممکن است بخواهید که';
$string['allowunenrol'] = 'داده‌های IMS بتوانند ثبت نام شاگردان/اساتید در درس را <strong>لغو</strong> کنند';
$string['allowunenrol_desc'] = 'در صورت فعال بودن، در صورت تعیین شدن در داده‌های IMS، ثبت نام‌های درس‌ها لغو خواهند شد.';
$string['basicsettings'] = 'تنظیمات اولیه';
$string['categoryidnumber'] = 'مجاز بودن کد برای طبقه';
$string['categoryidnumber_desc'] = 'درصورت فعال‌بودن، پلاگین IMS طبقه‌های درسی را با کد (یا idnumber) خواهد ساخت';
$string['categoryseparator'] = 'کاراکتر جداکنندهٔ طبقه';
$string['categoryseparator_desc'] = 'هنگامی‌که «کد برای طبقه» فعال باشد لازم است. کاراکتری که نام و کد (یا idnumber) طبقه را از هم جدا می‌کند.';
$string['coursesettings'] = 'اختیارات داده‌های درس';
$string['createnewcategories'] = 'ساختن طبقه‌های درسی جدید (به صورت پنهان) اگر در مودل وجود نداشتند';
$string['createnewcategories_desc'] = 'اگر المان `<org><orgunit>` در داده‌های ورودی یک درسی وجود داشته باشد، از محتوایش برای مشخص کردن یک طبقهٔ درسی در هنگامی که قرار باشد درس از صفر ساخته شود استفاده خواهد شد. این پلاگین طبقه‌بندی درس‌های موجود را تغییر نخواهد داد.

اگر طبقه‌ای با نام مورد نظر وجود نداشته باشد، آنگاه یک طبقهٔ درسی پنهان ساخته خواهد شد.';
$string['createnewcourses'] = 'ساختن درس‌های جدید (به صورت پنهان) اگر در مودل وجود نداشتند';
$string['createnewcourses_desc'] = 'اگر فعال باشد، پلاگین ثبت نام IMS می‌تواند درس‌هایی که در داده‌های IMS وجود دارند ولی در پایگاه دادهٔ مودل وجود ندارند را در مودل بسازد. درس‌هایی که از این طریق ساخته می‌شوند در ابتدا پنهان هستند.';
$string['createnewusers'] = 'ایجاد حساب کاربری برای کاربرانی که هنوز در مودل عضو نیستند';
$string['createnewusers_desc'] = 'داده‌های ثبت نام پروژه IMS معمولاً مجموعه‌ای از کاربران را توصیف می‌کند. اگر فعال باشد، حساب کاربری می‌تواند برای هر کاربری که در پایگاه دادهٔ مودل یافت نشود ایجاد شود.

کاربران ابتدا بر اساس idnumber (کد شناسائی) و سپس بر اساس نام کاربری مودل مورد جستجو قرار می‌گیرند. رمز های ورود توسط پلاگین پروژه IMS وارد نمی‌شوند. استفاده از یک پلاگین شناسایی برای شناسایی کاربران توصیه می‌شود.';
$string['cronfrequency'] = 'تناوب پردازش';
$string['deleteusers'] = 'پاک کردن حساب کاربری هنگامی که در داده‌های IMS مشخص شده است';
$string['deleteusers_desc'] = 'اگر فعال باشد، داده‌های ثبت نام پروژه IMS می‌توانند حذف حساب‌های کاربری را مشخص کنند (اگر مقدار پرچم «recstatus» برابر با ۳ باشد که نشان دهندهٔ پاک شدن یک حساب کاربری است). مطابق با استاندارد مودل، رکورد کاربر در پایگاه دادهٔ مودل واقعاً حذف نمی‌شود، بلکه مقدار یک پرچم (flag) تنظیم می‌شود تا خساب کاربری را به عنوان حذف شده علامت‌گذاری کند.';
$string['doitnow'] = 'همین الان فرآیند ورود از فایل IMS را انجام دهید';
$string['emptyattribute'] = 'خالی بماند';
$string['filelockedmail'] = 'فایل متنی‌ای که برای ثبت نام مبتنی بر فایل IMS از آن استفاده کرده‌اید ({$a}) نمی‌تواند توسط فرآیند cron حذف شود. این مشکل معمولاً به دلیل داشتن مجوزهای اشتباه روی فایل است. لطفاً مجوزها را تصحیح کنید تا مودل بتواند فایل را پاک کند، در غیر اینصورت ممکن است فایل مکرراً پردازش شود.';
$string['filelockedmailsubject'] = 'خطای مهم: فایل ثبت نام';
$string['fixcasepersonalnames'] = 'تغییر حالت نام افراد (حروف اول بزرگ، سایر حروف کوچک)';
$string['fixcaseusernames'] = 'تغییر نام‌های کاربری به حروف کوچک';
$string['ignore'] = 'نادیده گرفتن';
$string['importimsfile'] = 'ورود فایل پروژه IMS';
$string['imsenterprise:config'] = 'پیکربندی نمونه‌های ثبت‌نام پروژه IMS';
$string['imsenterprisecrontask'] = 'پردازش‌کردن فایل ثبت‌نام';
$string['imsrolesdescription'] = 'در تعریف IMS هشت نوع نقش مجزا در نظر گرفته شده است. لطفاً انتخاب کنید که می‌خواهید آنها به چه صورتی در مودل نسبت داده شوند (یا اینکه اگر می‌خواهید، نادیده گرفته شوند).';
$string['location'] = 'محل فایل';
$string['logtolocation'] = 'محل فایل خروجی log ها (خالی بگذارید تا log ها ذخیره نشوند)';
$string['mailadmins'] = 'آگاه‌سازی مدیر با پست الکترونیکی';
$string['mailusers'] = 'آگاه‌سازی کاربران با پست الکترونیکی';
$string['messageprovider:imsenterprise_enrolment'] = 'پیام‌های ثبت‌نام پلاگین پروژهٔ IMS';
$string['miscsettings'] = 'متفرقه';
$string['nestedcategories'] = 'مجاز بودن طبقه‌های تودرتو';
$string['nestedcategories_desc'] = 'درصورتی‌که فعال باشد، پلاگین IMS طبقه‌های تودرتو خواهد ساخت';
$string['pluginname'] = 'فایل پروژه IMS';
$string['pluginname_desc'] = 'روش مکرراً محلی که مشخص کرده‌اید را بررسی می‌کند و در صورت وجود فایل متنی با قالب‌بندی به‌خصوص آن را پردازش می‌کند. این فایل از استاندارد پروژه IMS تبعیت می‌کند و شامل المان‌های XMLی <span style="display:inline-block">person</span>، <span style="display:inline-block">group</span> و <span style="display:inline-block">membership</span> است.';
$string['processphoto'] = 'اضافه کردن داده‌های تصویر کاربر به مشخصات فردی';
$string['processphotowarning'] = 'هشدار: پردازش تصویر می‌تواند با قابل توجهی روی کارگزار قرار دهد. اگر انتظار پردازش شدن شاگردان زیادی را دارید، به شما توصیه می‌کنیم که این گزینه را فعال نکنید.';
$string['restricttarget'] = 'پردازش داده‌ها تنها وقتی که این مقصد مشخص شده باشد';
$string['restricttarget_desc'] = 'یک فایل دادهٔ پروژه IMS ممکن است برای چند «مقصد» یا «هدف» در نظر گرفته شده باشد (LMS های مختلف، یا سیستم‌های مختلف داخل یک مدرسه یا دانشگاه). می‌توان در داخل فایل مشخص کرد که داده‌ها برای یک یا چندین سیستم مقصد نام‌گذاری شده (با اشاره به نام آنها در داخل تگ‌های `<target>` در میان تگ `<properties>`) در نظر گرفته شده اند.

به طور کلی نیازی نیست که نگران باشید. اگر این تنظیم را خالی بگذارید، مودل همیشه فایل داده را (جدا از اینکه مقصدی مشخص شده باشد یا نه) پردازش خواهد کرد. در غیر اینصورت، نام دقیقی که درون تگ `<target>` خواهد آمد را وارد کنید.';
$string['roles'] = 'نقش‌ها';
$string['settingfullname'] = 'تگ توصیفی IMS‌برای نام کامل درس';
$string['settingfullnamedescription'] = 'نام کامل یک فیلد لازم برای درس است در نتیجه باید تگ توصیفی انتخاب‌شده در فایل پروژه IMS خود را وارد کنید';
$string['settingshortname'] = 'تگ توصیفی IMS‌برای نام کوتاه درس';
$string['settingshortnamedescription'] = 'نام کوتاه یک فیلد لازم برای درس است در نتیجه باید تگ توصیفی انتخاب‌شده در فایل پروژه IMS خود را وارد کنید';
$string['settingsummary'] = 'تگ توصیفی IMS‌برای توصیف درس';
$string['settingsummarydescription'] = 'یک فیلد اختیاری است؛ اگر نمی‌خواهید توصیف درس را مشخص کنید «خالی بماند» را انتخاب کنید';
$string['sourcedidfallback'] = 'استفاده از «sourcedid» برای «userid» افراد اگر فیلد «userid» پیدا نشود';
$string['sourcedidfallback_desc'] = 'در داده‌های IMS، فیلد `<sourcedid>` بیانگر ID دائمی یک فرد به صورت استفاده شده در سیستم مرجع است. فیلد `<userid>`، فیلد دیگری است که باید شامل ID مورد استفاده توسط کاربر در هنگام ورود به سیستم باشد. اکثر مواقع این دو ID ممکن است یکی باشند ولی همیشه هم اینگونه نیست.

برخی از سیستم‌های اطلاعات دانشجویی (student information systems یا SIS ها) نمی‌توانند فیلد `<userid>` را به خروجی بفرستند. در این حالت، باید این تنظیم را فعال کنید تا اجازه دهید که از `<sourcedid>` به جای ID کاربر مودل استفاده شود. در غیر اینصورت، این تنظیم را غیر فعال باقی بگذارید.';
$string['truncatecoursecodes'] = 'کوتاه کردن کد درس‌ها به این اندازه';
$string['truncatecoursecodes_desc'] = 'برخی از مواقع، ممکن است بخواهید کد بعضی از درس‌ها را پیش از پردازش تا اندازهٔ مشخصی کوتاه کنید. در این صورت تعداد حروف مورد نظر را وارد کنید. در غیر اینصورت، این مقدار را خالی بگذارید تا کدی کوتاه نشود.';
$string['updatecourses'] = 'به‌روز کردن درس';
$string['updatecourses_desc'] = 'اگر فعال باشد، پلاگین ثبت‌نام پروژه IMS می‌تواند نام‌های کامل و کوتاه درس را به‌روز کند (چنانچه مقدار پرچم recstatus برابر با 2 باشد که نشان‌دهندهٔ یک به‌روزرسانی است).';
$string['updateusers'] = 'به‌روزکردن حساب‌های کاربری هنگامی‌که در داده‌های IMS تعیین شده اند';
$string['updateusers_desc'] = 'اگر فعال باشد، داده‌های ثبت‌نام پروژهٔ IMS می‌توانند تغییراتی را در حساب‌های کاربری مشخص کنند (اگر مقدار پرچم recstatus برابر با 2 باشد که نشان‌دهندهٔ یک به‌روزرسانی است).';
$string['usecapitafix'] = 'اگر از «Capita» استفاده شده است این مربع را علامت بزنید (قالب XML آنها کمی اشتباه است)';
$string['usecapitafix_desc'] = 'سیستم داده‌های دانش‌آموزی تولید شده توسط Capita یک خطای جزئی در خروجی XML خود دارد. اگر از Capita استفاده می‌کنید باید این تنظیم را فعال کنید (در غیر اینصورت آن را علامت نخورده باقی بگذارید).';
$string['usersettings'] = 'اختیارات داده‌های کاربران';
$string['zeroisnotruncation'] = 'مقدار عددی صفر یعنی اینکه کوتاه شدن انجام نشود';
