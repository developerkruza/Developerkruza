<?

include("core.php");
//This file is responsible for interfaces that represents core functionality

interface CoreUI {
    public function UISelectTable();
}





class Deribum implements CoreUI {
    public function UISelectTable() {
        $core = new Core();
        $core->CoreSelectTable("table");
    }
}




?>