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
 * Strings for component 'auth_cas', language 'fa', version '4.5'.
 *
 * @package     auth_cas
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_cas_baseuri'] = 'آدرس کارگزار (اگر آدرس پایه‌ای وجود ندارد خالی بماند)<br />به عنوان مثال، اگر کارگزار CAS به <span dir="ltr" style="display:inline-block;direction:ltr">host.domaine.fr/CAS/</span> پاسخ می‌دهد آنگاه آدرس پایه برابر است با <span dir="ltr" style="display:inline-block;direction:ltr">CAS/</span>';
$string['auth_cas_baseuri_key'] = 'آدرس پایه';
$string['auth_cas_broken_password'] = 'بدون تغییر دادن رمز ورود خود نمی‌توانید ادامه دهید، ولی صفحهٔ تغییر رمز ورود موجود نیست. لطفا با مدیر مودل خود تماس بگیرید.';
$string['auth_cas_cantconnect'] = 'بخش LDAP از ماژول CAS نتوانست به کارگزار متصل شود: {$a}';
$string['auth_cas_casversion'] = 'نسخه پروتکل CAS';
$string['auth_cas_certificate_check'] = 'اگر می‌خواهید گواهینامهٔ کارگزار اعتبار سنجی شود، این را روی «بله» قرار دهید';
$string['auth_cas_certificate_check_key'] = 'اعتبار سنجی کارگزار';
$string['auth_cas_certificate_path'] = 'مسیر فایل زنجیرهٔ CA (در قالب PEM) برای اعتبار سنجی گواهینامهٔ کارگزار';
$string['auth_cas_certificate_path_key'] = 'مسیر گواهینامه';
$string['auth_cas_changepasswordurl'] = 'آدرس تغییر رمز ورود';
$string['auth_cas_create_user'] = 'اگر می‌خواهید کاربرانی که در CAS شناسایی شده‌اند را در پایگاه دادهٔ مودل درج کنید، این مورد را فعال کنید. در غیر اینصورت تنها کاربرانی که از قبل در پایگاه دادهٔ مودل موجود باشند می‌توانند وارد شوند.';
$string['auth_cas_create_user_key'] = 'ساختن کاربر';
$string['auth_cas_curl_ssl_version'] = 'نسخهٔ SSL (نسخهٔ ۲ یا ۳) ی که باید استفاده شود. به‌طور پیش‌فرض PHP تلاش می‌کند که نسخهٔ SSL را تشخیص دهد، ولی در برخی مواقع باید این مقدار به‌طور دستی تعیین شود.';
$string['auth_cas_curl_ssl_version_key'] = 'نسخهٔ SSL در cURL';
$string['auth_cas_enabled'] = 'اگر می‌خواهید از شناسایی CAS استفاده کنید این مورد را فعال کنید.';
$string['auth_cas_hostname'] = 'نام میزبان کارگزار CAS <br />مثال: host.domain.fr';
$string['auth_cas_hostname_key'] = 'میزبان';
$string['auth_cas_invalidcaslogin'] = 'متاسفیم، ورود شما ناموفق بود - شما نتوانستید شناسایی شوید';
$string['auth_cas_language'] = 'زبان انتخابی برای صفحه‌های احراز هویت';
$string['auth_cas_language_key'] = 'زبان';
$string['auth_cas_logincas'] = 'دسترسی اتصال امن';
$string['auth_cas_logout_return_url'] = 'آدرسی که کاربران CAS پس از خروج از سایت باید به آنجا هدایت شوند را وارد کنید.<br />اگر خالی گذاشته شود، کاربران به محلی که مودل کاربران را هدایت می‌کند هدایت خواهند شد';
$string['auth_cas_logout_return_url_key'] = 'آدرس بازگشت جایگزین پس از خروج از سایت';
$string['auth_cas_logoutcas'] = 'اگر می‌خواهید همراه با خروج از مودل از CAS هم خارج شوید، این تنظیم را روی «بله» قرار دهید';
$string['auth_cas_logoutcas_key'] = 'خروج از CAS';
$string['auth_cas_multiauth'] = 'اگر می‌خواهید شناسائی چندگانه (CAS به همراه روش شناسائی دیگری) داشته باشید، مقدار این گزینه را بر روی «بله» قرار دهید';
$string['auth_cas_multiauth_key'] = 'شناسائی چندگانه';
$string['auth_cas_port'] = 'پورت کارگزار CAS';
$string['auth_cas_port_key'] = 'پورت';
$string['auth_cas_proxycas'] = 'اگر از CAS در حالت پروکسی استفاده می‌کنید این گزینه را روی «بله» تنظیم کنید';
$string['auth_cas_proxycas_key'] = 'استفاده از پروکسی';
$string['auth_cas_server_settings'] = 'پیکربندی کارگزار CAS';
$string['auth_cas_text'] = 'اتصال امن';
$string['auth_cas_use_cas'] = 'استفاده از CAS';
$string['auth_cas_version'] = 'نسخهٔ CAS';
$string['auth_casdescription'] = 'این روش از یک کارگزار CAS (مخفف Central Authentication Service یا سرویس شناسایی مرکزی) برای شناسایی کاربران در یک محیط SSO (مخفف Single Sign On) استفاده می‌کند. از یک شناسایی LDAP ساده نیز می‌توانید استفاده کنید. اگر نام کاربری و رمز ورود ارائه شده بر اساس CAS معتبر باشند، مودل یک کاربر جدید در پایگاه دادهٔ خود ایجاد می‌کند و در صورت لزوم مشخصات آن را از LDAP دریافت می‌کند. به هنگام ورودهای بعدی، تنها نام کاربری و رمز ورود بررسی می‌شوند.';
$string['auth_casnotinstalled'] = 'شناسایی CAS قابل استفاده نیست. ماژول PHP LDAP نصب نشده است.';
$string['pluginname'] = 'کارگزار CAS (یک SSO)';
$string['privacy:metadata'] = 'پلاگین شناسایی کارگزار CAS (یک SSO) هیچ اطلاعات شخصی‌ای ذخیره نمی‌کند.';
