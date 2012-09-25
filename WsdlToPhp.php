<?php
/**
 * File for class WsdlToPhp
 * @date 25/06/2012
 */
/**
 * Class WsdlToPhp
 * @date 25/06/2012
 */
class WsdlToPhp extends SoapClient
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
	 * Structs array
	 * @var array
	 */
	private $structs;
	/**
	 * Functions arrays
	 * @var array
	 */
	private $functions;
	/**
	 * Wsdl lists
	 * @var array
	 */
	private $wsdls;
	/**
	 * Option to categorize classes
	 * @var int
	 */
	private $optionCategory;
	/**
	 * Option to subcategorize classes
	 * @var int
	 */
	private $optionSubCategory;
	/**
	 * Option to define how to gather methods by classes
	 * @var int
	 */
	private $optionGatherMethods;
	/**
	 * Option to set that parameters to soap call must be contained by an array where indexex are the parameters name
	 * @var bool
	 */
	private $optionSendArrayAsParameter;
	/**
	 * Option to enabled/disable autoload file generation
	 * @var bool
	 */
	private $optionGenerateAutoloadFile;
	/**
	 * Option to enabled/disable wsdl class file generation
	 * @var bool
	 */
	private $optionGenerateWsdlClassFile;
	/**
	 * Option to enable/disable encapsulation of response or not in the response class
	 * @var bool
	 */
	private $optionResponseAsWsdlObject;
	/**
	 * Option to enable/disable encapsulation of request in array with 'parameters' as main index
	 * @var bool
	 */
	private $optionSendParametersAsArray;
	/**
	 * Option to set string that points bases classes from which some classes inherits
	 * @var string
	 */
	private $optionInheritsClassIdentifier;
	/**
	 * Option to set set the generation of contants names based on the enumeration name with an incremental value
	 * @var string
	 */
	private $optionGenericConstantsNames;
	/**
	 * Constructor
	 * @param string $_pathToWsdl
	 * @param string $_login
	 * @param string $_password
	 * @param array $_options
	 * @param array $_wsdlOptions
	 */
	public function __construct($_pathToWsdl,$_login = false,$_password = false,array $_options = array(),array $_wsdlOptions = array())
	{
		/**
		 * Options for WSDL
		 */
		$options = $_wsdlOptions;
		$options['trace'] = true;
		$options['exceptions'] = true;
		$options['cache_wsdl'] = WSDL_CACHE_NONE;
		if(!empty($_login) && !empty($_password))
		{
			$options['login'] = $_login;
			$options['password'] = $_password;
		}
		$this->setStructs(array());
		$this->setFunctions(array());
		$this->setWsdls(array());
		/**
		 * Construct
		 */
		try
		{
			parent::__construct($_pathToWsdl,$options);
		}
		catch(SoapFault $fault)
		{
			print_r($fault);
		}
		$this->addWsdl($_pathToWsdl);
		/**
		 * Set attributes
		 */
		$this->setOptionCategory(array_key_exists(self::OPT_CAT_KEY,$_options)?$_options[self::OPT_CAT_KEY]:self::OPT_CAT_START_NAME);
		$this->setOptionGenerateAutoloadFile(array_key_exists(self::OPT_GEN_AUTOLOAD_KEY,$_options)?$_options[self::OPT_GEN_AUTOLOAD_KEY]:false);
		$this->setOptionSubCategory(array_key_exists(self::OPT_SUB_CAT_KEY,$_options)?$_options[self::OPT_SUB_CAT_KEY]:self::OPT_SUB_CAT_START_NAME);
		$this->setOptionGenerateWsdlClassFile(array_key_exists(self::OPT_GEN_WSDL_CLASS_KEY,$_options)?$_options[self::OPT_GEN_WSDL_CLASS_KEY]:false);
		$this->setOptionGatherMethods(array_key_exists(self::OPT_GATH_METH_KEY,$_options)?$_options[self::OPT_GATH_METH_KEY]:self::OPT_GATH_METH_START_NAME);
		$this->setOptionSendArrayAsParameter(array_key_exists(self::OPT_SEND_PARAM_AS_ARRAY_KEY,$_options)?$_options[self::OPT_SEND_PARAM_AS_ARRAY_KEY]:false);
		$this->setOptionResponseAsWsdlObject(array_key_exists(self::OPT_RESPONSE_AS_WSDL_OBJECT_KEY,$_options)?$_options[self::OPT_RESPONSE_AS_WSDL_OBJECT_KEY]:false);
		$this->setOptionGenericConstantsNames(array_key_exists(self::OPT_GENERIC_CONSTANTS_NAMES_KEY,$_options)?$_options[self::OPT_GENERIC_CONSTANTS_NAMES_KEY]:false);
		$this->setOptionInheritsClassIdentifier(array_key_exists(self::OPT_INHERITS_FROM_IDENTIFIER_KEY,$_options)?$_options[self::OPT_INHERITS_FROM_IDENTIFIER_KEY]:'');
		$this->setOptionSendParametersAsArray(array_key_exists(self::OPT_SEND_PARAMETERS_AS_ARRAY_KEY,$_options)?$_options[self::OPT_SEND_PARAMETERS_AS_ARRAY_KEY]:false);
	}
	/**
	 * Generate all classes based on options
	 * @param string $_packageName
	 * @param string $_rootDirectory
	 * @param int $_rootDirectoryRights
	 * @param bool $_createRootDirectory
	 */
	public function generateClasses($_packageName,$_rootDirectory,$_rootDirectoryRights = 0775,$_createRootDirectory = true)
	{
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
			if(!count($this->getFunctions()))
				$this->initFunctions();
			if(!$init && count($this->wsdls))
				$this->loadWsdls(implode('',array_slice(array_keys($this->wsdls),0,1)));
			/**
			 * Generate Wsdl Class ?
			 */
			if($this->getOptionGenerateWsdlClassFile())
				$wsdlClassFile = $this->generateWsdlClassFile($_packageName,$rootDirectory,$_rootDirectoryRights);
			else
				$wsdlClassFile = array();
			if(!count($wsdlClassFile))
				$this->setOptionGenerateWsdlClassFile(false);
			/**
			 * Generate classes files
			 */
			$structsClassesFiles = $this->generateStructsClasses($_packageName,$rootDirectory,$_rootDirectoryRights);
			$functionsClassesFiles = $this->generateFunctionsClasses($_packageName,$rootDirectory,$_rootDirectoryRights);
			$classMapFile = $this->generateClassMap($_packageName,$rootDirectory,$_rootDirectoryRights);
			/**
			 * Generate autoload ?
			 */
			if($this->getOptionGenerateAutoloadFile())
				$this->generateAutoloadFile($_packageName,$rootDirectory,$_rootDirectoryRights,array_merge($wsdlClassFile,$structsClassesFiles,$functionsClassesFiles,$classMapFile));
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
	 * @tutorial restriction aren't get with structs, see loadWsdls :
	 * <xsd:simpleType name="SearchOption">
	 * --<xsd:restriction base="xsd:string">
	 * ----<xsd:enumeration value="DisableLocationDetection"/>
	 * ----<xsd:enumeration value="EnableHighlighting"/>
	 * --</xsd:restriction>
	 * </xsd:simpleType>
	 * Example on how to send them : http://msdn.microsoft.com/en-us/library/dd250961
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
				 * Remove brackets
				 */
				$type = str_replace("{",'',$type);
				$type = str_replace("}",'',$type);
				/**
				 * Add space to parse it
				 */
				$type = str_replace(';',' ;',$type);
				/**
				 * Remove duplicate spaces
				 */
				$type = preg_replace('/[\s]+/',' ',$type);
				/**
				 * Explode definition base on format :
				 * struct {struct_name} {paramName} {paramValue} ;[{paramName} {paramValue} ;]+
				 */
				$typeDef = explode(' ',$type);
				/**
				 * Get struct definition start
				 */
				$struct = $typeDef[0];
				if($struct != 'struct')
					continue;
				/**
				 * Replace some uppercase words in struct name
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
								$this->addStruct($structParamType,$structParamName,$structName);
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
					$this->addStruct($structParamType,$structParamName,$structName);
			}
		}
		else
			return false;
	}
	/**
	 * Generate structs classes based on structs collected
	 * @param string $_packageName
	 * @param string $_rootDirectory
	 * @param bool $_rootDirectoryRights
	 */
	private function generateStructsClasses($_packageName,$_rootDirectory,$_rootDirectoryRights)
	{
		$structs = $this->getStructs();
		$structsClassesFiles = array();
		if(count($structs))
		{
			$ClassType = ucfirst($_packageName);
			$classType = $_packageName;
			/**
			 * Ordering structs in order to generate mother class first and to put them on top in the autoload file
			 */
			$structsToGenerateDone = array();
			foreach($structs as $structName=>$structParams)
			{
				if(!array_key_exists($structName,$structsToGenerateDone))
					$structsToGenerateDone[$structName] = 0;
				if(is_array($structParams) && array_key_exists('inherits',$structParams) && !empty($structParams['inherits']) && array_key_exists($structParams['inherits'],$structs))
				{
					$inherits = $structParams['inherits'];
					while(!empty($inherits) && array_key_exists($inherits,$structs))
					{
						if(!array_key_exists($inherits,$structsToGenerateDone))
							$structsToGenerateDone[$inherits] = 1;
						else
							$structsToGenerateDone[$inherits]++;
						$inherits = (array_key_exists($inherits,$structs) && is_array($structs[$inherits]) && array_key_exists('inherits',$structs[$inherits]))?$structs[$inherits]['inherits']:'';
					}
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
			unset($structTmp);
			unset($structsToGenerateDone);
			foreach($structs as $structName=>$structParams)
			{
				$elementFolder = $this->getDirectory($_rootDirectory,$_rootDirectoryRights,$structName);
				/**
				 * Extends class name
				 */
				$extend = '';
				$inherits = false;
				if($this->getOptionInheritsClassIdentifier() != '')
				{
					$currentOptionValue = $this->getOptionCategory();
					$this->setOptionCategory(self::OPT_CAT_END_NAME);
					$structType = $this->getPart($structName,self::OPT_CAT_KEY);
					if(array_key_exists($structType . $this->getOptionInheritsClassIdentifier(),$this->getStructs()))
					{
						$extend = $ClassType . 'Type' . $structType . $this->getOptionInheritsClassIdentifier();
						$inherits = true;
					}
					$this->setOptionCategory($currentOptionValue);
				}
				elseif(array_key_exists('inherits',$structParams) && array_key_exists($structParams['inherits'],$this->getStructs()))
				{
					$extend = $ClassType . 'Type' . $structParams['inherits'];
					$inherits = true;
					unset($structParams['inherits']);
				}
				if(empty($extend) && $this->getOptionGenerateWsdlClassFile())
					$extend = $ClassType . 'WsdlClass';
				/**
				 * Class definition
				 */
				$className = $ClassType . 'Type' . ucFirst(self::cleanClassName($structName));
				$classMap[$structName] = $className;
				/**
				 * Define struct class file name and initialize struct class generator
				 */
				$documentation = '';
				if(array_key_exists('documentation',$structParams))
				{
					$documentation = "\r\n * Documentation : " . $structParams['documentation'];
					unset($structParams['documentation']);
				}
				$structsClassesFiles[] = $structClassFileName = $elementFolder . $className . '.php';
				$php = new ezcPhpGenerator($structClassFileName,true,true);
				$php->indentString = "	";
				$php->appendCustomCode("/**\r\n * Class file for $className\r\n * @date " . date('d/m/Y') . "\r\n */\r\n/**\r\n * Class $className$documentation\r\n * @date " . date('d/m/Y') . "\r\n */");
				$php->appendCustomCode("class $className" . (!empty($extend)?' extends ' . self::cleanClassName($extend):''));
				$php->appendCustomCode("{");
				/**
				 * Attributes
				 */
				$php->indentLevel++;
				$parameters = array();
				$parametersSring = "";
				$usesSring = "";
				$isRestriction = false;
				$parametersList = array();
				$parametersForParent = array();
				$parametersType = array();
				if(count($structParams))
				{
					foreach($structParams as $elementIndex=>$element)
					{
						/**
						 * Current index is not valid
						 */
						if(!is_numeric($elementIndex))
							continue;
						/**
						 * Get informations and sanitize them
						 */
						$type = $element['type'];
						$Type = self::cleanClassName(ucfirst($type));
						$name = $element['name'];
						$cleanName = self::cleanPropertyName($name);
						$meta = $element['meta'];
						$isRestriction = (array_key_exists('isRestriction',$element) && $element['isRestriction'] == true);
						/**
						 * Is it's not a restriction, aka an enumeration in mot case, we generate the attributes
						 */
						if(!$isRestriction)
						{
							/**
							 * List of attributes for whoch we generate setters, getters, general methods
							 */
							$parameters[] = array(
												'type'=>$type,
												'name'=>$name);
							/**
							 * Is attribute is a know type
							 */
							if(array_key_exists($type,$this->getStructs()) || strpos($type,'ArrayOf') !== false)
								$parametersSring .= "\r\n * @param " . $ClassType . 'Type' . $Type . " $name";
							else
								$parametersSring .= "\r\n * @param " . $type . " $name";
							/**
							 * Uses documentation part
							 */
							$usesSring .= "\r\n * @uses $className::set" . ucfirst($cleanName) . "()";
							/**
							 * Parameters used for methods assigned to classes matching ArrayOf
							 */
							$parametersType[] = array_key_exists($type,$this->getStructs())?$ClassType . "Type" . $Type:$type;
							/**
							 * Attribute has a default value ? then use it
							 */
							if(array_key_exists('default',$meta))
							{
								$defaultValue = $meta['default'];
								if(is_numeric($defaultValue))
									$defaultValue = floatval($defaultValue);
								elseif(is_bool($defaultValue) || $defaultValue === 'true' || $defaultValue === 'false')
									$defaultValue = ($defaultValue === true || $defaultValue == 'true')?true:false;
								$parametersList[] = '$_' . $cleanName . ' = ' . var_export($defaultValue,true);
							}
							/**
							 * Attribute is required, then the value si required ! 
							 */
							elseif(array_key_exists('minOccurs',$meta) && $meta['minOccurs'] >= 1)
								$parametersList[] = '$_' . $cleanName;
							/**
							 * Default value assignement
							 */
							else
								$parametersList[] = '$_' . $cleanName . ' = null';
							/**
							 * If attribute is type of ArrayOf, then we assign the returned value to the ArrayOf class
							 */
							if(strpos($type,'ArrayOf') !== false)
								$parametersForParent[] = "'$cleanName'=>new " . $ClassType . "Type$Type(" . '$_' . $cleanName . ")";
							else
								$parametersForParent[] = "'$cleanName'=>\$_$cleanName";
							/**
							 * Informations extracted from the XML/WSDL tag attributes of the current attribute
							 */
							$metas = array();
							foreach($meta as $metaName=>$metaValue)
								$metas[] = "\t- " . $metaName . ' : ' . $metaValue;
							if(count($metas))
								array_unshift($metas,"\r\n * " . 'Meta informations :');
							$php->appendCustomCode("/**\r\n * The $name" . implode("\r\n * ",$metas) . "\r\n * @var " . (array_key_exists($type,$this->getStructs())?$ClassType . "Type" . $Type:$type) . "\r\n */");
							$php->appendCustomCode("public \$$cleanName;");
						}
					}
				}
				/**
				 * Restriction class, set constant and values allowed
				 */
				if($isRestriction && array_key_exists('values',$element) && count($element['values']))
				{
					$valuesDone = array();
					$inArray = array();
					$valuesCount = count($element['values']);
					$valuesCountLength = strlen($valuesCount);
					foreach($element['values'] as $index=>$value)
					{
						$meta = '';
						if(array_key_exists($value,$element['meta']))
						{
							foreach($element['meta'][$value] as $metaName=>$metaValue)
								$meta = "\r\n * \t- $metaName : $metaValue";
						}
						$meta = !empty($meta)?"\r\n * " . 'Meta informations :' . $meta:$meta;
						$php->appendCustomCode("/**\r\n * Constant for value '$value'$meta\r\n * @return string '" . $value . "'\r\n */");
						/**
						 * Generic name avoiding naming problems from custom values
						 */
						if($this->getOptionGenericConstantsNames())
							$constantValueName = 'ENUM_VALUE_' . str_repeat('0',$valuesCountLength - strlen($index)) . $index;
						/**
						 * Constant name based on the value contained by the constant
						 */
						else
						{
							/**
							 * Avoid multiple constant with same name for different case value
							 */
							$cleanValueName = self::cleanConstantName($value);
							$constantValueName = strtoupper($cleanValueName);
							if(!array_key_exists($constantValueName,$valuesDone))
								$valuesDone[$constantValueName] = 0;
							else
								$valuesDone[$constantValueName]++;
							$constantValueName .= ((array_key_exists($constantValueName,$valuesDone) && $valuesDone[$constantValueName])?'_' . $valuesDone[$constantValueName]:'');
							$constantValueName = 'VALUE_' . $constantValueName;
						}
						$inArray[] = 'self::' . $constantValueName;
						$php->appendCustomCode('const ' . $constantValueName . ' = \'' . $value . '\';');
					}
				}
				/**
				 * Constructor
				 */
				$php->appendCustomCode("/**\r\n * Constructor$parametersSring\r\n * @return $className\r\n */");
				$php->appendCustomCode("public function __construct(" . implode(',',$parametersList) . ")");
				$php->appendCustomCode("{");
				$php->indentLevel++;
				$php->appendCustomCode(($inherits && $this->getOptionGenerateWsdlClassFile()?$ClassType . 'WsdlClass':'parent') . "::__construct(array(" . implode(',',$parametersForParent) . "));");
				$php->indentLevel--;
				$php->appendCustomCode("}");
				/**
				 * Add method per attributes
				 */
				if(count($parameters))
				{
					foreach($parameters as $parameter)
					{
						$cleanParameter = self::cleanPropertyName($parameter['name']);
						/**
						 * Set
						 */
						$php->appendCustomCode("/**\r\n * Set " . $cleanParameter . "\r\n * @param " . $parameter['type'] . " " . $cleanParameter . "\r\n * @return " . $parameter['type'] . "\r\n */");
						$php->appendCustomCode("public function set" . ucfirst($cleanParameter) . "(\$_" . $cleanParameter . ")");
						$php->appendCustomCode("{");
						$php->indentLevel++;
						if(strpos($className,'ArrayOf') === false && array_key_exists($parameter['type'],$this->getStructs()) && count($this->structs[$parameter['type']]) && array_key_exists('isRestriction',$this->structs[$parameter['type']][0]) && $this->structs[$parameter['type']][0]['isRestriction'] == true && array_key_exists('values',$this->structs[$parameter['type']][0]) && count($this->structs[$parameter['type']][0]['values']))
							$php->appendCustomCode('return ($this->' . $cleanParameter . ' = ' . $ClassType . 'Type' . $parameter['type'] . '::valueIsValid($_' . $cleanParameter . ')?$_' . $cleanParameter . ':null);');
						else
							$php->appendCustomCode("return (\$this->" . $cleanParameter . ' = $_' . $cleanParameter . ');');
						$php->indentLevel--;
						$php->appendCustomCode("}");
						/**
						 * Get
						 */
						$php->appendCustomCode("/**\r\n * Get " . $cleanParameter . "\r\n * @return " . ((array_key_exists($parameter['type'],$this->getStructs()) || strpos($parameter['type'],'ArrayOf') !== false)?$ClassType . 'Type' . $parameter['type']:$parameter['type']) . "\r\n */");
						$php->appendCustomCode("public function get" . ucfirst($cleanParameter) . "()");
						$php->appendCustomCode("{");
						$php->indentLevel++;
						if(strpos($parameter['type'],'XML') !== false || strpos($parameter['type'],'DOMDocument') !== false)
						{
							$php->appendCustomCode("if(!(\$this->" . $cleanParameter . " instanceof DOMDocument))");
							$php->appendCustomCode("{");
							$php->indentLevel++;
							$php->appendCustomCode("\$dom = new DOMDocument('1.0','UTF-8');");
							$php->appendCustomCode("\$dom->formatOutput = true;");
							$php->appendCustomCode("\$dom->loadXML(\$this->" . $cleanParameter . ");");
							$php->appendCustomCode("\$this->set" . ucfirst($cleanParameter) . "(\$dom);");
							$php->indentLevel--;
							$php->appendCustomCode("}");
						}
						$php->appendCustomCode("return \$this->" . $cleanParameter . ';');
						$php->indentLevel--;
						$php->appendCustomCode("}");
					}
					/**
					 * Add specifics methods for classes like "*ArrayOf" in order to give type to value returned by specifics methods
					 */
					if(strpos($className,'ArrayOf') !== false && count($parametersType) == 1)
					{
						/**
						 * current method
						 */
						$php->appendCustomCode("/**\r\n * Returns the current element\r\n * @see " . $ClassType . "WsdlClass::current()\r\n * @return " . $parametersType[0] . "\r\n */");
						$php->appendCustomCode("public function current()");
						$php->appendCustomCode("{");
						$php->indentLevel++;
						$php->appendCustomCode("return parent::current();");
						$php->indentLevel--;
						$php->appendCustomCode("}");
						/**
						 * item method
						 */
						$php->appendCustomCode("/**\r\n * Returns the element\r\n * @see " . $ClassType . "WsdlClass::item()\r\n * @param int\r\n * @return " . $parametersType[0] . "\r\n */");
						$php->appendCustomCode("public function item(\$_index)");
						$php->appendCustomCode("{");
						$php->indentLevel++;
						$php->appendCustomCode("return parent::item(\$_index);");
						$php->indentLevel--;
						$php->appendCustomCode("}");
						/**
						 * first method
						 */
						$php->appendCustomCode("/**\r\n * Returns the first element\r\n * @see " . $ClassType . "WsdlClass::first()\r\n * @return " . $parametersType[0] . "\r\n */");
						$php->appendCustomCode("public function first()");
						$php->appendCustomCode("{");
						$php->indentLevel++;
						$php->appendCustomCode("return parent::first();");
						$php->indentLevel--;
						$php->appendCustomCode("}");
						/**
						 * last method
						 */
						$php->appendCustomCode("/**\r\n * Returns the first element\r\n * @see " . $ClassType . "WsdlClass::last()\r\n * @return " . $parametersType[0] . "\r\n */");
						$php->appendCustomCode("public function last()");
						$php->appendCustomCode("{");
						$php->indentLevel++;
						$php->appendCustomCode("return parent::last();");
						$php->indentLevel--;
						$php->appendCustomCode("}");
						/**
						 * offsetGet method
						 */
						$php->appendCustomCode("/**\r\n * Returns the first element\r\n * @see " . $ClassType . "WsdlClass::offsetGet()\r\n * @param int\r\n * @return " . $parametersType[0] . "\r\n */");
						$php->appendCustomCode("public function offsetGet(\$_offset)");
						$php->appendCustomCode("{");
						$php->indentLevel++;
						$php->appendCustomCode("return parent::offsetGet(\$_offset);");
						$php->indentLevel--;
						$php->appendCustomCode("}");
						/**
						 * Add method
						 */
						if(is_array($parameter) && array_key_exists($parameter['type'],$this->getStructs()) && is_array($this->structs[$parameter['type']]) && count($this->structs[$parameter['type']]) && array_key_exists('isRestriction',$this->structs[$parameter['type']][0]) && $this->structs[$parameter['type']][0]['isRestriction'] == true && array_key_exists('values',$this->structs[$parameter['type']][0]) && count($this->structs[$parameter['type']][0]['values']))
						{
							$php->appendCustomCode("/**\r\n * Add element to array\r\n * @see " . $ClassType . "WsdlClass::add()\r\n * @uses " . $ClassType . 'Type' . self::cleanClassName($parameter['type']) . "::valueIsValid()\r\n * @param " . $parametersType[0] . "\r\n * @return bool true|false\r\n */");
							$php->appendCustomCode("public function add(\$_item)");
							$php->appendCustomCode("{");
							$php->indentLevel++;
							$php->appendCustomCode("return " . $ClassType . 'Type' . self::cleanClassName($parameter['type']) . '::valueIsValid($_item)?parent::add($_item):false;');
							$php->indentLevel--;
							$php->appendCustomCode("}");
						}
						/**
						 * Return alone attribute name
						 */
						$php->appendCustomCode("/**\r\n * Returns the attribute name\r\n * @return string '" . $cleanParameter . "'\r\n */");
						$php->appendCustomCode("public function getAttributeName()");
						$php->appendCustomCode("{");
						$php->indentLevel++;
						$php->appendCustomCode("return '" . str_replace($ClassType . 'Type','',$cleanParameter) . "';");
						$php->indentLevel--;
						$php->appendCustomCode("}");
					}
				}
				/**
				 * Restriction class, set constant and values allowed
				 */
				if($isRestriction && array_key_exists('values',$element) && count($element['values']))
				{
					/**
					 * Return true if value is allowed
					 */
					$php->appendCustomCode("/**\r\n * Return true if value is allowed\r\n * @param string value\r\n * @return bool true|false\r\n */");
					$php->appendCustomCode("public static function valueIsValid(\$_value)");
					$php->appendCustomCode("{");
					$php->indentLevel++;
					$php->appendCustomCode("return in_array(\$_value,array(" . implode(',',$inArray) . "));");
					$php->indentLevel--;
					$php->appendCustomCode("}");
				}
				/**
				 * Class name
				 */
				$php->appendCustomCode("/**\r\n * Method returning the class name\r\n * @return string __CLASS__\r\n */");
				$php->appendCustomCode("public function __toString()");
				$php->appendCustomCode("{");
				$php->indentLevel++;
				$php->appendCustomCode('return __CLASS__;');
				$php->indentLevel--;
				$php->appendCustomCode("}");
				$php->indentLevel--;
				/**
				 * End
				 */
				$php->appendCustomCode("}");
				$php->finish();
			}
		}
		return $structsClassesFiles;
	}
	/**
	 * Initialize functions :
	 * - Get structs defined
	 * - Parse each struct definition
	 */
	private function initFunctions()
	{
		$functions = $this->__getFunctions();
		if(is_array($functions) && count($functions))
		{
			foreach($functions as $function)
			{
				$infos = array();
				preg_match('/([A-Za-z\d_]+) ([A-Za-z\d_]+)\(([A-Za-z\d_]+) \$.+\)/',$function,$infos);
				if(count($infos) == 4)
					$this->addFunction($infos[2],$infos[3],$infos[1]);
			}
		}
		else
			return false;
	}
	/**
	 * Generate methods by class
	 * @param string $_packageName
	 * @param string $_rootDirectory
	 * @param bool $_rootDirectoryRights
	 */
	private function generateFunctionsClasses($_packageName,$_rootDirectory,$_rootDirectoryRights)
	{
		$functions = $this->getFunctions();
		$functionsClassesFiles = array();
		if(count($functions))
		{
			$PackageName = ucfirst($_packageName);
			$structs = $this->getStructs();
			foreach($functions as $className=>$methods)
			{
				$elementFolder = $this->getDirectory($_rootDirectory,$_rootDirectoryRights,$className);
				$ClassName = $PackageName . 'Service' . ucfirst(self::cleanClassName($className));
				$functionsClassesFiles[] = $functionClassFileName = $elementFolder . $ClassName . '.php';
				$php = new ezcPhpGenerator($functionClassFileName,true,true);
				$php->indentString = "	";
				/**
				 * Start
				 */
				if($this->getOptionGenerateWsdlClassFile())
					$extend = $PackageName . 'WsdlClass';
				else
					$extend = '';
				$php->appendCustomCode("/**\r\n * Class file for $ClassName\r\n * @date " . date('d/m/Y') . "\r\n */\r\n/**\r\n * Class $ClassName\r\n * @date " . date('d/m/Y') . "\r\n */");
				$php->appendCustomCode("class $ClassName" . (empty($extend)?'':' extends ' . $extend));
				$php->appendCustomCode("{");
				$php->indentLevel++;
				/**
				 * Returns type list
				 */
				$methodReturns = array();
				/**
				 * Methods
				 */
				foreach($methods as $index=>$methodInfos)
				{
					$methodName = $methodInfos['method'];
					$meta = $methodInfos['meta'];
					/**
					 * Parameter name
					 */
					$methodParam = ucfirst($methodInfos['parameter']);
					$lmethodParam = lcfirst($methodParam);
					$umethodParam = ucfirst($methodParam);
					/**
					 * Get parameter infos
					 */
					$methodsToCall = array();
					$methodsUsed = array();
					if(array_key_exists($lmethodParam,$structs) || array_key_exists($umethodParam,$structs))
					{
						$methodParamAttributes = array_key_exists($lmethodParam,$structs)?$structs[$lmethodParam]:$structs[$umethodParam];
						foreach($methodParamAttributes as $structInfoIndex=>$structInfos)
						{
							if(is_numeric($structInfoIndex))
							{
								$methodsToCall[] = ($this->getOptionSendArrayAsParameter()?'\'' . $structInfos['name'] . '\'=>':'') . '$_' . $_packageName . 'Type' . ucfirst($methodParam) . '->get' . ucfirst($structInfos['name']) . '()';
								$methodsUsed[] = $PackageName . 'Type' . ucfirst($methodParam) . '::get' . ucfirst($structInfos['name']) . '()';
							}
						}
					}
					/**
					 * Return name
					 */
					$methodReturn = ucfirst($methodInfos['return']);
					$methodReturns[] = $PackageName . 'Type' . $methodReturn;
					/**
					 * Method
					 */
					$php->appendCustomCode("/**\r\n * Method to call $methodName");
					if(count($meta))
					{
						$php->appendCustomCode(" * Meta informations :");
						foreach($meta as $metaName=>$metaValue)
							$php->appendCustomCode(" * \t- $metaName : $metaValue");
					}
					if($this->getOptionGenerateWsdlClassFile())
					{
						$php->appendCustomCode(" * @uses " . $extend . "::getSoapClient()");
						$php->appendCustomCode(" * @uses " . $extend . "::setResult()");
						$php->appendCustomCode(" * @uses " . $extend . "::getResult()");
						$php->appendCustomCode(" * @uses " . $extend . "::saveLastError()");
					}
					foreach($methodsUsed as $methodToUse)
						$php->appendCustomCode(" * @uses $methodToUse");
					if(array_key_exists($lmethodParam,$structs) || array_key_exists($umethodParam,$structs))
						$php->appendCustomCode(" * @param " . $PackageName . "Type$methodParam $methodParam");
					else
						$php->appendCustomCode(" * @param $methodParam $methodParam");
					$php->appendCustomCode(" * @return " . $PackageName . "Type$methodReturn\r\n */");
					$php->appendCustomCode("public function $methodName(" . $PackageName . "Type$methodParam \$_" . $_packageName . "Type$methodParam)");
					$php->appendCustomCode("{");
					$php->indentLevel++;
					$php->appendCustomCode("try");
					$php->appendCustomCode("{");
					$php->indentLevel++;
					$php->appendCustomCode("\$this->setResult(" . ($this->getOptionResponseAsWsdlObject()?'new ' . $PackageName . "Type$methodReturn(":'') . "self::getSoapClient()->$methodName(" . ($this->getOptionSendParametersAsArray()?'array(\'parameters\'=>':'') . ($this->getOptionSendArrayAsParameter()?'array(':'') . implode(',',$methodsToCall) . ($this->getOptionSendArrayAsParameter()?")":'') . ($this->getOptionSendParametersAsArray()?')':'') . ")" . ($this->getOptionSendParametersAsArray()?'->parameters':'') . ($this->getOptionResponseAsWsdlObject()?')':'') . ");");
					$php->indentLevel--;
					$php->appendCustomCode("}");
					$php->appendCustomCode("catch(SoapFault \$fault)");
					$php->appendCustomCode("{");
					$php->indentLevel++;
					$php->appendCustomCode('return !$this->saveLastError(__METHOD__,$fault);');
					$php->indentLevel--;
					$php->appendCustomCode("}");
					$php->appendCustomCode("return \$this->getResult();");
					$php->indentLevel--;
					$php->appendCustomCode("}");
				}
				/**
				 * Result method
				 */
				$php->appendCustomCode("/**\r\n * Method returning the result content\r\n *\r\n * @return " . implode('|',$methodReturns) . "\r\n */");
				$php->appendCustomCode("public function getResult()");
				$php->appendCustomCode("{");
				$php->indentLevel++;
				$php->appendCustomCode('return parent::getResult();');
				$php->indentLevel--;
				$php->appendCustomCode("}");
				/**
				 * Class name
				 */
				$php->appendCustomCode("/**\r\n * Method returning the class name\r\n *\r\n * @return string __CLASS__\r\n */");
				$php->appendCustomCode("public function __toString()");
				$php->appendCustomCode("{");
				$php->indentLevel++;
				$php->appendCustomCode('return __CLASS__;');
				$php->indentLevel--;
				$php->appendCustomCode("}");
				/**
				 * End
				 */
				$php->indentLevel--;
				$php->appendCustomCode("}");
				$php->finish();
			}
		}
		return $functionsClassesFiles;
	}
	/**
	 * Generate classMap class
	 * @param string $_packageName
	 * @param string $_rootDirectory
	 * @param bool $_rootDirectoryRights
	 */
	private function generateClassMap($_packageName,$_rootDirectory,$_rootDirectoryRights)
	{
		$php = new ezcPhpGenerator($_rootDirectory . '/' . ucfirst($_packageName) . 'ClassMap.php',true,true);
		$php->indentString = "	";
		$php->appendCustomCode("/**\r\n * ClassMap \r\n * @date " . date('d/m/Y') . "\r\n */\r\n/**\r\n * ClassMap\r\n * @date " . date('d/m/Y') . "\r\n */");
		$php->appendCustomCode('class ' . ucfirst($_packageName) . 'ClassMap');
		$php->appendCustomCode('{');
		$php->indentLevel++;
		$php->appendCustomCode('final public static function classMap()');
		$php->appendCustomCode('{');
		$php->indentLevel++;
		$structs = $this->getStructs();
		$classesToMap = array();
		foreach($structs as $structName=>$structInfos)
			$classesToMap[$structName] = ucfirst($_packageName) . 'Type' . ucFirst($structName);
		$php->appendCustomCode("return " . var_export($classesToMap,true) . ';');
		$php->indentLevel--;
		$php->appendCustomCode('}');
		$php->indentLevel--;
		$php->appendCustomCode('}');
		$php->finish();
		return array(
					$_rootDirectory . ucfirst($_packageName) . 'ClassMap.php');
	}
	/**
	 * Generate autoload file for all classes
	 * @uses ezcPhpGenerator::appendCustomCode()
	 * @uses ezcPhpGenerator::finish()
	 * @param string $_packageName
	 * @param string $_rootDirectory
	 * @param bool $_rootDirectoryRights
	 * @param array $_classesFiles
	 */
	private function generateAutoloadFile($_packageName,$_rootDirectory,$_rootDirectoryRights,array $_classesFiles = array())
	{
		if(count($_classesFiles))
		{
			$php = new ezcPhpGenerator($_rootDirectory . '/' . ucfirst($_packageName) . 'Autoload.php',true,true);
			$php->appendCustomCode("/**\r\n * AutoloadFile \r\n * @date " . date('d/m/Y') . "\r\n */\r\n/**\r\n * AutoloadFile\r\n * @date " . date('d/m/Y') . "\r\n */");
			foreach($_classesFiles as $classFile)
			{
				if(is_file($classFile))
					$php->appendCustomCode('require_once ' . str_replace($_rootDirectory,'dirname(__FILE__) . \'/',$classFile) . '\';');
			}
			$php->finish();
		}
	}
	/**
	 * Generate Wsdl Class file
	 * @param string $_packageName
	 * @param string $_rootDirectory
	 * @param int $_rootDirectoryRights
	 * @return array class file
	 */
	private function generateWsdlClassFile($_packageName,$_rootDirectory,$_rootDirectoryRights)
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
																lcfirst($_packageName),
																ucfirst($_packageName),
																date('d/m/Y'),
																$metaInformation),$content);
			file_put_contents($_rootDirectory . ucfirst($_packageName) . 'WsdlClass.php',$content);
			return array(
						$_rootDirectory . ucfirst($_packageName) . 'WsdlClass.php');
		}
		else
			return array();
	}
	/**
	 * @return array
	 */
	public function getStructs()
	{
		return $this->structs;
	}
	/**
	 * @param array $types
	 */
	private function setStructs($_structs)
	{
		$this->structs = $_structs;
	}
	/**
	 * Add type to structs
	 * @param string $_paramType
	 * @param string $_paramName
	 * @param string $_structName
	 */
	private function addStruct($_paramType,$_paramName,$_structName)
	{
		/**
		 * Replace special characters
		 */
		$structNameCleaned = self::cleanName($_structName);
		$paramNameCleaned = self::cleanName($_paramName);
		if(!array_key_exists($structNameCleaned,$this->structs))
			$this->structs[$structNameCleaned] = array();
		if(!empty($_paramType) && !empty($paramNameCleaned))
			$this->structs[$structNameCleaned][] = array(
														'type'=>$_paramType,
														'name'=>$paramNameCleaned,
														'meta'=>array());
	}
	/**
	 * Method to add info value to an existing struct and param
	 * @uses WsdlToPhp::getStructs()
	 * @uses WsdlToPhp::setStructs()
	 * @param string $_structName
	 * @param string $_paramName
	 * @param string $_structInfoName
	 * @param mixed $_structInfoValue
	 */
	private function addStructInfo($_structName,$_paramName,$_structInfoName,$_structInfoValue)
	{
		/**
		 * Replace special characters
		 */
		$structNameCleaned = self::cleanName($_structName);
		$paramNameCleaned = self::cleanName($_paramName);
		$structInfoNameCleaned = self::cleanName($_structInfoName);
		$structs = $this->getStructs();
		foreach($structs as $structName=>$params)
		{
			if($structNameCleaned == $structName && is_array($params) && count($params))
			{
				foreach($params as $paramIndex=>$paramInfo)
				{
					if(is_array($paramInfo) && array_key_exists('name',$paramInfo) && $paramInfo['name'] == $paramNameCleaned)
					{
						if(array_key_exists($structInfoNameCleaned,$structs[$structNameCleaned][$paramIndex]) && is_array($structs[$structNameCleaned][$paramIndex][$structInfoNameCleaned]) && is_array($_structInfoValue))
							$structs[$structNameCleaned][$paramIndex][$structInfoNameCleaned] = array_merge($structs[$structNameCleaned][$paramIndex][$structInfoNameCleaned],$_structInfoValue);
						elseif(array_key_exists($structInfoNameCleaned,$structs[$structNameCleaned][$paramIndex]) && is_array($structs[$structNameCleaned][$paramIndex][$structInfoNameCleaned]))
							array_push($structs[$structNameCleaned][$paramIndex][$structInfoNameCleaned],$_structInfoValue);
						else
							$structs[$structNameCleaned][$paramIndex][$structInfoNameCleaned] = $_structInfoValue;
					}
				}
			}
		}
		$this->setStructs($structs);
	}
	/**
	 * Add struct inheritence info
	 * @uses WsdlToPhp::getStructs()
	 * @uses WsdlToPhp::setStructs()
	 * @param string $_structName
	 * @param string $_inherits
	 */
	private function addStructInherits($_structName,$_inherits)
	{
		/**
		 * Replace special characters
		 */
		$structNameCleaned = self::cleanName($_structName);
		$structs = $this->getStructs();
		foreach($structs as $structName=>$params)
		{
			if($structNameCleaned == $structName && is_array($params) && count($params))
				$structs[$structNameCleaned]['inherits'] = $_inherits;
		}
		$this->setStructs($structs);
	}
	/**
	 * Add struct documentation info
	 * @uses WsdlToPhp::getStructs()
	 * @uses WsdlToPhp::setStructs()
	 * @param string $_structName
	 * @param string $_documentation
	 */
	private function addStructDocumentation($_structName,$_documentation)
	{
		/**
		 * Replace special characters
		 */
		$structNameCleaned = self::cleanName($_structName);
		$structs = $this->getStructs();
		foreach($structs as $structName=>$params)
		{
			if($structNameCleaned == $structName && is_array($params) && count($params))
				$structs[$structNameCleaned]['documentation'] = $_documentation;
		}
		$this->setStructs($structs);
	}
	/**
	 * Add type to restrictions
	 * @uses WsdlToPhp::addStruct()
	 * @uses WsdlToPhp::addStructInfo()
	 * @param string $_paramType
	 * @param string $_paramValue
	 * @param string $_restrictionName
	 */
	private function addRestriction($_paramType,$_paramValue,$_restrictionName)
	{
		/**
		 * Replace special characters
		 */
		$paramTypeCleaned = self::cleanName($_paramType);
		$paramValueCleaned = self::cleanName($_paramValue);
		$restrictionNameCleaned = self::cleanName($_restrictionName);
		if(!array_key_exists($restrictionNameCleaned,$this->structs) && !empty($paramTypeCleaned))
		{
			$this->addStruct($paramTypeCleaned,$restrictionNameCleaned,$restrictionNameCleaned);
			$this->addStructInfo($restrictionNameCleaned,$restrictionNameCleaned,'isRestriction',true);
			$this->addStructInfo($restrictionNameCleaned,$restrictionNameCleaned,'values',array());
			$this->addStructInfo($restrictionNameCleaned,$restrictionNameCleaned,'meta',array());
		}
		if(empty($paramTypeCleaned) && !empty($paramValueCleaned))
			$this->addStructInfo($restrictionNameCleaned,$restrictionNameCleaned,'values',$paramValueCleaned);
		else
			$this->addStructInfo($restrictionNameCleaned,$restrictionNameCleaned,$paramTypeCleaned,$paramValueCleaned);
	}
	/**
	 * @return array
	 */
	public function getFunctions()
	{
		return $this->functions;
	}
	/**
	 * @param array $functions
	 */
	private function setFunctions($_functions)
	{
		$this->functions = $_functions;
	}
	/**
	 * @uses WsdlToPhp::getGather()
	 * @param string $_function
	 */
	private function addFunction($_functionName,$_functionParameter,$_functionReturn)
	{
		/**
		 * Replace special characters
		 */
		$functionNameCleaned = self::cleanName($_functionName);
		$functionParameterCleaned = self::cleanName($_functionParameter);
		$functionReturnCleaned = self::cleanName($_functionReturn);
		/**
		 * Define class name
		 */
		$className = ucfirst($this->getGather($functionNameCleaned));
		if(!array_key_exists($className,$this->getFunctions()))
			$this->functions[$className] = array();
		if(!array_key_exists($functionNameCleaned,$this->functions[$className]))
			$this->functions[$className][$functionNameCleaned] = array(
																	'method'=>$functionNameCleaned,
																	'parameter'=>$functionParameterCleaned,
																	'return'=>$functionReturnCleaned,
																	'meta'=>array());
	}
	/**
	 * Method to add info value to an existing function and method name
	 * @uses WsdlToPhp::getStructs()
	 * @uses WsdlToPhp::setStructs()
	 * @param string $_functionName
	 * @param string $_functiontInfoName
	 * @param mixed $_functionInfoValue
	 */
	private function addFunctionInfo($_functionName,$_functionInfoName,$_functionInfoValue)
	{
		/**
		 * Replace special characters
		 */
		$functionNameCleaned = self::cleanName($_functionName);
		$functions = $this->getFunctions();
		foreach($functions as $className=>$methods)
		{
			foreach($methods as $functionName=>$funtionParams)
			{
				if($functionName == $functionNameCleaned)
				{
					if(array_key_exists($_functionInfoName,$functions[$className][$functionNameCleaned]) && is_array($functions[$className][$functionNameCleaned][$_functionInfoName]) && is_array($_functionInfoValue))
						$functions[$className][$functionNameCleaned][$_functionInfoName] = array_merge($functions[$className][$functionNameCleaned][$_functionInfoName],$_functionInfoValue);
					elseif(array_key_exists($_functionInfoName,$functions[$className][$functionNameCleaned]) && is_array($functions[$className][$functionNameCleaned][$_functionInfoName]))
						array_push($functions[$className][$functionNameCleaned][$_functionInfoName],$_functionInfoValue);
					else
						$functions[$className][$functionNameCleaned][$_functionInfoName] = $_functionInfoValue;
				}
			}
		}
		$this->setFunctions($functions);
	}
	/**
	 * @return the $optionCategory
	 */
	public function getOptionCategory()
	{
		return $this->optionCategory;
	}
	/**
	 * Value must be @see self::OPT_CAT_END_NAME or @see self::OPT_CAT_START_NAME or @see self::OPT_CAT_NONE_NAME
	 * @param int $optionCategory
	 */
	public function setOptionCategory($_optionCategory = self::OPT_CAT_START_NAME)
	{
		if($_optionCategory == self::OPT_CAT_END_NAME || $_optionCategory == self::OPT_CAT_START_NAME || $_optionCategory == self::OPT_CAT_NONE_NAME)
		{
			$this->optionCategory = $_optionCategory;
			return true;
		}
		else
		{
			$this->optionCategory = self::OPT_CAT_START_NAME;
			return false;
		}
	}
	/**
	 * @return int
	 */
	public function getOptionSubCategory()
	{
		return $this->optionSubCategory;
	}
	/**
	 * Value must be @see self::OPT_SUB_CAT_END_NAME or @see self::OPT_SUB_CAT_START_NAME or @see self::OPT_SUB_CAT_NONE_NAME
	 * @param int $optionSubCategory
	 */
	public function setOptionSubCategory($_optionSubCategory = self::OPT_SUB_CAT_START_NAME)
	{
		if($_optionSubCategory == self::OPT_SUB_CAT_END_NAME || $_optionSubCategory == self::OPT_SUB_CAT_START_NAME || $_optionSubCategory == self::OPT_SUB_CAT_NONE_NAME)
		{
			$this->optionSubCategory = $_optionSubCategory;
			return true;
		}
		else
		{
			$this->optionSubCategory = self::OPT_SUB_CAT_START_NAME;
			return false;
		}
	}
	/**
	 * @return int
	 */
	public function getOptionGatherMethods()
	{
		return $this->optionGatherMethods;
	}
	/**
	 * @param int $optionGatherMethods
	 */
	public function setOptionGatherMethods($_optionGatherMethods = self::OPT_GATH_METH_START_NAME)
	{
		if($_optionGatherMethods == self::OPT_GATH_METH_START_NAME || $_optionGatherMethods == self::OPT_GATH_METH_END_NAME)
		{
			$this->optionGatherMethods = $_optionGatherMethods;
			return true;
		}
		else
		{
			$this->optionGatherMethods = self::OPT_GATH_METH_START_NAME;
			return false;
		}
	}
	/**
	 * @return bool
	 */
	public function getOptionSendArrayAsParameter()
	{
		return $this->optionSendArrayAsParameter;
	}
	/**
	 * @param bool $optionSendArrayAsParameter
	 */
	public function setOptionSendArrayAsParameter($_optionSendArrayAsParameter = false)
	{
		$this->optionSendArrayAsParameter = $_optionSendArrayAsParameter?true:false;
	}
	/**
	 * @return bool
	 */
	public function getOptionGenerateAutoloadFile()
	{
		return $this->optionGenerateAutoloadFile;
	}
	/**
	 * @param bool $optionGenerateAutoloadFile
	 */
	public function setOptionGenerateAutoloadFile($_optionGenerateAutoloadFile = false)
	{
		$this->optionGenerateAutoloadFile = $_optionGenerateAutoloadFile;
	}
	/**
	 * @return bool
	 */
	public function getOptionGenerateWsdlClassFile()
	{
		return $this->optionGenerateWsdlClassFile;
	}
	/**
	 * @param bool $optionGenerateWsdlClassFile
	 */
	public function setOptionGenerateWsdlClassFile($_optionGenerateWsdlClassFile = false)
	{
		$this->optionGenerateWsdlClassFile = $_optionGenerateWsdlClassFile;
	}
	/**
	 * @return bool
	 */
	public function getOptionResponseAsWsdlObject()
	{
		return $this->optionResponseAsWsdlObject;
	}
	/**
	 * @param bool $optionResponseAsWsdlObject
	 */
	public function setOptionResponseAsWsdlObject($_optionResponseAsWsdlObject = false)
	{
		$this->optionResponseAsWsdlObject = $_optionResponseAsWsdlObject;
	}
	/**
	 * @return bool
	 */
	public function getOptionSendParametersAsArray()
	{
		return $this->optionSendParametersAsArray;
	}
	/**
	 * @param bool $optionSendParametersAsArray
	 */
	public function setOptionSendParametersAsArray($_optionSendParametersAsArray = false)
	{
		$this->optionSendParametersAsArray = $_optionSendParametersAsArray;
		$this->setOptionSendArrayAsParameter($_optionSendParametersAsArray);
	}
	/**
	 * @return the $optionInheritsClassIdentifier
	 */
	public function getOptionInheritsClassIdentifier()
	{
		return $this->optionInheritsClassIdentifier;
	}
	/**
	 * @param string $optionInheritsClassIdentifier
	 */
	public function setOptionInheritsClassIdentifier($_optionInheritsClassIdentifier = '')
	{
		$this->optionInheritsClassIdentifier = (is_string($_optionInheritsClassIdentifier) && !empty($_optionInheritsClassIdentifier))?$_optionInheritsClassIdentifier:'';
	}
	/**
	 * @return bool
	 */
	public function getOptionGenericConstantsNames()
	{
		return $this->optionGenericConstantsNames;
	}
	/**
	 * @param bool $optionGenericConstantsNames
	 */
	public function setOptionGenericConstantsNames($_optionGenericConstantsNames = false)
	{
		$this->optionGenericConstantsNames = $_optionGenericConstantsNames;
	}
	/**
	 * @return the $wsdls
	 */
	public function getWsdls()
	{
		return $this->wsdls;
	}
	/**
	 * @param array $wsdls
	 */
	public function setWsdls($_wsdls)
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
	 * @uses WsdlToPhp::getWsdls()
	 * @param string $_metaName
	 * @param mixed $_metaValue
	 */
	public function addWsdlMeta($_metaName,$_metaValue)
	{
		$this->wsdls[implode('',array_slice(array_keys($this->wsdls),0,1))]['meta'][$_metaName] = $_metaValue;
	}
	/**
	 * Methods to load WSDL from current WSDL when current WSDL imports other WSDL
	 * @uses WsdlToPhp::loadWsdls()
	 * @uses WsdlToPhp::getWsdls()
	 * @uses WsdlToPhp::addWsdl()
	 * @uses WsdlToPhp::loadWsdls()
	 * @uses WsdlToPhp::addRestriction()
	 * @uses WsdlToPhp::addStructInfo()
	 * @uses WsdlToPhp::addFunctionInfo()
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
		{
			$wsdlLocationContent = '';
			$dom = new DOMDocument('1.0','UTF-8');
			if($dom->load($_wsdlLocation))
				$wsdlLocationContent = trim($dom->saveXML());
			/**
			 * Comments tag on the beginning block parsing the DOMDocument
			 */
			if(empty($wsdlLocationContent) || trim($wsdlLocationContent) == '<?xml version="1.0" encoding="UTF-8"?>')
			{
				$wsdlLocationContent = file_get_contents($_wsdlLocation);
				$wsdlLocationContent = preg_replace('(<!--.*-->)','',$wsdlLocationContent);
			}
			if(!empty($wsdlLocationContent) && $dom->loadXML($wsdlLocationContent) && $dom->hasChildNodes())
            {
                foreach($dom->childNodes as $item)
                {
                    if($item->nodeName !== '#comment')
                    {
                        $this->loadWsdls('',$item,$_wsdlLocation);
                        break;
                    }
                }
            }
		}
		/**
		 * New node to browse
		 */
		elseif($_domNode instanceof DOMElement)
		{
			/**
			 * Current node is type of "import" and contains the location
			 */
			if(strpos($_domNode->nodeName,'import') !== false && ($_domNode->hasAttribute('location') || $_domNode->hasAttribute('schemaLocation')))
			{
				$location = $_domNode->hasAttribute('location')?$_domNode->getAttribute('location'):$_domNode->getAttribute('schemaLocation');
				/**
				 * Define valid location
				 */
				if(!empty($location) && strpos($location,'http://') === false && strpos($location,'https://') === false && (!empty($_wsdlLocation) || !empty($_fromWsdlLocation)))
				{
					$locationToParse = !empty($_wsdlLocation)?$_wsdlLocation:$_fromWsdlLocation;
					$fileParts = pathinfo($locationToParse);
					$fileBasename = (is_array($fileParts) && array_key_exists('basename',$fileParts))?$fileParts['basename']:'';
					$parts = parse_url(str_replace($fileBasename,'',$locationToParse));
					$scheme = (is_array($parts) && array_key_exists('scheme',$parts))?$parts['scheme']:'';
					$host = (is_array($parts) && array_key_exists('host',$parts))?$parts['host']:'';
					$path = (is_array($parts) && array_key_exists('path',$parts))?$parts['path']:'';
					$path = str_replace($fileBasename,'',$path);
					$port = (is_array($parts) && array_key_exists('port',$parts))?$parts['port']:'';
					if(!empty($scheme) && !empty($host))
						$location = $scheme . '://' . $host . (!empty($port)?':' . $port:'') . (!empty($path)?$path:'/') . $location;
				}
				/**
				 * New WSDL
				 */
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
			/**
			 * Enumeration's and restriction's
			 */
			elseif((strpos($_domNode->nodeName,'restriction') !== false || strpos($_domNode->nodeName,'enumeration') !== false))
			{
				$parentNode = strpos($_domNode->nodeName,'restriction') !== false?$_domNode->parentNode:$_domNode->parentNode->parentNode;
				if($parentNode && $parentNode->hasAttribute('name') && $parentNode->getAttribute('name') != '')
				{
					if(strpos($_domNode->nodeName,'restriction') !== false)
					{
						$type = explode(':',$_domNode->getAttribute('base'));
						$this->addRestriction($type[count($type) - 1],'',$parentNode->getAttribute('name'));
					}
					else
						$this->addRestriction('',$_domNode->getAttribute('value'),$parentNode->getAttribute('name'));
				}
			}
			/**
			 * Element's, part of a struct
			 */
			elseif((strpos($_domNode->nodeName,'element') !== false || strpos($_domNode->nodeName,'attribute') !== false) && $_domNode->hasAttribute('name') && $_domNode->getAttribute('name') != '' && $_domNode->hasAttribute('type') && $_domNode->getAttribute('type') != '')
			{
				/**
				 * Find parent node of this documentation node
				 */
				$parentNode = $_domNode->parentNode;
				$maxDeep = 5;
				while($maxDeep-- > 0 && ($parentNode instanceof DOMNode) && $parentNode->nodeName && !(strpos($parentNode->nodeName,'element') !== false || (strpos($parentNode->nodeName,'complexType') !== false && $parentNode->hasAttribute('name'))))
					$parentNode = $parentNode->parentNode;
				if(($parentNode instanceof DOMElement) && $parentNode->hasAttribute('name') && $parentNode->getAttribute('name') != '')
				{
					$attributes = $_domNode->attributes;
					$attributesLength = $attributes->length;
					for($i = 0;$i < $attributesLength;$i++)
					{
						$attribute = $attributes->item($i);
						if($attribute && $attribute->nodeName != 'name' && $attribute->nodeName != 'type')
							$this->addStructInfo($parentNode->getAttribute('name'),$_domNode->getAttribute('name'),'meta',array(
																																$attribute->nodeName=>trim($attribute->nodeValue)));
					}
				}
			}
			/**
			 * Documentation's
			 */
			elseif(strpos($_domNode->nodeName,'documentation') !== false && !empty($_domNode->nodeValue))
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
				$parentNode = $_domNode->parentNode;
				$maxDeep = 5;
				while($maxDeep-- > 0 && $parentNode && ($parentNode instanceof DOMElement) && $parentNode->nodeName && strpos($parentNode->nodeName,'operation') === false && strpos($parentNode->nodeName,'element') === false && strpos($parentNode->nodeName,'simpleType') === false && strpos($parentNode->nodeName,'complexType') === false && strpos($parentNode->nodeName,'enumeration') === false && strpos($parentNode->nodeName,'definitions') === false)
					$parentNode = $parentNode->parentNode;
				if($parentNode && ($parentNode instanceof DOMElement))
				{
					/**
					 * is it an element ? part of a struct
					 */
					if(strpos($parentNode->nodeName,'element') !== false && $parentNode->hasAttribute('type'))
					{
						/**
						 * Find parent node of this documentation node
						 */
						$upParentNode = $parentNode->parentNode;
						$maxDeep = 5;
						while($maxDeep-- > 0 && ($upParentNode instanceof DOMElement) && $upParentNode->nodeName && !(strpos($upParentNode->nodeName,'element') !== false || (strpos($upParentNode->nodeName,'complexType') !== false && $upParentNode->hasAttribute('name'))))
							$upParentNode = $upParentNode->parentNode;
						if(($upParentNode instanceof DOMElement) && $upParentNode->hasAttribute('name') && $upParentNode->getAttribute('name') != '')
						{
							$this->addStructInfo($upParentNode->getAttribute('name'),$parentNode->getAttribute('name'),'meta',array(
																																	'documentation'=>$documentation));
						}
					}
					/**
					 * is it an enumeration
					 */
					elseif(strpos($parentNode->nodeName,'enumeration') !== false)
					{
						/**
						 * Find parent node of this enumeration node
						 */
						$upParentNode = $parentNode->parentNode;
						$maxDeep = 5;
						while($maxDeep-- > 0 && ($upParentNode instanceof DOMElement) && $upParentNode->nodeName && !(strpos($upParentNode->nodeName,'element') !== false || (strpos($upParentNode->nodeName,'simpleType') !== false && $upParentNode->hasAttribute('name'))))
							$upParentNode = $upParentNode->parentNode;
						if(($upParentNode instanceof DOMElement) && $upParentNode->hasAttribute('name') && $upParentNode->getAttribute('name') != '')
							$this->addRestriction('meta',array(
																$parentNode->getAttribute('value')=>array(
																										'documentation'=>$documentation)),$upParentNode->getAttribute('name'));
					}
					/**
					 * is it a struct ?
					 */
					elseif((strpos($parentNode->nodeName,'element') !== false || strpos($parentNode->nodeName,'complexType') !== false || strpos($parentNode->nodeName,'simpleType') !== false) && $parentNode->hasAttribute('name') && $parentNode->getAttribute('name') != '')
						$this->addStructDocumentation($parentNode->getAttribute('name'),$documentation);
					/**
					 * is it an operation ?
					 */
					elseif(strpos($parentNode->nodeName,'operation') !== false && $parentNode->hasAttribute('name') && $parentNode->getAttribute('name') != '')
						$this->addFunctionInfo($parentNode->getAttribute('name'),'meta',array(
																							'documentation'=>$documentation));
					/**
					 * is it a definitions ?
					 */
					elseif(strpos($parentNode->nodeName,'definitions') !== false)
						$this->addWsdlMeta('documentation',$documentation);
				}
			}
			elseif(strpos($_domNode->nodeName,'extension') !== false && $_domNode->hasAttribute('base') && $_domNode->getAttribute('base') != '')
			{
				$base = explode(':',$_domNode->getAttribute('base'));
				$inheritsName = $base[count($base) - 1];
				if(!empty($inheritsName))
				{
					/**
					 * Find parent node of this extension node
					 */
					$parentNode = $_domNode->parentNode;
					$maxDeep = 5;
					while($maxDeep-- > 0 && ($parentNode instanceof DOMElement) && $parentNode->nodeName && !(strpos($parentNode->nodeName,'element') !== false || (strpos($parentNode->nodeName,'complexType') !== false && $parentNode->hasAttribute('name'))))
						$parentNode = $parentNode->parentNode;
					if(($parentNode instanceof DOMElement) && $parentNode->hasAttribute('name') && $parentNode->getAttribute('name') != '')
						$this->addStructInherits($parentNode->getAttribute('name'),$inheritsName);
				}
			}
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
	}
	/**
	 * Return directory where to store class and create it if needed
	 * @uses WsdlToPhp::getCategory()
	 * @uses WsdlToPhp::getSubCategory()
	 * @param string $_rootDirectory
	 * @param int $_rootDirectoryRights
	 * @param string $_string
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
	 * @param element name $_string
	 * @return string
	 */
	private function getCategory($_string)
	{
		return $this->getPart($_string,self::OPT_CAT_KEY);
	}
	/**
	 * Get sub category part
	 * @param element name $_string
	 * @return string
	 */
	private function getSubCategory($_string)
	{
		return $this->getPart($_string,self::OPT_SUB_CAT_KEY);
	}
	/**
	 * Get gather name class
	 * @param string
	 */
	private function getGather($_string)
	{
		return $this->getPart($_string,self::OPT_GATH_METH_KEY);
	}
	/**
	 * Get category part
	 * @uses WsdlToPhp::getOptionCategory()
	 * @uses WsdlToPhp::getOptionSubCategory()
	 * @uses WsdlToPhp::getPart()
	 * @uses WsdlToPhp::getOptionGatherMethods()
	 * @param string $_string element name
	 * @param string $_string category type
	 * @return string
	 */
	private function getPart($_string,$_optionName)
	{
		$elementType = '';
		$optionValue = 0;
		switch($_optionName)
		{
			case self::OPT_CAT_KEY:
				$optionValue = $this->getOptionCategory();
				break;
			case self::OPT_SUB_CAT_KEY:
				$optionValue = $this->getOptionSubCategory();
				$mainCatPart = $this->getPart($_string,self::OPT_CAT_KEY);
				switch($this->getOptionCategory())
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
				$optionValue = $this->getOptionGatherMethods();
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
	 * Clean struct, function, restrition name
	 * @param string $_name
	 * @return string
	 */
	public static function cleanName($_name)
	{
		return $_name;
	}
	/**
	 * Clean constant name
	 * @param string $_name
	 * @return string
	 */
	public static function cleanConstantName($_name)
	{
		return preg_replace('/[_]+/','_',preg_replace('/[^a-zA-Z0-9_]/','_',$_name));
	}
	/**
	 * Clean property name
	 * @param string $_name
	 * @return string
	 */
	public static function cleanPropertyName($_name)
	{
		return preg_replace('/[_]+/','_',preg_replace('/[^a-zA-Z0-9_]/','_',$_name));
	}
	/**
	 * Clean class name
	 * @param string $_name
	 * @return string
	 */
	public static function cleanClassName($_name)
	{
		return preg_replace('/[_]+/','_',preg_replace('/[^a-zA-Z0-9_]/','_',$_name));
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