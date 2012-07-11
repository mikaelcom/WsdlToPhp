<?php
/**
 * Class file for EccVideoAolTypeGetVideo
 * @date 03/07/2012
 */
/**
 * Class EccVideoAolTypeGetVideo
 * @date 03/07/2012
 */
class EccVideoAolTypeGetVideo extends EccVideoAolWsdlClass
{
	/**
	 * The KeyID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $KeyID;
	/**
	 * The DomainID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DomainID;
	/**
	 * The Keyword
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Keyword;
	/**
	 * Constructor
	 * @param string KeyID
	 * @param string DomainID
	 * @param string Keyword
	 * @return EccVideoAolTypeGetVideo
	 */
	public function __construct($_KeyID = null,$_DomainID = null,$_Keyword = null)
	{
		parent::__construct(array('KeyID'=>$_KeyID,'DomainID'=>$_DomainID,'Keyword'=>$_Keyword));
	}
	/**
	 * Set KeyID
	 * @param string KeyID
	 * @return string
	 */
	public function setKeyID($_KeyID)
	{
		return ($this->KeyID = $_KeyID);
	}
	/**
	 * Get KeyID
	 * @return string
	 */
	public function getKeyID()
	{
		return $this->KeyID;
	}
	/**
	 * Set DomainID
	 * @param string DomainID
	 * @return string
	 */
	public function setDomainID($_DomainID)
	{
		return ($this->DomainID = $_DomainID);
	}
	/**
	 * Get DomainID
	 * @return string
	 */
	public function getDomainID()
	{
		return $this->DomainID;
	}
	/**
	 * Set Keyword
	 * @param string Keyword
	 * @return string
	 */
	public function setKeyword($_Keyword)
	{
		return ($this->Keyword = $_Keyword);
	}
	/**
	 * Get Keyword
	 * @return string
	 */
	public function getKeyword()
	{
		return $this->Keyword;
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