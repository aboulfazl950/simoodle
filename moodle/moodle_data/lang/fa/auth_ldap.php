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
 * Strings for component 'auth_ldap', language 'fa', version '4.5'.
 *
 * @package     auth_ldap
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_ldap_auth_user_create_key'] = 'ساختن کاربران خارجی';
$string['auth_ldap_bind_dn'] = 'اگر می‌خواهید از کاربر متعلق برای جستجوی کاربران استفاده کنید، کاربر را در این قسمت مشخص کنید. چیزی شبیه به «<span dir="ltr" style="display:inline-block;direction:ltr">cn=ldapuser,ou=public,o=org</span>»';
$string['auth_ldap_bind_dn_key'] = 'نام متمایز';
$string['auth_ldap_bind_pw'] = 'کلمهٔ رمز کاربر متعلق.';
$string['auth_ldap_bind_pw_key'] = 'کلمهٔ رمز';
$string['auth_ldap_bind_settings'] = 'تنظیمات تعلقی';
$string['auth_ldap_changepasswordurl_key'] = 'آدرس صفحهٔ تغییر رمز ورود';
$string['auth_ldap_contexts'] = 'لیستی از زمینه‌هایی که کاربران در آنها قرار دارند. زمینه‌های مختلف را با «;» از هم جدا کنید. به عنوان مثال: «ou=users,o=org; ou=others,o=org»';
$string['auth_ldap_contexts_key'] = 'زمینه‌ها';
$string['auth_ldap_create_context'] = 'اگر ایجاد کاربر با تایید توسط پست الکترونیکی را فعال می‌کنید، زمینه‌ای که کاربران در آن ایجاد می‌شوند را مشخص کنید. این زمینه باید از سایر کاربران متفاوت باشد تا از مشکلات امنیتی جلوگیری شود. نیازی نیست که این زمینه را به متغیر ldap_context اضافه کنید. مودل به طور خودکار به دنبال کاربران این زمینه خواهد گشت.<br /><b>توجه!</b> باید متد <span dir="ltr" style="display:inline-block;direction:ltr">user_create()</span> در فایل auth/ldap/auth.php را تغییر دهید تا ایجاد کاربران کار کند';
$string['auth_ldap_create_context_key'] = 'زمینه برای کاربران جدید';
$string['auth_ldap_expiration_desc'] = 'برای غیر فعال کردن بررسی انقضای رمز ورود No را انتخاب کنید و یا LDAP را انتخاب کنید تا زمان انقضای رمز ورود مستقیماً از LDAP خوانده شود';
$string['auth_ldap_expiration_key'] = 'انقضاء';
$string['auth_ldap_expiration_warning_desc'] = 'تعداد روزهای بین دادن هشدار و انقضای رمز ورود.';
$string['auth_ldap_expiration_warning_key'] = 'هشدار انقضاء';
$string['auth_ldap_expireattr_desc'] = 'اختیاری: مشخصهٔ ldap ی که زمان انقضای رمز ورود را نگهداری می‌کند را بازنویسی می‌کند';
$string['auth_ldap_expireattr_key'] = 'مشخصهٔ انقضاء';
$string['auth_ldap_graceattr_desc'] = 'اختیاری: مشخصهٔ gracelogin را بازنویسی می‌کند';
$string['auth_ldap_gracelogin_key'] = 'مشخصهٔ ورود در وقت اضافه';
$string['auth_ldap_gracelogins_desc'] = 'پشتیبانی LDAP از gracelogin را فعال می‌کند. پس از انقضای رمز ورود، کاربر می‌تواند تا زمانی که مقدار gracelogin به صفر نرسیده است وارد سایت شود. با فعال کردن این تنظیم هنگامی که رمز ورود منقضی شده باشد پیام ورود در وقت اضافه نمایش داده می‌شود.';
$string['auth_ldap_gracelogins_key'] = 'ورود در وقت اضافه';
$string['auth_ldap_host_url'] = 'میزبان LDAP را به صورت آدرسی مانند «<span dir="ltr" style="display:inline-block;direction:ltr">ldap://ldap.myorg.com/</span>» یا «<span dir="ltr" style="display:inline-block;direction:ltr">ldaps://ldap.myorg.com/</span>» مشخص کنید. کارگزارهای چندتایی را با «;» از هم جدا کنید تا از پشتیبانی failover بهره‌مند شوید.';
$string['auth_ldap_host_url_key'] = 'آدرس میزبان';
$string['auth_ldap_ldap_encoding'] = 'کدگذاری مورد استفاده توسط کارگزار LDAP را مشخص کنید. به احتمال زیاد utf-8 است. اکتیو دایرکتوری نسخهٔ ۲ مایکروسافت از کدگذاری‌های پیش‌فرض پلتفرم مانند cp1252، یا cp1250، یا ... استفاده می‌کند.';
$string['auth_ldap_ldap_encoding_key'] = 'کدگذاری LDAP';
$string['auth_ldap_login_settings'] = 'تنظیمات ورود';
$string['auth_ldap_memberattribute'] = 'اختیاری: هنگامی که کاربران به گروهی تعلق داشته باشند، مشخصهٔ عضو کاربر را بازنویسی می‌کند. معمولاً «member» است.';
$string['auth_ldap_memberattribute_isdn'] = 'اختیاری: مدیریت مقادیر مشخصهٔ عضو را بر عهده می‌گیرد. یا ۰ و یا ۱ است.';
$string['auth_ldap_memberattribute_isdn_key'] = 'مشخصهٔ عضو از dn استفاده می‌کند';
$string['auth_ldap_memberattribute_key'] = 'مشخصهٔ عضو';
$string['auth_ldap_noconnect'] = 'ماژول LDAP نمی‌تواند به کارگزار متصل شود: {$a}';
$string['auth_ldap_noextension'] = '<em>به نظر نمی‌رسد که ماژول PHP LDAP وجود داشته باشد. اگر می‌خواهید از این پلاگین شناسائی استفاده کنید، لطفاً مطمئن شوید که نصب و فعال باشد.</em>';
$string['auth_ldap_objectclass'] = 'اختیاری: کلاسِ شیء (ObjectClass) مورد استفاده برای نام‌گذاری/جستجوی کاربران در ldap_user_type را بازنویسی (override) می‌کند. معمولاً نیازی به تغییر دادن این قسمت ندارید.';
$string['auth_ldap_objectclass_key'] = 'کلاسِ شیء';
$string['auth_ldap_opt_deref'] = 'تعیین اینکه نام‌های مستعار در هنگام جستجو چگونه رسیدگی می‌شوند. یکی از این مقادیر را انتخاب کنید: «خیر» (LDAP_DEREF_NEVER) یا «بله» (LDAP_DEREF_ALWAYS)';
$string['auth_ldap_opt_deref_key'] = 'رجوع به محل ارجاع نام‌های مستعار';
$string['auth_ldap_passtype'] = 'قالب رمزهای جدید یا تغییر کرده در کارگزار LDAP را مشخص کنید.';
$string['auth_ldap_passtype_key'] = 'قالب رمز ورود';
$string['auth_ldap_passwdexpire_settings'] = 'تنظیمات مربوط به انقضای رمز ورود LDAP.';
$string['auth_ldap_preventpassindb'] = 'گزینهٔ بله را انتخاب کنید تا جلوی ذخیره شدن رمزهای ورود در پایگاه دادهٔ مودل گرفته شود.';
$string['auth_ldap_preventpassindb_key'] = 'پنهان کردن رمزهای ورود';
$string['auth_ldap_search_sub'] = 'جستجوی کاربران در زیرزمینه‌ها.';
$string['auth_ldap_search_sub_key'] = 'جستجوی زیرزمینه‌ها';
$string['auth_ldap_server_settings'] = 'تنظیمات کارگزار LDAP';
$string['auth_ldap_suspended_attribute'] = 'اختیاری: در صورت تعیین، از این مشخصه برای فعال/تعلیق‌کردن حساب‌های کاربری محلی استفاده خواهد شد.';
$string['auth_ldap_suspended_attribute_key'] = 'مشخصهٔ تعلیق‌شده';
$string['auth_ldap_update_userinfo'] = 'Update user information (firstname, lastname, address..) from LDAP to Moodle. Look at /auth/ldap/attr_mappings.php for mapping information';
$string['auth_ldap_user_attribute'] = 'اختیاری: مشخصهٔ استفاده شده برای نام‌گذاری/جستجوی کاربران. معمولاً «cn» است.';
$string['auth_ldap_user_attribute_key'] = 'مشخصهٔ کاربر';
$string['auth_ldap_user_settings'] = 'تنظیمات جستجوی کاربر';
$string['auth_ldap_user_type'] = 'چگونگی نگهداری کاربران در LDAP را انتخاب کنید. این تنظیم عملکرد انقضای زمان بودن در سایت، ورودهای موفق به سایت (grace logins)، و ایجاد کاربر را نیز تعیین خواهد کرد.';
$string['auth_ldap_user_type_key'] = 'نوع کاربر';
$string['auth_ldap_version'] = 'نسخهٔ پروتکل LDAP مورد استفاده توسط کارگزار شما.';
$string['auth_ldap_version_key'] = 'نسخه';
$string['auth_ldapdescription'] = 'این روش شناسایی با استفاده از یک کارگزار LDAP را فراهم می‌کند.
اگر نام کاربری و رمز ورود ارائه شده معتبر باشند، مودل یک کاربر جدید
در پایگاه دادهٔ خود ایجاد می‌کند. این ماژول می‌تواند مشخصه‌های کاربر را از LDAP بخواند و
فیلدهای مورد نیاز در مودل را پر کند. به هنگام ورودهای بعدی کاربر به سایت، تنها نام کاربری و
رمز ورود بررسی خواهند شد.';
$string['auth_ldapextrafields'] = 'این فیلدها اختیاری هستند. می‌توانید تعیین کنید که برخی از مشخصه‌های کاربران مودل با اطلاعات <b>فیلدهای LDAP</b> مشخص شده در اینجا مقداردهی اولیه شوند.<p>اگر این فیلدها را خالی بگذارید، چیزی از LDAP منتقل نخواهد شد و در عوض از پیش‌فرض‌های مودل استفاده خواهد شد.</p><p>در هر دو حالت، کاربران پس از ورود به سایت قادر به ویرایش تمام این مشخصه‌ها خواهند بود.</p>';
$string['auth_ldapnotinstalled'] = 'شناسایی LDAP قابل استفاده نیست. ماژول PHP LDAP نصب نشده است.';
$string['auth_ntlmsso_enabled'] = 'روی بله قرار دهید تا Single Sign On با استفاده از دامنهٔ NTLM انجام شود. <strong>توجه:</strong> برای اینکه کار کند نیازمند انجام تنظیمات اضافی بر روی کارگزار وب است. <a href="http://docs.moodle.org/en/NTLM_authentication">http://docs.moodle.org/en/NTLM_authentication</a> را ببینید.';
$string['auth_ntlmsso_enabled_key'] = 'فعال';
$string['auth_ntlmsso_ie_fastpath'] = 'برای فعال کردن مسیر سریع NTML SSO روی بله قرار دهید (این کار برخی از مراحل را کنار می‌گذارد و تنها وقتی که مرورگر مورد استفاده اینترنت اکسپلورر باشد فعال می‌شود).';
$string['auth_ntlmsso_ie_fastpath_key'] = 'مسیر سریع اینترنت اکسپلورر؟';
$string['auth_ntlmsso_subnet'] = 'اگر تعیین شود، SSO تنها برای سرویس‌گیرنده‌های داخل زیر شبکه انجام می‌شود. قالب: xxx.xxx.xxx.xxx/bitmask. زیر شبکه‌های مختلف را می‌توانید با «,» (کاما) از یکدیگر جدا کنید.';
$string['auth_ntlmsso_subnet_key'] = 'زیر شبکه';
$string['auth_ntlmsso_type'] = 'شیوهٔ شناسایی پیکربندی شده در کارگزار وب برای شناسایی کاربران (اگر مطمئن نیستید، NTLM را انتخاب کنید)';
$string['auth_ntlmsso_type_key'] = 'نوع شناسایی';
$string['didntfindexpiretime'] = 'تابع password_expire زمان انقضا را پیدا نکرد.';
$string['notcalledfromserver'] = 'نمی‌تواند از کارگزار وب صدا زده شود!';
$string['pagesize'] = 'اطمینان حاصل کنید که این مقدار از محدودیت تعیین‌شده برای اندازهٔ result set (حداکثر تعداد اطلاعاتی که می‌توانند در یک query بازگردند) در کارگزار LDAP شما کمتر باشد';
$string['pagesize_key'] = 'اندازهٔ صفحه';
$string['pluginname'] = 'کارگزار LDAP';
$string['privacy:metadata'] = 'پلاگین شناسایی کارگزار LDAP هیچ اطلاعات شخصی‌ای ذخیره نمی‌کند.';
$string['start_tls'] = 'استفاده از سرویس عادی LDAP (پورت ۳۸۹) با رمزنگاری TLS';
$string['start_tls_key'] = 'استفاده از TLS';
$string['usernotfound'] = 'کاربر در LDAP پیدا نشد';
