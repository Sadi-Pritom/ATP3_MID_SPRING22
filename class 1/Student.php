<?php
        
        class student 
        {
            public $name;
            public $id;
            
        

            function set_name($name)
            {
                $this->name= $name;
                
            
               
            
                

            }
            function set_id($id)
            {
                
                $this->id= $id;
            
               
            
                

            }

           
        
        }

        $st = new student();
        $st->set_name('pritom');
        $st->set_id(6);
        $st->set_name('lol');
        $st->set_id(7);
        $st->show_array();




?>