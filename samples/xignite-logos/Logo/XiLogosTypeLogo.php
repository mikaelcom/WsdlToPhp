<?php
/**
 * Class file for XiLogosTypeLogo
 * @date 08/07/2012
 */
/**
 * Class XiLogosTypeLogo
 * @date 08/07/2012
 */
class XiLogosTypeLogo extends XiLogosTypeCommon
{
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiLogosTypeSecurity
	 */
	public $Security;
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiLogosTypeImageTypes
	 */
	public $Type;
	/**
	 * The URL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $URL;
	/**
	 * Constructor
	 * @param XiLogosTypeSecurity Security
	 * @param XiLogosTypeImageTypes Type
	 * @param string URL
	 * @return XiLogosTypeLogo
	 */
	public function __construct($_Security = null,$_Type,$_URL = null)
	{
		XiLogosWsdlClass::__construct(array('Security'=>$_Security,'Type'=>$_Type,'URL'=>$_URL));
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
	 * @return XiLogosTypeSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
	}
	/**
	 * Set Type
	 * @param ImageTypes Type
	 * @return ImageTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiLogosTypeImageTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiLogosTypeImageTypes
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set URL
	 * @param string URL
	 * @return string
	 */
	public function setURL($_URL)
	{
		return ($this->URL = $_URL);
	}
	/**
	 * Get URL
	 * @return string
	 */
	public function getURL()
	{
		return $this->URL;
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