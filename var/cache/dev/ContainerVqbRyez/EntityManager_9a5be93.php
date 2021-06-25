<?php

namespace ContainerVqbRyez;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere7a32 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer08b5d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf1222 = [
        
    ];

    public function getConnection()
    {
        $this->initializer08b5d && ($this->initializer08b5d->__invoke($valueHoldere7a32, $this, 'getConnection', array(), $this->initializer08b5d) || 1) && $this->valueHoldere7a32 = $valueHoldere7a32;

        return $this->valueHoldere7a32->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer08b5d && ($this->initializer08b5d->__invoke($valueHoldere7a32, $this, 'getMetadataFactory', array(), $this->initializer08b5d) || 1) && $this->valueHoldere7a32 = $valueHoldere7a32;

        return $this->valueHoldere7a32->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer08b5d && ($this->initializer08b5d->__invoke($valueHoldere7a32, $this, 'getExpressionBuilder', array(), $this->initializer08b5d) || 1) && $this->valueHoldere7a32 = $valueHoldere7a32;

        return $this->valueHoldere7a32->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer08b5d && ($this->initializer08b5d->__invoke($valueHoldere7a32, $this, 'beginTransaction', array(), $this->initializer08b5d) || 1) && $this->valueHoldere7a32 = $valueHoldere7a32;

        return $this->valueHoldere7a32->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer08b5d && ($this->initializer08b5d->__invoke($valueHoldere7a32, $this, 'getCache', array(), $this->initializer08b5d) || 1) && $this->valueHoldere7a32 = $valueHoldere7a32;

        return $this->valueHoldere7a32->getCache();
    }

    public function transactional($func)
    {
        $this->initializer08b5d && ($this->initializer08b5d->__invoke($valueHoldere7a32, $this, 'transactional', array('func' => $func), $this->initializer08b5d) || 1) && $this->valueHoldere7a32 = $valueHoldere7a32;

        return $this->valueHoldere7a32->transactional($func);
    }

    public function commit()
    {
        $this->initializer08b5d && ($this->initializer08b5d->__invoke($valueHoldere7a32, $this, 'commit', array(), $this->initializer08b5d) || 1) && $this->valueHoldere7a32 = $valueHoldere7a32;

        return $this->valueHoldere7a32->commit();
    }

    public function rollback()
    {
        $this->initializer08b5d && ($this->initializer08b5d->__invoke($valueHoldere7a32, $this, 'rollback', array(), $this->initializer08b5d) || 1) && $this->valueHoldere7a32 = $valueHoldere7a32;

        return $this->valueHoldere7a32->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer08b5d && ($this->initializer08b5d->__invoke($valueHoldere7a32, $this, 'getClassMetadata', array('className' => $className), $this->initializer08b5d) || 1) && $this->valueHoldere7a32 = $valueHoldere7a32;

        return $this->valueHoldere7a32->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer08b5d && ($this->initializer08b5d->__invoke($valueHoldere7a32, $this, 'createQuery', array('dql' => $dql), $this->initializer08b5d) || 1) && $this->valueHoldere7a32 = $valueHoldere7a32;

        return $this->valueHoldere7a32->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer08b5d && ($this->initializer08b5d->__invoke($valueHoldere7a32, $this, 'createNamedQuery', array('name' => $name), $this->initializer08b5d) || 1) && $this->valueHoldere7a32 = $valueHoldere7a32;

        return $this->valueHoldere7a32->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer08b5d && ($this->initializer08b5d->__invoke($valueHoldere7a32, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer08b5d) || 1) && $this->valueHoldere7a32 = $valueHoldere7a32;

        return $this->valueHoldere7a32->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer08b5d && ($this->initializer08b5d->__invoke($valueHoldere7a32, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer08b5d) || 1) && $this->valueHoldere7a32 = $valueHoldere7a32;

        return $this->valueHoldere7a32->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer08b5d && ($this->initializer08b5d->__invoke($valueHoldere7a32, $this, 'createQueryBuilder', array(), $this->initializer08b5d) || 1) && $this->valueHoldere7a32 = $valueHoldere7a32;

        return $this->valueHoldere7a32->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer08b5d && ($this->initializer08b5d->__invoke($valueHoldere7a32, $this, 'flush', array('entity' => $entity), $this->initializer08b5d) || 1) && $this->valueHoldere7a32 = $valueHoldere7a32;

        return $this->valueHoldere7a32->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer08b5d && ($this->initializer08b5d->__invoke($valueHoldere7a32, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer08b5d) || 1) && $this->valueHoldere7a32 = $valueHoldere7a32;

        return $this->valueHoldere7a32->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer08b5d && ($this->initializer08b5d->__invoke($valueHoldere7a32, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer08b5d) || 1) && $this->valueHoldere7a32 = $valueHoldere7a32;

        return $this->valueHoldere7a32->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer08b5d && ($this->initializer08b5d->__invoke($valueHoldere7a32, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer08b5d) || 1) && $this->valueHoldere7a32 = $valueHoldere7a32;

        return $this->valueHoldere7a32->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer08b5d && ($this->initializer08b5d->__invoke($valueHoldere7a32, $this, 'clear', array('entityName' => $entityName), $this->initializer08b5d) || 1) && $this->valueHoldere7a32 = $valueHoldere7a32;

        return $this->valueHoldere7a32->clear($entityName);
    }

    public function close()
    {
        $this->initializer08b5d && ($this->initializer08b5d->__invoke($valueHoldere7a32, $this, 'close', array(), $this->initializer08b5d) || 1) && $this->valueHoldere7a32 = $valueHoldere7a32;

        return $this->valueHoldere7a32->close();
    }

    public function persist($entity)
    {
        $this->initializer08b5d && ($this->initializer08b5d->__invoke($valueHoldere7a32, $this, 'persist', array('entity' => $entity), $this->initializer08b5d) || 1) && $this->valueHoldere7a32 = $valueHoldere7a32;

        return $this->valueHoldere7a32->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer08b5d && ($this->initializer08b5d->__invoke($valueHoldere7a32, $this, 'remove', array('entity' => $entity), $this->initializer08b5d) || 1) && $this->valueHoldere7a32 = $valueHoldere7a32;

        return $this->valueHoldere7a32->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer08b5d && ($this->initializer08b5d->__invoke($valueHoldere7a32, $this, 'refresh', array('entity' => $entity), $this->initializer08b5d) || 1) && $this->valueHoldere7a32 = $valueHoldere7a32;

        return $this->valueHoldere7a32->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer08b5d && ($this->initializer08b5d->__invoke($valueHoldere7a32, $this, 'detach', array('entity' => $entity), $this->initializer08b5d) || 1) && $this->valueHoldere7a32 = $valueHoldere7a32;

        return $this->valueHoldere7a32->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer08b5d && ($this->initializer08b5d->__invoke($valueHoldere7a32, $this, 'merge', array('entity' => $entity), $this->initializer08b5d) || 1) && $this->valueHoldere7a32 = $valueHoldere7a32;

        return $this->valueHoldere7a32->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer08b5d && ($this->initializer08b5d->__invoke($valueHoldere7a32, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer08b5d) || 1) && $this->valueHoldere7a32 = $valueHoldere7a32;

        return $this->valueHoldere7a32->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer08b5d && ($this->initializer08b5d->__invoke($valueHoldere7a32, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer08b5d) || 1) && $this->valueHoldere7a32 = $valueHoldere7a32;

        return $this->valueHoldere7a32->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer08b5d && ($this->initializer08b5d->__invoke($valueHoldere7a32, $this, 'getRepository', array('entityName' => $entityName), $this->initializer08b5d) || 1) && $this->valueHoldere7a32 = $valueHoldere7a32;

        return $this->valueHoldere7a32->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer08b5d && ($this->initializer08b5d->__invoke($valueHoldere7a32, $this, 'contains', array('entity' => $entity), $this->initializer08b5d) || 1) && $this->valueHoldere7a32 = $valueHoldere7a32;

        return $this->valueHoldere7a32->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer08b5d && ($this->initializer08b5d->__invoke($valueHoldere7a32, $this, 'getEventManager', array(), $this->initializer08b5d) || 1) && $this->valueHoldere7a32 = $valueHoldere7a32;

        return $this->valueHoldere7a32->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer08b5d && ($this->initializer08b5d->__invoke($valueHoldere7a32, $this, 'getConfiguration', array(), $this->initializer08b5d) || 1) && $this->valueHoldere7a32 = $valueHoldere7a32;

        return $this->valueHoldere7a32->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer08b5d && ($this->initializer08b5d->__invoke($valueHoldere7a32, $this, 'isOpen', array(), $this->initializer08b5d) || 1) && $this->valueHoldere7a32 = $valueHoldere7a32;

        return $this->valueHoldere7a32->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer08b5d && ($this->initializer08b5d->__invoke($valueHoldere7a32, $this, 'getUnitOfWork', array(), $this->initializer08b5d) || 1) && $this->valueHoldere7a32 = $valueHoldere7a32;

        return $this->valueHoldere7a32->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer08b5d && ($this->initializer08b5d->__invoke($valueHoldere7a32, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer08b5d) || 1) && $this->valueHoldere7a32 = $valueHoldere7a32;

        return $this->valueHoldere7a32->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer08b5d && ($this->initializer08b5d->__invoke($valueHoldere7a32, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer08b5d) || 1) && $this->valueHoldere7a32 = $valueHoldere7a32;

        return $this->valueHoldere7a32->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer08b5d && ($this->initializer08b5d->__invoke($valueHoldere7a32, $this, 'getProxyFactory', array(), $this->initializer08b5d) || 1) && $this->valueHoldere7a32 = $valueHoldere7a32;

        return $this->valueHoldere7a32->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer08b5d && ($this->initializer08b5d->__invoke($valueHoldere7a32, $this, 'initializeObject', array('obj' => $obj), $this->initializer08b5d) || 1) && $this->valueHoldere7a32 = $valueHoldere7a32;

        return $this->valueHoldere7a32->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer08b5d && ($this->initializer08b5d->__invoke($valueHoldere7a32, $this, 'getFilters', array(), $this->initializer08b5d) || 1) && $this->valueHoldere7a32 = $valueHoldere7a32;

        return $this->valueHoldere7a32->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer08b5d && ($this->initializer08b5d->__invoke($valueHoldere7a32, $this, 'isFiltersStateClean', array(), $this->initializer08b5d) || 1) && $this->valueHoldere7a32 = $valueHoldere7a32;

        return $this->valueHoldere7a32->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer08b5d && ($this->initializer08b5d->__invoke($valueHoldere7a32, $this, 'hasFilters', array(), $this->initializer08b5d) || 1) && $this->valueHoldere7a32 = $valueHoldere7a32;

        return $this->valueHoldere7a32->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer08b5d = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldere7a32) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere7a32 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere7a32->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer08b5d && ($this->initializer08b5d->__invoke($valueHoldere7a32, $this, '__get', ['name' => $name], $this->initializer08b5d) || 1) && $this->valueHoldere7a32 = $valueHoldere7a32;

        if (isset(self::$publicPropertiesf1222[$name])) {
            return $this->valueHoldere7a32->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere7a32;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere7a32;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer08b5d && ($this->initializer08b5d->__invoke($valueHoldere7a32, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer08b5d) || 1) && $this->valueHoldere7a32 = $valueHoldere7a32;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere7a32;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere7a32;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer08b5d && ($this->initializer08b5d->__invoke($valueHoldere7a32, $this, '__isset', array('name' => $name), $this->initializer08b5d) || 1) && $this->valueHoldere7a32 = $valueHoldere7a32;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere7a32;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere7a32;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer08b5d && ($this->initializer08b5d->__invoke($valueHoldere7a32, $this, '__unset', array('name' => $name), $this->initializer08b5d) || 1) && $this->valueHoldere7a32 = $valueHoldere7a32;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere7a32;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere7a32;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer08b5d && ($this->initializer08b5d->__invoke($valueHoldere7a32, $this, '__clone', array(), $this->initializer08b5d) || 1) && $this->valueHoldere7a32 = $valueHoldere7a32;

        $this->valueHoldere7a32 = clone $this->valueHoldere7a32;
    }

    public function __sleep()
    {
        $this->initializer08b5d && ($this->initializer08b5d->__invoke($valueHoldere7a32, $this, '__sleep', array(), $this->initializer08b5d) || 1) && $this->valueHoldere7a32 = $valueHoldere7a32;

        return array('valueHoldere7a32');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer08b5d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer08b5d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer08b5d && ($this->initializer08b5d->__invoke($valueHoldere7a32, $this, 'initializeProxy', array(), $this->initializer08b5d) || 1) && $this->valueHoldere7a32 = $valueHoldere7a32;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere7a32;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere7a32;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
