<?php
/**
 * Class file for YMailTypeFetchResult
 * @date 02/07/2012
 */
/**
 * Class YMailTypeFetchResult
 * @date 02/07/2012
 */
class YMailTypeFetchResult extends YMailWsdlClass
{
	/**
	 * The status
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var YMailTypeFetchStatus
	 */
	public $status;
	/**
	 * The numFetched
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $numFetched;
	/**
	 * Constructor
	 * @param YMailTypeFetchStatus status
	 * @param int numFetched
	 * @return YMailTypeFetchResult
	 */
	public function __construct($_status,$_numFetched)
	{
		parent::__construct(array('status'=>$_status,'numFetched'=>$_numFetched));
	}
	/**
	 * Set status
	 * @param FetchStatus status
	 * @return FetchStatus
	 */
	public function setStatus($_status)
	{
		return ($this->status = YMailTypeFetchStatus::valueIsValid($_status)?$_status:null);
	}
	/**
	 * Get status
	 * @return YMailTypeFetchStatus
	 */
	public function getStatus()
	{
		return $this->status;
	}
	/**
	 * Set numFetched
	 * @param int numFetched
	 * @return int
	 */
	public function setNumFetched($_numFetched)
	{
		return ($this->numFetched = $_numFetched);
	}
	/**
	 * Get numFetched
	 * @return int
	 */
	public function getNumFetched()
	{
		return $this->numFetched;
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