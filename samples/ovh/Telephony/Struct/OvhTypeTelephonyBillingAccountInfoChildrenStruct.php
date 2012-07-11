<?php
/**
 * Class file for OvhTypeTelephonyBillingAccountInfoChildrenStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyBillingAccountInfoChildrenStruct
 * @date 02/07/2012
 */
class OvhTypeTelephonyBillingAccountInfoChildrenStruct extends OvhWsdlClass
{
	/**
	 * The number
	 * @var string
	 */
	public $number;
	/**
	 * The offer
	 * @var string
	 */
	public $offer;
	/**
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * The expirationDate
	 * @var string
	 */
	public $expirationDate;
	/**
	 * The description
	 * @var string
	 */
	public $description;
	/**
	 * Constructor
	 * @param string number
	 * @param string offer
	 * @param string type
	 * @param string expirationDate
	 * @param string description
	 * @return OvhTypeTelephonyBillingAccountInfoChildrenStruct
	 */
	public function __construct($_number = null,$_offer = null,$_type = null,$_expirationDate = null,$_description = null)
	{
		parent::__construct(array('number'=>$_number,'offer'=>$_offer,'type'=>$_type,'expirationDate'=>$_expirationDate,'description'=>$_description));
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
	 * Set offer
	 * @param string offer
	 * @return string
	 */
	public function setOffer($_offer)
	{
		return ($this->offer = $_offer);
	}
	/**
	 * Get offer
	 * @return string
	 */
	public function getOffer()
	{
		return $this->offer;
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
	 * Set expirationDate
	 * @param string expirationDate
	 * @return string
	 */
	public function setExpirationDate($_expirationDate)
	{
		return ($this->expirationDate = $_expirationDate);
	}
	/**
	 * Get expirationDate
	 * @return string
	 */
	public function getExpirationDate()
	{
		return $this->expirationDate;
	}
	/**
	 * Set description
	 * @param string description
	 * @return string
	 */
	public function setDescription($_description)
	{
		return ($this->description = $_description);
	}
	/**
	 * Get description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->description;
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