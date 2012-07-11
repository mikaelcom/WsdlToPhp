<?php
/**
 * Class file for AmazonAlexaTypeRequestInfo
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeRequestInfo
 * @date 10/07/2012
 */
class AmazonAlexaTypeRequestInfo extends AmazonAlexaWsdlClass
{
	/**
	 * The OriginalRequest
	 * @var token
	 */
	public $OriginalRequest;
	/**
	 * The IPAddress
	 * @var token
	 */
	public $IPAddress;
	/**
	 * The RequestDate
	 * @var token
	 */
	public $RequestDate;
	/**
	 * The RedirectedUrl
	 * @var token
	 */
	public $RedirectedUrl;
	/**
	 * The ContentType
	 * @var token
	 */
	public $ContentType;
	/**
	 * The ResponseCode
	 * @var UnsignedIntegerType
	 */
	public $ResponseCode;
	/**
	 * The Length
	 * @var UnsignedIntegerType
	 */
	public $Length;
	/**
	 * The Language
	 * @var token
	 */
	public $Language;
	/**
	 * Constructor
	 * @param token OriginalRequest
	 * @param token IPAddress
	 * @param token RequestDate
	 * @param token RedirectedUrl
	 * @param token ContentType
	 * @param UnsignedIntegerType ResponseCode
	 * @param UnsignedIntegerType Length
	 * @param token Language
	 * @return AmazonAlexaTypeRequestInfo
	 */
	public function __construct($_OriginalRequest = null,$_IPAddress = null,$_RequestDate = null,$_RedirectedUrl = null,$_ContentType = null,$_ResponseCode = null,$_Length = null,$_Language = null)
	{
		parent::__construct(array('OriginalRequest'=>$_OriginalRequest,'IPAddress'=>$_IPAddress,'RequestDate'=>$_RequestDate,'RedirectedUrl'=>$_RedirectedUrl,'ContentType'=>$_ContentType,'ResponseCode'=>$_ResponseCode,'Length'=>$_Length,'Language'=>$_Language));
	}
	/**
	 * Set OriginalRequest
	 * @param token OriginalRequest
	 * @return token
	 */
	public function setOriginalRequest($_OriginalRequest)
	{
		return ($this->OriginalRequest = $_OriginalRequest);
	}
	/**
	 * Get OriginalRequest
	 * @return token
	 */
	public function getOriginalRequest()
	{
		return $this->OriginalRequest;
	}
	/**
	 * Set IPAddress
	 * @param token IPAddress
	 * @return token
	 */
	public function setIPAddress($_IPAddress)
	{
		return ($this->IPAddress = $_IPAddress);
	}
	/**
	 * Get IPAddress
	 * @return token
	 */
	public function getIPAddress()
	{
		return $this->IPAddress;
	}
	/**
	 * Set RequestDate
	 * @param token RequestDate
	 * @return token
	 */
	public function setRequestDate($_RequestDate)
	{
		return ($this->RequestDate = $_RequestDate);
	}
	/**
	 * Get RequestDate
	 * @return token
	 */
	public function getRequestDate()
	{
		return $this->RequestDate;
	}
	/**
	 * Set RedirectedUrl
	 * @param token RedirectedUrl
	 * @return token
	 */
	public function setRedirectedUrl($_RedirectedUrl)
	{
		return ($this->RedirectedUrl = $_RedirectedUrl);
	}
	/**
	 * Get RedirectedUrl
	 * @return token
	 */
	public function getRedirectedUrl()
	{
		return $this->RedirectedUrl;
	}
	/**
	 * Set ContentType
	 * @param token ContentType
	 * @return token
	 */
	public function setContentType($_ContentType)
	{
		return ($this->ContentType = $_ContentType);
	}
	/**
	 * Get ContentType
	 * @return token
	 */
	public function getContentType()
	{
		return $this->ContentType;
	}
	/**
	 * Set ResponseCode
	 * @param UnsignedIntegerType ResponseCode
	 * @return UnsignedIntegerType
	 */
	public function setResponseCode($_ResponseCode)
	{
		return ($this->ResponseCode = $_ResponseCode);
	}
	/**
	 * Get ResponseCode
	 * @return UnsignedIntegerType
	 */
	public function getResponseCode()
	{
		return $this->ResponseCode;
	}
	/**
	 * Set Length
	 * @param UnsignedIntegerType Length
	 * @return UnsignedIntegerType
	 */
	public function setLength($_Length)
	{
		return ($this->Length = $_Length);
	}
	/**
	 * Get Length
	 * @return UnsignedIntegerType
	 */
	public function getLength()
	{
		return $this->Length;
	}
	/**
	 * Set Language
	 * @param token Language
	 * @return token
	 */
	public function setLanguage($_Language)
	{
		return ($this->Language = $_Language);
	}
	/**
	 * Get Language
	 * @return token
	 */
	public function getLanguage()
	{
		return $this->Language;
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