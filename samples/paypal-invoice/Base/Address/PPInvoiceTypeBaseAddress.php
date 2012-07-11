<?php
/**
 * Class file for PPInvoiceTypeBaseAddress
 * @date 02/07/2012
 */
/**
 * Class PPInvoiceTypeBaseAddress
 * @date 02/07/2012
 */
class PPInvoiceTypeBaseAddress extends PPInvoiceWsdlClass
{
	/**
	 * The line1
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 1
	 * @var string
	 */
	public $line1;
	/**
	 * The line2
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $line2;
	/**
	 * The city
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 1
	 * @var string
	 */
	public $city;
	/**
	 * The state
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $state;
	/**
	 * The postalCode
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $postalCode;
	/**
	 * The countryCode
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 1
	 * @var string
	 */
	public $countryCode;
	/**
	 * The type
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $type;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string line1
	 * @param string line2
	 * @param string city
	 * @param string state
	 * @param string postalCode
	 * @param string countryCode
	 * @param string type
	 * @param DOMDocument any
	 * @return PPInvoiceTypeBaseAddress
	 */
	public function __construct($_line1,$_line2 = null,$_city,$_state = null,$_postalCode = null,$_countryCode,$_type = null,$_any = null)
	{
		parent::__construct(array('line1'=>$_line1,'line2'=>$_line2,'city'=>$_city,'state'=>$_state,'postalCode'=>$_postalCode,'countryCode'=>$_countryCode,'type'=>$_type,'any'=>$_any));
	}
	/**
	 * Set line1
	 * @param string line1
	 * @return string
	 */
	public function setLine1($_line1)
	{
		return ($this->line1 = $_line1);
	}
	/**
	 * Get line1
	 * @return string
	 */
	public function getLine1()
	{
		return $this->line1;
	}
	/**
	 * Set line2
	 * @param string line2
	 * @return string
	 */
	public function setLine2($_line2)
	{
		return ($this->line2 = $_line2);
	}
	/**
	 * Get line2
	 * @return string
	 */
	public function getLine2()
	{
		return $this->line2;
	}
	/**
	 * Set city
	 * @param string city
	 * @return string
	 */
	public function setCity($_city)
	{
		return ($this->city = $_city);
	}
	/**
	 * Get city
	 * @return string
	 */
	public function getCity()
	{
		return $this->city;
	}
	/**
	 * Set state
	 * @param string state
	 * @return string
	 */
	public function setState($_state)
	{
		return ($this->state = $_state);
	}
	/**
	 * Get state
	 * @return string
	 */
	public function getState()
	{
		return $this->state;
	}
	/**
	 * Set postalCode
	 * @param string postalCode
	 * @return string
	 */
	public function setPostalCode($_postalCode)
	{
		return ($this->postalCode = $_postalCode);
	}
	/**
	 * Get postalCode
	 * @return string
	 */
	public function getPostalCode()
	{
		return $this->postalCode;
	}
	/**
	 * Set countryCode
	 * @param string countryCode
	 * @return string
	 */
	public function setCountryCode($_countryCode)
	{
		return ($this->countryCode = $_countryCode);
	}
	/**
	 * Get countryCode
	 * @return string
	 */
	public function getCountryCode()
	{
		return $this->countryCode;
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