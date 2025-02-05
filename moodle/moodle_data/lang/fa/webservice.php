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
 * Strings for component 'webservice', language 'fa', version '4.5'.
 *
 * @package     webservice
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessexception'] = 'استثنای کنترل دسترسی';
$string['actwebserviceshhdr'] = 'پروتکل‌های فعال وب سرویس';
$string['addaservice'] = 'اضافه کردن سرویس';
$string['addcapabilitytousers'] = 'بررسی توانایی کاربران';
$string['addcapabilitytousersdescription'] = 'برای استفاده از وب‌سرویس‌ها، کاربران باید دارای دو توانایی متفاوت باشند: «/webservice:createtoken» و یک توانایی دیگر مربوط به پروتکل وب‌سرویس («webservice/rest:use» یا «webservice/soap:use» یا ...).<br/>توصیه: یک راه برای تنظیم این مورد، این است که یک نقش سراسری جدید به نام «وب‌سرویس» با توانایی «webservice:createtoken» و یک سری توانایی‌های لازم دیگر برای پروتکل بسازید. سپس این نقش را به کاربر وب‌سرویس نسبت دهید.';
$string['addfunction'] = 'افزودن قابلیت';
$string['addfunctionhelp'] = 'انتخاب قابلیت برای افزودن به سرویس';
$string['addfunctions'] = 'اضافه کردن تابع‌ها';
$string['addfunctionsdescription'] = 'انتخاب تابع‌های لازم برای سرویسِ تازه‌ایجادشده.';
$string['addrequiredcapability'] = 'نسبت دادن/گرفتن توانایی مورد نیاز';
$string['addservicefunction'] = 'اضافه کردن تابع‌ها به سرویس «{$a}»';
$string['allusers'] = 'همهٔ کاربران';
$string['apiexplorer'] = 'کاوشگر API';
$string['apiexplorernotavalaible'] = 'کاوشگر API هنوز موجود نیست.';
$string['arguments'] = 'آرگومان‌ها';
$string['authmethod'] = 'شیوهٔ احراز هویت';
$string['checkusercapability'] = 'بررسی توانایی‌های کاربر';
$string['checkusercapabilitydescription'] = 'برای استفاده از وب‌سرویس‌ها، یک کاربر باید توانایی مربوط به پروتکل وب‌سرویس («webservice/rest:use» یا «webservice/soap:use» یا ...) را داشته باشد.<br/>توصیه: یک راه برای تنظیم این مورد، این است که یک نقش سراسری جدید به نام «وب‌سرویس» با توانایی‌های لازم برای پروتکل بسازید. سپس این نقش را به کاربر وب‌سرویس نسبت دهید.';
$string['configwebserviceplugins'] = 'بنا به دلایل امنیتی، فقط پروتکل‌هایی که در حال استفاده شدن هستند باید فعال باشند.';
$string['context'] = 'محتوا';
$string['createservicedescription'] = 'یک سرویس، مجموعه‌ای از توابع وب‌سرویس است. به کاربر اجازهٔ دسترسی به یک سرویس جدید را خواهید داد. در صفحهٔ <strong>اضافه کردن سرویس</strong>، گزینه‌های «فعال» و «کاربران مجاز» را علامت بزنید و «توانایی‌ای لازم نیست» را انتخاب کنید.';
$string['createserviceforusersdescription'] = 'یک سرویس، مجموعه‌ای از توابع وب‌سرویس است. به کاربر اجازهٔ دسترسی به یک سرویس جدید را خواهید داد. در صفحهٔ <strong>اضافه کردن سرویس</strong>، گزینه‌های «فعال» و «کاربران مجاز» را علامت بزنید و «توانایی‌ای لازم نیست» را انتخاب کنید.';
$string['createtoken'] = 'ساختن عبارت رمزی';
$string['createtokenforuser'] = 'ساختن عبارت رمزی برای یک کاربر';
$string['createtokenforuserdescription'] = 'در صفحهٔ <strong>مدیریت عبارت رمزی</strong>، روی «اضافه کردن» کلیک کنید. سپس سرویس و کاربر ایجاد شده را انتخاب نمائید.';
$string['createuser'] = 'ساختن یک کاربر خاص';
$string['createuserdescription'] = 'باید یک کاربر خاص برای سیستمی که مودل را کنترل می‌کند بسازید.';
$string['default'] = 'مقدار پیش‌فرض «<span dir="ltr" style="display:inline-block;direction:ltr">{$a}</span>»';
$string['deleteaservice'] = 'حذف سرویس';
$string['deletetokenconfirm'] = 'آیا واقعاً می‌خواهید این عبارت رمزی وب‌سرویس را برای <strong>{$a->user}</strong> در سرویس <strong>{$a->service}</strong> پاک کنید؟';
$string['disabledwarning'] = 'تمام پروتکل‌های وب‌سرویس غیرفعال هستند. تنظیم «فعال بودن وب‌سرویس‌ها» در صفحهٔ امکانات پیشرفته است.';
$string['downloadfiles'] = 'امکان دریافت فایل‌ها';
$string['downloadfiles_help'] = 'اگر فعال باشد، تمام کاربران با استفاده از کلیدهای امنیتیشان می‌توانند فایل‌ها را دریافت کنند. بدیهی است که منظور تنها فایل‌هایی است که کاربران مجاز به دریافت آنها در سایت هستند.';
$string['editaservice'] = 'ویرایش سرویس';
$string['enabled'] = 'فعال';
$string['enabledocumentation'] = 'فعال کردن مستندات توسعه‌دهنده';
$string['enabledocumentationdescription'] = 'این گزینه را انتخاب کنید تا به توسعه‌دهندگان سیستم بیرونی اجازهٔ دسترسی به یک مستند مفصل وب‌سرویس‌ها را بدهید. توسعه‌دهندگان فقط مستند مربوط به سرویسی که به آن دسترسی دارند را می‌بینند.';
$string['enableprotocols'] = 'فعال کردن پروتکل‌ها';
$string['enableprotocolsdescription'] = 'حداقل یک پروتکل باید فعال باشد. از طرف دیگر، با وجود اینکه مودل به خوبی مراقب مسائل امنیتی است، هر چه پروتکل‌های بیشتری را فعال کنید، سایت مودلتان در معرض حملات خارجی بیشتری خواهد بود.';
$string['enablews'] = 'فعال کردن وب‌سرویس‌ها';
$string['enablewsdescription'] = 'وب‌سرویس‌ها باید در صفحهٔ امکانات پیشرفته فعال شده باشند.';
$string['entertoken'] = 'یک کلید/رمز امنیتی وارد کنید:';
$string['errorcodes'] = 'پیام خطا';
$string['execute'] = 'اجرا';
$string['externalservice'] = 'سرویس خارجی';
$string['externalservicefunctions'] = 'تابع‌های سرویس خارجی';
$string['externalservices'] = 'سرویس‌های خارجی';
$string['externalserviceusers'] = 'کاربران سرویس‌های خارجی';
$string['function'] = 'تابع';
$string['functions'] = 'توابع';
$string['generalstructure'] = 'ساختار عمومی';
$string['information'] = 'اطلاعات';
$string['iprestriction'] = 'محدودیت IP';
$string['key'] = 'کلید';
$string['manageprotocols'] = 'مدیریت پروتکل‌ها';
$string['managetokens'] = 'مدیریت عبارت‌های رمزی';
$string['missingcaps'] = 'توانایی‌های ناموجود';
$string['missingcaps_help'] = 'لیست توانایی‌های مورد نیاز برای سرویس که کاربر انتخاب شده آن‌ها را ندارد. برای استفاده از سرویس، توانایی‌های ناموجود باید به نقش کاربر اضافه شوند.';
$string['missingpassword'] = 'رمز اتصال جا افتاده است';
$string['missingusername'] = 'نام کاربری جا افتاده است';
$string['nofunctions'] = 'این سرویس هیچ تابعی ندارد.';
$string['norequiredcapability'] = 'تونایی‌ای لازم نیست';
$string['notoken'] = 'لیست عبارت‌های رمزی خالی است.';
$string['onesystemcontrolling'] = 'یک سیستمی که با دارا بودن یک عبارت رمزی مودل را کنترل می‌کند';
$string['onesystemcontrollingdescription'] = 'مراحل زیر به شما کمک می‌کنند تا وب‌سرویس مودل را برای یک سیستمی که می‌خواهد مودل را کنترل کند (مانند یک سیستم اطلاعات دانشجویی) راه‌اندازی کنید. این مراحل همچنین به شما کمک می‌کنند تا شیوهٔ احراز هویت مناسب با استفاده از عبارت رمزی (کلیدهای امنیتی) را تنظیم کنید.';
$string['operation'] = 'عمل';
$string['phpparam'] = 'XML-RPC (ساختار PHP)';
$string['phpresponse'] = 'XML-RPC (ساختار PHP)';
$string['postrestparam'] = 'کد PHP برای REST (درخواست POST)';
$string['print'] = 'چاپ همه';
$string['protocol'] = 'پروتکل';
$string['removefunction'] = 'حذف';
$string['removefunctionconfirm'] = 'آیا واقعاً می‌خواهید تابع «{$a->function}» را از سرویس «{$a->service}» حذف کنید؟';
$string['requireauthentication'] = 'این شیوه نیازمند شناسایی با مجوز xxx است.';
$string['required'] = 'لازم است';
$string['requiredcapability'] = 'توانایی مورد نیاز';
$string['requiredcapability_help'] = 'اگر تعیین شده باشد، تنها کاربرانی که توانایی مورد نیاز را دارند می‌توانند به سرویس دسترسی داشته باشند.';
$string['requiredcaps'] = 'توانایی‌های مورد نیاز';
$string['response'] = 'پاسخ';
$string['restparam'] = 'REST (پارامترهای POST)';
$string['restrictedusers'] = 'فقط کاربران مجاز';
$string['restrictedusers_help'] = 'این تنظیم تعیین می‌کند که آیا تمام کاربرانی که دارای مجوز ساختن یک عبارت رمزی برای وب سرویس‌ها هستند می‌توانند از طریق صفحهٔ کلیدهای امنیتی خود یک عبارت رمزی برای این سرویس تولید کنند یا اینکه تنها کاربران خاص مجاز شده می‌توانند این کار را انجام دهند.';
$string['securitykey'] = 'کلید امنیتی (توکن)';
$string['securitykeys'] = 'کلید‌های امنیتی';
$string['selectedcapability'] = 'انتخاب‌شده';
$string['selectservice'] = 'انتخاب یک سرویس';
$string['selectspecificuser'] = 'انتخاب یک کاربر خاص';
$string['selectspecificuserdescription'] = 'در صفحهٔ <strong>مدیریت سرویس</strong>، روی «کاربران مجاز» کلیک کرده و کاربر را به لیست کاربران مجاز اضافه کنید. توانایی‌های مورد نیاز کاربر نمایش داده خواهد شد. توصیه می‌کنیم که یک نقش برای این سرویس ایجاد کنید و توانایی‌های لازم را به آن نقش اضافه نمایید. آنگاه این نقش را به کاربر نسبت دهید.';
$string['service'] = 'سرویس';
$string['servicehelpexplanation'] = 'یک سرویس، مجموعه‌ای از توابع است. یک سرویس می‌تواند توسط همهٔ کاربران یا فقط کاربران مشخص شده مورد دسترسی قرار گیرد. <strong>سرویس‌های سفارشی</strong>، سرویس‌هایی هستند که شما می‌سازید. <strong>سرویس‌های پیش‌فرض</strong>، سرویس‌هایی هستند که به صورت پیش‌فرض به مودل اضافه شده‌اند. شما نمی‌توانید تابع‌های یک <strong>سرویس پیش‌فرض</strong> را تغییر دهید.';
$string['servicename'] = 'نام سرویس';
$string['servicenotavailable'] = 'وب‌سرویس در دسترس نیست (وجود ندارد یا شاید غیرفعال باشد)';
$string['servicesbuiltin'] = 'سرویس‌های تعبیه شده';
$string['servicescustom'] = 'سرویس‌های سفارشی';
$string['step'] = 'گام';
$string['supplyinfo'] = 'جزئیات بیشتر';
$string['testauserwithtestclientdescription'] = 'با استفاده از کلاینت آزمایش وب‌سرویس دسترسی به سرویس از خارج را شبیه‌سازی کنید. قبل از رفتن به آنحا، به عنوان یک کاربر با توانایی «moodle/webservice:createtoken» وارد سایت شوید، و کد امنیتی‌اش (عبارت رمزی) را از بلوک «مودل من» بگیرید. از این عبارت رمزی در کلاینت آزمایشی استفاده خواهید کرد. در کلاینت آزمایشی، از یک پروتکل فعال با شناسایی به وسیلهٔ عبارت رمزی استفاده کنید. <strong>هشدار: تابعی که آزمایش می‌کنید <big>اجرا خواهد شد</big>، بنابراین در انتخاب تابع آزمایش دقت کنید!!!</strong>';
$string['testclient'] = 'کلاینت آزمایش وب‌سرویس';
$string['testclientdescription'] = '* کلاینت آزمایش وب‌سرویس <strong>واقعا</strong> تابع‌ها را <strong>اجرا</strong> می‌کند. تابع‌هایی که نمی‌شناسید را آزمایش نکنید.<br/>* هنوز همهٔ تابع‌های وب‌سرویسی موجود در کلاینت آزمایشی پیاده‌سازی نشده‌اند.<br/>* برای بررسی اینکه کاربری نتواند به برخی از تابع‌ها دسترسی داشته باشد، می‌توانید تابع‌هایی را آزمایش کنید که اجازهٔ دسترسی به آنها را نداده‌اید.<br/>* برای دیدن پیام‌های خطای واضح‌تر، در صفحهٔ اشکال‌زدایی، تنظیم <strong>{$a->atag}</strong> را روی «{$a->mode}» قرار دهید.';
$string['testwithtestclient'] = 'آزمایش سرویس';
$string['testwithtestclientdescription'] = 'با استفاده از کلاینت آزمایش وب‌سرویس دسترسی به سرویس از خارج را شبیه‌سازی کنید. از یک پروتکل فعال با شناسایی به وسیلهٔ عبارت رمزی استفاده کنید. <strong>هشدار: تابعی که آزمایش می‌کنید <big>اجرا خواهد شد</big>، بنابراین در انتخاب تابع آزمایش دقت کنید!!!</strong>';
$string['token'] = 'عبارت رمزی';
$string['tokencreatedbyadmin'] = 'تنها توسط مدیر می‌تواند بازنشانی شود (*)';
$string['uploadfiles'] = 'امکان ارسال فایل';
$string['uploadfiles_help'] = 'اگر فعال باشد، کاربران با استفاده از کلید امنیتی خود می‌توانند فایل‌هایی را به ناحیه فایل‌های خصوصی خود یا ناحیه فایل پیش‌نویس ارسال کنند. تمام محدودیت‌های ارسال فایل برای کاربر اعمال خواهند شد.';
$string['userasclients'] = 'کاربران به عنوان کلاینت‌ها با عبارت رمزی';
$string['userasclientsdescription'] = 'مراحل زیر به شما کمک می‌کنند تا وب‌سرویس مودل را برای کاربران به عنوان کلاینت‌ها راه‌اندازی کنید. این مراحل همچنین به شما کمک می‌کنند تا شیوهٔ احراز هویت مناسب با استفاده از عبارت رمزی (کلیدهای امنیتی) را تنظیم کنید. در این مورد استفاده، کاربر عبارت رمزی‌اش را از روی قسمت <strong>کلیدهای امنیتی</strong> در صفحهٔ مشخصات فردی خود تولید می‌کند.';
$string['usermissingcaps'] = 'توانایی‌های ناموجود: {$a}';
$string['validuntil'] = 'مهلت اعتبار';
$string['webservice'] = 'وب سرویس';
$string['webservices'] = 'وب‌سرویس‌ها';
$string['webservicesoverview'] = 'مرور کلی';
$string['webservicetokens'] = 'توکن‌های وب سرویس';
$string['wsclientdoc'] = 'مستندات کلاینت وب سرویس مودل';
$string['wsdocapi'] = 'مستندات API';
$string['wsdocumentation'] = 'مستندات وب‌سرویس';
$string['wsdocumentationdisable'] = 'مستندات وب‌سرویس غیر فعال است.';
$string['wsdocumentationintro'] = 'برای ساختن یک کلاینت پیشنهاد می‌کنیم که {$a->doclink} را بخوانید';
$string['wsdocumentationlogin'] = 'یا نام کاربری و رمز ورود وب‌سرویستان را وارد کنید:';
$string['wspassword'] = 'رمز اتصال وب‌سرویس';
$string['wsusername'] = 'نام کاربری وب‌سرویس';
