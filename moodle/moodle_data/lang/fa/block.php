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
 * Strings for component 'block', language 'fa', version '4.5'.
 *
 * @package     block
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['anypagematchingtheabove'] = 'تمام صفحه‌های منطبق با شرایط بالا';
$string['appearsinsubcontexts'] = 'در زیر-فضاها ظاهر می‌شود';
$string['assignrolesinblock'] = 'انتساب نقش در بلوک «{$a}»';
$string['blocksdrawertoggle'] = 'پنهان کردن/نمایش دادن کشوی بلوک‌ها';
$string['blocksettings'] = 'تنظیمات بلوک';
$string['bracketfirst'] = '{$a} (اولین)';
$string['bracketlast'] = '{$a} (آخرین)';
$string['configureblock'] = 'پیکربندی بلوک «{$a}»';
$string['contexts'] = 'زمینهٔ صفحه‌ها';
$string['contexts_help'] = 'زمینه‌ها نوع‌های خاص‌تری از صفحه‌های درونی محل اصلی بلوک هستند که این بلوک می‌تواند در آنها نمایش داده شود. بسته به محل اصلی بلوک و محل فعلی شما، گزینه‌های متفاوتی را در این قسمت خواهید داشت. به عنوان مثال، با اضافه کردن بلوکی به یک درس (و نمایش دادن آن در تمام زیر صفحه‌ها)، و سپس رفتن به یک تالار گفتگو و ویرایش مجدد تنظیمات بلوک و منحصر کردن بلوک به تنها نمایش دادن شدن در صفحه‌های تالار گفتگو، کاری کنید که آن بلوک فقط در صفحه‌های تالار گفتگو نمایش داده شود.';
$string['createdat'] = 'محل اصلی بلوک';
$string['createdat_help'] = 'محلی اصلی ساخته شدن بلوک. تنظیمات بلوک ممکن است به گونه‌ای باشد که بلوک در محل‌های (زمینه‌های) دیگری در داخل محل اصلی هم نمایش داده شود. به عنوان مثال، بلوکی که در صفحهٔ اصلی یک درس ساخته شده است می‌تواند در فعالیت‌های داخلی درس هم نمایش داده شود. بلوکی که در صفحهٔ اول سایت ساخته شده است می‌تواند در کل سایت نمایش داده شود.';
$string['defaultregion'] = 'ناحیهٔ پیش‌فرض';
$string['defaultregion_help'] = 'پوسته‌ها ممکن است یک یا چند ناحیهٔ نام‌گذاری شده برای قرارگیری بلوک‌ها تعریف کنند. این تنظیم تعیین می‌کند که به طور پیش‌فرض این بلوک در کدام یک از ناحیه‌ها نمایش داده شود. ناحیهٔ انتخاب شده در صورت نیاز می‌تواند در صفحه‌های خاصی بازنویسی شود.';
$string['defaultweight'] = 'وزن پیش‌فرض';
$string['defaultweight_help'] = 'با تعیین کردن وزن پیش‌فرض می‌توانید انتخاب کنید که می‌خواهید بلوک در کجای ناحیهٔ انتخاب شده نمایش داده شود؛ در ابتدای آن یا در انتهای آن. محل نهایی با توجه به تمام بلوک‌های موجود در هر ناحیه محاسبه می‌شود (مثلاً، تنها یک بلوک می‌تواند بالاتر از همهٔ بلوک‌های ناحیه‌اش باشد). این مقدار در صورت نیاز می‌تواند در صفحه‌های خاصی بازنویسی شود.';
$string['deleteblock'] = 'حذف بلوک «{$a}»';
$string['deleteblockcheck'] = 'آیا مایل به حذف بلوک {$a} می باشید ؟';
$string['deleteblockwarning'] = '<p>شما در آستانهٔ پاک کردن بلوکی هستید که در جای دیگری نمایش داده می‌شود.</p><p>محل اصلی بلوک: {$a->location}<br />نمایش در صفحه‌های از نوع: {$a->pagetype}</p><p>آیا مطمئن هستید که می‌خواهید ادامه دهید؟</p>';
$string['deletecheck'] = 'حذف بلوک «{$a}»؟';
$string['deletecheck_modal'] = 'آیا بلوک حذف شود؟';
$string['hideblock'] = 'پنهان کردن بلوک «{$a}»';
$string['hidepanel'] = 'مخفی سازی پنل';
$string['moveblock'] = 'جابه‌جا کردن بلوک «{$a}»';
$string['moveblockafter'] = 'انتقال بلوک‌ها به پس از بلوک {$a}';
$string['moveblockbefore'] = 'انتقال بلوک‌ها به پیش از بلوک {$a}';
$string['moveblockinregion'] = 'جابجایی بلوک به ناحیه {$a}';
$string['movingthisblockcancel'] = 'در حال انتقال این بلوک ({$a})';
$string['myblocks'] = 'بلوک‌های من';
$string['onthispage'] = 'در این صفحه';
$string['pagetypes'] = 'انواع صفحه';
$string['pagetypewarning'] = 'نوع صفحهٔ تعیین‌شده از قبل دیگر قابل انتخاب نیست. لطفا مناسب‌ترین نوع صفحه را در زیر انتخاب کنید.';
$string['region'] = 'ناحیه';
$string['restrictpagetypes'] = 'منحصر به این نوع صفحه‌ها';
$string['showblock'] = 'نمایش بلوک {$a}';
$string['showoncontextandsubs'] = 'نمایش در «{$a}» و تمام صفحه‌های داخل آن';
$string['showoncontextonly'] = 'فقط نمایش در «{$a}»';
$string['showonentiresite'] = 'نمایش سراسری در کل سایت';
$string['showonfrontpageandsubs'] = 'نمایش در صفحهٔ اول و صفحه‌هایی که به صفحهٔ اول اضافه می‌شوند';
$string['showonfrontpageonly'] = 'فقط نمایش در صفحهٔ اول';
$string['subpages'] = 'صفحهٔ داخلی خاص';
$string['thisspecificpage'] = 'همین یک صفحهٔ خاص (صفحهٔ {$a})';
$string['visible'] = 'قابل مشاهده';
$string['weight'] = 'وزن';
$string['wherethisblockappears'] = 'جایی که این بلوک نمایش داده می‌شود';
