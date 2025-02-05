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
 * Strings for component 'chat', language 'fa', version '4.5'.
 *
 * @package     chat
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['ajax'] = 'نسخه با استفاده از ajax';
$string['autoscroll'] = 'پیمایش خودکار';
$string['beep'] = 'بوق';
$string['bubble'] = 'حباب';
$string['cantlogin'] = 'ورود به اتاق گفتگو مقدور نشد!!';
$string['chat:addinstance'] = 'اضافه‌کردن یک اتاق گفتگوی جدید';
$string['chat:chat'] = 'دستیابی به یک اتاق گفتگو';
$string['chat:deletelog'] = 'پاک کردن log های گفتگو';
$string['chat:exportparticipatedsession'] = 'صادر کردن جلسه گفتگویی که در آن شرکت کرده است';
$string['chat:exportsession'] = 'صادر کردن جلسه گفتگو';
$string['chat:readlog'] = 'مشاهده log های گفتگو';
$string['chat:talk'] = 'صحبت در یک گفتگو';
$string['chatintro'] = 'متن مقدمه';
$string['chatname'] = 'نام این اتاق گفتگو';
$string['chatreport'] = 'جلسات گفتگو';
$string['chattime'] = 'زمان گفتگوی بعدی';
$string['compact'] = 'فشرده';
$string['composemessage'] = 'ارسال پیام';
$string['configmethod'] = 'روش گفتگوی ajax یک رابط کاربری مبتنی بر ajax فراهم می‌کند. این رابط به طور مرتب برای به‌روز شدن با کارگزار ارتباط برقرار می‌کند. در روش عادی چت، کلاینت‌ها برای به‌روز شدن به طور مرتب با کارگزار ارتباط برقرار می‌کنند. این شیوه نیاز به پیکربندی خاصی ندارد و همه جا کار می‌کند، ولی می‌تواند بار زیادی روی کارگزاری که گفتگو کننده‌های زیادی دارد ایجاد کند. استفاده از یک سرویس کارگزار نیازمند داشتن دسترسی به shell یونیکس است، ولی محیط گفتگوی سریع و سبکی را فراهم می‌کند.';
$string['confignormalupdatemode'] = 'به‌روزرسانی اتاق‌های گفتگو معمولا به صورت بهینه با استفاده از ویژگی <em>Keep-Alive</em> در <span dir="ltr" style="display:inline-block;direction:ltr">HTTP 1.1</span> انجام می‌شود، ولی هنوز هم بار زیادی روی کارگزار وارد می‌کند و خیلی سنگین است. روش پیشرفته‌تر، استفاده از شیوهٔ <em>Stream</em> برای رساندن به‌روزرسانی‌ها به کاربران است. استفاده از <em>Stream</em> نتیجهٔ خیلی بهتری خواهد داشت (مشابه با شیوهٔ chatd) ولی ممکن است روی کارگزار شما پشتیبانی نشود.';
$string['configoldping'] = 'حداکثر زمانی که باید بگذرد تا به این نتیجه برسیم که یک کاربر قطع شده است چند ثانیه است؟ این مقدار فقط یک حد بالا است، زیرا معمولا قطع شدن کاربران سریع تشخیص داده می‌شود. مقادیر کمتر بار بیشتری روی کارگزار خواهد گذاشت. اگر از روش چت عادی استفاده می‌کند، <strong>به هیچ عنوان</strong> مقداری کمتر از ۲ برابر مقداری که برای «تازه‌سازی اتاق» تعیین کرده‌اید در این قسمت وارد نکنید.';
$string['configrefreshroom'] = 'هر چند ثانیه یکبار باید خود اتاق گفتگو تازه‌سازی شود؟ انتخاب یک مقدار کم برای این گزینه، باعث می‌شود اتاق گفتگو سریع‌تر به نظر برسد، ولی وقتی افراد زیادی در حال گفتگو هستند بار زیادتری را روی کارگزار وب شما قرار خواهد داد. اگر از به‌روزرسانی به شیوهٔ <em>Stream</em> استفاده می‌کنید، می‌توانید سرعت‌های تازه‌سازی بیشتری را انتخاب کنید -- با مقدار ۲ آزمایش کنید.';
$string['configrefreshuserlist'] = 'هر چند ثانیه یکبار باید لیست کاربران تازه‌سازی شود؟';
$string['configserverhost'] = 'نام میزبان رایانه‌ای که سرویس کارگزار در آن قرار دارد';
$string['configserverip'] = 'آدرس IP منطبق با نام میزبان بالا';
$string['configservermax'] = 'حداکثر تعداد کلاینت‌های مجاز';
$string['configserverport'] = 'پورت استفاده شده در کارگزار برای سرویس';
$string['coursetheme'] = 'پوستهٔ درس';
$string['currentchats'] = 'جلسات گفتگوی فعال';
$string['currentusers'] = 'کاربران حاضر';
$string['deletesession'] = 'پاک کردن این جلسه';
$string['deletesessionsure'] = 'آیا مطمئنید که می‌خواهید این جلسه را پاک کنید؟';
$string['donotusechattime'] = 'زمان گفتگو منتشر نشود';
$string['enterchat'] = 'برای ورود به اتاق گفتگو اینجا کلیک کنید';
$string['errornousers'] = 'هیچ کاربری پیدا نشد!';
$string['eventmessagesent'] = 'پیام ارسال شد';
$string['eventsessionsviewed'] = 'جلسات مشاهده شده';
$string['explaingeneralconfig'] = 'این تنظیمات <strong>همیشه</strong> استفاده می‌شوند';
$string['explainmethoddaemon'] = 'این تنظیمات <strong>فقط</strong> در صورتی که در قسمت «روش چت» گزینهٔ «سرویس کارگزار چت» را انتخاب کرده باشید مهم هستند';
$string['explainmethodnormal'] = 'این تنظیمات <strong>فقط</strong> در صورتی که در قسمت «روش چت» گزینهٔ «روش عادی» را انتخاب کرده باشید مهم هستند';
$string['generalconfig'] = 'تنظیمات عمومی';
$string['idle'] = 'غیر فعال';
$string['indicator:cognitivedepth'] = 'گپ شناختی';
$string['indicator:cognitivedepthdef_help'] = 'شرکت کننده در این بازه تجزیه و تحلیل به این درصد از تعامل شناختی ارائه شده توسط فعالیت های گپ رسیده است (سطح = بدون مشاهده ، مشاهده ، ارسال ، مشاهده بازخورد ، نظر در مورد بازخورد)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'چت اجتماعی';
$string['indicator:socialbreadth_help'] = 'این شاخص بر اساس گستردگی اجتماعی دانش آموز در یک فعالیت گفتگو است.';
$string['indicator:socialbreadthdef'] = 'چت اجتماعی';
$string['indicator:socialbreadthdef_help'] = 'شرکت کننده در این بازه تجزیه و تحلیل به این درصد از مشارکت اجتماعی ارائه شده توسط فعالیت های گپ رسیده است (سطوح = عدم مشارکت ، تنها شرکت کننده ، شرکت کننده با دیگران)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['inputarea'] = 'محل نوشتن';
$string['invalidid'] = 'اتاق گفتگوی مورد نظر پیدا نشد!';
$string['list_all_sessions'] = 'لیست کردن همهٔ جلسه‌ها.';
$string['list_complete_sessions'] = 'فقط لیست کردن جلسه‌های کامل.';
$string['listing_all_sessions'] = 'نمایش لیست همهٔ جلسه‌ها.';
$string['messagebeepseveryone'] = '{$a} یک بوق برای همه فرستاد!';
$string['messagebeepsyou'] = '{$a} برای شما بوق فرستاد!';
$string['messageenter'] = '{$a} وارد اتاق گفتگو شد';
$string['messageexit'] = '{$a} اتاق گفتگو را ترک کرد';
$string['messages'] = 'پیام‌ها';
$string['messageyoubeep'] = 'شما یک بوق برای {$a} فرستادید';
$string['method'] = 'روش چت';
$string['methodajax'] = 'روش Ajax';
$string['methoddaemon'] = 'سرویس کارگزار چت';
$string['methodnormal'] = 'روش عادی';
$string['modulename'] = 'چت متنی';
$string['modulename_help'] = 'ماژول فعالیت چت امکان داشتن یک بحث و گفتگوی متنی هم‌زمان را برای شرکت کنندگان فراهم می‌کند.

چت می‌تواند فعالیتی باشد که در زمان خاصی انجام می‌شود و به پایان می‌رسد یا اینکه می‌تواند هر روز یا هر هفته در زمان معینی تکرار شود. جلسات چت ذخیره می‌شوند و می‌توانند به گونه‌ای در دسترس قرار داده شوند که توسط همه یا فقط کسانی که مجوز دیدن جلسات ذخیره شده چت را دارند قابل مشاهده باشند.

چت‌ها به خصوص در مواقعی که گروه چت کننده قادر به ملاقات حضوری نباشند مفید هستند. مواقعی مانند

* برگذاری جلسات منظم بین شاگردانی که در دوره‌های غیر حضوری شرکت کرده‌اند تا بتوانند تجربیاتشان را با کسانی که هم‌درسشان هستند ولی در محل‌های مختلفی هستند به اشتراک بگذارند
* شاگردی که به طور موقت امکان حضور در کلاس را نداشته است با استاد خود چت کند تا دروس عقب مانده‌اش را جبران کند
* شاگردانی که در خارج از محیط آموزشی در حال کارآموزی هستند دور هم جمع شوند تا در مورد تجربیاتشان با یکدیگر و با استادشان گفتگو کنند
* کودکان کم سن‌تر عصرها در خانه از چت به عنوان یک آشنایی کنترل شده (تحت نظارت) به دنیای شبکه اجتماعی استفاده کنند
* یک جلسه پرسش و پاسخ با یک سخنران مهمان در محلی دیگر
* جلسات آمادگی برای امتحان که در آنها استاد یا سایر شاگردان نمونه سوال‌هایی را مطرح می‌کنند';
$string['modulename_link'] = 'mod/chat/view';
$string['modulenameplural'] = 'اتاق‌های گفتگو';
$string['neverdeletemessages'] = 'پیام‌ها هیچگاه پاک نشوند';
$string['no_complete_sessions_found'] = 'جلسهٔ تمام شده‌ای پیدا نشد.';
$string['nochat'] = 'اتاق گفتگویی پیدا نشد';
$string['noguests'] = 'ورود به اتاق گفتگو برای مهمان‌ها آزاد نیست';
$string['nomessages'] = 'هنوز پیامی گفته نشده است';
$string['nopermissiontoseethechatlog'] = 'شما مجوز دیدن log های گفتگو را ندارید.';
$string['normalkeepalive'] = 'روش KeepAlive';
$string['normalstream'] = 'روش Stream';
$string['noscheduledsession'] = 'هیچ جلسه‌ای زمان‌بندی نشده است';
$string['notallowenter'] = 'شما اجازهٔ ورود به اتاق گفتگو را ندارید.';
$string['notlogged'] = 'وارد سایت نیستید!';
$string['oldping'] = 'مهلت قطع ارتباط';
$string['page-mod-chat-x'] = 'هر صفحه‌ای از ماژول اتاق گفتگو';
$string['pastchats'] = 'جلسات قبلی گفتگو';
$string['pluginadministration'] = 'مدیریت چت';
$string['pluginname'] = 'اتاق گفتگو';
$string['privacy:metadata:chat_messages_current'] = 'جلسه چت فعلی این داده ها موقتی است و پس از حذف جلسه گپ حذف می شود';
$string['privacy:metadata:chat_users'] = 'ثبت می کند که کاربران در کدام اتاق گفتگو قرار دارند';
$string['privacy:metadata:chat_users:firstping'] = 'زمان اولین دسترسی به اتاق گفتگو';
$string['privacy:metadata:chat_users:ip'] = 'IP کاربر';
$string['privacy:metadata:chat_users:lang'] = 'زبان کاربر';
$string['privacy:metadata:chat_users:lastmessageping'] = 'زمان آخرین پیام در این اتاق گفتگو';
$string['privacy:metadata:chat_users:lastping'] = 'زمان آخرین دسترسی به اتاق گفتگو';
$string['privacy:metadata:chat_users:userid'] = 'شناسه کاربر';
$string['privacy:metadata:chat_users:version'] = 'نحوه دسترسی کاربر به گپ (سوکت / پایه / ajax / header_js)';
$string['privacy:metadata:messages'] = 'سابقه ای از پیام های ارسال شده در طی یک جلسه چت';
$string['privacy:metadata:messages:issystem'] = 'این که آیا پیام یک پیام تولید شده توسط سیستم است';
$string['privacy:metadata:messages:message'] = 'پیام';
$string['privacy:metadata:messages:timestamp'] = 'زمان ارسال پیام.';
$string['privacy:metadata:messages:userid'] = 'شناسه کاربری نویسنده پیام';
$string['refreshroom'] = 'تازه‌سازی اتاق';
$string['refreshuserlist'] = 'تازه‌سازی لیست کاربران';
$string['removemessages'] = 'حذف همهٔ پیام‌ها';
$string['repeatdaily'] = 'هر روز در ساعت تعیین شده';
$string['repeatnone'] = 'بدون تکرار - فقط زمان مشخص شده منتشر شود';
$string['repeattimes'] = 'تکرار/انتشار زمان جلسات';
$string['repeatweekly'] = 'هر هفته در ساعت تعیین شده';
$string['saidto'] = 'گفت به';
$string['savemessages'] = 'ذخیرهٔ جلسات گذشته';
$string['search:activity'] = 'اتاق گفتگو - اطلاعات فعالیت';
$string['seesession'] = 'دیدن این جلسه';
$string['send'] = 'ارسال';
$string['sending'] = 'در حال ارسال';
$string['serverhost'] = 'نام کارگزار';
$string['serverip'] = 'IP کارگزار';
$string['servermax'] = 'حداکثر کاربران';
$string['serverport'] = 'پورت کارگزار';
$string['sessions'] = 'جلسات گفتگو';
$string['studentseereports'] = 'همه بتوانند جلسات گذشته را ببینند';
$string['studentseereports_help'] = 'اگر بر روی گزینهٔ خیر تنظیم شود، تنها کاربرانی که مجوز mod/chat:readlog را دارند قادر به دیدن log های چت هستند';
$string['talk'] = 'صحبت';
$string['updatemethod'] = 'روش به‌روزرسانی';
$string['updaterate'] = 'سرعت به‌روزرسانی:';
$string['userlist'] = 'لیست کاربران';
$string['usingchat'] = 'استفاده از اتاق گفتگو';
$string['usingchat_help'] = 'ماژول اتاق گفتگو قابلیت‌هایی برای بهتر شدن گفتگو دارد.

* خندانک‌ها - هر حالت چهره (شکلک) ای که می‌توانید در جاهای دیگر مودل استفاده کنید را اینجا هم می‌توانید استفاده کنید. مثلا :)
* پیوندها - آدرس وب‌سایت‌ها به صورت خودکار تبدیل به پیوند خواهد شد
* اظهار احساسات - برای نشان دادن احساسات می‌توانید یک خط را با "/me" یا ":" شروع کنید. به عنوان مثال اگر نام شما کیم باشد و بنویسید «: می‌خندد!» یا «/me می‌خندد!»، آنگاه همه خواهند دید «کیم می‌خندد!»
* بوق - با کلیک بر روی پیوند «بوق» در کنار نام سایر شرکت کنندگان می‌توانید صدایی را برای آن‌ها بفرستید. یک راه راحت برای فرستادن بوق به همهٔ افراد داخل اتاق ارسال متن "beep all" است.
* HTML - اگر کمی کد HTML بلد باشید، می‌توانید در متن‌هایتان از آن برای درج تصاویر، پخش صداها یا نوشتن به صورت رنگی استفاده کنید';
$string['viewreport'] = 'دیدن جلسات گفتگوی قبلی';
