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
 * Strings for component 'qtype_numerical', language 'fa', version '4.5'.
 *
 * @package     qtype_numerical
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptederror'] = 'خطای قابل قبول';
$string['addmoreanswerblanks'] = 'جای خالی برای {no} گزینهٔ دیگر';
$string['addmoreunitblanks'] = 'اضافه شدن جا برای {no} واحد دیگر';
$string['answermustbenumberorstar'] = 'پاسخ باید یک عدد، یا * باشد.';
$string['answerno'] = 'پاسخ {$a}';
$string['decfractionofquestiongrade'] = 'به صورت یک ضریب اعشاری (۰ تا ۱) از نمرهٔ سؤال';
$string['decfractionofresponsegrade'] = 'به صورت یک ضریب اعشاری (۰ تا ۱) از نمرهٔ پاسخ';
$string['decimalformat'] = 'رقم اعشار';
$string['editableunittext'] = 'جعبهٔ ورود متن';
$string['errornomultiplier'] = 'برای این واحد باید یک ضریب تعین کنید.';
$string['errorrepeatedunit'] = 'نمی‌توانید دو واحد با نام یکسان داشته باشید.';
$string['geometric'] = 'هندسی';
$string['leftexample'] = 'قبل از عدد، مانند $1.00';
$string['manynumerical'] = 'واحدها اختیاری هستند. اگر واحدی وارد شود، پیش از نمره دادن از آن برای تبدیل پاسخ به واحد ۱ استفاده می‌شود';
$string['nominal'] = 'اسمی';
$string['noneditableunittext'] = 'متن غیر قابل ویرایش واحد اول';
$string['notenoughanswers'] = 'باید حداقل یک پاسخ وارد کنید.';
$string['nounitdisplay'] = 'واحد نمره ندارد';
$string['numericalmultiplier'] = 'ضریب';
$string['numericalmultiplier_help'] = 'ضریب، عاملی است که پاسخ عددی صحیح در آن ضرب خواهد شد.

واحد اول (واحد ۱) داری ضریب از پیش تعریف شدهٔ ۱ می‌باشد. بنابراین اگر عدد پاسخ صحیح ۵۵۰۰ باشد و «وات» را به عنوان واحد آن در قسمت «واحد ۱» که ضریب آن به صورت از پیش تعیین شده برابر با ۱ است تعیین کرده باشید، پاسخ صحیح ۵۵۰۰ وات خواهد بود.

اگر واحد «کیلو وات» با ضریب ۰٫۰۰۱ را اضافه کنید، گویا پاسخ ۵٫۵ کیلو وات را هم اضافه کرده‌اید. در این صورت هم ۵۵۰۰ وات و هم ۵٫۵ کیلو وات درست در نظر گرفته خواهند شد.

توجه داشته باشید که خطای قابل قبول هم به همین نسبت ضرب خواهد شد. یعنی خطای قابل قبول ۱۰۰ وات برابر است با ۰٫۱ کیلو وات خطای قابل قبول.';
$string['onlynumerical'] = 'فقط «عدد پاسخ» نمره داده می‌شود';
$string['pluginname'] = 'عددی';
$string['pluginname_help'] = 'از دید شاگردان، یک سؤال عددی کاملا مانند یک سؤال کوتاه-جواب می‌باشد. تفاوت در این است که در سؤال‌های عددی، می‌توان یک میزان خطای جزئی قابل قبول برای پاسخ‌ها در نظر گرفت. این ویژگی اجازه می‌دهد که بازهٔ معینی از پاسخ‌ها به صورت یک پاسخ ارزیابی شوند. به عنوان مثال، اگر پاسخ صحیح برابر با ۱۰ باشد و میزان خطای قابل قبول ۲ باشد، آنگاه تمام عددهای بین ۸ و ۱۲ به عنوان پاسخ صحیح پذیرفته خواهند شد.';
$string['pluginname_link'] = 'question/type/numerical';
$string['pluginnameadding'] = 'اضافه کردن یک سؤال عددی';
$string['pluginnameediting'] = 'در حال ویرایش یک سؤال عددی';
$string['pluginnamesummary'] = 'شاگرد می‌تواند یک عدد (احتمالا همراه با واحد) را به عنوان پاسخ وارد کند. این پاسخ بر اساس مقایسه با نمونه پاسخ‌های مختلف (احتمالا با در نظر گرفتن میزان خطای قابل چشم‌پوشی) نمره داده می‌شود.';
$string['relative'] = 'نسبی';
$string['rightexample'] = 'بعد از عدد، مانند ۱٫۰۰ سانتیمتر';
$string['selectunits'] = 'انتخاب واحدها';
$string['studentunitanswer'] = 'نمایش «واحد پاسخ» به صورت یک';
$string['tolerancetype'] = 'نوع خطای قابل قبول';
$string['unitchoice'] = 'چند گزینه‌ای (گزینه‌های رادیویی)';
$string['unitedit'] = 'ویرایش واحد';
$string['unitgraded'] = '«عدد پاسخ» و «واحد پاسخ»، هر دو، نمره داده می‌شوند';
$string['unithandling'] = 'مدیریت واحدها';
$string['unitincorrect'] = 'واحد شما درست نیست.';
$string['unitonerequired'] = 'باید حداقل یک واحد وارد کنید';
$string['unitpenalty'] = 'جریمهٔ واحد اشتباه';
$string['unitpenalty_help'] = 'جریمه در این موارد اعمال می‌شود:

* در قسمت مربوط به واحد یک واحد اشتباه وارد شود
* واحد در قسمت مربوط به مقدار وارد شود';
$string['unitposition'] = 'مکان واحد';
$string['unitselect'] = 'یک منوی باز شونده';
