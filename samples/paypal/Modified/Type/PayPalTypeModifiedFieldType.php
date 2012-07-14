<?php
/**
 * Class file for PayPalTypeModifiedFieldType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeModifiedFieldType
 * @date 14/07/2012
 */
class PayPalTypeModifiedFieldType extends PayPalWsdlClass
{
	/**
	 * The Field
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Field;
	/**
	 * The ModifyType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var PayPalTypeModifyCodeType
	 */
	public $ModifyType;
	/**
	 * Constructor
	 * @param string Field
	 * @param PayPalTypeModifyCodeType ModifyType
	 * @return PayPalTypeModifiedFieldType
	 */
	public function __construct($_Field = null,$_ModifyType = null)
	{
		parent::__construct(array('Field'=>$_Field,'ModifyType'=>$_ModifyType));
	}
	/**
	 * Set Field
	 * @param string Field
	 * @return string
	 */
	public function setField($_Field)
	{
		return ($this->Field = $_Field);
	}
	/**
	 * Get Field
	 * @return string
	 */
	public function getField()
	{
		return $this->Field;
	}
	/**
	 * Set ModifyType
	 * @param ModifyCodeType ModifyType
	 * @return ModifyCodeType
	 */
	public function setModifyType($_ModifyType)
	{
		return ($this->ModifyType = PayPalTypeModifyCodeType::valueIsValid($_ModifyType)?$_ModifyType:null);
	}
	/**
	 * Get ModifyType
	 * @return PayPalTypeModifyCodeType
	 */
	public function getModifyType()
	{
		return $this->ModifyType;
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