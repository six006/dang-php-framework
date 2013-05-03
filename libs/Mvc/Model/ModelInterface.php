<?php

interface Mvc_Model_ModelInterface
{
    public function getVariable($name, $default = null);

    public function setVariable($name, $value);

    public function setVariables($variables);

    public function getVariables();
}
