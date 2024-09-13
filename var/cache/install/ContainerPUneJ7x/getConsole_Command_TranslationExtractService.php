<?php

namespace ContainerPUneJ7x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_TranslationExtractService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'console.command.translation_extract' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\TranslationUpdateCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/TranslationUpdateCommand.php';

        $container->privates['console.command.translation_extract'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\TranslationUpdateCommand(($container->privates['translation.writer'] ?? $container->load('getTranslation_WriterService')), ($container->privates['translation.reader'] ?? $container->load('getTranslation_ReaderService')), ($container->privates['translation.extractor'] ?? $container->load('getTranslation_ExtractorService')), $container->getEnv('ECCUBE_LOCALE'), (\dirname(__DIR__, 4).'/translations'), (\dirname(__DIR__, 4).'/templates'), [(\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations'), (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations'), (\dirname(__DIR__, 4).'/src/Eccube/Resource/locale/'), (\dirname(__DIR__, 4).'/app/Customize/Resource/locale/')], [(\dirname(__DIR__, 4).'/app/template/'.$container->getEnv('string:ECCUBE_TEMPLATE_CODE')), (\dirname(__DIR__, 4).'/src/Eccube/Resource/template/default'), (\dirname(__DIR__, 4).'/app/Plugin'), (\dirname(__DIR__, 4).'/app/template/admin'), (\dirname(__DIR__, 4).'/src/Eccube/Resource/template/admin'), (\dirname(__DIR__, 4).'/app/template/user_data'), (\dirname(__DIR__, 4).'/src/Eccube/Resource/template/toolbar'), (\dirname(__DIR__, 4).'/src/Eccube/Resource/template/common'), (\dirname(__DIR__, 4).'/src/Eccube/Resource/template/install'), (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Email'), (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Form'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/AbstractController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/AbstractShoppingController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/AbstractCsvImportController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/AdminController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Content/BlockController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Content/CacheController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Content/CssController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Content/FileController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Content/JsController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Content/LayoutController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Content/MaintenanceController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Content/NewsController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Content/PageController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Customer/CustomerController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Customer/CustomerDeliveryEditController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Customer/CustomerEditController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Order/CsvImportController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Order/EditController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Order/MailController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Order/OrderController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Order/ShippingController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Product/CategoryController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Product/ClassCategoryController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Product/ClassNameController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Product/CsvImportController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Product/ProductClassController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Product/ProductController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Product/TagController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Setting/Shop/CalendarController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Setting/Shop/CsvController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Setting/Shop/DeliveryController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Setting/Shop/MailController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Setting/Shop/OrderStatusController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Setting/Shop/PaymentController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Setting/Shop/ShopController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Setting/Shop/TaxRuleController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Setting/Shop/TradeLawController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Setting/System/AuthorityController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Setting/System/LogController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Setting/System/LoginHistoryController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Setting/System/MasterdataController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Setting/System/MemberController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Setting/System/SecurityController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Setting/System/TwoFactorAuthController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Store/OwnerStoreController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Store/PluginController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Store/TemplateController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/Block/AutoNewItemController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/Block/CalendarController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/Block/CartController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/Block/SearchProductController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/CartController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/ContactController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/EntryController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/ForgotController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/HelpController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/Install/InstallController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/InstallPluginController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/Mypage/ChangeController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/Mypage/DeliveryController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/Mypage/MypageController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/Mypage/WithdrawController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/NonMemberShoppingController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/ProductController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/ShippingMultipleController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/ShoppingController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/SitemapController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/TopController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/TradeLawController.php'), (\dirname(__DIR__, 4).'/src/Eccube/Controller/UserDataController.php'), (\dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/RequestPayloadValueResolver.php'), (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/TranslationDebugCommand.php'), (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/TranslationsCacheWarmer.php'), (\dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/ProblemNormalizer.php'), (\dirname(__DIR__, 4).'/vendor/symfony/serializer/SerializerAwareTrait.php'), (\dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/TranslatableNormalizer.php'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/ChoiceType.php'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/FileType.php'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/ColorType.php'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/TransformationFailureExtension.php'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Validator/Type/FormTypeValidatorExtension.php'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Validator/Type/UploadValidatorExtension.php'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Csrf/Type/FormTypeCsrfExtension.php'), (\dirname(__DIR__, 4).'/vendor/symfony/validator/ValidatorBuilder.php'), (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/TranslationExtension.php'), (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/FormExtension.php'), (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/src/Helper/Processor.php'), (\dirname(__DIR__, 4).'/vendor/symfony/translation/DataCollector/TranslationDataCollector.php')], []);

        $instance->setName('translation:extract');
        $instance->setDescription('Extract missing translations keys from code to translation files');

        return $instance;
    }
}
