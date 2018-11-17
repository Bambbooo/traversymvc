<?php
/**
 *
 * Base Controller
 * Loads the models and views
 */

class Controller
{
    // Load Model
    public function model($model){
        // Require model file
        require_once '../app/models/' . $model . '.php';

        // Instatiate model
        // Like return new User;
        return new $model;
    }
}