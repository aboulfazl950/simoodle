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
 * Strings for component 'tool_monitor', language 'fa', version '4.5'.
 *
 * @package     tool_monitor
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addrule'] = 'اضافه‌کردن یک دستور جدید';
$string['allevents'] = 'تمام رویدادها';
$string['area'] = 'ناحیه';
$string['areatomonitor'] = 'ناحیهٔ تحت نظارت';
$string['currentsubscriptions'] = 'اشتراک‌های فعلی شما';
$string['defaultmessagetemplate'] = 'نام دستور: {rulename}<br />توصیف: {description}<br />نام رویداد:
 {eventname}';
$string['deleterule'] = 'پاک‌کردن دستور';
$string['deletesubscription'] = 'پاک‌کردن آبونمان';
$string['editrule'] = 'ویرایش دستور';
$string['enablehelp'] = 'فعال/غیرفعال کردن نظارت بر رویدادها';
$string['enablehelp_help'] = 'برای اینکه بتوانید دستوراتی تعریف کنید و در آنها آبونه شوید، نظارت بر رویدادها باید فعال باشد. توجه کنید که فعال کردن نظارت بر رویدادها ممکن است روی سرعت و کارآیی سایت شما تاثیر بگذارد.';
$string['event'] = 'رویداد';
$string['eventnotfound'] = 'رویداد پیدا نشد';
$string['eventrulecreated'] = 'دستور ایجاد شد';
$string['eventruledeleted'] = 'دستور حذف شد';
$string['eventruleupdated'] = 'دستور به‌روز شد';
$string['eventsubcreated'] = 'آبونمان ایجاد شد';
$string['eventsubcriteriamet'] = 'معیارهای آبونمان برآورده شد';
$string['eventsubdeleted'] = 'آبونمان حذف شد';
$string['freqdesc'] = '{$a->freq} بار در {$a->mins} دقیقه';
$string['frequency'] = 'آستانهٔ اطلاع‌رسانی';
$string['frequency_help'] = 'دفعات تکرار لازم برای رویداد در مدت زمان تعیین‌شده برای فرستادن اطلاعیه.';
$string['inminutes'] = 'در مدت (دقیقه)';
$string['invalidmodule'] = 'ماژول نامعتبر';
$string['manage'] = 'مدیریت';
$string['managerules'] = 'دستورات نظارت بر رویدادها';
$string['manageruleslink'] = 'در صفحهٔ {$a} می‌توانید دستورات را مدیریت کنید.';
$string['managesubscriptions'] = 'نظارت بر رویدادها';
$string['managesubscriptionslink'] = 'در صفحهٔ {$a} می‌توانید آبونهٔ دستورات شوید.';
$string['messagetemplate'] = 'متن اطلاعیه';
$string['messagetemplate_help'] = 'هنگامی که آستانهٔ اطلاع‌رسانی برسد، متن اطلاعیه به آبونه‌شدگان ارسال می‌شود. این متن می‌تواند شامل همه یا برخی از متغیرهای زیر باشد:
<br /><br />
* پیوند به محل رویداد {link}<br />
* پیوند به ناحیهٔ مورد نظارت {modulelink}<br />
* نام دستور {rulename}<br />
* توصیف {description}<br />
* رویداد {eventname}';
$string['messagetemplate_link'] = 'admin/tool/monitor/managerules';
$string['monitor:managerules'] = 'مدیریت دستورات نظارت بر رویداد';
$string['monitor:managetool'] = 'فعال/غیرفعال کردن نظارت بر رویدادها';
$string['monitor:subscribe'] = 'آبونه شدن در دستورات نظارت بر رویداد';
$string['monitordisabled'] = 'در حال حاضر سیستم نظارت بر رویدادها غیرفعال است.';
$string['monitorenabled'] = 'در حال حاضر سیستم نظارت بر رویداد فعال است.';
$string['norules'] = 'هیچ دستوری برای نظارت بر رویدادها نیست.';
$string['pluginname'] = 'نظارت بر رویداد';
$string['processevents'] = 'پردازش رویدادها';
$string['ruleareyousure'] = 'آیا مطمئن هستید که می‌خواهید دستور «{$a}» را حذف کنید؟';
$string['ruleareyousureextra'] = 'تعداد {$a} آبونمان در این دستور وجود دارد که آنها هم حذف خواهند شد.';
$string['ruledeletesuccess'] = 'قاعده مورد نظر با موفقیت حذف شد';
$string['rulehelp_help'] = 'این دستور منتظر می‌ماند تا رویداد «{$a->eventname}» در «{$a->eventcomponent}» در مدت زمان {$a->minutes} دقیقه {$a->frequency} بار تکرار شود.';
$string['rulename'] = 'نام دستور';
$string['rulenopermission'] = 'شما مجوز آبونه شدن در هیچ رویدادی را ندارید.';
$string['rulenopermissions'] = 'شما مجوز «{$a} یک دستور» را ندارید';
$string['rulescansubscribe'] = 'دستوراتی که می‌توانید آبونه‌شان شوید';
$string['selectacourse'] = 'یک درس را انتخاب کنید';
$string['subcreatesuccess'] = 'آبونمان با موفقیت ساخته شد';
$string['subscribeto'] = 'آبونه‌شدن در دستور «{$a}»';
$string['unsubscribe'] = 'لغو آبونمان';
