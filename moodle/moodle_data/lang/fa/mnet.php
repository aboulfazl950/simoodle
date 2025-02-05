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
 * Strings for component 'mnet', language 'fa', version '4.5'.
 *
 * @package     mnet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['RPC_HTTPS_SELF_SIGNED'] = 'HTTPS (امضا شده توسط خود)';
$string['RPC_HTTPS_VERIFIED'] = 'HTTPS (امضا شده)';
$string['RPC_HTTP_PLAINTEXT'] = 'HTTP رمزنگاری نشده';
$string['RPC_HTTP_SELF_SIGNED'] = 'HTTP (امضا شده توسط خود)';
$string['RPC_HTTP_VERIFIED'] = 'HTTP (امضا شده)';
$string['aboutyourhost'] = 'درباره کارگزار شما';
$string['accesslevel'] = 'سطح دسترسی';
$string['addhost'] = 'اضافه کردن میزبان';
$string['addnewhost'] = 'اضافه کردن یک میزبان جدید';
$string['addtoacl'] = 'اضافه کردن به کنترل دسترسی';
$string['allhosts'] = 'همهٔ میزبان‌ها';
$string['allhosts_no_options'] = 'در هنگام مشاهدهٔ چند میزبان، گزینه‌ای موجود نیست';
$string['allow'] = 'مجاز';
$string['applicationtype'] = 'نوع برنامه';
$string['badcert'] = 'این یک گواهینامهٔ معتبر نیست.';
$string['certdetails'] = 'جزئیات گواهینامه';
$string['configmnet'] = 'MNet ارتباط این کارگزار با سایر کارگزارها یا سرویس‌ها را مقدور می‌سازد.';
$string['couldnotgetcert'] = 'گواهینامه‌ای در<br />{$a}<br />پیدا نشد.<br />هاست ممکن است پایین باشد یا به‌درستی پیکربندی نشده باشد.';
$string['couldnotmatchcert'] = 'این با گواهینامه‌ای که در حال حاضر توسط کارگزار وب منتشر شده است مطابقت ندارد.';
$string['databaseerror'] = 'نوشتن جزئیات در پایگاه داده نتوانست انجام شود.';
$string['deletehost'] = 'پاک‌کردن هاست';
$string['deletekeycheck'] = 'آیا کاملا مطمئن هستید که می‌خواهید این کلید را پاک کنید؟';
$string['deleteuserrecord'] = 'لیست کنترل دسترسی SSO: حذف رکورد کاربر «{$a->user}» از «{$a->host}».';
$string['deny'] = 'غیر مجاز';
$string['description'] = 'توصیف';
$string['duplicate_usernames'] = 'ما نتوانستیم در پایگاه دادهٔ شما یک index روی ستون‌های mnethostid و username بسازیم.<br />این وضعیت می‌تواند زمانی رخ دهد که شما دارای <a href="{$a}" target="_blank">نام‌های کاربری تکراری در جدول user</a> باشید.<br />ارتقای شما هنوز هم باید با موفقیت کامل شود. بر روی پیوند بالا کلیک کنید تا دستورالعمل برطرف کردن این خطا در یک صفحهٔ جدید نمایش داده شود. در انتهای ارتقا می‌توانید به آن بپردازید.<br />';
$string['enabled_for_all'] = '(این سرویس برای تمام هاست‌ها فعال شده است).';
$string['error7020'] = 'این خطا معمولا زمانی رخ می‌دهد که سایت بیرونی رکوردی با wwwroot اشتباه (به‌طور مثال http://yoursite.com به‌جای http://www.yoursite.com) برای شما ساخته باشد. باید با مدیر سایت بیرونی تماس بگیرید و wwwroot خود را که در فایل config.php تعیین شده است به اون بدهید و از او بخواهید که رکوردش را برای سایت شما به‌روز کند.';
$string['error7023'] = 'سایت بیرونی سعی کرد با تمام کلیدهایی که در رکوردش برای سایت شما دارد، سایتتان را رمزگشایی کند. تمام تلاش‌ها ناموفق بود. شما ممکن است با رد و بدل کردن دوباره کلید به‌طور دستی با سایت بیرونی بتوانید این مشکل را برطرف کنید. وقوع این وضعیت بسیار نادر است مگر اینکه ارتباط شما با سایت بیرونی برای چند ماه قطع باشد.';
$string['error7024'] = 'شما یک پیغام رمزنگاری نشده به سایت بیرونی فرستادید، ولی سایت بیرونی ارتباط رمزنگاری نشده از سایت شما را نمی‌پذیرد. این حالت خیلی غیر منتظره است؛ در این حالت شما احتمالا باید گزارش خطا بدهید (با فراهم کردن حداکثر اطلاعات ممکن درباره نسخه‌های برنامه‌های مربوطه، ...).';
$string['error7026'] = 'کلیدی که پیام شما با آن امضا شده است با کلیدی که هاست بیرونی از سرور شما می‌شناسد متفاوت است. به‌علاوه، هاست بیرونی سعی کرد کلید فعلی شما را دریافت کند و ناموفق بود. لطفا به‌طور دستی دوباره با هاست بیرونی کلید رد و بدل کنید و دوباره تلاش کنید.';
$string['error709'] = 'سایت بیرونی نتوانست یک کلید SSL از شما دریافت کند.';
$string['expired'] = 'این کلید منقضی شد در';
$string['expires'] = 'مهلت اعتبار';
$string['expireyourkey'] = 'پاک کردن این کلید';
$string['expireyourkeyexplain'] = 'مودل به طور خودکار کلیدهای شما را (به طور پیش‌فرض) هر ۲۸ روز می‌چرخاند ولی شما هر زمانی که بخواهید می‌توانید خودتان <em>به صورت دستی</em> این کلید را منقضی کنید. این کار فقط هنگامی که معتقدید این کلید در خطر قرار گرفته است مفید خواهد بود. به سرعت یک کلید جایگزین به صورت خودکار تولید خواهد شد.<br />پاک کردن این کلید باعث می‌شود که سایر برنامه‌ها دیگر نتوانند با مودل ارتباط برقرار کنند؛ تا زمانی که به صورت دستی با تک تک مدیران آنها تماس بگیرید و کلید جدیدتان را در اختیار آنها قرار دهید.';
$string['exportfields'] = 'فیلدهایی که صادر می‌شوند';
$string['failedaclwrite'] = 'نوشتن روی لیست کنترل دسترسی شبکهٔ مودلی برای کاربر «{$a}» ناموفق بود.';
$string['forbidden-function'] = 'این تابع برای RPC فعال نشده است.';
$string['forcesavechanges'] = 'ذخیرهٔ اجباری تغییرات';
$string['helpnetworksettings'] = 'پیکربندی ارتباط شبکهٔ مودلی';
$string['hidelocal'] = 'پنهان کردن کاربران محلی';
$string['hideremote'] = 'پنهان کردن کاربران خارجی';
$string['hostcoursenotfound'] = 'هاست یا درس پیدا نشدند';
$string['hostexists'] = 'یک رکورد برای میزبانی با نام میزبان وارد شده از قبل وجود دارد (می‌تواند حذف شود). برای ویرایش آن رکورد <a href="{$a}">اینجا کلیک کنید</a>.';
$string['hostlist'] = 'لیست میزبان‌های شبکه شده';
$string['hostname'] = 'نام میزبان';
$string['hostnamehelp'] = 'نام کامل دامنه هاست بیرونی به‌طور مثال www.example.com';
$string['idhelp'] = 'این مقدار به‌طور خودکار نسبت داده شده است و نمی‌توان آن را تغییر داد';
$string['importfields'] = 'فیلدهایی که وارد می‌شوند';
$string['invalidhost'] = 'باید یک شناسهٔ هاست معتبر فراهم کنید';
$string['ipaddress'] = 'آدرس IP';
$string['is_in_range'] = 'آدرس IP <code dir="ltr" style="display:inline-block;direction:ltr">{$a}</code> مربوطه به یک میزبان مورد اعتماد معتبر است.';
$string['last_connect_time'] = 'آخرین زمان اتصال';
$string['leavedefault'] = 'به جای انتخاب‌های بالا از تنظیمات پیش‌فرض استفاده شود';
$string['loginlinkmnetuser'] = '<br />اگر شما کاربر خارجی شبکهٔ مودلی هستید و می‌توانید <a href="{$a}">اینجا آدرس ایمیل خود را تایید کنید</a>، می‌توانید به صفحهٔ لاگین خود هدایت شوید.<br />';
$string['managemnetpeers'] = 'مدیریت همتاها';
$string['method'] = 'متد';
$string['methodsavailableonhost'] = 'متدهای موجود در {$a}';
$string['mnetdisabled'] = 'شبکهٔ مودلی <strong>غیر فعال</strong> است.';
$string['mnetidproviderdesc'] = 'اگر بتوانید آدرس ایمیل درستی که با حساب کاربری‌ای که قبلا سعی کردید با آن وارد شوید را وارد کنید، می‌توانید از این امکان برای به دست آوردن پیوندی استفاده کنید که به کمک آن می‌توانید وارد سایت شوید.';
$string['mnetidprovidermsg'] = 'باید بتوانید در تامین‌کنندهٔ {$a} خود لاگین کنید.';
$string['mnetidprovidernotfound'] = 'متأسفیم، ولی اطلاعات بیشتری نتوانست پیدا شود.';
$string['mnetpeers'] = 'همتاها';
$string['mnetservices'] = 'سرویس‌ها';
$string['mnetsettings'] = 'تنظیمات شبکهٔ مودلی';
$string['net'] = 'شبکه‌سازی';
$string['networksettings'] = 'تنظیمات شبکه';
$string['noaclentries'] = 'لیست کنترل دسترسی SSO خالی است';
$string['noaddressforhost'] = 'متأسفیم، ولی نام میزبان (<span dir="ltr" style="display:inline-block;direction:ltr">{$a}</span>) نتوانست حل و فصل شود!';
$string['nocurl'] = 'کتابخانه PHP cURL نصب نیست';
$string['nomodifyacl'] = 'شما اجازهٔ تغییر دادن لیست کنترل دسترسی شبکهٔ مودلی را ندارید.';
$string['nopubkey'] = 'مشکلی در دریافت کلید عمومی وجود داشت.<br />شاید هاست به شبکهٔ مودلی اجازه نمی‌دهد یا اینکه کلید معتبر نیست.';
$string['nosuchmodule'] = 'تابع به اشتباه آدرس‌دهی شده است و نمی‌تواند پیدا شود. لطفا از قالب mod/modulename/lib/functionname استفاده کنید.';
$string['nosuchpublickey'] = 'دریافت کلید عمومی برای تایید امضا مقدور نبود.';
$string['notBASE64'] = 'این عبارت در قالب کدگذاری base64 نیست. نمی‌تواند یک کلید معتبر باشد.';
$string['notPEM'] = 'این کلید در قالب PEM نیست. کار نخواهد کرد.';
$string['not_in_range'] = 'آدرس IP <code dir="ltr" style="display:inline-block;direction:ltr">{$a}</code> مربوطه به یک میزبان مورد اعتماد معتبر نیست.';
$string['off'] = 'غیر فعال';
$string['on'] = 'فعال';
$string['options'] = 'گزینه‌ها';
$string['peerprofilefielddesc'] = 'اینجا می‌توانید تنظیمات عمومی را بازنویسی کنید که به هنگام ساخته شدن کاربران جدید کدام فیلدهای پروفایل فرستاده شوند و وارد شوند';
$string['postrequired'] = 'عملیات حذف نیازمند درخواست POST است.';
$string['profileexportfields'] = 'فیلدهای ارسالی';
$string['profilefielddesc'] = 'در این قسمت می‌توانید لیست فیلدهایی از پروفایل‌ها که در هنگام ساخته شدن یا به‌روز شدن حساب‌های کاربری از طریق شبکهٔ مودلی ارسال یا دریافت می‌شوند را پیکربندی کنید. این تنظیم را برای تک تک همتاها در شبکهٔ مودلی نیز می‌توانید بازنویسی کنید. توجه داشته باشید که این فیلدها همیشه ارسال می‌شوند و اختیاری نیستند: {$a}';
$string['profilefields'] = 'فیلدهای پروفایل';
$string['profileimportfields'] = 'فیلدهای ورودی';
$string['publickey'] = 'کلید عمومی';
$string['publish'] = 'انتشار';
$string['reallydeleteserver'] = 'آیا مطمئن هستید که می‌خواهید کارگزار را حذف کنید؟';
$string['receivedwarnings'] = 'اخطارهای زیر دریافت شدند';
$string['recordnoexists'] = 'رکورد وجود ندارد.';
$string['registerallhosts'] = 'ثبت همهٔ میزبان‌ها (حالت بی قاعده)';
$string['registerallhostsexplain'] = 'می‌توانید انتخاب کنید که همهٔ میزبان‌هایی که می‌خواهند به شما متصل شوند به طور خودکار ثبت شوند. یعنی رکوردی در لیست میزبان‌های شما یعنی برای هر سایتی که (سایتی که از MNet استفاده کند) به شما متصل شود و کلید عمومی شما را درخواست کند، رکوردی در لیست میزبان‌های شما ظاهر خواهد شد.<br />در پایین این اختیار را دارید که سرویس‌ها را برای «همهٔ میزبان‌ها» پیکربندی کنید و با فعال کردن بعضی از سرویس‌ها در آنجا، می‌توانید سرویس‌ها را بدون تبعیض برای هر کارگزار راه دوری فراهم کنید.';
$string['registerhostsoff'] = 'ثبت همهٔ میزبان‌ها در حال حاضر <b>غیر فعال</b> است';
$string['registerhostson'] = 'ثبت همهٔ میزبان‌ها در حال حاضر <b>فعال</b> است';
$string['remotehost'] = 'میزبان راه دور';
$string['reviewhostdetails'] = 'مرور جزئیات میزبان';
$string['service'] = 'نام سرویس';
$string['serviceid'] = 'شناسهٔ سرویس';
$string['servicesavailableonhost'] = 'سرویس‌های موجود در {$a}';
$string['serviceswesubscribeto'] = 'سرویس‌هایی از {$a} که در آن آبونه هستید.';
$string['settings'] = 'تنظیمات';
$string['showlocal'] = 'کاربران محلی شما';
$string['showremote'] = 'نمایش کاربران خارجی';
$string['ssl_acl_allow'] = 'لیست کنترل دسترسی SSO: کاربر {$a->user} از {$a->host} مجاز است';
$string['ssl_acl_deny'] = 'لیست کنترل دسترسی SSO: کاربر {$a->user} از {$a->host} غیر مجاز است';
$string['ssoaccesscontrol'] = 'کنترل دسترسی SSO';
$string['ssoacldescr'] = 'از این صفحه برای اعطا/دریغ کردن دسترسی به کاربران مورد نظر از میزبان‌های راه دور شبکه مودلی استفاهده کنید. این تنظیم زمانی که در حال ارائه سرویس‌های SSO به کاربران راه دور باشید می‌تواند عمل کند. برای کنترل کردن توانایی کاربران <em>داخلی</em> به وارد شدن و گشت و گذار در سایر میزبان‌های شبکهٔ مودلی، از سیستم نقش‌ها برای دادن توانایی <em>mnetlogintoremote</em> به آنها استفاده کنید.';
$string['subscribe'] = 'اشتراک';
$string['system'] = 'سیستم';
$string['testclient'] = 'کلاینت آزمایش شبکه مودلی';
$string['testtrustedhosts'] = 'بررسی یک آدرس';
$string['testtrustedhostsexplain'] = 'یک آدرس IP را وارد کنید تا ببینید که آیا یک میزبان مورد اعتماد است یا خیر.';
$string['trustedhosts'] = 'میزبان‌های XML-RPC';
$string['trustedhostsexplain'] = '<p>مکانیزم میزبان‌های مورد اعتماد به ماشین‌های خاص اجازهٔ اجرای procedure ها (از طریق XML-RPC) از هر قسمتی از API مودل را می‌دهد. اسکریپت‌ها با استفاده از این روش می‌توانند رفتار مودل را کنترل کنند. در نتیجه فعال بودن از ویژگی ممکن است خیلی خطرناک باشد. اگر تردید دارید، بگذارید غیر فعال باشد.</p>
<p><strong>این قابلیت برای هیچکدام از ویژگی‌های استاندارد شبکهٔ مودلی مورد نیاز نیست!</strong> تنها در صورتی که می‌دانید چه می‌کنید این ویژگی را فعال کنید.</p>
<p>برای فعال کردن این ویژگی، لیستی از آدرس‌های IP یا شبکه‌ها را در خط‌های مجزا وارد کنید. چند مثال:</p>
میزبان محلی شما:<br /> 127.0.0.1<br />میزبان محلی شما (همراه با یک بلوک شبکه):<br />127.0.0.1/32<br />
فقط میزبانی که آدرس IP اش 192.168.0.7 است:<br />192.168.0.7/32<br />هر میزبانی که آدرس IP اش بین 192.168.0.1 و 192.168.0.255 باشد:<br />192.168.0.0/24<br />هر میزبانی با هر شرایطی:<br />192.168.0.0/0<br />بدیهی است که مثال آخر به عنوان یک تنظیم مورد توصیه <strong>نیست</strong>.';
$string['turnitoff'] = 'غیر فعال شود';
$string['turniton'] = 'فعال شود';
$string['version'] = 'نسخه';
$string['warning'] = 'اخطار';
$string['wrong-ip'] = 'آدرس IP ما با آنچه که ما سوابق داریم مطابقت ندارد.';
