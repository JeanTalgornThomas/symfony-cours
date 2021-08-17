<?php

namespace ContainerVdgz8Cu;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder1db3f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer1df4c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties19e18 = [
        
    ];

    public function getConnection()
    {
        $this->initializer1df4c && ($this->initializer1df4c->__invoke($valueHolder1db3f, $this, 'getConnection', array(), $this->initializer1df4c) || 1) && $this->valueHolder1db3f = $valueHolder1db3f;

        return $this->valueHolder1db3f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer1df4c && ($this->initializer1df4c->__invoke($valueHolder1db3f, $this, 'getMetadataFactory', array(), $this->initializer1df4c) || 1) && $this->valueHolder1db3f = $valueHolder1db3f;

        return $this->valueHolder1db3f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer1df4c && ($this->initializer1df4c->__invoke($valueHolder1db3f, $this, 'getExpressionBuilder', array(), $this->initializer1df4c) || 1) && $this->valueHolder1db3f = $valueHolder1db3f;

        return $this->valueHolder1db3f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer1df4c && ($this->initializer1df4c->__invoke($valueHolder1db3f, $this, 'beginTransaction', array(), $this->initializer1df4c) || 1) && $this->valueHolder1db3f = $valueHolder1db3f;

        return $this->valueHolder1db3f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer1df4c && ($this->initializer1df4c->__invoke($valueHolder1db3f, $this, 'getCache', array(), $this->initializer1df4c) || 1) && $this->valueHolder1db3f = $valueHolder1db3f;

        return $this->valueHolder1db3f->getCache();
    }

    public function transactional($func)
    {
        $this->initializer1df4c && ($this->initializer1df4c->__invoke($valueHolder1db3f, $this, 'transactional', array('func' => $func), $this->initializer1df4c) || 1) && $this->valueHolder1db3f = $valueHolder1db3f;

        return $this->valueHolder1db3f->transactional($func);
    }

    public function commit()
    {
        $this->initializer1df4c && ($this->initializer1df4c->__invoke($valueHolder1db3f, $this, 'commit', array(), $this->initializer1df4c) || 1) && $this->valueHolder1db3f = $valueHolder1db3f;

        return $this->valueHolder1db3f->commit();
    }

    public function rollback()
    {
        $this->initializer1df4c && ($this->initializer1df4c->__invoke($valueHolder1db3f, $this, 'rollback', array(), $this->initializer1df4c) || 1) && $this->valueHolder1db3f = $valueHolder1db3f;

        return $this->valueHolder1db3f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer1df4c && ($this->initializer1df4c->__invoke($valueHolder1db3f, $this, 'getClassMetadata', array('className' => $className), $this->initializer1df4c) || 1) && $this->valueHolder1db3f = $valueHolder1db3f;

        return $this->valueHolder1db3f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer1df4c && ($this->initializer1df4c->__invoke($valueHolder1db3f, $this, 'createQuery', array('dql' => $dql), $this->initializer1df4c) || 1) && $this->valueHolder1db3f = $valueHolder1db3f;

        return $this->valueHolder1db3f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer1df4c && ($this->initializer1df4c->__invoke($valueHolder1db3f, $this, 'createNamedQuery', array('name' => $name), $this->initializer1df4c) || 1) && $this->valueHolder1db3f = $valueHolder1db3f;

        return $this->valueHolder1db3f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer1df4c && ($this->initializer1df4c->__invoke($valueHolder1db3f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer1df4c) || 1) && $this->valueHolder1db3f = $valueHolder1db3f;

        return $this->valueHolder1db3f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer1df4c && ($this->initializer1df4c->__invoke($valueHolder1db3f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer1df4c) || 1) && $this->valueHolder1db3f = $valueHolder1db3f;

        return $this->valueHolder1db3f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer1df4c && ($this->initializer1df4c->__invoke($valueHolder1db3f, $this, 'createQueryBuilder', array(), $this->initializer1df4c) || 1) && $this->valueHolder1db3f = $valueHolder1db3f;

        return $this->valueHolder1db3f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer1df4c && ($this->initializer1df4c->__invoke($valueHolder1db3f, $this, 'flush', array('entity' => $entity), $this->initializer1df4c) || 1) && $this->valueHolder1db3f = $valueHolder1db3f;

        return $this->valueHolder1db3f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer1df4c && ($this->initializer1df4c->__invoke($valueHolder1db3f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1df4c) || 1) && $this->valueHolder1db3f = $valueHolder1db3f;

        return $this->valueHolder1db3f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer1df4c && ($this->initializer1df4c->__invoke($valueHolder1db3f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer1df4c) || 1) && $this->valueHolder1db3f = $valueHolder1db3f;

        return $this->valueHolder1db3f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer1df4c && ($this->initializer1df4c->__invoke($valueHolder1db3f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer1df4c) || 1) && $this->valueHolder1db3f = $valueHolder1db3f;

        return $this->valueHolder1db3f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer1df4c && ($this->initializer1df4c->__invoke($valueHolder1db3f, $this, 'clear', array('entityName' => $entityName), $this->initializer1df4c) || 1) && $this->valueHolder1db3f = $valueHolder1db3f;

        return $this->valueHolder1db3f->clear($entityName);
    }

    public function close()
    {
        $this->initializer1df4c && ($this->initializer1df4c->__invoke($valueHolder1db3f, $this, 'close', array(), $this->initializer1df4c) || 1) && $this->valueHolder1db3f = $valueHolder1db3f;

        return $this->valueHolder1db3f->close();
    }

    public function persist($entity)
    {
        $this->initializer1df4c && ($this->initializer1df4c->__invoke($valueHolder1db3f, $this, 'persist', array('entity' => $entity), $this->initializer1df4c) || 1) && $this->valueHolder1db3f = $valueHolder1db3f;

        return $this->valueHolder1db3f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer1df4c && ($this->initializer1df4c->__invoke($valueHolder1db3f, $this, 'remove', array('entity' => $entity), $this->initializer1df4c) || 1) && $this->valueHolder1db3f = $valueHolder1db3f;

        return $this->valueHolder1db3f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer1df4c && ($this->initializer1df4c->__invoke($valueHolder1db3f, $this, 'refresh', array('entity' => $entity), $this->initializer1df4c) || 1) && $this->valueHolder1db3f = $valueHolder1db3f;

        return $this->valueHolder1db3f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer1df4c && ($this->initializer1df4c->__invoke($valueHolder1db3f, $this, 'detach', array('entity' => $entity), $this->initializer1df4c) || 1) && $this->valueHolder1db3f = $valueHolder1db3f;

        return $this->valueHolder1db3f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer1df4c && ($this->initializer1df4c->__invoke($valueHolder1db3f, $this, 'merge', array('entity' => $entity), $this->initializer1df4c) || 1) && $this->valueHolder1db3f = $valueHolder1db3f;

        return $this->valueHolder1db3f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer1df4c && ($this->initializer1df4c->__invoke($valueHolder1db3f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer1df4c) || 1) && $this->valueHolder1db3f = $valueHolder1db3f;

        return $this->valueHolder1db3f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer1df4c && ($this->initializer1df4c->__invoke($valueHolder1db3f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1df4c) || 1) && $this->valueHolder1db3f = $valueHolder1db3f;

        return $this->valueHolder1db3f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer1df4c && ($this->initializer1df4c->__invoke($valueHolder1db3f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer1df4c) || 1) && $this->valueHolder1db3f = $valueHolder1db3f;

        return $this->valueHolder1db3f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer1df4c && ($this->initializer1df4c->__invoke($valueHolder1db3f, $this, 'contains', array('entity' => $entity), $this->initializer1df4c) || 1) && $this->valueHolder1db3f = $valueHolder1db3f;

        return $this->valueHolder1db3f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer1df4c && ($this->initializer1df4c->__invoke($valueHolder1db3f, $this, 'getEventManager', array(), $this->initializer1df4c) || 1) && $this->valueHolder1db3f = $valueHolder1db3f;

        return $this->valueHolder1db3f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer1df4c && ($this->initializer1df4c->__invoke($valueHolder1db3f, $this, 'getConfiguration', array(), $this->initializer1df4c) || 1) && $this->valueHolder1db3f = $valueHolder1db3f;

        return $this->valueHolder1db3f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer1df4c && ($this->initializer1df4c->__invoke($valueHolder1db3f, $this, 'isOpen', array(), $this->initializer1df4c) || 1) && $this->valueHolder1db3f = $valueHolder1db3f;

        return $this->valueHolder1db3f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer1df4c && ($this->initializer1df4c->__invoke($valueHolder1db3f, $this, 'getUnitOfWork', array(), $this->initializer1df4c) || 1) && $this->valueHolder1db3f = $valueHolder1db3f;

        return $this->valueHolder1db3f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer1df4c && ($this->initializer1df4c->__invoke($valueHolder1db3f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1df4c) || 1) && $this->valueHolder1db3f = $valueHolder1db3f;

        return $this->valueHolder1db3f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer1df4c && ($this->initializer1df4c->__invoke($valueHolder1db3f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1df4c) || 1) && $this->valueHolder1db3f = $valueHolder1db3f;

        return $this->valueHolder1db3f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer1df4c && ($this->initializer1df4c->__invoke($valueHolder1db3f, $this, 'getProxyFactory', array(), $this->initializer1df4c) || 1) && $this->valueHolder1db3f = $valueHolder1db3f;

        return $this->valueHolder1db3f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer1df4c && ($this->initializer1df4c->__invoke($valueHolder1db3f, $this, 'initializeObject', array('obj' => $obj), $this->initializer1df4c) || 1) && $this->valueHolder1db3f = $valueHolder1db3f;

        return $this->valueHolder1db3f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer1df4c && ($this->initializer1df4c->__invoke($valueHolder1db3f, $this, 'getFilters', array(), $this->initializer1df4c) || 1) && $this->valueHolder1db3f = $valueHolder1db3f;

        return $this->valueHolder1db3f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer1df4c && ($this->initializer1df4c->__invoke($valueHolder1db3f, $this, 'isFiltersStateClean', array(), $this->initializer1df4c) || 1) && $this->valueHolder1db3f = $valueHolder1db3f;

        return $this->valueHolder1db3f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer1df4c && ($this->initializer1df4c->__invoke($valueHolder1db3f, $this, 'hasFilters', array(), $this->initializer1df4c) || 1) && $this->valueHolder1db3f = $valueHolder1db3f;

        return $this->valueHolder1db3f->hasFilters();
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

        $instance->initializer1df4c = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder1db3f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder1db3f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder1db3f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer1df4c && ($this->initializer1df4c->__invoke($valueHolder1db3f, $this, '__get', ['name' => $name], $this->initializer1df4c) || 1) && $this->valueHolder1db3f = $valueHolder1db3f;

        if (isset(self::$publicProperties19e18[$name])) {
            return $this->valueHolder1db3f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1db3f;

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

        $targetObject = $this->valueHolder1db3f;
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
        $this->initializer1df4c && ($this->initializer1df4c->__invoke($valueHolder1db3f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer1df4c) || 1) && $this->valueHolder1db3f = $valueHolder1db3f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1db3f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder1db3f;
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
        $this->initializer1df4c && ($this->initializer1df4c->__invoke($valueHolder1db3f, $this, '__isset', array('name' => $name), $this->initializer1df4c) || 1) && $this->valueHolder1db3f = $valueHolder1db3f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1db3f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder1db3f;
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
        $this->initializer1df4c && ($this->initializer1df4c->__invoke($valueHolder1db3f, $this, '__unset', array('name' => $name), $this->initializer1df4c) || 1) && $this->valueHolder1db3f = $valueHolder1db3f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1db3f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder1db3f;
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
        $this->initializer1df4c && ($this->initializer1df4c->__invoke($valueHolder1db3f, $this, '__clone', array(), $this->initializer1df4c) || 1) && $this->valueHolder1db3f = $valueHolder1db3f;

        $this->valueHolder1db3f = clone $this->valueHolder1db3f;
    }

    public function __sleep()
    {
        $this->initializer1df4c && ($this->initializer1df4c->__invoke($valueHolder1db3f, $this, '__sleep', array(), $this->initializer1df4c) || 1) && $this->valueHolder1db3f = $valueHolder1db3f;

        return array('valueHolder1db3f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer1df4c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer1df4c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer1df4c && ($this->initializer1df4c->__invoke($valueHolder1db3f, $this, 'initializeProxy', array(), $this->initializer1df4c) || 1) && $this->valueHolder1db3f = $valueHolder1db3f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder1db3f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder1db3f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
