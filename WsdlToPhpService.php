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
	 * Returns the contextual part of the class name for the package
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
	 * @uses WsdlToPhpStruct::getContextualPart()
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
			/**
			 * Gather informations
			 */
			foreach($this->getFunctions() as $function)
			{
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
				$soapHeaderNameSpaces = $function->getMetaValue('SOAPHeaderNamespaces','');
				if(count($soapHeaderNames) && count($soapHeaderNames) == count($soapHeaderTypes))
				{
					foreach($soapHeaderNames as $index=>$soapHeaderName)
					{
						$soapHeaderType = str_replace('{@link ','',$soapHeaderTypes[$index]);
						$soapHeaderType = str_replace('}','',$soapHeaderType);
						$soapHeaderKey = $soapHeaderName . '-' . $soapHeaderType;
						if(!array_key_exists($soapHeaderKey,$soapHeaders))
							$soapHeaders[$soapHeaderKey] = array(
																'name'=>$soapHeaderName,
																'type'=>$soapHeaderType,
																'namespaces'=>array(
																					$soapHeaderNameSpaces[$index]));
						elseif(!in_array($soapHeaderNameSpaces[$index],$soapHeaders[$soapHeaderKey]['namespaces']))
							array_push($soapHeaders[$soapHeaderKey]['namespaces'],$soapHeaderNameSpaces[$index]);
					}
				}
			}
			/**
			 * Generates the SoapHeaders setter methods
			 */
			if(count($soapHeaders) && WsdlToPhpGenerator::getOptionGenerateWsdlClassFile())
			{
				$whateverStruct = new WsdlToPhpStruct('whatever');
				$soapHeaderNameUniqueMethods = array();
				foreach($soapHeaders as $soapHeader)
				{
					$soapHeaderName = $soapHeader['name'];
					$soapHeaderType = $soapHeader['type'];
					$soapHeaderNameSpaces = $soapHeader['namespaces'];
					$cleanedName = $this->cleanString($soapHeaderName,false);
					$headerParamKnown = strpos($soapHeaderType,WsdlToPhpGenerator::getPackageName() . $whateverStruct->getContextualPart()) === 0;
					$methodName = ucfirst($cleanedName);
					/**
					 * Ensure unique setter naming
					 */
					if(!array_key_exists($methodName,$soapHeaderNameUniqueMethods))
						$soapHeaderNameUniqueMethods[$methodName] = 0;
					else
						$soapHeaderNameUniqueMethods[$methodName]++;
					$methodName .= $soapHeaderNameUniqueMethods[$methodName]?'_' . $soapHeaderNameUniqueMethods[$methodName]:'';
					/**
					 * setSoapHeader() method comments
					 */
					$comments = array();
					array_push($comments,'Sets the ' . $soapHeaderName . ' SoapHeader param');
					array_push($comments,'@uses ' . self::getGenericWsdlClassName() . '::setSoapHeader()');
					array_push($comments,'@param ' . $soapHeaderType . ' $_' . lcfirst($headerParamKnown?$soapHeaderType:$cleanedName));
					array_push($comments,'@param string $_nameSpace ' . implode(', ',$soapHeaderNameSpaces));
					array_push($comments,'@param bool $_mustUnderstand');
					array_push($comments,'@param string $_actor');
					array_push($comments,'@return bool true|false');
					/**
					 * getResult() method body
					 */
					array_push($_body,array(
											'comment'=>$comments));
					array_push($_body,'public function setSoapHeader' . $methodName . '(' . ($headerParamKnown?$soapHeaderType . ' ':'') . '$_' . lcfirst($headerParamKnown?$soapHeaderType:$cleanedName) . ',$_nameSpace' . (count($soapHeaderNameSpaces) > 1?'':' = ' . var_export($soapHeaderNameSpaces[0],true)) . ',$_mustUnderstand = false,$_actor = null)');
					array_push($_body,'{');
					array_push($_body,'return $this->setSoapHeader($_nameSpace,\'' . $soapHeaderName . '\',$_' . lcfirst($headerParamKnown?$soapHeaderType:$cleanedName) . ',$_mustUnderstand,$_actor);');
					array_push($_body,'}');
					unset($soapHeaderName,$soapHeaderType,$soapHeaderNameSpaces,$cleanedName,$headerParamKnown,$methodName,$comments);
				}
			}
			/**
			 * Generates service methods
			 */
			foreach($this->getFunctions() as $function)
			{
				array_push($_body,array(
										'comment'=>$function->getComment()));
				$function->getBody($_body);
			}
			/**
			 * Generates the override getResult method if needed
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
	 * Sets the functions
	 * @param array $_functions
	 * @return array
	 */
	private function setFunctions(array $_functions = array())
	{
		return ($this->functions = $_functions);
	}
	/**
	 * Adds a function to the service
	 * @uses WsdlToPhpFunction::setIsUnique()
	 * @param string $_functionName original function name
	 * @param string $_functionParameterType original parameter type/name
	 * @param string $_functionReturnType original return type/name
	 * @param bool $_functionIsUnique original isUnique value
	 * @return WsdlToPhpFunction
	 */
	public function addFunction($_functionName,$_functionParameterType,$_functionReturnType,$_functionIsUnique = true)
	{
		$function = new WsdlToPhpFunction($_functionName,$_functionParameterType,$_functionReturnType,$this);
		$function->setIsUnique($_functionIsUnique);
		array_push($this->functions,$function);
		return $function;
	}
	/**
	 * Returns the function by its original name
	 * @uses WsdlToPhpService::getFunctions()
	 * @uses WsdlToPhpModel::getName()
	 * @param string $_functionName the original function name
	 * @return WsdlToPhpFunction|null
	 */
	public function getFunction($_functionName)
	{
		foreach($this->getFunctions() as $function)
		{
			if($function->getName() === $_functionName)
				return $function;
		}
		return null;
	}
	/**
	 * Returns class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
