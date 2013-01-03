<?php
/**
 * File for class WsdlToPhpGenerator
 * @package WsdlToPhpGenerator
 * @date 19/12/2012
 */
/**
 * Class WsdlToPhpGenerator
 * This class replaces the original WsdlToPhp class.
 * It uses the WsdlToPhpModel's classes (WsdlToPhpStruct, WsdlToPhpService, WsdlToPhpFunction, WsdlToPhpStructAttribute, WsdlToPhpStructValue) in order to rationalize informations.
 * From now, each class is clearly identified depending on its behaviour :
 * - {PackageName}Service* : class which gathers the operations/functions (based on their name)
 * - {PackageName}Struct* : class which represents a struct type which can be used either for requesting or catching response
 * - {PackageName}Enum* : class which represents an enumeration of values. Each value is defined with a constant
 * - {PackageName}WsdlClass : mother class of all generated class if enabled. This class defines all the generic methods and the needed configurations/methods to call the SOAP WS
 * - {PackageName}ClassMap : class that constains one final public static method which returns the array to map structs/enums to generated classes
 * Test case examples
 * "Full" documentation (functions, structs, enumerations, values) with "virual" structs inheritance documentation : 
 * -	http://developer.ebay.com/webservices/latest/ebaySvc.wsdl
 * -	https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl
 * -	http://queue.amazonaws.com/doc/2012-11-05/QueueService.wsdl
 * Restriction on struct attributes : 
 * -	https://services.pwsdemo.com/WSDL/PwsDemo_creditcardtransactionservice.xml
 * -	http://api.temando.com/schema/2009_06/server.wsdl
 * -	http://info.portaldasfinancas.gov.pt/NR/rdonlyres/02357996-29FC-4F11-9F1D-6EA2B9210D60/0/factemiws.wsdl
 * Operations or struct attributes with an illegal character (ex : ., -) : 
 * -	http://api.fromdoppler.com/Default.asmx?WSDL
 * -	https://webapi.aukro.cz/uploader.php?wsdl
 * Simple function parameter (not a struct) : 
 * -	http://traveltek-importer.planetcruiseluxury.co.uk/region.wsdl
 * Enumerations with two similar values (ex : y and Y in RecurringFlagType) :
 * -	https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl
 * Enumerations embedded in an element :
 * -	http://92.70.240.139/webservices_test/?WSDL
 * Lots of import tags :
 * -	http://secapp.euroconsumers.org/partnerservice/PartnerService.svc?wsdl
 * -	https://webservices.netsuite.com/wsdl/v2012_2_0/netsuite.wsdl
 * -	http://mobile.esseginformatica.com:8704/?wsdl
 * -	https://api.bullhornstaffing.com/webservices-2.5/?wsdl
 * -	http://46.31.56.162/abertis/Sos.asmx?WSDL
 * "Deep", numerous inheritance in struct classes :
 * -	https://moa.mazdaeur.com/mud-services/ws/PartnerService?wsdl
 * - 	http://developer.ebay.com/webservices/latest/ebaySvc.wsdl
 * -	https://www.tipsport.cz/webtip/CommonBettingWS?WSDL
 * -	https://www.tipsport.cz/webtip/LiveBettingWS?WSDL
 * -	https://webservices.netsuite.com/wsdl/v2012_2_0/netsuite.wsdl
 * -	https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl
 * -	http://mobile.esseginformatica.com:8704/?wsdl
 * -	https://api.bullhornstaffing.com/webservices-2.5/?wsdl
 * -	http://46.31.56.162/abertis/Sos.asmx?WSDL (real deep inheritance from AbstractGMLType)
 * Multiple service operations returns the same response type (getResult() doc comment must return one type of each) :
 * - 	https://secure.dev.logalty.es/lgt/logteca/emisor/services/IncomingServiceWSI?wsdl
 * -	http://partners.a2zinc.net/dataservices/public/exhibitorprovider.asmx?WSDL
 * Documentation on WSDL (must be found in the generated *WsdlClass) doc comment :
 * -	http://iplaypen.globelabs.com.ph:1881/axis2/services/Platform?wsdl
 * -	https://oivs.mvtrip.alabama.gov/service/XMLExchangeServiceCore.asmx?WSDL
 * PHP reserved keyword in operation name (ex : list), replaced by _{keyword} : 
 * -	https://api5.successfactors.eu/sfapi/v1/soap12?wsdl
 * Send ArrayAsParameter and ParametersAsArray case :
 * - 	http://api.bing.net/search.wsdl
 * Send parameters separately :
 * - 	http://www.ovh.com/soapi/soapi-dlw-1.54.wsdl
 * Struct attribute named _ :
 * - 	http://46.31.56.162/abertis/Sos.asmx?WSDL (DirectPositionType, StringOrRefType, AreaType, etc.)
 * From now, it can generate service function from RPC style SOAP WS
 * RPC style :
 * -	http://www.ovh.com/soapi/soapi-re-1.54.wsdl
 * -	http://postlinks.com/api/soap/v1.1/postlinks.wsdl
 * -	http://psgsa.dyndns.org:8020/gana/crm/service/v4_1/soap.php?wsdl
 * -	http://www.electre.com/WebService/search.asmx?WSDL
 * -	http://www.mobilefish.com/services/web_service/countries.php?wsdl
 * -	http://webservices.seek.com.au/FastLanePlus.asmx?WSDL
 * -	https://webapi.aukro.cz/uploader.php?wsdl
 * -	http://castonclients.com/fuelcircle/api/member.php?wsdl
 * -	https://www.fieldnation.com/api/v3.5/fieldnation.wsdl
 * -	https://gateway2.pagosonline.net/ws/WebServicesClientesUT?wsdl
 * -	http://webservices.seek.com.au/webserviceauthenticator.asmx?WSDL
 * -	http://webservices.seek.com.au/fastlaneplus.asmx?WSDL
 * -	https://80.77.87.229:2443/soap?wsdl
 * -	http://www.mantisbt.org/demo/api/soap/mantisconnect.php?wsdl
 * -	http://mira.16.1.t1.connectivegames.com/axis/services/RemoteAffiliateService?wsdl
 * -	http://graphical.weather.gov/xml/DWMLgen/wsdl/ndfdXML.wsdl
 * -	https://www.mygate.co.za/enterprise/4x0x0/ePayService.cfc?wsdl
 * -	http://59.162.33.102/HotelXML_V1.2/services/HotelAvailSearch?wsdl
 * -	http://api.4shared.com/jax2/DesktopApp?wsdl
 * -	http://www.eaglepictures.com/services.php/Eagle.wsdl
 * -	http://online.axiomtelecom.com/staging/api/v2_soap/?wsdl
 * -	http://www.konakart.com/konakart/services/KKWebServiceEng?wsdl
 * -	http://soamoa.org:9292/artistRegistry?WSDL
 * -	http://pgw-dev.aora.tv/trio/index.php?wsdl
 * -	http://npg.dl.ac.uk/MIDAS/MIDASWebServices/MIDASWebServices/VMEAccessServer.wsdl
 * From now, method without any parameter are generated well
 * A method without any parameter :
 * -	http://verkopen.marktplaats.nl/soap/mpplt.php?wsdl (GetCategoryList, GetCategoryListRevision, GetPriceTypeList, GetPriceTypeListRevision, GetAttributeListRevision, GetSystemTimestamp)
 * -	https://gateway2.pagosonline.net/ws/WebServicesClientesUT?wsdl (doInit(), TestServiceGet, TestServiceLeer)
 * @package WsdlToPhpGenerator
 * @date 19/12/2012
 */
class WsdlToPhpGenerator extends SoapClient
{
	/**
	 * Set categorization of classes based on the end of the name of the struct or the function
	 * The catagory set the tree folders
	 * @var int
	 */
	const OPT_CAT_END_NAME = 0;
	/**
	 * Set categorization of classes based on the start of the name of the struct or the function
	 * The catagory set the tree folders
	 * @var int
	 */
	const OPT_CAT_START_NAME = 1;
	/**
	 * Set uncategorization of classes
	 * All files are put in the same folder
	 * @var int
	 */
	const OPT_CAT_NONE_NAME = 2;
	/**
	 * Index to set categorization when calling the constructor
	 * @var string
	 */
	const OPT_CAT_KEY = 'option_category_key';
	/**
	 * Set subcategorization of classes based on the end of the name of the struct or the function
	 * The catagory set the tree folders
	 * @var int
	 */
	const OPT_SUB_CAT_END_NAME = 0;
	/**
	 * Set subcategorization of classes based on the start of the name of the struct or the function
	 * The catagory set the tree folders
	 * @var int
	 */
	const OPT_SUB_CAT_START_NAME = 1;
	/**
	 * Set uncategorization of classes
	 * All files are put in the same folder
	 * @var int
	 */
	const OPT_SUB_CAT_NONE_NAME = 2;
	/**
	 * Index to set subcategorization when calling the constructor
	 * @var string
	 */
	const OPT_SUB_CAT_KEY = 'option_sub_category_key';
	/**
	 * Set gathering mode of mtehod per class based on the end of the name of the operation
	 * @var int
	 */
	const OPT_GATH_METH_END_NAME = 0;
	/**
	 * Set gathering mode of mtehod per class based on the start of the name of the operation
	 * @var int
	 */
	const OPT_GATH_METH_START_NAME = 1;
	/**
	 * Index to set gathering methods when calling the constructor
	 * @var string
	 */
	const OPT_GATH_METH_KEY = 'option_gather_methods_key';
	/**
	 * Index to set gathering methods when calling the constructor
	 * @var string
	 */
	const OPT_SEND_PARAM_AS_ARRAY_KEY = 'option_send_param_as_array_key';
	/**
	 * Index to enable/disable autoload file generation
	 * @var string
	 */
	const OPT_GEN_AUTOLOAD_KEY = 'option_generate_autaload_file_key';
	/**
	 * Index to enable/disable autoload file generation
	 * @var string
	 */
	const OPT_GEN_WSDL_CLASS_KEY = 'option_generate_wsdl_class_key';
	/**
	 * Index to enable/disable encapsulation of response or not in the response object
	 * @var string
	 */
	const OPT_RESPONSE_AS_WSDL_OBJECT_KEY = 'option_response_as_wsdl_object_key';
	/**
	 * Index to enable/disable encapsulation of request in array with 'parameters' as main index
	 * @var string
	 */
	const OPT_SEND_PARAMETERS_AS_ARRAY_KEY = 'option_send_parameters_as_array_key';
	/**
	 * Index to set string that points bases classes from which some classes inherits
	 * @var string
	 */
	const OPT_INHERITS_FROM_IDENTIFIER_KEY = 'option_inherits_from_identifier_key';
	/**
	 * Index to set the generation of contants names based on the enumeration name with an incremental value
	 * @var string
	 */
	const OPT_GENERIC_CONSTANTS_NAMES_KEY = 'option_generic_constants_names_key';
	/**
	 * Index to enable/disable tutorial file generation
	 * @var string
	 */
	const OPT_GEN_TUTORIAL_KEY = 'option_generate_tutorial_file_key';
	/**
	 * Structs array
	 * @var array
	 */
	private $structs;
	/**
	 * Services arrays
	 * @var array
	 */
	private $services;
	/**
	 * Name of the package to use
	 * @var string
	 */
	private static $packageName;
	/**
	 * Wsdl lists
	 * @var array
	 */
	private $wsdls;
	/**
	 * Option to categorize classes
	 * @var int
	 */
	private static $optionCategory;
	/**
	 * Option to subcategorize classes
	 * @var int
	 */
	private static $optionSubCategory;
	/**
	 * Option to define how to gather methods by classes
	 * @var int
	 */
	private static $optionGatherMethods;
	/**
	 * Option to set that parameters to soap call must be contained by an array where indexex are the parameters name
	 * @var bool
	 */
	private static $optionSendArrayAsParameter;
	/**
	 * Option to enabled/disable autoload file generation
	 * @var bool
	 */
	private static $optionGenerateAutoloadFile;
	/**
	 * Option to enabled/disable wsdl class file generation
	 * @var bool
	 */
	private static $optionGenerateWsdlClassFile;
	/**
	 * Option to enable/disable encapsulation of response or not in the response class
	 * @var bool
	 */
	private static $optionResponseAsWsdlObject;
	/**
	 * Option to enable/disable encapsulation of request in array with 'parameters' as main index
	 * @var bool
	 */
	private static $optionSendParametersAsArray;
	/**
	 * Option to set string that points bases classes from which some classes inherits
	 * @var string
	 */
	private static $optionInheritsClassIdentifier;
	/**
	 * Option to set set the generation of contants names based on the enumeration name with an incremental value
	 * @var string
	 */
	private static $optionGenericConstantsNames;
	/**
	 * Option to enabled/disable tutorial file generation
	 * @var bool
	 */
	private static $optionGenerateTutorialFile;
	/**
	 * Constructor
	 * @uses SoapClient::__construct()
	 * @uses WsdlToPhpGenerator::setStructs()
	 * @uses WsdlToPhpGenerator::setServices()
	 * @uses WsdlToPhpGenerator::setWsdls()
	 * @uses WsdlToPhpGenerator::addWsdl()
	 * @uses WsdlToPhpGenerator::setOptionCategory()
	 * @uses WsdlToPhpGenerator::setOptionGenerateAutoloadFile()
	 * @uses WsdlToPhpGenerator::setOptionGenerateTutorialFile()
	 * @uses WsdlToPhpGenerator::setOptionSubCategory()
	 * @uses WsdlToPhpGenerator::setOptionGenerateWsdlClassFile()
	 * @uses WsdlToPhpGenerator::setOptionGatherMethods()
	 * @uses WsdlToPhpGenerator::setOptionSendArrayAsParameter()
	 * @uses WsdlToPhpGenerator::setOptionResponseAsWsdlObject()
	 * @uses WsdlToPhpGenerator::setOptionGenericConstantsNames()
	 * @uses WsdlToPhpGenerator::setOptionInheritsClassIdentifier()
	 * @uses WsdlToPhpGenerator::setOptionSendParametersAsArray()
	 * @uses WsdlToPhpGenerator::OPT_CAT_KEY
	 * @uses WsdlToPhpGenerator::OPT_CAT_START_NAME
	 * @uses WsdlToPhpGenerator::OPT_GEN_AUTOLOAD_KEY
	 * @uses WsdlToPhpGenerator::OPT_GEN_TUTORIAL_KEY
	 * @uses WsdlToPhpGenerator::OPT_SUB_CAT_KEY
	 * @uses WsdlToPhpGenerator::OPT_SUB_CAT_START_NAME
	 * @uses WsdlToPhpGenerator::OPT_GEN_WSDL_CLASS_KEY
	 * @uses WsdlToPhpGenerator::OPT_GATH_METH_KEY
	 * @uses WsdlToPhpGenerator::OPT_GATH_METH_START_NAME
	 * @uses WsdlToPhpGenerator::OPT_SEND_PARAM_AS_ARRAY_KEY
	 * @uses WsdlToPhpGenerator::OPT_RESPONSE_AS_WSDL_OBJECT_KEY
	 * @uses WsdlToPhpGenerator::OPT_GENERIC_CONSTANTS_NAMES_KEY
	 * @uses WsdlToPhpGenerator::OPT_INHERITS_FROM_IDENTIFIER_KEY
	 * @uses WsdlToPhpGenerator::OPT_SEND_PARAMETERS_AS_ARRAY_KEY
	 * @param string $_pathToWsdl WSDL url or path
	 * @param string $_login login to get access to WSDL
	 * @param string $_password password to get access to WSDL
	 * @param array $_options associative array between WsdlToPhpGenerator options keys and values
	 * @param array $_wsdlOptions options to get access to WSDL
	 * @return WsdlToPhpGenerator
	 */
	public function __construct($_pathToWsdl,$_login = false,$_password = false,array $_options = array(),array $_wsdlOptions = array())
	{
		$pathToWsdl = trim($_pathToWsdl);
		/**
		 * Options for WSDL
		 */
		$options = $_wsdlOptions;
		$options['trace'] = true;
		$options['exceptions'] = true;
		$options['cache_wsdl'] = WSDL_CACHE_NONE;
		$options['soap_version'] = SOAP_1_1;
		if(!empty($_login) && !empty($_password))
		{
			$options['login'] = $_login;
			$options['password'] = $_password;
		}
		$this->setStructs();
		$this->setServices();
		$this->setWsdls();
		/**
		 * Construct
		 */
		try
		{
			parent::__construct($pathToWsdl,$options);
		}
		catch(SoapFault $fault)
		{
			//print_r($fault);
			$options['soap_version'] = SOAP_1_2;
			try
			{
				parent::__construct($pathToWsdl,$options);
			}
			catch(SoapFault $fault)
			{
				//print_r($fault);
			}
		}
		$this->addWsdl($pathToWsdl);
		/**
		 * Set attributes
		 */
		self::setOptionCategory(array_key_exists(self::OPT_CAT_KEY,$_options)?$_options[self::OPT_CAT_KEY]:self::OPT_CAT_START_NAME);
		self::setOptionGenerateAutoloadFile(array_key_exists(self::OPT_GEN_AUTOLOAD_KEY,$_options)?$_options[self::OPT_GEN_AUTOLOAD_KEY]:false);
		self::setOptionGenerateTutorialFile(array_key_exists(self::OPT_GEN_TUTORIAL_KEY,$_options)?$_options[self::OPT_GEN_TUTORIAL_KEY]:false);
		self::setOptionSubCategory(array_key_exists(self::OPT_SUB_CAT_KEY,$_options)?$_options[self::OPT_SUB_CAT_KEY]:self::OPT_SUB_CAT_START_NAME);
		self::setOptionGenerateWsdlClassFile(array_key_exists(self::OPT_GEN_WSDL_CLASS_KEY,$_options)?$_options[self::OPT_GEN_WSDL_CLASS_KEY]:false);
		self::setOptionGatherMethods(array_key_exists(self::OPT_GATH_METH_KEY,$_options)?$_options[self::OPT_GATH_METH_KEY]:self::OPT_GATH_METH_START_NAME);
		self::setOptionSendArrayAsParameter(array_key_exists(self::OPT_SEND_PARAM_AS_ARRAY_KEY,$_options)?$_options[self::OPT_SEND_PARAM_AS_ARRAY_KEY]:false);
		self::setOptionResponseAsWsdlObject(array_key_exists(self::OPT_RESPONSE_AS_WSDL_OBJECT_KEY,$_options)?$_options[self::OPT_RESPONSE_AS_WSDL_OBJECT_KEY]:false);
		self::setOptionGenericConstantsNames(array_key_exists(self::OPT_GENERIC_CONSTANTS_NAMES_KEY,$_options)?$_options[self::OPT_GENERIC_CONSTANTS_NAMES_KEY]:false);
		self::setOptionInheritsClassIdentifier(array_key_exists(self::OPT_INHERITS_FROM_IDENTIFIER_KEY,$_options)?$_options[self::OPT_INHERITS_FROM_IDENTIFIER_KEY]:'');
		self::setOptionSendParametersAsArray(array_key_exists(self::OPT_SEND_PARAMETERS_AS_ARRAY_KEY,$_options)?$_options[self::OPT_SEND_PARAMETERS_AS_ARRAY_KEY]:false);
	}
	/**
	 * Generate all classes based on options
	 * @uses WsdlToPhpGenerator::setPackageName()
	 * @uses WsdlToPhpGenerator::getStructs()
	 * @uses WsdlToPhpGenerator::initStructs()
	 * @uses WsdlToPhpGenerator::getServices()
	 * @uses WsdlToPhpGenerator::initServices()
	 * @uses WsdlToPhpGenerator::loadWsdls()
	 * @uses WsdlToPhpGenerator::getOptionGenerateWsdlClassFile()
	 * @uses WsdlToPhpGenerator::generateWsdlClassFile()
	 * @uses WsdlToPhpGenerator::setOptionGenerateWsdlClassFile()
	 * @uses WsdlToPhpGenerator::generateStructsClasses()
	 * @uses WsdlToPhpGenerator::generateServicesClasses()
	 * @uses WsdlToPhpGenerator::generateClassMap()
	 * @uses WsdlToPhpGenerator::getOptionGenerateAutoloadFile()
	 * @uses WsdlToPhpGenerator::generateAutoloadFile()
	 * @uses WsdlToPhpGenerator::getOptionGenerateTutorialFile()
	 * @uses WsdlToPhpGenerator::generateTutorialFile()
	 * @param string $_packageName the string used to prefix all generate classes
	 * @param string $_rootDirectory path where classes should be generated
	 * @param int $_rootDirectoryRights system rights to apply on folder
	 * @param bool $_createRootDirectory create root directory if not exist
	 * @return bool true|false depending on the well creation fot the root directory
	 */
	public function generateClasses($_packageName,$_rootDirectory,$_rootDirectoryRights = 0775,$_createRootDirectory = true)
	{
		self::setPackageName($_packageName);
		$rootDirectory = $_rootDirectory . (substr($_rootDirectory,-1) != '/'?'/':'');
		/**
		 * Root directory
		 */
		if(!is_dir($rootDirectory) && !$_createRootDirectory)
			return false;
		elseif($_createRootDirectory)
			@mkdir($rootDirectory,$_rootDirectoryRights);
		/**
		 * Begin process
		 */
		if(is_dir($rootDirectory))
		{
			/**
			 * Initialize elements
			 */
			$init = false;
			if(!count($this->getStructs()))
				$this->initStructs();
			else
				$init = true;
			if(!count($this->getServices()))
				$this->initServices();
			if(!$init && count($this->wsdls))
				$this->loadWsdls(implode('',array_slice(array_keys($this->wsdls),0,1)));
			/**
			 * Generate Wsdl Class ?
			 */
			if(self::getOptionGenerateWsdlClassFile())
				$wsdlClassFile = $this->generateWsdlClassFile($rootDirectory);
			else
				$wsdlClassFile = array();
			if(!count($wsdlClassFile))
				self::setOptionGenerateWsdlClassFile(false);
			/**
			 * Generate classes files
			 */
			$structsClassesFiles = $this->generateStructsClasses($rootDirectory,$_rootDirectoryRights);
			$servicesClassesFiles = $this->generateServicesClasses($rootDirectory,$_rootDirectoryRights);
			$classMapFile = $this->generateClassMap($rootDirectory);
			/**
			 * Generate autoload ?
			 */
			if(self::getOptionGenerateAutoloadFile())
				self::generateAutoloadFile($rootDirectory,array_merge($wsdlClassFile,$structsClassesFiles,$servicesClassesFiles,$classMapFile));
			/**
			 * Generate tutorial ?
			 */
			if(self::getOptionGenerateTutorialFile())
				$this->generateTutorialFile($rootDirectory,$servicesClassesFiles);
			return true;
		}
		else
			return false;
	}
	/**
	 * Initialize structs defined in WSDL :
	 * - Get structs defined
	 * - Parse each struct definition
	 * - Analyze each struct paramaters
	 * @uses SoapClient::__getTypes()
	 * @uses WsdlToPhpGenerator::addStruct()
	 * @uses WsdlToPhpGenerator::addVirtualStruct()
	 * @tutorial restriction aren't get with structs, see loadWsdls :
	 * <xsd:simpleType name="SearchOption">
	 * --<xsd:restriction base="xsd:string">
	 * ----<xsd:enumeration value="DisableLocationDetection"/>
	 * ----<xsd:enumeration value="EnableHighlighting"/>
	 * --</xsd:restriction>
	 * </xsd:simpleType>
	 * Example on how to send them : http://msdn.microsoft.com/en-us/library/dd250961
	 * @return bool true|false depending on the well types catching from the WSDL
	 */
	private function initStructs()
	{
		$types = $this->__getTypes();
		if(is_array($types) && count($types))
		{
			$structsDefined = array();
			$structsParams = array();
			foreach($types as $type)
			{
				/**
				 * Remove useless break line, tabs
				 */
				$type = str_replace("\r",'',$type);
				$type = str_replace("\n",'',$type);
				$type = str_replace("\t",'',$type);
				/**
				 * Remove curly braces
				 */
				$type = str_replace("{",'',$type);
				$type = str_replace("}",'',$type);
				/**
				 * Remove brackets
				 */
				$type = str_replace("[",'',$type);
				$type = str_replace("]",'',$type);
				/**
				 * Add space to parse it
				 */
				$type = str_replace(';',' ;',$type);
				/**
				 * Remove duplicate spaces
				 */
				$type = preg_replace('/[\s]+/',' ',$type);
				/**
				 * Explode definition based on format :
				 * struct {struct_name} {paramName} {paramValue} ;[{paramName} {paramValue} ;]+
				 */
				$typeDef = explode(' ',$type);
				/**
				 * Get struct definition start
				 */
				$struct = $typeDef[0];
				if($struct != 'struct')
				{
					if(!empty($typeDef[1]))
						$this->addVirtualStruct($typeDef[1]);
					continue;
				}
				/**
				 * Catch struct name
				 */
				$structName = $typeDef[1];
				/**
				 * Struct already known ?
				 */
				if(in_array($structName,$structsDefined))
					continue;
				/**
				 * Collect struct params
				 */
				$start = false;
				$then = false;
				$end = false;
				$structParamName = '';
				$structParamType = '';
				$typeDefCount = count($typeDef);
				if($typeDefCount > 3)
				{
					for($i = 2;$i < $typeDefCount;$i++)
					{
						$typeVal = $typeDef[$i];
						if($typeVal != '{' && is_string($typeVal) && !empty($typeVal) && !$start)
						{
							$end = false;
							$then = false;
							$start = true;
						}
						if($typeVal === ';')
						{
							$end = true;
							$then = false;
							$start = false;
						}
						if($then)
						{
							$structParamName = $typeVal;
							if(!empty($structParamType) && !empty($structParamName) && !empty($structName))
							{
								$this->addStruct($structName,$structParamName,$structParamType);
								$structsDefined[] = $structName;
								$structParamName = '';
								$structParamType = '';
							}
						}
						if($start && !$then)
						{
							/**
							 * Replace some weird definition to known valid type
							 */
							$typeVal = str_replace('<anyXML>','DOMDocument',$typeVal);
							$structParamType = $typeVal;
							$then = true;
						}
					}
				}
				else
					$this->addStruct($structName,$structParamName,$structParamType);
			}
			return true;
		}
		else
			return false;
	}
	/**
	 * Generate structs classes based on structs collected
	 * @uses WsdlToPhpGenerator::getStructs()
	 * @uses WsdlToPhpGenerator::getDirectory()
	 * @uses WsdlToPhpGenerator::populateFile()
	 * @uses WsdlToPhpModel::getName()
	 * @uses WsdlToPhpModel::getModelByName()
	 * @uses WsdlToPhpModel::getInheritance()
	 * @uses WsdlToPhpModel::getCleanName()
	 * @uses WsdlToPhpModel::getPackagedName()
	 * @uses WsdlToPhpModel::getClassDeclaration()
	 * @uses WsdlToPhpStruct::getIsStruct()
	 * @uses ezcPhpGenerator::finish()
	 * @param string $_rootDirectory the directory
	 * @param int $_rootDirectoryRights the directory permissions
	 */
	private function generateStructsClasses($_rootDirectory,$_rootDirectoryRights)
	{
		$structs = $this->getStructs();
		$structsClassesFiles = array();
		if(count($structs))
		{
			/**
			 * Ordering structs in order to generate mother class first and to put them on top in the autoload file
			 */
			$structsToGenerateDone = array();
			foreach($structs as $index=>$struct)
			{
				if(!array_key_exists($struct->getName(),$structsToGenerateDone))
					$structsToGenerateDone[$struct->getName()] = 0;
				$model = WsdlToPhpModel::getModelByName($struct->getInheritance());
				while($model && $model->getIsStruct())
				{
					if(!array_key_exists($model->getName(),$structsToGenerateDone))
						$structsToGenerateDone[$model->getName()] = 1;
					else
						$structsToGenerateDone[$model->getName()]++;
					$model = WsdlToPhpModel::getModelByName($model->getInheritance());
				}
			}
			/**
			 * Order by priority desc
			 */
			arsort($structsToGenerateDone);
			$structTmp = $structs;
			$structs = array();
			foreach($structsToGenerateDone as $structName=>$structPriority)
				$structs[$structName] = $structTmp[$structName];
			unset($structTmp,$structsToGenerateDone);
			foreach($structs as $structName=>$struct)
			{
				if(!$struct->getIsStruct())
					continue;
				$elementFolder = $this->getDirectory($_rootDirectory,$_rootDirectoryRights,$struct->getCleanName());
				$structsClassesFiles[] = $structClassFileName = $elementFolder . $struct->getPackagedName() . '.php';
				/**
				 * Generate file
				 */
				self::populateFile($structClassFileName,$struct->getClassDeclaration());
			}
		}
		return $structsClassesFiles;
	}
	/**
	 * Initialize functions :
	 * - Get structs defined
	 * - Parse each struct definition
	 * @uses SoapClient::__getFunctions()
	 * @uses WsdlToPhpGenerator::addService()
	 * @return bool true|false depending on the well functions catching from the WSDL
	 */
	private function initServices()
	{
		$functions = $this->__getFunctions();
		if(is_array($functions) && count($functions))
		{
			foreach($functions as $function)
			{
				$infos = explode(' ',$function);
				/**
				 * "Regular" SOAP Style
				 */
				if(count($infos) <= 3)
				{
					$returnType = $infos[0];
					if(count($infos) < 3 && strpos($infos[1],'()') !== false && array_key_exists(1,$infos))
					{
						$methodName = trim(str_replace('()','',$infos[1]));
						$parameterType = null;
					}
					else
						list($methodName,$parameterType) = explode('(',$infos[1]);
					if(!empty($returnType) && !empty($methodName))
						$this->addService($methodName,$parameterType,$returnType);
				}
				/**
				 * RPC SOAP Style
				 */
				elseif(count($infos) > 3)
				{
					/**
					 * Some RPC WS defines the return type as a list of values
					 * So we define the return type as an array and reset the informations to use to extract method name and parameters
					 */
					if(stripos($infos[0],'list(') === 0)
					{
						$infos = explode(' ',preg_replace('/(list\(.*\)\s)/i','',$function));
						array_unshift($infos,'array');
					}
					/**
					 * Return type is not defined in some case
					 */
					$returnType = strpos($infos[0],'(') === false?$infos[0]:'';
					if(empty($returnType) && strpos($infos[0],'(') !== false)
					{
						$start = 1;
						list($methodName,$firstParameterType) = explode('(',$infos[0]);
					}
					elseif(strpos($infos[1],'(') !== false)
					{
						$start = 2;
						list($methodName,$firstParameterType) = explode('(',$infos[1]);
					}
					if(!empty($methodName))
					{
						$methodParameters = array();
						$infosCount = count($infos);
						for($i = $start;$i < $infosCount;$i += 2)
						{
							$info = str_replace(array(
													',',
													'(',
													')',
													'$'),'',trim($infos[$i]));
							if(!empty($info))
								$methodParameters = array_merge($methodParameters,array(
																						$info=>$i == $start?$firstParameterType:$infos[$i - 1]));
						}
						$this->addService($methodName,$methodParameters,empty($returnType)?'unknown':$returnType);
					}
				}
			}
			return true;
		}
		else
			return false;
	}
	/**
	 * Generate methods by class
	 * @uses WsdlToPhpGenerator::getServices()
	 * @uses WsdlToPhpGenerator::getDirectory()
	 * @uses WsdlToPhpModel::getCleanName()
	 * @uses WsdlToPhpModel::getPackagedName()
	 * @uses WsdlToPhpModel::getClassDeclaration()
	 * @uses ezcPhpGenerator::finish()
	 * @param string $_rootDirectory the directory
	 * @param int $_rootDirectoryRights the directory permissions
	 * @return array the absolute paths to the generated files
	 */
	private function generateServicesClasses($_rootDirectory,$_rootDirectoryRights)
	{
		$services = $this->getServices();
		$servicesClassesFiles = array();
		if(count($services))
		{
			foreach($services as $serviceName=>$service)
			{
				$elementFolder = $this->getDirectory($_rootDirectory,$_rootDirectoryRights,$service->getCleanName());
				$servicesClassesFiles[] = $serviceClassFileName = $elementFolder . $service->getPackagedName() . '.php';
				/**
				 * Generate file
				 */
				self::populateFile($serviceClassFileName,$service->getClassDeclaration());
			}
		}
		return $servicesClassesFiles;
	}
	/**
	 * Populate the php file with the object and the declarations
	 * @uses ezcPhpGenerator::ezcPhpGenerator()
	 * @uses ezcPhpGenerator::appendCustomCode()
	 * @uses ezcPhpGenerator::finish()
	 * @uses WsdlToPhpModel::cleanComment()
	 * @param string $_fileName the file name
	 * @param array $_declarations the lines of code and comments
	 * @return void
	 */
	private static function populateFile($_fileName,array $_declarations)
	{
		$php = new ezcPhpGenerator($_fileName,true,true);
		$php->indentString = "\t";
		foreach($_declarations as $line=>$declaration)
		{
			if(is_array($declaration) && array_key_exists('comment',$declaration) && is_array($declaration['comment']))
			{
				$php->appendCustomCode("/**");
				foreach($declaration['comment'] as $subLine=>$subComment)
					$php->appendCustomCode(" * " . WsdlToPhpModel::cleanComment($subComment));
				$php->appendCustomCode(" */");
			}
			elseif(is_string($declaration))
			{
				switch($declaration)
				{
					case '{':
						$php->appendCustomCode($declaration);
						$php->indentLevel++;
						break;
					case '}':
						$php->indentLevel--;
						$php->appendCustomCode($declaration);
						break;
					default:
						$php->appendCustomCode($declaration);
						break;
				}
			}
		}
		$php->finish();
	}
	/**
	 * Generate classMap class
	 * @uses WsdlToPhpGenerator::getStructs()
	 * @uses WsdlToPhpGenerator::getPackageName()
	 * @uses WsdlToPhpGenerator::populateFile()
	 * @uses WsdlToPhpModel::getName()
	 * @uses WsdlToPhpModel::getCleanName()
	 * @param string $_rootDirectory the directory
	 * @return array the absolute path to the generated file
	 */
	private function generateClassMap($_rootDirectory)
	{
		$classMapDeclaration = array();
		/**
		 * class map comments
		 */
		$comments = array();
		array_push($comments,'File for the class which returns the class map definition');
		array_push($comments,'@package ' . self::getPackageName());
		array_push($comments,'@date ' . date('Y-m-d'));
		array_push($classMapDeclaration,array(
											'comment'=>$comments));
		$comments = array();
		array_push($comments,'Class which returns the class map definition by the static method ' . self::getPackageName() . 'ClassMap::classMap()');
		array_push($comments,'@package ' . self::getPackageName());
		array_push($comments,'@date ' . date('Y-m-d'));
		array_push($classMapDeclaration,array(
											'comment'=>$comments));
		/**
		 * class map declaration
		 */
		array_push($classMapDeclaration,'class ' . self::getPackageName() . 'ClassMap');
		array_push($classMapDeclaration,'{');
		/**
		 * classMap() method comments
		 */
		$comments = array();
		array_push($comments,'This method returns the array containing the mapping between WSDL structs and generated classes');
		array_push($comments,'This array is sent to the SoapClient when calling the WS');
		array_push($comments,'@return array');
		array_push($classMapDeclaration,array(
											'comment'=>$comments));
		/**
		 * classMap() method body
		 */
		array_push($classMapDeclaration,'final public static function classMap()');
		array_push($classMapDeclaration,'{');
		$structs = $this->getStructs();
		$classesToMap = array();
		foreach($structs as $structName=>$struct)
			$classesToMap[$struct->getName()] = $struct->getPackagedName();
		ksort($classesToMap);
		array_push($classMapDeclaration,'return ' . var_export($classesToMap,true) . ';');
		array_push($classMapDeclaration,'}');
		array_push($classMapDeclaration,'}');
		/**
		 * Generate file
		 */
		self::populateFile($filename = $_rootDirectory . self::getPackageName() . 'ClassMap.php',$classMapDeclaration);
		unset($comments,$classMapDeclaration,$structs,$classesToMap);
		return array(
					$filename);
	}
	/**
	 * Generate autoload file for all classes
	 * @uses WsdlToPhpGenerator::getPackageName()
	 * @uses WsdlToPhpGenerator::populateFile()
	 * @param string $_rootDirectory the directory
	 * @param array $_classesFiles the generated classes files
	 * @return void
	 */
	private static function generateAutoloadFile($_rootDirectory,array $_classesFiles = array())
	{
		if(count($_classesFiles))
		{
			$autoloadDeclaration = array();
			$comments = array();
			array_push($comments,'File to load generated classes once at once time');
			array_push($comments,'@package ' . self::getPackageName());
			array_push($comments,'@date ' . date('Y-m-d'));
			array_push($autoloadDeclaration,array(
												'comment'=>$comments));
			$comments = array();
			array_push($comments,'Includes for all generated classes files');
			array_push($comments,'@date ' . date('Y-m-d'));
			array_push($autoloadDeclaration,array(
												'comment'=>$comments));
			foreach($_classesFiles as $classFile)
			{
				if(is_file($classFile))
					array_push($autoloadDeclaration,'require_once ' . str_replace($_rootDirectory,'dirname(__FILE__) . \'/',$classFile) . '\';');
			}
			self::populateFile($_rootDirectory . '/' . self::getPackageName() . 'Autoload.php',$autoloadDeclaration);
			unset($autoloadDeclaration,$comments);
		}
	}
	/**
	 * Generate Wsdl Class file
	 * @uses WsdlToPhpGenerator::getPackageName()
	 * @param string $_rootDirectory the directory
	 * @return array the absolute path to the generated file
	 */
	private function generateWsdlClassFile($_rootDirectory)
	{
		if(is_file(dirname(__FILE__) . '/WsdlClassFileTpl.php'))
		{
			$content = file_get_contents(dirname(__FILE__) . '/WsdlClassFileTpl.php');
			$metaInformation = '';
			foreach($this->wsdls as $wsdlLocation=>$wsdlinfos)
			{
				foreach($wsdlinfos['meta'] as $metaName=>$metaValue)
					$metaInformation .= (!empty($metaInformation)?"\r\n * ":'') . ucfirst($metaName) . " : $metaValue";
			}
			$content = str_replace(array(
										'packageName',
										'PackageName',
										'generation_date',
										'meta_informations'),array(
																lcfirst(self::getPackageName(false)),
																self::getPackageName(),
																date('d/m/Y'),
																$metaInformation),$content);
			file_put_contents($_rootDirectory . self::getPackageName() . 'WsdlClass.php',$content);
			return array(
						$_rootDirectory . self::getPackageName() . 'WsdlClass.php');
		}
		else
			return array();
	}
	/**
	 * Generate tutorial file
	 * @uses WsdlToPhpGenerator::getOptionGenerateAutoloadFile()
	 * @uses WsdlToPhpGenerator::getWsdls()
	 * @uses WsdlToPhpGenerator::getPackageName()
	 * @uses ReflectionClass::getMethods()
	 * @uses ReflectionMethod::getName()
	 * @uses ReflectionMethod::getParameters()
	 * @param string $_rootDirectory the direcoty
	 * @param array $_functionsClassesFiles the generated class files
	 * @return bool true|false
	 */
	private function generateTutorialFile($_rootDirectory,array $_functionsClassesFiles = array())
	{
		if(class_exists('ReflectionClass') && count($_functionsClassesFiles) && is_file(dirname(__FILE__) . '/sample-tpl.php') && self::getOptionGenerateAutoloadFile() && is_file($_rootDirectory . '/' . self::getPackageName() . 'Autoload.php'))
		{
			require_once $_rootDirectory . '/' . self::getPackageName() . 'Autoload.php';
			$content = '';
			foreach($_functionsClassesFiles as $classFilePath)
			{
				$pathinfo = pathinfo($classFilePath);
				$className = str_replace('.' . $pathinfo['extension'],'',$pathinfo['filename']);
				if(class_exists($className))
				{
					$r = new ReflectionClass($className);
					$methods = $r->getMethods();
					$classMethods = array();
					foreach($methods as $method)
					{
						if($method->class === $className && !in_array($method->getName(),array(
																								'__toString',
																								'__construct',
																								'getResult')))
							array_push($classMethods,$method);
					}
					if(count($classMethods))
					{
						$classNameVar = lcfirst($className);
						$content .= "\r\n\r\n/**" . str_repeat('*',strlen("Example for $className")) . "\r\n * Example for $className\r\n */";
						$content .= "\r\n\$$classNameVar = new $className(\$wsdl);";
						foreach($classMethods as $classMethod)
						{
							$content .= "\r\n// sample call for $className::" . $classMethod->getName() . '()';
							$classParameters = $classMethod->getParameters();
							$parameters = array();
							foreach($classParameters as $classParameter)
								array_push($parameters,class_exists(ucfirst(substr($classParameter->getName(),1)))?'new ' . ucfirst(substr($classParameter->getName(),1)) . '(/*** update parameters list ***/)':'$' . lcfirst($classParameter->getName()));
							$content .= "\r\nif(\$$classNameVar->" . $classMethod->getName() . '(' . implode(',',$parameters) . '))';
							$content .= "\r\n\t" . 'print_r($' . $classNameVar . '->getResult());';
							$content .= "\r\nelse";
							$content .= "\r\n\tprint_r($" . $classNameVar . "->getLastError());";
						}
					}
				}
			}
			if(!empty($content))
			{
				$fileContent = file_get_contents(dirname(__FILE__) . '/sample-tpl.php');
				$fileContent = str_replace(array(
												'packageName',
												'PackageName',
												'PACKAGENAME',
												'WSDL_PATH',
												'generation_date',
												'$content;'),array(
																lcfirst(self::getPackageName()),
																ucfirst(self::getPackageName()),
																strtoupper(self::getPackageName()),
																implode('',array_slice(array_keys($this->getWsdls()),0,1)),
																date('d/m/Y'),
																$content),$fileContent);
				file_put_contents($_rootDirectory . 'sample-' . strtolower(self::getPackageName()) . '.php',$fileContent);
			}
			return true;
		}
		elseif(!class_exists('ReflectionClass'))
		{
			echo "\r\n WsdlToPhpGenerator::generateTutorialFile() needs ReflectionClass, see http://fr2.php.net/manual/fr/class.reflectionclass.php\r\n";
			return false;
		}
		return false;
	}
	/**
	 * Return the structs
	 * @return array
	 */
	public function getStructs()
	{
		return $this->structs;
	}
	/**
	 * Set the structs
	 * @param array
	 * @return array
	 */
	protected function setStructs(array $_structs = array())
	{
		return ($this->structs = $_structs);
	}
	/**
	 * Get the struct by its name
	 * @uses WsdlToPhpGenerator::getStructs()
	 * @param string $_structName the original struct name
	 * @return WsdlToPhpStruct|null
	 */
	public function getStruct($_structName)
	{
		return array_key_exists($_structName,$this->getStructs())?$this->structs[$_structName]:null;
	}
	/**
	 * Add type to structs
	 * @uses WsdlToPhpGenerator::getStruct()
	 * @uses WsdlToPhpStruct::addAttribute()
	 * @param string $_structName the original struct name
	 * @param string $_attributeName the attribute name
	 * @param string $_attributeType the attribute type
	 * @return void
	 */
	private function addStruct($_structName,$_attributeName,$_attributeType)
	{
		if($this->getStruct($_structName) === null)
			$this->structs[$_structName] = new WsdlToPhpStruct($_structName);
		if(!empty($_attributeName) && !empty($_attributeType))
			$this->getStruct($_structName)->addAttribute($_attributeName,$_attributeType);
	}
	/**
	 * Add an info to the struct
	 * @uses WsdlToPhpGenerator::getStruct()
	 * @uses WsdlToPhpModel::addMeta()
	 * @param string $_structName the original struct name
	 * @param string $_structInfoName the struct info name
	 * @param mixed $_structInfoValue the struct info value
	 * @return void
	 */
	private function addStructMeta($_structName,$_structInfoName,$_structInfoValue)
	{
		if($this->getStruct($_structName))
			$this->getStruct($_structName)->addMeta($_structInfoName,$_structInfoValue);
	}
	/**
	 * Set struct inheritance value
	 * @uses WsdlToPhpGenerator::getStruct()
	 * @uses WsdlToPhpStruct::setInheritance()
	 * @param string the original struct name
	 * @param string the struct inheritance name
	 * @return void
	 */
	private function setStructInheritance($_structName,$_inherits)
	{
		if($this->getStruct($_structName))
			$this->getStruct($_structName)->setInheritance($_inherits);
	}
	/**
	 * Add struct documentation info
	 * @uses WsdlToPhpGenerator::getStruct()
	 * @uses WsdlToPhpModel::setDocumentation()
	 * @param string $_structName the original struct name
	 * @param string $_documentation the struct documentation
	 * @return void
	 */
	private function setStructDocumentation($_structName,$_documentation)
	{
		if($this->getStruct($_structName))
			$this->getStruct($_structName)->setDocumentation($_documentation);
	}
	/**
	 * Set the struct as a restriction, which means it contains the enumeration values
	 * @uses WsdlToPhpGenerator::getStruct()
	 * @uses WsdlToPhpStruct::setIsRestriction()
	 * @param string $_structName the original struct name
	 * @return void
	 */
	private function setStructIsRestriction($_structName)
	{
		if($this->getStruct($_structName))
			$this->getStruct($_structName)->setIsRestriction(true);
	}
	/**
	 * Set the struct as a srtuct, which means it has to be generated as a class
	 * @uses WsdlToPhpGenerator::getStruct()
	 * @uses WsdlToPhpStruct::setIsStruct()
	 * @param string $_structName the original struct name
	 * @return void
	 */
	private function setStructIsStruct($_structName)
	{
		if($this->getStruct($_structName))
			$this->getStruct($_structName)->setIsStruct(true);
	}
	/**
	 * Get the struct by its name
	 * @uses WsdlToPhpGenerator::getStruct()
	 * @uses WsdlToPhpStruct::getAttribute()
	 * @param string $_structName the original struct name
	 * @param string $_attributeName the attribute name
	 * @return WsdlToPhpStructAttribute|null
	 */
	public function getStructAttribute($_structName,$_attributeName)
	{
		return $this->getStruct($_structName)?$this->getStruct($_structName)->getAttribute($_attributeName):null;
	}
	/**
	 * Add an info to the struct attribute
	 * @uses WsdlToPhpGenerator::getStructAttribute()
	 * @uses WsdlToPhpModel::addMeta()
	 * @param string $_structName the original struct name
	 * @param string $_attributeName the attribute name
	 * @param string $_attributeInfoName the attribute info name
	 * @param mixed $_attributeInfoValue the attribute info value
	 * @return void
	 */
	private function addStructAttributeMeta($_structName,$_attributeName,$_attributeInfoName,$_attributeInfoValue)
	{
		if($this->getStructAttribute($_structName,$_attributeName))
			$this->getStructAttribute($_structName,$_attributeName)->addMeta($_attributeInfoName,$_attributeInfoValue);
	}
	/**
	 * Add struct documentation info
	 * @uses WsdlToPhpGenerator::getStructAttribute()
	 * @uses WsdlToPhpModel::setDocumentation()
	 * @param string $_structName the original struct name
	 * @param string $_attributeName the attribute name
	 * @param string $_documentation the attribute documentation
	 * @return void
	 */
	private function setStructAttributeDocumentation($_structName,$_attributeName,$_documentation)
	{
		if($this->getStructAttribute($_structName,$_attributeName))
			$this->getStructAttribute($_structName,$_attributeName)->setDocumentation($_documentation);
	}
	/**
	 * Get the struct value by its name
	 * @uses WsdlToPhpGenerator::getStruct()
	 * @uses WsdlToPhpStruct::getValue()
	 * @param string $_structName the original struct name
	 * @param string $_valueName the value name
	 * @return WsdlToPhpStructValue|null
	 */
	public function getStructValue($_structName,$_valueName)
	{
		return $this->getStruct($_structName)?$this->getStruct($_structName)->getValue($_valueName):null;
	}
	/**
	 * Method to add value to restriction struct
	 * @uses WsdlToPhpGenerator::getStruct()
	 * @uses WsdlToPhpGenerator::setStructIsRestriction()
	 * @uses WsdlToPhpGenerator::setStructIsStruct()
	 * @uses WsdlToPhpStruct::addValue()
	 * @param string $_structName the original struct name
	 * @param mixed $_value the value
	 * @return void
	 */
	private function addRestrictionValue($_structName,$_value)
	{
		if($this->getStruct($_structName))
		{
			$this->setStructIsRestriction($_structName);
			$this->setStructIsStruct($_structName);
			$this->getStruct($_structName)->addValue($_value);
		}
	}
	/**
	 * Add an info to the struct value
	 * @uses WsdlToPhpGenerator::getStructValue()
	 * @uses WsdlToPhpModel::addMeta()
	 * @param string $_structName the original struct name
	 * @param string $_valueName the value name
	 * @param string $_valueInfoName the value info name
	 * @param mixed $_valueInfoValue the value info value
	 * @return void
	 */
	private function addStructValueMeta($_structName,$_valueName,$_valueInfoName,$_valueInfoValue)
	{
		if($this->getStructValue($_structName,$_valueName))
			$this->getStructValue($_structName,$_valueName)->addMeta($_valueInfoName,$_valueInfoValue);
	}
	/**
	 * Add struct value documentation info
	 * @uses WsdlToPhpGenerator::getStructValue()
	 * @uses WsdlToPhpModel::setDocumentation()
	 * @param string $_structName the original struct name
	 * @param string $_valueName the value name
	 * @param string $_documentation the value documentation
	 * @return void
	 */
	private function setStructValueDocumentation($_structName,$_valueName,$_documentation)
	{
		if($this->getStructValue($_structName,$_valueName))
			$this->getStructValue($_structName,$_valueName)->setDocumentation($_documentation);
	}
	/**
	 * Add a restrcition struct
	 * @uses WsdlToPhpGenerator::getStruct()
	 * @uses WsdlToPhpStruct::setIsRestriction()
	 * @param string $_structName the original struct name
	 * @return void
	 */
	private function addRestrictionStruct($_structName)
	{
		if($this->getStruct($_structName) === null)
		{
			$this->structs[$_structName] = new WsdlToPhpStruct($_structName);
			$this->getStruct($_structName)->setIsRestriction(true);
		}
	}
	/**
	 * Add a virtual struct
	 * @uses WsdlToPhpGenerator::getStruct()
	 * @param string $_structName the original struct name
	 * @return void
	 */
	private function addVirtualStruct($_structName)
	{
		if($this->getStruct($_structName) === null)
			$this->structs[$_structName] = new WsdlToPhpStruct($_structName,false);
	}
	/**
	 * Returns the services
	 * @return array
	 */
	public function getServices()
	{
		return $this->services;
	}
	/**
	 * Set the services
	 * @param array
	 * @return array
	 */
	protected function setServices(array $_services = array())
	{
		return ($this->services = $_services);
	}
	/**
	 * Add a service
	 * @uses WsdlToPhpGenerator::getServiceName()
	 * @uses WsdlToPhpGenerator::getService()
	 * @uses WsdlToPhpGenerator::getServiceFunction()
	 * @uses WsdlToPhpService::addFunction()
	 * @param string $_functionName the original function name
	 * @param string $_functionParameter the original parameter name
	 * @param string $_functionReturn the original return name
	 * @return void
	 */
	private function addService($_functionName,$_functionParameter,$_functionReturn)
	{
		$serviceName = $this->getServiceName($_functionName);
		if(!$this->getService($serviceName))
			$this->services[$serviceName] = new WsdlToPhpService($serviceName);
		if(!$this->getServiceFunction($_functionName))
			$this->getService($serviceName)->addFunction($_functionName,$_functionParameter,$_functionReturn);
	}
	/**
	 * Method to get a service by its name
	 * @param string $_serviceName the service name
	 * @return WsdlToPhpService|null
	 */
	public function getService($_serviceName)
	{
		return array_key_exists($_serviceName,$this->getServices())?$this->services[$_serviceName]:null;
	}
	/**
	 * Method to add info value to an existing service
	 * @uses WsdlToPhpGenerator::getService()
	 * @uses WsdlToPhpModel::addMeta()
	 * @param string $_serviceName the service name
	 * @param string $_functionInfoName the function name
	 * @param mixed $_functionInfoValue the function info value
	 * @return void
	 */
	private function addServiceMeta($_serviceName,$_functionInfoName,$_functionInfoValue)
	{
		if($this->getService($_serviceName))
			$this->getService($_serviceName)->addMeta($_functionInfoName,$_functionInfoValue);
	}
	/**
	 * Method to add documentation to an existing function
	 * @uses WsdlToPhpGenerator::getService()
	 * @uses WsdlToPhpModel::setDocumentation()
	 * @param string $_functionName the function name
	 * @param string $_documentation the documentation value
	 * @return void
	 */
	private function setServiceDocumentation($_functionName,$_documentation)
	{
		if($this->getService($_functionName))
			$this->getService($_functionName)->setDocumentation($_documentation);
	}
	/**
	 * Return the function
	 * @uses WsdlToPhpGenerator::getServiceName()
	 * @uses WsdlToPhpGenerator::getService()
	 * @uses WsdlToPhpService::getFunction()
	 * @param string $_functionName the original function name
	 * @return WsdlToPhpFunction|null
	 */
	private function getServiceFunction($_functionName)
	{
		return $this->getService($this->getServiceName($_functionName))?$this->getService($this->getServiceName($_functionName))->getFunction($_functionName):null;
	}
	/**
	 * Set the service function documentation
	 * @uses WsdlToPhpGenerator::getServiceFunction()
	 * @uses WsdlToPhpModel::setDocumentation()
	 * @param string $_functionName the service name
	 * @param string $_documentation the documentation
	 * @return void
	 */
	private function setServiceFunctionDocumentation($_functionName,$_documentation)
	{
		if($this->getServiceFunction($_functionName))
			$this->getServiceFunction($_functionName)->setDocumentation($_documentation);
	}
	/**
	 * Add the service function a meta information
	 * @uses WsdlToPhpGenerator::getServiceFunction()
	 * @uses WsdlToPhpModel::addMeta()
	 * @param string $_functionName the service name
	 * @param string $_functionInfoName the function name
	 * @param string $_functionInfoValue the function info value
	 * @return void
	 */
	private function addServiceFunctionMeta($_functionName,$_functionInfoName,$_functionInfoValue)
	{
		if($this->getServiceFunction($_functionName))
			$this->getServiceFunction($_functionName)->addMeta($_functionInfoName,$_functionInfoValue);
	}
	/**
	 * Set the optionCategory value
	 * @return int
	 */
	public static function getOptionCategory()
	{
		return self::$optionCategory;
	}
	/**
	 * Value must be @see self::OPT_CAT_END_NAME or @see self::OPT_CAT_START_NAME or @see self::OPT_CAT_NONE_NAME
	 * @param int
	 * @return bool
	 */
	public static function setOptionCategory($_optionCategory = self::OPT_CAT_START_NAME)
	{
		if($_optionCategory == self::OPT_CAT_END_NAME || $_optionCategory == self::OPT_CAT_START_NAME || $_optionCategory == self::OPT_CAT_NONE_NAME)
		{
			self::$optionCategory = $_optionCategory;
			return true;
		}
		else
		{
			self::$optionCategory = self::OPT_CAT_START_NAME;
			return false;
		}
	}
	/**
	 * Set the optionSubCategory value
	 * @return int
	 */
	public static function getOptionSubCategory()
	{
		return self::$optionSubCategory;
	}
	/**
	 * Value must be @see self::OPT_SUB_CAT_END_NAME or @see self::OPT_SUB_CAT_START_NAME or @see self::OPT_SUB_CAT_NONE_NAME
	 * @param int
	 * @return bool
	 */
	public static function setOptionSubCategory($_optionSubCategory = self::OPT_SUB_CAT_START_NAME)
	{
		if($_optionSubCategory == self::OPT_SUB_CAT_END_NAME || $_optionSubCategory == self::OPT_SUB_CAT_START_NAME || $_optionSubCategory == self::OPT_SUB_CAT_NONE_NAME)
		{
			self::$optionSubCategory = $_optionSubCategory;
			return true;
		}
		else
		{
			self::$optionSubCategory = self::OPT_SUB_CAT_START_NAME;
			return false;
		}
	}
	/**
	 * Set the optionGatherMethods value
	 * @return int
	 */
	public static function getOptionGatherMethods()
	{
		return self::$optionGatherMethods;
	}
	/**
	 * Set the optionGatherMethods value
	 * @uses WsdlToPhpGenerator::OPT_GATH_METH_START_NAME
	 * @uses WsdlToPhpGenerator::OPT_GATH_METH_END_NAME
	 * @param int
	 * @return bool
	 */
	public static function setOptionGatherMethods($_optionGatherMethods = self::OPT_GATH_METH_START_NAME)
	{
		if($_optionGatherMethods == self::OPT_GATH_METH_START_NAME || $_optionGatherMethods == self::OPT_GATH_METH_END_NAME)
		{
			self::$optionGatherMethods = $_optionGatherMethods;
			return true;
		}
		else
		{
			self::$optionGatherMethods = self::OPT_GATH_METH_START_NAME;
			return false;
		}
	}
	/**
	 * Get the optionSendArrayAsParameter value
	 * @return bool
	 */
	public static function getOptionSendArrayAsParameter()
	{
		return self::$optionSendArrayAsParameter;
	}
	/**
	 * Set the optionSendArrayAsParameter value
	 * @param bool
	 * @return bool
	 */
	public static function setOptionSendArrayAsParameter($_optionSendArrayAsParameter = false)
	{
		return (self::$optionSendArrayAsParameter = $_optionSendArrayAsParameter);
	}
	/**
	 * Get the optionGenerateAutoloadFile value
	 * @return bool
	 */
	public static function getOptionGenerateAutoloadFile()
	{
		return self::$optionGenerateAutoloadFile;
	}
	/**
	 * Set the optionGenerateAutoloadFile value
	 * @param bool
	 * @return bool
	 */
	public static function setOptionGenerateAutoloadFile($_optionGenerateAutoloadFile = false)
	{
		return (self::$optionGenerateAutoloadFile = $_optionGenerateAutoloadFile);
	}
	/**
	 * Get the optionGenerateWsdlClassFile value
	 * @return bool
	 */
	public static function getOptionGenerateWsdlClassFile()
	{
		return self::$optionGenerateWsdlClassFile;
	}
	/**
	 * Set the optionGenerateWsdlClassFile value
	 * @param bool
	 * @return bool
	 */
	public static function setOptionGenerateWsdlClassFile($_optionGenerateWsdlClassFile = false)
	{
		return (self::$optionGenerateWsdlClassFile = $_optionGenerateWsdlClassFile);
	}
	/**
	 * Get the optionResponseAsWsdlObject value
	 * @return bool
	 */
	public static function getOptionResponseAsWsdlObject()
	{
		return self::$optionResponseAsWsdlObject;
	}
	/**
	 * Set the optionResponseAsWsdlObject value
	 * @param bool
	 * @return bool
	 */
	public static function setOptionResponseAsWsdlObject($_optionResponseAsWsdlObject = false)
	{
		return (self::$optionResponseAsWsdlObject = $_optionResponseAsWsdlObject);
	}
	/**
	 * Get the optionResponseAsWsdlObject value
	 * @return bool
	 */
	public static function getOptionSendParametersAsArray()
	{
		return self::$optionSendParametersAsArray;
	}
	/**
	 * Set the pptionSendParametersAsArray value
	 * @uses WsdlToPhpGenerator::setOptionSendArrayAsParameter() if param is true
	 * @param bool
	 * @return bool
	 */
	public static function setOptionSendParametersAsArray($_optionSendParametersAsArray = false)
	{
		if($_optionSendParametersAsArray)
			self::setOptionSendArrayAsParameter($_optionSendParametersAsArray);
		return (self::$optionSendParametersAsArray = $_optionSendParametersAsArray);
	}
	/**
	 * Get the optionInheritsClassIdentifier value
	 * @return string
	 */
	public static function getOptionInheritsClassIdentifier()
	{
		return self::$optionInheritsClassIdentifier;
	}
	/**
	 * Set the optionInheritsClassIdentifier value
	 * @param string
	 * @return string
	 */
	public static function setOptionInheritsClassIdentifier($_optionInheritsClassIdentifier = '')
	{
		return (self::$optionInheritsClassIdentifier = (is_string($_optionInheritsClassIdentifier) && !empty($_optionInheritsClassIdentifier))?$_optionInheritsClassIdentifier:'');
	}
	/**
	 * Get the optionGenericConstantsNames value
	 * @return bool
	 */
	public static function getOptionGenericConstantsNames()
	{
		return self::$optionGenericConstantsNames;
	}
	/**
	 * Set the optionGenericConstantsNames value
	 * @param bool
	 * @return bool
	 */
	public static function setOptionGenericConstantsNames($_optionGenericConstantsNames = false)
	{
		return (self::$optionGenericConstantsNames = $_optionGenericConstantsNames);
	}
	/**
	 * Get the optionGenerateTutorialFile value
	 * @return bool
	 */
	public static function getOptionGenerateTutorialFile()
	{
		return self::$optionGenerateTutorialFile;
	}
	/**
	 * Set the optionGenerateTutorialFile value
	 * @param bool
	 * @return bool
	 */
	public static function setOptionGenerateTutorialFile($_optionGenerateTutorialFile = false)
	{
		return (self::$optionGenerateTutorialFile = $_optionGenerateTutorialFile);
	}
	/**
	 * Get the package name
	 * @param bool $_ucFirst ucfirst package name or not
	 * @return string
	 */
	public static function getPackageName($_ucFirst = true)
	{
		return $_ucFirst?ucfirst(self::$packageName):self::$packageName;
	}
	/**
	 * Set the package name
	 * @param string $_packageName
	 * @return string
	 */
	private static function setPackageName($_packageName)
	{
		return (self::$packageName = $_packageName);
	}
	/**
	 * Get the WSDLs
	 * @return array
	 */
	public function getWsdls()
	{
		return $this->wsdls;
	}
	/**
	 * Set the WSDLs
	 * @param array
	 * @return array
	 */
	public function setWsdls(array $_wsdls = array())
	{
		$this->wsdls = $_wsdls;
	}
	/**
	 * Add Wsdl location
	 * @param string $_wsdlLocation
	 */
	public function addWsdl($_wsdlLocation)
	{
		if(is_string($_wsdlLocation) && !empty($_wsdlLocation))
			$this->wsdls[$_wsdlLocation] = array(
												'meta'=>array());
	}
	/**
	 * Add Wsdl location meta information
	 * @uses WsdlToPhpGenerator::getWsdls()
	 * @param string $_metaName meta name
	 * @param mixed $_metaValue meta value
	 * @return string
	 */
	public function addWsdlMeta($_metaName,$_metaValue)
	{
		return ($this->wsdls[implode('',array_slice(array_keys($this->wsdls),0,1))]['meta'][$_metaName] = $_metaValue);
	}
	/**
	 * Methods to load WSDL from current WSDL when current WSDL imports other WSDL
	 * @uses WsdlToPhpGenerator::manageWsdlLocation()
	 * @uses WsdlToPhpGenerator::manageWsdlNode()
	 * @param string $_wsdlLocation wsdl location to load
	 * @param DOMNode $_domNode DOMNode to browse
	 * @param string $_fromWsdlLocation wsdl location where the current $_domNode or $_wsdlLocation is from
	 * @return void
	 */
	private function loadWsdls($_wsdlLocation = '',$_domNode = null,$_fromWsdlLocation = '')
	{
		/**
		 * Not empty location
		 */
		if(!empty($_wsdlLocation))
			$this->manageWsdlLocation($_wsdlLocation,$_domNode,$_fromWsdlLocation);
		/**
		 * New node to browse
		 */
		elseif($_domNode instanceof DOMElement)
			$this->manageWsdlNode($_wsdlLocation,$_domNode,$_fromWsdlLocation);
	}
	/**
	 * Default manage method for a location
	 * @uses DOMDocument::load()
	 * @uses DOMDocument::loadXML()
	 * @uses DOMDocument::saveXML()
	 * @uses DOMNode::item()
	 * @uses DOMNode::hasChildNodes()
	 * @param string $_wsdlLocation the wsdl location
	 * @param DOMNode $_domNode the node
	 * @param string $_fromWsdlLocation the wsdl location imported
	 */
	protected function manageWsdlLocation($_wsdlLocation,$_domNode,$_fromWsdlLocation)
	{
		$wsdlLocationContent = '';
		$dom = new DOMDocument('1.0','UTF-8');
		if(@$dom->load($_wsdlLocation))
			$wsdlLocationContent = trim($dom->saveXML());
		/**
		 * Comments tag on the beginning block parsing the DOMDocument
		 */
		if(empty($wsdlLocationContent) || trim($wsdlLocationContent) == '<?xml version="1.0" encoding="UTF-8"?>')
		{
			$wsdlLocationContent = @file_get_contents($_wsdlLocation);
			$wsdlLocationContent = preg_replace('(<!--.*-->)','',$wsdlLocationContent);
		}
		if(!empty($wsdlLocationContent) && $dom->loadXML($wsdlLocationContent) && $dom->hasChildNodes())
		{
			$childNodes = $dom->childNodes;
			$childNodesLength = $childNodes->length;
			for($i = 0;$i < $childNodesLength;$i++)
			{
				if($childNodes->item($i) instanceof DOMElement)
				{
					$this->loadWsdls('',$childNodes->item($i),$_wsdlLocation);
					break;
				}
			}
		}
	}
	/**
	 * Default manage method for a node
	 * @uses WsdlToPhpGenerator::manageWsdlNodeImport()
	 * @uses WsdlToPhpGenerator::manageWsdlNodeRestriction()
	 * @uses WsdlToPhpGenerator::manageWsdlNodeElement()
	 * @uses WsdlToPhpGenerator::manageWsdlNodeDocumentation()
	 * @uses WsdlToPhpGenerator::manageWsdlNodeExtension()
	 * @uses WsdlToPhpGenerator::manageWsdlNodeUndefined()
	 * @uses WsdlToPhpGenerator::loadWsdls()
	 * @uses DOMNode::item()
	 * @uses DOMNode::hasChildNodes()
	 * @uses DOMNode::hasAttributes()
	 * @uses DOMElement::hasAttribute()
	 * @uses DOMElement::getAttribute()
	 * @param string $_wsdlLocation the wsdl location
	 * @param DOMNode $_domNode the node
	 * @param string $_fromWsdlLocation the wsdl location imported
	 */
	protected function manageWsdlNode($_wsdlLocation = '',$_domNode = null,$_fromWsdlLocation = '')
	{
		/**
		 * Current node is type of "import" or "include"
		 */
		if(stripos($_domNode->nodeName,'import') !== false || stripos($_domNode->nodeName,'include') !== false)
			$this->manageWsdlNodeImport($_wsdlLocation,$_domNode,$_fromWsdlLocation);
		/**
		 * Restriction
		 */
		elseif(stripos($_domNode->nodeName,'restriction') !== false)
			$this->manageWsdlNodeRestriction($_wsdlLocation,$_domNode,$_fromWsdlLocation);
		/**
		 * Enumeration value
		 */
		elseif(stripos($_domNode->nodeName,'enumeration') !== false)
			$this->manageWsdlNodeEnumeration($_wsdlLocation,$_domNode,$_fromWsdlLocation);
		/**
		 * Element's, part of a struct
		 */
		elseif((stripos($_domNode->nodeName,'element') !== false || stripos($_domNode->nodeName,'attribute') !== false) && $_domNode->hasAttribute('name') && $_domNode->getAttribute('name') != '' && $_domNode->hasAttribute('type') && $_domNode->getAttribute('type') != '')
			$this->manageWsdlNodeElement($_wsdlLocation,$_domNode,$_fromWsdlLocation);
		/**
		 * Documentation's
		 */
		elseif(stripos($_domNode->nodeName,'documentation') !== false && !empty($_domNode->nodeValue))
			$this->manageWsdlNodeDocumentation($_wsdlLocation,$_domNode,$_fromWsdlLocation);
		/**
		 * Extension of struct
		 */
		elseif(stripos($_domNode->nodeName,'extension') !== false && $_domNode->hasAttribute('base') && $_domNode->getAttribute('base') != '')
			$this->manageWsdlNodeExtension($_wsdlLocation,$_domNode,$_fromWsdlLocation);
		/**
		 * Undefined node
		 */
		else
			$this->manageWsdlNodeUndefined($_wsdlLocation,$_domNode,$_fromWsdlLocation);
		/**
		 * other child nodes
		 */
		if($_domNode->hasChildNodes())
		{
			$childNodes = $_domNode->childNodes;
			$childNodesLength = $childNodes->length;
			for($i = 0;$i < $childNodesLength;$i++)
			{
				if($childNodes->item($i))
					$this->loadWsdls('',$childNodes->item($i),!empty($_wsdlLocation)?$_wsdlLocation:$_fromWsdlLocation);
			}
		}
	}
	/**
	 * Undefined node manage method
	 * @param string $_wsdlLocation the wsdl location
	 * @param DOMNode $_domNode the node
	 * @param string $_fromWsdlLocation the wsdl location imported
	 * @return boolean
	 */
	protected function manageWsdlNodeUndefined($_wsdlLocation = '',$_domNode = null,$_fromWsdlLocation = '')
	{
		return true;
	}
	/**
	 * Manage shema import method
	 * @uses WsdlToPhpGenerator::addWsdl()
	 * @uses WsdlToPhpGenerator::loadWsdls()
	 * @uses DOMElement::hasAttribute()
	 * @uses DOMElement::getAttribute()
	 * @param string $_wsdlLocation the wsdl location
	 * @param DOMNode $_domNode the node
	 * @param string $_fromWsdlLocation the wsdl location imported
	 * @return void
	 */
	protected function manageWsdlNodeImport($_wsdlLocation = '',DOMNode $_domNode,$_fromWsdlLocation = '')
	{
		$location = '';
		if($_domNode->hasAttribute('location'))
			$location = $_domNode->getAttribute('location');
		elseif($_domNode->hasAttribute('schemaLocation'))
			$location = $_domNode->getAttribute('schemaLocation');
		elseif($_domNode->hasAttribute('schemalocation'))
			$location = $_domNode->getAttribute('schemalocation');
		elseif($_domNode->hasAttribute('namespace') && (strpos($_domNode->getAttribute('namespace'),'http://') !== false || strpos($_domNode->getAttribute('namespace'),'https://') !== false))
			$location = $_domNode->getAttribute('namespace');
		if(substr($location,0,2) == './')
			$location = substr($location,2);
		/**
		 * Define valid location
		 */
		$locations = array();
		if(!empty($location) && strpos($location,'http://') === false && strpos($location,'https://') === false && (!empty($_wsdlLocation) || !empty($_fromWsdlLocation)))
		{
			$locationsToParse = array();
			array_push($locationsToParse,!empty($_wsdlLocation)?$_wsdlLocation:$_fromWsdlLocation);
			if($_domNode->hasAttribute('namespace') && strpos($_domNode->getAttribute('namespace'),'://'))
				array_push($locationsToParse,$_domNode->getAttribute('namespace'));
			foreach($locationsToParse as $locationToParse)
			{
				$fileParts = pathinfo($locationToParse);
				$fileBasename = (is_array($fileParts) && array_key_exists('basename',$fileParts))?$fileParts['basename']:'';
				$parts = parse_url(str_replace($fileBasename,'',$locationToParse));
				$scheme = (is_array($parts) && array_key_exists('scheme',$parts))?$parts['scheme']:'';
				$host = (is_array($parts) && array_key_exists('host',$parts))?$parts['host']:'';
				$path = (is_array($parts) && array_key_exists('path',$parts))?$parts['path']:'';
				$path = str_replace($fileBasename,'',$path);
				$port = (is_array($parts) && array_key_exists('port',$parts))?$parts['port']:'';
				if(!empty($scheme) && !empty($host))
					array_push($locations,str_replace('urn','http',$scheme) . '://' . $host . (!empty($port)?':' . $port:'') . (!empty($path)?$path:'/') . $location);
			}
		}
		elseif(!empty($location))
			array_push($locations,$location);
		/**
		 * New WSDL
		 */
		foreach($locations as $location)
		{
			if(!empty($location) && !array_key_exists($location,$this->getWsdls()))
			{
				/**
				 * Save Wsdl location
				 */
				$this->addWsdl($location);
				/**
				 * Load Wsdl
				 */
				$this->loadWsdls($location,null,$_wsdlLocation);
			}
		}
	}
	/**
	 * Manage restriction method
	 * @uses WsdlToPhpGenerator::findSuitableParent()
	 * @uses WsdlToPhpGenerator::setStructInheritance()
	 * @uses WsdlToPhpGenerator::addVirtualStruct()
	 * @uses WsdlToPhpGenerator::addStructMeta()
	 * @uses DOMNode::item()
	 * @uses DOMNode::hasChildNodes()
	 * @uses DOMNode::hasAttributes()
	 * @uses DOMElement::hasAttribute()
	 * @uses DOMElement::getAttribute()
	 * @param string $_wsdlLocation the wsdl location
	 * @param DOMNode $_domNode the node
	 * @param string $_fromWsdlLocation the wsdl location imported
	 * @return void
	 */
	protected function manageWsdlNodeRestriction($_wsdlLocation = '',DOMNode $_domNode,$_fromWsdlLocation = '')
	{
		/**
		 * Find parent node of this enumeration node
		 */
		$parentNode = self::findSuitableParent($_domNode);
		if($parentNode)
		{
			/**
			 * Inheritance detection
			 */
			if($_domNode->hasAttribute('base'))
			{
				$type = explode(':',$_domNode->getAttribute('base'));
				if(count($type) && !empty($type[count($type) - 1]) && $type[count($type) - 1] != $parentNode->getAttribute('name'))
					$this->setStructInheritance($parentNode->getAttribute('name'),$type[count($type) - 1]);
			}
			/**
			 * Meta informations about struct
			 */
			if($_domNode->hasChildNodes())
			{
				$childNodes = $_domNode->childNodes;
				$childNodesLength = $childNodes->length;
				$firstValidNodePos = 0;
				while(!(($childNodes->item($firstValidNodePos) instanceof DOMNode) && $childNodes->item($firstValidNodePos)->nodeType === XML_ELEMENT_NODE) && $firstValidNodePos++ < $childNodesLength);
				/**
				 * Not an enumeration restriction :
				 * <xs:simpleType name="duration">
				 * -<xs:restriction base="xs:duration">
				 * --<xs:pattern value="\-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?"/>
				 * --<xs:minInclusive value="-P10675199DT2H48M5.4775808S"/>
				 * --<xs:maxInclusive value="P10675199DT2H48M5.4775807S"/>
				 * -</xs:restriction>
				 * </xs:simpleType>
				 */
				if($childNodes->item($firstValidNodePos) && stripos($childNodes->item($firstValidNodePos)->nodeName,'enumeration') === false)
				{
					$this->addVirtualStruct($parentNode->getAttribute('name'));
					for($i = 0;$i < $childNodesLength;$i++)
					{
						$childNode = $childNodes->item($i);
						if($childNode && $childNode->hasAttributes())
						{
							$childNodeName = explode(':',$childNode->nodeName);
							$childNodeName = $childNodeName[count($childNodeName) - 1];
							$childNodeValue = $childNode->getAttribute('value');
							$this->addStructMeta($parentNode->getAttribute('name'),$childNodeName,$childNodeValue);
						}
					}
				}
			}
		}
	}
	/**
	 * Manage an enumeratio tag
	 * @uses WsdlToPhpGenerator::findSuitableParent()
	 * @uses WsdlToPhpGenerator::addRestrictionValue()
	 * @uses DOMElement::getAttribute()
	 * @uses DOMElement::hasAttribute()
	 * @param string $_wsdlLocation the wsdl location
	 * @param DOMNode $_domNode the node
	 * @param string $_fromWsdlLocation the wsdl location imported
	 * @return void
	 */
	protected function manageWsdlNodeEnumeration($_wsdlLocation = '',DOMNode $_domNode,$_fromWsdlLocation = '')
	{
		$parentNode = self::findSuitableParent($_domNode);
		if($parentNode && $_domNode->hasAttribute('value'))
			$this->addRestrictionValue($parentNode->getAttribute('name'),$_domNode->getAttribute('value'));
	}
	/**
	 * Manage element method
	 * @uses WsdlToPhpGenerator::findSuitableParent()
	 * @uses WsdlToPhpGenerator::addStructAttributeMeta()
	 * @uses DOMElement::getAttribute()
	 * @param string $_wsdlLocation the wsdl location
	 * @param DOMNode $_domNode the node
	 * @param string $_fromWsdlLocation the wsdl location imported
	 * @return void
	 */
	protected function manageWsdlNodeElement($_wsdlLocation = '',DOMNode $_domNode,$_fromWsdlLocation = '')
	{
		/**
		 * Find parent node of this element node
		 */
		$parentNode = self::findSuitableParent($_domNode);
		if($parentNode)
		{
			$attributes = $_domNode->attributes;
			$attributesLength = $attributes->length;
			for($i = 0;$i < $attributesLength;$i++)
			{
				$attribute = $attributes->item($i);
				if($attribute && $attribute->nodeName != 'name' && $attribute->nodeName != 'type')
					$this->addStructAttributeMeta($parentNode->getAttribute('name'),$_domNode->getAttribute('name'),$attribute->nodeName,$attribute->nodeValue);
			}
		}
	}
	/**
	 * Manage element method
	 * @uses WsdlToPhpGenerator::findSuitableParent()
	 * @uses WsdlToPhpGenerator::setStructAttributeDocumentation()
	 * @uses WsdlToPhpGenerator::setStructValueDocumentation()
	 * @uses WsdlToPhpGenerator::setStructDocumentation()
	 * @uses WsdlToPhpGenerator::setServiceFunctionDocumentation()
	 * @uses WsdlToPhpGenerator::addWsdlMeta()
	 * @uses DOMElement::getAttribute()
	 * @uses DOMElement::hasAttribute()
	 * @param string $_wsdlLocation the wsdl location
	 * @param DOMNode $_domNode the node
	 * @param string $_fromWsdlLocation the wsdl location imported
	 * @return void
	 */
	protected function manageWsdlNodeDocumentation($_wsdlLocation = '',DOMNode $_domNode,$_fromWsdlLocation = '')
	{
		$documentation = trim($_domNode->nodeValue);
		$documentation = str_replace(array(
											"\r",
											"\n",
											"\t"),array(
													'',
													'',
													' '),$documentation);
		$documentation = preg_replace('[\s+]',' ',$documentation);
		/**
		 * Find parent node of this documentation node
		 */
		$parentNode = self::findSuitableParent($_domNode,false,array(
																	'enumeration',
																	'definitions',
																	'operation'));
		if($parentNode)
		{
			/**
			 * is it an element ? part of a struct
			 */
			if(stripos($parentNode->nodeName,'element') !== false && $parentNode->hasAttribute('type') && $parentNode->hasAttribute('name') && $parentNode->getAttribute('name') != '')
			{
				/**
				 * Find parent node of this documentation node
				 */
				$upParentNode = self::findSuitableParent($parentNode);
				if($upParentNode)
					$this->setStructAttributeDocumentation($upParentNode->getAttribute('name'),$parentNode->getAttribute('name'),$documentation);
			}
			/**
			 * is it an enumeration
			 */
			elseif(stripos($parentNode->nodeName,'enumeration') !== false)
			{
				/**
				 * Find parent node of this enumeration node
				 */
				$upParentNode = self::findSuitableParent($parentNode);
				if($upParentNode)
					$this->setStructValueDocumentation($upParentNode->getAttribute('name'),$parentNode->getAttribute('value'),$documentation);
			}
			/**
			 * is it a struct ?
			 */
			elseif((stripos($parentNode->nodeName,'element') !== false || stripos($parentNode->nodeName,'complextype') !== false || stripos($parentNode->nodeName,'simpletype') !== false) && $parentNode->hasAttribute('name') && $parentNode->getAttribute('name') != '')
				$this->setStructDocumentation($parentNode->getAttribute('name'),$documentation);
			/**
			 * is it an operation ?
			 */
			elseif(stripos($parentNode->nodeName,'operation') !== false && $parentNode->hasAttribute('name') && $parentNode->getAttribute('name') != '')
				$this->setServiceFunctionDocumentation($parentNode->getAttribute('name'),$documentation);
			/**
			 * is it a definitions ?
			 */
			elseif(stripos($parentNode->nodeName,'definitions') !== false)
				$this->addWsdlMeta('documentation',$documentation);
		}
	}
	/**
	 * Manage extension method
	 * @uses WsdlToPhpGenerator::findSuitableParent()
	 * @uses WsdlToPhpGenerator::setStructInheritance()
	 * @uses DOMElement::hasAttribute()
	 * @uses DOMElement::getAttribute()
	 * @param string $_wsdlLocation the wsdl location
	 * @param DOMNode $_domNode the node
	 * @param string $_fromWsdlLocation the wsdl location imported
	 * @return void
	 */
	protected function manageWsdlNodeExtension($_wsdlLocation = '',DOMNode $_domNode,$_fromWsdlLocation = '')
	{
		if($_domNode->hasAttribute('base'))
		{
			$base = explode(':',$_domNode->getAttribute('base'));
			$inheritsName = $base[count($base) - 1];
			if(!empty($inheritsName))
			{
				/**
				 * Find parent node of this extension node
				 */
				$parentNode = self::findSuitableParent($_domNode);
				if($parentNode)
				{
					/**
					 * Avoid infinite loop on case like this when looping/managing inheritance :
					 * <xs:complexType name="duration">
					 * -<xs:simpleContent>
					 * --<xs:extension base="xs:duration">
					 * ---<xs:attributeGroup ref="tns:commonAttributes"/>
					 * --</xs:extension>
					 * -</xs:simpleContent>
					 * </xs:complexType>
					 */
					if($inheritsName !== $parentNode->getAttribute('name'))
						$this->setStructInheritance($parentNode->getAttribute('name'),$inheritsName);
				}
			}
		}
	}
	/**
	 * Find the suitable parent node of the current node in maximum 5 parents
	 * Centralize method to find a valid parent
	 * @uses DOMElement::getAttribute()
	 * @uses DOMElement::hasAttribute()
	 * @param DOMNode $_domNode
	 * @param bool $_checkName whether to validate the attribute named "name" or not
	 * @param array $_parentTags parent tags name to fit a parent tag
	 * @param int $_maxDeep max deep of this current node
	 * @return DOMElement|null
	 */
	final private function findSuitableParent(DOMNode $_domNode,$_checkName = true,array $_parentTags = array(),$_maxDeep = 5)
	{
		$parentTags = array_merge(array(
										'element',
										'complexType',
										'simpleType',
										'attribute'),$_parentTags);
		$parentNode = $_domNode->parentNode;
		while($_maxDeep-- > 0 && ($parentNode instanceof DOMElement) && $parentNode->nodeName && (!preg_match('/' . implode('|',$parentTags) . '/i',$parentNode->nodeName) || ($_checkName && preg_match('/' . implode('|',$parentTags) . '/i',$parentNode->nodeName) && (!$parentNode->hasAttribute('name') || $parentNode->getAttribute('name') == ''))))
			$parentNode = $parentNode->parentNode;
		return ($parentNode instanceof DOMElement)?$parentNode:null;
	}
	/**
	 * Return directory where to store class and create it if needed
	 * @uses WsdlToPhpGenerator::getCategory()
	 * @uses WsdlToPhpGenerator::getSubCategory()
	 * @param string $_rootDirectory the directory
	 * @param int $_rootDirectoryRights the permissions to apply
	 * @param string $_string the string to use to generate the directory
	 * @return string
	 */
	private function getDirectory($_rootDirectory,$_rootDirectoryRights,$_string)
	{
		$directory = $_rootDirectory;
		$mainCat = $this->getCategory($_string);
		$subCat = $this->getSubCategory($_string);
		if(!empty($mainCat))
		{
			$directory .= ucfirst($mainCat) . '/';
			if(!is_dir($directory))
				@mkdir($directory,$_rootDirectoryRights);
		}
		if(!empty($subCat))
		{
			$directory .= ucfirst($subCat) . '/';
			if(!is_dir($directory))
				@mkdir($directory,$_rootDirectoryRights);
		}
		return $directory;
	}
	/**
	 * Get main category part
	 * @param string $_string element name
	 * @return string
	 */
	private function getCategory($_string)
	{
		return $this->getPart($_string,self::OPT_CAT_KEY);
	}
	/**
	 * Get sub category part
	 * @param string $_string element name
	 * @return string
	 */
	private function getSubCategory($_string)
	{
		return $this->getPart($_string,self::OPT_SUB_CAT_KEY);
	}
	/**
	 * Get gather name class
     * @param string $_string element name
     * @return string
	 */
	private function getGather($_string)
	{
		return $this->getPart($_string,self::OPT_GATH_METH_KEY);
	}
	/**
	 * Returns the service name associated to the function/operation name in order to gather them in one service class
	 * @uses WsdlToPhpGenerator::getGather()
	 * @uses WsdlToPhpModel::cleanString()
	 * @param string $_functionName original operation/function anme
	 * @return string
	 */
	private function getServiceName($_functionName)
	{
		return ucfirst($this->getGather(WsdlToPhpModel::cleanString($_functionName)));
	}
	/**
	 * Get category part
	 * @uses WsdlToPhpGenerator::getOptionCategory()
	 * @uses WsdlToPhpGenerator::getOptionSubCategory()
	 * @uses WsdlToPhpGenerator::getPart()
	 * @uses WsdlToPhpGenerator::getOptionGatherMethods()
	 * @param string $_string element name
	 * @param string $_optionName category type
	 * @return string
	 */
	protected function getPart($_string,$_optionName)
	{
		$elementType = '';
		$optionValue = 0;
		switch($_optionName)
		{
			case self::OPT_CAT_KEY:
				$optionValue = self::getOptionCategory();
				break;
			case self::OPT_SUB_CAT_KEY:
				$optionValue = self::getOptionSubCategory();
				$mainCatPart = $this->getPart($_string,self::OPT_CAT_KEY);
				switch(self::getOptionCategory())
				{
					case self::OPT_CAT_END_NAME:
						if($_string != $mainCatPart && strlen($mainCatPart) < strlen($_string))
							$_string = substr($_string,0,strlen($_string) - strlen($mainCatPart));
						elseif($_string = $mainCatPart)
							$_string = '';
						break;
					case self::OPT_CAT_START_NAME:
						if($_string != $mainCatPart && strlen($mainCatPart) < strlen($_string))
							$_string = substr($_string,strlen($mainCatPart));
						elseif($_string = $mainCatPart)
							$_string = '';
						break;
					case self::OPT_SUB_CAT_NONE_NAME:
					default:
						$_string = '';
						break;
				}
				break;
			case self::OPT_GATH_METH_KEY:
				$optionValue = self::getOptionGatherMethods();
				break;
		}
		if(!empty($_string))
		{
			switch($optionValue)
			{
				case self::OPT_CAT_END_NAME:
				case self::OPT_SUB_CAT_END_NAME:
				case self::OPT_GATH_METH_END_NAME:
					/**
					 * Determine category from last word
					 */
					$parts = preg_split('/[A-Z]/',ucfirst($_string));
					/**
					 * Ex : Error or error
					 */
					if(count($parts) == 0)
						$elementType = $_string;
					elseif(!empty($parts[count($parts) - 1]))
						$elementType = substr($_string,strrpos($_string,implode('',array_slice($parts,-1))) - 1);
					else
					{
						$part = '';
						for($i = count($parts) - 1;$i >= 0;$i--)
						{
							$part = trim($parts[$i]);
							if(!empty($part))
								break;
						}
						$elementType = substr($_string,((count($parts) - 2 - $i) + 1) * -1);
					}
					break;
				case self::OPT_CAT_START_NAME:
				case self::OPT_SUB_CAT_START_NAME:
				case self::OPT_GATH_METH_START_NAME:
					/**
					 * Determine category from first word
					 */
					$parts = preg_split('/[A-Z]/',ucfirst($_string));
					/**
					 * Ex : Error or error
					 */
					if(count($parts) == 0)
						$elementType = $_string;
					elseif(empty($parts[0]) && !empty($parts[1]))
						$elementType = substr($_string,0,strlen($parts[1]) + 1);
					else
					{
						$part = '';
						for($i = 0;$i < count($parts);$i++)
						{
							$part = trim($parts[$i]);
							if(!empty($part))
								break;
						}
						$elementType = substr($_string,0,$i);
					}
					break;
				case self::OPT_CAT_NONE_NAME:
				case self::OPT_SUB_CAT_NONE_NAME:
				default:
					break;
			}
		}
		return $elementType;
	}
	/**
	 * Return current class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>