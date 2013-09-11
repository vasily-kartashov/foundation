<?php
// auto-generated file, do not edit
spl_autoload_register(function($className) {
    static $map;
    if (!is_array($map)) {
        $map = array(
			'application\\db\\DatabaseService' => __DIR__ . '/application/db/DatabaseService.php',
			'application\\entity\\HomePageEntity' => __DIR__ . '/application/entity/HomePageEntity.php',
			'application\\entity\\ItemEntity' => __DIR__ . '/application/entity/ItemEntity.php',
			'application\\entity\\ItemsListEntity' => __DIR__ . '/application/entity/ItemsListEntity.php',
			'application\\environment\\DefaultEnvironment' => __DIR__ . '/application/environment/DefaultEnvironment.php',
			'application\\environment\\ProductionEnvironment' => __DIR__ . '/application/environment/ProductionEnvironment.php',
			'application\\FrontendApplication' => __DIR__ . '/application/FrontendApplication.php',
			'application\\locale\\DefaultLocale' => __DIR__ . '/application/locale/DefaultLocale.php',
			'application\\locale\\GermanLocale' => __DIR__ . '/application/locale/GermanLocale.php',
			'application\\resource\\ItemResource' => __DIR__ . '/application/resource/ItemResource.php',
			'application\\resource\\ItemsListResource' => __DIR__ . '/application/resource/ItemsListResource.php',
			'core\\Application' => __DIR__ . '/core/Application.php',
			'core\\db\\MySQLiProcedure' => __DIR__ . '/core/db/MySQLiProcedure.php',
			'core\\entity\\HTMLEntity' => __DIR__ . '/core/entity/HTMLEntity.php',
			'core\\entity\\InlineJSONEntity' => __DIR__ . '/core/entity/InlineJSONEntity.php',
			'core\\entity\\JSONEntity' => __DIR__ . '/core/entity/JSONEntity.php',
			'core\\entity\\LocatedEntity' => __DIR__ . '/core/entity/LocatedEntity.php',
			'core\\Entity' => __DIR__ . '/core/Entity.php',
			'core\\io\\Directory' => __DIR__ . '/core/io/Directory.php',
			'core\\request\\CLIRequest' => __DIR__ . '/core/request/CLIRequest.php',
			'core\\request\\WebRequest' => __DIR__ . '/core/request/WebRequest.php',
			'core\\Request' => __DIR__ . '/core/Request.php',
			'core\\resource\\CollectionElementResource' => __DIR__ . '/core/resource/CollectionElementResource.php',
			'core\\resource\\CollectionResource' => __DIR__ . '/core/resource/CollectionResource.php',
			'core\\resource\\EntityResource' => __DIR__ . '/core/resource/EntityResource.php',
			'core\\resource\\NotFoundResource' => __DIR__ . '/core/resource/NotFoundResource.php',
			'core\\resource\\RedirectResource' => __DIR__ . '/core/resource/RedirectResource.php',
			'core\\Resource' => __DIR__ . '/core/Resource.php',
			'core\\response\\AcceptedResponse' => __DIR__ . '/core/response/AcceptedResponse.php',
			'core\\response\\BadRequestResponse' => __DIR__ . '/core/response/BadRequestResponse.php',
			'core\\response\\CreatedResponse' => __DIR__ . '/core/response/CreatedResponse.php',
			'core\\response\\ForbiddenResponse' => __DIR__ . '/core/response/ForbiddenResponse.php',
			'core\\response\\FoundResponse' => __DIR__ . '/core/response/FoundResponse.php',
			'core\\response\\GoneResponse' => __DIR__ . '/core/response/GoneResponse.php',
			'core\\response\\MethodNotAllowedResponse' => __DIR__ . '/core/response/MethodNotAllowedResponse.php',
			'core\\response\\MovedPermanentlyResponse' => __DIR__ . '/core/response/MovedPermanentlyResponse.php',
			'core\\response\\NoContentResponse' => __DIR__ . '/core/response/NoContentResponse.php',
			'core\\response\\NotFoundResponse' => __DIR__ . '/core/response/NotFoundResponse.php',
			'core\\response\\NotModifiedResponse' => __DIR__ . '/core/response/NotModifiedResponse.php',
			'core\\response\\OKORNotModifiedResponse' => __DIR__ . '/core/response/OKOrNotModifiedResponse.php',
			'core\\response\\OKResponse' => __DIR__ . '/core/response/OKResponse.php',
			'core\\response\\PreconditionFailedResponse' => __DIR__ . '/core/response/PreconditionFailedResponse.php',
			'core\\response\\SeeOtherResponse' => __DIR__ . '/core/response/SeeOtherResponse.php',
			'core\\response\\TemporaryRedirectResponse' => __DIR__ . '/core/response/TemporaryRedirectResponse.php',
			'core\\response\\UnsupportedMediaTypeResponse' => __DIR__ . '/core/response/UnsupportedMediaTypeResponse.php',
			'core\\Response' => __DIR__ . '/core/Response.php',
			'core\\template\\SmartyTemplate' => __DIR__ . '/core/template/SmartyTemplate.php',
			'core\\Template' => __DIR__ . '/core/Template.php',
			'Michelf\\Markdown' => __DIR__ . '/vendors/phpmarkdown-1.2.7/Michelf/Markdown.php',
			'Michelf\\_MarkdownExtra_TmpImpl' => __DIR__ . '/vendors/phpmarkdown-1.2.7/Michelf/Markdown.php',
			'Michelf\\MarkdownExtra' => __DIR__ . '/vendors/phpmarkdown-1.2.7/Michelf/MarkdownExtra.php',
			'Smarty' => __DIR__ . '/vendors/smarty-3.1.13/Smarty.class.php',
			'SmartyException' => __DIR__ . '/vendors/smarty-3.1.13/Smarty.class.php',
			'SmartyCompilerException' => __DIR__ . '/vendors/smarty-3.1.13/Smarty.class.php',
			'SmartyBC' => __DIR__ . '/vendors/smarty-3.1.13/SmartyBC.class.php',
			'Smarty_CacheResource' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_cacheresource.php',
			'Smarty_Template_Cached' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_cacheresource.php',
			'Smarty_CacheResource_Custom' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_cacheresource_custom.php',
			'Smarty_CacheResource_KeyValueStore' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_cacheresource_keyvaluestore.php',
			'Smarty_Config_Source' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_config_source.php',
			'Smarty_Internal_CacheResource_File' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_cacheresource_file.php',
			'Smarty_Internal_CompileBase' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_compilebase.php',
			'Smarty_Internal_Compile_Append' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_compile_append.php',
			'Smarty_Internal_Compile_Assign' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_compile_assign.php',
			'Smarty_Internal_Compile_Block' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_compile_block.php',
			'Smarty_Internal_Compile_Blockclose' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_compile_block.php',
			'Smarty_Internal_Compile_Break' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_compile_break.php',
			'Smarty_Internal_Compile_Call' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_compile_call.php',
			'Smarty_Internal_Compile_Capture' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_compile_capture.php',
			'Smarty_Internal_Compile_CaptureClose' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_compile_capture.php',
			'Smarty_Internal_Compile_Config_Load' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_compile_config_load.php',
			'Smarty_Internal_Compile_Continue' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_compile_continue.php',
			'Smarty_Internal_Compile_Debug' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_compile_debug.php',
			'Smarty_Internal_Compile_Eval' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_compile_eval.php',
			'Smarty_Internal_Compile_Extends' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_compile_extends.php',
			'Smarty_Internal_Compile_For' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_compile_for.php',
			'Smarty_Internal_Compile_Forelse' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_compile_for.php',
			'Smarty_Internal_Compile_Forclose' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_compile_for.php',
			'Smarty_Internal_Compile_Foreach' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_compile_foreach.php',
			'Smarty_Internal_Compile_Foreachelse' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_compile_foreach.php',
			'Smarty_Internal_Compile_Foreachclose' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_compile_foreach.php',
			'Smarty_Internal_Compile_Function' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_compile_function.php',
			'Smarty_Internal_Compile_Functionclose' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_compile_function.php',
			'Smarty_Internal_Compile_If' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_compile_if.php',
			'Smarty_Internal_Compile_Else' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_compile_if.php',
			'Smarty_Internal_Compile_Elseif' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_compile_if.php',
			'Smarty_Internal_Compile_Ifclose' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_compile_if.php',
			'Smarty_Internal_Compile_Include' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_compile_include.php',
			'Smarty_Internal_Compile_Include_Php' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_compile_include_php.php',
			'Smarty_Internal_Compile_Insert' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_compile_insert.php',
			'Smarty_Internal_Compile_Ldelim' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_compile_ldelim.php',
			'Smarty_Internal_Compile_Nocache' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_compile_nocache.php',
			'Smarty_Internal_Compile_Nocacheclose' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_compile_nocache.php',
			'Smarty_Internal_Compile_Private_Block_Plugin' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_compile_private_block_plugin.php',
			'Smarty_Internal_Compile_Private_Function_Plugin' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_compile_private_function_plugin.php',
			'Smarty_Internal_Compile_Private_Modifier' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_compile_private_modifier.php',
			'Smarty_Internal_Compile_Private_Object_Block_Function' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_compile_private_object_block_function.php',
			'Smarty_Internal_Compile_Private_Object_Function' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_compile_private_object_function.php',
			'Smarty_Internal_Compile_Private_Print_Expression' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_compile_private_print_expression.php',
			'Smarty_Internal_Compile_Private_Registered_Block' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_compile_private_registered_block.php',
			'Smarty_Internal_Compile_Private_Registered_Function' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_compile_private_registered_function.php',
			'Smarty_Internal_Compile_Private_Special_Variable' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_compile_private_special_variable.php',
			'Smarty_Internal_Compile_Rdelim' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_compile_rdelim.php',
			'Smarty_Internal_Compile_Section' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_compile_section.php',
			'Smarty_Internal_Compile_Sectionelse' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_compile_section.php',
			'Smarty_Internal_Compile_Sectionclose' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_compile_section.php',
			'Smarty_Internal_Compile_Setfilter' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_compile_setfilter.php',
			'Smarty_Internal_Compile_Setfilterclose' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_compile_setfilter.php',
			'Smarty_Internal_Compile_While' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_compile_while.php',
			'Smarty_Internal_Compile_Whileclose' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_compile_while.php',
			'Smarty_Internal_Config' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_config.php',
			'Smarty_Internal_Configfilelexer' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_configfilelexer.php',
			'TPC_yyToken' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_configfileparser.php',
			'TPC_yyStackEntry' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_configfileparser.php',
			'Smarty_Internal_Configfileparser' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_configfileparser.php',
			'Smarty_Internal_Config_File_Compiler' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_config_file_compiler.php',
			'Smarty_Internal_Data' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_data.php',
			'Smarty_Data' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_data.php',
			'Smarty_Variable' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_data.php',
			'Undefined_Smarty_Variable' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_data.php',
			'Smarty_Internal_Debug' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_debug.php',
			'Smarty_Internal_Filter_Handler' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_filter_handler.php',
			'Smarty_Internal_Function_Call_Handler' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_function_call_handler.php',
			'Smarty_Internal_Get_Include_Path' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_get_include_path.php',
			'Smarty_Internal_Nocache_Insert' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_nocache_insert.php',
			'_smarty_parsetree' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_parsetree.php',
			'_smarty_tag' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_parsetree.php',
			'_smarty_code' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_parsetree.php',
			'_smarty_doublequoted' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_parsetree.php',
			'_smarty_dq_content' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_parsetree.php',
			'_smarty_template_buffer' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_parsetree.php',
			'_smarty_text' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_parsetree.php',
			'_smarty_linebreak' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_parsetree.php',
			'Smarty_Internal_Resource_Eval' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_resource_eval.php',
			'Smarty_Internal_Resource_Extends' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_resource_extends.php',
			'Smarty_Internal_Resource_File' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_resource_file.php',
			'Smarty_Internal_Resource_PHP' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_resource_php.php',
			'Smarty_Internal_Resource_Registered' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_resource_registered.php',
			'Smarty_Internal_Resource_Stream' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_resource_stream.php',
			'Smarty_Internal_Resource_String' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_resource_string.php',
			'Smarty_Internal_SmartyTemplateCompiler' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_smartytemplatecompiler.php',
			'Smarty_Internal_Template' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_template.php',
			'Smarty_Internal_TemplateBase' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_templatebase.php',
			'Smarty_Internal_TemplateCompilerBase' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_templatecompilerbase.php',
			'Smarty_Internal_Templatelexer' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_templatelexer.php',
			'TP_yyToken' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_templateparser.php',
			'TP_yyStackEntry' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_templateparser.php',
			'Smarty_Internal_Templateparser' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_templateparser.php',
			'Smarty_Internal_Utility' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_utility.php',
			'Smarty_Internal_Write_File' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_internal_write_file.php',
			'Smarty_Resource' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_resource.php',
			'Smarty_Template_Source' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_resource.php',
			'Smarty_Template_Compiled' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_resource.php',
			'Smarty_Resource_Custom' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_resource_custom.php',
			'Smarty_Resource_Recompiled' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_resource_recompiled.php',
			'Smarty_Resource_Uncompiled' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_resource_uncompiled.php',
			'Smarty_Security' => __DIR__ . '/vendors/smarty-3.1.13/sysplugins/smarty_security.php',
        );
    }
    if (isset($map[$className])) {
        /** @noinspection PhpIncludeInspection */
        require($map[$className]);
        return true;
    }
    return false;
});