<?php

namespace Container4xdMaR1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_CommandLoaderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'console.command_loader' shared service.
     *
     * @return \Symfony\Component\Console\CommandLoader\ContainerCommandLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'CommandLoader'.\DIRECTORY_SEPARATOR.'CommandLoaderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'CommandLoader'.\DIRECTORY_SEPARATOR.'ContainerCommandLoader.php';

        return $container->services['console.command_loader'] = new \Symfony\Component\Console\CommandLoader\ContainerCommandLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'console.command.about' => ['privates', '.console.command.about.lazy', 'get_Console_Command_About_LazyService', true],
            'console.command.assets_install' => ['privates', '.console.command.assets_install.lazy', 'get_Console_Command_AssetsInstall_LazyService', true],
            'console.command.cache_clear' => ['privates', '.console.command.cache_clear.lazy', 'get_Console_Command_CacheClear_LazyService', true],
            'console.command.cache_pool_clear' => ['privates', '.console.command.cache_pool_clear.lazy', 'get_Console_Command_CachePoolClear_LazyService', true],
            'console.command.cache_pool_delete' => ['privates', '.console.command.cache_pool_delete.lazy', 'get_Console_Command_CachePoolDelete_LazyService', true],
            'console.command.cache_pool_list' => ['privates', '.console.command.cache_pool_list.lazy', 'get_Console_Command_CachePoolList_LazyService', true],
            'console.command.cache_pool_prune' => ['privates', '.console.command.cache_pool_prune.lazy', 'get_Console_Command_CachePoolPrune_LazyService', true],
            'console.command.cache_warmup' => ['privates', '.console.command.cache_warmup.lazy', 'get_Console_Command_CacheWarmup_LazyService', true],
            'console.command.config_debug' => ['privates', '.console.command.config_debug.lazy', 'get_Console_Command_ConfigDebug_LazyService', true],
            'console.command.config_dump_reference' => ['privates', '.console.command.config_dump_reference.lazy', 'get_Console_Command_ConfigDumpReference_LazyService', true],
            'console.command.container_debug' => ['privates', '.console.command.container_debug.lazy', 'get_Console_Command_ContainerDebug_LazyService', true],
            'console.command.container_lint' => ['privates', '.console.command.container_lint.lazy', 'get_Console_Command_ContainerLint_LazyService', true],
            'console.command.debug_autowiring' => ['privates', '.console.command.debug_autowiring.lazy', 'get_Console_Command_DebugAutowiring_LazyService', true],
            'console.command.event_dispatcher_debug' => ['privates', '.console.command.event_dispatcher_debug.lazy', 'get_Console_Command_EventDispatcherDebug_LazyService', true],
            'console.command.router_debug' => ['privates', '.console.command.router_debug.lazy', 'get_Console_Command_RouterDebug_LazyService', true],
            'console.command.router_match' => ['privates', '.console.command.router_match.lazy', 'get_Console_Command_RouterMatch_LazyService', true],
            'console.command.secrets_decrypt_to_local' => ['privates', '.console.command.secrets_decrypt_to_local.lazy', 'get_Console_Command_SecretsDecryptToLocal_LazyService', true],
            'console.command.secrets_encrypt_from_local' => ['privates', '.console.command.secrets_encrypt_from_local.lazy', 'get_Console_Command_SecretsEncryptFromLocal_LazyService', true],
            'console.command.secrets_generate_key' => ['privates', '.console.command.secrets_generate_key.lazy', 'get_Console_Command_SecretsGenerateKey_LazyService', true],
            'console.command.secrets_list' => ['privates', '.console.command.secrets_list.lazy', 'get_Console_Command_SecretsList_LazyService', true],
            'console.command.secrets_remove' => ['privates', '.console.command.secrets_remove.lazy', 'get_Console_Command_SecretsRemove_LazyService', true],
            'console.command.secrets_set' => ['privates', '.console.command.secrets_set.lazy', 'get_Console_Command_SecretsSet_LazyService', true],
            'console.command.yaml_lint' => ['privates', '.console.command.yaml_lint.lazy', 'get_Console_Command_YamlLint_LazyService', true],
            'maker.auto_command.make_auth' => ['privates', '.maker.auto_command.make_auth.lazy', 'get_Maker_AutoCommand_MakeAuth_LazyService', true],
            'maker.auto_command.make_command' => ['privates', '.maker.auto_command.make_command.lazy', 'get_Maker_AutoCommand_MakeCommand_LazyService', true],
            'maker.auto_command.make_controller' => ['privates', '.maker.auto_command.make_controller.lazy', 'get_Maker_AutoCommand_MakeController_LazyService', true],
            'maker.auto_command.make_crud' => ['privates', '.maker.auto_command.make_crud.lazy', 'get_Maker_AutoCommand_MakeCrud_LazyService', true],
            'maker.auto_command.make_docker_database' => ['privates', '.maker.auto_command.make_docker_database.lazy', 'get_Maker_AutoCommand_MakeDockerDatabase_LazyService', true],
            'maker.auto_command.make_entity' => ['privates', '.maker.auto_command.make_entity.lazy', 'get_Maker_AutoCommand_MakeEntity_LazyService', true],
            'maker.auto_command.make_fixtures' => ['privates', '.maker.auto_command.make_fixtures.lazy', 'get_Maker_AutoCommand_MakeFixtures_LazyService', true],
            'maker.auto_command.make_form' => ['privates', '.maker.auto_command.make_form.lazy', 'get_Maker_AutoCommand_MakeForm_LazyService', true],
            'maker.auto_command.make_message' => ['privates', '.maker.auto_command.make_message.lazy', 'get_Maker_AutoCommand_MakeMessage_LazyService', true],
            'maker.auto_command.make_messenger_middleware' => ['privates', '.maker.auto_command.make_messenger_middleware.lazy', 'get_Maker_AutoCommand_MakeMessengerMiddleware_LazyService', true],
            'maker.auto_command.make_migration' => ['privates', '.maker.auto_command.make_migration.lazy', 'get_Maker_AutoCommand_MakeMigration_LazyService', true],
            'maker.auto_command.make_registration_form' => ['privates', '.maker.auto_command.make_registration_form.lazy', 'get_Maker_AutoCommand_MakeRegistrationForm_LazyService', true],
            'maker.auto_command.make_reset_password' => ['privates', '.maker.auto_command.make_reset_password.lazy', 'get_Maker_AutoCommand_MakeResetPassword_LazyService', true],
            'maker.auto_command.make_serializer_encoder' => ['privates', '.maker.auto_command.make_serializer_encoder.lazy', 'get_Maker_AutoCommand_MakeSerializerEncoder_LazyService', true],
            'maker.auto_command.make_serializer_normalizer' => ['privates', '.maker.auto_command.make_serializer_normalizer.lazy', 'get_Maker_AutoCommand_MakeSerializerNormalizer_LazyService', true],
            'maker.auto_command.make_subscriber' => ['privates', '.maker.auto_command.make_subscriber.lazy', 'get_Maker_AutoCommand_MakeSubscriber_LazyService', true],
            'maker.auto_command.make_test' => ['privates', '.maker.auto_command.make_test.lazy', 'get_Maker_AutoCommand_MakeTest_LazyService', true],
            'maker.auto_command.make_twig_extension' => ['privates', '.maker.auto_command.make_twig_extension.lazy', 'get_Maker_AutoCommand_MakeTwigExtension_LazyService', true],
            'maker.auto_command.make_user' => ['privates', '.maker.auto_command.make_user.lazy', 'get_Maker_AutoCommand_MakeUser_LazyService', true],
            'maker.auto_command.make_validator' => ['privates', '.maker.auto_command.make_validator.lazy', 'get_Maker_AutoCommand_MakeValidator_LazyService', true],
            'maker.auto_command.make_voter' => ['privates', '.maker.auto_command.make_voter.lazy', 'get_Maker_AutoCommand_MakeVoter_LazyService', true],
        ], [
            'console.command.about' => '?',
            'console.command.assets_install' => '?',
            'console.command.cache_clear' => '?',
            'console.command.cache_pool_clear' => '?',
            'console.command.cache_pool_delete' => '?',
            'console.command.cache_pool_list' => '?',
            'console.command.cache_pool_prune' => '?',
            'console.command.cache_warmup' => '?',
            'console.command.config_debug' => '?',
            'console.command.config_dump_reference' => '?',
            'console.command.container_debug' => '?',
            'console.command.container_lint' => '?',
            'console.command.debug_autowiring' => '?',
            'console.command.event_dispatcher_debug' => '?',
            'console.command.router_debug' => '?',
            'console.command.router_match' => '?',
            'console.command.secrets_decrypt_to_local' => '?',
            'console.command.secrets_encrypt_from_local' => '?',
            'console.command.secrets_generate_key' => '?',
            'console.command.secrets_list' => '?',
            'console.command.secrets_remove' => '?',
            'console.command.secrets_set' => '?',
            'console.command.yaml_lint' => '?',
            'maker.auto_command.make_auth' => '?',
            'maker.auto_command.make_command' => '?',
            'maker.auto_command.make_controller' => '?',
            'maker.auto_command.make_crud' => '?',
            'maker.auto_command.make_docker_database' => '?',
            'maker.auto_command.make_entity' => '?',
            'maker.auto_command.make_fixtures' => '?',
            'maker.auto_command.make_form' => '?',
            'maker.auto_command.make_message' => '?',
            'maker.auto_command.make_messenger_middleware' => '?',
            'maker.auto_command.make_migration' => '?',
            'maker.auto_command.make_registration_form' => '?',
            'maker.auto_command.make_reset_password' => '?',
            'maker.auto_command.make_serializer_encoder' => '?',
            'maker.auto_command.make_serializer_normalizer' => '?',
            'maker.auto_command.make_subscriber' => '?',
            'maker.auto_command.make_test' => '?',
            'maker.auto_command.make_twig_extension' => '?',
            'maker.auto_command.make_user' => '?',
            'maker.auto_command.make_validator' => '?',
            'maker.auto_command.make_voter' => '?',
        ]), ['about' => 'console.command.about', 'assets:install' => 'console.command.assets_install', 'cache:clear' => 'console.command.cache_clear', 'cache:pool:clear' => 'console.command.cache_pool_clear', 'cache:pool:prune' => 'console.command.cache_pool_prune', 'cache:pool:delete' => 'console.command.cache_pool_delete', 'cache:pool:list' => 'console.command.cache_pool_list', 'cache:warmup' => 'console.command.cache_warmup', 'debug:config' => 'console.command.config_debug', 'config:dump-reference' => 'console.command.config_dump_reference', 'debug:container' => 'console.command.container_debug', 'lint:container' => 'console.command.container_lint', 'debug:autowiring' => 'console.command.debug_autowiring', 'debug:event-dispatcher' => 'console.command.event_dispatcher_debug', 'debug:router' => 'console.command.router_debug', 'router:match' => 'console.command.router_match', 'lint:yaml' => 'console.command.yaml_lint', 'secrets:set' => 'console.command.secrets_set', 'secrets:remove' => 'console.command.secrets_remove', 'secrets:generate-keys' => 'console.command.secrets_generate_key', 'secrets:list' => 'console.command.secrets_list', 'secrets:decrypt-to-local' => 'console.command.secrets_decrypt_to_local', 'secrets:encrypt-from-local' => 'console.command.secrets_encrypt_from_local', 'make:auth' => 'maker.auto_command.make_auth', 'make:command' => 'maker.auto_command.make_command', 'make:controller' => 'maker.auto_command.make_controller', 'make:crud' => 'maker.auto_command.make_crud', 'make:docker:database' => 'maker.auto_command.make_docker_database', 'make:entity' => 'maker.auto_command.make_entity', 'make:fixtures' => 'maker.auto_command.make_fixtures', 'make:form' => 'maker.auto_command.make_form', 'make:message' => 'maker.auto_command.make_message', 'make:messenger-middleware' => 'maker.auto_command.make_messenger_middleware', 'make:registration-form' => 'maker.auto_command.make_registration_form', 'make:reset-password' => 'maker.auto_command.make_reset_password', 'make:serializer:encoder' => 'maker.auto_command.make_serializer_encoder', 'make:serializer:normalizer' => 'maker.auto_command.make_serializer_normalizer', 'make:subscriber' => 'maker.auto_command.make_subscriber', 'make:twig-extension' => 'maker.auto_command.make_twig_extension', 'make:test' => 'maker.auto_command.make_test', 'make:unit-test' => 'maker.auto_command.make_test', 'make:functional-test' => 'maker.auto_command.make_test', 'make:validator' => 'maker.auto_command.make_validator', 'make:voter' => 'maker.auto_command.make_voter', 'make:user' => 'maker.auto_command.make_user', 'make:migration' => 'maker.auto_command.make_migration']);
    }
}
