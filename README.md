WsdlToPhpGenerator
=========

Generate PHP classes based on a WSDL

This package allows to programmatically send request to a SOAP service using PHP classes. In order to do that, this class generates each class for each request and each request parameters and each request response. Each class is stored in a hierarchical folder/sub-folder system. The SOAP client is then abstracted and you only deal with objects representing the WSDL types.
It uses eZ Components, ezcPhpGenerator, in order to generate php files.

Test this library online here : http://www.WsdlToPhpGenerator.com/

Read the PHPDoc online here : http://phpdoc.WsdlToPhpGenerator.com/

[![Donate](https://www.paypalobjects.com/en_US/i/btn/btn_donate_SM.gif)](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=KXBVCHP3UDQPL)

Tutorial
========

The best way to understand how to use this code is to first look at the samples-generator.php file located in the root directory.
This file shows you how to basically instanciate the WsdlToPhpGenerator class. This class has options in order to change its behaviour.

The options can be set by two way :
 - on the instanciation : 
   - by passing an associative array with WsdlToPhpGenerator constants and the appropriate value
   - by calling the WsdlToPhpGenerator static methods associated to the WsdlToPhpGenerator constants

List of options :
  - WsdlToPhpGenerator::OPT_CAT_KEY / WsdlToPhpGenerator::setOptionCategory() : used to define the main categorization (hierarchical folders based on a part of the operation's name, splitted using the upper caracters) of generated classes. Possible values :
      - WsdlToPhpGenerator::OPT_CAT_END_NAME : based on the end of the operation name
      - WsdlToPhpGenerator::OPT_CAT_START_NAME : based on the beginning of the operation name
      - WsdlToPhpGenerator::OPT_CAT_NONE_NAME : no main categorization 
  - WsdlToPhpGenerator::OPT_GEN_AUTOLOAD_KEY / WsdlToPhpGenerator::setOptionGenerateAutoloadFile() : enable or disable the generation of the autoload file. The autoload file is useless if you have a clever autoloader. Possible values : true or false
  - WsdlToPhpGenerator::OPT_GEN_TUTORIAL_KEY / WsdlToPhpGenerator::setOptionGenerateTutorialFile() : enable or disable the generation of the tutorial/sample file in order to have the starting code to use the generated classes. Possible values : true or false
  - WsdlToPhpGenerator::OPT_SUB_CAT_KEY / WsdlToPhpGenerator::setOptionSubCategory() : same usage than the main categorization except that it's for the sub categorization, usefull if you use the main categorization. Possible values :
      - WsdlToPhpGenerator::OPT_SUB_CAT_END_NAME : based on the end of the operation name (after the main category)
      - WsdlToPhpGenerator::OPT_SUB_CAT_START_NAME : based on the beginning of the operation name (before the main category)
      - WsdlToPhpGenerator::OPT_SUB_CAT_NONE_NAME : no sub categorization 
  - WsdlToPhpGenerator::OPT_GEN_WSDL_CLASS_KEY / WsdlToPhpGenerator::setOptionGenerateWsdlClassFile() : enable or disable the generation of the WsdlClass which will be the main class from which each generated class will inherit. You should always enable this option cause this class has several usefull methods and is the core model to initialize the SoapClient and even more. Possible values : true or false
  - WsdlToPhpGenerator::OPT_GATH_METH_KEY / WsdlToPhpGenerator::setOptionGatherMethods() : classes are generated to gather operations based on the opration's name. In order to gather operations based on their name, you decide how the operations must be gathered accordingly to the operation's name. Its basically the same behaviour than for categorizing the classes by folders. Possible values :
      - WsdlToPhpGenerator::OPT_GATH_METH_END_NAME : based on the end of the operation name
      - WsdlToPhpGenerator::OPT_GATH_METH_START_NAME : based on the beginning of the operation name
  - WsdlToPhpGenerator::OPT_SEND_PARAM_AS_ARRAY_KEY / WsdlToPhpGenerator::setOptionSendArrayAsParameter() : enable or disable the usage of an associative array containing all the parameters identified by their name when calling the operation instead of passing as many parameters as the operations declares. Possible values : true or false
  - WsdlToPhpGenerator::OPT_RESPONSE_AS_WSDL_OBJECT_KEY / WsdlToPhpGenerator::setOptionResponseAsWsdlObject() : enable or disable the instanciation of an object when getting the response in order to have a WsdlClass generated class object. Not needed in every case. It depends on the called WebService. Possible value : true or false 
  - WsdlToPhpGenerator::OPT_GENERIC_CONSTANTS_NAMES_KEY / WsdlToPhpGenerator::setOptionGenericConstantsNames() : enable or disable the usage of generic name for constants. The constants are generated when you have enumerations in the WSDL. If enabled, instead of having constant's name cleaned caring the value in its name, it is named with an auto-incremental intger stringed suffixing a fixed string. Possible values : true or false
  - WsdlToPhpGenerator::OPT_INHERITS_FROM_IDENTIFIER_KEY / WsdlToPhpGenerator::setOptionInheritsClassIdentifier() : allow to define the name of the possible main structs from which others struct can ihnerit. By default, the inheritance is automatically detected from the WSDL. Possible value : empty string or valid string
  - WsdlToPhpGenerator::OPT_SEND_PARAMETERS_AS_ARRAY_KEY / WsdlToPhpGenerator::setOptionSendParametersAsArray() : is linked with the WsdlToPhpGenerator::OPT_SEND_PARAM_AS_ARRAY_KEY option. It ensures that parameters are sent within an array. These options are usefull when calling Windows WebServices such as SharePoint. Possible values : true or false

I advise you to use the option WsdlToPhpGenerator::OPT_GEN_TUTORIAL_KEY. It is very usefull if you want to have the starting code to use the generated classes.

Feel free to make request for improvements.
