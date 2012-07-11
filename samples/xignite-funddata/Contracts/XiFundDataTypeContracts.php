<?php
/**
 * Class file for XiFundDataTypeContracts
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeContracts
 * @date 08/07/2012
 */
class XiFundDataTypeContracts extends XiFundDataWsdlClass
{
	/**
	 * The AdvisoryContract
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $AdvisoryContract;
	/**
	 * The MoreThanOneAdviser
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $MoreThanOneAdviser;
	/**
	 * The AssetBasedOnly
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $AssetBasedOnly;
	/**
	 * The AnnualFeeRate
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $AnnualFeeRate;
	/**
	 * The ContractualFee
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeArrayOfContractualFee
	 */
	public $ContractualFee;
	/**
	 * Constructor
	 * @param boolean AdvisoryContract
	 * @param boolean MoreThanOneAdviser
	 * @param boolean AssetBasedOnly
	 * @param double AnnualFeeRate
	 * @param XiFundDataTypeArrayOfContractualFee ContractualFee
	 * @return XiFundDataTypeContracts
	 */
	public function __construct($_AdvisoryContract,$_MoreThanOneAdviser,$_AssetBasedOnly,$_AnnualFeeRate,$_ContractualFee = null)
	{
		parent::__construct(array('AdvisoryContract'=>$_AdvisoryContract,'MoreThanOneAdviser'=>$_MoreThanOneAdviser,'AssetBasedOnly'=>$_AssetBasedOnly,'AnnualFeeRate'=>$_AnnualFeeRate,'ContractualFee'=>new XiFundDataTypeArrayOfContractualFee($_ContractualFee)));
	}
	/**
	 * Set AdvisoryContract
	 * @param boolean AdvisoryContract
	 * @return boolean
	 */
	public function setAdvisoryContract($_AdvisoryContract)
	{
		return ($this->AdvisoryContract = $_AdvisoryContract);
	}
	/**
	 * Get AdvisoryContract
	 * @return boolean
	 */
	public function getAdvisoryContract()
	{
		return $this->AdvisoryContract;
	}
	/**
	 * Set MoreThanOneAdviser
	 * @param boolean MoreThanOneAdviser
	 * @return boolean
	 */
	public function setMoreThanOneAdviser($_MoreThanOneAdviser)
	{
		return ($this->MoreThanOneAdviser = $_MoreThanOneAdviser);
	}
	/**
	 * Get MoreThanOneAdviser
	 * @return boolean
	 */
	public function getMoreThanOneAdviser()
	{
		return $this->MoreThanOneAdviser;
	}
	/**
	 * Set AssetBasedOnly
	 * @param boolean AssetBasedOnly
	 * @return boolean
	 */
	public function setAssetBasedOnly($_AssetBasedOnly)
	{
		return ($this->AssetBasedOnly = $_AssetBasedOnly);
	}
	/**
	 * Get AssetBasedOnly
	 * @return boolean
	 */
	public function getAssetBasedOnly()
	{
		return $this->AssetBasedOnly;
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
	 * Set ContractualFee
	 * @param ArrayOfContractualFee ContractualFee
	 * @return ArrayOfContractualFee
	 */
	public function setContractualFee($_ContractualFee)
	{
		return ($this->ContractualFee = $_ContractualFee);
	}
	/**
	 * Get ContractualFee
	 * @return XiFundDataTypeArrayOfContractualFee
	 */
	public function getContractualFee()
	{
		return $this->ContractualFee;
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