<?php
/**
 * Created by PhpStorm.
 * User: 13entley
 * Date: 6/5/17
 * Time: 10:49 PM
 */


class imdb
{
    public $imdb;

    public static function getImdbId(){
        // connect to the db
        // database class does that for us

        // prepare the query string
        $query = "
            SELECT *
            FROM `imdb_movie`
            WHERE imdb_id
        ";

        // run the query -> get a statement
        $statement = database::query($query);

        // tell PDO to fetch objects of class game instead of
        //   associative arrays
        $statement->setFetchMode(PDO::FETCH_CLASS, 'imdb_id');

        // fetch an array of specified objects
        $imdbs = $statement->fetchAll();

        return $imdbs;

    }




}