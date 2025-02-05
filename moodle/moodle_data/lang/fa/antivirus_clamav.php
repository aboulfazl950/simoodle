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
 * Strings for component 'antivirus_clamav', language 'fa', version '4.5'.
 *
 * @package     antivirus_clamav
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clamfailed'] = 'Clam AV موفق به اجرا نشد. پیغام خطای دریافتی «{$a}» بود. خروجی Clam بدین شرح است:';
$string['clamfailureonupload'] = 'در صورت ناموفق بودن clamAV';
$string['configclamactlikevirus'] = 'به فایل‌ها به دید ویروس نگاه شود';
$string['configclamdonothing'] = 'به فایل‌ها به دید سالم نگاه شود';
$string['configclamfailureonupload'] = 'اگر قرار باشد که CalmAV فایل‌های ارسالی را بررسی کند، ولی به طور مناسب پیکربندی نشده باشد یا به هر دلیلی نتواند به طور مناسب اجرا شود، باید با فایل‌ها چگونه رفتار کند؟ اگر گزینهٔ «به فایل‌ها به دید ویروس نگاه شود» را انتخاب کنید، به قرنطینه منتقل، یا حذف خواند شد. اگر گزینهٔ «به فایل‌ها به دید سالم نگاه شود» را انتخاب کنید، فایل‌ها مانند شرایط عادی به دایرکتوری مقصد منتقل خواهند شد. در هر دو صورت، مدیرها مطلع خواهند شد که CalmAV موفق نشده است. اگر گزینهٔ «به فایل‌ها به دید ویروس نگاه شود» را انتخاب کنید و به هر دلیلی اجرای CalmAV موفق نباشد (معمولاً به دلیل اشتباه بودن مسیر CalmAV)، همهٔ فایل‌های ارسالی به محل مشخص شده برای قرنطینه منتقل، یا به طور کامل حذف خواهند شد. در انتخاب این گزینه دقت کنید.';
$string['errorcantopensocket'] = 'اتصال به سوکت دامنهٔ یونیکس منجر به خطای {$a} شد';
$string['errorclamavnoresponse'] = 'ClamAV پاسخ نمی‌دهد. وضعیت اجرای سرویس را بررسی کنید.';
$string['errornounixsocketssupported'] = 'نقل و انتقال سوکت دامنهٔ یونیکس روی این سیستم پشتیبانی نمی‌شود. به جای آن، لطفا از گزینهٔ خط فرمان استفاده کنید.';
$string['invalidpathtoclam'] = 'مسیر ClamAV (<span dir="ltr" style="display:inline-block;direction:ltr">{$a}</span>) نامعتبر است.';
$string['pathtoclam'] = 'خط فرمان';
$string['pathtoclamdesc'] = 'اگر نحوهٔ اجرا روی «خط فرمان» تنظیم شده است، مسیر ClamAV را در این قسمت وارد کنید. در لینوکس این مسیر <span dir="ltr" style="display:inline-block;direction:ltr">/usr/bin/clamscan</span> یا <span dir="ltr" style="display:inline-block;direction:ltr">/usr/bin/clamdscan</span> خواهد بود.';
$string['pathtounixsocket'] = 'سوکت دامنهٔ یونیکس';
$string['pathtounixsocketdesc'] = 'اگر نحوهٔ اجرا روی «سوکت دامنهٔ یونیکس» تنظیم شده است، مسیر سوکت یونیکس ClamAV را در این قسمت وارد کنید. در لینوکس دبیان این مسیر <span dir="ltr" style="display:inline-block;direction:ltr">/var/run/clam.ctl</span> خواهد بود. لطفا مطمئن شوید که سرویس clamav دسترسی خواندن فایل‌های آپلود شده را داشته باشد. ساده‌ترین راه برای اطمینان از این موضوع، اضافه‌کردن کاربر «clamav» به گروه کارگزار وب (در لینوکس دبیان www-data) است.';
$string['pluginname'] = 'ویروس‌یاب ClamAV';
$string['privacy:metadata'] = 'پلاگین آنتی‌ویروس ClamAV هیچ اطلاعات شخصی‌ای ذخیره نمی‌کند.';
$string['quarantinedir'] = 'دایرکتوری قرنطینه';
$string['runningmethod'] = 'نحوهٔ اجرا';
$string['runningmethodcommandline'] = 'خط فرمان';
$string['runningmethoddesc'] = 'نحوهٔ اجرای ClamAV. به‌طور پیش‌فرض «خط فرمان» استفاده می‌شود، ولی در سیستم‌های یونیکسی با استفاده از سوکت‌های سیستمی می‌توان به کارآیی بهتری دست یافت.';
$string['runningmethodunixsocket'] = 'سوکت دامنهٔ یونیکس';
$string['unknownerror'] = 'خطای ناشناخته‌ای در مورد ClamAV به وجود آمد.';
