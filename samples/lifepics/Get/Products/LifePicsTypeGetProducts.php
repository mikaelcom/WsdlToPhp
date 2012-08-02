<?php
/**
 * Class file for LifePicsTypeGetProducts
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeGetProducts
 * @date 02/08/2012
 */
class LifePicsTypeGetProducts extends LifePicsWsdlClass
{
	/**
	 * The SessionID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SessionID;
	/**
	 * The MerchantID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $MerchantID;
	/**
	 * The PickupLocationID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PickupLocationID;
	/**
	 * The ProductCategoryID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ProductCategoryID;
	/**
	 * Constructor
	 * @param string SessionID
	 * @param string MerchantID
	 * @param string PickupLocationID
	 * @param string ProductCategoryID
	 * @return LifePicsTypeGetProducts
	 */
	public function __construct($_SessionID = null,$_MerchantID = null,$_PickupLocationID = null,$_ProductCategoryID = null)
	{
		parent::__construct(array('SessionID'=>$_SessionID,'MerchantID'=>$_MerchantID,'PickupLocationID'=>$_PickupLocationID,'ProductCategoryID'=>$_ProductCategoryID));
	}
	/**
	 * Set SessionID
	 * @param string SessionID
	 * @return string
	 */
	public function setSessionID($_SessionID)
	{
		return ($this->SessionID = $_SessionID);
	}
	/**
	 * Get SessionID
	 * @return string
	 */
	public function getSessionID()
	{
		return $this->SessionID;
	}
	/**
	 * Set MerchantID
	 * @param string MerchantID
	 * @return string
	 */
	public function setMerchantID($_MerchantID)
	{
		return ($this->MerchantID = $_MerchantID);
	}
	/**
	 * Get MerchantID
	 * @return string
	 */
	public function getMerchantID()
	{
		return $this->MerchantID;
	}
	/**
	 * Set PickupLocationID
	 * @param string PickupLocationID
	 * @return string
	 */
	public function setPickupLocationID($_PickupLocationID)
	{
		return ($this->PickupLocationID = $_PickupLocationID);
	}
	/**
	 * Get PickupLocationID
	 * @return string
	 */
	public function getPickupLocationID()
	{
		return $this->PickupLocationID;
	}
	/**
	 * Set ProductCategoryID
	 * @param string ProductCategoryID
	 * @return string
	 */
	public function setProductCategoryID($_ProductCategoryID)
	{
		return ($this->ProductCategoryID = $_ProductCategoryID);
	}
	/**
	 * Get ProductCategoryID
	 * @return string
	 */
	public function getProductCategoryID()
	{
		return $this->ProductCategoryID;
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