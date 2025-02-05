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
 * Strings for component 'tool_task', language 'fa', version '4.5'.
 *
 * @package     tool_task
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asap'] = 'در اولین فرصت';
$string['component'] = 'کامپوننت';
$string['corecomponent'] = 'هسته';
$string['default'] = 'پیش‌فرض';
$string['disabled'] = 'غیرفعال';
$string['disabled_help'] = 'وظیفه‌های زمان‌بندی‌شدهٔ غیرفعال از طریق cron اجرا نخواهند شد؛ البته از طریق ابزار CLI می‌توانند به‌صورت دستی اجرا شوند.';
$string['edittaskschedule'] = 'ویرایش وظیفه زمان‌بندی‌شده: {$a}';
$string['enablerunnow'] = 'اجازهٔ «هم‌اکنون اجرا شدن» را به وظایف زمان‌بندی‌شده می‌دهد';
$string['enablerunnow_desc'] = 'به مدیران اجازه می‌دهد که یک وظیفهٔ خاص را در لحظه اجرا کنند و مجبور نباشند صبر کنند تا به‌عنوان یک وظیفهٔ زمان‌بندی‌شده اجرا شود. وظیفهٔ مورد نظر بر روی کارگزار وب اجرا می‌شود، بنابراین برخی از سایت‌ها ممکن است برای جلوگیری از مشکلات بالقوهٔ کارایی، بخواهند این قابلیت را غیرفعال کنند.';
$string['lastruntime'] = 'آخرین اجرا';
$string['nextruntime'] = 'اجرای بعدی';
$string['plugindisabled'] = 'پلاگین غیرفعال است';
$string['pluginname'] = 'پیکربندی وظایف زمان‌بندی‌شده';
$string['resettasktodefaults'] = 'بازنشانی زمان‌بندی وظیفه به پیش‌فرض‌ها';
$string['resettasktodefaults_help'] = 'این کار منجر می‌شود که هرگونه تغییر داده شده به‌طور محلی نادیده گرفته شود و زمان‌بندی این وظیفه به وضعیت اولیه‌اش بازگردد.';
$string['runnow'] = 'هم‌اکنون اجرا شود';
$string['scheduledtasks'] = 'وظایف زمان‌بندی‌شده';
$string['taskscheduleday'] = 'روز';
$string['taskscheduleday_help'] = 'فیلد روز ماه برای زمان‌بندی وظیفه. این فیلد از همان فرمت cron یونیکس استفاده می‌کند. چند مثال عبارتند از:<br/><ul><li><strong>*</strong> هر روز</li><li><strong>*/2</strong> هر ۲ روز</li><li><strong>1</strong> روز اول هر ماه</li><li><strong>1,15</strong> روز اول و پانزدهم هر ماه</li></ul>';
$string['taskscheduledayofweek'] = 'روز هفته';
$string['taskscheduledayofweek_help'] = 'فیلد روز هفته برای زمان‌بندی وظیفه. این فیلد از همان فرمت cron یونیکس استفاده می‌کند. چند مثال عبارتند از:<br/><ul><li><strong>*</strong> هر روز</li><li><strong>0</strong> هر یک‌شنبه</li><li><strong>6</strong> هر شنبه</li><li><strong>1,5</strong> هر دوشنبه و جمعه</li></ul>';
$string['taskschedulehour'] = 'ساعت';
$string['taskschedulehour_help'] = 'فیلد ساعت برای زمان‌بندی وظیفه. این فیلد از همان فرمت cron یونیکس استفاده می‌کند. چند مثال عبارتند از:<br/><ul><li><strong>*</strong> هر ساعت</li><li><strong>*/2</strong> هر ۲ ساعت</li><li><strong>2-10</strong> هر ساعت از ۲ صبح تا ۱۰ صبح (و شامل خود این ساعت‌ها)</li><li><strong>2,6,9</strong> ۲ صبح، ۶ صبح و ۹ صبح</li></ul>';
$string['taskscheduleminute'] = 'دقیقه';
$string['taskscheduleminute_help'] = 'فیلد دقیقه برای زمان‌بندی وظیفه. این فیلد از همان فرمت cron یونیکس استفاده می‌کند. چند مثال عبارتند از:<br/><ul><li><strong>*</strong> هر دقیقه</li><li><strong>*/5</strong> هر ۵ دقیقه</li><li><strong>2-10</strong> هر دقیقه بین ۲ تا ۱۰ دقیقه بعد از هر ساعت (شامل خود دقایق)</li><li><strong>2,6,9</strong> دقایق ۲، ۶ و ۹ بعد از هر ساعت</li></ul>';
$string['taskschedulemonth'] = 'ماه';
$string['taskschedulemonth_help'] = 'فیلد ماه برای زمان‌بندی وظیفه. این فیلد از همان فرمت cron یونیکس استفاده می‌کند. چند مثال عبارتند از:<br/><ul><li><strong>*</strong> هر ماه</li><li><strong>*/2</strong> ماه‌های زوج</li><li><strong>1</strong> هر ژانویه</li><li><strong>1,5</strong> هر ژانویه و می</li></ul>';
