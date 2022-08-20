<?php
/**
 * Compiled ext_localconf.php cache file
 */

/**
 * Extension: core
 * File: C:/xampp8/htdocs/typo3/typo3/sysext/core/ext_localconf.php
 */

namespace {




use TYPO3\CMS\Core\Authentication\AuthenticationService;
use TYPO3\CMS\Core\Controller\FileDumpController;
use TYPO3\CMS\Core\Controller\RequireJsController;
use TYPO3\CMS\Core\Hooks\BackendUserGroupIntegrityCheck;
use TYPO3\CMS\Core\Hooks\BackendUserPasswordCheck;
use TYPO3\CMS\Core\Hooks\CreateSiteConfiguration;
use TYPO3\CMS\Core\Hooks\DestroySessionHook;
use TYPO3\CMS\Core\Hooks\PagesTsConfigGuard;
use TYPO3\CMS\Core\MetaTag\EdgeMetaTagManager;
use TYPO3\CMS\Core\MetaTag\Html5MetaTagManager;
use TYPO3\CMS\Core\MetaTag\MetaTagManagerRegistry;
use TYPO3\CMS\Core\Resource\Index\ExtractorRegistry;
use TYPO3\CMS\Core\Resource\OnlineMedia\Metadata\Extractor;
use TYPO3\CMS\Core\Resource\Rendering\AudioTagRenderer;
use TYPO3\CMS\Core\Resource\Rendering\RendererRegistry;
use TYPO3\CMS\Core\Resource\Rendering\VideoTagRenderer;
use TYPO3\CMS\Core\Resource\Rendering\VimeoRenderer;
use TYPO3\CMS\Core\Resource\Rendering\YouTubeRenderer;
use TYPO3\CMS\Core\Resource\Security\FileMetadataPermissionsAspect;
use TYPO3\CMS\Core\Resource\Security\SvgHookHandler;
use TYPO3\CMS\Core\Resource\TextExtraction\PlainTextExtractor;
use TYPO3\CMS\Core\Resource\TextExtraction\TextExtractorRegistry;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;

defined('TYPO3') or die();

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS'][GeneralUtility::class]['moveUploadedFile'][] = SvgHookHandler::class . '->processMoveUploadedFile';
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = FileMetadataPermissionsAspect::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = BackendUserGroupIntegrityCheck::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = BackendUserPasswordCheck::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['typo3/alt_doc.php']['makeEditForm_accessCheck'][] = FileMetadataPermissionsAspect::class . '->isAllowedToShowEditForm';
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tceforms_inline.php']['checkAccess'][] = FileMetadataPermissionsAspect::class . '->isAllowedToShowEditForm';
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['checkModifyAccessList'][] = FileMetadataPermissionsAspect::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = DestroySessionHook::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = PagesTsConfigGuard::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][CreateSiteConfiguration::class] = CreateSiteConfiguration::class;
$GLOBALS['TYPO3_CONF_VARS']['FE']['eID_include']['dumpFile'] = FileDumpController::class . '::dumpAction';
$GLOBALS['TYPO3_CONF_VARS']['FE']['eID_include']['requirejs'] = RequireJsController::class . '::retrieveConfiguration';

$rendererRegistry = GeneralUtility::makeInstance(RendererRegistry::class);
$rendererRegistry->registerRendererClass(AudioTagRenderer::class);
$rendererRegistry->registerRendererClass(VideoTagRenderer::class);
$rendererRegistry->registerRendererClass(YouTubeRenderer::class);
$rendererRegistry->registerRendererClass(VimeoRenderer::class);
unset($rendererRegistry);

$textExtractorRegistry = GeneralUtility::makeInstance(TextExtractorRegistry::class);
$textExtractorRegistry->registerTextExtractor(PlainTextExtractor::class);
unset($textExtractorRegistry);

$extractorRegistry = GeneralUtility::makeInstance(ExtractorRegistry::class);
$extractorRegistry->registerExtractionService(Extractor::class);
unset($extractorRegistry);

// Register base authentication service
ExtensionManagementUtility::addService(
    'core',
    'auth',
    AuthenticationService::class,
    [
        'title' => 'User authentication',
        'description' => 'Authentication with username/password.',
        'subtype' => 'getUserBE,getUserFE,authUserBE,authUserFE,processLoginDataBE,processLoginDataFE',
        'available' => true,
        'priority' => 50,
        'quality' => 50,
        'os' => '',
        'exec' => '',
        'className' => TYPO3\CMS\Core\Authentication\AuthenticationService::class,
    ]
);

// add default notification options to every page
ExtensionManagementUtility::addPageTSConfig(
    'TCEMAIN.translateToMessage = Translate to %s:'
);

$metaTagManagerRegistry = GeneralUtility::makeInstance(MetaTagManagerRegistry::class);
$metaTagManagerRegistry->registerManager(
    'html5',
    Html5MetaTagManager::class
);
$metaTagManagerRegistry->registerManager(
    'edge',
    EdgeMetaTagManager::class
);
unset($metaTagManagerRegistry);

// Add module configuration
ExtensionManagementUtility::addTypoScriptSetup(
    'config.pageTitleProviders.record.provider = TYPO3\CMS\Core\PageTitle\RecordPageTitleProvider'
);

// Register preset for sys_news
if (empty($GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['sys_news'])) {
    $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['sys_news'] = 'EXT:core/Configuration/RTE/SysNews.yaml';
}
}


/**
 * Extension: extbase
 * File: C:/xampp8/htdocs/typo3/typo3/sysext/extbase/ext_localconf.php
 */

namespace {




use TYPO3\CMS\Extbase\Hook\DataHandler\CheckFlexFormValue;
use TYPO3\CMS\Extbase\Property\TypeConverter\ArrayConverter;
use TYPO3\CMS\Extbase\Property\TypeConverter\BooleanConverter;
use TYPO3\CMS\Extbase\Property\TypeConverter\CoreTypeConverter;
use TYPO3\CMS\Extbase\Property\TypeConverter\DateTimeConverter;
use TYPO3\CMS\Extbase\Property\TypeConverter\FileConverter;
use TYPO3\CMS\Extbase\Property\TypeConverter\FileReferenceConverter;
use TYPO3\CMS\Extbase\Property\TypeConverter\FloatConverter;
use TYPO3\CMS\Extbase\Property\TypeConverter\FolderConverter;
use TYPO3\CMS\Extbase\Property\TypeConverter\IntegerConverter;
use TYPO3\CMS\Extbase\Property\TypeConverter\ObjectConverter;
use TYPO3\CMS\Extbase\Property\TypeConverter\ObjectStorageConverter;
use TYPO3\CMS\Extbase\Property\TypeConverter\PersistentObjectConverter;
use TYPO3\CMS\Extbase\Property\TypeConverter\StringConverter;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') or die();

// Register type converters
ExtensionUtility::registerTypeConverter(ArrayConverter::class);
ExtensionUtility::registerTypeConverter(BooleanConverter::class);
ExtensionUtility::registerTypeConverter(DateTimeConverter::class);
ExtensionUtility::registerTypeConverter(FloatConverter::class);
ExtensionUtility::registerTypeConverter(IntegerConverter::class);
ExtensionUtility::registerTypeConverter(ObjectStorageConverter::class);
ExtensionUtility::registerTypeConverter(PersistentObjectConverter::class);
ExtensionUtility::registerTypeConverter(ObjectConverter::class);
ExtensionUtility::registerTypeConverter(StringConverter::class);
ExtensionUtility::registerTypeConverter(CoreTypeConverter::class);
// Experimental FAL<->extbase converters
ExtensionUtility::registerTypeConverter(FileConverter::class);
ExtensionUtility::registerTypeConverter(FileReferenceConverter::class);
ExtensionUtility::registerTypeConverter(FolderConverter::class);

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['checkFlexFormValue'][] = CheckFlexFormValue::class;
}


/**
 * Extension: frontend
 * File: C:/xampp8/htdocs/typo3/typo3/sysext/frontend/ext_localconf.php
 */

namespace {




use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Frontend\ContentObject\CaseContentObject;
use TYPO3\CMS\Frontend\ContentObject\ContentContentObject;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectArrayContentObject;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectArrayInternalContentObject;
use TYPO3\CMS\Frontend\ContentObject\EditPanelContentObject;
use TYPO3\CMS\Frontend\ContentObject\FilesContentObject;
use TYPO3\CMS\Frontend\ContentObject\FluidTemplateContentObject;
use TYPO3\CMS\Frontend\ContentObject\HierarchicalMenuContentObject;
use TYPO3\CMS\Frontend\ContentObject\ImageContentObject;
use TYPO3\CMS\Frontend\ContentObject\ImageResourceContentObject;
use TYPO3\CMS\Frontend\ContentObject\LoadRegisterContentObject;
use TYPO3\CMS\Frontend\ContentObject\RecordsContentObject;
use TYPO3\CMS\Frontend\ContentObject\RestoreRegisterContentObject;
use TYPO3\CMS\Frontend\ContentObject\ScalableVectorGraphicsContentObject;
use TYPO3\CMS\Frontend\ContentObject\TextContentObject;
use TYPO3\CMS\Frontend\ContentObject\UserContentObject;
use TYPO3\CMS\Frontend\ContentObject\UserInternalContentObject;
use TYPO3\CMS\Frontend\Controller\ShowImageController;
use TYPO3\CMS\Frontend\Hooks\TreelistCacheUpdateHooks;

defined('TYPO3') or die();

// Register all available content objects
$GLOBALS['TYPO3_CONF_VARS']['FE']['ContentObjects'] = array_merge($GLOBALS['TYPO3_CONF_VARS']['FE']['ContentObjects'], [
    'TEXT'             => TextContentObject::class,
    'CASE'             => CaseContentObject::class,
    'COA'              => ContentObjectArrayContentObject::class,
    'COA_INT'          => ContentObjectArrayInternalContentObject::class,
    'USER'             => UserContentObject::class,
    'USER_INT'         => UserInternalContentObject::class,
    'FILES'            => FilesContentObject::class,
    'IMAGE'            => ImageContentObject::class,
    'IMG_RESOURCE'     => ImageResourceContentObject::class,
    'CONTENT'          => ContentContentObject::class,
    'RECORDS'          => RecordsContentObject::class,
    'HMENU'            => HierarchicalMenuContentObject::class,
    'LOAD_REGISTER'    => LoadRegisterContentObject::class,
    'RESTORE_REGISTER' => RestoreRegisterContentObject::class,
    'FLUIDTEMPLATE'    => FluidTemplateContentObject::class,
    'SVG'              => ScalableVectorGraphicsContentObject::class,
    // @deprecated since v12: content object EDITPANEL will be removed in v12.
    'EDITPANEL'        => EditPanelContentObject::class,
]);

// Register eID provider for showpic
$GLOBALS['TYPO3_CONF_VARS']['FE']['eID_include']['tx_cms_showpic'] = ShowImageController::class . '::processRequest';

ExtensionManagementUtility::addUserTSConfig('
  options.saveDocView = 1
  options.saveDocNew = 1
  options.saveDocNew.pages = 0
  options.saveDocNew.sys_file = 0
  options.saveDocNew.sys_file_metadata = 0
  options.disableDelete.sys_file = 1
');

ExtensionManagementUtility::addTypoScriptSetup(
    '
# Content selection
styles.content.get = CONTENT
styles.content.get {
    table = tt_content
    select {
        orderBy = sorting
        where = {#colPos}=0
    }
}


# Content element rendering
tt_content = CASE
tt_content {
    key {
        field = CType
    }
    default = TEXT
    default {
        field = CType
        htmlSpecialChars = 1
        wrap = <p style="background-color: yellow; padding: 0.5em 1em;"><strong>ERROR:</strong> Content Element with uid "{field:uid}" and type "|" has no rendering definition!</p>
        wrap.insertData = 1
    }
}
    '
);

// Registering hooks for the tree list cache
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = TreelistCacheUpdateHooks::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processCmdmapClass'][] = TreelistCacheUpdateHooks::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['moveRecordClass'][] = TreelistCacheUpdateHooks::class;

// Register search key shortcuts
$GLOBALS['TYPO3_CONF_VARS']['SYS']['livesearch']['content'] = 'tt_content';

// Include new content elements to modWizards
ExtensionManagementUtility::addPageTSConfig(
    "@import 'EXT:frontend/Configuration/TsConfig/Page/Mod/Wizards/NewContentElement.tsconfig'"
);
// Include FormEngine adjustments
ExtensionManagementUtility::addPageTSConfig(
    "@import 'EXT:frontend/Configuration/TsConfig/Page/TCEFORM.tsconfig'"
);
}


/**
 * Extension: fluid_styled_content
 * File: C:/xampp8/htdocs/typo3/typo3/sysext/fluid_styled_content/ext_localconf.php
 */

namespace {




defined('TYPO3') or die();

// Define TypoScript as content rendering template
$GLOBALS['TYPO3_CONF_VARS']['FE']['contentRenderingTemplates'][] = 'fluidstyledcontent/Configuration/TypoScript/';
}


/**
 * Extension: filelist
 * File: C:/xampp8/htdocs/typo3/typo3/sysext/filelist/ext_localconf.php
 */

namespace {




use TYPO3\CMS\Filelist\ContextMenu\ItemProviders\FileProvider;

defined('TYPO3') or die();

$GLOBALS['TYPO3_CONF_VARS']['BE']['ContextMenu']['ItemProviders'][1486418731] = FileProvider::class;
}


/**
 * Extension: impexp
 * File: C:/xampp8/htdocs/typo3/typo3/sysext/impexp/ext_localconf.php
 */

namespace {




use TYPO3\CMS\Impexp\ContextMenu\ItemProvider;

defined('TYPO3') or die();

$GLOBALS['TYPO3_CONF_VARS']['BE']['ContextMenu']['ItemProviders'][1486418735] = ItemProvider::class;
}


/**
 * Extension: form
 * File: C:/xampp8/htdocs/typo3/typo3/sysext/form/ext_localconf.php
 */

namespace {




use TYPO3\CMS\Core\Configuration\FlexForm\FlexFormTools;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
use TYPO3\CMS\Form\Controller\FormFrontendController;
use TYPO3\CMS\Form\Hooks\DataStructureIdentifierHook;
use TYPO3\CMS\Form\Hooks\FormElementHooks;
use TYPO3\CMS\Form\Hooks\FormFileProvider;
use TYPO3\CMS\Form\Hooks\ImportExportHook;
use TYPO3\CMS\Form\Mvc\Property\PropertyMappingConfiguration;
use TYPO3\CMS\Form\Mvc\Property\TypeConverter\FormDefinitionArrayConverter;

defined('TYPO3') or die();

call_user_func(static function () {
    if (ExtensionManagementUtility::isLoaded('filelist')) {
        // Context menu item handling for form files
        $GLOBALS['TYPO3_CONF_VARS']['BE']['ContextMenu']['ItemProviders'][1530637161]
            = FormFileProvider::class;
    }

    if (ExtensionManagementUtility::isLoaded('impexp')) {
        $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/impexp/class.tx_impexp.php']['before_addSysFileRecord'][1530637161]
            = ImportExportHook::class . '->beforeAddSysFileRecordOnImport';
    }

    // Hook to enrich tt_content form flex element with finisher settings and form list drop down
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS'][FlexFormTools::class]['flexParsing'][
        DataStructureIdentifierHook::class
    ] = DataStructureIdentifierHook::class;

    // Add new content element wizard entry
    ExtensionManagementUtility::addPageTSConfig(
        "@import 'EXT:form/Configuration/TsConfig/Page/Mod/Wizards/NewContentElement.tsconfig'"
    );

    // Add module configuration
    ExtensionManagementUtility::addTypoScriptSetup(
        'module.tx_form {
    settings {
        yamlConfigurations {
            10 = EXT:form/Configuration/Yaml/FormSetup.yaml
        }
    }
    view {
        templateRootPaths.10 = EXT:form/Resources/Private/Backend/Templates/
        partialRootPaths.10 = EXT:form/Resources/Private/Backend/Partials/
        layoutRootPaths.10 = EXT:form/Resources/Private/Backend/Layouts/
    }
}'
    );

    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/form']['afterSubmit'][1489772699]
        = FormElementHooks::class;

    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/form']['beforeRendering'][1489772699]
        = FormElementHooks::class;

    // FE file upload processing
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/form']['afterBuildingFinished'][1489772699]
        = PropertyMappingConfiguration::class;
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/form']['afterFormStateInitialized'][1613296803]
        = PropertyMappingConfiguration::class;

    ExtensionUtility::registerTypeConverter(
        FormDefinitionArrayConverter::class
    );

    // Register "formvh:" namespace
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['fluid']['namespaces']['formvh'][] = 'TYPO3\\CMS\\Form\\ViewHelpers';

    // Register FE plugin
    ExtensionUtility::configurePlugin(
        'Form',
        'Formframework',
        // Both actions are cached to avoid 2 USER_INT objects on the page.
        // `TYPO3\CMS\Form\Core\FormRequestHandler` takes care of the caching behavior.
        [FormFrontendController::class => 'render, perform'],
        [],
        ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
    );
});
}


/**
 * Extension: install
 * File: C:/xampp8/htdocs/typo3/typo3/sysext/install/ext_localconf.php
 */

namespace {




use TYPO3\CMS\Core\Core\Environment;
use TYPO3\CMS\Install\Report\EnvironmentStatusReport;
use TYPO3\CMS\Install\Report\InstallStatusReport;
use TYPO3\CMS\Install\Report\SecurityStatusReport;
use TYPO3\CMS\Install\Updates\BackendUserLanguageMigration;
use TYPO3\CMS\Install\Updates\CollectionsExtractionUpdate;
use TYPO3\CMS\Install\Updates\DatabaseRowsUpdateWizard;
use TYPO3\CMS\Install\Updates\FeeditExtractionUpdate;
use TYPO3\CMS\Install\Updates\ShortcutRecordsMigration;
use TYPO3\CMS\Install\Updates\SvgFilesSanitization;
use TYPO3\CMS\Install\Updates\SysActionExtractionUpdate;
use TYPO3\CMS\Install\Updates\SysLogChannel;
use TYPO3\CMS\Install\Updates\TaskcenterExtractionUpdate;

defined('TYPO3') or die();

// v9->v10 wizards below this line
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['feeditExtension']
    = FeeditExtractionUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['taskcenterExtension']
    = TaskcenterExtractionUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['sysActionExtension']
    = SysActionExtractionUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['svgFilesSanitization']
    = SvgFilesSanitization::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['shortcutRecordsMigration']
    = ShortcutRecordsMigration::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['databaseRowsUpdateWizard']
    = DatabaseRowsUpdateWizard::class;

// v10->v11 wizards below this line
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['legacyCollectionsExtension']
    = CollectionsExtractionUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['backendUserLanguage']
    = BackendUserLanguageMigration::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['sysLogChannel']
    = SysLogChannel::class;

// Register report module additions
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['typo3'][] = InstallStatusReport::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['security'][] = SecurityStatusReport::class;

// Only add the environment status report if not in CLI mode
if (!Environment::isCli()) {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['system'][] = EnvironmentStatusReport::class;
}
}


/**
 * Extension: recordlist
 * File: C:/xampp8/htdocs/typo3/typo3/sysext/recordlist/ext_localconf.php
 */

namespace {




use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Recordlist\Browser\DatabaseBrowser;
use TYPO3\CMS\Recordlist\Browser\FileBrowser;
use TYPO3\CMS\Recordlist\Browser\FolderBrowser;

defined('TYPO3') or die();

// Register element browsers
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ElementBrowsers']['db'] = DatabaseBrowser::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ElementBrowsers']['file'] = FileBrowser::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ElementBrowsers']['file_reference'] = FileBrowser::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ElementBrowsers']['folder'] = FolderBrowser::class;

// Register default link handlers
ExtensionManagementUtility::addPageTSConfig('
TCEMAIN.linkHandler {
  page {
    handler = TYPO3\\CMS\\Recordlist\\LinkHandler\\PageLinkHandler
    label = LLL:EXT:recordlist/Resources/Private/Language/locallang_browse_links.xlf:page
  }
  file {
    handler = TYPO3\\CMS\\Recordlist\\LinkHandler\\FileLinkHandler
    label = LLL:EXT:recordlist/Resources/Private/Language/locallang_browse_links.xlf:file
    displayAfter = page
    scanAfter = page
  }
  folder {
    handler = TYPO3\\CMS\\Recordlist\\LinkHandler\\FolderLinkHandler
    label = LLL:EXT:recordlist/Resources/Private/Language/locallang_browse_links.xlf:folder
    displayAfter = page,file
    scanAfter = page,file
  }
  url {
    handler = TYPO3\\CMS\\Recordlist\\LinkHandler\\UrlLinkHandler
    label = LLL:EXT:recordlist/Resources/Private/Language/locallang_browse_links.xlf:extUrl
    displayAfter = page,file,folder
    scanAfter = telephone
  }
  mail {
    handler = TYPO3\\CMS\\Recordlist\\LinkHandler\\MailLinkHandler
    label = LLL:EXT:recordlist/Resources/Private/Language/locallang_browse_links.xlf:email
    displayAfter = page,file,folder,url
    scanBefore = url
  }
  telephone {
    handler = TYPO3\\CMS\\Recordlist\\LinkHandler\\TelephoneLinkHandler
    label = LLL:EXT:recordlist/Resources/Private/Language/locallang_browse_links.xlf:telephone
    displayAfter = page,file,folder,url,mail
    scanBefore = url
  }
}
');
}


/**
 * Extension: backend
 * File: C:/xampp8/htdocs/typo3/typo3/sysext/backend/ext_localconf.php
 */

namespace {




use TYPO3\CMS\Backend\Backend\Avatar\DefaultAvatarProvider;
use TYPO3\CMS\Backend\Backend\ToolbarItems\ClearCacheToolbarItem;
use TYPO3\CMS\Backend\Backend\ToolbarItems\HelpToolbarItem;
use TYPO3\CMS\Backend\Backend\ToolbarItems\LiveSearchToolbarItem;
use TYPO3\CMS\Backend\Backend\ToolbarItems\ShortcutToolbarItem;
use TYPO3\CMS\Backend\Backend\ToolbarItems\SystemInformationToolbarItem;
use TYPO3\CMS\Backend\Backend\ToolbarItems\UserToolbarItem;
use TYPO3\CMS\Backend\LoginProvider\UsernamePasswordLoginProvider;
use TYPO3\CMS\Backend\Preview\StandardPreviewRendererResolver;
use TYPO3\CMS\Backend\Provider\PageTsBackendLayoutDataProvider;
use TYPO3\CMS\Backend\Security\EmailLoginNotification;
use TYPO3\CMS\Backend\Security\FailedLoginAttemptNotification;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

$GLOBALS['TYPO3_CONF_VARS']['BE']['toolbarItems'][1435433106] = ClearCacheToolbarItem::class;
$GLOBALS['TYPO3_CONF_VARS']['BE']['toolbarItems'][1435433107] = HelpToolbarItem::class;
$GLOBALS['TYPO3_CONF_VARS']['BE']['toolbarItems'][1435433108] = LiveSearchToolbarItem::class;
$GLOBALS['TYPO3_CONF_VARS']['BE']['toolbarItems'][1435433109] = ShortcutToolbarItem::class;
$GLOBALS['TYPO3_CONF_VARS']['BE']['toolbarItems'][1435433110] = SystemInformationToolbarItem::class;
$GLOBALS['TYPO3_CONF_VARS']['BE']['toolbarItems'][1435433111] = UserToolbarItem::class;

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['backend']['loginProviders'][1433416747] = [
    'provider' => UsernamePasswordLoginProvider::class,
    'sorting' => 50,
    'iconIdentifier' => 'actions-key',
    'label' => 'LLL:EXT:backend/Resources/Private/Language/locallang.xlf:login.link',
];

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['backend']['avatarProviders']['defaultAvatarProvider'] = [
    'provider' => DefaultAvatarProvider::class,
];

// Register search key shortcuts
$GLOBALS['TYPO3_CONF_VARS']['SYS']['livesearch']['page'] = 'pages';

// Register standard preview renderer resolver implementation.
// Resolves PreviewRendererInterface implementations for a given table and record.
// Can be replaced with custom implementation by overriding this value in extensions.
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['backend']['previewRendererResolver'] = StandardPreviewRendererResolver::class;

// Include base TSconfig setup
ExtensionManagementUtility::addPageTSConfig(
    "@import 'EXT:backend/Configuration/TsConfig/Page/Mod/Wizards/NewContentElement.tsconfig'"
);

// Register BackendLayoutDataProvider for PageTs
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['BackendLayoutDataProvider']['pagets'] = PageTsBackendLayoutDataProvider::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_userauthgroup.php']['backendUserLogin']['sendEmailOnLogin'] = EmailLoginNotification::class . '->emailAtLogin';
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_userauth.php']['postLoginFailureProcessing']['sendEmailOnFailedLoginAttempt'] = FailedLoginAttemptNotification::class . '->sendEmailOnLoginFailures';
}


/**
 * Extension: reports
 * File: C:/xampp8/htdocs/typo3/typo3/sysext/reports/ext_localconf.php
 */

namespace {




use TYPO3\CMS\Reports\Report\ServicesListReport;
use TYPO3\CMS\Reports\Report\Status\ConfigurationStatus;
use TYPO3\CMS\Reports\Report\Status\FalStatus;
use TYPO3\CMS\Reports\Report\Status\SecurityStatus;
use TYPO3\CMS\Reports\Report\Status\Status;
use TYPO3\CMS\Reports\Report\Status\SystemStatus;
use TYPO3\CMS\Reports\Report\Status\Typo3Status;
use TYPO3\CMS\Reports\Report\Status\WarningMessagePostProcessor;
use TYPO3\CMS\Reports\Task\SystemStatusUpdateTask;
use TYPO3\CMS\Reports\Task\SystemStatusUpdateTaskNotificationEmailField;

defined('TYPO3') or die();

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][SystemStatusUpdateTask::class] = [
    'extension' => 'reports',
    'title' => 'LLL:EXT:reports/Resources/Private/Language/locallang_reports.xlf:status_updateTaskTitle',
    'description' => 'LLL:EXT:reports/Resources/Private/Language/locallang_reports.xlf:status_updateTaskDescription',
    'additionalFields' => SystemStatusUpdateTaskNotificationEmailField::class,
];

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_befunc.php']['displayWarningMessages']['tx_reports_WarningMessagePostProcessor'] = WarningMessagePostProcessor::class;

if (!is_array($GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status'])) {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status'] = [];
}
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status'] = array_merge(
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status'],
    [
        'title' => 'LLL:EXT:reports/Resources/Private/Language/locallang_reports.xlf:status_report_title',
        'icon' => 'module-reports',
        'description' => 'LLL:EXT:reports/Resources/Private/Language/locallang_reports.xlf:status_report_description',
        'report' => Status::class,
    ]
);

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['typo3'][] = Typo3Status::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['system'][] = SystemStatus::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['security'][] = SecurityStatus::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['configuration'][] = ConfigurationStatus::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['fal'][] = FalStatus::class;

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['sv']['services'] = [
    'title' => 'LLL:EXT:reports/Resources/Private/Language/locallang_servicereport.xlf:report_title',
    'description' => 'LLL:EXT:reports/Resources/Private/Language/locallang_servicereport.xlf:report_description',
    'icon' => 'EXT:reports/Resources/Public/Images/service-reports.png',
    'report' => ServicesListReport::class,
];
}


/**
 * Extension: redirects
 * File: C:/xampp8/htdocs/typo3/typo3/sysext/redirects/ext_localconf.php
 */

namespace {




use TYPO3\CMS\Backend\Form\FormDataProvider\TcaInputPlaceholders;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Redirects\Evaluation\SourceHost;
use TYPO3\CMS\Redirects\FormDataProvider\ValuePickerItemDataProvider;
use TYPO3\CMS\Redirects\Hooks\BackendControllerHook;
use TYPO3\CMS\Redirects\Hooks\DataHandlerCacheFlushingHook;
use TYPO3\CMS\Redirects\Hooks\DataHandlerSlugUpdateHook;
use TYPO3\CMS\Redirects\Hooks\DispatchNotificationHook;
use TYPO3\CMS\Redirects\Report\Status\RedirectStatus;

defined('TYPO3') or die();

// Rebuild cache in DataHandler on changing / inserting / adding redirect records
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['clearCachePostProc']['redirects'] = DataHandlerCacheFlushingHook::class . '->rebuildRedirectCacheIfNecessary';
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass']['redirects'] = DataHandlerSlugUpdateHook::class;

// Inject sys_domains into valuepicker form
$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['formDataGroup']['tcaDatabaseRecord']
[ValuePickerItemDataProvider::class] = [
    'depends' => [
        TcaInputPlaceholders::class,
    ],
];

// Add validation call for form field source_host and source_path
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tce']['formevals'][SourceHost::class] = '';

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['typo3/backend.php']['constructPostProcess'][]
    = BackendControllerHook::class . '->registerClientSideEventHandler';

// Register update signal to send delayed notifications
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_befunc.php']['updateSignalHook']['redirects:slugChanged'] = DispatchNotificationHook::class . '->dispatchNotification';

if (ExtensionManagementUtility::isLoaded('reports')) {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['LLL:EXT:redirects/Resources/Private/Language/locallang_reports.xlf:statusProvider'][] = RedirectStatus::class;
}
}


/**
 * Extension: rte_ckeditor
 * File: C:/xampp8/htdocs/typo3/typo3/sysext/rte_ckeditor/ext_localconf.php
 */

namespace {




use TYPO3\CMS\RteCKEditor\Form\Resolver\RichTextNodeResolver;
use TYPO3\CMS\RteCKEditor\Hook\PageRendererRenderPreProcess;

defined('TYPO3') or die();

// Register FormEngine node type resolver hook to render RTE in FormEngine if enabled
$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeResolver'][1480314091] = [
    'nodeName' => 'text',
    'priority' => 50,
    'class' => RichTextNodeResolver::class,
];

// Hook to add rte_ckeditor requirejs config to PageRenderer in backend
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_pagerenderer.php']['render-preProcess'][] =
    PageRendererRenderPreProcess::class . '->addRequireJsConfiguration';

// Register the presets
if (empty($GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['default'])) {
    $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['default'] = 'EXT:rte_ckeditor/Configuration/RTE/Default.yaml';
}
if (empty($GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['minimal'])) {
    $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['minimal'] = 'EXT:rte_ckeditor/Configuration/RTE/Minimal.yaml';
}
if (empty($GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['full'])) {
    $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['full'] = 'EXT:rte_ckeditor/Configuration/RTE/Full.yaml';
}
}


/**
 * Extension: adminpanel
 * File: C:/xampp8/htdocs/typo3/typo3/sysext/adminpanel/ext_localconf.php
 */

namespace {




use TYPO3\CMS\Adminpanel\Controller\AjaxController;
use TYPO3\CMS\Adminpanel\Log\InMemoryLogWriter;
use TYPO3\CMS\Adminpanel\Modules\CacheModule;
use TYPO3\CMS\Adminpanel\Modules\Debug\Events;
use TYPO3\CMS\Adminpanel\Modules\Debug\Log;
use TYPO3\CMS\Adminpanel\Modules\Debug\PageTitle;
use TYPO3\CMS\Adminpanel\Modules\Debug\QueryInformation;
use TYPO3\CMS\Adminpanel\Modules\DebugModule;
use TYPO3\CMS\Adminpanel\Modules\Info\GeneralInformation;
use TYPO3\CMS\Adminpanel\Modules\Info\PhpInformation;
use TYPO3\CMS\Adminpanel\Modules\Info\RequestInformation;
use TYPO3\CMS\Adminpanel\Modules\Info\UserIntInformation;
use TYPO3\CMS\Adminpanel\Modules\InfoModule;
use TYPO3\CMS\Adminpanel\Modules\PreviewModule;
use TYPO3\CMS\Adminpanel\Modules\TsDebug\TypoScriptWaterfall;
use TYPO3\CMS\Adminpanel\Modules\TsDebugModule;
use TYPO3\CMS\Core\Log\LogLevel;

defined('TYPO3') or die();

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['adminpanel']['modules'] = [
    'preview' => [
        'module' => PreviewModule::class,
        'before' => ['cache'],
    ],
    'cache' => [
        'module' => CacheModule::class,
        'after' => ['preview'],
    ],
    'tsdebug' => [
        'module' => TsDebugModule::class,
        'after' => ['edit'],
        'submodules' => [
            'ts-waterfall' => [
                'module' => TypoScriptWaterfall::class,
            ],
        ],
    ],
    'info' => [
        'module' => InfoModule::class,
        'after' => ['tsdebug'],
        'submodules' => [
            'general' => [
                'module' => GeneralInformation::class,
            ],
            'request' => [
                'module' => RequestInformation::class,
            ],
            'phpinfo' => [
                'module' => PhpInformation::class,
            ],
            'userint' => [
                'module' => UserIntInformation::class,
            ],
        ],
    ],
    'debug' => [
        'module' => DebugModule::class,
        'after' => ['info'],
        'submodules' => [
            'log' => [
                'module' => Log::class,
            ],
            'queryInformation' => [
                'module' => QueryInformation::class,
            ],
            'pageTitle' => [
                'module' => PageTitle::class,
            ],
            'events' => [
                'module' => Events::class,
            ],
        ],
    ],
];

$GLOBALS['TYPO3_CONF_VARS']['FE']['eID_include']['adminPanel_save']
    = AjaxController::class . '::saveDataAction';

// The admin panel has a module to show log messages. Register a debug logger to gather those.
$GLOBALS['TYPO3_CONF_VARS']['LOG']['writerConfiguration'][LogLevel::DEBUG][InMemoryLogWriter::class] = [];

if (!is_array($GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['adminpanel_requestcache'] ?? null)) {
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['adminpanel_requestcache'] = [];
}
}


/**
 * Extension: dashboard
 * File: C:/xampp8/htdocs/typo3/typo3/sysext/dashboard/ext_localconf.php
 */

namespace {




use TYPO3\CMS\Core\Cache\Backend\FileBackend;
use TYPO3\CMS\Core\Cache\Frontend\VariableFrontend;

defined('TYPO3') or die();

if (!is_array($GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['dashboard_rss'] ?? null)) {
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['dashboard_rss'] = [
        'frontend' => VariableFrontend::class,
        'backend' => FileBackend::class,
        'options' => [
            'defaultLifetime' => 900,
        ],
    ];
}
}


/**
 * Extension: extensionmanager
 * File: C:/xampp8/htdocs/typo3/typo3/sysext/extensionmanager/ext_localconf.php
 */

namespace {




use TYPO3\CMS\Core\Configuration\ExtensionConfiguration;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extensionmanager\Report\ExtensionComposerStatus;
use TYPO3\CMS\Extensionmanager\Report\ExtensionStatus;
use TYPO3\CMS\Extensionmanager\Task\UpdateExtensionListTask;

defined('TYPO3') or die();

// Register extension list update task
if (!(bool)GeneralUtility::makeInstance(
    ExtensionConfiguration::class
)->get('extensionmanager', 'offlineMode')) {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][UpdateExtensionListTask::class] = [
        'extension' => 'extensionmanager',
        'title' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang.xlf:task.updateExtensionListTask.name',
        'description' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang.xlf:task.updateExtensionListTask.description',
        'additionalFields' => '',
    ];
}

// Register extension status report system
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['Extension Manager'][] =
    ExtensionStatus::class;

// Register extension composer status report
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['Composer Manifest'][] =
    ExtensionComposerStatus::class;
}


/**
 * Extension: felogin
 * File: C:/xampp8/htdocs/typo3/typo3/sysext/felogin/ext_localconf.php
 */

namespace {




use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
use TYPO3\CMS\FrontendLogin\Controller\LoginController;
use TYPO3\CMS\FrontendLogin\Controller\PasswordRecoveryController;
use TYPO3\CMS\FrontendLogin\Updates\MigrateFeloginPlugins;
use TYPO3\CMS\FrontendLogin\Updates\MigrateFeloginPluginsCtype;

defined('TYPO3') or die();

// Add default TypoScript
ExtensionManagementUtility::addTypoScriptConstants(
    "@import 'EXT:felogin/Configuration/TypoScript/constants.typoscript'"
);
ExtensionManagementUtility::addTypoScriptSetup(
    "@import 'EXT:felogin/Configuration/TypoScript/setup.typoscript'"
);

ExtensionUtility::configurePlugin(
    'Felogin',
    'Login',
    [
        LoginController::class => 'login, overview',
        PasswordRecoveryController::class => 'recovery,showChangePassword,changePassword',
    ],
    [
        LoginController::class => 'login, overview',
        PasswordRecoveryController::class => 'recovery,showChangePassword,changePassword',
    ],
    ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);

// Add login form to new content element wizard
ExtensionManagementUtility::addPageTSConfig(
    "@import 'EXT:felogin/Configuration/TsConfig/Page/Mod/Wizards/NewContentElement.tsconfig'"
);

// Add migration wizards
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['TYPO3\\CMS\\Felogin\\Updates\\MigrateFeloginPlugins']
    = MigrateFeloginPlugins::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update'][MigrateFeloginPluginsCtype::class]
    = MigrateFeloginPluginsCtype::class;
}


/**
 * Extension: seo
 * File: C:/xampp8/htdocs/typo3/typo3/sysext/seo/ext_localconf.php
 */

namespace {




use TYPO3\CMS\Core\MetaTag\MetaTagManagerRegistry;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Seo\Canonical\CanonicalGenerator;
use TYPO3\CMS\Seo\MetaTag\MetaTagGenerator;
use TYPO3\CMS\Seo\MetaTag\OpenGraphMetaTagManager;
use TYPO3\CMS\Seo\MetaTag\TwitterCardMetaTagManager;

defined('TYPO3') or die();

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['TYPO3\CMS\Frontend\Page\PageGenerator']['generateMetaTags']['metatag'] =
    MetaTagGenerator::class . '->generate';
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['TYPO3\CMS\Frontend\Page\PageGenerator']['generateMetaTags']['canonical'] =
    CanonicalGenerator::class . '->generate';

$metaTagManagerRegistry = GeneralUtility::makeInstance(MetaTagManagerRegistry::class);
$metaTagManagerRegistry->registerManager(
    'opengraph',
    OpenGraphMetaTagManager::class
);
$metaTagManagerRegistry->registerManager(
    'twitter',
    TwitterCardMetaTagManager::class
);
unset($metaTagManagerRegistry);

// Add module configuration
ExtensionManagementUtility::addTypoScriptSetup(trim('
    config.pageTitleProviders {
        seo {
            provider = TYPO3\CMS\Seo\PageTitle\SeoTitlePageTitleProvider
            before = record
        }
    }
'));

ExtensionManagementUtility::addPageTSConfig(trim('
mod.web_info.fieldDefinitions {
  seo {
    label = LLL:EXT:seo/Resources/Private/Language/locallang_webinfo.xlf:seo
    fields = title,uid,slug,seo_title,description,no_index,no_follow,canonical_link,sitemap_changefreq,sitemap_priority
  }
  social_media {
    label = LLL:EXT:seo/Resources/Private/Language/locallang_webinfo.xlf:social_media
    fields = title,uid,og_title,og_description,twitter_title,twitter_description
  }
}
'));
}


/**
 * Extension: sys_note
 * File: C:/xampp8/htdocs/typo3/typo3/sysext/sys_note/ext_localconf.php
 */

namespace {




use TYPO3\CMS\SysNote\Hook\ButtonBarHook;
use TYPO3\CMS\SysNote\Hook\InfoModuleHook;
use TYPO3\CMS\SysNote\Hook\PageHook;

defined('TYPO3') or die();

// Hook into the page modules
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/db_layout.php']['drawHeaderHook']['sys_note'] = PageHook::class . '->renderInHeader';
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/db_layout.php']['drawFooterHook']['sys_note'] = PageHook::class . '->renderInFooter';
// Hook into the info module
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/web_info/class.tx_cms_webinfo.php']['drawFooterHook']['sys_note'] = InfoModuleHook::class . '->render';
// Hook into the button bar
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['Backend\Template\Components\ButtonBar']['getButtonsHook']['sys_note'] = ButtonBarHook::class . '->getButtons';
}


/**
 * Extension: t3editor
 * File: C:/xampp8/htdocs/typo3/typo3/sysext/t3editor/ext_localconf.php
 */

namespace {




use TYPO3\CMS\T3editor\Form\Element\T3editorElement;
use TYPO3\CMS\T3editor\Hook\FileEditHook;
use TYPO3\CMS\T3editor\Hook\PageRendererRenderPreProcess;

defined('TYPO3') or die();

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['typo3/file_edit.php']['preOutputProcessingHook'][] =
    FileEditHook::class . '->preOutputProcessingHook';

// Hook to add t3editor requirejs config to PageRenderer in backend
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_pagerenderer.php']['render-preProcess'][] =
    PageRendererRenderPreProcess::class . '->addRequireJsConfiguration';

// Register backend FormEngine node
$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][1433089350] = [
    'nodeName' => 't3editor',
    'priority' => 40,
    'class' => T3editorElement::class,
];
}


/**
 * Extension: tstemplate
 * File: C:/xampp8/htdocs/typo3/typo3/sysext/tstemplate/ext_localconf.php
 */

namespace {




use TYPO3\CMS\Tstemplate\Hooks\DataHandlerClearCachePostProcHook;

defined('TYPO3') or die();

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['clearCachePostProc']['tstemplate'] = DataHandlerClearCachePostProcHook::class . '->clearPageCacheIfNecessary';
}


#