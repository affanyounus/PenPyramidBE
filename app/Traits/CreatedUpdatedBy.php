<?php

namespace App\Traits;

trait CreatedUpdatedBy
{
    public static function bootCreatedUpdatedBy(){

        $auth_id =  auth()->check() ? auth()->user()->id : 0;

        static::creating(function ($model) use($auth_id){
           if(!$model->isDirty('created_by')){
               $model->created_by = $auth_id;
           }

           if(!$model->isDirty('updated_by')){
               $model->updated_by = $auth_id;
           }

        });

        static::updating(function($model) use($auth_id){
           if(!$model->isDirty('updated_by')){
               $model->updated_by = $auth_id;
           }
        });


    }

}
