<?php
/**
 * Class file for ScienceGovSearchTypeLibraryRecord
 * @date 13/10/2012
 */
/**
 * Class ScienceGovSearchTypeLibraryRecord
 * @date 13/10/2012
 */
class ScienceGovSearchTypeLibraryRecord extends ScienceGovSearchWsdlClass
{
	/**
	 * The subject
	 * @var string
	 */
	public $subject;
	/**
	 * The leader
	 * @var string
	 */
	public $leader;
	/**
	 * The controlNumber
	 * @var string
	 */
	public $controlNumber;
	/**
	 * The lexileLevel
	 * @var string
	 */
	public $lexileLevel;
	/**
	 * The targetAudience
	 * @var string
	 */
	public $targetAudience;
	/**
	 * The dissertation
	 * @var string
	 */
	public $dissertation;
	/**
	 * The performer
	 * @var string
	 */
	public $performer;
	/**
	 * The holdings
	 * @var string
	 */
	public $holdings;
	/**
	 * The availability
	 * @var string
	 */
	public $availability;
	/**
	 * The geoLocation
	 * @var string
	 */
	public $geoLocation;
	/**
	 * Constructor
	 * @param string subject
	 * @param string leader
	 * @param string controlNumber
	 * @param string lexileLevel
	 * @param string targetAudience
	 * @param string dissertation
	 * @param string performer
	 * @param string holdings
	 * @param string availability
	 * @param string geoLocation
	 * @return ScienceGovSearchTypeLibraryRecord
	 */
	public function __construct($_subject = null,$_leader = null,$_controlNumber = null,$_lexileLevel = null,$_targetAudience = null,$_dissertation = null,$_performer = null,$_holdings = null,$_availability = null,$_geoLocation = null)
	{
		parent::__construct(array('subject'=>$_subject,'leader'=>$_leader,'controlNumber'=>$_controlNumber,'lexileLevel'=>$_lexileLevel,'targetAudience'=>$_targetAudience,'dissertation'=>$_dissertation,'performer'=>$_performer,'holdings'=>$_holdings,'availability'=>$_availability,'geoLocation'=>$_geoLocation));
	}
	/**
	 * Set subject
	 * @param string subject
	 * @return string
	 */
	public function setSubject($_subject)
	{
		return ($this->subject = $_subject);
	}
	/**
	 * Get subject
	 * @return string
	 */
	public function getSubject()
	{
		return $this->subject;
	}
	/**
	 * Set leader
	 * @param string leader
	 * @return string
	 */
	public function setLeader($_leader)
	{
		return ($this->leader = $_leader);
	}
	/**
	 * Get leader
	 * @return string
	 */
	public function getLeader()
	{
		return $this->leader;
	}
	/**
	 * Set controlNumber
	 * @param string controlNumber
	 * @return string
	 */
	public function setControlNumber($_controlNumber)
	{
		return ($this->controlNumber = $_controlNumber);
	}
	/**
	 * Get controlNumber
	 * @return string
	 */
	public function getControlNumber()
	{
		return $this->controlNumber;
	}
	/**
	 * Set lexileLevel
	 * @param string lexileLevel
	 * @return string
	 */
	public function setLexileLevel($_lexileLevel)
	{
		return ($this->lexileLevel = $_lexileLevel);
	}
	/**
	 * Get lexileLevel
	 * @return string
	 */
	public function getLexileLevel()
	{
		return $this->lexileLevel;
	}
	/**
	 * Set targetAudience
	 * @param string targetAudience
	 * @return string
	 */
	public function setTargetAudience($_targetAudience)
	{
		return ($this->targetAudience = $_targetAudience);
	}
	/**
	 * Get targetAudience
	 * @return string
	 */
	public function getTargetAudience()
	{
		return $this->targetAudience;
	}
	/**
	 * Set dissertation
	 * @param string dissertation
	 * @return string
	 */
	public function setDissertation($_dissertation)
	{
		return ($this->dissertation = $_dissertation);
	}
	/**
	 * Get dissertation
	 * @return string
	 */
	public function getDissertation()
	{
		return $this->dissertation;
	}
	/**
	 * Set performer
	 * @param string performer
	 * @return string
	 */
	public function setPerformer($_performer)
	{
		return ($this->performer = $_performer);
	}
	/**
	 * Get performer
	 * @return string
	 */
	public function getPerformer()
	{
		return $this->performer;
	}
	/**
	 * Set holdings
	 * @param string holdings
	 * @return string
	 */
	public function setHoldings($_holdings)
	{
		return ($this->holdings = $_holdings);
	}
	/**
	 * Get holdings
	 * @return string
	 */
	public function getHoldings()
	{
		return $this->holdings;
	}
	/**
	 * Set availability
	 * @param string availability
	 * @return string
	 */
	public function setAvailability($_availability)
	{
		return ($this->availability = $_availability);
	}
	/**
	 * Get availability
	 * @return string
	 */
	public function getAvailability()
	{
		return $this->availability;
	}
	/**
	 * Set geoLocation
	 * @param string geoLocation
	 * @return string
	 */
	public function setGeoLocation($_geoLocation)
	{
		return ($this->geoLocation = $_geoLocation);
	}
	/**
	 * Get geoLocation
	 * @return string
	 */
	public function getGeoLocation()
	{
		return $this->geoLocation;
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