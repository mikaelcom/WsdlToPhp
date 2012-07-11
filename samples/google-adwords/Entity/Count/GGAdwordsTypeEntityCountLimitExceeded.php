<?php
/**
 * Class file for GGAdwordsTypeEntityCountLimitExceeded
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeEntityCountLimitExceeded
 * Documentation : Signals that an entity count limit was exceeded for some level. For example, too many criteria for a campaign.
 * @date 03/07/2012
 */
class GGAdwordsTypeEntityCountLimitExceeded extends GGAdwordsTypeApiError
{
	/**
	 * The reason
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies which level's limit was exceeded.
	 * @var GGAdwordsTypeEntityCountLimitExceededReason
	 */
	public $reason;
	/**
	 * The enclosingId
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Id of the entity whose limit was exceeded.
	 * @var string
	 */
	public $enclosingId;
	/**
	 * The limit
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : The limit which was exceeded.
	 * @var int
	 */
	public $limit;
	/**
	 * Constructor
	 * @param GGAdwordsTypeEntityCountLimitExceededReason reason
	 * @param string enclosingId
	 * @param int limit
	 * @return GGAdwordsTypeEntityCountLimitExceeded
	 */
	public function __construct($_reason = null,$_enclosingId = null,$_limit = null)
	{
		GGAdwordsWsdlClass::__construct(array('reason'=>$_reason,'enclosingId'=>$_enclosingId,'limit'=>$_limit));
	}
	/**
	 * Set reason
	 * @param EntityCountLimitExceededReason reason
	 * @return EntityCountLimitExceededReason
	 */
	public function setReason($_reason)
	{
		return ($this->reason = GGAdwordsTypeEntityCountLimitExceededReason::valueIsValid($_reason)?$_reason:null);
	}
	/**
	 * Get reason
	 * @return GGAdwordsTypeEntityCountLimitExceededReason
	 */
	public function getReason()
	{
		return $this->reason;
	}
	/**
	 * Set enclosingId
	 * @param string enclosingId
	 * @return string
	 */
	public function setEnclosingId($_enclosingId)
	{
		return ($this->enclosingId = $_enclosingId);
	}
	/**
	 * Get enclosingId
	 * @return string
	 */
	public function getEnclosingId()
	{
		return $this->enclosingId;
	}
	/**
	 * Set limit
	 * @param int limit
	 * @return int
	 */
	public function setLimit($_limit)
	{
		return ($this->limit = $_limit);
	}
	/**
	 * Get limit
	 * @return int
	 */
	public function getLimit()
	{
		return $this->limit;
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