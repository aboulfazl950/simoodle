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
 * Strings for component 'search_solr', language 'fa', version '4.5'.
 *
 * @package     search_solr
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['connectionerror'] = 'کارگزار Solr تعیین‌شده موجود نیست یا اینکه فهرست تعیین‌شده وجود ندارد';
$string['connectionsettings'] = 'تنظیمات اتصال';
$string['errorcreatingschema'] = 'خطا در ساختن شِمای Solr: <span style="display:inline-block">{$a}</span>';
$string['errorvalidatingschema'] = 'خطا در اعتبارسنجی شِمای Solr: فیلد {$a->fieldname} وجود ندارد. لطفا برای تنظیم فیلدهای لازم <a href="{$a->setupurl}">روی این پیوند کلیک کنید</a>.';
$string['extensionerror'] = 'افزونهٔ PHP‌ مربوط به Apache Solr نصب نیست. لطفا مستندات را بررسی کنید.';
$string['fileindexing'] = 'فعال کردن فهرست‌سازی فایل‌ها';
$string['fileindexing_help'] = 'اگر نصب Solr شما پشتیبانی کند، این امکان به مودل اجازه می‌دهد که فایل‌ها را برای فهرست‌سازی‌شدن بفرستد.';
$string['fileindexsettings'] = 'تنظیمات فهرست‌سازی فایل‌ها';
$string['maxindexfilekb'] = 'بیشترین اندازه فایلی که فهرست‌سازی می‌شود (کیلوبایت)';
$string['maxindexfilekb_help'] = 'فایل‌هایی که از این اندازه بزرگتر باشند در فهرست‌سازی شدن جستجو شامل نخواهند شد. اگر روی صفر تنظیم شده باشد، فایل‌های دارای هر اندازه‌ای فهرست‌سازی خواهند شد.';
$string['minimumsolr4'] = 'Solr نسخهٔ ۴٫۰ کمترین نسخهٔ مورد نیاز مودل است';
$string['missingconfig'] = 'کارگزار Apache Solr شما هنوز در مودل پیکربندی نشده است.';
$string['multivaluedfield'] = 'فیلد «{$a}» به‌جای یک مقدار عددی یک آرایه برگرداند. لطفا فهرست فعلی را پاک کنید، یک فهرست جدید بسازید و پیش از فهرست‌سازی داده‌ها در <span style="display:inline-block">Solr</span>، <span style="display:inline-block">setup_schema.php</span> را اجرا کنید.';
$string['pluginname'] = 'Solr';
$string['schemafieldautocreated'] = 'فیلد {$a} در شِمای Solr وجود دارد. احتمالا فراموش کردید که این اسکریپت را پیش از فهرست‌سازی داده‌ها اجرا کنید و فیلدها به‌طور خودکار توسط Solr ساخته شدند. لطفا فهرست فعلی را پاک کنید، یک فهرست جدید بسازید و پیش از فهرست‌سازی داده‌ها در <span style="display:inline-block">Solr</span>، <span style="display:inline-block">setup_schema.php</span> را اجرا کنید.';
$string['schemasetupfromsolr5'] = 'نسخهٔ کارگزار Solr شما کمتر از ۵٫۰ است. این اسکریپت تنها در صورتی می‌تواند شِمای شما را تعیین کند که نسخهٔ Solr شما ۵٫۰ یا بالاتر باشد. باید خودتان به‌طور دستی و بر طبق <span dir="ltr" style="direction:ltr;display:inline-block">\\search_solr\\document::get_default_fields_definition()</span> فیلدهای شِمای خود را تعیین کنید';
$string['searchinfo_help'] = 'فیلدی که قرار است مورد جستجو قرار بگیرد می‌تواند در کوئری جستجو به‌صورت پیشوند «title:» یا «content» یا «name»، یا «intro:» بیاید. به‌طور مثال، جستجوی «title:اخبار» نتایجی که شامل کلمهٔ «اخبار» در عنوان باشد را برمی‌گرداند.

برای ترکیب یا کنارگذاشتن کلمات کلیدی می‌توان از عملگرهای بولی (AND و OR و NOT) استفاده کرد.

از کاراکترهای جایگزینی (* یا ?) هم می‌توان در کوئری جستجو استفاده کرد.';
$string['setupok'] = 'شِما آمادهٔ استفاده شدن است.';
$string['solrhttpconnectionport'] = 'پورت';
$string['solrnotselected'] = 'موتور Solr، موتور جستجوی پیکربندی‌شده نیست';
$string['solrsecuremode'] = 'حالت امن';
$string['solrserverhostname'] = 'نام میزبان';
$string['solrserverhostname_desc'] = 'نام دامنهٔ کارگزار Solr.';
$string['solrsetting'] = 'تنظیمات Solr';
$string['solrsslcert'] = 'گواهینامهٔ SSL';
$string['solrsslcert_desc'] = 'نام فایل یک گواهینامهٔ خصوصی با فرمت PEM';
$string['solrsslkey'] = 'کلید SSL';
$string['solrsslkey_desc'] = 'نام فایل یک کلید خصوصی با فرمت PEM';
$string['solrsslkeypassword'] = 'رمز کلید SSL';
$string['solrsslkeypassword_desc'] = 'رمز یک کلید خصوصی با فرمت PEM';
