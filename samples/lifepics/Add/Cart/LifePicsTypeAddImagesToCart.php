<?php
/**
 * Class file for LifePicsTypeAddImagesToCart
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeAddImagesToCart
 * @date 02/08/2012
 */
class LifePicsTypeAddImagesToCart extends LifePicsWsdlClass
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
	 * The PartnerSourceID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PartnerSourceID;
	/**
	 * The UserID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $UserID;
	/**
	 * The ImagesXML
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ImagesXML;
	/**
	 * Constructor
	 * @param string SessionID
	 * @param string MerchantID
	 * @param string PartnerSourceID
	 * @param string UserID
	 * @param string ImagesXML
	 * @return LifePicsTypeAddImagesToCart
	 */
	public function __construct($_SessionID = null,$_MerchantID = null,$_PartnerSourceID = null,$_UserID = null,$_ImagesXML = null)
	{
		parent::__construct(array('SessionID'=>$_SessionID,'MerchantID'=>$_MerchantID,'PartnerSourceID'=>$_PartnerSourceID,'UserID'=>$_UserID,'ImagesXML'=>$_ImagesXML));
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
	 * Set PartnerSourceID
	 * @param string PartnerSourceID
	 * @return string
	 */
	public function setPartnerSourceID($_PartnerSourceID)
	{
		return ($this->PartnerSourceID = $_PartnerSourceID);
	}
	/**
	 * Get PartnerSourceID
	 * @return string
	 */
	public function getPartnerSourceID()
	{
		return $this->PartnerSourceID;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>