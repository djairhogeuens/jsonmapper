<?php
class JsonMapperTest_DependencyInjector extends JsonMapper
{
    /**
     * Create a new object of the given type.
     *
     * This method exists to be overwritten in child classes,
     * so you can do dependency injection or so.
     *
     * @param $class        Class name to instantiate
     * @param $useParameter Pass $parameter to the constructor or not
     * @param $parameter    Constructor parameter
     *
     * @return object Freshly created object
     */
    public function createInstance(
        string $class, bool $useParameter = false, mixed $parameter = null
    ): object {
        $object = parent::createInstance($class, $useParameter, $parameter);

        //dummy dependency injection
        $object->db = 'database';

        return $object;
    }
}
?>
