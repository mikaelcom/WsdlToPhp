<?php
/**
 * Class file for OvhTypeTelephonyCallStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyCallStruct
 * @date 02/07/2012
 */
class OvhTypeTelephonyCallStruct extends OvhWsdlClass
{
	/**
	 * The idkey
	 * @var string
	 */
	public $idkey;
	/**
	 * The number
	 * @var string
	 */
	public $number;
	/**
	 * The date
	 * @var string
	 */
	public $date;
	/**
	 * The duration
	 * @var string
	 */
	public $duration;
	/**
	 * The destination
	 * @var string
	 */
	public $destination;
	/**
	 * The priceWithoutVAT
	 * @var float
	 */
	public $priceWithoutVAT;
	/**
	 * The nature
	 * @var string
	 */
	public $nature;
	/**
	 * The overLimit
	 * @var boolean
	 */
	public $overLimit;
	/**
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * The callingNumber
	 * @var string
	 */
	public $callingNumber;
	/**
	 * The presentation
	 * @var string
	 */
	public $presentation;
	/**
	 * The designation
	 * @var string
	 */
	public $designation;
	/**
	 * Constructor
	 * @param string idkey
	 * @param string number
	 * @param string date
	 * @param string duration
	 * @param string destination
	 * @param float priceWithoutVAT
	 * @param string nature
	 * @param boolean overLimit
	 * @param string type
	 * @param string callingNumber
	 * @param string presentation
	 * @param string designation
	 * @return OvhTypeTelephonyCallStruct
	 */
	public function __construct($_idkey = null,$_number = null,$_date = null,$_duration = null,$_destination = null,$_priceWithoutVAT = null,$_nature = null,$_overLimit = null,$_type = null,$_callingNumber = null,$_presentation = null,$_designation = null)
	{
		parent::__construct(array('idkey'=>$_idkey,'number'=>$_number,'date'=>$_date,'duration'=>$_duration,'destination'=>$_destination,'priceWithoutVAT'=>$_priceWithoutVAT,'nature'=>$_nature,'overLimit'=>$_overLimit,'type'=>$_type,'callingNumber'=>$_callingNumber,'presentation'=>$_presentation,'designation'=>$_designation));
	}
	/**
	 * Set idkey
	 * @param string idkey
	 * @return string
	 */
	public function setIdkey($_idkey)
	{
		return ($this->idkey = $_idkey);
	}
	/**
	 * Get idkey
	 * @return string
	 */
	public function getIdkey()
	{
		return $this->idkey;
	}
	/**
	 * Set number
	 * @param string number
	 * @return string
	 */
	public function setNumber($_number)
	{
		return ($this->number = $_number);
	}
	/**
	 * Get number
	 * @return string
	 */
	public function getNumber()
	{
		return $this->number;
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
	 * Set duration
	 * @param string duration
	 * @return string
	 */
	public function setDuration($_duration)
	{
		return ($this->duration = $_duration);
	}
	/**
	 * Get duration
	 * @return string
	 */
	public function getDuration()
	{
		return $this->duration;
	}
	/**
	 * Set destination
	 * @param string destination
	 * @return string
	 */
	public function setDestination($_destination)
	{
		return ($this->destination = $_destination);
	}
	/**
	 * Get destination
	 * @return string
	 */
	public function getDestination()
	{
		return $this->destination;
	}
	/**
	 * Set priceWithoutVAT
	 * @param float priceWithoutVAT
	 * @return float
	 */
	public function setPriceWithoutVAT($_priceWithoutVAT)
	{
		return ($this->priceWithoutVAT = $_priceWithoutVAT);
	}
	/**
	 * Get priceWithoutVAT
	 * @return float
	 */
	public function getPriceWithoutVAT()
	{
		return $this->priceWithoutVAT;
	}
	/**
	 * Set nature
	 * @param string nature
	 * @return string
	 */
	public function setNature($_nature)
	{
		return ($this->nature = $_nature);
	}
	/**
	 * Get nature
	 * @return string
	 */
	public function getNature()
	{
		return $this->nature;
	}
	/**
	 * Set overLimit
	 * @param boolean overLimit
	 * @return boolean
	 */
	public function setOverLimit($_overLimit)
	{
		return ($this->overLimit = $_overLimit);
	}
	/**
	 * Get overLimit
	 * @return boolean
	 */
	public function getOverLimit()
	{
		return $this->overLimit;
	}
	/**
	 * Set type
	 * @param string type
	 * @return string
	 */
	public function setType($_type)
	{
		return ($this->type = $_type);
	}
	/**
	 * Get type
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
	}
	/**
	 * Set callingNumber
	 * @param string callingNumber
	 * @return string
	 */
	public function setCallingNumber($_callingNumber)
	{
		return ($this->callingNumber = $_callingNumber);
	}
	/**
	 * Get callingNumber
	 * @return string
	 */
	public function getCallingNumber()
	{
		return $this->callingNumber;
	}
	/**
	 * Set presentation
	 * @param string presentation
	 * @return string
	 */
	public function setPresentation($_presentation)
	{
		return ($this->presentation = $_presentation);
	}
	/**
	 * Get presentation
	 * @return string
	 */
	public function getPresentation()
	{
		return $this->presentation;
	}
	/**
	 * Set designation
	 * @param string designation
	 * @return string
	 */
	public function setDesignation($_designation)
	{
		return ($this->designation = $_designation);
	}
	/**
	 * Get designation
	 * @return string
	 */
	public function getDesignation()
	{
		return $this->designation;
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