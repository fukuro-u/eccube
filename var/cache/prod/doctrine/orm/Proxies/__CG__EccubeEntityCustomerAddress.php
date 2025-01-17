<?php

namespace Proxies\__CG__\Eccube\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class CustomerAddress extends \Eccube\Entity\CustomerAddress implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'Eccube\\Entity\\CustomerAddress' . "\0" . 'id', '' . "\0" . 'Eccube\\Entity\\CustomerAddress' . "\0" . 'name01', '' . "\0" . 'Eccube\\Entity\\CustomerAddress' . "\0" . 'name02', '' . "\0" . 'Eccube\\Entity\\CustomerAddress' . "\0" . 'kana01', '' . "\0" . 'Eccube\\Entity\\CustomerAddress' . "\0" . 'kana02', '' . "\0" . 'Eccube\\Entity\\CustomerAddress' . "\0" . 'company_name', '' . "\0" . 'Eccube\\Entity\\CustomerAddress' . "\0" . 'postal_code', '' . "\0" . 'Eccube\\Entity\\CustomerAddress' . "\0" . 'addr01', '' . "\0" . 'Eccube\\Entity\\CustomerAddress' . "\0" . 'addr02', '' . "\0" . 'Eccube\\Entity\\CustomerAddress' . "\0" . 'phone_number', '' . "\0" . 'Eccube\\Entity\\CustomerAddress' . "\0" . 'create_date', '' . "\0" . 'Eccube\\Entity\\CustomerAddress' . "\0" . 'update_date', '' . "\0" . 'Eccube\\Entity\\CustomerAddress' . "\0" . 'Customer', '' . "\0" . 'Eccube\\Entity\\CustomerAddress' . "\0" . 'Country', '' . "\0" . 'Eccube\\Entity\\CustomerAddress' . "\0" . 'Pref'];
        }

        return ['__isInitialized__', '' . "\0" . 'Eccube\\Entity\\CustomerAddress' . "\0" . 'id', '' . "\0" . 'Eccube\\Entity\\CustomerAddress' . "\0" . 'name01', '' . "\0" . 'Eccube\\Entity\\CustomerAddress' . "\0" . 'name02', '' . "\0" . 'Eccube\\Entity\\CustomerAddress' . "\0" . 'kana01', '' . "\0" . 'Eccube\\Entity\\CustomerAddress' . "\0" . 'kana02', '' . "\0" . 'Eccube\\Entity\\CustomerAddress' . "\0" . 'company_name', '' . "\0" . 'Eccube\\Entity\\CustomerAddress' . "\0" . 'postal_code', '' . "\0" . 'Eccube\\Entity\\CustomerAddress' . "\0" . 'addr01', '' . "\0" . 'Eccube\\Entity\\CustomerAddress' . "\0" . 'addr02', '' . "\0" . 'Eccube\\Entity\\CustomerAddress' . "\0" . 'phone_number', '' . "\0" . 'Eccube\\Entity\\CustomerAddress' . "\0" . 'create_date', '' . "\0" . 'Eccube\\Entity\\CustomerAddress' . "\0" . 'update_date', '' . "\0" . 'Eccube\\Entity\\CustomerAddress' . "\0" . 'Customer', '' . "\0" . 'Eccube\\Entity\\CustomerAddress' . "\0" . 'Country', '' . "\0" . 'Eccube\\Entity\\CustomerAddress' . "\0" . 'Pref'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (CustomerAddress $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getShippingMultipleDefaultName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShippingMultipleDefaultName', []);

        return parent::getShippingMultipleDefaultName();
    }

    /**
     * {@inheritDoc}
     */
    public function setFromCustomer(\Eccube\Entity\Customer $Customer)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFromCustomer', [$Customer]);

        return parent::setFromCustomer($Customer);
    }

    /**
     * {@inheritDoc}
     */
    public function setFromShipping(\Eccube\Entity\Shipping $Shipping)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFromShipping', [$Shipping]);

        return parent::setFromShipping($Shipping);
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setName01($name01 = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName01', [$name01]);

        return parent::setName01($name01);
    }

    /**
     * {@inheritDoc}
     */
    public function getName01()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName01', []);

        return parent::getName01();
    }

    /**
     * {@inheritDoc}
     */
    public function setName02($name02 = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName02', [$name02]);

        return parent::setName02($name02);
    }

    /**
     * {@inheritDoc}
     */
    public function getName02()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName02', []);

        return parent::getName02();
    }

    /**
     * {@inheritDoc}
     */
    public function setKana01($kana01 = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setKana01', [$kana01]);

        return parent::setKana01($kana01);
    }

    /**
     * {@inheritDoc}
     */
    public function getKana01()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getKana01', []);

        return parent::getKana01();
    }

    /**
     * {@inheritDoc}
     */
    public function setKana02($kana02 = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setKana02', [$kana02]);

        return parent::setKana02($kana02);
    }

    /**
     * {@inheritDoc}
     */
    public function getKana02()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getKana02', []);

        return parent::getKana02();
    }

    /**
     * {@inheritDoc}
     */
    public function setCompanyName($companyName = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCompanyName', [$companyName]);

        return parent::setCompanyName($companyName);
    }

    /**
     * {@inheritDoc}
     */
    public function getCompanyName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCompanyName', []);

        return parent::getCompanyName();
    }

    /**
     * {@inheritDoc}
     */
    public function setPostalCode($postal_code = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPostalCode', [$postal_code]);

        return parent::setPostalCode($postal_code);
    }

    /**
     * {@inheritDoc}
     */
    public function getPostalCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPostalCode', []);

        return parent::getPostalCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddr01($addr01 = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddr01', [$addr01]);

        return parent::setAddr01($addr01);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddr01()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddr01', []);

        return parent::getAddr01();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddr02($addr02 = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddr02', [$addr02]);

        return parent::setAddr02($addr02);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddr02()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddr02', []);

        return parent::getAddr02();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhoneNumber($phone_number = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhoneNumber', [$phone_number]);

        return parent::setPhoneNumber($phone_number);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhoneNumber()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhoneNumber', []);

        return parent::getPhoneNumber();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreateDate($createDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreateDate', [$createDate]);

        return parent::setCreateDate($createDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreateDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreateDate', []);

        return parent::getCreateDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdateDate($updateDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdateDate', [$updateDate]);

        return parent::setUpdateDate($updateDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdateDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdateDate', []);

        return parent::getUpdateDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setCustomer(\Eccube\Entity\Customer $customer = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCustomer', [$customer]);

        return parent::setCustomer($customer);
    }

    /**
     * {@inheritDoc}
     */
    public function getCustomer()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCustomer', []);

        return parent::getCustomer();
    }

    /**
     * {@inheritDoc}
     */
    public function setCountry(\Eccube\Entity\Master\Country $country = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCountry', [$country]);

        return parent::setCountry($country);
    }

    /**
     * {@inheritDoc}
     */
    public function getCountry()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCountry', []);

        return parent::getCountry();
    }

    /**
     * {@inheritDoc}
     */
    public function setPref(\Eccube\Entity\Master\Pref $pref = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPref', [$pref]);

        return parent::setPref($pref);
    }

    /**
     * {@inheritDoc}
     */
    public function getPref()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPref', []);

        return parent::getPref();
    }

    /**
     * {@inheritDoc}
     */
    public function offsetExists($offset)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'offsetExists', [$offset]);

        return parent::offsetExists($offset);
    }

    /**
     * {@inheritDoc}
     */
    public function offsetSet($offset, $value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'offsetSet', [$offset, $value]);

        return parent::offsetSet($offset, $value);
    }

    /**
     * {@inheritDoc}
     */
    public function offsetGet($offset)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'offsetGet', [$offset]);

        return parent::offsetGet($offset);
    }

    /**
     * {@inheritDoc}
     */
    public function offsetUnset($offset)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'offsetUnset', [$offset]);

        return parent::offsetUnset($offset);
    }

    /**
     * {@inheritDoc}
     */
    public function setPropertiesFromArray(array $arrProps, array $excludeAttribute = [], \ReflectionClass $parentClass = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPropertiesFromArray', [$arrProps, $excludeAttribute, $parentClass]);

        return parent::setPropertiesFromArray($arrProps, $excludeAttribute, $parentClass);
    }

    /**
     * {@inheritDoc}
     */
    public function toArray(array $excludeAttribute = ['__initializer__', '__cloner__', '__isInitialized__'], \ReflectionClass $parentClass = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toArray', [$excludeAttribute, $parentClass]);

        return parent::toArray($excludeAttribute, $parentClass);
    }

    /**
     * {@inheritDoc}
     */
    public function toNormalizedArray(array $excludeAttribute = ['__initializer__', '__cloner__', '__isInitialized__'])
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toNormalizedArray', [$excludeAttribute]);

        return parent::toNormalizedArray($excludeAttribute);
    }

    /**
     * {@inheritDoc}
     */
    public function toJSON(array $excludeAttribute = ['__initializer__', '__cloner__', '__isInitialized__'])
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toJSON', [$excludeAttribute]);

        return parent::toJSON($excludeAttribute);
    }

    /**
     * {@inheritDoc}
     */
    public function toXML(array $excludeAttribute = ['__initializer__', '__cloner__', '__isInitialized__'])
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toXML', [$excludeAttribute]);

        return parent::toXML($excludeAttribute);
    }

    /**
     * {@inheritDoc}
     */
    public function copyProperties($srcObject, array $excludeAttribute = [])
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'copyProperties', [$srcObject, $excludeAttribute]);

        return parent::copyProperties($srcObject, $excludeAttribute);
    }

    /**
     * {@inheritDoc}
     */
    public function getEntityIdentifierAsArray(\Eccube\Entity\AbstractEntity $Entity)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEntityIdentifierAsArray', [$Entity]);

        return parent::getEntityIdentifierAsArray($Entity);
    }

}
