<?php
class Database
{
    protected $connection = null;

    public function __construct()
    {

        try {
            // connect to your database
            $this->connection = new SQlite3 ("test.db");
        }
        catch (Exception $exception) {
            // sqlite3 throws an exception when it is unable to connect
            echo '<p>There was an error connecting to the database!</p>';
            echo $exception->getMessage();

        }
    }

    public function select($query = "" , $params = [])
    {
        try {
            $stmt = $this->executeStatement( $query , $params );
            $data = array();
            $exec = $stmt->execute();

            while ($res= $exec->fetchArray(1))
            {
                array_push($data, $res);

            }
            $stmt->close();

            return $data;
        } catch(Exception $e) {
            throw New Exception( $e->getMessage() );
        }
        return false;
    }

    private function executeStatement($query = "" , $params = [])
    {
        try {
            $stmt = $this->connection->prepare( $query );

            if($stmt === false) {
                throw New Exception("Unable to do prepared statement: " . $query);
            }

            if( $params ) {
                $stmt->bind_param(...$params);
            }

            $stmt->execute();

            return $stmt;
        } catch(Exception $e) {
            throw New Exception( $e->getMessage() );
        }
    }
}