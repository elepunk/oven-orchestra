<?php namespace Component\(namespaces)\Processor;

use Illuminate\Support\Facades\App;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Orchestra\Foundation\Processor\AbstractableProcessor;
use Component\(namespaces)\Validator\(entity) as (entity)Validator;
use Component\(namespaces)\Presenter\(entity) as (entity)Presenter;

class (entity) extends AbstractableProcessor {

    /**
     * [__construct description]
     * @param StaffPresenter $presenter [description]
     * @param StaffValidator $validator [description]
     */
    public function __construct((entity)Presenter $presenter, (entity)Validator $validator)
    {
        $this->presenter = $presenter;
        $this->validator = $validator;
    }

    /**
     * [index description]
     * @param  [type] $listener [description]
     * @return [type]           [description]
     */
    public function index($listener)
    {

    }

    /**
     * [index description]
     * @param  [type] $listener [description]
     * @return [type]           [description]
     */
    public function show($listener, $(instance)Id)
    {
        
    }

    /**
     * [create description]
     * @return [type] [description]
     */
    public function create($listener)
    {

    }

    /**
     * [store description]
     * @return [type] [description]
     */
    public function store($listener, array $inputs)
    {

    }

    /**
     * [edit description]
     * @return [type] [description]
     */
    public function edit($listener, $(instance)Id)
    {

    }

    /**
     * [update description]
     * @return [type] [description]
     */
    public function update($listener, array $inputs)
    {

    }

    /**
     * [destroy description]
     * @return [type] [description]
     */
    public function destroy($listener, $(instance)Id)
    {
        
    }

}
