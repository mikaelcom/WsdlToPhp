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
	private $parameterType = '';
	/**
	 * Type of the return value for the operation
	 * @var string
	 */
	private $returnType = '';
	/**
	 * Indicates function is not alone with this name, then its name is contextualized based on its parameter(s)
	 * @var bool
	 */
	private $isUnique = true;
	/**
	 * Main constructor
	 * @see WsdlToPhpModel::__construct()
	 * @uses WsdlToPhpFunction::setParameterType()
	 * @uses WsdlToPhpFunction::setReturnType()
	 * @uses WsdlToPhpModel::setOwner()
	 * @param string $_name the function name
	 * @param string $_parameterType the type/name of the parameter
	 * @param string $_returnType the type/name of the return value
	 * @param WsdlToPhpService $_wsdlToPhpService defines the struct which owns this value
	 * @return WsdlToPhpFunction
	 */
	public function __construct($_name,$_parameterType,$_returnType,WsdlToPhpService $_wsdlToPhpService)
	{
		parent::__construct($_name);
		$this->setParameterType($_parameterType);
		$this->setReturnType($_returnType);
		$this->setOwner($_wsdlToPhpService);
	}
	/**
	 * Returns the name of the method that is used to call the operation
	 * It takes care of the fact that the method might not be the only one named as it is.
	 * @uses WsdlToPhpModel::getCleanName()
	 * @uses WsdlToPhpModel::replaceReservedPhpKeyword()
	 * @uses WsdlToPhpModel::getOwner()
	 * @uses WsdlToPhpModel::getPackagedName()
	 * @uses WsdlToPhpModel::uniqueName()
	 * @uses WsdlToPhpFunction::getOwner()
	 * @uses WsdlToPhpFunction::getParameterType()
	 * @uses WsdlToPhpFunction::getIsUnique()
	 * @return string
	 */
	public function getMethodName()
	{
		$methodName = $this->getCleanName();
		if(!$this->getIsUnique())
		{
			if(is_string($this->getParameterType()))
				$methodName .= ucfirst($this->getParameterType());
			else
				$methodName .= '_' . md5(var_export($this->getParameterType(),true));
		}
		$methodName = self::replaceReservedPhpKeyword($methodName,$this->getOwner()->getPackagedName());
		return self::uniqueName($methodName,$this->getOwner()->getPackagedName());
	}
	/**
	 * Returns the comment lines for this function
	 * @see WsdlToPhpModel::getComment()
	 * @uses WsdlToPhpStructAttribute::getGetterName()
	 * @uses WsdlToPhpFunction::getParameterType()
	 * @uses WsdlToPhpFunction::getReturnType()
	 * @uses WsdlToPhpFunction::getIsUnique()
	 * @uses WsdlToPhpStruct::getAttributes()
	 * @uses WsdlToPhpStruct::getIsStruct()
	 * @uses WsdlToPhpStruct::getIsRestriction()
	 * @uses WsdlToPhpModel::getPackagedName()
	 * @uses WsdlToPhpModel::getModelByName()
	 * @uses WsdlToPhpModel::addMetaComment()
	 * @uses WsdlToPhpModel::getDocumentation()
	 * @uses WsdlToPhpModel::getGenericWsdlClassName()
	 * @uses WsdlToPhpModel::cleanString()
	 * @return array
	 */
	public function getComment()
	{
		$comments = array();
		array_push($comments,'Method to call the operation originally named ' . $this->getName());
		if(!$this->getIsUnique())
			array_push($comments,'This method has been renamed because it is defined several times but with different signature');
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
			if($model && $model->getIsStruct() && !$model->getIsRestriction())
				array_push($comments,'@param ' . $model->getPackagedName() . ' $_' . lcfirst($model->getPackagedName()));
			else
				array_push($comments,'@param ' . $this->getParameterType() . ' $_' . lcfirst($this->getParameterType()));
		}
		elseif(is_array($this->getParameterType()))
		{
			foreach($this->getParameterType() as $parameterName=>$parameterType)
			{
				$model = self::getModelByName($parameterType);
				if($model && $model->getIsStruct() && !$model->getIsRestriction())
					array_push($comments,'@param ' . $model->getPackagedName() . ' $_' . lcfirst(self::cleanString($parameterName)));
				else
					array_push($comments,'@param ' . $parameterType . ' $_' . lcfirst(self::cleanString($parameterName)));
			}
		}
		/**
		 * @Return
		 */
		$model = self::getModelByName($this->getReturnType());
		if($model && $model->getIsStruct() && !$model->getIsRestriction())
			array_push($comments,'@return ' . $model->getPackagedName());
		else
			array_push($comments,'@return ' . $this->getReturnType());
		unset($model);
		return $comments;
	}
	/**
	 * Set the function body
	 * @uses WsdlToPhpModel::getName()
	 * @uses WsdlToPhpModel::getPackagedName()
	 * @uses WsdlToPhpModel::getModelByName()
	 * @uses WsdlToPhpModel::nameIsClean()
	 * @uses WsdlToPhpModel::cleanString()
	 * @uses WsdlToPhpModel::uniqueName()
	 * @uses WsdlToPhpFunction::getParameterType()
	 * @uses WsdlToPhpFunction::getOwner()
	 * @uses WsdlToPhpFunction::getMethodName()
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
		$parameterModel = ($parameterModel && $parameterModel->getIsStruct() && !$parameterModel->getIsRestriction())?$parameterModel:null;
		$returnModel = self::getModelByName($this->getReturnType());
		$returnModel = ($returnModel && $returnModel->getIsStruct() && !$returnModel->getIsRestriction())?$returnModel:null;
		if($parameterModel)
		{
			if(count($parameterModel->getAttributes(true,true)))
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
				if(false && $model && $model->getIsStruct() && !$model->getIsRestriction())
					$parameterName = $model->getPackagedName();
				else
					$parameterName = self::cleanString($parameterName);
				array_push($parameters,(($model && $model->getIsStruct() && !$model->getIsRestriction())?$model->getPackagedName() . ' ':'') . '$_' . lcfirst($parameterName));
			}
			$parameterName = $parameter = implode(',',$parameters);
		}
		else
			$parameterName = $parameter = '';
		array_push($_body,'public function ' . $this->getMethodName() . '(' . $parameter . ')');
		array_push($_body,'{');
		array_push($_body,'try');
		array_push($_body,'{');
		/**
		 * Response
		 */
		$responseAsObjStart = ((WsdlToPhpGenerator::getOptionResponseAsWsdlObject() && $returnModel)?'new ' . $returnModel->getPackagedName() . '(':'');
		$responseAsObjEnd = ((WsdlToPhpGenerator::getOptionResponseAsWsdlObject() && $returnModel)?')':'');
		/**
		 * Soap parameters
		 */
		if($parameterModel)
		{
			$attributes = $parameterModel->getAttributes(true,true);
			if(count($attributes))
			{
				$soapParametersStart = $parameterName;
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
				if(false && $model && $model->getIsStruct() && !$model->getIsRestriction())
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
		 * Soap call
		 */
		$soapCallStart = 'self::getSoapClient()->' . ($this->nameIsClean()?$this->getName() . '(':'__soapCall(\'' . $this->getName() . '\'' . ((!empty($soapParametersStart) || !empty($soapParametersEnd))?',array(':''));
		$soapCallEnd = ((!$this->nameIsClean() && (!empty($soapParametersStart) || !empty($soapParametersEnd)))?')':'') . ')' . (WsdlToPhpGenerator::getOptionSendParametersAsArray()?'->parameters':'');
		/**
		 * Send parameters in parameters array
		 */
		if(!empty($soapParametersStart) && $this->nameIsClean())
		{
			$sendParametersAsArrayStart = (WsdlToPhpGenerator::getOptionSendParametersAsArray()?'array(\'parameters\'=>':'');
			$sendParametersAsArrayEnd = (WsdlToPhpGenerator::getOptionSendParametersAsArray()?')':'');
		}
		else
			$sendParametersAsArrayStart = $sendParametersAsArrayEnd = '';
		/**
		 * Send an array
		 */
		if(!empty($soapParametersStart) && $this->nameIsClean())
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
	 * Returns the isUnique property
	 * @return bool
	 */
	public function getIsUnique()
	{
		return $this->isUnique;
	}
	/**
	 * Set the isUnique property
	 * @param bool
	 * @return string
	 */
	public function setIsUnique($_isUnique)
	{
		return ($this->isUnique = $_isUnique);
	}
	/**
	 * Returns the owner model object, meaning a WsdlToPhpService object
	 * @see WsdlToPhpModel::getOwner()
	 * @uses WsdlToPhpModel::getOwner()
	 * @return WsdlToPhpService
	 */
	public function getOwner()
	{
		return parent::getOwner();
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