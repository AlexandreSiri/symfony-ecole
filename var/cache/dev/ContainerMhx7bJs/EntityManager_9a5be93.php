<?php

namespace ContainerMhx7bJs;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder5efaa = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer0230a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesaf15d = [
        
    ];

    public function getConnection()
    {
        $this->initializer0230a && ($this->initializer0230a->__invoke($valueHolder5efaa, $this, 'getConnection', array(), $this->initializer0230a) || 1) && $this->valueHolder5efaa = $valueHolder5efaa;

        return $this->valueHolder5efaa->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer0230a && ($this->initializer0230a->__invoke($valueHolder5efaa, $this, 'getMetadataFactory', array(), $this->initializer0230a) || 1) && $this->valueHolder5efaa = $valueHolder5efaa;

        return $this->valueHolder5efaa->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer0230a && ($this->initializer0230a->__invoke($valueHolder5efaa, $this, 'getExpressionBuilder', array(), $this->initializer0230a) || 1) && $this->valueHolder5efaa = $valueHolder5efaa;

        return $this->valueHolder5efaa->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer0230a && ($this->initializer0230a->__invoke($valueHolder5efaa, $this, 'beginTransaction', array(), $this->initializer0230a) || 1) && $this->valueHolder5efaa = $valueHolder5efaa;

        return $this->valueHolder5efaa->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer0230a && ($this->initializer0230a->__invoke($valueHolder5efaa, $this, 'getCache', array(), $this->initializer0230a) || 1) && $this->valueHolder5efaa = $valueHolder5efaa;

        return $this->valueHolder5efaa->getCache();
    }

    public function transactional($func)
    {
        $this->initializer0230a && ($this->initializer0230a->__invoke($valueHolder5efaa, $this, 'transactional', array('func' => $func), $this->initializer0230a) || 1) && $this->valueHolder5efaa = $valueHolder5efaa;

        return $this->valueHolder5efaa->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer0230a && ($this->initializer0230a->__invoke($valueHolder5efaa, $this, 'wrapInTransaction', array('func' => $func), $this->initializer0230a) || 1) && $this->valueHolder5efaa = $valueHolder5efaa;

        return $this->valueHolder5efaa->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer0230a && ($this->initializer0230a->__invoke($valueHolder5efaa, $this, 'commit', array(), $this->initializer0230a) || 1) && $this->valueHolder5efaa = $valueHolder5efaa;

        return $this->valueHolder5efaa->commit();
    }

    public function rollback()
    {
        $this->initializer0230a && ($this->initializer0230a->__invoke($valueHolder5efaa, $this, 'rollback', array(), $this->initializer0230a) || 1) && $this->valueHolder5efaa = $valueHolder5efaa;

        return $this->valueHolder5efaa->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer0230a && ($this->initializer0230a->__invoke($valueHolder5efaa, $this, 'getClassMetadata', array('className' => $className), $this->initializer0230a) || 1) && $this->valueHolder5efaa = $valueHolder5efaa;

        return $this->valueHolder5efaa->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer0230a && ($this->initializer0230a->__invoke($valueHolder5efaa, $this, 'createQuery', array('dql' => $dql), $this->initializer0230a) || 1) && $this->valueHolder5efaa = $valueHolder5efaa;

        return $this->valueHolder5efaa->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer0230a && ($this->initializer0230a->__invoke($valueHolder5efaa, $this, 'createNamedQuery', array('name' => $name), $this->initializer0230a) || 1) && $this->valueHolder5efaa = $valueHolder5efaa;

        return $this->valueHolder5efaa->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer0230a && ($this->initializer0230a->__invoke($valueHolder5efaa, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer0230a) || 1) && $this->valueHolder5efaa = $valueHolder5efaa;

        return $this->valueHolder5efaa->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer0230a && ($this->initializer0230a->__invoke($valueHolder5efaa, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer0230a) || 1) && $this->valueHolder5efaa = $valueHolder5efaa;

        return $this->valueHolder5efaa->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer0230a && ($this->initializer0230a->__invoke($valueHolder5efaa, $this, 'createQueryBuilder', array(), $this->initializer0230a) || 1) && $this->valueHolder5efaa = $valueHolder5efaa;

        return $this->valueHolder5efaa->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer0230a && ($this->initializer0230a->__invoke($valueHolder5efaa, $this, 'flush', array('entity' => $entity), $this->initializer0230a) || 1) && $this->valueHolder5efaa = $valueHolder5efaa;

        return $this->valueHolder5efaa->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer0230a && ($this->initializer0230a->__invoke($valueHolder5efaa, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0230a) || 1) && $this->valueHolder5efaa = $valueHolder5efaa;

        return $this->valueHolder5efaa->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer0230a && ($this->initializer0230a->__invoke($valueHolder5efaa, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer0230a) || 1) && $this->valueHolder5efaa = $valueHolder5efaa;

        return $this->valueHolder5efaa->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer0230a && ($this->initializer0230a->__invoke($valueHolder5efaa, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer0230a) || 1) && $this->valueHolder5efaa = $valueHolder5efaa;

        return $this->valueHolder5efaa->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer0230a && ($this->initializer0230a->__invoke($valueHolder5efaa, $this, 'clear', array('entityName' => $entityName), $this->initializer0230a) || 1) && $this->valueHolder5efaa = $valueHolder5efaa;

        return $this->valueHolder5efaa->clear($entityName);
    }

    public function close()
    {
        $this->initializer0230a && ($this->initializer0230a->__invoke($valueHolder5efaa, $this, 'close', array(), $this->initializer0230a) || 1) && $this->valueHolder5efaa = $valueHolder5efaa;

        return $this->valueHolder5efaa->close();
    }

    public function persist($entity)
    {
        $this->initializer0230a && ($this->initializer0230a->__invoke($valueHolder5efaa, $this, 'persist', array('entity' => $entity), $this->initializer0230a) || 1) && $this->valueHolder5efaa = $valueHolder5efaa;

        return $this->valueHolder5efaa->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer0230a && ($this->initializer0230a->__invoke($valueHolder5efaa, $this, 'remove', array('entity' => $entity), $this->initializer0230a) || 1) && $this->valueHolder5efaa = $valueHolder5efaa;

        return $this->valueHolder5efaa->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer0230a && ($this->initializer0230a->__invoke($valueHolder5efaa, $this, 'refresh', array('entity' => $entity), $this->initializer0230a) || 1) && $this->valueHolder5efaa = $valueHolder5efaa;

        return $this->valueHolder5efaa->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer0230a && ($this->initializer0230a->__invoke($valueHolder5efaa, $this, 'detach', array('entity' => $entity), $this->initializer0230a) || 1) && $this->valueHolder5efaa = $valueHolder5efaa;

        return $this->valueHolder5efaa->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer0230a && ($this->initializer0230a->__invoke($valueHolder5efaa, $this, 'merge', array('entity' => $entity), $this->initializer0230a) || 1) && $this->valueHolder5efaa = $valueHolder5efaa;

        return $this->valueHolder5efaa->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer0230a && ($this->initializer0230a->__invoke($valueHolder5efaa, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer0230a) || 1) && $this->valueHolder5efaa = $valueHolder5efaa;

        return $this->valueHolder5efaa->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer0230a && ($this->initializer0230a->__invoke($valueHolder5efaa, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0230a) || 1) && $this->valueHolder5efaa = $valueHolder5efaa;

        return $this->valueHolder5efaa->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer0230a && ($this->initializer0230a->__invoke($valueHolder5efaa, $this, 'getRepository', array('entityName' => $entityName), $this->initializer0230a) || 1) && $this->valueHolder5efaa = $valueHolder5efaa;

        return $this->valueHolder5efaa->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer0230a && ($this->initializer0230a->__invoke($valueHolder5efaa, $this, 'contains', array('entity' => $entity), $this->initializer0230a) || 1) && $this->valueHolder5efaa = $valueHolder5efaa;

        return $this->valueHolder5efaa->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer0230a && ($this->initializer0230a->__invoke($valueHolder5efaa, $this, 'getEventManager', array(), $this->initializer0230a) || 1) && $this->valueHolder5efaa = $valueHolder5efaa;

        return $this->valueHolder5efaa->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer0230a && ($this->initializer0230a->__invoke($valueHolder5efaa, $this, 'getConfiguration', array(), $this->initializer0230a) || 1) && $this->valueHolder5efaa = $valueHolder5efaa;

        return $this->valueHolder5efaa->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer0230a && ($this->initializer0230a->__invoke($valueHolder5efaa, $this, 'isOpen', array(), $this->initializer0230a) || 1) && $this->valueHolder5efaa = $valueHolder5efaa;

        return $this->valueHolder5efaa->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer0230a && ($this->initializer0230a->__invoke($valueHolder5efaa, $this, 'getUnitOfWork', array(), $this->initializer0230a) || 1) && $this->valueHolder5efaa = $valueHolder5efaa;

        return $this->valueHolder5efaa->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer0230a && ($this->initializer0230a->__invoke($valueHolder5efaa, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0230a) || 1) && $this->valueHolder5efaa = $valueHolder5efaa;

        return $this->valueHolder5efaa->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer0230a && ($this->initializer0230a->__invoke($valueHolder5efaa, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0230a) || 1) && $this->valueHolder5efaa = $valueHolder5efaa;

        return $this->valueHolder5efaa->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer0230a && ($this->initializer0230a->__invoke($valueHolder5efaa, $this, 'getProxyFactory', array(), $this->initializer0230a) || 1) && $this->valueHolder5efaa = $valueHolder5efaa;

        return $this->valueHolder5efaa->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer0230a && ($this->initializer0230a->__invoke($valueHolder5efaa, $this, 'initializeObject', array('obj' => $obj), $this->initializer0230a) || 1) && $this->valueHolder5efaa = $valueHolder5efaa;

        return $this->valueHolder5efaa->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer0230a && ($this->initializer0230a->__invoke($valueHolder5efaa, $this, 'getFilters', array(), $this->initializer0230a) || 1) && $this->valueHolder5efaa = $valueHolder5efaa;

        return $this->valueHolder5efaa->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer0230a && ($this->initializer0230a->__invoke($valueHolder5efaa, $this, 'isFiltersStateClean', array(), $this->initializer0230a) || 1) && $this->valueHolder5efaa = $valueHolder5efaa;

        return $this->valueHolder5efaa->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer0230a && ($this->initializer0230a->__invoke($valueHolder5efaa, $this, 'hasFilters', array(), $this->initializer0230a) || 1) && $this->valueHolder5efaa = $valueHolder5efaa;

        return $this->valueHolder5efaa->hasFilters();
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

        $instance->initializer0230a = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder5efaa) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5efaa = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder5efaa->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer0230a && ($this->initializer0230a->__invoke($valueHolder5efaa, $this, '__get', ['name' => $name], $this->initializer0230a) || 1) && $this->valueHolder5efaa = $valueHolder5efaa;

        if (isset(self::$publicPropertiesaf15d[$name])) {
            return $this->valueHolder5efaa->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5efaa;

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

        $targetObject = $this->valueHolder5efaa;
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
        $this->initializer0230a && ($this->initializer0230a->__invoke($valueHolder5efaa, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer0230a) || 1) && $this->valueHolder5efaa = $valueHolder5efaa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5efaa;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5efaa;
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
        $this->initializer0230a && ($this->initializer0230a->__invoke($valueHolder5efaa, $this, '__isset', array('name' => $name), $this->initializer0230a) || 1) && $this->valueHolder5efaa = $valueHolder5efaa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5efaa;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder5efaa;
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
        $this->initializer0230a && ($this->initializer0230a->__invoke($valueHolder5efaa, $this, '__unset', array('name' => $name), $this->initializer0230a) || 1) && $this->valueHolder5efaa = $valueHolder5efaa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5efaa;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder5efaa;
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
        $this->initializer0230a && ($this->initializer0230a->__invoke($valueHolder5efaa, $this, '__clone', array(), $this->initializer0230a) || 1) && $this->valueHolder5efaa = $valueHolder5efaa;

        $this->valueHolder5efaa = clone $this->valueHolder5efaa;
    }

    public function __sleep()
    {
        $this->initializer0230a && ($this->initializer0230a->__invoke($valueHolder5efaa, $this, '__sleep', array(), $this->initializer0230a) || 1) && $this->valueHolder5efaa = $valueHolder5efaa;

        return array('valueHolder5efaa');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer0230a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer0230a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer0230a && ($this->initializer0230a->__invoke($valueHolder5efaa, $this, 'initializeProxy', array(), $this->initializer0230a) || 1) && $this->valueHolder5efaa = $valueHolder5efaa;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5efaa;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5efaa;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
