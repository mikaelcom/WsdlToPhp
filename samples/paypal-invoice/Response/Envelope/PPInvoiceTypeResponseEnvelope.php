<?php
/**
 * Class file for PPInvoiceTypeResponseEnvelope
 * @date 02/07/2012
 */
/**
 * Class PPInvoiceTypeResponseEnvelope
 * Documentation : This specifies a list of parameters with every response from a service.
 * @date 02/07/2012
 */
class PPInvoiceTypeResponseEnvelope extends PPInvoiceWsdlClass
{
	/**
	 * The timestamp
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var dateTime
	 */
	public $timestamp;
	/**
	 * The ack
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- documentation : Application level acknowledgment code.
	 * @var PPInvoiceTypeAckCode
	 */
	public $ack;
	/**
	 * The correlationId
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $correlationId;
	/**
	 * The build
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $build;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param dateTime timestamp
	 * @param PPInvoiceTypeAckCode ack
	 * @param string correlationId
	 * @param string build
	 * @param DOMDocument any
	 * @return PPInvoiceTypeResponseEnvelope
	 */
	public function __construct($_timestamp,$_ack,$_correlationId,$_build,$_any = null)
	{
		parent::__construct(array('timestamp'=>$_timestamp,'ack'=>$_ack,'correlationId'=>$_correlationId,'build'=>$_build,'any'=>$_any));
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
	 * Set ack
	 * @param AckCode ack
	 * @return AckCode
	 */
	public function setAck($_ack)
	{
		return ($this->ack = PPInvoiceTypeAckCode::valueIsValid($_ack)?$_ack:null);
	}
	/**
	 * Get ack
	 * @return PPInvoiceTypeAckCode
	 */
	public function getAck()
	{
		return $this->ack;
	}
	/**
	 * Set correlationId
	 * @param string correlationId
	 * @return string
	 */
	public function setCorrelationId($_correlationId)
	{
		return ($this->correlationId = $_correlationId);
	}
	/**
	 * Get correlationId
	 * @return string
	 */
	public function getCorrelationId()
	{
		return $this->correlationId;
	}
	/**
	 * Set build
	 * @param string build
	 * @return string
	 */
	public function setBuild($_build)
	{
		return ($this->build = $_build);
	}
	/**
	 * Get build
	 * @return string
	 */
	public function getBuild()
	{
		return $this->build;
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