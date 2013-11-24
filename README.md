WsdlToPhpGenerator [![Scrutinizer Quality Score](https://scrutinizer-ci.com/g/mikaelcom/WsdlToPhp/badges/quality-score.png?s=a52087390e8668b380c1b68fb49a016e8d318615)](https://scrutinizer-ci.com/g/mikaelcom/WsdlToPhp/)
=========

Generate PHP classes based on a WSDL

This package allows to programmatically send request to a SOAP service using PHP classes. In order to do that, this class generates each class for each request and each request parameters and each request response. Each class is stored in a hierarchical folder/sub-folder system. The SOAP client is then abstracted and you only deal with objects representing the WSDL types.

Generated classes are fully documented with php doc block according to phpDocumentor. It retrieves the documentation tags from the WSDL and its schemas and defines used methods, return type, parameter type, etc.

Test this library online here : http://www.wsdltophp.com/

Read the PHPDoc online here : http://phpdoc.wsdltophp.com/

[![Donate](https://www.paypalobjects.com/en_US/i/btn/btn_donate_SM.gif)](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=KXBVCHP3UDQPL)

Tutorial
========

The best way to understand how to use this code is to first look at the samples-generator.php file located in the root directory.
This file shows you how to basically instanciate the WsdlToPhpGenerator class. This class has options in order to change its behaviour.

Lets have a look to see how to use it basically:
```php
/* Create an instance of the generator with the WSDL from which to generate the package */
$w = new WsdlToPhpGenerator('https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl');
/* Call after the instanciation or before a new generation in order the modify the generator behaviour */
// Activate the autoload file generation
WsdlToPhpGenerator::setOptionGenerateAutoloadFile(true);
// Activate the generation and the use of the generic WsdlClass from which each generated class will inherit
WsdlToPhpGenerator::setOptionGenerateWsdlClassFile(true);
// Allows to get the SOAP response as a parameter of the generated PHP response class or not
// It depends on the SOAP Web service, some returns the Response object, others return the the data of the response object
WsdlToPhpGenerator::setOptionResponseAsWsdlObject(false);
// Very usefull if you're not familiartr with SOAP, it generates a sample file that contains all the possible
// methods provided by the SOAP Web service and first parameters level
WsdlToPhpGenerator::setOptionGenerateTutorialFile(true);
// Depending on the SOAP Web service, you may have to send an array, mySoapMethod(array('param_1'=>'value_1','param_2'=>'value_2')),
// or send parameters as the method parameters, mySoapMethod('value_1','value_2')
WsdlToPhpGenerator::setOptionSendArrayAsParameter(true);
// Used for certain SOAP Web service such as certain Microsoft Application Web service, you may have to send the parameter as
// mySoapMethod(array('parameters'=>array('param_1'=>'value_1','param_2'=>'value_2')))->parameters and get the response in the parameters response property
WsdlToPhpGenerator::setOptionSendParametersAsArray(false);
// Depending on your preferences, classes are generated under folders according to their name. The name is splitted at each upper character
// so each classes is contained by folders or not if you choose WsdlToPhpGenerator::OPT_CAT_NONE_NAME
WsdlToPhpGenerator::setOptionCategory(WsdlToPhpGenerator::OPT_CAT_START_NAME);
// Depending on your preferences, classes are generated under subfolders according to their name. The name is splitted at each upper character
// so each classes is contained by sub folders or not if you choose WsdlToPhpGenerator::OPT_SUB_CAT_NONE_NAME
WsdlToPhpGenerator::setOptionSubCategory(WsdlToPhpGenerator::OPT_SUB_CAT_END_NAME);
// Depending on your preferences, SOAP operations are gathered in mutliple classes as methods according to their name. The name is splitted at each upper character
// so each operation is contained by classes named with the start of the operation name (WsdlToPhpGenerator::OPT_GATH_METH_START_NAME) or the end (WsdlToPhpGenerator::OPT_GATH_METH_END_NAME)
WsdlToPhpGenerator::setOptionGatherMethods(WsdlToPhpGenerator::OPT_GATH_METH_START_NAME);
// Add comment to each generated file to retrieve them in the PHP Documentation
WsdlToPhpGenerator::setOptionAddComments(array(
													'date'=>date('Y-m-d'),
													'author'=>'Mikaël DELSOL',
													'version'=>1));
// Launch the generation indicating the name to use to generated the classes and the destination directory
$w->generateClasses('PayPal',dirname(__FILE__) . '/PayPal/');
// After the generation, you can analyse the audit data collected during the generation by calling the method getAudit() as below
// It returns an array with lots of informations about time spent at each generation step
print_r($w->getAudit());
```

Feel free to make request for improvements.
