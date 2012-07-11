<?php
/**
 * Class file for OvhTypeTelephonySmsHistoryStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonySmsHistoryStruct
 * @date 02/07/2012
 */
class OvhTypeTelephonySmsHistoryStruct extends OvhWsdlClass
{
	/**
	 * The smsId
	 * @var int
	 */
	public $smsId;
	/**
	 * The numberFrom
	 * @var string
	 */
	public $numberFrom;
	/**
	 * The numberTo
	 * @var string
	 */
	public $numberTo;
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * The date
	 * @var string
	 */
	public $date;
	/**
	 * The message
	 * @var string
	 */
	public $message;
	/**
	 * The text
	 * @var string
	 */
	public $text;
	/**
	 * The user
	 * @var string
	 */
	public $user;
	/**
	 * The tag
	 * @var string
	 */
	public $tag;
	/**
	 * The pttDescription
	 * @var string
	 */
	public $pttDescription;
	/**
	 * The deliveryReceiptDescription
	 * @var string
	 */
	public $deliveryReceiptDescription;
	/**
	 * Constructor
	 * @param int smsId
	 * @param string numberFrom
	 * @param string numberTo
	 * @param string status
	 * @param string date
	 * @param string message
	 * @param string text
	 * @param string user
	 * @param string tag
	 * @param string pttDescription
	 * @param string deliveryReceiptDescription
	 * @return OvhTypeTelephonySmsHistoryStruct
	 */
	public function __construct($_smsId = null,$_numberFrom = null,$_numberTo = null,$_status = null,$_date = null,$_message = null,$_text = null,$_user = null,$_tag = null,$_pttDescription = null,$_deliveryReceiptDescription = null)
	{
		parent::__construct(array('smsId'=>$_smsId,'numberFrom'=>$_numberFrom,'numberTo'=>$_numberTo,'status'=>$_status,'date'=>$_date,'message'=>$_message,'text'=>$_text,'user'=>$_user,'tag'=>$_tag,'pttDescription'=>$_pttDescription,'deliveryReceiptDescription'=>$_deliveryReceiptDescription));
	}
	/**
	 * Set smsId
	 * @param int smsId
	 * @return int
	 */
	public function setSmsId($_smsId)
	{
		return ($this->smsId = $_smsId);
	}
	/**
	 * Get smsId
	 * @return int
	 */
	public function getSmsId()
	{
		return $this->smsId;
	}
	/**
	 * Set numberFrom
	 * @param string numberFrom
	 * @return string
	 */
	public function setNumberFrom($_numberFrom)
	{
		return ($this->numberFrom = $_numberFrom);
	}
	/**
	 * Get numberFrom
	 * @return string
	 */
	public function getNumberFrom()
	{
		return $this->numberFrom;
	}
	/**
	 * Set numberTo
	 * @param string numberTo
	 * @return string
	 */
	public function setNumberTo($_numberTo)
	{
		return ($this->numberTo = $_numberTo);
	}
	/**
	 * Get numberTo
	 * @return string
	 */
	public function getNumberTo()
	{
		return $this->numberTo;
	}
	/**
	 * Set status
	 * @param string status
	 * @return string
	 */
	public function setStatus($_status)
	{
		return ($this->status = $_status);
	}
	/**
	 * Get status
	 * @return string
	 */
	public function getStatus()
	{
		return $this->status;
	}
	/**
	 * Set date
	 * @param string date
	 * @return string
	 */
	public function setDate($_date)
	{
		return ($this->date = $_date);
	}
	/**
	 * Get date
	 * @return string
	 */
	public function getDate()
	{
		return $this->date;
	}
	/**
	 * Set message
	 * @param string message
	 * @return string
	 */
	public function setMessage($_message)
	{
		return ($this->message = $_message);
	}
	/**
	 * Get message
	 * @return string
	 */
	public function getMessage()
	{
		return $this->message;
	}
	/**
	 * Set text
	 * @param string text
	 * @return string
	 */
	public function setText($_text)
	{
		return ($this->text = $_text);
	}
	/**
	 * Get text
	 * @return string
	 */
	public function getText()
	{
		return $this->text;
	}
	/**
	 * Set user
	 * @param string user
	 * @return string
	 */
	public function setUser($_user)
	{
		return ($this->user = $_user);
	}
	/**
	 * Get user
	 * @return string
	 */
	public function getUser()
	{
		return $this->user;
	}
	/**
	 * Set tag
	 * @param string tag
	 * @return string
	 */
	public function setTag($_tag)
	{
		return ($this->tag = $_tag);
	}
	/**
	 * Get tag
	 * @return string
	 */
	public function getTag()
	{
		return $this->tag;
	}
	/**
	 * Set pttDescription
	 * @param string pttDescription
	 * @return string
	 */
	public function setPttDescription($_pttDescription)
	{
		return ($this->pttDescription = $_pttDescription);
	}
	/**
	 * Get pttDescription
	 * @return string
	 */
	public function getPttDescription()
	{
		return $this->pttDescription;
	}
	/**
	 * Set deliveryReceiptDescription
	 * @param string deliveryReceiptDescription
	 * @return string
	 */
	public function setDeliveryReceiptDescription($_deliveryReceiptDescription)
	{
		return ($this->deliveryReceiptDescription = $_deliveryReceiptDescription);
	}
	/**
	 * Get deliveryReceiptDescription
	 * @return string
	 */
	public function getDeliveryReceiptDescription()
	{
		return $this->deliveryReceiptDescription;
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