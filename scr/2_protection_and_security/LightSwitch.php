<?php

class LightSwitch
{
    public function on()
    {
        $this->connect();
        $this->activate();
    }

    public function off()
    {
        $this->deactivate();
        $this->disconnect();
    }

    private function connect()
    {

    }

    private function activate()
    {

    }

    private function disconnect()
    {

    }

    private function deactivate()
    {

    }
}

$lightSwitch = new LightSwitch();
$lightSwitch->on();
$lightSwitch->off();
