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
 * Strings for component 'tool_messageinbound', language 'fa', version '4.5'.
 *
 * @package     tool_messageinbound
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['classname'] = 'نام کلاس';
$string['component'] = 'کامپوننت';
$string['configmessageinboundhost'] = 'آدرس کارگزاری که مودل باید نامه‌های الکترونیکی را از طریق آن دریافت کند. برای تعیین کردن پورتی که پیش‌فرض نیست، از قالب <span dir="ltr" style="direction:ltr; display: inline-block">[server]:[port]</span> استفاده کنید. به‌طور مثال mail.example.com:993. اگر پورتی مشخص نشده باشد، مودل از پورت پیش‌فرض مربوط به نوع کارگزار پست الکترونیکی‌ای که وارد کرده‌اید استفاده خواهد کرد.';
$string['description'] = 'توصیف';
$string['domain'] = 'دامنهٔ پست الکترونیکی';
$string['edit'] = 'ویرایش';
$string['enabled'] = 'فعال‌بودن';
$string['fixedvalidateaddress'] = 'معتبرسازی آدرس فرستنده';
$string['incomingmailconfiguration'] = 'پیکربندی نامه‌های وارده';
$string['incomingmailserversettings'] = 'تنظیمات کارگزار نامه‌های وارده';
$string['incomingmailserversettings_desc'] = 'مودل امکان اتصال به کارگزارهای IMAP ی که به‌طور مناسب پیکربندی شده باشند را دارد. تنظیماتی که برای اتصال به کارگزار IMAP شما باید استفاده شود را می‌توانید اینجا وارد کنید.';
$string['invalid_recipient_handler'] = 'اگر یک پیام معتبر دریافت شود ولی فرستنده نتواند احراز هویت شود، پیام در کارگزار پست الکترونیکی نگهداری می‌شود و با استفاده از آدرس پست الکترونیکی ذخیره شده در مشخصات فردی کاربر با او تماس گرفته می‌شود. به کاربر فرصت داده می‌شود تا با پاسخ داده به این نامه، اصالت پیام اصلی را تایید کند.

این رسیدگی‌کننده، آن پاسخ‌ها را پردازش می‌کند.

اعتبارسنجی فرستنده را نمی‌توان برای این رسیدگی‌کننده غیرفعال کرد زیرا اگر پیکربندی برنامهٔ پست الکترونیک کاربر اشتباه باشد، ممکن است از یک آدرس پست الکترونیکی اشتباه پاسخ دهد.';
$string['mailbox'] = 'نام صندوق پستی';
$string['mailboxconfiguration'] = 'پیکربندی صندوق پستی';
$string['mailsettings'] = 'تنظیمات پست الکترونیکی';
$string['messageinboundenabled'] = 'فعال‌کردن پردازش نامه‌های وارده';
$string['messageinboundenabled_desc'] = 'برای اینکه همراه با پیام‌ها اطلاعات متناسب فرستاده شود، پردازش نامه‌های وارده باید فعال شده باشد.';
$string['messageinboundgeneralconfiguration'] = 'تنظیمات عمومی';
$string['messageinboundgeneralconfiguration_desc'] = 'پردازش کردن پیام‌های وارده به شما این امکان را می‌دهد تا نامه‌های الکترونیکی را در مودل دریافت کرده و پردازش کنید. این کار کاربردهای متنوعی دارد نظیر پاسخ دادن به نامه‌های الکترونیکی برای درج پاسخ در تالارهای گفتگو یا اضافه‌کردن فایل به محدوده فایل‌های خصوصی یک کاربر.';
$string['messageinboundhost'] = 'کارگزار نامه‌های وارده';
$string['messageinboundhostpass'] = 'رمز';
$string['messageinboundhostpass_desc'] = 'این رمزی است که تأمین‌کنندهٔ سرویس شما برای ورود به حساب پست الکترونیکی در اختیار شما گذاشته است.';
$string['messageinboundhostssl'] = 'استفاده از SSL';
$string['messageinboundhostssl_desc'] = 'برخی از کارگزارهای پست الکترونیکی، با رمزنگاری ارتباطات بین مودل و کارگزار، از یک لایهٔ اضافه‌تر امنیت پشتیبانی می‌کنند. اگر کارگزار شما از رمزنگاری SSL پشتیبانی می‌کند، توصیه می‌کنیم که از آن استفاده کنید.';
$string['messageinboundhosttype'] = 'نوع کارگزار';
$string['messageinboundhostuser'] = 'نام کاربری';
$string['messageinboundhostuser_desc'] = 'این نام کاربری‌ای است که تأمین‌کنندهٔ سرویس شما برای ورود به حساب پست الکترونیکی در اختیار شما گذاشته است.';
$string['messageinboundmailboxconfiguration_desc'] = 'هنگامی که پیام‌ها ارسال می‌شوند، به فرم address+data@example.com هستند. برای تولید مطمئن آدرس‌ها در مودل، لطفا آدرسی که پیش از علامت @ و دامنه‌ای که بعد از علامت @ استفاده می‌کنید را به‌صورت جداگانه وارد کنید. به‌طور مثال، در مثال ذکر شده نام صندوق پستی «address» و دامنهٔ پست الکترونیکی «example.com» می‌باشد. باید از یک حساب ایمیل اختصاصی برای این منظور استفاده کنید.';
$string['messageprocessingerror'] = 'شما اخیرا یک نامهٔ الکترونیکی «{$a->subject}» فرستادید ولی متاسفانه نتوانست پردازش شود.

جزئیات خطا در زیر نمایش داده شده‌اند.

{$a->error}';
$string['messageprocessingerrorhtml'] = '<p>شما اخیرا یک نامهٔ الکترونیکی «{$a->subject}» فرستادید ولی متاسفانه نتوانست پردازش شود.</p>
<p>جزئیات خطا در زیر نمایش داده شده‌اند.</p>
<p>{$a->error}</p>';
$string['messageprocessingfailed'] = 'نامهٔ «{$a->subject}» نتوانست پردازش شود. خطا به این صورت است: «{$a->message}».';
$string['messageprocessingfailedunknown'] = 'نامهٔ «{$a->subject}» نتوانست پردازش شود. برای اطلاعات بیشتر با مدیر سیستم خود تماس بگیرید.';
$string['messageprocessingsuccess'] = '{$a->plain}

اگر تمایلی به دریافت این اطلاعیه‌ها در آینده ندارید، می‌توانید با مراجعه به {$a->messagepreferencesurl} در مرورگر خود، ترجیحات شخصی پیام‌دهی خود را ویرایش کنید.';
$string['messageprocessingsuccesshtml'] = '{$a->html}
<p>اگر تمایلی به دریافت این اطلاعیه‌ها در آینده ندارید، می‌توانید <a href="{$a->messagepreferencesurl}">ترجیحات شخصی پیام‌دهی خود را ویرایش کنید</a>.</p>';
$string['messageprovider:invalidrecipienthandler'] = 'پیام برای تایید اینکه یک پیام ورودی از سمت شما رسیده است';
$string['messageprovider:messageprocessingerror'] = 'اخطار در هنگامی‌که یک پیام ورودی از سمت شما قابل پردازش نبوده است';
$string['messageprovider:messageprocessingsuccess'] = 'تایید اینکه یک پیام با موفقیت پردازش شد';
$string['name'] = 'نام';
$string['noencryption'] = 'خاموش - بدون رمزنگاری';
$string['noexpiry'] = 'بدون انقضاء';
$string['oldmessagenotfound'] = 'شما سعی کردید که به‌طور دستی یک پیام را معتبر کنید، ولی پیام مورد نظر پیدا نشد. احتمالا می‌تواند به این دلیل باشد که پیام قبلا پردازش شده است، یا اینکه پیام مورد نظر منقضی شده است.';
$string['oneday'] = 'یک روز';
$string['onehour'] = 'یک ساعت';
$string['oneweek'] = 'یک هفته';
$string['oneyear'] = 'یک سال';
$string['pluginname'] = 'پیکربندی پیام‌های ورودی';
$string['replysubjectprefix'] = 'در پاسخ به:';
$string['requirevalidation'] = 'اعتبارسنجی آدرس فرستنده';
$string['ssl'] = 'SSL (تشخیص خودکار نسخهٔ SSL)';
$string['sslv2'] = 'SSLv2 (اجبار SSL نسخهٔ ۲)';
$string['sslv3'] = 'SSLv3 (اجبار SSL نسخهٔ ۳)';
$string['taskcleanup'] = 'پاک‌سازی نامه‌های ورودی تایید نشده';
$string['taskpickup'] = 'چک کردن نامه‌های وارده';
$string['validateaddress'] = 'اعتبارسنجی نشانی الکترونیکی فرستنده';
$string['validateaddress_help'] = 'هنگامی که پیامی از طرف یک کاربر دریافت می‌شود، مودل تلاش می‌کند تا با مقایسهٔ نشانی الکترونیکی فرستنده با آدرس پست الکترونیکی کاربر در مشخصات فردی‌اش، پیام را اعتبارسنجی کند.

چنانچه فرستنده یکی نباشد، اطلاعیه‌ای به کاربر فرستاده می‌شود تا تایید کند که آیا خودش پست الکترونیکی را فرستاده است یا خیر.

اگر این تنظیم غیرفعال باشد، آنگاه نشانی الکترونیکی فرستنده اصلا بررسی نمی‌شود.';
