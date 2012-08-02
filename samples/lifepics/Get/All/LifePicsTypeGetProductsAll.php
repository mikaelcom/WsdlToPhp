<?php
/**
 * Class file for LifePicsTypeGetProductsAll
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeGetProductsAll
 * @date 02/08/2012
 */
class LifePicsTypeGetProductsAll extends LifePicsWsdlClass
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
	 * @param string ProductCategoryID
	 * @return LifePicsTypeGetProductsAll
	 */
	public function __construct($_SessionID = null,$_MerchantID = null,$_ProductCategoryID = null)
	{
		parent::__construct(array('SessionID'=>$_SessionID,'MerchantID'=>$_MerchantID,'ProductCategoryID'=>$_ProductCategoryID));
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