 <?php
    function dd($data){
        echo "<pre>";
        die(var_dump($data));
    }
    function printr($data){
        echo "<pre>";
        print_r($data);
    }
    function view($name,$data = [])
    {
        // $data mr [ "users" => $data] pr lr ml
        // extract() ka $user = $data so p extract loat py dl
        extract($data);
        

        return require "view/$name.view.php";
    }
    function request($name)
    {
        if($_SERVER['REQUEST_METHOD'] === "POST")
        {
            return $_POST[$name];
        }
        
        if($_SERVER['REQUEST_METHOD'] === "GET")
        {
            return $_GET[$name];
        }
    }
    function redirect($uri)
    {
        header("Location:$uri");
    }
    function dbDataUpdate($pdo,$updData,$existId){
        $statement = $pdo->prepare("update tasks set description='$updData' where id=$existId");
        $statement->execute();
        // return $statement;
    }
?> 



