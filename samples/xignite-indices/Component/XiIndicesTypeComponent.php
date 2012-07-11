<?php
/**
 * Class file for XiIndicesTypeComponent
 * @date 08/07/2012
 */
/**
 * Class XiIndicesTypeComponent
 * @date 08/07/2012
 */
class XiIndicesTypeComponent extends XiIndicesWsdlClass
{
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiIndicesTypeSecurity
	 */
	public $Security;
	/**
	 * The Weight
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Weight;
	/**
	 * The AdjustmentFactor
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $AdjustmentFactor;
	/**
	 * The IndexComponentWeightType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiIndicesTypeIndexComponentWeightTypes
	 */
	public $IndexComponentWeightType;
	/**
	 * Constructor
	 * @param XiIndicesTypeSecurity Security
	 * @param double Weight
	 * @param double AdjustmentFactor
	 * @param XiIndicesTypeIndexComponentWeightTypes IndexComponentWeightType
	 * @return XiIndicesTypeComponent
	 */
	public function __construct($_Security = null,$_Weight,$_AdjustmentFactor,$_IndexComponentWeightType)
	{
		parent::__construct(array('Security'=>$_Security,'Weight'=>$_Weight,'AdjustmentFactor'=>$_AdjustmentFactor,'IndexComponentWeightType'=>$_IndexComponentWeightType));
	}
	/**
	 * Set Security
	 * @param Security Security
	 * @return Security
	 */
	public function setSecurity($_Security)
	{
		return ($this->Security = $_Security);
	}
	/**
	 * Get Security
	 * @return XiIndicesTypeSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
	}
	/**
	 * Set Weight
	 * @param double Weight
	 * @return double
	 */
	public function setWeight($_Weight)
	{
		return ($this->Weight = $_Weight);
	}
	/**
	 * Get Weight
	 * @return double
	 */
	public function getWeight()
	{
		return $this->Weight;
	}
	/**
	 * Set AdjustmentFactor
	 * @param double AdjustmentFactor
	 * @return double
	 */
	public function setAdjustmentFactor($_AdjustmentFactor)
	{
		return ($this->AdjustmentFactor = $_AdjustmentFactor);
	}
	/**
	 * Get AdjustmentFactor
	 * @return double
	 */
	public function getAdjustmentFactor()
	{
		return $this->AdjustmentFactor;
	}
	/**
	 * Set IndexComponentWeightType
	 * @param IndexComponentWeightTypes IndexComponentWeightType
	 * @return IndexComponentWeightTypes
	 */
	public function setIndexComponentWeightType($_IndexComponentWeightType)
	{
		return ($this->IndexComponentWeightType = XiIndicesTypeIndexComponentWeightTypes::valueIsValid($_IndexComponentWeightType)?$_IndexComponentWeightType:null);
	}
	/**
	 * Get IndexComponentWeightType
	 * @return XiIndicesTypeIndexComponentWeightTypes
	 */
	public function getIndexComponentWeightType()
	{
		return $this->IndexComponentWeightType;
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