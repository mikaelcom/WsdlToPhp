<?php
/**
 * Class file for XWebOrderTypeRequestMyOrderTrackerType
 * @date 09/07/2012
 */
/**
 * Class XWebOrderTypeRequestMyOrderTrackerType
 * @date 09/07/2012
 */
class XWebOrderTypeRequestMyOrderTrackerType extends XWebOrderWsdlClass
{
	/**
	 * The ResellerEmail
	 * @var ResellerEmail
	 */
	public $ResellerEmail;
	/**
	 * The EndUserEmail
	 * @var EndUserEmail
	 */
	public $EndUserEmail;
	/**
	 * The ResellerEvents
	 * @var ResellerEvents
	 */
	public $ResellerEvents;
	/**
	 * The EndUserEvents
	 * @var EndUserEvents
	 */
	public $EndUserEvents;
	/**
	 * Constructor
	 * @param ResellerEmail ResellerEmail
	 * @param EndUserEmail EndUserEmail
	 * @param ResellerEvents ResellerEvents
	 * @param EndUserEvents EndUserEvents
	 * @return XWebOrderTypeRequestMyOrderTrackerType
	 */
	public function __construct($_ResellerEmail = null,$_EndUserEmail = null,$_ResellerEvents = null,$_EndUserEvents = null)
	{
		parent::__construct(array('ResellerEmail'=>$_ResellerEmail,'EndUserEmail'=>$_EndUserEmail,'ResellerEvents'=>$_ResellerEvents,'EndUserEvents'=>$_EndUserEvents));
	}
	/**
	 * Set ResellerEmail
	 * @param ResellerEmail ResellerEmail
	 * @return ResellerEmail
	 */
	public function setResellerEmail($_ResellerEmail)
	{
		return ($this->ResellerEmail = $_ResellerEmail);
	}
	/**
	 * Get ResellerEmail
	 * @return ResellerEmail
	 */
	public function getResellerEmail()
	{
		return $this->ResellerEmail;
	}
	/**
	 * Set EndUserEmail
	 * @param EndUserEmail EndUserEmail
	 * @return EndUserEmail
	 */
	public function setEndUserEmail($_EndUserEmail)
	{
		return ($this->EndUserEmail = $_EndUserEmail);
	}
	/**
	 * Get EndUserEmail
	 * @return EndUserEmail
	 */
	public function getEndUserEmail()
	{
		return $this->EndUserEmail;
	}
	/**
	 * Set ResellerEvents
	 * @param ResellerEvents ResellerEvents
	 * @return ResellerEvents
	 */
	public function setResellerEvents($_ResellerEvents)
	{
		return ($this->ResellerEvents = $_ResellerEvents);
	}
	/**
	 * Get ResellerEvents
	 * @return ResellerEvents
	 */
	public function getResellerEvents()
	{
		return $this->ResellerEvents;
	}
	/**
	 * Set EndUserEvents
	 * @param EndUserEvents EndUserEvents
	 * @return EndUserEvents
	 */
	public function setEndUserEvents($_EndUserEvents)
	{
		return ($this->EndUserEvents = $_EndUserEvents);
	}
	/**
	 * Get EndUserEvents
	 * @return EndUserEvents
	 */
	public function getEndUserEvents()
	{
		return $this->EndUserEvents;
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