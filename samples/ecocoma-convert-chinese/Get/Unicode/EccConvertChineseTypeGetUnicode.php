<?php
/**
 * Class file for EccConvertChineseTypeGetUnicode
 * @date 03/07/2012
 */
/**
 * Class EccConvertChineseTypeGetUnicode
 * @date 03/07/2012
 */
class EccConvertChineseTypeGetUnicode extends EccConvertChineseWsdlClass
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
	 * The Source
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Source;
	/**
	 * Constructor
	 * @param string KeyID
	 * @param string DomainID
	 * @param string Source
	 * @return EccConvertChineseTypeGetUnicode
	 */
	public function __construct($_KeyID = null,$_DomainID = null,$_Source = null)
	{
		parent::__construct(array('KeyID'=>$_KeyID,'DomainID'=>$_DomainID,'Source'=>$_Source));
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
	 * Set Source
	 * @param string Source
	 * @return string
	 */
	public function setSource($_Source)
	{
		return ($this->Source = $_Source);
	}
	/**
	 * Get Source
	 * @return string
	 */
	public function getSource()
	{
		return $this->Source;
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