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
 * Strings for component 'enrol_ldap', language 'fa', version '4.5'.
 *
 * @package     enrol_ldap
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'انتساب نقش «{$a->role_shortname}» به کاربر «{$a->user_username}» در درس «{$a->course_shortname}» (شناسه: {$a->course_id})';
$string['assignrolefailed'] = 'انتساب نقش «{$a->role_shortname}» به کاربر «{$a->user_username}» در درس «{$a->course_shortname}» (با شناسه {$a->course_id}) ناموفق بود';
$string['autocreate'] = '<p>اگر در درسی که در مودل وجود ندارد ثبت نام‌هایی وجود داشته باشد، درس می‌تواند به صورت خودکار در مودل ایجاد شود</p><p>اگر از ایجاد خودکار درس استفاده می‌کنید، توصیه می‌شود که مجوزهای <span style="display:inline-block">moodle/course:changeidnumber</span>، <span style="display:inline-block">moodle/course:changeshortname</span>، <span style="display:inline-block">moodle/course:changefullname</span> و <span style="display:inline-block">moodle/course:changesummary</span> را از نقش‌های مربوطه بردارید تا جلوی تغییر ۴ فیلد درس مشخص شده در بالا (کد درس، نام کوتاه، نام کامل و خلاصه) گرفته شود.</p>';
$string['autocreate_key'] = 'ایجاد خودکار';
$string['autocreation_settings'] = 'تنظیمات ایجاد درس به صورت خودکار';
$string['autoupdate_settings'] = 'تنظیمات مربوط به به‌روزرسانی خودکار درس‌ها';
$string['autoupdate_settings_desc'] = '<p>هنگامی که اسکریپت همگام‌سازی (enrol/ldap/cli/sync.php) اجرا می‌شود، مشخصه‌هایی که باید به‌روز شوند را انتخاب کنید.</p><p>اگر حداقل یک مشخصه انتخاب شده باشد، به‌روز شدن رخ خواهد داد.</p>';
$string['bind_dn'] = 'اگر می‌خواهید از کاربر متعلق برای جستجوی کاربران استفاده کنید، کاربر را در این قسمت مشخص کنید. چیزی شبیه به «<span dir="ltr" style="display:inline-block;direction:ltr">cn=ldapuser,ou=public,o=org</span>»';
$string['bind_dn_key'] = 'نام متمایز کاربر متعلق';
$string['bind_pw'] = 'کلمهٔ رمز کاربر متعلق';
$string['bind_pw_key'] = 'کلمهٔ رمز';
$string['bind_settings'] = 'تنظیمات تعلقی';
$string['cannotcreatecourse'] = 'ساختن درس ممکن نیست: داده‌های مورد نیاز در رکورد LDAP موجود نیست!';
$string['cannotupdatecourse'] = 'به‌روزکردن درس ممکن نیست: داده‌های مورد نیاز در رکورد LDAP موجود نیست! کد درس: «{$a->idnumber}»';
$string['cannotupdatecourse_duplicateshortname'] = 'به‌روزکردن درس ممکن نیست: نام کوتاه تکراری. صرف‌نظر کردن از درس با کد درس «{$a->idnumber}»...';
$string['category'] = 'طبقه برای درس‌های ساخته شده به صورت خودکار';
$string['category_key'] = 'طبقه';
$string['contexts'] = 'زمینه‌های LDAP';
$string['couldnotfinduser'] = 'کاربر «{$a}» پیدا نشد، نادیده گرفتن';
$string['course_fullname'] = 'اختیاری: مشخصه‌ای در LDAP برای دریافت نام کامل از آن';
$string['course_fullname_key'] = 'نام کامل';
$string['course_fullname_updateonsync'] = 'به‌روزکردن نام کامل در حین اسکریپت همگام‌سازی';
$string['course_fullname_updateonsync_key'] = 'به‌روزکردن نام کامل';
$string['course_idnumber'] = 'اختیاری: مشخصه‌ای در LDAP برای دریافت کد درس از آن. معمولاً «cn» یا «uid».';
$string['course_idnumber_key'] = 'کد درس (ID number)';
$string['course_search_sub'] = 'جستجوی عضویت گروه در زیرزمینه‌ها';
$string['course_search_sub_key'] = 'جستجوی زیرزمینه‌ها';
$string['course_settings'] = 'تنظیمات ثبت نام در درس';
$string['course_shortname'] = 'اختیاری: مشخصه‌ای در LDAP برای دریافت نام کوتاه از آن';
$string['course_shortname_key'] = 'نام کوتاه';
$string['course_shortname_updateonsync'] = 'به‌روزکردن نام کوتاه در حین اسکریپت همگام‌سازی';
$string['course_shortname_updateonsync_key'] = 'به‌روزکردن نام کوتاه';
$string['course_summary'] = 'اختیاری: مشخصه‌ای در LDAP برای دریافت خلاصه از آن';
$string['course_summary_key'] = 'خلاصه';
$string['course_summary_updateonsync'] = 'به‌روزکردن توصیف در حین اسکریپت همگام‌سازی';
$string['course_summary_updateonsync_key'] = 'به‌روزکردن توصیف';
$string['coursenotexistskip'] = 'درس «{$a}» وجود ندارد و ایجاد خودکار هم غیر فعال است، نادیده گرفتن';
$string['courseupdated'] = 'درس با کد شناسایی «{$a->idnumber}» با موفقیت به‌روز شد.';
$string['courseupdateskipped'] = 'درس با کد شناسایی «{$a->idnumber}» نیازی به به‌روزرسانی ندارد. صرف‌نظر کردن...';
$string['creatingcourse'] = 'ایجاد درس «{$a}»...';
$string['enroluser'] = 'ثبت نام کاربر «{$a->user_username}» در درس «{$a->course_shortname}» (شناسه: {$a->course_id})';
$string['explodegroupusertypenotsupported'] = 'ldap_explode_group() نوع کاربر انتخاب شده را پشتیبانی نمی‌کند: {$a}';
$string['extcourseidinvalid'] = 'شناسهٔ خارجی درس نامعتبر است!';
$string['general_options'] = 'گزینه‌های کلی';
$string['group_memberofattribute'] = 'نام مشخصه‌ای که مشخص می‌کند یک کاربر یا گروه خاص به کدام گروه‌ها تعلق دارد (به عنوان مثال <span style="display:inline-block">memberOf</span>، <span style="display:inline-block">groupMembership</span>، غیره)';
$string['group_memberofattribute_key'] = 'مشخصه «عضویت در»';
$string['host_url'] = 'میزبان LDAP را به صورت آدرسی مانند «<span dir="ltr" style="display:inline-block;direction:ltr">ldap://ldap.myorg.com/</span>» یا «<span dir="ltr" style="display:inline-block;direction:ltr">ldaps://ldap.myorg.com/</span>» مشخص کنید.';
$string['host_url_key'] = 'آدرس میزبان';
$string['idnumber_attribute'] = 'اگر عضویت گروه شامل نام‌های متمایز باشد، همان مشخصه‌ای که برای نگاشت «کد شناسایی» در تنظیمات شناسایی LDAP استفاده کرده‌اید را مشخص کنید';
$string['idnumber_attribute_key'] = 'مشخصهٔ کد شناسایی';
$string['ldap:manage'] = 'پیکربندی نمونه‌های ثبت‌نام LDAP';
$string['ldap_encoding'] = 'کدگذاری مورد استفاده توسط کارگزار LDAP را مشخص کنید. به احتمال زیاد utf-8 است. اکتیو دایرکتوری نسخهٔ ۲ مایکروسافت از کدگذاری‌های پیش‌فرض پلتفرم مانند cp1252، یا cp1250، یا ... استفاده می‌کند.';
$string['ldap_encoding_key'] = 'کدگذاری LDAP';
$string['memberattribute'] = 'مشخصه عضو LDAP';
$string['memberattribute_isdn'] = 'اگر عضویت گروه شامل نام‌های متمایز (distinguised names یا dn)، باید آن را مشخص کنید. در این صورت باید باقی تنظیمات این قسمت را نیز پیکربندی کنید.';
$string['memberattribute_isdn_key'] = 'مشخصه عضو از نام‌های متمایز استفاده می‌کند';
$string['nested_groups'] = 'آیا می‌خواهید از گروه‌های تو در تو (گروه‌هایی از گروه‌ها) برای ثبت نام‌ها استفاده کنید؟';
$string['nested_groups_key'] = 'گروه‌های تو در تو';
$string['nested_groups_settings'] = 'تنظیمات گروه‌های تو در تو';
$string['nosuchrole'] = 'چنین نقشی وجود ندارد: «{$a}»';
$string['objectclass'] = 'کلاسِ شیء (ObjectClass) مورد استفاده برای جستجوی درس‌ها. معمولاً «group» یا «posixGroup».';
$string['objectclass_key'] = 'کلاس شیء';
$string['phpldap_noextension'] = '<em>به نظر نمی‌رسد که ماژول PHP LDAP وجود داشته باشد. اگر می‌خواهید از این پلاگین ثبت نام استفاده کنید، لطفاً مطمئن شوید که نصب و فعال باشد.</em>';
$string['pluginname'] = 'ثبت نام‌های LDAP';
$string['pluginname_desc'] = '<p>می‌توانید از یک کارگزار LDAP برای کنترل ثبت نام‌ها استفاده کنید. فرض بر این است که درخت LDAP شما شامل گروه‌هایی است که متناظر با درس‌ها هستند، و هر کدام از آن گروه‌ها/درس‌ها دارای اعضایی متناظر با شاگردان خواهند بود.</p><p>فرض بر این است که درس‌ها به صورت گروه‌هایی در LDAP تعریف شده‌اند و هر گروه دارای فیلدهای عضویت متعددی (<em>member</em> یا <em>memberUid</em>) است که شامل یک مشخصهٔ منحصر بفرد از کاربر هستند.</p><p>برای استفاده از ثبت نام‌های LDAP، کاربران شما <strong>باید</strong> یک کد شناسایی (idnumber) معتبر داشته باشند. گروه‌های LDAP باید آن کد شناسایی (idnumber) را در فیلدهای عضو داشته باشند تا کاربری در درس ثبت نام شود. اگر هم اکنون از شناسایی LDAP استفاده می‌کنید معمولاً همه چیز به خوبی خواهد بود.</p><p>ثبت نام‌ها به هنگام ورود کاربران به سایت به‌روز می‌شوند. همچنین می‌توانید اسکریپتی را برای همگام نگاه داشتن ثبت نام‌ها استفاده کنید. <em>enrol/ldap/cli/sync.php</em> را ببینید.</p><p>این پلاگین می‌تواند به صورتی تنظیم شود تا هنگامی که گروه‌های جدیدی در LDAP ظاهر می‌شود به طور خودکار درس‌های جدیدی در مودل ایجاد کند.</p>';
$string['pluginnotenabled'] = 'پلاگین فعال نشده است!';
$string['role_mapping'] = '<p>برای هر نقشی که می‌خواهید از LDAP نسبت دهید، باید لیست زمینه‌هایی که گروه‌های درس نقش در آنها قرار دارند را مشخص کنید. زمینه‌های مختلف را با «;» از هم جدا کنید.</p><p>همچنین باید مشخصه‌ای که کارگزار LDAP شما برای نگهداری اعضای یک گروه استفاده می‌کند را مشخص کنید. معمولاً «member» یا «memberUid» است.</p>';
$string['role_mapping_key'] = 'نگاشت نقش‌ها از LDAP';
$string['roles'] = 'نگاشت نقش';
$string['server_settings'] = 'تنظیمات کارگزار LDAP';
$string['template'] = 'اختیاری: درس‌هایی که به طور خودکار ساخته می‌شوند می‌توانند تنظیماتشان را از روی یک درس الگو کپی‌برداری کنند';
$string['template_key'] = 'الگو';
$string['unassignrole'] = 'لغو نقش «{$a->role_shortname}» از کاربر «{$a->user_username}» در درس «{$a->course_shortname}» (شناسهٔ درس: {$a->course_id})';
$string['unassignrolefailed'] = 'ناموفقیت در لغو نقش «{$a->role_shortname}» از کاربر «{$a->user_username}» در درس «{$a->course_shortname}» (شناسهٔ درس: {$a->course_id})';
$string['updatelocal'] = 'به‌روزرسانی داده‌های محلی';
$string['user_attribute_key'] = 'مشخصهٔ کد شناسایی';
$string['user_contexts'] = 'اگر عضویت گروه شامل نام‌های متمایز است، لیستی از زمینه‌هایی که کاربران در آنها قرار دارند را مشخص کنید. زمینه‌های مختلف را با «;» از هم جدا کنید. به عنوان مثال: «ou=users,o=org; ou=others,o=org»';
$string['user_contexts_key'] = 'زمینه‌ها';
$string['user_search_sub'] = 'اگر عضویت گروه شامل نام‌های متمایز است، مشخص کنید که آیا می‌خواهید جستجوی کاربران در زیرزمینه‌ها هم انجام شود یا خیر';
$string['user_search_sub_key'] = 'جستجوی زیرزمینه‌ها';
$string['user_settings'] = 'تنظیمات جستجوی کاربر';
$string['user_type'] = 'اگر عضویت گروه شامل نام‌های متمایز است، چگونگی نگهداری کاربران در LDAP را انتخاب کنید.';
$string['user_type_key'] = 'نوع کاربر';
$string['version'] = 'نسخهٔ پروتکل LDAP مورد استفاده توسط کارگزار شما';
$string['version_key'] = 'نسخه';
