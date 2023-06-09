<?php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final
 */
class DependencyInjectionContainer_d20f620e0324c9bf67c176efa478d3f764fc258c extends Container
{
    private $parameters = [];
    private $getService;

    public function __construct()
    {
        $this->getService = \Closure::fromCallable([$this, 'getService']);
        $this->services = $this->privates = [];
        $this->syntheticIds = [
            '_early.Composer\\Autoload\\ClassLoader' => true,
            '_early.TYPO3\\CMS\\Core\\Configuration\\ConfigurationManager' => true,
            '_early.TYPO3\\CMS\\Core\\Core\\ApplicationContext' => true,
            '_early.TYPO3\\CMS\\Core\\DependencyInjection\\ContainerBuilder' => true,
            '_early.TYPO3\\CMS\\Core\\Log\\LogManager' => true,
            '_early.TYPO3\\CMS\\Core\\Package\\PackageManager' => true,
            '_early.boot.state' => true,
            '_early.cache.assets' => true,
            '_early.cache.core' => true,
            '_early.cache.di' => true,
            'service_provider_registry' => true,
        ];
        $this->methodMap = [
            'BK2K\\BootstrapPackage\\Backend\\ToolbarItem\\VersionToolbarItem' => 'getVersionToolbarItemService',
            'BK2K\\BootstrapPackage\\Service\\BrandingService' => 'getBrandingServiceService',
            'Extcode\\CartProducts\\Controller\\ProductController' => 'getProductControllerService',
            'Extcode\\CartProducts\\Domain\\Repository\\CategoryRepository' => 'getCategoryRepositoryService',
            'Extcode\\CartProducts\\Domain\\Repository\\Product\\BeVariantAttributeOptionRepository' => 'getBeVariantAttributeOptionRepositoryService',
            'Extcode\\CartProducts\\Domain\\Repository\\Product\\BeVariantAttributeRepository' => 'getBeVariantAttributeRepositoryService',
            'Extcode\\CartProducts\\Domain\\Repository\\Product\\BeVariantRepository' => 'getBeVariantRepositoryService',
            'Extcode\\CartProducts\\Domain\\Repository\\Product\\ProductRepository' => 'getProductRepositoryService',
            'Extcode\\CartProducts\\Domain\\Repository\\Product\\SpecialPriceRepository' => 'getSpecialPriceRepositoryService',
            'Extcode\\CartProducts\\EventListener\\CheckProductAvailability' => 'getCheckProductAvailabilityService',
            'Extcode\\CartProducts\\EventListener\\Order\\Stock\\FlushCache' => 'getFlushCacheService',
            'Extcode\\CartProducts\\EventListener\\Order\\Stock\\HandleStock' => 'getHandleStockService',
            'Extcode\\CartProducts\\EventListener\\ProcessOrderCreate\\FlushCache' => 'getFlushCache2Service',
            'Extcode\\CartProducts\\EventListener\\ProcessOrderCreate\\HandleStock' => 'getHandleStock2Service',
            'Extcode\\CartProducts\\EventListener\\RetrieveProductsFromRequest' => 'getRetrieveProductsFromRequestService',
            'Extcode\\CartProducts\\Updates\\SlugUpdater' => 'getSlugUpdaterService',
            'Extcode\\CartProducts\\ViewHelpers\\CanonicalTagViewHelper' => 'getCanonicalTagViewHelperService',
            'Extcode\\CartProducts\\ViewHelpers\\Form\\VariantSelectViewHelper' => 'getVariantSelectViewHelperService',
            'Extcode\\CartProducts\\ViewHelpers\\Link\\ProductViewHelper' => 'getProductViewHelperService',
            'Extcode\\CartProducts\\ViewHelpers\\Product\\BestSpecialPriceDiscountViewHelper' => 'getBestSpecialPriceDiscountViewHelperService',
            'Extcode\\CartProducts\\ViewHelpers\\Product\\BestSpecialPricePercentageDiscountViewHelper' => 'getBestSpecialPricePercentageDiscountViewHelperService',
            'Extcode\\CartProducts\\ViewHelpers\\Product\\BestSpecialPriceViewHelper' => 'getBestSpecialPriceViewHelperService',
            'Extcode\\CartProducts\\ViewHelpers\\Product\\IfBestSpecialPriceAvailableViewHelper' => 'getIfBestSpecialPriceAvailableViewHelperService',
            'Extcode\\Cart\\Controller\\Backend\\ActionController' => 'getActionControllerService',
            'Extcode\\Cart\\Controller\\Backend\\Order\\DocumentController' => 'getDocumentControllerService',
            'Extcode\\Cart\\Controller\\Backend\\Order\\OrderController' => 'getOrderControllerService',
            'Extcode\\Cart\\Controller\\Backend\\Order\\PaymentController' => 'getPaymentControllerService',
            'Extcode\\Cart\\Controller\\Backend\\Order\\ShippingController' => 'getShippingControllerService',
            'Extcode\\Cart\\Controller\\Cart\\ActionController' => 'getActionController2Service',
            'Extcode\\Cart\\Controller\\Cart\\CartController' => 'getCartControllerService',
            'Extcode\\Cart\\Controller\\Cart\\CartPreviewController' => 'getCartPreviewControllerService',
            'Extcode\\Cart\\Controller\\Cart\\CountryController' => 'getCountryControllerService',
            'Extcode\\Cart\\Controller\\Cart\\CouponController' => 'getCouponControllerService',
            'Extcode\\Cart\\Controller\\Cart\\CurrencyController' => 'getCurrencyControllerService',
            'Extcode\\Cart\\Controller\\Cart\\OrderController' => 'getOrderController2Service',
            'Extcode\\Cart\\Controller\\Cart\\PaymentController' => 'getPaymentController2Service',
            'Extcode\\Cart\\Controller\\Cart\\ProductController' => 'getProductController2Service',
            'Extcode\\Cart\\Controller\\Cart\\ShippingController' => 'getShippingController2Service',
            'Extcode\\Cart\\Controller\\Order\\OrderController' => 'getOrderController3Service',
            'Extcode\\Cart\\Controller\\Order\\PaymentController' => 'getPaymentController3Service',
            'Extcode\\Cart\\Domain\\Repository\\CartRepository' => 'getCartRepositoryService',
            'Extcode\\Cart\\Domain\\Repository\\CouponRepository' => 'getCouponRepositoryService',
            'Extcode\\Cart\\Domain\\Repository\\Order\\BillingAddressRepository' => 'getBillingAddressRepositoryService',
            'Extcode\\Cart\\Domain\\Repository\\Order\\DiscountRepository' => 'getDiscountRepositoryService',
            'Extcode\\Cart\\Domain\\Repository\\Order\\ItemRepository' => 'getItemRepositoryService',
            'Extcode\\Cart\\Domain\\Repository\\Order\\PaymentRepository' => 'getPaymentRepositoryService',
            'Extcode\\Cart\\Domain\\Repository\\Order\\ProductAdditionalRepository' => 'getProductAdditionalRepositoryService',
            'Extcode\\Cart\\Domain\\Repository\\Order\\ProductRepository' => 'getProductRepository2Service',
            'Extcode\\Cart\\Domain\\Repository\\Order\\ShippingAddressRepository' => 'getShippingAddressRepositoryService',
            'Extcode\\Cart\\Domain\\Repository\\Order\\ShippingRepository' => 'getShippingRepositoryService',
            'Extcode\\Cart\\Domain\\Repository\\Order\\TaxClassRepository' => 'getTaxClassRepositoryService',
            'Extcode\\Cart\\Domain\\Repository\\Order\\TaxRepository' => 'getTaxRepositoryService',
            'Extcode\\Cart\\Domain\\Repository\\Order\\TransactionRepository' => 'getTransactionRepositoryService',
            'Extcode\\Cart\\EventListener\\Order\\Create\\Order' => 'getOrderService',
            'Extcode\\Cart\\EventListener\\Order\\Create\\OrderNumber' => 'getOrderNumberService',
            'Extcode\\Cart\\EventListener\\Order\\Finish\\ClearCart' => 'getClearCartService',
            'Extcode\\Cart\\EventListener\\Order\\Finish\\Email' => 'getEmailService',
            'Extcode\\Cart\\EventListener\\ProcessOrderCreate\\ClearCart' => 'getClearCart2Service',
            'Extcode\\Cart\\EventListener\\ProcessOrderCreate\\Email' => 'getEmail2Service',
            'Extcode\\Cart\\EventListener\\ProcessOrderCreate\\Order' => 'getOrder2Service',
            'Extcode\\Cart\\EventListener\\ProcessOrderCreate\\OrderNumber' => 'getOrderNumber2Service',
            'Extcode\\Cart\\Service\\MailHandler' => 'getMailHandlerService',
            'Extcode\\Cart\\Service\\SessionHandler' => 'getSessionHandlerService',
            'Extcode\\Cart\\Service\\TaxClassService' => 'getTaxClassServiceService',
            'Extcode\\Cart\\Utility\\TemplateLayout' => 'getTemplateLayoutService',
            'Extcode\\Cart\\ViewHelpers\\AdditionalJsonViewHelper' => 'getAdditionalJsonViewHelperService',
            'Extcode\\Cart\\ViewHelpers\\CsvHeaderViewHelper' => 'getCsvHeaderViewHelperService',
            'Extcode\\Cart\\ViewHelpers\\CsvValuesViewHelper' => 'getCsvValuesViewHelperService',
            'Extcode\\Cart\\ViewHelpers\\FieldNameViewHelper' => 'getFieldNameViewHelperService',
            'Extcode\\Cart\\ViewHelpers\\Form\\IsServiceAvailableAtPriceViewHelper' => 'getIsServiceAvailableAtPriceViewHelperService',
            'Extcode\\Cart\\ViewHelpers\\Form\\SelectViewHelper' => 'getSelectViewHelperService',
            'Extcode\\Cart\\ViewHelpers\\Format\\CurrencyViewHelper' => 'getCurrencyViewHelperService',
            'Extcode\\Cart\\ViewHelpers\\Format\\NothingViewHelper' => 'getNothingViewHelperService',
            'Extcode\\Cart\\ViewHelpers\\IncludeFileViewHelper' => 'getIncludeFileViewHelperService',
            'Extcode\\Cart\\ViewHelpers\\Link\\ActionViewHelper' => 'getActionViewHelperService',
            'Extcode\\Cart\\ViewHelpers\\MapModelPropertiesToTableColumnsViewHelper' => 'getMapModelPropertiesToTableColumnsViewHelperService',
            'Extcode\\Cart\\ViewHelpers\\MetaTagViewHelper' => 'getMetaTagViewHelperService',
            'Extcode\\Cart\\ViewHelpers\\TitleTagViewHelper' => 'getTitleTagViewHelperService',
            'Extcode\\Cart\\ViewHelpers\\Traversable\\ExtractViewHelper' => 'getExtractViewHelperService',
            'Extcode\\Cart\\ViewHelpers\\Variable\\GetViewHelper' => 'getGetViewHelperService',
            'Extcode\\Cart\\ViewHelpers\\Variable\\SetViewHelper' => 'getSetViewHelperService',
            'GuzzleHttp\\ClientInterface' => 'getClientInterfaceService',
            'In2code\\Femanager\\DataProvider\\CountryDataProvider' => 'getCountryDataProviderService',
            'In2code\\Femanager\\DataProvider\\CountryZonesDataProvider' => 'getCountryZonesDataProviderService',
            'In2code\\Femanager\\Domain\\Repository\\LogRepository' => 'getLogRepositoryService',
            'In2code\\Femanager\\Domain\\Repository\\UserGroupRepository' => 'getUserGroupRepositoryService',
            'In2code\\Femanager\\Domain\\Repository\\UserRepository' => 'getUserRepositoryService',
            'In2code\\Femanager\\Domain\\Service\\RatelimiterService' => 'getRatelimiterServiceService',
            'In2code\\Femanager\\Domain\\Service\\SendMailService' => 'getSendMailServiceService',
            'In2code\\Femanager\\Domain\\Validator\\ShouldValidateStateCondition' => 'getShouldValidateStateConditionService',
            'In2code\\Femanager\\Finisher\\FinisherRunner' => 'getFinisherRunnerService',
            'In2code\\Femanager\\Utility\\LogUtility' => 'getLogUtilityService',
            'OrdersPerDayWidgetConfiguration' => 'getOrdersPerDayWidgetConfigurationService',
            'PaymentPaidShippingOpenWidgetConfiguration' => 'getPaymentPaidShippingOpenWidgetConfigurationService',
            'Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1' => 'getEventDispatcherInterfaceDecorated1Service',
            'Psr\\Http\\Client\\ClientInterface' => 'getClientInterface2Service',
            'Psr\\Http\\Message\\ResponseFactoryInterface' => 'getResponseFactoryInterfaceService',
            'Psr\\Http\\Message\\ServerRequestFactoryInterface' => 'getServerRequestFactoryInterfaceService',
            'Psr\\Http\\Message\\StreamFactoryInterface' => 'getStreamFactoryInterfaceService',
            'Psr\\Http\\Message\\UploadedFileFactoryInterface' => 'getUploadedFileFactoryInterfaceService',
            'Psr\\Http\\Message\\UriFactoryInterface' => 'getUriFactoryInterfaceService',
            'TYPO3\\CMS\\About\\Controller\\AboutController' => 'getAboutControllerService',
            'TYPO3\\CMS\\Backend\\Command\\LockBackendCommand' => 'getLockBackendCommandService',
            'TYPO3\\CMS\\Backend\\Command\\ReferenceIndexUpdateCommand' => 'getReferenceIndexUpdateCommandService',
            'TYPO3\\CMS\\Backend\\Command\\ResetPasswordCommand' => 'getResetPasswordCommandService',
            'TYPO3\\CMS\\Backend\\Command\\UnlockBackendCommand' => 'getUnlockBackendCommandService',
            'TYPO3\\CMS\\Backend\\Compatibility\\SlotReplacement' => 'getSlotReplacementService',
            'TYPO3\\CMS\\Backend\\Controller\\EditDocumentController' => 'getEditDocumentControllerService',
            'TYPO3\\CMS\\Backend\\Controller\\File\\ImageProcessController' => 'getImageProcessControllerService',
            'TYPO3\\CMS\\Backend\\Controller\\HelpController' => 'getHelpControllerService',
            'TYPO3\\CMS\\Backend\\Controller\\LoginController' => 'getLoginControllerService',
            'TYPO3\\CMS\\Backend\\Domain\\Repository\\Module\\BackendModuleRepository' => 'getBackendModuleRepositoryService',
            'TYPO3\\CMS\\Backend\\Form\\FormDataProvider\\SiteDatabaseEditRow' => 'getSiteDatabaseEditRowService',
            'TYPO3\\CMS\\Backend\\History\\RecordHistoryRollback' => 'getRecordHistoryRollbackService',
            'TYPO3\\CMS\\Backend\\Http\\Application' => 'getApplicationService',
            'TYPO3\\CMS\\Backend\\Http\\RequestHandler' => 'getRequestHandlerService',
            'TYPO3\\CMS\\Backend\\Http\\RouteDispatcher' => 'getRouteDispatcherService',
            'TYPO3\\CMS\\Backend\\Middleware\\AdditionalResponseHeaders' => 'getAdditionalResponseHeadersService',
            'TYPO3\\CMS\\Backend\\Middleware\\BackendRouteInitialization' => 'getBackendRouteInitializationService',
            'TYPO3\\CMS\\Backend\\Middleware\\BackendUserAuthenticator' => 'getBackendUserAuthenticatorService',
            'TYPO3\\CMS\\Backend\\Middleware\\ForcedHttpsBackendRedirector' => 'getForcedHttpsBackendRedirectorService',
            'TYPO3\\CMS\\Backend\\Middleware\\LockedBackendGuard' => 'getLockedBackendGuardService',
            'TYPO3\\CMS\\Backend\\Middleware\\OutputCompression' => 'getOutputCompressionService',
            'TYPO3\\CMS\\Backend\\Middleware\\SiteResolver' => 'getSiteResolverService',
            'TYPO3\\CMS\\Backend\\Module\\ModuleStorage' => 'getModuleStorageService',
            'TYPO3\\CMS\\Backend\\Routing\\Router_decorated_1' => 'getRouterDecorated1Service',
            'TYPO3\\CMS\\Backend\\Routing\\UriBuilder' => 'getUriBuilderService',
            'TYPO3\\CMS\\Backend\\Security\\CategoryPermissionsAspect' => 'getCategoryPermissionsAspectService',
            'TYPO3\\CMS\\Backend\\Template\\ModuleTemplate' => 'getModuleTemplateService',
            'TYPO3\\CMS\\Backend\\ViewHelpers\\ArrayBrowserViewHelper' => 'getArrayBrowserViewHelperService',
            'TYPO3\\CMS\\Backend\\ViewHelpers\\AvatarViewHelper' => 'getAvatarViewHelperService',
            'TYPO3\\CMS\\Backend\\ViewHelpers\\LanguageColumnViewHelper' => 'getLanguageColumnViewHelperService',
            'TYPO3\\CMS\\Backend\\ViewHelpers\\Link\\EditRecordViewHelper' => 'getEditRecordViewHelperService',
            'TYPO3\\CMS\\Backend\\ViewHelpers\\Link\\NewRecordViewHelper' => 'getNewRecordViewHelperService',
            'TYPO3\\CMS\\Backend\\ViewHelpers\\ModuleLayoutViewHelper' => 'getModuleLayoutViewHelperService',
            'TYPO3\\CMS\\Backend\\ViewHelpers\\ModuleLayout\\Button\\LinkButtonViewHelper' => 'getLinkButtonViewHelperService',
            'TYPO3\\CMS\\Backend\\ViewHelpers\\ModuleLayout\\Button\\ShortcutButtonViewHelper' => 'getShortcutButtonViewHelperService',
            'TYPO3\\CMS\\Backend\\ViewHelpers\\ModuleLayout\\MenuItemViewHelper' => 'getMenuItemViewHelperService',
            'TYPO3\\CMS\\Backend\\ViewHelpers\\ModuleLayout\\MenuViewHelper' => 'getMenuViewHelperService',
            'TYPO3\\CMS\\Backend\\ViewHelpers\\ModuleLinkViewHelper' => 'getModuleLinkViewHelperService',
            'TYPO3\\CMS\\Backend\\ViewHelpers\\ThumbnailViewHelper' => 'getThumbnailViewHelperService',
            'TYPO3\\CMS\\Backend\\ViewHelpers\\Uri\\EditRecordViewHelper' => 'getEditRecordViewHelper2Service',
            'TYPO3\\CMS\\Backend\\ViewHelpers\\Uri\\NewRecordViewHelper' => 'getNewRecordViewHelper2Service',
            'TYPO3\\CMS\\Backend\\View\\BackendLayoutView' => 'getBackendLayoutViewService',
            'TYPO3\\CMS\\Backend\\View\\BackendLayout\\DataProviderCollection' => 'getDataProviderCollectionService',
            'TYPO3\\CMS\\Backend\\View\\BackendLayout\\DataProviderContext' => 'getDataProviderContextService',
            'TYPO3\\CMS\\Backend\\View\\BackendLayout\\RecordRememberer' => 'getRecordRemembererService',
            'TYPO3\\CMS\\Backend\\View\\PageLayoutView' => 'getPageLayoutViewService',
            'TYPO3\\CMS\\Backend\\View\\PageLayoutViewDrawEmptyColposContent' => 'getPageLayoutViewDrawEmptyColposContentService',
            'TYPO3\\CMS\\Belog\\Controller\\BackendLogController' => 'getBackendLogControllerService',
            'TYPO3\\CMS\\Belog\\Controller\\SystemInformationController' => 'getSystemInformationControllerService',
            'TYPO3\\CMS\\Belog\\Domain\\Repository\\LogEntryRepository' => 'getLogEntryRepositoryService',
            'TYPO3\\CMS\\Belog\\Domain\\Repository\\WorkspaceRepository' => 'getWorkspaceRepositoryService',
            'TYPO3\\CMS\\Belog\\ViewHelpers\\Be\\PagePathViewHelper' => 'getPagePathViewHelperService',
            'TYPO3\\CMS\\Belog\\ViewHelpers\\Form\\TranslateLabelSelectViewHelper' => 'getTranslateLabelSelectViewHelperService',
            'TYPO3\\CMS\\Belog\\ViewHelpers\\FormatDetailsViewHelper' => 'getFormatDetailsViewHelperService',
            'TYPO3\\CMS\\Belog\\ViewHelpers\\UsernameViewHelper' => 'getUsernameViewHelperService',
            'TYPO3\\CMS\\Belog\\ViewHelpers\\WorkspaceTitleViewHelper' => 'getWorkspaceTitleViewHelperService',
            'TYPO3\\CMS\\Beuser\\Compatibility\\SlotReplacement' => 'getSlotReplacement2Service',
            'TYPO3\\CMS\\Beuser\\Controller\\BackendUserController' => 'getBackendUserControllerService',
            'TYPO3\\CMS\\Beuser\\Controller\\BackendUserGroupController' => 'getBackendUserGroupControllerService',
            'TYPO3\\CMS\\Beuser\\Controller\\PermissionController' => 'getPermissionControllerService',
            'TYPO3\\CMS\\Beuser\\Domain\\Repository\\BackendUserGroupRepository' => 'getBackendUserGroupRepositoryService',
            'TYPO3\\CMS\\Beuser\\Domain\\Repository\\BackendUserRepository' => 'getBackendUserRepositoryService',
            'TYPO3\\CMS\\Beuser\\Domain\\Repository\\BackendUserSessionRepository' => 'getBackendUserSessionRepositoryService',
            'TYPO3\\CMS\\Beuser\\Service\\ModuleDataStorageService' => 'getModuleDataStorageServiceService',
            'TYPO3\\CMS\\Beuser\\ViewHelpers\\ArrayElementViewHelper' => 'getArrayElementViewHelperService',
            'TYPO3\\CMS\\Beuser\\ViewHelpers\\Display\\TableAccessViewHelper' => 'getTableAccessViewHelperService',
            'TYPO3\\CMS\\Beuser\\ViewHelpers\\PermissionsViewHelper' => 'getPermissionsViewHelperService',
            'TYPO3\\CMS\\Beuser\\ViewHelpers\\SpriteIconForRecordViewHelper' => 'getSpriteIconForRecordViewHelperService',
            'TYPO3\\CMS\\Beuser\\ViewHelpers\\SwitchUserViewHelper' => 'getSwitchUserViewHelperService',
            'TYPO3\\CMS\\Core\\Cache\\CacheManager' => 'getCacheManagerService',
            'TYPO3\\CMS\\Core\\Cache\\DatabaseSchemaService' => 'getDatabaseSchemaServiceService',
            'TYPO3\\CMS\\Core\\Category\\CategoryRegistry' => 'getCategoryRegistryService',
            'TYPO3\\CMS\\Core\\Charset\\CharsetConverter' => 'getCharsetConverterService',
            'TYPO3\\CMS\\Core\\Command\\DumpAutoloadCommand' => 'getDumpAutoloadCommandService',
            'TYPO3\\CMS\\Core\\Command\\ExtensionListCommand' => 'getExtensionListCommandService',
            'TYPO3\\CMS\\Core\\Command\\SendEmailCommand' => 'getSendEmailCommandService',
            'TYPO3\\CMS\\Core\\Command\\SiteListCommand' => 'getSiteListCommandService',
            'TYPO3\\CMS\\Core\\Command\\SiteShowCommand' => 'getSiteShowCommandService',
            'TYPO3\\CMS\\Core\\Compatibility\\SlotReplacement' => 'getSlotReplacement3Service',
            'TYPO3\\CMS\\Core\\Configuration\\Loader\\PageTsConfigLoader' => 'getPageTsConfigLoaderService',
            'TYPO3\\CMS\\Core\\Configuration\\SiteConfiguration' => 'getSiteConfigurationService',
            'TYPO3\\CMS\\Core\\Console\\CommandApplication' => 'getCommandApplicationService',
            'TYPO3\\CMS\\Core\\Console\\CommandRegistry_decorated_1' => 'getCommandRegistryDecorated1Service',
            'TYPO3\\CMS\\Core\\Context\\Context' => 'getContextService',
            'TYPO3\\CMS\\Core\\Controller\\FileDumpController' => 'getFileDumpControllerService',
            'TYPO3\\CMS\\Core\\Core\\ClassLoadingInformation' => 'getClassLoadingInformationService',
            'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\PasswordHashFactory' => 'getPasswordHashFactoryService',
            'TYPO3\\CMS\\Core\\Database\\Schema\\SqlReader' => 'getSqlReaderService',
            'TYPO3\\CMS\\Core\\Database\\SoftReferenceIndex' => 'getSoftReferenceIndexService',
            'TYPO3\\CMS\\Core\\Error\\DebugExceptionHandler' => 'getDebugExceptionHandlerService',
            'TYPO3\\CMS\\Core\\Error\\ProductionExceptionHandler' => 'getProductionExceptionHandlerService',
            'TYPO3\\CMS\\Core\\EventDispatcher\\EventDispatcher' => 'getEventDispatcherService',
            'TYPO3\\CMS\\Core\\EventDispatcher\\ListenerProvider_decorated_1' => 'getListenerProviderDecorated1Service',
            'TYPO3\\CMS\\Core\\Html\\DefaultSanitizerBuilder' => 'getDefaultSanitizerBuilderService',
            'TYPO3\\CMS\\Core\\Html\\RteHtmlParser' => 'getRteHtmlParserService',
            'TYPO3\\CMS\\Core\\Http\\MiddlewareStackResolver' => 'getMiddlewareStackResolverService',
            'TYPO3\\CMS\\Core\\Http\\RequestFactory' => 'getRequestFactoryService',
            'TYPO3\\CMS\\Core\\Imaging\\IconFactory' => 'getIconFactoryService',
            'TYPO3\\CMS\\Core\\Imaging\\IconRegistry' => 'getIconRegistryService',
            'TYPO3\\CMS\\Core\\LinkHandling\\LinkService' => 'getLinkServiceService',
            'TYPO3\\CMS\\Core\\Localization\\LanguageService' => 'getLanguageServiceService',
            'TYPO3\\CMS\\Core\\Localization\\LanguageServiceFactory' => 'getLanguageServiceFactoryService',
            'TYPO3\\CMS\\Core\\Localization\\LanguageStore' => 'getLanguageStoreService',
            'TYPO3\\CMS\\Core\\Localization\\Locales' => 'getLocalesService',
            'TYPO3\\CMS\\Core\\Localization\\LocalizationFactory' => 'getLocalizationFactoryService',
            'TYPO3\\CMS\\Core\\Locking\\LockFactory' => 'getLockFactoryService',
            'TYPO3\\CMS\\Core\\Mail\\Mailer' => 'getMailerService',
            'TYPO3\\CMS\\Core\\Mail\\MemorySpool' => 'getMemorySpoolService',
            'TYPO3\\CMS\\Core\\Mail\\TransportFactory' => 'getTransportFactoryService',
            'TYPO3\\CMS\\Core\\Messaging\\FlashMessageService' => 'getFlashMessageServiceService',
            'TYPO3\\CMS\\Core\\MetaTag\\MetaTagManagerRegistry' => 'getMetaTagManagerRegistryService',
            'TYPO3\\CMS\\Core\\Middleware\\NormalizedParamsAttribute' => 'getNormalizedParamsAttributeService',
            'TYPO3\\CMS\\Core\\Package\\FailsafePackageManager' => 'getFailsafePackageManagerService',
            'TYPO3\\CMS\\Core\\PageTitle\\PageTitleProviderManager' => 'getPageTitleProviderManagerService',
            'TYPO3\\CMS\\Core\\PageTitle\\RecordPageTitleProvider' => 'getRecordPageTitleProviderService',
            'TYPO3\\CMS\\Core\\Page\\AssetCollector' => 'getAssetCollectorService',
            'TYPO3\\CMS\\Core\\Page\\AssetRenderer' => 'getAssetRendererService',
            'TYPO3\\CMS\\Core\\Page\\PageRenderer' => 'getPageRendererService',
            'TYPO3\\CMS\\Core\\Registry' => 'getRegistryService',
            'TYPO3\\CMS\\Core\\Resource\\Collection\\FileCollectionRegistry' => 'getFileCollectionRegistryService',
            'TYPO3\\CMS\\Core\\Resource\\Driver\\DriverRegistry' => 'getDriverRegistryService',
            'TYPO3\\CMS\\Core\\Resource\\FileRepository' => 'getFileRepositoryService',
            'TYPO3\\CMS\\Core\\Resource\\Index\\ExtractorRegistry' => 'getExtractorRegistryService',
            'TYPO3\\CMS\\Core\\Resource\\Index\\FileIndexRepository' => 'getFileIndexRepositoryService',
            'TYPO3\\CMS\\Core\\Resource\\Index\\MetaDataRepository' => 'getMetaDataRepositoryService',
            'TYPO3\\CMS\\Core\\Resource\\MetaDataEventListener' => 'getMetaDataEventListenerService',
            'TYPO3\\CMS\\Core\\Resource\\OnlineMedia\\Helpers\\OnlineMediaHelperRegistry' => 'getOnlineMediaHelperRegistryService',
            'TYPO3\\CMS\\Core\\Resource\\ProcessedFileRepository' => 'getProcessedFileRepositoryService',
            'TYPO3\\CMS\\Core\\Resource\\Processing\\FileDeletionAspect' => 'getFileDeletionAspectService',
            'TYPO3\\CMS\\Core\\Resource\\Processing\\ProcessorRegistry' => 'getProcessorRegistryService',
            'TYPO3\\CMS\\Core\\Resource\\Processing\\TaskTypeRegistry' => 'getTaskTypeRegistryService',
            'TYPO3\\CMS\\Core\\Resource\\Rendering\\AudioTagRenderer' => 'getAudioTagRendererService',
            'TYPO3\\CMS\\Core\\Resource\\Rendering\\RendererRegistry' => 'getRendererRegistryService',
            'TYPO3\\CMS\\Core\\Resource\\Rendering\\VideoTagRenderer' => 'getVideoTagRendererService',
            'TYPO3\\CMS\\Core\\Resource\\Rendering\\VimeoRenderer' => 'getVimeoRendererService',
            'TYPO3\\CMS\\Core\\Resource\\Rendering\\YouTubeRenderer' => 'getYouTubeRendererService',
            'TYPO3\\CMS\\Core\\Resource\\ResourceFactory' => 'getResourceFactoryService',
            'TYPO3\\CMS\\Core\\Resource\\Security\\FileMetadataPermissionsAspect' => 'getFileMetadataPermissionsAspectService',
            'TYPO3\\CMS\\Core\\Resource\\Security\\StoragePermissionsAspect' => 'getStoragePermissionsAspectService',
            'TYPO3\\CMS\\Core\\Resource\\Security\\SvgEventListener' => 'getSvgEventListenerService',
            'TYPO3\\CMS\\Core\\Resource\\Security\\SvgHookHandler' => 'getSvgHookHandlerService',
            'TYPO3\\CMS\\Core\\Resource\\Security\\SvgTypeCheck' => 'getSvgTypeCheckService',
            'TYPO3\\CMS\\Core\\Resource\\StorageRepository' => 'getStorageRepositoryService',
            'TYPO3\\CMS\\Core\\Resource\\TextExtraction\\TextExtractorRegistry' => 'getTextExtractorRegistryService',
            'TYPO3\\CMS\\Core\\Routing\\SiteMatcher' => 'getSiteMatcherService',
            'TYPO3\\CMS\\Core\\Service\\DependencyOrderingService' => 'getDependencyOrderingServiceService',
            'TYPO3\\CMS\\Core\\Service\\FlexFormService' => 'getFlexFormServiceService',
            'TYPO3\\CMS\\Core\\Service\\OpcodeCacheService' => 'getOpcodeCacheServiceService',
            'TYPO3\\CMS\\Core\\Session\\SessionManager' => 'getSessionManagerService',
            'TYPO3\\CMS\\Core\\TimeTracker\\TimeTracker' => 'getTimeTrackerService',
            'TYPO3\\CMS\\Core\\Tree\\TableConfiguration\\DatabaseTreeDataProvider' => 'getDatabaseTreeDataProviderService',
            'TYPO3\\CMS\\Core\\TypoScript\\Parser\\ConstantConfigurationParser' => 'getConstantConfigurationParserService',
            'TYPO3\\CMS\\Core\\TypoScript\\TypoScriptService' => 'getTypoScriptServiceService',
            'TYPO3\\CMS\\Core\\ViewHelpers\\Form\\TypoScriptConstantsViewHelper' => 'getTypoScriptConstantsViewHelperService',
            'TYPO3\\CMS\\Core\\ViewHelpers\\IconForRecordViewHelper' => 'getIconForRecordViewHelperService',
            'TYPO3\\CMS\\Core\\ViewHelpers\\IconForResourceViewHelper' => 'getIconForResourceViewHelperService',
            'TYPO3\\CMS\\Core\\ViewHelpers\\IconViewHelper' => 'getIconViewHelperService',
            'TYPO3\\CMS\\Dashboard\\Controller\\DashboardController' => 'getDashboardControllerService',
            'TYPO3\\CMS\\Dashboard\\Controller\\WidgetAjaxController' => 'getWidgetAjaxControllerService',
            'TYPO3\\CMS\\Dashboard\\DashboardPresetRegistry_decorated_1' => 'getDashboardPresetRegistryDecorated1Service',
            'TYPO3\\CMS\\Dashboard\\WidgetGroupRegistry_decorated_1' => 'getWidgetGroupRegistryDecorated1Service',
            'TYPO3\\CMS\\Dashboard\\WidgetRegistry' => 'getWidgetRegistryService',
            'TYPO3\\CMS\\Extbase\\Compatibility\\SlotReplacement' => 'getSlotReplacement4Service',
            'TYPO3\\CMS\\Extbase\\Configuration\\BackendConfigurationManager' => 'getBackendConfigurationManagerService',
            'TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager' => 'getConfigurationManagerService',
            'TYPO3\\CMS\\Extbase\\Configuration\\FrontendConfigurationManager' => 'getFrontendConfigurationManagerService',
            'TYPO3\\CMS\\Extbase\\Configuration\\RequestHandlersConfigurationFactory' => 'getRequestHandlersConfigurationFactoryService',
            'TYPO3\\CMS\\Extbase\\Core\\Bootstrap' => 'getBootstrapService',
            'TYPO3\\CMS\\Extbase\\Domain\\Repository\\BackendUserGroupRepository' => 'getBackendUserGroupRepository2Service',
            'TYPO3\\CMS\\Extbase\\Domain\\Repository\\BackendUserRepository' => 'getBackendUserRepository2Service',
            'TYPO3\\CMS\\Extbase\\Domain\\Repository\\CategoryRepository' => 'getCategoryRepository2Service',
            'TYPO3\\CMS\\Extbase\\Domain\\Repository\\FileMountRepository' => 'getFileMountRepositoryService',
            'TYPO3\\CMS\\Extbase\\Domain\\Repository\\FrontendUserGroupRepository' => 'getFrontendUserGroupRepositoryService',
            'TYPO3\\CMS\\Extbase\\Domain\\Repository\\FrontendUserRepository' => 'getFrontendUserRepositoryService',
            'TYPO3\\CMS\\Extbase\\Middleware\\SignalSlotDeprecator' => 'getSignalSlotDeprecatorService',
            'TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ActionController' => 'getActionController3Service',
            'TYPO3\\CMS\\Extbase\\Mvc\\Controller\\MvcPropertyMappingConfigurationService' => 'getMvcPropertyMappingConfigurationServiceService',
            'TYPO3\\CMS\\Extbase\\Mvc\\Dispatcher' => 'getDispatcherService',
            'TYPO3\\CMS\\Extbase\\Mvc\\View\\EmptyView' => 'getEmptyViewService',
            'TYPO3\\CMS\\Extbase\\Mvc\\View\\JsonView' => 'getJsonViewService',
            'TYPO3\\CMS\\Extbase\\Mvc\\View\\NotFoundView' => 'getNotFoundViewService',
            'TYPO3\\CMS\\Extbase\\Mvc\\Web\\BackendRequestHandler' => 'getBackendRequestHandlerService',
            'TYPO3\\CMS\\Extbase\\Mvc\\Web\\FrontendRequestHandler' => 'getFrontendRequestHandlerService',
            'TYPO3\\CMS\\Extbase\\Mvc\\Web\\RequestBuilder' => 'getRequestBuilderService',
            'TYPO3\\CMS\\Extbase\\Object\\Container\\Container' => 'getContainerService',
            'TYPO3\\CMS\\Extbase\\Object\\ObjectManager' => 'getObjectManagerService',
            'TYPO3\\CMS\\Extbase\\Persistence\\ClassesConfigurationFactory' => 'getClassesConfigurationFactoryService',
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Backend' => 'getBackendService',
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Mapper\\DataMapFactory' => 'getDataMapFactoryService',
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager' => 'getPersistenceManagerService',
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Qom\\QueryObjectModelFactory' => 'getQueryObjectModelFactoryService',
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\QueryFactory' => 'getQueryFactoryService',
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Session' => 'getSessionService',
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Storage\\Typo3DbBackend' => 'getTypo3DbBackendService',
            'TYPO3\\CMS\\Extbase\\Persistence\\Repository' => 'getRepositoryService',
            'TYPO3\\CMS\\Extbase\\Property\\PropertyMapper' => 'getPropertyMapperService',
            'TYPO3\\CMS\\Extbase\\Property\\PropertyMappingConfigurationBuilder' => 'getPropertyMappingConfigurationBuilderService',
            'TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\ArrayConverter' => 'getArrayConverterService',
            'TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\BooleanConverter' => 'getBooleanConverterService',
            'TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\CoreTypeConverter' => 'getCoreTypeConverterService',
            'TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\DateTimeConverter' => 'getDateTimeConverterService',
            'TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\FileConverter' => 'getFileConverterService',
            'TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\FileReferenceConverter' => 'getFileReferenceConverterService',
            'TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\FloatConverter' => 'getFloatConverterService',
            'TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\FolderBasedFileCollectionConverter' => 'getFolderBasedFileCollectionConverterService',
            'TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\FolderConverter' => 'getFolderConverterService',
            'TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\IntegerConverter' => 'getIntegerConverterService',
            'TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\ObjectConverter' => 'getObjectConverterService',
            'TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\ObjectStorageConverter' => 'getObjectStorageConverterService',
            'TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\PersistentObjectConverter' => 'getPersistentObjectConverterService',
            'TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\StaticFileCollectionConverter' => 'getStaticFileCollectionConverterService',
            'TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\StringConverter' => 'getStringConverterService',
            'TYPO3\\CMS\\Extbase\\Reflection\\ReflectionService' => 'getReflectionServiceService',
            'TYPO3\\CMS\\Extbase\\Security\\Cryptography\\HashService' => 'getHashServiceService',
            'TYPO3\\CMS\\Extbase\\Service\\CacheService' => 'getCacheServiceService',
            'TYPO3\\CMS\\Extbase\\Service\\EnvironmentService' => 'getEnvironmentServiceService',
            'TYPO3\\CMS\\Extbase\\Service\\ExtensionService' => 'getExtensionServiceService',
            'TYPO3\\CMS\\Extbase\\Service\\ImageService' => 'getImageServiceService',
            'TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher' => 'getDispatcher2Service',
            'TYPO3\\CMS\\Extbase\\Validation\\ValidatorResolver' => 'getValidatorResolverService',
            'TYPO3\\CMS\\Extensionmanager\\Command\\ActivateExtensionCommand' => 'getActivateExtensionCommandService',
            'TYPO3\\CMS\\Extensionmanager\\Command\\DeactivateExtensionCommand' => 'getDeactivateExtensionCommandService',
            'TYPO3\\CMS\\Extensionmanager\\Compatibility\\SlotReplacement' => 'getSlotReplacement5Service',
            'TYPO3\\CMS\\Extensionmanager\\Controller\\AbstractController' => 'getAbstractControllerService',
            'TYPO3\\CMS\\Extensionmanager\\Controller\\AbstractModuleController' => 'getAbstractModuleControllerService',
            'TYPO3\\CMS\\Extensionmanager\\Controller\\ActionController' => 'getActionController4Service',
            'TYPO3\\CMS\\Extensionmanager\\Controller\\DistributionController' => 'getDistributionControllerService',
            'TYPO3\\CMS\\Extensionmanager\\Controller\\DownloadController' => 'getDownloadControllerService',
            'TYPO3\\CMS\\Extensionmanager\\Controller\\ExtensionComposerStatusController' => 'getExtensionComposerStatusControllerService',
            'TYPO3\\CMS\\Extensionmanager\\Controller\\ListController' => 'getListControllerService',
            'TYPO3\\CMS\\Extensionmanager\\Controller\\UpdateFromTerController' => 'getUpdateFromTerControllerService',
            'TYPO3\\CMS\\Extensionmanager\\Controller\\UpdateScriptController' => 'getUpdateScriptControllerService',
            'TYPO3\\CMS\\Extensionmanager\\Controller\\UploadExtensionFileController' => 'getUploadExtensionFileControllerService',
            'TYPO3\\CMS\\Extensionmanager\\Domain\\Model\\DownloadQueue' => 'getDownloadQueueService',
            'TYPO3\\CMS\\Extensionmanager\\Domain\\Repository\\ExtensionRepository' => 'getExtensionRepositoryService',
            'TYPO3\\CMS\\Extensionmanager\\Domain\\Repository\\RepositoryRepository' => 'getRepositoryRepositoryService',
            'TYPO3\\CMS\\Extensionmanager\\Service\\ExtensionManagementService' => 'getExtensionManagementServiceService',
            'TYPO3\\CMS\\Extensionmanager\\Utility\\DependencyUtility' => 'getDependencyUtilityService',
            'TYPO3\\CMS\\Extensionmanager\\Utility\\DownloadUtility' => 'getDownloadUtilityService',
            'TYPO3\\CMS\\Extensionmanager\\Utility\\EmConfUtility' => 'getEmConfUtilityService',
            'TYPO3\\CMS\\Extensionmanager\\Utility\\FileHandlingUtility' => 'getFileHandlingUtilityService',
            'TYPO3\\CMS\\Extensionmanager\\Utility\\InstallUtility' => 'getInstallUtilityService',
            'TYPO3\\CMS\\Extensionmanager\\Utility\\ListUtility' => 'getListUtilityService',
            'TYPO3\\CMS\\Extensionmanager\\Utility\\Repository\\Helper' => 'getHelperService',
            'TYPO3\\CMS\\Extensionmanager\\ViewHelpers\\Be\\TriggerViewHelper' => 'getTriggerViewHelperService',
            'TYPO3\\CMS\\Extensionmanager\\ViewHelpers\\DistributionImageViewHelper' => 'getDistributionImageViewHelperService',
            'TYPO3\\CMS\\Extensionmanager\\ViewHelpers\\DownloadExtensionViewHelper' => 'getDownloadExtensionViewHelperService',
            'TYPO3\\CMS\\Extensionmanager\\ViewHelpers\\InstallationStateCssClassViewHelper' => 'getInstallationStateCssClassViewHelperService',
            'TYPO3\\CMS\\Extensionmanager\\ViewHelpers\\ProcessAvailableActionsViewHelper' => 'getProcessAvailableActionsViewHelperService',
            'TYPO3\\CMS\\Extensionmanager\\ViewHelpers\\ReloadSqlDataViewHelper' => 'getReloadSqlDataViewHelperService',
            'TYPO3\\CMS\\Extensionmanager\\ViewHelpers\\RemoveExtensionViewHelper' => 'getRemoveExtensionViewHelperService',
            'TYPO3\\CMS\\Extensionmanager\\ViewHelpers\\ToggleExtensionInstallationStateViewHelper' => 'getToggleExtensionInstallationStateViewHelperService',
            'TYPO3\\CMS\\Extensionmanager\\ViewHelpers\\Typo3DependencyViewHelper' => 'getTypo3DependencyViewHelperService',
            'TYPO3\\CMS\\Extensionmanager\\ViewHelpers\\UpdateScriptViewHelper' => 'getUpdateScriptViewHelperService',
            'TYPO3\\CMS\\Filelist\\Configuration\\ThumbnailConfiguration' => 'getThumbnailConfigurationService',
            'TYPO3\\CMS\\Filelist\\Controller\\FileListController' => 'getFileListControllerService',
            'TYPO3\\CMS\\Filelist\\ViewHelpers\\Uri\\CopyCutFileViewHelper' => 'getCopyCutFileViewHelperService',
            'TYPO3\\CMS\\Filelist\\ViewHelpers\\Uri\\EditFileContentViewHelper' => 'getEditFileContentViewHelperService',
            'TYPO3\\CMS\\Filelist\\ViewHelpers\\Uri\\RenameFileViewHelper' => 'getRenameFileViewHelperService',
            'TYPO3\\CMS\\Filelist\\ViewHelpers\\Uri\\ReplaceFileViewHelper' => 'getReplaceFileViewHelperService',
            'TYPO3\\CMS\\FluidStyledContent\\ViewHelpers\\Link\\ClickEnlargeViewHelper' => 'getClickEnlargeViewHelperService',
            'TYPO3\\CMS\\Fluid\\Core\\Widget\\AjaxWidgetContextHolder' => 'getAjaxWidgetContextHolderService',
            'TYPO3\\CMS\\Fluid\\Core\\Widget\\WidgetRequestBuilder' => 'getWidgetRequestBuilderService',
            'TYPO3\\CMS\\Fluid\\Core\\Widget\\WidgetRequestHandler' => 'getWidgetRequestHandlerService',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Asset\\CssViewHelper' => 'getCssViewHelperService',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Asset\\ScriptViewHelper' => 'getScriptViewHelperService',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\BaseViewHelper' => 'getBaseViewHelperService',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\Buttons\\CshViewHelper' => 'getCshViewHelperService',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\Buttons\\ShortcutViewHelper' => 'getShortcutViewHelperService',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\ContainerViewHelper' => 'getContainerViewHelperService',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\InfoboxViewHelper' => 'getInfoboxViewHelperService',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\Labels\\CshViewHelper' => 'getCshViewHelper2Service',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\LinkViewHelper' => 'getLinkViewHelperService',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\Menus\\ActionMenuItemGroupViewHelper' => 'getActionMenuItemGroupViewHelperService',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\Menus\\ActionMenuItemViewHelper' => 'getActionMenuItemViewHelperService',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\Menus\\ActionMenuViewHelper' => 'getActionMenuViewHelperService',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\PageInfoViewHelper' => 'getPageInfoViewHelperService',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\PagePathViewHelper' => 'getPagePathViewHelper2Service',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\PageRendererViewHelper' => 'getPageRendererViewHelperService',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\Security\\IfAuthenticatedViewHelper' => 'getIfAuthenticatedViewHelperService',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\Security\\IfHasRoleViewHelper' => 'getIfHasRoleViewHelperService',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\TableListViewHelper' => 'getTableListViewHelperService',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\UriViewHelper' => 'getUriViewHelperService',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\Widget\\Controller\\PaginateController' => 'getPaginateControllerService',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\Widget\\PaginateViewHelper' => 'getPaginateViewHelperService',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\CObjectViewHelper' => 'getCObjectViewHelperService',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\DebugViewHelper' => 'getDebugViewHelperService',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Debug\\RenderViewHelper' => 'getRenderViewHelperService',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\FlashMessagesViewHelper' => 'getFlashMessagesViewHelperService',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\FormViewHelper' => 'getFormViewHelperService',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Form\\ButtonViewHelper' => 'getButtonViewHelperService',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Form\\CheckboxViewHelper' => 'getCheckboxViewHelperService',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Form\\HiddenViewHelper' => 'getHiddenViewHelperService',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Form\\PasswordViewHelper' => 'getPasswordViewHelperService',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Form\\RadioViewHelper' => 'getRadioViewHelperService',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Form\\SelectViewHelper' => 'getSelectViewHelper2Service',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Form\\Select\\OptgroupViewHelper' => 'getOptgroupViewHelperService',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Form\\Select\\OptionViewHelper' => 'getOptionViewHelperService',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Form\\SubmitViewHelper' => 'getSubmitViewHelperService',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Form\\TextareaViewHelper' => 'getTextareaViewHelperService',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Form\\TextfieldViewHelper' => 'getTextfieldViewHelperService',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Form\\UploadViewHelper' => 'getUploadViewHelperService',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Form\\ValidationResultsViewHelper' => 'getValidationResultsViewHelperService',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Format\\BytesViewHelper' => 'getBytesViewHelperService',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Format\\CaseViewHelper' => 'getCaseViewHelperService',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Format\\CropViewHelper' => 'getCropViewHelperService',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Format\\CurrencyViewHelper' => 'getCurrencyViewHelper2Service',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Format\\DateViewHelper' => 'getDateViewHelperService',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Format\\HtmlViewHelper' => 'getHtmlViewHelperService',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Format\\HtmlentitiesDecodeViewHelper' => 'getHtmlentitiesDecodeViewHelperService',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Format\\HtmlentitiesViewHelper' => 'getHtmlentitiesViewHelperService',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Format\\JsonViewHelper' => 'getJsonViewHelperService',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Format\\Nl2brViewHelper' => 'getNl2brViewHelperService',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Format\\NumberViewHelper' => 'getNumberViewHelperService',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Format\\PaddingViewHelper' => 'getPaddingViewHelperService',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Format\\StripTagsViewHelper' => 'getStripTagsViewHelperService',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Format\\UrlencodeViewHelper' => 'getUrlencodeViewHelperService',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\ImageViewHelper' => 'getImageViewHelperService',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Link\\ActionViewHelper' => 'getActionViewHelper2Service',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Link\\EmailViewHelper' => 'getEmailViewHelperService',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Link\\ExternalViewHelper' => 'getExternalViewHelperService',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Link\\PageViewHelper' => 'getPageViewHelperService',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Link\\TypolinkViewHelper' => 'getTypolinkViewHelperService',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\MediaViewHelper' => 'getMediaViewHelperService',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\RenderChildrenViewHelper' => 'getRenderChildrenViewHelperService',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\RenderViewHelper' => 'getRenderViewHelper2Service',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Sanitize\\HtmlViewHelper' => 'getHtmlViewHelper2Service',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Security\\IfAuthenticatedViewHelper' => 'getIfAuthenticatedViewHelper2Service',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Security\\IfHasRoleViewHelper' => 'getIfHasRoleViewHelper2Service',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\TranslateViewHelper' => 'getTranslateViewHelperService',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Uri\\ActionViewHelper' => 'getActionViewHelper3Service',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Uri\\EmailViewHelper' => 'getEmailViewHelper2Service',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Uri\\ExternalViewHelper' => 'getExternalViewHelper2Service',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Uri\\ImageViewHelper' => 'getImageViewHelper2Service',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Uri\\PageViewHelper' => 'getPageViewHelper2Service',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Uri\\ResourceViewHelper' => 'getResourceViewHelperService',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Uri\\TypolinkViewHelper' => 'getTypolinkViewHelper2Service',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Widget\\AutocompleteViewHelper' => 'getAutocompleteViewHelperService',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Widget\\Controller\\AutocompleteController' => 'getAutocompleteControllerService',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Widget\\Controller\\PaginateController' => 'getPaginateController2Service',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Widget\\LinkViewHelper' => 'getLinkViewHelper2Service',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Widget\\PaginateViewHelper' => 'getPaginateViewHelper2Service',
            'TYPO3\\CMS\\Fluid\\ViewHelpers\\Widget\\UriViewHelper' => 'getUriViewHelper2Service',
            'TYPO3\\CMS\\Fluid\\View\\StandaloneView' => 'getStandaloneViewService',
            'TYPO3\\CMS\\Fluid\\View\\TemplateView' => 'getTemplateViewService',
            'TYPO3\\CMS\\Form\\Controller\\FormEditorController' => 'getFormEditorControllerService',
            'TYPO3\\CMS\\Form\\Controller\\FormFrontendController' => 'getFormFrontendControllerService',
            'TYPO3\\CMS\\Form\\Controller\\FormManagerController' => 'getFormManagerControllerService',
            'TYPO3\\CMS\\Form\\Domain\\Configuration\\ConfigurationService' => 'getConfigurationServiceService',
            'TYPO3\\CMS\\Form\\Domain\\Configuration\\FormDefinitionConversionService' => 'getFormDefinitionConversionServiceService',
            'TYPO3\\CMS\\Form\\Domain\\Configuration\\FormDefinitionValidationService' => 'getFormDefinitionValidationServiceService',
            'TYPO3\\CMS\\Form\\Hooks\\SoftReferenceParserHook' => 'getSoftReferenceParserHookService',
            'TYPO3\\CMS\\Form\\Mvc\\Configuration\\ConfigurationManager' => 'getConfigurationManager2Service',
            'TYPO3\\CMS\\Form\\Mvc\\Property\\TypeConverter\\FormDefinitionArrayConverter' => 'getFormDefinitionArrayConverterService',
            'TYPO3\\CMS\\Form\\Mvc\\Property\\TypeConverter\\UploadedFileReferenceConverter' => 'getUploadedFileReferenceConverterService',
            'TYPO3\\CMS\\Form\\Service\\TranslationService' => 'getTranslationServiceService',
            'TYPO3\\CMS\\Form\\Slot\\FilePersistenceSlot' => 'getFilePersistenceSlotService',
            'TYPO3\\CMS\\Form\\Slot\\ResourcePublicationSlot' => 'getResourcePublicationSlotService',
            'TYPO3\\CMS\\Form\\ViewHelpers\\Be\\MaximumFileSizeViewHelper' => 'getMaximumFileSizeViewHelperService',
            'TYPO3\\CMS\\Form\\ViewHelpers\\Be\\RenderContentElementPreviewViewHelper' => 'getRenderContentElementPreviewViewHelperService',
            'TYPO3\\CMS\\Form\\ViewHelpers\\FormViewHelper' => 'getFormViewHelper2Service',
            'TYPO3\\CMS\\Form\\ViewHelpers\\Form\\DatePickerViewHelper' => 'getDatePickerViewHelperService',
            'TYPO3\\CMS\\Form\\ViewHelpers\\Form\\TimePickerViewHelper' => 'getTimePickerViewHelperService',
            'TYPO3\\CMS\\Form\\ViewHelpers\\Form\\UploadedResourceViewHelper' => 'getUploadedResourceViewHelperService',
            'TYPO3\\CMS\\Form\\ViewHelpers\\GridColumnClassAutoConfigurationViewHelper' => 'getGridColumnClassAutoConfigurationViewHelperService',
            'TYPO3\\CMS\\Form\\ViewHelpers\\RenderAllFormValuesViewHelper' => 'getRenderAllFormValuesViewHelperService',
            'TYPO3\\CMS\\Form\\ViewHelpers\\RenderFormValueViewHelper' => 'getRenderFormValueViewHelperService',
            'TYPO3\\CMS\\Form\\ViewHelpers\\RenderRenderableViewHelper' => 'getRenderRenderableViewHelperService',
            'TYPO3\\CMS\\Form\\ViewHelpers\\RenderViewHelper' => 'getRenderViewHelper3Service',
            'TYPO3\\CMS\\Form\\ViewHelpers\\TranslateElementErrorViewHelper' => 'getTranslateElementErrorViewHelperService',
            'TYPO3\\CMS\\Form\\ViewHelpers\\TranslateElementPropertyViewHelper' => 'getTranslateElementPropertyViewHelperService',
            'TYPO3\\CMS\\FrontendLogin\\Service\\ValidatorResolverService' => 'getValidatorResolverServiceService',
            'TYPO3\\CMS\\Frontend\\Aspect\\FileMetadataOverlayAspect' => 'getFileMetadataOverlayAspectService',
            'TYPO3\\CMS\\Frontend\\ContentObject\\ContentObjectRenderer' => 'getContentObjectRendererService',
            'TYPO3\\CMS\\Frontend\\ContentObject\\Menu\\MenuContentObjectFactory' => 'getMenuContentObjectFactoryService',
            'TYPO3\\CMS\\Frontend\\Hooks\\MediaItemHooks' => 'getMediaItemHooksService',
            'TYPO3\\CMS\\Frontend\\Http\\Application' => 'getApplication2Service',
            'TYPO3\\CMS\\Frontend\\Http\\RequestHandler' => 'getRequestHandler2Service',
            'TYPO3\\CMS\\Frontend\\Middleware\\BackendUserAuthenticator' => 'getBackendUserAuthenticator2Service',
            'TYPO3\\CMS\\Frontend\\Middleware\\ContentLengthResponseHeader' => 'getContentLengthResponseHeaderService',
            'TYPO3\\CMS\\Frontend\\Middleware\\EidHandler' => 'getEidHandlerService',
            'TYPO3\\CMS\\Frontend\\Middleware\\FrontendUserAuthenticator' => 'getFrontendUserAuthenticatorService',
            'TYPO3\\CMS\\Frontend\\Middleware\\MaintenanceMode' => 'getMaintenanceModeService',
            'TYPO3\\CMS\\Frontend\\Middleware\\OutputCompression' => 'getOutputCompression2Service',
            'TYPO3\\CMS\\Frontend\\Middleware\\PageArgumentValidator' => 'getPageArgumentValidatorService',
            'TYPO3\\CMS\\Frontend\\Middleware\\PageResolver' => 'getPageResolverService',
            'TYPO3\\CMS\\Frontend\\Middleware\\PrepareTypoScriptFrontendRendering' => 'getPrepareTypoScriptFrontendRenderingService',
            'TYPO3\\CMS\\Frontend\\Middleware\\PreviewSimulator' => 'getPreviewSimulatorService',
            'TYPO3\\CMS\\Frontend\\Middleware\\ShortcutAndMountPointRedirect' => 'getShortcutAndMountPointRedirectService',
            'TYPO3\\CMS\\Frontend\\Middleware\\SiteBaseRedirectResolver' => 'getSiteBaseRedirectResolverService',
            'TYPO3\\CMS\\Frontend\\Middleware\\SiteResolver' => 'getSiteResolver2Service',
            'TYPO3\\CMS\\Frontend\\Middleware\\StaticRouteResolver' => 'getStaticRouteResolverService',
            'TYPO3\\CMS\\Frontend\\Middleware\\TimeTrackerInitialization' => 'getTimeTrackerInitializationService',
            'TYPO3\\CMS\\Frontend\\Middleware\\TypoScriptFrontendInitialization' => 'getTypoScriptFrontendInitializationService',
            'TYPO3\\CMS\\Frontend\\Page\\CacheHashCalculator' => 'getCacheHashCalculatorService',
            'TYPO3\\CMS\\Frontend\\Utility\\CompressionUtility' => 'getCompressionUtilityService',
            'TYPO3\\CMS\\Impexp\\Command\\ImportCommand' => 'getImportCommandService',
            'TYPO3\\CMS\\Impexp\\Compatibility\\SlotReplacement' => 'getSlotReplacement6Service',
            'TYPO3\\CMS\\Impexp\\Utility\\ImportExportUtility' => 'getImportExportUtilityService',
            'TYPO3\\CMS\\Info\\Controller\\InfoModuleController' => 'getInfoModuleControllerService',
            'TYPO3\\CMS\\Install\\Command\\LanguagePackCommand' => 'getLanguagePackCommandService',
            'TYPO3\\CMS\\Install\\Command\\UpgradeWizardListCommand' => 'getUpgradeWizardListCommandService',
            'TYPO3\\CMS\\Install\\Command\\UpgradeWizardRunCommand' => 'getUpgradeWizardRunCommandService',
            'TYPO3\\CMS\\Install\\Compatibility\\SlotReplacement' => 'getSlotReplacement7Service',
            'TYPO3\\CMS\\Install\\Controller\\EnvironmentController' => 'getEnvironmentControllerService',
            'TYPO3\\CMS\\Install\\Controller\\IconController' => 'getIconControllerService',
            'TYPO3\\CMS\\Install\\Controller\\InstallerController' => 'getInstallerControllerService',
            'TYPO3\\CMS\\Install\\Controller\\LayoutController' => 'getLayoutControllerService',
            'TYPO3\\CMS\\Install\\Controller\\LoginController' => 'getLoginController2Service',
            'TYPO3\\CMS\\Install\\Controller\\MaintenanceController' => 'getMaintenanceControllerService',
            'TYPO3\\CMS\\Install\\Controller\\SettingsController' => 'getSettingsControllerService',
            'TYPO3\\CMS\\Install\\Controller\\UpgradeController' => 'getUpgradeControllerService',
            'TYPO3\\CMS\\Install\\Database\\PermissionsCheck' => 'getPermissionsCheckService',
            'TYPO3\\CMS\\Install\\Http\\Application' => 'getApplication3Service',
            'TYPO3\\CMS\\Install\\Http\\NotFoundRequestHandler' => 'getNotFoundRequestHandlerService',
            'TYPO3\\CMS\\Install\\Middleware\\Installer' => 'getInstallerService',
            'TYPO3\\CMS\\Install\\Middleware\\Maintenance' => 'getMaintenanceService',
            'TYPO3\\CMS\\Install\\Service\\ClearCacheService' => 'getClearCacheServiceService',
            'TYPO3\\CMS\\Install\\Service\\CoreUpdateService' => 'getCoreUpdateServiceService',
            'TYPO3\\CMS\\Install\\Service\\CoreVersionService' => 'getCoreVersionServiceService',
            'TYPO3\\CMS\\Install\\Service\\ExtensionConfigurationService' => 'getExtensionConfigurationServiceService',
            'TYPO3\\CMS\\Install\\Service\\LanguagePackService' => 'getLanguagePackServiceService',
            'TYPO3\\CMS\\Install\\Service\\LateBootService' => 'getLateBootServiceService',
            'TYPO3\\CMS\\Install\\Service\\LoadTcaService' => 'getLoadTcaServiceService',
            'TYPO3\\CMS\\Install\\Service\\SilentConfigurationUpgradeService' => 'getSilentConfigurationUpgradeServiceService',
            'TYPO3\\CMS\\Install\\Service\\Typo3tempFileService' => 'getTypo3tempFileServiceService',
            'TYPO3\\CMS\\Install\\Service\\UpgradeWizardsService' => 'getUpgradeWizardsServiceService',
            'TYPO3\\CMS\\Scheduler\\Command\\SchedulerCommand' => 'getSchedulerCommandService',
            'TYPO3\\CMS\\Scheduler\\Scheduler' => 'getSchedulerService',
            'TYPO3\\CMS\\Scheduler\\SystemInformation\\ToolbarItemProvider' => 'getToolbarItemProviderService',
            'TYPO3\\CMS\\Seo\\Compatibility\\SlotReplacement' => 'getSlotReplacement8Service',
            'TYPO3\\CMS\\Seo\\HrefLang\\HrefLangGenerator' => 'getHrefLangGeneratorService',
            'TYPO3\\CMS\\Seo\\PageTitle\\SeoTitlePageTitleProvider' => 'getSeoTitlePageTitleProviderService',
            'TYPO3\\CMS\\Setup\\Controller\\SetupModuleController' => 'getSetupModuleControllerService',
            'TYPO3\\CMS\\T3editor\\Registry\\AddonRegistry' => 'getAddonRegistryService',
            'TYPO3\\CMS\\T3editor\\Registry\\ModeRegistry' => 'getModeRegistryService',
            'TYPO3\\CMS\\T3editor\\T3editor' => 'getT3editorService',
            'TYPO3\\CMS\\Tstemplate\\Hooks\\DataHandlerClearCachePostProcHook' => 'getDataHandlerClearCachePostProcHookService',
            'TYPO3\\SymfonyPsrEventDispatcherAdapter\\EventDispatcherAdapter' => 'getEventDispatcherAdapterService',
            'TurnoverPerDayWidgetConfiguration' => 'getTurnoverPerDayWidgetConfigurationService',
            'backend.middlewares' => 'getBackend_MiddlewaresService',
            'backend.routes_decorated_31' => 'getBackend_RoutesDecorated31Service',
            'container.env_var_processors_locator' => 'getContainer_EnvVarProcessorsLocatorService',
            'dashboard.presets_decorated_1' => 'getDashboard_PresetsDecorated1Service',
            'dashboard.views.widget' => 'getDashboard_Views_WidgetService',
            'dashboard.widget.docGettingStarted' => 'getDashboard_Widget_DocGettingStartedService',
            'dashboard.widget.docTSconfig' => 'getDashboard_Widget_DocTSconfigService',
            'dashboard.widget.docTypoScriptReference' => 'getDashboard_Widget_DocTypoScriptReferenceService',
            'dashboard.widget.extcode.cart.orders_per_day' => 'getDashboard_Widget_Extcode_Cart_OrdersPerDayService',
            'dashboard.widget.extcode.cart.payment_paid_shipping_open' => 'getDashboard_Widget_Extcode_Cart_PaymentPaidShippingOpenService',
            'dashboard.widget.extcode.cart.turnover_per_day' => 'getDashboard_Widget_Extcode_Cart_TurnoverPerDayService',
            'dashboard.widget.failedLogins' => 'getDashboard_Widget_FailedLoginsService',
            'dashboard.widget.sysLogErrors' => 'getDashboard_Widget_SysLogErrorsService',
            'dashboard.widget.t3information' => 'getDashboard_Widget_T3informationService',
            'dashboard.widget.t3news' => 'getDashboard_Widget_T3newsService',
            'dashboard.widget.t3securityAdvisories' => 'getDashboard_Widget_T3securityAdvisoriesService',
            'dashboard.widget.typeOfUsers' => 'getDashboard_Widget_TypeOfUsersService',
            'dashboard.widgetGroups_decorated_1' => 'getDashboard_WidgetGroupsDecorated1Service',
            'dashboard.widgets_decorated_1' => 'getDashboard_WidgetsDecorated1Service',
            'docGettingStartedWidgetConfiguration' => 'getDocGettingStartedWidgetConfigurationService',
            'docTSconfigWidgetConfiguration' => 'getDocTSconfigWidgetConfigurationService',
            'docTypoScriptReferenceWidgetConfiguration' => 'getDocTypoScriptReferenceWidgetConfigurationService',
            'failedLoginsWidgetConfiguration' => 'getFailedLoginsWidgetConfigurationService',
            'frontend.middlewares' => 'getFrontend_MiddlewaresService',
            'middlewares_decorated_30' => 'getMiddlewaresDecorated30Service',
            'sysLogErrorsWidgetConfiguration' => 'getSysLogErrorsWidgetConfigurationService',
            't3informationWidgetConfiguration' => 'getT3informationWidgetConfigurationService',
            't3newsWidgetConfiguration' => 'getT3newsWidgetConfigurationService',
            't3securityAdvisoriesWidgetConfiguration' => 'getT3securityAdvisoriesWidgetConfigurationService',
            'typeOfUsersWidgetConfiguration' => 'getTypeOfUsersWidgetConfigurationService',
        ];
        $this->aliases = [
            'Composer\\Autoload\\ClassLoader' => '_early.Composer\\Autoload\\ClassLoader',
            'Psr\\EventDispatcher\\EventDispatcherInterface' => 'Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1',
            'Psr\\Http\\Message\\RequestFactoryInterface' => 'TYPO3\\CMS\\Core\\Http\\RequestFactory',
            'Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface' => 'TYPO3\\SymfonyPsrEventDispatcherAdapter\\EventDispatcherAdapter',
            'TYPO3\\CMS\\Backend\\Routing\\Router' => 'TYPO3\\CMS\\Backend\\Routing\\Router_decorated_1',
            'TYPO3\\CMS\\Core\\Configuration\\ConfigurationManager' => '_early.TYPO3\\CMS\\Core\\Configuration\\ConfigurationManager',
            'TYPO3\\CMS\\Core\\Console\\CommandRegistry' => 'TYPO3\\CMS\\Core\\Console\\CommandRegistry_decorated_1',
            'TYPO3\\CMS\\Core\\Core\\ApplicationContext' => '_early.TYPO3\\CMS\\Core\\Core\\ApplicationContext',
            'TYPO3\\CMS\\Core\\DependencyInjection\\ContainerBuilder' => '_early.TYPO3\\CMS\\Core\\DependencyInjection\\ContainerBuilder',
            'TYPO3\\CMS\\Core\\EventDispatcher\\ListenerProvider' => 'TYPO3\\CMS\\Core\\EventDispatcher\\ListenerProvider_decorated_1',
            'TYPO3\\CMS\\Core\\Log\\LogManager' => '_early.TYPO3\\CMS\\Core\\Log\\LogManager',
            'TYPO3\\CMS\\Core\\Package\\PackageManager' => '_early.TYPO3\\CMS\\Core\\Package\\PackageManager',
            'TYPO3\\CMS\\Dashboard\\DashboardPresetRegistry' => 'TYPO3\\CMS\\Dashboard\\DashboardPresetRegistry_decorated_1',
            'TYPO3\\CMS\\Dashboard\\WidgetGroupRegistry' => 'TYPO3\\CMS\\Dashboard\\WidgetGroupRegistry_decorated_1',
            'backend.routes' => 'backend.routes_decorated_31',
            'backend.routes_decorated_1' => 'backend.routes_decorated_31',
            'backend.routes_decorated_10' => 'backend.routes_decorated_31',
            'backend.routes_decorated_11' => 'backend.routes_decorated_31',
            'backend.routes_decorated_12' => 'backend.routes_decorated_31',
            'backend.routes_decorated_13' => 'backend.routes_decorated_31',
            'backend.routes_decorated_14' => 'backend.routes_decorated_31',
            'backend.routes_decorated_15' => 'backend.routes_decorated_31',
            'backend.routes_decorated_16' => 'backend.routes_decorated_31',
            'backend.routes_decorated_17' => 'backend.routes_decorated_31',
            'backend.routes_decorated_18' => 'backend.routes_decorated_31',
            'backend.routes_decorated_19' => 'backend.routes_decorated_31',
            'backend.routes_decorated_2' => 'backend.routes_decorated_31',
            'backend.routes_decorated_20' => 'backend.routes_decorated_31',
            'backend.routes_decorated_21' => 'backend.routes_decorated_31',
            'backend.routes_decorated_22' => 'backend.routes_decorated_31',
            'backend.routes_decorated_23' => 'backend.routes_decorated_31',
            'backend.routes_decorated_24' => 'backend.routes_decorated_31',
            'backend.routes_decorated_25' => 'backend.routes_decorated_31',
            'backend.routes_decorated_26' => 'backend.routes_decorated_31',
            'backend.routes_decorated_27' => 'backend.routes_decorated_31',
            'backend.routes_decorated_28' => 'backend.routes_decorated_31',
            'backend.routes_decorated_29' => 'backend.routes_decorated_31',
            'backend.routes_decorated_3' => 'backend.routes_decorated_31',
            'backend.routes_decorated_30' => 'backend.routes_decorated_31',
            'backend.routes_decorated_4' => 'backend.routes_decorated_31',
            'backend.routes_decorated_5' => 'backend.routes_decorated_31',
            'backend.routes_decorated_6' => 'backend.routes_decorated_31',
            'backend.routes_decorated_7' => 'backend.routes_decorated_31',
            'backend.routes_decorated_8' => 'backend.routes_decorated_31',
            'backend.routes_decorated_9' => 'backend.routes_decorated_31',
            'boot.state' => '_early.boot.state',
            'cache.assets' => '_early.cache.assets',
            'cache.core' => '_early.cache.core',
            'cache.di' => '_early.cache.di',
            'dashboard.presets' => 'dashboard.presets_decorated_1',
            'dashboard.widgetGroups' => 'dashboard.widgetGroups_decorated_1',
            'dashboard.widgets' => 'dashboard.widgets_decorated_1',
            'middlewares' => 'middlewares_decorated_30',
            'middlewares_decorated_1' => 'middlewares_decorated_30',
            'middlewares_decorated_10' => 'middlewares_decorated_30',
            'middlewares_decorated_11' => 'middlewares_decorated_30',
            'middlewares_decorated_12' => 'middlewares_decorated_30',
            'middlewares_decorated_13' => 'middlewares_decorated_30',
            'middlewares_decorated_14' => 'middlewares_decorated_30',
            'middlewares_decorated_15' => 'middlewares_decorated_30',
            'middlewares_decorated_16' => 'middlewares_decorated_30',
            'middlewares_decorated_17' => 'middlewares_decorated_30',
            'middlewares_decorated_18' => 'middlewares_decorated_30',
            'middlewares_decorated_19' => 'middlewares_decorated_30',
            'middlewares_decorated_2' => 'middlewares_decorated_30',
            'middlewares_decorated_20' => 'middlewares_decorated_30',
            'middlewares_decorated_21' => 'middlewares_decorated_30',
            'middlewares_decorated_22' => 'middlewares_decorated_30',
            'middlewares_decorated_23' => 'middlewares_decorated_30',
            'middlewares_decorated_24' => 'middlewares_decorated_30',
            'middlewares_decorated_25' => 'middlewares_decorated_30',
            'middlewares_decorated_26' => 'middlewares_decorated_30',
            'middlewares_decorated_27' => 'middlewares_decorated_30',
            'middlewares_decorated_28' => 'middlewares_decorated_30',
            'middlewares_decorated_29' => 'middlewares_decorated_30',
            'middlewares_decorated_3' => 'middlewares_decorated_30',
            'middlewares_decorated_4' => 'middlewares_decorated_30',
            'middlewares_decorated_5' => 'middlewares_decorated_30',
            'middlewares_decorated_6' => 'middlewares_decorated_30',
            'middlewares_decorated_7' => 'middlewares_decorated_30',
            'middlewares_decorated_8' => 'middlewares_decorated_30',
            'middlewares_decorated_9' => 'middlewares_decorated_30',
        ];
    }

    public function compile(): void
    {
        throw \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(LogicException::class, 'You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled(): bool
    {
        return true;
    }

    public function getRemovedIds(): array
    {
        return [
            '.abstract.instanceof.Extcode\\CartProducts\\Controller\\ProductController' => true,
            '.abstract.instanceof.Extcode\\CartProducts\\Domain\\Repository\\CategoryRepository' => true,
            '.abstract.instanceof.Extcode\\CartProducts\\Domain\\Repository\\Product\\BeVariantAttributeOptionRepository' => true,
            '.abstract.instanceof.Extcode\\CartProducts\\Domain\\Repository\\Product\\BeVariantAttributeRepository' => true,
            '.abstract.instanceof.Extcode\\CartProducts\\Domain\\Repository\\Product\\BeVariantRepository' => true,
            '.abstract.instanceof.Extcode\\CartProducts\\Domain\\Repository\\Product\\ProductRepository' => true,
            '.abstract.instanceof.Extcode\\CartProducts\\Domain\\Repository\\Product\\SpecialPriceRepository' => true,
            '.abstract.instanceof.Extcode\\CartProducts\\ViewHelpers\\CanonicalTagViewHelper' => true,
            '.abstract.instanceof.Extcode\\CartProducts\\ViewHelpers\\Form\\VariantSelectViewHelper' => true,
            '.abstract.instanceof.Extcode\\CartProducts\\ViewHelpers\\Link\\ProductViewHelper' => true,
            '.abstract.instanceof.Extcode\\CartProducts\\ViewHelpers\\Product\\BestSpecialPriceDiscountViewHelper' => true,
            '.abstract.instanceof.Extcode\\CartProducts\\ViewHelpers\\Product\\BestSpecialPricePercentageDiscountViewHelper' => true,
            '.abstract.instanceof.Extcode\\CartProducts\\ViewHelpers\\Product\\BestSpecialPriceViewHelper' => true,
            '.abstract.instanceof.Extcode\\CartProducts\\ViewHelpers\\Product\\IfBestSpecialPriceAvailableViewHelper' => true,
            '.abstract.instanceof.Extcode\\Cart\\Controller\\Backend\\ActionController' => true,
            '.abstract.instanceof.Extcode\\Cart\\Controller\\Backend\\Order\\DocumentController' => true,
            '.abstract.instanceof.Extcode\\Cart\\Controller\\Backend\\Order\\OrderController' => true,
            '.abstract.instanceof.Extcode\\Cart\\Controller\\Backend\\Order\\PaymentController' => true,
            '.abstract.instanceof.Extcode\\Cart\\Controller\\Backend\\Order\\ShippingController' => true,
            '.abstract.instanceof.Extcode\\Cart\\Controller\\Cart\\ActionController' => true,
            '.abstract.instanceof.Extcode\\Cart\\Controller\\Cart\\CartController' => true,
            '.abstract.instanceof.Extcode\\Cart\\Controller\\Cart\\CartPreviewController' => true,
            '.abstract.instanceof.Extcode\\Cart\\Controller\\Cart\\CountryController' => true,
            '.abstract.instanceof.Extcode\\Cart\\Controller\\Cart\\CouponController' => true,
            '.abstract.instanceof.Extcode\\Cart\\Controller\\Cart\\CurrencyController' => true,
            '.abstract.instanceof.Extcode\\Cart\\Controller\\Cart\\OrderController' => true,
            '.abstract.instanceof.Extcode\\Cart\\Controller\\Cart\\PaymentController' => true,
            '.abstract.instanceof.Extcode\\Cart\\Controller\\Cart\\ProductController' => true,
            '.abstract.instanceof.Extcode\\Cart\\Controller\\Cart\\ShippingController' => true,
            '.abstract.instanceof.Extcode\\Cart\\Controller\\Order\\OrderController' => true,
            '.abstract.instanceof.Extcode\\Cart\\Controller\\Order\\PaymentController' => true,
            '.abstract.instanceof.Extcode\\Cart\\Domain\\Repository\\CartRepository' => true,
            '.abstract.instanceof.Extcode\\Cart\\Domain\\Repository\\CouponRepository' => true,
            '.abstract.instanceof.Extcode\\Cart\\Domain\\Repository\\Order\\BillingAddressRepository' => true,
            '.abstract.instanceof.Extcode\\Cart\\Domain\\Repository\\Order\\DiscountRepository' => true,
            '.abstract.instanceof.Extcode\\Cart\\Domain\\Repository\\Order\\ItemRepository' => true,
            '.abstract.instanceof.Extcode\\Cart\\Domain\\Repository\\Order\\PaymentRepository' => true,
            '.abstract.instanceof.Extcode\\Cart\\Domain\\Repository\\Order\\ProductAdditionalRepository' => true,
            '.abstract.instanceof.Extcode\\Cart\\Domain\\Repository\\Order\\ProductRepository' => true,
            '.abstract.instanceof.Extcode\\Cart\\Domain\\Repository\\Order\\ShippingAddressRepository' => true,
            '.abstract.instanceof.Extcode\\Cart\\Domain\\Repository\\Order\\ShippingRepository' => true,
            '.abstract.instanceof.Extcode\\Cart\\Domain\\Repository\\Order\\TaxClassRepository' => true,
            '.abstract.instanceof.Extcode\\Cart\\Domain\\Repository\\Order\\TaxRepository' => true,
            '.abstract.instanceof.Extcode\\Cart\\Domain\\Repository\\Order\\TransactionRepository' => true,
            '.abstract.instanceof.Extcode\\Cart\\Service\\MailHandler' => true,
            '.abstract.instanceof.Extcode\\Cart\\Service\\SessionHandler' => true,
            '.abstract.instanceof.Extcode\\Cart\\Utility\\TemplateLayout' => true,
            '.abstract.instanceof.Extcode\\Cart\\ViewHelpers\\AdditionalJsonViewHelper' => true,
            '.abstract.instanceof.Extcode\\Cart\\ViewHelpers\\CsvHeaderViewHelper' => true,
            '.abstract.instanceof.Extcode\\Cart\\ViewHelpers\\CsvValuesViewHelper' => true,
            '.abstract.instanceof.Extcode\\Cart\\ViewHelpers\\FieldNameViewHelper' => true,
            '.abstract.instanceof.Extcode\\Cart\\ViewHelpers\\Form\\IsServiceAvailableAtPriceViewHelper' => true,
            '.abstract.instanceof.Extcode\\Cart\\ViewHelpers\\Form\\SelectViewHelper' => true,
            '.abstract.instanceof.Extcode\\Cart\\ViewHelpers\\Format\\CurrencyViewHelper' => true,
            '.abstract.instanceof.Extcode\\Cart\\ViewHelpers\\Format\\NothingViewHelper' => true,
            '.abstract.instanceof.Extcode\\Cart\\ViewHelpers\\IncludeFileViewHelper' => true,
            '.abstract.instanceof.Extcode\\Cart\\ViewHelpers\\Link\\ActionViewHelper' => true,
            '.abstract.instanceof.Extcode\\Cart\\ViewHelpers\\MapModelPropertiesToTableColumnsViewHelper' => true,
            '.abstract.instanceof.Extcode\\Cart\\ViewHelpers\\MetaTagViewHelper' => true,
            '.abstract.instanceof.Extcode\\Cart\\ViewHelpers\\TitleTagViewHelper' => true,
            '.abstract.instanceof.Extcode\\Cart\\ViewHelpers\\Traversable\\ExtractViewHelper' => true,
            '.abstract.instanceof.Extcode\\Cart\\ViewHelpers\\Variable\\GetViewHelper' => true,
            '.abstract.instanceof.Extcode\\Cart\\ViewHelpers\\Variable\\SetViewHelper' => true,
            '.abstract.instanceof.In2code\\Femanager\\Domain\\Repository\\LogRepository' => true,
            '.abstract.instanceof.In2code\\Femanager\\Domain\\Repository\\UserGroupRepository' => true,
            '.abstract.instanceof.In2code\\Femanager\\Domain\\Repository\\UserRepository' => true,
            '.abstract.instanceof.In2code\\Femanager\\Domain\\Service\\RatelimiterService' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Authentication\\PasswordReset' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Configuration\\TypoScript\\ConditionMatching\\ConditionMatcher' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Controller\\File\\ImageProcessController' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Controller\\LoginController' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Domain\\Repository\\Module\\BackendModuleRepository' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Form\\Container\\FlexFormContainerContainer' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Form\\Container\\FlexFormElementContainer' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Form\\Container\\FlexFormEntryContainer' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Form\\Container\\FlexFormNoTabsContainer' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Form\\Container\\FlexFormSectionContainer' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Form\\Container\\FlexFormTabsContainer' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Form\\Container\\FullRecordContainer' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Form\\Container\\InlineControlContainer' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Form\\Container\\InlineRecordContainer' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Form\\Container\\ListOfFieldsContainer' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Form\\Container\\NoTabsContainer' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Form\\Container\\OuterWrapContainer' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Form\\Container\\PaletteAndSingleContainer' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Form\\Container\\SingleFieldContainer' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Form\\Container\\TabsContainer' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Form\\Element\\CheckboxElement' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Form\\Element\\CheckboxLabeledToggleElement' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Form\\Element\\CheckboxToggleElement' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Form\\Element\\FileInfoElement' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Form\\Element\\GroupElement' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Form\\Element\\ImageManipulationElement' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Form\\Element\\InputColorPickerElement' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Form\\Element\\InputDateTimeElement' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Form\\Element\\InputHiddenElement' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Form\\Element\\InputLinkElement' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Form\\Element\\InputSlugElement' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Form\\Element\\InputTextElement' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Form\\Element\\NoneElement' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Form\\Element\\PassThroughElement' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Form\\Element\\RadioElement' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Form\\Element\\SelectCheckBoxElement' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Form\\Element\\SelectMultipleSideBySideElement' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Form\\Element\\SelectSingleBoxElement' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Form\\Element\\SelectSingleElement' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Form\\Element\\SelectTreeElement' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Form\\Element\\TextElement' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Form\\Element\\TextTableElement' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Form\\Element\\UnknownElement' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Form\\Element\\UserElement' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Form\\Element\\UserSysFileStorageIsPublicElement' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Form\\FieldControl\\AddRecord' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Form\\FieldControl\\EditPopup' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Form\\FieldControl\\ElementBrowser' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Form\\FieldControl\\InsertClipboard' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Form\\FieldControl\\LinkPopup' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Form\\FieldControl\\ListModule' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Form\\FieldControl\\ResetSelection' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Form\\FieldControl\\TableWizard' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Form\\FieldInformation\\AdminIsSystemMaintainer' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Form\\FieldInformation\\TcaDescription' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Form\\FieldWizard\\DefaultLanguageDifferences' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Form\\FieldWizard\\LocalizationStateSelector' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Form\\FieldWizard\\OtherLanguageContent' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Form\\FieldWizard\\OtherLanguageThumbnails' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Form\\FieldWizard\\RecordsOverview' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Form\\FieldWizard\\SelectIcons' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Form\\FieldWizard\\TableList' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Form\\FormDataProvider\\DatabaseDefaultLanguagePageRow' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Form\\FormDataProvider\\DatabaseEditRow' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Form\\FormDataProvider\\DatabaseParentPageRow' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Form\\FormDataProvider\\SiteTcaInline' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Form\\FormDataProvider\\TcaInline' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Form\\NodeExpansion\\FieldControl' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Form\\NodeExpansion\\FieldInformation' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Form\\NodeExpansion\\FieldWizard' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\FrontendBackendUserAuthentication' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Http\\RequestHandler' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Middleware\\AdditionalResponseHeaders' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Middleware\\BackendRouteInitialization' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Middleware\\BackendUserAuthenticator' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Middleware\\ForcedHttpsBackendRedirector' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Middleware\\LockedBackendGuard' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Middleware\\OutputCompression' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Middleware\\SiteResolver' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Module\\ModuleStorage' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Preview\\StandardContentPreviewRenderer' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Routing\\Router' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Routing\\UriBuilder' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Security\\EmailLoginNotification' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\Template\\DocumentTemplate' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\ViewHelpers\\ArrayBrowserViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\ViewHelpers\\AvatarViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\ViewHelpers\\LanguageColumnViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\ViewHelpers\\Link\\EditRecordViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\ViewHelpers\\Link\\NewRecordViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\ViewHelpers\\ModuleLayoutViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\ViewHelpers\\ModuleLayout\\Button\\LinkButtonViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\ViewHelpers\\ModuleLayout\\Button\\ShortcutButtonViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\ViewHelpers\\ModuleLayout\\MenuItemViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\ViewHelpers\\ModuleLayout\\MenuViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\ViewHelpers\\ModuleLinkViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\ViewHelpers\\ThumbnailViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\ViewHelpers\\Uri\\EditRecordViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\ViewHelpers\\Uri\\NewRecordViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\View\\BackendLayoutView' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\View\\BackendLayout\\DataProviderCollection' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\View\\BackendLayout\\DataProviderContext' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\View\\BackendLayout\\RecordRememberer' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\View\\PageLayoutView' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Backend\\View\\Wizard\\Element\\BackendLayoutWizardElement' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Belog\\Controller\\BackendLogController' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Belog\\Domain\\Repository\\LogEntryRepository' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Belog\\Domain\\Repository\\WorkspaceRepository' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Belog\\ViewHelpers\\Be\\PagePathViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Belog\\ViewHelpers\\Form\\TranslateLabelSelectViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Belog\\ViewHelpers\\FormatDetailsViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Belog\\ViewHelpers\\UsernameViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Belog\\ViewHelpers\\WorkspaceTitleViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Beuser\\Controller\\BackendUserController' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Beuser\\Controller\\BackendUserGroupController' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Beuser\\Controller\\PermissionController' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Beuser\\Domain\\Repository\\BackendUserGroupRepository' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Beuser\\Domain\\Repository\\BackendUserRepository' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Beuser\\Domain\\Repository\\BackendUserSessionRepository' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Beuser\\Service\\ModuleDataStorageService' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Beuser\\ViewHelpers\\ArrayElementViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Beuser\\ViewHelpers\\Display\\TableAccessViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Beuser\\ViewHelpers\\PermissionsViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Beuser\\ViewHelpers\\SpriteIconForRecordViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Beuser\\ViewHelpers\\SwitchUserViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Authentication\\AbstractAuthenticationService' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Authentication\\AuthenticationService' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Authentication\\BackendUserAuthentication' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Authentication\\CommandLineUserAuthentication' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Cache\\Backend\\ApcuBackend' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Cache\\Backend\\FileBackend' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Cache\\Backend\\MemcachedBackend' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Cache\\Backend\\NullBackend' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Cache\\Backend\\PdoBackend' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Cache\\Backend\\RedisBackend' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Cache\\Backend\\SimpleFileBackend' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Cache\\Backend\\TransientMemoryBackend' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Cache\\Backend\\WincacheBackend' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Cache\\CacheManager' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Category\\CategoryRegistry' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Charset\\CharsetConverter' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Configuration\\Loader\\YamlFileLoader' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Configuration\\SiteConfiguration' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Console\\CommandRegistry' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Context\\Context' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\DataHandling\\DataHandler' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Database\\Connection' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Database\\ReferenceIndex' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Database\\SoftReferenceIndex' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\DependencyInjection\\Cache\\ContainerBackend' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Domain\\Repository\\PageRepository' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Error\\DebugExceptionHandler' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Error\\ErrorHandler' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Error\\ProductionExceptionHandler' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\EventDispatcher\\EventDispatcher' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Html\\DefaultSanitizerBuilder' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Html\\RteHtmlParser' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Imaging\\IconRegistry' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\LinkHandling\\LinkService' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Localization\\LanguageStore' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Localization\\Locales' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Localization\\LocalizationFactory' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Locking\\LockFactory' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Mail\\MemorySpool' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Mail\\TransportFactory' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Messaging\\FlashMessageService' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\MetaTag\\MetaTagManagerRegistry' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Middleware\\NormalizedParamsAttribute' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Package\\FailsafePackageManager' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\PageTitle\\PageTitleProviderManager' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\PageTitle\\RecordPageTitleProvider' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Page\\AssetCollector' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Page\\PageRenderer' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Registry' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Resource\\Collection\\FileCollectionRegistry' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Resource\\Driver\\DriverRegistry' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Resource\\FileRepository' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Resource\\Index\\ExtractorRegistry' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Resource\\Index\\FileIndexRepository' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Resource\\Index\\Indexer' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Resource\\Index\\MetaDataRepository' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Resource\\OnlineMedia\\Helpers\\OnlineMediaHelperRegistry' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Resource\\ProcessedFileRepository' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Resource\\Processing\\ProcessorRegistry' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Resource\\Processing\\TaskTypeRegistry' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Resource\\Rendering\\AudioTagRenderer' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Resource\\Rendering\\RendererRegistry' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Resource\\Rendering\\VideoTagRenderer' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Resource\\Rendering\\VimeoRenderer' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Resource\\Rendering\\YouTubeRenderer' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Resource\\ResourceFactory' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Resource\\Security\\FileMetadataPermissionsAspect' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Resource\\StorageRepository' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Resource\\TextExtraction\\TextExtractorRegistry' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Routing\\SiteMatcher' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Service\\FlexFormService' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Session\\Backend\\RedisSessionBackend' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Session\\SessionManager' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\TimeTracker\\TimeTracker' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\Type\\File\\ImageInfo' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\ViewHelpers\\Form\\TypoScriptConstantsViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\ViewHelpers\\IconForRecordViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\ViewHelpers\\IconForResourceViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Core\\ViewHelpers\\IconViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Dashboard\\DashboardPresetRegistry' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Dashboard\\WidgetGroupRegistry' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Dashboard\\WidgetRegistry' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extbase\\Configuration\\BackendConfigurationManager' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extbase\\Configuration\\FrontendConfigurationManager' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extbase\\Configuration\\RequestHandlersConfigurationFactory' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extbase\\Domain\\Repository\\BackendUserGroupRepository' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extbase\\Domain\\Repository\\BackendUserRepository' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extbase\\Domain\\Repository\\CategoryRepository' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extbase\\Domain\\Repository\\FileMountRepository' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extbase\\Domain\\Repository\\FrontendUserGroupRepository' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extbase\\Domain\\Repository\\FrontendUserRepository' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extbase\\Middleware\\SignalSlotDeprecator' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ActionController' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\MvcPropertyMappingConfigurationService' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Dispatcher' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\View\\EmptyView' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\View\\JsonView' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\View\\NotFoundView' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Web\\BackendRequestHandler' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Web\\FrontendRequestHandler' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Web\\RequestBuilder' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extbase\\Object\\Container\\Container' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extbase\\Object\\ObjectManager' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extbase\\Persistence\\ClassesConfigurationFactory' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Backend' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Mapper\\DataMapFactory' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Qom\\QueryObjectModelFactory' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extbase\\Persistence\\Generic\\QueryFactory' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Session' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Storage\\Typo3DbBackend' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extbase\\Persistence\\Repository' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extbase\\Property\\PropertyMapper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extbase\\Property\\PropertyMappingConfigurationBuilder' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\ArrayConverter' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\BooleanConverter' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\CoreTypeConverter' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\DateTimeConverter' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\FileConverter' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\FileReferenceConverter' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\FloatConverter' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\FolderBasedFileCollectionConverter' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\FolderConverter' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\IntegerConverter' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\ObjectConverter' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\ObjectStorageConverter' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\PersistentObjectConverter' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\StaticFileCollectionConverter' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\StringConverter' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extbase\\Reflection\\ReflectionService' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extbase\\Security\\Cryptography\\HashService' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extbase\\Service\\CacheService' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extbase\\Service\\EnvironmentService' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extbase\\Service\\ExtensionService' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extbase\\Service\\ImageService' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extbase\\Validation\\ValidatorResolver' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extensionmanager\\Controller\\AbstractController' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extensionmanager\\Controller\\AbstractModuleController' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extensionmanager\\Controller\\ActionController' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extensionmanager\\Controller\\DistributionController' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extensionmanager\\Controller\\DownloadController' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extensionmanager\\Controller\\ExtensionComposerStatusController' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extensionmanager\\Controller\\ListController' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extensionmanager\\Controller\\UpdateFromTerController' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extensionmanager\\Controller\\UpdateScriptController' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extensionmanager\\Controller\\UploadExtensionFileController' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extensionmanager\\Domain\\Model\\DownloadQueue' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extensionmanager\\Domain\\Repository\\ExtensionRepository' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extensionmanager\\Domain\\Repository\\RepositoryRepository' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extensionmanager\\Service\\ExtensionManagementService' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extensionmanager\\Utility\\DependencyUtility' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extensionmanager\\Utility\\DownloadUtility' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extensionmanager\\Utility\\EmConfUtility' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extensionmanager\\Utility\\FileHandlingUtility' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extensionmanager\\Utility\\InstallUtility' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extensionmanager\\Utility\\ListUtility' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extensionmanager\\Utility\\Repository\\Helper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extensionmanager\\ViewHelpers\\Be\\TriggerViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extensionmanager\\ViewHelpers\\DistributionImageViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extensionmanager\\ViewHelpers\\DownloadExtensionViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extensionmanager\\ViewHelpers\\InstallationStateCssClassViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extensionmanager\\ViewHelpers\\ProcessAvailableActionsViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extensionmanager\\ViewHelpers\\ReloadSqlDataViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extensionmanager\\ViewHelpers\\RemoveExtensionViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extensionmanager\\ViewHelpers\\ToggleExtensionInstallationStateViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extensionmanager\\ViewHelpers\\Typo3DependencyViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Extensionmanager\\ViewHelpers\\UpdateScriptViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Filelist\\Configuration\\ThumbnailConfiguration' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Filelist\\Controller\\FileListController' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Filelist\\ViewHelpers\\Uri\\CopyCutFileViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Filelist\\ViewHelpers\\Uri\\EditFileContentViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Filelist\\ViewHelpers\\Uri\\RenameFileViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Filelist\\ViewHelpers\\Uri\\ReplaceFileViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\FluidStyledContent\\ViewHelpers\\Link\\ClickEnlargeViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\Core\\Widget\\AjaxWidgetContextHolder' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\Core\\Widget\\WidgetRequestBuilder' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\Core\\Widget\\WidgetRequestHandler' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Asset\\CssViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Asset\\ScriptViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\BaseViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\Buttons\\CshViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\Buttons\\ShortcutViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\ContainerViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\InfoboxViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\Labels\\CshViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\LinkViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\Menus\\ActionMenuItemGroupViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\Menus\\ActionMenuItemViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\Menus\\ActionMenuViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\PageInfoViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\PagePathViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\PageRendererViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\Security\\IfAuthenticatedViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\Security\\IfHasRoleViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\TableListViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\UriViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\Widget\\Controller\\PaginateController' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\Widget\\PaginateViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\CObjectViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\DebugViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Debug\\RenderViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\FlashMessagesViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\FormViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Form\\ButtonViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Form\\CheckboxViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Form\\HiddenViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Form\\PasswordViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Form\\RadioViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Form\\SelectViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Form\\Select\\OptgroupViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Form\\Select\\OptionViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Form\\SubmitViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Form\\TextareaViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Form\\TextfieldViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Form\\UploadViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Form\\ValidationResultsViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Format\\BytesViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Format\\CaseViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Format\\CropViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Format\\CurrencyViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Format\\DateViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Format\\HtmlViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Format\\HtmlentitiesDecodeViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Format\\HtmlentitiesViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Format\\JsonViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Format\\Nl2brViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Format\\NumberViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Format\\PaddingViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Format\\StripTagsViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Format\\UrlencodeViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\ImageViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Link\\ActionViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Link\\EmailViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Link\\ExternalViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Link\\PageViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Link\\TypolinkViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\MediaViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\RenderChildrenViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\RenderViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Sanitize\\HtmlViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Security\\IfAuthenticatedViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Security\\IfHasRoleViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\TranslateViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Uri\\ActionViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Uri\\EmailViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Uri\\ExternalViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Uri\\ImageViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Uri\\PageViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Uri\\ResourceViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Uri\\TypolinkViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Widget\\AutocompleteViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Widget\\Controller\\AutocompleteController' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Widget\\Controller\\PaginateController' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Widget\\LinkViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Widget\\PaginateViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\ViewHelpers\\Widget\\UriViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\View\\StandaloneView' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Fluid\\View\\TemplateView' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Form\\Controller\\FormEditorController' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Form\\Controller\\FormFrontendController' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Form\\Controller\\FormManagerController' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Form\\Domain\\Configuration\\ConfigurationService' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Form\\Domain\\Configuration\\FormDefinitionConversionService' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Form\\Domain\\Configuration\\FormDefinitionValidationService' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Form\\Hooks\\SoftReferenceParserHook' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Form\\Mvc\\Configuration\\ConfigurationManager' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Form\\Mvc\\Property\\TypeConverter\\FormDefinitionArrayConverter' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Form\\Mvc\\Property\\TypeConverter\\UploadedFileReferenceConverter' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Form\\Service\\TranslationService' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Form\\Slot\\FilePersistenceSlot' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Form\\Slot\\ResourcePublicationSlot' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Form\\ViewHelpers\\Be\\MaximumFileSizeViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Form\\ViewHelpers\\Be\\RenderContentElementPreviewViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Form\\ViewHelpers\\FormViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Form\\ViewHelpers\\Form\\DatePickerViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Form\\ViewHelpers\\Form\\TimePickerViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Form\\ViewHelpers\\Form\\UploadedResourceViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Form\\ViewHelpers\\GridColumnClassAutoConfigurationViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Form\\ViewHelpers\\RenderAllFormValuesViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Form\\ViewHelpers\\RenderFormValueViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Form\\ViewHelpers\\RenderRenderableViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Form\\ViewHelpers\\RenderViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Form\\ViewHelpers\\TranslateElementErrorViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Form\\ViewHelpers\\TranslateElementPropertyViewHelper' => true,
            '.abstract.instanceof.TYPO3\\CMS\\FrontendLogin\\Service\\ValidatorResolverService' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Frontend\\Authentication\\FrontendUserAuthentication' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Frontend\\Configuration\\TypoScript\\ConditionMatching\\ConditionMatcher' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Frontend\\ContentObject\\ContentObjectRenderer' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Frontend\\ContentObject\\Exception\\ProductionExceptionHandler' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Frontend\\ContentObject\\Menu\\MenuContentObjectFactory' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Frontend\\Hooks\\MediaItemHooks' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Frontend\\Http\\RequestHandler' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Frontend\\Middleware\\BackendUserAuthenticator' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Frontend\\Middleware\\ContentLengthResponseHeader' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Frontend\\Middleware\\EidHandler' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Frontend\\Middleware\\FrontendUserAuthenticator' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Frontend\\Middleware\\MaintenanceMode' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Frontend\\Middleware\\OutputCompression' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Frontend\\Middleware\\PageArgumentValidator' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Frontend\\Middleware\\PageResolver' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Frontend\\Middleware\\PrepareTypoScriptFrontendRendering' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Frontend\\Middleware\\PreviewSimulator' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Frontend\\Middleware\\ShortcutAndMountPointRedirect' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Frontend\\Middleware\\SiteBaseRedirectResolver' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Frontend\\Middleware\\SiteResolver' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Frontend\\Middleware\\StaticRouteResolver' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Frontend\\Middleware\\TimeTrackerInitialization' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Frontend\\Middleware\\TypoScriptFrontendInitialization' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Frontend\\Page\\CacheHashCalculator' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Frontend\\Resource\\FileCollector' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Frontend\\Utility\\CompressionUtility' => true,
            '.abstract.instanceof.TYPO3\\CMS\\RteCKEditor\\Form\\Element\\RichTextElement' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Scheduler\\Example\\SleepTask' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Scheduler\\Example\\TestTask' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Scheduler\\Scheduler' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Scheduler\\Task\\CachingFrameworkGarbageCollectionTask' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Scheduler\\Task\\ExecuteSchedulableCommandTask' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Scheduler\\Task\\FileStorageExtractionTask' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Scheduler\\Task\\FileStorageIndexingTask' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Scheduler\\Task\\IpAnonymizationTask' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Scheduler\\Task\\OptimizeDatabaseTableTask' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Scheduler\\Task\\RecyclerGarbageCollectionTask' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Scheduler\\Task\\TableGarbageCollectionTask' => true,
            '.abstract.instanceof.TYPO3\\CMS\\Seo\\PageTitle\\SeoTitlePageTitleProvider' => true,
            '.abstract.instanceof.TYPO3\\CMS\\T3editor\\Form\\Element\\T3editorElement' => true,
            '.abstract.instanceof.TYPO3\\CMS\\T3editor\\Registry\\AddonRegistry' => true,
            '.abstract.instanceof.TYPO3\\CMS\\T3editor\\Registry\\ModeRegistry' => true,
            '.abstract.instanceof.TYPO3\\CMS\\T3editor\\T3editor' => true,
            '.abstract.instanceof.dashboard.views.widget' => true,
            '.instanceof.Psr\\Http\\Server\\MiddlewareInterface.0.TYPO3\\CMS\\Backend\\Middleware\\AdditionalResponseHeaders' => true,
            '.instanceof.Psr\\Http\\Server\\MiddlewareInterface.0.TYPO3\\CMS\\Backend\\Middleware\\BackendRouteInitialization' => true,
            '.instanceof.Psr\\Http\\Server\\MiddlewareInterface.0.TYPO3\\CMS\\Backend\\Middleware\\BackendUserAuthenticator' => true,
            '.instanceof.Psr\\Http\\Server\\MiddlewareInterface.0.TYPO3\\CMS\\Backend\\Middleware\\ForcedHttpsBackendRedirector' => true,
            '.instanceof.Psr\\Http\\Server\\MiddlewareInterface.0.TYPO3\\CMS\\Backend\\Middleware\\LockedBackendGuard' => true,
            '.instanceof.Psr\\Http\\Server\\MiddlewareInterface.0.TYPO3\\CMS\\Backend\\Middleware\\OutputCompression' => true,
            '.instanceof.Psr\\Http\\Server\\MiddlewareInterface.0.TYPO3\\CMS\\Backend\\Middleware\\SiteResolver' => true,
            '.instanceof.Psr\\Http\\Server\\MiddlewareInterface.0.TYPO3\\CMS\\Core\\Middleware\\NormalizedParamsAttribute' => true,
            '.instanceof.Psr\\Http\\Server\\MiddlewareInterface.0.TYPO3\\CMS\\Extbase\\Middleware\\SignalSlotDeprecator' => true,
            '.instanceof.Psr\\Http\\Server\\MiddlewareInterface.0.TYPO3\\CMS\\Frontend\\Middleware\\BackendUserAuthenticator' => true,
            '.instanceof.Psr\\Http\\Server\\MiddlewareInterface.0.TYPO3\\CMS\\Frontend\\Middleware\\ContentLengthResponseHeader' => true,
            '.instanceof.Psr\\Http\\Server\\MiddlewareInterface.0.TYPO3\\CMS\\Frontend\\Middleware\\EidHandler' => true,
            '.instanceof.Psr\\Http\\Server\\MiddlewareInterface.0.TYPO3\\CMS\\Frontend\\Middleware\\FrontendUserAuthenticator' => true,
            '.instanceof.Psr\\Http\\Server\\MiddlewareInterface.0.TYPO3\\CMS\\Frontend\\Middleware\\MaintenanceMode' => true,
            '.instanceof.Psr\\Http\\Server\\MiddlewareInterface.0.TYPO3\\CMS\\Frontend\\Middleware\\OutputCompression' => true,
            '.instanceof.Psr\\Http\\Server\\MiddlewareInterface.0.TYPO3\\CMS\\Frontend\\Middleware\\PageArgumentValidator' => true,
            '.instanceof.Psr\\Http\\Server\\MiddlewareInterface.0.TYPO3\\CMS\\Frontend\\Middleware\\PageResolver' => true,
            '.instanceof.Psr\\Http\\Server\\MiddlewareInterface.0.TYPO3\\CMS\\Frontend\\Middleware\\PrepareTypoScriptFrontendRendering' => true,
            '.instanceof.Psr\\Http\\Server\\MiddlewareInterface.0.TYPO3\\CMS\\Frontend\\Middleware\\PreviewSimulator' => true,
            '.instanceof.Psr\\Http\\Server\\MiddlewareInterface.0.TYPO3\\CMS\\Frontend\\Middleware\\ShortcutAndMountPointRedirect' => true,
            '.instanceof.Psr\\Http\\Server\\MiddlewareInterface.0.TYPO3\\CMS\\Frontend\\Middleware\\SiteBaseRedirectResolver' => true,
            '.instanceof.Psr\\Http\\Server\\MiddlewareInterface.0.TYPO3\\CMS\\Frontend\\Middleware\\SiteResolver' => true,
            '.instanceof.Psr\\Http\\Server\\MiddlewareInterface.0.TYPO3\\CMS\\Frontend\\Middleware\\StaticRouteResolver' => true,
            '.instanceof.Psr\\Http\\Server\\MiddlewareInterface.0.TYPO3\\CMS\\Frontend\\Middleware\\TimeTrackerInitialization' => true,
            '.instanceof.Psr\\Http\\Server\\MiddlewareInterface.0.TYPO3\\CMS\\Frontend\\Middleware\\TypoScriptFrontendInitialization' => true,
            '.instanceof.Psr\\Http\\Server\\RequestHandlerInterface.0.TYPO3\\CMS\\Backend\\Http\\RequestHandler' => true,
            '.instanceof.Psr\\Http\\Server\\RequestHandlerInterface.0.TYPO3\\CMS\\Frontend\\Http\\RequestHandler' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Authentication\\PasswordReset' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Configuration\\TypoScript\\ConditionMatching\\ConditionMatcher' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Controller\\File\\ImageProcessController' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Controller\\LoginController' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Form\\Container\\FlexFormContainerContainer' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Form\\Container\\FlexFormElementContainer' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Form\\Container\\FlexFormEntryContainer' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Form\\Container\\FlexFormNoTabsContainer' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Form\\Container\\FlexFormSectionContainer' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Form\\Container\\FlexFormTabsContainer' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Form\\Container\\FullRecordContainer' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Form\\Container\\InlineControlContainer' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Form\\Container\\InlineRecordContainer' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Form\\Container\\ListOfFieldsContainer' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Form\\Container\\NoTabsContainer' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Form\\Container\\OuterWrapContainer' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Form\\Container\\PaletteAndSingleContainer' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Form\\Container\\SingleFieldContainer' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Form\\Container\\TabsContainer' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Form\\Element\\CheckboxElement' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Form\\Element\\CheckboxLabeledToggleElement' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Form\\Element\\CheckboxToggleElement' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Form\\Element\\FileInfoElement' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Form\\Element\\GroupElement' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Form\\Element\\ImageManipulationElement' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Form\\Element\\InputColorPickerElement' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Form\\Element\\InputDateTimeElement' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Form\\Element\\InputHiddenElement' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Form\\Element\\InputLinkElement' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Form\\Element\\InputSlugElement' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Form\\Element\\InputTextElement' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Form\\Element\\NoneElement' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Form\\Element\\PassThroughElement' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Form\\Element\\RadioElement' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Form\\Element\\SelectCheckBoxElement' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Form\\Element\\SelectMultipleSideBySideElement' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Form\\Element\\SelectSingleBoxElement' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Form\\Element\\SelectSingleElement' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Form\\Element\\SelectTreeElement' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Form\\Element\\TextElement' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Form\\Element\\TextTableElement' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Form\\Element\\UnknownElement' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Form\\Element\\UserElement' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Form\\Element\\UserSysFileStorageIsPublicElement' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Form\\FieldControl\\AddRecord' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Form\\FieldControl\\EditPopup' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Form\\FieldControl\\ElementBrowser' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Form\\FieldControl\\InsertClipboard' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Form\\FieldControl\\LinkPopup' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Form\\FieldControl\\ListModule' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Form\\FieldControl\\ResetSelection' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Form\\FieldControl\\TableWizard' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Form\\FieldInformation\\AdminIsSystemMaintainer' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Form\\FieldInformation\\TcaDescription' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Form\\FieldWizard\\DefaultLanguageDifferences' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Form\\FieldWizard\\LocalizationStateSelector' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Form\\FieldWizard\\OtherLanguageContent' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Form\\FieldWizard\\OtherLanguageThumbnails' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Form\\FieldWizard\\RecordsOverview' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Form\\FieldWizard\\SelectIcons' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Form\\FieldWizard\\TableList' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Form\\FormDataProvider\\DatabaseDefaultLanguagePageRow' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Form\\FormDataProvider\\DatabaseEditRow' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Form\\FormDataProvider\\DatabaseParentPageRow' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Form\\FormDataProvider\\SiteTcaInline' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Form\\FormDataProvider\\TcaInline' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Form\\NodeExpansion\\FieldControl' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Form\\NodeExpansion\\FieldInformation' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Form\\NodeExpansion\\FieldWizard' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\FrontendBackendUserAuthentication' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Preview\\StandardContentPreviewRenderer' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Security\\EmailLoginNotification' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\Template\\DocumentTemplate' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\View\\PageLayoutView' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Backend\\View\\Wizard\\Element\\BackendLayoutWizardElement' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Core\\Authentication\\AbstractAuthenticationService' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Core\\Authentication\\AuthenticationService' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Core\\Authentication\\BackendUserAuthentication' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Core\\Authentication\\CommandLineUserAuthentication' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Core\\Cache\\Backend\\ApcuBackend' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Core\\Cache\\Backend\\FileBackend' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Core\\Cache\\Backend\\MemcachedBackend' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Core\\Cache\\Backend\\NullBackend' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Core\\Cache\\Backend\\PdoBackend' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Core\\Cache\\Backend\\RedisBackend' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Core\\Cache\\Backend\\SimpleFileBackend' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Core\\Cache\\Backend\\TransientMemoryBackend' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Core\\Cache\\Backend\\WincacheBackend' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Core\\Configuration\\Loader\\YamlFileLoader' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Core\\DataHandling\\DataHandler' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Core\\Database\\Connection' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Core\\Database\\ReferenceIndex' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Core\\DependencyInjection\\Cache\\ContainerBackend' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Core\\Domain\\Repository\\PageRepository' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Core\\Error\\DebugExceptionHandler' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Core\\Error\\ErrorHandler' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Core\\Error\\ProductionExceptionHandler' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Core\\Html\\RteHtmlParser' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Core\\Mail\\TransportFactory' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Core\\PageTitle\\PageTitleProviderManager' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Core\\Resource\\Index\\Indexer' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Core\\Resource\\ProcessedFileRepository' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Core\\Resource\\StorageRepository' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Core\\Session\\Backend\\RedisSessionBackend' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Core\\Type\\File\\ImageInfo' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Extbase\\Object\\Container\\Container' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Extensionmanager\\Utility\\FileHandlingUtility' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Extensionmanager\\Utility\\InstallUtility' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Filelist\\Controller\\FileListController' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Frontend\\Authentication\\FrontendUserAuthentication' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Frontend\\Configuration\\TypoScript\\ConditionMatching\\ConditionMatcher' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Frontend\\ContentObject\\ContentObjectRenderer' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Frontend\\ContentObject\\Exception\\ProductionExceptionHandler' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Frontend\\Middleware\\PageArgumentValidator' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Frontend\\Resource\\FileCollector' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\RteCKEditor\\Form\\Element\\RichTextElement' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Scheduler\\Example\\SleepTask' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Scheduler\\Example\\TestTask' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Scheduler\\Scheduler' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Scheduler\\Task\\CachingFrameworkGarbageCollectionTask' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Scheduler\\Task\\ExecuteSchedulableCommandTask' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Scheduler\\Task\\FileStorageExtractionTask' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Scheduler\\Task\\FileStorageIndexingTask' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Scheduler\\Task\\IpAnonymizationTask' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Scheduler\\Task\\OptimizeDatabaseTableTask' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Scheduler\\Task\\RecyclerGarbageCollectionTask' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\Scheduler\\Task\\TableGarbageCollectionTask' => true,
            '.instanceof.Psr\\Log\\LoggerAwareInterface.0.TYPO3\\CMS\\T3editor\\Form\\Element\\T3editorElement' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.Extcode\\CartProducts\\ViewHelpers\\CanonicalTagViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.Extcode\\CartProducts\\ViewHelpers\\Form\\VariantSelectViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.Extcode\\CartProducts\\ViewHelpers\\Link\\ProductViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.Extcode\\CartProducts\\ViewHelpers\\Product\\BestSpecialPriceDiscountViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.Extcode\\CartProducts\\ViewHelpers\\Product\\BestSpecialPricePercentageDiscountViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.Extcode\\CartProducts\\ViewHelpers\\Product\\BestSpecialPriceViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.Extcode\\CartProducts\\ViewHelpers\\Product\\IfBestSpecialPriceAvailableViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.Extcode\\Cart\\ViewHelpers\\AdditionalJsonViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.Extcode\\Cart\\ViewHelpers\\CsvHeaderViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.Extcode\\Cart\\ViewHelpers\\CsvValuesViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.Extcode\\Cart\\ViewHelpers\\FieldNameViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.Extcode\\Cart\\ViewHelpers\\Form\\IsServiceAvailableAtPriceViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.Extcode\\Cart\\ViewHelpers\\Form\\SelectViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.Extcode\\Cart\\ViewHelpers\\Format\\CurrencyViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.Extcode\\Cart\\ViewHelpers\\Format\\NothingViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.Extcode\\Cart\\ViewHelpers\\IncludeFileViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.Extcode\\Cart\\ViewHelpers\\Link\\ActionViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.Extcode\\Cart\\ViewHelpers\\MapModelPropertiesToTableColumnsViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.Extcode\\Cart\\ViewHelpers\\MetaTagViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.Extcode\\Cart\\ViewHelpers\\TitleTagViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.Extcode\\Cart\\ViewHelpers\\Traversable\\ExtractViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.Extcode\\Cart\\ViewHelpers\\Variable\\GetViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.Extcode\\Cart\\ViewHelpers\\Variable\\SetViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Backend\\ViewHelpers\\ArrayBrowserViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Backend\\ViewHelpers\\AvatarViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Backend\\ViewHelpers\\LanguageColumnViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Backend\\ViewHelpers\\Link\\EditRecordViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Backend\\ViewHelpers\\Link\\NewRecordViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Backend\\ViewHelpers\\ModuleLayoutViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Backend\\ViewHelpers\\ModuleLayout\\Button\\LinkButtonViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Backend\\ViewHelpers\\ModuleLayout\\Button\\ShortcutButtonViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Backend\\ViewHelpers\\ModuleLayout\\MenuItemViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Backend\\ViewHelpers\\ModuleLayout\\MenuViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Backend\\ViewHelpers\\ModuleLinkViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Backend\\ViewHelpers\\ThumbnailViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Backend\\ViewHelpers\\Uri\\EditRecordViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Backend\\ViewHelpers\\Uri\\NewRecordViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Belog\\ViewHelpers\\Be\\PagePathViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Belog\\ViewHelpers\\Form\\TranslateLabelSelectViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Belog\\ViewHelpers\\FormatDetailsViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Belog\\ViewHelpers\\UsernameViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Belog\\ViewHelpers\\WorkspaceTitleViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Beuser\\ViewHelpers\\ArrayElementViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Beuser\\ViewHelpers\\Display\\TableAccessViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Beuser\\ViewHelpers\\PermissionsViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Beuser\\ViewHelpers\\SpriteIconForRecordViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Beuser\\ViewHelpers\\SwitchUserViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Core\\ViewHelpers\\Form\\TypoScriptConstantsViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Core\\ViewHelpers\\IconForRecordViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Core\\ViewHelpers\\IconForResourceViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Core\\ViewHelpers\\IconViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Extensionmanager\\ViewHelpers\\Be\\TriggerViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Extensionmanager\\ViewHelpers\\DistributionImageViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Extensionmanager\\ViewHelpers\\DownloadExtensionViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Extensionmanager\\ViewHelpers\\InstallationStateCssClassViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Extensionmanager\\ViewHelpers\\ProcessAvailableActionsViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Extensionmanager\\ViewHelpers\\ReloadSqlDataViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Extensionmanager\\ViewHelpers\\RemoveExtensionViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Extensionmanager\\ViewHelpers\\ToggleExtensionInstallationStateViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Extensionmanager\\ViewHelpers\\Typo3DependencyViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Extensionmanager\\ViewHelpers\\UpdateScriptViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Filelist\\ViewHelpers\\Uri\\CopyCutFileViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Filelist\\ViewHelpers\\Uri\\EditFileContentViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Filelist\\ViewHelpers\\Uri\\RenameFileViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Filelist\\ViewHelpers\\Uri\\ReplaceFileViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\FluidStyledContent\\ViewHelpers\\Link\\ClickEnlargeViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Asset\\CssViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Asset\\ScriptViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\BaseViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\Buttons\\CshViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\Buttons\\ShortcutViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\ContainerViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\InfoboxViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\Labels\\CshViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\LinkViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\Menus\\ActionMenuItemGroupViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\Menus\\ActionMenuItemViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\Menus\\ActionMenuViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\PageInfoViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\PagePathViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\PageRendererViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\Security\\IfAuthenticatedViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\Security\\IfHasRoleViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\TableListViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\UriViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\Widget\\PaginateViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\CObjectViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\DebugViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Debug\\RenderViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\FlashMessagesViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\FormViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Form\\ButtonViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Form\\CheckboxViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Form\\HiddenViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Form\\PasswordViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Form\\RadioViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Form\\SelectViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Form\\Select\\OptgroupViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Form\\Select\\OptionViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Form\\SubmitViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Form\\TextareaViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Form\\TextfieldViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Form\\UploadViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Form\\ValidationResultsViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Format\\BytesViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Format\\CaseViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Format\\CropViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Format\\CurrencyViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Format\\DateViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Format\\HtmlViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Format\\HtmlentitiesDecodeViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Format\\HtmlentitiesViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Format\\JsonViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Format\\Nl2brViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Format\\NumberViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Format\\PaddingViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Format\\StripTagsViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Format\\UrlencodeViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\ImageViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Link\\ActionViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Link\\EmailViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Link\\ExternalViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Link\\PageViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Link\\TypolinkViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\MediaViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\RenderChildrenViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\RenderViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Sanitize\\HtmlViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Security\\IfAuthenticatedViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Security\\IfHasRoleViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\TranslateViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Uri\\ActionViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Uri\\EmailViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Uri\\ExternalViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Uri\\ImageViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Uri\\PageViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Uri\\ResourceViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Uri\\TypolinkViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Widget\\AutocompleteViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Widget\\LinkViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Widget\\PaginateViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Widget\\UriViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Form\\ViewHelpers\\Be\\MaximumFileSizeViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Form\\ViewHelpers\\Be\\RenderContentElementPreviewViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Form\\ViewHelpers\\FormViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Form\\ViewHelpers\\Form\\DatePickerViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Form\\ViewHelpers\\Form\\TimePickerViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Form\\ViewHelpers\\Form\\UploadedResourceViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Form\\ViewHelpers\\GridColumnClassAutoConfigurationViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Form\\ViewHelpers\\RenderAllFormValuesViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Form\\ViewHelpers\\RenderFormValueViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Form\\ViewHelpers\\RenderRenderableViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Form\\ViewHelpers\\RenderViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Form\\ViewHelpers\\TranslateElementErrorViewHelper' => true,
            '.instanceof.TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface.0.TYPO3\\CMS\\Form\\ViewHelpers\\TranslateElementPropertyViewHelper' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.Extcode\\CartProducts\\Domain\\Repository\\CategoryRepository' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.Extcode\\CartProducts\\Domain\\Repository\\Product\\BeVariantAttributeOptionRepository' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.Extcode\\CartProducts\\Domain\\Repository\\Product\\BeVariantAttributeRepository' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.Extcode\\CartProducts\\Domain\\Repository\\Product\\BeVariantRepository' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.Extcode\\CartProducts\\Domain\\Repository\\Product\\ProductRepository' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.Extcode\\CartProducts\\Domain\\Repository\\Product\\SpecialPriceRepository' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.Extcode\\Cart\\Domain\\Repository\\CartRepository' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.Extcode\\Cart\\Domain\\Repository\\CouponRepository' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.Extcode\\Cart\\Domain\\Repository\\Order\\BillingAddressRepository' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.Extcode\\Cart\\Domain\\Repository\\Order\\DiscountRepository' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.Extcode\\Cart\\Domain\\Repository\\Order\\ItemRepository' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.Extcode\\Cart\\Domain\\Repository\\Order\\PaymentRepository' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.Extcode\\Cart\\Domain\\Repository\\Order\\ProductAdditionalRepository' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.Extcode\\Cart\\Domain\\Repository\\Order\\ProductRepository' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.Extcode\\Cart\\Domain\\Repository\\Order\\ShippingAddressRepository' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.Extcode\\Cart\\Domain\\Repository\\Order\\ShippingRepository' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.Extcode\\Cart\\Domain\\Repository\\Order\\TaxClassRepository' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.Extcode\\Cart\\Domain\\Repository\\Order\\TaxRepository' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.Extcode\\Cart\\Domain\\Repository\\Order\\TransactionRepository' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.Extcode\\Cart\\Service\\MailHandler' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.Extcode\\Cart\\Service\\SessionHandler' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.Extcode\\Cart\\Utility\\TemplateLayout' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.In2code\\Femanager\\Domain\\Repository\\LogRepository' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.In2code\\Femanager\\Domain\\Repository\\UserGroupRepository' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.In2code\\Femanager\\Domain\\Repository\\UserRepository' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.In2code\\Femanager\\Domain\\Service\\RatelimiterService' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Backend\\Domain\\Repository\\Module\\BackendModuleRepository' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Backend\\Module\\ModuleStorage' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Backend\\Routing\\Router' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Backend\\Routing\\UriBuilder' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Backend\\View\\BackendLayoutView' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Backend\\View\\BackendLayout\\DataProviderCollection' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Backend\\View\\BackendLayout\\DataProviderContext' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Backend\\View\\BackendLayout\\RecordRememberer' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Belog\\Domain\\Repository\\LogEntryRepository' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Belog\\Domain\\Repository\\WorkspaceRepository' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Beuser\\Domain\\Repository\\BackendUserGroupRepository' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Beuser\\Domain\\Repository\\BackendUserRepository' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Beuser\\Domain\\Repository\\BackendUserSessionRepository' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Beuser\\Service\\ModuleDataStorageService' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Core\\Cache\\CacheManager' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Core\\Category\\CategoryRegistry' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Core\\Charset\\CharsetConverter' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Core\\Configuration\\SiteConfiguration' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Core\\Console\\CommandRegistry' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Core\\Context\\Context' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Core\\Database\\SoftReferenceIndex' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Core\\Error\\DebugExceptionHandler' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Core\\Error\\ProductionExceptionHandler' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Core\\EventDispatcher\\EventDispatcher' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Core\\Html\\DefaultSanitizerBuilder' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Core\\Imaging\\IconRegistry' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Core\\LinkHandling\\LinkService' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Core\\Localization\\LanguageStore' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Core\\Localization\\Locales' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Core\\Localization\\LocalizationFactory' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Core\\Locking\\LockFactory' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Core\\Mail\\MemorySpool' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Core\\Mail\\TransportFactory' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Core\\Messaging\\FlashMessageService' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Core\\MetaTag\\MetaTagManagerRegistry' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Core\\Package\\FailsafePackageManager' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Core\\PageTitle\\PageTitleProviderManager' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Core\\PageTitle\\RecordPageTitleProvider' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Core\\Page\\AssetCollector' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Core\\Page\\PageRenderer' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Core\\Registry' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Core\\Resource\\Collection\\FileCollectionRegistry' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Core\\Resource\\Driver\\DriverRegistry' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Core\\Resource\\FileRepository' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Core\\Resource\\Index\\ExtractorRegistry' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Core\\Resource\\Index\\FileIndexRepository' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Core\\Resource\\Index\\MetaDataRepository' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Core\\Resource\\OnlineMedia\\Helpers\\OnlineMediaHelperRegistry' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Core\\Resource\\ProcessedFileRepository' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Core\\Resource\\Processing\\ProcessorRegistry' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Core\\Resource\\Processing\\TaskTypeRegistry' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Core\\Resource\\Rendering\\AudioTagRenderer' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Core\\Resource\\Rendering\\RendererRegistry' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Core\\Resource\\Rendering\\VideoTagRenderer' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Core\\Resource\\Rendering\\VimeoRenderer' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Core\\Resource\\Rendering\\YouTubeRenderer' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Core\\Resource\\ResourceFactory' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Core\\Resource\\Security\\FileMetadataPermissionsAspect' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Core\\Resource\\StorageRepository' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Core\\Resource\\TextExtraction\\TextExtractorRegistry' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Core\\Routing\\SiteMatcher' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Core\\Service\\FlexFormService' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Core\\Session\\SessionManager' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Core\\TimeTracker\\TimeTracker' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Dashboard\\DashboardPresetRegistry' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Dashboard\\WidgetGroupRegistry' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Dashboard\\WidgetRegistry' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Extbase\\Configuration\\BackendConfigurationManager' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Extbase\\Configuration\\FrontendConfigurationManager' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Extbase\\Configuration\\RequestHandlersConfigurationFactory' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Extbase\\Domain\\Repository\\BackendUserGroupRepository' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Extbase\\Domain\\Repository\\BackendUserRepository' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Extbase\\Domain\\Repository\\CategoryRepository' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Extbase\\Domain\\Repository\\FileMountRepository' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Extbase\\Domain\\Repository\\FrontendUserGroupRepository' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Extbase\\Domain\\Repository\\FrontendUserRepository' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\MvcPropertyMappingConfigurationService' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Extbase\\Mvc\\Dispatcher' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Extbase\\Mvc\\Web\\RequestBuilder' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Extbase\\Object\\Container\\Container' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Extbase\\Object\\ObjectManager' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Extbase\\Persistence\\ClassesConfigurationFactory' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Backend' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Mapper\\DataMapFactory' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Qom\\QueryObjectModelFactory' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Extbase\\Persistence\\Generic\\QueryFactory' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Session' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Storage\\Typo3DbBackend' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Extbase\\Persistence\\Repository' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Extbase\\Property\\PropertyMapper' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Extbase\\Property\\PropertyMappingConfigurationBuilder' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\ArrayConverter' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\BooleanConverter' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\CoreTypeConverter' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\DateTimeConverter' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\FileConverter' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\FileReferenceConverter' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\FloatConverter' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\FolderBasedFileCollectionConverter' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\FolderConverter' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\IntegerConverter' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\ObjectConverter' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\ObjectStorageConverter' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\PersistentObjectConverter' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\StaticFileCollectionConverter' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\StringConverter' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Extbase\\Reflection\\ReflectionService' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Extbase\\Security\\Cryptography\\HashService' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Extbase\\Service\\CacheService' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Extbase\\Service\\EnvironmentService' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Extbase\\Service\\ExtensionService' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Extbase\\Service\\ImageService' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Extbase\\Validation\\ValidatorResolver' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Extensionmanager\\Domain\\Model\\DownloadQueue' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Extensionmanager\\Domain\\Repository\\ExtensionRepository' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Extensionmanager\\Domain\\Repository\\RepositoryRepository' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Extensionmanager\\Service\\ExtensionManagementService' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Extensionmanager\\Utility\\DependencyUtility' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Extensionmanager\\Utility\\DownloadUtility' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Extensionmanager\\Utility\\EmConfUtility' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Extensionmanager\\Utility\\FileHandlingUtility' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Extensionmanager\\Utility\\InstallUtility' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Extensionmanager\\Utility\\ListUtility' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Extensionmanager\\Utility\\Repository\\Helper' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Filelist\\Configuration\\ThumbnailConfiguration' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Fluid\\Core\\Widget\\AjaxWidgetContextHolder' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Fluid\\Core\\Widget\\WidgetRequestBuilder' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\Widget\\Controller\\PaginateController' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Widget\\Controller\\AutocompleteController' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Widget\\Controller\\PaginateController' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Form\\Domain\\Configuration\\ConfigurationService' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Form\\Domain\\Configuration\\FormDefinitionConversionService' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Form\\Domain\\Configuration\\FormDefinitionValidationService' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Form\\Hooks\\SoftReferenceParserHook' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Form\\Mvc\\Configuration\\ConfigurationManager' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Form\\Mvc\\Property\\TypeConverter\\FormDefinitionArrayConverter' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Form\\Mvc\\Property\\TypeConverter\\UploadedFileReferenceConverter' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Form\\Service\\TranslationService' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Form\\Slot\\FilePersistenceSlot' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Form\\Slot\\ResourcePublicationSlot' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\FrontendLogin\\Service\\ValidatorResolverService' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Frontend\\ContentObject\\Menu\\MenuContentObjectFactory' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Frontend\\Hooks\\MediaItemHooks' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Frontend\\Page\\CacheHashCalculator' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Frontend\\Utility\\CompressionUtility' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Scheduler\\Scheduler' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\Seo\\PageTitle\\SeoTitlePageTitleProvider' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\T3editor\\Registry\\AddonRegistry' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\T3editor\\Registry\\ModeRegistry' => true,
            '.instanceof.TYPO3\\CMS\\Core\\SingletonInterface.0.TYPO3\\CMS\\T3editor\\T3editor' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ActionController.0.Extcode\\CartProducts\\Controller\\ProductController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ActionController.0.Extcode\\Cart\\Controller\\Backend\\ActionController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ActionController.0.Extcode\\Cart\\Controller\\Backend\\Order\\DocumentController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ActionController.0.Extcode\\Cart\\Controller\\Backend\\Order\\OrderController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ActionController.0.Extcode\\Cart\\Controller\\Backend\\Order\\PaymentController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ActionController.0.Extcode\\Cart\\Controller\\Backend\\Order\\ShippingController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ActionController.0.Extcode\\Cart\\Controller\\Cart\\ActionController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ActionController.0.Extcode\\Cart\\Controller\\Cart\\CartController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ActionController.0.Extcode\\Cart\\Controller\\Cart\\CartPreviewController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ActionController.0.Extcode\\Cart\\Controller\\Cart\\CountryController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ActionController.0.Extcode\\Cart\\Controller\\Cart\\CouponController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ActionController.0.Extcode\\Cart\\Controller\\Cart\\CurrencyController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ActionController.0.Extcode\\Cart\\Controller\\Cart\\OrderController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ActionController.0.Extcode\\Cart\\Controller\\Cart\\PaymentController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ActionController.0.Extcode\\Cart\\Controller\\Cart\\ProductController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ActionController.0.Extcode\\Cart\\Controller\\Cart\\ShippingController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ActionController.0.Extcode\\Cart\\Controller\\Order\\OrderController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ActionController.0.Extcode\\Cart\\Controller\\Order\\PaymentController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ActionController.0.TYPO3\\CMS\\Belog\\Controller\\BackendLogController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ActionController.0.TYPO3\\CMS\\Beuser\\Controller\\BackendUserController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ActionController.0.TYPO3\\CMS\\Beuser\\Controller\\BackendUserGroupController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ActionController.0.TYPO3\\CMS\\Beuser\\Controller\\PermissionController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ActionController.0.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ActionController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ActionController.0.TYPO3\\CMS\\Extensionmanager\\Controller\\AbstractController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ActionController.0.TYPO3\\CMS\\Extensionmanager\\Controller\\AbstractModuleController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ActionController.0.TYPO3\\CMS\\Extensionmanager\\Controller\\ActionController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ActionController.0.TYPO3\\CMS\\Extensionmanager\\Controller\\DistributionController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ActionController.0.TYPO3\\CMS\\Extensionmanager\\Controller\\DownloadController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ActionController.0.TYPO3\\CMS\\Extensionmanager\\Controller\\ExtensionComposerStatusController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ActionController.0.TYPO3\\CMS\\Extensionmanager\\Controller\\ListController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ActionController.0.TYPO3\\CMS\\Extensionmanager\\Controller\\UpdateFromTerController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ActionController.0.TYPO3\\CMS\\Extensionmanager\\Controller\\UpdateScriptController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ActionController.0.TYPO3\\CMS\\Extensionmanager\\Controller\\UploadExtensionFileController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ActionController.0.TYPO3\\CMS\\Filelist\\Controller\\FileListController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ActionController.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\Widget\\Controller\\PaginateController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ActionController.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Widget\\Controller\\AutocompleteController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ActionController.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Widget\\Controller\\PaginateController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ActionController.0.TYPO3\\CMS\\Form\\Controller\\FormEditorController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ActionController.0.TYPO3\\CMS\\Form\\Controller\\FormFrontendController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ActionController.0.TYPO3\\CMS\\Form\\Controller\\FormManagerController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ControllerInterface.0.Extcode\\CartProducts\\Controller\\ProductController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ControllerInterface.0.Extcode\\Cart\\Controller\\Backend\\ActionController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ControllerInterface.0.Extcode\\Cart\\Controller\\Backend\\Order\\DocumentController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ControllerInterface.0.Extcode\\Cart\\Controller\\Backend\\Order\\OrderController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ControllerInterface.0.Extcode\\Cart\\Controller\\Backend\\Order\\PaymentController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ControllerInterface.0.Extcode\\Cart\\Controller\\Backend\\Order\\ShippingController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ControllerInterface.0.Extcode\\Cart\\Controller\\Cart\\ActionController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ControllerInterface.0.Extcode\\Cart\\Controller\\Cart\\CartController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ControllerInterface.0.Extcode\\Cart\\Controller\\Cart\\CartPreviewController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ControllerInterface.0.Extcode\\Cart\\Controller\\Cart\\CountryController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ControllerInterface.0.Extcode\\Cart\\Controller\\Cart\\CouponController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ControllerInterface.0.Extcode\\Cart\\Controller\\Cart\\CurrencyController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ControllerInterface.0.Extcode\\Cart\\Controller\\Cart\\OrderController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ControllerInterface.0.Extcode\\Cart\\Controller\\Cart\\PaymentController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ControllerInterface.0.Extcode\\Cart\\Controller\\Cart\\ProductController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ControllerInterface.0.Extcode\\Cart\\Controller\\Cart\\ShippingController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ControllerInterface.0.Extcode\\Cart\\Controller\\Order\\OrderController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ControllerInterface.0.Extcode\\Cart\\Controller\\Order\\PaymentController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ControllerInterface.0.TYPO3\\CMS\\Belog\\Controller\\BackendLogController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ControllerInterface.0.TYPO3\\CMS\\Beuser\\Controller\\BackendUserController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ControllerInterface.0.TYPO3\\CMS\\Beuser\\Controller\\BackendUserGroupController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ControllerInterface.0.TYPO3\\CMS\\Beuser\\Controller\\PermissionController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ControllerInterface.0.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ActionController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ControllerInterface.0.TYPO3\\CMS\\Extensionmanager\\Controller\\AbstractController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ControllerInterface.0.TYPO3\\CMS\\Extensionmanager\\Controller\\AbstractModuleController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ControllerInterface.0.TYPO3\\CMS\\Extensionmanager\\Controller\\ActionController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ControllerInterface.0.TYPO3\\CMS\\Extensionmanager\\Controller\\DistributionController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ControllerInterface.0.TYPO3\\CMS\\Extensionmanager\\Controller\\DownloadController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ControllerInterface.0.TYPO3\\CMS\\Extensionmanager\\Controller\\ExtensionComposerStatusController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ControllerInterface.0.TYPO3\\CMS\\Extensionmanager\\Controller\\ListController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ControllerInterface.0.TYPO3\\CMS\\Extensionmanager\\Controller\\UpdateFromTerController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ControllerInterface.0.TYPO3\\CMS\\Extensionmanager\\Controller\\UpdateScriptController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ControllerInterface.0.TYPO3\\CMS\\Extensionmanager\\Controller\\UploadExtensionFileController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ControllerInterface.0.TYPO3\\CMS\\Filelist\\Controller\\FileListController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ControllerInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\Widget\\Controller\\PaginateController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ControllerInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Widget\\Controller\\AutocompleteController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ControllerInterface.0.TYPO3\\CMS\\Fluid\\ViewHelpers\\Widget\\Controller\\PaginateController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ControllerInterface.0.TYPO3\\CMS\\Form\\Controller\\FormEditorController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ControllerInterface.0.TYPO3\\CMS\\Form\\Controller\\FormFrontendController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ControllerInterface.0.TYPO3\\CMS\\Form\\Controller\\FormManagerController' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\RequestHandlerInterface.0.TYPO3\\CMS\\Extbase\\Mvc\\Web\\BackendRequestHandler' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\RequestHandlerInterface.0.TYPO3\\CMS\\Extbase\\Mvc\\Web\\FrontendRequestHandler' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\RequestHandlerInterface.0.TYPO3\\CMS\\Fluid\\Core\\Widget\\WidgetRequestHandler' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface.0.TYPO3\\CMS\\Extbase\\Mvc\\View\\EmptyView' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface.0.TYPO3\\CMS\\Extbase\\Mvc\\View\\JsonView' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface.0.TYPO3\\CMS\\Extbase\\Mvc\\View\\NotFoundView' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface.0.TYPO3\\CMS\\Fluid\\View\\StandaloneView' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface.0.TYPO3\\CMS\\Fluid\\View\\TemplateView' => true,
            '.instanceof.TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface.0.dashboard.views.widget' => true,
            '.service_locator.Zq25pgk' => true,
            'Extcode\\CartProducts\\Domain\\Model\\Category' => true,
            'Extcode\\CartProducts\\Domain\\Model\\Dto\\Product\\ProductDemand' => true,
            'Extcode\\CartProducts\\Domain\\Model\\Product\\BeVariant' => true,
            'Extcode\\CartProducts\\Domain\\Model\\Product\\BeVariantAttribute' => true,
            'Extcode\\CartProducts\\Domain\\Model\\Product\\BeVariantAttributeOption' => true,
            'Extcode\\CartProducts\\Domain\\Model\\Product\\FeVariant' => true,
            'Extcode\\CartProducts\\Domain\\Model\\Product\\Product' => true,
            'Extcode\\CartProducts\\Domain\\Model\\Product\\QuantityDiscount' => true,
            'Extcode\\CartProducts\\Domain\\Model\\Product\\SpecialPrice' => true,
            'Extcode\\CartProducts\\Domain\\Model\\TtContent' => true,
            'Extcode\\CartProducts\\Hooks\\DataHandler' => true,
            'Extcode\\CartProducts\\Hooks\\DatamapDataHandlerHook' => true,
            'Extcode\\CartProducts\\Hooks\\KeSearchIndexer' => true,
            'Extcode\\CartProducts\\Utility\\ProductUtility' => true,
            'Extcode\\Cart\\Constants' => true,
            'Extcode\\Cart\\Domain\\Finisher\\Form\\AddToCartFinisher' => true,
            'Extcode\\Cart\\Domain\\Model\\Cart' => true,
            'Extcode\\Cart\\Domain\\Model\\Cart\\BeVariant' => true,
            'Extcode\\Cart\\Domain\\Model\\Cart\\Cart' => true,
            'Extcode\\Cart\\Domain\\Model\\Cart\\CartCoupon' => true,
            'Extcode\\Cart\\Domain\\Model\\Cart\\CartCouponInterface' => true,
            'Extcode\\Cart\\Domain\\Model\\Cart\\Extra' => true,
            'Extcode\\Cart\\Domain\\Model\\Cart\\FeVariant' => true,
            'Extcode\\Cart\\Domain\\Model\\Cart\\Product' => true,
            'Extcode\\Cart\\Domain\\Model\\Cart\\Service' => true,
            'Extcode\\Cart\\Domain\\Model\\Cart\\ServiceInterface' => true,
            'Extcode\\Cart\\Domain\\Model\\Cart\\TaxClass' => true,
            'Extcode\\Cart\\Domain\\Model\\Coupon' => true,
            'Extcode\\Cart\\Domain\\Model\\Dto\\AvailabilityResponse' => true,
            'Extcode\\Cart\\Domain\\Model\\Order\\BillingAddress' => true,
            'Extcode\\Cart\\Domain\\Model\\Order\\Discount' => true,
            'Extcode\\Cart\\Domain\\Model\\Order\\Item' => true,
            'Extcode\\Cart\\Domain\\Model\\Order\\Payment' => true,
            'Extcode\\Cart\\Domain\\Model\\Order\\Product' => true,
            'Extcode\\Cart\\Domain\\Model\\Order\\ProductAdditional' => true,
            'Extcode\\Cart\\Domain\\Model\\Order\\Shipping' => true,
            'Extcode\\Cart\\Domain\\Model\\Order\\ShippingAddress' => true,
            'Extcode\\Cart\\Domain\\Model\\Order\\Tax' => true,
            'Extcode\\Cart\\Domain\\Model\\Order\\TaxClass' => true,
            'Extcode\\Cart\\Domain\\Model\\Order\\Transaction' => true,
            'Extcode\\Cart\\Domain\\Model\\Tag' => true,
            'Extcode\\Cart\\Domain\\Validator\\OrderItemValidator' => true,
            'Extcode\\Cart\\Event\\CheckProductAvailabilityEvent' => true,
            'Extcode\\Cart\\Event\\CheckProductAvailabilityEventInterface' => true,
            'Extcode\\Cart\\Event\\Order\\CreateEvent' => true,
            'Extcode\\Cart\\Event\\Order\\FinishEvent' => true,
            'Extcode\\Cart\\Event\\Order\\PaymentEvent' => true,
            'Extcode\\Cart\\Event\\Order\\StockEvent' => true,
            'Extcode\\Cart\\Event\\ProcessOrderCheckStockEvent' => true,
            'Extcode\\Cart\\Event\\ProcessOrderCheckStockEventInterface' => true,
            'Extcode\\Cart\\Event\\ProcessOrderCreateEvent' => true,
            'Extcode\\Cart\\Event\\ProcessOrderCreateEventInterface' => true,
            'Extcode\\Cart\\Event\\RetrieveProductsFromRequestEvent' => true,
            'Extcode\\Cart\\Event\\RetrieveProductsFromRequestEventInterface' => true,
            'Extcode\\Cart\\Hooks\\ItemsProcFunc' => true,
            'Extcode\\Cart\\Hooks\\MailAttachmentHook' => true,
            'Extcode\\Cart\\Hooks\\MailAttachmentHookInterface' => true,
            'Extcode\\Cart\\Property\\Exception\\ResetPropertyException' => true,
            'Extcode\\Cart\\Service\\TaxClassServiceInterface' => true,
            'Extcode\\Cart\\Utility\\CartUtility' => true,
            'Extcode\\Cart\\Utility\\CurrencyUtility' => true,
            'Extcode\\Cart\\Utility\\EvalPrice' => true,
            'Extcode\\Cart\\Utility\\OrderUtility' => true,
            'Extcode\\Cart\\Utility\\ParserUtility' => true,
            'Extcode\\Cart\\Validation\\Validator\\EmptyValidator' => true,
            'GuzzleHttp\\Client' => true,
            'Psr\\Container\\ContainerInterface' => true,
            'Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1.inner' => true,
            'Symfony\\Component\\DependencyInjection\\ContainerInterface' => true,
            'TYPO3\\CMS\\Backend\\Authentication\\Event\\SwitchUserEvent' => true,
            'TYPO3\\CMS\\Backend\\Authentication\\PasswordReset' => true,
            'TYPO3\\CMS\\Backend\\Backend\\Avatar\\Avatar' => true,
            'TYPO3\\CMS\\Backend\\Backend\\Avatar\\AvatarProviderInterface' => true,
            'TYPO3\\CMS\\Backend\\Backend\\Avatar\\DefaultAvatarProvider' => true,
            'TYPO3\\CMS\\Backend\\Backend\\Avatar\\Image' => true,
            'TYPO3\\CMS\\Backend\\Backend\\Event\\SystemInformationToolbarCollectorEvent' => true,
            'TYPO3\\CMS\\Backend\\Backend\\Shortcut\\ShortcutRepository' => true,
            'TYPO3\\CMS\\Backend\\Backend\\ToolbarItems\\ClearCacheToolbarItem' => true,
            'TYPO3\\CMS\\Backend\\Backend\\ToolbarItems\\HelpToolbarItem' => true,
            'TYPO3\\CMS\\Backend\\Backend\\ToolbarItems\\LiveSearchToolbarItem' => true,
            'TYPO3\\CMS\\Backend\\Backend\\ToolbarItems\\ShortcutToolbarItem' => true,
            'TYPO3\\CMS\\Backend\\Backend\\ToolbarItems\\SystemInformationToolbarItem' => true,
            'TYPO3\\CMS\\Backend\\Backend\\ToolbarItems\\UserToolbarItem' => true,
            'TYPO3\\CMS\\Backend\\Clipboard\\Clipboard' => true,
            'TYPO3\\CMS\\Backend\\Command\\ProgressListener\\ReferenceIndexProgressListener' => true,
            'TYPO3\\CMS\\Backend\\Composer\\InstallerScripts' => true,
            'TYPO3\\CMS\\Backend\\Configuration\\BackendUserConfiguration' => true,
            'TYPO3\\CMS\\Backend\\Configuration\\SiteTcaConfiguration' => true,
            'TYPO3\\CMS\\Backend\\Configuration\\TCA\\UserFunctions' => true,
            'TYPO3\\CMS\\Backend\\Configuration\\TranslationConfigurationProvider' => true,
            'TYPO3\\CMS\\Backend\\Configuration\\TsConfigParser' => true,
            'TYPO3\\CMS\\Backend\\Configuration\\TypoScript\\ConditionMatching\\ConditionMatcher' => true,
            'TYPO3\\CMS\\Backend\\ContextMenu\\ContextMenu' => true,
            'TYPO3\\CMS\\Backend\\ContextMenu\\ItemProviders\\AbstractProvider' => true,
            'TYPO3\\CMS\\Backend\\ContextMenu\\ItemProviders\\PageProvider' => true,
            'TYPO3\\CMS\\Backend\\ContextMenu\\ItemProviders\\RecordProvider' => true,
            'TYPO3\\CMS\\Backend\\Controller\\AjaxLoginController' => true,
            'TYPO3\\CMS\\Backend\\Controller\\BackendController' => true,
            'TYPO3\\CMS\\Backend\\Controller\\ContentElement\\ElementHistoryController' => true,
            'TYPO3\\CMS\\Backend\\Controller\\ContentElement\\ElementInformationController' => true,
            'TYPO3\\CMS\\Backend\\Controller\\ContentElement\\MoveElementController' => true,
            'TYPO3\\CMS\\Backend\\Controller\\ContentElement\\NewContentElementController' => true,
            'TYPO3\\CMS\\Backend\\Controller\\ContextHelpAjaxController' => true,
            'TYPO3\\CMS\\Backend\\Controller\\ContextMenuController' => true,
            'TYPO3\\CMS\\Backend\\Controller\\DummyController' => true,
            'TYPO3\\CMS\\Backend\\Controller\\Event\\AfterFormEnginePageInitializedEvent' => true,
            'TYPO3\\CMS\\Backend\\Controller\\Event\\AfterPageColumnsSelectedForLocalizationEvent' => true,
            'TYPO3\\CMS\\Backend\\Controller\\Event\\BeforeFormEnginePageInitializedEvent' => true,
            'TYPO3\\CMS\\Backend\\Controller\\FileSystemNavigationFrameController' => true,
            'TYPO3\\CMS\\Backend\\Controller\\File\\CreateFolderController' => true,
            'TYPO3\\CMS\\Backend\\Controller\\File\\EditFileController' => true,
            'TYPO3\\CMS\\Backend\\Controller\\File\\FileController' => true,
            'TYPO3\\CMS\\Backend\\Controller\\File\\FileUploadController' => true,
            'TYPO3\\CMS\\Backend\\Controller\\File\\RenameFileController' => true,
            'TYPO3\\CMS\\Backend\\Controller\\File\\ReplaceFileController' => true,
            'TYPO3\\CMS\\Backend\\Controller\\File\\ThumbnailController' => true,
            'TYPO3\\CMS\\Backend\\Controller\\FlashMessageController' => true,
            'TYPO3\\CMS\\Backend\\Controller\\FormFlexAjaxController' => true,
            'TYPO3\\CMS\\Backend\\Controller\\FormInlineAjaxController' => true,
            'TYPO3\\CMS\\Backend\\Controller\\FormSelectTreeAjaxController' => true,
            'TYPO3\\CMS\\Backend\\Controller\\FormSlugAjaxController' => true,
            'TYPO3\\CMS\\Backend\\Controller\\LinkBrowserController' => true,
            'TYPO3\\CMS\\Backend\\Controller\\LiveSearchController' => true,
            'TYPO3\\CMS\\Backend\\Controller\\LogoutController' => true,
            'TYPO3\\CMS\\Backend\\Controller\\NewRecordController' => true,
            'TYPO3\\CMS\\Backend\\Controller\\OnlineMediaController' => true,
            'TYPO3\\CMS\\Backend\\Controller\\PageLayoutController' => true,
            'TYPO3\\CMS\\Backend\\Controller\\Page\\LocalizationController' => true,
            'TYPO3\\CMS\\Backend\\Controller\\Page\\NewMultiplePagesController' => true,
            'TYPO3\\CMS\\Backend\\Controller\\Page\\SortSubPagesController' => true,
            'TYPO3\\CMS\\Backend\\Controller\\Page\\TreeController' => true,
            'TYPO3\\CMS\\Backend\\Controller\\ShortcutController' => true,
            'TYPO3\\CMS\\Backend\\Controller\\SimpleDataHandlerController' => true,
            'TYPO3\\CMS\\Backend\\Controller\\SiteConfigurationController' => true,
            'TYPO3\\CMS\\Backend\\Controller\\SiteInlineAjaxController' => true,
            'TYPO3\\CMS\\Backend\\Controller\\SystemInformationController' => true,
            'TYPO3\\CMS\\Backend\\Controller\\UserSettingsController' => true,
            'TYPO3\\CMS\\Backend\\Controller\\Wizard\\AbstractWizardController' => true,
            'TYPO3\\CMS\\Backend\\Controller\\Wizard\\AddController' => true,
            'TYPO3\\CMS\\Backend\\Controller\\Wizard\\EditController' => true,
            'TYPO3\\CMS\\Backend\\Controller\\Wizard\\ImageManipulationController' => true,
            'TYPO3\\CMS\\Backend\\Controller\\Wizard\\ListController' => true,
            'TYPO3\\CMS\\Backend\\Controller\\Wizard\\SuggestWizardController' => true,
            'TYPO3\\CMS\\Backend\\Controller\\Wizard\\TableController' => true,
            'TYPO3\\CMS\\Backend\\Domain\\Model\\Module\\BackendModule' => true,
            'TYPO3\\CMS\\Backend\\Domain\\Repository\\Localization\\LocalizationRepository' => true,
            'TYPO3\\CMS\\Backend\\Domain\\Repository\\TableManualRepository' => true,
            'TYPO3\\CMS\\Backend\\Exception' => true,
            'TYPO3\\CMS\\Backend\\Exception\\BackendAccessDeniedException' => true,
            'TYPO3\\CMS\\Backend\\Exception\\BackendLockedException' => true,
            'TYPO3\\CMS\\Backend\\Exception\\SiteValidationErrorException' => true,
            'TYPO3\\CMS\\Backend\\Form\\Container\\FlexFormContainerContainer' => true,
            'TYPO3\\CMS\\Backend\\Form\\Container\\FlexFormElementContainer' => true,
            'TYPO3\\CMS\\Backend\\Form\\Container\\FlexFormEntryContainer' => true,
            'TYPO3\\CMS\\Backend\\Form\\Container\\FlexFormNoTabsContainer' => true,
            'TYPO3\\CMS\\Backend\\Form\\Container\\FlexFormSectionContainer' => true,
            'TYPO3\\CMS\\Backend\\Form\\Container\\FlexFormTabsContainer' => true,
            'TYPO3\\CMS\\Backend\\Form\\Container\\FullRecordContainer' => true,
            'TYPO3\\CMS\\Backend\\Form\\Container\\InlineControlContainer' => true,
            'TYPO3\\CMS\\Backend\\Form\\Container\\InlineRecordContainer' => true,
            'TYPO3\\CMS\\Backend\\Form\\Container\\ListOfFieldsContainer' => true,
            'TYPO3\\CMS\\Backend\\Form\\Container\\NoTabsContainer' => true,
            'TYPO3\\CMS\\Backend\\Form\\Container\\OuterWrapContainer' => true,
            'TYPO3\\CMS\\Backend\\Form\\Container\\PaletteAndSingleContainer' => true,
            'TYPO3\\CMS\\Backend\\Form\\Container\\SingleFieldContainer' => true,
            'TYPO3\\CMS\\Backend\\Form\\Container\\TabsContainer' => true,
            'TYPO3\\CMS\\Backend\\Form\\Element\\CheckboxElement' => true,
            'TYPO3\\CMS\\Backend\\Form\\Element\\CheckboxLabeledToggleElement' => true,
            'TYPO3\\CMS\\Backend\\Form\\Element\\CheckboxToggleElement' => true,
            'TYPO3\\CMS\\Backend\\Form\\Element\\FileInfoElement' => true,
            'TYPO3\\CMS\\Backend\\Form\\Element\\GroupElement' => true,
            'TYPO3\\CMS\\Backend\\Form\\Element\\ImageManipulationElement' => true,
            'TYPO3\\CMS\\Backend\\Form\\Element\\InputColorPickerElement' => true,
            'TYPO3\\CMS\\Backend\\Form\\Element\\InputDateTimeElement' => true,
            'TYPO3\\CMS\\Backend\\Form\\Element\\InputHiddenElement' => true,
            'TYPO3\\CMS\\Backend\\Form\\Element\\InputLinkElement' => true,
            'TYPO3\\CMS\\Backend\\Form\\Element\\InputSlugElement' => true,
            'TYPO3\\CMS\\Backend\\Form\\Element\\InputTextElement' => true,
            'TYPO3\\CMS\\Backend\\Form\\Element\\NoneElement' => true,
            'TYPO3\\CMS\\Backend\\Form\\Element\\PassThroughElement' => true,
            'TYPO3\\CMS\\Backend\\Form\\Element\\RadioElement' => true,
            'TYPO3\\CMS\\Backend\\Form\\Element\\SelectCheckBoxElement' => true,
            'TYPO3\\CMS\\Backend\\Form\\Element\\SelectMultipleSideBySideElement' => true,
            'TYPO3\\CMS\\Backend\\Form\\Element\\SelectSingleBoxElement' => true,
            'TYPO3\\CMS\\Backend\\Form\\Element\\SelectSingleElement' => true,
            'TYPO3\\CMS\\Backend\\Form\\Element\\SelectTreeElement' => true,
            'TYPO3\\CMS\\Backend\\Form\\Element\\TextElement' => true,
            'TYPO3\\CMS\\Backend\\Form\\Element\\TextTableElement' => true,
            'TYPO3\\CMS\\Backend\\Form\\Element\\UnknownElement' => true,
            'TYPO3\\CMS\\Backend\\Form\\Element\\UserElement' => true,
            'TYPO3\\CMS\\Backend\\Form\\Element\\UserSysFileStorageIsPublicElement' => true,
            'TYPO3\\CMS\\Backend\\Form\\Exception' => true,
            'TYPO3\\CMS\\Backend\\Form\\Exception\\AccessDeniedContentEditException' => true,
            'TYPO3\\CMS\\Backend\\Form\\Exception\\AccessDeniedEditInternalsException' => true,
            'TYPO3\\CMS\\Backend\\Form\\Exception\\AccessDeniedHookException' => true,
            'TYPO3\\CMS\\Backend\\Form\\Exception\\AccessDeniedPageEditException' => true,
            'TYPO3\\CMS\\Backend\\Form\\Exception\\AccessDeniedPageNewException' => true,
            'TYPO3\\CMS\\Backend\\Form\\Exception\\AccessDeniedRootNodeException' => true,
            'TYPO3\\CMS\\Backend\\Form\\Exception\\AccessDeniedTableModifyException' => true,
            'TYPO3\\CMS\\Backend\\Form\\Exception\\DatabaseDefaultLanguageException' => true,
            'TYPO3\\CMS\\Backend\\Form\\Exception\\DatabaseRecordException' => true,
            'TYPO3\\CMS\\Backend\\Form\\Exception\\DatabaseRecordWorkspaceDeletePlaceholderException' => true,
            'TYPO3\\CMS\\Backend\\Form\\FieldControl\\AddRecord' => true,
            'TYPO3\\CMS\\Backend\\Form\\FieldControl\\EditPopup' => true,
            'TYPO3\\CMS\\Backend\\Form\\FieldControl\\ElementBrowser' => true,
            'TYPO3\\CMS\\Backend\\Form\\FieldControl\\InsertClipboard' => true,
            'TYPO3\\CMS\\Backend\\Form\\FieldControl\\LinkPopup' => true,
            'TYPO3\\CMS\\Backend\\Form\\FieldControl\\ListModule' => true,
            'TYPO3\\CMS\\Backend\\Form\\FieldControl\\ResetSelection' => true,
            'TYPO3\\CMS\\Backend\\Form\\FieldControl\\TableWizard' => true,
            'TYPO3\\CMS\\Backend\\Form\\FieldInformation\\AdminIsSystemMaintainer' => true,
            'TYPO3\\CMS\\Backend\\Form\\FieldInformation\\TcaDescription' => true,
            'TYPO3\\CMS\\Backend\\Form\\FieldWizard\\DefaultLanguageDifferences' => true,
            'TYPO3\\CMS\\Backend\\Form\\FieldWizard\\LocalizationStateSelector' => true,
            'TYPO3\\CMS\\Backend\\Form\\FieldWizard\\OtherLanguageContent' => true,
            'TYPO3\\CMS\\Backend\\Form\\FieldWizard\\OtherLanguageThumbnails' => true,
            'TYPO3\\CMS\\Backend\\Form\\FieldWizard\\RecordsOverview' => true,
            'TYPO3\\CMS\\Backend\\Form\\FieldWizard\\SelectIcons' => true,
            'TYPO3\\CMS\\Backend\\Form\\FieldWizard\\TableList' => true,
            'TYPO3\\CMS\\Backend\\Form\\FormDataCompiler' => true,
            'TYPO3\\CMS\\Backend\\Form\\FormDataGroup\\FlexFormSegment' => true,
            'TYPO3\\CMS\\Backend\\Form\\FormDataGroup\\OnTheFly' => true,
            'TYPO3\\CMS\\Backend\\Form\\FormDataGroup\\OrderedProviderList' => true,
            'TYPO3\\CMS\\Backend\\Form\\FormDataGroup\\SiteConfigurationDataGroup' => true,
            'TYPO3\\CMS\\Backend\\Form\\FormDataGroup\\TcaDatabaseRecord' => true,
            'TYPO3\\CMS\\Backend\\Form\\FormDataGroup\\TcaInputPlaceholderRecord' => true,
            'TYPO3\\CMS\\Backend\\Form\\FormDataGroup\\TcaSelectTreeAjaxFieldData' => true,
            'TYPO3\\CMS\\Backend\\Form\\FormDataProvider\\DatabaseDefaultLanguagePageRow' => true,
            'TYPO3\\CMS\\Backend\\Form\\FormDataProvider\\DatabaseEditRow' => true,
            'TYPO3\\CMS\\Backend\\Form\\FormDataProvider\\DatabaseEffectivePid' => true,
            'TYPO3\\CMS\\Backend\\Form\\FormDataProvider\\DatabaseLanguageRows' => true,
            'TYPO3\\CMS\\Backend\\Form\\FormDataProvider\\DatabasePageLanguageOverlayRows' => true,
            'TYPO3\\CMS\\Backend\\Form\\FormDataProvider\\DatabasePageRootline' => true,
            'TYPO3\\CMS\\Backend\\Form\\FormDataProvider\\DatabaseParentPageRow' => true,
            'TYPO3\\CMS\\Backend\\Form\\FormDataProvider\\DatabaseRecordOverrideValues' => true,
            'TYPO3\\CMS\\Backend\\Form\\FormDataProvider\\DatabaseRecordTypeValue' => true,
            'TYPO3\\CMS\\Backend\\Form\\FormDataProvider\\DatabaseRowDateTimeFields' => true,
            'TYPO3\\CMS\\Backend\\Form\\FormDataProvider\\DatabaseRowDefaultValues' => true,
            'TYPO3\\CMS\\Backend\\Form\\FormDataProvider\\DatabaseRowInitializeNew' => true,
            'TYPO3\\CMS\\Backend\\Form\\FormDataProvider\\DatabaseSystemLanguageRows' => true,
            'TYPO3\\CMS\\Backend\\Form\\FormDataProvider\\DatabaseUniqueUidNewRow' => true,
            'TYPO3\\CMS\\Backend\\Form\\FormDataProvider\\DatabaseUserPermissionCheck' => true,
            'TYPO3\\CMS\\Backend\\Form\\FormDataProvider\\EvaluateDisplayConditions' => true,
            'TYPO3\\CMS\\Backend\\Form\\FormDataProvider\\InitializeProcessedTca' => true,
            'TYPO3\\CMS\\Backend\\Form\\FormDataProvider\\InlineOverrideChildTca' => true,
            'TYPO3\\CMS\\Backend\\Form\\FormDataProvider\\PageTsConfig' => true,
            'TYPO3\\CMS\\Backend\\Form\\FormDataProvider\\PageTsConfigMerged' => true,
            'TYPO3\\CMS\\Backend\\Form\\FormDataProvider\\ReturnUrl' => true,
            'TYPO3\\CMS\\Backend\\Form\\FormDataProvider\\SiteResolving' => true,
            'TYPO3\\CMS\\Backend\\Form\\FormDataProvider\\SiteTcaInline' => true,
            'TYPO3\\CMS\\Backend\\Form\\FormDataProvider\\SiteTcaSelectItems' => true,
            'TYPO3\\CMS\\Backend\\Form\\FormDataProvider\\TcaCheckboxItems' => true,
            'TYPO3\\CMS\\Backend\\Form\\FormDataProvider\\TcaColumnsOverrides' => true,
            'TYPO3\\CMS\\Backend\\Form\\FormDataProvider\\TcaColumnsProcessCommon' => true,
            'TYPO3\\CMS\\Backend\\Form\\FormDataProvider\\TcaColumnsProcessFieldLabels' => true,
            'TYPO3\\CMS\\Backend\\Form\\FormDataProvider\\TcaColumnsProcessPlaceholders' => true,
            'TYPO3\\CMS\\Backend\\Form\\FormDataProvider\\TcaColumnsProcessRecordTitle' => true,
            'TYPO3\\CMS\\Backend\\Form\\FormDataProvider\\TcaColumnsProcessShowitem' => true,
            'TYPO3\\CMS\\Backend\\Form\\FormDataProvider\\TcaColumnsRemoveUnused' => true,
            'TYPO3\\CMS\\Backend\\Form\\FormDataProvider\\TcaFlexPrepare' => true,
            'TYPO3\\CMS\\Backend\\Form\\FormDataProvider\\TcaFlexProcess' => true,
            'TYPO3\\CMS\\Backend\\Form\\FormDataProvider\\TcaGroup' => true,
            'TYPO3\\CMS\\Backend\\Form\\FormDataProvider\\TcaInline' => true,
            'TYPO3\\CMS\\Backend\\Form\\FormDataProvider\\TcaInlineConfiguration' => true,
            'TYPO3\\CMS\\Backend\\Form\\FormDataProvider\\TcaInlineExpandCollapseState' => true,
            'TYPO3\\CMS\\Backend\\Form\\FormDataProvider\\TcaInlineIsOnSymmetricSide' => true,
            'TYPO3\\CMS\\Backend\\Form\\FormDataProvider\\TcaInputPlaceholders' => true,
            'TYPO3\\CMS\\Backend\\Form\\FormDataProvider\\TcaRadioItems' => true,
            'TYPO3\\CMS\\Backend\\Form\\FormDataProvider\\TcaRecordTitle' => true,
            'TYPO3\\CMS\\Backend\\Form\\FormDataProvider\\TcaSelectItems' => true,
            'TYPO3\\CMS\\Backend\\Form\\FormDataProvider\\TcaSelectTreeItems' => true,
            'TYPO3\\CMS\\Backend\\Form\\FormDataProvider\\TcaSlug' => true,
            'TYPO3\\CMS\\Backend\\Form\\FormDataProvider\\TcaText' => true,
            'TYPO3\\CMS\\Backend\\Form\\FormDataProvider\\TcaTypesShowitem' => true,
            'TYPO3\\CMS\\Backend\\Form\\FormDataProvider\\UserTsConfig' => true,
            'TYPO3\\CMS\\Backend\\Form\\FormResultCompiler' => true,
            'TYPO3\\CMS\\Backend\\Form\\InlineStackProcessor' => true,
            'TYPO3\\CMS\\Backend\\Form\\NodeExpansion\\FieldControl' => true,
            'TYPO3\\CMS\\Backend\\Form\\NodeExpansion\\FieldInformation' => true,
            'TYPO3\\CMS\\Backend\\Form\\NodeExpansion\\FieldWizard' => true,
            'TYPO3\\CMS\\Backend\\Form\\NodeFactory' => true,
            'TYPO3\\CMS\\Backend\\Form\\Utility\\FormEngineUtility' => true,
            'TYPO3\\CMS\\Backend\\Form\\Wizard\\SuggestWizardDefaultReceiver' => true,
            'TYPO3\\CMS\\Backend\\FrontendBackendUserAuthentication' => true,
            'TYPO3\\CMS\\Backend\\History\\Event\\AfterHistoryRollbackFinishedEvent' => true,
            'TYPO3\\CMS\\Backend\\History\\Event\\BeforeHistoryRollbackStartEvent' => true,
            'TYPO3\\CMS\\Backend\\History\\RecordHistory' => true,
            'TYPO3\\CMS\\Backend\\LoginProvider\\Event\\ModifyPageLayoutOnLoginProviderSelectionEvent' => true,
            'TYPO3\\CMS\\Backend\\LoginProvider\\LoginProviderInterface' => true,
            'TYPO3\\CMS\\Backend\\LoginProvider\\UsernamePasswordLoginProvider' => true,
            'TYPO3\\CMS\\Backend\\Module\\ModuleLoader' => true,
            'TYPO3\\CMS\\Backend\\Preview\\PreviewRendererInterface' => true,
            'TYPO3\\CMS\\Backend\\Preview\\PreviewRendererResolverInterface' => true,
            'TYPO3\\CMS\\Backend\\Preview\\StandardContentPreviewRenderer' => true,
            'TYPO3\\CMS\\Backend\\Preview\\StandardPreviewRendererResolver' => true,
            'TYPO3\\CMS\\Backend\\Provider\\PageTsBackendLayoutDataProvider' => true,
            'TYPO3\\CMS\\Backend\\RecordList\\ElementBrowserRecordList' => true,
            'TYPO3\\CMS\\Backend\\Resource\\Processing\\DeferredBackendImageProcessor' => true,
            'TYPO3\\CMS\\Backend\\Routing\\Exception\\InvalidRequestTokenException' => true,
            'TYPO3\\CMS\\Backend\\Routing\\Exception\\ResourceNotFoundException' => true,
            'TYPO3\\CMS\\Backend\\Routing\\Exception\\RouteNotFoundException' => true,
            'TYPO3\\CMS\\Backend\\Routing\\Route' => true,
            'TYPO3\\CMS\\Backend\\Routing\\Router_decorated_1.inner' => true,
            'TYPO3\\CMS\\Backend\\Search\\LiveSearch\\LiveSearch' => true,
            'TYPO3\\CMS\\Backend\\Search\\LiveSearch\\QueryParser' => true,
            'TYPO3\\CMS\\Backend\\Security\\EmailLoginNotification' => true,
            'TYPO3\\CMS\\Backend\\ServiceProvider' => true,
            'TYPO3\\CMS\\Backend\\Template\\Components\\AbstractControl' => true,
            'TYPO3\\CMS\\Backend\\Template\\Components\\ButtonBar' => true,
            'TYPO3\\CMS\\Backend\\Template\\Components\\Buttons\\AbstractButton' => true,
            'TYPO3\\CMS\\Backend\\Template\\Components\\Buttons\\Action\\HelpButton' => true,
            'TYPO3\\CMS\\Backend\\Template\\Components\\Buttons\\Action\\ShortcutButton' => true,
            'TYPO3\\CMS\\Backend\\Template\\Components\\Buttons\\FullyRenderedButton' => true,
            'TYPO3\\CMS\\Backend\\Template\\Components\\Buttons\\InputButton' => true,
            'TYPO3\\CMS\\Backend\\Template\\Components\\Buttons\\LinkButton' => true,
            'TYPO3\\CMS\\Backend\\Template\\Components\\Buttons\\SplitButton' => true,
            'TYPO3\\CMS\\Backend\\Template\\Components\\DocHeaderComponent' => true,
            'TYPO3\\CMS\\Backend\\Template\\Components\\MenuRegistry' => true,
            'TYPO3\\CMS\\Backend\\Template\\Components\\Menu\\Menu' => true,
            'TYPO3\\CMS\\Backend\\Template\\Components\\Menu\\MenuItem' => true,
            'TYPO3\\CMS\\Backend\\Template\\Components\\MetaInformation' => true,
            'TYPO3\\CMS\\Backend\\Template\\DocumentTemplate' => true,
            'TYPO3\\CMS\\Backend\\Toolbar\\Enumeration\\InformationStatus' => true,
            'TYPO3\\CMS\\Backend\\Tree\\Renderer\\UnorderedListTreeRenderer' => true,
            'TYPO3\\CMS\\Backend\\Tree\\Repository\\PageTreeRepository' => true,
            'TYPO3\\CMS\\Backend\\Tree\\SortedTreeNodeCollection' => true,
            'TYPO3\\CMS\\Backend\\Tree\\TreeNode' => true,
            'TYPO3\\CMS\\Backend\\Tree\\TreeNodeCollection' => true,
            'TYPO3\\CMS\\Backend\\Tree\\TreeRepresentationNode' => true,
            'TYPO3\\CMS\\Backend\\Tree\\View\\BrowseTreeView' => true,
            'TYPO3\\CMS\\Backend\\Tree\\View\\ContentCreationPagePositionMap' => true,
            'TYPO3\\CMS\\Backend\\Tree\\View\\ContentMovingPagePositionMap' => true,
            'TYPO3\\CMS\\Backend\\Tree\\View\\ElementBrowserFolderTreeView' => true,
            'TYPO3\\CMS\\Backend\\Tree\\View\\ElementBrowserPageTreeView' => true,
            'TYPO3\\CMS\\Backend\\Tree\\View\\FolderTreeView' => true,
            'TYPO3\\CMS\\Backend\\Tree\\View\\NewRecordPageTreeView' => true,
            'TYPO3\\CMS\\Backend\\Tree\\View\\PageMovingPagePositionMap' => true,
            'TYPO3\\CMS\\Backend\\Tree\\View\\PagePositionMap' => true,
            'TYPO3\\CMS\\Backend\\Tree\\View\\PageTreeView' => true,
            'TYPO3\\CMS\\Backend\\Utility\\BackendUtility' => true,
            'TYPO3\\CMS\\Backend\\View\\ArrayBrowser' => true,
            'TYPO3\\CMS\\Backend\\View\\BackendLayout\\BackendLayout' => true,
            'TYPO3\\CMS\\Backend\\View\\BackendLayout\\BackendLayoutCollection' => true,
            'TYPO3\\CMS\\Backend\\View\\BackendLayout\\ContentFetcher' => true,
            'TYPO3\\CMS\\Backend\\View\\BackendLayout\\DefaultDataProvider' => true,
            'TYPO3\\CMS\\Backend\\View\\BackendLayout\\Grid\\Grid' => true,
            'TYPO3\\CMS\\Backend\\View\\BackendLayout\\Grid\\GridColumn' => true,
            'TYPO3\\CMS\\Backend\\View\\BackendLayout\\Grid\\GridColumnItem' => true,
            'TYPO3\\CMS\\Backend\\View\\BackendLayout\\Grid\\GridRow' => true,
            'TYPO3\\CMS\\Backend\\View\\BackendLayout\\Grid\\LanguageColumn' => true,
            'TYPO3\\CMS\\Backend\\View\\BackendTemplateView' => true,
            'TYPO3\\CMS\\Backend\\View\\Drawing\\BackendLayoutRenderer' => true,
            'TYPO3\\CMS\\Backend\\View\\Drawing\\DrawingConfiguration' => true,
            'TYPO3\\CMS\\Backend\\View\\Event\\AfterSectionMarkupGeneratedEvent' => true,
            'TYPO3\\CMS\\Backend\\View\\Event\\BeforeSectionMarkupGeneratedEvent' => true,
            'TYPO3\\CMS\\Backend\\View\\PageLayoutContext' => true,
            'TYPO3\\CMS\\Backend\\View\\PageTreeView' => true,
            'TYPO3\\CMS\\Backend\\View\\ProgressListenerInterface' => true,
            'TYPO3\\CMS\\Backend\\View\\Wizard\\Element\\BackendLayoutWizardElement' => true,
            'TYPO3\\CMS\\Belog\\Domain\\Model\\Constraint' => true,
            'TYPO3\\CMS\\Belog\\Domain\\Model\\LogEntry' => true,
            'TYPO3\\CMS\\Belog\\Domain\\Model\\Workspace' => true,
            'TYPO3\\CMS\\Belog\\Module\\BackendLogModuleBootstrap' => true,
            'TYPO3\\CMS\\Beuser\\ContextMenu\\ItemProvider' => true,
            'TYPO3\\CMS\\Beuser\\Controller\\PermissionAjaxController' => true,
            'TYPO3\\CMS\\Beuser\\Domain\\Model\\BackendUser' => true,
            'TYPO3\\CMS\\Beuser\\Domain\\Model\\BackendUserGroup' => true,
            'TYPO3\\CMS\\Beuser\\Domain\\Model\\Demand' => true,
            'TYPO3\\CMS\\Beuser\\Domain\\Model\\ModuleData' => true,
            'TYPO3\\CMS\\Beuser\\Exception' => true,
            'TYPO3\\CMS\\Beuser\\Hook\\BackendControllerHook' => true,
            'TYPO3\\CMS\\Beuser\\Hook\\SwitchBackUserHook' => true,
            'TYPO3\\CMS\\Beuser\\Service\\UserInformationService' => true,
            'TYPO3\\CMS\\Core\\Authentication\\AbstractAuthenticationService' => true,
            'TYPO3\\CMS\\Core\\Authentication\\AuthenticationService' => true,
            'TYPO3\\CMS\\Core\\Authentication\\BackendUserAuthentication' => true,
            'TYPO3\\CMS\\Core\\Authentication\\CommandLineUserAuthentication' => true,
            'TYPO3\\CMS\\Core\\Authentication\\IpLocker' => true,
            'TYPO3\\CMS\\Core\\Authentication\\LoginType' => true,
            'TYPO3\\CMS\\Core\\Authentication\\MimicServiceInterface' => true,
            'TYPO3\\CMS\\Core\\Cache\\Backend\\ApcuBackend' => true,
            'TYPO3\\CMS\\Core\\Cache\\Backend\\FileBackend' => true,
            'TYPO3\\CMS\\Core\\Cache\\Backend\\FreezableBackendInterface' => true,
            'TYPO3\\CMS\\Core\\Cache\\Backend\\MemcachedBackend' => true,
            'TYPO3\\CMS\\Core\\Cache\\Backend\\NullBackend' => true,
            'TYPO3\\CMS\\Core\\Cache\\Backend\\PdoBackend' => true,
            'TYPO3\\CMS\\Core\\Cache\\Backend\\RedisBackend' => true,
            'TYPO3\\CMS\\Core\\Cache\\Backend\\SimpleFileBackend' => true,
            'TYPO3\\CMS\\Core\\Cache\\Backend\\TransientMemoryBackend' => true,
            'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend' => true,
            'TYPO3\\CMS\\Core\\Cache\\Backend\\WincacheBackend' => true,
            'TYPO3\\CMS\\Core\\Cache\\Exception' => true,
            'TYPO3\\CMS\\Core\\Cache\\Exception\\DuplicateIdentifierException' => true,
            'TYPO3\\CMS\\Core\\Cache\\Exception\\InvalidBackendException' => true,
            'TYPO3\\CMS\\Core\\Cache\\Exception\\InvalidCacheException' => true,
            'TYPO3\\CMS\\Core\\Cache\\Exception\\InvalidDataException' => true,
            'TYPO3\\CMS\\Core\\Cache\\Exception\\NoSuchCacheException' => true,
            'TYPO3\\CMS\\Core\\Cache\\Exception\\NoSuchCacheGroupException' => true,
            'TYPO3\\CMS\\Core\\Cache\\Frontend\\NullFrontend' => true,
            'TYPO3\\CMS\\Core\\Cache\\Frontend\\PhpFrontend' => true,
            'TYPO3\\CMS\\Core\\Cache\\Frontend\\VariableFrontend' => true,
            'TYPO3\\CMS\\Core\\Category\\Collection\\CategoryCollection' => true,
            'TYPO3\\CMS\\Core\\Charset\\UnknownCharsetException' => true,
            'TYPO3\\CMS\\Core\\Collection\\RecordCollectionRepository' => true,
            'TYPO3\\CMS\\Core\\Collection\\StaticRecordCollection' => true,
            'TYPO3\\CMS\\Core\\Compatibility\\PseudoSiteTcaDisplayCondition' => true,
            'TYPO3\\CMS\\Core\\Composer\\CliEntryPoint' => true,
            'TYPO3\\CMS\\Core\\Composer\\InstallerScripts' => true,
            'TYPO3\\CMS\\Core\\Configuration\\Event\\AfterTcaCompilationEvent' => true,
            'TYPO3\\CMS\\Core\\Configuration\\Event\\ModifyLoadedPageTsConfigEvent' => true,
            'TYPO3\\CMS\\Core\\Configuration\\Exception\\ExtensionConfigurationExtensionNotConfiguredException' => true,
            'TYPO3\\CMS\\Core\\Configuration\\Exception\\ExtensionConfigurationPathDoesNotExistException' => true,
            'TYPO3\\CMS\\Core\\Configuration\\ExtensionConfiguration' => true,
            'TYPO3\\CMS\\Core\\Configuration\\Features' => true,
            'TYPO3\\CMS\\Core\\Configuration\\FlexForm\\Exception\\InvalidCombinedPointerFieldException' => true,
            'TYPO3\\CMS\\Core\\Configuration\\FlexForm\\Exception\\InvalidIdentifierException' => true,
            'TYPO3\\CMS\\Core\\Configuration\\FlexForm\\Exception\\InvalidParentRowException' => true,
            'TYPO3\\CMS\\Core\\Configuration\\FlexForm\\Exception\\InvalidParentRowLoopException' => true,
            'TYPO3\\CMS\\Core\\Configuration\\FlexForm\\Exception\\InvalidParentRowRootException' => true,
            'TYPO3\\CMS\\Core\\Configuration\\FlexForm\\Exception\\InvalidPointerFieldValueException' => true,
            'TYPO3\\CMS\\Core\\Configuration\\FlexForm\\Exception\\InvalidSinglePointerFieldException' => true,
            'TYPO3\\CMS\\Core\\Configuration\\FlexForm\\Exception\\InvalidTcaException' => true,
            'TYPO3\\CMS\\Core\\Configuration\\FlexForm\\FlexFormTools' => true,
            'TYPO3\\CMS\\Core\\Configuration\\Loader\\Exception\\YamlFileLoadingException' => true,
            'TYPO3\\CMS\\Core\\Configuration\\Loader\\Exception\\YamlParseException' => true,
            'TYPO3\\CMS\\Core\\Configuration\\Loader\\Exception\\YamlPlaceholderException' => true,
            'TYPO3\\CMS\\Core\\Configuration\\Loader\\YamlFileLoader' => true,
            'TYPO3\\CMS\\Core\\Configuration\\Loader\\YamlPlaceholderGuard' => true,
            'TYPO3\\CMS\\Core\\Configuration\\Parser\\PageTsConfigParser' => true,
            'TYPO3\\CMS\\Core\\Configuration\\Processor\\PlaceholderProcessorList' => true,
            'TYPO3\\CMS\\Core\\Configuration\\Processor\\Placeholder\\EnvVariableProcessor' => true,
            'TYPO3\\CMS\\Core\\Configuration\\Processor\\Placeholder\\ValueFromReferenceArrayProcessor' => true,
            'TYPO3\\CMS\\Core\\Configuration\\Richtext' => true,
            'TYPO3\\CMS\\Core\\Configuration\\TypoScript\\Exception\\InvalidTypoScriptConditionException' => true,
            'TYPO3\\CMS\\Core\\Console\\CommandNameAlreadyInUseException' => true,
            'TYPO3\\CMS\\Core\\Console\\CommandRegistry_decorated_1.inner' => true,
            'TYPO3\\CMS\\Core\\Console\\CommandRequestHandler' => true,
            'TYPO3\\CMS\\Core\\Console\\RequestHandlerInterface' => true,
            'TYPO3\\CMS\\Core\\Console\\UnknownCommandException' => true,
            'TYPO3\\CMS\\Core\\Context\\DateTimeAspect' => true,
            'TYPO3\\CMS\\Core\\Context\\Exception\\AspectNotFoundException' => true,
            'TYPO3\\CMS\\Core\\Context\\Exception\\AspectPropertyNotFoundException' => true,
            'TYPO3\\CMS\\Core\\Context\\FileProcessingAspect' => true,
            'TYPO3\\CMS\\Core\\Context\\LanguageAspect' => true,
            'TYPO3\\CMS\\Core\\Context\\LanguageAspectFactory' => true,
            'TYPO3\\CMS\\Core\\Context\\TypoScriptAspect' => true,
            'TYPO3\\CMS\\Core\\Context\\UserAspect' => true,
            'TYPO3\\CMS\\Core\\Context\\VisibilityAspect' => true,
            'TYPO3\\CMS\\Core\\Context\\WorkspaceAspect' => true,
            'TYPO3\\CMS\\Core\\Controller\\ErrorPageController' => true,
            'TYPO3\\CMS\\Core\\Controller\\IconController' => true,
            'TYPO3\\CMS\\Core\\Controller\\RequireJsController' => true,
            'TYPO3\\CMS\\Core\\Core\\ApplicationInterface' => true,
            'TYPO3\\CMS\\Core\\Core\\Bootstrap' => true,
            'TYPO3\\CMS\\Core\\Core\\ClassLoadingInformationGenerator' => true,
            'TYPO3\\CMS\\Core\\Core\\Environment' => true,
            'TYPO3\\CMS\\Core\\Core\\SystemEnvironmentBuilder' => true,
            'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2iPasswordHash' => true,
            'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2idPasswordHash' => true,
            'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\BcryptPasswordHash' => true,
            'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\BlowfishPasswordHash' => true,
            'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\InvalidPasswordHashException' => true,
            'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Md5PasswordHash' => true,
            'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Pbkdf2PasswordHash' => true,
            'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\PhpassPasswordHash' => true,
            'TYPO3\\CMS\\Core\\Crypto\\Random' => true,
            'TYPO3\\CMS\\Core\\DataHandling\\DataHandler' => true,
            'TYPO3\\CMS\\Core\\DataHandling\\DataHandlerCheckModifyAccessListHookInterface' => true,
            'TYPO3\\CMS\\Core\\DataHandling\\Event\\AppendLinkHandlerElementsEvent' => true,
            'TYPO3\\CMS\\Core\\DataHandling\\Event\\IsTableExcludedFromReferenceIndexEvent' => true,
            'TYPO3\\CMS\\Core\\DataHandling\\History\\RecordHistoryStore' => true,
            'TYPO3\\CMS\\Core\\DataHandling\\ItemProcessingService' => true,
            'TYPO3\\CMS\\Core\\DataHandling\\Localization\\DataMapItem' => true,
            'TYPO3\\CMS\\Core\\DataHandling\\Localization\\DataMapProcessor' => true,
            'TYPO3\\CMS\\Core\\DataHandling\\Localization\\State' => true,
            'TYPO3\\CMS\\Core\\DataHandling\\Model\\CorrelationId' => true,
            'TYPO3\\CMS\\Core\\DataHandling\\Model\\EntityContext' => true,
            'TYPO3\\CMS\\Core\\DataHandling\\Model\\EntityPointer' => true,
            'TYPO3\\CMS\\Core\\DataHandling\\Model\\EntityPointerLink' => true,
            'TYPO3\\CMS\\Core\\DataHandling\\Model\\EntityUidPointer' => true,
            'TYPO3\\CMS\\Core\\DataHandling\\Model\\RecordState' => true,
            'TYPO3\\CMS\\Core\\DataHandling\\Model\\RecordStateFactory' => true,
            'TYPO3\\CMS\\Core\\DataHandling\\PagePermissionAssembler' => true,
            'TYPO3\\CMS\\Core\\DataHandling\\PlaceholderShadowColumnsResolver' => true,
            'TYPO3\\CMS\\Core\\DataHandling\\PlainDataResolver' => true,
            'TYPO3\\CMS\\Core\\DataHandling\\ReferenceIndexUpdater' => true,
            'TYPO3\\CMS\\Core\\DataHandling\\SlugEnricher' => true,
            'TYPO3\\CMS\\Core\\DataHandling\\SlugHelper' => true,
            'TYPO3\\CMS\\Core\\DataHandling\\TableColumnSubType' => true,
            'TYPO3\\CMS\\Core\\DataHandling\\TableColumnType' => true,
            'TYPO3\\CMS\\Core\\Database\\Connection' => true,
            'TYPO3\\CMS\\Core\\Database\\ConnectionPool' => true,
            'TYPO3\\CMS\\Core\\Database\\Driver\\PDOConnection' => true,
            'TYPO3\\CMS\\Core\\Database\\Driver\\PDOMySql\\Driver' => true,
            'TYPO3\\CMS\\Core\\Database\\Driver\\PDOPgSql\\Driver' => true,
            'TYPO3\\CMS\\Core\\Database\\Driver\\PDOSqlite\\Driver' => true,
            'TYPO3\\CMS\\Core\\Database\\Driver\\PDOSqlsrv\\Connection' => true,
            'TYPO3\\CMS\\Core\\Database\\Driver\\PDOSqlsrv\\Driver' => true,
            'TYPO3\\CMS\\Core\\Database\\Event\\AlterTableDefinitionStatementsEvent' => true,
            'TYPO3\\CMS\\Core\\Database\\Platform\\PlatformInformation' => true,
            'TYPO3\\CMS\\Core\\Database\\QueryGenerator' => true,
            'TYPO3\\CMS\\Core\\Database\\QueryView' => true,
            'TYPO3\\CMS\\Core\\Database\\Query\\BulkInsertQuery' => true,
            'TYPO3\\CMS\\Core\\Database\\Query\\Expression\\CompositeExpression' => true,
            'TYPO3\\CMS\\Core\\Database\\Query\\Expression\\ExpressionBuilder' => true,
            'TYPO3\\CMS\\Core\\Database\\Query\\QueryBuilder' => true,
            'TYPO3\\CMS\\Core\\Database\\Query\\QueryHelper' => true,
            'TYPO3\\CMS\\Core\\Database\\Query\\Restriction\\BackendWorkspaceRestriction' => true,
            'TYPO3\\CMS\\Core\\Database\\Query\\Restriction\\DefaultRestrictionContainer' => true,
            'TYPO3\\CMS\\Core\\Database\\Query\\Restriction\\DeletedRestriction' => true,
            'TYPO3\\CMS\\Core\\Database\\Query\\Restriction\\DocumentTypeExclusionRestriction' => true,
            'TYPO3\\CMS\\Core\\Database\\Query\\Restriction\\EndTimeRestriction' => true,
            'TYPO3\\CMS\\Core\\Database\\Query\\Restriction\\FrontendGroupRestriction' => true,
            'TYPO3\\CMS\\Core\\Database\\Query\\Restriction\\FrontendRestrictionContainer' => true,
            'TYPO3\\CMS\\Core\\Database\\Query\\Restriction\\FrontendWorkspaceRestriction' => true,
            'TYPO3\\CMS\\Core\\Database\\Query\\Restriction\\HiddenRestriction' => true,
            'TYPO3\\CMS\\Core\\Database\\Query\\Restriction\\LimitToTablesRestrictionContainer' => true,
            'TYPO3\\CMS\\Core\\Database\\Query\\Restriction\\PagePermissionRestriction' => true,
            'TYPO3\\CMS\\Core\\Database\\Query\\Restriction\\RootLevelRestriction' => true,
            'TYPO3\\CMS\\Core\\Database\\Query\\Restriction\\StartTimeRestriction' => true,
            'TYPO3\\CMS\\Core\\Database\\Query\\Restriction\\WorkspaceRestriction' => true,
            'TYPO3\\CMS\\Core\\Database\\ReferenceIndex' => true,
            'TYPO3\\CMS\\Core\\Database\\RelationHandler' => true,
            'TYPO3\\CMS\\Core\\Database\\Schema\\Comparator' => true,
            'TYPO3\\CMS\\Core\\Database\\Schema\\ConnectionMigrator' => true,
            'TYPO3\\CMS\\Core\\Database\\Schema\\DefaultTcaSchema' => true,
            'TYPO3\\CMS\\Core\\Database\\Schema\\EventListener\\SchemaAlterTableListener' => true,
            'TYPO3\\CMS\\Core\\Database\\Schema\\EventListener\\SchemaColumnDefinitionListener' => true,
            'TYPO3\\CMS\\Core\\Database\\Schema\\EventListener\\SchemaIndexDefinitionListener' => true,
            'TYPO3\\CMS\\Core\\Database\\Schema\\Exception\\StatementException' => true,
            'TYPO3\\CMS\\Core\\Database\\Schema\\Exception\\UnexpectedSignalReturnValueTypeException' => true,
            'TYPO3\\CMS\\Core\\Database\\Schema\\Parser\\AST\\CreateColumnDefinitionItem' => true,
            'TYPO3\\CMS\\Core\\Database\\Schema\\Parser\\AST\\CreateDefinition' => true,
            'TYPO3\\CMS\\Core\\Database\\Schema\\Parser\\AST\\CreateForeignKeyDefinitionItem' => true,
            'TYPO3\\CMS\\Core\\Database\\Schema\\Parser\\AST\\CreateIndexDefinitionItem' => true,
            'TYPO3\\CMS\\Core\\Database\\Schema\\Parser\\AST\\CreateTableClause' => true,
            'TYPO3\\CMS\\Core\\Database\\Schema\\Parser\\AST\\CreateTableStatement' => true,
            'TYPO3\\CMS\\Core\\Database\\Schema\\Parser\\AST\\DataType\\BigIntDataType' => true,
            'TYPO3\\CMS\\Core\\Database\\Schema\\Parser\\AST\\DataType\\BinaryDataType' => true,
            'TYPO3\\CMS\\Core\\Database\\Schema\\Parser\\AST\\DataType\\BitDataType' => true,
            'TYPO3\\CMS\\Core\\Database\\Schema\\Parser\\AST\\DataType\\BlobDataType' => true,
            'TYPO3\\CMS\\Core\\Database\\Schema\\Parser\\AST\\DataType\\CharDataType' => true,
            'TYPO3\\CMS\\Core\\Database\\Schema\\Parser\\AST\\DataType\\DateDataType' => true,
            'TYPO3\\CMS\\Core\\Database\\Schema\\Parser\\AST\\DataType\\DateTimeDataType' => true,
            'TYPO3\\CMS\\Core\\Database\\Schema\\Parser\\AST\\DataType\\DecimalDataType' => true,
            'TYPO3\\CMS\\Core\\Database\\Schema\\Parser\\AST\\DataType\\DoubleDataType' => true,
            'TYPO3\\CMS\\Core\\Database\\Schema\\Parser\\AST\\DataType\\EnumDataType' => true,
            'TYPO3\\CMS\\Core\\Database\\Schema\\Parser\\AST\\DataType\\FloatDataType' => true,
            'TYPO3\\CMS\\Core\\Database\\Schema\\Parser\\AST\\DataType\\IntegerDataType' => true,
            'TYPO3\\CMS\\Core\\Database\\Schema\\Parser\\AST\\DataType\\JsonDataType' => true,
            'TYPO3\\CMS\\Core\\Database\\Schema\\Parser\\AST\\DataType\\LongBlobDataType' => true,
            'TYPO3\\CMS\\Core\\Database\\Schema\\Parser\\AST\\DataType\\LongTextDataType' => true,
            'TYPO3\\CMS\\Core\\Database\\Schema\\Parser\\AST\\DataType\\MediumBlobDataType' => true,
            'TYPO3\\CMS\\Core\\Database\\Schema\\Parser\\AST\\DataType\\MediumIntDataType' => true,
            'TYPO3\\CMS\\Core\\Database\\Schema\\Parser\\AST\\DataType\\MediumTextDataType' => true,
            'TYPO3\\CMS\\Core\\Database\\Schema\\Parser\\AST\\DataType\\NumericDataType' => true,
            'TYPO3\\CMS\\Core\\Database\\Schema\\Parser\\AST\\DataType\\RealDataType' => true,
            'TYPO3\\CMS\\Core\\Database\\Schema\\Parser\\AST\\DataType\\SetDataType' => true,
            'TYPO3\\CMS\\Core\\Database\\Schema\\Parser\\AST\\DataType\\SmallIntDataType' => true,
            'TYPO3\\CMS\\Core\\Database\\Schema\\Parser\\AST\\DataType\\TextDataType' => true,
            'TYPO3\\CMS\\Core\\Database\\Schema\\Parser\\AST\\DataType\\TimeDataType' => true,
            'TYPO3\\CMS\\Core\\Database\\Schema\\Parser\\AST\\DataType\\TimestampDataType' => true,
            'TYPO3\\CMS\\Core\\Database\\Schema\\Parser\\AST\\DataType\\TinyBlobDataType' => true,
            'TYPO3\\CMS\\Core\\Database\\Schema\\Parser\\AST\\DataType\\TinyIntDataType' => true,
            'TYPO3\\CMS\\Core\\Database\\Schema\\Parser\\AST\\DataType\\TinyTextDataType' => true,
            'TYPO3\\CMS\\Core\\Database\\Schema\\Parser\\AST\\DataType\\VarBinaryDataType' => true,
            'TYPO3\\CMS\\Core\\Database\\Schema\\Parser\\AST\\DataType\\VarCharDataType' => true,
            'TYPO3\\CMS\\Core\\Database\\Schema\\Parser\\AST\\DataType\\YearDataType' => true,
            'TYPO3\\CMS\\Core\\Database\\Schema\\Parser\\AST\\Identifier' => true,
            'TYPO3\\CMS\\Core\\Database\\Schema\\Parser\\AST\\IndexColumnName' => true,
            'TYPO3\\CMS\\Core\\Database\\Schema\\Parser\\AST\\ReferenceDefinition' => true,
            'TYPO3\\CMS\\Core\\Database\\Schema\\Parser\\Lexer' => true,
            'TYPO3\\CMS\\Core\\Database\\Schema\\Parser\\Parser' => true,
            'TYPO3\\CMS\\Core\\Database\\Schema\\Parser\\TableBuilder' => true,
            'TYPO3\\CMS\\Core\\Database\\Schema\\SchemaMigrator' => true,
            'TYPO3\\CMS\\Core\\Database\\Schema\\TableDiff' => true,
            'TYPO3\\CMS\\Core\\Database\\Schema\\Types\\EnumType' => true,
            'TYPO3\\CMS\\Core\\Database\\Schema\\Types\\SetType' => true,
            'TYPO3\\CMS\\Core\\DependencyInjection\\AutowireInjectMethodsPass' => true,
            'TYPO3\\CMS\\Core\\DependencyInjection\\Cache\\ContainerBackend' => true,
            'TYPO3\\CMS\\Core\\DependencyInjection\\ConsoleCommandPass' => true,
            'TYPO3\\CMS\\Core\\DependencyInjection\\ContainerException' => true,
            'TYPO3\\CMS\\Core\\DependencyInjection\\EnvVarProcessor' => true,
            'TYPO3\\CMS\\Core\\DependencyInjection\\FailsafeContainer' => true,
            'TYPO3\\CMS\\Core\\DependencyInjection\\ListenerProviderPass' => true,
            'TYPO3\\CMS\\Core\\DependencyInjection\\LoggerAwarePass' => true,
            'TYPO3\\CMS\\Core\\DependencyInjection\\NotFoundException' => true,
            'TYPO3\\CMS\\Core\\DependencyInjection\\PublicServicePass' => true,
            'TYPO3\\CMS\\Core\\DependencyInjection\\ServiceProviderCompilationPass' => true,
            'TYPO3\\CMS\\Core\\DependencyInjection\\ServiceProviderRegistry' => true,
            'TYPO3\\CMS\\Core\\DependencyInjection\\SingletonPass' => true,
            'TYPO3\\CMS\\Core\\Domain\\Repository\\PageRepository' => true,
            'TYPO3\\CMS\\Core\\Error\\ErrorHandler' => true,
            'TYPO3\\CMS\\Core\\Error\\ErrorHandlerInterface' => true,
            'TYPO3\\CMS\\Core\\Error\\Exception' => true,
            'TYPO3\\CMS\\Core\\Error\\Http\\BadRequestException' => true,
            'TYPO3\\CMS\\Core\\Error\\Http\\ForbiddenException' => true,
            'TYPO3\\CMS\\Core\\Error\\Http\\InternalServerErrorException' => true,
            'TYPO3\\CMS\\Core\\Error\\Http\\PageNotFoundException' => true,
            'TYPO3\\CMS\\Core\\Error\\Http\\ServiceUnavailableException' => true,
            'TYPO3\\CMS\\Core\\Error\\Http\\ShortcutTargetPageNotFoundException' => true,
            'TYPO3\\CMS\\Core\\Error\\Http\\StatusException' => true,
            'TYPO3\\CMS\\Core\\Error\\Http\\UnauthorizedException' => true,
            'TYPO3\\CMS\\Core\\Error\\PageErrorHandler\\FluidPageErrorHandler' => true,
            'TYPO3\\CMS\\Core\\Error\\PageErrorHandler\\InvalidPageErrorHandlerException' => true,
            'TYPO3\\CMS\\Core\\Error\\PageErrorHandler\\PageContentErrorHandler' => true,
            'TYPO3\\CMS\\Core\\Error\\PageErrorHandler\\PageErrorHandlerNotConfiguredException' => true,
            'TYPO3\\CMS\\Core\\EventDispatcher\\ListenerProvider_decorated_1.inner' => true,
            'TYPO3\\CMS\\Core\\Exception' => true,
            'TYPO3\\CMS\\Core\\Exception\\Archive\\ExtractException' => true,
            'TYPO3\\CMS\\Core\\Exception\\MissingTsfeException' => true,
            'TYPO3\\CMS\\Core\\Exception\\Page\\BrokenRootLineException' => true,
            'TYPO3\\CMS\\Core\\Exception\\Page\\CircularRootLineException' => true,
            'TYPO3\\CMS\\Core\\Exception\\Page\\MountPointException' => true,
            'TYPO3\\CMS\\Core\\Exception\\Page\\MountPointsDisabledException' => true,
            'TYPO3\\CMS\\Core\\Exception\\Page\\PageNotFoundException' => true,
            'TYPO3\\CMS\\Core\\Exception\\Page\\PagePropertyRelationNotFoundException' => true,
            'TYPO3\\CMS\\Core\\Exception\\Page\\RootLineException' => true,
            'TYPO3\\CMS\\Core\\Exception\\SiteNotFoundException' => true,
            'TYPO3\\CMS\\Core\\ExpressionLanguage\\DefaultProvider' => true,
            'TYPO3\\CMS\\Core\\ExpressionLanguage\\FunctionsProvider\\DefaultFunctionsProvider' => true,
            'TYPO3\\CMS\\Core\\ExpressionLanguage\\FunctionsProvider\\Typo3ConditionFunctionsProvider' => true,
            'TYPO3\\CMS\\Core\\ExpressionLanguage\\ProviderConfigurationLoader' => true,
            'TYPO3\\CMS\\Core\\ExpressionLanguage\\RequestWrapper' => true,
            'TYPO3\\CMS\\Core\\ExpressionLanguage\\Resolver' => true,
            'TYPO3\\CMS\\Core\\ExpressionLanguage\\SiteConditionProvider' => true,
            'TYPO3\\CMS\\Core\\ExpressionLanguage\\TypoScriptConditionProvider' => true,
            'TYPO3\\CMS\\Core\\FormProtection\\BackendFormProtection' => true,
            'TYPO3\\CMS\\Core\\FormProtection\\DisabledFormProtection' => true,
            'TYPO3\\CMS\\Core\\FormProtection\\Exception' => true,
            'TYPO3\\CMS\\Core\\FormProtection\\FrontendFormProtection' => true,
            'TYPO3\\CMS\\Core\\FormProtection\\InstallToolFormProtection' => true,
            'TYPO3\\CMS\\Core\\Hooks\\BackendUserGroupIntegrityCheck' => true,
            'TYPO3\\CMS\\Core\\Hooks\\BackendUserPasswordCheck' => true,
            'TYPO3\\CMS\\Core\\Hooks\\CreateSiteConfiguration' => true,
            'TYPO3\\CMS\\Core\\Hooks\\DestroySessionHook' => true,
            'TYPO3\\CMS\\Core\\Hooks\\PagesTsConfigGuard' => true,
            'TYPO3\\CMS\\Core\\Hooks\\TcaDisplayConditions' => true,
            'TYPO3\\CMS\\Core\\Html\\Event\\BrokenLinkAnalysisEvent' => true,
            'TYPO3\\CMS\\Core\\Html\\HtmlParser' => true,
            'TYPO3\\CMS\\Core\\Html\\SanitizerBuilderFactory' => true,
            'TYPO3\\CMS\\Core\\Html\\SanitizerInitiator' => true,
            'TYPO3\\CMS\\Core\\Html\\SimpleNode' => true,
            'TYPO3\\CMS\\Core\\Html\\SimpleParser' => true,
            'TYPO3\\CMS\\Core\\Http\\Client' => true,
            'TYPO3\\CMS\\Core\\Http\\Client\\ClientException' => true,
            'TYPO3\\CMS\\Core\\Http\\Client\\GuzzleClientFactory' => true,
            'TYPO3\\CMS\\Core\\Http\\Client\\NetworkException' => true,
            'TYPO3\\CMS\\Core\\Http\\Client\\RequestException' => true,
            'TYPO3\\CMS\\Core\\Http\\Dispatcher' => true,
            'TYPO3\\CMS\\Core\\Http\\DispatcherInterface' => true,
            'TYPO3\\CMS\\Core\\Http\\FalDumpFileContentsDecoratorStream' => true,
            'TYPO3\\CMS\\Core\\Http\\HtmlResponse' => true,
            'TYPO3\\CMS\\Core\\Http\\ImmediateResponseException' => true,
            'TYPO3\\CMS\\Core\\Http\\JsonResponse' => true,
            'TYPO3\\CMS\\Core\\Http\\Message' => true,
            'TYPO3\\CMS\\Core\\Http\\MiddlewareDispatcher' => true,
            'TYPO3\\CMS\\Core\\Http\\NormalizedParams' => true,
            'TYPO3\\CMS\\Core\\Http\\NullResponse' => true,
            'TYPO3\\CMS\\Core\\Http\\RedirectResponse' => true,
            'TYPO3\\CMS\\Core\\Http\\Request' => true,
            'TYPO3\\CMS\\Core\\Http\\Response' => true,
            'TYPO3\\CMS\\Core\\Http\\ResponseFactory' => true,
            'TYPO3\\CMS\\Core\\Http\\Security\\InvalidReferrerException' => true,
            'TYPO3\\CMS\\Core\\Http\\Security\\MissingReferrerException' => true,
            'TYPO3\\CMS\\Core\\Http\\Security\\ReferrerEnforcer' => true,
            'TYPO3\\CMS\\Core\\Http\\SelfEmittableLazyOpenStream' => true,
            'TYPO3\\CMS\\Core\\Http\\ServerRequest' => true,
            'TYPO3\\CMS\\Core\\Http\\ServerRequestFactory' => true,
            'TYPO3\\CMS\\Core\\Http\\Stream' => true,
            'TYPO3\\CMS\\Core\\Http\\StreamFactory' => true,
            'TYPO3\\CMS\\Core\\Http\\UploadedFile' => true,
            'TYPO3\\CMS\\Core\\Http\\UploadedFileFactory' => true,
            'TYPO3\\CMS\\Core\\Http\\Uri' => true,
            'TYPO3\\CMS\\Core\\Http\\UriFactory' => true,
            'TYPO3\\CMS\\Core\\IO\\CsvStreamFilter' => true,
            'TYPO3\\CMS\\Core\\IO\\PharStreamWrapperInterceptor' => true,
            'TYPO3\\CMS\\Core\\Imaging\\Dimension' => true,
            'TYPO3\\CMS\\Core\\Imaging\\Event\\ModifyIconForResourcePropertiesEvent' => true,
            'TYPO3\\CMS\\Core\\Imaging\\GraphicalFunctions' => true,
            'TYPO3\\CMS\\Core\\Imaging\\Icon' => true,
            'TYPO3\\CMS\\Core\\Imaging\\IconProvider\\BitmapIconProvider' => true,
            'TYPO3\\CMS\\Core\\Imaging\\IconProvider\\FontawesomeIconProvider' => true,
            'TYPO3\\CMS\\Core\\Imaging\\IconProvider\\SvgIconProvider' => true,
            'TYPO3\\CMS\\Core\\Imaging\\IconProvider\\SvgSpriteIconProvider' => true,
            'TYPO3\\CMS\\Core\\Imaging\\ImageDimension' => true,
            'TYPO3\\CMS\\Core\\Imaging\\ImageMagickFile' => true,
            'TYPO3\\CMS\\Core\\Imaging\\ImageManipulation\\Area' => true,
            'TYPO3\\CMS\\Core\\Imaging\\ImageManipulation\\CropVariant' => true,
            'TYPO3\\CMS\\Core\\Imaging\\ImageManipulation\\CropVariantCollection' => true,
            'TYPO3\\CMS\\Core\\Imaging\\ImageManipulation\\InvalidConfigurationException' => true,
            'TYPO3\\CMS\\Core\\Imaging\\ImageManipulation\\Ratio' => true,
            'TYPO3\\CMS\\Core\\Information\\Typo3Information' => true,
            'TYPO3\\CMS\\Core\\Information\\Typo3Version' => true,
            'TYPO3\\CMS\\Core\\LinkHandling\\EmailLinkHandler' => true,
            'TYPO3\\CMS\\Core\\LinkHandling\\Exception\\UnknownLinkHandlerException' => true,
            'TYPO3\\CMS\\Core\\LinkHandling\\Exception\\UnknownUrnException' => true,
            'TYPO3\\CMS\\Core\\LinkHandling\\FileLinkHandler' => true,
            'TYPO3\\CMS\\Core\\LinkHandling\\FolderLinkHandler' => true,
            'TYPO3\\CMS\\Core\\LinkHandling\\LegacyLinkNotationConverter' => true,
            'TYPO3\\CMS\\Core\\LinkHandling\\PageLinkHandler' => true,
            'TYPO3\\CMS\\Core\\LinkHandling\\RecordLinkHandler' => true,
            'TYPO3\\CMS\\Core\\LinkHandling\\TelephoneLinkHandler' => true,
            'TYPO3\\CMS\\Core\\LinkHandling\\UrlLinkHandler' => true,
            'TYPO3\\CMS\\Core\\Localization\\Exception\\FileNotFoundException' => true,
            'TYPO3\\CMS\\Core\\Localization\\Exception\\InvalidParserException' => true,
            'TYPO3\\CMS\\Core\\Localization\\Exception\\InvalidXmlFileException' => true,
            'TYPO3\\CMS\\Core\\Localization\\Parser\\LocallangXmlParser' => true,
            'TYPO3\\CMS\\Core\\Localization\\Parser\\XliffParser' => true,
            'TYPO3\\CMS\\Core\\Locking\\Exception' => true,
            'TYPO3\\CMS\\Core\\Locking\\Exception\\LockAcquireException' => true,
            'TYPO3\\CMS\\Core\\Locking\\Exception\\LockAcquireWouldBlockException' => true,
            'TYPO3\\CMS\\Core\\Locking\\Exception\\LockCreateException' => true,
            'TYPO3\\CMS\\Core\\Locking\\FileLockStrategy' => true,
            'TYPO3\\CMS\\Core\\Locking\\ResourceMutex' => true,
            'TYPO3\\CMS\\Core\\Locking\\SemaphoreLockStrategy' => true,
            'TYPO3\\CMS\\Core\\Locking\\SimpleLockStrategy' => true,
            'TYPO3\\CMS\\Core\\Log\\Exception' => true,
            'TYPO3\\CMS\\Core\\Log\\Exception\\InvalidLogProcessorConfigurationException' => true,
            'TYPO3\\CMS\\Core\\Log\\Exception\\InvalidLogWriterConfigurationException' => true,
            'TYPO3\\CMS\\Core\\Log\\LogLevel' => true,
            'TYPO3\\CMS\\Core\\Log\\LogManagerInterface' => true,
            'TYPO3\\CMS\\Core\\Log\\LogRecord' => true,
            'TYPO3\\CMS\\Core\\Log\\Logger' => true,
            'TYPO3\\CMS\\Core\\Log\\Processor\\IntrospectionProcessor' => true,
            'TYPO3\\CMS\\Core\\Log\\Processor\\MemoryPeakUsageProcessor' => true,
            'TYPO3\\CMS\\Core\\Log\\Processor\\MemoryUsageProcessor' => true,
            'TYPO3\\CMS\\Core\\Log\\Processor\\NullProcessor' => true,
            'TYPO3\\CMS\\Core\\Log\\Processor\\WebProcessor' => true,
            'TYPO3\\CMS\\Core\\Log\\Writer\\DatabaseWriter' => true,
            'TYPO3\\CMS\\Core\\Log\\Writer\\FileWriter' => true,
            'TYPO3\\CMS\\Core\\Log\\Writer\\NullWriter' => true,
            'TYPO3\\CMS\\Core\\Log\\Writer\\PhpErrorLogWriter' => true,
            'TYPO3\\CMS\\Core\\Log\\Writer\\SyslogWriter' => true,
            'TYPO3\\CMS\\Core\\Mail\\Event\\AfterMailerInitializationEvent' => true,
            'TYPO3\\CMS\\Core\\Mail\\FileSpool' => true,
            'TYPO3\\CMS\\Core\\Mail\\FluidEmail' => true,
            'TYPO3\\CMS\\Core\\Mail\\MailMessage' => true,
            'TYPO3\\CMS\\Core\\Mail\\MboxTransport' => true,
            'TYPO3\\CMS\\Core\\Mail\\Rfc822AddressesParser' => true,
            'TYPO3\\CMS\\Core\\Messaging\\FlashMessage' => true,
            'TYPO3\\CMS\\Core\\Messaging\\FlashMessageQueue' => true,
            'TYPO3\\CMS\\Core\\Messaging\\FlashMessageRendererResolver' => true,
            'TYPO3\\CMS\\Core\\Messaging\\Renderer\\BootstrapRenderer' => true,
            'TYPO3\\CMS\\Core\\Messaging\\Renderer\\ListRenderer' => true,
            'TYPO3\\CMS\\Core\\Messaging\\Renderer\\PlaintextRenderer' => true,
            'TYPO3\\CMS\\Core\\MetaTag\\EdgeMetaTagManager' => true,
            'TYPO3\\CMS\\Core\\MetaTag\\GenericMetaTagManager' => true,
            'TYPO3\\CMS\\Core\\MetaTag\\Html5MetaTagManager' => true,
            'TYPO3\\CMS\\Core\\Migrations\\TcaMigration' => true,
            'TYPO3\\CMS\\Core\\Package\\ComposerDeficitDetector' => true,
            'TYPO3\\CMS\\Core\\Package\\Event\\AfterPackageActivationEvent' => true,
            'TYPO3\\CMS\\Core\\Package\\Event\\AfterPackageDeactivationEvent' => true,
            'TYPO3\\CMS\\Core\\Package\\Event\\BeforePackageActivationEvent' => true,
            'TYPO3\\CMS\\Core\\Package\\Event\\PackagesMayHaveChangedEvent' => true,
            'TYPO3\\CMS\\Core\\Package\\Exception' => true,
            'TYPO3\\CMS\\Core\\Package\\Exception\\InvalidPackageKeyException' => true,
            'TYPO3\\CMS\\Core\\Package\\Exception\\InvalidPackageManifestException' => true,
            'TYPO3\\CMS\\Core\\Package\\Exception\\InvalidPackagePathException' => true,
            'TYPO3\\CMS\\Core\\Package\\Exception\\InvalidPackageStateException' => true,
            'TYPO3\\CMS\\Core\\Package\\Exception\\MissingPackageManifestException' => true,
            'TYPO3\\CMS\\Core\\Package\\Exception\\PackageManagerCacheUnavailableException' => true,
            'TYPO3\\CMS\\Core\\Package\\Exception\\PackageStatesFileNotWritableException' => true,
            'TYPO3\\CMS\\Core\\Package\\Exception\\PackageStatesUnavailableException' => true,
            'TYPO3\\CMS\\Core\\Package\\Exception\\ProtectedPackageKeyException' => true,
            'TYPO3\\CMS\\Core\\Package\\Exception\\UnknownPackageException' => true,
            'TYPO3\\CMS\\Core\\Package\\MetaData' => true,
            'TYPO3\\CMS\\Core\\Package\\MetaData\\PackageConstraint' => true,
            'TYPO3\\CMS\\Core\\Package\\Package' => true,
            'TYPO3\\CMS\\Core\\Package\\PackageInterface' => true,
            'TYPO3\\CMS\\Core\\Package\\PseudoServiceProvider' => true,
            'TYPO3\\CMS\\Core\\Package\\UnitTestPackageManager' => true,
            'TYPO3\\CMS\\Core\\PageTitle\\PageTitleProviderInterface' => true,
            'TYPO3\\CMS\\Core\\Page\\Event\\BeforeJavaScriptsRenderingEvent' => true,
            'TYPO3\\CMS\\Core\\Page\\Event\\BeforeStylesheetsRenderingEvent' => true,
            'TYPO3\\CMS\\Core\\Pagination\\ArrayPaginator' => true,
            'TYPO3\\CMS\\Core\\Pagination\\PaginationInterface' => true,
            'TYPO3\\CMS\\Core\\Pagination\\PaginatorInterface' => true,
            'TYPO3\\CMS\\Core\\Pagination\\SimplePagination' => true,
            'TYPO3\\CMS\\Core\\Preparations\\TcaPreparation' => true,
            'TYPO3\\CMS\\Core\\Resource\\Collection\\CategoryBasedFileCollection' => true,
            'TYPO3\\CMS\\Core\\Resource\\Collection\\FolderBasedFileCollection' => true,
            'TYPO3\\CMS\\Core\\Resource\\Collection\\StaticFileCollection' => true,
            'TYPO3\\CMS\\Core\\Resource\\Driver\\DriverInterface' => true,
            'TYPO3\\CMS\\Core\\Resource\\Driver\\LocalDriver' => true,
            'TYPO3\\CMS\\Core\\Resource\\Driver\\StreamableDriverInterface' => true,
            'TYPO3\\CMS\\Core\\Resource\\DuplicationBehavior' => true,
            'TYPO3\\CMS\\Core\\Resource\\Event\\AfterFileAddedEvent' => true,
            'TYPO3\\CMS\\Core\\Resource\\Event\\AfterFileAddedToIndexEvent' => true,
            'TYPO3\\CMS\\Core\\Resource\\Event\\AfterFileContentsSetEvent' => true,
            'TYPO3\\CMS\\Core\\Resource\\Event\\AfterFileCopiedEvent' => true,
            'TYPO3\\CMS\\Core\\Resource\\Event\\AfterFileCreatedEvent' => true,
            'TYPO3\\CMS\\Core\\Resource\\Event\\AfterFileDeletedEvent' => true,
            'TYPO3\\CMS\\Core\\Resource\\Event\\AfterFileMarkedAsMissingEvent' => true,
            'TYPO3\\CMS\\Core\\Resource\\Event\\AfterFileMetaDataCreatedEvent' => true,
            'TYPO3\\CMS\\Core\\Resource\\Event\\AfterFileMetaDataDeletedEvent' => true,
            'TYPO3\\CMS\\Core\\Resource\\Event\\AfterFileMetaDataUpdatedEvent' => true,
            'TYPO3\\CMS\\Core\\Resource\\Event\\AfterFileMovedEvent' => true,
            'TYPO3\\CMS\\Core\\Resource\\Event\\AfterFileProcessingEvent' => true,
            'TYPO3\\CMS\\Core\\Resource\\Event\\AfterFileRemovedFromIndexEvent' => true,
            'TYPO3\\CMS\\Core\\Resource\\Event\\AfterFileRenamedEvent' => true,
            'TYPO3\\CMS\\Core\\Resource\\Event\\AfterFileReplacedEvent' => true,
            'TYPO3\\CMS\\Core\\Resource\\Event\\AfterFileUpdatedInIndexEvent' => true,
            'TYPO3\\CMS\\Core\\Resource\\Event\\AfterFolderAddedEvent' => true,
            'TYPO3\\CMS\\Core\\Resource\\Event\\AfterFolderCopiedEvent' => true,
            'TYPO3\\CMS\\Core\\Resource\\Event\\AfterFolderDeletedEvent' => true,
            'TYPO3\\CMS\\Core\\Resource\\Event\\AfterFolderMovedEvent' => true,
            'TYPO3\\CMS\\Core\\Resource\\Event\\AfterFolderRenamedEvent' => true,
            'TYPO3\\CMS\\Core\\Resource\\Event\\AfterResourceStorageInitializationEvent' => true,
            'TYPO3\\CMS\\Core\\Resource\\Event\\BeforeFileAddedEvent' => true,
            'TYPO3\\CMS\\Core\\Resource\\Event\\BeforeFileContentsSetEvent' => true,
            'TYPO3\\CMS\\Core\\Resource\\Event\\BeforeFileCopiedEvent' => true,
            'TYPO3\\CMS\\Core\\Resource\\Event\\BeforeFileCreatedEvent' => true,
            'TYPO3\\CMS\\Core\\Resource\\Event\\BeforeFileDeletedEvent' => true,
            'TYPO3\\CMS\\Core\\Resource\\Event\\BeforeFileMovedEvent' => true,
            'TYPO3\\CMS\\Core\\Resource\\Event\\BeforeFileProcessingEvent' => true,
            'TYPO3\\CMS\\Core\\Resource\\Event\\BeforeFileRenamedEvent' => true,
            'TYPO3\\CMS\\Core\\Resource\\Event\\BeforeFileReplacedEvent' => true,
            'TYPO3\\CMS\\Core\\Resource\\Event\\BeforeFolderAddedEvent' => true,
            'TYPO3\\CMS\\Core\\Resource\\Event\\BeforeFolderCopiedEvent' => true,
            'TYPO3\\CMS\\Core\\Resource\\Event\\BeforeFolderDeletedEvent' => true,
            'TYPO3\\CMS\\Core\\Resource\\Event\\BeforeFolderMovedEvent' => true,
            'TYPO3\\CMS\\Core\\Resource\\Event\\BeforeFolderRenamedEvent' => true,
            'TYPO3\\CMS\\Core\\Resource\\Event\\BeforeResourceStorageInitializationEvent' => true,
            'TYPO3\\CMS\\Core\\Resource\\Event\\EnrichFileMetaDataEvent' => true,
            'TYPO3\\CMS\\Core\\Resource\\Event\\GeneratePublicUrlForResourceEvent' => true,
            'TYPO3\\CMS\\Core\\Resource\\Event\\SanitizeFileNameEvent' => true,
            'TYPO3\\CMS\\Core\\Resource\\Exception' => true,
            'TYPO3\\CMS\\Core\\Resource\\Exception\\ExistingTargetFileNameException' => true,
            'TYPO3\\CMS\\Core\\Resource\\Exception\\ExistingTargetFolderException' => true,
            'TYPO3\\CMS\\Core\\Resource\\Exception\\FileAlreadyProcessedException' => true,
            'TYPO3\\CMS\\Core\\Resource\\Exception\\FileDoesNotExistException' => true,
            'TYPO3\\CMS\\Core\\Resource\\Exception\\FileOperationErrorException' => true,
            'TYPO3\\CMS\\Core\\Resource\\Exception\\FolderDoesNotExistException' => true,
            'TYPO3\\CMS\\Core\\Resource\\Exception\\IllegalFileExtensionException' => true,
            'TYPO3\\CMS\\Core\\Resource\\Exception\\InsufficientFileAccessPermissionsException' => true,
            'TYPO3\\CMS\\Core\\Resource\\Exception\\InsufficientFileReadPermissionsException' => true,
            'TYPO3\\CMS\\Core\\Resource\\Exception\\InsufficientFileWritePermissionsException' => true,
            'TYPO3\\CMS\\Core\\Resource\\Exception\\InsufficientFolderAccessPermissionsException' => true,
            'TYPO3\\CMS\\Core\\Resource\\Exception\\InsufficientFolderReadPermissionsException' => true,
            'TYPO3\\CMS\\Core\\Resource\\Exception\\InsufficientFolderWritePermissionsException' => true,
            'TYPO3\\CMS\\Core\\Resource\\Exception\\InsufficientUserPermissionsException' => true,
            'TYPO3\\CMS\\Core\\Resource\\Exception\\InvalidConfigurationException' => true,
            'TYPO3\\CMS\\Core\\Resource\\Exception\\InvalidFileException' => true,
            'TYPO3\\CMS\\Core\\Resource\\Exception\\InvalidFileNameException' => true,
            'TYPO3\\CMS\\Core\\Resource\\Exception\\InvalidFolderException' => true,
            'TYPO3\\CMS\\Core\\Resource\\Exception\\InvalidHashException' => true,
            'TYPO3\\CMS\\Core\\Resource\\Exception\\InvalidPathException' => true,
            'TYPO3\\CMS\\Core\\Resource\\Exception\\InvalidTargetFolderException' => true,
            'TYPO3\\CMS\\Core\\Resource\\Exception\\InvalidUidException' => true,
            'TYPO3\\CMS\\Core\\Resource\\Exception\\NotInMountPointException' => true,
            'TYPO3\\CMS\\Core\\Resource\\Exception\\ResourceDoesNotExistException' => true,
            'TYPO3\\CMS\\Core\\Resource\\Exception\\ResourcePermissionsUnavailableException' => true,
            'TYPO3\\CMS\\Core\\Resource\\Exception\\UploadException' => true,
            'TYPO3\\CMS\\Core\\Resource\\Exception\\UploadSizeException' => true,
            'TYPO3\\CMS\\Core\\Resource\\File' => true,
            'TYPO3\\CMS\\Core\\Resource\\FileCollectionRepository' => true,
            'TYPO3\\CMS\\Core\\Resource\\FileReference' => true,
            'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter' => true,
            'TYPO3\\CMS\\Core\\Resource\\Filter\\FileNameFilter' => true,
            'TYPO3\\CMS\\Core\\Resource\\Filter\\ImportExportFilter' => true,
            'TYPO3\\CMS\\Core\\Resource\\Folder' => true,
            'TYPO3\\CMS\\Core\\Resource\\InaccessibleFolder' => true,
            'TYPO3\\CMS\\Core\\Resource\\Index\\ExtractorInterface' => true,
            'TYPO3\\CMS\\Core\\Resource\\Index\\Indexer' => true,
            'TYPO3\\CMS\\Core\\Resource\\LocalPath' => true,
            'TYPO3\\CMS\\Core\\Resource\\MetaDataAspect' => true,
            'TYPO3\\CMS\\Core\\Resource\\MimeTypeCollection' => true,
            'TYPO3\\CMS\\Core\\Resource\\MimeTypeDetector' => true,
            'TYPO3\\CMS\\Core\\Resource\\OnlineMedia\\Helpers\\VimeoHelper' => true,
            'TYPO3\\CMS\\Core\\Resource\\OnlineMedia\\Helpers\\YouTubeHelper' => true,
            'TYPO3\\CMS\\Core\\Resource\\OnlineMedia\\Metadata\\Extractor' => true,
            'TYPO3\\CMS\\Core\\Resource\\OnlineMedia\\Processing\\PreviewProcessing' => true,
            'TYPO3\\CMS\\Core\\Resource\\ProcessedFile' => true,
            'TYPO3\\CMS\\Core\\Resource\\Processing\\ImageCropScaleMaskTask' => true,
            'TYPO3\\CMS\\Core\\Resource\\Processing\\ImagePreviewTask' => true,
            'TYPO3\\CMS\\Core\\Resource\\Processing\\LocalCropScaleMaskHelper' => true,
            'TYPO3\\CMS\\Core\\Resource\\Processing\\LocalImageProcessor' => true,
            'TYPO3\\CMS\\Core\\Resource\\Processing\\LocalPreviewHelper' => true,
            'TYPO3\\CMS\\Core\\Resource\\Processing\\SvgImageProcessor' => true,
            'TYPO3\\CMS\\Core\\Resource\\RelativeCssPathFixer' => true,
            'TYPO3\\CMS\\Core\\Resource\\ResourceCompressor' => true,
            'TYPO3\\CMS\\Core\\Resource\\ResourceFactoryInterface' => true,
            'TYPO3\\CMS\\Core\\Resource\\ResourceStorage' => true,
            'TYPO3\\CMS\\Core\\Resource\\ResourceStorageInterface' => true,
            'TYPO3\\CMS\\Core\\Resource\\Search\\FileSearchQuery' => true,
            'TYPO3\\CMS\\Core\\Resource\\Search\\QueryRestrictions\\ConsistencyRestriction' => true,
            'TYPO3\\CMS\\Core\\Resource\\Search\\QueryRestrictions\\FolderHashesRestriction' => true,
            'TYPO3\\CMS\\Core\\Resource\\Search\\QueryRestrictions\\FolderIdentifierRestriction' => true,
            'TYPO3\\CMS\\Core\\Resource\\Search\\QueryRestrictions\\FolderMountsRestriction' => true,
            'TYPO3\\CMS\\Core\\Resource\\Search\\QueryRestrictions\\FolderRestriction' => true,
            'TYPO3\\CMS\\Core\\Resource\\Search\\QueryRestrictions\\SearchTermRestriction' => true,
            'TYPO3\\CMS\\Core\\Resource\\Search\\QueryRestrictions\\StorageRestriction' => true,
            'TYPO3\\CMS\\Core\\Resource\\Search\\Result\\DriverFilteredSearchResult' => true,
            'TYPO3\\CMS\\Core\\Resource\\Search\\Result\\EmptyFileSearchResult' => true,
            'TYPO3\\CMS\\Core\\Resource\\Search\\Result\\FileSearchResult' => true,
            'TYPO3\\CMS\\Core\\Resource\\Security\\FileNameValidator' => true,
            'TYPO3\\CMS\\Core\\Resource\\Security\\SvgSanitizer' => true,
            'TYPO3\\CMS\\Core\\Resource\\Service\\ExtractorService' => true,
            'TYPO3\\CMS\\Core\\Resource\\Service\\FileProcessingService' => true,
            'TYPO3\\CMS\\Core\\Resource\\Service\\ImageProcessingService' => true,
            'TYPO3\\CMS\\Core\\Resource\\Service\\MagicImageService' => true,
            'TYPO3\\CMS\\Core\\Resource\\Service\\UserFileInlineLabelService' => true,
            'TYPO3\\CMS\\Core\\Resource\\Service\\UserFileMountService' => true,
            'TYPO3\\CMS\\Core\\Resource\\TextExtraction\\PlainTextExtractor' => true,
            'TYPO3\\CMS\\Core\\Resource\\TextExtraction\\TextExtractorInterface' => true,
            'TYPO3\\CMS\\Core\\Resource\\Utility\\ListUtility' => true,
            'TYPO3\\CMS\\Core\\Routing\\Aspect\\AspectFactory' => true,
            'TYPO3\\CMS\\Core\\Routing\\Aspect\\DelegateInterface' => true,
            'TYPO3\\CMS\\Core\\Routing\\Aspect\\LocaleModifier' => true,
            'TYPO3\\CMS\\Core\\Routing\\Aspect\\MappableProcessor' => true,
            'TYPO3\\CMS\\Core\\Routing\\Aspect\\ModifiableAspectInterface' => true,
            'TYPO3\\CMS\\Core\\Routing\\Aspect\\PersistedAliasMapper' => true,
            'TYPO3\\CMS\\Core\\Routing\\Aspect\\PersistedPatternMapper' => true,
            'TYPO3\\CMS\\Core\\Routing\\Aspect\\PersistenceDelegate' => true,
            'TYPO3\\CMS\\Core\\Routing\\Aspect\\StaticRangeMapper' => true,
            'TYPO3\\CMS\\Core\\Routing\\Aspect\\StaticValueMapper' => true,
            'TYPO3\\CMS\\Core\\Routing\\Enhancer\\DecoratingEnhancerInterface' => true,
            'TYPO3\\CMS\\Core\\Routing\\Enhancer\\EnhancerFactory' => true,
            'TYPO3\\CMS\\Core\\Routing\\Enhancer\\PageTypeDecorator' => true,
            'TYPO3\\CMS\\Core\\Routing\\Enhancer\\PluginEnhancer' => true,
            'TYPO3\\CMS\\Core\\Routing\\Enhancer\\SimpleEnhancer' => true,
            'TYPO3\\CMS\\Core\\Routing\\Enhancer\\VariableProcessor' => true,
            'TYPO3\\CMS\\Core\\Routing\\InvalidRouteArgumentsException' => true,
            'TYPO3\\CMS\\Core\\Routing\\PageArguments' => true,
            'TYPO3\\CMS\\Core\\Routing\\PageRouter' => true,
            'TYPO3\\CMS\\Core\\Routing\\PageSlugCandidateProvider' => true,
            'TYPO3\\CMS\\Core\\Routing\\PageUriMatcher' => true,
            'TYPO3\\CMS\\Core\\Routing\\Route' => true,
            'TYPO3\\CMS\\Core\\Routing\\RouteCollection' => true,
            'TYPO3\\CMS\\Core\\Routing\\RouteNotFoundException' => true,
            'TYPO3\\CMS\\Core\\Routing\\RouteSorter' => true,
            'TYPO3\\CMS\\Core\\Routing\\RouterInterface' => true,
            'TYPO3\\CMS\\Core\\Routing\\SiteRouteResult' => true,
            'TYPO3\\CMS\\Core\\Routing\\UnableToLinkToPageException' => true,
            'TYPO3\\CMS\\Core\\Routing\\UrlGenerator' => true,
            'TYPO3\\CMS\\Core\\ServiceProvider' => true,
            'TYPO3\\CMS\\Core\\Service\\Archive\\ZipService' => true,
            'TYPO3\\CMS\\Core\\Service\\IsoCodeService' => true,
            'TYPO3\\CMS\\Core\\Service\\MarkerBasedTemplateService' => true,
            'TYPO3\\CMS\\Core\\Session\\Backend\\DatabaseSessionBackend' => true,
            'TYPO3\\CMS\\Core\\Session\\Backend\\Exception\\SessionNotCreatedException' => true,
            'TYPO3\\CMS\\Core\\Session\\Backend\\Exception\\SessionNotFoundException' => true,
            'TYPO3\\CMS\\Core\\Session\\Backend\\Exception\\SessionNotUpdatedException' => true,
            'TYPO3\\CMS\\Core\\Session\\Backend\\RedisSessionBackend' => true,
            'TYPO3\\CMS\\Core\\Site\\Entity\\NullSite' => true,
            'TYPO3\\CMS\\Core\\Site\\Entity\\Site' => true,
            'TYPO3\\CMS\\Core\\Site\\Entity\\SiteLanguage' => true,
            'TYPO3\\CMS\\Core\\Site\\SiteFinder' => true,
            'TYPO3\\CMS\\Core\\SysLog\\Action' => true,
            'TYPO3\\CMS\\Core\\SysLog\\Action\\Cache' => true,
            'TYPO3\\CMS\\Core\\SysLog\\Action\\Database' => true,
            'TYPO3\\CMS\\Core\\SysLog\\Action\\File' => true,
            'TYPO3\\CMS\\Core\\SysLog\\Action\\Login' => true,
            'TYPO3\\CMS\\Core\\SysLog\\Action\\Setting' => true,
            'TYPO3\\CMS\\Core\\SysLog\\Error' => true,
            'TYPO3\\CMS\\Core\\SysLog\\Type' => true,
            'TYPO3\\CMS\\Core\\Tree\\Event\\ModifyTreeDataEvent' => true,
            'TYPO3\\CMS\\Core\\Tree\\TableConfiguration\\ArrayTreeRenderer' => true,
            'TYPO3\\CMS\\Core\\Tree\\TableConfiguration\\DatabaseTreeNode' => true,
            'TYPO3\\CMS\\Core\\Tree\\TableConfiguration\\TableConfigurationTree' => true,
            'TYPO3\\CMS\\Core\\Tree\\TableConfiguration\\TreeDataProviderFactory' => true,
            'TYPO3\\CMS\\Core\\Type\\BitSet' => true,
            'TYPO3\\CMS\\Core\\Type\\Bitmask\\JsConfirmation' => true,
            'TYPO3\\CMS\\Core\\Type\\Bitmask\\Permission' => true,
            'TYPO3\\CMS\\Core\\Type\\Exception' => true,
            'TYPO3\\CMS\\Core\\Type\\Exception\\InvalidEnumerationDefinitionException' => true,
            'TYPO3\\CMS\\Core\\Type\\Exception\\InvalidEnumerationValueException' => true,
            'TYPO3\\CMS\\Core\\Type\\Exception\\InvalidValueExceptionInterface' => true,
            'TYPO3\\CMS\\Core\\Type\\File\\FileInfo' => true,
            'TYPO3\\CMS\\Core\\Type\\File\\ImageInfo' => true,
            'TYPO3\\CMS\\Core\\Type\\Icon\\IconState' => true,
            'TYPO3\\CMS\\Core\\TypoScript\\ExtendedTemplateService' => true,
            'TYPO3\\CMS\\Core\\TypoScript\\Parser\\TypoScriptParser' => true,
            'TYPO3\\CMS\\Core\\TypoScript\\TemplateService' => true,
            'TYPO3\\CMS\\Core\\Utility\\ArrayUtility' => true,
            'TYPO3\\CMS\\Core\\Utility\\ClassNamingUtility' => true,
            'TYPO3\\CMS\\Core\\Utility\\CommandUtility' => true,
            'TYPO3\\CMS\\Core\\Utility\\CsvUtility' => true,
            'TYPO3\\CMS\\Core\\Utility\\DebugUtility' => true,
            'TYPO3\\CMS\\Core\\Utility\\DiffUtility' => true,
            'TYPO3\\CMS\\Core\\Utility\\Exception\\MissingArrayPathException' => true,
            'TYPO3\\CMS\\Core\\Utility\\Exception\\NotImplementedMethodException' => true,
            'TYPO3\\CMS\\Core\\Utility\\ExtensionManagementUtility' => true,
            'TYPO3\\CMS\\Core\\Utility\\File\\BasicFileUtility' => true,
            'TYPO3\\CMS\\Core\\Utility\\File\\ExtendedFileUtility' => true,
            'TYPO3\\CMS\\Core\\Utility\\HttpUtility' => true,
            'TYPO3\\CMS\\Core\\Utility\\IpAnonymizationUtility' => true,
            'TYPO3\\CMS\\Core\\Utility\\MailUtility' => true,
            'TYPO3\\CMS\\Core\\Utility\\MathUtility' => true,
            'TYPO3\\CMS\\Core\\Utility\\PathUtility' => true,
            'TYPO3\\CMS\\Core\\Utility\\PermutationUtility' => true,
            'TYPO3\\CMS\\Core\\Utility\\ResourceUtility' => true,
            'TYPO3\\CMS\\Core\\Utility\\RootlineUtility' => true,
            'TYPO3\\CMS\\Core\\Utility\\StringUtility' => true,
            'TYPO3\\CMS\\Core\\Utility\\String\\StringFragment' => true,
            'TYPO3\\CMS\\Core\\Utility\\String\\StringFragmentCollection' => true,
            'TYPO3\\CMS\\Core\\Utility\\String\\StringFragmentPattern' => true,
            'TYPO3\\CMS\\Core\\Utility\\String\\StringFragmentSplitter' => true,
            'TYPO3\\CMS\\Core\\Utility\\VersionNumberUtility' => true,
            'TYPO3\\CMS\\Core\\Versioning\\VersionState' => true,
            'TYPO3\\CMS\\Dashboard\\Controller\\AbstractController' => true,
            'TYPO3\\CMS\\Dashboard\\Dashboard' => true,
            'TYPO3\\CMS\\Dashboard\\DashboardInitializationService' => true,
            'TYPO3\\CMS\\Dashboard\\DashboardPreset' => true,
            'TYPO3\\CMS\\Dashboard\\DashboardPresetRegistry_decorated_1.inner' => true,
            'TYPO3\\CMS\\Dashboard\\DashboardRepository' => true,
            'TYPO3\\CMS\\Dashboard\\DependencyInjection\\DashboardWidgetPass' => true,
            'TYPO3\\CMS\\Dashboard\\ServiceProvider' => true,
            'TYPO3\\CMS\\Dashboard\\Views\\Factory' => true,
            'TYPO3\\CMS\\Dashboard\\WidgetApi' => true,
            'TYPO3\\CMS\\Dashboard\\WidgetGroup' => true,
            'TYPO3\\CMS\\Dashboard\\WidgetGroupInitializationService' => true,
            'TYPO3\\CMS\\Dashboard\\WidgetGroupRegistry_decorated_1.inner' => true,
            'TYPO3\\CMS\\Dashboard\\Widgets\\BarChartWidget' => true,
            'TYPO3\\CMS\\Dashboard\\Widgets\\CtaWidget' => true,
            'TYPO3\\CMS\\Dashboard\\Widgets\\DoughnutChartWidget' => true,
            'TYPO3\\CMS\\Dashboard\\Widgets\\ListWidget' => true,
            'TYPO3\\CMS\\Dashboard\\Widgets\\NumberWithIconDataProviderInterface' => true,
            'TYPO3\\CMS\\Dashboard\\Widgets\\NumberWithIconWidget' => true,
            'TYPO3\\CMS\\Dashboard\\Widgets\\Provider\\ButtonProvider' => true,
            'TYPO3\\CMS\\Dashboard\\Widgets\\Provider\\NumberOfFailedLoginsDataProvider' => true,
            'TYPO3\\CMS\\Dashboard\\Widgets\\Provider\\SysLogButtonProvider' => true,
            'TYPO3\\CMS\\Dashboard\\Widgets\\Provider\\SysLogErrorsDataProvider' => true,
            'TYPO3\\CMS\\Dashboard\\Widgets\\Provider\\TypeOfUsersChartDataProvider' => true,
            'TYPO3\\CMS\\Dashboard\\Widgets\\RssWidget' => true,
            'TYPO3\\CMS\\Dashboard\\Widgets\\T3GeneralInformationWidget' => true,
            'TYPO3\\CMS\\Dashboard\\Widgets\\WidgetConfiguration' => true,
            'TYPO3\\CMS\\Dashboard\\Widgets\\WidgetConfigurationInterface' => true,
            'TYPO3\\CMS\\Extbase\\Annotation\\IgnoreValidation' => true,
            'TYPO3\\CMS\\Extbase\\Annotation\\Inject' => true,
            'TYPO3\\CMS\\Extbase\\Annotation\\ORM\\Cascade' => true,
            'TYPO3\\CMS\\Extbase\\Annotation\\ORM\\Lazy' => true,
            'TYPO3\\CMS\\Extbase\\Annotation\\ORM\\Transient' => true,
            'TYPO3\\CMS\\Extbase\\Annotation\\Validate' => true,
            'TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManagerInterface' => true,
            'TYPO3\\CMS\\Extbase\\Configuration\\Exception' => true,
            'TYPO3\\CMS\\Extbase\\Configuration\\Exception\\InvalidConfigurationTypeException' => true,
            'TYPO3\\CMS\\Extbase\\Configuration\\Exception\\ParseErrorException' => true,
            'TYPO3\\CMS\\Extbase\\Configuration\\RequestHandlersConfiguration' => true,
            'TYPO3\\CMS\\Extbase\\Core\\BootstrapInterface' => true,
            'TYPO3\\CMS\\Extbase\\Domain\\Model\\BackendUser' => true,
            'TYPO3\\CMS\\Extbase\\Domain\\Model\\BackendUserGroup' => true,
            'TYPO3\\CMS\\Extbase\\Domain\\Model\\Category' => true,
            'TYPO3\\CMS\\Extbase\\Domain\\Model\\File' => true,
            'TYPO3\\CMS\\Extbase\\Domain\\Model\\FileMount' => true,
            'TYPO3\\CMS\\Extbase\\Domain\\Model\\FileReference' => true,
            'TYPO3\\CMS\\Extbase\\Domain\\Model\\Folder' => true,
            'TYPO3\\CMS\\Extbase\\Domain\\Model\\FolderBasedFileCollection' => true,
            'TYPO3\\CMS\\Extbase\\Domain\\Model\\FrontendUser' => true,
            'TYPO3\\CMS\\Extbase\\Domain\\Model\\FrontendUserGroup' => true,
            'TYPO3\\CMS\\Extbase\\Domain\\Model\\StaticFileCollection' => true,
            'TYPO3\\CMS\\Extbase\\Error\\Error' => true,
            'TYPO3\\CMS\\Extbase\\Error\\Message' => true,
            'TYPO3\\CMS\\Extbase\\Error\\Notice' => true,
            'TYPO3\\CMS\\Extbase\\Error\\Result' => true,
            'TYPO3\\CMS\\Extbase\\Error\\Warning' => true,
            'TYPO3\\CMS\\Extbase\\Event\\Mvc\\AfterRequestDispatchedEvent' => true,
            'TYPO3\\CMS\\Extbase\\Event\\Mvc\\BeforeActionCallEvent' => true,
            'TYPO3\\CMS\\Extbase\\Event\\Persistence\\AfterObjectThawedEvent' => true,
            'TYPO3\\CMS\\Extbase\\Event\\Persistence\\EntityAddedToPersistenceEvent' => true,
            'TYPO3\\CMS\\Extbase\\Event\\Persistence\\EntityFinalizedAfterPersistenceEvent' => true,
            'TYPO3\\CMS\\Extbase\\Event\\Persistence\\EntityPersistedEvent' => true,
            'TYPO3\\CMS\\Extbase\\Event\\Persistence\\EntityRemovedFromPersistenceEvent' => true,
            'TYPO3\\CMS\\Extbase\\Event\\Persistence\\EntityUpdatedInPersistenceEvent' => true,
            'TYPO3\\CMS\\Extbase\\Event\\Persistence\\ModifyQueryBeforeFetchingObjectDataEvent' => true,
            'TYPO3\\CMS\\Extbase\\Event\\Persistence\\ModifyResultAfterFetchingObjectDataEvent' => true,
            'TYPO3\\CMS\\Extbase\\Exception' => true,
            'TYPO3\\CMS\\Extbase\\Hook\\DataHandler\\CheckFlexFormValue' => true,
            'TYPO3\\CMS\\Extbase\\Mvc\\Controller\\Argument' => true,
            'TYPO3\\CMS\\Extbase\\Mvc\\Controller\\Arguments' => true,
            'TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ControllerContext' => true,
            'TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ControllerInterface' => true,
            'TYPO3\\CMS\\Extbase\\Mvc\\Controller\\Exception\\RequiredArgumentMissingException' => true,
            'TYPO3\\CMS\\Extbase\\Mvc\\Controller\\MvcPropertyMappingConfiguration' => true,
            'TYPO3\\CMS\\Extbase\\Mvc\\Exception' => true,
            'TYPO3\\CMS\\Extbase\\Mvc\\Exception\\InfiniteLoopException' => true,
            'TYPO3\\CMS\\Extbase\\Mvc\\Exception\\InvalidActionNameException' => true,
            'TYPO3\\CMS\\Extbase\\Mvc\\Exception\\InvalidArgumentMixingException' => true,
            'TYPO3\\CMS\\Extbase\\Mvc\\Exception\\InvalidArgumentNameException' => true,
            'TYPO3\\CMS\\Extbase\\Mvc\\Exception\\InvalidArgumentTypeException' => true,
            'TYPO3\\CMS\\Extbase\\Mvc\\Exception\\InvalidArgumentValueException' => true,
            'TYPO3\\CMS\\Extbase\\Mvc\\Exception\\InvalidControllerException' => true,
            'TYPO3\\CMS\\Extbase\\Mvc\\Exception\\InvalidControllerNameException' => true,
            'TYPO3\\CMS\\Extbase\\Mvc\\Exception\\InvalidExtensionNameException' => true,
            'TYPO3\\CMS\\Extbase\\Mvc\\Exception\\InvalidRequestMethodException' => true,
            'TYPO3\\CMS\\Extbase\\Mvc\\Exception\\NoSuchActionException' => true,
            'TYPO3\\CMS\\Extbase\\Mvc\\Exception\\NoSuchArgumentException' => true,
            'TYPO3\\CMS\\Extbase\\Mvc\\Exception\\NoSuchControllerException' => true,
            'TYPO3\\CMS\\Extbase\\Mvc\\Exception\\StopActionException' => true,
            'TYPO3\\CMS\\Extbase\\Mvc\\Exception\\UnsupportedRequestTypeException' => true,
            'TYPO3\\CMS\\Extbase\\Mvc\\Request' => true,
            'TYPO3\\CMS\\Extbase\\Mvc\\RequestHandlerResolver' => true,
            'TYPO3\\CMS\\Extbase\\Mvc\\Response' => true,
            'TYPO3\\CMS\\Extbase\\Mvc\\View\\GenericViewResolver' => true,
            'TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewResolverInterface' => true,
            'TYPO3\\CMS\\Extbase\\Mvc\\Web\\ReferringRequest' => true,
            'TYPO3\\CMS\\Extbase\\Mvc\\Web\\Request' => true,
            'TYPO3\\CMS\\Extbase\\Mvc\\Web\\Response' => true,
            'TYPO3\\CMS\\Extbase\\Mvc\\Web\\Routing\\UriBuilder' => true,
            'TYPO3\\CMS\\Extbase\\Object\\Container\\Exception\\UnknownObjectException' => true,
            'TYPO3\\CMS\\Extbase\\Object\\Exception' => true,
            'TYPO3\\CMS\\Extbase\\Object\\Exception\\CannotBuildObjectException' => true,
            'TYPO3\\CMS\\Extbase\\Object\\Exception\\CannotReconstituteObjectException' => true,
            'TYPO3\\CMS\\Extbase\\Object\\ObjectManagerInterface' => true,
            'TYPO3\\CMS\\Extbase\\Pagination\\QueryResultPaginator' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\ClassesConfiguration' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\Exception' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\Exception\\IllegalObjectTypeException' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\Exception\\IllegalRelationTypeException' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\Exception\\InvalidQueryException' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\Exception\\UnknownObjectException' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\BackendInterface' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Exception' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Exception\\InconsistentQuerySettingsException' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Exception\\InvalidClassException' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Exception\\InvalidNumberOfConstraintsException' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Exception\\InvalidRelationConfigurationException' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Exception\\MissingColumnMapException' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Exception\\NotImplementedException' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Exception\\RepositoryException' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Exception\\TooDirtyException' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Exception\\UnexpectedTypeException' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Exception\\UnsupportedMethodException' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Exception\\UnsupportedOrderException' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Exception\\UnsupportedRelationException' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\LazyLoadingProxy' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\LazyObjectStorage' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Mapper\\ColumnMap' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Mapper\\DataMap' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Mapper\\DataMapper' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Mapper\\Exception' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Mapper\\Exception\\NonExistentPropertyException' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Mapper\\Exception\\UnknownPropertyTypeException' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Qom\\AndInterface' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Qom\\BindVariableValue' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Qom\\BindVariableValueInterface' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Qom\\Comparison' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Qom\\ComparisonInterface' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Qom\\EquiJoinCondition' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Qom\\EquiJoinConditionInterface' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Qom\\Join' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Qom\\JoinConditionInterface' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Qom\\JoinInterface' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Qom\\LogicalAnd' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Qom\\LogicalNot' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Qom\\LogicalOr' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Qom\\LowerCase' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Qom\\LowerCaseInterface' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Qom\\NotInterface' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Qom\\OrInterface' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Qom\\Ordering' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Qom\\OrderingInterface' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Qom\\PropertyValue' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Qom\\Selector' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Qom\\SelectorInterface' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Qom\\Statement' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Qom\\StaticOperandInterface' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Qom\\UpperCase' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Qom\\UpperCaseInterface' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Query' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\QueryFactoryInterface' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\QueryResult' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\QuerySettingsInterface' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Storage\\BackendInterface' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Storage\\Exception\\BadConstraintException' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Storage\\Exception\\SqlErrorException' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Storage\\Typo3DbQueryParser' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Typo3QuerySettings' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\PersistenceManagerInterface' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\QueryInterface' => true,
            'TYPO3\\CMS\\Extbase\\Persistence\\QueryResultInterface' => true,
            'TYPO3\\CMS\\Extbase\\Property\\Exception' => true,
            'TYPO3\\CMS\\Extbase\\Property\\Exception\\DuplicateObjectException' => true,
            'TYPO3\\CMS\\Extbase\\Property\\Exception\\DuplicateTypeConverterException' => true,
            'TYPO3\\CMS\\Extbase\\Property\\Exception\\InvalidDataTypeException' => true,
            'TYPO3\\CMS\\Extbase\\Property\\Exception\\InvalidPropertyMappingConfigurationException' => true,
            'TYPO3\\CMS\\Extbase\\Property\\Exception\\InvalidSourceException' => true,
            'TYPO3\\CMS\\Extbase\\Property\\Exception\\InvalidTargetException' => true,
            'TYPO3\\CMS\\Extbase\\Property\\Exception\\TargetNotFoundException' => true,
            'TYPO3\\CMS\\Extbase\\Property\\Exception\\TypeConverterException' => true,
            'TYPO3\\CMS\\Extbase\\Property\\PropertyMappingConfiguration' => true,
            'TYPO3\\CMS\\Extbase\\Reflection\\ClassSchema' => true,
            'TYPO3\\CMS\\Extbase\\Reflection\\ClassSchema\\Exception\\NoSuchMethodException' => true,
            'TYPO3\\CMS\\Extbase\\Reflection\\ClassSchema\\Exception\\NoSuchMethodParameterException' => true,
            'TYPO3\\CMS\\Extbase\\Reflection\\ClassSchema\\Exception\\NoSuchPropertyException' => true,
            'TYPO3\\CMS\\Extbase\\Reflection\\ClassSchema\\Method' => true,
            'TYPO3\\CMS\\Extbase\\Reflection\\ClassSchema\\MethodParameter' => true,
            'TYPO3\\CMS\\Extbase\\Reflection\\ClassSchema\\Property' => true,
            'TYPO3\\CMS\\Extbase\\Reflection\\ClassSchema\\PropertyCharacteristics' => true,
            'TYPO3\\CMS\\Extbase\\Reflection\\DocBlock\\Tags\\Null_' => true,
            'TYPO3\\CMS\\Extbase\\Reflection\\Exception' => true,
            'TYPO3\\CMS\\Extbase\\Reflection\\Exception\\PropertyNotAccessibleException' => true,
            'TYPO3\\CMS\\Extbase\\Reflection\\Exception\\UnknownClassException' => true,
            'TYPO3\\CMS\\Extbase\\Reflection\\ObjectAccess' => true,
            'TYPO3\\CMS\\Extbase\\Routing\\ExtbasePluginEnhancer' => true,
            'TYPO3\\CMS\\Extbase\\Security\\Exception' => true,
            'TYPO3\\CMS\\Extbase\\Security\\Exception\\InvalidArgumentForHashGenerationException' => true,
            'TYPO3\\CMS\\Extbase\\Security\\Exception\\InvalidHashException' => true,
            'TYPO3\\CMS\\Extbase\\ServiceProvider' => true,
            'TYPO3\\CMS\\Extbase\\SignalSlot\\Exception\\InvalidSlotException' => true,
            'TYPO3\\CMS\\Extbase\\SignalSlot\\Exception\\InvalidSlotReturnException' => true,
            'TYPO3\\CMS\\Extbase\\Utility\\DebuggerUtility' => true,
            'TYPO3\\CMS\\Extbase\\Utility\\Exception\\InvalidTypeException' => true,
            'TYPO3\\CMS\\Extbase\\Utility\\ExtensionUtility' => true,
            'TYPO3\\CMS\\Extbase\\Utility\\FrontendSimulatorUtility' => true,
            'TYPO3\\CMS\\Extbase\\Utility\\LocalizationUtility' => true,
            'TYPO3\\CMS\\Extbase\\Utility\\TypeHandlingUtility' => true,
            'TYPO3\\CMS\\Extbase\\Validation\\Error' => true,
            'TYPO3\\CMS\\Extbase\\Validation\\Exception' => true,
            'TYPO3\\CMS\\Extbase\\Validation\\Exception\\InvalidTypeHintException' => true,
            'TYPO3\\CMS\\Extbase\\Validation\\Exception\\InvalidValidationConfigurationException' => true,
            'TYPO3\\CMS\\Extbase\\Validation\\Exception\\InvalidValidationOptionsException' => true,
            'TYPO3\\CMS\\Extbase\\Validation\\Exception\\NoSuchValidatorException' => true,
            'TYPO3\\CMS\\Extbase\\Validation\\ValidatorClassNameResolver' => true,
            'TYPO3\\CMS\\Extbase\\Validation\\Validator\\AlphanumericValidator' => true,
            'TYPO3\\CMS\\Extbase\\Validation\\Validator\\BooleanValidator' => true,
            'TYPO3\\CMS\\Extbase\\Validation\\Validator\\CollectionValidator' => true,
            'TYPO3\\CMS\\Extbase\\Validation\\Validator\\ConjunctionValidator' => true,
            'TYPO3\\CMS\\Extbase\\Validation\\Validator\\DateTimeValidator' => true,
            'TYPO3\\CMS\\Extbase\\Validation\\Validator\\DisjunctionValidator' => true,
            'TYPO3\\CMS\\Extbase\\Validation\\Validator\\EmailAddressValidator' => true,
            'TYPO3\\CMS\\Extbase\\Validation\\Validator\\FloatValidator' => true,
            'TYPO3\\CMS\\Extbase\\Validation\\Validator\\GenericObjectValidator' => true,
            'TYPO3\\CMS\\Extbase\\Validation\\Validator\\IntegerValidator' => true,
            'TYPO3\\CMS\\Extbase\\Validation\\Validator\\NotEmptyValidator' => true,
            'TYPO3\\CMS\\Extbase\\Validation\\Validator\\NumberRangeValidator' => true,
            'TYPO3\\CMS\\Extbase\\Validation\\Validator\\NumberValidator' => true,
            'TYPO3\\CMS\\Extbase\\Validation\\Validator\\RegularExpressionValidator' => true,
            'TYPO3\\CMS\\Extbase\\Validation\\Validator\\StringLengthValidator' => true,
            'TYPO3\\CMS\\Extbase\\Validation\\Validator\\StringValidator' => true,
            'TYPO3\\CMS\\Extbase\\Validation\\Validator\\TextValidator' => true,
            'TYPO3\\CMS\\Extbase\\Validation\\Validator\\UrlValidator' => true,
            'TYPO3\\CMS\\Extensionmanager\\Domain\\Model\\Dependency' => true,
            'TYPO3\\CMS\\Extensionmanager\\Domain\\Model\\Extension' => true,
            'TYPO3\\CMS\\Extensionmanager\\Domain\\Model\\Mirrors' => true,
            'TYPO3\\CMS\\Extensionmanager\\Domain\\Model\\Repository' => true,
            'TYPO3\\CMS\\Extensionmanager\\Event\\AfterExtensionDatabaseContentHasBeenImportedEvent' => true,
            'TYPO3\\CMS\\Extensionmanager\\Event\\AfterExtensionFilesHaveBeenImportedEvent' => true,
            'TYPO3\\CMS\\Extensionmanager\\Event\\AfterExtensionSiteFilesHaveBeenImportedEvent' => true,
            'TYPO3\\CMS\\Extensionmanager\\Event\\AfterExtensionStaticDatabaseContentHasBeenImportedEvent' => true,
            'TYPO3\\CMS\\Extensionmanager\\Event\\AvailableActionsForExtensionEvent' => true,
            'TYPO3\\CMS\\Extensionmanager\\Exception' => true,
            'TYPO3\\CMS\\Extensionmanager\\Exception\\DependencyConfigurationNotFoundException' => true,
            'TYPO3\\CMS\\Extensionmanager\\Exception\\ExtensionManagerException' => true,
            'TYPO3\\CMS\\Extensionmanager\\Exception\\InvalidFileException' => true,
            'TYPO3\\CMS\\Extensionmanager\\Exception\\MissingExtensionDependencyException' => true,
            'TYPO3\\CMS\\Extensionmanager\\Exception\\MissingVersionDependencyException' => true,
            'TYPO3\\CMS\\Extensionmanager\\Exception\\UnresolvedDependencyException' => true,
            'TYPO3\\CMS\\Extensionmanager\\Exception\\UnresolvedPhpDependencyException' => true,
            'TYPO3\\CMS\\Extensionmanager\\Exception\\UnresolvedTypo3DependencyException' => true,
            'TYPO3\\CMS\\Extensionmanager\\Service\\ComposerManifestProposalGenerator' => true,
            'TYPO3\\CMS\\Extensionmanager\\Utility\\Connection\\TerUtility' => true,
            'TYPO3\\CMS\\Extensionmanager\\Utility\\ExtensionModelUtility' => true,
            'TYPO3\\CMS\\Extensionmanager\\Utility\\Importer\\ExtensionListUtility' => true,
            'TYPO3\\CMS\\Extensionmanager\\Utility\\Importer\\MirrorListUtility' => true,
            'TYPO3\\CMS\\Extensionmanager\\Utility\\Parser\\ExtensionXmlPullParser' => true,
            'TYPO3\\CMS\\Extensionmanager\\Utility\\Parser\\ExtensionXmlPushParser' => true,
            'TYPO3\\CMS\\Extensionmanager\\Utility\\Parser\\MirrorXmlPullParser' => true,
            'TYPO3\\CMS\\Extensionmanager\\Utility\\Parser\\MirrorXmlPushParser' => true,
            'TYPO3\\CMS\\Extensionmanager\\Utility\\Parser\\XmlParserFactory' => true,
            'TYPO3\\CMS\\Extensionmanager\\Utility\\UpdateScriptUtility' => true,
            'TYPO3\\CMS\\Filelist\\ContextMenu\\ItemProviders\\FileDragProvider' => true,
            'TYPO3\\CMS\\Filelist\\ContextMenu\\ItemProviders\\FileProvider' => true,
            'TYPO3\\CMS\\Filelist\\Controller\\File\\CreateFolderController' => true,
            'TYPO3\\CMS\\Filelist\\Controller\\File\\EditFileController' => true,
            'TYPO3\\CMS\\Filelist\\Controller\\File\\FileUploadController' => true,
            'TYPO3\\CMS\\Filelist\\Controller\\File\\RenameFileController' => true,
            'TYPO3\\CMS\\Filelist\\Controller\\File\\ReplaceFileController' => true,
            'TYPO3\\CMS\\Filelist\\FileFacade' => true,
            'TYPO3\\CMS\\Filelist\\FileList' => true,
            'TYPO3\\CMS\\Filelist\\FileListFolderTree' => true,
            'TYPO3\\CMS\\Filelist\\Hook\\BackendControllerHook' => true,
            'TYPO3\\CMS\\Fluid\\Core\\Cache\\FluidTemplateCache' => true,
            'TYPO3\\CMS\\Fluid\\Core\\Rendering\\RenderingContext' => true,
            'TYPO3\\CMS\\Fluid\\Core\\ViewHelper\\ViewHelperResolver' => true,
            'TYPO3\\CMS\\Fluid\\Core\\Widget\\Bootstrap' => true,
            'TYPO3\\CMS\\Fluid\\Core\\Widget\\Exception' => true,
            'TYPO3\\CMS\\Fluid\\Core\\Widget\\Exception\\MissingControllerException' => true,
            'TYPO3\\CMS\\Fluid\\Core\\Widget\\Exception\\RenderingContextNotFoundException' => true,
            'TYPO3\\CMS\\Fluid\\Core\\Widget\\Exception\\WidgetContextNotFoundException' => true,
            'TYPO3\\CMS\\Fluid\\Core\\Widget\\Exception\\WidgetRequestNotFoundException' => true,
            'TYPO3\\CMS\\Fluid\\Core\\Widget\\WidgetContext' => true,
            'TYPO3\\CMS\\Fluid\\Core\\Widget\\WidgetRequest' => true,
            'TYPO3\\CMS\\Fluid\\View\\TemplatePaths' => true,
            'TYPO3\\CMS\\Form\\Domain\\Condition\\ConditionProvider' => true,
            'TYPO3\\CMS\\Form\\Domain\\Condition\\Functions\\FormConditionFunctionsProvider' => true,
            'TYPO3\\CMS\\Form\\Domain\\Configuration\\ArrayProcessing\\ArrayProcessing' => true,
            'TYPO3\\CMS\\Form\\Domain\\Configuration\\ArrayProcessing\\ArrayProcessor' => true,
            'TYPO3\\CMS\\Form\\Domain\\Configuration\\Exception\\ArrayProcessorException' => true,
            'TYPO3\\CMS\\Form\\Domain\\Configuration\\Exception\\PropertyException' => true,
            'TYPO3\\CMS\\Form\\Domain\\Configuration\\Exception\\PrototypeNotFoundException' => true,
            'TYPO3\\CMS\\Form\\Domain\\Configuration\\FlexformConfiguration\\Processors\\FinisherOptionGenerator' => true,
            'TYPO3\\CMS\\Form\\Domain\\Configuration\\FlexformConfiguration\\Processors\\ProcessorDto' => true,
            'TYPO3\\CMS\\Form\\Domain\\Configuration\\FlexformConfiguration\\Processors\\ProcessorInterface' => true,
            'TYPO3\\CMS\\Form\\Domain\\Configuration\\FormDefinition\\Converters\\AddHmacDataConverter' => true,
            'TYPO3\\CMS\\Form\\Domain\\Configuration\\FormDefinition\\Converters\\AddHmacDataToFormElementPropertyConverter' => true,
            'TYPO3\\CMS\\Form\\Domain\\Configuration\\FormDefinition\\Converters\\AddHmacDataToPropertyCollectionElementConverter' => true,
            'TYPO3\\CMS\\Form\\Domain\\Configuration\\FormDefinition\\Converters\\ConverterDto' => true,
            'TYPO3\\CMS\\Form\\Domain\\Configuration\\FormDefinition\\Converters\\FinisherOptionsFlexFormOverridesConverter' => true,
            'TYPO3\\CMS\\Form\\Domain\\Configuration\\FormDefinition\\Converters\\FinisherTranslationLanguageConverter' => true,
            'TYPO3\\CMS\\Form\\Domain\\Configuration\\FormDefinition\\Converters\\FlexFormFinisherOverridesConverterDto' => true,
            'TYPO3\\CMS\\Form\\Domain\\Configuration\\FormDefinition\\Converters\\RemoveHmacDataConverter' => true,
            'TYPO3\\CMS\\Form\\Domain\\Configuration\\FormDefinition\\Validators\\CreatableFormElementPropertiesValidator' => true,
            'TYPO3\\CMS\\Form\\Domain\\Configuration\\FormDefinition\\Validators\\CreatablePropertyCollectionElementPropertiesValidator' => true,
            'TYPO3\\CMS\\Form\\Domain\\Configuration\\FormDefinition\\Validators\\FormElementHmacDataValidator' => true,
            'TYPO3\\CMS\\Form\\Domain\\Configuration\\FormDefinition\\Validators\\PropertyCollectionElementHmacDataValidator' => true,
            'TYPO3\\CMS\\Form\\Domain\\Configuration\\FormDefinition\\Validators\\ValidationDto' => true,
            'TYPO3\\CMS\\Form\\Domain\\Configuration\\FrameworkConfiguration\\Extractors\\AdditionalElementPropertyPathsExtractor' => true,
            'TYPO3\\CMS\\Form\\Domain\\Configuration\\FrameworkConfiguration\\Extractors\\ExtractorDto' => true,
            'TYPO3\\CMS\\Form\\Domain\\Configuration\\FrameworkConfiguration\\Extractors\\FormElement\\IsCreatableFormElementExtractor' => true,
            'TYPO3\\CMS\\Form\\Domain\\Configuration\\FrameworkConfiguration\\Extractors\\FormElement\\MultiValuePropertiesExtractor' => true,
            'TYPO3\\CMS\\Form\\Domain\\Configuration\\FrameworkConfiguration\\Extractors\\FormElement\\PredefinedDefaultsExtractor' => true,
            'TYPO3\\CMS\\Form\\Domain\\Configuration\\FrameworkConfiguration\\Extractors\\FormElement\\PropertyPathsExtractor' => true,
            'TYPO3\\CMS\\Form\\Domain\\Configuration\\FrameworkConfiguration\\Extractors\\FormElement\\SelectOptionsExtractor' => true,
            'TYPO3\\CMS\\Form\\Domain\\Configuration\\FrameworkConfiguration\\Extractors\\PropertyCollectionElement\\IsCreatablePropertyCollectionElementExtractor' => true,
            'TYPO3\\CMS\\Form\\Domain\\Configuration\\FrameworkConfiguration\\Extractors\\PropertyCollectionElement\\MultiValuePropertiesExtractor' => true,
            'TYPO3\\CMS\\Form\\Domain\\Configuration\\FrameworkConfiguration\\Extractors\\PropertyCollectionElement\\PredefinedDefaultsExtractor' => true,
            'TYPO3\\CMS\\Form\\Domain\\Configuration\\FrameworkConfiguration\\Extractors\\PropertyCollectionElement\\PropertyPathsExtractor' => true,
            'TYPO3\\CMS\\Form\\Domain\\Configuration\\FrameworkConfiguration\\Extractors\\PropertyCollectionElement\\SelectOptionsExtractor' => true,
            'TYPO3\\CMS\\Form\\Domain\\Exception' => true,
            'TYPO3\\CMS\\Form\\Domain\\Exception\\IdentifierNotValidException' => true,
            'TYPO3\\CMS\\Form\\Domain\\Exception\\RenderingException' => true,
            'TYPO3\\CMS\\Form\\Domain\\Exception\\TypeDefinitionNotFoundException' => true,
            'TYPO3\\CMS\\Form\\Domain\\Exception\\TypeDefinitionNotValidException' => true,
            'TYPO3\\CMS\\Form\\Domain\\Exception\\UnknownCompositRenderableException' => true,
            'TYPO3\\CMS\\Form\\Domain\\Factory\\ArrayFormFactory' => true,
            'TYPO3\\CMS\\Form\\Domain\\Factory\\FormFactoryInterface' => true,
            'TYPO3\\CMS\\Form\\Domain\\Finishers\\ClosureFinisher' => true,
            'TYPO3\\CMS\\Form\\Domain\\Finishers\\ConfirmationFinisher' => true,
            'TYPO3\\CMS\\Form\\Domain\\Finishers\\DeleteUploadsFinisher' => true,
            'TYPO3\\CMS\\Form\\Domain\\Finishers\\EmailFinisher' => true,
            'TYPO3\\CMS\\Form\\Domain\\Finishers\\Exception\\FinisherException' => true,
            'TYPO3\\CMS\\Form\\Domain\\Finishers\\FinisherContext' => true,
            'TYPO3\\CMS\\Form\\Domain\\Finishers\\FinisherVariableProvider' => true,
            'TYPO3\\CMS\\Form\\Domain\\Finishers\\FlashMessageFinisher' => true,
            'TYPO3\\CMS\\Form\\Domain\\Finishers\\RedirectFinisher' => true,
            'TYPO3\\CMS\\Form\\Domain\\Finishers\\SaveToDatabaseFinisher' => true,
            'TYPO3\\CMS\\Form\\Domain\\Renderer\\FluidFormRenderer' => true,
            'TYPO3\\CMS\\Form\\Domain\\Renderer\\RendererInterface' => true,
            'TYPO3\\CMS\\Form\\Domain\\Runtime\\Exception\\PropertyMappingException' => true,
            'TYPO3\\CMS\\Form\\Domain\\Runtime\\FormRuntime' => true,
            'TYPO3\\CMS\\Form\\Domain\\Runtime\\FormRuntime\\FormSession' => true,
            'TYPO3\\CMS\\Form\\Domain\\Runtime\\FormRuntime\\Lifecycle\\AfterFormStateInitializedInterface' => true,
            'TYPO3\\CMS\\Form\\Domain\\Runtime\\FormState' => true,
            'TYPO3\\CMS\\Form\\Exception' => true,
            'TYPO3\\CMS\\Form\\Hooks\\DataStructureIdentifierHook' => true,
            'TYPO3\\CMS\\Form\\Hooks\\FileListEditIconsHook' => true,
            'TYPO3\\CMS\\Form\\Hooks\\FormElementHooks' => true,
            'TYPO3\\CMS\\Form\\Hooks\\FormFileExtensionUpdate' => true,
            'TYPO3\\CMS\\Form\\Hooks\\FormFileProvider' => true,
            'TYPO3\\CMS\\Form\\Hooks\\FormPagePreviewRenderer' => true,
            'TYPO3\\CMS\\Form\\Hooks\\ImportExportHook' => true,
            'TYPO3\\CMS\\Form\\Mvc\\Configuration\\ConfigurationManagerInterface' => true,
            'TYPO3\\CMS\\Form\\Mvc\\Configuration\\Exception' => true,
            'TYPO3\\CMS\\Form\\Mvc\\Configuration\\Exception\\CycleInheritancesException' => true,
            'TYPO3\\CMS\\Form\\Mvc\\Configuration\\Exception\\ExtensionNameRequiredException' => true,
            'TYPO3\\CMS\\Form\\Mvc\\Configuration\\Exception\\FileWriteException' => true,
            'TYPO3\\CMS\\Form\\Mvc\\Configuration\\Exception\\NoSuchFileException' => true,
            'TYPO3\\CMS\\Form\\Mvc\\Configuration\\Exception\\ParseErrorException' => true,
            'TYPO3\\CMS\\Form\\Mvc\\Configuration\\InheritancesResolverService' => true,
            'TYPO3\\CMS\\Form\\Mvc\\Configuration\\TypoScriptService' => true,
            'TYPO3\\CMS\\Form\\Mvc\\Configuration\\YamlSource' => true,
            'TYPO3\\CMS\\Form\\Mvc\\Persistence\\Exception' => true,
            'TYPO3\\CMS\\Form\\Mvc\\Persistence\\Exception\\NoUniqueIdentifierException' => true,
            'TYPO3\\CMS\\Form\\Mvc\\Persistence\\Exception\\NoUniquePersistenceIdentifierException' => true,
            'TYPO3\\CMS\\Form\\Mvc\\Persistence\\Exception\\PersistenceManagerException' => true,
            'TYPO3\\CMS\\Form\\Mvc\\Persistence\\FormPersistenceManager' => true,
            'TYPO3\\CMS\\Form\\Mvc\\Persistence\\FormPersistenceManagerInterface' => true,
            'TYPO3\\CMS\\Form\\Mvc\\ProcessingRule' => true,
            'TYPO3\\CMS\\Form\\Mvc\\Property\\Exception\\TypeConverterException' => true,
            'TYPO3\\CMS\\Form\\Mvc\\Property\\PropertyMappingConfiguration' => true,
            'TYPO3\\CMS\\Form\\Mvc\\Property\\TypeConverter\\PseudoFile' => true,
            'TYPO3\\CMS\\Form\\Mvc\\Property\\TypeConverter\\PseudoFileReference' => true,
            'TYPO3\\CMS\\Form\\Mvc\\Validation\\CountValidator' => true,
            'TYPO3\\CMS\\Form\\Mvc\\Validation\\DateRangeValidator' => true,
            'TYPO3\\CMS\\Form\\Mvc\\Validation\\EmptyValidator' => true,
            'TYPO3\\CMS\\Form\\Mvc\\Validation\\Exception\\InvalidValidationOptionsException' => true,
            'TYPO3\\CMS\\Form\\Mvc\\Validation\\FileSizeValidator' => true,
            'TYPO3\\CMS\\Form\\Mvc\\Validation\\MimeTypeValidator' => true,
            'TYPO3\\CMS\\Form\\Service\\DatabaseService' => true,
            'TYPO3\\CMS\\Form\\Slot\\FormDefinitionPersistenceException' => true,
            'TYPO3\\CMS\\Form\\Type\\FormDefinitionArray' => true,
            'TYPO3\\CMS\\FrontendLogin\\Domain\\Repository\\FrontendUserGroupRepository' => true,
            'TYPO3\\CMS\\FrontendLogin\\Domain\\Repository\\FrontendUserRepository' => true,
            'TYPO3\\CMS\\FrontendLogin\\Service\\RecoveryService' => true,
            'TYPO3\\CMS\\FrontendLogin\\Service\\RecoveryServiceInterface' => true,
            'TYPO3\\CMS\\FrontendLogin\\Service\\UserService' => true,
            'TYPO3\\CMS\\Frontend\\Aspect\\PreviewAspect' => true,
            'TYPO3\\CMS\\Frontend\\Authentication\\FrontendUserAuthentication' => true,
            'TYPO3\\CMS\\Frontend\\Category\\Collection\\CategoryCollection' => true,
            'TYPO3\\CMS\\Frontend\\Composer\\InstallerScripts' => true,
            'TYPO3\\CMS\\Frontend\\Configuration\\TypoScript\\ConditionMatching\\ConditionMatcher' => true,
            'TYPO3\\CMS\\Frontend\\ContentObject\\CaseContentObject' => true,
            'TYPO3\\CMS\\Frontend\\ContentObject\\ContentContentObject' => true,
            'TYPO3\\CMS\\Frontend\\ContentObject\\ContentDataProcessor' => true,
            'TYPO3\\CMS\\Frontend\\ContentObject\\ContentObjectArrayContentObject' => true,
            'TYPO3\\CMS\\Frontend\\ContentObject\\ContentObjectArrayInternalContentObject' => true,
            'TYPO3\\CMS\\Frontend\\ContentObject\\EditPanelContentObject' => true,
            'TYPO3\\CMS\\Frontend\\ContentObject\\Exception\\ContentRenderingException' => true,
            'TYPO3\\CMS\\Frontend\\ContentObject\\Exception\\ExceptionHandlerInterface' => true,
            'TYPO3\\CMS\\Frontend\\ContentObject\\Exception\\ProductionExceptionHandler' => true,
            'TYPO3\\CMS\\Frontend\\ContentObject\\FilesContentObject' => true,
            'TYPO3\\CMS\\Frontend\\ContentObject\\FluidTemplateContentObject' => true,
            'TYPO3\\CMS\\Frontend\\ContentObject\\HierarchicalMenuContentObject' => true,
            'TYPO3\\CMS\\Frontend\\ContentObject\\ImageContentObject' => true,
            'TYPO3\\CMS\\Frontend\\ContentObject\\ImageResourceContentObject' => true,
            'TYPO3\\CMS\\Frontend\\ContentObject\\LoadRegisterContentObject' => true,
            'TYPO3\\CMS\\Frontend\\ContentObject\\Menu\\CategoryMenuUtility' => true,
            'TYPO3\\CMS\\Frontend\\ContentObject\\Menu\\Exception\\NoSuchMenuTypeException' => true,
            'TYPO3\\CMS\\Frontend\\ContentObject\\Menu\\TextMenuContentObject' => true,
            'TYPO3\\CMS\\Frontend\\ContentObject\\RecordsContentObject' => true,
            'TYPO3\\CMS\\Frontend\\ContentObject\\RestoreRegisterContentObject' => true,
            'TYPO3\\CMS\\Frontend\\ContentObject\\ScalableVectorGraphicsContentObject' => true,
            'TYPO3\\CMS\\Frontend\\ContentObject\\TemplateContentObject' => true,
            'TYPO3\\CMS\\Frontend\\ContentObject\\TextContentObject' => true,
            'TYPO3\\CMS\\Frontend\\ContentObject\\UserContentObject' => true,
            'TYPO3\\CMS\\Frontend\\ContentObject\\UserInternalContentObject' => true,
            'TYPO3\\CMS\\Frontend\\Controller\\ErrorController' => true,
            'TYPO3\\CMS\\Frontend\\Controller\\ShowImageController' => true,
            'TYPO3\\CMS\\Frontend\\Controller\\TypoScriptFrontendController' => true,
            'TYPO3\\CMS\\Frontend\\DataProcessing\\CommaSeparatedValueProcessor' => true,
            'TYPO3\\CMS\\Frontend\\DataProcessing\\DatabaseQueryProcessor' => true,
            'TYPO3\\CMS\\Frontend\\DataProcessing\\FilesProcessor' => true,
            'TYPO3\\CMS\\Frontend\\DataProcessing\\GalleryProcessor' => true,
            'TYPO3\\CMS\\Frontend\\DataProcessing\\LanguageMenuProcessor' => true,
            'TYPO3\\CMS\\Frontend\\DataProcessing\\MenuProcessor' => true,
            'TYPO3\\CMS\\Frontend\\DataProcessing\\SiteProcessor' => true,
            'TYPO3\\CMS\\Frontend\\DataProcessing\\SplitProcessor' => true,
            'TYPO3\\CMS\\Frontend\\Event\\ModifyHrefLangTagsEvent' => true,
            'TYPO3\\CMS\\Frontend\\Exception' => true,
            'TYPO3\\CMS\\Frontend\\Hooks\\PageLayoutView\\ImagePreviewRenderer' => true,
            'TYPO3\\CMS\\Frontend\\Hooks\\PageLayoutView\\TextPreviewRenderer' => true,
            'TYPO3\\CMS\\Frontend\\Hooks\\PageLayoutView\\TextmediaPreviewRenderer' => true,
            'TYPO3\\CMS\\Frontend\\Hooks\\PageLayoutView\\TextpicPreviewRenderer' => true,
            'TYPO3\\CMS\\Frontend\\Hooks\\TreelistCacheUpdateHooks' => true,
            'TYPO3\\CMS\\Frontend\\Imaging\\GifBuilder' => true,
            'TYPO3\\CMS\\Frontend\\Page\\CacheHashConfiguration' => true,
            'TYPO3\\CMS\\Frontend\\Page\\PageAccessFailureReasons' => true,
            'TYPO3\\CMS\\Frontend\\Page\\PageLayoutResolver' => true,
            'TYPO3\\CMS\\Frontend\\Plugin\\AbstractPlugin' => true,
            'TYPO3\\CMS\\Frontend\\Resource\\FileCollector' => true,
            'TYPO3\\CMS\\Frontend\\Resource\\FilePathSanitizer' => true,
            'TYPO3\\CMS\\Frontend\\ServiceProvider' => true,
            'TYPO3\\CMS\\Frontend\\Service\\TypoLinkCodecService' => true,
            'TYPO3\\CMS\\Frontend\\Typolink\\DatabaseRecordLinkBuilder' => true,
            'TYPO3\\CMS\\Frontend\\Typolink\\EmailLinkBuilder' => true,
            'TYPO3\\CMS\\Frontend\\Typolink\\ExternalUrlLinkBuilder' => true,
            'TYPO3\\CMS\\Frontend\\Typolink\\FileOrFolderLinkBuilder' => true,
            'TYPO3\\CMS\\Frontend\\Typolink\\LegacyLinkBuilder' => true,
            'TYPO3\\CMS\\Frontend\\Typolink\\PageLinkBuilder' => true,
            'TYPO3\\CMS\\Frontend\\Typolink\\TelephoneLinkBuilder' => true,
            'TYPO3\\CMS\\Frontend\\Typolink\\UnableToLinkException' => true,
            'TYPO3\\CMS\\Frontend\\Utility\\CanonicalizationUtility' => true,
            'TYPO3\\CMS\\Impexp\\Command\\Exception\\ImportFailedException' => true,
            'TYPO3\\CMS\\Impexp\\Command\\Exception\\InvalidFileException' => true,
            'TYPO3\\CMS\\Impexp\\Command\\Exception\\LoadingFileFailedException' => true,
            'TYPO3\\CMS\\Impexp\\Command\\Exception\\PrerequisitesNotMetException' => true,
            'TYPO3\\CMS\\Impexp\\ContextMenu\\ItemProvider' => true,
            'TYPO3\\CMS\\Impexp\\Controller\\ExportController' => true,
            'TYPO3\\CMS\\Impexp\\Controller\\ImportController' => true,
            'TYPO3\\CMS\\Impexp\\Controller\\ImportExportController' => true,
            'TYPO3\\CMS\\Impexp\\Domain\\Repository\\PresetRepository' => true,
            'TYPO3\\CMS\\Impexp\\Event\\BeforeImportEvent' => true,
            'TYPO3\\CMS\\Impexp\\Export' => true,
            'TYPO3\\CMS\\Impexp\\Hook\\BackendControllerHook' => true,
            'TYPO3\\CMS\\Impexp\\Import' => true,
            'TYPO3\\CMS\\Impexp\\View\\ExportPageTreeView' => true,
            'TYPO3\\CMS\\Info\\Controller\\InfoPageTyposcriptConfigController' => true,
            'TYPO3\\CMS\\Info\\Controller\\PageInformationController' => true,
            'TYPO3\\CMS\\Info\\Controller\\TranslationStatusController' => true,
            'TYPO3\\CMS\\Recordlist\\Browser\\DatabaseBrowser' => true,
            'TYPO3\\CMS\\Recordlist\\Browser\\FileBrowser' => true,
            'TYPO3\\CMS\\Recordlist\\Browser\\FolderBrowser' => true,
            'TYPO3\\CMS\\Recordlist\\Browser\\RecordBrowser' => true,
            'TYPO3\\CMS\\Recordlist\\Controller\\ClearPageCacheController' => true,
            'TYPO3\\CMS\\Recordlist\\Controller\\ElementBrowserController' => true,
            'TYPO3\\CMS\\Recordlist\\Controller\\RecordListController' => true,
            'TYPO3\\CMS\\Recordlist\\LinkHandler\\FileLinkHandler' => true,
            'TYPO3\\CMS\\Recordlist\\LinkHandler\\FolderLinkHandler' => true,
            'TYPO3\\CMS\\Recordlist\\LinkHandler\\MailLinkHandler' => true,
            'TYPO3\\CMS\\Recordlist\\LinkHandler\\PageLinkHandler' => true,
            'TYPO3\\CMS\\Recordlist\\LinkHandler\\RecordLinkHandler' => true,
            'TYPO3\\CMS\\Recordlist\\LinkHandler\\TelephoneLinkHandler' => true,
            'TYPO3\\CMS\\Recordlist\\LinkHandler\\UrlLinkHandler' => true,
            'TYPO3\\CMS\\Recordlist\\RecordList\\DatabaseRecordList' => true,
            'TYPO3\\CMS\\Recordlist\\Tree\\View\\DummyLinkParameterProvider' => true,
            'TYPO3\\CMS\\Recordlist\\Tree\\View\\ElementBrowserPageTreeView' => true,
            'TYPO3\\CMS\\Recordlist\\Tree\\View\\RecordBrowserPageTreeView' => true,
            'TYPO3\\CMS\\Recordlist\\View\\FolderUtilityRenderer' => true,
            'TYPO3\\CMS\\RteCKEditor\\Controller\\BrowseLinksController' => true,
            'TYPO3\\CMS\\RteCKEditor\\Form\\Element\\Event\\AfterGetExternalPluginsEvent' => true,
            'TYPO3\\CMS\\RteCKEditor\\Form\\Element\\Event\\AfterPrepareConfigurationForEditorEvent' => true,
            'TYPO3\\CMS\\RteCKEditor\\Form\\Element\\Event\\BeforeGetExternalPluginsEvent' => true,
            'TYPO3\\CMS\\RteCKEditor\\Form\\Element\\Event\\BeforePrepareConfigurationForEditorEvent' => true,
            'TYPO3\\CMS\\RteCKEditor\\Form\\Element\\RichTextElement' => true,
            'TYPO3\\CMS\\RteCKEditor\\Form\\Resolver\\RichTextNodeResolver' => true,
            'TYPO3\\CMS\\Scheduler\\Controller\\SchedulerModuleController' => true,
            'TYPO3\\CMS\\Scheduler\\CronCommand\\CronCommand' => true,
            'TYPO3\\CMS\\Scheduler\\CronCommand\\NormalizeCommand' => true,
            'TYPO3\\CMS\\Scheduler\\Example\\SleepTask' => true,
            'TYPO3\\CMS\\Scheduler\\Example\\SleepTaskAdditionalFieldProvider' => true,
            'TYPO3\\CMS\\Scheduler\\Example\\TestTask' => true,
            'TYPO3\\CMS\\Scheduler\\Example\\TestTaskAdditionalFieldProvider' => true,
            'TYPO3\\CMS\\Scheduler\\Execution' => true,
            'TYPO3\\CMS\\Scheduler\\FailedExecutionException' => true,
            'TYPO3\\CMS\\Scheduler\\Task\\CachingFrameworkGarbageCollectionAdditionalFieldProvider' => true,
            'TYPO3\\CMS\\Scheduler\\Task\\CachingFrameworkGarbageCollectionTask' => true,
            'TYPO3\\CMS\\Scheduler\\Task\\Enumeration\\Action' => true,
            'TYPO3\\CMS\\Scheduler\\Task\\ExecuteSchedulableCommandAdditionalFieldProvider' => true,
            'TYPO3\\CMS\\Scheduler\\Task\\ExecuteSchedulableCommandTask' => true,
            'TYPO3\\CMS\\Scheduler\\Task\\FileStorageExtractionAdditionalFieldProvider' => true,
            'TYPO3\\CMS\\Scheduler\\Task\\FileStorageExtractionTask' => true,
            'TYPO3\\CMS\\Scheduler\\Task\\FileStorageIndexingAdditionalFieldProvider' => true,
            'TYPO3\\CMS\\Scheduler\\Task\\FileStorageIndexingTask' => true,
            'TYPO3\\CMS\\Scheduler\\Task\\IpAnonymizationAdditionalFieldProvider' => true,
            'TYPO3\\CMS\\Scheduler\\Task\\IpAnonymizationTask' => true,
            'TYPO3\\CMS\\Scheduler\\Task\\OptimizeDatabaseTableAdditionalFieldProvider' => true,
            'TYPO3\\CMS\\Scheduler\\Task\\OptimizeDatabaseTableTask' => true,
            'TYPO3\\CMS\\Scheduler\\Task\\RecyclerGarbageCollectionAdditionalFieldProvider' => true,
            'TYPO3\\CMS\\Scheduler\\Task\\RecyclerGarbageCollectionTask' => true,
            'TYPO3\\CMS\\Scheduler\\Task\\TableGarbageCollectionAdditionalFieldProvider' => true,
            'TYPO3\\CMS\\Scheduler\\Task\\TableGarbageCollectionTask' => true,
            'TYPO3\\CMS\\Seo\\Canonical\\CanonicalGenerator' => true,
            'TYPO3\\CMS\\Seo\\Event\\ModifyUrlForCanonicalTagEvent' => true,
            'TYPO3\\CMS\\Seo\\MetaTag\\MetaTagGenerator' => true,
            'TYPO3\\CMS\\Seo\\MetaTag\\OpenGraphMetaTagManager' => true,
            'TYPO3\\CMS\\Seo\\MetaTag\\TwitterCardMetaTagManager' => true,
            'TYPO3\\CMS\\Seo\\XmlSitemap\\Exception\\InvalidConfigurationException' => true,
            'TYPO3\\CMS\\Seo\\XmlSitemap\\Exception\\MissingConfigurationException' => true,
            'TYPO3\\CMS\\Seo\\XmlSitemap\\PagesXmlSitemapDataProvider' => true,
            'TYPO3\\CMS\\Seo\\XmlSitemap\\RecordsXmlSitemapDataProvider' => true,
            'TYPO3\\CMS\\Seo\\XmlSitemap\\XmlSitemapRenderer' => true,
            'TYPO3\\CMS\\Setup\\Event\\AddJavaScriptModulesEvent' => true,
            'TYPO3\\CMS\\SysNote\\Controller\\NoteController' => true,
            'TYPO3\\CMS\\SysNote\\Domain\\Repository\\SysNoteRepository' => true,
            'TYPO3\\CMS\\SysNote\\Hook\\InfoModuleHook' => true,
            'TYPO3\\CMS\\SysNote\\Hook\\PageHook' => true,
            'TYPO3\\CMS\\SysNote\\Hook\\RecordListHook' => true,
            'TYPO3\\CMS\\T3editor\\Addon' => true,
            'TYPO3\\CMS\\T3editor\\Controller\\CodeCompletionController' => true,
            'TYPO3\\CMS\\T3editor\\Controller\\TypoScriptReferenceController' => true,
            'TYPO3\\CMS\\T3editor\\Exception\\InvalidModeException' => true,
            'TYPO3\\CMS\\T3editor\\Form\\Element\\T3editorElement' => true,
            'TYPO3\\CMS\\T3editor\\Hook\\FileEditHook' => true,
            'TYPO3\\CMS\\T3editor\\Mode' => true,
            'TYPO3\\CMS\\Tstemplate\\Controller\\TemplateAnalyzerModuleFunctionController' => true,
            'TYPO3\\CMS\\Tstemplate\\Controller\\TypoScriptTemplateConstantEditorModuleFunctionController' => true,
            'TYPO3\\CMS\\Tstemplate\\Controller\\TypoScriptTemplateInformationModuleFunctionController' => true,
            'TYPO3\\CMS\\Tstemplate\\Controller\\TypoScriptTemplateModuleController' => true,
            'TYPO3\\CMS\\Tstemplate\\Controller\\TypoScriptTemplateObjectBrowserModuleFunctionController' => true,
            'TYPO3\\CMS\\Viewpage\\Controller\\ViewModuleController' => true,
            'backend.routes_decorated_1.inner' => true,
            'backend.routes_decorated_10.inner' => true,
            'backend.routes_decorated_11.inner' => true,
            'backend.routes_decorated_12.inner' => true,
            'backend.routes_decorated_13.inner' => true,
            'backend.routes_decorated_14.inner' => true,
            'backend.routes_decorated_15.inner' => true,
            'backend.routes_decorated_16.inner' => true,
            'backend.routes_decorated_17.inner' => true,
            'backend.routes_decorated_18.inner' => true,
            'backend.routes_decorated_19.inner' => true,
            'backend.routes_decorated_2.inner' => true,
            'backend.routes_decorated_20.inner' => true,
            'backend.routes_decorated_21.inner' => true,
            'backend.routes_decorated_22.inner' => true,
            'backend.routes_decorated_23.inner' => true,
            'backend.routes_decorated_24.inner' => true,
            'backend.routes_decorated_25.inner' => true,
            'backend.routes_decorated_26.inner' => true,
            'backend.routes_decorated_27.inner' => true,
            'backend.routes_decorated_28.inner' => true,
            'backend.routes_decorated_29.inner' => true,
            'backend.routes_decorated_3.inner' => true,
            'backend.routes_decorated_30.inner' => true,
            'backend.routes_decorated_31.inner' => true,
            'backend.routes_decorated_4.inner' => true,
            'backend.routes_decorated_5.inner' => true,
            'backend.routes_decorated_6.inner' => true,
            'backend.routes_decorated_7.inner' => true,
            'backend.routes_decorated_8.inner' => true,
            'backend.routes_decorated_9.inner' => true,
            'cache.dashboard.rss' => true,
            'cache.extbase' => true,
            'cache.fluid_template' => true,
            'cache.hash' => true,
            'cache.imagesizes' => true,
            'cache.l10n' => true,
            'cache.pages' => true,
            'cache.pagesection' => true,
            'cache.rootline' => true,
            'cache.runtime' => true,
            'dashboard.buttons.docGettingStarted' => true,
            'dashboard.buttons.docTSconfig' => true,
            'dashboard.buttons.docTypoScriptReference' => true,
            'dashboard.buttons.t3news' => true,
            'dashboard.buttons.t3securityAdvisories' => true,
            'dashboard.presets_decorated_1.inner' => true,
            'dashboard.widgetGroups_decorated_1.inner' => true,
            'dashboard.widgets_decorated_1.inner' => true,
            'extcode.cart.provider.orders_per_day' => true,
            'extcode.cart.provider.payment_paid_shipping_open' => true,
            'extcode.cart.provider.turnover_per_day' => true,
            'middlewares_decorated_1.inner' => true,
            'middlewares_decorated_10.inner' => true,
            'middlewares_decorated_11.inner' => true,
            'middlewares_decorated_12.inner' => true,
            'middlewares_decorated_13.inner' => true,
            'middlewares_decorated_14.inner' => true,
            'middlewares_decorated_15.inner' => true,
            'middlewares_decorated_16.inner' => true,
            'middlewares_decorated_17.inner' => true,
            'middlewares_decorated_18.inner' => true,
            'middlewares_decorated_19.inner' => true,
            'middlewares_decorated_2.inner' => true,
            'middlewares_decorated_20.inner' => true,
            'middlewares_decorated_21.inner' => true,
            'middlewares_decorated_22.inner' => true,
            'middlewares_decorated_23.inner' => true,
            'middlewares_decorated_24.inner' => true,
            'middlewares_decorated_25.inner' => true,
            'middlewares_decorated_26.inner' => true,
            'middlewares_decorated_27.inner' => true,
            'middlewares_decorated_28.inner' => true,
            'middlewares_decorated_29.inner' => true,
            'middlewares_decorated_3.inner' => true,
            'middlewares_decorated_30.inner' => true,
            'middlewares_decorated_4.inner' => true,
            'middlewares_decorated_5.inner' => true,
            'middlewares_decorated_6.inner' => true,
            'middlewares_decorated_7.inner' => true,
            'middlewares_decorated_8.inner' => true,
            'middlewares_decorated_9.inner' => true,
            'querybuilder.tx_cart_domain_model_order_item' => true,
        ];
    }

    /**
     * Gets the public 'BK2K\BootstrapPackage\Backend\ToolbarItem\VersionToolbarItem' shared service.
     *
     * @return \BK2K\BootstrapPackage\Backend\ToolbarItem\VersionToolbarItem
     */
    protected function getVersionToolbarItemService()
    {
        return $this->services['BK2K\\BootstrapPackage\\Backend\\ToolbarItem\\VersionToolbarItem'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\BK2K\BootstrapPackage\Backend\ToolbarItem\VersionToolbarItem::class);
    }

    /**
     * Gets the public 'BK2K\BootstrapPackage\Service\BrandingService' shared service.
     *
     * @return \BK2K\BootstrapPackage\Service\BrandingService
     */
    protected function getBrandingServiceService()
    {
        return $this->services['BK2K\\BootstrapPackage\\Service\\BrandingService'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\BK2K\BootstrapPackage\Service\BrandingService::class);
    }

    /**
     * Gets the public 'Extcode\CartProducts\Controller\ProductController' autowired service.
     *
     * @return \Extcode\CartProducts\Controller\ProductController
     */
    protected function getProductControllerService()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\CartProducts\Controller\ProductController::class);

        $instance->injectSessionHandler(($this->services['Extcode\\Cart\\Service\\SessionHandler'] ?? ($this->services['Extcode\\Cart\\Service\\SessionHandler'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Service\SessionHandler::class))));
        $instance->injectCartUtility(($this->privates['Extcode\\Cart\\Utility\\CartUtility'] ?? $this->getCartUtilityService()));
        $instance->injectProductRepository(($this->services['Extcode\\CartProducts\\Domain\\Repository\\Product\\ProductRepository'] ?? $this->getProductRepositoryService()));
        $instance->injectCategoryRepository(($this->services['Extcode\\CartProducts\\Domain\\Repository\\CategoryRepository'] ?? $this->getCategoryRepositoryService()));
        $instance->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));
        $instance->injectSignalSlotDispatcher(($this->services['TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher'] ?? $this->getDispatcher2Service()));
        $instance->injectValidatorResolver(($this->services['TYPO3\\CMS\\Extbase\\Validation\\ValidatorResolver'] ?? $this->getValidatorResolverService()));
        $instance->injectViewResolver(($this->privates['TYPO3\\CMS\\Extbase\\Mvc\\View\\GenericViewResolver'] ?? $this->getGenericViewResolverService()));
        $instance->injectReflectionService(($this->services['TYPO3\\CMS\\Extbase\\Reflection\\ReflectionService'] ?? $this->getReflectionServiceService()));
        $instance->injectCacheService(($this->services['TYPO3\\CMS\\Extbase\\Service\\CacheService'] ?? $this->getCacheServiceService()));
        $instance->injectHashService(($this->services['TYPO3\\CMS\\Extbase\\Security\\Cryptography\\HashService'] ?? $this->getHashServiceService()));
        $instance->injectMvcPropertyMappingConfigurationService(($this->services['TYPO3\\CMS\\Extbase\\Mvc\\Controller\\MvcPropertyMappingConfigurationService'] ?? $this->getMvcPropertyMappingConfigurationServiceService()));
        $instance->injectEventDispatcher(($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service()));

        return $instance;
    }

    /**
     * Gets the public 'Extcode\CartProducts\Domain\Repository\CategoryRepository' shared autowired service.
     *
     * @return \Extcode\CartProducts\Domain\Repository\CategoryRepository
     */
    protected function getCategoryRepositoryService()
    {
        $this->services['Extcode\\CartProducts\\Domain\\Repository\\CategoryRepository'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\CartProducts\Domain\Repository\CategoryRepository::class, ($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));

        $instance->injectPersistenceManager(($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()));
        $instance->initializeObject();

        return $instance;
    }

    /**
     * Gets the public 'Extcode\CartProducts\Domain\Repository\Product\BeVariantAttributeOptionRepository' shared autowired service.
     *
     * @return \Extcode\CartProducts\Domain\Repository\Product\BeVariantAttributeOptionRepository
     */
    protected function getBeVariantAttributeOptionRepositoryService()
    {
        $this->services['Extcode\\CartProducts\\Domain\\Repository\\Product\\BeVariantAttributeOptionRepository'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\CartProducts\Domain\Repository\Product\BeVariantAttributeOptionRepository::class, ($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));

        $instance->injectPersistenceManager(($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'Extcode\CartProducts\Domain\Repository\Product\BeVariantAttributeRepository' shared autowired service.
     *
     * @return \Extcode\CartProducts\Domain\Repository\Product\BeVariantAttributeRepository
     */
    protected function getBeVariantAttributeRepositoryService()
    {
        $this->services['Extcode\\CartProducts\\Domain\\Repository\\Product\\BeVariantAttributeRepository'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\CartProducts\Domain\Repository\Product\BeVariantAttributeRepository::class, ($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));

        $instance->injectPersistenceManager(($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'Extcode\CartProducts\Domain\Repository\Product\BeVariantRepository' shared autowired service.
     *
     * @return \Extcode\CartProducts\Domain\Repository\Product\BeVariantRepository
     */
    protected function getBeVariantRepositoryService()
    {
        $this->services['Extcode\\CartProducts\\Domain\\Repository\\Product\\BeVariantRepository'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\CartProducts\Domain\Repository\Product\BeVariantRepository::class, ($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));

        $instance->injectPersistenceManager(($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'Extcode\CartProducts\Domain\Repository\Product\ProductRepository' shared autowired service.
     *
     * @return \Extcode\CartProducts\Domain\Repository\Product\ProductRepository
     */
    protected function getProductRepositoryService()
    {
        $this->services['Extcode\\CartProducts\\Domain\\Repository\\Product\\ProductRepository'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\CartProducts\Domain\Repository\Product\ProductRepository::class, ($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));

        $instance->injectPersistenceManager(($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'Extcode\CartProducts\Domain\Repository\Product\SpecialPriceRepository' shared autowired service.
     *
     * @return \Extcode\CartProducts\Domain\Repository\Product\SpecialPriceRepository
     */
    protected function getSpecialPriceRepositoryService()
    {
        $this->services['Extcode\\CartProducts\\Domain\\Repository\\Product\\SpecialPriceRepository'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\CartProducts\Domain\Repository\Product\SpecialPriceRepository::class, ($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));

        $instance->injectPersistenceManager(($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'Extcode\CartProducts\EventListener\CheckProductAvailability' shared autowired service.
     *
     * @return \Extcode\CartProducts\EventListener\CheckProductAvailability
     */
    protected function getCheckProductAvailabilityService()
    {
        return $this->services['Extcode\\CartProducts\\EventListener\\CheckProductAvailability'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\CartProducts\EventListener\CheckProductAvailability::class, ($this->services['Extcode\\CartProducts\\Domain\\Repository\\Product\\ProductRepository'] ?? $this->getProductRepositoryService()), ($this->privates['Extcode\\CartProducts\\Utility\\ProductUtility'] ?? ($this->privates['Extcode\\CartProducts\\Utility\\ProductUtility'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\CartProducts\Utility\ProductUtility::class))));
    }

    /**
     * Gets the public 'Extcode\CartProducts\EventListener\Order\Stock\FlushCache' shared autowired service.
     *
     * @return \Extcode\CartProducts\EventListener\Order\Stock\FlushCache
     */
    protected function getFlushCacheService()
    {
        return $this->services['Extcode\\CartProducts\\EventListener\\Order\\Stock\\FlushCache'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\CartProducts\EventListener\Order\Stock\FlushCache::class);
    }

    /**
     * Gets the public 'Extcode\CartProducts\EventListener\Order\Stock\HandleStock' shared autowired service.
     *
     * @return \Extcode\CartProducts\EventListener\Order\Stock\HandleStock
     */
    protected function getHandleStockService()
    {
        return $this->services['Extcode\\CartProducts\\EventListener\\Order\\Stock\\HandleStock'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\CartProducts\EventListener\Order\Stock\HandleStock::class);
    }

    /**
     * Gets the public 'Extcode\CartProducts\EventListener\ProcessOrderCreate\FlushCache' shared autowired service.
     *
     * @return \Extcode\CartProducts\EventListener\ProcessOrderCreate\FlushCache
     */
    protected function getFlushCache2Service()
    {
        return $this->services['Extcode\\CartProducts\\EventListener\\ProcessOrderCreate\\FlushCache'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\CartProducts\EventListener\ProcessOrderCreate\FlushCache::class);
    }

    /**
     * Gets the public 'Extcode\CartProducts\EventListener\ProcessOrderCreate\HandleStock' shared autowired service.
     *
     * @return \Extcode\CartProducts\EventListener\ProcessOrderCreate\HandleStock
     */
    protected function getHandleStock2Service()
    {
        return $this->services['Extcode\\CartProducts\\EventListener\\ProcessOrderCreate\\HandleStock'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\CartProducts\EventListener\ProcessOrderCreate\HandleStock::class);
    }

    /**
     * Gets the public 'Extcode\CartProducts\EventListener\RetrieveProductsFromRequest' shared autowired service.
     *
     * @return \Extcode\CartProducts\EventListener\RetrieveProductsFromRequest
     */
    protected function getRetrieveProductsFromRequestService()
    {
        return $this->services['Extcode\\CartProducts\\EventListener\\RetrieveProductsFromRequest'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\CartProducts\EventListener\RetrieveProductsFromRequest::class, ($this->services['Extcode\\CartProducts\\Domain\\Repository\\Product\\ProductRepository'] ?? $this->getProductRepositoryService()), ($this->privates['Extcode\\CartProducts\\Utility\\ProductUtility'] ?? ($this->privates['Extcode\\CartProducts\\Utility\\ProductUtility'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\CartProducts\Utility\ProductUtility::class))));
    }

    /**
     * Gets the public 'Extcode\CartProducts\Updates\SlugUpdater' shared autowired service.
     *
     * @return \Extcode\CartProducts\Updates\SlugUpdater
     */
    protected function getSlugUpdaterService()
    {
        return $this->services['Extcode\\CartProducts\\Updates\\SlugUpdater'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\CartProducts\Updates\SlugUpdater::class);
    }

    /**
     * Gets the public 'Extcode\CartProducts\ViewHelpers\CanonicalTagViewHelper' autowired service.
     *
     * @return \Extcode\CartProducts\ViewHelpers\CanonicalTagViewHelper
     */
    protected function getCanonicalTagViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\CartProducts\ViewHelpers\CanonicalTagViewHelper::class);
    }

    /**
     * Gets the public 'Extcode\CartProducts\ViewHelpers\Form\VariantSelectViewHelper' autowired service.
     *
     * @return \Extcode\CartProducts\ViewHelpers\Form\VariantSelectViewHelper
     */
    protected function getVariantSelectViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\CartProducts\ViewHelpers\Form\VariantSelectViewHelper::class);
    }

    /**
     * Gets the public 'Extcode\CartProducts\ViewHelpers\Link\ProductViewHelper' autowired service.
     *
     * @return \Extcode\CartProducts\ViewHelpers\Link\ProductViewHelper
     */
    protected function getProductViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\CartProducts\ViewHelpers\Link\ProductViewHelper::class);
    }

    /**
     * Gets the public 'Extcode\CartProducts\ViewHelpers\Product\BestSpecialPriceDiscountViewHelper' autowired service.
     *
     * @return \Extcode\CartProducts\ViewHelpers\Product\BestSpecialPriceDiscountViewHelper
     */
    protected function getBestSpecialPriceDiscountViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\CartProducts\ViewHelpers\Product\BestSpecialPriceDiscountViewHelper::class);
    }

    /**
     * Gets the public 'Extcode\CartProducts\ViewHelpers\Product\BestSpecialPricePercentageDiscountViewHelper' autowired service.
     *
     * @return \Extcode\CartProducts\ViewHelpers\Product\BestSpecialPricePercentageDiscountViewHelper
     */
    protected function getBestSpecialPricePercentageDiscountViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\CartProducts\ViewHelpers\Product\BestSpecialPricePercentageDiscountViewHelper::class);
    }

    /**
     * Gets the public 'Extcode\CartProducts\ViewHelpers\Product\BestSpecialPriceViewHelper' autowired service.
     *
     * @return \Extcode\CartProducts\ViewHelpers\Product\BestSpecialPriceViewHelper
     */
    protected function getBestSpecialPriceViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\CartProducts\ViewHelpers\Product\BestSpecialPriceViewHelper::class);
    }

    /**
     * Gets the public 'Extcode\CartProducts\ViewHelpers\Product\IfBestSpecialPriceAvailableViewHelper' autowired service.
     *
     * @return \Extcode\CartProducts\ViewHelpers\Product\IfBestSpecialPriceAvailableViewHelper
     */
    protected function getIfBestSpecialPriceAvailableViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\CartProducts\ViewHelpers\Product\IfBestSpecialPriceAvailableViewHelper::class);
    }

    /**
     * Gets the public 'Extcode\Cart\Controller\Backend\ActionController' autowired service.
     *
     * @return \Extcode\Cart\Controller\Backend\ActionController
     */
    protected function getActionControllerService()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Controller\Backend\ActionController::class);

        $instance->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));
        $instance->injectSignalSlotDispatcher(($this->services['TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher'] ?? $this->getDispatcher2Service()));
        $instance->injectValidatorResolver(($this->services['TYPO3\\CMS\\Extbase\\Validation\\ValidatorResolver'] ?? $this->getValidatorResolverService()));
        $instance->injectViewResolver(($this->privates['TYPO3\\CMS\\Extbase\\Mvc\\View\\GenericViewResolver'] ?? $this->getGenericViewResolverService()));
        $instance->injectReflectionService(($this->services['TYPO3\\CMS\\Extbase\\Reflection\\ReflectionService'] ?? $this->getReflectionServiceService()));
        $instance->injectCacheService(($this->services['TYPO3\\CMS\\Extbase\\Service\\CacheService'] ?? $this->getCacheServiceService()));
        $instance->injectHashService(($this->services['TYPO3\\CMS\\Extbase\\Security\\Cryptography\\HashService'] ?? $this->getHashServiceService()));
        $instance->injectMvcPropertyMappingConfigurationService(($this->services['TYPO3\\CMS\\Extbase\\Mvc\\Controller\\MvcPropertyMappingConfigurationService'] ?? $this->getMvcPropertyMappingConfigurationServiceService()));
        $instance->injectEventDispatcher(($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service()));

        return $instance;
    }

    /**
     * Gets the public 'Extcode\Cart\Controller\Backend\Order\DocumentController' autowired service.
     *
     * @return \Extcode\Cart\Controller\Backend\Order\DocumentController
     */
    protected function getDocumentControllerService()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Controller\Backend\Order\DocumentController::class);

        $instance->injectPersistenceManager(($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()));
        $instance->injectItemRepository(($this->services['Extcode\\Cart\\Domain\\Repository\\Order\\ItemRepository'] ?? $this->getItemRepositoryService()));
        $instance->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));
        $instance->injectSignalSlotDispatcher(($this->services['TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher'] ?? $this->getDispatcher2Service()));
        $instance->injectValidatorResolver(($this->services['TYPO3\\CMS\\Extbase\\Validation\\ValidatorResolver'] ?? $this->getValidatorResolverService()));
        $instance->injectViewResolver(($this->privates['TYPO3\\CMS\\Extbase\\Mvc\\View\\GenericViewResolver'] ?? $this->getGenericViewResolverService()));
        $instance->injectReflectionService(($this->services['TYPO3\\CMS\\Extbase\\Reflection\\ReflectionService'] ?? $this->getReflectionServiceService()));
        $instance->injectCacheService(($this->services['TYPO3\\CMS\\Extbase\\Service\\CacheService'] ?? $this->getCacheServiceService()));
        $instance->injectHashService(($this->services['TYPO3\\CMS\\Extbase\\Security\\Cryptography\\HashService'] ?? $this->getHashServiceService()));
        $instance->injectMvcPropertyMappingConfigurationService(($this->services['TYPO3\\CMS\\Extbase\\Mvc\\Controller\\MvcPropertyMappingConfigurationService'] ?? $this->getMvcPropertyMappingConfigurationServiceService()));
        $instance->injectEventDispatcher(($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service()));

        return $instance;
    }

    /**
     * Gets the public 'Extcode\Cart\Controller\Backend\Order\OrderController' autowired service.
     *
     * @return \Extcode\Cart\Controller\Backend\Order\OrderController
     */
    protected function getOrderControllerService()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Controller\Backend\Order\OrderController::class);

        $instance->injectPersistenceManager(($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()));
        $instance->injectItemRepository(($this->services['Extcode\\Cart\\Domain\\Repository\\Order\\ItemRepository'] ?? $this->getItemRepositoryService()));
        $instance->injectOrderUtility(($this->privates['Extcode\\Cart\\Utility\\OrderUtility'] ?? $this->getOrderUtilityService()));
        $instance->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));
        $instance->injectSignalSlotDispatcher(($this->services['TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher'] ?? $this->getDispatcher2Service()));
        $instance->injectValidatorResolver(($this->services['TYPO3\\CMS\\Extbase\\Validation\\ValidatorResolver'] ?? $this->getValidatorResolverService()));
        $instance->injectViewResolver(($this->privates['TYPO3\\CMS\\Extbase\\Mvc\\View\\GenericViewResolver'] ?? $this->getGenericViewResolverService()));
        $instance->injectReflectionService(($this->services['TYPO3\\CMS\\Extbase\\Reflection\\ReflectionService'] ?? $this->getReflectionServiceService()));
        $instance->injectCacheService(($this->services['TYPO3\\CMS\\Extbase\\Service\\CacheService'] ?? $this->getCacheServiceService()));
        $instance->injectHashService(($this->services['TYPO3\\CMS\\Extbase\\Security\\Cryptography\\HashService'] ?? $this->getHashServiceService()));
        $instance->injectMvcPropertyMappingConfigurationService(($this->services['TYPO3\\CMS\\Extbase\\Mvc\\Controller\\MvcPropertyMappingConfigurationService'] ?? $this->getMvcPropertyMappingConfigurationServiceService()));
        $instance->injectEventDispatcher(($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service()));

        return $instance;
    }

    /**
     * Gets the public 'Extcode\Cart\Controller\Backend\Order\PaymentController' autowired service.
     *
     * @return \Extcode\Cart\Controller\Backend\Order\PaymentController
     */
    protected function getPaymentControllerService()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Controller\Backend\Order\PaymentController::class);

        $instance->injectPaymentRepository(($this->services['Extcode\\Cart\\Domain\\Repository\\Order\\PaymentRepository'] ?? $this->getPaymentRepositoryService()));
        $instance->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));
        $instance->injectSignalSlotDispatcher(($this->services['TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher'] ?? $this->getDispatcher2Service()));
        $instance->injectValidatorResolver(($this->services['TYPO3\\CMS\\Extbase\\Validation\\ValidatorResolver'] ?? $this->getValidatorResolverService()));
        $instance->injectViewResolver(($this->privates['TYPO3\\CMS\\Extbase\\Mvc\\View\\GenericViewResolver'] ?? $this->getGenericViewResolverService()));
        $instance->injectReflectionService(($this->services['TYPO3\\CMS\\Extbase\\Reflection\\ReflectionService'] ?? $this->getReflectionServiceService()));
        $instance->injectCacheService(($this->services['TYPO3\\CMS\\Extbase\\Service\\CacheService'] ?? $this->getCacheServiceService()));
        $instance->injectHashService(($this->services['TYPO3\\CMS\\Extbase\\Security\\Cryptography\\HashService'] ?? $this->getHashServiceService()));
        $instance->injectMvcPropertyMappingConfigurationService(($this->services['TYPO3\\CMS\\Extbase\\Mvc\\Controller\\MvcPropertyMappingConfigurationService'] ?? $this->getMvcPropertyMappingConfigurationServiceService()));
        $instance->injectEventDispatcher(($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service()));

        return $instance;
    }

    /**
     * Gets the public 'Extcode\Cart\Controller\Backend\Order\ShippingController' autowired service.
     *
     * @return \Extcode\Cart\Controller\Backend\Order\ShippingController
     */
    protected function getShippingControllerService()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Controller\Backend\Order\ShippingController::class);

        $instance->injectShippingRepository(($this->services['Extcode\\Cart\\Domain\\Repository\\Order\\ShippingRepository'] ?? $this->getShippingRepositoryService()));
        $instance->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));
        $instance->injectSignalSlotDispatcher(($this->services['TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher'] ?? $this->getDispatcher2Service()));
        $instance->injectValidatorResolver(($this->services['TYPO3\\CMS\\Extbase\\Validation\\ValidatorResolver'] ?? $this->getValidatorResolverService()));
        $instance->injectViewResolver(($this->privates['TYPO3\\CMS\\Extbase\\Mvc\\View\\GenericViewResolver'] ?? $this->getGenericViewResolverService()));
        $instance->injectReflectionService(($this->services['TYPO3\\CMS\\Extbase\\Reflection\\ReflectionService'] ?? $this->getReflectionServiceService()));
        $instance->injectCacheService(($this->services['TYPO3\\CMS\\Extbase\\Service\\CacheService'] ?? $this->getCacheServiceService()));
        $instance->injectHashService(($this->services['TYPO3\\CMS\\Extbase\\Security\\Cryptography\\HashService'] ?? $this->getHashServiceService()));
        $instance->injectMvcPropertyMappingConfigurationService(($this->services['TYPO3\\CMS\\Extbase\\Mvc\\Controller\\MvcPropertyMappingConfigurationService'] ?? $this->getMvcPropertyMappingConfigurationServiceService()));
        $instance->injectEventDispatcher(($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service()));

        return $instance;
    }

    /**
     * Gets the public 'Extcode\Cart\Controller\Cart\ActionController' autowired service.
     *
     * @return \Extcode\Cart\Controller\Cart\ActionController
     */
    protected function getActionController2Service()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Controller\Cart\ActionController::class);

        $instance->injectSessionHandler(($this->services['Extcode\\Cart\\Service\\SessionHandler'] ?? ($this->services['Extcode\\Cart\\Service\\SessionHandler'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Service\SessionHandler::class))));
        $instance->injectCartUtility(($this->privates['Extcode\\Cart\\Utility\\CartUtility'] ?? $this->getCartUtilityService()));
        $instance->injectParserUtility(($this->privates['Extcode\\Cart\\Utility\\ParserUtility'] ?? ($this->privates['Extcode\\Cart\\Utility\\ParserUtility'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Utility\ParserUtility::class))));
        $instance->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));
        $instance->injectSignalSlotDispatcher(($this->services['TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher'] ?? $this->getDispatcher2Service()));
        $instance->injectValidatorResolver(($this->services['TYPO3\\CMS\\Extbase\\Validation\\ValidatorResolver'] ?? $this->getValidatorResolverService()));
        $instance->injectViewResolver(($this->privates['TYPO3\\CMS\\Extbase\\Mvc\\View\\GenericViewResolver'] ?? $this->getGenericViewResolverService()));
        $instance->injectReflectionService(($this->services['TYPO3\\CMS\\Extbase\\Reflection\\ReflectionService'] ?? $this->getReflectionServiceService()));
        $instance->injectCacheService(($this->services['TYPO3\\CMS\\Extbase\\Service\\CacheService'] ?? $this->getCacheServiceService()));
        $instance->injectHashService(($this->services['TYPO3\\CMS\\Extbase\\Security\\Cryptography\\HashService'] ?? $this->getHashServiceService()));
        $instance->injectMvcPropertyMappingConfigurationService(($this->services['TYPO3\\CMS\\Extbase\\Mvc\\Controller\\MvcPropertyMappingConfigurationService'] ?? $this->getMvcPropertyMappingConfigurationServiceService()));
        $instance->injectEventDispatcher(($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service()));

        return $instance;
    }

    /**
     * Gets the public 'Extcode\Cart\Controller\Cart\CartController' autowired service.
     *
     * @return \Extcode\Cart\Controller\Cart\CartController
     */
    protected function getCartControllerService()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Controller\Cart\CartController::class);

        $instance->injectSessionHandler(($this->services['Extcode\\Cart\\Service\\SessionHandler'] ?? ($this->services['Extcode\\Cart\\Service\\SessionHandler'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Service\SessionHandler::class))));
        $instance->injectCartUtility(($this->privates['Extcode\\Cart\\Utility\\CartUtility'] ?? $this->getCartUtilityService()));
        $instance->injectParserUtility(($this->privates['Extcode\\Cart\\Utility\\ParserUtility'] ?? ($this->privates['Extcode\\Cart\\Utility\\ParserUtility'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Utility\ParserUtility::class))));
        $instance->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));
        $instance->injectSignalSlotDispatcher(($this->services['TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher'] ?? $this->getDispatcher2Service()));
        $instance->injectValidatorResolver(($this->services['TYPO3\\CMS\\Extbase\\Validation\\ValidatorResolver'] ?? $this->getValidatorResolverService()));
        $instance->injectViewResolver(($this->privates['TYPO3\\CMS\\Extbase\\Mvc\\View\\GenericViewResolver'] ?? $this->getGenericViewResolverService()));
        $instance->injectReflectionService(($this->services['TYPO3\\CMS\\Extbase\\Reflection\\ReflectionService'] ?? $this->getReflectionServiceService()));
        $instance->injectCacheService(($this->services['TYPO3\\CMS\\Extbase\\Service\\CacheService'] ?? $this->getCacheServiceService()));
        $instance->injectHashService(($this->services['TYPO3\\CMS\\Extbase\\Security\\Cryptography\\HashService'] ?? $this->getHashServiceService()));
        $instance->injectMvcPropertyMappingConfigurationService(($this->services['TYPO3\\CMS\\Extbase\\Mvc\\Controller\\MvcPropertyMappingConfigurationService'] ?? $this->getMvcPropertyMappingConfigurationServiceService()));
        $instance->injectEventDispatcher(($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service()));

        return $instance;
    }

    /**
     * Gets the public 'Extcode\Cart\Controller\Cart\CartPreviewController' autowired service.
     *
     * @return \Extcode\Cart\Controller\Cart\CartPreviewController
     */
    protected function getCartPreviewControllerService()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Controller\Cart\CartPreviewController::class);

        $instance->injectOrderUtility(($this->privates['Extcode\\Cart\\Utility\\OrderUtility'] ?? $this->getOrderUtilityService()));
        $instance->injectSessionHandler(($this->services['Extcode\\Cart\\Service\\SessionHandler'] ?? ($this->services['Extcode\\Cart\\Service\\SessionHandler'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Service\SessionHandler::class))));
        $instance->injectCartUtility(($this->privates['Extcode\\Cart\\Utility\\CartUtility'] ?? $this->getCartUtilityService()));
        $instance->injectParserUtility(($this->privates['Extcode\\Cart\\Utility\\ParserUtility'] ?? ($this->privates['Extcode\\Cart\\Utility\\ParserUtility'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Utility\ParserUtility::class))));
        $instance->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));
        $instance->injectSignalSlotDispatcher(($this->services['TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher'] ?? $this->getDispatcher2Service()));
        $instance->injectValidatorResolver(($this->services['TYPO3\\CMS\\Extbase\\Validation\\ValidatorResolver'] ?? $this->getValidatorResolverService()));
        $instance->injectViewResolver(($this->privates['TYPO3\\CMS\\Extbase\\Mvc\\View\\GenericViewResolver'] ?? $this->getGenericViewResolverService()));
        $instance->injectReflectionService(($this->services['TYPO3\\CMS\\Extbase\\Reflection\\ReflectionService'] ?? $this->getReflectionServiceService()));
        $instance->injectCacheService(($this->services['TYPO3\\CMS\\Extbase\\Service\\CacheService'] ?? $this->getCacheServiceService()));
        $instance->injectHashService(($this->services['TYPO3\\CMS\\Extbase\\Security\\Cryptography\\HashService'] ?? $this->getHashServiceService()));
        $instance->injectMvcPropertyMappingConfigurationService(($this->services['TYPO3\\CMS\\Extbase\\Mvc\\Controller\\MvcPropertyMappingConfigurationService'] ?? $this->getMvcPropertyMappingConfigurationServiceService()));
        $instance->injectEventDispatcher(($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service()));

        return $instance;
    }

    /**
     * Gets the public 'Extcode\Cart\Controller\Cart\CountryController' autowired service.
     *
     * @return \Extcode\Cart\Controller\Cart\CountryController
     */
    protected function getCountryControllerService()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Controller\Cart\CountryController::class);

        $instance->injectSessionHandler(($this->services['Extcode\\Cart\\Service\\SessionHandler'] ?? ($this->services['Extcode\\Cart\\Service\\SessionHandler'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Service\SessionHandler::class))));
        $instance->injectCartUtility(($this->privates['Extcode\\Cart\\Utility\\CartUtility'] ?? $this->getCartUtilityService()));
        $instance->injectParserUtility(($this->privates['Extcode\\Cart\\Utility\\ParserUtility'] ?? ($this->privates['Extcode\\Cart\\Utility\\ParserUtility'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Utility\ParserUtility::class))));
        $instance->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));
        $instance->injectSignalSlotDispatcher(($this->services['TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher'] ?? $this->getDispatcher2Service()));
        $instance->injectValidatorResolver(($this->services['TYPO3\\CMS\\Extbase\\Validation\\ValidatorResolver'] ?? $this->getValidatorResolverService()));
        $instance->injectViewResolver(($this->privates['TYPO3\\CMS\\Extbase\\Mvc\\View\\GenericViewResolver'] ?? $this->getGenericViewResolverService()));
        $instance->injectReflectionService(($this->services['TYPO3\\CMS\\Extbase\\Reflection\\ReflectionService'] ?? $this->getReflectionServiceService()));
        $instance->injectCacheService(($this->services['TYPO3\\CMS\\Extbase\\Service\\CacheService'] ?? $this->getCacheServiceService()));
        $instance->injectHashService(($this->services['TYPO3\\CMS\\Extbase\\Security\\Cryptography\\HashService'] ?? $this->getHashServiceService()));
        $instance->injectMvcPropertyMappingConfigurationService(($this->services['TYPO3\\CMS\\Extbase\\Mvc\\Controller\\MvcPropertyMappingConfigurationService'] ?? $this->getMvcPropertyMappingConfigurationServiceService()));
        $instance->injectEventDispatcher(($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service()));

        return $instance;
    }

    /**
     * Gets the public 'Extcode\Cart\Controller\Cart\CouponController' autowired service.
     *
     * @return \Extcode\Cart\Controller\Cart\CouponController
     */
    protected function getCouponControllerService()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Controller\Cart\CouponController::class);

        $instance->injectCouponRepository(($this->services['Extcode\\Cart\\Domain\\Repository\\CouponRepository'] ?? $this->getCouponRepositoryService()));
        $instance->injectSessionHandler(($this->services['Extcode\\Cart\\Service\\SessionHandler'] ?? ($this->services['Extcode\\Cart\\Service\\SessionHandler'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Service\SessionHandler::class))));
        $instance->injectCartUtility(($this->privates['Extcode\\Cart\\Utility\\CartUtility'] ?? $this->getCartUtilityService()));
        $instance->injectParserUtility(($this->privates['Extcode\\Cart\\Utility\\ParserUtility'] ?? ($this->privates['Extcode\\Cart\\Utility\\ParserUtility'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Utility\ParserUtility::class))));
        $instance->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));
        $instance->injectSignalSlotDispatcher(($this->services['TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher'] ?? $this->getDispatcher2Service()));
        $instance->injectValidatorResolver(($this->services['TYPO3\\CMS\\Extbase\\Validation\\ValidatorResolver'] ?? $this->getValidatorResolverService()));
        $instance->injectViewResolver(($this->privates['TYPO3\\CMS\\Extbase\\Mvc\\View\\GenericViewResolver'] ?? $this->getGenericViewResolverService()));
        $instance->injectReflectionService(($this->services['TYPO3\\CMS\\Extbase\\Reflection\\ReflectionService'] ?? $this->getReflectionServiceService()));
        $instance->injectCacheService(($this->services['TYPO3\\CMS\\Extbase\\Service\\CacheService'] ?? $this->getCacheServiceService()));
        $instance->injectHashService(($this->services['TYPO3\\CMS\\Extbase\\Security\\Cryptography\\HashService'] ?? $this->getHashServiceService()));
        $instance->injectMvcPropertyMappingConfigurationService(($this->services['TYPO3\\CMS\\Extbase\\Mvc\\Controller\\MvcPropertyMappingConfigurationService'] ?? $this->getMvcPropertyMappingConfigurationServiceService()));
        $instance->injectEventDispatcher(($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service()));

        return $instance;
    }

    /**
     * Gets the public 'Extcode\Cart\Controller\Cart\CurrencyController' autowired service.
     *
     * @return \Extcode\Cart\Controller\Cart\CurrencyController
     */
    protected function getCurrencyControllerService()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Controller\Cart\CurrencyController::class);

        $instance->injectCurrencyUtility(($this->privates['Extcode\\Cart\\Utility\\CurrencyUtility'] ?? ($this->privates['Extcode\\Cart\\Utility\\CurrencyUtility'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Utility\CurrencyUtility::class))));
        $instance->injectSessionHandler(($this->services['Extcode\\Cart\\Service\\SessionHandler'] ?? ($this->services['Extcode\\Cart\\Service\\SessionHandler'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Service\SessionHandler::class))));
        $instance->injectCartUtility(($this->privates['Extcode\\Cart\\Utility\\CartUtility'] ?? $this->getCartUtilityService()));
        $instance->injectParserUtility(($this->privates['Extcode\\Cart\\Utility\\ParserUtility'] ?? ($this->privates['Extcode\\Cart\\Utility\\ParserUtility'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Utility\ParserUtility::class))));
        $instance->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));
        $instance->injectSignalSlotDispatcher(($this->services['TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher'] ?? $this->getDispatcher2Service()));
        $instance->injectValidatorResolver(($this->services['TYPO3\\CMS\\Extbase\\Validation\\ValidatorResolver'] ?? $this->getValidatorResolverService()));
        $instance->injectViewResolver(($this->privates['TYPO3\\CMS\\Extbase\\Mvc\\View\\GenericViewResolver'] ?? $this->getGenericViewResolverService()));
        $instance->injectReflectionService(($this->services['TYPO3\\CMS\\Extbase\\Reflection\\ReflectionService'] ?? $this->getReflectionServiceService()));
        $instance->injectCacheService(($this->services['TYPO3\\CMS\\Extbase\\Service\\CacheService'] ?? $this->getCacheServiceService()));
        $instance->injectHashService(($this->services['TYPO3\\CMS\\Extbase\\Security\\Cryptography\\HashService'] ?? $this->getHashServiceService()));
        $instance->injectMvcPropertyMappingConfigurationService(($this->services['TYPO3\\CMS\\Extbase\\Mvc\\Controller\\MvcPropertyMappingConfigurationService'] ?? $this->getMvcPropertyMappingConfigurationServiceService()));
        $instance->injectEventDispatcher(($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service()));

        return $instance;
    }

    /**
     * Gets the public 'Extcode\Cart\Controller\Cart\OrderController' autowired service.
     *
     * @return \Extcode\Cart\Controller\Cart\OrderController
     */
    protected function getOrderController2Service()
    {
        $a = ($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service());

        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Controller\Cart\OrderController::class, $a);

        $instance->injectSessionHandler(($this->services['Extcode\\Cart\\Service\\SessionHandler'] ?? ($this->services['Extcode\\Cart\\Service\\SessionHandler'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Service\SessionHandler::class))));
        $instance->injectCartUtility(($this->privates['Extcode\\Cart\\Utility\\CartUtility'] ?? $this->getCartUtilityService()));
        $instance->injectParserUtility(($this->privates['Extcode\\Cart\\Utility\\ParserUtility'] ?? ($this->privates['Extcode\\Cart\\Utility\\ParserUtility'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Utility\ParserUtility::class))));
        $instance->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));
        $instance->injectSignalSlotDispatcher(($this->services['TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher'] ?? $this->getDispatcher2Service()));
        $instance->injectValidatorResolver(($this->services['TYPO3\\CMS\\Extbase\\Validation\\ValidatorResolver'] ?? $this->getValidatorResolverService()));
        $instance->injectViewResolver(($this->privates['TYPO3\\CMS\\Extbase\\Mvc\\View\\GenericViewResolver'] ?? $this->getGenericViewResolverService()));
        $instance->injectReflectionService(($this->services['TYPO3\\CMS\\Extbase\\Reflection\\ReflectionService'] ?? $this->getReflectionServiceService()));
        $instance->injectCacheService(($this->services['TYPO3\\CMS\\Extbase\\Service\\CacheService'] ?? $this->getCacheServiceService()));
        $instance->injectHashService(($this->services['TYPO3\\CMS\\Extbase\\Security\\Cryptography\\HashService'] ?? $this->getHashServiceService()));
        $instance->injectMvcPropertyMappingConfigurationService(($this->services['TYPO3\\CMS\\Extbase\\Mvc\\Controller\\MvcPropertyMappingConfigurationService'] ?? $this->getMvcPropertyMappingConfigurationServiceService()));
        $instance->injectEventDispatcher($a);

        return $instance;
    }

    /**
     * Gets the public 'Extcode\Cart\Controller\Cart\PaymentController' autowired service.
     *
     * @return \Extcode\Cart\Controller\Cart\PaymentController
     */
    protected function getPaymentController2Service()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Controller\Cart\PaymentController::class);

        $instance->injectSessionHandler(($this->services['Extcode\\Cart\\Service\\SessionHandler'] ?? ($this->services['Extcode\\Cart\\Service\\SessionHandler'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Service\SessionHandler::class))));
        $instance->injectCartUtility(($this->privates['Extcode\\Cart\\Utility\\CartUtility'] ?? $this->getCartUtilityService()));
        $instance->injectParserUtility(($this->privates['Extcode\\Cart\\Utility\\ParserUtility'] ?? ($this->privates['Extcode\\Cart\\Utility\\ParserUtility'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Utility\ParserUtility::class))));
        $instance->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));
        $instance->injectSignalSlotDispatcher(($this->services['TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher'] ?? $this->getDispatcher2Service()));
        $instance->injectValidatorResolver(($this->services['TYPO3\\CMS\\Extbase\\Validation\\ValidatorResolver'] ?? $this->getValidatorResolverService()));
        $instance->injectViewResolver(($this->privates['TYPO3\\CMS\\Extbase\\Mvc\\View\\GenericViewResolver'] ?? $this->getGenericViewResolverService()));
        $instance->injectReflectionService(($this->services['TYPO3\\CMS\\Extbase\\Reflection\\ReflectionService'] ?? $this->getReflectionServiceService()));
        $instance->injectCacheService(($this->services['TYPO3\\CMS\\Extbase\\Service\\CacheService'] ?? $this->getCacheServiceService()));
        $instance->injectHashService(($this->services['TYPO3\\CMS\\Extbase\\Security\\Cryptography\\HashService'] ?? $this->getHashServiceService()));
        $instance->injectMvcPropertyMappingConfigurationService(($this->services['TYPO3\\CMS\\Extbase\\Mvc\\Controller\\MvcPropertyMappingConfigurationService'] ?? $this->getMvcPropertyMappingConfigurationServiceService()));
        $instance->injectEventDispatcher(($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service()));

        return $instance;
    }

    /**
     * Gets the public 'Extcode\Cart\Controller\Cart\ProductController' autowired service.
     *
     * @return \Extcode\Cart\Controller\Cart\ProductController
     */
    protected function getProductController2Service()
    {
        $a = ($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service());

        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Controller\Cart\ProductController::class, $a);

        $instance->injectSessionHandler(($this->services['Extcode\\Cart\\Service\\SessionHandler'] ?? ($this->services['Extcode\\Cart\\Service\\SessionHandler'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Service\SessionHandler::class))));
        $instance->injectCartUtility(($this->privates['Extcode\\Cart\\Utility\\CartUtility'] ?? $this->getCartUtilityService()));
        $instance->injectParserUtility(($this->privates['Extcode\\Cart\\Utility\\ParserUtility'] ?? ($this->privates['Extcode\\Cart\\Utility\\ParserUtility'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Utility\ParserUtility::class))));
        $instance->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));
        $instance->injectSignalSlotDispatcher(($this->services['TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher'] ?? $this->getDispatcher2Service()));
        $instance->injectValidatorResolver(($this->services['TYPO3\\CMS\\Extbase\\Validation\\ValidatorResolver'] ?? $this->getValidatorResolverService()));
        $instance->injectViewResolver(($this->privates['TYPO3\\CMS\\Extbase\\Mvc\\View\\GenericViewResolver'] ?? $this->getGenericViewResolverService()));
        $instance->injectReflectionService(($this->services['TYPO3\\CMS\\Extbase\\Reflection\\ReflectionService'] ?? $this->getReflectionServiceService()));
        $instance->injectCacheService(($this->services['TYPO3\\CMS\\Extbase\\Service\\CacheService'] ?? $this->getCacheServiceService()));
        $instance->injectHashService(($this->services['TYPO3\\CMS\\Extbase\\Security\\Cryptography\\HashService'] ?? $this->getHashServiceService()));
        $instance->injectMvcPropertyMappingConfigurationService(($this->services['TYPO3\\CMS\\Extbase\\Mvc\\Controller\\MvcPropertyMappingConfigurationService'] ?? $this->getMvcPropertyMappingConfigurationServiceService()));
        $instance->injectEventDispatcher($a);

        return $instance;
    }

    /**
     * Gets the public 'Extcode\Cart\Controller\Cart\ShippingController' autowired service.
     *
     * @return \Extcode\Cart\Controller\Cart\ShippingController
     */
    protected function getShippingController2Service()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Controller\Cart\ShippingController::class);

        $instance->injectSessionHandler(($this->services['Extcode\\Cart\\Service\\SessionHandler'] ?? ($this->services['Extcode\\Cart\\Service\\SessionHandler'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Service\SessionHandler::class))));
        $instance->injectCartUtility(($this->privates['Extcode\\Cart\\Utility\\CartUtility'] ?? $this->getCartUtilityService()));
        $instance->injectParserUtility(($this->privates['Extcode\\Cart\\Utility\\ParserUtility'] ?? ($this->privates['Extcode\\Cart\\Utility\\ParserUtility'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Utility\ParserUtility::class))));
        $instance->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));
        $instance->injectSignalSlotDispatcher(($this->services['TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher'] ?? $this->getDispatcher2Service()));
        $instance->injectValidatorResolver(($this->services['TYPO3\\CMS\\Extbase\\Validation\\ValidatorResolver'] ?? $this->getValidatorResolverService()));
        $instance->injectViewResolver(($this->privates['TYPO3\\CMS\\Extbase\\Mvc\\View\\GenericViewResolver'] ?? $this->getGenericViewResolverService()));
        $instance->injectReflectionService(($this->services['TYPO3\\CMS\\Extbase\\Reflection\\ReflectionService'] ?? $this->getReflectionServiceService()));
        $instance->injectCacheService(($this->services['TYPO3\\CMS\\Extbase\\Service\\CacheService'] ?? $this->getCacheServiceService()));
        $instance->injectHashService(($this->services['TYPO3\\CMS\\Extbase\\Security\\Cryptography\\HashService'] ?? $this->getHashServiceService()));
        $instance->injectMvcPropertyMappingConfigurationService(($this->services['TYPO3\\CMS\\Extbase\\Mvc\\Controller\\MvcPropertyMappingConfigurationService'] ?? $this->getMvcPropertyMappingConfigurationServiceService()));
        $instance->injectEventDispatcher(($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service()));

        return $instance;
    }

    /**
     * Gets the public 'Extcode\Cart\Controller\Order\OrderController' autowired service.
     *
     * @return \Extcode\Cart\Controller\Order\OrderController
     */
    protected function getOrderController3Service()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Controller\Order\OrderController::class);

        $instance->injectItemRepository(($this->services['Extcode\\Cart\\Domain\\Repository\\Order\\ItemRepository'] ?? $this->getItemRepositoryService()));
        $instance->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));
        $instance->injectSignalSlotDispatcher(($this->services['TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher'] ?? $this->getDispatcher2Service()));
        $instance->injectValidatorResolver(($this->services['TYPO3\\CMS\\Extbase\\Validation\\ValidatorResolver'] ?? $this->getValidatorResolverService()));
        $instance->injectViewResolver(($this->privates['TYPO3\\CMS\\Extbase\\Mvc\\View\\GenericViewResolver'] ?? $this->getGenericViewResolverService()));
        $instance->injectReflectionService(($this->services['TYPO3\\CMS\\Extbase\\Reflection\\ReflectionService'] ?? $this->getReflectionServiceService()));
        $instance->injectCacheService(($this->services['TYPO3\\CMS\\Extbase\\Service\\CacheService'] ?? $this->getCacheServiceService()));
        $instance->injectHashService(($this->services['TYPO3\\CMS\\Extbase\\Security\\Cryptography\\HashService'] ?? $this->getHashServiceService()));
        $instance->injectMvcPropertyMappingConfigurationService(($this->services['TYPO3\\CMS\\Extbase\\Mvc\\Controller\\MvcPropertyMappingConfigurationService'] ?? $this->getMvcPropertyMappingConfigurationServiceService()));
        $instance->injectEventDispatcher(($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service()));

        return $instance;
    }

    /**
     * Gets the public 'Extcode\Cart\Controller\Order\PaymentController' autowired service.
     *
     * @return \Extcode\Cart\Controller\Order\PaymentController
     */
    protected function getPaymentController3Service()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Controller\Order\PaymentController::class);

        $instance->injectPersistenceManager(($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()));
        $instance->injectCartRepository(($this->services['Extcode\\Cart\\Domain\\Repository\\CartRepository'] ?? $this->getCartRepositoryService()));
        $instance->injectItemRepository(($this->services['Extcode\\Cart\\Domain\\Repository\\Order\\ItemRepository'] ?? $this->getItemRepositoryService()));
        $instance->injectPaymentRepository(($this->services['Extcode\\Cart\\Domain\\Repository\\Order\\PaymentRepository'] ?? $this->getPaymentRepositoryService()));
        $instance->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));
        $instance->injectSignalSlotDispatcher(($this->services['TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher'] ?? $this->getDispatcher2Service()));
        $instance->injectValidatorResolver(($this->services['TYPO3\\CMS\\Extbase\\Validation\\ValidatorResolver'] ?? $this->getValidatorResolverService()));
        $instance->injectViewResolver(($this->privates['TYPO3\\CMS\\Extbase\\Mvc\\View\\GenericViewResolver'] ?? $this->getGenericViewResolverService()));
        $instance->injectReflectionService(($this->services['TYPO3\\CMS\\Extbase\\Reflection\\ReflectionService'] ?? $this->getReflectionServiceService()));
        $instance->injectCacheService(($this->services['TYPO3\\CMS\\Extbase\\Service\\CacheService'] ?? $this->getCacheServiceService()));
        $instance->injectHashService(($this->services['TYPO3\\CMS\\Extbase\\Security\\Cryptography\\HashService'] ?? $this->getHashServiceService()));
        $instance->injectMvcPropertyMappingConfigurationService(($this->services['TYPO3\\CMS\\Extbase\\Mvc\\Controller\\MvcPropertyMappingConfigurationService'] ?? $this->getMvcPropertyMappingConfigurationServiceService()));
        $instance->injectEventDispatcher(($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service()));

        return $instance;
    }

    /**
     * Gets the public 'Extcode\Cart\Domain\Repository\CartRepository' shared autowired service.
     *
     * @return \Extcode\Cart\Domain\Repository\CartRepository
     */
    protected function getCartRepositoryService()
    {
        $this->services['Extcode\\Cart\\Domain\\Repository\\CartRepository'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Domain\Repository\CartRepository::class, ($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));

        $instance->injectPersistenceManager(($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'Extcode\Cart\Domain\Repository\CouponRepository' shared autowired service.
     *
     * @return \Extcode\Cart\Domain\Repository\CouponRepository
     */
    protected function getCouponRepositoryService()
    {
        $this->services['Extcode\\Cart\\Domain\\Repository\\CouponRepository'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Domain\Repository\CouponRepository::class, ($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));

        $instance->injectPersistenceManager(($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'Extcode\Cart\Domain\Repository\Order\BillingAddressRepository' shared autowired service.
     *
     * @return \Extcode\Cart\Domain\Repository\Order\BillingAddressRepository
     */
    protected function getBillingAddressRepositoryService()
    {
        $this->services['Extcode\\Cart\\Domain\\Repository\\Order\\BillingAddressRepository'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Domain\Repository\Order\BillingAddressRepository::class, ($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));

        $instance->injectPersistenceManager(($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'Extcode\Cart\Domain\Repository\Order\DiscountRepository' shared autowired service.
     *
     * @return \Extcode\Cart\Domain\Repository\Order\DiscountRepository
     */
    protected function getDiscountRepositoryService()
    {
        $this->services['Extcode\\Cart\\Domain\\Repository\\Order\\DiscountRepository'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Domain\Repository\Order\DiscountRepository::class, ($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));

        $instance->injectPersistenceManager(($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'Extcode\Cart\Domain\Repository\Order\ItemRepository' shared autowired service.
     *
     * @return \Extcode\Cart\Domain\Repository\Order\ItemRepository
     */
    protected function getItemRepositoryService()
    {
        $this->services['Extcode\\Cart\\Domain\\Repository\\Order\\ItemRepository'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Domain\Repository\Order\ItemRepository::class, ($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));

        $instance->injectPersistenceManager(($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'Extcode\Cart\Domain\Repository\Order\PaymentRepository' shared autowired service.
     *
     * @return \Extcode\Cart\Domain\Repository\Order\PaymentRepository
     */
    protected function getPaymentRepositoryService()
    {
        $this->services['Extcode\\Cart\\Domain\\Repository\\Order\\PaymentRepository'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Domain\Repository\Order\PaymentRepository::class, ($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));

        $instance->injectPersistenceManager(($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'Extcode\Cart\Domain\Repository\Order\ProductAdditionalRepository' shared autowired service.
     *
     * @return \Extcode\Cart\Domain\Repository\Order\ProductAdditionalRepository
     */
    protected function getProductAdditionalRepositoryService()
    {
        $this->services['Extcode\\Cart\\Domain\\Repository\\Order\\ProductAdditionalRepository'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Domain\Repository\Order\ProductAdditionalRepository::class, ($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));

        $instance->injectPersistenceManager(($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'Extcode\Cart\Domain\Repository\Order\ProductRepository' shared autowired service.
     *
     * @return \Extcode\Cart\Domain\Repository\Order\ProductRepository
     */
    protected function getProductRepository2Service()
    {
        $this->services['Extcode\\Cart\\Domain\\Repository\\Order\\ProductRepository'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Domain\Repository\Order\ProductRepository::class, ($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));

        $instance->injectPersistenceManager(($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'Extcode\Cart\Domain\Repository\Order\ShippingAddressRepository' shared autowired service.
     *
     * @return \Extcode\Cart\Domain\Repository\Order\ShippingAddressRepository
     */
    protected function getShippingAddressRepositoryService()
    {
        $this->services['Extcode\\Cart\\Domain\\Repository\\Order\\ShippingAddressRepository'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Domain\Repository\Order\ShippingAddressRepository::class, ($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));

        $instance->injectPersistenceManager(($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'Extcode\Cart\Domain\Repository\Order\ShippingRepository' shared autowired service.
     *
     * @return \Extcode\Cart\Domain\Repository\Order\ShippingRepository
     */
    protected function getShippingRepositoryService()
    {
        $this->services['Extcode\\Cart\\Domain\\Repository\\Order\\ShippingRepository'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Domain\Repository\Order\ShippingRepository::class, ($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));

        $instance->injectPersistenceManager(($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'Extcode\Cart\Domain\Repository\Order\TaxClassRepository' shared autowired service.
     *
     * @return \Extcode\Cart\Domain\Repository\Order\TaxClassRepository
     */
    protected function getTaxClassRepositoryService()
    {
        $this->services['Extcode\\Cart\\Domain\\Repository\\Order\\TaxClassRepository'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Domain\Repository\Order\TaxClassRepository::class, ($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));

        $instance->injectPersistenceManager(($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'Extcode\Cart\Domain\Repository\Order\TaxRepository' shared autowired service.
     *
     * @return \Extcode\Cart\Domain\Repository\Order\TaxRepository
     */
    protected function getTaxRepositoryService()
    {
        $this->services['Extcode\\Cart\\Domain\\Repository\\Order\\TaxRepository'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Domain\Repository\Order\TaxRepository::class, ($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));

        $instance->injectPersistenceManager(($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'Extcode\Cart\Domain\Repository\Order\TransactionRepository' shared autowired service.
     *
     * @return \Extcode\Cart\Domain\Repository\Order\TransactionRepository
     */
    protected function getTransactionRepositoryService()
    {
        $this->services['Extcode\\Cart\\Domain\\Repository\\Order\\TransactionRepository'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Domain\Repository\Order\TransactionRepository::class, ($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));

        $instance->injectPersistenceManager(($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'Extcode\Cart\EventListener\Order\Create\Order' shared autowired service.
     *
     * @return \Extcode\Cart\EventListener\ProcessOrderCreate\Order
     */
    protected function getOrderService()
    {
        return $this->services['Extcode\\Cart\\EventListener\\Order\\Create\\Order'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\EventListener\ProcessOrderCreate\Order::class, ($this->privates['Extcode\\Cart\\Utility\\OrderUtility'] ?? $this->getOrderUtilityService()));
    }

    /**
     * Gets the public 'Extcode\Cart\EventListener\Order\Create\OrderNumber' shared autowired service.
     *
     * @return \Extcode\Cart\EventListener\ProcessOrderCreate\OrderNumber
     */
    protected function getOrderNumberService()
    {
        return $this->services['Extcode\\Cart\\EventListener\\Order\\Create\\OrderNumber'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\EventListener\ProcessOrderCreate\OrderNumber::class, ($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()), ($this->services['Extcode\\Cart\\Domain\\Repository\\Order\\ItemRepository'] ?? $this->getItemRepositoryService()), ($this->privates['Extcode\\Cart\\Utility\\OrderUtility'] ?? $this->getOrderUtilityService()));
    }

    /**
     * Gets the public 'Extcode\Cart\EventListener\Order\Finish\ClearCart' shared autowired service.
     *
     * @return \Extcode\Cart\EventListener\ProcessOrderCreate\ClearCart
     */
    protected function getClearCartService()
    {
        return $this->services['Extcode\\Cart\\EventListener\\Order\\Finish\\ClearCart'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\EventListener\ProcessOrderCreate\ClearCart::class, ($this->privates['Extcode\\Cart\\Utility\\CartUtility'] ?? $this->getCartUtilityService()), ($this->privates['Extcode\\Cart\\Utility\\ParserUtility'] ?? ($this->privates['Extcode\\Cart\\Utility\\ParserUtility'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Utility\ParserUtility::class))), ($this->services['Extcode\\Cart\\Service\\SessionHandler'] ?? ($this->services['Extcode\\Cart\\Service\\SessionHandler'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Service\SessionHandler::class))));
    }

    /**
     * Gets the public 'Extcode\Cart\EventListener\Order\Finish\Email' shared autowired service.
     *
     * @return \Extcode\Cart\EventListener\ProcessOrderCreate\Email
     */
    protected function getEmailService()
    {
        return $this->services['Extcode\\Cart\\EventListener\\Order\\Finish\\Email'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\EventListener\ProcessOrderCreate\Email::class);
    }

    /**
     * Gets the public 'Extcode\Cart\EventListener\ProcessOrderCreate\ClearCart' shared autowired service.
     *
     * @return \Extcode\Cart\EventListener\ProcessOrderCreate\ClearCart
     */
    protected function getClearCart2Service()
    {
        return $this->services['Extcode\\Cart\\EventListener\\ProcessOrderCreate\\ClearCart'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\EventListener\ProcessOrderCreate\ClearCart::class, ($this->privates['Extcode\\Cart\\Utility\\CartUtility'] ?? $this->getCartUtilityService()), ($this->privates['Extcode\\Cart\\Utility\\ParserUtility'] ?? ($this->privates['Extcode\\Cart\\Utility\\ParserUtility'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Utility\ParserUtility::class))), ($this->services['Extcode\\Cart\\Service\\SessionHandler'] ?? ($this->services['Extcode\\Cart\\Service\\SessionHandler'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Service\SessionHandler::class))));
    }

    /**
     * Gets the public 'Extcode\Cart\EventListener\ProcessOrderCreate\Email' shared autowired service.
     *
     * @return \Extcode\Cart\EventListener\ProcessOrderCreate\Email
     */
    protected function getEmail2Service()
    {
        return $this->services['Extcode\\Cart\\EventListener\\ProcessOrderCreate\\Email'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\EventListener\ProcessOrderCreate\Email::class);
    }

    /**
     * Gets the public 'Extcode\Cart\EventListener\ProcessOrderCreate\Order' shared autowired service.
     *
     * @return \Extcode\Cart\EventListener\ProcessOrderCreate\Order
     */
    protected function getOrder2Service()
    {
        return $this->services['Extcode\\Cart\\EventListener\\ProcessOrderCreate\\Order'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\EventListener\ProcessOrderCreate\Order::class, ($this->privates['Extcode\\Cart\\Utility\\OrderUtility'] ?? $this->getOrderUtilityService()));
    }

    /**
     * Gets the public 'Extcode\Cart\EventListener\ProcessOrderCreate\OrderNumber' shared autowired service.
     *
     * @return \Extcode\Cart\EventListener\ProcessOrderCreate\OrderNumber
     */
    protected function getOrderNumber2Service()
    {
        return $this->services['Extcode\\Cart\\EventListener\\ProcessOrderCreate\\OrderNumber'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\EventListener\ProcessOrderCreate\OrderNumber::class, ($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()), ($this->services['Extcode\\Cart\\Domain\\Repository\\Order\\ItemRepository'] ?? $this->getItemRepositoryService()), ($this->privates['Extcode\\Cart\\Utility\\OrderUtility'] ?? $this->getOrderUtilityService()));
    }

    /**
     * Gets the public 'Extcode\Cart\Service\MailHandler' shared autowired service.
     *
     * @return \Extcode\Cart\Service\MailHandler
     */
    protected function getMailHandlerService()
    {
        return $this->services['Extcode\\Cart\\Service\\MailHandler'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Service\MailHandler::class);
    }

    /**
     * Gets the public 'Extcode\Cart\Service\SessionHandler' shared autowired service.
     *
     * @return \Extcode\Cart\Service\SessionHandler
     */
    protected function getSessionHandlerService()
    {
        return $this->services['Extcode\\Cart\\Service\\SessionHandler'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Service\SessionHandler::class);
    }

    /**
     * Gets the public 'Extcode\Cart\Service\TaxClassService' shared autowired service.
     *
     * @return \Extcode\Cart\Service\TaxClassService
     */
    protected function getTaxClassServiceService()
    {
        $this->services['Extcode\\Cart\\Service\\TaxClassService'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Service\TaxClassService::class);

        $instance->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'Extcode\Cart\Utility\TemplateLayout' shared autowired service.
     *
     * @return \Extcode\Cart\Utility\TemplateLayout
     */
    protected function getTemplateLayoutService()
    {
        return $this->services['Extcode\\Cart\\Utility\\TemplateLayout'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Utility\TemplateLayout::class);
    }

    /**
     * Gets the public 'Extcode\Cart\ViewHelpers\AdditionalJsonViewHelper' autowired service.
     *
     * @return \Extcode\Cart\ViewHelpers\AdditionalJsonViewHelper
     */
    protected function getAdditionalJsonViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\ViewHelpers\AdditionalJsonViewHelper::class);
    }

    /**
     * Gets the public 'Extcode\Cart\ViewHelpers\CsvHeaderViewHelper' autowired service.
     *
     * @return \Extcode\Cart\ViewHelpers\CsvHeaderViewHelper
     */
    protected function getCsvHeaderViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\ViewHelpers\CsvHeaderViewHelper::class);
    }

    /**
     * Gets the public 'Extcode\Cart\ViewHelpers\CsvValuesViewHelper' autowired service.
     *
     * @return \Extcode\Cart\ViewHelpers\CsvValuesViewHelper
     */
    protected function getCsvValuesViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\ViewHelpers\CsvValuesViewHelper::class);
    }

    /**
     * Gets the public 'Extcode\Cart\ViewHelpers\FieldNameViewHelper' autowired service.
     *
     * @return \Extcode\Cart\ViewHelpers\FieldNameViewHelper
     */
    protected function getFieldNameViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\ViewHelpers\FieldNameViewHelper::class);
    }

    /**
     * Gets the public 'Extcode\Cart\ViewHelpers\Form\IsServiceAvailableAtPriceViewHelper' autowired service.
     *
     * @return \Extcode\Cart\ViewHelpers\Form\IsServiceAvailableAtPriceViewHelper
     */
    protected function getIsServiceAvailableAtPriceViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\ViewHelpers\Form\IsServiceAvailableAtPriceViewHelper::class);
    }

    /**
     * Gets the public 'Extcode\Cart\ViewHelpers\Form\SelectViewHelper' autowired service.
     *
     * @return \Extcode\Cart\ViewHelpers\Form\SelectViewHelper
     */
    protected function getSelectViewHelperService()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\ViewHelpers\Form\SelectViewHelper::class);

        $instance->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
        $instance->injectPersistenceManager(($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper' autowired service.
     *
     * @return \Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper
     */
    protected function getCurrencyViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper::class);
    }

    /**
     * Gets the public 'Extcode\Cart\ViewHelpers\Format\NothingViewHelper' autowired service.
     *
     * @return \Extcode\Cart\ViewHelpers\Format\NothingViewHelper
     */
    protected function getNothingViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\ViewHelpers\Format\NothingViewHelper::class);
    }

    /**
     * Gets the public 'Extcode\Cart\ViewHelpers\IncludeFileViewHelper' autowired service.
     *
     * @return \Extcode\Cart\ViewHelpers\IncludeFileViewHelper
     */
    protected function getIncludeFileViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\ViewHelpers\IncludeFileViewHelper::class);
    }

    /**
     * Gets the public 'Extcode\Cart\ViewHelpers\Link\ActionViewHelper' autowired service.
     *
     * @return \Extcode\Cart\ViewHelpers\Link\ActionViewHelper
     */
    protected function getActionViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\ViewHelpers\Link\ActionViewHelper::class);
    }

    /**
     * Gets the public 'Extcode\Cart\ViewHelpers\MapModelPropertiesToTableColumnsViewHelper' autowired service.
     *
     * @return \Extcode\Cart\ViewHelpers\MapModelPropertiesToTableColumnsViewHelper
     */
    protected function getMapModelPropertiesToTableColumnsViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\ViewHelpers\MapModelPropertiesToTableColumnsViewHelper::class);
    }

    /**
     * Gets the public 'Extcode\Cart\ViewHelpers\MetaTagViewHelper' autowired service.
     *
     * @return \Extcode\Cart\ViewHelpers\MetaTagViewHelper
     */
    protected function getMetaTagViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\ViewHelpers\MetaTagViewHelper::class);
    }

    /**
     * Gets the public 'Extcode\Cart\ViewHelpers\TitleTagViewHelper' autowired service.
     *
     * @return \Extcode\Cart\ViewHelpers\TitleTagViewHelper
     */
    protected function getTitleTagViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\ViewHelpers\TitleTagViewHelper::class);
    }

    /**
     * Gets the public 'Extcode\Cart\ViewHelpers\Traversable\ExtractViewHelper' autowired service.
     *
     * @return \Extcode\Cart\ViewHelpers\Traversable\ExtractViewHelper
     */
    protected function getExtractViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\ViewHelpers\Traversable\ExtractViewHelper::class);
    }

    /**
     * Gets the public 'Extcode\Cart\ViewHelpers\Variable\GetViewHelper' autowired service.
     *
     * @return \Extcode\Cart\ViewHelpers\Variable\GetViewHelper
     */
    protected function getGetViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\ViewHelpers\Variable\GetViewHelper::class);
    }

    /**
     * Gets the public 'Extcode\Cart\ViewHelpers\Variable\SetViewHelper' autowired service.
     *
     * @return \Extcode\Cart\ViewHelpers\Variable\SetViewHelper
     */
    protected function getSetViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\ViewHelpers\Variable\SetViewHelper::class);
    }

    /**
     * Gets the public 'GuzzleHttp\ClientInterface' shared autowired service.
     *
     * @return \GuzzleHttp\Client
     */
    protected function getClientInterfaceService()
    {
        return $this->services['GuzzleHttp\\ClientInterface'] = \TYPO3\CMS\Core\Http\Client\GuzzleClientFactory::getClient();
    }

    /**
     * Gets the public 'In2code\Femanager\DataProvider\CountryDataProvider' shared autowired service.
     *
     * @return \In2code\Femanager\DataProvider\CountryDataProvider
     */
    protected function getCountryDataProviderService()
    {
        return $this->services['In2code\\Femanager\\DataProvider\\CountryDataProvider'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\In2code\Femanager\DataProvider\CountryDataProvider::class);
    }

    /**
     * Gets the public 'In2code\Femanager\DataProvider\CountryZonesDataProvider' shared autowired service.
     *
     * @return \In2code\Femanager\DataProvider\CountryZonesDataProvider
     */
    protected function getCountryZonesDataProviderService()
    {
        return $this->services['In2code\\Femanager\\DataProvider\\CountryZonesDataProvider'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\In2code\Femanager\DataProvider\CountryZonesDataProvider::class);
    }

    /**
     * Gets the public 'In2code\Femanager\Domain\Repository\LogRepository' shared autowired service.
     *
     * @return \In2code\Femanager\Domain\Repository\LogRepository
     */
    protected function getLogRepositoryService()
    {
        $this->services['In2code\\Femanager\\Domain\\Repository\\LogRepository'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\In2code\Femanager\Domain\Repository\LogRepository::class, ($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));

        $instance->injectPersistenceManager(($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'In2code\Femanager\Domain\Repository\UserGroupRepository' shared autowired service.
     *
     * @return \In2code\Femanager\Domain\Repository\UserGroupRepository
     */
    protected function getUserGroupRepositoryService()
    {
        $this->services['In2code\\Femanager\\Domain\\Repository\\UserGroupRepository'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\In2code\Femanager\Domain\Repository\UserGroupRepository::class, ($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));

        $instance->injectPersistenceManager(($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'In2code\Femanager\Domain\Repository\UserRepository' shared autowired service.
     *
     * @return \In2code\Femanager\Domain\Repository\UserRepository
     */
    protected function getUserRepositoryService()
    {
        $this->services['In2code\\Femanager\\Domain\\Repository\\UserRepository'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\In2code\Femanager\Domain\Repository\UserRepository::class, ($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));

        $instance->injectPersistenceManager(($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'In2code\Femanager\Domain\Service\RatelimiterService' shared autowired service.
     *
     * @return \In2code\Femanager\Domain\Service\RatelimiterService
     */
    protected function getRatelimiterServiceService()
    {
        return $this->services['In2code\\Femanager\\Domain\\Service\\RatelimiterService'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\In2code\Femanager\Domain\Service\RatelimiterService::class);
    }

    /**
     * Gets the public 'In2code\Femanager\Domain\Service\SendMailService' shared autowired service.
     *
     * @return \In2code\Femanager\Domain\Service\SendMailService
     */
    protected function getSendMailServiceService()
    {
        return $this->services['In2code\\Femanager\\Domain\\Service\\SendMailService'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\In2code\Femanager\Domain\Service\SendMailService::class, ($this->services['TYPO3\\CMS\\Core\\Mail\\Mailer'] ?? $this->getMailerService()), ($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service()));
    }

    /**
     * Gets the public 'In2code\Femanager\Domain\Validator\ShouldValidateStateCondition' shared autowired service.
     *
     * @return \In2code\Femanager\Domain\Validator\ShouldValidateStateCondition
     */
    protected function getShouldValidateStateConditionService()
    {
        return $this->services['In2code\\Femanager\\Domain\\Validator\\ShouldValidateStateCondition'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\In2code\Femanager\Domain\Validator\ShouldValidateStateCondition::class);
    }

    /**
     * Gets the public 'In2code\Femanager\Finisher\FinisherRunner' shared autowired service.
     *
     * @return \In2code\Femanager\Finisher\FinisherRunner
     */
    protected function getFinisherRunnerService()
    {
        return $this->services['In2code\\Femanager\\Finisher\\FinisherRunner'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\In2code\Femanager\Finisher\FinisherRunner::class, ($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()), ($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
    }

    /**
     * Gets the public 'In2code\Femanager\Utility\LogUtility' shared autowired service.
     *
     * @return \In2code\Femanager\Utility\LogUtility
     */
    protected function getLogUtilityService()
    {
        return $this->services['In2code\\Femanager\\Utility\\LogUtility'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\In2code\Femanager\Utility\LogUtility::class, ($this->services['In2code\\Femanager\\Domain\\Repository\\LogRepository'] ?? $this->getLogRepositoryService()), ($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service()));
    }

    /**
     * Gets the public 'OrdersPerDayWidgetConfiguration' shared service.
     *
     * @return \TYPO3\CMS\Dashboard\Widgets\WidgetConfiguration
     */
    protected function getOrdersPerDayWidgetConfigurationService()
    {
        return $this->services['OrdersPerDayWidgetConfiguration'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Dashboard\Widgets\WidgetConfiguration::class, 'OrdersPerDay', 'dashboard.widget.extcode.cart.orders_per_day', [0 => 'cart'], 'LLL:EXT:cart/Resources/Private/Language/locallang_be.xlf:dashboard.widgets.orders_per_day.title', 'LLL:EXT:cart/Resources/Private/Language/locallang_be.xlf:dashboard.widgets.orders_per_day.description', 'content-widget-chart-bar', 'medium', 'medium', [0 => 'dashboard-item--chart']);
    }

    /**
     * Gets the public 'PaymentPaidShippingOpenWidgetConfiguration' shared service.
     *
     * @return \TYPO3\CMS\Dashboard\Widgets\WidgetConfiguration
     */
    protected function getPaymentPaidShippingOpenWidgetConfigurationService()
    {
        return $this->services['PaymentPaidShippingOpenWidgetConfiguration'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Dashboard\Widgets\WidgetConfiguration::class, 'PaymentPaidShippingOpen', 'dashboard.widget.extcode.cart.payment_paid_shipping_open', [0 => 'cart'], 'LLL:EXT:cart/Resources/Private/Language/locallang_be.xlf:dashboard.widgets.payment_paid_shipping_open.title', 'LLL:EXT:cart/Resources/Private/Language/locallang_be.xlf:dashboard.widgets.payment_paid_shipping_open.description', 'content-widget-list', 'large', 'medium', []);
    }

    /**
     * Gets the public 'Psr\EventDispatcher\EventDispatcherInterface_decorated_1' shared service.
     *
     * @return \Psr\EventDispatcher\EventDispatcherInterface
     */
    protected function getEventDispatcherInterfaceDecorated1Service()
    {
        return $this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] = \TYPO3\CMS\Core\ServiceProvider::provideFallbackEventDispatcher($this, ($this->services['TYPO3\\CMS\\Core\\EventDispatcher\\EventDispatcher'] ?? $this->getEventDispatcherService()));
    }

    /**
     * Gets the public 'Psr\Http\Client\ClientInterface' shared autowired service.
     *
     * @return \TYPO3\CMS\Core\Http\Client
     */
    protected function getClientInterface2Service()
    {
        return $this->services['Psr\\Http\\Client\\ClientInterface'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Http\Client::class, ($this->services['GuzzleHttp\\ClientInterface'] ?? $this->getClientInterfaceService()));
    }

    /**
     * Gets the public 'Psr\Http\Message\ResponseFactoryInterface' shared autowired service.
     *
     * @return \TYPO3\CMS\Core\Http\ResponseFactory
     */
    protected function getResponseFactoryInterfaceService()
    {
        return $this->services['Psr\\Http\\Message\\ResponseFactoryInterface'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Http\ResponseFactory::class);
    }

    /**
     * Gets the public 'Psr\Http\Message\ServerRequestFactoryInterface' shared autowired service.
     *
     * @return \TYPO3\CMS\Core\Http\ServerRequestFactory
     */
    protected function getServerRequestFactoryInterfaceService()
    {
        return $this->services['Psr\\Http\\Message\\ServerRequestFactoryInterface'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Http\ServerRequestFactory::class);
    }

    /**
     * Gets the public 'Psr\Http\Message\StreamFactoryInterface' shared autowired service.
     *
     * @return \TYPO3\CMS\Core\Http\StreamFactory
     */
    protected function getStreamFactoryInterfaceService()
    {
        return $this->services['Psr\\Http\\Message\\StreamFactoryInterface'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Http\StreamFactory::class);
    }

    /**
     * Gets the public 'Psr\Http\Message\UploadedFileFactoryInterface' shared autowired service.
     *
     * @return \TYPO3\CMS\Core\Http\UploadedFileFactory
     */
    protected function getUploadedFileFactoryInterfaceService()
    {
        return $this->services['Psr\\Http\\Message\\UploadedFileFactoryInterface'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Http\UploadedFileFactory::class);
    }

    /**
     * Gets the public 'Psr\Http\Message\UriFactoryInterface' shared autowired service.
     *
     * @return \TYPO3\CMS\Core\Http\UriFactory
     */
    protected function getUriFactoryInterfaceService()
    {
        return $this->services['Psr\\Http\\Message\\UriFactoryInterface'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Http\UriFactory::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\About\Controller\AboutController' shared autowired service.
     *
     * @return \TYPO3\CMS\About\Controller\AboutController
     */
    protected function getAboutControllerService()
    {
        return $this->services['TYPO3\\CMS\\About\\Controller\\AboutController'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\About\Controller\AboutController::class, \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Information\Typo3Version::class), ($this->privates['TYPO3\\CMS\\Core\\Information\\Typo3Information'] ?? $this->getTypo3InformationService()));
    }

    /**
     * Gets the public 'TYPO3\CMS\Backend\Command\LockBackendCommand' shared autowired service.
     *
     * @return \TYPO3\CMS\Backend\Command\LockBackendCommand
     */
    protected function getLockBackendCommandService()
    {
        $this->services['TYPO3\\CMS\\Backend\\Command\\LockBackendCommand'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Backend\Command\LockBackendCommand::class);

        $instance->setName('backend:lock');

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Backend\Command\ReferenceIndexUpdateCommand' shared autowired service.
     *
     * @return \TYPO3\CMS\Backend\Command\ReferenceIndexUpdateCommand
     */
    protected function getReferenceIndexUpdateCommandService()
    {
        $this->services['TYPO3\\CMS\\Backend\\Command\\ReferenceIndexUpdateCommand'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Backend\Command\ReferenceIndexUpdateCommand::class);

        $instance->setName('referenceindex:update');

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Backend\Command\ResetPasswordCommand' shared autowired service.
     *
     * @return \TYPO3\CMS\Backend\Command\ResetPasswordCommand
     */
    protected function getResetPasswordCommandService()
    {
        $this->services['TYPO3\\CMS\\Backend\\Command\\ResetPasswordCommand'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Backend\Command\ResetPasswordCommand::class);

        $instance->setName('backend:resetpassword');

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Backend\Command\UnlockBackendCommand' shared autowired service.
     *
     * @return \TYPO3\CMS\Backend\Command\UnlockBackendCommand
     */
    protected function getUnlockBackendCommandService()
    {
        $this->services['TYPO3\\CMS\\Backend\\Command\\UnlockBackendCommand'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Backend\Command\UnlockBackendCommand::class);

        $instance->setName('backend:unlock');

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Backend\Compatibility\SlotReplacement' shared autowired service.
     *
     * @return \TYPO3\CMS\Backend\Compatibility\SlotReplacement
     */
    protected function getSlotReplacementService()
    {
        return $this->services['TYPO3\\CMS\\Backend\\Compatibility\\SlotReplacement'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Backend\Compatibility\SlotReplacement::class, ($this->services['TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher'] ?? $this->getDispatcher2Service()));
    }

    /**
     * Gets the public 'TYPO3\CMS\Backend\Controller\EditDocumentController' shared autowired service.
     *
     * @return \TYPO3\CMS\Backend\Controller\EditDocumentController
     */
    protected function getEditDocumentControllerService()
    {
        return $this->services['TYPO3\\CMS\\Backend\\Controller\\EditDocumentController'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Backend\Controller\EditDocumentController::class, ($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service()));
    }

    /**
     * Gets the public 'TYPO3\CMS\Backend\Controller\File\ImageProcessController' autowired service.
     *
     * @return \TYPO3\CMS\Backend\Controller\File\ImageProcessController
     */
    protected function getImageProcessControllerService()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Backend\Controller\File\ImageProcessController::class, ($this->privates['TYPO3\\CMS\\Core\\Resource\\Service\\ImageProcessingService'] ?? $this->getImageProcessingServiceService()));

        $instance->setLogger(($this->services['_early.TYPO3\\CMS\\Core\\Log\\LogManager'] ?? $this->get('_early.TYPO3\\CMS\\Core\\Log\\LogManager', 1))->getLogger('TYPO3\\CMS\\Backend\\Controller\\File\\ImageProcessController'));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Backend\Controller\HelpController' shared autowired service.
     *
     * @return \TYPO3\CMS\Backend\Controller\HelpController
     */
    protected function getHelpControllerService()
    {
        return $this->services['TYPO3\\CMS\\Backend\\Controller\\HelpController'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Backend\Controller\HelpController::class, ($this->privates['TYPO3\\CMS\\Core\\Information\\Typo3Information'] ?? $this->getTypo3InformationService()));
    }

    /**
     * Gets the public 'TYPO3\CMS\Backend\Controller\LoginController' shared autowired service.
     *
     * @return \TYPO3\CMS\Backend\Controller\LoginController
     */
    protected function getLoginControllerService()
    {
        $this->services['TYPO3\\CMS\\Backend\\Controller\\LoginController'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Backend\Controller\LoginController::class, ($this->privates['TYPO3\\CMS\\Core\\Information\\Typo3Information'] ?? $this->getTypo3InformationService()), ($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service()), ($this->services['TYPO3\\CMS\\Backend\\Routing\\UriBuilder'] ?? $this->getUriBuilderService()), \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Configuration\Features::class));

        $instance->setLogger(($this->services['_early.TYPO3\\CMS\\Core\\Log\\LogManager'] ?? $this->get('_early.TYPO3\\CMS\\Core\\Log\\LogManager', 1))->getLogger('TYPO3\\CMS\\Backend\\Controller\\LoginController'));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Backend\Domain\Repository\Module\BackendModuleRepository' shared autowired service.
     *
     * @return \TYPO3\CMS\Backend\Domain\Repository\Module\BackendModuleRepository
     */
    protected function getBackendModuleRepositoryService()
    {
        return $this->services['TYPO3\\CMS\\Backend\\Domain\\Repository\\Module\\BackendModuleRepository'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Backend\Domain\Repository\Module\BackendModuleRepository::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Backend\Form\FormDataProvider\SiteDatabaseEditRow' shared autowired service.
     *
     * @return \TYPO3\CMS\Backend\Form\FormDataProvider\SiteDatabaseEditRow
     */
    protected function getSiteDatabaseEditRowService()
    {
        return $this->services['TYPO3\\CMS\\Backend\\Form\\FormDataProvider\\SiteDatabaseEditRow'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Backend\Form\FormDataProvider\SiteDatabaseEditRow::class, ($this->services['TYPO3\\CMS\\Core\\Configuration\\SiteConfiguration'] ?? $this->getSiteConfigurationService()));
    }

    /**
     * Gets the public 'TYPO3\CMS\Backend\History\RecordHistoryRollback' shared autowired service.
     *
     * @return \TYPO3\CMS\Backend\History\RecordHistoryRollback
     */
    protected function getRecordHistoryRollbackService()
    {
        return $this->services['TYPO3\\CMS\\Backend\\History\\RecordHistoryRollback'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Backend\History\RecordHistoryRollback::class, ($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service()));
    }

    /**
     * Gets the public 'TYPO3\CMS\Backend\Http\Application' shared service.
     *
     * @return \TYPO3\CMS\Backend\Http\Application
     */
    protected function getApplicationService()
    {
        return $this->services['TYPO3\\CMS\\Backend\\Http\\Application'] = \TYPO3\CMS\Backend\ServiceProvider::getApplication($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Backend\Http\RequestHandler' shared service.
     *
     * @return \TYPO3\CMS\Backend\Http\RequestHandler
     */
    protected function getRequestHandlerService()
    {
        return $this->services['TYPO3\\CMS\\Backend\\Http\\RequestHandler'] = \TYPO3\CMS\Backend\ServiceProvider::getRequestHandler($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Backend\Http\RouteDispatcher' shared service.
     *
     * @return \TYPO3\CMS\Backend\Http\RouteDispatcher
     */
    protected function getRouteDispatcherService()
    {
        return $this->services['TYPO3\\CMS\\Backend\\Http\\RouteDispatcher'] = \TYPO3\CMS\Backend\ServiceProvider::getRouteDispatcher($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Backend\Middleware\AdditionalResponseHeaders' shared autowired service.
     *
     * @return \TYPO3\CMS\Backend\Middleware\AdditionalResponseHeaders
     */
    protected function getAdditionalResponseHeadersService()
    {
        return $this->services['TYPO3\\CMS\\Backend\\Middleware\\AdditionalResponseHeaders'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Backend\Middleware\AdditionalResponseHeaders::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Backend\Middleware\BackendRouteInitialization' shared autowired service.
     *
     * @return \TYPO3\CMS\Backend\Middleware\BackendRouteInitialization
     */
    protected function getBackendRouteInitializationService()
    {
        return $this->services['TYPO3\\CMS\\Backend\\Middleware\\BackendRouteInitialization'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Backend\Middleware\BackendRouteInitialization::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Backend\Middleware\BackendUserAuthenticator' shared autowired service.
     *
     * @return \TYPO3\CMS\Backend\Middleware\BackendUserAuthenticator
     */
    protected function getBackendUserAuthenticatorService()
    {
        return $this->services['TYPO3\\CMS\\Backend\\Middleware\\BackendUserAuthenticator'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Backend\Middleware\BackendUserAuthenticator::class, ($this->services['TYPO3\\CMS\\Core\\Context\\Context'] ?? $this->getContextService()));
    }

    /**
     * Gets the public 'TYPO3\CMS\Backend\Middleware\ForcedHttpsBackendRedirector' shared autowired service.
     *
     * @return \TYPO3\CMS\Backend\Middleware\ForcedHttpsBackendRedirector
     */
    protected function getForcedHttpsBackendRedirectorService()
    {
        return $this->services['TYPO3\\CMS\\Backend\\Middleware\\ForcedHttpsBackendRedirector'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Backend\Middleware\ForcedHttpsBackendRedirector::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Backend\Middleware\LockedBackendGuard' shared autowired service.
     *
     * @return \TYPO3\CMS\Backend\Middleware\LockedBackendGuard
     */
    protected function getLockedBackendGuardService()
    {
        return $this->services['TYPO3\\CMS\\Backend\\Middleware\\LockedBackendGuard'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Backend\Middleware\LockedBackendGuard::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Backend\Middleware\OutputCompression' shared autowired service.
     *
     * @return \TYPO3\CMS\Backend\Middleware\OutputCompression
     */
    protected function getOutputCompressionService()
    {
        return $this->services['TYPO3\\CMS\\Backend\\Middleware\\OutputCompression'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Backend\Middleware\OutputCompression::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Backend\Middleware\SiteResolver' shared autowired service.
     *
     * @return \TYPO3\CMS\Backend\Middleware\SiteResolver
     */
    protected function getSiteResolverService()
    {
        return $this->services['TYPO3\\CMS\\Backend\\Middleware\\SiteResolver'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Backend\Middleware\SiteResolver::class, ($this->services['TYPO3\\CMS\\Core\\Routing\\SiteMatcher'] ?? $this->getSiteMatcherService()));
    }

    /**
     * Gets the public 'TYPO3\CMS\Backend\Module\ModuleStorage' shared autowired service.
     *
     * @return \TYPO3\CMS\Backend\Module\ModuleStorage
     */
    protected function getModuleStorageService()
    {
        return $this->services['TYPO3\\CMS\\Backend\\Module\\ModuleStorage'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Backend\Module\ModuleStorage::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Backend\Routing\Router_decorated_1' shared service.
     *
     * @return \TYPO3\CMS\Backend\Routing\Router
     */
    protected function getRouterDecorated1Service()
    {
        return $this->services['TYPO3\\CMS\\Backend\\Routing\\Router_decorated_1'] = \TYPO3\CMS\Backend\ServiceProvider::configureBackendRouter($this, \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Backend\Routing\Router::class));
    }

    /**
     * Gets the public 'TYPO3\CMS\Backend\Routing\UriBuilder' shared autowired service.
     *
     * @return \TYPO3\CMS\Backend\Routing\UriBuilder
     */
    protected function getUriBuilderService()
    {
        return $this->services['TYPO3\\CMS\\Backend\\Routing\\UriBuilder'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Backend\Routing\UriBuilder::class, ($this->services['TYPO3\\CMS\\Backend\\Routing\\Router_decorated_1'] ?? $this->getRouterDecorated1Service()));
    }

    /**
     * Gets the public 'TYPO3\CMS\Backend\Security\CategoryPermissionsAspect' shared autowired service.
     *
     * @return \TYPO3\CMS\Backend\Security\CategoryPermissionsAspect
     */
    protected function getCategoryPermissionsAspectService()
    {
        return $this->services['TYPO3\\CMS\\Backend\\Security\\CategoryPermissionsAspect'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Backend\Security\CategoryPermissionsAspect::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Backend\Template\ModuleTemplate' autowired service.
     *
     * @return \TYPO3\CMS\Backend\Template\ModuleTemplate
     */
    protected function getModuleTemplateService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Backend\Template\ModuleTemplate::class, ($this->services['TYPO3\\CMS\\Core\\Page\\PageRenderer'] ?? ($this->services['TYPO3\\CMS\\Core\\Page\\PageRenderer'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Page\PageRenderer::class))), ($this->services['TYPO3\\CMS\\Core\\Imaging\\IconFactory'] ?? $this->getIconFactoryService()), ($this->services['TYPO3\\CMS\\Core\\Messaging\\FlashMessageService'] ?? $this->getFlashMessageServiceService()));
    }

    /**
     * Gets the public 'TYPO3\CMS\Backend\ViewHelpers\ArrayBrowserViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Backend\ViewHelpers\ArrayBrowserViewHelper
     */
    protected function getArrayBrowserViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Backend\ViewHelpers\ArrayBrowserViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Backend\ViewHelpers\AvatarViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Backend\ViewHelpers\AvatarViewHelper
     */
    protected function getAvatarViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Backend\ViewHelpers\AvatarViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Backend\ViewHelpers\LanguageColumnViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Backend\ViewHelpers\LanguageColumnViewHelper
     */
    protected function getLanguageColumnViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Backend\ViewHelpers\LanguageColumnViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper
     */
    protected function getEditRecordViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper
     */
    protected function getNewRecordViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Backend\ViewHelpers\ModuleLayoutViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Backend\ViewHelpers\ModuleLayoutViewHelper
     */
    protected function getModuleLayoutViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Backend\ViewHelpers\ModuleLayoutViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Backend\ViewHelpers\ModuleLayout\Button\LinkButtonViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Backend\ViewHelpers\ModuleLayout\Button\LinkButtonViewHelper
     */
    protected function getLinkButtonViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Backend\ViewHelpers\ModuleLayout\Button\LinkButtonViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Backend\ViewHelpers\ModuleLayout\Button\ShortcutButtonViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Backend\ViewHelpers\ModuleLayout\Button\ShortcutButtonViewHelper
     */
    protected function getShortcutButtonViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Backend\ViewHelpers\ModuleLayout\Button\ShortcutButtonViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Backend\ViewHelpers\ModuleLayout\MenuItemViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Backend\ViewHelpers\ModuleLayout\MenuItemViewHelper
     */
    protected function getMenuItemViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Backend\ViewHelpers\ModuleLayout\MenuItemViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Backend\ViewHelpers\ModuleLayout\MenuViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Backend\ViewHelpers\ModuleLayout\MenuViewHelper
     */
    protected function getMenuViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Backend\ViewHelpers\ModuleLayout\MenuViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
     */
    protected function getModuleLinkViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Backend\ViewHelpers\ThumbnailViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Backend\ViewHelpers\ThumbnailViewHelper
     */
    protected function getThumbnailViewHelperService()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Backend\ViewHelpers\ThumbnailViewHelper::class);

        $instance->injectImageService(($this->services['TYPO3\\CMS\\Extbase\\Service\\ImageService'] ?? $this->getImageServiceService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Backend\ViewHelpers\Uri\EditRecordViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Backend\ViewHelpers\Uri\EditRecordViewHelper
     */
    protected function getEditRecordViewHelper2Service()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Backend\ViewHelpers\Uri\EditRecordViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Backend\ViewHelpers\Uri\NewRecordViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Backend\ViewHelpers\Uri\NewRecordViewHelper
     */
    protected function getNewRecordViewHelper2Service()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Backend\ViewHelpers\Uri\NewRecordViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Backend\View\BackendLayoutView' shared autowired service.
     *
     * @return \TYPO3\CMS\Backend\View\BackendLayoutView
     */
    protected function getBackendLayoutViewService()
    {
        return $this->services['TYPO3\\CMS\\Backend\\View\\BackendLayoutView'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Backend\View\BackendLayoutView::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Backend\View\BackendLayout\DataProviderCollection' shared autowired service.
     *
     * @return \TYPO3\CMS\Backend\View\BackendLayout\DataProviderCollection
     */
    protected function getDataProviderCollectionService()
    {
        return $this->services['TYPO3\\CMS\\Backend\\View\\BackendLayout\\DataProviderCollection'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Backend\View\BackendLayout\DataProviderCollection::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Backend\View\BackendLayout\DataProviderContext' shared autowired service.
     *
     * @return \TYPO3\CMS\Backend\View\BackendLayout\DataProviderContext
     */
    protected function getDataProviderContextService()
    {
        return $this->services['TYPO3\\CMS\\Backend\\View\\BackendLayout\\DataProviderContext'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Backend\View\BackendLayout\DataProviderContext::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Backend\View\BackendLayout\RecordRememberer' shared autowired service.
     *
     * @return \TYPO3\CMS\Backend\View\BackendLayout\RecordRememberer
     */
    protected function getRecordRemembererService()
    {
        return $this->services['TYPO3\\CMS\\Backend\\View\\BackendLayout\\RecordRememberer'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Backend\View\BackendLayout\RecordRememberer::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Backend\View\PageLayoutView' autowired service.
     *
     * @return \TYPO3\CMS\Backend\View\PageLayoutView
     */
    protected function getPageLayoutViewService()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Backend\View\PageLayoutView::class, ($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service()));

        $instance->setLogger(($this->services['_early.TYPO3\\CMS\\Core\\Log\\LogManager'] ?? $this->get('_early.TYPO3\\CMS\\Core\\Log\\LogManager', 1))->getLogger('TYPO3\\CMS\\Backend\\View\\PageLayoutView'));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Backend\View\PageLayoutViewDrawEmptyColposContent' shared autowired service.
     *
     * @return \TYPO3\CMS\Backend\View\PageLayoutViewDrawEmptyColposContent
     */
    protected function getPageLayoutViewDrawEmptyColposContentService()
    {
        return $this->services['TYPO3\\CMS\\Backend\\View\\PageLayoutViewDrawEmptyColposContent'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Backend\View\PageLayoutViewDrawEmptyColposContent::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Belog\Controller\BackendLogController' autowired service.
     *
     * @return \TYPO3\CMS\Belog\Controller\BackendLogController
     */
    protected function getBackendLogControllerService()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Belog\Controller\BackendLogController::class);

        $instance->injectLogEntryRepository(($this->services['TYPO3\\CMS\\Belog\\Domain\\Repository\\LogEntryRepository'] ?? $this->getLogEntryRepositoryService()));
        $instance->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));
        $instance->injectSignalSlotDispatcher(($this->services['TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher'] ?? $this->getDispatcher2Service()));
        $instance->injectValidatorResolver(($this->services['TYPO3\\CMS\\Extbase\\Validation\\ValidatorResolver'] ?? $this->getValidatorResolverService()));
        $instance->injectViewResolver(($this->privates['TYPO3\\CMS\\Extbase\\Mvc\\View\\GenericViewResolver'] ?? $this->getGenericViewResolverService()));
        $instance->injectReflectionService(($this->services['TYPO3\\CMS\\Extbase\\Reflection\\ReflectionService'] ?? $this->getReflectionServiceService()));
        $instance->injectCacheService(($this->services['TYPO3\\CMS\\Extbase\\Service\\CacheService'] ?? $this->getCacheServiceService()));
        $instance->injectHashService(($this->services['TYPO3\\CMS\\Extbase\\Security\\Cryptography\\HashService'] ?? $this->getHashServiceService()));
        $instance->injectMvcPropertyMappingConfigurationService(($this->services['TYPO3\\CMS\\Extbase\\Mvc\\Controller\\MvcPropertyMappingConfigurationService'] ?? $this->getMvcPropertyMappingConfigurationServiceService()));
        $instance->injectEventDispatcher(($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Belog\Controller\SystemInformationController' shared autowired service.
     *
     * @return \TYPO3\CMS\Belog\Controller\SystemInformationController
     */
    protected function getSystemInformationControllerService()
    {
        return $this->services['TYPO3\\CMS\\Belog\\Controller\\SystemInformationController'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Belog\Controller\SystemInformationController::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Belog\Domain\Repository\LogEntryRepository' shared autowired service.
     *
     * @return \TYPO3\CMS\Belog\Domain\Repository\LogEntryRepository
     */
    protected function getLogEntryRepositoryService()
    {
        $this->services['TYPO3\\CMS\\Belog\\Domain\\Repository\\LogEntryRepository'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Belog\Domain\Repository\LogEntryRepository::class, ($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));

        $instance->injectPersistenceManager(($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()));
        $instance->initializeObject();

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Belog\Domain\Repository\WorkspaceRepository' shared autowired service.
     *
     * @return \TYPO3\CMS\Belog\Domain\Repository\WorkspaceRepository
     */
    protected function getWorkspaceRepositoryService()
    {
        $this->services['TYPO3\\CMS\\Belog\\Domain\\Repository\\WorkspaceRepository'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Belog\Domain\Repository\WorkspaceRepository::class, ($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));

        $instance->injectPersistenceManager(($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()));
        $instance->initializeObject();

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Belog\ViewHelpers\Be\PagePathViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Belog\ViewHelpers\Be\PagePathViewHelper
     */
    protected function getPagePathViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Belog\ViewHelpers\Be\PagePathViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Belog\ViewHelpers\Form\TranslateLabelSelectViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Belog\ViewHelpers\Form\TranslateLabelSelectViewHelper
     */
    protected function getTranslateLabelSelectViewHelperService()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Belog\ViewHelpers\Form\TranslateLabelSelectViewHelper::class);

        $instance->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
        $instance->injectPersistenceManager(($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Belog\ViewHelpers\FormatDetailsViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Belog\ViewHelpers\FormatDetailsViewHelper
     */
    protected function getFormatDetailsViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Belog\ViewHelpers\FormatDetailsViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Belog\ViewHelpers\UsernameViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Belog\ViewHelpers\UsernameViewHelper
     */
    protected function getUsernameViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Belog\ViewHelpers\UsernameViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Belog\ViewHelpers\WorkspaceTitleViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Belog\ViewHelpers\WorkspaceTitleViewHelper
     */
    protected function getWorkspaceTitleViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Belog\ViewHelpers\WorkspaceTitleViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Beuser\Compatibility\SlotReplacement' shared autowired service.
     *
     * @return \TYPO3\CMS\Beuser\Compatibility\SlotReplacement
     */
    protected function getSlotReplacement2Service()
    {
        return $this->services['TYPO3\\CMS\\Beuser\\Compatibility\\SlotReplacement'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Beuser\Compatibility\SlotReplacement::class, ($this->services['TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher'] ?? $this->getDispatcher2Service()));
    }

    /**
     * Gets the public 'TYPO3\CMS\Beuser\Controller\BackendUserController' autowired service.
     *
     * @return \TYPO3\CMS\Beuser\Controller\BackendUserController
     */
    protected function getBackendUserControllerService()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Beuser\Controller\BackendUserController::class, ($this->services['TYPO3\\CMS\\Beuser\\Service\\ModuleDataStorageService'] ?? $this->getModuleDataStorageServiceService()), ($this->services['TYPO3\\CMS\\Beuser\\Domain\\Repository\\BackendUserRepository'] ?? $this->getBackendUserRepositoryService()), ($this->services['TYPO3\\CMS\\Beuser\\Domain\\Repository\\BackendUserGroupRepository'] ?? $this->getBackendUserGroupRepositoryService()), ($this->services['TYPO3\\CMS\\Beuser\\Domain\\Repository\\BackendUserSessionRepository'] ?? $this->getBackendUserSessionRepositoryService()), ($this->privates['TYPO3\\CMS\\Beuser\\Service\\UserInformationService'] ?? $this->getUserInformationServiceService()));

        $instance->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));
        $instance->injectSignalSlotDispatcher(($this->services['TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher'] ?? $this->getDispatcher2Service()));
        $instance->injectValidatorResolver(($this->services['TYPO3\\CMS\\Extbase\\Validation\\ValidatorResolver'] ?? $this->getValidatorResolverService()));
        $instance->injectViewResolver(($this->privates['TYPO3\\CMS\\Extbase\\Mvc\\View\\GenericViewResolver'] ?? $this->getGenericViewResolverService()));
        $instance->injectReflectionService(($this->services['TYPO3\\CMS\\Extbase\\Reflection\\ReflectionService'] ?? $this->getReflectionServiceService()));
        $instance->injectCacheService(($this->services['TYPO3\\CMS\\Extbase\\Service\\CacheService'] ?? $this->getCacheServiceService()));
        $instance->injectHashService(($this->services['TYPO3\\CMS\\Extbase\\Security\\Cryptography\\HashService'] ?? $this->getHashServiceService()));
        $instance->injectMvcPropertyMappingConfigurationService(($this->services['TYPO3\\CMS\\Extbase\\Mvc\\Controller\\MvcPropertyMappingConfigurationService'] ?? $this->getMvcPropertyMappingConfigurationServiceService()));
        $instance->injectEventDispatcher(($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Beuser\Controller\BackendUserGroupController' autowired service.
     *
     * @return \TYPO3\CMS\Beuser\Controller\BackendUserGroupController
     */
    protected function getBackendUserGroupControllerService()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Beuser\Controller\BackendUserGroupController::class, ($this->privates['TYPO3\\CMS\\Beuser\\Service\\UserInformationService'] ?? $this->getUserInformationServiceService()));

        $instance->injectBackendUserGroupRepository(($this->services['TYPO3\\CMS\\Beuser\\Domain\\Repository\\BackendUserGroupRepository'] ?? $this->getBackendUserGroupRepositoryService()));
        $instance->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));
        $instance->injectSignalSlotDispatcher(($this->services['TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher'] ?? $this->getDispatcher2Service()));
        $instance->injectValidatorResolver(($this->services['TYPO3\\CMS\\Extbase\\Validation\\ValidatorResolver'] ?? $this->getValidatorResolverService()));
        $instance->injectViewResolver(($this->privates['TYPO3\\CMS\\Extbase\\Mvc\\View\\GenericViewResolver'] ?? $this->getGenericViewResolverService()));
        $instance->injectReflectionService(($this->services['TYPO3\\CMS\\Extbase\\Reflection\\ReflectionService'] ?? $this->getReflectionServiceService()));
        $instance->injectCacheService(($this->services['TYPO3\\CMS\\Extbase\\Service\\CacheService'] ?? $this->getCacheServiceService()));
        $instance->injectHashService(($this->services['TYPO3\\CMS\\Extbase\\Security\\Cryptography\\HashService'] ?? $this->getHashServiceService()));
        $instance->injectMvcPropertyMappingConfigurationService(($this->services['TYPO3\\CMS\\Extbase\\Mvc\\Controller\\MvcPropertyMappingConfigurationService'] ?? $this->getMvcPropertyMappingConfigurationServiceService()));
        $instance->injectEventDispatcher(($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Beuser\Controller\PermissionController' autowired service.
     *
     * @return \TYPO3\CMS\Beuser\Controller\PermissionController
     */
    protected function getPermissionControllerService()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Beuser\Controller\PermissionController::class);

        $instance->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));
        $instance->injectSignalSlotDispatcher(($this->services['TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher'] ?? $this->getDispatcher2Service()));
        $instance->injectValidatorResolver(($this->services['TYPO3\\CMS\\Extbase\\Validation\\ValidatorResolver'] ?? $this->getValidatorResolverService()));
        $instance->injectViewResolver(($this->privates['TYPO3\\CMS\\Extbase\\Mvc\\View\\GenericViewResolver'] ?? $this->getGenericViewResolverService()));
        $instance->injectReflectionService(($this->services['TYPO3\\CMS\\Extbase\\Reflection\\ReflectionService'] ?? $this->getReflectionServiceService()));
        $instance->injectCacheService(($this->services['TYPO3\\CMS\\Extbase\\Service\\CacheService'] ?? $this->getCacheServiceService()));
        $instance->injectHashService(($this->services['TYPO3\\CMS\\Extbase\\Security\\Cryptography\\HashService'] ?? $this->getHashServiceService()));
        $instance->injectMvcPropertyMappingConfigurationService(($this->services['TYPO3\\CMS\\Extbase\\Mvc\\Controller\\MvcPropertyMappingConfigurationService'] ?? $this->getMvcPropertyMappingConfigurationServiceService()));
        $instance->injectEventDispatcher(($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Beuser\Domain\Repository\BackendUserGroupRepository' shared autowired service.
     *
     * @return \TYPO3\CMS\Beuser\Domain\Repository\BackendUserGroupRepository
     */
    protected function getBackendUserGroupRepositoryService()
    {
        $this->services['TYPO3\\CMS\\Beuser\\Domain\\Repository\\BackendUserGroupRepository'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Beuser\Domain\Repository\BackendUserGroupRepository::class, ($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));

        $instance->injectPersistenceManager(($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Beuser\Domain\Repository\BackendUserRepository' shared autowired service.
     *
     * @return \TYPO3\CMS\Beuser\Domain\Repository\BackendUserRepository
     */
    protected function getBackendUserRepositoryService()
    {
        $this->services['TYPO3\\CMS\\Beuser\\Domain\\Repository\\BackendUserRepository'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Beuser\Domain\Repository\BackendUserRepository::class, ($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));

        $instance->injectPersistenceManager(($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()));
        $instance->initializeObject();

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Beuser\Domain\Repository\BackendUserSessionRepository' shared autowired service.
     *
     * @return \TYPO3\CMS\Beuser\Domain\Repository\BackendUserSessionRepository
     */
    protected function getBackendUserSessionRepositoryService()
    {
        $this->services['TYPO3\\CMS\\Beuser\\Domain\\Repository\\BackendUserSessionRepository'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Beuser\Domain\Repository\BackendUserSessionRepository::class, ($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));

        $instance->injectPersistenceManager(($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Beuser\Service\ModuleDataStorageService' shared autowired service.
     *
     * @return \TYPO3\CMS\Beuser\Service\ModuleDataStorageService
     */
    protected function getModuleDataStorageServiceService()
    {
        $this->services['TYPO3\\CMS\\Beuser\\Service\\ModuleDataStorageService'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Beuser\Service\ModuleDataStorageService::class);

        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Beuser\ViewHelpers\ArrayElementViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Beuser\ViewHelpers\ArrayElementViewHelper
     */
    protected function getArrayElementViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Beuser\ViewHelpers\ArrayElementViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Beuser\ViewHelpers\Display\TableAccessViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Beuser\ViewHelpers\Display\TableAccessViewHelper
     */
    protected function getTableAccessViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Beuser\ViewHelpers\Display\TableAccessViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper
     */
    protected function getPermissionsViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Beuser\ViewHelpers\SpriteIconForRecordViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Beuser\ViewHelpers\SpriteIconForRecordViewHelper
     */
    protected function getSpriteIconForRecordViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Beuser\ViewHelpers\SpriteIconForRecordViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Beuser\ViewHelpers\SwitchUserViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Beuser\ViewHelpers\SwitchUserViewHelper
     */
    protected function getSwitchUserViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Beuser\ViewHelpers\SwitchUserViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Cache\CacheManager' shared service.
     *
     * @return \TYPO3\CMS\Core\Cache\CacheManager
     */
    protected function getCacheManagerService()
    {
        return $this->services['TYPO3\\CMS\\Core\\Cache\\CacheManager'] = \TYPO3\CMS\Core\ServiceProvider::getCacheManager($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Cache\DatabaseSchemaService' shared autowired service.
     *
     * @return \TYPO3\CMS\Core\Cache\DatabaseSchemaService
     */
    protected function getDatabaseSchemaServiceService()
    {
        return $this->services['TYPO3\\CMS\\Core\\Cache\\DatabaseSchemaService'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Cache\DatabaseSchemaService::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Category\CategoryRegistry' shared autowired service.
     *
     * @return \TYPO3\CMS\Core\Category\CategoryRegistry
     */
    protected function getCategoryRegistryService()
    {
        return $this->services['TYPO3\\CMS\\Core\\Category\\CategoryRegistry'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Category\CategoryRegistry::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Charset\CharsetConverter' shared service.
     *
     * @return \TYPO3\CMS\Core\Charset\CharsetConverter
     */
    protected function getCharsetConverterService()
    {
        return $this->services['TYPO3\\CMS\\Core\\Charset\\CharsetConverter'] = \TYPO3\CMS\Core\ServiceProvider::getCharsetConverter($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Command\DumpAutoloadCommand' shared autowired service.
     *
     * @return \TYPO3\CMS\Core\Command\DumpAutoloadCommand
     */
    protected function getDumpAutoloadCommandService()
    {
        $this->services['TYPO3\\CMS\\Core\\Command\\DumpAutoloadCommand'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Command\DumpAutoloadCommand::class);

        $instance->setName('dumpautoload');
        $instance->setAliases([0 => 'extensionmanager:extension:dumpclassloadinginformation', 1 => 'extension:dumpclassloadinginformation']);

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Command\ExtensionListCommand' shared autowired service.
     *
     * @return \TYPO3\CMS\Core\Command\ExtensionListCommand
     */
    protected function getExtensionListCommandService()
    {
        $this->services['TYPO3\\CMS\\Core\\Command\\ExtensionListCommand'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Command\ExtensionListCommand::class);

        $instance->setName('extension:list');

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Command\SendEmailCommand' shared autowired service.
     *
     * @return \TYPO3\CMS\Core\Command\SendEmailCommand
     */
    protected function getSendEmailCommandService()
    {
        $this->services['TYPO3\\CMS\\Core\\Command\\SendEmailCommand'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Command\SendEmailCommand::class);

        $instance->setName('mailer:spool:send');
        $instance->setAliases([0 => 'swiftmailer:spool:send']);

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Command\SiteListCommand' shared autowired service.
     *
     * @return \TYPO3\CMS\Core\Command\SiteListCommand
     */
    protected function getSiteListCommandService()
    {
        $this->services['TYPO3\\CMS\\Core\\Command\\SiteListCommand'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Command\SiteListCommand::class, ($this->privates['TYPO3\\CMS\\Core\\Site\\SiteFinder'] ?? $this->getSiteFinderService()));

        $instance->setName('site:list');

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Command\SiteShowCommand' shared autowired service.
     *
     * @return \TYPO3\CMS\Core\Command\SiteShowCommand
     */
    protected function getSiteShowCommandService()
    {
        $this->services['TYPO3\\CMS\\Core\\Command\\SiteShowCommand'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Command\SiteShowCommand::class);

        $instance->setName('site:show');

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Compatibility\SlotReplacement' shared autowired service.
     *
     * @return \TYPO3\CMS\Core\Compatibility\SlotReplacement
     */
    protected function getSlotReplacement3Service()
    {
        return $this->services['TYPO3\\CMS\\Core\\Compatibility\\SlotReplacement'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Compatibility\SlotReplacement::class, ($this->services['TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher'] ?? $this->getDispatcher2Service()), ($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service()));
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Configuration\Loader\PageTsConfigLoader' shared autowired service.
     *
     * @return \TYPO3\CMS\Core\Configuration\Loader\PageTsConfigLoader
     */
    protected function getPageTsConfigLoaderService()
    {
        return $this->services['TYPO3\\CMS\\Core\\Configuration\\Loader\\PageTsConfigLoader'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Configuration\Loader\PageTsConfigLoader::class, ($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service()));
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Configuration\SiteConfiguration' shared service.
     *
     * @return \TYPO3\CMS\Core\Configuration\SiteConfiguration
     */
    protected function getSiteConfigurationService()
    {
        return $this->services['TYPO3\\CMS\\Core\\Configuration\\SiteConfiguration'] = \TYPO3\CMS\Core\ServiceProvider::getSiteConfiguration($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Console\CommandApplication' shared service.
     *
     * @return \TYPO3\CMS\Core\Console\CommandApplication
     */
    protected function getCommandApplicationService()
    {
        return $this->services['TYPO3\\CMS\\Core\\Console\\CommandApplication'] = \TYPO3\CMS\Core\ServiceProvider::getConsoleCommandApplication($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Console\CommandRegistry_decorated_1' shared service.
     *
     * @return \TYPO3\CMS\Core\Console\CommandRegistry
     */
    protected function getCommandRegistryDecorated1Service()
    {
        $a = \TYPO3\CMS\Core\ServiceProvider::getConsoleCommandRegistry($this);
        $a->addLazyCommand('dumpautoload', 'TYPO3\\CMS\\Core\\Command\\DumpAutoloadCommand', false);
        $a->addLazyCommand('extensionmanager:extension:dumpclassloadinginformation', 'TYPO3\\CMS\\Core\\Command\\DumpAutoloadCommand', false);
        $a->addLazyCommand('extension:dumpclassloadinginformation', 'TYPO3\\CMS\\Core\\Command\\DumpAutoloadCommand', false);
        $a->addLazyCommand('extension:list', 'TYPO3\\CMS\\Core\\Command\\ExtensionListCommand', false);
        $a->addLazyCommand('mailer:spool:send', 'TYPO3\\CMS\\Core\\Command\\SendEmailCommand', true);
        $a->addLazyCommand('swiftmailer:spool:send', 'TYPO3\\CMS\\Core\\Command\\SendEmailCommand', false);
        $a->addLazyCommand('site:list', 'TYPO3\\CMS\\Core\\Command\\SiteListCommand', false);
        $a->addLazyCommand('site:show', 'TYPO3\\CMS\\Core\\Command\\SiteShowCommand', false);
        $a->addLazyCommand('scheduler:run', 'TYPO3\\CMS\\Scheduler\\Command\\SchedulerCommand', false);
        $a->addLazyCommand('impexp:import', 'TYPO3\\CMS\\Impexp\\Command\\ImportCommand', true);
        $a->addLazyCommand('backend:lock', 'TYPO3\\CMS\\Backend\\Command\\LockBackendCommand', true);
        $a->addLazyCommand('referenceindex:update', 'TYPO3\\CMS\\Backend\\Command\\ReferenceIndexUpdateCommand', true);
        $a->addLazyCommand('backend:resetpassword', 'TYPO3\\CMS\\Backend\\Command\\ResetPasswordCommand', false);
        $a->addLazyCommand('backend:unlock', 'TYPO3\\CMS\\Backend\\Command\\UnlockBackendCommand', true);
        $a->addLazyCommand('extension:activate', 'TYPO3\\CMS\\Extensionmanager\\Command\\ActivateExtensionCommand', false);
        $a->addLazyCommand('extensionmanager:extension:install', 'TYPO3\\CMS\\Extensionmanager\\Command\\ActivateExtensionCommand', false);
        $a->addLazyCommand('extension:install', 'TYPO3\\CMS\\Extensionmanager\\Command\\ActivateExtensionCommand', false);
        $a->addLazyCommand('extension:deactivate', 'TYPO3\\CMS\\Extensionmanager\\Command\\DeactivateExtensionCommand', false);
        $a->addLazyCommand('extensionmanager:extension:uninstall', 'TYPO3\\CMS\\Extensionmanager\\Command\\DeactivateExtensionCommand', false);
        $a->addLazyCommand('extension:uninstall', 'TYPO3\\CMS\\Extensionmanager\\Command\\DeactivateExtensionCommand', false);

        return $this->services['TYPO3\\CMS\\Core\\Console\\CommandRegistry_decorated_1'] = \TYPO3\CMS\Install\ServiceProvider::configureCommands($this, $a);
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Context\Context' shared service.
     *
     * @return \TYPO3\CMS\Core\Context\Context
     */
    protected function getContextService()
    {
        return $this->services['TYPO3\\CMS\\Core\\Context\\Context'] = \TYPO3\CMS\Core\ServiceProvider::getContext($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Controller\FileDumpController' shared autowired service.
     *
     * @return \TYPO3\CMS\Core\Controller\FileDumpController
     */
    protected function getFileDumpControllerService()
    {
        return $this->services['TYPO3\\CMS\\Core\\Controller\\FileDumpController'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Controller\FileDumpController::class, ($this->services['TYPO3\\CMS\\Core\\Resource\\ResourceFactory'] ?? $this->getResourceFactoryService()));
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Core\ClassLoadingInformation' shared autowired service.
     *
     * @return \TYPO3\CMS\Core\Core\ClassLoadingInformation
     */
    protected function getClassLoadingInformationService()
    {
        return $this->services['TYPO3\\CMS\\Core\\Core\\ClassLoadingInformation'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Core\ClassLoadingInformation::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Crypto\PasswordHashing\PasswordHashFactory' shared service.
     *
     * @return \TYPO3\CMS\Core\Crypto\PasswordHashing\PasswordHashFactory
     */
    protected function getPasswordHashFactoryService()
    {
        return $this->services['TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\PasswordHashFactory'] = \TYPO3\CMS\Core\ServiceProvider::getPasswordHashFactory($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Database\Schema\SqlReader' shared autowired service.
     *
     * @return \TYPO3\CMS\Core\Database\Schema\SqlReader
     */
    protected function getSqlReaderService()
    {
        return $this->services['TYPO3\\CMS\\Core\\Database\\Schema\\SqlReader'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Database\Schema\SqlReader::class, ($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service()), ($this->services['_early.TYPO3\\CMS\\Core\\Package\\PackageManager'] ?? $this->get('_early.TYPO3\\CMS\\Core\\Package\\PackageManager', 1)));
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Database\SoftReferenceIndex' shared autowired service.
     *
     * @return \TYPO3\CMS\Core\Database\SoftReferenceIndex
     */
    protected function getSoftReferenceIndexService()
    {
        return $this->services['TYPO3\\CMS\\Core\\Database\\SoftReferenceIndex'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Database\SoftReferenceIndex::class, ($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service()));
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Error\DebugExceptionHandler' shared autowired service.
     *
     * @return \TYPO3\CMS\Core\Error\DebugExceptionHandler
     */
    protected function getDebugExceptionHandlerService()
    {
        $this->services['TYPO3\\CMS\\Core\\Error\\DebugExceptionHandler'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Error\DebugExceptionHandler::class);

        $instance->setLogger(($this->services['_early.TYPO3\\CMS\\Core\\Log\\LogManager'] ?? $this->get('_early.TYPO3\\CMS\\Core\\Log\\LogManager', 1))->getLogger('TYPO3\\CMS\\Core\\Error\\DebugExceptionHandler'));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Error\ProductionExceptionHandler' shared autowired service.
     *
     * @return \TYPO3\CMS\Core\Error\ProductionExceptionHandler
     */
    protected function getProductionExceptionHandlerService()
    {
        $this->services['TYPO3\\CMS\\Core\\Error\\ProductionExceptionHandler'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Error\ProductionExceptionHandler::class);

        $instance->setLogger(($this->services['_early.TYPO3\\CMS\\Core\\Log\\LogManager'] ?? $this->get('_early.TYPO3\\CMS\\Core\\Log\\LogManager', 1))->getLogger('TYPO3\\CMS\\Core\\Error\\ProductionExceptionHandler'));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\EventDispatcher\EventDispatcher' shared service.
     *
     * @return \TYPO3\CMS\Core\EventDispatcher\EventDispatcher
     */
    protected function getEventDispatcherService()
    {
        return $this->services['TYPO3\\CMS\\Core\\EventDispatcher\\EventDispatcher'] = \TYPO3\CMS\Core\ServiceProvider::getEventDispatcher($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\EventDispatcher\ListenerProvider_decorated_1' shared service.
     *
     * @return \TYPO3\CMS\Core\EventDispatcher\ListenerProvider
     */
    protected function getListenerProviderDecorated1Service()
    {
        $a = \TYPO3\CMS\Core\ServiceProvider::getEventListenerProvider($this);
        $a->addListener('TYPO3\\CMS\\Core\\Database\\Event\\AlterTableDefinitionStatementsEvent', 'TYPO3\\CMS\\Core\\Cache\\DatabaseSchemaService', 'addCachingFrameworkDatabaseSchema');
        $a->addListener('TYPO3\\CMS\\Core\\Database\\Event\\AlterTableDefinitionStatementsEvent', 'TYPO3\\CMS\\Core\\Category\\CategoryRegistry', 'addCategoryDatabaseSchema');
        $a->addListener('TYPO3\\CMS\\Core\\Database\\Event\\AlterTableDefinitionStatementsEvent', 'TYPO3\\CMS\\Core\\Compatibility\\SlotReplacement', 'onSqlReaderEmitTablesDefinitionIsBeingBuiltSignal');
        $a->addListener('TYPO3\\CMS\\Core\\Resource\\Event\\AfterFileAddedToIndexEvent', 'TYPO3\\CMS\\Core\\Compatibility\\SlotReplacement', 'onFileIndexRepositoryRecordCreated');
        $a->addListener('TYPO3\\CMS\\Core\\Resource\\Event\\AfterFileRemovedFromIndexEvent', 'TYPO3\\CMS\\Core\\Compatibility\\SlotReplacement', 'onFileIndexRepositoryRecordDeleted');
        $a->addListener('TYPO3\\CMS\\Core\\Resource\\Event\\AfterFileMarkedAsMissingEvent', 'TYPO3\\CMS\\Core\\Compatibility\\SlotReplacement', 'onFileIndexRepositoryRecordMarkedAsMissing');
        $a->addListener('TYPO3\\CMS\\Core\\Resource\\Event\\AfterFileUpdatedInIndexEvent', 'TYPO3\\CMS\\Core\\Compatibility\\SlotReplacement', 'onFileIndexRepositoryRecordUpdated');
        $a->addListener('TYPO3\\CMS\\Core\\Resource\\Event\\AfterFileProcessingEvent', 'TYPO3\\CMS\\Core\\Compatibility\\SlotReplacement', 'onFileProcessingServiceEmitPostFileProcessSignal');
        $a->addListener('TYPO3\\CMS\\Core\\Resource\\Event\\BeforeFileProcessingEvent', 'TYPO3\\CMS\\Core\\Compatibility\\SlotReplacement', 'onFileProcessingServiceEmitPreFileProcessSignal');
        $a->addListener('TYPO3\\CMS\\Core\\Resource\\Event\\AfterFileMetaDataCreatedEvent', 'TYPO3\\CMS\\Core\\Compatibility\\SlotReplacement', 'onMetaDataRepositoryRecordCreated');
        $a->addListener('TYPO3\\CMS\\Core\\Resource\\Event\\AfterFileMetaDataDeletedEvent', 'TYPO3\\CMS\\Core\\Compatibility\\SlotReplacement', 'onMetaDataRepositoryRecordDeleted');
        $a->addListener('TYPO3\\CMS\\Core\\Resource\\Event\\EnrichFileMetaDataEvent', 'TYPO3\\CMS\\Core\\Compatibility\\SlotReplacement', 'onMetaDataRepositoryRecordPostRetrieval');
        $a->addListener('TYPO3\\CMS\\Core\\Resource\\Event\\EnrichFileMetaDataEvent', 'TYPO3\\CMS\\Frontend\\Aspect\\FileMetadataOverlayAspect', 'languageAndWorkspaceOverlay');
        $a->addListener('TYPO3\\CMS\\Core\\Resource\\Event\\AfterFileMetaDataUpdatedEvent', 'TYPO3\\CMS\\Core\\Compatibility\\SlotReplacement', 'onMetaDataRepositoryRecordUpdated');
        $a->addListener('TYPO3\\CMS\\Core\\Resource\\Event\\AfterFileMetaDataUpdatedEvent', 'TYPO3\\CMS\\Core\\Resource\\MetaDataEventListener', 'afterFileMetaDataUpdated');
        $a->addListener('TYPO3\\CMS\\Core\\Resource\\Event\\AfterResourceStorageInitializationEvent', 'TYPO3\\CMS\\Core\\Resource\\Security\\StoragePermissionsAspect', 'addUserPermissionsToStorage');
        $a->addListener('TYPO3\\CMS\\Core\\Resource\\Event\\AfterResourceStorageInitializationEvent', 'TYPO3\\CMS\\Core\\Compatibility\\SlotReplacement', 'onResourceFactoryPostProcessStorage');
        $a->addListener('TYPO3\\CMS\\Core\\Resource\\Event\\BeforeResourceStorageInitializationEvent', 'TYPO3\\CMS\\Core\\Compatibility\\SlotReplacement', 'onResourceFactoryPreProcessStorage');
        $a->addListener('TYPO3\\CMS\\Core\\Resource\\Event\\AfterFileAddedEvent', 'TYPO3\\CMS\\Core\\Resource\\Processing\\FileDeletionAspect', 'cleanupProcessedFilesPostFileAdd');
        $a->addListener('TYPO3\\CMS\\Core\\Resource\\Event\\AfterFileAddedEvent', 'TYPO3\\CMS\\Core\\Compatibility\\SlotReplacement', 'onResourceStorageEmitPostFileAddSignal');
        $a->addListener('TYPO3\\CMS\\Core\\Resource\\Event\\AfterFileCopiedEvent', 'TYPO3\\CMS\\Core\\Compatibility\\SlotReplacement', 'onResourceStorageEmitPostFileCopySignal');
        $a->addListener('TYPO3\\CMS\\Core\\Resource\\Event\\AfterFileCreatedEvent', 'TYPO3\\CMS\\Core\\Compatibility\\SlotReplacement', 'onResourceStorageEmitPostFileCreateSignal');
        $a->addListener('TYPO3\\CMS\\Core\\Resource\\Event\\AfterFileDeletedEvent', 'TYPO3\\CMS\\Core\\Resource\\Processing\\FileDeletionAspect', 'removeFromRepositoryAfterFileDeleted');
        $a->addListener('TYPO3\\CMS\\Core\\Resource\\Event\\AfterFileDeletedEvent', 'TYPO3\\CMS\\Core\\Compatibility\\SlotReplacement', 'onResourceStorageEmitPostFileDeleteSignal');
        $a->addListener('TYPO3\\CMS\\Core\\Resource\\Event\\AfterFileMovedEvent', 'TYPO3\\CMS\\Core\\Compatibility\\SlotReplacement', 'onResourceStorageEmitPostFileMoveSignal');
        $a->addListener('TYPO3\\CMS\\Core\\Resource\\Event\\AfterFileRenamedEvent', 'TYPO3\\CMS\\Core\\Compatibility\\SlotReplacement', 'onResourceStorageEmitPostFileRenameSignal');
        $a->addListener('TYPO3\\CMS\\Core\\Resource\\Event\\AfterFileReplacedEvent', 'TYPO3\\CMS\\Core\\Resource\\Processing\\FileDeletionAspect', 'cleanupProcessedFilesPostFileReplace');
        $a->addListener('TYPO3\\CMS\\Core\\Resource\\Event\\AfterFileReplacedEvent', 'TYPO3\\CMS\\Core\\Compatibility\\SlotReplacement', 'onResourceStorageEmitPostFileReplaceSignal');
        $a->addListener('TYPO3\\CMS\\Core\\Resource\\Event\\AfterFileContentsSetEvent', 'TYPO3\\CMS\\Core\\Compatibility\\SlotReplacement', 'onResourceStorageEmitPostFileSetContentsSignal');
        $a->addListener('TYPO3\\CMS\\Core\\Resource\\Event\\AfterFileContentsSetEvent', 'TYPO3\\CMS\\Core\\Resource\\Security\\SvgEventListener', 'afterFileContentsSet');
        $a->addListener('TYPO3\\CMS\\Core\\Resource\\Event\\AfterFolderAddedEvent', 'TYPO3\\CMS\\Core\\Compatibility\\SlotReplacement', 'onResourceStorageEmitPostFolderAddSignal');
        $a->addListener('TYPO3\\CMS\\Core\\Resource\\Event\\AfterFolderCopiedEvent', 'TYPO3\\CMS\\Core\\Compatibility\\SlotReplacement', 'onResourceStorageEmitPostFolderCopySignal');
        $a->addListener('TYPO3\\CMS\\Core\\Resource\\Event\\AfterFolderDeletedEvent', 'TYPO3\\CMS\\Core\\Compatibility\\SlotReplacement', 'onResourceStorageEmitPostFolderDeleteSignal');
        $a->addListener('TYPO3\\CMS\\Core\\Resource\\Event\\AfterFolderMovedEvent', 'TYPO3\\CMS\\Core\\Compatibility\\SlotReplacement', 'onResourceStorageEmitPostFolderMoveSignal');
        $a->addListener('TYPO3\\CMS\\Core\\Resource\\Event\\AfterFolderRenamedEvent', 'TYPO3\\CMS\\Core\\Compatibility\\SlotReplacement', 'onResourceStorageEmitPostFolderRenameSignal');
        $a->addListener('TYPO3\\CMS\\Core\\Resource\\Event\\BeforeFileAddedEvent', 'TYPO3\\CMS\\Form\\Slot\\FilePersistenceSlot', 'onPreFileAdd');
        $a->addListener('TYPO3\\CMS\\Core\\Resource\\Event\\BeforeFileAddedEvent', 'TYPO3\\CMS\\Core\\Compatibility\\SlotReplacement', 'onResourceStorageEmitPreFileAddSignal');
        $a->addListener('TYPO3\\CMS\\Core\\Resource\\Event\\BeforeFileAddedEvent', 'TYPO3\\CMS\\Core\\Resource\\Security\\SvgEventListener', 'beforeFileAdded');
        $a->addListener('TYPO3\\CMS\\Core\\Resource\\Event\\BeforeFileCopiedEvent', 'TYPO3\\CMS\\Core\\Compatibility\\SlotReplacement', 'onResourceStorageEmitPreFileCopySignal');
        $a->addListener('TYPO3\\CMS\\Core\\Resource\\Event\\BeforeFileCreatedEvent', 'TYPO3\\CMS\\Form\\Slot\\FilePersistenceSlot', 'onPreFileCreate');
        $a->addListener('TYPO3\\CMS\\Core\\Resource\\Event\\BeforeFileCreatedEvent', 'TYPO3\\CMS\\Core\\Compatibility\\SlotReplacement', 'onResourceStorageEmitPreFileCreateSignal');
        $a->addListener('TYPO3\\CMS\\Core\\Resource\\Event\\BeforeFileDeletedEvent', 'TYPO3\\CMS\\Core\\Compatibility\\SlotReplacement', 'onResourceStorageEmitPreFileDeleteSignal');
        $a->addListener('TYPO3\\CMS\\Core\\Resource\\Event\\BeforeFileMovedEvent', 'TYPO3\\CMS\\Form\\Slot\\FilePersistenceSlot', 'onPreFileMove');
        $a->addListener('TYPO3\\CMS\\Core\\Resource\\Event\\BeforeFileMovedEvent', 'TYPO3\\CMS\\Core\\Compatibility\\SlotReplacement', 'onResourceStorageEmitPreFileMoveSignal');
        $a->addListener('TYPO3\\CMS\\Core\\Resource\\Event\\BeforeFileRenamedEvent', 'TYPO3\\CMS\\Form\\Slot\\FilePersistenceSlot', 'onPreFileRename');
        $a->addListener('TYPO3\\CMS\\Core\\Resource\\Event\\BeforeFileRenamedEvent', 'TYPO3\\CMS\\Core\\Compatibility\\SlotReplacement', 'onResourceStorageEmitPreFileRenameSignal');
        $a->addListener('TYPO3\\CMS\\Core\\Resource\\Event\\BeforeFileReplacedEvent', 'TYPO3\\CMS\\Form\\Slot\\FilePersistenceSlot', 'onPreFileReplace');
        $a->addListener('TYPO3\\CMS\\Core\\Resource\\Event\\BeforeFileReplacedEvent', 'TYPO3\\CMS\\Core\\Compatibility\\SlotReplacement', 'onResourceStorageEmitPreFileReplaceSignal');
        $a->addListener('TYPO3\\CMS\\Core\\Resource\\Event\\BeforeFileReplacedEvent', 'TYPO3\\CMS\\Core\\Resource\\Security\\SvgEventListener', 'beforeFileReplaced');
        $a->addListener('TYPO3\\CMS\\Core\\Resource\\Event\\BeforeFileContentsSetEvent', 'TYPO3\\CMS\\Form\\Slot\\FilePersistenceSlot', 'onPreFileSetContents');
        $a->addListener('TYPO3\\CMS\\Core\\Resource\\Event\\BeforeFileContentsSetEvent', 'TYPO3\\CMS\\Core\\Compatibility\\SlotReplacement', 'onResourceStorageEmitPreFileSetContentsSignal');
        $a->addListener('TYPO3\\CMS\\Core\\Resource\\Event\\BeforeFolderAddedEvent', 'TYPO3\\CMS\\Core\\Compatibility\\SlotReplacement', 'onResourceStorageEmitPreFolderAddSignal');
        $a->addListener('TYPO3\\CMS\\Core\\Resource\\Event\\BeforeFolderCopiedEvent', 'TYPO3\\CMS\\Core\\Compatibility\\SlotReplacement', 'onResourceStorageEmitPreFolderCopySignal');
        $a->addListener('TYPO3\\CMS\\Core\\Resource\\Event\\BeforeFolderDeletedEvent', 'TYPO3\\CMS\\Core\\Compatibility\\SlotReplacement', 'onResourceStorageEmitPreFolderDeleteSignal');
        $a->addListener('TYPO3\\CMS\\Core\\Resource\\Event\\BeforeFolderMovedEvent', 'TYPO3\\CMS\\Core\\Compatibility\\SlotReplacement', 'onResourceStorageEmitPreFolderMoveSignal');
        $a->addListener('TYPO3\\CMS\\Core\\Resource\\Event\\BeforeFolderRenamedEvent', 'TYPO3\\CMS\\Core\\Compatibility\\SlotReplacement', 'onResourceStorageEmitPreFolderRenameSignal');
        $a->addListener('TYPO3\\CMS\\Core\\Resource\\Event\\GeneratePublicUrlForResourceEvent', 'TYPO3\\CMS\\Form\\Slot\\ResourcePublicationSlot', 'getPublicUrl');
        $a->addListener('TYPO3\\CMS\\Core\\Resource\\Event\\GeneratePublicUrlForResourceEvent', 'TYPO3\\CMS\\Core\\Compatibility\\SlotReplacement', 'onResourceStorageEmitPreGeneratePublicUrlSignal');
        $a->addListener('TYPO3\\CMS\\Core\\Resource\\Event\\SanitizeFileNameEvent', 'TYPO3\\CMS\\Core\\Compatibility\\SlotReplacement', 'onResourceStorageEmitSanitizeFileNameSignal');
        $a->addListener('TYPO3\\CMS\\Core\\DataHandling\\Event\\IsTableExcludedFromReferenceIndexEvent', 'TYPO3\\CMS\\Core\\Compatibility\\SlotReplacement', 'onReferenceIndexShouldExcludeTableFromReferenceIndexSignal');
        $a->addListener('TYPO3\\CMS\\Core\\DataHandling\\Event\\AppendLinkHandlerElementsEvent', 'TYPO3\\CMS\\Core\\Compatibility\\SlotReplacement', 'onSoftReferenceIndexSetTypoLinkPartsElementSignal');
        $a->addListener('TYPO3\\CMS\\Core\\Imaging\\Event\\ModifyIconForResourcePropertiesEvent', 'TYPO3\\CMS\\Core\\Compatibility\\SlotReplacement', 'onIconFactoryEmitBuildIconForResourceSignal');
        $a->addListener('TYPO3\\CMS\\Core\\Configuration\\Event\\AfterTcaCompilationEvent', 'TYPO3\\CMS\\Core\\Compatibility\\SlotReplacement', 'onExtensionManagementUtilityTcaIsBeingBuilt');
        $a->addListener('TYPO3\\CMS\\Core\\Tree\\Event\\ModifyTreeDataEvent', 'TYPO3\\CMS\\Backend\\Security\\CategoryPermissionsAspect', 'addUserPermissionsToCategoryTreeData');
        $a->addListener('TYPO3\\CMS\\Core\\Tree\\Event\\ModifyTreeDataEvent', 'TYPO3\\CMS\\Core\\Compatibility\\SlotReplacement', 'onDatabaseTreeDataProviderEmitPostProcessTreeDataSignal');
        $a->addListener('TYPO3\\CMS\\Core\\Package\\Event\\PackagesMayHaveChangedEvent', 'TYPO3\\CMS\\Core\\Compatibility\\SlotReplacement', 'packagesMayHaveChanged');
        $a->addListener('TYPO3\\CMS\\Core\\Mail\\Event\\AfterMailerInitializationEvent', 'TYPO3\\CMS\\Core\\Compatibility\\SlotReplacement', 'postInitializeMailer');
        $a->addListener('TYPO3\\CMS\\Core\\Package\\Event\\AfterPackageActivationEvent', 'BK2K\\BootstrapPackage\\Service\\BrandingService', NULL);
        $a->addListener('TYPO3\\CMS\\Core\\Package\\Event\\AfterPackageActivationEvent', 'TYPO3\\CMS\\Extensionmanager\\Compatibility\\SlotReplacement', 'afterExtensionInstallSlot');
        $a->addListener('TYPO3\\CMS\\Core\\Package\\Event\\AfterPackageActivationEvent', 'TYPO3\\CMS\\Core\\Core\\ClassLoadingInformation', 'updateClassLoadingInformationAfterPackageActivation');
        $a->addListener('TYPO3\\CMS\\Core\\Package\\Event\\AfterPackageDeactivationEvent', 'TYPO3\\CMS\\Extensionmanager\\Compatibility\\SlotReplacement', 'afterExtensionUninstallSlot');
        $a->addListener('TYPO3\\CMS\\Core\\Package\\Event\\AfterPackageDeactivationEvent', 'TYPO3\\CMS\\Core\\Core\\ClassLoadingInformation', 'updateClassLoadingInformationAfterPackageDeactivation');
        $a->addListener('TYPO3\\CMS\\Backend\\Backend\\Event\\SystemInformationToolbarCollectorEvent', 'TYPO3\\CMS\\Belog\\Controller\\SystemInformationController', 'appendMessage');
        $a->addListener('TYPO3\\CMS\\Backend\\Backend\\Event\\SystemInformationToolbarCollectorEvent', 'BK2K\\BootstrapPackage\\Backend\\ToolbarItem\\VersionToolbarItem', NULL);
        $a->addListener('TYPO3\\CMS\\Backend\\Backend\\Event\\SystemInformationToolbarCollectorEvent', 'TYPO3\\CMS\\Backend\\Compatibility\\SlotReplacement', 'onSystemInformationToolbarEvent');
        $a->addListener('TYPO3\\CMS\\Backend\\Backend\\Event\\SystemInformationToolbarCollectorEvent', 'TYPO3\\CMS\\Scheduler\\SystemInformation\\ToolbarItemProvider', 'getItem');
        $a->addListener('TYPO3\\CMS\\Extbase\\Event\\Mvc\\AfterRequestDispatchedEvent', 'TYPO3\\CMS\\Extbase\\Compatibility\\SlotReplacement', 'afterRequestDispatched');
        $a->addListener('TYPO3\\CMS\\Extbase\\Event\\Mvc\\BeforeActionCallEvent', 'TYPO3\\CMS\\Extbase\\Compatibility\\SlotReplacement', 'beforeCallActionMethod');
        $a->addListener('TYPO3\\CMS\\Extbase\\Event\\Persistence\\AfterObjectThawedEvent', 'TYPO3\\CMS\\Extbase\\Compatibility\\SlotReplacement', 'afterDataMappedForObject');
        $a->addListener('TYPO3\\CMS\\Extbase\\Event\\Persistence\\ModifyQueryBeforeFetchingObjectDataEvent', 'TYPO3\\CMS\\Extbase\\Compatibility\\SlotReplacement', 'emitBeforeGettingObjectDataSignal');
        $a->addListener('TYPO3\\CMS\\Extbase\\Event\\Persistence\\ModifyResultAfterFetchingObjectDataEvent', 'TYPO3\\CMS\\Extbase\\Compatibility\\SlotReplacement', 'emitAfterGettingObjectDataSignal');
        $a->addListener('TYPO3\\CMS\\Extbase\\Event\\Persistence\\EntityFinalizedAfterPersistenceEvent', 'TYPO3\\CMS\\Extbase\\Compatibility\\SlotReplacement', 'emitEndInsertObjectSignal');
        $a->addListener('TYPO3\\CMS\\Extbase\\Event\\Persistence\\EntityAddedToPersistenceEvent', 'TYPO3\\CMS\\Extbase\\Compatibility\\SlotReplacement', 'emitAfterInsertObjectSignal');
        $a->addListener('TYPO3\\CMS\\Extbase\\Event\\Persistence\\EntityUpdatedInPersistenceEvent', 'TYPO3\\CMS\\Extbase\\Compatibility\\SlotReplacement', 'emitAfterUpdateObjectSignal');
        $a->addListener('TYPO3\\CMS\\Extbase\\Event\\Persistence\\EntityRemovedFromPersistenceEvent', 'TYPO3\\CMS\\Extbase\\Compatibility\\SlotReplacement', 'emitAfterRemoveObjectSignal');
        $a->addListener('TYPO3\\CMS\\Extbase\\Event\\Persistence\\EntityPersistedEvent', 'TYPO3\\CMS\\Extbase\\Compatibility\\SlotReplacement', 'emitAfterPersistObjectSignal');
        $a->addListener('TYPO3\\CMS\\Impexp\\Event\\BeforeImportEvent', 'TYPO3\\CMS\\Impexp\\Compatibility\\SlotReplacement', 'emitAfterImportExportInitialisationSignal');
        $a->addListener('TYPO3\\CMS\\Install\\Service\\Event\\ModifyLanguagePackRemoteBaseUrlEvent', 'TYPO3\\CMS\\Install\\Compatibility\\SlotReplacement', 'onLanguagePackProcessMirrorUrl');
        $a->addListener('TYPO3\\CMS\\Backend\\LoginProvider\\Event\\ModifyPageLayoutOnLoginProviderSelectionEvent', 'TYPO3\\CMS\\Backend\\Compatibility\\SlotReplacement', 'onLoginProviderGetPageRenderer');
        $a->addListener('TYPO3\\CMS\\Core\\Configuration\\Event\\ModifyLoadedPageTsConfigEvent', 'TYPO3\\CMS\\Backend\\Compatibility\\SlotReplacement', 'emitGetPagesTSconfigPreIncludeSignalBackendUtility');
        $a->addListener('TYPO3\\CMS\\Backend\\Controller\\Event\\BeforeFormEnginePageInitializedEvent', 'TYPO3\\CMS\\Backend\\Compatibility\\SlotReplacement', 'onPreInitEditDocumentController');
        $a->addListener('TYPO3\\CMS\\Backend\\Controller\\Event\\AfterFormEnginePageInitializedEvent', 'TYPO3\\CMS\\Backend\\Compatibility\\SlotReplacement', 'onInitEditDocumentController');
        $a->addListener('TYPO3\\CMS\\Backend\\View\\Event\\AfterSectionMarkupGeneratedEvent', 'TYPO3\\CMS\\Backend\\View\\PageLayoutViewDrawEmptyColposContent', NULL);
        $a->addListener('TYPO3\\CMS\\Backend\\Authentication\\Event\\SwitchUserEvent', 'TYPO3\\CMS\\Beuser\\Compatibility\\SlotReplacement', 'onSwitchUser');
        $a->addListener('TYPO3\\CMS\\Core\\Package\\Event\\BeforePackageActivationEvent', 'TYPO3\\CMS\\Extensionmanager\\Compatibility\\SlotReplacement', 'emitWillInstallExtensionsSignal');
        $a->addListener('TYPO3\\CMS\\Extensionmanager\\Event\\AfterExtensionDatabaseContentHasBeenImportedEvent', 'TYPO3\\CMS\\Extensionmanager\\Compatibility\\SlotReplacement', 'emitAfterExtensionT3DImportSignal');
        $a->addListener('TYPO3\\CMS\\Extensionmanager\\Event\\AfterExtensionStaticDatabaseContentHasBeenImportedEvent', 'TYPO3\\CMS\\Extensionmanager\\Compatibility\\SlotReplacement', 'emitAfterExtensionStaticSqlImportSignal');
        $a->addListener('TYPO3\\CMS\\Extensionmanager\\Event\\AfterExtensionFilesHaveBeenImportedEvent', 'TYPO3\\CMS\\Extensionmanager\\Compatibility\\SlotReplacement', 'emitAfterExtensionFileImportSignal');
        $a->addListener('TYPO3\\CMS\\Extensionmanager\\Event\\AvailableActionsForExtensionEvent', 'TYPO3\\CMS\\Extensionmanager\\Compatibility\\SlotReplacement', 'emitProcessActionsSignal');
        $a->addListener('TYPO3\\CMS\\Seo\\Event\\ModifyUrlForCanonicalTagEvent', 'TYPO3\\CMS\\Seo\\Compatibility\\SlotReplacement', 'beforeGeneratingCanonical');
        $a->addListener('TYPO3\\CMS\\Frontend\\Event\\ModifyHrefLangTagsEvent', 'TYPO3\\CMS\\Seo\\HrefLang\\HrefLangGenerator', NULL);
        $a->addListener('Extcode\\Cart\\Event\\ProcessOrderCreateEvent', 'Extcode\\Cart\\EventListener\\ProcessOrderCreate\\Order', NULL);
        $a->addListener('Extcode\\Cart\\Event\\ProcessOrderCreateEvent', 'Extcode\\Cart\\EventListener\\ProcessOrderCreate\\OrderNumber', NULL);
        $a->addListener('Extcode\\Cart\\Event\\ProcessOrderCreateEvent', 'Extcode\\CartProducts\\EventListener\\ProcessOrderCreate\\HandleStock', NULL);
        $a->addListener('Extcode\\Cart\\Event\\ProcessOrderCreateEvent', 'Extcode\\CartProducts\\EventListener\\ProcessOrderCreate\\FlushCache', NULL);
        $a->addListener('Extcode\\Cart\\Event\\ProcessOrderCreateEvent', 'Extcode\\Cart\\EventListener\\ProcessOrderCreate\\Email', NULL);
        $a->addListener('Extcode\\Cart\\Event\\ProcessOrderCreateEvent', 'Extcode\\Cart\\EventListener\\ProcessOrderCreate\\ClearCart', NULL);
        $a->addListener('Extcode\\Cart\\Event\\Order\\FinishEvent', 'Extcode\\Cart\\EventListener\\Order\\Finish\\Email', NULL);
        $a->addListener('Extcode\\Cart\\Event\\Order\\FinishEvent', 'Extcode\\Cart\\EventListener\\Order\\Finish\\ClearCart', NULL);
        $a->addListener('Extcode\\Cart\\Event\\Order\\CreateEvent', 'Extcode\\Cart\\EventListener\\Order\\Create\\Order', NULL);
        $a->addListener('Extcode\\Cart\\Event\\Order\\CreateEvent', 'Extcode\\Cart\\EventListener\\Order\\Create\\OrderNumber', NULL);
        $a->addListener('Extcode\\Cart\\Event\\CheckProductAvailabilityEvent', 'Extcode\\CartProducts\\EventListener\\CheckProductAvailability', NULL);
        $a->addListener('Extcode\\Cart\\Event\\Order\\StockEvent', 'Extcode\\CartProducts\\EventListener\\Order\\Stock\\FlushCache', NULL);
        $a->addListener('Extcode\\Cart\\Event\\Order\\StockEvent', 'Extcode\\CartProducts\\EventListener\\Order\\Stock\\HandleStock', NULL);
        $a->addListener('Extcode\\Cart\\Event\\RetrieveProductsFromRequestEvent', 'Extcode\\CartProducts\\EventListener\\RetrieveProductsFromRequest', NULL);

        return $this->services['TYPO3\\CMS\\Core\\EventDispatcher\\ListenerProvider_decorated_1'] = \TYPO3\CMS\Core\ServiceProvider::extendEventListenerProvider($this, $a);
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Html\DefaultSanitizerBuilder' shared autowired service.
     *
     * @return \TYPO3\CMS\Core\Html\DefaultSanitizerBuilder
     */
    protected function getDefaultSanitizerBuilderService()
    {
        return $this->services['TYPO3\\CMS\\Core\\Html\\DefaultSanitizerBuilder'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Html\DefaultSanitizerBuilder::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Html\RteHtmlParser' shared autowired service.
     *
     * @return \TYPO3\CMS\Core\Html\RteHtmlParser
     */
    protected function getRteHtmlParserService()
    {
        $this->services['TYPO3\\CMS\\Core\\Html\\RteHtmlParser'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Html\RteHtmlParser::class, ($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service()));

        $instance->setLogger(($this->services['_early.TYPO3\\CMS\\Core\\Log\\LogManager'] ?? $this->get('_early.TYPO3\\CMS\\Core\\Log\\LogManager', 1))->getLogger('TYPO3\\CMS\\Core\\Html\\RteHtmlParser'));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Http\MiddlewareStackResolver' shared service.
     *
     * @return \TYPO3\CMS\Core\Http\MiddlewareStackResolver
     */
    protected function getMiddlewareStackResolverService()
    {
        return $this->services['TYPO3\\CMS\\Core\\Http\\MiddlewareStackResolver'] = \TYPO3\CMS\Core\ServiceProvider::getMiddlewareStackResolver($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Http\RequestFactory' shared service.
     *
     * @return \TYPO3\CMS\Core\Http\RequestFactory
     */
    protected function getRequestFactoryService()
    {
        return $this->services['TYPO3\\CMS\\Core\\Http\\RequestFactory'] = \TYPO3\CMS\Core\ServiceProvider::getRequestFactory($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Imaging\IconFactory' shared service.
     *
     * @return \TYPO3\CMS\Core\Imaging\IconFactory
     */
    protected function getIconFactoryService()
    {
        return $this->services['TYPO3\\CMS\\Core\\Imaging\\IconFactory'] = \TYPO3\CMS\Core\ServiceProvider::getIconFactory($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Imaging\IconRegistry' shared service.
     *
     * @return \TYPO3\CMS\Core\Imaging\IconRegistry
     */
    protected function getIconRegistryService()
    {
        return $this->services['TYPO3\\CMS\\Core\\Imaging\\IconRegistry'] = \TYPO3\CMS\Core\ServiceProvider::getIconRegistry($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\LinkHandling\LinkService' shared autowired service.
     *
     * @return \TYPO3\CMS\Core\LinkHandling\LinkService
     */
    protected function getLinkServiceService()
    {
        return $this->services['TYPO3\\CMS\\Core\\LinkHandling\\LinkService'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\LinkHandling\LinkService::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Localization\LanguageService' autowired service.
     *
     * @return \TYPO3\CMS\Core\Localization\LanguageService
     */
    protected function getLanguageServiceService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Localization\LanguageService::class, ($this->services['TYPO3\\CMS\\Core\\Localization\\Locales'] ?? $this->getLocalesService()), ($this->services['TYPO3\\CMS\\Core\\Localization\\LocalizationFactory'] ?? $this->getLocalizationFactoryService()));
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Localization\LanguageServiceFactory' shared service.
     *
     * @return \TYPO3\CMS\Core\Localization\LanguageServiceFactory
     */
    protected function getLanguageServiceFactoryService()
    {
        return $this->services['TYPO3\\CMS\\Core\\Localization\\LanguageServiceFactory'] = \TYPO3\CMS\Core\ServiceProvider::getLanguageServiceFactory($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Localization\LanguageStore' shared service.
     *
     * @return \TYPO3\CMS\Core\Localization\LanguageStore
     */
    protected function getLanguageStoreService()
    {
        return $this->services['TYPO3\\CMS\\Core\\Localization\\LanguageStore'] = \TYPO3\CMS\Core\ServiceProvider::getLanguageStore($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Localization\Locales' shared service.
     *
     * @return \TYPO3\CMS\Core\Localization\Locales
     */
    protected function getLocalesService()
    {
        return $this->services['TYPO3\\CMS\\Core\\Localization\\Locales'] = \TYPO3\CMS\Core\ServiceProvider::getLocales($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Localization\LocalizationFactory' shared service.
     *
     * @return \TYPO3\CMS\Core\Localization\LocalizationFactory
     */
    protected function getLocalizationFactoryService()
    {
        return $this->services['TYPO3\\CMS\\Core\\Localization\\LocalizationFactory'] = \TYPO3\CMS\Core\ServiceProvider::getLocalizationFactory($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Locking\LockFactory' shared autowired service.
     *
     * @return \TYPO3\CMS\Core\Locking\LockFactory
     */
    protected function getLockFactoryService()
    {
        return $this->services['TYPO3\\CMS\\Core\\Locking\\LockFactory'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Locking\LockFactory::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Mail\Mailer' shared autowired service.
     *
     * @return \TYPO3\CMS\Core\Mail\Mailer
     */
    protected function getMailerService()
    {
        $this->services['TYPO3\\CMS\\Core\\Mail\\Mailer'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Mail\Mailer::class, NULL, ($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service()));

        $instance->injectMailSettings();

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Mail\MemorySpool' shared autowired service.
     *
     * @return \TYPO3\CMS\Core\Mail\MemorySpool
     */
    protected function getMemorySpoolService()
    {
        return $this->services['TYPO3\\CMS\\Core\\Mail\\MemorySpool'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Mail\MemorySpool::class, ($this->services['TYPO3\\SymfonyPsrEventDispatcherAdapter\\EventDispatcherAdapter'] ?? $this->getEventDispatcherAdapterService()));
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Mail\TransportFactory' shared service.
     *
     * @return \TYPO3\CMS\Core\Mail\TransportFactory
     */
    protected function getTransportFactoryService()
    {
        return $this->services['TYPO3\\CMS\\Core\\Mail\\TransportFactory'] = \TYPO3\CMS\Core\ServiceProvider::getMailTransportFactory($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Messaging\FlashMessageService' shared service.
     *
     * @return \TYPO3\CMS\Core\Messaging\FlashMessageService
     */
    protected function getFlashMessageServiceService()
    {
        return $this->services['TYPO3\\CMS\\Core\\Messaging\\FlashMessageService'] = \TYPO3\CMS\Core\ServiceProvider::getFlashMessageService($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\MetaTag\MetaTagManagerRegistry' shared autowired service.
     *
     * @return \TYPO3\CMS\Core\MetaTag\MetaTagManagerRegistry
     */
    protected function getMetaTagManagerRegistryService()
    {
        return $this->services['TYPO3\\CMS\\Core\\MetaTag\\MetaTagManagerRegistry'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\MetaTag\MetaTagManagerRegistry::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Middleware\NormalizedParamsAttribute' shared autowired service.
     *
     * @return \TYPO3\CMS\Core\Middleware\NormalizedParamsAttribute
     */
    protected function getNormalizedParamsAttributeService()
    {
        return $this->services['TYPO3\\CMS\\Core\\Middleware\\NormalizedParamsAttribute'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Middleware\NormalizedParamsAttribute::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Package\FailsafePackageManager' shared service.
     *
     * @return \TYPO3\CMS\Core\Package\FailsafePackageManager
     */
    protected function getFailsafePackageManagerService()
    {
        return $this->services['TYPO3\\CMS\\Core\\Package\\FailsafePackageManager'] = \TYPO3\CMS\Core\ServiceProvider::getFailsafePackageManager($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\PageTitle\PageTitleProviderManager' shared autowired service.
     *
     * @return \TYPO3\CMS\Core\PageTitle\PageTitleProviderManager
     */
    protected function getPageTitleProviderManagerService()
    {
        $this->services['TYPO3\\CMS\\Core\\PageTitle\\PageTitleProviderManager'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\PageTitle\PageTitleProviderManager::class);

        $instance->setLogger(($this->services['_early.TYPO3\\CMS\\Core\\Log\\LogManager'] ?? $this->get('_early.TYPO3\\CMS\\Core\\Log\\LogManager', 1))->getLogger('TYPO3\\CMS\\Core\\PageTitle\\PageTitleProviderManager'));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\PageTitle\RecordPageTitleProvider' shared autowired service.
     *
     * @return \TYPO3\CMS\Core\PageTitle\RecordPageTitleProvider
     */
    protected function getRecordPageTitleProviderService()
    {
        return $this->services['TYPO3\\CMS\\Core\\PageTitle\\RecordPageTitleProvider'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\PageTitle\RecordPageTitleProvider::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Page\AssetCollector' shared autowired service.
     *
     * @return \TYPO3\CMS\Core\Page\AssetCollector
     */
    protected function getAssetCollectorService()
    {
        return $this->services['TYPO3\\CMS\\Core\\Page\\AssetCollector'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Page\AssetCollector::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Page\AssetRenderer' shared autowired service.
     *
     * @return \TYPO3\CMS\Core\Page\AssetRenderer
     */
    protected function getAssetRendererService()
    {
        return $this->services['TYPO3\\CMS\\Core\\Page\\AssetRenderer'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Page\AssetRenderer::class, ($this->services['TYPO3\\CMS\\Core\\Page\\AssetCollector'] ?? ($this->services['TYPO3\\CMS\\Core\\Page\\AssetCollector'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Page\AssetCollector::class))), ($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service()));
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Page\PageRenderer' shared autowired service.
     *
     * @return \TYPO3\CMS\Core\Page\PageRenderer
     */
    protected function getPageRendererService()
    {
        return $this->services['TYPO3\\CMS\\Core\\Page\\PageRenderer'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Page\PageRenderer::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Registry' shared service.
     *
     * @return \TYPO3\CMS\Core\Registry
     */
    protected function getRegistryService()
    {
        return $this->services['TYPO3\\CMS\\Core\\Registry'] = \TYPO3\CMS\Core\ServiceProvider::getRegistry($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Resource\Collection\FileCollectionRegistry' shared autowired service.
     *
     * @return \TYPO3\CMS\Core\Resource\Collection\FileCollectionRegistry
     */
    protected function getFileCollectionRegistryService()
    {
        return $this->services['TYPO3\\CMS\\Core\\Resource\\Collection\\FileCollectionRegistry'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Resource\Collection\FileCollectionRegistry::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Resource\Driver\DriverRegistry' shared service.
     *
     * @return \TYPO3\CMS\Core\Resource\Driver\DriverRegistry
     */
    protected function getDriverRegistryService()
    {
        return $this->services['TYPO3\\CMS\\Core\\Resource\\Driver\\DriverRegistry'] = \TYPO3\CMS\Core\ServiceProvider::getDriverRegistry($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Resource\FileRepository' shared autowired service.
     *
     * @return \TYPO3\CMS\Core\Resource\FileRepository
     */
    protected function getFileRepositoryService()
    {
        return $this->services['TYPO3\\CMS\\Core\\Resource\\FileRepository'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Resource\FileRepository::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Resource\Index\ExtractorRegistry' shared autowired service.
     *
     * @return \TYPO3\CMS\Core\Resource\Index\ExtractorRegistry
     */
    protected function getExtractorRegistryService()
    {
        return $this->services['TYPO3\\CMS\\Core\\Resource\\Index\\ExtractorRegistry'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Resource\Index\ExtractorRegistry::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Resource\Index\FileIndexRepository' shared service.
     *
     * @return \TYPO3\CMS\Core\Resource\Index\FileIndexRepository
     */
    protected function getFileIndexRepositoryService()
    {
        return $this->services['TYPO3\\CMS\\Core\\Resource\\Index\\FileIndexRepository'] = \TYPO3\CMS\Core\ServiceProvider::getFileIndexRepository($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Resource\Index\MetaDataRepository' shared service.
     *
     * @return \TYPO3\CMS\Core\Resource\Index\MetaDataRepository
     */
    protected function getMetaDataRepositoryService()
    {
        return $this->services['TYPO3\\CMS\\Core\\Resource\\Index\\MetaDataRepository'] = \TYPO3\CMS\Core\ServiceProvider::getMetaDataRepository($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Resource\MetaDataEventListener' shared autowired service.
     *
     * @return \TYPO3\CMS\Core\Resource\MetaDataEventListener
     */
    protected function getMetaDataEventListenerService()
    {
        return $this->services['TYPO3\\CMS\\Core\\Resource\\MetaDataEventListener'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Resource\MetaDataEventListener::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Resource\OnlineMedia\Helpers\OnlineMediaHelperRegistry' shared autowired service.
     *
     * @return \TYPO3\CMS\Core\Resource\OnlineMedia\Helpers\OnlineMediaHelperRegistry
     */
    protected function getOnlineMediaHelperRegistryService()
    {
        return $this->services['TYPO3\\CMS\\Core\\Resource\\OnlineMedia\\Helpers\\OnlineMediaHelperRegistry'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Resource\OnlineMedia\Helpers\OnlineMediaHelperRegistry::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Resource\ProcessedFileRepository' shared service.
     *
     * @return \TYPO3\CMS\Core\Resource\ProcessedFileRepository
     */
    protected function getProcessedFileRepositoryService()
    {
        return $this->services['TYPO3\\CMS\\Core\\Resource\\ProcessedFileRepository'] = \TYPO3\CMS\Core\ServiceProvider::getProcessedFileRepository($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Resource\Processing\FileDeletionAspect' shared autowired service.
     *
     * @return \TYPO3\CMS\Core\Resource\Processing\FileDeletionAspect
     */
    protected function getFileDeletionAspectService()
    {
        return $this->services['TYPO3\\CMS\\Core\\Resource\\Processing\\FileDeletionAspect'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Resource\Processing\FileDeletionAspect::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Resource\Processing\ProcessorRegistry' shared autowired service.
     *
     * @return \TYPO3\CMS\Core\Resource\Processing\ProcessorRegistry
     */
    protected function getProcessorRegistryService()
    {
        return $this->services['TYPO3\\CMS\\Core\\Resource\\Processing\\ProcessorRegistry'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Resource\Processing\ProcessorRegistry::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Resource\Processing\TaskTypeRegistry' shared autowired service.
     *
     * @return \TYPO3\CMS\Core\Resource\Processing\TaskTypeRegistry
     */
    protected function getTaskTypeRegistryService()
    {
        return $this->services['TYPO3\\CMS\\Core\\Resource\\Processing\\TaskTypeRegistry'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Resource\Processing\TaskTypeRegistry::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Resource\Rendering\AudioTagRenderer' shared autowired service.
     *
     * @return \TYPO3\CMS\Core\Resource\Rendering\AudioTagRenderer
     */
    protected function getAudioTagRendererService()
    {
        return $this->services['TYPO3\\CMS\\Core\\Resource\\Rendering\\AudioTagRenderer'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Resource\Rendering\AudioTagRenderer::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Resource\Rendering\RendererRegistry' shared autowired service.
     *
     * @return \TYPO3\CMS\Core\Resource\Rendering\RendererRegistry
     */
    protected function getRendererRegistryService()
    {
        return $this->services['TYPO3\\CMS\\Core\\Resource\\Rendering\\RendererRegistry'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Resource\Rendering\RendererRegistry::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Resource\Rendering\VideoTagRenderer' shared autowired service.
     *
     * @return \TYPO3\CMS\Core\Resource\Rendering\VideoTagRenderer
     */
    protected function getVideoTagRendererService()
    {
        return $this->services['TYPO3\\CMS\\Core\\Resource\\Rendering\\VideoTagRenderer'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Resource\Rendering\VideoTagRenderer::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Resource\Rendering\VimeoRenderer' shared autowired service.
     *
     * @return \TYPO3\CMS\Core\Resource\Rendering\VimeoRenderer
     */
    protected function getVimeoRendererService()
    {
        return $this->services['TYPO3\\CMS\\Core\\Resource\\Rendering\\VimeoRenderer'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Resource\Rendering\VimeoRenderer::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Resource\Rendering\YouTubeRenderer' shared autowired service.
     *
     * @return \TYPO3\CMS\Core\Resource\Rendering\YouTubeRenderer
     */
    protected function getYouTubeRendererService()
    {
        return $this->services['TYPO3\\CMS\\Core\\Resource\\Rendering\\YouTubeRenderer'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Resource\Rendering\YouTubeRenderer::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Resource\ResourceFactory' shared service.
     *
     * @return \TYPO3\CMS\Core\Resource\ResourceFactory
     */
    protected function getResourceFactoryService()
    {
        return $this->services['TYPO3\\CMS\\Core\\Resource\\ResourceFactory'] = \TYPO3\CMS\Core\ServiceProvider::getResourceFactory($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Resource\Security\FileMetadataPermissionsAspect' shared autowired service.
     *
     * @return \TYPO3\CMS\Core\Resource\Security\FileMetadataPermissionsAspect
     */
    protected function getFileMetadataPermissionsAspectService()
    {
        return $this->services['TYPO3\\CMS\\Core\\Resource\\Security\\FileMetadataPermissionsAspect'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Resource\Security\FileMetadataPermissionsAspect::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Resource\Security\StoragePermissionsAspect' shared autowired service.
     *
     * @return \TYPO3\CMS\Core\Resource\Security\StoragePermissionsAspect
     */
    protected function getStoragePermissionsAspectService()
    {
        return $this->services['TYPO3\\CMS\\Core\\Resource\\Security\\StoragePermissionsAspect'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Resource\Security\StoragePermissionsAspect::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Resource\Security\SvgEventListener' shared autowired service.
     *
     * @return \TYPO3\CMS\Core\Resource\Security\SvgEventListener
     */
    protected function getSvgEventListenerService()
    {
        return $this->services['TYPO3\\CMS\\Core\\Resource\\Security\\SvgEventListener'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Resource\Security\SvgEventListener::class, ($this->privates['TYPO3\\CMS\\Core\\Resource\\Security\\SvgSanitizer'] ?? ($this->privates['TYPO3\\CMS\\Core\\Resource\\Security\\SvgSanitizer'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Resource\Security\SvgSanitizer::class))), ($this->services['TYPO3\\CMS\\Core\\Resource\\Security\\SvgTypeCheck'] ?? $this->getSvgTypeCheckService()));
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Resource\Security\SvgHookHandler' shared autowired service.
     *
     * @return \TYPO3\CMS\Core\Resource\Security\SvgHookHandler
     */
    protected function getSvgHookHandlerService()
    {
        return $this->services['TYPO3\\CMS\\Core\\Resource\\Security\\SvgHookHandler'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Resource\Security\SvgHookHandler::class, ($this->privates['TYPO3\\CMS\\Core\\Resource\\Security\\SvgSanitizer'] ?? ($this->privates['TYPO3\\CMS\\Core\\Resource\\Security\\SvgSanitizer'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Resource\Security\SvgSanitizer::class))), ($this->services['TYPO3\\CMS\\Core\\Resource\\Security\\SvgTypeCheck'] ?? $this->getSvgTypeCheckService()));
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Resource\Security\SvgTypeCheck' shared autowired service.
     *
     * @return \TYPO3\CMS\Core\Resource\Security\SvgTypeCheck
     */
    protected function getSvgTypeCheckService()
    {
        return $this->services['TYPO3\\CMS\\Core\\Resource\\Security\\SvgTypeCheck'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Resource\Security\SvgTypeCheck::class, \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Resource\MimeTypeDetector::class));
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Resource\StorageRepository' shared service.
     *
     * @return \TYPO3\CMS\Core\Resource\StorageRepository
     */
    protected function getStorageRepositoryService()
    {
        return $this->services['TYPO3\\CMS\\Core\\Resource\\StorageRepository'] = \TYPO3\CMS\Core\ServiceProvider::getStorageRepository($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Resource\TextExtraction\TextExtractorRegistry' shared autowired service.
     *
     * @return \TYPO3\CMS\Core\Resource\TextExtraction\TextExtractorRegistry
     */
    protected function getTextExtractorRegistryService()
    {
        return $this->services['TYPO3\\CMS\\Core\\Resource\\TextExtraction\\TextExtractorRegistry'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Resource\TextExtraction\TextExtractorRegistry::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Routing\SiteMatcher' shared autowired service.
     *
     * @return \TYPO3\CMS\Core\Routing\SiteMatcher
     */
    protected function getSiteMatcherService()
    {
        return $this->services['TYPO3\\CMS\\Core\\Routing\\SiteMatcher'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Routing\SiteMatcher::class, ($this->privates['TYPO3\\CMS\\Core\\Site\\SiteFinder'] ?? $this->getSiteFinderService()));
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Service\DependencyOrderingService' shared service.
     *
     * @return \TYPO3\CMS\Core\Service\DependencyOrderingService
     */
    protected function getDependencyOrderingServiceService()
    {
        return $this->services['TYPO3\\CMS\\Core\\Service\\DependencyOrderingService'] = \TYPO3\CMS\Core\ServiceProvider::getDependencyOrderingService($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Service\FlexFormService' shared service.
     *
     * @return \TYPO3\CMS\Core\Service\FlexFormService
     */
    protected function getFlexFormServiceService()
    {
        return $this->services['TYPO3\\CMS\\Core\\Service\\FlexFormService'] = \TYPO3\CMS\Core\ServiceProvider::getFlexFormService($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Service\OpcodeCacheService' shared service.
     *
     * @return \TYPO3\CMS\Core\Service\OpcodeCacheService
     */
    protected function getOpcodeCacheServiceService()
    {
        return $this->services['TYPO3\\CMS\\Core\\Service\\OpcodeCacheService'] = \TYPO3\CMS\Core\ServiceProvider::getOpcodeCacheService($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Session\SessionManager' shared autowired service.
     *
     * @return \TYPO3\CMS\Core\Session\SessionManager
     */
    protected function getSessionManagerService()
    {
        return $this->services['TYPO3\\CMS\\Core\\Session\\SessionManager'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Session\SessionManager::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\TimeTracker\TimeTracker' shared service.
     *
     * @return \TYPO3\CMS\Core\TimeTracker\TimeTracker
     */
    protected function getTimeTrackerService()
    {
        return $this->services['TYPO3\\CMS\\Core\\TimeTracker\\TimeTracker'] = \TYPO3\CMS\Core\ServiceProvider::getTimeTracker($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\Tree\TableConfiguration\DatabaseTreeDataProvider' autowired service.
     *
     * @return \TYPO3\CMS\Core\Tree\TableConfiguration\DatabaseTreeDataProvider
     */
    protected function getDatabaseTreeDataProviderService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Tree\TableConfiguration\DatabaseTreeDataProvider::class, ($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service()));
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\TypoScript\Parser\ConstantConfigurationParser' shared service.
     *
     * @return \TYPO3\CMS\Core\TypoScript\Parser\ConstantConfigurationParser
     */
    protected function getConstantConfigurationParserService()
    {
        return $this->services['TYPO3\\CMS\\Core\\TypoScript\\Parser\\ConstantConfigurationParser'] = \TYPO3\CMS\Core\ServiceProvider::getTypoScriptConstantConfigurationParser($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\TypoScript\TypoScriptService' shared service.
     *
     * @return \TYPO3\CMS\Core\TypoScript\TypoScriptService
     */
    protected function getTypoScriptServiceService()
    {
        return $this->services['TYPO3\\CMS\\Core\\TypoScript\\TypoScriptService'] = \TYPO3\CMS\Core\ServiceProvider::getTypoScriptService($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\ViewHelpers\Form\TypoScriptConstantsViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Core\ViewHelpers\Form\TypoScriptConstantsViewHelper
     */
    protected function getTypoScriptConstantsViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\ViewHelpers\Form\TypoScriptConstantsViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
     */
    protected function getIconForRecordViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\ViewHelpers\IconForResourceViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Core\ViewHelpers\IconForResourceViewHelper
     */
    protected function getIconForResourceViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\ViewHelpers\IconForResourceViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Core\ViewHelpers\IconViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Core\ViewHelpers\IconViewHelper
     */
    protected function getIconViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\ViewHelpers\IconViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Dashboard\Controller\DashboardController' shared autowired service.
     *
     * @return \TYPO3\CMS\Dashboard\Controller\DashboardController
     */
    protected function getDashboardControllerService()
    {
        $a = ($this->services['TYPO3\\CMS\\Dashboard\\DashboardPresetRegistry_decorated_1'] ?? $this->getDashboardPresetRegistryDecorated1Service());
        $b = ($this->privates['TYPO3\\CMS\\Dashboard\\DashboardRepository'] ?? $this->getDashboardRepositoryService());

        return $this->services['TYPO3\\CMS\\Dashboard\\Controller\\DashboardController'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Dashboard\Controller\DashboardController::class, \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Backend\Template\ModuleTemplate::class, ($this->services['TYPO3\\CMS\\Core\\Page\\PageRenderer'] ?? ($this->services['TYPO3\\CMS\\Core\\Page\\PageRenderer'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Page\PageRenderer::class))), ($this->services['TYPO3\\CMS\\Core\\Imaging\\IconFactory'] ?? $this->getIconFactoryService()), ($this->services['TYPO3\\CMS\\Core\\Messaging\\FlashMessageService'] ?? $this->getFlashMessageServiceService())), ($this->services['TYPO3\\CMS\\Backend\\Routing\\UriBuilder'] ?? $this->getUriBuilderService()), $a, $b, \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Dashboard\DashboardInitializationService::class, $b, $a), \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Dashboard\WidgetGroupInitializationService::class, ($this->services['TYPO3\\CMS\\Dashboard\\WidgetGroupRegistry_decorated_1'] ?? $this->getWidgetGroupRegistryDecorated1Service()), ($this->services['TYPO3\\CMS\\Dashboard\\WidgetRegistry'] ?? $this->getWidgetRegistryService())));
    }

    /**
     * Gets the public 'TYPO3\CMS\Dashboard\Controller\WidgetAjaxController' shared autowired service.
     *
     * @return \TYPO3\CMS\Dashboard\Controller\WidgetAjaxController
     */
    protected function getWidgetAjaxControllerService()
    {
        return $this->services['TYPO3\\CMS\\Dashboard\\Controller\\WidgetAjaxController'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Dashboard\Controller\WidgetAjaxController::class, ($this->privates['TYPO3\\CMS\\Dashboard\\DashboardRepository'] ?? $this->getDashboardRepositoryService()), ($this->services['TYPO3\\CMS\\Dashboard\\WidgetRegistry'] ?? $this->getWidgetRegistryService()));
    }

    /**
     * Gets the public 'TYPO3\CMS\Dashboard\DashboardPresetRegistry_decorated_1' shared service.
     *
     * @return \TYPO3\CMS\Dashboard\DashboardPresetRegistry
     */
    protected function getDashboardPresetRegistryDecorated1Service()
    {
        return $this->services['TYPO3\\CMS\\Dashboard\\DashboardPresetRegistry_decorated_1'] = \TYPO3\CMS\Dashboard\ServiceProvider::configureDashboardPresetRegistry($this, \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Dashboard\DashboardPresetRegistry::class));
    }

    /**
     * Gets the public 'TYPO3\CMS\Dashboard\WidgetGroupRegistry_decorated_1' shared service.
     *
     * @return \TYPO3\CMS\Dashboard\WidgetGroupRegistry
     */
    protected function getWidgetGroupRegistryDecorated1Service()
    {
        return $this->services['TYPO3\\CMS\\Dashboard\\WidgetGroupRegistry_decorated_1'] = \TYPO3\CMS\Dashboard\ServiceProvider::configureWidgetGroupRegistry($this, \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Dashboard\WidgetGroupRegistry::class));
    }

    /**
     * Gets the public 'TYPO3\CMS\Dashboard\WidgetRegistry' shared autowired service.
     *
     * @return \TYPO3\CMS\Dashboard\WidgetRegistry
     */
    protected function getWidgetRegistryService()
    {
        $this->services['TYPO3\\CMS\\Dashboard\\WidgetRegistry'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Dashboard\WidgetRegistry::class, $this);

        $instance->registerWidget('t3newsWidgetConfiguration');
        $instance->registerWidget('sysLogErrorsWidgetConfiguration');
        $instance->registerWidget('docGettingStartedWidgetConfiguration');
        $instance->registerWidget('docTypoScriptReferenceWidgetConfiguration');
        $instance->registerWidget('docTSconfigWidgetConfiguration');
        $instance->registerWidget('t3informationWidgetConfiguration');
        $instance->registerWidget('typeOfUsersWidgetConfiguration');
        $instance->registerWidget('t3securityAdvisoriesWidgetConfiguration');
        $instance->registerWidget('failedLoginsWidgetConfiguration');
        $instance->registerWidget('PaymentPaidShippingOpenWidgetConfiguration');
        $instance->registerWidget('OrdersPerDayWidgetConfiguration');
        $instance->registerWidget('TurnoverPerDayWidgetConfiguration');

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Extbase\Compatibility\SlotReplacement' shared autowired service.
     *
     * @return \TYPO3\CMS\Extbase\Compatibility\SlotReplacement
     */
    protected function getSlotReplacement4Service()
    {
        return $this->services['TYPO3\\CMS\\Extbase\\Compatibility\\SlotReplacement'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extbase\Compatibility\SlotReplacement::class, ($this->services['TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher'] ?? $this->getDispatcher2Service()));
    }

    /**
     * Gets the public 'TYPO3\CMS\Extbase\Configuration\BackendConfigurationManager' shared service.
     *
     * @return \TYPO3\CMS\Extbase\Configuration\BackendConfigurationManager
     */
    protected function getBackendConfigurationManagerService()
    {
        return $this->services['TYPO3\\CMS\\Extbase\\Configuration\\BackendConfigurationManager'] = \TYPO3\CMS\Extbase\ServiceProvider::getBackendConfigurationManager($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Extbase\Configuration\ConfigurationManager' shared service.
     *
     * @return \TYPO3\CMS\Extbase\Configuration\ConfigurationManager
     */
    protected function getConfigurationManagerService()
    {
        return $this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] = \TYPO3\CMS\Extbase\ServiceProvider::getConfigurationManager($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Extbase\Configuration\FrontendConfigurationManager' shared autowired service.
     *
     * @return \TYPO3\CMS\Extbase\Configuration\FrontendConfigurationManager
     */
    protected function getFrontendConfigurationManagerService()
    {
        return $this->services['TYPO3\\CMS\\Extbase\\Configuration\\FrontendConfigurationManager'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extbase\Configuration\FrontendConfigurationManager::class, ($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()), ($this->services['TYPO3\\CMS\\Core\\TypoScript\\TypoScriptService'] ?? $this->getTypoScriptServiceService()), ($this->services['TYPO3\\CMS\\Extbase\\Service\\EnvironmentService'] ?? $this->getEnvironmentServiceService()), ($this->services['TYPO3\\CMS\\Core\\Service\\FlexFormService'] ?? $this->getFlexFormServiceService()));
    }

    /**
     * Gets the public 'TYPO3\CMS\Extbase\Configuration\RequestHandlersConfigurationFactory' shared autowired service.
     *
     * @return \TYPO3\CMS\Extbase\Configuration\RequestHandlersConfigurationFactory
     */
    protected function getRequestHandlersConfigurationFactoryService()
    {
        return $this->services['TYPO3\\CMS\\Extbase\\Configuration\\RequestHandlersConfigurationFactory'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extbase\Configuration\RequestHandlersConfigurationFactory::class, ($this->services['TYPO3\\CMS\\Core\\Cache\\CacheManager'] ?? $this->getCacheManagerService()));
    }

    /**
     * Gets the public 'TYPO3\CMS\Extbase\Core\Bootstrap' autowired service.
     *
     * @return \TYPO3\CMS\Extbase\Core\Bootstrap
     */
    protected function getBootstrapService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extbase\Core\Bootstrap::class, $this, ($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()), ($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()), ($this->privates['TYPO3\\CMS\\Extbase\\Mvc\\RequestHandlerResolver'] ?? $this->getRequestHandlerResolverService()), ($this->services['TYPO3\\CMS\\Extbase\\Service\\CacheService'] ?? $this->getCacheServiceService()));
    }

    /**
     * Gets the public 'TYPO3\CMS\Extbase\Domain\Repository\BackendUserGroupRepository' shared autowired service.
     *
     * @return \TYPO3\CMS\Extbase\Domain\Repository\BackendUserGroupRepository
     */
    protected function getBackendUserGroupRepository2Service()
    {
        $this->services['TYPO3\\CMS\\Extbase\\Domain\\Repository\\BackendUserGroupRepository'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extbase\Domain\Repository\BackendUserGroupRepository::class, ($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));

        $instance->injectPersistenceManager(($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()));
        $instance->initializeObject();

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Extbase\Domain\Repository\BackendUserRepository' shared autowired service.
     *
     * @return \TYPO3\CMS\Extbase\Domain\Repository\BackendUserRepository
     */
    protected function getBackendUserRepository2Service()
    {
        $this->services['TYPO3\\CMS\\Extbase\\Domain\\Repository\\BackendUserRepository'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extbase\Domain\Repository\BackendUserRepository::class, ($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));

        $instance->injectPersistenceManager(($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()));
        $instance->initializeObject();

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Extbase\Domain\Repository\CategoryRepository' shared autowired service.
     *
     * @return \TYPO3\CMS\Extbase\Domain\Repository\CategoryRepository
     */
    protected function getCategoryRepository2Service()
    {
        $this->services['TYPO3\\CMS\\Extbase\\Domain\\Repository\\CategoryRepository'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extbase\Domain\Repository\CategoryRepository::class, ($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));

        $instance->injectPersistenceManager(($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()));
        $instance->initializeObject();

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Extbase\Domain\Repository\FileMountRepository' shared autowired service.
     *
     * @return \TYPO3\CMS\Extbase\Domain\Repository\FileMountRepository
     */
    protected function getFileMountRepositoryService()
    {
        $this->services['TYPO3\\CMS\\Extbase\\Domain\\Repository\\FileMountRepository'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extbase\Domain\Repository\FileMountRepository::class, ($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));

        $instance->injectPersistenceManager(($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()));
        $instance->initializeObject();

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Extbase\Domain\Repository\FrontendUserGroupRepository' shared autowired service.
     *
     * @return \TYPO3\CMS\Extbase\Domain\Repository\FrontendUserGroupRepository
     */
    protected function getFrontendUserGroupRepositoryService()
    {
        $this->services['TYPO3\\CMS\\Extbase\\Domain\\Repository\\FrontendUserGroupRepository'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extbase\Domain\Repository\FrontendUserGroupRepository::class, ($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));

        $instance->injectPersistenceManager(($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Extbase\Domain\Repository\FrontendUserRepository' shared autowired service.
     *
     * @return \TYPO3\CMS\Extbase\Domain\Repository\FrontendUserRepository
     */
    protected function getFrontendUserRepositoryService()
    {
        $this->services['TYPO3\\CMS\\Extbase\\Domain\\Repository\\FrontendUserRepository'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extbase\Domain\Repository\FrontendUserRepository::class, ($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));

        $instance->injectPersistenceManager(($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Extbase\Middleware\SignalSlotDeprecator' shared autowired service.
     *
     * @return \TYPO3\CMS\Extbase\Middleware\SignalSlotDeprecator
     */
    protected function getSignalSlotDeprecatorService()
    {
        return $this->services['TYPO3\\CMS\\Extbase\\Middleware\\SignalSlotDeprecator'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extbase\Middleware\SignalSlotDeprecator::class, ($this->services['TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher'] ?? $this->getDispatcher2Service()));
    }

    /**
     * Gets the public 'TYPO3\CMS\Extbase\Mvc\Controller\ActionController' autowired service.
     *
     * @return \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
     */
    protected function getActionController3Service()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extbase\Mvc\Controller\ActionController::class);

        $instance->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));
        $instance->injectSignalSlotDispatcher(($this->services['TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher'] ?? $this->getDispatcher2Service()));
        $instance->injectValidatorResolver(($this->services['TYPO3\\CMS\\Extbase\\Validation\\ValidatorResolver'] ?? $this->getValidatorResolverService()));
        $instance->injectViewResolver(($this->privates['TYPO3\\CMS\\Extbase\\Mvc\\View\\GenericViewResolver'] ?? $this->getGenericViewResolverService()));
        $instance->injectReflectionService(($this->services['TYPO3\\CMS\\Extbase\\Reflection\\ReflectionService'] ?? $this->getReflectionServiceService()));
        $instance->injectCacheService(($this->services['TYPO3\\CMS\\Extbase\\Service\\CacheService'] ?? $this->getCacheServiceService()));
        $instance->injectHashService(($this->services['TYPO3\\CMS\\Extbase\\Security\\Cryptography\\HashService'] ?? $this->getHashServiceService()));
        $instance->injectMvcPropertyMappingConfigurationService(($this->services['TYPO3\\CMS\\Extbase\\Mvc\\Controller\\MvcPropertyMappingConfigurationService'] ?? $this->getMvcPropertyMappingConfigurationServiceService()));
        $instance->injectEventDispatcher(($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Extbase\Mvc\Controller\MvcPropertyMappingConfigurationService' shared autowired service.
     *
     * @return \TYPO3\CMS\Extbase\Mvc\Controller\MvcPropertyMappingConfigurationService
     */
    protected function getMvcPropertyMappingConfigurationServiceService()
    {
        $this->services['TYPO3\\CMS\\Extbase\\Mvc\\Controller\\MvcPropertyMappingConfigurationService'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extbase\Mvc\Controller\MvcPropertyMappingConfigurationService::class);

        $instance->injectHashService(($this->services['TYPO3\\CMS\\Extbase\\Security\\Cryptography\\HashService'] ?? $this->getHashServiceService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Extbase\Mvc\Dispatcher' shared autowired service.
     *
     * @return \TYPO3\CMS\Extbase\Mvc\Dispatcher
     */
    protected function getDispatcherService()
    {
        return $this->services['TYPO3\\CMS\\Extbase\\Mvc\\Dispatcher'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extbase\Mvc\Dispatcher::class, ($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()), $this, ($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service()));
    }

    /**
     * Gets the public 'TYPO3\CMS\Extbase\Mvc\View\EmptyView' autowired service.
     *
     * @return \TYPO3\CMS\Extbase\Mvc\View\EmptyView
     */
    protected function getEmptyViewService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extbase\Mvc\View\EmptyView::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Extbase\Mvc\View\JsonView' autowired service.
     *
     * @return \TYPO3\CMS\Extbase\Mvc\View\JsonView
     */
    protected function getJsonViewService()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extbase\Mvc\View\JsonView::class);

        $instance->injectPersistenceManager(($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()));
        $instance->injectReflectionService(($this->services['TYPO3\\CMS\\Extbase\\Reflection\\ReflectionService'] ?? $this->getReflectionServiceService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Extbase\Mvc\View\NotFoundView' autowired service.
     *
     * @return \TYPO3\CMS\Extbase\Mvc\View\NotFoundView
     */
    protected function getNotFoundViewService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extbase\Mvc\View\NotFoundView::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Extbase\Mvc\Web\BackendRequestHandler' shared autowired service.
     *
     * @return \TYPO3\CMS\Extbase\Mvc\Web\BackendRequestHandler
     */
    protected function getBackendRequestHandlerService()
    {
        $this->services['TYPO3\\CMS\\Extbase\\Mvc\\Web\\BackendRequestHandler'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extbase\Mvc\Web\BackendRequestHandler::class);

        $instance->injectDispatcher(($this->services['TYPO3\\CMS\\Extbase\\Mvc\\Dispatcher'] ?? $this->getDispatcherService()));
        $instance->injectRequestBuilder(($this->services['TYPO3\\CMS\\Extbase\\Mvc\\Web\\RequestBuilder'] ?? $this->getRequestBuilderService()));
        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));
        $instance->injectEnvironmentService(($this->services['TYPO3\\CMS\\Extbase\\Service\\EnvironmentService'] ?? $this->getEnvironmentServiceService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Extbase\Mvc\Web\FrontendRequestHandler' shared autowired service.
     *
     * @return \TYPO3\CMS\Extbase\Mvc\Web\FrontendRequestHandler
     */
    protected function getFrontendRequestHandlerService()
    {
        $this->services['TYPO3\\CMS\\Extbase\\Mvc\\Web\\FrontendRequestHandler'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extbase\Mvc\Web\FrontendRequestHandler::class);

        $instance->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
        $instance->injectDispatcher(($this->services['TYPO3\\CMS\\Extbase\\Mvc\\Dispatcher'] ?? $this->getDispatcherService()));
        $instance->injectRequestBuilder(($this->services['TYPO3\\CMS\\Extbase\\Mvc\\Web\\RequestBuilder'] ?? $this->getRequestBuilderService()));
        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));
        $instance->injectEnvironmentService(($this->services['TYPO3\\CMS\\Extbase\\Service\\EnvironmentService'] ?? $this->getEnvironmentServiceService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Extbase\Mvc\Web\RequestBuilder' shared autowired service.
     *
     * @return \TYPO3\CMS\Extbase\Mvc\Web\RequestBuilder
     */
    protected function getRequestBuilderService()
    {
        $this->services['TYPO3\\CMS\\Extbase\\Mvc\\Web\\RequestBuilder'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extbase\Mvc\Web\RequestBuilder::class);

        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));
        $instance->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
        $instance->injectExtensionService(($this->services['TYPO3\\CMS\\Extbase\\Service\\ExtensionService'] ?? $this->getExtensionServiceService()));
        $instance->injectEnvironmentService(($this->services['TYPO3\\CMS\\Extbase\\Service\\EnvironmentService'] ?? $this->getEnvironmentServiceService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Extbase\Object\Container\Container' shared service.
     *
     * @return \TYPO3\CMS\Extbase\Object\Container\Container
     */
    protected function getContainerService()
    {
        $this->services['TYPO3\\CMS\\Extbase\\Object\\Container\\Container'] = $instance = \TYPO3\CMS\Extbase\ServiceProvider::getObjectContainer($this);

        $instance->registerImplementation('Psr\\EventDispatcher\\EventDispatcherInterface', 'TYPO3\\CMS\\Core\\EventDispatcher\\EventDispatcher');
        $instance->registerImplementation('Psr\\Http\\Client\\ClientInterface', 'TYPO3\\CMS\\Core\\Http\\Client');
        $instance->registerImplementation('Psr\\Http\\Message\\RequestFactoryInterface', 'TYPO3\\CMS\\Core\\Http\\RequestFactory');
        $instance->registerImplementation('Psr\\Http\\Message\\ResponseFactoryInterface', 'TYPO3\\CMS\\Core\\Http\\ResponseFactory');
        $instance->registerImplementation('Psr\\Http\\Message\\ServerRequestFactoryInterface', 'TYPO3\\CMS\\Core\\Http\\ServerRequestFactory');
        $instance->registerImplementation('Psr\\Http\\Message\\StreamFactoryInterface', 'TYPO3\\CMS\\Core\\Http\\StreamFactory');
        $instance->registerImplementation('Psr\\Http\\Message\\UploadedFileFactoryInterface', 'TYPO3\\CMS\\Core\\Http\\UploadedFileFactory');
        $instance->registerImplementation('Psr\\Http\\Message\\UriFactoryInterface', 'TYPO3\\CMS\\Core\\Http\\UriFactory');
        $instance->registerImplementation('GuzzleHttp\\ClientInterface', 'GuzzleHttp\\Client');
        $instance->registerImplementation('Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface', 'TYPO3\\SymfonyPsrEventDispatcherAdapter\\EventDispatcherAdapter');
        $instance->registerImplementation('TYPO3\\CMS\\Core\\Authentication\\MimicServiceInterface', 'TYPO3\\CMS\\Core\\Authentication\\AuthenticationService');
        $instance->registerImplementation('TYPO3\\CMS\\Core\\Cache\\Backend\\FreezableBackendInterface', 'TYPO3\\CMS\\Core\\Cache\\Backend\\FileBackend');
        $instance->registerImplementation('TYPO3\\CMS\\Core\\Console\\RequestHandlerInterface', 'TYPO3\\CMS\\Core\\Console\\CommandRequestHandler');
        $instance->registerImplementation('TYPO3\\CMS\\Core\\Core\\ApplicationInterface', 'TYPO3\\CMS\\Core\\Console\\CommandApplication');
        $instance->registerImplementation('TYPO3\\CMS\\Core\\DataHandling\\DataHandlerCheckModifyAccessListHookInterface', 'TYPO3\\CMS\\Core\\Resource\\Security\\FileMetadataPermissionsAspect');
        $instance->registerImplementation('TYPO3\\CMS\\Core\\DataHandling\\Model\\EntityPointer', 'TYPO3\\CMS\\Core\\DataHandling\\Model\\EntityUidPointer');
        $instance->registerImplementation('TYPO3\\CMS\\Core\\Error\\ErrorHandlerInterface', 'TYPO3\\CMS\\Core\\Error\\ErrorHandler');
        $instance->registerImplementation('TYPO3\\CMS\\Core\\Http\\DispatcherInterface', 'TYPO3\\CMS\\Core\\Http\\Dispatcher');
        $instance->registerImplementation('TYPO3\\CMS\\Core\\Log\\LogManagerInterface', 'TYPO3\\CMS\\Core\\Log\\LogManager');
        $instance->registerImplementation('TYPO3\\CMS\\Core\\Package\\PackageInterface', 'TYPO3\\CMS\\Core\\Package\\Package');
        $instance->registerImplementation('TYPO3\\CMS\\Core\\PageTitle\\PageTitleProviderInterface', 'TYPO3\\CMS\\Core\\PageTitle\\RecordPageTitleProvider');
        $instance->registerImplementation('TYPO3\\CMS\\Core\\Pagination\\PaginationInterface', 'TYPO3\\CMS\\Core\\Pagination\\SimplePagination');
        $instance->registerImplementation('TYPO3\\CMS\\Core\\Pagination\\PaginatorInterface', 'TYPO3\\CMS\\Core\\Pagination\\ArrayPaginator');
        $instance->registerImplementation('TYPO3\\CMS\\Core\\Resource\\Driver\\DriverInterface', 'TYPO3\\CMS\\Core\\Resource\\Driver\\LocalDriver');
        $instance->registerImplementation('TYPO3\\CMS\\Core\\Resource\\Driver\\StreamableDriverInterface', 'TYPO3\\CMS\\Core\\Resource\\Driver\\LocalDriver');
        $instance->registerImplementation('TYPO3\\CMS\\Core\\Resource\\Index\\ExtractorInterface', 'TYPO3\\CMS\\Core\\Resource\\OnlineMedia\\Metadata\\Extractor');
        $instance->registerImplementation('TYPO3\\CMS\\Core\\Resource\\ResourceFactoryInterface', 'TYPO3\\CMS\\Core\\Resource\\ResourceFactory');
        $instance->registerImplementation('TYPO3\\CMS\\Core\\Resource\\ResourceStorageInterface', 'TYPO3\\CMS\\Core\\Resource\\ResourceStorage');
        $instance->registerImplementation('TYPO3\\CMS\\Core\\Resource\\TextExtraction\\TextExtractorInterface', 'TYPO3\\CMS\\Core\\Resource\\TextExtraction\\PlainTextExtractor');
        $instance->registerImplementation('TYPO3\\CMS\\Core\\Routing\\Aspect\\DelegateInterface', 'TYPO3\\CMS\\Core\\Routing\\Aspect\\PersistenceDelegate');
        $instance->registerImplementation('TYPO3\\CMS\\Core\\Routing\\Aspect\\ModifiableAspectInterface', 'TYPO3\\CMS\\Core\\Routing\\Aspect\\LocaleModifier');
        $instance->registerImplementation('TYPO3\\CMS\\Core\\Routing\\Enhancer\\DecoratingEnhancerInterface', 'TYPO3\\CMS\\Core\\Routing\\Enhancer\\PageTypeDecorator');
        $instance->registerImplementation('TYPO3\\CMS\\Core\\Routing\\RouterInterface', 'TYPO3\\CMS\\Core\\Routing\\PageRouter');
        $instance->registerImplementation('TYPO3\\CMS\\Core\\Type\\Exception\\InvalidValueExceptionInterface', 'TYPO3\\CMS\\Core\\Type\\Exception\\InvalidEnumerationValueException');
        $instance->registerImplementation('TYPO3\\CMS\\Extbase\\Core\\BootstrapInterface', 'TYPO3\\CMS\\Extbase\\Core\\Bootstrap');
        $instance->registerImplementation('TYPO3\\CMS\\Extbase\\Object\\ObjectManagerInterface', 'TYPO3\\CMS\\Extbase\\Object\\ObjectManager');
        $instance->registerImplementation('TYPO3\\CMS\\Extbase\\Persistence\\QueryInterface', 'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Query');
        $instance->registerImplementation('TYPO3\\CMS\\Extbase\\Persistence\\QueryResultInterface', 'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\QueryResult');
        $instance->registerImplementation('TYPO3\\CMS\\Extbase\\Persistence\\PersistenceManagerInterface', 'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager');
        $instance->registerImplementation('TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Storage\\BackendInterface', 'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Storage\\Typo3DbBackend');
        $instance->registerImplementation('TYPO3\\CMS\\Extbase\\Persistence\\Generic\\QuerySettingsInterface', 'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Typo3QuerySettings');
        $instance->registerImplementation('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewResolverInterface', 'TYPO3\\CMS\\Extbase\\Mvc\\View\\GenericViewResolver');
        $instance->registerImplementation('TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManagerInterface', 'TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager');
        $instance->registerImplementation('TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ControllerInterface', 'TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ActionController');
        $instance->registerImplementation('TYPO3\\CMS\\Extbase\\Persistence\\Generic\\BackendInterface', 'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Backend');
        $instance->registerImplementation('TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Qom\\AndInterface', 'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Qom\\LogicalAnd');
        $instance->registerImplementation('TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Qom\\BindVariableValueInterface', 'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Qom\\BindVariableValue');
        $instance->registerImplementation('TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Qom\\ComparisonInterface', 'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Qom\\Comparison');
        $instance->registerImplementation('TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Qom\\EquiJoinConditionInterface', 'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Qom\\EquiJoinCondition');
        $instance->registerImplementation('TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Qom\\JoinConditionInterface', 'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Qom\\EquiJoinCondition');
        $instance->registerImplementation('TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Qom\\JoinInterface', 'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Qom\\Join');
        $instance->registerImplementation('TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Qom\\LowerCaseInterface', 'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Qom\\LowerCase');
        $instance->registerImplementation('TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Qom\\NotInterface', 'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Qom\\LogicalNot');
        $instance->registerImplementation('TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Qom\\OrInterface', 'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Qom\\LogicalOr');
        $instance->registerImplementation('TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Qom\\OrderingInterface', 'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Qom\\Ordering');
        $instance->registerImplementation('TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Qom\\SelectorInterface', 'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Qom\\Selector');
        $instance->registerImplementation('TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Qom\\StaticOperandInterface', 'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Qom\\BindVariableValue');
        $instance->registerImplementation('TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Qom\\UpperCaseInterface', 'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Qom\\UpperCase');
        $instance->registerImplementation('TYPO3\\CMS\\Extbase\\Persistence\\Generic\\QueryFactoryInterface', 'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\QueryFactory');
        $instance->registerImplementation('TYPO3\\CMS\\Frontend\\ContentObject\\Exception\\ExceptionHandlerInterface', 'TYPO3\\CMS\\Frontend\\ContentObject\\Exception\\ProductionExceptionHandler');
        $instance->registerImplementation('TYPO3\\CMS\\Form\\Domain\\Configuration\\FlexformConfiguration\\Processors\\ProcessorInterface', 'TYPO3\\CMS\\Form\\Domain\\Configuration\\FlexformConfiguration\\Processors\\FinisherOptionGenerator');
        $instance->registerImplementation('TYPO3\\CMS\\Form\\Domain\\Factory\\FormFactoryInterface', 'TYPO3\\CMS\\Form\\Domain\\Factory\\ArrayFormFactory');
        $instance->registerImplementation('TYPO3\\CMS\\Form\\Domain\\Renderer\\RendererInterface', 'TYPO3\\CMS\\Form\\Domain\\Renderer\\FluidFormRenderer');
        $instance->registerImplementation('TYPO3\\CMS\\Form\\Domain\\Runtime\\FormRuntime\\Lifecycle\\AfterFormStateInitializedInterface', 'TYPO3\\CMS\\Form\\Mvc\\Property\\PropertyMappingConfiguration');
        $instance->registerImplementation('TYPO3\\CMS\\Form\\Mvc\\Configuration\\ConfigurationManagerInterface', 'TYPO3\\CMS\\Form\\Mvc\\Configuration\\ConfigurationManager');
        $instance->registerImplementation('TYPO3\\CMS\\Form\\Mvc\\Persistence\\FormPersistenceManagerInterface', 'TYPO3\\CMS\\Form\\Mvc\\Persistence\\FormPersistenceManager');
        $instance->registerImplementation('TYPO3\\CMS\\Backend\\Backend\\Avatar\\AvatarProviderInterface', 'TYPO3\\CMS\\Backend\\Backend\\Avatar\\DefaultAvatarProvider');
        $instance->registerImplementation('TYPO3\\CMS\\Backend\\LoginProvider\\LoginProviderInterface', 'TYPO3\\CMS\\Backend\\LoginProvider\\UsernamePasswordLoginProvider');
        $instance->registerImplementation('TYPO3\\CMS\\Backend\\Preview\\PreviewRendererInterface', 'TYPO3\\CMS\\Backend\\Preview\\StandardContentPreviewRenderer');
        $instance->registerImplementation('TYPO3\\CMS\\Backend\\Preview\\PreviewRendererResolverInterface', 'TYPO3\\CMS\\Backend\\Preview\\StandardPreviewRendererResolver');
        $instance->registerImplementation('TYPO3\\CMS\\Backend\\View\\ProgressListenerInterface', 'TYPO3\\CMS\\Backend\\Command\\ProgressListener\\ReferenceIndexProgressListener');
        $instance->registerImplementation('TYPO3\\CMS\\Dashboard\\Widgets\\NumberWithIconDataProviderInterface', 'TYPO3\\CMS\\Dashboard\\Widgets\\Provider\\NumberOfFailedLoginsDataProvider');
        $instance->registerImplementation('TYPO3\\CMS\\Dashboard\\Widgets\\WidgetConfigurationInterface', 'TYPO3\\CMS\\Dashboard\\Widgets\\WidgetConfiguration');
        $instance->registerImplementation('TYPO3\\CMS\\FrontendLogin\\Service\\RecoveryServiceInterface', 'TYPO3\\CMS\\FrontendLogin\\Service\\RecoveryService');
        $instance->registerImplementation('Extcode\\Cart\\Domain\\Model\\Cart\\CartCouponInterface', 'Extcode\\Cart\\Domain\\Model\\Cart\\CartCoupon');
        $instance->registerImplementation('Extcode\\Cart\\Domain\\Model\\Cart\\ServiceInterface', 'Extcode\\Cart\\Domain\\Model\\Cart\\Service');
        $instance->registerImplementation('Extcode\\Cart\\Event\\CheckProductAvailabilityEventInterface', 'Extcode\\Cart\\Event\\CheckProductAvailabilityEvent');
        $instance->registerImplementation('Extcode\\Cart\\Event\\ProcessOrderCheckStockEventInterface', 'Extcode\\Cart\\Event\\ProcessOrderCheckStockEvent');
        $instance->registerImplementation('Extcode\\Cart\\Event\\ProcessOrderCreateEventInterface', 'Extcode\\Cart\\Event\\ProcessOrderCreateEvent');
        $instance->registerImplementation('Extcode\\Cart\\Event\\RetrieveProductsFromRequestEventInterface', 'Extcode\\Cart\\Event\\RetrieveProductsFromRequestEvent');
        $instance->registerImplementation('Extcode\\Cart\\Hooks\\MailAttachmentHookInterface', 'Extcode\\Cart\\Hooks\\MailAttachmentHook');
        $instance->registerImplementation('Extcode\\Cart\\Service\\TaxClassServiceInterface', 'Extcode\\Cart\\Service\\TaxClassService');

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Extbase\Object\ObjectManager' shared service.
     *
     * @return \TYPO3\CMS\Extbase\Object\ObjectManager
     */
    protected function getObjectManagerService()
    {
        return $this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] = \TYPO3\CMS\Extbase\ServiceProvider::getObjectManager($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Extbase\Persistence\ClassesConfigurationFactory' shared autowired service.
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ClassesConfigurationFactory
     */
    protected function getClassesConfigurationFactoryService()
    {
        return $this->services['TYPO3\\CMS\\Extbase\\Persistence\\ClassesConfigurationFactory'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extbase\Persistence\ClassesConfigurationFactory::class, ($this->services['TYPO3\\CMS\\Core\\Cache\\CacheManager'] ?? $this->getCacheManagerService()));
    }

    /**
     * Gets the public 'TYPO3\CMS\Extbase\Persistence\Generic\Backend' shared autowired service.
     *
     * @return \TYPO3\CMS\Extbase\Persistence\Generic\Backend
     */
    protected function getBackendService()
    {
        return $this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Backend'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extbase\Persistence\Generic\Backend::class, ($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()), ($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Session'] ?? $this->getSessionService()), ($this->services['TYPO3\\CMS\\Extbase\\Reflection\\ReflectionService'] ?? $this->getReflectionServiceService()), ($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Qom\\QueryObjectModelFactory'] ?? $this->getQueryObjectModelFactoryService()), ($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Storage\\Typo3DbBackend'] ?? $this->getTypo3DbBackendService()), ($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Mapper\\DataMapFactory'] ?? $this->getDataMapFactoryService()), ($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service()));
    }

    /**
     * Gets the public 'TYPO3\CMS\Extbase\Persistence\Generic\Mapper\DataMapFactory' shared autowired service.
     *
     * @return \TYPO3\CMS\Extbase\Persistence\Generic\Mapper\DataMapFactory
     */
    protected function getDataMapFactoryService()
    {
        return $this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Mapper\\DataMapFactory'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extbase\Persistence\Generic\Mapper\DataMapFactory::class, ($this->services['TYPO3\\CMS\\Extbase\\Reflection\\ReflectionService'] ?? $this->getReflectionServiceService()), ($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()), ($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()), ($this->services['TYPO3\\CMS\\Core\\Cache\\CacheManager'] ?? $this->getCacheManagerService()), ($this->services['TYPO3\\CMS\\Extbase\\Persistence\\ClassesConfigurationFactory'] ?? $this->getClassesConfigurationFactoryService()));
    }

    /**
     * Gets the public 'TYPO3\CMS\Extbase\Persistence\Generic\PersistenceManager' shared autowired service.
     *
     * @return \TYPO3\CMS\Extbase\Persistence\Generic\PersistenceManager
     */
    protected function getPersistenceManagerService()
    {
        $this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extbase\Persistence\Generic\PersistenceManager::class, ($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\QueryFactory'] ?? $this->getQueryFactoryService()), ($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Backend'] ?? $this->getBackendService()), ($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Session'] ?? $this->getSessionService()));

        $instance->initializeObject();

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Extbase\Persistence\Generic\Qom\QueryObjectModelFactory' shared autowired service.
     *
     * @return \TYPO3\CMS\Extbase\Persistence\Generic\Qom\QueryObjectModelFactory
     */
    protected function getQueryObjectModelFactoryService()
    {
        $this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Qom\\QueryObjectModelFactory'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extbase\Persistence\Generic\Qom\QueryObjectModelFactory::class);

        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Extbase\Persistence\Generic\QueryFactory' shared autowired service.
     *
     * @return \TYPO3\CMS\Extbase\Persistence\Generic\QueryFactory
     */
    protected function getQueryFactoryService()
    {
        return $this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\QueryFactory'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extbase\Persistence\Generic\QueryFactory::class, ($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()), ($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()), ($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Mapper\\DataMapFactory'] ?? $this->getDataMapFactoryService()));
    }

    /**
     * Gets the public 'TYPO3\CMS\Extbase\Persistence\Generic\Session' shared autowired service.
     *
     * @return \TYPO3\CMS\Extbase\Persistence\Generic\Session
     */
    protected function getSessionService()
    {
        return $this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Session'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extbase\Persistence\Generic\Session::class, ($this->services['TYPO3\\CMS\\Extbase\\Object\\Container\\Container'] ?? $this->getContainerService()));
    }

    /**
     * Gets the public 'TYPO3\CMS\Extbase\Persistence\Generic\Storage\Typo3DbBackend' shared autowired service.
     *
     * @return \TYPO3\CMS\Extbase\Persistence\Generic\Storage\Typo3DbBackend
     */
    protected function getTypo3DbBackendService()
    {
        $this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Storage\\Typo3DbBackend'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extbase\Persistence\Generic\Storage\Typo3DbBackend::class);

        $instance->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
        $instance->injectCacheService(($this->services['TYPO3\\CMS\\Extbase\\Service\\CacheService'] ?? $this->getCacheServiceService()));
        $instance->injectEnvironmentService(($this->services['TYPO3\\CMS\\Extbase\\Service\\EnvironmentService'] ?? $this->getEnvironmentServiceService()));
        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Extbase\Persistence\Repository' shared autowired service.
     *
     * @return \TYPO3\CMS\Extbase\Persistence\Repository
     */
    protected function getRepositoryService()
    {
        $this->services['TYPO3\\CMS\\Extbase\\Persistence\\Repository'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extbase\Persistence\Repository::class, ($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));

        $instance->injectPersistenceManager(($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Extbase\Property\PropertyMapper' shared autowired service.
     *
     * @return \TYPO3\CMS\Extbase\Property\PropertyMapper
     */
    protected function getPropertyMapperService()
    {
        $this->services['TYPO3\\CMS\\Extbase\\Property\\PropertyMapper'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extbase\Property\PropertyMapper::class);

        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));
        $instance->injectConfigurationBuilder(($this->services['TYPO3\\CMS\\Extbase\\Property\\PropertyMappingConfigurationBuilder'] ?? ($this->services['TYPO3\\CMS\\Extbase\\Property\\PropertyMappingConfigurationBuilder'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extbase\Property\PropertyMappingConfigurationBuilder::class))));
        $instance->initializeObject();

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Extbase\Property\PropertyMappingConfigurationBuilder' shared autowired service.
     *
     * @return \TYPO3\CMS\Extbase\Property\PropertyMappingConfigurationBuilder
     */
    protected function getPropertyMappingConfigurationBuilderService()
    {
        return $this->services['TYPO3\\CMS\\Extbase\\Property\\PropertyMappingConfigurationBuilder'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extbase\Property\PropertyMappingConfigurationBuilder::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Extbase\Property\TypeConverter\ArrayConverter' shared autowired service.
     *
     * @return \TYPO3\CMS\Extbase\Property\TypeConverter\ArrayConverter
     */
    protected function getArrayConverterService()
    {
        $this->services['TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\ArrayConverter'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extbase\Property\TypeConverter\ArrayConverter::class);

        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Extbase\Property\TypeConverter\BooleanConverter' shared autowired service.
     *
     * @return \TYPO3\CMS\Extbase\Property\TypeConverter\BooleanConverter
     */
    protected function getBooleanConverterService()
    {
        $this->services['TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\BooleanConverter'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extbase\Property\TypeConverter\BooleanConverter::class);

        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Extbase\Property\TypeConverter\CoreTypeConverter' shared autowired service.
     *
     * @return \TYPO3\CMS\Extbase\Property\TypeConverter\CoreTypeConverter
     */
    protected function getCoreTypeConverterService()
    {
        $this->services['TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\CoreTypeConverter'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extbase\Property\TypeConverter\CoreTypeConverter::class);

        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Extbase\Property\TypeConverter\DateTimeConverter' shared autowired service.
     *
     * @return \TYPO3\CMS\Extbase\Property\TypeConverter\DateTimeConverter
     */
    protected function getDateTimeConverterService()
    {
        $this->services['TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\DateTimeConverter'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extbase\Property\TypeConverter\DateTimeConverter::class);

        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Extbase\Property\TypeConverter\FileConverter' shared autowired service.
     *
     * @return \TYPO3\CMS\Extbase\Property\TypeConverter\FileConverter
     */
    protected function getFileConverterService()
    {
        $this->services['TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\FileConverter'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extbase\Property\TypeConverter\FileConverter::class);

        $instance->injectFileFactory(($this->services['TYPO3\\CMS\\Core\\Resource\\ResourceFactory'] ?? $this->getResourceFactoryService()));
        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Extbase\Property\TypeConverter\FileReferenceConverter' shared autowired service.
     *
     * @return \TYPO3\CMS\Extbase\Property\TypeConverter\FileReferenceConverter
     */
    protected function getFileReferenceConverterService()
    {
        $this->services['TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\FileReferenceConverter'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extbase\Property\TypeConverter\FileReferenceConverter::class);

        $instance->injectFileFactory(($this->services['TYPO3\\CMS\\Core\\Resource\\ResourceFactory'] ?? $this->getResourceFactoryService()));
        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Extbase\Property\TypeConverter\FloatConverter' shared autowired service.
     *
     * @return \TYPO3\CMS\Extbase\Property\TypeConverter\FloatConverter
     */
    protected function getFloatConverterService()
    {
        $this->services['TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\FloatConverter'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extbase\Property\TypeConverter\FloatConverter::class);

        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Extbase\Property\TypeConverter\FolderBasedFileCollectionConverter' shared autowired service.
     *
     * @return \TYPO3\CMS\Extbase\Property\TypeConverter\FolderBasedFileCollectionConverter
     */
    protected function getFolderBasedFileCollectionConverterService()
    {
        $this->services['TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\FolderBasedFileCollectionConverter'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extbase\Property\TypeConverter\FolderBasedFileCollectionConverter::class);

        $instance->injectFileFactory(($this->services['TYPO3\\CMS\\Core\\Resource\\ResourceFactory'] ?? $this->getResourceFactoryService()));
        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Extbase\Property\TypeConverter\FolderConverter' shared autowired service.
     *
     * @return \TYPO3\CMS\Extbase\Property\TypeConverter\FolderConverter
     */
    protected function getFolderConverterService()
    {
        $this->services['TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\FolderConverter'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extbase\Property\TypeConverter\FolderConverter::class);

        $instance->injectFileFactory(($this->services['TYPO3\\CMS\\Core\\Resource\\ResourceFactory'] ?? $this->getResourceFactoryService()));
        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Extbase\Property\TypeConverter\IntegerConverter' shared autowired service.
     *
     * @return \TYPO3\CMS\Extbase\Property\TypeConverter\IntegerConverter
     */
    protected function getIntegerConverterService()
    {
        $this->services['TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\IntegerConverter'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extbase\Property\TypeConverter\IntegerConverter::class);

        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Extbase\Property\TypeConverter\ObjectConverter' shared autowired service.
     *
     * @return \TYPO3\CMS\Extbase\Property\TypeConverter\ObjectConverter
     */
    protected function getObjectConverterService()
    {
        $this->services['TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\ObjectConverter'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extbase\Property\TypeConverter\ObjectConverter::class);

        $instance->injectObjectContainer(($this->services['TYPO3\\CMS\\Extbase\\Object\\Container\\Container'] ?? $this->getContainerService()));
        $instance->injectReflectionService(($this->services['TYPO3\\CMS\\Extbase\\Reflection\\ReflectionService'] ?? $this->getReflectionServiceService()));
        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Extbase\Property\TypeConverter\ObjectStorageConverter' shared autowired service.
     *
     * @return \TYPO3\CMS\Extbase\Property\TypeConverter\ObjectStorageConverter
     */
    protected function getObjectStorageConverterService()
    {
        $this->services['TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\ObjectStorageConverter'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extbase\Property\TypeConverter\ObjectStorageConverter::class);

        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Extbase\Property\TypeConverter\PersistentObjectConverter' shared autowired service.
     *
     * @return \TYPO3\CMS\Extbase\Property\TypeConverter\PersistentObjectConverter
     */
    protected function getPersistentObjectConverterService()
    {
        $this->services['TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\PersistentObjectConverter'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extbase\Property\TypeConverter\PersistentObjectConverter::class);

        $instance->injectPersistenceManager(($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()));
        $instance->injectObjectContainer(($this->services['TYPO3\\CMS\\Extbase\\Object\\Container\\Container'] ?? $this->getContainerService()));
        $instance->injectReflectionService(($this->services['TYPO3\\CMS\\Extbase\\Reflection\\ReflectionService'] ?? $this->getReflectionServiceService()));
        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Extbase\Property\TypeConverter\StaticFileCollectionConverter' shared autowired service.
     *
     * @return \TYPO3\CMS\Extbase\Property\TypeConverter\StaticFileCollectionConverter
     */
    protected function getStaticFileCollectionConverterService()
    {
        $this->services['TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\StaticFileCollectionConverter'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extbase\Property\TypeConverter\StaticFileCollectionConverter::class);

        $instance->injectFileFactory(($this->services['TYPO3\\CMS\\Core\\Resource\\ResourceFactory'] ?? $this->getResourceFactoryService()));
        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Extbase\Property\TypeConverter\StringConverter' shared autowired service.
     *
     * @return \TYPO3\CMS\Extbase\Property\TypeConverter\StringConverter
     */
    protected function getStringConverterService()
    {
        $this->services['TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\StringConverter'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extbase\Property\TypeConverter\StringConverter::class);

        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Extbase\Reflection\ReflectionService' shared service.
     *
     * @return \TYPO3\CMS\Extbase\Reflection\ReflectionService
     */
    protected function getReflectionServiceService()
    {
        return $this->services['TYPO3\\CMS\\Extbase\\Reflection\\ReflectionService'] = \TYPO3\CMS\Extbase\ServiceProvider::getReflectionService($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Extbase\Security\Cryptography\HashService' shared service.
     *
     * @return \TYPO3\CMS\Extbase\Security\Cryptography\HashService
     */
    protected function getHashServiceService()
    {
        return $this->services['TYPO3\\CMS\\Extbase\\Security\\Cryptography\\HashService'] = \TYPO3\CMS\Extbase\ServiceProvider::getHashService($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Extbase\Service\CacheService' shared autowired service.
     *
     * @return \TYPO3\CMS\Extbase\Service\CacheService
     */
    protected function getCacheServiceService()
    {
        $this->services['TYPO3\\CMS\\Extbase\\Service\\CacheService'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extbase\Service\CacheService::class);

        $instance->injectCacheManager(($this->services['TYPO3\\CMS\\Core\\Cache\\CacheManager'] ?? $this->getCacheManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Extbase\Service\EnvironmentService' shared service.
     *
     * @return \TYPO3\CMS\Extbase\Service\EnvironmentService
     */
    protected function getEnvironmentServiceService()
    {
        return $this->services['TYPO3\\CMS\\Extbase\\Service\\EnvironmentService'] = \TYPO3\CMS\Extbase\ServiceProvider::getEnvironmentService($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Extbase\Service\ExtensionService' shared service.
     *
     * @return \TYPO3\CMS\Extbase\Service\ExtensionService
     */
    protected function getExtensionServiceService()
    {
        return $this->services['TYPO3\\CMS\\Extbase\\Service\\ExtensionService'] = \TYPO3\CMS\Extbase\ServiceProvider::getExtensionService($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Extbase\Service\ImageService' shared autowired service.
     *
     * @return \TYPO3\CMS\Extbase\Service\ImageService
     */
    protected function getImageServiceService()
    {
        return $this->services['TYPO3\\CMS\\Extbase\\Service\\ImageService'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extbase\Service\ImageService::class, ($this->services['TYPO3\\CMS\\Extbase\\Service\\EnvironmentService'] ?? $this->getEnvironmentServiceService()), ($this->services['TYPO3\\CMS\\Core\\Resource\\ResourceFactory'] ?? $this->getResourceFactoryService()));
    }

    /**
     * Gets the public 'TYPO3\CMS\Extbase\SignalSlot\Dispatcher' shared service.
     *
     * @return \TYPO3\CMS\Extbase\SignalSlot\Dispatcher
     */
    protected function getDispatcher2Service()
    {
        return $this->services['TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher'] = \TYPO3\CMS\Extbase\ServiceProvider::getSignalSlotDispatcher($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Extbase\Validation\ValidatorResolver' shared autowired service.
     *
     * @return \TYPO3\CMS\Extbase\Validation\ValidatorResolver
     */
    protected function getValidatorResolverService()
    {
        $this->services['TYPO3\\CMS\\Extbase\\Validation\\ValidatorResolver'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extbase\Validation\ValidatorResolver::class);

        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));
        $instance->injectReflectionService(($this->services['TYPO3\\CMS\\Extbase\\Reflection\\ReflectionService'] ?? $this->getReflectionServiceService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Extensionmanager\Command\ActivateExtensionCommand' shared autowired service.
     *
     * @return \TYPO3\CMS\Extensionmanager\Command\ActivateExtensionCommand
     */
    protected function getActivateExtensionCommandService()
    {
        $this->services['TYPO3\\CMS\\Extensionmanager\\Command\\ActivateExtensionCommand'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extensionmanager\Command\ActivateExtensionCommand::class);

        $instance->setName('extension:activate');
        $instance->setAliases([0 => 'extensionmanager:extension:install', 1 => 'extension:install']);

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Extensionmanager\Command\DeactivateExtensionCommand' shared autowired service.
     *
     * @return \TYPO3\CMS\Extensionmanager\Command\DeactivateExtensionCommand
     */
    protected function getDeactivateExtensionCommandService()
    {
        $this->services['TYPO3\\CMS\\Extensionmanager\\Command\\DeactivateExtensionCommand'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extensionmanager\Command\DeactivateExtensionCommand::class);

        $instance->setName('extension:deactivate');
        $instance->setAliases([0 => 'extensionmanager:extension:uninstall', 1 => 'extension:uninstall']);

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Extensionmanager\Compatibility\SlotReplacement' shared autowired service.
     *
     * @return \TYPO3\CMS\Extensionmanager\Compatibility\SlotReplacement
     */
    protected function getSlotReplacement5Service()
    {
        return $this->services['TYPO3\\CMS\\Extensionmanager\\Compatibility\\SlotReplacement'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extensionmanager\Compatibility\SlotReplacement::class, ($this->services['TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher'] ?? $this->getDispatcher2Service()));
    }

    /**
     * Gets the public 'TYPO3\CMS\Extensionmanager\Controller\AbstractController' autowired service.
     *
     * @return \TYPO3\CMS\Extensionmanager\Controller\AbstractController
     */
    protected function getAbstractControllerService()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extensionmanager\Controller\AbstractController::class);

        $instance->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));
        $instance->injectSignalSlotDispatcher(($this->services['TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher'] ?? $this->getDispatcher2Service()));
        $instance->injectValidatorResolver(($this->services['TYPO3\\CMS\\Extbase\\Validation\\ValidatorResolver'] ?? $this->getValidatorResolverService()));
        $instance->injectViewResolver(($this->privates['TYPO3\\CMS\\Extbase\\Mvc\\View\\GenericViewResolver'] ?? $this->getGenericViewResolverService()));
        $instance->injectReflectionService(($this->services['TYPO3\\CMS\\Extbase\\Reflection\\ReflectionService'] ?? $this->getReflectionServiceService()));
        $instance->injectCacheService(($this->services['TYPO3\\CMS\\Extbase\\Service\\CacheService'] ?? $this->getCacheServiceService()));
        $instance->injectHashService(($this->services['TYPO3\\CMS\\Extbase\\Security\\Cryptography\\HashService'] ?? $this->getHashServiceService()));
        $instance->injectMvcPropertyMappingConfigurationService(($this->services['TYPO3\\CMS\\Extbase\\Mvc\\Controller\\MvcPropertyMappingConfigurationService'] ?? $this->getMvcPropertyMappingConfigurationServiceService()));
        $instance->injectEventDispatcher(($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Extensionmanager\Controller\AbstractModuleController' autowired service.
     *
     * @return \TYPO3\CMS\Extensionmanager\Controller\AbstractModuleController
     */
    protected function getAbstractModuleControllerService()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extensionmanager\Controller\AbstractModuleController::class);

        $instance->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));
        $instance->injectSignalSlotDispatcher(($this->services['TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher'] ?? $this->getDispatcher2Service()));
        $instance->injectValidatorResolver(($this->services['TYPO3\\CMS\\Extbase\\Validation\\ValidatorResolver'] ?? $this->getValidatorResolverService()));
        $instance->injectViewResolver(($this->privates['TYPO3\\CMS\\Extbase\\Mvc\\View\\GenericViewResolver'] ?? $this->getGenericViewResolverService()));
        $instance->injectReflectionService(($this->services['TYPO3\\CMS\\Extbase\\Reflection\\ReflectionService'] ?? $this->getReflectionServiceService()));
        $instance->injectCacheService(($this->services['TYPO3\\CMS\\Extbase\\Service\\CacheService'] ?? $this->getCacheServiceService()));
        $instance->injectHashService(($this->services['TYPO3\\CMS\\Extbase\\Security\\Cryptography\\HashService'] ?? $this->getHashServiceService()));
        $instance->injectMvcPropertyMappingConfigurationService(($this->services['TYPO3\\CMS\\Extbase\\Mvc\\Controller\\MvcPropertyMappingConfigurationService'] ?? $this->getMvcPropertyMappingConfigurationServiceService()));
        $instance->injectEventDispatcher(($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Extensionmanager\Controller\ActionController' autowired service.
     *
     * @return \TYPO3\CMS\Extensionmanager\Controller\ActionController
     */
    protected function getActionController4Service()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extensionmanager\Controller\ActionController::class);

        $instance->injectInstallUtility(($this->services['TYPO3\\CMS\\Extensionmanager\\Utility\\InstallUtility'] ?? $this->getInstallUtilityService()));
        $instance->injectFileHandlingUtility(($this->services['TYPO3\\CMS\\Extensionmanager\\Utility\\FileHandlingUtility'] ?? $this->getFileHandlingUtilityService()));
        $instance->injectExtensionModelUtility(($this->privates['TYPO3\\CMS\\Extensionmanager\\Utility\\ExtensionModelUtility'] ?? $this->getExtensionModelUtilityService()));
        $instance->injectManagementService(($this->services['TYPO3\\CMS\\Extensionmanager\\Service\\ExtensionManagementService'] ?? $this->getExtensionManagementServiceService()));
        $instance->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));
        $instance->injectSignalSlotDispatcher(($this->services['TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher'] ?? $this->getDispatcher2Service()));
        $instance->injectValidatorResolver(($this->services['TYPO3\\CMS\\Extbase\\Validation\\ValidatorResolver'] ?? $this->getValidatorResolverService()));
        $instance->injectViewResolver(($this->privates['TYPO3\\CMS\\Extbase\\Mvc\\View\\GenericViewResolver'] ?? $this->getGenericViewResolverService()));
        $instance->injectReflectionService(($this->services['TYPO3\\CMS\\Extbase\\Reflection\\ReflectionService'] ?? $this->getReflectionServiceService()));
        $instance->injectCacheService(($this->services['TYPO3\\CMS\\Extbase\\Service\\CacheService'] ?? $this->getCacheServiceService()));
        $instance->injectHashService(($this->services['TYPO3\\CMS\\Extbase\\Security\\Cryptography\\HashService'] ?? $this->getHashServiceService()));
        $instance->injectMvcPropertyMappingConfigurationService(($this->services['TYPO3\\CMS\\Extbase\\Mvc\\Controller\\MvcPropertyMappingConfigurationService'] ?? $this->getMvcPropertyMappingConfigurationServiceService()));
        $instance->injectEventDispatcher(($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Extensionmanager\Controller\DistributionController' autowired service.
     *
     * @return \TYPO3\CMS\Extensionmanager\Controller\DistributionController
     */
    protected function getDistributionControllerService()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extensionmanager\Controller\DistributionController::class);

        $instance->injectPackageManager(($this->services['_early.TYPO3\\CMS\\Core\\Package\\PackageManager'] ?? $this->get('_early.TYPO3\\CMS\\Core\\Package\\PackageManager', 1)));
        $instance->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));
        $instance->injectSignalSlotDispatcher(($this->services['TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher'] ?? $this->getDispatcher2Service()));
        $instance->injectValidatorResolver(($this->services['TYPO3\\CMS\\Extbase\\Validation\\ValidatorResolver'] ?? $this->getValidatorResolverService()));
        $instance->injectViewResolver(($this->privates['TYPO3\\CMS\\Extbase\\Mvc\\View\\GenericViewResolver'] ?? $this->getGenericViewResolverService()));
        $instance->injectReflectionService(($this->services['TYPO3\\CMS\\Extbase\\Reflection\\ReflectionService'] ?? $this->getReflectionServiceService()));
        $instance->injectCacheService(($this->services['TYPO3\\CMS\\Extbase\\Service\\CacheService'] ?? $this->getCacheServiceService()));
        $instance->injectHashService(($this->services['TYPO3\\CMS\\Extbase\\Security\\Cryptography\\HashService'] ?? $this->getHashServiceService()));
        $instance->injectMvcPropertyMappingConfigurationService(($this->services['TYPO3\\CMS\\Extbase\\Mvc\\Controller\\MvcPropertyMappingConfigurationService'] ?? $this->getMvcPropertyMappingConfigurationServiceService()));
        $instance->injectEventDispatcher(($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Extensionmanager\Controller\DownloadController' autowired service.
     *
     * @return \TYPO3\CMS\Extensionmanager\Controller\DownloadController
     */
    protected function getDownloadControllerService()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extensionmanager\Controller\DownloadController::class);

        $instance->injectExtensionRepository(($this->services['TYPO3\\CMS\\Extensionmanager\\Domain\\Repository\\ExtensionRepository'] ?? $this->getExtensionRepositoryService()));
        $instance->injectManagementService(($this->services['TYPO3\\CMS\\Extensionmanager\\Service\\ExtensionManagementService'] ?? $this->getExtensionManagementServiceService()));
        $instance->injectDownloadUtility(($this->services['TYPO3\\CMS\\Extensionmanager\\Utility\\DownloadUtility'] ?? $this->getDownloadUtilityService()));
        $instance->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));
        $instance->injectSignalSlotDispatcher(($this->services['TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher'] ?? $this->getDispatcher2Service()));
        $instance->injectValidatorResolver(($this->services['TYPO3\\CMS\\Extbase\\Validation\\ValidatorResolver'] ?? $this->getValidatorResolverService()));
        $instance->injectViewResolver(($this->privates['TYPO3\\CMS\\Extbase\\Mvc\\View\\GenericViewResolver'] ?? $this->getGenericViewResolverService()));
        $instance->injectReflectionService(($this->services['TYPO3\\CMS\\Extbase\\Reflection\\ReflectionService'] ?? $this->getReflectionServiceService()));
        $instance->injectCacheService(($this->services['TYPO3\\CMS\\Extbase\\Service\\CacheService'] ?? $this->getCacheServiceService()));
        $instance->injectHashService(($this->services['TYPO3\\CMS\\Extbase\\Security\\Cryptography\\HashService'] ?? $this->getHashServiceService()));
        $instance->injectMvcPropertyMappingConfigurationService(($this->services['TYPO3\\CMS\\Extbase\\Mvc\\Controller\\MvcPropertyMappingConfigurationService'] ?? $this->getMvcPropertyMappingConfigurationServiceService()));
        $instance->injectEventDispatcher(($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Extensionmanager\Controller\ExtensionComposerStatusController' autowired service.
     *
     * @return \TYPO3\CMS\Extensionmanager\Controller\ExtensionComposerStatusController
     */
    protected function getExtensionComposerStatusControllerService()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extensionmanager\Controller\ExtensionComposerStatusController::class, ($this->privates['TYPO3\\CMS\\Core\\Package\\ComposerDeficitDetector'] ?? ($this->privates['TYPO3\\CMS\\Core\\Package\\ComposerDeficitDetector'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Package\ComposerDeficitDetector::class))), ($this->privates['TYPO3\\CMS\\Extensionmanager\\Service\\ComposerManifestProposalGenerator'] ?? $this->getComposerManifestProposalGeneratorService()), ($this->privates['TYPO3\\CMS\\Backend\\Form\\NodeFactory'] ?? ($this->privates['TYPO3\\CMS\\Backend\\Form\\NodeFactory'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Backend\Form\NodeFactory::class))), ($this->services['TYPO3\\CMS\\Extensionmanager\\Utility\\ListUtility'] ?? $this->getListUtilityService()));

        $instance->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));
        $instance->injectSignalSlotDispatcher(($this->services['TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher'] ?? $this->getDispatcher2Service()));
        $instance->injectValidatorResolver(($this->services['TYPO3\\CMS\\Extbase\\Validation\\ValidatorResolver'] ?? $this->getValidatorResolverService()));
        $instance->injectViewResolver(($this->privates['TYPO3\\CMS\\Extbase\\Mvc\\View\\GenericViewResolver'] ?? $this->getGenericViewResolverService()));
        $instance->injectReflectionService(($this->services['TYPO3\\CMS\\Extbase\\Reflection\\ReflectionService'] ?? $this->getReflectionServiceService()));
        $instance->injectCacheService(($this->services['TYPO3\\CMS\\Extbase\\Service\\CacheService'] ?? $this->getCacheServiceService()));
        $instance->injectHashService(($this->services['TYPO3\\CMS\\Extbase\\Security\\Cryptography\\HashService'] ?? $this->getHashServiceService()));
        $instance->injectMvcPropertyMappingConfigurationService(($this->services['TYPO3\\CMS\\Extbase\\Mvc\\Controller\\MvcPropertyMappingConfigurationService'] ?? $this->getMvcPropertyMappingConfigurationServiceService()));
        $instance->injectEventDispatcher(($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Extensionmanager\Controller\ListController' autowired service.
     *
     * @return \TYPO3\CMS\Extensionmanager\Controller\ListController
     */
    protected function getListControllerService()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extensionmanager\Controller\ListController::class);

        $instance->injectExtensionRepository(($this->services['TYPO3\\CMS\\Extensionmanager\\Domain\\Repository\\ExtensionRepository'] ?? $this->getExtensionRepositoryService()));
        $instance->injectListUtility(($this->services['TYPO3\\CMS\\Extensionmanager\\Utility\\ListUtility'] ?? $this->getListUtilityService()));
        $instance->injectPageRenderer(($this->services['TYPO3\\CMS\\Core\\Page\\PageRenderer'] ?? ($this->services['TYPO3\\CMS\\Core\\Page\\PageRenderer'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Page\PageRenderer::class))));
        $instance->injectDependencyUtility(($this->services['TYPO3\\CMS\\Extensionmanager\\Utility\\DependencyUtility'] ?? $this->getDependencyUtilityService()));
        $instance->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));
        $instance->injectSignalSlotDispatcher(($this->services['TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher'] ?? $this->getDispatcher2Service()));
        $instance->injectValidatorResolver(($this->services['TYPO3\\CMS\\Extbase\\Validation\\ValidatorResolver'] ?? $this->getValidatorResolverService()));
        $instance->injectViewResolver(($this->privates['TYPO3\\CMS\\Extbase\\Mvc\\View\\GenericViewResolver'] ?? $this->getGenericViewResolverService()));
        $instance->injectReflectionService(($this->services['TYPO3\\CMS\\Extbase\\Reflection\\ReflectionService'] ?? $this->getReflectionServiceService()));
        $instance->injectCacheService(($this->services['TYPO3\\CMS\\Extbase\\Service\\CacheService'] ?? $this->getCacheServiceService()));
        $instance->injectHashService(($this->services['TYPO3\\CMS\\Extbase\\Security\\Cryptography\\HashService'] ?? $this->getHashServiceService()));
        $instance->injectMvcPropertyMappingConfigurationService(($this->services['TYPO3\\CMS\\Extbase\\Mvc\\Controller\\MvcPropertyMappingConfigurationService'] ?? $this->getMvcPropertyMappingConfigurationServiceService()));
        $instance->injectEventDispatcher(($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Extensionmanager\Controller\UpdateFromTerController' autowired service.
     *
     * @return \TYPO3\CMS\Extensionmanager\Controller\UpdateFromTerController
     */
    protected function getUpdateFromTerControllerService()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extensionmanager\Controller\UpdateFromTerController::class);

        $instance->injectRepositoryHelper(($this->services['TYPO3\\CMS\\Extensionmanager\\Utility\\Repository\\Helper'] ?? ($this->services['TYPO3\\CMS\\Extensionmanager\\Utility\\Repository\\Helper'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extensionmanager\Utility\Repository\Helper::class))));
        $instance->injectRepositoryRepository(($this->services['TYPO3\\CMS\\Extensionmanager\\Domain\\Repository\\RepositoryRepository'] ?? $this->getRepositoryRepositoryService()));
        $instance->injectListUtility(($this->services['TYPO3\\CMS\\Extensionmanager\\Utility\\ListUtility'] ?? $this->getListUtilityService()));
        $instance->injectExtensionRepository(($this->services['TYPO3\\CMS\\Extensionmanager\\Domain\\Repository\\ExtensionRepository'] ?? $this->getExtensionRepositoryService()));
        $instance->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));
        $instance->injectSignalSlotDispatcher(($this->services['TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher'] ?? $this->getDispatcher2Service()));
        $instance->injectValidatorResolver(($this->services['TYPO3\\CMS\\Extbase\\Validation\\ValidatorResolver'] ?? $this->getValidatorResolverService()));
        $instance->injectViewResolver(($this->privates['TYPO3\\CMS\\Extbase\\Mvc\\View\\GenericViewResolver'] ?? $this->getGenericViewResolverService()));
        $instance->injectReflectionService(($this->services['TYPO3\\CMS\\Extbase\\Reflection\\ReflectionService'] ?? $this->getReflectionServiceService()));
        $instance->injectCacheService(($this->services['TYPO3\\CMS\\Extbase\\Service\\CacheService'] ?? $this->getCacheServiceService()));
        $instance->injectHashService(($this->services['TYPO3\\CMS\\Extbase\\Security\\Cryptography\\HashService'] ?? $this->getHashServiceService()));
        $instance->injectMvcPropertyMappingConfigurationService(($this->services['TYPO3\\CMS\\Extbase\\Mvc\\Controller\\MvcPropertyMappingConfigurationService'] ?? $this->getMvcPropertyMappingConfigurationServiceService()));
        $instance->injectEventDispatcher(($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Extensionmanager\Controller\UpdateScriptController' autowired service.
     *
     * @return \TYPO3\CMS\Extensionmanager\Controller\UpdateScriptController
     */
    protected function getUpdateScriptControllerService()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extensionmanager\Controller\UpdateScriptController::class);

        $instance->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));
        $instance->injectSignalSlotDispatcher(($this->services['TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher'] ?? $this->getDispatcher2Service()));
        $instance->injectValidatorResolver(($this->services['TYPO3\\CMS\\Extbase\\Validation\\ValidatorResolver'] ?? $this->getValidatorResolverService()));
        $instance->injectViewResolver(($this->privates['TYPO3\\CMS\\Extbase\\Mvc\\View\\GenericViewResolver'] ?? $this->getGenericViewResolverService()));
        $instance->injectReflectionService(($this->services['TYPO3\\CMS\\Extbase\\Reflection\\ReflectionService'] ?? $this->getReflectionServiceService()));
        $instance->injectCacheService(($this->services['TYPO3\\CMS\\Extbase\\Service\\CacheService'] ?? $this->getCacheServiceService()));
        $instance->injectHashService(($this->services['TYPO3\\CMS\\Extbase\\Security\\Cryptography\\HashService'] ?? $this->getHashServiceService()));
        $instance->injectMvcPropertyMappingConfigurationService(($this->services['TYPO3\\CMS\\Extbase\\Mvc\\Controller\\MvcPropertyMappingConfigurationService'] ?? $this->getMvcPropertyMappingConfigurationServiceService()));
        $instance->injectEventDispatcher(($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Extensionmanager\Controller\UploadExtensionFileController' autowired service.
     *
     * @return \TYPO3\CMS\Extensionmanager\Controller\UploadExtensionFileController
     */
    protected function getUploadExtensionFileControllerService()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extensionmanager\Controller\UploadExtensionFileController::class);

        $instance->injectExtensionRepository(($this->services['TYPO3\\CMS\\Extensionmanager\\Domain\\Repository\\ExtensionRepository'] ?? $this->getExtensionRepositoryService()));
        $instance->injectFileHandlingUtility(($this->services['TYPO3\\CMS\\Extensionmanager\\Utility\\FileHandlingUtility'] ?? $this->getFileHandlingUtilityService()));
        $instance->injectTerUtility(($this->privates['TYPO3\\CMS\\Extensionmanager\\Utility\\Connection\\TerUtility'] ?? ($this->privates['TYPO3\\CMS\\Extensionmanager\\Utility\\Connection\\TerUtility'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extensionmanager\Utility\Connection\TerUtility::class))));
        $instance->injectManagementService(($this->services['TYPO3\\CMS\\Extensionmanager\\Service\\ExtensionManagementService'] ?? $this->getExtensionManagementServiceService()));
        $instance->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));
        $instance->injectSignalSlotDispatcher(($this->services['TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher'] ?? $this->getDispatcher2Service()));
        $instance->injectValidatorResolver(($this->services['TYPO3\\CMS\\Extbase\\Validation\\ValidatorResolver'] ?? $this->getValidatorResolverService()));
        $instance->injectViewResolver(($this->privates['TYPO3\\CMS\\Extbase\\Mvc\\View\\GenericViewResolver'] ?? $this->getGenericViewResolverService()));
        $instance->injectReflectionService(($this->services['TYPO3\\CMS\\Extbase\\Reflection\\ReflectionService'] ?? $this->getReflectionServiceService()));
        $instance->injectCacheService(($this->services['TYPO3\\CMS\\Extbase\\Service\\CacheService'] ?? $this->getCacheServiceService()));
        $instance->injectHashService(($this->services['TYPO3\\CMS\\Extbase\\Security\\Cryptography\\HashService'] ?? $this->getHashServiceService()));
        $instance->injectMvcPropertyMappingConfigurationService(($this->services['TYPO3\\CMS\\Extbase\\Mvc\\Controller\\MvcPropertyMappingConfigurationService'] ?? $this->getMvcPropertyMappingConfigurationServiceService()));
        $instance->injectEventDispatcher(($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Extensionmanager\Domain\Model\DownloadQueue' shared autowired service.
     *
     * @return \TYPO3\CMS\Extensionmanager\Domain\Model\DownloadQueue
     */
    protected function getDownloadQueueService()
    {
        return $this->services['TYPO3\\CMS\\Extensionmanager\\Domain\\Model\\DownloadQueue'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extensionmanager\Domain\Model\DownloadQueue::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Extensionmanager\Domain\Repository\ExtensionRepository' shared autowired service.
     *
     * @return \TYPO3\CMS\Extensionmanager\Domain\Repository\ExtensionRepository
     */
    protected function getExtensionRepositoryService()
    {
        $this->services['TYPO3\\CMS\\Extensionmanager\\Domain\\Repository\\ExtensionRepository'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extensionmanager\Domain\Repository\ExtensionRepository::class, ($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));

        $instance->injectPersistenceManager(($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()));
        $instance->initializeObject();

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Extensionmanager\Domain\Repository\RepositoryRepository' shared autowired service.
     *
     * @return \TYPO3\CMS\Extensionmanager\Domain\Repository\RepositoryRepository
     */
    protected function getRepositoryRepositoryService()
    {
        $this->services['TYPO3\\CMS\\Extensionmanager\\Domain\\Repository\\RepositoryRepository'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extensionmanager\Domain\Repository\RepositoryRepository::class, ($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));

        $instance->injectPersistenceManager(($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()));
        $instance->initializeObject();

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Extensionmanager\Service\ExtensionManagementService' shared autowired service.
     *
     * @return \TYPO3\CMS\Extensionmanager\Service\ExtensionManagementService
     */
    protected function getExtensionManagementServiceService()
    {
        $this->services['TYPO3\\CMS\\Extensionmanager\\Service\\ExtensionManagementService'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extensionmanager\Service\ExtensionManagementService::class);

        $instance->injectEventDispatcher(($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service()));
        $instance->injectDownloadQueue(($this->services['TYPO3\\CMS\\Extensionmanager\\Domain\\Model\\DownloadQueue'] ?? ($this->services['TYPO3\\CMS\\Extensionmanager\\Domain\\Model\\DownloadQueue'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extensionmanager\Domain\Model\DownloadQueue::class))));
        $instance->injectDependencyUtility(($this->services['TYPO3\\CMS\\Extensionmanager\\Utility\\DependencyUtility'] ?? $this->getDependencyUtilityService()));
        $instance->injectInstallUtility(($this->services['TYPO3\\CMS\\Extensionmanager\\Utility\\InstallUtility'] ?? $this->getInstallUtilityService()));
        $instance->injectExtensionModelUtility(($this->privates['TYPO3\\CMS\\Extensionmanager\\Utility\\ExtensionModelUtility'] ?? $this->getExtensionModelUtilityService()));
        $instance->injectDownloadUtility(($this->services['TYPO3\\CMS\\Extensionmanager\\Utility\\DownloadUtility'] ?? $this->getDownloadUtilityService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Extensionmanager\Utility\DependencyUtility' shared autowired service.
     *
     * @return \TYPO3\CMS\Extensionmanager\Utility\DependencyUtility
     */
    protected function getDependencyUtilityService()
    {
        $this->services['TYPO3\\CMS\\Extensionmanager\\Utility\\DependencyUtility'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extensionmanager\Utility\DependencyUtility::class);

        $instance->injectExtensionRepository(($this->services['TYPO3\\CMS\\Extensionmanager\\Domain\\Repository\\ExtensionRepository'] ?? $this->getExtensionRepositoryService()));
        $instance->injectListUtility(($this->services['TYPO3\\CMS\\Extensionmanager\\Utility\\ListUtility'] ?? $this->getListUtilityService()));
        $instance->injectEmConfUtility(($this->services['TYPO3\\CMS\\Extensionmanager\\Utility\\EmConfUtility'] ?? ($this->services['TYPO3\\CMS\\Extensionmanager\\Utility\\EmConfUtility'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extensionmanager\Utility\EmConfUtility::class))));
        $instance->injectManagementService(($this->services['TYPO3\\CMS\\Extensionmanager\\Service\\ExtensionManagementService'] ?? $this->getExtensionManagementServiceService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Extensionmanager\Utility\DownloadUtility' shared autowired service.
     *
     * @return \TYPO3\CMS\Extensionmanager\Utility\DownloadUtility
     */
    protected function getDownloadUtilityService()
    {
        $this->services['TYPO3\\CMS\\Extensionmanager\\Utility\\DownloadUtility'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extensionmanager\Utility\DownloadUtility::class);

        $instance->injectTerUtility(($this->privates['TYPO3\\CMS\\Extensionmanager\\Utility\\Connection\\TerUtility'] ?? ($this->privates['TYPO3\\CMS\\Extensionmanager\\Utility\\Connection\\TerUtility'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extensionmanager\Utility\Connection\TerUtility::class))));
        $instance->injectRepositoryHelper(($this->services['TYPO3\\CMS\\Extensionmanager\\Utility\\Repository\\Helper'] ?? ($this->services['TYPO3\\CMS\\Extensionmanager\\Utility\\Repository\\Helper'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extensionmanager\Utility\Repository\Helper::class))));
        $instance->injectFileHandlingUtility(($this->services['TYPO3\\CMS\\Extensionmanager\\Utility\\FileHandlingUtility'] ?? $this->getFileHandlingUtilityService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Extensionmanager\Utility\EmConfUtility' shared autowired service.
     *
     * @return \TYPO3\CMS\Extensionmanager\Utility\EmConfUtility
     */
    protected function getEmConfUtilityService()
    {
        return $this->services['TYPO3\\CMS\\Extensionmanager\\Utility\\EmConfUtility'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extensionmanager\Utility\EmConfUtility::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Extensionmanager\Utility\FileHandlingUtility' shared autowired service.
     *
     * @return \TYPO3\CMS\Extensionmanager\Utility\FileHandlingUtility
     */
    protected function getFileHandlingUtilityService()
    {
        $this->services['TYPO3\\CMS\\Extensionmanager\\Utility\\FileHandlingUtility'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extensionmanager\Utility\FileHandlingUtility::class);

        $instance->setLogger(($this->services['_early.TYPO3\\CMS\\Core\\Log\\LogManager'] ?? $this->get('_early.TYPO3\\CMS\\Core\\Log\\LogManager', 1))->getLogger('TYPO3\\CMS\\Extensionmanager\\Utility\\FileHandlingUtility'));
        $instance->injectEmConfUtility(($this->services['TYPO3\\CMS\\Extensionmanager\\Utility\\EmConfUtility'] ?? ($this->services['TYPO3\\CMS\\Extensionmanager\\Utility\\EmConfUtility'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extensionmanager\Utility\EmConfUtility::class))));
        $instance->injectInstallUtility(($this->services['TYPO3\\CMS\\Extensionmanager\\Utility\\InstallUtility'] ?? $this->getInstallUtilityService()));
        $instance->injectLanguageService(\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Localization\LanguageService::class, ($this->services['TYPO3\\CMS\\Core\\Localization\\Locales'] ?? $this->getLocalesService()), ($this->services['TYPO3\\CMS\\Core\\Localization\\LocalizationFactory'] ?? $this->getLocalizationFactoryService())));
        $instance->initializeObject();

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Extensionmanager\Utility\InstallUtility' shared autowired service.
     *
     * @return \TYPO3\CMS\Extensionmanager\Utility\InstallUtility
     */
    protected function getInstallUtilityService()
    {
        $this->services['TYPO3\\CMS\\Extensionmanager\\Utility\\InstallUtility'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extensionmanager\Utility\InstallUtility::class);

        $instance->setLogger(($this->services['_early.TYPO3\\CMS\\Core\\Log\\LogManager'] ?? $this->get('_early.TYPO3\\CMS\\Core\\Log\\LogManager', 1))->getLogger('TYPO3\\CMS\\Extensionmanager\\Utility\\InstallUtility'));
        $instance->injectEventDispatcher(($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service()));
        $instance->injectDependencyUtility(($this->services['TYPO3\\CMS\\Extensionmanager\\Utility\\DependencyUtility'] ?? $this->getDependencyUtilityService()));
        $instance->injectFileHandlingUtility(($this->services['TYPO3\\CMS\\Extensionmanager\\Utility\\FileHandlingUtility'] ?? $this->getFileHandlingUtilityService()));
        $instance->injectListUtility(($this->services['TYPO3\\CMS\\Extensionmanager\\Utility\\ListUtility'] ?? $this->getListUtilityService()));
        $instance->injectExtensionRepository(($this->services['TYPO3\\CMS\\Extensionmanager\\Domain\\Repository\\ExtensionRepository'] ?? $this->getExtensionRepositoryService()));
        $instance->injectPackageManager(($this->services['_early.TYPO3\\CMS\\Core\\Package\\PackageManager'] ?? $this->get('_early.TYPO3\\CMS\\Core\\Package\\PackageManager', 1)));
        $instance->injectCacheManager(($this->services['TYPO3\\CMS\\Core\\Cache\\CacheManager'] ?? $this->getCacheManagerService()));
        $instance->injectRegistry(($this->services['TYPO3\\CMS\\Core\\Registry'] ?? $this->getRegistryService()));
        $instance->injectLateBootService(($this->services['TYPO3\\CMS\\Install\\Service\\LateBootService'] ?? $this->getLateBootServiceService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Extensionmanager\Utility\ListUtility' shared autowired service.
     *
     * @return \TYPO3\CMS\Extensionmanager\Utility\ListUtility
     */
    protected function getListUtilityService()
    {
        $this->services['TYPO3\\CMS\\Extensionmanager\\Utility\\ListUtility'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extensionmanager\Utility\ListUtility::class);

        $instance->injectEventDispatcher(($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service()));
        $instance->injectEmConfUtility(($this->services['TYPO3\\CMS\\Extensionmanager\\Utility\\EmConfUtility'] ?? ($this->services['TYPO3\\CMS\\Extensionmanager\\Utility\\EmConfUtility'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extensionmanager\Utility\EmConfUtility::class))));
        $instance->injectExtensionRepository(($this->services['TYPO3\\CMS\\Extensionmanager\\Domain\\Repository\\ExtensionRepository'] ?? $this->getExtensionRepositoryService()));
        $instance->injectInstallUtility(($this->services['TYPO3\\CMS\\Extensionmanager\\Utility\\InstallUtility'] ?? $this->getInstallUtilityService()));
        $instance->injectPackageManager(($this->services['_early.TYPO3\\CMS\\Core\\Package\\PackageManager'] ?? $this->get('_early.TYPO3\\CMS\\Core\\Package\\PackageManager', 1)));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Extensionmanager\Utility\Repository\Helper' shared autowired service.
     *
     * @return \TYPO3\CMS\Extensionmanager\Utility\Repository\Helper
     */
    protected function getHelperService()
    {
        return $this->services['TYPO3\\CMS\\Extensionmanager\\Utility\\Repository\\Helper'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extensionmanager\Utility\Repository\Helper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Extensionmanager\ViewHelpers\Be\TriggerViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Extensionmanager\ViewHelpers\Be\TriggerViewHelper
     */
    protected function getTriggerViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extensionmanager\ViewHelpers\Be\TriggerViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Extensionmanager\ViewHelpers\DistributionImageViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Extensionmanager\ViewHelpers\DistributionImageViewHelper
     */
    protected function getDistributionImageViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extensionmanager\ViewHelpers\DistributionImageViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Extensionmanager\ViewHelpers\DownloadExtensionViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Extensionmanager\ViewHelpers\DownloadExtensionViewHelper
     */
    protected function getDownloadExtensionViewHelperService()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extensionmanager\ViewHelpers\DownloadExtensionViewHelper::class);

        $instance->injectExtensionService(($this->services['TYPO3\\CMS\\Extbase\\Service\\ExtensionService'] ?? $this->getExtensionServiceService()));
        $instance->injectPersistenceManager(($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Extensionmanager\ViewHelpers\InstallationStateCssClassViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Extensionmanager\ViewHelpers\InstallationStateCssClassViewHelper
     */
    protected function getInstallationStateCssClassViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extensionmanager\ViewHelpers\InstallationStateCssClassViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Extensionmanager\ViewHelpers\ProcessAvailableActionsViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Extensionmanager\ViewHelpers\ProcessAvailableActionsViewHelper
     */
    protected function getProcessAvailableActionsViewHelperService()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extensionmanager\ViewHelpers\ProcessAvailableActionsViewHelper::class);

        $instance->injectEventDispatcher(($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Extensionmanager\ViewHelpers\ReloadSqlDataViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Extensionmanager\ViewHelpers\ReloadSqlDataViewHelper
     */
    protected function getReloadSqlDataViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extensionmanager\ViewHelpers\ReloadSqlDataViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Extensionmanager\ViewHelpers\RemoveExtensionViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Extensionmanager\ViewHelpers\RemoveExtensionViewHelper
     */
    protected function getRemoveExtensionViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extensionmanager\ViewHelpers\RemoveExtensionViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Extensionmanager\ViewHelpers\ToggleExtensionInstallationStateViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Extensionmanager\ViewHelpers\ToggleExtensionInstallationStateViewHelper
     */
    protected function getToggleExtensionInstallationStateViewHelperService()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extensionmanager\ViewHelpers\ToggleExtensionInstallationStateViewHelper::class);

        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Extensionmanager\ViewHelpers\Typo3DependencyViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Extensionmanager\ViewHelpers\Typo3DependencyViewHelper
     */
    protected function getTypo3DependencyViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extensionmanager\ViewHelpers\Typo3DependencyViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Extensionmanager\ViewHelpers\UpdateScriptViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Extensionmanager\ViewHelpers\UpdateScriptViewHelper
     */
    protected function getUpdateScriptViewHelperService()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extensionmanager\ViewHelpers\UpdateScriptViewHelper::class);

        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Filelist\Configuration\ThumbnailConfiguration' shared autowired service.
     *
     * @return \TYPO3\CMS\Filelist\Configuration\ThumbnailConfiguration
     */
    protected function getThumbnailConfigurationService()
    {
        return $this->services['TYPO3\\CMS\\Filelist\\Configuration\\ThumbnailConfiguration'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Filelist\Configuration\ThumbnailConfiguration::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Filelist\Controller\FileListController' autowired service.
     *
     * @return \TYPO3\CMS\Filelist\Controller\FileListController
     */
    protected function getFileListControllerService()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Filelist\Controller\FileListController::class);

        $instance->setLogger(($this->services['_early.TYPO3\\CMS\\Core\\Log\\LogManager'] ?? $this->get('_early.TYPO3\\CMS\\Core\\Log\\LogManager', 1))->getLogger('TYPO3\\CMS\\Filelist\\Controller\\FileListController'));
        $instance->injectFileRepository(($this->services['TYPO3\\CMS\\Core\\Resource\\FileRepository'] ?? ($this->services['TYPO3\\CMS\\Core\\Resource\\FileRepository'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Resource\FileRepository::class))));
        $instance->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));
        $instance->injectSignalSlotDispatcher(($this->services['TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher'] ?? $this->getDispatcher2Service()));
        $instance->injectValidatorResolver(($this->services['TYPO3\\CMS\\Extbase\\Validation\\ValidatorResolver'] ?? $this->getValidatorResolverService()));
        $instance->injectViewResolver(($this->privates['TYPO3\\CMS\\Extbase\\Mvc\\View\\GenericViewResolver'] ?? $this->getGenericViewResolverService()));
        $instance->injectReflectionService(($this->services['TYPO3\\CMS\\Extbase\\Reflection\\ReflectionService'] ?? $this->getReflectionServiceService()));
        $instance->injectCacheService(($this->services['TYPO3\\CMS\\Extbase\\Service\\CacheService'] ?? $this->getCacheServiceService()));
        $instance->injectHashService(($this->services['TYPO3\\CMS\\Extbase\\Security\\Cryptography\\HashService'] ?? $this->getHashServiceService()));
        $instance->injectMvcPropertyMappingConfigurationService(($this->services['TYPO3\\CMS\\Extbase\\Mvc\\Controller\\MvcPropertyMappingConfigurationService'] ?? $this->getMvcPropertyMappingConfigurationServiceService()));
        $instance->injectEventDispatcher(($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service()));
        $instance->initializeObject();

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Filelist\ViewHelpers\Uri\CopyCutFileViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Filelist\ViewHelpers\Uri\CopyCutFileViewHelper
     */
    protected function getCopyCutFileViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Filelist\ViewHelpers\Uri\CopyCutFileViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Filelist\ViewHelpers\Uri\EditFileContentViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Filelist\ViewHelpers\Uri\EditFileContentViewHelper
     */
    protected function getEditFileContentViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Filelist\ViewHelpers\Uri\EditFileContentViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Filelist\ViewHelpers\Uri\RenameFileViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Filelist\ViewHelpers\Uri\RenameFileViewHelper
     */
    protected function getRenameFileViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Filelist\ViewHelpers\Uri\RenameFileViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Filelist\ViewHelpers\Uri\ReplaceFileViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Filelist\ViewHelpers\Uri\ReplaceFileViewHelper
     */
    protected function getReplaceFileViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Filelist\ViewHelpers\Uri\ReplaceFileViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\FluidStyledContent\ViewHelpers\Link\ClickEnlargeViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\FluidStyledContent\ViewHelpers\Link\ClickEnlargeViewHelper
     */
    protected function getClickEnlargeViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\FluidStyledContent\ViewHelpers\Link\ClickEnlargeViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\Core\Widget\AjaxWidgetContextHolder' shared autowired service.
     *
     * @return \TYPO3\CMS\Fluid\Core\Widget\AjaxWidgetContextHolder
     */
    protected function getAjaxWidgetContextHolderService()
    {
        return $this->services['TYPO3\\CMS\\Fluid\\Core\\Widget\\AjaxWidgetContextHolder'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\Core\Widget\AjaxWidgetContextHolder::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\Core\Widget\WidgetRequestBuilder' shared autowired service.
     *
     * @return \TYPO3\CMS\Fluid\Core\Widget\WidgetRequestBuilder
     */
    protected function getWidgetRequestBuilderService()
    {
        $this->services['TYPO3\\CMS\\Fluid\\Core\\Widget\\WidgetRequestBuilder'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\Core\Widget\WidgetRequestBuilder::class);

        $instance->injectAjaxWidgetContextHolder(($this->services['TYPO3\\CMS\\Fluid\\Core\\Widget\\AjaxWidgetContextHolder'] ?? ($this->services['TYPO3\\CMS\\Fluid\\Core\\Widget\\AjaxWidgetContextHolder'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\Core\Widget\AjaxWidgetContextHolder::class))));
        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));
        $instance->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
        $instance->injectExtensionService(($this->services['TYPO3\\CMS\\Extbase\\Service\\ExtensionService'] ?? $this->getExtensionServiceService()));
        $instance->injectEnvironmentService(($this->services['TYPO3\\CMS\\Extbase\\Service\\EnvironmentService'] ?? $this->getEnvironmentServiceService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\Core\Widget\WidgetRequestHandler' shared autowired service.
     *
     * @return \TYPO3\CMS\Fluid\Core\Widget\WidgetRequestHandler
     */
    protected function getWidgetRequestHandlerService()
    {
        $this->services['TYPO3\\CMS\\Fluid\\Core\\Widget\\WidgetRequestHandler'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\Core\Widget\WidgetRequestHandler::class);

        $instance->injectAjaxWidgetContextHolder(($this->services['TYPO3\\CMS\\Fluid\\Core\\Widget\\AjaxWidgetContextHolder'] ?? ($this->services['TYPO3\\CMS\\Fluid\\Core\\Widget\\AjaxWidgetContextHolder'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\Core\Widget\AjaxWidgetContextHolder::class))));
        $instance->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
        $instance->injectRequestBuilder(($this->services['TYPO3\\CMS\\Extbase\\Mvc\\Web\\RequestBuilder'] ?? $this->getRequestBuilderService()));
        $instance->injectWidgetRequestBuilder(($this->services['TYPO3\\CMS\\Fluid\\Core\\Widget\\WidgetRequestBuilder'] ?? $this->getWidgetRequestBuilderService()));
        $instance->injectDispatcher(($this->services['TYPO3\\CMS\\Extbase\\Mvc\\Dispatcher'] ?? $this->getDispatcherService()));
        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));
        $instance->injectEnvironmentService(($this->services['TYPO3\\CMS\\Extbase\\Service\\EnvironmentService'] ?? $this->getEnvironmentServiceService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper
     */
    protected function getCssViewHelperService()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::class);

        $instance->injectAssetCollector(($this->services['TYPO3\\CMS\\Core\\Page\\AssetCollector'] ?? ($this->services['TYPO3\\CMS\\Core\\Page\\AssetCollector'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Page\AssetCollector::class))));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
     */
    protected function getScriptViewHelperService()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::class);

        $instance->injectAssetCollector(($this->services['TYPO3\\CMS\\Core\\Page\\AssetCollector'] ?? ($this->services['TYPO3\\CMS\\Core\\Page\\AssetCollector'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Page\AssetCollector::class))));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\BaseViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\BaseViewHelper
     */
    protected function getBaseViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\BaseViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\CshViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\CshViewHelper
     */
    protected function getCshViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\CshViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\ShortcutViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\ShortcutViewHelper
     */
    protected function getShortcutViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\ShortcutViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Be\ContainerViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Be\ContainerViewHelper
     */
    protected function getContainerViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Be\ContainerViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
     */
    protected function getInfoboxViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Be\Labels\CshViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Be\Labels\CshViewHelper
     */
    protected function getCshViewHelper2Service()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Be\Labels\CshViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
     */
    protected function getLinkViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Be\Menus\ActionMenuItemGroupViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Be\Menus\ActionMenuItemGroupViewHelper
     */
    protected function getActionMenuItemGroupViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Be\Menus\ActionMenuItemGroupViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Be\Menus\ActionMenuItemViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Be\Menus\ActionMenuItemViewHelper
     */
    protected function getActionMenuItemViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Be\Menus\ActionMenuItemViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Be\Menus\ActionMenuViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Be\Menus\ActionMenuViewHelper
     */
    protected function getActionMenuViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Be\Menus\ActionMenuViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Be\PageInfoViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Be\PageInfoViewHelper
     */
    protected function getPageInfoViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Be\PageInfoViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Be\PagePathViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Be\PagePathViewHelper
     */
    protected function getPagePathViewHelper2Service()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Be\PagePathViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper
     */
    protected function getPageRendererViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Be\Security\IfAuthenticatedViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Be\Security\IfAuthenticatedViewHelper
     */
    protected function getIfAuthenticatedViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Be\Security\IfAuthenticatedViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Be\Security\IfHasRoleViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Be\Security\IfHasRoleViewHelper
     */
    protected function getIfHasRoleViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Be\Security\IfHasRoleViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Be\TableListViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Be\TableListViewHelper
     */
    protected function getTableListViewHelperService()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Be\TableListViewHelper::class);

        $instance->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
     */
    protected function getUriViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Be\Widget\Controller\PaginateController' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Be\Widget\Controller\PaginateController
     */
    protected function getPaginateControllerService()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Be\Widget\Controller\PaginateController::class);

        $instance->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));
        $instance->injectSignalSlotDispatcher(($this->services['TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher'] ?? $this->getDispatcher2Service()));
        $instance->injectValidatorResolver(($this->services['TYPO3\\CMS\\Extbase\\Validation\\ValidatorResolver'] ?? $this->getValidatorResolverService()));
        $instance->injectViewResolver(($this->privates['TYPO3\\CMS\\Extbase\\Mvc\\View\\GenericViewResolver'] ?? $this->getGenericViewResolverService()));
        $instance->injectReflectionService(($this->services['TYPO3\\CMS\\Extbase\\Reflection\\ReflectionService'] ?? $this->getReflectionServiceService()));
        $instance->injectCacheService(($this->services['TYPO3\\CMS\\Extbase\\Service\\CacheService'] ?? $this->getCacheServiceService()));
        $instance->injectHashService(($this->services['TYPO3\\CMS\\Extbase\\Security\\Cryptography\\HashService'] ?? $this->getHashServiceService()));
        $instance->injectMvcPropertyMappingConfigurationService(($this->services['TYPO3\\CMS\\Extbase\\Mvc\\Controller\\MvcPropertyMappingConfigurationService'] ?? $this->getMvcPropertyMappingConfigurationServiceService()));
        $instance->injectEventDispatcher(($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Be\Widget\PaginateViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Be\Widget\PaginateViewHelper
     */
    protected function getPaginateViewHelperService()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Be\Widget\PaginateViewHelper::class);

        $a = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Be\Widget\Controller\PaginateController::class);

        $b = ($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService());

        $a->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
        $a->injectObjectManager($b);
        $a->injectSignalSlotDispatcher(($this->services['TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher'] ?? $this->getDispatcher2Service()));
        $a->injectValidatorResolver(($this->services['TYPO3\\CMS\\Extbase\\Validation\\ValidatorResolver'] ?? $this->getValidatorResolverService()));
        $a->injectViewResolver(($this->privates['TYPO3\\CMS\\Extbase\\Mvc\\View\\GenericViewResolver'] ?? $this->getGenericViewResolverService()));
        $a->injectReflectionService(($this->services['TYPO3\\CMS\\Extbase\\Reflection\\ReflectionService'] ?? $this->getReflectionServiceService()));
        $a->injectCacheService(($this->services['TYPO3\\CMS\\Extbase\\Service\\CacheService'] ?? $this->getCacheServiceService()));
        $a->injectHashService(($this->services['TYPO3\\CMS\\Extbase\\Security\\Cryptography\\HashService'] ?? $this->getHashServiceService()));
        $a->injectMvcPropertyMappingConfigurationService(($this->services['TYPO3\\CMS\\Extbase\\Mvc\\Controller\\MvcPropertyMappingConfigurationService'] ?? $this->getMvcPropertyMappingConfigurationServiceService()));
        $a->injectEventDispatcher(($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service()));

        $instance->injectPaginateController($a);
        $instance->injectAjaxWidgetContextHolder(($this->services['TYPO3\\CMS\\Fluid\\Core\\Widget\\AjaxWidgetContextHolder'] ?? ($this->services['TYPO3\\CMS\\Fluid\\Core\\Widget\\AjaxWidgetContextHolder'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\Core\Widget\AjaxWidgetContextHolder::class))));
        $instance->injectObjectManager($b);
        $instance->injectExtensionService(($this->services['TYPO3\\CMS\\Extbase\\Service\\ExtensionService'] ?? $this->getExtensionServiceService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
     */
    protected function getCObjectViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper
     */
    protected function getDebugViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Debug\RenderViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Debug\RenderViewHelper
     */
    protected function getRenderViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Debug\RenderViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
     */
    protected function getFlashMessagesViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
     */
    protected function getFormViewHelperService()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::class);

        $instance->injectHashService(($this->services['TYPO3\\CMS\\Extbase\\Security\\Cryptography\\HashService'] ?? $this->getHashServiceService()));
        $instance->injectMvcPropertyMappingConfigurationService(($this->services['TYPO3\\CMS\\Extbase\\Mvc\\Controller\\MvcPropertyMappingConfigurationService'] ?? $this->getMvcPropertyMappingConfigurationServiceService()));
        $instance->injectExtensionService(($this->services['TYPO3\\CMS\\Extbase\\Service\\ExtensionService'] ?? $this->getExtensionServiceService()));
        $instance->injectPersistenceManager(($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper
     */
    protected function getButtonViewHelperService()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper::class);

        $instance->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
        $instance->injectPersistenceManager(($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
     */
    protected function getCheckboxViewHelperService()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::class);

        $instance->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
        $instance->injectPersistenceManager(($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
     */
    protected function getHiddenViewHelperService()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::class);

        $instance->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
        $instance->injectPersistenceManager(($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Form\PasswordViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Form\PasswordViewHelper
     */
    protected function getPasswordViewHelperService()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Form\PasswordViewHelper::class);

        $instance->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
        $instance->injectPersistenceManager(($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Form\RadioViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Form\RadioViewHelper
     */
    protected function getRadioViewHelperService()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Form\RadioViewHelper::class);

        $instance->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
        $instance->injectPersistenceManager(($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
     */
    protected function getSelectViewHelper2Service()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::class);

        $instance->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
        $instance->injectPersistenceManager(($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Form\Select\OptgroupViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Form\Select\OptgroupViewHelper
     */
    protected function getOptgroupViewHelperService()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Form\Select\OptgroupViewHelper::class);

        $instance->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
        $instance->injectPersistenceManager(($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Form\Select\OptionViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Form\Select\OptionViewHelper
     */
    protected function getOptionViewHelperService()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Form\Select\OptionViewHelper::class);

        $instance->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
        $instance->injectPersistenceManager(($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
     */
    protected function getSubmitViewHelperService()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::class);

        $instance->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
        $instance->injectPersistenceManager(($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextareaViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Form\TextareaViewHelper
     */
    protected function getTextareaViewHelperService()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Form\TextareaViewHelper::class);

        $instance->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
        $instance->injectPersistenceManager(($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
     */
    protected function getTextfieldViewHelperService()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::class);

        $instance->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
        $instance->injectPersistenceManager(($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Form\UploadViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Form\UploadViewHelper
     */
    protected function getUploadViewHelperService()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Form\UploadViewHelper::class);

        $instance->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
        $instance->injectPersistenceManager(($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
     */
    protected function getValidationResultsViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper
     */
    protected function getBytesViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
     */
    protected function getCaseViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
     */
    protected function getCropViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Format\CurrencyViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Format\CurrencyViewHelper
     */
    protected function getCurrencyViewHelper2Service()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Format\CurrencyViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
     */
    protected function getDateViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
     */
    protected function getHtmlViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper
     */
    protected function getHtmlentitiesDecodeViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
     */
    protected function getHtmlentitiesViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper
     */
    protected function getJsonViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
     */
    protected function getNl2brViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Format\NumberViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Format\NumberViewHelper
     */
    protected function getNumberViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Format\NumberViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Format\PaddingViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Format\PaddingViewHelper
     */
    protected function getPaddingViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Format\PaddingViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Format\StripTagsViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Format\StripTagsViewHelper
     */
    protected function getStripTagsViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Format\StripTagsViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Format\UrlencodeViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Format\UrlencodeViewHelper
     */
    protected function getUrlencodeViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Format\UrlencodeViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
     */
    protected function getImageViewHelperService()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::class);

        $instance->injectImageService(($this->services['TYPO3\\CMS\\Extbase\\Service\\ImageService'] ?? $this->getImageServiceService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
     */
    protected function getActionViewHelper2Service()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Link\EmailViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Link\EmailViewHelper
     */
    protected function getEmailViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Link\EmailViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper
     */
    protected function getExternalViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
     */
    protected function getPageViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
     */
    protected function getTypolinkViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
     */
    protected function getMediaViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\RenderChildrenViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\RenderChildrenViewHelper
     */
    protected function getRenderChildrenViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\RenderChildrenViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
     */
    protected function getRenderViewHelper2Service()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Sanitize\HtmlViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Sanitize\HtmlViewHelper
     */
    protected function getHtmlViewHelper2Service()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Sanitize\HtmlViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Security\IfAuthenticatedViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Security\IfAuthenticatedViewHelper
     */
    protected function getIfAuthenticatedViewHelper2Service()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Security\IfAuthenticatedViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Security\IfHasRoleViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Security\IfHasRoleViewHelper
     */
    protected function getIfHasRoleViewHelper2Service()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Security\IfHasRoleViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
     */
    protected function getTranslateViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
     */
    protected function getActionViewHelper3Service()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Uri\EmailViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Uri\EmailViewHelper
     */
    protected function getEmailViewHelper2Service()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Uri\EmailViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ExternalViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Uri\ExternalViewHelper
     */
    protected function getExternalViewHelper2Service()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Uri\ExternalViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
     */
    protected function getImageViewHelper2Service()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Uri\PageViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Uri\PageViewHelper
     */
    protected function getPageViewHelper2Service()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Uri\PageViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
     */
    protected function getResourceViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Uri\TypolinkViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Uri\TypolinkViewHelper
     */
    protected function getTypolinkViewHelper2Service()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Uri\TypolinkViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Widget\AutocompleteViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Widget\AutocompleteViewHelper
     */
    protected function getAutocompleteViewHelperService()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Widget\AutocompleteViewHelper::class);

        $a = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Widget\Controller\AutocompleteController::class);

        $b = ($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService());

        $a->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
        $a->injectObjectManager($b);
        $a->injectSignalSlotDispatcher(($this->services['TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher'] ?? $this->getDispatcher2Service()));
        $a->injectValidatorResolver(($this->services['TYPO3\\CMS\\Extbase\\Validation\\ValidatorResolver'] ?? $this->getValidatorResolverService()));
        $a->injectViewResolver(($this->privates['TYPO3\\CMS\\Extbase\\Mvc\\View\\GenericViewResolver'] ?? $this->getGenericViewResolverService()));
        $a->injectReflectionService(($this->services['TYPO3\\CMS\\Extbase\\Reflection\\ReflectionService'] ?? $this->getReflectionServiceService()));
        $a->injectCacheService(($this->services['TYPO3\\CMS\\Extbase\\Service\\CacheService'] ?? $this->getCacheServiceService()));
        $a->injectHashService(($this->services['TYPO3\\CMS\\Extbase\\Security\\Cryptography\\HashService'] ?? $this->getHashServiceService()));
        $a->injectMvcPropertyMappingConfigurationService(($this->services['TYPO3\\CMS\\Extbase\\Mvc\\Controller\\MvcPropertyMappingConfigurationService'] ?? $this->getMvcPropertyMappingConfigurationServiceService()));
        $a->injectEventDispatcher(($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service()));

        $instance->injectAutocompleteController($a);
        $instance->injectAjaxWidgetContextHolder(($this->services['TYPO3\\CMS\\Fluid\\Core\\Widget\\AjaxWidgetContextHolder'] ?? ($this->services['TYPO3\\CMS\\Fluid\\Core\\Widget\\AjaxWidgetContextHolder'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\Core\Widget\AjaxWidgetContextHolder::class))));
        $instance->injectObjectManager($b);
        $instance->injectExtensionService(($this->services['TYPO3\\CMS\\Extbase\\Service\\ExtensionService'] ?? $this->getExtensionServiceService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Widget\Controller\AutocompleteController' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Widget\Controller\AutocompleteController
     */
    protected function getAutocompleteControllerService()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Widget\Controller\AutocompleteController::class);

        $instance->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));
        $instance->injectSignalSlotDispatcher(($this->services['TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher'] ?? $this->getDispatcher2Service()));
        $instance->injectValidatorResolver(($this->services['TYPO3\\CMS\\Extbase\\Validation\\ValidatorResolver'] ?? $this->getValidatorResolverService()));
        $instance->injectViewResolver(($this->privates['TYPO3\\CMS\\Extbase\\Mvc\\View\\GenericViewResolver'] ?? $this->getGenericViewResolverService()));
        $instance->injectReflectionService(($this->services['TYPO3\\CMS\\Extbase\\Reflection\\ReflectionService'] ?? $this->getReflectionServiceService()));
        $instance->injectCacheService(($this->services['TYPO3\\CMS\\Extbase\\Service\\CacheService'] ?? $this->getCacheServiceService()));
        $instance->injectHashService(($this->services['TYPO3\\CMS\\Extbase\\Security\\Cryptography\\HashService'] ?? $this->getHashServiceService()));
        $instance->injectMvcPropertyMappingConfigurationService(($this->services['TYPO3\\CMS\\Extbase\\Mvc\\Controller\\MvcPropertyMappingConfigurationService'] ?? $this->getMvcPropertyMappingConfigurationServiceService()));
        $instance->injectEventDispatcher(($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Widget\Controller\PaginateController' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Widget\Controller\PaginateController
     */
    protected function getPaginateController2Service()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Widget\Controller\PaginateController::class);

        $instance->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));
        $instance->injectSignalSlotDispatcher(($this->services['TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher'] ?? $this->getDispatcher2Service()));
        $instance->injectValidatorResolver(($this->services['TYPO3\\CMS\\Extbase\\Validation\\ValidatorResolver'] ?? $this->getValidatorResolverService()));
        $instance->injectViewResolver(($this->privates['TYPO3\\CMS\\Extbase\\Mvc\\View\\GenericViewResolver'] ?? $this->getGenericViewResolverService()));
        $instance->injectReflectionService(($this->services['TYPO3\\CMS\\Extbase\\Reflection\\ReflectionService'] ?? $this->getReflectionServiceService()));
        $instance->injectCacheService(($this->services['TYPO3\\CMS\\Extbase\\Service\\CacheService'] ?? $this->getCacheServiceService()));
        $instance->injectHashService(($this->services['TYPO3\\CMS\\Extbase\\Security\\Cryptography\\HashService'] ?? $this->getHashServiceService()));
        $instance->injectMvcPropertyMappingConfigurationService(($this->services['TYPO3\\CMS\\Extbase\\Mvc\\Controller\\MvcPropertyMappingConfigurationService'] ?? $this->getMvcPropertyMappingConfigurationServiceService()));
        $instance->injectEventDispatcher(($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
     */
    protected function getLinkViewHelper2Service()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Widget\PaginateViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Widget\PaginateViewHelper
     */
    protected function getPaginateViewHelper2Service()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Widget\PaginateViewHelper::class);

        $a = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Widget\Controller\PaginateController::class);

        $b = ($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService());

        $a->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
        $a->injectObjectManager($b);
        $a->injectSignalSlotDispatcher(($this->services['TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher'] ?? $this->getDispatcher2Service()));
        $a->injectValidatorResolver(($this->services['TYPO3\\CMS\\Extbase\\Validation\\ValidatorResolver'] ?? $this->getValidatorResolverService()));
        $a->injectViewResolver(($this->privates['TYPO3\\CMS\\Extbase\\Mvc\\View\\GenericViewResolver'] ?? $this->getGenericViewResolverService()));
        $a->injectReflectionService(($this->services['TYPO3\\CMS\\Extbase\\Reflection\\ReflectionService'] ?? $this->getReflectionServiceService()));
        $a->injectCacheService(($this->services['TYPO3\\CMS\\Extbase\\Service\\CacheService'] ?? $this->getCacheServiceService()));
        $a->injectHashService(($this->services['TYPO3\\CMS\\Extbase\\Security\\Cryptography\\HashService'] ?? $this->getHashServiceService()));
        $a->injectMvcPropertyMappingConfigurationService(($this->services['TYPO3\\CMS\\Extbase\\Mvc\\Controller\\MvcPropertyMappingConfigurationService'] ?? $this->getMvcPropertyMappingConfigurationServiceService()));
        $a->injectEventDispatcher(($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service()));

        $instance->injectPaginateController($a);
        $instance->injectAjaxWidgetContextHolder(($this->services['TYPO3\\CMS\\Fluid\\Core\\Widget\\AjaxWidgetContextHolder'] ?? ($this->services['TYPO3\\CMS\\Fluid\\Core\\Widget\\AjaxWidgetContextHolder'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\Core\Widget\AjaxWidgetContextHolder::class))));
        $instance->injectObjectManager($b);
        $instance->injectExtensionService(($this->services['TYPO3\\CMS\\Extbase\\Service\\ExtensionService'] ?? $this->getExtensionServiceService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
     */
    protected function getUriViewHelper2Service()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\View\StandaloneView' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\View\StandaloneView
     */
    protected function getStandaloneViewService()
    {
        $a = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer::class, NULL, $this);
        $a->setLogger(($this->services['_early.TYPO3\\CMS\\Core\\Log\\LogManager'] ?? $this->get('_early.TYPO3\\CMS\\Core\\Log\\LogManager', 1))->getLogger('TYPO3\\CMS\\Frontend\\ContentObject\\ContentObjectRenderer'));

        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\View\StandaloneView::class, $a);
    }

    /**
     * Gets the public 'TYPO3\CMS\Fluid\View\TemplateView' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\View\TemplateView
     */
    protected function getTemplateViewService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Fluid\View\TemplateView::class, NULL);
    }

    /**
     * Gets the public 'TYPO3\CMS\Form\Controller\FormEditorController' autowired service.
     *
     * @return \TYPO3\CMS\Form\Controller\FormEditorController
     */
    protected function getFormEditorControllerService()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Form\Controller\FormEditorController::class);

        $instance->injectFormPersistenceManager(($this->privates['TYPO3\\CMS\\Form\\Mvc\\Persistence\\FormPersistenceManager'] ?? $this->getFormPersistenceManagerService()));
        $instance->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));
        $instance->injectSignalSlotDispatcher(($this->services['TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher'] ?? $this->getDispatcher2Service()));
        $instance->injectValidatorResolver(($this->services['TYPO3\\CMS\\Extbase\\Validation\\ValidatorResolver'] ?? $this->getValidatorResolverService()));
        $instance->injectViewResolver(($this->privates['TYPO3\\CMS\\Extbase\\Mvc\\View\\GenericViewResolver'] ?? $this->getGenericViewResolverService()));
        $instance->injectReflectionService(($this->services['TYPO3\\CMS\\Extbase\\Reflection\\ReflectionService'] ?? $this->getReflectionServiceService()));
        $instance->injectCacheService(($this->services['TYPO3\\CMS\\Extbase\\Service\\CacheService'] ?? $this->getCacheServiceService()));
        $instance->injectHashService(($this->services['TYPO3\\CMS\\Extbase\\Security\\Cryptography\\HashService'] ?? $this->getHashServiceService()));
        $instance->injectMvcPropertyMappingConfigurationService(($this->services['TYPO3\\CMS\\Extbase\\Mvc\\Controller\\MvcPropertyMappingConfigurationService'] ?? $this->getMvcPropertyMappingConfigurationServiceService()));
        $instance->injectEventDispatcher(($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service()));
        $instance->initializeObject();

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Form\Controller\FormFrontendController' autowired service.
     *
     * @return \TYPO3\CMS\Form\Controller\FormFrontendController
     */
    protected function getFormFrontendControllerService()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Form\Controller\FormFrontendController::class);

        $instance->injectFormPersistenceManager(($this->privates['TYPO3\\CMS\\Form\\Mvc\\Persistence\\FormPersistenceManager'] ?? $this->getFormPersistenceManagerService()));
        $instance->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));
        $instance->injectSignalSlotDispatcher(($this->services['TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher'] ?? $this->getDispatcher2Service()));
        $instance->injectValidatorResolver(($this->services['TYPO3\\CMS\\Extbase\\Validation\\ValidatorResolver'] ?? $this->getValidatorResolverService()));
        $instance->injectViewResolver(($this->privates['TYPO3\\CMS\\Extbase\\Mvc\\View\\GenericViewResolver'] ?? $this->getGenericViewResolverService()));
        $instance->injectReflectionService(($this->services['TYPO3\\CMS\\Extbase\\Reflection\\ReflectionService'] ?? $this->getReflectionServiceService()));
        $instance->injectCacheService(($this->services['TYPO3\\CMS\\Extbase\\Service\\CacheService'] ?? $this->getCacheServiceService()));
        $instance->injectHashService(($this->services['TYPO3\\CMS\\Extbase\\Security\\Cryptography\\HashService'] ?? $this->getHashServiceService()));
        $instance->injectMvcPropertyMappingConfigurationService(($this->services['TYPO3\\CMS\\Extbase\\Mvc\\Controller\\MvcPropertyMappingConfigurationService'] ?? $this->getMvcPropertyMappingConfigurationServiceService()));
        $instance->injectEventDispatcher(($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Form\Controller\FormManagerController' autowired service.
     *
     * @return \TYPO3\CMS\Form\Controller\FormManagerController
     */
    protected function getFormManagerControllerService()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Form\Controller\FormManagerController::class);

        $instance->injectDatabaseService(($this->privates['TYPO3\\CMS\\Form\\Service\\DatabaseService'] ?? ($this->privates['TYPO3\\CMS\\Form\\Service\\DatabaseService'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Form\Service\DatabaseService::class))));
        $instance->injectFormPersistenceManager(($this->privates['TYPO3\\CMS\\Form\\Mvc\\Persistence\\FormPersistenceManager'] ?? $this->getFormPersistenceManagerService()));
        $instance->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));
        $instance->injectSignalSlotDispatcher(($this->services['TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher'] ?? $this->getDispatcher2Service()));
        $instance->injectValidatorResolver(($this->services['TYPO3\\CMS\\Extbase\\Validation\\ValidatorResolver'] ?? $this->getValidatorResolverService()));
        $instance->injectViewResolver(($this->privates['TYPO3\\CMS\\Extbase\\Mvc\\View\\GenericViewResolver'] ?? $this->getGenericViewResolverService()));
        $instance->injectReflectionService(($this->services['TYPO3\\CMS\\Extbase\\Reflection\\ReflectionService'] ?? $this->getReflectionServiceService()));
        $instance->injectCacheService(($this->services['TYPO3\\CMS\\Extbase\\Service\\CacheService'] ?? $this->getCacheServiceService()));
        $instance->injectHashService(($this->services['TYPO3\\CMS\\Extbase\\Security\\Cryptography\\HashService'] ?? $this->getHashServiceService()));
        $instance->injectMvcPropertyMappingConfigurationService(($this->services['TYPO3\\CMS\\Extbase\\Mvc\\Controller\\MvcPropertyMappingConfigurationService'] ?? $this->getMvcPropertyMappingConfigurationServiceService()));
        $instance->injectEventDispatcher(($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service()));
        $instance->initializeObject();

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Form\Domain\Configuration\ConfigurationService' shared autowired service.
     *
     * @return \TYPO3\CMS\Form\Domain\Configuration\ConfigurationService
     */
    protected function getConfigurationServiceService()
    {
        $this->services['TYPO3\\CMS\\Form\\Domain\\Configuration\\ConfigurationService'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Form\Domain\Configuration\ConfigurationService::class);

        $instance->initializeObject();

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Form\Domain\Configuration\FormDefinitionConversionService' shared autowired service.
     *
     * @return \TYPO3\CMS\Form\Domain\Configuration\FormDefinitionConversionService
     */
    protected function getFormDefinitionConversionServiceService()
    {
        return $this->services['TYPO3\\CMS\\Form\\Domain\\Configuration\\FormDefinitionConversionService'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Form\Domain\Configuration\FormDefinitionConversionService::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Form\Domain\Configuration\FormDefinitionValidationService' shared autowired service.
     *
     * @return \TYPO3\CMS\Form\Domain\Configuration\FormDefinitionValidationService
     */
    protected function getFormDefinitionValidationServiceService()
    {
        return $this->services['TYPO3\\CMS\\Form\\Domain\\Configuration\\FormDefinitionValidationService'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Form\Domain\Configuration\FormDefinitionValidationService::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Form\Hooks\SoftReferenceParserHook' shared autowired service.
     *
     * @return \TYPO3\CMS\Form\Hooks\SoftReferenceParserHook
     */
    protected function getSoftReferenceParserHookService()
    {
        return $this->services['TYPO3\\CMS\\Form\\Hooks\\SoftReferenceParserHook'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Form\Hooks\SoftReferenceParserHook::class, ($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service()));
    }

    /**
     * Gets the public 'TYPO3\CMS\Form\Mvc\Configuration\ConfigurationManager' shared autowired service.
     *
     * @return \TYPO3\CMS\Form\Mvc\Configuration\ConfigurationManager
     */
    protected function getConfigurationManager2Service()
    {
        $this->services['TYPO3\\CMS\\Form\\Mvc\\Configuration\\ConfigurationManager'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Form\Mvc\Configuration\ConfigurationManager::class, ($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()), ($this->services['TYPO3\\CMS\\Extbase\\Service\\EnvironmentService'] ?? $this->getEnvironmentServiceService()));

        $instance->injectYamlSource(($this->privates['TYPO3\\CMS\\Form\\Mvc\\Configuration\\YamlSource'] ?? $this->getYamlSourceService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Form\Mvc\Property\TypeConverter\FormDefinitionArrayConverter' shared autowired service.
     *
     * @return \TYPO3\CMS\Form\Mvc\Property\TypeConverter\FormDefinitionArrayConverter
     */
    protected function getFormDefinitionArrayConverterService()
    {
        $this->services['TYPO3\\CMS\\Form\\Mvc\\Property\\TypeConverter\\FormDefinitionArrayConverter'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Form\Mvc\Property\TypeConverter\FormDefinitionArrayConverter::class);

        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Form\Mvc\Property\TypeConverter\UploadedFileReferenceConverter' shared autowired service.
     *
     * @return \TYPO3\CMS\Form\Mvc\Property\TypeConverter\UploadedFileReferenceConverter
     */
    protected function getUploadedFileReferenceConverterService()
    {
        $this->services['TYPO3\\CMS\\Form\\Mvc\\Property\\TypeConverter\\UploadedFileReferenceConverter'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Form\Mvc\Property\TypeConverter\UploadedFileReferenceConverter::class);

        $instance->injectResourceFactory(($this->services['TYPO3\\CMS\\Core\\Resource\\ResourceFactory'] ?? $this->getResourceFactoryService()));
        $instance->injectHashService(($this->services['TYPO3\\CMS\\Extbase\\Security\\Cryptography\\HashService'] ?? $this->getHashServiceService()));
        $instance->injectPersistenceManager(($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()));
        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Form\Service\TranslationService' shared autowired service.
     *
     * @return \TYPO3\CMS\Form\Service\TranslationService
     */
    protected function getTranslationServiceService()
    {
        return $this->services['TYPO3\\CMS\\Form\\Service\\TranslationService'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Form\Service\TranslationService::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Form\Slot\FilePersistenceSlot' shared autowired service.
     *
     * @return \TYPO3\CMS\Form\Slot\FilePersistenceSlot
     */
    protected function getFilePersistenceSlotService()
    {
        return $this->services['TYPO3\\CMS\\Form\\Slot\\FilePersistenceSlot'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Form\Slot\FilePersistenceSlot::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Form\Slot\ResourcePublicationSlot' shared autowired service.
     *
     * @return \TYPO3\CMS\Form\Slot\ResourcePublicationSlot
     */
    protected function getResourcePublicationSlotService()
    {
        return $this->services['TYPO3\\CMS\\Form\\Slot\\ResourcePublicationSlot'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Form\Slot\ResourcePublicationSlot::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Form\ViewHelpers\Be\MaximumFileSizeViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Form\ViewHelpers\Be\MaximumFileSizeViewHelper
     */
    protected function getMaximumFileSizeViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Form\ViewHelpers\Be\MaximumFileSizeViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Form\ViewHelpers\Be\RenderContentElementPreviewViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Form\ViewHelpers\Be\RenderContentElementPreviewViewHelper
     */
    protected function getRenderContentElementPreviewViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Form\ViewHelpers\Be\RenderContentElementPreviewViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Form\ViewHelpers\FormViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Form\ViewHelpers\FormViewHelper
     */
    protected function getFormViewHelper2Service()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Form\ViewHelpers\FormViewHelper::class);

        $instance->injectHashService(($this->services['TYPO3\\CMS\\Extbase\\Security\\Cryptography\\HashService'] ?? $this->getHashServiceService()));
        $instance->injectMvcPropertyMappingConfigurationService(($this->services['TYPO3\\CMS\\Extbase\\Mvc\\Controller\\MvcPropertyMappingConfigurationService'] ?? $this->getMvcPropertyMappingConfigurationServiceService()));
        $instance->injectExtensionService(($this->services['TYPO3\\CMS\\Extbase\\Service\\ExtensionService'] ?? $this->getExtensionServiceService()));
        $instance->injectPersistenceManager(($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Form\ViewHelpers\Form\DatePickerViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Form\ViewHelpers\Form\DatePickerViewHelper
     */
    protected function getDatePickerViewHelperService()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Form\ViewHelpers\Form\DatePickerViewHelper::class);

        $instance->injectPropertyMapper(($this->services['TYPO3\\CMS\\Extbase\\Property\\PropertyMapper'] ?? $this->getPropertyMapperService()));
        $instance->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
        $instance->injectPersistenceManager(($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Form\ViewHelpers\Form\TimePickerViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Form\ViewHelpers\Form\TimePickerViewHelper
     */
    protected function getTimePickerViewHelperService()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Form\ViewHelpers\Form\TimePickerViewHelper::class);

        $instance->injectPropertyMapper(($this->services['TYPO3\\CMS\\Extbase\\Property\\PropertyMapper'] ?? $this->getPropertyMapperService()));
        $instance->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
        $instance->injectPersistenceManager(($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Form\ViewHelpers\Form\UploadedResourceViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Form\ViewHelpers\Form\UploadedResourceViewHelper
     */
    protected function getUploadedResourceViewHelperService()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Form\ViewHelpers\Form\UploadedResourceViewHelper::class);

        $instance->injectHashService(($this->services['TYPO3\\CMS\\Extbase\\Security\\Cryptography\\HashService'] ?? $this->getHashServiceService()));
        $instance->injectPropertyMapper(($this->services['TYPO3\\CMS\\Extbase\\Property\\PropertyMapper'] ?? $this->getPropertyMapperService()));
        $instance->injectConfigurationManager(($this->services['TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
        $instance->injectPersistenceManager(($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Form\ViewHelpers\GridColumnClassAutoConfigurationViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Form\ViewHelpers\GridColumnClassAutoConfigurationViewHelper
     */
    protected function getGridColumnClassAutoConfigurationViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Form\ViewHelpers\GridColumnClassAutoConfigurationViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Form\ViewHelpers\RenderAllFormValuesViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Form\ViewHelpers\RenderAllFormValuesViewHelper
     */
    protected function getRenderAllFormValuesViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Form\ViewHelpers\RenderAllFormValuesViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Form\ViewHelpers\RenderFormValueViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Form\ViewHelpers\RenderFormValueViewHelper
     */
    protected function getRenderFormValueViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Form\ViewHelpers\RenderFormValueViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Form\ViewHelpers\RenderRenderableViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Form\ViewHelpers\RenderRenderableViewHelper
     */
    protected function getRenderRenderableViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Form\ViewHelpers\RenderRenderableViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Form\ViewHelpers\RenderViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Form\ViewHelpers\RenderViewHelper
     */
    protected function getRenderViewHelper3Service()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Form\ViewHelpers\RenderViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Form\ViewHelpers\TranslateElementErrorViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Form\ViewHelpers\TranslateElementErrorViewHelper
     */
    protected function getTranslateElementErrorViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Form\ViewHelpers\TranslateElementErrorViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper' autowired service.
     *
     * @return \TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
     */
    protected function getTranslateElementPropertyViewHelperService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\FrontendLogin\Service\ValidatorResolverService' shared autowired service.
     *
     * @return \TYPO3\CMS\FrontendLogin\Service\ValidatorResolverService
     */
    protected function getValidatorResolverServiceService()
    {
        return $this->services['TYPO3\\CMS\\FrontendLogin\\Service\\ValidatorResolverService'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\FrontendLogin\Service\ValidatorResolverService::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Frontend\Aspect\FileMetadataOverlayAspect' shared autowired service.
     *
     * @return \TYPO3\CMS\Frontend\Aspect\FileMetadataOverlayAspect
     */
    protected function getFileMetadataOverlayAspectService()
    {
        return $this->services['TYPO3\\CMS\\Frontend\\Aspect\\FileMetadataOverlayAspect'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Frontend\Aspect\FileMetadataOverlayAspect::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer' autowired service.
     *
     * @return \TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer
     */
    protected function getContentObjectRendererService()
    {
        $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer::class, NULL, $this);

        $instance->setLogger(($this->services['_early.TYPO3\\CMS\\Core\\Log\\LogManager'] ?? $this->get('_early.TYPO3\\CMS\\Core\\Log\\LogManager', 1))->getLogger('TYPO3\\CMS\\Frontend\\ContentObject\\ContentObjectRenderer'));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Frontend\ContentObject\Menu\MenuContentObjectFactory' shared autowired service.
     *
     * @return \TYPO3\CMS\Frontend\ContentObject\Menu\MenuContentObjectFactory
     */
    protected function getMenuContentObjectFactoryService()
    {
        return $this->services['TYPO3\\CMS\\Frontend\\ContentObject\\Menu\\MenuContentObjectFactory'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Frontend\ContentObject\Menu\MenuContentObjectFactory::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Frontend\Hooks\MediaItemHooks' shared autowired service.
     *
     * @return \TYPO3\CMS\Frontend\Hooks\MediaItemHooks
     */
    protected function getMediaItemHooksService()
    {
        return $this->services['TYPO3\\CMS\\Frontend\\Hooks\\MediaItemHooks'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Frontend\Hooks\MediaItemHooks::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Frontend\Http\Application' shared service.
     *
     * @return \TYPO3\CMS\Frontend\Http\Application
     */
    protected function getApplication2Service()
    {
        return $this->services['TYPO3\\CMS\\Frontend\\Http\\Application'] = \TYPO3\CMS\Frontend\ServiceProvider::getApplication($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Frontend\Http\RequestHandler' shared service.
     *
     * @return \TYPO3\CMS\Frontend\Http\RequestHandler
     */
    protected function getRequestHandler2Service()
    {
        return $this->services['TYPO3\\CMS\\Frontend\\Http\\RequestHandler'] = \TYPO3\CMS\Frontend\ServiceProvider::getRequestHandler($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Frontend\Middleware\BackendUserAuthenticator' shared autowired service.
     *
     * @return \TYPO3\CMS\Frontend\Middleware\BackendUserAuthenticator
     */
    protected function getBackendUserAuthenticator2Service()
    {
        return $this->services['TYPO3\\CMS\\Frontend\\Middleware\\BackendUserAuthenticator'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Frontend\Middleware\BackendUserAuthenticator::class, ($this->services['TYPO3\\CMS\\Core\\Context\\Context'] ?? $this->getContextService()));
    }

    /**
     * Gets the public 'TYPO3\CMS\Frontend\Middleware\ContentLengthResponseHeader' shared autowired service.
     *
     * @return \TYPO3\CMS\Frontend\Middleware\ContentLengthResponseHeader
     */
    protected function getContentLengthResponseHeaderService()
    {
        return $this->services['TYPO3\\CMS\\Frontend\\Middleware\\ContentLengthResponseHeader'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Frontend\Middleware\ContentLengthResponseHeader::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Frontend\Middleware\EidHandler' shared autowired service.
     *
     * @return \TYPO3\CMS\Frontend\Middleware\EidHandler
     */
    protected function getEidHandlerService()
    {
        return $this->services['TYPO3\\CMS\\Frontend\\Middleware\\EidHandler'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Frontend\Middleware\EidHandler::class, \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Http\Dispatcher::class, $this));
    }

    /**
     * Gets the public 'TYPO3\CMS\Frontend\Middleware\FrontendUserAuthenticator' shared autowired service.
     *
     * @return \TYPO3\CMS\Frontend\Middleware\FrontendUserAuthenticator
     */
    protected function getFrontendUserAuthenticatorService()
    {
        return $this->services['TYPO3\\CMS\\Frontend\\Middleware\\FrontendUserAuthenticator'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Frontend\Middleware\FrontendUserAuthenticator::class, ($this->services['TYPO3\\CMS\\Core\\Context\\Context'] ?? $this->getContextService()));
    }

    /**
     * Gets the public 'TYPO3\CMS\Frontend\Middleware\MaintenanceMode' shared autowired service.
     *
     * @return \TYPO3\CMS\Frontend\Middleware\MaintenanceMode
     */
    protected function getMaintenanceModeService()
    {
        return $this->services['TYPO3\\CMS\\Frontend\\Middleware\\MaintenanceMode'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Frontend\Middleware\MaintenanceMode::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Frontend\Middleware\OutputCompression' shared autowired service.
     *
     * @return \TYPO3\CMS\Frontend\Middleware\OutputCompression
     */
    protected function getOutputCompression2Service()
    {
        return $this->services['TYPO3\\CMS\\Frontend\\Middleware\\OutputCompression'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Frontend\Middleware\OutputCompression::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Frontend\Middleware\PageArgumentValidator' shared autowired service.
     *
     * @return \TYPO3\CMS\Frontend\Middleware\PageArgumentValidator
     */
    protected function getPageArgumentValidatorService()
    {
        $this->services['TYPO3\\CMS\\Frontend\\Middleware\\PageArgumentValidator'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Frontend\Middleware\PageArgumentValidator::class, ($this->services['TYPO3\\CMS\\Frontend\\Page\\CacheHashCalculator'] ?? $this->getCacheHashCalculatorService()), ($this->services['TYPO3\\CMS\\Core\\TimeTracker\\TimeTracker'] ?? $this->getTimeTrackerService()));

        $instance->setLogger(($this->services['_early.TYPO3\\CMS\\Core\\Log\\LogManager'] ?? $this->get('_early.TYPO3\\CMS\\Core\\Log\\LogManager', 1))->getLogger('TYPO3\\CMS\\Frontend\\Middleware\\PageArgumentValidator'));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Frontend\Middleware\PageResolver' shared autowired service.
     *
     * @return \TYPO3\CMS\Frontend\Middleware\PageResolver
     */
    protected function getPageResolverService()
    {
        return $this->services['TYPO3\\CMS\\Frontend\\Middleware\\PageResolver'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Frontend\Middleware\PageResolver::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Frontend\Middleware\PrepareTypoScriptFrontendRendering' shared autowired service.
     *
     * @return \TYPO3\CMS\Frontend\Middleware\PrepareTypoScriptFrontendRendering
     */
    protected function getPrepareTypoScriptFrontendRenderingService()
    {
        return $this->services['TYPO3\\CMS\\Frontend\\Middleware\\PrepareTypoScriptFrontendRendering'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Frontend\Middleware\PrepareTypoScriptFrontendRendering::class, \TYPO3\CMS\Frontend\Controller\TypoScriptFrontendController::getGlobalInstance(), ($this->services['TYPO3\\CMS\\Core\\TimeTracker\\TimeTracker'] ?? $this->getTimeTrackerService()));
    }

    /**
     * Gets the public 'TYPO3\CMS\Frontend\Middleware\PreviewSimulator' shared autowired service.
     *
     * @return \TYPO3\CMS\Frontend\Middleware\PreviewSimulator
     */
    protected function getPreviewSimulatorService()
    {
        return $this->services['TYPO3\\CMS\\Frontend\\Middleware\\PreviewSimulator'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Frontend\Middleware\PreviewSimulator::class, ($this->services['TYPO3\\CMS\\Core\\Context\\Context'] ?? $this->getContextService()));
    }

    /**
     * Gets the public 'TYPO3\CMS\Frontend\Middleware\ShortcutAndMountPointRedirect' shared autowired service.
     *
     * @return \TYPO3\CMS\Frontend\Middleware\ShortcutAndMountPointRedirect
     */
    protected function getShortcutAndMountPointRedirectService()
    {
        return $this->services['TYPO3\\CMS\\Frontend\\Middleware\\ShortcutAndMountPointRedirect'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Frontend\Middleware\ShortcutAndMountPointRedirect::class, \TYPO3\CMS\Frontend\Controller\TypoScriptFrontendController::getGlobalInstance());
    }

    /**
     * Gets the public 'TYPO3\CMS\Frontend\Middleware\SiteBaseRedirectResolver' shared autowired service.
     *
     * @return \TYPO3\CMS\Frontend\Middleware\SiteBaseRedirectResolver
     */
    protected function getSiteBaseRedirectResolverService()
    {
        return $this->services['TYPO3\\CMS\\Frontend\\Middleware\\SiteBaseRedirectResolver'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Frontend\Middleware\SiteBaseRedirectResolver::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Frontend\Middleware\SiteResolver' shared autowired service.
     *
     * @return \TYPO3\CMS\Frontend\Middleware\SiteResolver
     */
    protected function getSiteResolver2Service()
    {
        return $this->services['TYPO3\\CMS\\Frontend\\Middleware\\SiteResolver'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Frontend\Middleware\SiteResolver::class, ($this->services['TYPO3\\CMS\\Core\\Routing\\SiteMatcher'] ?? $this->getSiteMatcherService()));
    }

    /**
     * Gets the public 'TYPO3\CMS\Frontend\Middleware\StaticRouteResolver' shared autowired service.
     *
     * @return \TYPO3\CMS\Frontend\Middleware\StaticRouteResolver
     */
    protected function getStaticRouteResolverService()
    {
        return $this->services['TYPO3\\CMS\\Frontend\\Middleware\\StaticRouteResolver'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Frontend\Middleware\StaticRouteResolver::class, ($this->services['TYPO3\\CMS\\Core\\Http\\RequestFactory'] ?? $this->getRequestFactoryService()), ($this->services['TYPO3\\CMS\\Core\\LinkHandling\\LinkService'] ?? ($this->services['TYPO3\\CMS\\Core\\LinkHandling\\LinkService'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\LinkHandling\LinkService::class))));
    }

    /**
     * Gets the public 'TYPO3\CMS\Frontend\Middleware\TimeTrackerInitialization' shared autowired service.
     *
     * @return \TYPO3\CMS\Frontend\Middleware\TimeTrackerInitialization
     */
    protected function getTimeTrackerInitializationService()
    {
        return $this->services['TYPO3\\CMS\\Frontend\\Middleware\\TimeTrackerInitialization'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Frontend\Middleware\TimeTrackerInitialization::class, ($this->services['TYPO3\\CMS\\Core\\TimeTracker\\TimeTracker'] ?? $this->getTimeTrackerService()));
    }

    /**
     * Gets the public 'TYPO3\CMS\Frontend\Middleware\TypoScriptFrontendInitialization' shared autowired service.
     *
     * @return \TYPO3\CMS\Frontend\Middleware\TypoScriptFrontendInitialization
     */
    protected function getTypoScriptFrontendInitializationService()
    {
        return $this->services['TYPO3\\CMS\\Frontend\\Middleware\\TypoScriptFrontendInitialization'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Frontend\Middleware\TypoScriptFrontendInitialization::class, ($this->services['TYPO3\\CMS\\Core\\Context\\Context'] ?? $this->getContextService()));
    }

    /**
     * Gets the public 'TYPO3\CMS\Frontend\Page\CacheHashCalculator' shared autowired service.
     *
     * @return \TYPO3\CMS\Frontend\Page\CacheHashCalculator
     */
    protected function getCacheHashCalculatorService()
    {
        return $this->services['TYPO3\\CMS\\Frontend\\Page\\CacheHashCalculator'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Frontend\Page\CacheHashCalculator::class, \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Frontend\Page\CacheHashConfiguration::class));
    }

    /**
     * Gets the public 'TYPO3\CMS\Frontend\Utility\CompressionUtility' shared autowired service.
     *
     * @return \TYPO3\CMS\Frontend\Utility\CompressionUtility
     */
    protected function getCompressionUtilityService()
    {
        return $this->services['TYPO3\\CMS\\Frontend\\Utility\\CompressionUtility'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Frontend\Utility\CompressionUtility::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Impexp\Command\ImportCommand' shared autowired service.
     *
     * @return \TYPO3\CMS\Impexp\Command\ImportCommand
     */
    protected function getImportCommandService()
    {
        $this->services['TYPO3\\CMS\\Impexp\\Command\\ImportCommand'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Impexp\Command\ImportCommand::class);

        $instance->setName('impexp:import');

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Impexp\Compatibility\SlotReplacement' shared autowired service.
     *
     * @return \TYPO3\CMS\Impexp\Compatibility\SlotReplacement
     */
    protected function getSlotReplacement6Service()
    {
        return $this->services['TYPO3\\CMS\\Impexp\\Compatibility\\SlotReplacement'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Impexp\Compatibility\SlotReplacement::class, ($this->services['TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher'] ?? $this->getDispatcher2Service()));
    }

    /**
     * Gets the public 'TYPO3\CMS\Impexp\Utility\ImportExportUtility' shared autowired service.
     *
     * @return \TYPO3\CMS\Impexp\Utility\ImportExportUtility
     */
    protected function getImportExportUtilityService()
    {
        return $this->services['TYPO3\\CMS\\Impexp\\Utility\\ImportExportUtility'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Impexp\Utility\ImportExportUtility::class, ($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service()));
    }

    /**
     * Gets the public 'TYPO3\CMS\Info\Controller\InfoModuleController' shared autowired service.
     *
     * @return \TYPO3\CMS\Info\Controller\InfoModuleController
     */
    protected function getInfoModuleControllerService()
    {
        $a = ($this->services['TYPO3\\CMS\\Core\\Messaging\\FlashMessageService'] ?? $this->getFlashMessageServiceService());

        return $this->services['TYPO3\\CMS\\Info\\Controller\\InfoModuleController'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Info\Controller\InfoModuleController::class, \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Backend\Template\ModuleTemplate::class, ($this->services['TYPO3\\CMS\\Core\\Page\\PageRenderer'] ?? ($this->services['TYPO3\\CMS\\Core\\Page\\PageRenderer'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Page\PageRenderer::class))), ($this->services['TYPO3\\CMS\\Core\\Imaging\\IconFactory'] ?? $this->getIconFactoryService()), $a), ($this->services['TYPO3\\CMS\\Backend\\Routing\\UriBuilder'] ?? $this->getUriBuilderService()), $a, $this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Install\Command\LanguagePackCommand' shared service.
     *
     * @return \TYPO3\CMS\Install\Command\LanguagePackCommand
     */
    protected function getLanguagePackCommandService()
    {
        return $this->services['TYPO3\\CMS\\Install\\Command\\LanguagePackCommand'] = \TYPO3\CMS\Install\ServiceProvider::getLanguagePackCommand($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Install\Command\UpgradeWizardListCommand' shared service.
     *
     * @return \TYPO3\CMS\Install\Command\UpgradeWizardListCommand
     */
    protected function getUpgradeWizardListCommandService()
    {
        return $this->services['TYPO3\\CMS\\Install\\Command\\UpgradeWizardListCommand'] = \TYPO3\CMS\Install\ServiceProvider::getUpgradeWizardListCommand($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Install\Command\UpgradeWizardRunCommand' shared service.
     *
     * @return \TYPO3\CMS\Install\Command\UpgradeWizardRunCommand
     */
    protected function getUpgradeWizardRunCommandService()
    {
        return $this->services['TYPO3\\CMS\\Install\\Command\\UpgradeWizardRunCommand'] = \TYPO3\CMS\Install\ServiceProvider::getUpgradeWizardRunCommand($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Install\Compatibility\SlotReplacement' shared autowired service.
     *
     * @return \TYPO3\CMS\Install\Compatibility\SlotReplacement
     */
    protected function getSlotReplacement7Service()
    {
        return $this->services['TYPO3\\CMS\\Install\\Compatibility\\SlotReplacement'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Install\Compatibility\SlotReplacement::class, ($this->services['TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher'] ?? $this->getDispatcher2Service()));
    }

    /**
     * Gets the public 'TYPO3\CMS\Install\Controller\EnvironmentController' shared service.
     *
     * @return \TYPO3\CMS\Install\Controller\EnvironmentController
     */
    protected function getEnvironmentControllerService()
    {
        return $this->services['TYPO3\\CMS\\Install\\Controller\\EnvironmentController'] = \TYPO3\CMS\Install\ServiceProvider::getEnvironmentController($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Install\Controller\IconController' shared service.
     *
     * @return \TYPO3\CMS\Install\Controller\IconController
     */
    protected function getIconControllerService()
    {
        return $this->services['TYPO3\\CMS\\Install\\Controller\\IconController'] = \TYPO3\CMS\Install\ServiceProvider::getIconController($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Install\Controller\InstallerController' shared service.
     *
     * @return \TYPO3\CMS\Install\Controller\InstallerController
     */
    protected function getInstallerControllerService()
    {
        return $this->services['TYPO3\\CMS\\Install\\Controller\\InstallerController'] = \TYPO3\CMS\Install\ServiceProvider::getInstallerController($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Install\Controller\LayoutController' shared service.
     *
     * @return \TYPO3\CMS\Install\Controller\LayoutController
     */
    protected function getLayoutControllerService()
    {
        return $this->services['TYPO3\\CMS\\Install\\Controller\\LayoutController'] = \TYPO3\CMS\Install\ServiceProvider::getLayoutController($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Install\Controller\LoginController' shared service.
     *
     * @return \TYPO3\CMS\Install\Controller\LoginController
     */
    protected function getLoginController2Service()
    {
        return $this->services['TYPO3\\CMS\\Install\\Controller\\LoginController'] = \TYPO3\CMS\Install\ServiceProvider::getLoginController($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Install\Controller\MaintenanceController' shared service.
     *
     * @return \TYPO3\CMS\Install\Controller\MaintenanceController
     */
    protected function getMaintenanceControllerService()
    {
        return $this->services['TYPO3\\CMS\\Install\\Controller\\MaintenanceController'] = \TYPO3\CMS\Install\ServiceProvider::getMaintenanceController($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Install\Controller\SettingsController' shared service.
     *
     * @return \TYPO3\CMS\Install\Controller\SettingsController
     */
    protected function getSettingsControllerService()
    {
        return $this->services['TYPO3\\CMS\\Install\\Controller\\SettingsController'] = \TYPO3\CMS\Install\ServiceProvider::getSettingsController($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Install\Controller\UpgradeController' shared service.
     *
     * @return \TYPO3\CMS\Install\Controller\UpgradeController
     */
    protected function getUpgradeControllerService()
    {
        return $this->services['TYPO3\\CMS\\Install\\Controller\\UpgradeController'] = \TYPO3\CMS\Install\ServiceProvider::getUpgradeController($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Install\Database\PermissionsCheck' shared service.
     *
     * @return \TYPO3\CMS\Install\Database\PermissionsCheck
     */
    protected function getPermissionsCheckService()
    {
        return $this->services['TYPO3\\CMS\\Install\\Database\\PermissionsCheck'] = \TYPO3\CMS\Install\ServiceProvider::getPermissionsCheck($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Install\Http\Application' shared service.
     *
     * @return \TYPO3\CMS\Install\Http\Application
     */
    protected function getApplication3Service()
    {
        return $this->services['TYPO3\\CMS\\Install\\Http\\Application'] = \TYPO3\CMS\Install\ServiceProvider::getApplication($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Install\Http\NotFoundRequestHandler' shared service.
     *
     * @return \TYPO3\CMS\Install\Http\NotFoundRequestHandler
     */
    protected function getNotFoundRequestHandlerService()
    {
        return $this->services['TYPO3\\CMS\\Install\\Http\\NotFoundRequestHandler'] = \TYPO3\CMS\Install\ServiceProvider::getNotFoundRequestHandler($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Install\Middleware\Installer' shared service.
     *
     * @return \TYPO3\CMS\Install\Middleware\Installer
     */
    protected function getInstallerService()
    {
        return $this->services['TYPO3\\CMS\\Install\\Middleware\\Installer'] = \TYPO3\CMS\Install\ServiceProvider::getInstallerMiddleware($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Install\Middleware\Maintenance' shared service.
     *
     * @return \TYPO3\CMS\Install\Middleware\Maintenance
     */
    protected function getMaintenanceService()
    {
        return $this->services['TYPO3\\CMS\\Install\\Middleware\\Maintenance'] = \TYPO3\CMS\Install\ServiceProvider::getMaintenanceMiddleware($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Install\Service\ClearCacheService' shared service.
     *
     * @return \TYPO3\CMS\Install\Service\ClearCacheService
     */
    protected function getClearCacheServiceService()
    {
        return $this->services['TYPO3\\CMS\\Install\\Service\\ClearCacheService'] = \TYPO3\CMS\Install\ServiceProvider::getClearCacheService($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Install\Service\CoreUpdateService' shared service.
     *
     * @return \TYPO3\CMS\Install\Service\CoreUpdateService
     */
    protected function getCoreUpdateServiceService()
    {
        return $this->services['TYPO3\\CMS\\Install\\Service\\CoreUpdateService'] = \TYPO3\CMS\Install\ServiceProvider::getCoreUpdateService($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Install\Service\CoreVersionService' shared service.
     *
     * @return \TYPO3\CMS\Install\Service\CoreVersionService
     */
    protected function getCoreVersionServiceService()
    {
        return $this->services['TYPO3\\CMS\\Install\\Service\\CoreVersionService'] = \TYPO3\CMS\Install\ServiceProvider::getCoreVersionService($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Install\Service\ExtensionConfigurationService' shared service.
     *
     * @return \TYPO3\CMS\Install\Service\ExtensionConfigurationService
     */
    protected function getExtensionConfigurationServiceService()
    {
        return $this->services['TYPO3\\CMS\\Install\\Service\\ExtensionConfigurationService'] = \TYPO3\CMS\Install\ServiceProvider::getExtensionConfigurationService($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Install\Service\LanguagePackService' shared service.
     *
     * @return \TYPO3\CMS\Install\Service\LanguagePackService
     */
    protected function getLanguagePackServiceService()
    {
        return $this->services['TYPO3\\CMS\\Install\\Service\\LanguagePackService'] = \TYPO3\CMS\Install\ServiceProvider::getLanguagePackService($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Install\Service\LateBootService' shared service.
     *
     * @return \TYPO3\CMS\Install\Service\LateBootService
     */
    protected function getLateBootServiceService()
    {
        return $this->services['TYPO3\\CMS\\Install\\Service\\LateBootService'] = \TYPO3\CMS\Install\ServiceProvider::getLateBootService($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Install\Service\LoadTcaService' shared service.
     *
     * @return \TYPO3\CMS\Install\Service\LoadTcaService
     */
    protected function getLoadTcaServiceService()
    {
        return $this->services['TYPO3\\CMS\\Install\\Service\\LoadTcaService'] = \TYPO3\CMS\Install\ServiceProvider::getLoadTcaService($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Install\Service\SilentConfigurationUpgradeService' shared service.
     *
     * @return \TYPO3\CMS\Install\Service\SilentConfigurationUpgradeService
     */
    protected function getSilentConfigurationUpgradeServiceService()
    {
        return $this->services['TYPO3\\CMS\\Install\\Service\\SilentConfigurationUpgradeService'] = \TYPO3\CMS\Install\ServiceProvider::getSilentConfigurationUpgradeService($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Install\Service\Typo3tempFileService' shared service.
     *
     * @return \TYPO3\CMS\Install\Service\Typo3tempFileService
     */
    protected function getTypo3tempFileServiceService()
    {
        return $this->services['TYPO3\\CMS\\Install\\Service\\Typo3tempFileService'] = \TYPO3\CMS\Install\ServiceProvider::getTypo3tempFileService($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Install\Service\UpgradeWizardsService' shared service.
     *
     * @return \TYPO3\CMS\Install\Service\UpgradeWizardsService
     */
    protected function getUpgradeWizardsServiceService()
    {
        return $this->services['TYPO3\\CMS\\Install\\Service\\UpgradeWizardsService'] = \TYPO3\CMS\Install\ServiceProvider::getUpgradeWizardsService($this);
    }

    /**
     * Gets the public 'TYPO3\CMS\Scheduler\Command\SchedulerCommand' shared autowired service.
     *
     * @return \TYPO3\CMS\Scheduler\Command\SchedulerCommand
     */
    protected function getSchedulerCommandService()
    {
        $this->services['TYPO3\\CMS\\Scheduler\\Command\\SchedulerCommand'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Scheduler\Command\SchedulerCommand::class);

        $instance->setName('scheduler:run');

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Scheduler\Scheduler' shared autowired service.
     *
     * @return \TYPO3\CMS\Scheduler\Scheduler
     */
    protected function getSchedulerService()
    {
        $this->services['TYPO3\\CMS\\Scheduler\\Scheduler'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Scheduler\Scheduler::class);

        $instance->setLogger(($this->services['_early.TYPO3\\CMS\\Core\\Log\\LogManager'] ?? $this->get('_early.TYPO3\\CMS\\Core\\Log\\LogManager', 1))->getLogger('TYPO3\\CMS\\Scheduler\\Scheduler'));

        return $instance;
    }

    /**
     * Gets the public 'TYPO3\CMS\Scheduler\SystemInformation\ToolbarItemProvider' shared autowired service.
     *
     * @return \TYPO3\CMS\Scheduler\SystemInformation\ToolbarItemProvider
     */
    protected function getToolbarItemProviderService()
    {
        return $this->services['TYPO3\\CMS\\Scheduler\\SystemInformation\\ToolbarItemProvider'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Scheduler\SystemInformation\ToolbarItemProvider::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Seo\Compatibility\SlotReplacement' shared autowired service.
     *
     * @return \TYPO3\CMS\Seo\Compatibility\SlotReplacement
     */
    protected function getSlotReplacement8Service()
    {
        return $this->services['TYPO3\\CMS\\Seo\\Compatibility\\SlotReplacement'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Seo\Compatibility\SlotReplacement::class, ($this->services['TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher'] ?? $this->getDispatcher2Service()));
    }

    /**
     * Gets the public 'TYPO3\CMS\Seo\HrefLang\HrefLangGenerator' shared autowired service.
     *
     * @return \TYPO3\CMS\Seo\HrefLang\HrefLangGenerator
     */
    protected function getHrefLangGeneratorService()
    {
        $a = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer::class, NULL, $this);
        $a->setLogger(($this->services['_early.TYPO3\\CMS\\Core\\Log\\LogManager'] ?? $this->get('_early.TYPO3\\CMS\\Core\\Log\\LogManager', 1))->getLogger('TYPO3\\CMS\\Frontend\\ContentObject\\ContentObjectRenderer'));

        return $this->services['TYPO3\\CMS\\Seo\\HrefLang\\HrefLangGenerator'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Seo\HrefLang\HrefLangGenerator::class, $a, \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Frontend\DataProcessing\LanguageMenuProcessor::class));
    }

    /**
     * Gets the public 'TYPO3\CMS\Seo\PageTitle\SeoTitlePageTitleProvider' shared autowired service.
     *
     * @return \TYPO3\CMS\Seo\PageTitle\SeoTitlePageTitleProvider
     */
    protected function getSeoTitlePageTitleProviderService()
    {
        return $this->services['TYPO3\\CMS\\Seo\\PageTitle\\SeoTitlePageTitleProvider'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Seo\PageTitle\SeoTitlePageTitleProvider::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Setup\Controller\SetupModuleController' autowired service.
     *
     * @return \TYPO3\CMS\Setup\Controller\SetupModuleController
     */
    protected function getSetupModuleControllerService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Setup\Controller\SetupModuleController::class, ($this->services['Psr\\EventDispatcher\\EventDispatcherInterface_decorated_1'] ?? $this->getEventDispatcherInterfaceDecorated1Service()));
    }

    /**
     * Gets the public 'TYPO3\CMS\T3editor\Registry\AddonRegistry' shared autowired service.
     *
     * @return \TYPO3\CMS\T3editor\Registry\AddonRegistry
     */
    protected function getAddonRegistryService()
    {
        return $this->services['TYPO3\\CMS\\T3editor\\Registry\\AddonRegistry'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\T3editor\Registry\AddonRegistry::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\T3editor\Registry\ModeRegistry' shared autowired service.
     *
     * @return \TYPO3\CMS\T3editor\Registry\ModeRegistry
     */
    protected function getModeRegistryService()
    {
        return $this->services['TYPO3\\CMS\\T3editor\\Registry\\ModeRegistry'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\T3editor\Registry\ModeRegistry::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\T3editor\T3editor' shared autowired service.
     *
     * @return \TYPO3\CMS\T3editor\T3editor
     */
    protected function getT3editorService()
    {
        return $this->services['TYPO3\\CMS\\T3editor\\T3editor'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\T3editor\T3editor::class);
    }

    /**
     * Gets the public 'TYPO3\CMS\Tstemplate\Hooks\DataHandlerClearCachePostProcHook' shared autowired service.
     *
     * @return \TYPO3\CMS\Tstemplate\Hooks\DataHandlerClearCachePostProcHook
     */
    protected function getDataHandlerClearCachePostProcHookService()
    {
        return $this->services['TYPO3\\CMS\\Tstemplate\\Hooks\\DataHandlerClearCachePostProcHook'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Tstemplate\Hooks\DataHandlerClearCachePostProcHook::class, ($this->services['TYPO3\\CMS\\Core\\Cache\\CacheManager'] ?? $this->getCacheManagerService()));
    }

    /**
     * Gets the public 'TYPO3\SymfonyPsrEventDispatcherAdapter\EventDispatcherAdapter' shared service.
     *
     * @return \Symfony\Contracts\EventDispatcher\EventDispatcherInterface
     */
    protected function getEventDispatcherAdapterService()
    {
        return $this->services['TYPO3\\SymfonyPsrEventDispatcherAdapter\\EventDispatcherAdapter'] = \TYPO3\CMS\Core\ServiceProvider::getSymfonyEventDispatcher($this);
    }

    /**
     * Gets the public 'TurnoverPerDayWidgetConfiguration' shared service.
     *
     * @return \TYPO3\CMS\Dashboard\Widgets\WidgetConfiguration
     */
    protected function getTurnoverPerDayWidgetConfigurationService()
    {
        return $this->services['TurnoverPerDayWidgetConfiguration'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Dashboard\Widgets\WidgetConfiguration::class, 'TurnoverPerDay', 'dashboard.widget.extcode.cart.turnover_per_day', [0 => 'cart'], 'LLL:EXT:cart/Resources/Private/Language/locallang_be.xlf:dashboard.widgets.turnover_per_day.title', 'LLL:EXT:cart/Resources/Private/Language/locallang_be.xlf:dashboard.widgets.turnover_per_day.description', 'content-widget-chart-bar', 'medium', 'medium', [0 => 'dashboard-item--chart']);
    }

    /**
     * Gets the public 'backend.middlewares' shared service.
     *
     * @return \ArrayObject
     */
    protected function getBackend_MiddlewaresService()
    {
        return $this->services['backend.middlewares'] = \TYPO3\CMS\Backend\ServiceProvider::getBackendMiddlewares($this);
    }

    /**
     * Gets the public 'backend.routes_decorated_31' shared service.
     *
     * @return \ArrayObject
     */
    protected function getBackend_RoutesDecorated31Service()
    {
        $a = ($this->services['service_provider_registry'] ?? $this->get('service_provider_registry', 1));

        return $this->services['backend.routes_decorated_31'] = $a->extendService('femanager', 'backend.routes', $this, $a->extendService('market', 'backend.routes', $this, $a->extendService('bootstrap_package', 'backend.routes', $this, $a->extendService('cart_products', 'backend.routes', $this, $a->extendService('cart', 'backend.routes', $this, $a->extendService('viewpage', 'backend.routes', $this, $a->extendService('tstemplate', 'backend.routes', $this, $a->extendService('t3editor', 'backend.routes', $this, $a->extendService('sys_note', 'backend.routes', $this, $a->extendService('seo', 'backend.routes', $this, $a->extendService('info', 'backend.routes', $this, $a->extendService('felogin', 'backend.routes', $this, $a->extendService('extensionmanager', 'backend.routes', $this, \TYPO3\CMS\Dashboard\ServiceProvider::configureBackendRoutes($this, $a->extendService('beuser', 'backend.routes', $this, $a->extendService('belog', 'backend.routes', $this, $a->extendService('about', 'backend.routes', $this, $a->extendService('rte_ckeditor', 'backend.routes', $this, $a->extendService('setup', 'backend.routes', $this, \TYPO3\CMS\Backend\ServiceProvider::configureBackendRoutes($this, $a->extendService('recordlist', 'backend.routes', $this, \TYPO3\CMS\Install\ServiceProvider::configureBackendRoutes($this, $a->extendService('form', 'backend.routes', $this, $a->extendService('impexp', 'backend.routes', $this, $a->extendService('filelist', 'backend.routes', $this, $a->extendService('fluid_styled_content', 'backend.routes', $this, \TYPO3\CMS\Frontend\ServiceProvider::configureBackendRoutes($this, $a->extendService('fluid', 'backend.routes', $this, \TYPO3\CMS\Extbase\ServiceProvider::configureBackendRoutes($this, $a->extendService('scheduler', 'backend.routes', $this, \TYPO3\CMS\Core\ServiceProvider::configureBackendRoutes($this, \TYPO3\CMS\Backend\ServiceProvider::getBackendRoutes($this))))))))))))))))))))))))))))))));
    }

    /**
     * Gets the public 'container.env_var_processors_locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getContainer_EnvVarProcessorsLocatorService()
    {
        return $this->services['container.env_var_processors_locator'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Symfony\Component\DependencyInjection\Argument\ServiceLocator::class, $this->getService, [
            'TYPO3' => ['privates', 'TYPO3\\CMS\\Core\\DependencyInjection\\EnvVarProcessor', 'getEnvVarProcessorService', false],
        ], [
            'TYPO3' => '?',
        ]);
    }

    /**
     * Gets the public 'dashboard.presets_decorated_1' shared service.
     *
     * @return \ArrayObject
     */
    protected function getDashboard_PresetsDecorated1Service()
    {
        return $this->services['dashboard.presets_decorated_1'] = \TYPO3\CMS\Dashboard\ServiceProvider::configureDashboardPresets($this, \TYPO3\CMS\Dashboard\ServiceProvider::getDashboardPresets($this));
    }

    /**
     * Gets the public 'dashboard.views.widget' autowired service.
     *
     * @return \TYPO3\CMS\Fluid\View\StandaloneView
     */
    protected function getDashboard_Views_WidgetService()
    {
        return \TYPO3\CMS\Dashboard\Views\Factory::widgetTemplate();
    }

    /**
     * Gets the public 'dashboard.widget.docGettingStarted' shared autowired service.
     *
     * @return \TYPO3\CMS\Dashboard\Widgets\CtaWidget
     */
    protected function getDashboard_Widget_DocGettingStartedService()
    {
        return $this->services['dashboard.widget.docGettingStarted'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Dashboard\Widgets\CtaWidget::class, ($this->services['docGettingStartedWidgetConfiguration'] ?? $this->getDocGettingStartedWidgetConfigurationService()), \TYPO3\CMS\Dashboard\Views\Factory::widgetTemplate(), \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Dashboard\Widgets\Provider\ButtonProvider::class, 'LLL:EXT:dashboard/Resources/Private/Language/locallang.xlf:widgets.documentation.gettingStarted.content.label', 'https://docs.typo3.org/m/typo3/tutorial-getting-started/10.4/en-us/Index.html', '_blank'), ['text' => 'LLL:EXT:dashboard/Resources/Private/Language/locallang.xlf:widgets.documentation.gettingStarted.text']);
    }

    /**
     * Gets the public 'dashboard.widget.docTSconfig' shared autowired service.
     *
     * @return \TYPO3\CMS\Dashboard\Widgets\CtaWidget
     */
    protected function getDashboard_Widget_DocTSconfigService()
    {
        return $this->services['dashboard.widget.docTSconfig'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Dashboard\Widgets\CtaWidget::class, ($this->services['docTSconfigWidgetConfiguration'] ?? $this->getDocTSconfigWidgetConfigurationService()), \TYPO3\CMS\Dashboard\Views\Factory::widgetTemplate(), \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Dashboard\Widgets\Provider\ButtonProvider::class, 'LLL:EXT:dashboard/Resources/Private/Language/locallang.xlf:widgets.documentation.TSconfigReference.content.label', 'https://docs.typo3.org/m/typo3/reference-tsconfig/10.4/en-us/Index.html', '_blank'), ['text' => 'LLL:EXT:dashboard/Resources/Private/Language/locallang.xlf:widgets.documentation.TSconfigReference.text']);
    }

    /**
     * Gets the public 'dashboard.widget.docTypoScriptReference' shared autowired service.
     *
     * @return \TYPO3\CMS\Dashboard\Widgets\CtaWidget
     */
    protected function getDashboard_Widget_DocTypoScriptReferenceService()
    {
        return $this->services['dashboard.widget.docTypoScriptReference'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Dashboard\Widgets\CtaWidget::class, ($this->services['docTypoScriptReferenceWidgetConfiguration'] ?? $this->getDocTypoScriptReferenceWidgetConfigurationService()), \TYPO3\CMS\Dashboard\Views\Factory::widgetTemplate(), \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Dashboard\Widgets\Provider\ButtonProvider::class, 'LLL:EXT:dashboard/Resources/Private/Language/locallang.xlf:widgets.documentation.typoscriptReference.content.label', 'https://docs.typo3.org/m/typo3/reference-typoscript/10.4/en-us/Index.html', '_blank'), ['text' => 'LLL:EXT:dashboard/Resources/Private/Language/locallang.xlf:widgets.documentation.typoscriptReference.text']);
    }

    /**
     * Gets the public 'dashboard.widget.extcode.cart.orders_per_day' shared service.
     *
     * @return \TYPO3\CMS\Dashboard\Widgets\BarChartWidget
     */
    protected function getDashboard_Widget_Extcode_Cart_OrdersPerDayService()
    {
        return $this->services['dashboard.widget.extcode.cart.orders_per_day'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Dashboard\Widgets\BarChartWidget::class, ($this->services['OrdersPerDayWidgetConfiguration'] ?? $this->getOrdersPerDayWidgetConfigurationService()), \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Widgets\Provider\OrdersPerDayProvider::class, \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Localization\LanguageService::class, ($this->services['TYPO3\\CMS\\Core\\Localization\\Locales'] ?? $this->getLocalesService()), ($this->services['TYPO3\\CMS\\Core\\Localization\\LocalizationFactory'] ?? $this->getLocalizationFactoryService())), ($this->privates['querybuilder.tx_cart_domain_model_order_item'] ?? $this->getQuerybuilder_TxCartDomainModelOrderItemService()), ['filter' => ['payment' => ['status' => 'paid'], 'shipping' => ['status' => 'open']]]), \TYPO3\CMS\Dashboard\Views\Factory::widgetTemplate());
    }

    /**
     * Gets the public 'dashboard.widget.extcode.cart.payment_paid_shipping_open' shared service.
     *
     * @return \Extcode\Cart\Widgets\PaymentPaidShippingOpen
     */
    protected function getDashboard_Widget_Extcode_Cart_PaymentPaidShippingOpenService()
    {
        return $this->services['dashboard.widget.extcode.cart.payment_paid_shipping_open'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Widgets\PaymentPaidShippingOpen::class, ($this->services['PaymentPaidShippingOpenWidgetConfiguration'] ?? $this->getPaymentPaidShippingOpenWidgetConfigurationService()), \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Widgets\Provider\OrderItemsProvider::class, ($this->privates['querybuilder.tx_cart_domain_model_order_item'] ?? $this->getQuerybuilder_TxCartDomainModelOrderItemService()), ['filter' => ['payment' => ['status' => 'paid'], 'shipping' => ['status' => 'open']]]), \TYPO3\CMS\Dashboard\Views\Factory::widgetTemplate());
    }

    /**
     * Gets the public 'dashboard.widget.extcode.cart.turnover_per_day' shared service.
     *
     * @return \TYPO3\CMS\Dashboard\Widgets\BarChartWidget
     */
    protected function getDashboard_Widget_Extcode_Cart_TurnoverPerDayService()
    {
        return $this->services['dashboard.widget.extcode.cart.turnover_per_day'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Dashboard\Widgets\BarChartWidget::class, ($this->services['TurnoverPerDayWidgetConfiguration'] ?? $this->getTurnoverPerDayWidgetConfigurationService()), \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Widgets\Provider\TurnoverPerDayProvider::class, \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Localization\LanguageService::class, ($this->services['TYPO3\\CMS\\Core\\Localization\\Locales'] ?? $this->getLocalesService()), ($this->services['TYPO3\\CMS\\Core\\Localization\\LocalizationFactory'] ?? $this->getLocalizationFactoryService())), ($this->privates['querybuilder.tx_cart_domain_model_order_item'] ?? $this->getQuerybuilder_TxCartDomainModelOrderItemService()), ['sum' => 'total_gross']), \TYPO3\CMS\Dashboard\Views\Factory::widgetTemplate());
    }

    /**
     * Gets the public 'dashboard.widget.failedLogins' shared autowired service.
     *
     * @return \TYPO3\CMS\Dashboard\Widgets\NumberWithIconWidget
     */
    protected function getDashboard_Widget_FailedLoginsService()
    {
        return $this->services['dashboard.widget.failedLogins'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Dashboard\Widgets\NumberWithIconWidget::class, ($this->services['failedLoginsWidgetConfiguration'] ?? $this->getFailedLoginsWidgetConfigurationService()), \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Dashboard\Widgets\Provider\NumberOfFailedLoginsDataProvider::class), \TYPO3\CMS\Dashboard\Views\Factory::widgetTemplate(), ['title' => 'LLL:EXT:dashboard/Resources/Private/Language/locallang.xlf:widgets.failedLogins.title', 'subtitle' => 'LLL:EXT:dashboard/Resources/Private/Language/locallang.xlf:widgets.failedLogins.subtitle', 'icon' => 'content-elements-login']);
    }

    /**
     * Gets the public 'dashboard.widget.sysLogErrors' shared autowired service.
     *
     * @return \TYPO3\CMS\Dashboard\Widgets\BarChartWidget
     */
    protected function getDashboard_Widget_SysLogErrorsService()
    {
        return $this->services['dashboard.widget.sysLogErrors'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Dashboard\Widgets\BarChartWidget::class, ($this->services['sysLogErrorsWidgetConfiguration'] ?? $this->getSysLogErrorsWidgetConfigurationService()), \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Dashboard\Widgets\Provider\SysLogErrorsDataProvider::class), \TYPO3\CMS\Dashboard\Views\Factory::widgetTemplate(), \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Dashboard\Widgets\Provider\SysLogButtonProvider::class, 'LLL:EXT:dashboard/Resources/Private/Language/locallang.xlf:widgets.sysLogErrors.buttonText'));
    }

    /**
     * Gets the public 'dashboard.widget.t3information' shared autowired service.
     *
     * @return \TYPO3\CMS\Dashboard\Widgets\T3GeneralInformationWidget
     */
    protected function getDashboard_Widget_T3informationService()
    {
        return $this->services['dashboard.widget.t3information'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Dashboard\Widgets\T3GeneralInformationWidget::class, ($this->services['t3informationWidgetConfiguration'] ?? $this->getT3informationWidgetConfigurationService()), \TYPO3\CMS\Dashboard\Views\Factory::widgetTemplate());
    }

    /**
     * Gets the public 'dashboard.widget.t3news' shared autowired service.
     *
     * @return \TYPO3\CMS\Dashboard\Widgets\RssWidget
     */
    protected function getDashboard_Widget_T3newsService()
    {
        return $this->services['dashboard.widget.t3news'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Dashboard\Widgets\RssWidget::class, ($this->services['t3newsWidgetConfiguration'] ?? $this->getT3newsWidgetConfigurationService()), ($this->privates['cache.dashboard.rss'] ?? $this->getCache_Dashboard_RssService()), \TYPO3\CMS\Dashboard\Views\Factory::widgetTemplate(), \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Dashboard\Widgets\Provider\ButtonProvider::class, 'LLL:EXT:dashboard/Resources/Private/Language/locallang.xlf:widgets.t3news.moreItems', 'https://typo3.org/project/news', '_blank'), ['feedUrl' => 'https://typo3.org/rss']);
    }

    /**
     * Gets the public 'dashboard.widget.t3securityAdvisories' shared autowired service.
     *
     * @return \TYPO3\CMS\Dashboard\Widgets\RssWidget
     */
    protected function getDashboard_Widget_T3securityAdvisoriesService()
    {
        return $this->services['dashboard.widget.t3securityAdvisories'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Dashboard\Widgets\RssWidget::class, ($this->services['t3securityAdvisoriesWidgetConfiguration'] ?? $this->getT3securityAdvisoriesWidgetConfigurationService()), ($this->privates['cache.dashboard.rss'] ?? $this->getCache_Dashboard_RssService()), \TYPO3\CMS\Dashboard\Views\Factory::widgetTemplate(), \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Dashboard\Widgets\Provider\ButtonProvider::class, 'LLL:EXT:dashboard/Resources/Private/Language/locallang.xlf:widgets.t3securityAdvisories.moreItems', 'https://typo3.org/help/security-advisories', '_blank'), ['feedUrl' => 'https://typo3.org/rss-security']);
    }

    /**
     * Gets the public 'dashboard.widget.typeOfUsers' shared autowired service.
     *
     * @return \TYPO3\CMS\Dashboard\Widgets\DoughnutChartWidget
     */
    protected function getDashboard_Widget_TypeOfUsersService()
    {
        return $this->services['dashboard.widget.typeOfUsers'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Dashboard\Widgets\DoughnutChartWidget::class, ($this->services['typeOfUsersWidgetConfiguration'] ?? $this->getTypeOfUsersWidgetConfigurationService()), \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Dashboard\Widgets\Provider\TypeOfUsersChartDataProvider::class, \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Localization\LanguageService::class, ($this->services['TYPO3\\CMS\\Core\\Localization\\Locales'] ?? $this->getLocalesService()), ($this->services['TYPO3\\CMS\\Core\\Localization\\LocalizationFactory'] ?? $this->getLocalizationFactoryService()))), \TYPO3\CMS\Dashboard\Views\Factory::widgetTemplate());
    }

    /**
     * Gets the public 'dashboard.widgetGroups_decorated_1' shared service.
     *
     * @return \ArrayObject
     */
    protected function getDashboard_WidgetGroupsDecorated1Service()
    {
        return $this->services['dashboard.widgetGroups_decorated_1'] = \TYPO3\CMS\Dashboard\ServiceProvider::configureWidgetGroups($this, \TYPO3\CMS\Dashboard\ServiceProvider::getWidgetGroups($this));
    }

    /**
     * Gets the public 'dashboard.widgets_decorated_1' shared service.
     *
     * @return \ArrayObject
     */
    protected function getDashboard_WidgetsDecorated1Service()
    {
        return $this->services['dashboard.widgets_decorated_1'] = \TYPO3\CMS\Dashboard\ServiceProvider::configureWidgets($this, \TYPO3\CMS\Dashboard\ServiceProvider::getWidgets($this));
    }

    /**
     * Gets the public 'docGettingStartedWidgetConfiguration' shared service.
     *
     * @return \TYPO3\CMS\Dashboard\Widgets\WidgetConfiguration
     */
    protected function getDocGettingStartedWidgetConfigurationService()
    {
        return $this->services['docGettingStartedWidgetConfiguration'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Dashboard\Widgets\WidgetConfiguration::class, 'docGettingStarted', 'dashboard.widget.docGettingStarted', [0 => 'documentation'], 'LLL:EXT:dashboard/Resources/Private/Language/locallang.xlf:widgets.documentation.gettingStarted.title', 'LLL:EXT:dashboard/Resources/Private/Language/locallang.xlf:widgets.documentation.gettingStarted.description', 'content-widget-text', 'small', 'small', []);
    }

    /**
     * Gets the public 'docTSconfigWidgetConfiguration' shared service.
     *
     * @return \TYPO3\CMS\Dashboard\Widgets\WidgetConfiguration
     */
    protected function getDocTSconfigWidgetConfigurationService()
    {
        return $this->services['docTSconfigWidgetConfiguration'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Dashboard\Widgets\WidgetConfiguration::class, 'docTSconfig', 'dashboard.widget.docTSconfig', [0 => 'documentation'], 'LLL:EXT:dashboard/Resources/Private/Language/locallang.xlf:widgets.documentation.TSconfigReference.title', 'LLL:EXT:dashboard/Resources/Private/Language/locallang.xlf:widgets.documentation.TSconfigReference.description', 'content-widget-text', 'small', 'small', []);
    }

    /**
     * Gets the public 'docTypoScriptReferenceWidgetConfiguration' shared service.
     *
     * @return \TYPO3\CMS\Dashboard\Widgets\WidgetConfiguration
     */
    protected function getDocTypoScriptReferenceWidgetConfigurationService()
    {
        return $this->services['docTypoScriptReferenceWidgetConfiguration'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Dashboard\Widgets\WidgetConfiguration::class, 'docTypoScriptReference', 'dashboard.widget.docTypoScriptReference', [0 => 'documentation'], 'LLL:EXT:dashboard/Resources/Private/Language/locallang.xlf:widgets.documentation.typoscriptReference.title', 'LLL:EXT:dashboard/Resources/Private/Language/locallang.xlf:widgets.documentation.typoscriptReference.description', 'content-widget-text', 'small', 'small', []);
    }

    /**
     * Gets the public 'failedLoginsWidgetConfiguration' shared service.
     *
     * @return \TYPO3\CMS\Dashboard\Widgets\WidgetConfiguration
     */
    protected function getFailedLoginsWidgetConfigurationService()
    {
        return $this->services['failedLoginsWidgetConfiguration'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Dashboard\Widgets\WidgetConfiguration::class, 'failedLogins', 'dashboard.widget.failedLogins', [0 => 'systemInfo'], 'LLL:EXT:dashboard/Resources/Private/Language/locallang.xlf:widgets.failedLogins.title', 'LLL:EXT:dashboard/Resources/Private/Language/locallang.xlf:widgets.failedLogins.description', 'content-widget-number', 'small', 'small', []);
    }

    /**
     * Gets the public 'frontend.middlewares' shared service.
     *
     * @return \ArrayObject
     */
    protected function getFrontend_MiddlewaresService()
    {
        return $this->services['frontend.middlewares'] = \TYPO3\CMS\Frontend\ServiceProvider::getFrontendMiddlewares($this);
    }

    /**
     * Gets the public 'middlewares_decorated_30' shared service.
     *
     * @return \ArrayObject
     */
    protected function getMiddlewaresDecorated30Service()
    {
        $a = ($this->services['service_provider_registry'] ?? $this->get('service_provider_registry', 1));

        return $this->services['middlewares_decorated_30'] = $a->extendService('femanager', 'middlewares', $this, $a->extendService('market', 'middlewares', $this, $a->extendService('bootstrap_package', 'middlewares', $this, $a->extendService('cart_products', 'middlewares', $this, $a->extendService('cart', 'middlewares', $this, $a->extendService('viewpage', 'middlewares', $this, $a->extendService('tstemplate', 'middlewares', $this, $a->extendService('t3editor', 'middlewares', $this, $a->extendService('sys_note', 'middlewares', $this, $a->extendService('seo', 'middlewares', $this, $a->extendService('info', 'middlewares', $this, $a->extendService('felogin', 'middlewares', $this, $a->extendService('extensionmanager', 'middlewares', $this, \TYPO3\CMS\Dashboard\ServiceProvider::configureMiddlewares($this, $a->extendService('beuser', 'middlewares', $this, $a->extendService('belog', 'middlewares', $this, $a->extendService('about', 'middlewares', $this, $a->extendService('rte_ckeditor', 'middlewares', $this, $a->extendService('setup', 'middlewares', $this, \TYPO3\CMS\Backend\ServiceProvider::configureMiddlewares($this, $a->extendService('recordlist', 'middlewares', $this, $a->extendService('form', 'middlewares', $this, $a->extendService('impexp', 'middlewares', $this, $a->extendService('filelist', 'middlewares', $this, $a->extendService('fluid_styled_content', 'middlewares', $this, \TYPO3\CMS\Frontend\ServiceProvider::configureMiddlewares($this, $a->extendService('fluid', 'middlewares', $this, \TYPO3\CMS\Extbase\ServiceProvider::configureMiddlewares($this, $a->extendService('scheduler', 'middlewares', $this, \TYPO3\CMS\Core\ServiceProvider::configureMiddlewares($this, \TYPO3\CMS\Core\ServiceProvider::getMiddlewares($this)))))))))))))))))))))))))))))));
    }

    /**
     * Gets the public 'sysLogErrorsWidgetConfiguration' shared service.
     *
     * @return \TYPO3\CMS\Dashboard\Widgets\WidgetConfiguration
     */
    protected function getSysLogErrorsWidgetConfigurationService()
    {
        return $this->services['sysLogErrorsWidgetConfiguration'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Dashboard\Widgets\WidgetConfiguration::class, 'sysLogErrors', 'dashboard.widget.sysLogErrors', [0 => 'systemInfo'], 'LLL:EXT:dashboard/Resources/Private/Language/locallang.xlf:widgets.sysLogErrors.title', 'LLL:EXT:dashboard/Resources/Private/Language/locallang.xlf:widgets.sysLogErrors.description', 'content-widget-chart-bar', 'medium', 'medium', []);
    }

    /**
     * Gets the public 't3informationWidgetConfiguration' shared service.
     *
     * @return \TYPO3\CMS\Dashboard\Widgets\WidgetConfiguration
     */
    protected function getT3informationWidgetConfigurationService()
    {
        return $this->services['t3informationWidgetConfiguration'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Dashboard\Widgets\WidgetConfiguration::class, 't3information', 'dashboard.widget.t3information', [0 => 'general'], 'LLL:EXT:dashboard/Resources/Private/Language/locallang.xlf:widgets.t3information.title', 'LLL:EXT:dashboard/Resources/Private/Language/locallang.xlf:widgets.t3information.description', 'content-widget-text', 'medium', 'medium', []);
    }

    /**
     * Gets the public 't3newsWidgetConfiguration' shared service.
     *
     * @return \TYPO3\CMS\Dashboard\Widgets\WidgetConfiguration
     */
    protected function getT3newsWidgetConfigurationService()
    {
        return $this->services['t3newsWidgetConfiguration'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Dashboard\Widgets\WidgetConfiguration::class, 't3news', 'dashboard.widget.t3news', [0 => 'news'], 'LLL:EXT:dashboard/Resources/Private/Language/locallang.xlf:widgets.t3news.title', 'LLL:EXT:dashboard/Resources/Private/Language/locallang.xlf:widgets.t3news.description', 'content-widget-rss', 'large', 'medium', []);
    }

    /**
     * Gets the public 't3securityAdvisoriesWidgetConfiguration' shared service.
     *
     * @return \TYPO3\CMS\Dashboard\Widgets\WidgetConfiguration
     */
    protected function getT3securityAdvisoriesWidgetConfigurationService()
    {
        return $this->services['t3securityAdvisoriesWidgetConfiguration'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Dashboard\Widgets\WidgetConfiguration::class, 't3securityAdvisories', 'dashboard.widget.t3securityAdvisories', [0 => 'news'], 'LLL:EXT:dashboard/Resources/Private/Language/locallang.xlf:widgets.t3securityAdvisories.title', 'LLL:EXT:dashboard/Resources/Private/Language/locallang.xlf:widgets.t3securityAdvisories.description', 'content-widget-rss', 'large', 'medium', []);
    }

    /**
     * Gets the public 'typeOfUsersWidgetConfiguration' shared service.
     *
     * @return \TYPO3\CMS\Dashboard\Widgets\WidgetConfiguration
     */
    protected function getTypeOfUsersWidgetConfigurationService()
    {
        return $this->services['typeOfUsersWidgetConfiguration'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Dashboard\Widgets\WidgetConfiguration::class, 'typeOfUsers', 'dashboard.widget.typeOfUsers', [0 => 'systemInfo'], 'LLL:EXT:dashboard/Resources/Private/Language/locallang.xlf:widgets.typeOfUsers.title', 'LLL:EXT:dashboard/Resources/Private/Language/locallang.xlf:widgets.typeOfUsers.description', 'content-widget-chart-pie', 'medium', 'small', []);
    }

    /**
     * Gets the private 'Extcode\Cart\Utility\CartUtility' shared autowired service.
     *
     * @return \Extcode\Cart\Utility\CartUtility
     */
    protected function getCartUtilityService()
    {
        $this->privates['Extcode\\Cart\\Utility\\CartUtility'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Utility\CartUtility::class);

        $instance->injectSessionHandler(($this->services['Extcode\\Cart\\Service\\SessionHandler'] ?? ($this->services['Extcode\\Cart\\Service\\SessionHandler'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Service\SessionHandler::class))));
        $instance->injectParserUtility(($this->privates['Extcode\\Cart\\Utility\\ParserUtility'] ?? ($this->privates['Extcode\\Cart\\Utility\\ParserUtility'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Utility\ParserUtility::class))));

        return $instance;
    }

    /**
     * Gets the private 'Extcode\Cart\Utility\OrderUtility' shared autowired service.
     *
     * @return \Extcode\Cart\Utility\OrderUtility
     */
    protected function getOrderUtilityService()
    {
        $this->privates['Extcode\\Cart\\Utility\\OrderUtility'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\Extcode\Cart\Utility\OrderUtility::class);

        $instance->injectOrderItemRepository(($this->services['Extcode\\Cart\\Domain\\Repository\\Order\\ItemRepository'] ?? $this->getItemRepositoryService()));
        $instance->injectOrderDiscountRepository(($this->services['Extcode\\Cart\\Domain\\Repository\\Order\\DiscountRepository'] ?? $this->getDiscountRepositoryService()));
        $instance->injectOrderBillingAddressRepository(($this->services['Extcode\\Cart\\Domain\\Repository\\Order\\BillingAddressRepository'] ?? $this->getBillingAddressRepositoryService()));
        $instance->injectOrderShippingAddressRepository(($this->services['Extcode\\Cart\\Domain\\Repository\\Order\\ShippingAddressRepository'] ?? $this->getShippingAddressRepositoryService()));
        $instance->injectOrderProductRepository(($this->services['Extcode\\Cart\\Domain\\Repository\\Order\\ProductRepository'] ?? $this->getProductRepository2Service()));
        $instance->injectOrderProductAdditionalRepository(($this->services['Extcode\\Cart\\Domain\\Repository\\Order\\ProductAdditionalRepository'] ?? $this->getProductAdditionalRepositoryService()));
        $instance->injectOrderPaymentRepository(($this->services['Extcode\\Cart\\Domain\\Repository\\Order\\PaymentRepository'] ?? $this->getPaymentRepositoryService()));
        $instance->injectOrderShippingRepository(($this->services['Extcode\\Cart\\Domain\\Repository\\Order\\ShippingRepository'] ?? $this->getShippingRepositoryService()));
        $instance->injectOrderTaxClassRepository(($this->services['Extcode\\Cart\\Domain\\Repository\\Order\\TaxClassRepository'] ?? $this->getTaxClassRepositoryService()));
        $instance->injectOrderTaxRepository(($this->services['Extcode\\Cart\\Domain\\Repository\\Order\\TaxRepository'] ?? $this->getTaxRepositoryService()));
        $instance->injectPersistenceManager(($this->services['TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager'] ?? $this->getPersistenceManagerService()));
        $instance->injectCouponRepository(($this->services['Extcode\\Cart\\Domain\\Repository\\CouponRepository'] ?? $this->getCouponRepositoryService()));

        return $instance;
    }

    /**
     * Gets the private 'TYPO3\CMS\Beuser\Service\UserInformationService' shared autowired service.
     *
     * @return \TYPO3\CMS\Beuser\Service\UserInformationService
     */
    protected function getUserInformationServiceService()
    {
        return $this->privates['TYPO3\\CMS\\Beuser\\Service\\UserInformationService'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Beuser\Service\UserInformationService::class, ($this->services['TYPO3\\CMS\\Core\\Imaging\\IconFactory'] ?? $this->getIconFactoryService()));
    }

    /**
     * Gets the private 'TYPO3\CMS\Core\DependencyInjection\EnvVarProcessor' shared autowired service.
     *
     * @return \TYPO3\CMS\Core\DependencyInjection\EnvVarProcessor
     */
    protected function getEnvVarProcessorService()
    {
        return $this->privates['TYPO3\\CMS\\Core\\DependencyInjection\\EnvVarProcessor'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\DependencyInjection\EnvVarProcessor::class);
    }

    /**
     * Gets the private 'TYPO3\CMS\Core\Information\Typo3Information' shared autowired service.
     *
     * @return \TYPO3\CMS\Core\Information\Typo3Information
     */
    protected function getTypo3InformationService()
    {
        return $this->privates['TYPO3\\CMS\\Core\\Information\\Typo3Information'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Information\Typo3Information::class, \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Localization\LanguageService::class, ($this->services['TYPO3\\CMS\\Core\\Localization\\Locales'] ?? $this->getLocalesService()), ($this->services['TYPO3\\CMS\\Core\\Localization\\LocalizationFactory'] ?? $this->getLocalizationFactoryService())));
    }

    /**
     * Gets the private 'TYPO3\CMS\Core\Resource\Service\ImageProcessingService' shared autowired service.
     *
     * @return \TYPO3\CMS\Core\Resource\Service\ImageProcessingService
     */
    protected function getImageProcessingServiceService()
    {
        return $this->privates['TYPO3\\CMS\\Core\\Resource\\Service\\ImageProcessingService'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Resource\Service\ImageProcessingService::class, ($this->services['TYPO3\\CMS\\Core\\Resource\\ProcessedFileRepository'] ?? $this->getProcessedFileRepositoryService()), ($this->services['TYPO3\\CMS\\Core\\Context\\Context'] ?? $this->getContextService()), \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Locking\ResourceMutex::class, ($this->services['TYPO3\\CMS\\Core\\Locking\\LockFactory'] ?? ($this->services['TYPO3\\CMS\\Core\\Locking\\LockFactory'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Locking\LockFactory::class)))));
    }

    /**
     * Gets the private 'TYPO3\CMS\Core\Site\SiteFinder' shared autowired service.
     *
     * @return \TYPO3\CMS\Core\Site\SiteFinder
     */
    protected function getSiteFinderService()
    {
        return $this->privates['TYPO3\\CMS\\Core\\Site\\SiteFinder'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Site\SiteFinder::class, ($this->services['TYPO3\\CMS\\Core\\Configuration\\SiteConfiguration'] ?? $this->getSiteConfigurationService()));
    }

    /**
     * Gets the private 'TYPO3\CMS\Dashboard\DashboardRepository' shared autowired service.
     *
     * @return \TYPO3\CMS\Dashboard\DashboardRepository
     */
    protected function getDashboardRepositoryService()
    {
        return $this->privates['TYPO3\\CMS\\Dashboard\\DashboardRepository'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Dashboard\DashboardRepository::class, ($this->privates['TYPO3\\CMS\\Core\\Database\\ConnectionPool'] ?? ($this->privates['TYPO3\\CMS\\Core\\Database\\ConnectionPool'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Database\ConnectionPool::class))), ($this->services['TYPO3\\CMS\\Dashboard\\WidgetRegistry'] ?? $this->getWidgetRegistryService()), $this);
    }

    /**
     * Gets the private 'TYPO3\CMS\Extbase\Mvc\RequestHandlerResolver' shared autowired service.
     *
     * @return \TYPO3\CMS\Extbase\Mvc\RequestHandlerResolver
     */
    protected function getRequestHandlerResolverService()
    {
        $this->privates['TYPO3\\CMS\\Extbase\\Mvc\\RequestHandlerResolver'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extbase\Mvc\RequestHandlerResolver::class, ($this->services['TYPO3\\CMS\\Extbase\\Configuration\\RequestHandlersConfigurationFactory'] ?? $this->getRequestHandlersConfigurationFactoryService()));

        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));

        return $instance;
    }

    /**
     * Gets the private 'TYPO3\CMS\Extbase\Mvc\View\GenericViewResolver' shared autowired service.
     *
     * @return \TYPO3\CMS\Extbase\Mvc\View\GenericViewResolver
     */
    protected function getGenericViewResolverService()
    {
        return $this->privates['TYPO3\\CMS\\Extbase\\Mvc\\View\\GenericViewResolver'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extbase\Mvc\View\GenericViewResolver::class, ($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));
    }

    /**
     * Gets the private 'TYPO3\CMS\Extensionmanager\Service\ComposerManifestProposalGenerator' shared autowired service.
     *
     * @return \TYPO3\CMS\Extensionmanager\Service\ComposerManifestProposalGenerator
     */
    protected function getComposerManifestProposalGeneratorService()
    {
        return $this->privates['TYPO3\\CMS\\Extensionmanager\\Service\\ComposerManifestProposalGenerator'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extensionmanager\Service\ComposerManifestProposalGenerator::class, ($this->services['TYPO3\\CMS\\Core\\Http\\RequestFactory'] ?? $this->getRequestFactoryService()), ($this->services['TYPO3\\CMS\\Extensionmanager\\Utility\\EmConfUtility'] ?? ($this->services['TYPO3\\CMS\\Extensionmanager\\Utility\\EmConfUtility'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extensionmanager\Utility\EmConfUtility::class))));
    }

    /**
     * Gets the private 'TYPO3\CMS\Extensionmanager\Utility\ExtensionModelUtility' shared autowired service.
     *
     * @return \TYPO3\CMS\Extensionmanager\Utility\ExtensionModelUtility
     */
    protected function getExtensionModelUtilityService()
    {
        $this->privates['TYPO3\\CMS\\Extensionmanager\\Utility\\ExtensionModelUtility'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Extensionmanager\Utility\ExtensionModelUtility::class);

        $instance->injectObjectManager(($this->services['TYPO3\\CMS\\Extbase\\Object\\ObjectManager'] ?? $this->getObjectManagerService()));

        return $instance;
    }

    /**
     * Gets the private 'TYPO3\CMS\Form\Mvc\Configuration\YamlSource' shared autowired service.
     *
     * @return \TYPO3\CMS\Form\Mvc\Configuration\YamlSource
     */
    protected function getYamlSourceService()
    {
        $this->privates['TYPO3\\CMS\\Form\\Mvc\\Configuration\\YamlSource'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Form\Mvc\Configuration\YamlSource::class);

        $instance->injectFilePersistenceSlot(($this->services['TYPO3\\CMS\\Form\\Slot\\FilePersistenceSlot'] ?? ($this->services['TYPO3\\CMS\\Form\\Slot\\FilePersistenceSlot'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Form\Slot\FilePersistenceSlot::class))));

        return $instance;
    }

    /**
     * Gets the private 'TYPO3\CMS\Form\Mvc\Persistence\FormPersistenceManager' shared autowired service.
     *
     * @return \TYPO3\CMS\Form\Mvc\Persistence\FormPersistenceManager
     */
    protected function getFormPersistenceManagerService()
    {
        $this->privates['TYPO3\\CMS\\Form\\Mvc\\Persistence\\FormPersistenceManager'] = $instance = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Form\Mvc\Persistence\FormPersistenceManager::class);

        $instance->injectYamlSource(($this->privates['TYPO3\\CMS\\Form\\Mvc\\Configuration\\YamlSource'] ?? $this->getYamlSourceService()));
        $instance->injectStorageRepository(($this->services['TYPO3\\CMS\\Core\\Resource\\StorageRepository'] ?? $this->getStorageRepositoryService()));
        $instance->injectFilePersistenceSlot(($this->services['TYPO3\\CMS\\Form\\Slot\\FilePersistenceSlot'] ?? ($this->services['TYPO3\\CMS\\Form\\Slot\\FilePersistenceSlot'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Form\Slot\FilePersistenceSlot::class))));
        $instance->injectResourceFactory(($this->services['TYPO3\\CMS\\Core\\Resource\\ResourceFactory'] ?? $this->getResourceFactoryService()));
        $instance->initializeObject();

        return $instance;
    }

    /**
     * Gets the private 'cache.dashboard.rss' shared autowired service.
     *
     * @return \TYPO3\CMS\Core\Cache\Frontend\FrontendInterface
     */
    protected function getCache_Dashboard_RssService()
    {
        return $this->privates['cache.dashboard.rss'] = ($this->services['TYPO3\\CMS\\Core\\Cache\\CacheManager'] ?? $this->getCacheManagerService())->getCache('dashboard_rss');
    }

    /**
     * Gets the private 'querybuilder.tx_cart_domain_model_order_item' shared autowired service.
     *
     * @return \TYPO3\CMS\Core\Database\Query\QueryBuilder
     */
    protected function getQuerybuilder_TxCartDomainModelOrderItemService()
    {
        return $this->privates['querybuilder.tx_cart_domain_model_order_item'] = ($this->privates['TYPO3\\CMS\\Core\\Database\\ConnectionPool'] ?? ($this->privates['TYPO3\\CMS\\Core\\Database\\ConnectionPool'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstanceForDi(\TYPO3\CMS\Core\Database\ConnectionPool::class)))->getQueryBuilderForTable('tx_cart_domain_model_order_item');
    }
}

#