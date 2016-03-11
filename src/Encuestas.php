<?php
namespace Asimov\Solaria\Modules\Encuestas;

use Solaria\Modules\SolariaModule;

class Encuestas implements SolariaModule {

    protected $name = 'Encuestas';

    protected $menu_name = 'Encuestas';

    public function getName() {
        return $this->name;
    }

    public function getMenuName() {
        return $this->menu_name;
    }

    public function getBackendMenuUrl() {
        return url('backend/modules/encuestas');
    }

    public function getBackendStyles() {
        return [asset('modules/encuestas/css/encuestas-module.css')];
    }

    public function getFrontendStyles() {
        // TODO: Implement getFrontendStyles() method.
    }

    public function getBackendScripts() {
        return [asset('modules/encuestas/js/encuestas-module.js')];
    }

    public function getFrontendScripts() {
        // TODO: Implement getFrontendScripts() method.
    }

    public function getCustomFields() {
        // TODO: Implement getCustomFields() method.
    }

    public function render(){
        // TODO: Implement render() method.
    }
}