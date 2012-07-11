<?php
/**
 * Class file for EbayFindTypeItemFilter
 * @date 04/07/2012
 */
/**
 * Class EbayFindTypeItemFilter
 * Documentation : Reduce the number of items returned by a find request using itemFilters. Use the itemFilter container to specify itemFilter Name/Value pairs. You can include multiple itemFilters in a single request.
 * @date 04/07/2012
 */
class EbayFindTypeItemFilter extends EbayFindWsdlClass
{
	/**
	 * The paramName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : In addition to filter Name/Value pairs, some itemFilters use an additional parameter Name/Value pair. Specifically, filters that use currency values (MaxPrice and MinPrice) make use of addition parameters. When you use these itemFilters, set paramName to Currency and provide the currency ID in paramValue. <br><br> For example, if you use the MaxPrice itemFilter, you will need to specify a parameter Name of Currency with a parameter Value that specifies the type of currency desired. <br><br> Note that for MaxPrice and MinPrice itemFilters, the default value for paramName is Currency.
	 * @var token
	 */
	public $paramName;
	/**
	 * The paramValue
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The currency value associated with the respective itemFilter parameter Name. <br><br> Usually paramName is set to Currency and paramValue is set to the currency type in which the monetary transaction occurs. <br><br> Note that for MaxPrice and MinPrice itemFilters, the default value for paramValue is USD.
	 * @var string
	 */
	public $paramValue;
	/**
	 * The name
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 1
	 * 	- documentation : Specify the name of the item filter you want to use. The itemFilter name must have a corresponding value. You can apply multiple itemFilter Name/Value pairs in a single request. <br><br> <b>Item Filter Names</b>: <br><br> <ul> <li>AvailableTo</li> <li>BestOfferOnly</li> <li>CharityOnly</li> <li>Condition</li> <li>Currency</li> <li>EndTimeFrom</li> <li>EndTimeTo</li> <li>ExcludeAutoPay</li> <li>ExcludeCategory</li> <li>ExcludeSeller</li> <li>ExpeditedShippingType</li> <li>FeaturedOnly</li> <li>FeedbackScoreMax</li> <li>FeedbackScoreMin</li> <li>FreeShippingOnly</li> <li>GetItFastOnly</li> <li>HideDuplicateItems</li> <li>ListedIn</li> <li>ListingType</li> <li>LocalPickupOnly</li> <li>LocalSearchOnly</li> <li>LocatedIn</li> <li>LotsOnly</li> <li>MaxBids</li> <li>MaxDistance</li> <li>MaxHandlingTime</li> <li>MaxPrice</li> <li>MaxQuantity</li> <li>MinBids</li> <li>MinPrice</li> <li>MinQuantity</li> <li>ModTimeFrom</li> <li>PaymentMethod</li> <li>ReturnsAcceptedOnly</li> <li>Seller</li> <li>SellerBusinessType</li> <li>TopRatedSellerOnly</li> <li>ValueBoxInventory</li> <li>WorldOfGoodOnly</li> </ul>
	 * @var EbayFindTypeItemFilterType
	 */
	public $name;
	/**
	 * The value
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- documentation : The value associated with the respective item filter name. Allowed values and datatypes vary for a given filter name.
	 * @var string
	 */
	public $value;
	/**
	 * The delimiter
	 * @var string
	 */
	public $delimiter;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param token paramName
	 * @param string paramValue
	 * @param EbayFindTypeItemFilterType name
	 * @param string value
	 * @param string delimiter
	 * @param DOMDocument any
	 * @return EbayFindTypeItemFilter
	 */
	public function __construct($_paramName = null,$_paramValue = null,$_name,$_value = null,$_delimiter = null,$_any = null)
	{
		parent::__construct(array('paramName'=>$_paramName,'paramValue'=>$_paramValue,'name'=>$_name,'value'=>$_value,'delimiter'=>$_delimiter,'any'=>$_any));
	}
	/**
	 * Set paramName
	 * @param token paramName
	 * @return token
	 */
	public function setParamName($_paramName)
	{
		return ($this->paramName = $_paramName);
	}
	/**
	 * Get paramName
	 * @return token
	 */
	public function getParamName()
	{
		return $this->paramName;
	}
	/**
	 * Set paramValue
	 * @param string paramValue
	 * @return string
	 */
	public function setParamValue($_paramValue)
	{
		return ($this->paramValue = $_paramValue);
	}
	/**
	 * Get paramValue
	 * @return string
	 */
	public function getParamValue()
	{
		return $this->paramValue;
	}
	/**
	 * Set name
	 * @param ItemFilterType name
	 * @return ItemFilterType
	 */
	public function setName($_name)
	{
		return ($this->name = EbayFindTypeItemFilterType::valueIsValid($_name)?$_name:null);
	}
	/**
	 * Get name
	 * @return EbayFindTypeItemFilterType
	 */
	public function getName()
	{
		return $this->name;
	}
	/**
	 * Set value
	 * @param string value
	 * @return string
	 */
	public function setValue($_value)
	{
		return ($this->value = $_value);
	}
	/**
	 * Get value
	 * @return string
	 */
	public function getValue()
	{
		return $this->value;
	}
	/**
	 * Set delimiter
	 * @param string delimiter
	 * @return string
	 */
	public function setDelimiter($_delimiter)
	{
		return ($this->delimiter = $_delimiter);
	}
	/**
	 * Get delimiter
	 * @return string
	 */
	public function getDelimiter()
	{
		return $this->delimiter;
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