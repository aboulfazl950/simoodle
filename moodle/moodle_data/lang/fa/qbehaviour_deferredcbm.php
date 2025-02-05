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
 * Strings for component 'qbehaviour_deferredcbm', language 'fa', version '4.5'.
 *
 * @package     qbehaviour_deferredcbm
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assumingcertainty'] = 'میزان اطمینان را تعیین نکردید. میزان اطمینان «{$a}» در نظر گرفته شد.';
$string['cbmgrades_link'] = 'qbehaviour/deferredcbm/certaintygrade';
$string['certainty1'] = 'اطمینان=۱ (مردد: کمتر از ٪۶۷)';
$string['certainty2'] = 'اطمینان=۲ (متوسط: بیشتر از ٪۶۷)';
$string['certainty3'] = 'اطمینان=۳ (مطمئن: بیشتر از ٪۸۰)';
$string['certainty_help'] = 'نمره‌دهی بر اساس میزان اطمینان نیازمند این است که شما مشخص کنید که چقدر فکر می‌کنید پاسختان قابل اعتماد است. سطوح موجود عبارتند از:

سطح اطمینان                |  اطمینان=۱ (مردد)  | اطمینان=۲ (متوسط)  | اطمینان=۳ (مطمئن)
---------------------------- | ---------------------- | ------------------------ | ------------------------
نمره در صورت درستی   |               ۱            |               ۲               |             ۳
نمره در صورت نادرستی |               ۰            |               ۲-              |            ۶-
احتمال درستی               |     کمتر از ٪۶۷      |          ٪۸۰-۶۷           |   بیشتر از ٪۸۰

بهترین نمره‌ها با اذعان به میزان اطمینان به‌دست می‌آیند. به‌طور مثال، اگر فکر می‌کنید احتمال اشتباه بودن پاسخ‌تان بیش از ۱ به ۳ است، باید اطمینان=۱ را وارد کنید و از خطر نمرهٔ منفی اجتناب کنید.';
$string['certainty_link'] = 'qbehaviour/deferredcbm/certainty';
$string['certaintyshort1'] = 'اطمینان=۱';
$string['certaintyshort2'] = 'اطمینان=۲';
$string['certaintyshort3'] = 'اطمینان=۳';
$string['howcertainareyou'] = 'میزان اطمینان{$a->help}: {$a->choices}';
$string['pluginname'] = 'بازخورد معوق با نمره‌دهی بر اساس میزان اطمینان';
$string['weightx'] = 'وزن {$a}';
