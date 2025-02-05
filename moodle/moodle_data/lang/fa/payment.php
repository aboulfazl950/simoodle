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
 * Strings for component 'payment', language 'fa', version '4.5'.
 *
 * @package     payment
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountarchived'] = 'بایگانی‌شده';
$string['accountconfignote'] = 'درگاه‌های پرداخت مربوط به این حساب به‌طور جداگانه پیکربندی خواهند شد';
$string['accountdeleteconfirm'] = 'اگر این حساب دارای پرداخت‌هایی باشد بایگانی خواهد شد، در غیر این صورت پیکربندی‌اش به‌طور دائم حذف خواهد شد. آیا مطمئن هستید که می‌خواهید ادامه دهید؟';
$string['accountidnumber'] = 'کد شناسایی';
$string['accountidnumber_help'] = 'کد شناسایی تنها برای متصل کردن حساب به سیستم‌های بیرونی است و در هیچ جای سایت نمایش داده نخواهد شد. اگر حساب دارای یک کد رسمی است می‌توان آن را وارد کرد، در غیر این صورت می‌توان این فیلد را خالی گذاشت.';
$string['accountname'] = 'نام حساب';
$string['accountname_help'] = 'حساب با این نام برای اساتید یا مدیرانی که پرداخت‌ها را پیکربندی می‌کنند (به‌طور مثال در پلاگین ثبت‌نام با پرداخت) قابل شناسایی خواهد بود.';
$string['accountnotavailable'] = 'موجود نیست';
$string['createaccount'] = 'ساختن حساب پرداخت';
$string['deleteorarchive'] = 'حذف یا بایگانی';
$string['eventaccountcreated'] = 'حساب پرداخت ساخته شد';
$string['eventaccountdeleted'] = 'حساب پرداخت پاک شد';
$string['eventaccountupdated'] = 'حساب پرداخت به‌روز شد';
$string['feeincludesurcharge'] = '{$a->fee} (شامل {$a->surcharge}٪ اضافه‌بها برای انتخاب این درگاه پرداخت)';
$string['gatewaycannotbeenabled'] = 'پیکربندی درگاه پرداخت کامل نیست، بنابراین نمی‌تواند فعال شود.';
$string['gatewaydisabled'] = 'غیرفعال';
$string['gatewayenabled'] = 'فعال';
$string['gatewaynotfound'] = 'درگاه پیدا نشد';
$string['gotomanageplugins'] = 'در صفحهٔ {$a} می‌توانید درگاه‌های پرداخت را فعال و غیرفعال کنید و برایشان اضافه‌بها تعیین کنید.';
$string['gotopaymentaccounts'] = 'در صفحهٔ {$a} با استفاده از هر کدام از این درگاه‌ها می‌توانید حساب‌های پرداخت متعددی بسازید';
$string['hidearchived'] = 'پنهان‌کردن موارد بایگانی‌شده';
$string['noaccountsavilable'] = 'هیچ حساب پرداختی موجود نیست.';
$string['nocurrencysupported'] = 'هیچگونه پرداخت به هیچ واحد پولی قابل انجام نیست. لطفا مطمئن شوید که حداقل یک درگاه پرداخت فعال باشد.';
$string['nogateway'] = 'هیچ درگاه پرداخت قابل استفاده‌ای وجود ندارد.';
$string['nogatewayselected'] = 'ابتدا باید بک درگاه را انتخاب کنید.';
$string['paymentaccount'] = 'حساب پرداخت';
$string['paymentaccounts'] = 'حساب‌های پرداخت';
$string['paymentaccountsexplained'] = 'یک یا چند حساب پرداخت برای سایت بسازید. هر حساب پیکربندی مربوط به خود را برای درگاه‌های پرداخت موجود دارد. کسی که پرداخت‌ها را در سایت پیکربندی می‌کند (به‌طور مثال، پرداخت مربوط به ثبت‌نام در درس) می‌تواند از بین حساب‌های موجود انتخاب کند.';
$string['payments'] = 'پرداخت‌ها';
$string['privacy:metadata:database:payments'] = 'اطلاعات مربوط به پرداخت‌ها.';
$string['privacy:metadata:database:payments:amount'] = 'مقدار پرداخت.';
$string['privacy:metadata:database:payments:currency'] = 'واحد پول پرداخت.';
$string['privacy:metadata:database:payments:gateway'] = 'درگاهی که برای پرداخت استفاده شده است.';
$string['privacy:metadata:database:payments:timecreated'] = 'زمانی که این پرداخت صورت گرفت.';
$string['privacy:metadata:database:payments:timemodified'] = 'زمانی که این رکورد پرداخت برای آخرین‌بار به‌روز شد.';
$string['privacy:metadata:database:payments:userid'] = 'کاربری که پرداخت را انجام داد.';
$string['restoreaccount'] = 'بازیابی';
$string['selectpaymenttype'] = 'شیوه پرداخت را انتخاب کنید';
$string['showarchived'] = 'نمایش موارد بایگانی‌شده';
$string['supportedcurrencies'] = 'واحد پول‌های تحت پشتیبانی';
$string['surcharge'] = 'اضافه‌بها (درصد)';
$string['surcharge_desc'] = 'اضافه‌بها میزان درصدی است که اگر کاربر از این درگاه پرداخت برای پرداخت استفاده کند شارژ خواهد شد.';
