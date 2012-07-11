<?php
/**
 * Class file for EbayFindTypeBaseServiceResponse
 * @date 04/07/2012
 */
/**
 * Class EbayFindTypeBaseServiceResponse
 * Documentation : Base response container for all service operations. Contains error information associated with the request.
 * @date 04/07/2012
 */
class EbayFindTypeBaseServiceResponse extends EbayFindWsdlClass
{
	/**
	 * The ack
	 * Meta informations :
	 * 	- documentation : Indicates whether or not errors or warnings were generated during the processing of the request.
	 * @var EbayFindTypeAckValue
	 */
	public $ack;
	/**
	 * The errorMessage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Description of an error or warning that occurred when eBay processed the request. Not returned if the ack value is Success.
	 * @var EbayFindTypeErrorMessage
	 */
	public $errorMessage;
	/**
	 * The version
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The release version that eBay used to process the request. Developer Technical Support may ask you for the version value if you work with them to troubleshoot issues. <br><br> <span class="tablenote"><strong>Note:</strong> The version in use is normally the latest release version, as specified in the release notes. Note that eBay releases the API to international sites about a week after the API version is released to the US site. </span>
	 * @var string
	 */
	public $version;
	/**
	 * The timestamp
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This value represents the date and time when eBay processed the request. This value is returned in GMT, the ISO 8601 date and time format (YYYY- MM- DDTHH:MM:SS.SSSZ). See the "dateTime" type for information about the time format, and for details on converting to and from the GMT time zone.
	 * @var dateTime
	 */
	public $timestamp;
	/**
	 * Constructor
	 * @param EbayFindTypeAckValue ack
	 * @param EbayFindTypeErrorMessage errorMessage
	 * @param string version
	 * @param dateTime timestamp
	 * @return EbayFindTypeBaseServiceResponse
	 */
	public function __construct($_ack = null,$_errorMessage = null,$_version = null,$_timestamp = null)
	{
		parent::__construct(array('ack'=>$_ack,'errorMessage'=>$_errorMessage,'version'=>$_version,'timestamp'=>$_timestamp));
	}
	/**
	 * Set ack
	 * @param AckValue ack
	 * @return AckValue
	 */
	public function setAck($_ack)
	{
		return ($this->ack = EbayFindTypeAckValue::valueIsValid($_ack)?$_ack:null);
	}
	/**
	 * Get ack
	 * @return EbayFindTypeAckValue
	 */
	public function getAck()
	{
		return $this->ack;
	}
	/**
	 * Set errorMessage
	 * @param ErrorMessage errorMessage
	 * @return ErrorMessage
	 */
	public function setErrorMessage($_errorMessage)
	{
		return ($this->errorMessage = $_errorMessage);
	}
	/**
	 * Get errorMessage
	 * @return EbayFindTypeErrorMessage
	 */
	public function getErrorMessage()
	{
		return $this->errorMessage;
	}
	/**
	 * Set version
	 * @param string version
	 * @return string
	 */
	public function setVersion($_version)
	{
		return ($this->version = $_version);
	}
	/**
	 * Get version
	 * @return string
	 */
	public function getVersion()
	{
		return $this->version;
	}
	/**
	 * Set timestamp
	 * @param dateTime timestamp
	 * @return dateTime
	 */
	public function setTimestamp($_timestamp)
	{
		return ($this->timestamp = $_timestamp);
	}
	/**
	 * Get timestamp
	 * @return dateTime
	 */
	public function getTimestamp()
	{
		return $this->timestamp;
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