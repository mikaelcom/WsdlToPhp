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
	 * Returns the comment lines for this function
	 * @uses WsdlToPhpModel::getModelByName()
	 * @uses WsdlToPhpModel::getPackagedName()
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
			foreach($this->getFunctions() as $function)
			{
				array_push($_body,array(
										'comment'=>$function->getComment()));
				$function->getBody($_body);
				$model = self::getModelByName($function->getReturnType());
				if($model && $model->getIsStruct())
				{
					array_push($returnTypes,$model->getPackagedName());
					unset($model);
				}
				else
					array_push($returnTypes,$function->getReturnType());
			}
			if(count($returnTypes) && WsdlToPhpGenerator::getOptionGenerateWsdlClassFile())
			{
				$returnTypes = array_unique($returnTypes);
				natcasesort($returnTypes);
				/**
				 * getResult() method comments
				 */
				$comments = array();
				array_push($comments,'Returns the result');
				array_push($comments,'@see ' . WsdlToPhpGenerator::getPackageName() . 'WsdlClass::getResult()');
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
			unset($returnTypes);
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