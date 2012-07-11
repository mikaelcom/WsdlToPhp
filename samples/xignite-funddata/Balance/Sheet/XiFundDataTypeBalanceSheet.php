<?php
/**
 * Class file for XiFundDataTypeBalanceSheet
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeBalanceSheet
 * @date 08/07/2012
 */
class XiFundDataTypeBalanceSheet extends XiFundDataWsdlClass
{
	/**
	 * The Assets
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeAssets
	 */
	public $Assets;
	/**
	 * The Liabilities
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeLiabilities
	 */
	public $Liabilities;
	/**
	 * Constructor
	 * @param XiFundDataTypeAssets Assets
	 * @param XiFundDataTypeLiabilities Liabilities
	 * @return XiFundDataTypeBalanceSheet
	 */
	public function __construct($_Assets = null,$_Liabilities = null)
	{
		parent::__construct(array('Assets'=>$_Assets,'Liabilities'=>$_Liabilities));
	}
	/**
	 * Set Assets
	 * @param Assets Assets
	 * @return Assets
	 */
	public function setAssets($_Assets)
	{
		return ($this->Assets = $_Assets);
	}
	/**
	 * Get Assets
	 * @return XiFundDataTypeAssets
	 */
	public function getAssets()
	{
		return $this->Assets;
	}
	/**
	 * Set Liabilities
	 * @param Liabilities Liabilities
	 * @return Liabilities
	 */
	public function setLiabilities($_Liabilities)
	{
		return ($this->Liabilities = $_Liabilities);
	}
	/**
	 * Get Liabilities
	 * @return XiFundDataTypeLiabilities
	 */
	public function getLiabilities()
	{
		return $this->Liabilities;
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