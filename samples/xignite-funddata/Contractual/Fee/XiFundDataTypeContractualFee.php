<?php
/**
 * Class file for XiFundDataTypeContractualFee
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeContractualFee
 * @date 08/07/2012
 */
class XiFundDataTypeContractualFee extends XiFundDataWsdlClass
{
	/**
	 * The FeeType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeFeeTypes
	 */
	public $FeeType;
	/**
	 * The Assets
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Assets;
	/**
	 * The AnnualFeeRate
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $AnnualFeeRate;
	/**
	 * Constructor
	 * @param XiFundDataTypeFeeTypes FeeType
	 * @param double Assets
	 * @param double AnnualFeeRate
	 * @return XiFundDataTypeContractualFee
	 */
	public function __construct($_FeeType,$_Assets,$_AnnualFeeRate)
	{
		parent::__construct(array('FeeType'=>$_FeeType,'Assets'=>$_Assets,'AnnualFeeRate'=>$_AnnualFeeRate));
	}
	/**
	 * Set FeeType
	 * @param FeeTypes FeeType
	 * @return FeeTypes
	 */
	public function setFeeType($_FeeType)
	{
		return ($this->FeeType = XiFundDataTypeFeeTypes::valueIsValid($_FeeType)?$_FeeType:null);
	}
	/**
	 * Get FeeType
	 * @return XiFundDataTypeFeeTypes
	 */
	public function getFeeType()
	{
		return $this->FeeType;
	}
	/**
	 * Set Assets
	 * @param double Assets
	 * @return double
	 */
	public function setAssets($_Assets)
	{
		return ($this->Assets = $_Assets);
	}
	/**
	 * Get Assets
	 * @return double
	 */
	public function getAssets()
	{
		return $this->Assets;
	}
	/**
	 * Set AnnualFeeRate
	 * @param double AnnualFeeRate
	 * @return double
	 */
	public function setAnnualFeeRate($_AnnualFeeRate)
	{
		return ($this->AnnualFeeRate = $_AnnualFeeRate);
	}
	/**
	 * Get AnnualFeeRate
	 * @return double
	 */
	public function getAnnualFeeRate()
	{
		return $this->AnnualFeeRate;
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