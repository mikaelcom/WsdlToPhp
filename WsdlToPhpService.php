<?php
/**
 * File for WsdlToPhpService
 * @package WsdlToPhpGenerator
 * @date 19/12/2012
 */
/**
 * Class WsdlToPhpService stands for an available service containing the functions/operations described in the WSDL
 * @package WsdlToPhpGenerator
 * @date 19/12/2012
 */
class WsdlToPhpService extends WsdlToPhpModel
{
	/**
	 * Store the functions of the service
	 * @var array
	 */
	private $functions = array();
	/**
	 * Main constructor
	 * @see WsdlToPhpModel::__construct()
	 * @uses WsdlToPhpService::setFunctions()
	 * @param string $_name the function name
	 * @return WsdlToPhpService
	 */
	public function __construct($_name)
	{
		parent::__construct($_name);
	}
	/**
	 * Allows to define the contextual part of the class name for the package
	 * @see WsdlToPhpModel::getContextualPart()
	 * @return string
	 */
	public function getContextualPart()
	{
		return 'Service';
	}
	/**
	 * Returns the sub package name which the model belongs to
	 * Must be overridden by sub classes
	 * @see WsdlToPhpModel::getDocSubPackages()
	 * @return array
	 */
	public function getDocSubPackages()
	{
		return array(
					'Services');
	}
	/**
	 * Returns the comment lines for this service
	 * @uses WsdlToPhpModel::getModelByName()
	 * @uses WsdlToPhpModel::getPackagedName()
	 * @uses WsdlToPhpModel::getGenericWsdlClassName()
	 * @uses WsdlToPhpModel::getMetaValue()
	 * @uses WsdlToPhpModel::cleanString()
	 * @uses WsdlToPhpService::getFunctions()
	 * @uses WsdlToPhpFunction::getReturnType()
	 * @uses WsdlToPhpFunction::getComment()
	 * @uses WsdlToPhpFunction::getBody()
	 * @uses WsdlToPhpGenerator::getPackageName()
	 * @uses WsdlToPhpGenerator::getOptionGenerateWsdlClassFile()
	 * @param array $_body
	 * @return void
	 */
	public function getClassBody(&$_body)
	{
		if(count($this->getFunctions()))
		{
			$returnTypes = array();
			$soapHeaders = array();
			foreach($this->getFunctions() as $function)
			{
				$function = $this->getFunction($function->getName());
				array_push($_body,array(
										'comment'=>$function->getComment()));
				$function->getBody($_body);
				/**
				 * Gather return types
				 */
				$model = self::getModelByName($function->getReturnType());
				if($model && $model->getIsStruct())
				{
					array_push($returnTypes,$model->getPackagedName());
					unset($model);
				}
				else
					array_push($returnTypes,$function->getReturnType());
				/**
				 * Gather SoapHeader informations
				 */
				$soapHeaderNames = $function->getMetaValue('SOAPHeaderNames',array());
				$soapHeaderTypes = $function->getMetaValue('SOAPHeaderTypes',array());
				$soapHeaderNameSpace = $function->getMetaValue('SOAPHeaderNamespace','');
				if(count($soapHeaderNames) && count($soapHeaderNames) == count($soapHeaderTypes))
				{
					foreach($soapHeaderNames as $index=>$soapHeaderName)
					{
						$soapHeaderType = str_replace('{@link ','',$soapHeaderTypes[$index]);
						$soapHeaderType = str_replace('}','',$soapHeaderType);
						$soapHeaders[$soapHeaderName . '-' . $soapHeaderType . '-' . $soapHeaderNameSpace] = array(
																												'name'=>$soapHeaderName,
																												'type'=>$soapHeaderType,
																												'namespace'=>$soapHeaderNameSpace);
					}
				}
			}
			/**
			 * Generates the override getResult method
			 */
			if(count($returnTypes) && WsdlToPhpGenerator::getOptionGenerateWsdlClassFile())
			{
				$returnTypes = array_unique($returnTypes);
				natcasesort($returnTypes);
				/**
				 * getResult() method comments
				 */
				$comments = array();
				array_push($comments,'Returns the result');
				array_push($comments,'@see ' . self::getGenericWsdlClassName() . '::getResult()');
				array_push($comments,'@return ' . implode('|',$returnTypes));
				/**
				 * getResult() method body
				 */
				array_push($_body,array(
										'comment'=>$comments));
				array_push($_body,'public function getResult()');
				array_push($_body,'{');
				array_push($_body,'return parent::getResult();');
				array_push($_body,'}');
				unset($comments);
			}
			/**
			 * Generates the SoapHeaders setter methods
			 */
			if(count($soapHeaders))
			{
				foreach($soapHeaders as $soapHeader)
				{
					$soapHeaderName = $soapHeader['name'];
					$soapHeaderType = $soapHeader['type'];
					$soapHeaderNameSpace = $soapHeader['namespace'];
					$cleanedName = $this->cleanString($soapHeaderName,false);
					/**
					 * setSoapHeader() method comments
					 */
					$comments = array();
					array_push($comments,'Sets the ' . $soapHeaderName . ' SoapHeader param');
					array_push($comments,'For more inforamtion, please read the online documentation on {@link http://www.php.net/manual/en/class.soapheader.php}');
					if(WsdlToPhpGenerator::getOptionGenerateWsdlClassFile())
						array_push($comments,'@uses ' . self::getGenericWsdlClassName() . '::getSoapClient()');
					array_push($comments,'@uses SoapClient::__setSoapheaders()');
					array_push($comments,'@param ' . $soapHeaderType . ' $_' . lcfirst($soapHeaderType));
					array_push($comments,'@param string $_nameSpace default = ' . $soapHeaderNameSpace);
					array_push($comments,'@param bool $_mustUnderstand');
					array_push($comments,'@param string $_actor');
					array_push($comments,'@return bool true|false');
					/**
					 * getResult() method body
					 */
					array_push($_body,array(
											'comment'=>$comments));
					array_push($_body,'public function setSoapHeader' . $cleanedName . '(' . (strpos($soapHeaderType,WsdlToPhpGenerator::getPackageName()) === 0?$soapHeaderType . ' ':'') . '$_' . lcfirst($soapHeaderType) . ',$_nameSpace = ' . var_export($soapHeaderNameSpace,true) . ',$_mustUnderstand = false,$_actor = null)');
					array_push($_body,'{');
					array_push($_body,'$defaultHeaders = @self::getSoapClient()->__default_headers;');
					array_push($_body,'if(!is_array($defaultHeaders))');
					array_push($_body,'{');
					array_push($_body,'$defaultHeaders = array();');
					array_push($_body,'}');
					array_push($_body,'else');
					array_push($_body,'{');
					array_push($_body,'foreach($defaultHeaders as $index=>$soapheader)');
					array_push($_body,'{');
					array_push($_body,'if($soapheader->name == \'' . $soapHeaderName . '\')');
					array_push($_body,'{');
					array_push($_body,'unset($defaultHeaders[$index]);');
					array_push($_body,'break;');
					array_push($_body,'}');
					array_push($_body,'}');
					array_push($_body,'}');
					array_push($_body,'if(!empty($_actor))');
					array_push($_body,'{');
					array_push($_body,'array_push($defaultHeaders,new SoapHeader($_nameSpace,\'' . $soapHeaderName . '\',$_' . lcfirst($soapHeaderType) . ',$_mustUnderstand,$_actor));');
					array_push($_body,'}');
					array_push($_body,'else');
					array_push($_body,'{');
					array_push($_body,'array_push($defaultHeaders,new SoapHeader($_nameSpace,\'' . $soapHeaderName . '\',$_' . lcfirst($soapHeaderType) . ',$_mustUnderstand));');
					array_push($_body,'}');
					array_push($_body,'self::getSoapClient()->__setSoapheaders(null);');
					array_push($_body,'return self::getSoapClient()->__setSoapheaders($defaultHeaders);');
					array_push($_body,'}');
					unset($comments);
				}
			}
			unset($returnTypes,$soapHeaders);
		}
	}
	/**
	 * Returns the functions of the service
	 * @return array
	 */
	public function getFunctions()
	{
		return $this->functions;
	}
	/**
	 * Set the functions
	 * @param array $_functions
	 * @return array
	 */
	private function setFunctions(array $_functions = array())
	{
		return ($this->functions = $_functions);
	}
	/**
	 * Add a function to the service
	 * @param string $_functionName original function name
	 * @param string $_functionParameterType original parameter type/name
	 * @param string $_functionReturnType original return type/name
	 * @return WsdlToPhpFunction
	 */
	public function addFunction($_functionName,$_functionParameterType,$_functionReturnType)
	{
		return ($this->functions[$_functionName] = new WsdlToPhpFunction($_functionName,$_functionParameterType,$_functionReturnType,$this));
	}
	/**
	 * Returns the function by its original name
	 * @uses WsdlToPhpService::getFunctions()
	 * @param string $_functionName the original function name
	 * @return WsdlToPhpFunction|null
	 */
	public function getFunction($_functionName)
	{
		return array_key_exists($_functionName,$this->getFunctions())?$this->functions[$_functionName]:null;
	}
	/**
	 * Return class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>