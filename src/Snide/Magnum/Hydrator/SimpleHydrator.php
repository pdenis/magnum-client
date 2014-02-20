<?php

/*
 * This file is part of the Snide magnum-client package.
 *
 * (c) Pascal DENIS <pascal.denis.75@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Snide\Magnum\Hydrator;

/**
 * Class SimpleHydrator
 *
 * @author Pascal DENIS <pascal.denis.75@gmail.com>
 */
class SimpleHydrator
{
    /**
     * Hydrate object from data array using object setter methods
     *
     * @param  mixed $object Object to hydrate
     * @param  array $data Data
     * @return mixed
     */
    public function hydrate($object, $data)
    {
        if (is_array($data)) {
            foreach ($data as $key => $value) {
                // Check setMethod
                if (!$this->callSetter($object, $this->toCamelCase($key), $value)) {
                 // If no setter is defined, we reinject into array
                    $data[$key] = $value; // Change data with subObject
                }
            }
        }

        return $object;
    }

    /**
     * Transform "_" var to camelCase
     *
     * @param string $key Key to transform
     * @return string The new key
     */
    public function toCamelCase($key)
    {
        $regexp = '#_(.)#';
        return preg_replace_callback(
            $regexp,
            create_function(
                '$matches',
                'return strtoupper($matches[1]);'
            ),
            $key
        );
    }

    /**
     * Call object set method for a key and pass value
     *
     * @param mixed $object An object
     * @param string $key A key (setKey)
     * @param mixed $value A value (setKey(value))
     * @return bool IF set method exist
     */
    public function callSetter(&$object, $key, $value)
    {
        $method = 'set' . ucfirst($key);
        if (method_exists($object, $method)) {
            $object->$method($value);

            return true;
        }

        return false;
    }
}
