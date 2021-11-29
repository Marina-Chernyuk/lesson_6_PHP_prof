<?php

namespace ContainerXh1tirh;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc15ea = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer14d94 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiescd928 = [
        
    ];

    public function getConnection()
    {
        $this->initializer14d94 && ($this->initializer14d94->__invoke($valueHolderc15ea, $this, 'getConnection', array(), $this->initializer14d94) || 1) && $this->valueHolderc15ea = $valueHolderc15ea;

        return $this->valueHolderc15ea->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer14d94 && ($this->initializer14d94->__invoke($valueHolderc15ea, $this, 'getMetadataFactory', array(), $this->initializer14d94) || 1) && $this->valueHolderc15ea = $valueHolderc15ea;

        return $this->valueHolderc15ea->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer14d94 && ($this->initializer14d94->__invoke($valueHolderc15ea, $this, 'getExpressionBuilder', array(), $this->initializer14d94) || 1) && $this->valueHolderc15ea = $valueHolderc15ea;

        return $this->valueHolderc15ea->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer14d94 && ($this->initializer14d94->__invoke($valueHolderc15ea, $this, 'beginTransaction', array(), $this->initializer14d94) || 1) && $this->valueHolderc15ea = $valueHolderc15ea;

        return $this->valueHolderc15ea->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer14d94 && ($this->initializer14d94->__invoke($valueHolderc15ea, $this, 'getCache', array(), $this->initializer14d94) || 1) && $this->valueHolderc15ea = $valueHolderc15ea;

        return $this->valueHolderc15ea->getCache();
    }

    public function transactional($func)
    {
        $this->initializer14d94 && ($this->initializer14d94->__invoke($valueHolderc15ea, $this, 'transactional', array('func' => $func), $this->initializer14d94) || 1) && $this->valueHolderc15ea = $valueHolderc15ea;

        return $this->valueHolderc15ea->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer14d94 && ($this->initializer14d94->__invoke($valueHolderc15ea, $this, 'wrapInTransaction', array('func' => $func), $this->initializer14d94) || 1) && $this->valueHolderc15ea = $valueHolderc15ea;

        return $this->valueHolderc15ea->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer14d94 && ($this->initializer14d94->__invoke($valueHolderc15ea, $this, 'commit', array(), $this->initializer14d94) || 1) && $this->valueHolderc15ea = $valueHolderc15ea;

        return $this->valueHolderc15ea->commit();
    }

    public function rollback()
    {
        $this->initializer14d94 && ($this->initializer14d94->__invoke($valueHolderc15ea, $this, 'rollback', array(), $this->initializer14d94) || 1) && $this->valueHolderc15ea = $valueHolderc15ea;

        return $this->valueHolderc15ea->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer14d94 && ($this->initializer14d94->__invoke($valueHolderc15ea, $this, 'getClassMetadata', array('className' => $className), $this->initializer14d94) || 1) && $this->valueHolderc15ea = $valueHolderc15ea;

        return $this->valueHolderc15ea->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer14d94 && ($this->initializer14d94->__invoke($valueHolderc15ea, $this, 'createQuery', array('dql' => $dql), $this->initializer14d94) || 1) && $this->valueHolderc15ea = $valueHolderc15ea;

        return $this->valueHolderc15ea->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer14d94 && ($this->initializer14d94->__invoke($valueHolderc15ea, $this, 'createNamedQuery', array('name' => $name), $this->initializer14d94) || 1) && $this->valueHolderc15ea = $valueHolderc15ea;

        return $this->valueHolderc15ea->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer14d94 && ($this->initializer14d94->__invoke($valueHolderc15ea, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer14d94) || 1) && $this->valueHolderc15ea = $valueHolderc15ea;

        return $this->valueHolderc15ea->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer14d94 && ($this->initializer14d94->__invoke($valueHolderc15ea, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer14d94) || 1) && $this->valueHolderc15ea = $valueHolderc15ea;

        return $this->valueHolderc15ea->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer14d94 && ($this->initializer14d94->__invoke($valueHolderc15ea, $this, 'createQueryBuilder', array(), $this->initializer14d94) || 1) && $this->valueHolderc15ea = $valueHolderc15ea;

        return $this->valueHolderc15ea->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer14d94 && ($this->initializer14d94->__invoke($valueHolderc15ea, $this, 'flush', array('entity' => $entity), $this->initializer14d94) || 1) && $this->valueHolderc15ea = $valueHolderc15ea;

        return $this->valueHolderc15ea->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer14d94 && ($this->initializer14d94->__invoke($valueHolderc15ea, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer14d94) || 1) && $this->valueHolderc15ea = $valueHolderc15ea;

        return $this->valueHolderc15ea->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer14d94 && ($this->initializer14d94->__invoke($valueHolderc15ea, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer14d94) || 1) && $this->valueHolderc15ea = $valueHolderc15ea;

        return $this->valueHolderc15ea->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer14d94 && ($this->initializer14d94->__invoke($valueHolderc15ea, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer14d94) || 1) && $this->valueHolderc15ea = $valueHolderc15ea;

        return $this->valueHolderc15ea->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer14d94 && ($this->initializer14d94->__invoke($valueHolderc15ea, $this, 'clear', array('entityName' => $entityName), $this->initializer14d94) || 1) && $this->valueHolderc15ea = $valueHolderc15ea;

        return $this->valueHolderc15ea->clear($entityName);
    }

    public function close()
    {
        $this->initializer14d94 && ($this->initializer14d94->__invoke($valueHolderc15ea, $this, 'close', array(), $this->initializer14d94) || 1) && $this->valueHolderc15ea = $valueHolderc15ea;

        return $this->valueHolderc15ea->close();
    }

    public function persist($entity)
    {
        $this->initializer14d94 && ($this->initializer14d94->__invoke($valueHolderc15ea, $this, 'persist', array('entity' => $entity), $this->initializer14d94) || 1) && $this->valueHolderc15ea = $valueHolderc15ea;

        return $this->valueHolderc15ea->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer14d94 && ($this->initializer14d94->__invoke($valueHolderc15ea, $this, 'remove', array('entity' => $entity), $this->initializer14d94) || 1) && $this->valueHolderc15ea = $valueHolderc15ea;

        return $this->valueHolderc15ea->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer14d94 && ($this->initializer14d94->__invoke($valueHolderc15ea, $this, 'refresh', array('entity' => $entity), $this->initializer14d94) || 1) && $this->valueHolderc15ea = $valueHolderc15ea;

        return $this->valueHolderc15ea->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer14d94 && ($this->initializer14d94->__invoke($valueHolderc15ea, $this, 'detach', array('entity' => $entity), $this->initializer14d94) || 1) && $this->valueHolderc15ea = $valueHolderc15ea;

        return $this->valueHolderc15ea->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer14d94 && ($this->initializer14d94->__invoke($valueHolderc15ea, $this, 'merge', array('entity' => $entity), $this->initializer14d94) || 1) && $this->valueHolderc15ea = $valueHolderc15ea;

        return $this->valueHolderc15ea->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer14d94 && ($this->initializer14d94->__invoke($valueHolderc15ea, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer14d94) || 1) && $this->valueHolderc15ea = $valueHolderc15ea;

        return $this->valueHolderc15ea->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer14d94 && ($this->initializer14d94->__invoke($valueHolderc15ea, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer14d94) || 1) && $this->valueHolderc15ea = $valueHolderc15ea;

        return $this->valueHolderc15ea->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer14d94 && ($this->initializer14d94->__invoke($valueHolderc15ea, $this, 'getRepository', array('entityName' => $entityName), $this->initializer14d94) || 1) && $this->valueHolderc15ea = $valueHolderc15ea;

        return $this->valueHolderc15ea->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer14d94 && ($this->initializer14d94->__invoke($valueHolderc15ea, $this, 'contains', array('entity' => $entity), $this->initializer14d94) || 1) && $this->valueHolderc15ea = $valueHolderc15ea;

        return $this->valueHolderc15ea->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer14d94 && ($this->initializer14d94->__invoke($valueHolderc15ea, $this, 'getEventManager', array(), $this->initializer14d94) || 1) && $this->valueHolderc15ea = $valueHolderc15ea;

        return $this->valueHolderc15ea->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer14d94 && ($this->initializer14d94->__invoke($valueHolderc15ea, $this, 'getConfiguration', array(), $this->initializer14d94) || 1) && $this->valueHolderc15ea = $valueHolderc15ea;

        return $this->valueHolderc15ea->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer14d94 && ($this->initializer14d94->__invoke($valueHolderc15ea, $this, 'isOpen', array(), $this->initializer14d94) || 1) && $this->valueHolderc15ea = $valueHolderc15ea;

        return $this->valueHolderc15ea->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer14d94 && ($this->initializer14d94->__invoke($valueHolderc15ea, $this, 'getUnitOfWork', array(), $this->initializer14d94) || 1) && $this->valueHolderc15ea = $valueHolderc15ea;

        return $this->valueHolderc15ea->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer14d94 && ($this->initializer14d94->__invoke($valueHolderc15ea, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer14d94) || 1) && $this->valueHolderc15ea = $valueHolderc15ea;

        return $this->valueHolderc15ea->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer14d94 && ($this->initializer14d94->__invoke($valueHolderc15ea, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer14d94) || 1) && $this->valueHolderc15ea = $valueHolderc15ea;

        return $this->valueHolderc15ea->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer14d94 && ($this->initializer14d94->__invoke($valueHolderc15ea, $this, 'getProxyFactory', array(), $this->initializer14d94) || 1) && $this->valueHolderc15ea = $valueHolderc15ea;

        return $this->valueHolderc15ea->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer14d94 && ($this->initializer14d94->__invoke($valueHolderc15ea, $this, 'initializeObject', array('obj' => $obj), $this->initializer14d94) || 1) && $this->valueHolderc15ea = $valueHolderc15ea;

        return $this->valueHolderc15ea->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer14d94 && ($this->initializer14d94->__invoke($valueHolderc15ea, $this, 'getFilters', array(), $this->initializer14d94) || 1) && $this->valueHolderc15ea = $valueHolderc15ea;

        return $this->valueHolderc15ea->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer14d94 && ($this->initializer14d94->__invoke($valueHolderc15ea, $this, 'isFiltersStateClean', array(), $this->initializer14d94) || 1) && $this->valueHolderc15ea = $valueHolderc15ea;

        return $this->valueHolderc15ea->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer14d94 && ($this->initializer14d94->__invoke($valueHolderc15ea, $this, 'hasFilters', array(), $this->initializer14d94) || 1) && $this->valueHolderc15ea = $valueHolderc15ea;

        return $this->valueHolderc15ea->hasFilters();
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

        $instance->initializer14d94 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderc15ea) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc15ea = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc15ea->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer14d94 && ($this->initializer14d94->__invoke($valueHolderc15ea, $this, '__get', ['name' => $name], $this->initializer14d94) || 1) && $this->valueHolderc15ea = $valueHolderc15ea;

        if (isset(self::$publicPropertiescd928[$name])) {
            return $this->valueHolderc15ea->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc15ea;

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

        $targetObject = $this->valueHolderc15ea;
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
        $this->initializer14d94 && ($this->initializer14d94->__invoke($valueHolderc15ea, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer14d94) || 1) && $this->valueHolderc15ea = $valueHolderc15ea;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc15ea;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc15ea;
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
        $this->initializer14d94 && ($this->initializer14d94->__invoke($valueHolderc15ea, $this, '__isset', array('name' => $name), $this->initializer14d94) || 1) && $this->valueHolderc15ea = $valueHolderc15ea;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc15ea;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc15ea;
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
        $this->initializer14d94 && ($this->initializer14d94->__invoke($valueHolderc15ea, $this, '__unset', array('name' => $name), $this->initializer14d94) || 1) && $this->valueHolderc15ea = $valueHolderc15ea;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc15ea;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc15ea;
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
        $this->initializer14d94 && ($this->initializer14d94->__invoke($valueHolderc15ea, $this, '__clone', array(), $this->initializer14d94) || 1) && $this->valueHolderc15ea = $valueHolderc15ea;

        $this->valueHolderc15ea = clone $this->valueHolderc15ea;
    }

    public function __sleep()
    {
        $this->initializer14d94 && ($this->initializer14d94->__invoke($valueHolderc15ea, $this, '__sleep', array(), $this->initializer14d94) || 1) && $this->valueHolderc15ea = $valueHolderc15ea;

        return array('valueHolderc15ea');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer14d94 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer14d94;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer14d94 && ($this->initializer14d94->__invoke($valueHolderc15ea, $this, 'initializeProxy', array(), $this->initializer14d94) || 1) && $this->valueHolderc15ea = $valueHolderc15ea;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc15ea;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc15ea;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
