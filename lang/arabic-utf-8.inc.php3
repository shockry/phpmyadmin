<?php
/* $Id$ */

/**
 * Original translation to Arabic by Fisal <fisal77 at hotmail.com>
 * Update by Tarik kallida <kallida at caramail.com>
 * Final Update on Februray 4, 2002 by Ossama Khayat <ossamak at nht.com.kw>
 */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'rtl'; // ('ltr' for left to right, 'rtl' for right to left)
$left_font_family = 'Tahoma, verdana, arial, helvetica, sans-serif';
$right_font_family = '"Windows UI", Tahoma, verdana, arial, helvetica, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('بايت', 'كيلوبايت', 'ميجابايت', 'غيغابايت');

$day_of_week = array('الأحد', 'الإثنين', 'الثلاثاء', 'الأربعاء', 'الخميس', 'الجمعة', 'السبت');
$month = array('يناير', 'فبراير', 'مارس', 'أبريل', 'مايو', 'يونيو', 'يوليو', 'أغسطس', 'سبتمبر', 'أكتوبر', 'نوفمبر', 'ديسمبر');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d %B %Y الساعة %H:%M';

$strAccessDenied = 'غير مسموح';
$strAction = 'العملية';
$strAddDeleteColumn = 'إضافه/حذف عمود حقل';
$strAddDeleteRow = 'إضافه/حذف صف سجل';
$strAddNewField = 'إضافة حقل جديد';
$strAddPriv = 'إضافة إمتياز جديد';
$strAddPrivMessage = 'لقد أضفت إمتياز جديد.';
$strAddSearchConditions = 'أضف شروط البحث (جسم من الفقره "where" clause):';
$strAddToIndex = 'إضافه كفهرس &nbsp;%s&nbsp;صف(ـوف)';
$strAddUser = 'أضف مستخدم جديد';
$strAddUserMessage = 'لقد أضفت مستخدم جديد.';
$strAffectedRows = 'صفوف مؤثره:';
$strAfter = 'بعد %s';
$strAfterInsertBack = 'الرجوع إلى الصفحة السابقة';
$strAfterInsertNewInsert = 'إدخال تسجيل جديد';
$strAll = 'الكل';
$strAlterOrderBy = 'تعديل ترتيب الجدول بـ';
$strAnalyzeTable = 'تحليل الجدول';
$strAnd = 'و';
$strAnIndex = 'لقد أُضيف الفهرس في %s';
$strAny = 'أي';
$strAnyColumn = 'أي عمود';
$strAnyDatabase = 'أي قاعدة بيانات';
$strAnyHost = 'أي مزود';
$strAnyTable = 'أي جدول';
$strAnyUser = 'أي مستخدم';
$strAPrimaryKey = 'لقد أُضيف المفتاح الأساسي في %s';
$strAscending = 'تصاعدياً';
$strAtBeginningOfTable = 'في بداية الجدول';
$strAtEndOfTable = 'في نهاية الجدول';
$strAttr = 'الخواص';

$strBack = 'رجوع';
$strBinary = 'ثنائي';
$strBinaryDoNotEdit = 'ثنائي - لاتحرره';
$strBookmarkDeleted = 'لقد حُذفت العلامه المرجعيه.';
$strBookmarkLabel = 'علامه';
$strBookmarkQuery = 'علامه مرجعيه SQL-إستعلام';
$strBookmarkThis = 'إجعل علامه مرجعيه SQL-إستعلام';
$strBookmarkView = 'عرض فقط';
$strBrowse = 'إستعراض';
$strBzip = '"bzipped"';

$strCantLoadMySQL = 'لايمكن تحميل إمتداد MySQL,<br />الرجاء فحص إعدادات PHP.';
$strCantRenameIdxToPrimary = 'لايمكن تغيير إسم الفهرس إلى الأساسي!';
$strCardinality = 'Cardinality';
$strCarriage = 'إرجاع الحموله: \\r';
$strChange = 'تغيير';
$strChangePassword = 'تغيير كلمة السر';
$strCheckAll = 'إختر الكل';
$strCheckDbPriv = 'فحص إمتياز قاعدة البيانات';
$strCheckTable = 'التحقق من الجدول';
$strColumn = 'عمود';
$strColumnNames = 'إسم العمود';
$strCompleteInserts = 'الإدخال لقد إكتمل';
$strConfirm = 'هل تريد حقاً أن تفعل ذلك؟';
$strCookiesRequired = 'يجب تفعيل دعم الكوكيز في هذه المرحلة.';
$strCopyTable = 'نسخ الجدول إلى';
$strCopyTableOK = 'الجدول %s لقد تم نسخه إلى %s.';
$strCreate = 'تكوين';
$strCreateIndex = 'تصميم فهرسه على&nbsp;%s&nbsp;عمود';
$strCreateIndexTopic = 'تصميم فهرسه جديده';
$strCreateNewDatabase = 'تكوين قاعدة بيانات جديدة';
$strCreateNewTable = 'تكوين جدول جديد في قاعدة البيانات %s';
$strCriteria = 'المعايير';

$strData = 'بيانات';
$strDatabase = 'قاعدة البيانات ';
$strDatabaseHasBeenDropped = 'قاعدة بيانات %s محذوفه.';
$strDatabases = 'قاعدة بيانات';
$strDatabasesStats = 'إحصائيات قواعد البيانات';
$strDatabaseWildcard = 'قاعدة بيانات:';
$strDataOnly = 'بيانات فقط';
$strDefault = 'إفتراضي';
$strDelete = 'حذف';
$strDeleted = 'لقد تم حذف الصف';
$strDeletedRows = 'الصفوف المحذوفه:';
$strDeleteFailed = 'الحذف خاطئ!';
$strDeleteUserMessage = 'لقد حذفت المستخدم %s.';
$strDescending = 'تنازلياً';
$strDisplay = 'عرض';
$strDisplayOrder = 'ترتيب العرض:';
$strDoAQuery = 'تجعل "إستعلام بواسطة المثال" (wildcard: "%")';
$strDocu = 'مستندات وثائقيه';
$strDoYouReally = 'هل تريد حقاً تنفيذ';
$strDrop = 'حذف';
$strDropDB = 'حذف قاعدة بيانات %s';
$strDropTable = 'حذف جدول';
$strDumpingData = 'إرجاع أو إستيراد بيانات الجدول';
$strDynamic = 'ديناميكي';

$strEdit = 'تحرير';
$strEditPrivileges = 'تحرير الإمتيازات';
$strEffective = 'فعال';
$strEmpty = 'إفراغ محتوى';
$strEmptyResultSet = 'MySQL قام بإرجاع نتيجة إعداد فارغه (مثلاً. صف صفري).';
$strEnd = 'نهايه';
$strEnglishPrivileges = ' ملاحظه: إسم الإمتياز لـMySQL يظهر ويُقرأ باللغه الإنجليزيه فقط ';
$strError = 'خطأ';
$strExtendedInserts = 'إدخال مُدد';
$strExtra = 'إضافي';

$strField = 'الحقل';
$strFieldHasBeenDropped = 'حقل محذوف %s';
$strFields = ' عدد الحقول';
$strFieldsEmpty = ' تعداد الحقل فارغ! ';
$strFieldsEnclosedBy = 'حقل مضمن بـ';
$strFieldsEscapedBy = 'حقل مُتجاهل بـ';
$strFieldsTerminatedBy = 'حقل مفصول بـ';
$strFixed = 'مثبت';
$strFlushTable = 'إعادة تحميل الجدول ("FLUSH")';
$strFormat = 'صيغه';
$strFormEmpty = 'يوجد قيمه مفقوده بالنموذج !';
$strFullText = 'نصوص كامله';
$strFunction = 'دالة';

$strGenTime = 'أنشئ في';
$strGo = '&nbsp;تنفيــذ&nbsp;';
$strGrants = 'Grants';
$strGzip = '"gzipped"';

$strHasBeenAltered = 'لقد عُدِل.';
$strHasBeenCreated = 'لقد تكون.';
$strHome = 'الصفحة الرئيسية';
$strHomepageOfficial = 'الصفحة الرئيسية الرسمية لـ phpMyAdmin';
$strHomepageSourceforge = 'Sourceforge phpMyAdmin صفحة التنزيل';
$strHost = 'المزود';
$strHostEmpty = 'إسم المستضيف فارغ!';

$strIdxFulltext = 'النص كاملاً';
$strIfYouWish = 'إذا كنت ترغب في أن تحمل بعض أعمدة الجدول فقط, حدد بالفاصله التي تفصل قائمة الحقل.';
$strIgnore = 'تجاهل';
$strIndex = 'فهرست';
$strIndexes = 'فهارس';
$strIndexHasBeenDropped = 'فهرسه محذوفه %s';
$strIndexName = 'إسم الفهرس&nbsp;:';
$strIndexType = 'نوع الفهرس&nbsp;:';
$strInsert = 'إدخال';
$strInsertAsNewRow = 'إدخال كتسجيل جديد';
$strInsertedRows = 'صفوف مدخله:';
$strInsertNewRow = 'إضافة تسجيل جديد';
$strInsertTextfiles = 'إدخال ملف نصي في الجدول';
$strInstructions = 'الأوامر';
$strInUse = 'قيد الإستعمال';
$strInvalidName = '"%s" كلمه محجوزه, لايمكنك إستخدامها كإسم قاعدة بيانات/جدول/حقل.';

$strKeepPass = 'لاتغير كلمة السر';
$strKeyname = 'إسم المفتاح';
$strKill = 'إبطال';

$strLength = 'الطول';
$strLengthSet = 'الطول/القيمه*';
$strLimitNumRows = 'رقم السجلات لكل صفحه';
$strLineFeed = 'خطوط معرفه: \\n';
$strLines = 'خطوط';
$strLinesTerminatedBy = 'خطوط مفصوله بـ';
$strLocationTextfile = 'مكان ملف نصي';
$strLogin = 'دخول';
$strLogout = 'تسجيل خروج';
$strLogPassword = 'كلمة السر:';
$strLogUsername = 'إسم المُستخدم:';

$strModifications = 'تمت التعديلات';
$strModify = 'تعديل';
$strModifyIndexTopic = 'تعديل الفهرسه';
$strMoveTable = 'نقل جدول إلى (قاعدة بيانات<b>.</b>جدول):';
$strMoveTableOK = '%s جدول تم نقله إلى %s.';
$strMySQLReloaded = 'تم إعادة تحميل MySQL بنجاح.';
$strMySQLSaid = 'MySQL قال: ';
$strMySQLServerProcess = 'MySQL %pma_s1%  على المزود %pma_s2% -  المستخدم : %pma_s3%';
$strMySQLShowProcess = 'عرض العمليات';
$strMySQLShowStatus = 'عرض حالة المزود MySQL';
$strMySQLShowVars ='عرض متغيرات المزود MySQL';

$strName = 'الإسم';
$strNext = 'التالي';
$strNo = 'لا';
$strNoDatabases = 'لايوجد قواعد بيانات';
$strNoDropDatabases = 'معطل "حذف قاعدة بيانات"الأمر ';
$strNoFrames = 'phpMyAdmin أكثر تفهماً مع مستعرض <b>الإطارات</b>.';
$strNoIndex = 'فهرس غير معرف!';
$strNoIndexPartsDefined = 'إجزاء الفهرسه غير معرفه!';
$strNoModification = 'لا تغييرات';
$strNone = 'لاشئ';
$strNoPassword = 'لا كلمة سر';
$strNoPrivileges = 'إمتياز غير موجود';
$strNoQuery = 'ليست إستعلام SQL!';
$strNoRights = 'ليس لديك الحقوق الكافيه بأن تكون هنا الآن!';
$strNoTablesFound = 'لايوجد جداول متوفره في قاعدة البيانات هذه!.';
$strNotNumber = 'هذا ليس رقم!';
$strNotValidNumber = ' هذا ليس عدد صف صحيح!';
$strNoUsersFound = 'المستخدم(ـين) لم يتم إيجادهم.';
$strNull = 'خالي';

$strOftenQuotation = 'غالباً علامات الإقتباس. إختياري يعني بأن الحقول  char و varchar ترفق بـ " ".';
$strOptimizeTable = 'ضغط الجدول';
$strOptionalControls = 'إختياري. التحكم في كيفية كتابة أو قراءة الأحرف أو الجمل الخاصه.';
$strOptionally = 'إختياري';
$strOr = 'أو';
$strOverhead = 'الفوقي';

$strPartialText = 'نصوص جزئيه';
$strPassword = 'كلمة السر';
$strPasswordEmpty = 'كلمة السر فارغة !';
$strPasswordNotSame = 'كلمتا السر غير متشابهتان !';
$strPHPVersion = ' PHP إصدارة';
$strPmaDocumentation = 'مستندات وثائقيه لـ phpMyAdmin (بالإنجليزية)';
$strPmaUriError = 'المتغير <span dir="ltr"><tt>$cfg[\'PmaAbsoluteUri\']</tt></span> يجب تعديله في ملف الكوفيك !';
$strPos1 = 'بداية';
$strPrevious = 'سابق';
$strPrimary = 'أساسي';
$strPrimaryKey = 'مفتاح أساسي';
$strPrimaryKeyHasBeenDropped = 'لقد تم حذف المفتاح الأساسي';
$strPrimaryKeyName = 'إسم المفتاح الأساسي يجب أن يكون أساسي... PRIMARY!';
$strPrimaryKeyWarning = '("الأساسي" <b>يجب</b> يجب أن يكون الأسم <b>وأيضاً فقط</b> المفتاح الأساسي!)';
$strPrintView = 'عرض نسخة للطباعة';
$strPrivileges = 'الإمتيازات';
$strProperties = 'خصائص';

$strQBE = 'إستعلام بواسطة مثال';
$strQBEDel = 'Del';
$strQBEIns = 'Ins';
$strQueryOnDb = 'في قاعدة البيانات SQL-إستعلام <b>%s</b>:';

$strRecords = 'التسجيلات';
$strReferentialIntegrity = 'تحديد referential integrity:';
$strReloadFailed = ' إعادة تحميل خاطئهMySQL.';
$strReloadMySQL = 'إعادة تحميل MySQL';
$strRememberReload = 'تذكير لإعادة تحميل الخادم.';
$strRenameTable = 'تغيير إسم جدول إلى';
$strRenameTableOK = 'تم تغيير إسمهم إلى %s  جدول%s';
$strRepairTable = 'إصلاح الجدول';
$strReplace = 'إستبدال';
$strReplaceTable = 'إستبدال بيانات الجدول بالملف';
$strReset = 'إلغاء';
$strReType = 'أعد كتابه';
$strRevoke = 'إبطال';
$strRevokeGrant = 'إبطال Grant';
$strRevokeGrantMessage = 'لقد أبطلت إمتياز Grant لـ %s';
$strRevokeMessage = 'لقد أبطلت الأمتيازات لـ %s';
$strRevokePriv = 'إبطال إمتيازات';
$strRowLength = 'طول الصف';
$strRows = 'صفوف';
$strRowsFrom = 'صفوف تبدأ من';
$strRowSize = ' مقاس الصف ';
$strRowsModeHorizontal = 'أفقي';
$strRowsModeOptions = ' %s و إعادة الرؤوس بعد %s حقل';
$strRowsModeVertical = 'عمودي';
$strRowsStatistic = 'إحصائيات';
$strRunning = ' على المزود %s';
$strRunQuery = 'إرسال الإستعلام';
$strRunSQLQuery = 'تنفيذ إستعلام/إستعلامات SQL على قاعدة بيانات %s';

$strSave = 'حفــظ';
$strSelect = 'إختيار';
$strSelectADb = 'إختر قاعدة بيانات من القائمة';
$strSelectAll = 'تحديد الكل';
$strSelectFields = 'إختيار حقول (على الأقل واحد):';
$strSelectNumRows = 'في الإستعلام';
$strSend = 'حفظ كملف';
$strServerChoice = 'إختيار الخادم';
$strServerVersion = 'إصدارة المزود';
$strSetEnumVal = 'إذا كان نوع الحقل هو "enum" أو "set", الرجاء إدخال القيم بإستخدام هذا التنسيق: \'a\',\'b\',\'c\'...<br />إذا كنت تحتاج بأن تضع علامة الشرطه المائله لليسار ("\") أو علامة الإقتباس الفرديه ("\'") فيما بين تلك القيم, إجعلها كشرطه مائله لليسار (مثلاً \'\\\\xyz\' أو \'a\\\'b\').';
$strShow = 'عرض';
$strShowAll = 'شاهد الكل';
$strShowCols = 'شاهد الأعمده';
$strShowingRecords = 'مشاهدة السجلات ';
$strShowPHPInfo = 'عرض المعلومات المتعلقة ب  PHP';
$strShowTables = 'شاهد الجدول';
$strShowThisQuery = ' عرض هذا الإستعلام هنا مرة أخرى ';
$strSingly = '(فردي)';
$strSize = 'الحجم';
$strSort = 'تصنيف';
$strSpaceUsage = 'المساحة المستغلة';
$strSQLQuery = 'إستعلام-SQL';
$strStatement = 'أوامر';
$strStrucCSV = 'بيانات CSV';
$strStrucData = 'البنية والبيانات';
$strStrucDrop = ' إضافة \'حذف جدول إذا كان موجودا\' في البداية';
$strStrucExcelCSV = 'بيانات CSV لبرنامج  Ms Excel';
$strStrucOnly = 'البنية فقط';
$strSubmit = 'إرسال';
$strSuccess = 'الخاص بك تم تنفيذه بنجاح SQL-إستعلام';
$strSum = 'المجموع';

$strTable = 'الجدول ';
$strTableComments = 'تعليقات على الجدول';
$strTableEmpty = 'إسم الجدول فارغ!';
$strTableHasBeenDropped = 'جدول %s حُذفت';
$strTableHasBeenEmptied = 'جدول %s أُفرغت محتوياتها';
$strTableHasBeenFlushed = 'لقد تم إعادة تحميل الجدول %s  بنجاح';
$strTableMaintenance = 'صيانة الجدول';
$strTables = '%s  جدول (جداول)';
$strTableStructure = 'بنية الجدول';
$strTableType = 'نوع الجدول';
$strTextAreaLength = ' بسبب طوله,<br /> فمن المحتمل أن هذا الحقل غير قابل للتحرير ';
$strTheContent = 'لقد تم إدخال محتويات ملفك.';
$strTheContents = 'لقد تم إستبدال محتويات الجدول المحدد للصفوف بالمفتاح المميز أو الأساسي المماثل لهما بمحتويات الملف.';
$strTheTerminator = 'فاصل الحقول.';
$strTotal = 'المجموع';
$strType = 'النوع';

$strUncheckAll = 'إلغاء تحديد الكل';
$strUnique = 'مميز';
$strUnselectAll = 'إلغاء تحديد الكل';
$strUpdatePrivMessage = 'لقد جددت وحدثت الإمتيازات لـ %s.';
$strUpdateProfile = 'تجديد العرض الجانبي:';
$strUpdateProfileMessage = 'لقد تم تجديد العرض الجانبي.';
$strUpdateQuery = 'تجديد إستعلام';
$strUsage = 'المساحة';
$strUseBackquotes = 'حماية أسماء الجداول و الحقول ب "`" ';
$strUser = 'المستخدم';
$strUserEmpty = 'إسم المستخدم فارغ!';
$strUserName = 'إسم المستخدم';
$strUsers = 'المستخدمين';
$strUseTables = 'إستخدم الجدول';

$strValue = 'القيمه';
$strViewDump = 'عرض بنية الجدول ';
$strViewDumpDB = 'عرض بنية قاعدة البيانات';

$strWelcome = 'أهلاً بك في %s';
$strWithChecked = ': على المحدد';
$strWrongUser = 'خطأ إسم المستخدم/كلمة السر. الدخول ممنوع.';

$strYes = 'نعم';

$strZip = '"zipped" "مضغوط"';

$strAllTableSameWidth = 'أظهر كل الجدوال بنفس العرض؟';

$strBeginCut = 'بدء القصّ';  
$strBeginRaw = 'بدء بيانات أصليّة';  

$strCantLoadRecodeIconv = 'لم يمكن تحميل iconv أو إعادة تشفير الإمتداد المطلوب لتحويل شيفرة الأحرف، الرجاء إعداد PHP ليسمح باستخدام هذه الإمتدادات أو عطل عمل التحويل في phpMyAdmin.';  
$strCantUseRecodeIconv = 'لا يمكن استخدام iconv ولا libiconv ولا عملية recode_string في حين يحدد الامتداد أنه محمّل. تأكّد من إعدادات PHP.';  
$strChangeDisplay = 'اختر الحقل لإظهاره';  
$strCharsetOfFile = 'شيفرة أحرف الملف:'; 
$strChoosePage = 'رجاءً اختر صفحة لتعديلها';  
$strColComFeat = 'إظهار تعليقات العمود';  
$strComments = 'تعليقات';  
$strConfigFileError = 'لم يستطع phpMyAdmin أن يقرأ ملف إعداداتك!<br />قد يكون هذا بسبب أن PHP وجد خطأ في الإعراب فيه أو أنه لا يستطيع أن يجد الملف.<br />رجاءً اقرأ الملف بشكل مباشر باستخدام الوصلة أدناه واقرأ رسالة الخطأ الناتجة. في معظم الحالات قد تكون علامة التنصيص أو علامة الفاصلة المنقوطة ناقصة في مكان ما.<br />إن حصلت على صفحة فارغة، فكلّ شيء على ما يرام.';
$strConfigureTableCoord = 'رجاء إعداد الموقع للجدول %s';  
$strCreatePage = 'أنشئ صفحة جديدة';  
$strCreatePdfFeat = 'إنشاء ملفات PDF';  

$strDisabled = 'معطّل';  
$strDisplayFeat = 'إظهار المزايا';  
$strDisplayPDF = 'إظهار بناء ملف PDF';  
$strDumpXRows = 'إحدف %s سطر بدءً من السطر %s.'; 

$strEditPDFPages = 'عدّل صفحات PDF';  
$strEnabled = 'ممكّن';  
$strEndCut = 'انتهاء القصّ';  
$strEndRaw = 'انتهاء البيانات الأصلية';  
$strExplain = 'إشرح SQL';  
$strExport = 'تصدير';  
$strExportToXML = 'تصدير بتنسيق XML'; 

$strGenBy = 'أنشئ بواسطة'; 
$strGeneralRelationFeat = 'المزايا العامّة للرابط';  

$strHaveToShow = 'عليك اختيار عمود واحد على الأقل للعرض';  

$strLinkNotFound = 'لم يمكن إيجاد الوصلة';  
$strLinksTo = 'مرتبط بـ';  

$strMissingBracket = 'هناك قوس ناقص';  
$strMySQLCharset = 'شيفرة أحرف MySQL';  

$strNoDescription = 'بدون وصف';  
$strNoExplain = 'تخطّي شرح SQL';  
$strNoPhp = 'بدون شيفرة PHP';  
$strNotOK = 'ليس صالحاً';  
$strNotSet = 'الجدول <b>%s</b> غير موجود أو محدد في %s';  
$strNoValidateSQL = 'تخطّي التأكّد من SQL';  
$strNumSearchResultsInTable = '%s مطابقة في الجدول <i>%s</i>';
$strNumSearchResultsTotal = '<b>المجموع:</b> <i>%s</i>مطابقة';

$strOK = 'موافق';  
$strOperations = 'عمليّات';  
$strOptions = 'خيارات';  

$strPageNumber = 'صفحة رقم:';  
$strPdfDbSchema = 'بناء قاعدة البيانات "%s" - الصفحة %s';  
$strPdfInvalidPageNum = 'رقم صفحة PDF غير معرّف!';  
$strPdfInvalidTblName = 'الجدول "%s" غير موجود!';  
$strPdfNoTables = 'لا يوجد جداول';  
$strPhp = 'أنشئ شيفرة PHP';  

$strRelationNotWorking = 'تمّ تعطيل المزايا الإضافية للعمل بالجداول المترابطة. لمعرفة السبب إضغط %sهنا%s.';  
$strRelationView = 'عرض الروابط';  

$strScaleFactorSmall = 'نسبة الحجم المحددة صغيرة جدا لملائمة المخطط في صفحة واحدة.';  
$strSearch = 'إبحث';
$strSearchFormTitle = 'إبحث في قاعدة البيانات';
$strSearchInTables = 'داخل الجدول)الجداول(:';
$strSearchNeedle = 'الكلمات أو القيم المطلوب البحث عنها (wildcard: "%"):';
$strSearchOption1 = 'على الأقل أحد الكلمات';
$strSearchOption2 = 'كل الكلمات';
$strSearchOption3 = 'الجملة بالضبط';
$strSearchOption4 = 'كصيغة مطابقة';
$strSearchResultsFor = 'إبحث في النتائج عن "<i>%s</i>" %s:';
$strSearchType = 'إبحث:';
$strSelectTables = 'إختر الجداول';  
$strShowColor = 'أظهر اللون';  
$strShowGrid = 'أظهر تخطيط الجدول';  
$strShowTableDimension = 'إظهار أبعاد الجداول';  
$strSplitWordsWithSpace = 'الكلمات مفصولة بحرف مسافة (" ").';
$strSQL = 'SQL'; 
$strSQLParserBugMessage = 'هناك احتمال أنك عثرت على خلل في مدققّ SQL. رجاءً اختبر استعلامك بدقّة، وتأكّد من أن علامات التنصيص صحيحة ومتطابقة. بعض أسباب الإخفاق الأخرى قد تكون أنك تحاول تحميل ملف يحتوي على بيانات غير نصّية خارج منطقة التنصيص. يمكنك أيضاً تجربة استعلامك بواسطة سطر أوامر MySQL. قد تساعدك رسالة خطأ خادم MySQL أدناه، إن كانت هناك واحدة، على تشخيص المشكلة. إن بقي هناك مشاكل أو إن أخفق المدقّق في حين نجح استخدام سطر الأوامر، رجاءً قلّص حجم استعلامك لاستعلام واحد يسبب المشكلة، وقم بإرسال تقرير خلل مع جزء البيانات في منطقة القصّ أدناه:';  
$strSQLParserUserError = 'يبدو أن هناك خطأ في استعلام SQL. سوف تساعدك رسالة الخطأ من خادم MySQL أدناه في تشخيص المشكلة، إن كان هناك واحدة،.';  
$strSQLResult = 'ناتج استعلام SQL'; 
$strSQPBugInvalidIdentifer = 'معرّف غير صالح';  
$strSQPBugUnclosedQuote = 'علامة تنصيص غير مغلقة';  
$strSQPBugUnknownPunctuation = 'نص تنقيط غير معروف';  
$strStructPropose = 'اقترح بناء الجدول';  
$strStructure = 'بناء';  

$strValidateSQL = 'التحقق من استعلام SQL';  

$strInsecureMySQL = 'Your configuration file contains settings (root with no password) that correspond to the default MySQL privileged account. Your MySQL server is running with this default, is open to intrusion, and you really should fix this security hole.';  
$strWebServerUploadDirectory = 'دليل تحميل الملفات على خادم الشبكة';  
$strWebServerUploadDirectoryError = 'The directory you set for upload work cannot be reached';  
$strValidatorError = 'The SQL validator could not be initialized. Please check if you have installed the necessary php extensions as described in the %sdocumentation%s.'; 
$strServer = 'خادم %s';  
$strPutColNames = 'ضع أسماء الحقول في السطر الأول';  
$strImportDocSQL = 'استيراد ملفات docSQL';  
$strDataDict = 'قاموس البيانات';  
$strPrint = 'إطبع';  
$strPHP40203 = 'أنت تستخدم الإصدار 4.2.3 من PHP والذي يحتوي على خلّل خطير في التعامل مع النصوص ثنائية البايت (mbstring). أنظر في تقرير خلل PHP رقم 19404. لا ينصح باستخدام هذه النسخة من PHP مع phpMyAdmin.';  
$strCompression = 'الضغط'; 
$strNumTables = 'جداول'; 
$strTotalUC = 'مجموع كلّي'; 
$strRelationalSchema = 'بناء الإرتباطات';  
$strTableOfContents = 'جدول المحتويات';  
$strCannotLogin = 'لا يمكن الدخول إلى خادم MySQL';  
$strShowDatadictAs = 'تنسيق قامون البيانات';  
$strLandscape = 'عرض الصفحة';  
$strPortrait = 'طول الصفحة';  

$timespanfmt = '%s يوم، %s ساعة، %s دقيقة و%s ثانية'; 

$strAbortedClients = 'ألغي'; 
$strConnections = 'اتصالات'; 
$strFailedAttempts = 'محاولات أخفقت'; 
$strGlobalValue = 'قيمة عامّة'; 
$strMoreStatusVars = 'متغيّرات حالة إضافية'; 
$strPerHour = 'لكل ساعة'; 
$strQueryStatistics = '<b>إحصائيات الاستعلام</b>: %s استعلام أرسل إلى الخادم منذ تشغيله.';
$strQueryType = 'نوع الاستعلام'; 
$strReceived = 'استُلِم'; 
$strSent = 'أُرسِل'; 
$strServerStatus = 'بيانات التشغيل'; 
$strServerStatusUptime = 'مضى على عمل خادم MySQL مدة %s. بدأ العمل في %s.'; 
$strServerTabVariables = 'متغيّرات'; 
$strServerTabProcesslist = 'معالَجات'; 
$strServerTrafficNotes = '<b>سيْر الخادم</b>: تظهر هذه الجداول إحصائيات سيْر بيانات الشبكة لهذا الخادم منذ تشغيله.';
$strServerVars = 'متغيّرات وأعدادات الخادم'; 
$strSessionValue = 'قيمة الجلسة'; 
$strTraffic = 'بيانات سير'; 
$strVar = 'متغيّر'; 

$strCommand = 'أمْر'; 
$strCouldNotKill = 'لم يستطع phpMyAdmin إيقاف العمليّة %s. يبدو أنها أوقفت مسبقاً.'; 
$strId = 'رقم'; 
$strProcesslist = 'سرد العمليّات'; 
$strStatus = 'وضْع'; 
$strTime = 'وقت'; 
$strThreadSuccessfullyKilled = 'تم إيقاف العمليّة %s بنجاح.'; 

$strBzError = 'لم يستطع phpMyAdmin ضغط كمّ البيانات بسبب عطل في امتداد Bz2 في إصدار PHP. يُفضّل أن تغيّر قيمة توجيه <code>$cfg[\'BZipDump\']</code> في ملف إعدادات phpMyAdmin إلى <code>FALSE</code>. إن كنت تريد استخدام مزايا ضغط Bz2، عليك بالتحديث إلى إصدار جديد من PHP. لمزيد من التفاصيل، أنظر في تقرير خلل PHP %s.'; 
$strLaTeX = 'لاتِكْسْ';  

$strAdministration = 'إدارة'; 
$strFlushPrivilegesNote = 'ملاحظة: يقرأ phpMyAdmin صلاحيات المستخدمين من جداول الصلاحيات من خادم MySQL مباشرةً. محتويات هذه الجداول قد تختلف عن الصلاحيات التي يستخدمها الخادم إذا ما تمّ التعديل عليها يدويّاً. في هذه الحالة، عليك %s بإعادة قراءة الصلاحيات %s قبل أن تكمل.'; 
$strGlobalPrivileges = 'صلاحيّات عامّة'; 
$strGrantOption = 'مَنْحْ'; 
$strPrivDescAllPrivileges = 'يتضمّن كل الصلاحيّات عدا GRANT.'; 
$strPrivDescAlter = 'يسمح بتعديل بناء الجداول الموجودة مسبقاً.'; 
$strPrivDescCreateDb = 'يسمح بإنشاء قواعد بيانات وجداول جديدة.'; 
$strPrivDescCreateTbl = 'يسمح بإنشاء جداول جديدة.'; 
$strPrivDescCreateTmpTable = 'يسمح بإنشاء جداول مؤقّتة.'; 
$strPrivDescDelete = 'يسمح بحذف البيانات.'; 
$strPrivDescDropDb = 'يسمح بحذف قواعد البيانات.'; 
$strPrivDescDropTbl = 'يسمح بحذف الجداول.'; 
$strPrivDescExecute = 'يسمح بتشغيل الإجراءات المخزّنة )stored procedures(، ليس له أي تأثير في هذه النسخة من خادم MySQL.'; 
$strPrivDescFile = 'يسمح باستيراد وتصدير البيانات من وإلى الملفّات.'; 
$strPrivDescGrant = 'يسمح بإضافة المستخدمين والصلاحيات دون إعادة قراءة جداول الصلاحيات.'; 
$strPrivDescIndex = 'يسمح بإنشاء وحذف الفهارس.'; 
$strPrivDescInsert = 'يسمح بإضافة واستبدال البيانات.'; 
$strPrivDescLockTables = 'يسمح بقفل الجداول للعمليّة الحاليّة.'; 
$strPrivDescMaxConnections = 'يحدّ من عدد الاتصالات الجديدة التي يمكن للمستخدم فتحها بكل ساعة.';
$strPrivDescMaxQuestions = 'يحدّ عدد الاستعلامات التي يستطيع المستخدم إرسالها إلى الخادم بكل ساعة.';
$strPrivDescMaxUpdates = 'يحدّ عدد الأوامر التي ينفذها المستخدم بكل ساعة، والتي تغير أي جدول أو قاعدة بيانات.';
$strPrivDescProcess3 = 'يسمح بإيقاف عمليّات المستخدمين الأخرين.'; 
$strPrivDescProcess4 = 'يسمح بعرض الاستعلام بالكامل في سرد العمليات.'; 
$strPrivDescReferences = 'ليس له أي تأثير في نسخة MySQL الحاليّة.'; 
$strPrivDescReplClient = 'Gives the right to the user to ask where the slaves / masters are.'; 
$strPrivDescReplSlave = 'مطلوب لتوابع لاستنساخ.'; 
$strPrivDescReload = 'Allows reloading server settings and flushing the server\'s caches.'; 
$strPrivDescSelect = 'يسمح بقراءة البيانات.'; 
$strPrivDescShowDb = 'يسمح بالوصول لقائمة أسماء جميع قواعد البيانات.'; 
$strPrivDescShutdown = 'يسمح بإيقاف عمل الخادم.'; 
$strPrivDescSuper = 'يسمح بالاتصال، حتى لو وصل حدّ عدد الاتصالات للأقصى.، مطلوب للمهام الإدارية كضبط الإعدادات العامّة other users.'; 
$strPrivDescUpdate = 'يسمح بتعديل البيانات.'; 
$strPrivDescUsage = 'لا صلاحيات.'; 
$strPrivilegesReloaded = 'تم إعادة قراءة الصلاحيات بنجاح.'; 
$strResourceLimits = 'حدود المصادر'; 
$strUserOverview = 'معلومات المستخدم'; 
$strZeroRemovesTheLimit = 'ملاحظة: تغيير هذه الخيارات للرقم 0 )صفر( يلغي الحدّ.'; 

$strPasswordChanged = 'تم تغيير كلمة المرور لـ %s بنجاح.'; 

$strDeleteAndFlush = 'احذف المستخدمين وقم بإعادة قراءة الصلاحيات بعد ذلك.'; 
$strDeleteAndFlushDescr = 'هذه هي أنظف طريقة، لكن إعادة قراءة الصلاحيات قد يتطلّب بعض الوقت.'; 
$strDeleting = 'قيْد حذْف %s'; 
$strJustDelete = 'فقط قم بحذف المستخدمين من جدول الصلاحيات.'; 
$strJustDeleteDescr = 'سوف يبقى المستخدمون &quot;المحذوفون&quot; قادرون على الوصول للخادم كالعادة حتى يتم إعادة قراءة الصلاحيات.'; 
$strReloadingThePrivileges = 'قيد إعادة قراءة الصلاحيات.'; 
$strRemoveSelectedUsers = 'إحذف المستخدمين المحددين'; 
$strRevokeAndDelete = 'استرجع كل الصلاحيات الفعالة من المستخدمين ثم احذفهم بعد ذلك.'; 
$strRevokeAndDeleteDescr = 'سوف تبقى الصلاحية USAGE لدى المستخدمين حتى يتم إعادة قراءة الصلاحيات.'; 
$strUsersDeleted = 'تم حذف المستخدمين المحددين بنجاح.'; 

$strAddPrivilegesOnDb = 'إضافة الصلاحيات على قاعدة البيانات التالية'; 
$strAddPrivilegesOnTbl = 'إضافة الصلاحيات على الجدول التالي'; 
$strColumnPrivileges = 'صلاحيات خاصة بالحقل'; 
$strDbPrivileges = 'صلاحيات خاصة بقاعدة البيانات'; 
$strLocalhost = 'محلي';
$strLoginInformation = 'بيانات الدخول'; 
$strTblPrivileges = 'صلاحيات خاصة بالجدول'; 
$strThisHost = 'هذا المضيف'; 
$strUserNotFound = 'المستخدم المحدد غير موجود في جدول الصلاحيات.'; 
$strUserAlreadyExists = 'إسم المستخدم %s موجود مسبقاً!'; 
$strUseTextField = 'استخدم حقل نصّ'; 

$strNoUsersSelected = 'لم يتم تحديد مستخدم.'; 
$strDropUsersDb = 'إحذف قواعد البيانات التي لها نفس إسماء المستخدمين.'; 
$strAddedColumnComment = 'تم إضافة التعليق للعمود';  
$strWritingCommentNotPossible = 'كتابة التعليق غير ممكن';  
$strAddedColumnRelation = 'تم إضافة العلاقة للعمود';  
$strWritingRelationNotPossible = 'كتابة العلاقة غير ممكنة';  
$strImportFinished = 'إنتهى الإستيراد';  
$strFileCouldNotBeRead = 'لم يمكن قراءة الملف';  
$strIgnoringFile = 'تجاهل الملف %s';  
$strThisNotDirectory = 'لم يكن هذا دليلاً';  
$strAbsolutePathToDocSqlDir = 'الرجاء كتابة المسار المطلق على خادم الشبكة إلى دليل docSQL';  
$strImportFiles = 'استورد الملفات';  
$strDBGModule = 'وِحْدة';  
$strDBGLine = 'سطر';  
$strDBGHits = 'استخدامات';  
$strDBGTimePerHitMs = 'وقت/استخدام، مث';  
$strDBGTotalTimeMs = 'الوقت الكلي، مث';  
$strDBGMinTimeMs = 'أقل وقت، مث';  
$strDBGMaxTimeMs = 'أقصى وقت، مث';  
$strDBGContextID = 'رقم السياق';  
$strDBGContext = 'السياق';  
$strCantLoad = 'لا يمكن قراءة الامتداد %s،<br />رجاء تأكد من إعدادات PHP.';  
$strDefaultValueHelp = 'For default values, please enter just a single value, without backslash escaping or quotes, using this format: a';  //to translate
$strCheckPrivs = 'Check Privileges';  //to translate
$strCheckPrivsLong = 'Check privileges for database &quot;%s&quot;.';  //to translate
$strDatabasesStatsHeavyTraffic = 'Note: Enabling the Database statistics here might cause heavy traffic between the webserver and the MySQL one.';  //to translate
$strDatabasesStatsDisable = 'Disable Statistics';  //to translate
$strDatabasesStatsEnable = 'Enable Statistics';  //to translate
$strJumpToDB = 'Jump to database &quot;%s&quot;.';  //to translate
$strDropSelectedDatabases = 'Drop Selected Databases';  //to translate
$strNoDatabasesSelected = 'No databases selected.';  //to translate
$strDatabasesDropped = '%s databases have been dropped successfully.';  //to translate
$strGlobal = 'global';  //to translate
$strDbSpecific = 'database-specific';  //to translate
$strUsersHavingAccessToDb = 'Users having access to &quot;%s&quot;';  //to translate
$strChangeCopyUser = 'Change Login Information / Copy User';  //to translate
$strChangeCopyMode = 'Create a new user with the same privileges and ...';  //to translate
$strChangeCopyModeCopy = '... keep the old one.';  //to translate
$strChangeCopyModeJustDelete = ' ... delete the old one from the user tables.';  //to translate
$strChangeCopyModeRevoke = ' ... revoke all active privileges from the old one and delete it afterwards.';  //to translate
$strChangeCopyModeDeleteAndReload = ' ... delete the old one from the user tables and reload the privileges afterwards.';  //to translate
$strWildcard = 'wildcard';  //to translate
$strRowsModeFlippedHorizontal = 'horizontal (rotated headers)';//to translate
$strQueryTime = 'Query took %01.4f sec';//to translate
$strDumpComments = 'Include column comments as inline SQL-comments';//to translate
$strDBComment = 'Database comment: ';//to translate
$strQueryFrame = 'Query window';//to translate
$strQueryFrameDebug = 'Debugging information';//to translate
$strQueryFrameDebugBox = 'Active variables for the query form:\nDB: %s\nTable: %s\nServer: %s\n\nCurrent variables for the query form:\nDB: %s\nTable: %s\nServer: %s\n\nOpener location: %s\nFrameset location: %s.';//to translate
$strQuerySQLHistory = 'SQL-history';//to translate
$strMIME_MIMEtype = 'MIME-type';//to translate
$strMIME_transformation = 'Browser transformation';//to translate
$strMIME_transformation_options = 'Transformation options';//to translate
$strMIME_transformation_options_note = 'Please enter the values for transformation options using this format: \'a\',\'b\',\'c\'...<br />If you ever need to put a backslash ("\") or a single quote ("\'") amongst those values, backslashes it (for example \'\\\\xyz\' or \'a\\\'b\').';//to translate
$strMIME_transformation_note = 'For a list of available transformation options and their MIME-type transformations, click on %stransformation descriptions%s';//to translate
$strMIME_available_mime = 'Available MIME-types';//to translate
$strMIME_available_transform = 'Available transformations';//to translate
$strMIME_without = 'MIME-types printed in italics do not have a seperate transformation function';//to translate
$strMIME_description = 'Description';//to translate
$strMIME_nodescription = 'No Description is available for this transformation.<br />Please ask the author, what %s does.';//to translate
$strMIME_file = 'Filename';//to translate
$strTransformation_text_plain__formatted = 'Preserves original formatting of the field. No Escaping is done.';//to translate
$strTransformation_text_plain__unformatted = 'Displays HTML code as HTML entities. No HTML formatting is shown.';//to translate
$strTransformation_image_jpeg__link = 'Displays a link to this image (direct blob download, i.e.).';//to translate
$strInnodbStat = 'InnoDB Status';  //to translate
$strUpdComTab = 'Please see Documentation on how to update your Column_comments Table';  //to translate
$strTransformation_image_jpeg__inline = 'Displays a clickable thumbnail; options: width,height in pixels (keeps the original ratio)';  //to translate
$strTransformation_image_png__inline = 'See image/jpeg: inline';  //to translate
$strSQLOptions = 'SQL options';//to translate
$strXML = 'XML';//to translate
$strCSVOptions = 'CSV options';//to translate
$strNoOptions = 'This format has no options';//to translate
$strStatCreateTime = 'Creation';//to translate
$strStatUpdateTime = 'Last update';//to translate
$strStatCheckTime = 'Last check';//to translate
$strPerMinute = 'per minute';//to translate
$strPerSecond = 'per second';//to translate
$strAutomaticLayout = 'Automatic layout';  //to translate
$strDelOld = 'The current Page has References to Tables that no longer exist. Would you like to delete those References?';  //to translate
$strFileNameTemplate = 'File name template';//to translate 
$strFileNameTemplateRemember = 'remember template';//to translate 
$strFileNameTemplateHelp = 'Use __DB__ for database name, __TABLE__ for table name and %sany strftime%s options for time specification, extension will be automagically added. Any other text will be preserved.';//to translate
$strTransformation_text_plain__dateformat = 'Takes a TIME, TIMESTAMP or DATETIME field and formats it using your local dateformat. First option is the offset (in hours) which will be added to the timestamp (Default: 0). Second option is a different dateformat according to the parameters available for PHPs strftime().';//to translate
$strTransformation_text_plain__substr = 'Only shows part of a string. First option is an offset to define where the output of your text starts (Default 0). Second option is an offset how much text is returned. If empty, returns all the remaining text. The third option defines which chars will be appended to the output when a substring is returned (Default: ...) .';//to translate
$strTransformation_text_plain__external = 'LINUX ONLY: Launches an external application and feeds the fielddata via standard input. Returns standard output of the application. Default is Tidy, to pretty print HTML code. For security reasons, you have to manually edit the file libraries/transformations/text_plain__external.inc.php and insert the tools you allow to be run. The first option is then the number of the program you want to use and the second option are the parameters for the program. The third parameter, if set to 1 will convert the output using htmlspecialchars() (Default is 1). A fourth parameter, if set to 1 will put a NOWRAP to the content cell so that the whole output will be shown without reformatting (Default 1)';//to translate
$strAutodetect = 'Autodetect';  //to translate
$strTransformation_text_plain__imagelink = 'Displays an image and a link, the field contains the filename; first option is a prefix like "http://domain.com/", second option is the width in pixels, third is the height.';  //to translate
$strTransformation_text_plain__link = 'Displays a link, the field contains the filename; first option is a prefix like "http://domain.com/", second option is a title for the link.';  //to translate
$strUseHostTable = 'Use Host Table';  //to translate
$strShowFullQueries = 'Show Full Queries';  //to translate
$strTruncateQueries = 'Truncate Shown Queries';  //to translate
$strSwitchToTable = 'Switch to copied table';  //to translate
$strCharset = 'Charset';  //to translate
$strLaTeXOptions = 'LaTeX options';  //to translate
$strRelations = 'Relations';  //to translate
$strMoveTableSameNames = 'Can\'t move table to same one!';  //to translate
$strCopyTableSameNames = 'Can\'t copy table to same one!';  //to translate
$strMustSelectFile = 'You should select file which you want to insert.';  //to translate
$strSaveOnServer = 'Save on server in %s directory';  //to translate
$strOverwriteExisting = 'Overwrite existing file(s)';  //to translate
$strFileAlreadyExists = 'File %s already exists on server, change filename or check overwrite option.';  //to translate
$strDumpSaved = 'Dump has been saved to file %s.';  //to translate
$strNoPermission = 'The web server does not have permission to save the file %s.';  //to translate
$strNoSpace = 'Insufficient space to save the file %s.';  //to translate
$strInsertedRowId = 'Inserted row id:';  //to translate
$strLoadMethod = 'LOAD method';  //to translate
$strLoadExplanation = 'The best method is checked by default, but you can change if it fails.';  //to translate
$strExecuteBookmarked = 'Execute bookmarked query';  //to translate
$strExcelOptions = 'Excel options';  //to translate
$strReplaceNULLBy = 'Replace NULL by';  //to translate
$strQueryWindowLock = 'Do not overwrite this query from outside the window';  //to translate
$strPaperSize = 'Paper size';  //to translate
$strDatabaseNoTable = 'This database contains no table!';//to translate
$strViewDumpDatabases = 'View dump (schema) of databases';//to translate
$strAddIntoComments = 'Add into comments';//to translate
$strDatabaseExportOptions = 'Database export options';//to translate
$strAddDropDatabase = 'Add DROP DATABASE';//to translate
?>
