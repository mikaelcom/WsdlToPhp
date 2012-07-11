<?php
/**
 * Class file for OvhTypeFreedomStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeFreedomStruct
 * @date 02/07/2012
 */
class OvhTypeFreedomStruct extends OvhWsdlClass
{
	/**
	 * The referenceReferer
	 * @var string
	 */
	public $referenceReferer;
	/**
	 * The creationDate
	 * @var string
	 */
	public $creationDate;
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * The freeDom
	 * @var string
	 */
	public $freeDom;
	/**
	 * The useDate
	 * @var string
	 */
	public $useDate;
	/**
	 * The domainReferer
	 * @var string
	 */
	public $domainReferer;
	/**
	 * Constructor
	 * @param string referenceReferer
	 * @param string creationDate
	 * @param string status
	 * @param string freeDom
	 * @param string useDate
	 * @param string domainReferer
	 * @return OvhTypeFreedomStruct
	 */
	public function __construct($_referenceReferer = null,$_creationDate = null,$_status = null,$_freeDom = null,$_useDate = null,$_domainReferer = null)
	{
		parent::__construct(array('referenceReferer'=>$_referenceReferer,'creationDate'=>$_creationDate,'status'=>$_status,'freeDom'=>$_freeDom,'useDate'=>$_useDate,'domainReferer'=>$_domainReferer));
	}
	/**
	 * Set referenceReferer
	 * @param string referenceReferer
	 * @return string
	 */
	public function setReferenceReferer($_referenceReferer)
	{
		return ($this->referenceReferer = $_referenceReferer);
	}
	/**
	 * Get referenceReferer
	 * @return string
	 */
	public function getReferenceReferer()
	{
		return $this->referenceReferer;
	}
	/**
	 * Set creationDate
	 * @param string creationDate
	 * @return string
	 */
	public function setCreationDate($_creationDate)
	{
		return ($this->creationDate = $_creationDate);
	}
	/**
	 * Get creationDate
	 * @return string
	 */
	public function getCreationDate()
	{
		return $this->creationDate;
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
	 * Set freeDom
	 * @param string freeDom
	 * @return string
	 */
	public function setFreeDom($_freeDom)
	{
		return ($this->freeDom = $_freeDom);
	}
	/**
	 * Get freeDom
	 * @return string
	 */
	public function getFreeDom()
	{
		return $this->freeDom;
	}
	/**
	 * Set useDate
	 * @param string useDate
	 * @return string
	 */
	public function setUseDate($_useDate)
	{
		return ($this->useDate = $_useDate);
	}
	/**
	 * Get useDate
	 * @return string
	 */
	public function getUseDate()
	{
		return $this->useDate;
	}
	/**
	 * Set domainReferer
	 * @param string domainReferer
	 * @return string
	 */
	public function setDomainReferer($_domainReferer)
	{
		return ($this->domainReferer = $_domainReferer);
	}
	/**
	 * Get domainReferer
	 * @return string
	 */
	public function getDomainReferer()
	{
		return $this->domainReferer;
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