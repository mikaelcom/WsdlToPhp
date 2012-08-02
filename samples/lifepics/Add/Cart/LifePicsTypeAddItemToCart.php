<?php
/**
 * Class file for LifePicsTypeAddItemToCart
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeAddItemToCart
 * @date 02/08/2012
 */
class LifePicsTypeAddItemToCart extends LifePicsWsdlClass
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
	 * The UserID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $UserID;
	/**
	 * The PickupLocationID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PickupLocationID;
	/**
	 * The ProductID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ProductID;
	/**
	 * The Quantity
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Quantity;
	/**
	 * The ImagesXML
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ImagesXML;
	/**
	 * The AttributesXML
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AttributesXML;
	/**
	 * Constructor
	 * @param string SessionID
	 * @param string MerchantID
	 * @param string UserID
	 * @param string PickupLocationID
	 * @param string ProductID
	 * @param string Quantity
	 * @param string ImagesXML
	 * @param string AttributesXML
	 * @return LifePicsTypeAddItemToCart
	 */
	public function __construct($_SessionID = null,$_MerchantID = null,$_UserID = null,$_PickupLocationID = null,$_ProductID = null,$_Quantity = null,$_ImagesXML = null,$_AttributesXML = null)
	{
		parent::__construct(array('SessionID'=>$_SessionID,'MerchantID'=>$_MerchantID,'UserID'=>$_UserID,'PickupLocationID'=>$_PickupLocationID,'ProductID'=>$_ProductID,'Quantity'=>$_Quantity,'ImagesXML'=>$_ImagesXML,'AttributesXML'=>$_AttributesXML));
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
	 * Set UserID
	 * @param string UserID
	 * @return string
	 */
	public function setUserID($_UserID)
	{
		return ($this->UserID = $_UserID);
	}
	/**
	 * Get UserID
	 * @return string
	 */
	public function getUserID()
	{
		return $this->UserID;
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
	 * Set ProductID
	 * @param string ProductID
	 * @return string
	 */
	public function setProductID($_ProductID)
	{
		return ($this->ProductID = $_ProductID);
	}
	/**
	 * Get ProductID
	 * @return string
	 */
	public function getProductID()
	{
		return $this->ProductID;
	}
	/**
	 * Set Quantity
	 * @param string Quantity
	 * @return string
	 */
	public function setQuantity($_Quantity)
	{
		return ($this->Quantity = $_Quantity);
	}
	/**
	 * Get Quantity
	 * @return string
	 */
	public function getQuantity()
	{
		return $this->Quantity;
	}
	/**
	 * Set ImagesXML
	 * @param string ImagesXML
	 * @return string
	 */
	public function setImagesXML($_ImagesXML)
	{
		return ($this->ImagesXML = $_ImagesXML);
	}
	/**
	 * Get ImagesXML
	 * @return string
	 */
	public function getImagesXML()
	{
		return $this->ImagesXML;
	}
	/**
	 * Set AttributesXML
	 * @param string AttributesXML
	 * @return string
	 */
	public function setAttributesXML($_AttributesXML)
	{
		return ($this->AttributesXML = $_AttributesXML);
	}
	/**
	 * Get AttributesXML
	 * @return string
	 */
	public function getAttributesXML()
	{
		return $this->AttributesXML;
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