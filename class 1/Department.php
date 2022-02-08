<?php
        
       
<?php
        
        class department 
        {
            public $name;
            public $id;
            public $names=array();
            public $ids=array();
            public $sz=0;
            public $i;
            public $one=1;
        
        

            function set_name($name)
            {
                $this->name= $name;
                
            
                array_push( $this->names,$name,);
            
                

            }
            function set_id($id)
            {
                
                $this->id= $id;
            
                array_push( $this->ids,$id);
            
                

            }

            function show_array()
            {
                
            
                foreach($this->names as $n){
                    echo $n . " ";
                    
                }
                echo "<br>";
                
                foreach($this->ids as $i){
                    echo $i . "   ";


                    echo("&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp");
                    
                }
                
                
            
            }
        
        }

        $dep = new department;
        $dep->set_name('pritom');
        $dep->set_id(6);
        $dep->set_name('lol');
        $dep->set_id(7);
        $dep->show_array();




?>