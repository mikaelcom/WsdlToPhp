<?php
/**
 * Class file for MicrosoftTranslatorTypeGetAppIdToken
 * @date 05/07/2012
 */
/**
 * Class MicrosoftTranslatorTypeGetAppIdToken
 * @date 05/07/2012
 */
class MicrosoftTranslatorTypeGetAppIdToken extends MicrosoftTranslatorWsdlClass
{
	/**
	 * The appId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $appId;
	/**
	 * The minRatingRead
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var int
	 */
	public $minRatingRead;
	/**
	 * The maxRatingWrite
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var int
	 */
	public $maxRatingWrite;
	/**
	 * The expireSeconds
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var int
	 */
	public $expireSeconds;
	/**
	 * Constructor
	 * @param string appId
	 * @param int minRatingRead
	 * @param int maxRatingWrite
	 * @param int expireSeconds
	 * @return MicrosoftTranslatorTypeGetAppIdToken
	 */
	public function __construct($_appId = null,$_minRatingRead = null,$_maxRatingWrite = null,$_expireSeconds = null)
	{
		parent::__construct(array('appId'=>$_appId,'minRatingRead'=>$_minRatingRead,'maxRatingWrite'=>$_maxRatingWrite,'expireSeconds'=>$_expireSeconds));
	}
	/**
	 * Set appId
	 * @param string appId
	 * @return string
	 */
	public function setAppId($_appId)
	{
		return ($this->appId = $_appId);
	}
	/**
	 * Get appId
	 * @return string
	 */
	public function getAppId()
	{
		return $this->appId;
	}
	/**
	 * Set minRatingRead
	 * @param int minRatingRead
	 * @return int
	 */
	public function setMinRatingRead($_minRatingRead)
	{
		return ($this->minRatingRead = $_minRatingRead);
	}
	/**
	 * Get minRatingRead
	 * @return int
	 */
	public function getMinRatingRead()
	{
		return $this->minRatingRead;
	}
	/**
	 * Set maxRatingWrite
	 * @param int maxRatingWrite
	 * @return int
	 */
	public function setMaxRatingWrite($_maxRatingWrite)
	{
		return ($this->maxRatingWrite = $_maxRatingWrite);
	}
	/**
	 * Get maxRatingWrite
	 * @return int
	 */
	public function getMaxRatingWrite()
	{
		return $this->maxRatingWrite;
	}
	/**
	 * Set expireSeconds
	 * @param int expireSeconds
	 * @return int
	 */
	public function setExpireSeconds($_expireSeconds)
	{
		return ($this->expireSeconds = $_expireSeconds);
	}
	/**
	 * Get expireSeconds
	 * @return int
	 */
	public function getExpireSeconds()
	{
		return $this->expireSeconds;
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