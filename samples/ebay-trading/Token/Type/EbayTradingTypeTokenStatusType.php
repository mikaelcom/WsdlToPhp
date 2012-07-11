<?php
/**
 * Class file for EbayTradingTypeTokenStatusType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeTokenStatusType
 * Documentation : Returns token status.
 * @date 04/07/2012
 */
class EbayTradingTypeTokenStatusType extends EbayTradingWsdlClass
{
	/**
	 * The Status
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Current token status.
	 * @var EbayTradingTypeTokenStatusCodeType
	 */
	public $Status;
	/**
	 * The EIASToken
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Identifies the user to whom the token belongs.
	 * @var string
	 */
	public $EIASToken;
	/**
	 * The ExpirationTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Original expiration time for the token.
	 * @var dateTime
	 */
	public $ExpirationTime;
	/**
	 * The RevocationTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Token revocation time, if the token has been revoked.
	 * @var dateTime
	 */
	public $RevocationTime;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeTokenStatusCodeType Status
	 * @param string EIASToken
	 * @param dateTime ExpirationTime
	 * @param dateTime RevocationTime
	 * @param DOMDocument any
	 * @return EbayTradingTypeTokenStatusType
	 */
	public function __construct($_Status = null,$_EIASToken = null,$_ExpirationTime = null,$_RevocationTime = null,$_any = null)
	{
		parent::__construct(array('Status'=>$_Status,'EIASToken'=>$_EIASToken,'ExpirationTime'=>$_ExpirationTime,'RevocationTime'=>$_RevocationTime,'any'=>$_any));
	}
	/**
	 * Set Status
	 * @param TokenStatusCodeType Status
	 * @return TokenStatusCodeType
	 */
	public function setStatus($_Status)
	{
		return ($this->Status = EbayTradingTypeTokenStatusCodeType::valueIsValid($_Status)?$_Status:null);
	}
	/**
	 * Get Status
	 * @return EbayTradingTypeTokenStatusCodeType
	 */
	public function getStatus()
	{
		return $this->Status;
	}
	/**
	 * Set EIASToken
	 * @param string EIASToken
	 * @return string
	 */
	public function setEIASToken($_EIASToken)
	{
		return ($this->EIASToken = $_EIASToken);
	}
	/**
	 * Get EIASToken
	 * @return string
	 */
	public function getEIASToken()
	{
		return $this->EIASToken;
	}
	/**
	 * Set ExpirationTime
	 * @param dateTime ExpirationTime
	 * @return dateTime
	 */
	public function setExpirationTime($_ExpirationTime)
	{
		return ($this->ExpirationTime = $_ExpirationTime);
	}
	/**
	 * Get ExpirationTime
	 * @return dateTime
	 */
	public function getExpirationTime()
	{
		return $this->ExpirationTime;
	}
	/**
	 * Set RevocationTime
	 * @param dateTime RevocationTime
	 * @return dateTime
	 */
	public function setRevocationTime($_RevocationTime)
	{
		return ($this->RevocationTime = $_RevocationTime);
	}
	/**
	 * Get RevocationTime
	 * @return dateTime
	 */
	public function getRevocationTime()
	{
		return $this->RevocationTime;
	}
	/**
	 * Set any
	 * @param DOMDocument any
	 * @return DOMDocument
	 */
	public function setAny($_any)
	{
		return ($this->any = $_any);
	}
	/**
	 * Get any
	 * @return DOMDocument
	 */
	public function getAny()
	{
		if(!($this->any instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			$dom->loadXML($this->any);
			$this->setAny($dom);
		}
		return $this->any;
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