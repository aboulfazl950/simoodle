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
 * Strings for component 'alternative', language 'fa', version '4.5'.
 *
 * @package     alternative
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alternative'] = 'جایگزین';
$string['alternativename'] = 'نام فعالیت';
$string['alternativeoptions'] = 'گزینه‌های این جایگزینی';
$string['alternativeoptions_help'] = 'هر جایگزین گزینه‌های مختلف کاربر را نشان می‌دهد.
گزینه‌ها در این فرم توضیح داده می‌شوند.
اگر این عنوان تنظیم نشود، گزینه ایجاد نمی‌شود (و اگر وجود داشته باشد، حذف می‌شود)
می‌توانید گزینه‌ی جدیدی با دکمه‌ای که بعد از تنظیم این فیلدها وجود دارد، اضافه کنید.';
$string['changeallowed'] = 'تغییر مجوز';
$string['changeallowed_help'] = 'اگر انتخاب نشود، کاربر نمی‌تواند این انتخاب را تغییر دهد.
استادان و تمامی کاربرانی که قابلیت `alternatives:forceregistration` را دارند، می‌توانند این انتخاب را برای همه تغییر دهند.';
$string['chooseteammembers'] = 'لطفا اعضای تیم خود را انتخاب کنید';
$string['chooseuser'] = 'لطفا کاربر را برای ثبت انتخاب کنید';
$string['csv'] = 'وارد کردن CSV';
$string['csv2ndfield'] = 'فیلد دوم (مکان‌ها) باید عدد باشد، با انتخاب صفر محدودیتی وجود ندارد.';
$string['csv_help'] = 'هر سطر از عنوان؛ مکان‌ها؛ تاریخ؛ توضیح؛ تشکیل شده است.';
$string['csvbadfieldnb'] = 'شماره نادرست برای فیلد: {$a} به جای ۴.';
$string['csvunableopen'] = 'فایل CSV را باز نمی‌شود.';
$string['datecomment'] = 'تاریخ';
$string['datecomment_help'] = 'در این فیلد می‌توانید هر متنی وارد کنید که به معنای تاریخ یا بازه تاریخ باشد.';
$string['displaycompact'] = 'نمایش فشرده';
$string['displaycompact_help'] = 'اگر انتخاب نشود، هر گزینه در چند سطر با توضیح صریحی نشان داده می‌شود.
	اگر انتخاب شود، هر گزینه با در یک سطر با توضیح بیشتر نشان داده می‌شود.';
$string['fieldsetcsv'] = 'گزینه‌های ورود از فایل CSV';
$string['fieldsetmultiple'] = 'تنظیمات برای چندین ثبت';
$string['fieldsetteam'] = 'تنظیمات تیم';
$string['forceregister'] = 'ثبت اجباری';
$string['groupdependent'] = 'وابسته به گروه';
$string['groupdependent_help'] = 'اگر این گزینه انتخاب شود، متن‌ها برای هر کاربر بر اساس گروهش نمایش داده می‌شود.';
$string['individual'] = 'فرد';
$string['instructionsforcereg'] = 'شما نمی‌توانید خودتان را ثبت‌نام کنید، اما نقش شما اجازه می‌دهد که دانشجویان را برای هر انتخابی ثبت کنید.';
$string['instructionsgeneral'] = '';
$string['instructionsmultiple'] = 'شما باید انتخابی بین گزینه {$a->multiplemin} و {$a->multiplemax} انجام دهید.';
$string['instructionsmultiplenomax'] = 'حداقل باید {$a->multiplemin} گزینه‌ها را انتخاب کنید.';
$string['instructionsnochange'] = 'وقتی انتخابی ذخیره شود، تغییر آن مجاز نیست.';
$string['instructionsteam'] = 'می‌توانید یک تیم ثبت کنید. یک تیم باید در محدوده {$a->teammin} و  {$a->teammax} عضو داشته باشد.
هنگامی که اعضای دیگر تیم خود را ثبت کنید، رهبر  تیم  می‌شوید.';
$string['messageprovider:reminder'] = 'یادآور جایگزین/وضعیت دانشجو';
$string['modulename'] = 'جایگزین';
$string['modulename_help'] = 'ماژول جایگزینی به دانشجویان اجازه می‌دهد تا در یک لیست یک یا چند انتخاب را ثبت کنند.';
$string['modulenameplural'] = 'جایگزین‌ها';
$string['multiple'] = 'چندگانه';
$string['multipleenable'] = 'فعال کردن این تنظیمات';
$string['multipleenable_help'] = 'هر کاربر باید گزینه‌هایی در محدوده حداقل و حداکثر مقدار را ثبت کند';
$string['multiplemax'] = 'حداکثر ثبت کاربر';
$string['multiplemin'] = 'حداقل ثبت کاربر';
$string['noselectedoption'] = 'باید یک گزینه را انتخاب کنید';
$string['noselectedusers'] = 'کاربری انتخاب نشده است';
$string['option'] = 'گزینه';
$string['optionintro'] = 'توضیح';
$string['optionname'] = 'عنوان';
$string['options'] = 'گزینه‌ها';
$string['places'] = 'مکان‌ها';
$string['placesavail'] = 'مکان‌ها موجود';
$string['pluginadministration'] = 'جایگزین مدیریت';
$string['pluginname'] = 'جایگزین';
$string['potentialteammembers'] = 'اعضای بالقوه تیم';
$string['private'] = 'خصوصی';
$string['public'] = 'عمومی';
$string['publicreg'] = 'ثبت‌نام عمومی';
$string['publicreg_help'] = 'ثبت‌نام ها می‌تواند:<dl>
<dt>عمومی</dt> <dd> قابل نمایش برای همه، </dd>
 <dt>عمومی در همان گروه</dt> <dd> کاربران بتوانند کاربرانی را ببینند که حداقل یک گروه مشترک دارند</dd>
 <dt>خصوصی</dt> <dd> نمایش محدود به کاربران قدرتمند (اساتید و ...).</dd>
 </dl>';
$string['register'] = 'ثبت‌نام';
$string['registrationforbidden'] = 'نمی‌توانید این‌جا ثبت نام کنید';
$string['registrations'] = 'ثبت‌نام‌ها';
$string['registrationsaved'] = 'انتخاب‌های ثبت‌نام شما ذخیره شد.';
$string['regteams'] = 'تیم‌های ثبت شده';
$string['remains'] = 'باقی‌مانده‌ها';
$string['reminderBefore'] = 'پیش از [[AlterUntil]]';
$string['reminderFull'] = 'باید انتخابی در فعالیت‌ها “[[AlterName]]” بکنید.';
$string['reminderFullHtml'] = 'باید انتخابی در فعالیت‌ها “<i>[[AlterName]]</i>” بکنید.';
$string['reminderSmall'] = 'باید انتخابی در فعالیت‌ها“[[AlterName]]” بکنید.';
$string['reminderSubject'] = 'یادآوری: باید انتخابی از گزینه‌های جایگزین انجام دهید.';
$string['sendReminder'] = 'ارسال یادآوری';
$string['separator'] = 'جداکننده';
$string['students'] = 'دانشجویان';
$string['synthesis'] = 'ترکیبات';
$string['synthfree'] = 'رایگان';
$string['synthlimitplaces'] = 'گزینه‌های محدودیت مکان‌ها (فرد)';
$string['synthlimitteamplaces'] = 'گزینه‌های محدودیت مکان‌ها (تیم)';
$string['synthplaces'] = 'مکان‌ها (انفرادی)';
$string['synthpotential'] = 'دانشجویان بالقوه';
$string['synthregistered'] = 'دانشجویان ثبت‌شده';
$string['synthreserved'] = 'رزور شده (در محدوده)';
$string['synthteamplaces'] = 'مکان‌ها (گروه)';
$string['synthunlimitplaces'] = 'گزینه‌های نامحدود مکان (فرد)';
$string['synthunlimitteamplaces'] = 'گزینه‌های نامحدود مکان (گروه)';
$string['synthunregistered'] = 'دانشجویان ثبت‌نشده';
$string['team'] = 'گروه';
$string['teamenable'] = 'فعال کردن تنظیمات گروه';
$string['teamenable_help'] = 'حداکثر و حداقل اندازه تیم را مشخص کنید.';
$string['teamleader'] = 'رهبر تیم';
$string['teamleadernotamember'] = 'رهبر گروه نباید عضوی از گروه خودش باشد.';
$string['teammax'] = 'حداکثر اندازه تیم';
$string['teammin'] = 'حداقل اندازه تیم';
$string['teamplaces'] = 'مکان‌های گروه';
$string['teamplacesavail'] = 'مکان‌های موجود برای تیم';
$string['teams'] = 'گروه‌ها';
$string['unique'] = 'یکتا';
$string['unregister'] = 'لغو ثبت‌نام';
$string['unregisterLeader'] = 'توجه کنید: لغو ثبت‌نام رهبر باعث لغو ثبت‌نام کل تیم می‌شود.';
$string['uploadoverwrites'] = 'توجه کنید: بارگذاری یک فایل جدید باعث از بین رفتن تمامی ثبت‌نام‌ها و گزینه‌های قبلی می‌شود.';
$string['userinfo'] = 'باید با گزینه‌های {$a} ثبت شود.';
$string['usersnotreg'] = 'کاربران ثبت نشده';
$string['usersreg'] = 'کاربران ثبت شده';
$string['viewallregistrations'] = 'مشاهده ثبت‌نام‌ها';
$string['viewallusersnotreg'] = 'مشاهده کاربران ثبت نشده';
$string['viewallusersreg'] = 'مشاهده کاربران ثبت شده';
$string['viewsynthesis'] = 'مشاهده ترکیبات';
$string['viewteams'] = 'مشاهده تیم‌ها';
$string['wrongteamsize'] = 'اندازه تیم شما در محدوده مرزهای مجاز نیست';
