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
 * Strings for component 'grades', language 'fa', version '4.5'.
 *
 * @package     grades
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activities'] = 'فعالیت‌ها';
$string['addcategory'] = 'اضافه کردن دسته جدید';
$string['addcategoryerror'] = 'نتوانستم دسته را اضافه کنم.';
$string['addexceptionerror'] = 'در حین تلاش برای اضافه‌کردن استثناء برای userid:gradeitem خطایی رخ داد';
$string['addfeedback'] = 'اضافه‌کردن بازخورد';
$string['addgradeletter'] = 'اضافه‌کردن یک نمرهٔ حرفی';
$string['addidnumbers'] = 'اضافه‌کردن کدهای شناسایی';
$string['additem'] = 'اضافه کردن مورد نمره‌دار';
$string['addoutcome'] = 'اضافه کردن یک هدف';
$string['addoutcomeitem'] = 'اضافه‌کردن مورد هدف‌دار';
$string['addscale'] = 'اضافه کردن یک مقیاس';
$string['adjustedweight'] = 'وزن تنظیم شده است';
$string['aggregateextracreditmean'] = 'میانگین نمرات(با امتیاز اضافی)';
$string['aggregatemax'] = 'بالاترین نمره';
$string['aggregatemean'] = 'میانگین نمره‌ها';
$string['aggregatemedian'] = 'میانهٔ نمره‌ها';
$string['aggregatemin'] = 'پائین‌ترین نمره';
$string['aggregatemode'] = 'مد نمره‌ها';
$string['aggregatenotonlygraded'] = 'شامل نمره‌های خالی';
$string['aggregateonlygraded'] = 'نادیده گرفتن نمره‌های خالی';
$string['aggregateonlygraded_help'] = 'یک نمرهٔ خالی، نمره‌ای است که در دفتر نمره وجود ندارد. ممکن است مربوط به تکلیفی باشد که تحویل داده شده و هنوز نمره داده نشده است یا اینکه مربوط به آزمونی باشد که هنوز در آن شرکت نشده است یا ...

این تنظیم تعیین می‌کند که آیا نمره‌های خالی در محاسبات نادیده گرفته شوند یا اینکه به‌عنوان نمرهٔ حداقل (به‌طور مثال در تکلیفی که نمره‌اش بین ۰ تا ۱۰۰ است، صفر) درنظر گرفته شوند.';
$string['aggregateoutcomes'] = 'شامل کردن اهداف در جمع‌بندی';
$string['aggregateoutcomes_help'] = 'اگر انتخاب شده باشد، اهداف در جمع‌بندی شامل می‌شوند. این کار ممکن است منجر به مقدار غیر منتظره نمره نهایی دسته شود.';
$string['aggregatesonly'] = 'نمایش فقط جمع‌های نمره‌ها';
$string['aggregatesubcatsupgradedgrades'] = 'توجه: به‌عنوان بخشی از ارتقای سایت، تنظیم جمع‌بندی «جمع‌بندی‌کردن شامل زیر دسته‌ها» حذف شده است. با توجه به اینکه در این درس قبلا از «جمع‌بندی‌کردن شامل زیردسته‌ها» استفاده شده است، توصیه می‌شود که این تغییر را در دفتر نمره مرور کنید.';
$string['aggregatesum'] = 'طبیعی';
$string['aggregateweightedmean'] = 'میانگین وزن‌دار نمرات';
$string['aggregateweightedmean2'] = 'میانگین وزن‌دار نمرات ساده شده';
$string['aggregation'] = 'جمع‌بندی';
$string['aggregation_help'] = '«جمع‌بندی» تعیین می‌کند که نمرات موجود در هر دسته به چه صورتی ترکیب شوند.

* میانگین نمرات - حاصل جمع تمام نمرات تقسیم بر تعداد آنها
* میانهٔ نمرات - نمره‌ای که در صورت مرتب کردن نمره‌ها در میانه قرار می‌گیرد
* کمترین نمره
* بیشترین نمره
* مُد نمره‌ها - نمره‌ای که بیشترین تکرار را دارد
* طبیعی - حاصل جمع تمام نمره‌ها بعد از اعمال وزن';
$string['aggregation_link'] = 'grade/aggregation';
$string['aggregationcoef'] = 'ضریب تجمعی';
$string['aggregationcoefextra'] = 'نمرهٔ اضافی';
$string['aggregationcoefextra_help'] = 'اگر «جمع‌بندی» به صورت «طبیعی» یا «میانگین وزن‌دار ساده» تعیین شده باشد و گزینهٔ «نمرهٔ اضافه» هم انتخاب شده باشد، سقف نمرهٔ آن نمره با سقف نمرهٔ دسته جمع نمی‌شود. در نتیجه بدون داشتن بالاترین نمرات در تمام موارد نیز احتمال کسب سقف نمرهٔ تعیین شده برای دسته (یا در صورتی که توسط مدیر سایت مجاز شده باشد، نمره‌ای بیشتر از سقف نمره) وجود خواهد داشت.

اگر «جمع‌بندی» به صورت میانگین نمرات (با نمرهٔ اضافه) تعیین شده باشد و عددی بزرگتر از صفر برای نمرهٔ اضافه تعیین شده باشد، نمرهٔ اضافه ضریبی خواهد بود که نمره (پس از محاسبهٔ میانگین و پیش از اضافه شدن به جمع نمرات) در آن ضرب خواهد شد.';
$string['aggregationcoefextra_link'] = 'grade/aggregation';
$string['aggregationcoefextrasum'] = 'امتیاز اضافی';
$string['aggregationcoefextrasum_help'] = 'اگر مربع امتیاز اضافی علامت خورده باشد، آنگاه سقف نمرهٔ این مورد نمره‌دار به سقف نمرهٔ دسته اضافه نمی‌شود. در نتیجه می‌توان بدون کسب نمرهٔ کامل در تک‌تک موارد نمره‌دار، نمرهٔ کامل (یا حتی اگر توسط مدیر سایت فعال شده باشد، نمره‌ای بالاتر از سقف نمره) را در دسته کسب کرد.';
$string['aggregationcoefextrasum_link'] = 'grade/aggregation';
$string['aggregationcoefextrasumabbr'] = '+';
$string['aggregationcoefextraweight_link'] = 'grade/aggregation';
$string['aggregationcoefweight'] = 'وزن مورد';
$string['aggregationcoefweight_help'] = 'در هنگام جمع‌بندی برای محاسبهٔ نمرهٔ نهایی، وزن نمره‌ها روی محاسبه تأثیر می‌گذارد. نمره‌ای که وزن بیشتری داشته باشد تاثیر بیشتری روی نمرهٔ نهایی خواهد داشت.';
$string['aggregationcoefweight_link'] = 'grade/aggregation';
$string['aggregationhintnovalue'] = '(خالی)';
$string['aggregationofa'] = 'جمع‌بندی {$a}';
$string['aggregationposition'] = 'محل قرار گرفتن جمع‌بندی';
$string['aggregationposition_help'] = 'این گزینه تعیین می‌کند که ستون‌های نمرهٔ نهای درس و دسته‌ها در ابتدای گزارش‌های دفتر نمره نمایش داده شوند یا انتها.';
$string['aggregationsvisible'] = 'انواع جمع‌بندی‌های موجود';
$string['aggregationsvisiblehelp'] = 'تمام انواع جمع‌بندی که باید موجود باشند را انتخاب کنید. برای انتخاب کردن چند مورد کلید Ctrl را پایین نگاه دارید.';
$string['allgrades'] = 'تمام نمره‌ها برحسب دسته';
$string['allstudents'] = 'همه شاگردان';
$string['allusers'] = 'همهٔ کاربران';
$string['availableidnumbers'] = 'کدهای شناسایی موجود';
$string['average'] = 'میانگین';
$string['averagesdecimalpoints'] = 'تعداد اعشار در میانگین ستون‌ها';
$string['averagesdecimalpoints_help'] = 'این تنظیم تعداد رقم‌های اعشار نمایش داده شده برای میانگین‌ها را تعیین می‌کند. می‌توان تعیین کرد که این تنظیم برابر با تنظیمی باشد که برای آیتم نمره‌دار یا دسته تعیین شده است (وارث شدن).';
$string['averagesdisplaytype'] = 'نوع نمایش میانگین ستون‌ها';
$string['averagesdisplaytype_help'] = 'این تنظیم تعیین می‌کند که آیا میانگین (معدل) به‌صورت یک نمرهٔ اعشاری نمایش داده شود یا به‌صورت درصد یا عدد و یا اینکه به همان صورتی که آیتم نمره‌دار یا دسته نمایش داده می‌شوند نمایش داده شود (وارث شدن).';
$string['backupwithoutgradebook'] = 'پشتیبان شامل پیکربندی دفتر نمره نیست';
$string['baduser'] = 'کاربر تعیین‌شده نامعتبر است';
$string['calculatedgrade'] = 'نمره محاسبه شده';
$string['calculation'] = 'فرمول محاسباتی';
$string['calculation_help'] = 'فرمول محاسباتی نمره، فرمولی است که برای محاسبهٔ نمره استفاده می‌شود.  فرمول باید با علامت مساوی (=) شروع شود و می‌تواند شامل عملگرهای رایج ریاضی نظیر max و min و sum باشد. فرمول محاسباتی می‌تواند بر مبنای نمرهٔ کسب‌شده در سایر موارد نمره‌دار باشد. در اینصورت، کد شناسایی موارد مورد نظر را بین یک جفت کروشه قرار داده و از آنها در فرمول استفاده کنید.';
$string['calculation_link'] = 'grade/calculation';
$string['calculationadd'] = 'اضافه کردن فرمول محاسباتی';
$string['calculationedit'] = 'ویرایش فرمول محاسباتی';
$string['calculationsaved'] = 'فرمول محاسباتی ذخیره شد';
$string['calculationview'] = 'مشاهده فرمول محاسباتی';
$string['cannotaccessgroup'] = 'نمی‌توانید به نمره‌های گروه انتخاب‌شده دسترسی داشته باشید؛ متاسفیم.';
$string['categories'] = 'دسته‌ها';
$string['category'] = 'دسته';
$string['categoryedit'] = 'ویرایش دسته';
$string['categoryname'] = 'نام دسته';
$string['categorytotal'] = 'نمرهٔ نهایی دسته';
$string['categorytotalfull'] = 'نمرهٔ نهایی {$a->category}';
$string['categorytotalname'] = 'نام ستون نمرهٔ نهایی دسته';
$string['changedefaults'] = 'تغییر پیش‌فرض‌ها';
$string['changereportdefaults'] = 'تغییر پیش‌فرض‌های گزارش';
$string['chooseaction'] = 'اقدامی را انتخاب کنید ...';
$string['choosecategory'] = 'انتخاب دسته';
$string['componentcontrolsvisibility'] = 'اینکه این مورد نمره‌دار پنهان باشد یا خیر توسط تنظیمات فعالیت کنترل می‌شود.';
$string['contributiontocoursetotal'] = 'میزان تاثیر در نمره نهایی درس';
$string['controls'] = 'کنترل‌ها';
$string['courseavg'] = 'میانگین درس';
$string['coursegradecategory'] = 'دستهٔ نمرهٔ درس';
$string['coursegradedisplaytype'] = 'نوع نمایش نمرهٔ درس';
$string['coursegradedisplayupdated'] = 'نوع نمایش نمرهٔ درس به‌روز شد.';
$string['coursegradesettings'] = 'تنظیمات نمره درس';
$string['coursename'] = 'نام درس';
$string['coursescales'] = 'مقیاس‌های درس';
$string['coursesettings'] = 'تنظیمات درس';
$string['coursesettingsexplanation'] = 'تنظیمات درس تعیین می‌کنند که دفتر نمره چگونه برای همهٔ افراد درون درس نشان داده شود.';
$string['coursesiamtaking'] = 'درس‌هایی که من دارم';
$string['coursesiamteaching'] = 'درس‌هایی که من تدریس می‌کنم';
$string['coursetotal'] = 'جمع کل';
$string['createcategory'] = 'ساخت دسته';
$string['createcategoryerror'] = 'یک طبقهٔ جدید نتوانست ایجاد شود';
$string['creatinggradebooksettings'] = 'ساخت تنظیمات دفتر نمره';
$string['csv'] = 'CSV';
$string['currentparentaggregation'] = 'جمع‌بندی فعلی در دستهٔ مادر';
$string['decimalpoints'] = 'تعداد ارقام اعشاری';
$string['decimalpoints_help'] = 'این گزینه تعیین می‌کند که هر کدام از نمره‌ها با چند رقم اعشار نمایش داده شوند. این تنظیم تاثیری بر روی محاسبهٔ نمرات که با دقت ۵ رقم اعشار صورت می‌گیرد ندارد.';
$string['default'] = 'پیش فرض';
$string['defaultprev'] = 'پیش‌فرض ({$a})';
$string['deletecategory'] = 'پاک‌کردن دسته';
$string['disablegradehistory'] = 'غیر فعال بودن تاریخچهٔ نمره';
$string['disablegradehistory_help'] = 'غیر فعال کردن دنبال کردن تغییرات در جدول‌های مربوط به نمره‌ها. این کار ممکن است کمی سرعت کارگزار را بیشتر کند و در فضای پایگاه داده صرفه‌جویی کند.';
$string['displaylettergrade'] = 'نمایش نمره‌های حرفی';
$string['displaypercent'] = 'نمایش درصدها';
$string['displaypoints'] = 'نمایش امتیازها';
$string['displayweighted'] = 'نمایش نمره‌های وزن‌دار';
$string['droplow'] = 'نادیده‌گرفتن کمترین';
$string['droplow_help'] = 'این تنظیم موجب می‌شود که تعداد مشخصی از کمترین نمره‌ها در جمع‌بندی نادیده گرفته شوند.';
$string['dropxlowest'] = 'انداختن X تعداد کم‌ترین';
$string['duplicatescale'] = 'مقیاس تکراری';
$string['edit'] = 'ویرایش';
$string['editcalculation'] = 'ویرایش فرمول محاسباتی';
$string['editcalculationverbose'] = 'تعییر نحوهٔ محاسبهٔ {$a->category} {$a->itemmodule} {$a->itemname}';
$string['editfeedback'] = 'ویرایش بازخورد';
$string['editgrade'] = 'ویرایش نمره';
$string['editgradeletters'] = 'ویرایش حروف نمره‌ها';
$string['editoutcome'] = 'ویرایش هدف';
$string['editoutcomes'] = 'ویرایش اهداف';
$string['editscale'] = 'ویرایش مقیاس';
$string['edittree'] = 'دسته‌ها و موردها';
$string['editverbose'] = 'ویرایش {$a->category} {$a->itemmodule} {$a->itemname}';
$string['enableajax'] = 'فعال بودن AJAX';
$string['enableajax_help'] = 'با اضافه کردن قابلیت‌های AJAX به گزارش نمره‌دهنده، موجب ساده‌تر شدن و سریع‌تر شدن کارهای معمول می‌شود. استفاده از AJAX به فعال بودن جاوا اسکریپت در مرورگر کاربر وابسته است.';
$string['enableoutcomes'] = 'فعال بودن اهداف درس';
$string['enableoutcomes_help'] = 'در صورت فعال بودن می‌توانیم موارد نمره‌دار را با استفاده از یک یا چند مقیاس که هر کدام به هدف‌هایی مرتبط هستند نمره دهیم.';
$string['encoding'] = 'کدگذاری';
$string['encoding_help'] = 'کدگذاری مورد استفاده برای داده‌ها را انتخاب کنید. (کدگذاری استاندارد UTF-8 است.) اگر اشتباها کدگذاری اشتباهی انتخاب شود، هنگام پیش‌نمایش داده برای وارد کردن، قابل تشحیص خواهد بود.';
$string['errorcalculationunknown'] = 'فرمول نامعتبر';
$string['errorgradevaluenonnumeric'] = 'مقدار غیر عددی دریافت شد برای نمرهٔ پایین یا بالا برای';
$string['errornocourse'] = 'اطلاعات درس قابل دریافت نبود';
$string['errorreprintheadersnonnumeric'] = 'یک مقدار غیر عددی برای reprint-headers دریافت شد';
$string['errorsavegrade'] = 'نمی‌توان نمره را ذخیره کرد، متاسفیم.';
$string['errorsettinggrade'] = 'خطا در هنگام ذخیرهٔ نمرهٔ «{$a->itemname}» برای کاربر با شناسهٔ {$a->userid}';
$string['errorupdatinggradecategoryaggregateoutcomes'] = 'خطا در به‌روز کردن تنظیم «شامل کردن اهداف در جمع‌بندی» برای دسته نمره با شناسهٔ {$a->id}';
$string['errorupdatinggradecategoryaggregation'] = 'خطا در به‌روزرسانی نوع جمع‌بندی دسته نمره با شناسهٔ {$a->id}';
$string['eventgradedeleted'] = 'نمره حذف شد';
$string['eventgradeitemupdated'] = 'مورد نمره‌دار به روز شد';
$string['eventgradeviewed'] = 'نمره‌ها در دفتر نمره مشاهده شدند';
$string['eventusergraded'] = 'به کاربر نمره داده شد';
$string['excluded'] = 'صرفِ‌نظرشده';
$string['excluded_help'] = 'اگر علامت خورده باشد، این نمره در هیچ‌یک از جمع‌بندی‌ها شامل نخواهد شد.';
$string['export'] = 'صدور';
$string['exportalloutcomes'] = 'صدور همهٔ هدف‌ها';
$string['exportfeedback'] = 'گنجانده شدن بازخورد در صدور';
$string['exportformatoptions'] = 'گزینه‌های فرمت صدور';
$string['exportonlyactive'] = 'به غیر از کاربران معلق شده';
$string['exportplugins'] = 'صدور پلاگین‌ها';
$string['exportsettings'] = 'تنظیمات صدور';
$string['exportto'] = 'صدور به';
$string['externalurl'] = 'آدرس اینترنتی بیرونی';
$string['externalurl_desc'] = 'اگر از یک دفتر نمرهٔ بیرونی استفاده می‌شود، آدرسش باید اینجا وارد شود.';
$string['feedback'] = 'بازخورد';
$string['feedbackadd'] = 'اضافه کردن بازخورد';
$string['feedbackedit'] = 'ویرایش بازخورد';
$string['feedbackforgradeitems'] = 'بازخورد برای {$a}';
$string['feedbacks'] = 'بازخوردها';
$string['feedbacksaved'] = 'بازخورد ذخیره شد';
$string['feedbackview'] = 'مشاهدهٔ بازخورد';
$string['filterbyname'] = 'فیلتر کردن با نام';
$string['finalgrade'] = 'نمرهٔ نهایی';
$string['forceimport'] = 'تحمیل ورود';
$string['forceimport_help'] = 'وارد شدن نمرا ت تحمیل شود حتی اگر نمره‌ها بعد از صدور فایلی که در حال ورود است به‌روز شده باشند';
$string['forceoff'] = 'اجبار: خاموش';
$string['forceon'] = 'اجبار: روشن';
$string['forelementtypes'] = 'برای {$a} انتخاب‌شده';
$string['forstudents'] = 'برای شاگردان';
$string['fullmode'] = 'تغییر به نمای کامل';
$string['generalsettings'] = 'تنظیمات عمومی';
$string['grade'] = 'نمره';
$string['grade_help'] = 'اعطای نمره به شاگردان برای کارشان';
$string['gradeadministration'] = 'مدیریت نمرات';
$string['gradealreadyupdated'] = '{$a} نمره وارد نشدند زیرا نمره‌های موجود در فایل ورودی قدیمی‌تر از نمره‌های موجود در گزارش نمره‌دهنده بودند. برای اینکه در هر صورت روند ورود را ادامه دهید، از گزینهٔ تحمیل ورود استفاده کنید.';
$string['gradeanalysis'] = 'آنالیز نمره';
$string['gradebook'] = 'دفتر نمره';
$string['gradebookhiddenerror'] = 'دفتر نمره هم‌اکنون به‌نحوی تنظیم شده است که همه چیز را از شاگردان پنهان کند.';
$string['gradebookhistories'] = 'تاریخچه نمرات';
$string['gradebooksetup'] = 'پیکربندی دفتر نمره';
$string['gradeboundary'] = 'مرز نمرهٔ حرفی';
$string['gradeboundary_help'] = 'این گزینه حداقل میزان درصدی که نمرهٔ حرفی به نمره‌های بالاتر از آن نسبت داده می‌شود را تعیین می‌کند.';
$string['gradecategories'] = 'دسته‌های نمره';
$string['gradecategory'] = 'دستهٔ نمره';
$string['gradecategoryonmodform'] = 'دستهٔ نمره';
$string['gradecategoryonmodform_help'] = 'این گزینه، دستهٔ نمره‌ای که نمرهٔ این فعالیت در دفتر نمره در آن دسته قرار می‌گیرد را تعیین می‌کند.';
$string['gradecategorysettings'] = 'تنظیمات دستهٔ نمره';
$string['gradedisplaytype'] = 'نوع نمایش نمره';
$string['gradedisplaytype_help'] = 'این گزینه تعیین می‌کند که در گزارش‌های نمره دهنده و کاربر، نمره‌ها به چه صورت نمایش داده شوند.

* حرف - حروف یا کلمات برای نشان دادن طیفی از نمره‌ها استفاده می‌شوند، همانطور که "حروف" در تنظیم دفترچه نمره تعریف شده است.
* درصد - نسبت به حداکثر و حداقل نمره‌ها
* حقیقی - نمرات واقعی یا مقادیر مقیاس';
$string['gradedon'] = 'تاریخ نمره دادن: {$a}';
$string['gradeexport'] = 'صدور نمره';
$string['gradeexportcolumntype'] = '{$a->name} ({$a->extra})';
$string['gradeexportcustomprofilefields'] = 'مشخصه‌های اضافی کاربران در صدور نمره';
$string['gradeexportcustomprofilefields_desc'] = 'شامل‌شدن این مشخصه‌های اضافی کاربران در صدور نمره، به‌صورت جداشده با ویرگول انگلیسی.';
$string['gradeexportdecimalpoints'] = 'محل نقطه رقم اعشار در نمره';
$string['gradeexportdecimalpoints_desc'] = 'تعداد رقم‌های اعشار نمایش داده شده برای صدور. این مقدار در زمان صدور می‌تواند بازنویسی شود.';
$string['gradeexportdisplaytype'] = 'نوع نمایش صدور نمره';
$string['gradeexportdisplaytype_desc'] = 'نمرات در هنگام صدور می‌توانند به صورت نمره‌های حقیقی، به‌طور درصدی (در ارجاع به نمره‌های حداقل و حداکثر) یا با حروف (A و B و C و غیره...) نمایش داده شوند. این تنظیم در هنگام صدور می‌تواند بازنویسی شود.';
$string['gradeexportdisplaytypes'] = 'انواع نمایش صدور نمره';
$string['gradeexportuserprofilefields'] = 'مشخصه‌های فردی کاربران در صدور نمره';
$string['gradeexportuserprofilefields_desc'] = 'شامل‌شدن این مشخصه‌های کاربران در صدور نمره، به‌صورت جداشده با ویرگول انگلیسی.';
$string['gradeforstudent'] = '{$a->student}<br />{$a->item}{$a->feedback}';
$string['gradegrademinmax'] = 'نمره‌های حداقل و حداکثر اولیه';
$string['gradehelp'] = 'راهنمای نمره';
$string['gradehistorylifetime'] = 'عمر تاریخچهٔ نمره';
$string['gradehistorylifetime_help'] = 'مدت زمانی که می‌خواهید تاریخچهٔ تغییرات در جدول‌های مربوط به نمره نگهداری شوند را مشخص می‌کند. توصیه می‌شود که این مقدار را تا حد امکان طولانی در نظر بگیرید. اگر با مشکلات مربوط به کارایی و سرعت مواجه شدید یا فضای پایگاه دادهٔ شما محدود است، مقادیر کوچکتر را آزمایش کنید.';
$string['gradeimport'] = 'ورود نمره';
$string['gradeitem'] = 'مورد';
$string['gradeitemaddusers'] = 'در نمره دادن شامل نشود';
$string['gradeitemadvanced'] = 'موارد نمره‌دار پیشرفته';
$string['gradeitemadvanced_help'] = 'تمام مواردی که باید به عنوان موارد نمره‌دار پیشرفته در نظر گرفته شوند را انتخاب کنید.';
$string['gradeitemmembersselected'] = 'در نمره دادن شامل نشده است';
$string['gradeitemminmax'] = 'حداقل و حداکثر نمره تعیین‌شده در تنظیمات مورد نمره‌دار';
$string['gradeitemnonmembers'] = 'در نمره دادن شامل شده است';
$string['gradeitemremovemembers'] = 'در نمره دادن شامل شود';
$string['gradeitems'] = 'موارد ارزشیابی';
$string['gradeitemsettings'] = 'تنظیمات نمرات';
$string['gradeitemsinc'] = 'نمرهٔ این موارد گنجانده شود';
$string['gradeletter'] = 'نمره حرفی';
$string['gradeletter_help'] = 'نمره‌های حرفی حرف‌ها (A، B، C، ...) یا کلمات (مانند ممتاز، شایسته، قبول، ...) هستند که برای بیان بازه‌ای از نمره‌ها استفاده می‌شوند.';
$string['gradeletters'] = 'نمره‌های حرفی';
$string['gradelocked'] = 'نمره قفل شده است';
$string['gradelong'] = '{$a->grade} از {$a->max}';
$string['grademax'] = 'بیشترین نمره';
$string['grademax_help'] = 'هنگامی که نوع نمرهٔ «مقدار» انتخاب شده باشد، این گزینه تعیین کنندهٔ سقف نمره خواهد بود. سقف نمره برای نمره‌ای که مربوط به یک فعالیت است در صفحهٔ تنظیمات همان فعالیت تنظیم می‌شود.';
$string['grademin'] = 'کمترین نمره';
$string['grademin_help'] = 'هنگامی که نوع نمرهٔ «مقدار» انتخاب شده باشد، این گزینه تعیین کنندهٔ کف نمره خواهد بود.';
$string['gradeoutcomeitem'] = 'نمره هدف مورد نظر';
$string['gradeoutcomes'] = 'اهداف';
$string['gradeoutcomescourses'] = 'اهداف درس';
$string['gradepass'] = 'نمرهٔ قبولی';
$string['gradepass_help'] = 'این تنظیم حداقل نمره لازم برای قبولی را تعیین می‌کند. مقدار تعیین‌شده در هنگام محاسبهٔ تکمیل فعالیت و درس، و در دفتر نمره (به این صورت که نمره‌های قبولی با رنگ سبز و نمرات مردودی با رنگ قرمز نمایش داده می‌شوند) استفاده می‌شود.';
$string['gradepassgreaterthangrade'] = 'نمرهٔ قبولی نمی‌تواند از حداکثر نمرهٔ ممکن بیشتر باشد {$a}';
$string['gradepointdefault'] = 'نمرهٔ عددی پیش‌فرض';
$string['gradepointdefault_help'] = 'این تنظیم مقدار پیش‌فرض موجود برای نمرهٔ عددی در یک مورد نمره‌دار را تعیین می‌کند.';
$string['gradepointdefault_validateerror'] = 'این تنظیم باید یک عدد صحیح بین ۱ و عدد حداکثر نمره باشد.';
$string['gradepointmax'] = 'عدد حداکثر نمره';
$string['gradepointmax_help'] = 'این تنظیم مقدار حداکثر نمرهٔ عددی موجود در فعالیت‌ها را تعیین می‌کند.';
$string['gradepreferences'] = 'ترجیحات نمره';
$string['gradepreferenceshelp'] = 'راهنمای ترجیحات نمره';
$string['gradepublishing'] = 'فعال بودن انتشار';
$string['gradepublishing_help'] = 'فعال‌کردن انتشار در صدور و ورودها: نمره‌های صادرشده می‌توانند از طریق یک آدرس اینترنتی، بدون نیاز به وارد شدن به یک سایت مودل با استفاده از حساب کاربری، مورد دستیابی قرار گیرند. نمره‌ها می‌توانند با دسترسی آن آدرسی اینترنتی وارد شوند (که به این معنی است که یک سایت مودل موتواند نمره‌هایی که توسط یک سایت دیگر مودل منتشر شده است را وارد کند). به‌طور پیش‌فرض تنها مدیران ارشد مجاز به استفاده از این قابلیت هستند، لطفا پیش از اضافه‌کردن توانایی‌های مورد نیاز به سایر نقش‌ها، کاربرانتان را آموزش دهید (دربارهٔ مخاطرات به‌اشتراک‌گذاری نشانه‌ها و شتاب‌دهنده‌های دانلود، محدودیت‌های IP، غیره).';
$string['gradereport'] = 'گزارش نمره';
$string['graderreport'] = 'گزارش نمره‌دهنده';
$string['grades'] = 'نمره‌ها';
$string['gradesforuser'] = 'نمره‌های {$a->user}';
$string['gradesmoduledeletionpendingwarning'] = 'هشدار: حذف فعالیتی در حال انجام است! برخی از نمرات در آستانهٔ حذف هستند.';
$string['gradesonly'] = 'تغییر به تنها نمره‌ها';
$string['gradessettings'] = 'تنظیمات نمره';
$string['gradetype'] = 'نوع نمره';
$string['gradetype_help'] = '۴ نوع نمره وجود دارد:

* هیچ - امکان نمره‌دهی وجود ندارد
* مقدار - یک مقدار عددی در محدودهٔ کف و سقف تعیین شده
* مقیاس - یکی از موارد موجود در یک لیست
* متن - تنها بازخورد

تنها انواع «مقدار» و «مقیاس» قابل استفاده در جمع‌بندی هستند. نوع نمره برای نمره‌ای که مربوط به یک فعالیت است در صفحهٔ تنظیمات همان فعالیت تنظیم می‌شود.';
$string['gradeview'] = 'مشاهدهٔ نمره';
$string['gradeweighthelp'] = 'راهنمای وزن نمره';
$string['gradingmodulename'] = 'نمره‌دهی ({$a})';
$string['groupavg'] = 'میانگین گروه';
$string['hidden'] = 'پنهان';
$string['hidden_help'] = 'اگر انتخاب شده باشد، نمره‌ها از شاگردان پنهان خواهند بود. در صورت تمایل می‌توان یک تاریخ «پنهان بودن تا» تعیین کرد تا نمره‌ها پس از اینکه نمره‌دهی کامل شد، منتشر شوند.';
$string['hiddenasdate'] = 'نمایش تاریخ تحویل برای نمره‌های پنهان';
$string['hiddenasdate_help'] = 'اگر کاربر نمی‌تواند نمره‌های پنهان را ببیند، به جای خط تیره (-) تاریخ تحویل نشان داده شود.';
$string['hiddenuntil'] = 'پنهان بودن تا';
$string['hiddenuntildate'] = 'پنهان بودن تا: {$a}';
$string['hideadvanced'] = 'نامرئی کردن قابلیت‌های پیشرفته';
$string['hideaverages'] = 'پنهان کردن میانگین‌ها';
$string['hidecalculations'] = 'نامرئی کردن فرمول محاسباتی';
$string['hidecategory'] = 'پنهان';
$string['hideeyecons'] = 'پنهان کردن آیکن نمایش/پنهان‌کردن';
$string['hidefeedback'] = 'پنهان کردن بازخورد';
$string['hideforcedsettings'] = 'مخفی کردن تنظیمات تحمیلی (اجباری)';
$string['hideforcedsettings_help'] = 'تنظیماتی که مقدار آنها تحمیل شده است در واسط کاربری نمره‌دهی نمایش داده نشود.';
$string['hidegroups'] = 'پنهان کردن گروه‌ها';
$string['hidelocks'] = 'پنهان کردن قفل‌ها';
$string['hidenooutcomes'] = 'نمایش اهداف';
$string['hidequickfeedback'] = 'پنهان کردن بازخورد سریع';
$string['hideranges'] = 'پنهان کردن بازه‌ها';
$string['hidetotalifhiddenitems'] = 'پنهان کردن جمع نمره درصورتی‌که شامل موارد پنهان باشد';
$string['hidetotalifhiddenitems_help'] = 'این تنظیم تعیین می‌کند که آیا جمع نمره‌هایی که شامل موارد پنهان‌شدهٔ نمره‌دار هستند به شاگردان نمایش داده شوند یا اینکه با یک خط تیره (-) جایگزین شوند. اگر نمایش داده می‌شوند، جمع نمره می‌تواند با شامل کردن یا در نظر نگرفتن موارد پنهان محاسبه شود.

اگر موارد پنهان نادیده گرفته شوند، مقدار جمع نمره با جمع نمره‌ای که استاد در گزارش نمره‌دهنده می‌بیند متفاوت خواهد بود؛ زیرا استاد همیشه مقدار جمع نمره را با در نظر گرفتن تمام موارد نمره‌دار (پنهان یا غیر پنهان) می‌بیند. اگر موارد پنهان شامل شوند، شاگردان ممکن است بتواند موارد پنهان را محاسبه کنند.';
$string['hidetotalshowexhiddenitems'] = 'نمایش جمع‌های نمره‌ها با صرف‌نظر کردن از موارد پنهان';
$string['hidetotalshowinchiddenitems'] = 'نمایش جمع‌های نمره‌ها با در نظر گرفتن موارد پنهان';
$string['hideverbose'] = 'مخفی کردن {$a->category} {$a->itemmodule} {$a->itemname}';
$string['highgradeascending'] = 'مرتب‌سازی بر اساس نمرهٔ بالا به‌طور صعودی';
$string['highgradedescending'] = 'مرتب‌سازی بر اساس نمرهٔ بالا به‌طور نزولی';
$string['idnumbers'] = 'کدهای شناسایی';
$string['import'] = 'وارد کردن';
$string['importas'] = 'وارد کردن به عنوان';
$string['importcsv'] = 'ورود نمره‌ها از فایل CSV';
$string['importcsv_link'] = 'grade/import/csv/index';
$string['importcustom'] = 'وارد کردن به‌عنوان اهداف سفارشی (فقط این درس)';
$string['importfeedback'] = 'وارد کردن بازخورد';
$string['importfile'] = 'فایل ورودی';
$string['importfrom'] = 'وارد کردن از';
$string['importoutcomenofile'] = 'فایل ارسالی خالی است یا اینکه خراب است. لطفا بررسی کنید که یک فایل معتبر باشد. مشکل در خط {$a} تشخیص داده شد؛ این مشکل توسط خط‌هایی گزارش داده شده است که تعداد ستون‌هایشان از سطر اول (سطر عناوین) کمتر است یا در صورتی که فایل وارد شده دارای عناوین مورد نیاز نباشد. برای دیدن یک نمونه فایل شامل عناوین معتبر، به فایل صادر شده نگاه کنید.';
$string['importoutcomes'] = 'خواندن اهداف درس از فایل';
$string['importoutcomes_help'] = 'اهداف می‌توانند از روی فایل csv که دارای فرمتی مشابه با فایل csv صادر شده است وارد شوند.';
$string['importoutcomes_link'] = 'grade/outcome';
$string['importoutcomesuccess'] = 'وارد کردن هدف «{$a->name}» با شناسه #{$a->id}';
$string['importplugins'] = 'پلاگین‌های وارد کردن';
$string['importpreview'] = 'پیش‌نمایش وارد کردن';
$string['importsettings'] = 'تنظیمات وارد کردن';
$string['importskippednomanagescale'] = 'شما مجوز اضافه‌کردن یک مقیاس جدید را ندارید، بنابراین هدف «{$a}» نادیده گرفته شد زیرا نیاز به ساختن یک مقیاس جدید داشت';
$string['importskippedoutcome'] = 'یک هدف با نام کوتاه «{$a}» از قبل در این محل وجود دارد، هدفی که در فایل ورودی است نادیده گرفته شد.';
$string['importstandard'] = 'وارد کردن به‌عنوان هدف‌های استاندارد';
$string['importxml'] = 'ورود نمره‌ها از فایل XML';
$string['includescalesinaggregation'] = 'شامل مقیاس‌ها در جمع‌بندی';
$string['includescalesinaggregation_help'] = 'می‌توانید تعیین کنید که آیا مقیاس‌ها باید به‌عنوان عدد در تمام نمره‌های جمع‌بندی‌شده در دفترنمره‌های تمام درس‌ها شامل شوند یا خیر. *اخطار:* تغییر این تنظیم موجب می‌شود که تمام نمره‌های جمع‌بندی‌شده دوباره محاسبه شوند.';
$string['incorrectcourseid'] = 'شناسهٔ درس نادرست بود';
$string['incorrectcustomscale'] = '(مقیاس سفارشی اشتباه، لطفا تغییر دهید)';
$string['incorrectminmax'] = 'حداقل باید از حداکثر کمتر باشد';
$string['inherit'] = 'وارث شدن';
$string['intersectioninfo'] = 'اطلاعات دانش‌آموز/نمره';
$string['iteminfo'] = 'اطلاعات مورد';
$string['iteminfo_help'] = 'این تنظیم فضایی برای وارد کردن اطلاعاتی دربارهٔ این آیتم فراهم می‌کند. این اطلاعات هیچ جای دیگری نمایش داده نمی‌شود.';
$string['itemname'] = 'نام مورد';
$string['items'] = 'اقلام';
$string['itemsedit'] = 'ویرایش مورد ارزشیابی';
$string['keephigh'] = 'نگه‌داشتن بالاترین';
$string['keephigh_help'] = 'این تنظیم موجب می‌شود که تنها X نمرهٔ بالاتر از همه نگه‌داری شوند (X عدد تعیین‌شده است).';
$string['keephighestvalues'] = 'نگه‌داشتن {$a} نمرهٔ بالا';
$string['letter'] = 'حرف';
$string['lettergrade'] = 'نمرهٔ حرفی';
$string['letterpercentage'] = 'حرف (درصد)';
$string['letterreal'] = 'حرف (حقیقی)';
$string['letters'] = 'حروف';
$string['linkedactivity_help'] = 'این تنظیم فعالیتی که به این هدف موردنظر مرتبط است را مشخص می‌کند. این ممکن است برای اندازه‌گیری عملکرد شاگرد بر اساس معیارهایی که توسط نمره فعالیت ارزیابی نشده‌اند استفاده شود.';
$string['linktoactivity'] = 'پیوند به فعالیت {$a->name} {$a->title}';
$string['locked'] = 'قفل‌شده';
$string['locked_help'] = 'اگر علامت خورده باشد، نمره‌ها دیگر از طریق فعالیت مربوطه به‌طورخودکار به‌روز نخواهند شد.';
$string['locktime'] = 'قفل شدن بعد از';
$string['lockverbose'] = 'قفل کردن {$a->category} {$a->itemmodule} {$a->itemname}';
$string['manageoutcomes'] = 'مدیریت اهداف';
$string['manualitem'] = 'مورد دستی';
$string['mappings'] = 'نگاشت‌های موارد ارزشیابی';
$string['mappings_help'] = 'بازای هر کدام از ستون‌های نمره در صفحه‌گسترده، مورد نمره‌دار مرتبط برای وارد کردن نمرات در آن را انتخاب کنید.';
$string['max'] = 'سقف';
$string['maxgrade'] = 'سقف نمره';
$string['meanall'] = 'همهٔ نمره‌ها';
$string['meangraded'] = 'نمره‌های غیر خالی';
$string['meanselection'] = 'نمره‌های انتخاب‌شده برای میانگین ستون‌ها';
$string['meanselection_help'] = 'این تنظیم تعیین می‌کند که آیا سلول‌هایی که نمره‌ای ندارند هم باید در هنگام محاسبهٔ میانگین درنظر گرفته شوند یا خیر.';
$string['median'] = 'میانه';
$string['min'] = 'کف';
$string['minimum_show'] = 'نمایش حداقل نمره';
$string['minimum_show_help'] = 'حداقل نمره در محاسبهٔ نمره‌ها و وزن‌ها استفاده می‌شود. اگر نمایش داده نشود، حداقل نمره روی مقدار پیش‌فرض صفر قرار داده می‌شود و نمی‌تواند ویرایش شود.';
$string['minmaxtouse'] = 'حداقل و حداکثر نمرهٔ مورد استفاده در این محاسبه';
$string['minmaxtouse_desc'] = 'این تنظیم تعیین می‌کند که در هنگام محاسبهٔ نمره‌ای که باید در دفتر نمره نمایش داده شود، آیا باید از مقدار تنظیم‌شده برای نمره‌های حداقل و حداکثر در زمانی که نمره داده شد استفاده شود یا از مقدار فعلی تنظیم‌شده در دفتر نمره برای نمره‌های حداقل و حداکثر. توصیه می‌شود که این تغییر این تنظیم در یک زمان غیر شلوغ داده شود، زیرا تمام نمره‌ها محاسبهٔ مجدد خواهند شد، که می‌تواند منجر به بار زیاد کارگزار شود.';
$string['minmaxtouse_help'] = 'این تنظیم تعیین می‌کند که در هنگام محاسبهٔ نمره‌ای که باید در دفتر نمره نمایش داده شود، آیا باید از مقدار تنظیم‌شده برای نمره‌های حداقل و حداکثر در زمانی که نمره داده شد استفاده شود یا از مقدار فعلی تنظیم‌شده در دفتر نمره برای نمره‌های حداقل و حداکثر.';
$string['minmaxtouse_link'] = 'Grades_min_max';
$string['minmaxupgradewarning'] = 'توجه: با توجه به تغییر مقادیری که به‌عنوان نمره‌های حداقل و حداکثر در محاسبهٔ نمره‌های نمایش داده‌شده در دفتر نمره استفاده می‌شوند، ناسازگاری‌هایی بین بعضی از نمره‌ها پیدا شده است. توصیه می‌شود که با کلیک بر روی دکمهٔ زیر این ناسازگاری برطرف شود. البته این کار باعث تغییر کردن بعضی از نمره‌ها می‌شود.';
$string['missingscale'] = 'مقیاس باید انتخاب شده باشد';
$string['mode'] = 'روش';
$string['modgrade'] = 'نمره';
$string['modgrade_help'] = 'نوع نمره‌دهی مورد استفاده برای این فعالیت را انتخاب کنید. اگر «مقیاس» انتخاب شده باشد، می‌توانید مقیاس را از منوی بازشوندهٔ «مقیاس» انتخاب کنید. اگر از «امتیاز» استفاده شود، آنگاه می‌توانید حداکثر نمرهٔ موجود برای این فعالیت را وارد کنید.';
$string['modgradecantchangegradetype'] = 'شما نمی‌توانید نوع امتیازدهی را تغییر دهید، مادامی که نمره‌ها برای این مورد وجود دارد';
$string['modgradecantchangegradetypemsg'] = 'از پیش نمره‌هایی داده شده است، بنابراین نوع نمره قابل تغییر نیست. اگر می‌خواهید سقف نمره را تغییر دهید، ابتدا باید انتخاب کنید که آیا نمره‌های فعلی به مبنای جدید تغییر مقیاس داده شوند یا خیر.';
$string['modgradecantchangegradetyporscalemsg'] = 'از پیش نمره‌هایی داده شده است، بنابراین نوع و مقیاس نمره قابل تغییر نیستند.';
$string['modgradecantchangescale'] = 'شما نمی‌توانید مقیاس را تغییر دهید زیرا از قبل نمره‌هایی برای این مورد وجود دارد.';
$string['modgradecategoryrescalegrades'] = 'مقیاس‌بندی مجدد نمره‌های بازنویسی‌شده';
$string['modgradecategoryrescalegrades_help'] = 'هنگامی که حداکثر نمرهٔ یک آیتم در دفتر نمره را تغییر می‌دهید، باید تعیین کنید که این تغییر منجر به تغییر کردن درصد نمره‌های فعلی خواهد شد یا خیر.

اگر روی «بله» گذاشته شود، هر نمرهٔ موجود بازنویسی‌شده‌ای به‌نحوی مقیاس‌بندی مجدد خواهد شد تا درصد نمره ثابت باقی بماند.

به‌طور مثال، اگر این گزینه روی «بله» باشد، تغییر دادن نمرهٔ حداکثر مربوط به یک آیتم از ۱۰ به ۲۰ منجر به این خواهد شد که نمرهٔ ۶ از ۱۰ (٪۶۰) به ۱۲ از ۲۰ (٪۶۰) تغییر مقیاس داده شود. اگر این گزینه روی «خیر» باشد، نمره بدون تغییر باقی خواهد ماند و برای اطمینان از امتیازهای صحیح، به تنظیم دستی آیتم‌های نمره‌دار نیاز خواهد بود.';
$string['modgradeerrorbadscale'] = 'مقیاس نامعتبر انتخاب شد. لطفا مطمئن شوید که یک مقیاس از بین انتخاب‌های زیر انتخاب کنید.';
$string['modgrademaxgrade'] = 'سقف نمره';
$string['modgraderescalegrades'] = 'مقیاس‌بندی مجدد نمره‌های فعلی';
$string['modgraderescalegrades_help'] = 'هنگامی که حداکثر نمرهٔ یک آیتم در دفتر نمره را تغییر می‌دهید، باید تعیین کنید که این تغییر منجر به تغییر کردن درصد نمره‌های فعلی خواهد شد یا خیر.

اگر روی «بله» گذاشته شود، هر نمرهٔ موجودی به‌نحوی مقیاس‌بندی مجدد خواهد شد تا درصد نمره ثابت باقی بماند.

به‌طور مثال، اگر این گزینه روی «بله» باشد، تغییر دادن نمرهٔ حداکثر مربوط به یک آیتم از ۱۰ به ۲۰ منجر به این خواهد شد که نمرهٔ ۶ از ۱۰ (٪۶۰) به ۱۲ از ۲۰ (٪۶۰) تغییر مقیاس داده شود. اگر این گزینه روی «خیر» باشد، نمره از ۶ از ۱۰ (٪۶۰) به ۶ از ۲۰ (٪۳۰)  تغییر خواهد کرد و برای اطمینان از امتیازهای صحیح، به تنظیم دستی آیتم‌های نمره‌دار نیاز خواهد بود.';
$string['modgradetype'] = 'نوع';
$string['modgradetypenone'] = 'هیچ';
$string['modgradetypepoint'] = 'امتیاز';
$string['modgradetypescale'] = 'مقیاس';
$string['moveselectedto'] = 'انتقال موارد انتخاب‌شده به';
$string['movingelement'] = 'انتقال {$a}';
$string['multfactor'] = 'ضریب';
$string['mustchooserescaleyesorno'] = 'باید انتخاب کنید که آیا می‌خواهید نمره‌های فعلی دوباره مقیاس‌بندی شوند یا خیر.';
$string['mygrades'] = 'پیوند نمره‌ها در منوی کاربر';
$string['mygrades_desc'] = 'این تنظیم امکان اینکه از منوی کاربر به یک دفتر نمرهٔ بیرونی پیوند داده شود را فراهم می‌کند.';
$string['mypreferences'] = 'ترجیحات من';
$string['myreportpreferences'] = 'ترجیحات گزارش من';
$string['neverdeletehistory'] = 'تاریخچه هیچ‌وقت پاک نشود';
$string['newcategory'] = 'دستهٔ جدید';
$string['newitem'] = 'مورد نمره‌دار جدید';
$string['newoutcomeitem'] = 'یک مورد هدف جدید';
$string['nocategoryname'] = 'نامی برای دسته داده نشد.';
$string['noexistingoutcomes'] = 'هیچ اهدافی موجود نیست';
$string['nonnumericweight'] = 'دریافت مقدار غیر عددی برای';
$string['nooutcome'] = 'بدون هدف';
$string['nooutcomes'] = 'موارد هدف‌دار باید به یکی از اهداف درس مرتبط شوند، ولی هیچ هدفی برای این درس تعریف نشده است. آیا مایلید که یک هدف برای این درس تعریف کنید؟';
$string['nopublish'] = 'منتشر نکنید';
$string['noreports'] = 'شما در هیچ‌یک از درس‌های این سایت نه ثبت‌نام هستید و نه تدریس می‌کنید.';
$string['noscales'] = 'اهداف باید به یک مقیاس درسی یا مقیاس سراسری مرتبط باشد، اما هیچ کدام وجود ندارد. آیا می خواهید یکی را اضافه کنید؟';
$string['noselectedcategories'] = 'دسته‌ای انتخاب نشده بود.';
$string['noselecteditems'] = 'موردی انتخاب نشده بود.';
$string['notenrolled'] = 'شما در حال حاضر در هیچ درسی ثبت نام نشده‌اید';
$string['notteachererror'] = 'برای استفاده از این قابلیت باید یک استاد باشید.';
$string['numberofgrades'] = 'تعداد نمره‌ها';
$string['onascaleof'] = 'در مقیاسی از {$a->grademin} به {$a->grademax}';
$string['operations'] = 'عملیات‌ها';
$string['options'] = 'اختیارات';
$string['outcome'] = 'هدف';
$string['outcome_help'] = 'این تنظیم هدفی را که این آیتم نمره در دفترچه نمره نشان می دهد، تعیین می کند.';
$string['outcomeassigntocourse'] = 'نسبت دادن یک هدف دیگر به این درس';
$string['outcomecategory'] = 'ساختن اهداف در طبقه';
$string['outcomecategorynew'] = 'دستهٔ جدید';
$string['outcomeconfirmdelete'] = 'آیا مطمئنید که می‌خواهید هدف «{$a}» را پاک کنید؟';
$string['outcomecreate'] = 'اضافه کردن یک هدف جدید';
$string['outcomedelete'] = 'پاک کردن هدف';
$string['outcomefullname'] = 'نام کامل';
$string['outcomeitem'] = 'هدف موردنظر';
$string['outcomeitemsedit'] = 'ویرایش هدف موردنظر';
$string['outcomereport'] = 'گزارش هدف';
$string['outcomes'] = 'اهداف درس';
$string['outcomescourse'] = 'اهداف استفاده شده در درس';
$string['outcomescoursecustom'] = 'استفادهٔ سفارشی (بدون حذف)';
$string['outcomescustom'] = 'هدف‌های سفارشی';
$string['outcomesdisabled'] = 'اهداف فعال نیستند';
$string['outcomeshortname'] = 'نام کوتاه';
$string['outcomesstandard'] = 'هدف‌های استاندارد';
$string['outcomesstandardavailable'] = 'هدف‌های استاندارد موجود';
$string['outcomestandard'] = 'هدف عمومی';
$string['outcomestandard_help'] = 'هدف‌های عمومی در کل سایت برای همهٔ درس‌ها در دسترس هستند.';
$string['overallaverage'] = 'میانگین کلی';
$string['overridden'] = 'بازنویسی‌شده';
$string['overridecat'] = 'نمره‌های دسته‌ها بتوانند به‌طور دستی بازنویسی شوند';
$string['overridecat_help'] = 'غیرفعال کردن این تنظیم باعث می‌شود که کاربران نتوانند نمره‌های دسته‌ها را بازنویسی کنند.';
$string['overridesitedefaultgradedisplaytype'] = 'بازنویسی پیش‌فرض‌های سایت';
$string['overridesitedefaultgradedisplaytype_help'] = 'اگر انتخاب شده باشد، به جای استفاده از پیش‌فرض سایت، برای هر درس می‌توان حروف نمره و محدوده‌ها را تعیین کرد.';
$string['parentcategory'] = 'دستهٔ مادر';
$string['pctoftotalgrade'] = 'درصد نمرهٔ نهایی';
$string['percentage'] = 'درصد';
$string['percentageletter'] = 'درصد (حروفی)';
$string['percentagereal'] = 'درصد (حقیقی)';
$string['percentascending'] = 'مرتب‌سازی بر اساس درصد به‌صورت صعودی';
$string['percentdescending'] = 'مرتب‌سازی بر اساس درصد به‌صورت نزولی';
$string['percentshort'] = '٪';
$string['plusfactor'] = 'پایه';
$string['plusfactor_help'] = 'پایه، عددی است که به تمام نمره‌های این مورد نمره‌دار اضافه می‌شود (پس از اعمال ضریب).';
$string['pointsascending'] = 'مرتب‌سازی بر اساس امتیازها به‌صورت صعودی';
$string['pointsdescending'] = 'مرتب‌سازی بر اساس امتیازها به‌صورت نزولی';
$string['positionfirst'] = 'ابتدا';
$string['positionlast'] = 'انتها';
$string['preferences'] = 'ترجیحات';
$string['prefgeneral'] = 'عمومی';
$string['prefletters'] = 'حروف نمره و محدوده‌ها';
$string['prefrows'] = 'سطرهای ویژه';
$string['prefshow'] = 'تنظیمات مربوط به نمایش دادن یا پنهان کردن';
$string['previewrows'] = 'پیش‌نمایش سطرها';
$string['profilereport'] = 'گزارش صفحه مشخصات فردی کاربر';
$string['profilereport_help'] = 'گزارش نمره استفاده‌شده در صفحه مشخصات فردی کاربر.';
$string['publishing'] = 'در حال انتشار';
$string['quickfeedback'] = 'بازخورد سریع';
$string['quickgrading'] = 'نمره‌دهی سریع';
$string['quickgrading_help'] = 'در صورت فعال بودن، هنگامی که حالت ویرایش فعال است، یک جعبه ورودی متن برای هر نمره نمایش داده خواهد شد که امکان ویرایش چندین نمره در آن واحد را فراهم می‌کند. پس از کلیک بر روی دکمهٔ به‌روزرسانی، تغییرات ذخیره و به صورت مشخص نمایش داده می‌شوند.

توجه نمائید که وقتی نمره‌ای در گزارش نمره‌دهنده ویرایش می‌شود، به عنوان بازنویسی شده علامت می‌خورد. به این معنی که دیگر نمی‌توان آن نمره را از داخل فعالیت مربوطه‌اش تغییر داد.';
$string['range'] = 'محدوده';
$string['rangedecimals'] = 'تعداد رقم‌های اعشار در محدوده';
$string['rangedecimals_help'] = 'تعداد رقم‌های اعشار نمایش داده شده برای بازه.';
$string['rangesdecimalpoints'] = 'اعشار نمایش داده شده در محدوده‌ها';
$string['rangesdecimalpoints_help'] = 'این تنظیم تعداد رقم‌های اعشار نمایش داده شده برای محدوده‌ها (بازه‌ها) را تعیین می‌کند. می‌توان تعیین کرد که این تنظیم برابر با تنظیمی باشد که برای آیتم نمره‌دار یا دسته تعیین شده است (وارث شدن).';
$string['rangesdisplaytype'] = 'نوع نمایش محدوده';
$string['rangesdisplaytype_help'] = 'این تنظیم تعیین می‌کند که آیا محدوده (بازه) به‌صورت نمره‌های اعشاری نمایش داده شود یا به‌صورت درصد یا عدد و یا اینکه به همان صورتی که آیتم نمره‌دار یا دسته نمایش داده می‌شوند نمایش داده شود (وارث شدن).';
$string['rawpct'] = 'درصد خام';
$string['real'] = 'حقیقی';
$string['realletter'] = 'حقیقی (حرف)';
$string['realpercentage'] = 'حقیقی (درصد)';
$string['recalculatinggrades'] = 'محاسبهٔ مجدد نمرات';
$string['recovergradesdefault'] = 'پیش‌فرض احیای نمرات';
$string['recovergradesdefault_help'] = 'به‌طور پیش‌فرض نمره‌های قدیمی در هنگام ثبت‌نام مجدد کاربر در درس احیا شوند.';
$string['removeallcoursegrades'] = 'پاک کردن تمام نمره‌ها';
$string['removeallcourseitems'] = 'پاک کردن تمام موردها و دسته‌ها';
$string['removeallcourseitems_help'] = 'درصورتی‌که انتخاب شده  باشد، تمام دسته‌ها و موردهای نمره‌داری که به‌طور دستی به دفتر نمره اضافه شده‌اند، به همراه نمره‌ها و داده‌های مربوط به نمره‌های بازنویسی‌شده، صرف‌نظرشده، پنهان و قفل‌شده پاک خواهند شد. تنها موارد نمره‌داری که به فعالیت‌ها مربوط هستند باقی خواهند ماند.';
$string['reportdefault'] = 'پیش‌فرض گزارش ({$a})';
$string['reportplugins'] = 'پلاگین‌های گزارش';
$string['reportsettings'] = 'تنظیمات گزارش';
$string['resetweights'] = 'بازنشانی وزن‌های {$a->itemname}';
$string['resetweightsshort'] = 'بازنشانی وزن‌ها';
$string['respectingcurrentdata'] = 'بدون تغییر باقی گذاشتن پیکربندی فعلی';
$string['rowpreviewnum'] = 'پیش‌نمایش چند سطر';
$string['savechanges'] = 'ذخیرهٔ تغییرات';
$string['scaleconfirmdelete'] = 'آیا مطمئن هستید که می‌خواهید مقیاس «{$a}» را پاک کنید؟';
$string['seeallcoursegrades'] = 'مشاهدهٔ تمام نمره‌های درس';
$string['select'] = 'انتخاب {$a}';
$string['selectalloroneuser'] = 'یکی از کاربران و یا گزینهٔ همهٔ کاربران را انتخاب کنید';
$string['selectauser'] = 'یک کاربر را انتخاب کنید';
$string['selectdestination'] = 'انتخاب مقصد {$a}';
$string['separator'] = 'جدا کننده';
$string['separator_help'] = 'جداکنندهٔ مورد استفاده در فایل CSV را انتخاب کنید. (معمولا کاما است.)';
$string['sepcolon'] = 'علامت دونقطه';
$string['sepcomma'] = 'کاما';
$string['sepsemicolon'] = 'علامت نقطه‌ویرگول لاتین';
$string['septab'] = 'تب';
$string['setcategories'] = 'تعیین دسته‌ها';
$string['setcategorieserror'] = 'برای اینکه بتوانید به دسته‌ها وزن بدهید، ابتدا باید دسته‌های درس را تعیین کنید.';
$string['setgradeletters'] = 'تعیین نمره‌های حرفی';
$string['setpreferences'] = 'تعیین ترجیحات';
$string['settings'] = 'تنظیمات';
$string['setup'] = 'تنظیمات';
$string['setweights'] = 'تعیین وزن‌ها';
$string['showactivityicons'] = 'نمایش آیکن فعالیت‌ها';
$string['showactivityicons_help'] = 'در صورت فعال بودن، آیکن فعالیت‌ها در کنار نامشان نمایش داده می‌شود.';
$string['showallhidden'] = 'نماش پنهان‌ها';
$string['showallstudents'] = 'نمایش همه شاگردان';
$string['showanalysisicon'] = 'نمایش آیکن تحلیل نمره';
$string['showanalysisicon_desc'] = 'آیا آیکن تحلیل نمره به‌طور پیش‌فرض نمایش داده شود یا خیر. اگر توسط ماژول فعالیت پشتیبانی شود، آیکن تحلیل نمره به صفحه‌ای که شامل توضیحات بیشتری دربارهٔ نمره و چگونگی به‌دست آمدنش پیوند خواهد شد.';
$string['showanalysisicon_help'] = 'اگر توسط ماژول فعالیت پشتیبانی شود، آیکن تحلیل نمره به صفحه‌ای که شامل توضیحات بیشتری دربارهٔ نمره و چگونگی به‌دست آمدنش پیوند خواهد شد.';
$string['showaverage'] = 'نمایش میانگین';
$string['showaverage_help'] = 'اینکه آیا ستون میانگین نمایش داده شود یا خیر. در نظر داشته باشید که اگر تعداد نمره‌ها کم باشد، شرکت‌کنندگان ممکن است بتوانند نمرهٔ سایرین را تخمین بزنند. بنابه دلایل مربوط به سرعت و کارایی، اگر میانگین به موارد پنهان وابسته باشد، مقدارش تخمینی است.';
$string['showaverages'] = 'نمایش میانگین ستون‌ها';
$string['showaverages_help'] = 'در صورت فعال بودن، گزارش نمره‌دهنده شامل یک سطر اضافه که میانگین هر دسته و مورد نمره‌دار را نمایش می‌دهد خواهد بود.';
$string['showcalculations'] = 'نمایش فرمول محاسباتی';
$string['showcalculations_help'] = 'اگر فعال باشد، در هنگام ویرایش، برای هر مورد نمره‌دار و دستهٔ موارد یک آیکن ماشین‌حساب نمایش داده می‌شود تا به‌طور بصری نشان دهد که نمرهٔ مورد نظر محاسبه می‌شود.';
$string['showcontributiontocoursetotal'] = 'نمایش میزان تاثیر در نمره نهایی درس';
$string['showcontributiontocoursetotal_help'] = 'اینکه آیا ستونی شامل درصد تاثیرگذاری هر مورد نمره‌دار روی نمرهٔ نهایی کاربر در درس (بعد از اعمال وزن‌ها) نمایش داده شود یا خیر.';
$string['showeyecons'] = 'نمایش آیکن‌های نمایش/پنهان';
$string['showeyecons_help'] = 'در صورت فعال بودن، وقتی در حالت ویرایش هستید، برای هر نمره یک آیکن نمایش/پنهان نمایش داده می‌شود که به کمک آن می‌توان نمایش داده شدن نمره به شاگرد را کنترل کرد.';
$string['showfeedback'] = 'نمایش بازخورد';
$string['showfeedback_help'] = 'اینکه باید ستونی برای بازخورد نمایش داده شود یا خیر.';
$string['showgrade'] = 'نمایش نمره‌ها';
$string['showgrade_help'] = 'اینکه باید ستونی برای نمره‌ها نمایش داده شود یا خیر.';
$string['showgroups'] = 'نمایش گروه‌ها';
$string['showhiddenitems'] = 'نمایش موارد پنهان';
$string['showhiddenitems_help'] = 'اینکه آیا موارد نمره‌دار پنهان به‌طور کامل پنهان باشند یا اینکه نام آنها توسط شاگردان قابل مشاهده باشد.

* نماش پنهان‌ها - نام موارد نمره‌دار پنهان نمایش داده می‌شود ولی نمرهٔ شاگردان پنهان است
* تنها پنهان تا - موارد نمره‌داری که تاریخ «پنهان تا» برایشان تعیین شده است تا تاریخ تعیین‌شده به‌طور کامل پنهان خواهند بود و بعد از آن کل مورد نمایش داده خواهد شد
* عدم نمایش - موارد نمره‌دار پنهان به‌طور کامل پنهان خواهند بود';
$string['showhiddenuntilonly'] = 'تنها پنهان تا';
$string['showlettergrade'] = 'نمایش نمره‌های حرفی';
$string['showlettergrade_help'] = 'اینکه باید ستونی برای نمرهٔ حرفی نمایش داده شود یا خیر.';
$string['showlocks'] = 'نمایش قفل‌ها';
$string['showlocks_help'] = 'در صورت فعال بودن، وقتی در حالت ویرایش هستید، برای هر نمره یک آیکن قفل کردن/باز کردن نمایش داده می‌شود که به کمک آن می‌توان تعیین کرد که آیا نمرهٔ مورد نظر می‌تواند توسط فعالیت مربوطه‌اش به طور خودکار به‌روز شود یا خیر.';
$string['shownohidden'] = 'عدم نمایش';
$string['shownooutcomes'] = 'پنهان کردن اهداف';
$string['shownumberofgrades'] = 'نمایش تعداد نمره‌ها در میانگین‌ها';
$string['shownumberofgrades_help'] = 'در صورت فعال بودن، تعداد نمره‌هایی که برای محاسبهٔ میانگین استفاده شده است بعد از هر میانگین و بین یک جفت براکت نمایش داده می‌شود.';
$string['showonlyactiveenrol'] = 'فقط ثبت‌نام‌های فعال نمایش داده شوند';
$string['showonlyactiveenrol_help'] = 'این گزینه تعیین می‌کند که آیا فقط کاربران ثبت‌نام‌شدهٔ فعال در گزارش دفتر نمره نمایش داده شوند یا خیر. در صورت انتخاب، کاربران تعلیق‌شده در دفتر نمره نمایش داده نخواهند شد.';
$string['showpercentage'] = 'نمایش درصد';
$string['showpercentage_help'] = 'مقدار هر مورد برحسب درصد نشان داده شود یا خیر.';
$string['showquickfeedback'] = 'نمایش بازخورد سریع';
$string['showquickfeedback_help'] = 'در صورت فعال بودن، در حالت ویرایش، به ازای هر نمره یک مربع ورود متن با کادر نقطه‌چین نشان داده می‌شود که به کمک آنها می‌توان بازخورد مربوط به چندین نمره را به طور همزمان ویرایش کرد. هنگامی که دکمهٔ به‌روزرسانی فشرده شود، تغییرات ذخیره و با رنگ متفاوت مشخص می‌شوند.

توجه کنید که وقتی بازخورد در صفحهٔ گزارش نمره‌دهنده ویرایش شود، به عنوان باطل شده علامت می‌خورد. به این معنی که دیگر نمی‌توان بازخورد را از طریق فعالیت مربوطه‌اش تغییر داد.';
$string['showrange'] = 'نمایش محدوده‌ها';
$string['showrange_help'] = 'اینکه آیا ستونی برای محدوده نمایش داده شود یا خیر.';
$string['showranges'] = 'نمایش بازه‌ها';
$string['showranges_help'] = 'در صورت فعال بودن، در صفحهٔ گزارش نمره‌دهنده یک ستون اضافه برای نمایش بازهٔ نمره برای هر دسته و مورد نمره‌دار وجود خواهد داشت.';
$string['showrank'] = 'نمایش رتبه';
$string['showrank_help'] = 'این گزینه تعیین می‌کند که در مورد هر نمره، وضعیت شاگرد نسبت به سایر کلاس نشان داده شود یا خیر.';
$string['showuserimage'] = 'نمایش تصویر فردی کاربران';
$string['showuserimage_help'] = 'تصویر فردی هر کاربر در کنار نامش در گزارش نمره‌دهنده نشان داده شود یا خیر.';
$string['showweight'] = 'نمایش وزن‌ها';
$string['showweight_help'] = 'اینکه آیا ستونی برای وزن نمره نمایش داده شود یا خیر.';
$string['simpleview'] = 'نمای ساده';
$string['sitewide'] = 'مربوط به کل سایت';
$string['sortasc'] = 'مرتب‌کردن به‌ترتیب صعودی';
$string['sortbyfirstname'] = 'مرتب‌کردن بر اساس نام';
$string['sortbylastname'] = 'مرتب‌کردن بر اساس نام خانوادگی';
$string['sortdesc'] = 'مرتب‌کردن به‌ترتیب نزولی';
$string['standarddeviation'] = 'انحراف معیار';
$string['stats'] = 'آمار';
$string['student'] = 'شاگرد';
$string['studentsperpage'] = 'تعداد شاگردان در هر صفحه';
$string['studentsperpage_help'] = 'این گزینه تعداد شاگردانی که در هر صفحه از گزارش نمره‌دهنده نمایش داده می‌شوند را تعیین می‌کند.';
$string['submissions'] = 'تحویل کار';
$string['sumofgradesupgradedgrades'] = 'توجه: به‌عنوان بخشی از ارتقای سایت، شیوهٔ جمع‌بندی «مجموع نمرات» به «طبیعی» تغییر کرد. از آنجا که قبلا در این درس از «مجموع نمرات» استفاده شده بود، توصیه می‌شود که این تغییر را در دفتر نمره مرور کنید.';
$string['switchtofullview'] = 'تغییر به نمای کامل';
$string['switchtosimpleview'] = 'تغییر به نمای ساده';
$string['turnfeedbackoff'] = 'غیرفعال کردن بازخورد';
$string['turnfeedbackon'] = 'فعال کردن بازخورد';
$string['typenone'] = 'هیچ';
$string['typescale'] = 'مقیاس';
$string['typescale_help'] = 'این تنظیم مقیاسی که در هنگام استفاده از نوع نمرهٔ مقیاس استفاده خواهد شد را تعیین می‌کند. مقیاس یک فعالیت نمره‌دار در صفحهٔ تنظیمات آن فعالیت تعیین می‌شود.';
$string['typetext'] = 'متن';
$string['typevalue'] = 'مقدار';
$string['uncategorised'] = 'دسته‌بندی نشده';
$string['unlimitedgrades'] = 'نمره‌های نامحدود';
$string['unlimitedgrades_help'] = 'نمرات به‌طور پیش‌فرض توسط مقادیر حداقل و حداکثر تعیین‌شده برای مورد نمره‌دار محدود شده‌اند. با فعال کردن این تنظیم، این محدودیت برداشته می‌شود و می‌توان نمره‌هایی بیشتر از ٪۱۰۰ را به‌طور مستقیم در دفتر نمره وارد کرد.';
$string['unused'] = 'بدون استفاده';
$string['uploadgrades'] = 'ارسال فایل نمرات';
$string['useadvanced'] = 'استفاده از قابلیت‌های پیشرفته';
$string['usedgradeitem'] = '‌مورد ارزشیابی استفاده شده';
$string['usenoscale'] = 'از مقیاسی استفاده نشود';
$string['userfields_show'] = 'نمایش فیلدهای کاربر';
$string['userfields_show_help'] = 'نمایش فیلدهای اضافی کاربر مانند آدرس پست الکترونیکی در گزارش نمره‌دهنده. فیلدهای دقیقی که نمایش داده می‌شوند توسط تنظیم showuseridentity در سایت تعیین می‌شود.';
$string['userpreferences'] = 'ترجیحات کاربر';
$string['verbosescales'] = 'مقیاس‌های طولانی';
$string['verbosescales_help'] = 'یک مقیاس طولانی ترجیحا از کلمات به جای اعداد استفاده می‌کند. اگر روی «بله» تنظیم شود، هم مقیاس‌های عددی و هم طولانی‌تر وارد می‌شوند. اگر روی «خیر» تنظیم شود فقط مقیاس‌های عدیی وارد می‌شوند';
$string['viewbygroup'] = 'گروه';
$string['viewgrades'] = 'دیدن نمره‌ها';
$string['weight'] = 'وزن';
$string['weight_help'] = 'مقداری که از آن برای تعیین ارزش نسبی (ضریب) نمره‌های یک دسته یا درس استفاده می‌شود.';
$string['weightedascending'] = 'مرتب‌سازی بر اساس درصد وزن‌دار به‌صورت صعودی';
$string['weighteddescending'] = 'مرتب‌سازی بر اساس درصد وزن‌دار به‌صورت نزولی';
$string['weightedpct'] = 'درصد وزن‌دار';
$string['weightorextracredit'] = 'وزن یا امتیاز اضافی';
$string['weightoverride_help'] = 'برای بازنشانی وزن یک مورد نمره‌دار به مقدار محاسبه‌شدهٔ خودکار، این گزینه را از انتخاب خارج کنید. انتخاب‌کردن این گزینه جلوی تنظیم‌شدن خودکار وزن را می‌گیرد.';
$string['weights'] = 'وزن‌ها';
$string['weightsedit'] = 'ویرایش وزن‌ها و امتیازات اضافی';
$string['weightuc'] = 'وزن محاسبه‌شده';
$string['yourgrade'] = 'نمرهٔ شما';
