<?php namespace Component\(namespaces)\Controller;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Orchestra\Foundation\Routing\BaseController;
use Component\(namespaces)\Processor\(entity) as (entity)Processor;

class (entity)Controller extends BaseController {

    public function __construct((entity)Processor $processor)
    {
        $this->processor = $processor;

        parent::__construct();
    }

    protected function setupFilters()
    {
        //Filters
    }

    public function index()
    {

    }

    public function indexSucceed()
    {

    }

    public function show($(instance)Id)
    {

    }

    public function showSucceed()
    {
        
    }

    public function create()
    {

    }

    public function createSucceed()
    {
        
    }

    public function store()
    {
        
    }

    public function storeValidatorFailed($validator)
    {
        
    }

    public function storeSucceed()
    {
        
    }

    public function edit($(instance)Id)
    {
        
    }

    public function editSucceed()
    {
        
    }

    public function update()
    {
        
    }

    public function updateValidatorFailed($validator)
    {
        
    }

    public function updateSucceed($validator)
    {
        
    }

    public function destroy($(instance)Id)
    {

    }

    public function destroySucceed()
    {

    }

}
