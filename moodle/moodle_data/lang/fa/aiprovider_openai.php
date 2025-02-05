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
 * Strings for component 'aiprovider_openai', language 'fa', version '4.5'.
 *
 * @package     aiprovider_openai
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:generate_image:model'] = 'مدل هوش مصنوعی';
$string['action:generate_image:model_desc'] = 'مدلی که برای تولید تصاویر از اعلان‌های کاربر استفاده می‌شود.';
$string['action:generate_text:model'] = 'مدل هوش مصنوعی';
$string['action:generate_text:model_desc'] = 'مدل مورد استفاده برای تولید پاسخ متنی.';
$string['action:generate_text:systeminstruction'] = 'دستورالعمل سیستم';
$string['action:generate_text:systeminstruction_desc'] = 'این دستورالعمل به همراه اعلان کاربر به مدل هوش مصنوعی ارسال می شود. ویرایش این دستورالعمل توصیه نمی‌شود مگر اینکه کاملاً ضروری باشد.';
$string['action:summarise_text:model'] = 'مدل هوش مصنوعی';
$string['action:summarise_text:model_desc'] = 'مدل مورد استفاده برای خلاصه کردن متن ارائه شده.';
$string['action:summarise_text:systeminstruction'] = 'دستورالعمل سیستم';
$string['action:summarise_text:systeminstruction_desc'] = 'این دستورالعمل به همراه اعلان کاربر به مدل هوش مصنوعی ارسال می شود. ویرایش این دستورالعمل توصیه نمی شود مگر اینکه کاملاً ضروری باشد.';
$string['enableglobalratelimit'] = 'تنظیم محدودیت نرخ در سراسر سایت';
$string['enableglobalratelimit_desc'] = 'تعداد درخواست‌هایی را که ارائه‌دهنده OpenAI API می‌تواند در کل سایت در هر ساعت دریافت کند را محدود کنید.';
$string['enableuserratelimit'] = 'تنظیم محدودیت نرخ کاربر';
$string['enableuserratelimit_desc'] = 'تعداد درخواست‌هایی را که هر کاربر می‌تواند به ارائه‌دهنده OpenAI API در هر ساعت ارسال کند را محدود کنید.';
$string['globalratelimit'] = 'حداکثر تعداد درخواست های سایت';
$string['globalratelimit_desc'] = 'تعداد درخواست‌های مجاز در هر ساعت.';
$string['privacy:metadata:aiprovider_openai:externalpurpose'] = 'این اطلاعات به منظور ایجاد پاسخ به OpenAI API ارسال می شود. تنظیمات حساب OpenAI شما ممکن است نحوه ذخیره و نگهداری این داده ها را تغییر دهد. هیچ داده‌ای از کاربر به صراحت به OpenAI ارسال نمی‌شود یا در Moodle LMS توسط این افزونه ذخیره نمی‌شود.';
$string['privacy:metadata:aiprovider_openai:model'] = 'مدل مورد استفاده برای تولید پاسخ.';
$string['privacy:metadata:aiprovider_openai:numberimages'] = 'تعداد تصاویر استفاده شده در پاسخ هنگام تولید تصاویر';
$string['privacy:metadata:aiprovider_openai:prompttext'] = 'کاربر پیام متنی مورد استفاده برای تولید پاسخ را وارد کرده است.';
$string['privacy:metadata:aiprovider_openai:responseformat'] = 'فرمت پاسخ هنگام تولید تصاویر';
$string['userratelimit'] = 'حداکثر تعداد درخواست‌ها بر کاربر';
$string['userratelimit_desc'] = 'تعداد درخواست‌های مجاز در ساعت بر کاربر';
