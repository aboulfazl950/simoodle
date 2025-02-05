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
 * Strings for component 'report_security', language 'fa', version '4.5'.
 *
 * @package     report_security
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['check_configrw_details'] = '<p>توصیه می‌شود که مجوزهای فایل config.php پس از نصب به نحوی تغییر داده شود تا این فایل توسط کارگزار وب قابل ویرایش نباشد. لطفا توجه فرمایید که این کار باعث افزایش قابل توجه امنیت کارگزار نمی‌شود. با این وجود می‌تواند موجب کند شدن یا محدود شدن سوء استفاده ‌های عمومی شود.</p>';
$string['check_configrw_name'] = 'قابل نوشتن بودن config.php';
$string['check_configrw_ok'] = 'config.php نمی‌تواند توسط اسکریپت‌های PHP تغییر کند.';
$string['check_configrw_warning'] = 'اسکریپت‌های PHP می‌توانند config.php را تغییر دهند.';
$string['check_cookiesecure_details'] = '<p>اگر ارتباط https را فعال کرده‌اید، توصیه می‌شود که تنظیم کوکی‌های امن را هم فعال کنید. همچنین باید هدایت دائمی http به https را هم انجام دهید. در حالت ایده‌آل سرآیند‌های HSTS (یا HSTS headers) را هم به‌درستی مدیریت کنید.</p>';
$string['check_cookiesecure_error'] = 'لطفا کوکی‌های امن را فعال کنید';
$string['check_cookiesecure_name'] = 'کوکی‌های امن';
$string['check_cookiesecure_ok'] = 'کوکی‌های امن فعال است.';
$string['check_crawlers_details'] = '<p>تنظیم در معرض گوگل به موتورهای جستجو اجازه می‌دهد با دسترسی مهمان وارد درس‌ها شوند. اگر دسترسی مهمان در سایت مجاز نباشد، فعال کردن این تنظیم هیچ فایده‌ای نخواهد داشت.</p>';
$string['check_crawlers_error'] = 'دسترسی موتور جستجو مجاز است ولی دسترسی مهمان غیر فعال است.';
$string['check_crawlers_info'] = 'موتورهای جستجو می‌توانند به عنوان مهمان وارد شوند.';
$string['check_crawlers_name'] = 'در معرض گوگل';
$string['check_crawlers_ok'] = 'دسترسی موتور جستجو فعال نشده است.';
$string['check_defaultuserrole_details'] = '<p>همهٔ کاربران وارد شده (شناسایی شده) توانایی‌های نقش پیش‌فرض را دارا هستند. لطفا مطمئن شوید که توانایی مخاطره آمیزی در این نقش مجاز نباشد.</p>
<p>تنها نوع ارثی پشتیبانی شده برای نقش پیش‌فرض کاربر <em>کاربر شناسایی شده</em> است. توانایی مشاهدهٔ درس نباید فعال باشد.</p>';
$string['check_defaultuserrole_error'] = 'نقش پیش‌فرض کاربر «{$a}» نادرست تعریف شده است!';
$string['check_defaultuserrole_name'] = 'نقش پیش‌فرض برای همهٔ کاربران';
$string['check_defaultuserrole_notset'] = 'نقش پیش‌فرض تعیین نشده است.';
$string['check_defaultuserrole_ok'] = 'تعریف نقش پیش‌فرض برای همهٔ کاربران مناسب است.';
$string['check_displayerrors_details'] = '<p>فعال کردن تنظیم PHP <code style="display:inline-block">display_errors</code> در سایت‌های تحت بهره‌برداری توصیه نمی‌شود. زیرا پیام‌های خطا می‌توانند اطلاعات حساسی را در مورد کارگزار شما افشا کنند.</p>';
$string['check_displayerrors_error'] = 'تنظیم PHP برای نمایش خطاها فعال است. توصیه می‌شود که غیر فعال باشد.';
$string['check_displayerrors_name'] = 'نمایش دادن خطاهای PHP';
$string['check_displayerrors_ok'] = 'نمایش دادن خطاهای PHP غیر فعال است.';
$string['check_emailchangeconfirmation_details'] = '<p>توصیه می‌شود که هنگامی که کاربران آدرس پست الکترونیکی خود را در صفحهٔ مشخصات فردیشان تغییر می‌دهند، مرحله‌ای برای تایید این تغییر لازم باشد. اگر غیر فعال باشد، ارسال کنندگان هرز نوشته‌ها ممکن است سعی کنند که از کارگزار شما برای فرستادن هرز نوشته استفاده کنند.</p>
<p>فیلد پست الکترونیکی می‌تواند توسط پلاگین‌های شناسایی هم قفل شود. این امکان اینجا در نظر گرفته نشده است.</p>';
$string['check_emailchangeconfirmation_error'] = 'کاربران می‌توانند هر آدرس پست الکترونیکی‌ای وارد کنند.';
$string['check_emailchangeconfirmation_info'] = 'کاربران فقط می‌توانند آدرس‌های پست الکترونیکی متعلق به دامنه‌های مجاز را وارد کنند.';
$string['check_emailchangeconfirmation_name'] = 'تاییدیه تغییر آدرس پست الکترونیکی';
$string['check_emailchangeconfirmation_ok'] = 'تاییدیه تغییر آدرس پست الکترونیکی در صفحهٔ مشخصات فردی کاربر.';
$string['check_embed_details'] = '<p>جایگذاری نامحدود object بسیار خطرناک است – هر کاربر عضو سایت می‌تواند یک حملهٔ XSS را بر علیه سایر کاربران کاگزار شروع کند. این تنظیم باید در کارگزارهای تحت بهره‌برداری غیر فعال باشد.</p>';
$string['check_embed_error'] = 'جایگذاری نامحدود object فعال است – این وضعیت برای اغلب کارگزارها بسیار خطرناک است.';
$string['check_embed_name'] = 'مجاز بودن EMBED و OBJECT';
$string['check_embed_ok'] = 'جایگذاری نامحدود object مجاز نیست.';
$string['check_frontpagerole_details'] = '<p>نقش پیش‌فرض صفحه‌اول برای فعالیت‌های صفحهٔ اول به تمام کاربران عضو داده می‌شود. لطفا مطمئن شوید که هیچ قابلیت مخاطره آمیزی در این نقش مجاز نباشد.</p>
<p>توصیه می‌شود که یک نقش ویژه برای این منظور تعریف شود و از یک نقش ارثی استفاده نشود.</p>';
$string['check_frontpagerole_error'] = 'نقش صفحهٔ اول بد تعریف شده «{$a}» تشخیص داده شد!';
$string['check_frontpagerole_name'] = 'نقش صفحهٔ اول';
$string['check_frontpagerole_notset'] = 'نقش صفحهٔ اول تعیین نشده است.';
$string['check_frontpagerole_ok'] = 'تعریف نقش صفحهٔ اول مناسب است.';
$string['check_guestrole_details'] = '<p>نقش مهمان برای مهمان‌ها، کاربران وارد نشده و دسترسی موقتی به درس‌ها به عنوان مهمان استفاده می‌شود. لطفا مطمئن شوید که هیچ یک از توانایی‌های مخاطره آمیز در این نقش مجاز نباشد.</p>
<p>تنها نوع ارثی پشتیبانی شده برای نقش مهمان <em>مهمان</em> است.</p>';
$string['check_guestrole_error'] = 'نقش مهمان «{$a}» نادرست تعریف شده است!';
$string['check_guestrole_name'] = 'نقش مهمان';
$string['check_guestrole_notset'] = 'نقش مهمان تعیین نشده است.';
$string['check_guestrole_ok'] = 'تعریف نقش مهمان مناسب است.';
$string['check_openprofiles_details'] = '<p>پروفایل‌های باز برای کاربران می‌تواند توسط ارسال کننده‌های هرزنامه‌ها مورد سوء استفاده قرار بگیرد. توصیه می‌شود که یا <code>اجبار کاربران به ورود برای مشاهدهٔ پروفایل‌ها</code> یا <code>اجبار بازدید کنندگاه به وارد شدن</code> فعال باشد.</p>';
$string['check_openprofiles_error'] = 'هر کسی بدون نیاز به وارد شدن به سایت با استفاده از نام کاربری، می‌تواند صفحهٔ مشخصات فردی کاربران را ببیند.';
$string['check_openprofiles_name'] = 'پروفایل‌های باز برای کاربران';
$string['check_openprofiles_ok'] = 'برای مشاهدهٔ پروفایل کاربران نیاز به وارد شدن به سایت است.';
$string['check_passwordpolicy_details'] = '<p>با توجه به اینکه در اکثر مواقع حدس زدن رمزهای ورود ساده‌ترین راه برای بدست آوردن دسترسی غیر مجاز است، توصیه می‌شود که برای رمزهای ورود شرایط خاصی در نظر گرفته شود.
با این وجود شرایط مورد نیاز را بیش از حد سخت نکنید. زیرا این کار ممکن است موجب شود که کاربران قادر به به خاطر سپاری رمز های ورودشان نباشند و در نتیجه یا آن را فراموش کنند و یا در جایی یادداشتش کنند.</p>';
$string['check_passwordpolicy_error'] = 'شرایط رمز ورود تعیین نشده است.';
$string['check_passwordpolicy_name'] = 'شرایط رمز ورود';
$string['check_passwordpolicy_ok'] = 'رمز ورود باید شرایط خاصی داشته باشد.';
$string['check_riskadmin_detailsok'] = '<p>لطفا لیست مدیران سیستم زیر را بررسی کنید:</p>{$a}';
$string['check_riskadmin_detailswarning'] = '<p>لطفا لیست مدیران سیستم زیر را بررسی کنید:</p>{$a->admins}
<p>توصیه می‌شود که نقش مدیر را تنها در زمینهٔ سیستم نسبت دهید. کاربران زیر دارای نقش مدیر (پشتیبانی نشده) در زمینه‌های دیگر هستند:</p>{$a->unsupported}';
$string['check_riskadmin_name'] = 'مدیرها';
$string['check_riskadmin_ok'] = '{$a} مدیر کارگزار پیدا شد.';
$string['check_riskadmin_unassign'] = '<a href="{$a->url}">{$a->fullname} ({$a->email}) بازبینی انتساب نقش</a>';
$string['check_riskadmin_warning'] = '{$a->admincount} مدیر کارگزار و {$a->unsupcount} انتساب نقش مدیر پشتیبانی نشده پیدا شد.';
$string['check_riskbackup_details_overriddenroles'] = '<p>این بازنویسی‌های فعال به کاربران امکان شامل کردن داده‌های کاربران در پشتیبان‌ها را می‌دهد. لطفا مطمئن شوید که این مجوز واقعا لازم باشد.</p> {$a}';
$string['check_riskbackup_details_systemroles'] = '<p>نقش‌های سیسمی زیر هم اکنون به کاربران امکان شامل کردن داده‌های کاربران در پشتیبان‌ها را می‌دهد. لطفا مطمئن شوید که این مجوز واقعا لازم باشد.</p> {$a}';
$string['check_riskbackup_details_users'] = '<p>به دلیل نقش‌های بالا یا بازنویسی‌های صورت گرفتهٔ محلی، حساب‌های کاربری زیر هم اکنون دارای مجوز ایجاد پشتیبان‌هایی که شامل داده‌های خصوصی هر یک از کاربران ثبت نام شده در درس‌های آنها شود هستند. مطمئن شوید که آنها (الف) مورد اعتماد و (ب) محافظت شده با رمزهای قوی باشند:</p> {$a}';
$string['check_riskbackup_detailsok'] = 'هیچ نقشی به طور صریح اجازه پشتیبان گیری از داده‌های کاربران را نمی‌دهد. اما توجه کنید که هنوز هم مدیرهایی که توانایی «انجام هر کاری» را دارند به احتمال زیاد قادر به انجام این کار هستند.';
$string['check_riskbackup_editoverride'] = '<a href="{$a->url}">{$a->name} در {$a->contextname}</a>';
$string['check_riskbackup_editrole'] = '<a href="{$a->url}">{$a->name}</a>';
$string['check_riskbackup_name'] = 'پشتیبان‌گیری از اطلاعات کاربران';
$string['check_riskbackup_ok'] = 'هیچ نقشی به طور صریح اجازه پشتیبان گیری از داده‌های کاربران را نمی‌دهد.';
$string['check_riskbackup_unassign'] = '<a href="{$a->url}">{$a->fullname} ({$a->email}) در {$a->contextname}</a>';
$string['check_riskbackup_warning'] = '{$a->rolecount} نقش، {$a->overridecount} بازنویسی و {$a->usercount} کاربر با توانایی پشتیبان گرفتن از اطلاعات کاربران پیدا شد.';
$string['check_riskxss_details'] = '<p>RISK_XSS نشان دهندهٔ تمام قابلیت‌های خطرناکی است که فقط کاربران مورد اعتماد می‌توانند از آنها استفاده کنند.</p>
<p>لطفا لیست کاربران زیر را بررسی کنید و مطمئن شوید که به آنها روی این کارگزار اعتماد کامل دارید:</p><p>{$a}</p>';
$string['check_riskxss_name'] = 'کاربران مورد اعتماد از لحاظ XSS';
$string['check_riskxss_warning'] = '<span style="display:inline-block">RISK_XSS</span> – {$a} کاربر پیدا شد که باید مورد اعتماد باشند.';
$string['check_unsecuredataroot_details'] = '<p>دایرکتوری داده نباید از طریق وب قابل دستیابی باشد. بهترین راه برای اطمینان از غیر قابل دستیابی بودن دایرکتوری این است که در بیرون دایرکتوری عمومی وب قرار داشته باشد.</p>
<p>اگر این دایرکتوری را منتقل کنید، باید مقدار تنظیم <code dir="ltr" style="display:inline-block;direction:ltr">$CFG->dataroot</code> در فایل <code>config.php</code> را به نحو مناسب به‌روز نمایید.</p>';
$string['check_unsecuredataroot_error'] = 'دایرکتوری داده شما (<code dir="ltr" style="display:inline-block;direction:ltr">{$a}</code>) در محل نادرستی قرار دارد و در معرض وب قرار گرفته است!';
$string['check_unsecuredataroot_name'] = 'دایرکتوری دادهٔ نا امن';
$string['check_unsecuredataroot_ok'] = 'دایرکتوری داده نباید از طریق وب قابل دستیابی باشد.';
$string['check_unsecuredataroot_warning'] = 'دایرکتوری داده شما (<code dir="ltr" style="display:inline-block;direction:ltr">{$a}</code>) در محل نادرستی قرار دارد و ممکن است در معرض وب قرار گیرد.';
$string['check_webcron_details'] = '<p>اجرای کرون از طریق یک مرورگر وب می‌تواند اطلاعات حساسی را در معرض دسترس کاربران ناشناس قرار دهد. توصیه می‌شود که cron را تنها از طریق خط فرمان اجرا کنید یا اینکه یک رمز برای دسترسی به کرون از راه دور تعیین کنید.</p>';
$string['check_webcron_name'] = 'cron تحت وب';
$string['check_webcron_ok'] = 'کاربران ناشناس نمی‌توانند به cron دسترسی داشته باشند.';
$string['check_webcron_warning'] = 'کاربران ناشناس می‌توانند به cron دسترسی داشته باشند.';
$string['configuration'] = 'پیکربندی';
$string['description'] = 'شرح';
$string['details'] = 'جزئیات';
$string['issue'] = 'موضوع';
$string['pluginname'] = 'مرور موارد امنیتی';
$string['security:view'] = 'مشاهدهٔ گزارش موارد امنیتی';
$string['timewarning'] = 'پردازش داده‌ها ممکن است به طول انجامد. لطفا شکیبا باشید...';
