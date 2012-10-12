<?php
/**
 * Class file for ScienceGovSearchTypeField
 * @date 13/10/2012
 */
/**
 * Class ScienceGovSearchTypeField
 * @date 13/10/2012
 */
class ScienceGovSearchTypeField extends ScienceGovSearchWsdlClass
{
	/**
	 * The defaultOp
	 * Meta informations :
	 * 	- nillable : true
	 * @var ScienceGovSearchTypeBooleanType
	 */
	public $defaultOp;
	/**
	 * The originalExpression
	 * @var string
	 */
	public $originalExpression;
	/**
	 * The fieldName
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $fieldName;
	/**
	 * The fieldNameType
	 * Meta informations :
	 * 	- nillable : true
	 * @var ScienceGovSearchTypeFieldNameType
	 */
	public $fieldNameType;
	/**
	 * The normalizedExpression
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $normalizedExpression;
	/**
	 * Constructor
	 * @param ScienceGovSearchTypeBooleanType defaultOp
	 * @param string originalExpression
	 * @param string fieldName
	 * @param ScienceGovSearchTypeFieldNameType fieldNameType
	 * @param string normalizedExpression
	 * @return ScienceGovSearchTypeField
	 */
	public function __construct($_defaultOp = null,$_originalExpression = null,$_fieldName = null,$_fieldNameType = null,$_normalizedExpression = null)
	{
		parent::__construct(array('defaultOp'=>$_defaultOp,'originalExpression'=>$_originalExpression,'fieldName'=>$_fieldName,'fieldNameType'=>$_fieldNameType,'normalizedExpression'=>$_normalizedExpression));
	}
	/**
	 * Set defaultOp
	 * @param BooleanType defaultOp
	 * @return BooleanType
	 */
	public function setDefaultOp($_defaultOp)
	{
		return ($this->defaultOp = ScienceGovSearchTypeBooleanType::valueIsValid($_defaultOp)?$_defaultOp:null);
	}
	/**
	 * Get defaultOp
	 * @return ScienceGovSearchTypeBooleanType
	 */
	public function getDefaultOp()
	{
		return $this->defaultOp;
	}
	/**
	 * Set originalExpression
	 * @param string originalExpression
	 * @return string
	 */
	public function setOriginalExpression($_originalExpression)
	{
		return ($this->originalExpression = $_originalExpression);
	}
	/**
	 * Get originalExpression
	 * @return string
	 */
	public function getOriginalExpression()
	{
		return $this->originalExpression;
	}
	/**
	 * Set fieldName
	 * @param string fieldName
	 * @return string
	 */
	public function setFieldName($_fieldName)
	{
		return ($this->fieldName = $_fieldName);
	}
	/**
	 * Get fieldName
	 * @return string
	 */
	public function getFieldName()
	{
		return $this->fieldName;
	}
	/**
	 * Set fieldNameType
	 * @param FieldNameType fieldNameType
	 * @return FieldNameType
	 */
	public function setFieldNameType($_fieldNameType)
	{
		return ($this->fieldNameType = ScienceGovSearchTypeFieldNameType::valueIsValid($_fieldNameType)?$_fieldNameType:null);
	}
	/**
	 * Get fieldNameType
	 * @return ScienceGovSearchTypeFieldNameType
	 */
	public function getFieldNameType()
	{
		return $this->fieldNameType;
	}
	/**
	 * Set normalizedExpression
	 * @param string normalizedExpression
	 * @return string
	 */
	public function setNormalizedExpression($_normalizedExpression)
	{
		return ($this->normalizedExpression = $_normalizedExpression);
	}
	/**
	 * Get normalizedExpression
	 * @return string
	 */
	public function getNormalizedExpression()
	{
		return $this->normalizedExpression;
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>