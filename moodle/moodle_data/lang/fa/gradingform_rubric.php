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
 * Strings for component 'gradingform_rubric', language 'fa', version '4.5'.
 *
 * @package     gradingform_rubric
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcriterion'] = 'اضافه کردن معیار';
$string['alwaysshowdefinition'] = 'کاربران اجازه پیش‌مشاهده روبریک را داشته باشند (در غیر این صورت روبریک تنها پس از نمره دهی قابل مشاهده خواهد بود)';
$string['backtoediting'] = 'بازگشت به ویرایش';
$string['confirmdeletecriterion'] = 'آیا مطمئن هستید که می‌خواهید این معیار را پاک کنید؟';
$string['confirmdeletelevel'] = 'آیا مطمئن هستید که می‌خواهید این سطح را پاک کنید؟';
$string['criterionaddlevel'] = 'اضافه کردن سطح';
$string['criteriondelete'] = 'پاک کردن معیار';
$string['criterionempty'] = 'برای ویرایش معیار کلیک کنید';
$string['criterionmovedown'] = 'انتقال به پایین';
$string['criterionmoveup'] = 'انتقال به بالا';
$string['definerubric'] = 'تعریف روبریک';
$string['description'] = 'توصیف';
$string['enableremarks'] = 'نمره دهنده بتواند در ارتباط با هر یک از معیارها اظهارات متنی خود را وارد کند';
$string['err_mintwolevels'] = 'هر معیار باید حداقل دو سطح داشته باشد';
$string['err_nocriteria'] = 'روبریک باید شامل حداقل یک معیار باشد';
$string['err_nodefinition'] = 'تعریف سطح نمی‌تواند خالی باشد';
$string['err_nodescription'] = 'توصیف معیار نمی‌تواند خالی باشد';
$string['err_scoreformat'] = 'تعداد امتیازهای هر سطح باید یک عدد غیر منفی معتبر باشد';
$string['err_totalscore'] = 'حداکثر تعداد امتیازهای ممکن در هنگام نمره دهی با روبریک باید بیشتر از صفر باشد';
$string['leveldelete'] = 'حذف سطح {$a}';
$string['levelempty'] = 'برای ویرایش سطح کلیک کنید';
$string['name'] = 'نام';
$string['needregrademessage'] = 'از زمانی که تکلیف این شاگرد نمره داده شده تعریف روبریک مورد استفاده تغییر کرده است. این شاگرد تا زمانی که شما روبریک را بررسی و نمره را به‌روز نکرده باشید قادر به دیدن روبریک نخواهد بود.';
$string['pluginname'] = 'روبریک';
$string['previewrubric'] = 'پیش‌نمایش روبریک';
$string['regrademessage1'] = 'شما در آستانه ذخیره کردن تغییرات در یک روبریک هستید که قبلا برای نمره دهی استفاده شده است. لطفا مشخص کنید که آیا نمرات موجود نیاز به بازبینی دارند یا خیر. اگر چنین باشد، آنگاه روبریک تا زمانی که تکلیف شاگردان دوباره نمره دهی نشود از دید آنها پنهان خواهد ماند.';
$string['regradeoption0'] = 'برای نمره دهی مجدد علامت نخورد';
$string['regradeoption1'] = 'علامت خوردن برای نمره دهی مجدد';
$string['rubric'] = 'روبریک';
$string['rubricmapping'] = 'قوانین تبدیل کردن امتیازات به نمره';
$string['rubricmappingexplained'] = 'کمترین امتیاز ممکن برای این روبریک <b>{$a->minscore} امتیاز</b> است که به کمترین نمره ممکن در این ماژول (که صفر است مگر اینکه از مقیاس استفاده شود) نظیر خواهد شد.
بیشترین امتیاز <b>{$a->maxscore} امتیاز</b> است که به حداکثر نمره ممکن تبدیل خواهد شد.<br />
امتیازهای میانی به همین ترتیب تبدیل و به نزدیک‌ترین نمره ممکن گرد خواهند شد.<br />
اگر به جای نمره‌های عددی از مقیاس استفاده شود، امتیاز با در نظر گرفتن عناصر مقیاس به عنوان اعداد پشت سر هم به یکی از آنها تبدیل خواهد شد.';
$string['rubricnotcompleted'] = 'لطفا برای تمام معیارها گزینه‌ای را انتخاب کنید';
$string['rubricoptions'] = 'گزینه‌های روبریک';
$string['rubricstatus'] = 'وضعیت فعلی روبریک';
$string['save'] = 'ذخیره';
$string['saverubric'] = 'روبریک ذخیره و آماده استفاده شود';
$string['saverubricdraft'] = 'ذخیره به صورت پیش‌نویس';
$string['scorepostfix'] = '{$a} امتیاز';
$string['showdescriptionstudent'] = 'نمایش توصیف روبریک به کسانی که نمره گرفته‌اند';
$string['showdescriptionteacher'] = 'نمایش توصیف روبریک در هنگام ارزشیابی';
$string['showremarksstudent'] = 'نمایش اظهارات نمره دهنده به کسانی که نمره گرفته‌اند';
$string['showscorestudent'] = 'نمایش امتیازات مربوط به هر سطح به کسانی که نمره گرفته‌اند';
$string['showscoreteacher'] = 'نمایش امتیازات مربوط به هر سطح در هنگام ارزشیابی';
$string['sortlevelsasc'] = 'مرتب سازی سطح‌ها:';
$string['sortlevelsasc0'] = 'نزولی بر اساس تعداد امتیازها';
$string['sortlevelsasc1'] = 'صعودی بر اساس تعداد امتیازها';
