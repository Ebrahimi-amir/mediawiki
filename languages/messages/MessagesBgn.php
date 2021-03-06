<?php
/** Western Balochi (روچ کپتین بلوچی)
 *
 * To improve a translation please visit https://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Ibrahim khashrowdi
 * @author Mjbmr
 */

$fallback = 'fa';
$rtl = true;

$namespaceNames = array(
	NS_MEDIA            => 'رسانگ',
	NS_SPECIAL          => 'ۆێک',
	NS_TALK             => 'گپ',
	NS_USER             => 'کارمرزۆک',
	NS_USER_TALK        => 'کارمرزۆک_ئی_گپ',
	NS_PROJECT_TALK     => '$1_ئی_گپ',
	NS_FILE             => 'ورق',
	NS_FILE_TALK        => 'ورق_ئی_گپ',
	NS_MEDIAWIKI        => 'میڈیاویکی',
	NS_MEDIAWIKI_TALK   => 'میڈیاویکی_ئی_گپ',
	NS_TEMPLATE         => 'تراشوان',
	NS_TEMPLATE_TALK    => 'تراشوان_ئی_گپ',
	NS_HELP             => 'کومک',
	NS_HELP_TALK        => 'کومک_ئی_گپ',
	NS_CATEGORY         => 'تهر',
	NS_CATEGORY_TALK    => 'تهر_ئی_گپ',
);

$namespaceAliases = array(
	'میڈیا' => NS_MEDIA,
	'اکس' => NS_FILE,
	'اکس_ئی_گپ' => NS_FILE_TALK,
);

$specialPageAliases = array(
	'Activeusers'               => array( 'پئالین_کارمرزوکان' ),
	'Allmessages'               => array( 'موچین_پیامان' ),
	'AllMyUploads'              => array( 'نی_موچین_ایرگیج_ئآن', 'نی_موچین_وّرک_ئآن' ),
	'Allpages'                  => array( 'موچین_تاکدیمان' ),
	'ApiHelp'                   => array( 'ای_پی_آی_کومک' ),
	'Ancientpages'              => array( 'کوهنگین_تاکدیمان' ),
	'Badtitle'                  => array( 'خرابین_ئینوان' ),
	'Blankpage'                 => array( 'خالین_دیم' ),
	'Block'                     => array( 'بستین', 'آی_پی_بستین', 'کارمرزوکی_بستین' ),
	'Booksources'               => array( 'کتاب_ئی_بُن' ),
	'BrokenRedirects'           => array( 'خرابین_تغیرمسیر' ),
	'Categories'                => array( 'تهرئان' ),
	'ChangeEmail'               => array( 'ایمیل_ئی_گردینتین' ),
	'ChangePassword'            => array( 'چیهرگال_ئی_پاک_کورتین', 'چیهرگال_ئی_ٹگل' ),
	'ComparePages'              => array( 'تاکدیمانی_موقایسه_کورتین' ),
	'Confirmemail'              => array( 'ایمیل_ئی_تائید_کورتین' ),
	'Contributions'             => array( 'شراکت_ئان' ),
	'CreateAccount'             => array( 'کارمرزوکین_هیساب_ئی_جۆڑ_کورتین' ),
	'Deadendpages'              => array( 'بن_بست_ئین_تاکدیمان' ),
	'DeletedContributions'      => array( 'پاک_بوته_ئین_شراکت_ئان' ),
	'Diff'                      => array( 'پرک' ),
	'DoubleRedirects'           => array( 'دوئین_تغیرمسیرئان' ),
	'EditWatchlist'             => array( 'پێ_گیری_ئی_لیستی_دستکاری_کورتین' ),
	'Emailuser'                 => array( 'په_کارمرزوکا_ایمیل_دیم_داتین' ),
	'ExpandTemplates'           => array( 'تراشوانی_پراخ_کورتین' ),
	'Export'                    => array( 'دیمی_ڈنا_بورتین' ),
	'Fewestrevisions'           => array( 'کمتیرین_نخسه' ),
	'FileDuplicateSearch'       => array( 'گشتین_په_تکرارین_وّرک_ئا' ),
	'Filepath'                  => array( 'وّرک_ئی_مسیر' ),
	'Import'                    => array( 'ورق_ئانی_ریتین' ),
	'Invalidateemail'           => array( 'ایمیلی_باتل_کورتین' ),
	'JavaScriptTest'            => array( 'جاوا_سکریپت_ئی_تست' ),
	'BlockList'                 => array( 'بسته_بوته_ئآنی_لیست', 'آی_پی_نشانی_بستینی_لیست' ),
	'LinkSearch'                => array( 'گشتین_په_لینکا' ),
	'Listadmins'                => array( 'مدیرئانی_لیست' ),
	'Listbots'                  => array( 'روباٹ_ئانی_لیست' ),
	'Listfiles'                 => array( 'پایل_ئانی_لیست', 'اکس_ئانی_لیست' ),
	'Listgrouprights'           => array( 'کارمرزوکین_گروپانی_اختیاران' ),
	'Listredirects'             => array( 'تغیرمسیرئانی_لیست' ),
	'ListDuplicatedFiles'       => array( 'تکرارین_پایلانی_لیست' ),
	'Listusers'                 => array( 'کارمرزوکانی_لیست' ),
	'Lockdb'                    => array( 'مالوماتین_بانکی_قُلپ_کورتین' ),
	'Log'                       => array( 'سیاهه_ئان' ),
	'Lonelypages'               => array( 'آتیمین_دیمان' ),
	'Longpages'                 => array( 'بُرزین_دیمان' ),
	'MediaStatistics'           => array( 'رسانگ_ئانی_سرجم' ),
	'MergeHistory'              => array( 'تاریخی_ادغام_کورتین' ),
	'MIMEsearch'                => array( 'MIME_ئی_گشتین' ),
	'Mostcategories'            => array( 'بازتیرین_تهر' ),
	'Mostimages'                => array( 'بازتیرین_اکس' ),
	'Mostinterwikis'            => array( 'بازتیرین_مانجین_ویکی' ),
	'Mostlinked'                => array( 'بازتیرین_لینک' ),
	'Mostlinkedcategories'      => array( 'تهر_گۆ_بازتیرین_لینکا' ),
	'Mostlinkedtemplates'       => array( 'تراشوان_گۆ_بازتیرین_لینکا' ),
	'Mostrevisions'             => array( 'بازتیرین_نخسه' ),
	'Movepage'                  => array( 'دیمی_لڈّّینتین' ),
	'Mycontributions'           => array( 'نی_شراکت_ئان' ),
	'MyLanguage'                => array( 'نی_زبان_ئان' ),
	'Mypage'                    => array( 'نی_ورق' ),
	'Mytalk'                    => array( 'نی_گپ' ),
	'Myuploads'                 => array( 'نی_بُرز_بوته_ئین_پایلان' ),
	'Newimages'                 => array( 'نۆکین_اکس' ),
	'Newpages'                  => array( 'نۆکین_وَرق_ئان' ),
	'PagesWithProp'             => array( 'وّرق_ئانی_خاسی_ئت_گۆ' ),
	'PageLanguage'              => array( 'وّرق_ئی_زبان' ),
	'PasswordReset'             => array( 'چیهرگالی_نادینتین' ),
	'PermanentLink'             => array( 'دایمین_لینک' ),
	'Popularpages'              => array( 'مشهورین_وّرق_ئان' ),
	'Preferences'               => array( 'تنزیمات' ),
	'Prefixindex'               => array( 'دیمۆندین_نمایگ' ),
	'Protectedpages'            => array( 'قُلپ_بوته_ئین_ورق_ئان' ),
	'Protectedtitles'           => array( 'قُلپ_بوته_ئین_ئینوان_ئان' ),
	'Randompage'                => array( 'تسادوپین_وّرق' ),
	'RandomInCategory'          => array( 'تسادوپی_بئ_تهری_تا' ),
	'Randomredirect'            => array( 'تسادوپین_تغیرمیسر' ),
	'Recentchanges'             => array( 'آخیرئین_تغیران' ),
	'Recentchangeslinked'       => array( 'مربوتین_تغیران' ),
	'Redirect'                  => array( 'تغیرمسیر' ),
	'ResetTokens'               => array( 'نشانگ_ئانی_پدا_نادینتین' ),
	'Revisiondelete'            => array( 'نخسه_ئی_پاک_کورتین' ),
	'RunJobs'                   => array( 'کارێ_کورتین' ),
	'Search'                    => array( 'گشتین' ),
	'Shortpages'                => array( 'گۆنڈین_تاکدیمان' ),
	'Specialpages'              => array( 'خاسین_تاکدیمان' ),
	'Statistics'                => array( 'سرجم' ),
	'Tags'                      => array( 'برچسپ_ئان', 'تگ_ئان' ),
	'TrackingCategories'        => array( 'ودی_کنۆکین_تهرئان' ),
	'Unblock'                   => array( 'پاچ_کورتین' ),
	'Uncategorizedcategories'   => array( 'دسته_بندی_نه_بوته_ئین_تهر_ئان' ),
	'Uncategorizedimages'       => array( 'دسته_بندی_نه_بوته_ئین_اکس_ئان' ),
	'Uncategorizedpages'        => array( 'دسته_بندی_نه_بوته_ئین_تاکدیمان' ),
	'Uncategorizedtemplates'    => array( 'دسته_بندی_نه_بوته_ئین_تراشوانان' ),
	'Undelete'                  => array( 'پاک_بوته_ئین_وّرق_ئی_بجا_آورتین' ),
	'Unlockdb'                  => array( 'مالوماتین_بانکی_قُلپی_پاچ_کورتین' ),
	'Unusedcategories'          => array( 'ایستیپاده_نه_بوته_ئین_تهر_ئان' ),
	'Unusedimages'              => array( 'ایستیپاده_نه_بوته_ئین_اکس_ئان' ),
	'Unusedtemplates'           => array( 'ایستیپاده_نه_بوه_ئین_تراشوانان' ),
	'Unwatchedpages'            => array( 'پدگیری_نه_بوته_ئین_وّرق_ئان' ),
	'Upload'                    => array( 'پایلی_ئی_بُرز_کورتین' ),
	'UploadStash'               => array( 'بَزین_بُرز_کورتین' ),
	'Userlogin'                 => array( 'داخل_بوتین_بئ_سایٹ_ئی_تا' ),
	'Userlogout'                => array( 'دَر_بوتین_شه_سایٹ_ئا' ),
	'Userrights'                => array( 'کارمرزوک_ئی_اختیار_ئان' ),
	'Version'                   => array( 'نخسه' ),
	'Wantedcategories'          => array( 'زَرورتین_تهر_ئان' ),
	'Wantedfiles'               => array( 'زَرورتین_اکس_ئان' ),
	'Wantedpages'               => array( 'زَرورتین_وّرق_ئان' ),
	'Wantedtemplates'           => array( 'زَرورتین_تراشوانان' ),
	'Watchlist'                 => array( 'پدگیر_ئی_لیست' ),
	'Whatlinkshere'             => array( 'لینک_په_ای_دیما' ),
	'Withoutinterwiki'          => array( 'بئ_شه_مانیجین_ویکی_ئا' ),
);

$linkTrail = "/^([اآأبپتثجچحخدڈذرڑزژسشصضطظعغفقکگلمنوۆؤھهئیێ‌]+)(.*)$/sDu";
