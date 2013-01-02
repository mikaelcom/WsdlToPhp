<?php
/**
 * File for WsdlToPhpFunction
 * @package WsdlToPhpGenerator
 * @date 19/12/2012
 */
/**
 * Class WsdlToPhpFunction stands for an available operation described in the WSDL
 * @package WsdlToPhpGenerator
 * @date 19/12/2012
 */
class WsdlToPhpFunction extends WsdlToPhpModel
{
	/**
	 * Type of the parameter for the operation
	 * @var string
	 */
	private $parameterType;
	/**
	 * Type of the return value for the operation
	 * @var string
	 */
	private $returnType;
	/**
	 * Main constructor
	 * @see WsdlToPhpModel::__construct()
	 * @uses WsdlToPhpFunction::setParameterType()
	 * @uses WsdlToPhpFunction::setReturnType()
	 * @param string the function name
	 * @param string the type/name of the parameter
	 * @param string the type/name of the return value
	 * @return WsdlToPhpFunction
	 */
	public function __construct($_name,$_parameterType,$_returnType)
	{
		parent::__construct($_name);
		$this->setParameterType($_parameterType);
		$this->setReturnType($_returnType);
	}
	/**
	 * Returns the commment lines for this function
	 * @see WsdlToPhpModel::getComment()
	 * @uses WsdlToPhpStructAttribute::getGetterName()
	 * @uses WsdlToPhpFunction::getParameterType()
	 * @uses WsdlToPhpFunction::getReturnType()
	 * @uses WsdlToPhpStruct::getAttributes()
	 * @uses WsdlToPhpModel::getPackagedName()
	 * @uses WsdlToPhpModel::getModelByName()
	 * @uses WsdlToPhpModel::addMetaComment()
	 * @uses WsdlToPhpModel::getDocumentation()
	 * @uses WsdlToPhpModel::getGenericWsdlClassName()
	 * @uses WsdlToPhpModel::cleanString()
	 * @param int comment part
	 * @return array
	 */
	public function getComment($_part = '')
	{
		$comments = array();
		array_push($comments,'Method to call the operation named ' . $this->getName());
		if($this->getDocumentation() != '')
			array_push($comments,'Documentation : ' . $this->getDocumentation());
		$this->addMetaComment($comments,false,true);
		/**
		 * @Uses and @Param
		 */
		if(WsdlToPhpGenerator::getOptionGenerateWsdlClassFile())
		{
			array_push($comments,'@uses ' . self::getGenericWsdlClassName() . '::getSoapClient()');
			array_push($comments,'@uses ' . self::getGenericWsdlClassName() . '::setResult()');
			array_push($comments,'@uses ' . self::getGenericWsdlClassName() . '::getResult()');
			array_push($comments,'@uses ' . self::getGenericWsdlClassName() . '::saveLastError()');
		}
		if(is_string($this->getParameterType()))
		{
			$model = self::getModelByName($this->getParameterType());
			if($model && $model->getIsStruct())
			{
				$attributes = $model->getAttributes(true);
				if(count($attributes))
				{
					foreach($attributes as $attribute)
						array_push($comments,'@uses ' . $model->getPackagedName() . '::' . $attribute->getGetterName() . '()');
					array_push($comments,'@param ' . $model->getPackagedName() . ' $_' . lcfirst($model->getPackagedName()));
				}
			}
			else
				array_push($comments,'@param ' . $this->getParameterType() . ' $_' . lcfirst($this->getParameterType()));
		}
		elseif(is_array($this->getParameterType()))
		{
			foreach($this->getParameterType() as $parameterName=>$parameterType)
			{
				$model = self::getModelByName($parameterType);
				if($model && $model->getIsStruct())
					array_push($comments,'@param ' . $model->getPackagedName() . ' $_' . lcfirst($model->getPackagedName()));
				else
					array_push($comments,'@param ' . $parameterType . ' $_' . lcfirst(self::cleanString($parameterName)));
			}
		}
		/**
		 * @Return
		 */
		$model = self::getModelByName($this->getReturnType());
		if($model && $model->getIsStruct())
			array_push($comments,'@return ' . $model->getPackagedName());
		else
			array_push($comments,'@return ' . $this->getReturnType());
		unset($model);
		return $comments;
	}
	/**
	 * Set the function body
	 * @uses WsdlToPhpModel::getName()
	 * @uses WsdlToPhpModel::getModelByName()
	 * @uses WsdlToPhpModel::getCleanName()
	 * @uses WsdlToPhpModel::nameIsClean()
	 * @uses WsdlToPhpModel::cleanString()
	 * @uses WsdlToPhpModel::replaceReservedPhpKeyword()
	 * @uses WsdlToPhpFunction::getParameterType()
	 * @uses WsdlToPhpStruct::getAttributes()
	 * @uses WsdlToPhpStruct::getIsStruct()
	 * @uses WsdlToPhpStructAttribute::getGetterName()
	 * @uses WsdlToPhpGenerator::getOptionResponseAsWsdlObject()
	 * @uses WsdlToPhpGenerator::getOptionSendParametersAsArray()
	 * @uses WsdlToPhpGenerator::getOptionSendArrayAsParameter()
	 * @uses WsdlToPhpGenerator::getOptionSendArrayAsParameter()
	 * @param array
	 * @return void
	 */
	public function getBody(&$_body)
	{
		$parameterModel = self::getModelByName($this->getParameterType());
		$parameterModel = ($parameterModel && $parameterModel->getIsStruct())?$parameterModel:null;
		$returnModel = self::getModelByName($this->getReturnType());
		$returnModel = ($returnModel && $returnModel->getIsStruct())?$returnModel:null;
		if($parameterModel)
		{
			if(count($parameterModel->getAttributes(true)))
			{
				$parameterName = '$_' . lcfirst($parameterModel->getPackagedName());
				$parameter = $parameterModel->getPackagedName() . ' ' . $parameterName;
			}
			else
				$parameterName = $parameter = '';
		}
		elseif(is_string($this->getParameterType()))
			$parameterName = $parameter = '$_' . lcfirst(self::cleanString($this->getParameterType()));
		elseif(is_array($this->getParameterType()))
		{
			$parameters = array();
			foreach($this->getParameterType() as $parameterName=>$parameterType)
			{
				$model = self::getModelByName($parameterType);
				if($model && $model->getIsStruct())
					$parameterName = $model->getPackagedName();
				else
					$parameterName = self::cleanString($parameterName);
				array_push($parameters,(($model && $model->getIsStruct())?$model->getPackagedName() . ' ':'') . '$_' . lcfirst($parameterName));
			}
			$parameterName = $parameter = implode(',',$parameters);
		}
		else
			$parameterName = $parameter = '';
		array_push($_body,'public function ' . self::replaceReservedPhpKeyword($this->getCleanName(),$this->getName()) . '(' . $parameter . ')');
		array_push($_body,'{');
		array_push($_body,'try');
		array_push($_body,'{');
		/**
		 * Response
		 */
		$responseAsObjStart = ((WsdlToPhpGenerator::getOptionResponseAsWsdlObject() && $returnModel)?'new ' . $returnModel->getPackagedName() . '(':'');
		$responseAsObjEnd = ((WsdlToPhpGenerator::getOptionResponseAsWsdlObject() && $returnModel)?')':'');
		/**
		 * Soap call
		 */
		$soapCallStart = 'self::getSoapClient()->' . ($this->nameIsClean()?$this->getName() . '(':'__soapCall(' . $this->getName() . ',');
		$soapCallEnd = ')' . (WsdlToPhpGenerator::getOptionSendParametersAsArray()?'->parameters':'');
		/**
		 * Soap parameters
		 */
		if($parameterModel)
		{
			$soapParametersEnd = array();
			$attributes = $parameterModel->getAttributes(true);
			if(count($attributes))
			{
				foreach($attributes as $attribute)
					array_push($soapParametersEnd,(WsdlToPhpGenerator::getOptionSendArrayAsParameter()?'\'' . addslashes($attribute->getName()) . '\'=>':'') . $parameterName . '->' . $attribute->getGetterName() . '()');
				$soapParametersStart = implode(',',$soapParametersEnd);
				$soapParametersEnd = '';
			}
			else
				$soapParametersStart = $soapParametersEnd = '';
		}
		elseif(is_string($this->getParameterType()))
		{
			$soapParametersStart = WsdlToPhpGenerator::getOptionSendArrayAsParameter()?'\'' . addslashes($this->getParameterType()) . '\'=>':'';
			$soapParametersEnd = '$_' . lcfirst(self::cleanString($this->getParameterType()));
		}
		elseif(is_array($this->getParameterType()))
		{
			$soapParametersStart = array();
			$soapParametersEnd = '';
			foreach($this->getParameterType() as $parameterName=>$parameterType)
			{
				$model = self::getModelByName($parameterType);
				if($model && $model->getIsStruct())
					$paramName = $model->getPackagedName();
				else
					$paramName = self::cleanString($parameterName);
				array_push($soapParametersStart,(WsdlToPhpGenerator::getOptionSendArrayAsParameter()?'\'' . addslashes($parameterName) . '\'=>':'') . '$_' . lcfirst($paramName));
				unset($model);
			}
			$soapParametersStart = implode(',',$soapParametersStart);
		}
		else
			$soapParametersStart = $soapParametersEnd = '';
		/**
		 * Send parameters in parameters array
		 */
		if(!empty($soapParametersStart))
		{
			$sendParametersAsArrayStart = (WsdlToPhpGenerator::getOptionSendParametersAsArray()?'array(\'parameters\'=>':'');
			$sendParametersAsArrayEnd = (WsdlToPhpGenerator::getOptionSendParametersAsArray()?')':'');
		}
		else
			$sendParametersAsArrayStart = $sendParametersAsArrayEnd = '';
		/**
		 * Send an array
		 */
		if(!empty($soapParametersStart))
		{
			$sendArrayAsParameterStart = (WsdlToPhpGenerator::getOptionSendArrayAsParameter()?'array(':'');
			$sendArrayAsParameterEnd = (WsdlToPhpGenerator::getOptionSendArrayAsParameter()?')':'');
		}
		else
			$sendArrayAsParameterStart = $sendArrayAsParameterEnd = '';
		array_push($_body,'$this->setResult(' . $responseAsObjStart . $soapCallStart . $sendParametersAsArrayStart . $sendArrayAsParameterStart . $soapParametersStart . $soapParametersEnd . $sendArrayAsParameterEnd . $sendParametersAsArrayEnd . $soapCallEnd . $responseAsObjEnd . ');');
		array_push($_body,'}');
		array_push($_body,'catch(SoapFault $soapFault)');
		array_push($_body,'{');
		array_push($_body,'return !$this->saveLastError(__METHOD__,$soapFault);');
		array_push($_body,'}');
		array_push($_body,'return $this->getResult();');
		array_push($_body,'}');
		unset($parameterModel,$parameter,$responseAsObjStart,$responseAsObjEnd,$soapCallStart,$soapCallEnd,$sendParametersAsArrayStart,$sendParametersAsArrayEnd,$sendParametersAsArrayStart,$sendArrayAsParameterEnd,$soapParametersStart,$soapParametersEnd);
	}
	/**
	 * Returns the parameter type
	 * @return string
	 */
	public function getParameterType()
	{
		return $this->parameterType;
	}
	/**
	 * Set the parameter type
	 * @param string
	 * @return string
	 */
	public function setParameterType($_parameterType)
	{
		return ($this->parameterType = $_parameterType);
	}
	/**
	 * Returns the retrun type
	 * @return string
	 */
	public function getReturnType()
	{
		return $this->returnType;
	}
	/**
	 * Set the retrun type
	 * @param string
	 * @return string
	 */
	public function setReturnType($_returnType)
	{
		return ($this->returnType = $_returnType);
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