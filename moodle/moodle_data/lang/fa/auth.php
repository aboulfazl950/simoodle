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
 * Strings for component 'auth', language 'fa', version '4.5'.
 *
 * @package     auth
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actauthhdr'] = 'پلاگین‌های شناسایی فعال';
$string['allowaccountssameemail'] = 'مجاز بودن حساب‌های کاربری با آدرس پست الکترونیکی مشترک';
$string['allowaccountssameemail_desc'] = 'اگر فعال باشد،‌چند حساب کاربری می‌توانند یک آدرس پست الکترونیکی مشترک داشته باشند. این کار ممکن است منجر به مشکلات امنیتی یا حفظ حریم خصوصی شود؛ به‌طور مثال در هنگام ارسال نامه الکترونیکی مربوط به تغییر رمز ورود.';
$string['alternatelogin'] = 'اگر آدرس صفحه‌ای را در این قسمت وارد کنید، به عنوان صفحهٔ ورود به سیستم برای این سایت استفاده خواهد شد. در این صفحه باید فرمی وجود داشته باشد که action آن برابر با «<strong>{$a}</strong>» بوده و شامل گزینه‌های <strong>username</strong> و <strong>password</strong> باشد.<br />دقت کنید که آدرس اشتباهی را وارد نکرده باشید. زیرا در این صورت دیگر نمی‌توانید به عنوان یک کاربر وارد سایت شوید.<br />برای استفاده از صفحهٔ پیش‌فرض ورود به سایت، این قسمت را خالی بگذارید.';
$string['alternateloginurl'] = 'آدرس ورود جایگزین';
$string['auth_changepasswordhelp'] = 'راهنمای تغییر رمز عبور';
$string['auth_changepasswordhelp_expl'] = 'نمایش راهنمایی فراموش کردن رمز ورود به کاربرانی که رمز {$a} خود را فراموش کرده‌اند. این راهنمایی یا در کنار و یا به جای <strong>آدرس تغییر رمز ورود</strong> یا تغییر رمز داخلی مودل نمایش داده خواهد شد.';
$string['auth_changepasswordurl'] = 'آدرس تغییر رمز عبور';
$string['auth_changepasswordurl_expl'] = 'آدرسی که کاربرانی که رمز {$a} خود را فراموش کرده‌اند باید به آن هدایت شوند را تعیین کنید. تنظیم «استفاده از صفحهٔ استاندارد تغییر رمز ورود» را روی <strong>خیر</strong> قرار دهید.';
$string['auth_changingemailaddress'] = 'شما درخواست تغییر آدرس پست الکترونیکی از {$a->oldemail} به {$a->newemail} را داده‌اید. به دلایل امنیتی و برای اطمینان از اینکه آدرس جدید متعلق به شما است، یک نامهٔ الکترونیکی به آدرس جدید می‌فرستیم. به محض اینکه آدرس وبی که در متن نامه برای شما فرستاده شده است را باز کنید، آدرس پست الکترونیکی شما تایید خواهد شد.';
$string['auth_common_settings'] = 'تنظیمات معمول';
$string['auth_data_mapping'] = 'نگاشت داده‌ها';
$string['auth_fieldlock'] = 'وضعیت قفل';
$string['auth_fieldlock_expl'] = '<p><b>وضعیت قفل:</b> اگر فعال باشد، از ویرایش مستقیم فیلد توسط کاربران و مدیرها جلوگیری خواهد شد. از این حالت هنگامی که مقدار فیلد مورد نظر را در خارج از مودل و در سیستم شناسایی خارجی مدیریت می‌کنید استفاده کنید.</p>';
$string['auth_fieldlockfield'] = 'وضعیت قفل ({$a})';
$string['auth_fieldlocks'] = 'قفل کردن مشخصه‌های کاربران';
$string['auth_fieldlocks_help'] = '<p>می‌توانید مشخصه‌های کاربران را قفل کنید. این کار برای سایت‌هایی مفید است که در آنها اطلاعات کاربران به صورت دستی با ویرایش رکوردهای کاربران یا ارسال فایل (با استفاده از امکان «ارسال کاربران») توسط مدیران نگهداری می‌شود. اگر مشخصه‌هایی را قفل می‌کنید که توسط مودل مورد نیازند، مطمئن شوید که آن اطلاعات را هنگام ایجاد حساب کاربران فراهم کنید. در غیر این صورت حساب‌ها غیر قابل استفاده خواهند بود.</p><p>جهت پیشگیری از بروز این مشکل، تنظیم حالت قفل روی «اگر خالی است باز باشد» را مد نظر قرار دهید.</p>';
$string['auth_fieldmapping'] = 'نگاشت داده ({$a})';
$string['auth_invalidnewemailkey'] = 'خطا: چنانچه سعی دارید تغییر آدرس پست الکترونیکی را تایید کنید، ممکن است در کپی کردن آدرسی که برایتان فرستاده‌ایم اشتباه کرده باشید. لطفا دوباره آدرس را کپی کرده و مجددا تلاش کنید.';
$string['auth_multiplehosts'] = 'می‌توان چند میزبان یا آدرس را مشخص کرد (مثلاً host1.com;host2.com;host3.com) یا (مثلاً xxx.xxx.xxx.xxx;xxx.xxx.xxx.xxx)';
$string['auth_notconfigured'] = 'شیوهٔ شناسایی {$a} پیکربندی نشده است.';
$string['auth_outofnewemailupdateattempts'] = 'شما از حداکثر دفعات مجاز برای به‌روزرسانی آدرس پست الکترونیکی خود تجاوز کردید. درخواست به‌روزرسانی شما لغو شد.';
$string['auth_passwordisexpired'] = 'رمز عبور شما منقضی شده است. لطفا همین الان آن را تغییر دهید.';
$string['auth_passwordwillexpire'] = 'رمز عبور شما بعد از {$a} روز منقضی خواهد شد. آیا می‌خواهید رمز عبور خود را همین الان عوض کنید؟';
$string['auth_remove_delete'] = 'حذف کامل اطلاعات داخلی';
$string['auth_remove_keep'] = 'حفظ اطلاعات داخلی';
$string['auth_remove_suspend'] = 'تعلیق کاربر';
$string['auth_remove_user'] = 'تعیین کنید هنگامی که کاربری در پایگاه دادهٔ خارجی حذف شده باشد، به هنگام همگام‌سازی با حساب کاربری داخلی چه شود. تنها کاربران تعلیق شده می‌توانند در صورت ظهور مجدد کاربر در پایگاه دادهٔ خارجی به صورت خودکار احیا شوند.';
$string['auth_remove_user_key'] = 'کاربران خارجی حذف شده';
$string['auth_sync_script'] = 'همگام‌سازی حساب‌های کاربری';
$string['auth_sync_suspended'] = 'هنگامی که فعال باشد، از مشخصهٔ تعلیق‌شده برای به‌روزکردن وضعیت تعلیق حساب کاربری محلی استفاده خواهد شد.';
$string['auth_sync_suspended_key'] = 'همگام‌سازی وضعیت تعلیق کاربر محلی';
$string['auth_updatelocal'] = 'به‌روزرسانی دادهٔ محلی';
$string['auth_updatelocal_expl'] = '<p><b>به‌روزرسانی دادهٔ محلی:</b> اگر فعال باشد، هر بار که کاربر وارد سایت می‌شود یا همگام‌سازی کاربران صورت می‌گیرد، فیلد (از روی شناسایی خارجی) به‌روز خواهد شد. فیلدهایی که تعیین شده‌اند تا به صورت محلی به‌روز شوند باید قفل باشند.</p>';
$string['auth_updatelocalfield'] = 'به‌روزرسانی دادهٔ محلی ({$a})';
$string['auth_updateremote'] = 'به‌روزرسانی دادهٔ خارجی';
$string['auth_updateremote_expl'] = '<p><b>به‌روزرسانی دادهٔ خارجی:</b> اگر فعال باشد، اطلاعات سیستم شناسایی خارجی در هر بار که رکورد کاربری به‌روز می‌شود، به‌روز خواهد شد. فیلدها نباید قفل باشند تا بتوانند ویرایش شوند.</p>';
$string['auth_updateremote_ldap'] = '<p><b>توجه:</b> به‌روز کردن داده‌های خارجی LDAP نیازمند این است که مقدار binddn و bindpw را برابر با کاربر متعلقی که مجوز ویرایش تمام رکوردهای کاربران را داشته باشد قرار دهید. در حال حاضر مشخصه‌های چند مقداری نگهداری نمی‌شوند و مقادیر اضافی در هنگام به‌روزرسانی حذف می‌شوند.</p>';
$string['auth_updateremotefield'] = 'به‌روزرسانی دادهٔ خارجی ({$a})';
$string['auth_user_create'] = 'فعال بودن ایجاد کاربر';
$string['auth_user_creation'] = 'کاربران جدید (ناشناس) می‌توانند در منبع شناسایی بیرونی حساب کاربری ایجاد کنند و از طریق پست الکترونیکی آن را تایید کنند. اگر این قابلیت را فعال می‌کنید، به خاطر داشته باشید که گزینه‌های مخصوص ماژول برای ساختن کاربر را نیز پیکربندی کنید.';
$string['auth_usernameexists'] = 'نام کاربری انتخاب شده هم‌اکنون وجود دارد. لطفا یک نام کاربری جدید انتخاب کنید.';
$string['auth_usernotexist'] = 'به‌روزرسانی کاربری که وجود ندارد ممکن نیست: {$a}';
$string['authenticationoptions'] = 'گزینه‌های شناسایی';
$string['authinstructions'] = 'در این قسمت می‌توانید دستورالعمل‌هایی برای کاربران خود فراهم کنید تا بدانند از کدام نام کاربری و رمزعبور باید استفاده کنند. متنی که در این قسمت وارد می‌کنید در صفحهٔ ورود به سایت نمایش داده خواهد شد. اگر این قسمت را خالی بگذارید هیچ دستورالعملی نمایش داده نخواهد شد.';
$string['authloginviaemail'] = 'مجاز بودن ورود به سایت با استفاده از آدرس پست الکترونیکی';
$string['authloginviaemail_desc'] = 'به کاربران اجازه می‌دهد تا بتوانند هم از نام کاربری و هم از آدرس پست الکترونیکی (در صورت یکتا بودن) خود برای ورود به سایت استفاده کنند.';
$string['auto_add_remote_users'] = 'اضافه و حذف شدن خودکار کاربران';
$string['changepassword'] = 'آدرس تغییر رمز عبور';
$string['changepasswordhelp'] = 'آدرس صفحهٔ بازیابی رمز ورود فراموش‌شده، که از طریق یک نامهٔ الکترونیکی به کاربران ارسال خواهد شد. توجه کنید درصورتی‌که در تنظیمات عمومی شناسایی، مقداری را برای «آدرس صفحهٔ بازیابی رمز ورود» تعیین کرده باشید، آنگاه این تنظیم تاثیری نخواهد داشت.';
$string['chooseauthmethod'] = 'انتخاب یک شیوهٔ شناسایی';
$string['chooseauthmethod_help'] = 'این گزینه روشی که در هنگام ورود کاربر به سیستم برای شناسائی او استفاده می‌شود را تعیین می‌کند. گزینهٔ انتخابی باید یکی از پلاگین‌های شناسائی فعال باشد، در غیر این صورت دیگر کاربر قادر به ورود به سیستم نخواهد بود. اگر می‌خواهید جلوی ورود کاربر به سیستم گرفته شود، گزینهٔ «ورود ممنوع» را انتخاب کنید.';
$string['createpassword'] = 'تولید خودکار رمز و مطلع‌کردن کاربر';
$string['createpasswordifneeded'] = 'در صورت نیاز رمز ورود ساخته و با پست الکترونیکی ارسال شود';
$string['emailchangecancel'] = 'لغو تغییر آدرس پست الکترونیکی';
$string['emailchangepending'] = 'در انتظار تغییر. پیوندی که برایتان به آدرس {$a->preference_newemail} فرستاده شده است را باز کنید.';
$string['emailnowexists'] = 'آدرس پست الکترونیکی‌ای که سعی کرده بودید به حساب کاربری خود نسبت دهید، از بعد از درخواست اولیه شما به یک کاربر دیگر منسوب شده است. بنابراین درخواست تغییر آدرس پست الکترونیکی شما لغو شد. البته می‌توانید با استفاده از یک آدرس متفاوت دوباره تلاش کنید.';
$string['emailupdate'] = 'به‌روز کردن آدرس پست الکترونیکی';
$string['emailupdatemessage'] = 'کاربر گرامی: {$a->fullname}،

شما درخواست تغییر آدرس پست الکترونیکی مربوط به حساب کاربری خود در {$a->site} را کرده‌اید. برای تایید این تغییر، لطفا آدرس زیر را در مرورگرتان باز کنید.

چنانچه سؤالی دارید لطفا از طریق آدرس {$a->supportemaill} با پشتیبانی تماس بگیرید.

{$a->url}';
$string['emailupdatesuccess'] = 'آدرس پست الکترونیکی کاربر <em>{$a->fullname}</em> با موفقیت به <em>{$a->email}</em> تغییر کرد.';
$string['emailupdatetitle'] = 'تایید به‌روز کردن آدرس پست الکترونیکی در {$a->site}';
$string['errormaxconsecutiveidentchars'] = 'رمزها می‌توانند حداکثر دارای {$a} کاراکتر یکسان متوالی باشند.';
$string['errorminpassworddigits'] = 'حداقل {$a} حرف از رمزهای ورود باید از اعداد تشکیل شده باشد.';
$string['errorminpasswordlength'] = 'طول رمزهای ورود باید حداقل {$a} حرف باشد.';
$string['errorminpasswordlower'] = 'رمزهای ورود باید شامل حداقل {$a} حرف کوچک لاتین باشند.';
$string['errorminpasswordnonalphanum'] = 'رمزهای ورود باید شامل حداقل {$a} حرف غیر الفبایی و غیر عددی (مانند *، -، یا #) باشند.';
$string['errorminpasswordupper'] = 'رمزهای ورود باید شامل حداقل {$a} حرف بزرگ لاتین باشند.';
$string['errorpasswordreused'] = 'این رمز قبلا استفاده شده است و نمی‌تواند دوباره استفاده شود';
$string['errorpasswordupdate'] = 'خطا در به‌روزرسانی رمز عبور، رمز عبور تغییر نیافت';
$string['eventuserloggedin'] = 'کاربر وارد شده است';
$string['eventuserloggedinas'] = 'کاربر در قالب کاربر دیگری وارد شد';
$string['eventuserloginfailed'] = 'ورود کاربر ناموفق بود';
$string['forcechangepassword'] = 'اجبار تغییر رمز ورود';
$string['forcechangepassword_help'] = 'اجبار کردن کاربران به تغیر رمز عبورشان در ورود به سایت بعدی';
$string['forcechangepasswordfirst_help'] = 'اجبار کاربران به تغییر رمز ورودشان در اولین دفعهٔ ورود به مودل.';
$string['forgottenpassword'] = 'اگر آدرس صفحه‌ای را در این قسمت وارد کنید، به‌عنوان صفحهٔ بازیابی رمز عبور برای این سایت استفاده خواهد شد. این قسمت برای سایت‌هایی مفید خواهد بود که رمزهای ورود در جایی خارج از مودل مدیریت می‌شوند. برای استفاده از صفحهٔ بازیابی رمز عبور پیش‌فرض، این قسمت را خالی بگذارید.';
$string['forgottenpasswordurl'] = 'آدرس صفحهٔ بازیابی رمز ورود';
$string['guestloginbutton'] = 'دکمهٔ ورود به‌عنوان مهمان';
$string['incorrectpleasetryagain'] = 'اشتباه. لطقاً مجدداً تلاش نمائید.';
$string['infilefield'] = 'حتماً باید در فایل باشد';
$string['informminpassworddigits'] = 'حداقل {$a} رقم';
$string['informminpasswordlength'] = 'حداقل {$a} حرف';
$string['informminpasswordlower'] = 'حداقل {$a} حرف کوچک لاتین';
$string['informminpasswordnonalphanum'] = 'حداقل {$a} حرف غیر الفبایی و غیر عددی مانند *، -، یا #';
$string['informminpasswordreuselimit'] = 'رمزها بعد از {$a} بار تغییر می‌توانند دوباره استفاده شوند';
$string['informminpasswordupper'] = 'حداقل {$a} حرف بزرگ لاتین';
$string['informpasswordpolicy'] = 'رمز ورود باید شامل {$a} باشد';
$string['instructions'] = 'دستورالعمل';
$string['internal'] = 'داخلی';
$string['limitconcurrentlogins'] = 'محدود کردن ورود هم‌زمان';
$string['limitconcurrentlogins_desc'] = 'در صورت فعال بودن، تعداد ورودهای هم‌زمان با یک نام کاربری محدود خواهد شد. در صورت رسیدن به محدوده تعیین‌شده، قدیمی‌ترین نشست خاتمه داده خواهد شد. لطفا توجه داشته باشید که کاربران ممکن است تمام کارهای ذخیره نشده خود را از دست بدهند. این تنظیم با پلاگین‌های ورود یکپارچه (single sign-on) سازگار نیست.';
$string['locked'] = 'بسته';
$string['md5'] = 'درهم ریخته توسط MD5';
$string['nopasswordchange'] = 'رمز عبور نمی‌تواند تغییر کند';
$string['nopasswordchangeforced'] = 'شما نمی‌توانید بدون تغییر رمز عبور ادامه دهید اما هیچ صفحه‌ای برای عوض کردن آن وجود ندارد. لطفا با مدیریت سایت تماس بگیرید.';
$string['noprofileedit'] = 'مشخصات فردی نمی‌تواند ویرایش شود';
$string['ntlmsso_attempting'] = 'در حال تلاش برای ورود یکپارچه از طریق NTLM...';
$string['ntlmsso_failed'] = 'ورود خودکار ناموفق بود، تلاش برای استفاده از صفحهٔ معمول ورود به سایت...';
$string['ntlmsso_isdisabled'] = 'NTLM SSO غیرفعال است.';
$string['passwordhandling'] = 'مدیریت فیلد رمز ورود';
$string['plaintext'] = 'متن ساده';
$string['pluginnotenabled'] = 'پلاگین شناسایی «{$a}» فعال نیست.';
$string['pluginnotinstalled'] = 'پلاگین شناسایی «{$a}» نصب نیست.';
$string['potentialidps'] = 'ورود با استفاده از حساب شما روی:';
$string['recaptcha'] = 'reCAPTCHA';
$string['recaptcha_help'] = 'CAPTCHA برای جلوگیری از سوءاستفاده از جانب برنامه‌های خودکار است. کافی است کلمات را به‌ترتیب و با یک حرف فاصله در کادر وارد کنید.

اگر از درست بودن کلمات مطمئن نیستید، می‌توانید یک CAPTCHA ی دیگر یا یک CAPTCHA ی صوتی بگیرید.';
$string['recaptcha_link'] = 'auth/email';
$string['security_question'] = 'سؤال امنیتی';
$string['selfregistration'] = 'عضویت آزاد';
$string['selfregistration_help'] = 'اگر یک پلاگین شناسائی (مانند عضویت آزاد بر اساس پست الکترونیک) انتخاب شده باشد، آنگاه مراجعه کنندگان می‌توانند خودشان را به عضویت سایت در آورند و برای خود حساب کاربری ایجاد کنند. این کار به ارسال کنندگان هرزنامه امکان ایجاد حساب کاربری به منظور قرار دادن مطالب هرز در تالارهای گفتگو، وبلاگ‌ها و غیره را می‌دهد. برای پیش‌گیری از این خطر، قابلیت عضویت آزاد باید غیر فعال و یا اینکه با تنظیم <em>دامنه‌های مجاز پست الکترونیک</em> محدود شود.';
$string['settingmigrationmismatch'] = 'در حین اصلاح نام تنظیمات پلاگین‌ها، عدم تطابق در مقادیر تشخیص داده شد! در پلاگین شناسایی «{$a->plugin}» تنظیم «{$a->setting}» تحت نام سنتی بر روی «{$a->legacy}» و تحت نام جدید بر روی «{$a->current}» قرار گرفته بود. مقدار جدیدتر به‌عنوان تنظیم فعلی انتخاب شد ولی شما باید بررسی کنید و مطمئن شوید که مقدار درست استفاده شده باشد.';
$string['sha1'] = 'درهم ریخته توسط SHA-1';
$string['showguestlogin'] = 'می‌توانید تعیین کنید که دکمهٔ ورود به عنوان مهمان در صفحهٔ ورود به سایت نشان داده شود یا خیر.';
$string['stdchangepassword'] = 'استفاده از صفحهٔ استاندارد برای تغییر رمز';
$string['stdchangepassword_expl'] = 'اگر سیستم شناسایی خارجی اجازهٔ عوض شدن رمز از طریق مودل را می‌دهد، این گزینه را روی بله قرار دهید. این تنظیم بر «آدرس صفحهٔ تغییر رمز ورود» برتری دارد.';
$string['stdchangepassword_explldap'] = '<b>توجه:</b> اگر کارگزار LDAP محلی نیست، توصیه می‌شود که از طریق یک تونل رمزگذاری شده SSL (<span dir="ltr" style="display:inline-block;direction:ltr">ldaps://</span>) از LDAP استفاده کنید.';
$string['suspended'] = 'حساب کاربری تعلیق‌شده';
$string['suspended_help'] = 'حساب‌های کاربری تعلیق شده نمی‌توانند وارد سایت شوند یا از وب‌سرویس‌ها استفاده کنند، و پیام‌های ارسالی به آنها نیز نادیده گرفته می‌شود.';
$string['testsettings'] = 'آزمایش تنظیمات';
$string['testsettingsheading'] = 'آزمایش تنظیمات شناسایی - {$a}';
$string['unlocked'] = 'باز';
$string['unlockedifempty'] = 'اگر خالی است باز باشد';
$string['update_never'] = 'هیچ وقت';
$string['update_oncreate'] = 'هنگام ایجاد';
$string['update_onlogin'] = 'در هر بار ورود';
$string['update_onupdate'] = 'هنگام به‌روزرسانی';
$string['user_activatenotsupportusertype'] = 'شناسایی: تابع user_activate در ldap از نوع کاربر انتخاب‌شده ({$a}) پشتیبانی نمی‌کند';
$string['user_disablenotsupportusertype'] = 'شناسایی: تابع user_disable در ldap از نوع کاربر انتخاب‌شده پشتیبانی نمی‌کند (..هنوز)';
$string['username'] = 'نام کاربری';
$string['username_help'] = 'لطفا در جریان باشید که برخی از پلاگین‌های شناسایی به شما اجازه نمی‌دهند که نام کاربری را تغییر دهید.';
