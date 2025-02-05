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
 * Strings for component 'portfolio_mahara', language 'fa', version '4.5'.
 *
 * @package     portfolio_mahara
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['err_nomnethosts'] = 'به قابلیت شبکهٔ مودلی وابسته است';
$string['err_nomnethosts_help'] = 'این پلاگین به همتاهای شبکهٔ مودلی که این شرایط را دارند وابسته است:

* SSO IDP انتشار یافته
* SSO SP مشترک شده
* سرویس‌های پورتفولیو انتشار یافته <b>و همچنین</b> مشترک شده
* پلاگین شناسایی شبکهٔ مودلی

هر نمونهٔ ساخته شده‌ای از این پلاگین تا زمانی که این شرایط برقرار نشوند پنهان خواهند ماند.
پس از برقراری شرایط، لازم است که به صورت دستی نمونه‌های ساخته شده را دوباره قابل مشاهده کرد.';
$string['pf_description'] = 'کاربران بتوانند محتوای مودلی خود را در این میزبان قرار دهند.<br />در این سرویس مشترک شوید <b>و</b> این سرویس را منتشر کنید تا به کاربران شناسایی شده در سایتتان اجازهٔ ارسال محتوا به «{$a}» را بدهید<br /><ul><li><em>وابستگی</em>: باید سرویس SSO (فراهم کنندهٔ هویت) را نیز برای «{$a}» <strong>منتشر</strong> کنید.</li><li><em>وابستگی</em>: باید در سرویس SSO (فراهم کنندهٔ سرویس) در «{$a}» نیز <strong>مشترک</strong> شوید.</li><li><em>وابستگی</em>: باید پلاگین شناسایی شبکهٔ مودلی را هم فعال کنید.</li></ul><br />';
$string['pf_name'] = 'سرویس‌های پورتفولیو';
$string['pluginname'] = 'پورتفولیوی الکترونیکی ماهارا';
