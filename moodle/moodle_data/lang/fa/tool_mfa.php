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
 * Strings for component 'tool_mfa', language 'fa', version '4.5'.
 *
 * @package     tool_mfa
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['error:factornotenabled'] = 'فاکتور احراز هویت چند عاملی "{$a}" فعال نیست';
$string['error:factornotfound'] = 'عامل احراز هویت چند عاملی \'{$a}\' یافت نشد';
$string['event:failfactor'] = 'احراز هویت چند عاملی به دلیل یک عامل ناموفق انجام نشد.';
$string['event:faillockout'] = 'به دلیل تلاش های زیاد، احراز هویت چند عاملی انجام نشد.';
$string['event:failnotenoughfactors'] = 'به دلیل عدم رضایت کافی، احراز هویت چند عاملی انجام نشد.';
$string['event:userfailedmfa'] = 'احراز هویت چند عاملی کاربر ناموفق بود';
$string['factorreport'] = 'گزارش همه فاکتورها';
$string['factorreset'] = 'احراز هویت چند عاملی شما \'{$a->factor}\' توسط یک سرپرست سایت بازنشانی شده است. ممکن است لازم باشد دوباره این فاکتور را تنظیم کنید. {$a->url}';
$string['factorresetall'] = 'همه فاکتورهای احراز هویت چند عاملی شما توسط مدیر سایت بازنشانی شده است. ممکن است لازم باشد دوباره این فاکتورها را تنظیم کنید. {$a}';
$string['guidance'] = 'راهنمای کاربر برای احراز هویت چند عاملی';
$string['mfa'] = 'احراز هویت چند عاملی';
$string['mfasettings'] = 'مدیریت احراز هویت چند عاملی';
$string['performbulk'] = 'عمل گروهی';
$string['pluginname'] = 'احراز هویت چند عاملی';
$string['preferences:header'] = 'ترجیحات احراز هویت چند عاملی';
$string['privacy:metadata:tool_mfa_auth'] = 'آخرین باری که یک احراز هویت چند عاملی موفق برای شناسه کاربری ثبت شد.';
$string['resetfactor'] = 'بازنشانی فاکتورهای احراز هویت کاربر';
