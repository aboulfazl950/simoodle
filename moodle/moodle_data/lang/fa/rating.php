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
 * Strings for component 'rating', language 'fa', version '4.5'.
 *
 * @package     rating
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aggregateavg'] = 'میانگین امتیازات';
$string['aggregatecount'] = 'تعداد امتیازات';
$string['aggregatemax'] = 'بیشترین امتیاز';
$string['aggregatemin'] = 'کمترین امتیاز';
$string['aggregatenone'] = 'بدون ارزیابی';
$string['aggregatesum'] = 'جمع امتیازات';
$string['aggregatetype'] = 'نوع جمع‌بندی';
$string['aggregatetype_help'] = 'چگونگی ترکیب امتیازها برای رسیدن به یک امتیاز نهایی برای انتقال به دفتر نمره را تعیین می‌کند.

* میانگین امتیازها - معدل تمام امتیازها
* تعداد امتیازها - تعداد موارد نمره داده شده به‌عنوان نمرهٔ نهایی در نظر گرفته می‌شود. توجه داشه باشید که عدد نهایی نمی‌تواند از سقف نمرهٔ فعالیت  بیشتر شود.
* بیشترین امتیاز - بالاترین امتیاز به‌عنوان نمرهٔ نهایی درنظر گرفته می‌شود
* کمترین امتیاز - پایین‌ترین امتیاز به‌عنوان نمرهٔ نهایی درنظر گرفته می‌شود
* جمع امتیازها - تمام امتیازها با یکدیگر جمع می‌شوند. توجه داشه باشید که عدد نهایی نمی‌تواند از سقف نمرهٔ فعالیت  بیشتر شود.

اگر «بدون ارزیابی» انتخاب شده باشد، آنگاه فعالیت در دفتر نمره ظاهر نخواهد شد.';
$string['allowratings'] = 'مطالب قابل ارزیابی باشند؟';
$string['capabilitychecknotavailable'] = 'بررسی توانایی تا زمانی که فعالیت ذخیره نشده باشد موجود نیست';
$string['couldnotdeleteratings'] = 'متأسفانه این مطلب را نمی‌شود حذف کرد زیرا کسانی آن را مورد ارزیابی قرار داده‌اند';
$string['norate'] = 'امتیازدهی به موارد مجاز نیست!';
$string['rate'] = 'ارزیابی';
$string['rating'] = 'ارزیابی';
$string['ratings'] = 'ارزیابی‌ها';
$string['ratingtime'] = 'محدودکردن ارزیابی به مواردی که تاریخشان در این محدوده است:';
$string['rolewarning'] = 'نقش‌هایی که مجوز ارزیابی را دارند';
$string['rolewarning_help'] = 'برای ثبت ارزشیابی‌ها کاربران باید توانایی moodle/rating:rate و توانایی‌هایی که مختص هر ماژول است را داشته باشند. کاربرانی که این نقش‌ها را دارند باید بتوانند موارد را ارزیابی کنند. لیست نقش‌ها از طریق پیوند مجوزها در بلوک مدیریت قابل تغییر است.';
