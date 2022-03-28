<?php

namespace ContainerOn88Sev;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder54412 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer9ce39 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties166f1 = [
        
    ];

    public function getConnection()
    {
        $this->initializer9ce39 && ($this->initializer9ce39->__invoke($valueHolder54412, $this, 'getConnection', array(), $this->initializer9ce39) || 1) && $this->valueHolder54412 = $valueHolder54412;

        return $this->valueHolder54412->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer9ce39 && ($this->initializer9ce39->__invoke($valueHolder54412, $this, 'getMetadataFactory', array(), $this->initializer9ce39) || 1) && $this->valueHolder54412 = $valueHolder54412;

        return $this->valueHolder54412->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer9ce39 && ($this->initializer9ce39->__invoke($valueHolder54412, $this, 'getExpressionBuilder', array(), $this->initializer9ce39) || 1) && $this->valueHolder54412 = $valueHolder54412;

        return $this->valueHolder54412->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer9ce39 && ($this->initializer9ce39->__invoke($valueHolder54412, $this, 'beginTransaction', array(), $this->initializer9ce39) || 1) && $this->valueHolder54412 = $valueHolder54412;

        return $this->valueHolder54412->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer9ce39 && ($this->initializer9ce39->__invoke($valueHolder54412, $this, 'getCache', array(), $this->initializer9ce39) || 1) && $this->valueHolder54412 = $valueHolder54412;

        return $this->valueHolder54412->getCache();
    }

    public function transactional($func)
    {
        $this->initializer9ce39 && ($this->initializer9ce39->__invoke($valueHolder54412, $this, 'transactional', array('func' => $func), $this->initializer9ce39) || 1) && $this->valueHolder54412 = $valueHolder54412;

        return $this->valueHolder54412->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer9ce39 && ($this->initializer9ce39->__invoke($valueHolder54412, $this, 'wrapInTransaction', array('func' => $func), $this->initializer9ce39) || 1) && $this->valueHolder54412 = $valueHolder54412;

        return $this->valueHolder54412->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer9ce39 && ($this->initializer9ce39->__invoke($valueHolder54412, $this, 'commit', array(), $this->initializer9ce39) || 1) && $this->valueHolder54412 = $valueHolder54412;

        return $this->valueHolder54412->commit();
    }

    public function rollback()
    {
        $this->initializer9ce39 && ($this->initializer9ce39->__invoke($valueHolder54412, $this, 'rollback', array(), $this->initializer9ce39) || 1) && $this->valueHolder54412 = $valueHolder54412;

        return $this->valueHolder54412->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer9ce39 && ($this->initializer9ce39->__invoke($valueHolder54412, $this, 'getClassMetadata', array('className' => $className), $this->initializer9ce39) || 1) && $this->valueHolder54412 = $valueHolder54412;

        return $this->valueHolder54412->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer9ce39 && ($this->initializer9ce39->__invoke($valueHolder54412, $this, 'createQuery', array('dql' => $dql), $this->initializer9ce39) || 1) && $this->valueHolder54412 = $valueHolder54412;

        return $this->valueHolder54412->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer9ce39 && ($this->initializer9ce39->__invoke($valueHolder54412, $this, 'createNamedQuery', array('name' => $name), $this->initializer9ce39) || 1) && $this->valueHolder54412 = $valueHolder54412;

        return $this->valueHolder54412->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer9ce39 && ($this->initializer9ce39->__invoke($valueHolder54412, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer9ce39) || 1) && $this->valueHolder54412 = $valueHolder54412;

        return $this->valueHolder54412->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer9ce39 && ($this->initializer9ce39->__invoke($valueHolder54412, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer9ce39) || 1) && $this->valueHolder54412 = $valueHolder54412;

        return $this->valueHolder54412->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer9ce39 && ($this->initializer9ce39->__invoke($valueHolder54412, $this, 'createQueryBuilder', array(), $this->initializer9ce39) || 1) && $this->valueHolder54412 = $valueHolder54412;

        return $this->valueHolder54412->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer9ce39 && ($this->initializer9ce39->__invoke($valueHolder54412, $this, 'flush', array('entity' => $entity), $this->initializer9ce39) || 1) && $this->valueHolder54412 = $valueHolder54412;

        return $this->valueHolder54412->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer9ce39 && ($this->initializer9ce39->__invoke($valueHolder54412, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9ce39) || 1) && $this->valueHolder54412 = $valueHolder54412;

        return $this->valueHolder54412->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer9ce39 && ($this->initializer9ce39->__invoke($valueHolder54412, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer9ce39) || 1) && $this->valueHolder54412 = $valueHolder54412;

        return $this->valueHolder54412->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer9ce39 && ($this->initializer9ce39->__invoke($valueHolder54412, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer9ce39) || 1) && $this->valueHolder54412 = $valueHolder54412;

        return $this->valueHolder54412->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer9ce39 && ($this->initializer9ce39->__invoke($valueHolder54412, $this, 'clear', array('entityName' => $entityName), $this->initializer9ce39) || 1) && $this->valueHolder54412 = $valueHolder54412;

        return $this->valueHolder54412->clear($entityName);
    }

    public function close()
    {
        $this->initializer9ce39 && ($this->initializer9ce39->__invoke($valueHolder54412, $this, 'close', array(), $this->initializer9ce39) || 1) && $this->valueHolder54412 = $valueHolder54412;

        return $this->valueHolder54412->close();
    }

    public function persist($entity)
    {
        $this->initializer9ce39 && ($this->initializer9ce39->__invoke($valueHolder54412, $this, 'persist', array('entity' => $entity), $this->initializer9ce39) || 1) && $this->valueHolder54412 = $valueHolder54412;

        return $this->valueHolder54412->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer9ce39 && ($this->initializer9ce39->__invoke($valueHolder54412, $this, 'remove', array('entity' => $entity), $this->initializer9ce39) || 1) && $this->valueHolder54412 = $valueHolder54412;

        return $this->valueHolder54412->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer9ce39 && ($this->initializer9ce39->__invoke($valueHolder54412, $this, 'refresh', array('entity' => $entity), $this->initializer9ce39) || 1) && $this->valueHolder54412 = $valueHolder54412;

        return $this->valueHolder54412->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer9ce39 && ($this->initializer9ce39->__invoke($valueHolder54412, $this, 'detach', array('entity' => $entity), $this->initializer9ce39) || 1) && $this->valueHolder54412 = $valueHolder54412;

        return $this->valueHolder54412->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer9ce39 && ($this->initializer9ce39->__invoke($valueHolder54412, $this, 'merge', array('entity' => $entity), $this->initializer9ce39) || 1) && $this->valueHolder54412 = $valueHolder54412;

        return $this->valueHolder54412->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer9ce39 && ($this->initializer9ce39->__invoke($valueHolder54412, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer9ce39) || 1) && $this->valueHolder54412 = $valueHolder54412;

        return $this->valueHolder54412->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer9ce39 && ($this->initializer9ce39->__invoke($valueHolder54412, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9ce39) || 1) && $this->valueHolder54412 = $valueHolder54412;

        return $this->valueHolder54412->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer9ce39 && ($this->initializer9ce39->__invoke($valueHolder54412, $this, 'getRepository', array('entityName' => $entityName), $this->initializer9ce39) || 1) && $this->valueHolder54412 = $valueHolder54412;

        return $this->valueHolder54412->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer9ce39 && ($this->initializer9ce39->__invoke($valueHolder54412, $this, 'contains', array('entity' => $entity), $this->initializer9ce39) || 1) && $this->valueHolder54412 = $valueHolder54412;

        return $this->valueHolder54412->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer9ce39 && ($this->initializer9ce39->__invoke($valueHolder54412, $this, 'getEventManager', array(), $this->initializer9ce39) || 1) && $this->valueHolder54412 = $valueHolder54412;

        return $this->valueHolder54412->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer9ce39 && ($this->initializer9ce39->__invoke($valueHolder54412, $this, 'getConfiguration', array(), $this->initializer9ce39) || 1) && $this->valueHolder54412 = $valueHolder54412;

        return $this->valueHolder54412->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer9ce39 && ($this->initializer9ce39->__invoke($valueHolder54412, $this, 'isOpen', array(), $this->initializer9ce39) || 1) && $this->valueHolder54412 = $valueHolder54412;

        return $this->valueHolder54412->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer9ce39 && ($this->initializer9ce39->__invoke($valueHolder54412, $this, 'getUnitOfWork', array(), $this->initializer9ce39) || 1) && $this->valueHolder54412 = $valueHolder54412;

        return $this->valueHolder54412->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer9ce39 && ($this->initializer9ce39->__invoke($valueHolder54412, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9ce39) || 1) && $this->valueHolder54412 = $valueHolder54412;

        return $this->valueHolder54412->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer9ce39 && ($this->initializer9ce39->__invoke($valueHolder54412, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9ce39) || 1) && $this->valueHolder54412 = $valueHolder54412;

        return $this->valueHolder54412->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer9ce39 && ($this->initializer9ce39->__invoke($valueHolder54412, $this, 'getProxyFactory', array(), $this->initializer9ce39) || 1) && $this->valueHolder54412 = $valueHolder54412;

        return $this->valueHolder54412->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer9ce39 && ($this->initializer9ce39->__invoke($valueHolder54412, $this, 'initializeObject', array('obj' => $obj), $this->initializer9ce39) || 1) && $this->valueHolder54412 = $valueHolder54412;

        return $this->valueHolder54412->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer9ce39 && ($this->initializer9ce39->__invoke($valueHolder54412, $this, 'getFilters', array(), $this->initializer9ce39) || 1) && $this->valueHolder54412 = $valueHolder54412;

        return $this->valueHolder54412->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer9ce39 && ($this->initializer9ce39->__invoke($valueHolder54412, $this, 'isFiltersStateClean', array(), $this->initializer9ce39) || 1) && $this->valueHolder54412 = $valueHolder54412;

        return $this->valueHolder54412->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer9ce39 && ($this->initializer9ce39->__invoke($valueHolder54412, $this, 'hasFilters', array(), $this->initializer9ce39) || 1) && $this->valueHolder54412 = $valueHolder54412;

        return $this->valueHolder54412->hasFilters();
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

        $instance->initializer9ce39 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder54412) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder54412 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder54412->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer9ce39 && ($this->initializer9ce39->__invoke($valueHolder54412, $this, '__get', ['name' => $name], $this->initializer9ce39) || 1) && $this->valueHolder54412 = $valueHolder54412;

        if (isset(self::$publicProperties166f1[$name])) {
            return $this->valueHolder54412->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder54412;

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

        $targetObject = $this->valueHolder54412;
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
        $this->initializer9ce39 && ($this->initializer9ce39->__invoke($valueHolder54412, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer9ce39) || 1) && $this->valueHolder54412 = $valueHolder54412;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder54412;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder54412;
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
        $this->initializer9ce39 && ($this->initializer9ce39->__invoke($valueHolder54412, $this, '__isset', array('name' => $name), $this->initializer9ce39) || 1) && $this->valueHolder54412 = $valueHolder54412;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder54412;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder54412;
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
        $this->initializer9ce39 && ($this->initializer9ce39->__invoke($valueHolder54412, $this, '__unset', array('name' => $name), $this->initializer9ce39) || 1) && $this->valueHolder54412 = $valueHolder54412;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder54412;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder54412;
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
        $this->initializer9ce39 && ($this->initializer9ce39->__invoke($valueHolder54412, $this, '__clone', array(), $this->initializer9ce39) || 1) && $this->valueHolder54412 = $valueHolder54412;

        $this->valueHolder54412 = clone $this->valueHolder54412;
    }

    public function __sleep()
    {
        $this->initializer9ce39 && ($this->initializer9ce39->__invoke($valueHolder54412, $this, '__sleep', array(), $this->initializer9ce39) || 1) && $this->valueHolder54412 = $valueHolder54412;

        return array('valueHolder54412');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer9ce39 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer9ce39;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer9ce39 && ($this->initializer9ce39->__invoke($valueHolder54412, $this, 'initializeProxy', array(), $this->initializer9ce39) || 1) && $this->valueHolder54412 = $valueHolder54412;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder54412;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder54412;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
